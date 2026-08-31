/* Calculadora de calefacción — lógica. El catálogo llega en window.CAD_DATA (ver inc/calculadora-calefaccion.php). */
(function(){
  "use strict";

  var CATALOGO = (window.CAD_DATA && window.CAD_DATA.catalogo) || [];
  if (!document.getElementById("cad-calc") || !CATALOGO.length) return;

  var BASE_URL = (window.CAD_DATA && window.CAD_DATA.base) || "/producto/";

  // Miniaturas de las fichas reales, reducidas a 128 px e incrustadas: el CSP de
  // los artifacts bloquea imagenes externas. En la web iran por su URL normal.
  var IMG = (window.CAD_DATA && window.CAD_DATA.imagenes) || {};

  var BANDAS = {
    alto: {min:70,  max:90,  etiqueta:"Muy bueno (A·B)"},
    medio:{min:90,  max:110, etiqueta:"Medio (C·D·E)"},
    bajo: {min:110, max:130, etiqueta:"Bajo (F·G)"},
    nose: {min:90,  max:115, etiqueta:"Estimación estándar"}
  };

  // Climastar NO aplica factor por estancia: medido en su calculadora, un bano de
  // 6 m2 y un salon de 15 m2 con aislamiento A-B dan los mismos 70-100 W/m2.
  // El tipo de estancia solo decide QUE producto se ofrece (radiador o toallero).
  var ESTANCIAS = {
    salon:     {f:1.00, n:"Salón"},
    dormitorio:{f:1.00, n:"Dormitorio"},
    despacho:  {f:1.00, n:"Despacho"},
    cocina:    {f:1.00, n:"Cocina"},
    pasillo:   {f:1.00, n:"Pasillo"},
    bano:      {f:1.00, n:"Baño"}
  };

  var $ = function(id){ return document.getElementById(id); };
  var eur = function(n){ return n.toFixed(2).replace(".", ",") + " €"; };
  // Precios de catalogo = sin IVA. Se dice al lado de cada cifra, en pequeno.
  var IVA = ' <i class="siva">+ IVA</i>';
  var esc = function(s){ return String(s).replace(/[&<>"]/g, function(c){
    return {"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;"}[c];
  }); };

  function unidades(tipo, soloToallero){
    var out = [];
    CATALOGO.forEach(function(p){
      if (p.tipo !== tipo) return;
      if (soloToallero && p.clase !== "toallero") return;
      if (!soloToallero && tipo !== "hibrida" && p.clase === "toallero") return;
      Object.keys(p.w).forEach(function(w){
        out.push({tipo:p.tipo, fam:p.fam, clase:p.clase, nombre:p.nombre, slug:p.slug, deMedida:p.deMedida,
                  medida:(p.medidas && p.medidas[w]) || "",
                  watt:parseInt(w,10), precio:p.w[w],
                  nominal:p.nominal || null, modula:!!p.modula, sinDelta:!!p.sinDelta});
      });
    });
    return out;
  }

  function combinar(min, max, tipo, soloToallero){
    var u = unidades(tipo, soloToallero), res = [], i, j;

    // Los hibridos modulan: no se suman, se elige el mas pequeno que cubra la punta.
    if (tipo === "hibrida") {
      return u.filter(function(x){ return x.watt >= min; })
              .sort(function(a,b){ return a.watt - b.watt; })
              .slice(0, 3)
              .map(function(x){ return {piezas:[x], total:x.watt, precio:x.precio, familias:1}; });
    }

    for (i = 0; i < u.length; i++){
      if (u[i].watt >= min && u[i].watt <= max) {
        res.push({piezas:[u[i]], total:u[i].watt, precio:u[i].precio, familias:1});
      }
    }
    for (i = 0; i < u.length; i++){
      for (j = i; j < u.length; j++){
        var t = u[i].watt + u[j].watt;
        if (t >= min && t <= max) {
          res.push({
            piezas:[u[i], u[j]], total:t, precio:u[i].precio + u[j].precio,
            familias: u[i].fam === u[j].fam ? 1 : 2
          });
        }
      }
    }

    var vistos = {};
    res.sort(function(a,b){
      if (a.total !== b.total) return a.total - b.total;
      if (a.piezas.length !== b.piezas.length) return a.piezas.length - b.piezas.length;
      return a.precio - b.precio;
    });

    var unicos = res.filter(function(c){
      var k = c.total + "|" + c.piezas.map(function(p){ return p.slug + p.watt; }).sort().join("+");
      if (vistos[k]) return false;
      vistos[k] = 1;
      return true;
    });

    if (!unicos.length) {
      // Nada encaja: se ofrece la opcion mas pequena que cubra el minimo, marcada.
      var arriba = [];
      for (i = 0; i < u.length; i++){
        if (u[i].watt >= min) arriba.push({piezas:[u[i]], total:u[i].watt, precio:u[i].precio, familias:1, fuera:true});
      }
      for (i = 0; i < u.length; i++){
        for (j = i; j < u.length; j++){
          var t2 = u[i].watt + u[j].watt;
          if (t2 >= min) arriba.push({piezas:[u[i], u[j]], total:t2, precio:u[i].precio + u[j].precio,
                                      familias: u[i].fam === u[j].fam ? 1 : 2, fuera:true});
        }
      }
      arriba.sort(function(a,b){
        if (a.total !== b.total) return a.total - b.total;
        if (a.piezas.length !== b.piezas.length) return a.piezas.length - b.piezas.length;
        return a.precio - b.precio;
      });
      return arriba.slice(0, 2);
    }

    if (unicos.length <= 3) return unicos;

    var elegidas = [unicos[0]];
    var medio = unicos[Math.floor(unicos.length / 2)];
    var famDistinta = null, k;
    for (k = 1; k < unicos.length - 1; k++){
      if (unicos[k].familias === 2) { famDistinta = unicos[k]; break; }
    }
    elegidas.push(famDistinta || medio);
    elegidas.push(unicos[unicos.length - 1]);

    var fin = [], ya = {};
    elegidas.forEach(function(c){
      var k2 = c.total + "|" + c.piezas.map(function(p){ return p.slug + p.watt; }).join("+");
      if (!ya[k2]) { ya[k2] = 1; fin.push(c); }
    });
    return fin;
  }

  function calcular(){
    var tipo = document.querySelector('#cad-calc input[name="tipo"]:checked').value;
    var estancia = document.querySelector('#cad-calc input[name="estancia"]:checked').value;
    ["electrica","hibrida","agua"].forEach(function(t){
      var n = $("cad-nota" + t.charAt(0).toUpperCase() + t.slice(1));
      if (n) n.classList.toggle("cad-on", t === tipo);
    });
    var iso = document.querySelector('#cad-calc input[name="iso"]:checked').value;
    var area = parseFloat($("cad-area").value) || 0;
    var altura = parseFloat($("cad-altura").value) || 2.5;
    var temp = parseFloat($("cad-temp").value) || 21;

    var esBano = estancia === "bano";
    $("cad-banoSub").classList.toggle("cad-hidden", !esBano);
    // En bano se elige FORMATO (toallero o radiador de pared). Los dos calientan
    // igual: el formato no cambia los vatios, solo que producto se ofrece.
    var formato = esBano ? document.querySelector('#cad-calc input[name="bano"]:checked').value : "radiador";
    var soloToallero = esBano && formato === "toallero" && tipo !== "hibrida";

    var banda = BANDAS[iso];
    var fEst = ESTANCIAS[estancia].f;
    var fTemp = 1 + (temp - 21) * 0.04;
    var fAlt = altura / 2.5;
    var mult = fEst * fTemp * fAlt;

    var min = Math.round(area * banda.min * mult / 10) * 10;
    var max = Math.round(area * banda.max * mult / 10) * 10;


    var rango = min.toLocaleString("es-ES") + " – " + max.toLocaleString("es-ES") + " W";
    $("cad-watts").textContent = rango;
    $("cad-wnote").textContent = "Rango para " + area.toLocaleString("es-ES") + " m² a " + temp + " °C, techo de " +
      String(altura).replace(".", ",") + " m.";

    $("cad-ramp").innerHTML =
      '<i style="flex:1"></i>' +
      '<i style="flex:1.7;background:var(--turq)"></i>' +
      '<i style="flex:1"></i>';
    $("cad-rampEnds").innerHTML =
      '<span>Se queda corto</span>' +
      '<span>Punto justo</span>' +
      '<span>De sobra</span>';

    $("cad-facts").innerHTML =
      '<div class="cad-fact"><dt>Estancia</dt><dd>' + ESTANCIAS[estancia].n + (esBano ? ' · ' + (formato === 'toallero' ? 'toallero' : 'radiador') : '') + '</dd></div>' +
      '<div class="cad-fact"><dt>Aislamiento</dt><dd>' + banda.etiqueta + '</dd></div>' +
      '<div class="cad-fact"><dt>Base</dt><dd>' + banda.min + '–' + banda.max + ' W/m²</dd></div>' +
      '<div class="cad-fact"><dt>Ajuste temp./altura</dt><dd>×' + mult.toFixed(2).replace(".", ",") + '</dd></div>';

    var desglose = $("cad-desglose");
    if (desglose) {
      desglose.innerHTML =
        '<div><span class="cad-op">Superficie</span><span>' + area.toLocaleString("es-ES") + ' m²</span></div>' +
        '<div><span class="cad-op">Banda por aislamiento</span><span>' + banda.min + '–' + banda.max + ' W/m²</span></div>' +
        '<div><span class="cad-op">Factor temperatura (' + temp + ' °C)</span><span>×' + fTemp.toFixed(2).replace(".", ",") + '</span></div>' +
        '<div><span class="cad-op">Factor altura (' + String(altura).replace(".", ",") + ' m)</span><span>×' + fAlt.toFixed(2).replace(".", ",") + '</span></div>' +
        '<div class="cad-tot"><span>Rango final</span><span>' + min.toLocaleString("es-ES") + '–' + max.toLocaleString("es-ES") + ' W</span></div>';
    }

    var combos = combinar(min, max, tipo, soloToallero);
    var fuera = combos.length && combos[0].fuera;
    var tiers = fuera ? ["más cercana", "alternativa"] :
                combos.length === 1 ? ["ajustada"] :
                            combos.length === 2 ? ["ajustada", "superior"] :
                ["ajustada", "equilibrada", "superior"];

    if (!combos.length) {
      $("cad-combos").innerHTML = '<div class="cad-empty">Ninguna combinación de los 12 productos cae en ' +
        min.toLocaleString("es-ES") + '–' + max.toLocaleString("es-ES") + ' W.<br>' +
        (tipo === 'hibrida' ? 'Los dos híbridos cubren hasta 2000 y 6000 W. Por debajo de eso quedan grandes para una sola estancia.' :
         soloToallero ? 'En esta rama no hay toalleros para esa potencia. Prueba con radiador.' :
                  'Prueba otra rama o cambia los metros: cada rama cubre un tramo distinto.') + '</div>';
      $("cad-count").textContent = "0 opciones";
      return;
    }

    $("cad-count").textContent = combos.length + (combos.length === 1 ? " opción" : " opciones") +
      (soloToallero ? " · toalleros" : esBano && tipo !== "hibrida" ? " · radiadores de pared" : "") +
      (tipo === "agua" ? " · a ΔT 50" : "") + (tipo === "hibrida" ? " · potencia máxima" : "");

    $("cad-combos").innerHTML = combos.map(function(c, i){
      var avisos = [];
      if (c.fuera) avisos.push("Ninguna combinación cae dentro del rango calculado: esta es la más ajustada por encima. Se pasa " +
        (c.total - max).toLocaleString("es-ES") + " W.");
      var solaPieza = c.piezas.length === 1;

      var shots = c.piezas.map(function(p){
        return '<span class="cad-shot">' + (IMG[p.slug] ? '<img src="' + IMG[p.slug] + '" alt="" loading="lazy">' : '') + '</span>';
      }).join("");

      var items = c.piezas.map(function(p, k){
        var sub = esc(p.fam) + ' · ' + (p.clase === 'toallero' ? 'toallero' : 'radiador') +
                  ' · ' + (p.modula ? 'hasta ' : '') + p.watt.toLocaleString("es-ES") + ' W' +
                  (p.medida ? ' · ' + esc(p.medida) : '') +
                  (p.nominal && p.nominal !== p.watt ? ' (' + p.nominal.toLocaleString("es-ES") + ' W nominales)' : '');
        return '<div class="cad-item">' +
          (solaPieza ? '' : '<span class="cad-n">' + (k + 1) + '</span>') +
          '<span class="cad-meta">' +
            '<a class="cad-name" href="' + BASE_URL + esc(p.slug) + '/" target="_blank" rel="noopener">' + esc(p.nombre) + '</a>' +
            '<span class="cad-sub">' + sub + '</span>' +
          '</span>' +
          (solaPieza ? '' : '<span class="cad-p">' + eur(p.precio) + IVA + '</span>') +
        '</div>';
      }).join("");

      var pie = '<div class="cad-cfoot">' +
        '<span class="cad-price"><b>' + eur(c.precio) + IVA + '</b><small>' +
          (solaPieza ? 'Precio del producto' : 'Los dos equipos juntos') + '</small></span>' +
        (solaPieza
          ? '<a class="cad-buy" href="' + BASE_URL + esc(c.piezas[0].slug) + '/" target="_blank" rel="noopener">Ver producto</a>'
          : '<span class="cad-dual">Abre cada uno en su página</span>') +
      '</div>';

      return '<article class="cad-card" data-tier="' + (c.fuera ? 'superior' : tiers[i]) + '">' +
        '<div class="cad-badge"><span class="cad-pick">' + tiers[i] + '</span>' +
        '<span class="cad-w">' + c.total.toLocaleString("es-ES") + ' W</span></div>' +
        '<div class="cad-shots">' + shots + '</div>' +
        '<div class="cad-items">' + items + '</div>' +
        pie +
        (avisos.length ? '<p class="cad-flag"><b>Ojo:</b> ' + esc(avisos[0]) + '</p>' : '') +
      '</article>';
    }).join("");
  }

  $("cad-form").addEventListener("input", calcular);
  $("cad-form").addEventListener("change", calcular);
  var interruptor = $("cad-auditToggle");
  if (interruptor) {
    interruptor.addEventListener("change", function(){
      $("cad-audit").classList.toggle("cad-hidden", !this.checked);
    });
  }

  calcular();
})();
