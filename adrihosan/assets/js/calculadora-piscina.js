
(function(){
  var $ = function(id){ return document.getElementById(id); };
  var form = $("cap-form");

  function num(id){ var v = parseFloat($(id).value); return isFinite(v) ? v : 0; }
  function pick(name){ var el = form.querySelector('input[name="'+name+'"]:checked'); return el ? el.value : ""; }
  function m3(v){ return v.toLocaleString("es-ES",{maximumFractionDigits:1}) + " m³"; }
  function m2(v){ return v.toLocaleString("es-ES",{maximumFractionDigits:1}) + " m²"; }
  function ml(v){ return v.toLocaleString("es-ES",{maximumFractionDigits:1}) + " ml"; }
  function dec(v,d){ return v.toLocaleString("es-ES",{minimumFractionDigits:d===undefined?2:d,maximumFractionDigits:d===undefined?2:d}); }


  // ---------------------------------------------------------------
  // Catálogo: se lee de catalogo-piscina.json, que genera
  // generar-catalogo.py leyendo la tienda en vivo (Store API pública).
  // Aquí NO hay ningún producto escrito a mano: lo que se dé de alta o de
  // baja en adrihosan.com aparece o desaparece al regenerar el JSON.
  // En la versión de producción, este mismo JSON lo produce el PHP del tema
  // contra WooCommerce, sin fichero intermedio.
  // ---------------------------------------------------------------
  // El add-to-cart de WooCommerce por URL: admite decimales y el importe que
  // deja en el carrito cuadra al céntimo con el de la tarjeta (probado el
  // 28-ago-2026 con 75,46 m² del Clásico Alaska -> 1.199,81 €).
  var TIENDA = (window.CAP_DATA && window.CAP_DATA.inicio) || "https://www.adrihosan.com/";
  var CATALOGO = null;     // se rellena al cargar
  var TOPE = 8;            // tarjetas por bloque; el resto se resume

  function eur(v){ return v.toLocaleString("es-ES",{minimumFractionDigits:2,maximumFractionDigits:2}) + " €"; }

  // Los precios del catalogo son SIN IVA: cada cifra que se pinta lo dice al
  // lado, en pequeno, para que nadie presupueste con el numero equivocado.
  var IVA = ' <i class="siva">+ IVA</i>';

  // Descuento por palet: la tienda lo aplica sola en el carrito a partir de
  // cierta cantidad. Si la tarjeta no lo enseña, el precio de aquí es MÁS CARO
  // que el que se va a pagar. Comprobado el 28-ago-2026: 76,32 m² de Sagano
  // grey salen a 1.518,77 € por catálogo y a 1.215,01 € en el carrito.
  function conPalet(prod, cantidad, bruto){
    if (!prod.dto || cantidad < prod.dto[0]){
      return {total: bruto, bruto: bruto, pct: 0, ahorro: 0};
    }
    var ahorro = bruto * prod.dto[1] / 100;
    return {total: bruto - ahorro, bruto: bruto, pct: prod.dto[1], ahorro: ahorro};
  }

  // Una tarjeta de material. Todo lo que se sirve en cajas redondea hacia arriba.
  function tarjeta(prod, datos, tier){
    var lineas = datos.lineas.map(function(l){
      return '<span class="cline"><span>' + l[0] + '</span><span>' + l[1] + '</span></span>';
    }).join("");
    return '<article class="card" data-tier="' + (tier || "") + '"' + (prod.top ? ' data-top="1"' : '') + '>' +
      '<div class="cbadge"><span>' + datos.etiqueta + '</span><span class="unit">' +
        (prod.var ? 'desde ' : '') + datos.unitario + '</span></div>' +
      (prod.img ? '<div class="shot"><img src="' + prod.img + '" alt="" loading="lazy"></div>' : '') +
      '<div class="cbody">' +
        '<a class="cname" href="' + prod.url + '" target="_blank" rel="noopener">' + prod.n + '</a>' +
        '<div class="clines">' + lineas + '</div>' +
      '</div>' +
      '<div class="cfoot">' +
        '<span class="cprice"><b>' + eur(datos.total) + IVA + '</b><small>' +
          (datos.pct ? '<s>' + eur(datos.bruto) + '</s> · ' + datos.pct + '% de palet' : datos.pie) +
        '</small></span>' +
        '<span class="cbtns">' +
          /* Con variantes (color) el add-to-cart por URL no añade nada: Woo
             necesita la variación. Se manda a la ficha a elegir. */
          (prod.var
            ? '<a class="cbuy" href="' + prod.url + '" target="_blank" rel="noopener">Elegir color</a>'
            : '<a class="cbuy" href="' + TIENDA + '?add-to-cart=' + prod.id + '&quantity=' + datos.cantidad +
                '" data-id="' + prod.id + '" data-qty="' + datos.cantidad + '">' + datos.botonTexto + '</a>' +
              '<a class="cgo" href="' + prod.url + '" target="_blank" rel="noopener">Ver</a>') +
        '</span>' +
      '</div>' +
    '</article>';
  }

  // Cabecera de cada grupo. El número ordena la lectura (1-2-3) y la cifra
  // clave va en su propia chapa: es el dato que viene buscando quien calcula,
  // y en gris de 14px se perdía entre las tarjetas.
  function cabeceraHTML(cab){
    return '<header class="ghead">' +
        '<span class="gnum">' + cab.num + '</span>' +
        '<h3>' + cab.titulo + '</h3>' +
        (cab.clave ? '<span class="gkey">' + cab.clave + '</span>' : '') +
      '</header>' +
      (cab.sub ? '<p class="gsub">' + cab.sub + '</p>' : '');
  }

  function bloqueHTML(lista, cab, hacerDatos, criterio) {
    if (!lista.length){
      return cabeceraHTML(cab) + '<div class="cards"><p class="vacio-mat">' +
        'Ahora mismo no hay ninguna referencia de este tipo disponible en la tienda.</p></div>';
    }
    var vistas = lista.slice(0, TOPE);
    var cards = vistas.map(function(prod, i){
      return tarjeta(prod, hacerDatos(prod, i), i === 0 ? "mejor" : "");
    }).join("");
    var resto = lista.length - vistas.length;
    var pie = resto > 0
      ? '<p class="gsub" style="margin-top:14px">Se enseñan ' + (criterio || TOPE + " de ellas") +
        '. Hay ' + resto + ' referencia' + (resto === 1 ? '' : 's') + ' más en la tienda para este uso.</p>'
      : '';
    return cabeceraHTML(cab) + '<div class="cards">' + cards + '</div>' + pie;
  }

  function pintarMateriales(revestir, corML, playaM2, playaDicha, merma){
    if (!CATALOGO){ return; }
    $("cap-fecha-cat").textContent = "catálogo de la tienda · " + CATALOGO.generado;
    var pct = Math.round(merma * 100);

    // --- revestimiento del vaso: se sirve en cajas enteras
    $("cap-mat-vaso").innerHTML = bloqueHTML(
      CATALOGO.vaso,
      {num: 1, titulo: "Revestimiento del vaso",
       clave: dec(revestir,1) + " m²",
       sub: 'Fondo y paredes suman ' + dec(revestir/(1+merma),1) + ' m². Con el ' + pct +
            '% de cortes, hay que comprar ' + dec(revestir,1) + ' m².'},
      function(prod, i){
        var cajas = Math.ceil(revestir / prod.m2cj);
        var m2ped = cajas * prod.m2cj;
        var pr = conPalet(prod, m2ped, m2ped * prod.p);
        var lineas = [["Necesarios", dec(revestir,1) + " m²"],
                      ["Cajas de " + dec(prod.m2cj,2) + " m²", cajas],
                      ["Se piden", dec(m2ped,2) + " m²"]];
        if (pr.pct){ lineas.push(["Descuento de palet", "− " + eur(pr.ahorro)]); }
        return {
          // Las series recomendadas van delante, así que la primera tarjeta
          // no tiene por qué ser la más barata.
          etiqueta: prod.top ? "el más vendido" : (prod.prio ? "recomendada" : "revestimiento"),
          unitario: eur(prod.p) + "/m²" + IVA,
          lineas: lineas,
          total: pr.total, bruto: pr.bruto, pct: pr.pct,
          pie: "material del vaso",
          cantidad: m2ped.toFixed(2),
          botonTexto: "Añadir " + dec(m2ped,2) + " m²"
        };
      },
      "las recomendadas repartidas entre las de piscina");

    // --- coronación: se vende por pieza de N metros lineales
    $("cap-mat-corona").innerHTML = bloqueHTML(
      CATALOGO.corona,
      {num: 2, titulo: "Coronación",
       clave: dec(corML,1) + " ml",
       sub: 'El borde que remata el vaso por arriba. Se compra por piezas enteras.'},
      function(prod, i){
        var piezas = Math.ceil(corML / prod.mlud);
        var pr = conPalet(prod, piezas, piezas * prod.p);
        var lineas = [["Borde", dec(corML,1) + " ml"],
                      ["Piezas de " + dec(prod.mlud,1) + " ml", piezas],
                      ["Precio por pieza", eur(prod.p) + IVA]];
        if (pr.pct){ lineas.push(["Descuento de palet", "− " + eur(pr.ahorro)]); }
        return {
          etiqueta: "coronación",
          unitario: eur(prod.p / prod.mlud) + "/ml" + IVA,
          lineas: lineas,
          total: pr.total, bruto: pr.bruto, pct: pr.pct,
          pie: "borde del vaso",
          cantidad: piezas,
          botonTexto: "Añadir " + piezas + (piezas === 1 ? " pieza" : " piezas")
        };
      });

    // --- playa perimetral (opcional)
    if (!(playaM2 > 0)){
      $("cap-mat-playa").innerHTML = cabeceraHTML({num: 3, titulo: "Playa", clave: "",
          sub: 'El suelo antideslizante que rodea la piscina.'}) +
        '<div class="cards"><p class="vacio-mat">Escribe arriba los metros de playa que se van a revestir alrededor de la piscina para ver también el pavimento antideslizante.</p></div>';
      return;
    }
    $("cap-mat-playa").innerHTML = bloqueHTML(
      CATALOGO.playa,
      {num: 3, titulo: "Playa",
       clave: dec(playaM2,1) + " m²",
       sub: 'Has dicho ' + dec(playaDicha,1) + ' m² alrededor de la piscina. Con el ' + pct +
            '% de cortes, hay que comprar ' + dec(playaM2,1) + ' m².'},
      function(prod, i){
        var cajas = Math.ceil(playaM2 / prod.m2cj);
        var m2ped = cajas * prod.m2cj;
        var pr = conPalet(prod, m2ped, m2ped * prod.p);
        var lineas = [["Necesarios", dec(playaM2,1) + " m²"],
                      ["Cajas de " + dec(prod.m2cj,2) + " m²", cajas],
                      ["Se piden", dec(m2ped,2) + " m²"]];
        if (pr.pct){ lineas.push(["Descuento de palet", "− " + eur(pr.ahorro)]); }
        return {
          // La playa no va ordenada por precio: delante van las series
          // destacadas, así que la primera tarjeta no es la más barata.
          etiqueta: prod.top ? "el más vendido" : (prod.prio ? "recomendada" : "antideslizante"),
          unitario: eur(prod.p) + "/m²" + IVA,
          lineas: lineas,
          total: pr.total, bruto: pr.bruto, pct: pr.pct,
          pie: "suelo de playa",
          cantidad: m2ped.toFixed(2),
          botonTexto: "Añadir " + dec(m2ped,2) + " m²"
        };
      },
      "las series Sagano, Bonvoy y Aspen primero");
  }

  function geometria(){
    var forma = pick("forma"), g = {forma:forma};
    if (forma === "rect"){
      g.L = num("cap-largo"); g.A = num("cap-ancho");
      g.lamina = g.L * g.A;
      g.perim  = 2 * (g.L + g.A);
      g.mayor  = g.L;
      g.formula = g.L + " × " + g.A;
    } else if (forma === "redonda"){
      var D = num("cap-diam");
      g.L = D; g.A = D;
      g.lamina = Math.PI * D * D / 4;
      g.perim  = Math.PI * D;
      g.mayor  = D;
      g.formula = "π × " + D + "² / 4";
    } else if (forma === "ovalada"){
      g.L = num("cap-largo"); g.A = num("cap-ancho");
      g.lamina = Math.PI * g.L * g.A / 4;
      g.perim  = perimElipse(g.L/2, g.A/2);
      g.mayor  = g.L;
      g.formula = "π × " + g.L + " × " + g.A + " / 4";
    } else {
      g.lamina = num("cap-lamina");
      g.perim  = num("cap-perim");
      g.mayor  = num("cap-mayor");
      g.L = g.mayor; g.A = g.lamina / (g.mayor || 1);
      g.formula = "introducida a mano";
    }
    return g;
  }

  function calcular(){
    var forma = pick("forma");
    // que campos se ven segun la forma
    $("cap-g-rect").classList.toggle("hidden", !(forma === "rect" || forma === "ovalada"));
    $("cap-g-redonda").classList.toggle("hidden", forma !== "redonda");
    $("cap-g-libre").classList.toggle("hidden", forma !== "libre");

    var rampa = pick("fondo") === "rampa";
    $("cap-f-pmax").classList.toggle("hidden", !rampa);
    $("cap-lb-pmin").textContent = rampa ? "Profundidad mínima" : "Profundidad";

    // el sistema constructivo empuja los espesores por defecto
    var g = geometria();
    var pmin = num("cap-pmin");
    var pmax = rampa ? num("cap-pmax") : pmin;
    if (pmax < pmin){ pmax = pmin; }
    var pm = (pmin + pmax) / 2;
    var delta = pmax - pmin;

    var eMuro   = num("cap-emuro");
    var eSolera = num("cap-esolera");
    var sobre   = num("cap-sobre");
    var zahorra = num("cap-zahorra");
    var capCuba = num("cap-cuba") || 8;
    var esponj  = num("cap-esponj") / 100;
    var merma   = parseFloat(pick("merma")) / 100;
    var wCorona = num("cap-corona");
    // La playa la dice el cliente en m²: es como llega el dato en la tienda,
    // y una piscina real no lleva un anillo regular alrededor.
    var playaDicha = num("cap-playa");

    var rectangular = (forma === "rect");

    // Sin medidas utiles no se inventa nada: la calculadora se calla.
    if (!(g.lamina > 0) || !(g.perim > 0) || !(pm > 0)){
      ["cap-r-agua"].forEach(function(id){ $(id).textContent = "—"; });
      $("cap-r-agua-l").textContent = "Faltan medidas por rellenar";
      ["cap-r-exc","cap-r-hor","cap-r-rev","cap-r-cor"].forEach(function(id){ $(id).firstChild.nodeValue = "—"; });
      $("cap-r-exc-s").textContent = "a retirar";
      $("cap-r-hor-s").textContent = "solera + muros";
      $("cap-r-rev-s").textContent = "con merma";
      $("cap-r-cor-s").textContent = "borde";
      ["cap-mat-vaso","cap-mat-corona","cap-mat-playa"].forEach(function(id){ $(id).innerHTML = ""; });
      return;
    }

    // --- agua
    var agua = g.lamina * pm;

    // --- superficie a revestir
    var factorRampa = g.mayor > 0 ? Math.sqrt(1 + Math.pow(delta / g.mayor, 2)) : 1;
    var fondo   = g.lamina * factorRampa;
    var paredes = g.perim * pm;
    var revestir = fondo + paredes;
    var revestirMerma = revestir * (1 + merma);

    // --- coronacion
    var corML = g.perim;
    var corM2 = corML * wCorona;

    // --- hormigon
    // solera: la huella del vaso ensanchada el espesor del muro (formula de Steiner)
    var areaSolera = g.lamina + g.perim * eMuro + Math.PI * eMuro * eMuro;
    var volSolera  = areaSolera * eSolera;
    // muros: longitud de la linea media del muro por la altura media por el espesor
    var longMedia  = rectangular ? (g.perim + 4 * eMuro) : (g.perim + Math.PI * eMuro);
    var volMuros   = longMedia * pm * eMuro;
    var hormigon   = volSolera + volMuros;
    var cubas      = Math.ceil(hormigon / capCuba);

    // --- excavacion
    var off = eMuro + sobre;
    var areaExc = g.lamina + g.perim * off + Math.PI * off * off;
    var profExc = pm + eSolera + zahorra;
    var excavacion = areaExc * profExc;
    var excTransporte = excavacion * (1 + esponj);

    // --- pintar
    $("cap-r-agua").textContent = m3(agua);
    $("cap-r-agua-l").textContent = Math.round(agua * 1000).toLocaleString("es-ES") + " litros · profundidad media " + dec(pm) + " m";

    $("cap-r-exc").firstChild.nodeValue = m3(excavacion);
    $("cap-r-exc-s").textContent = m3(excTransporte) + " a retirar";
    $("cap-r-hor").firstChild.nodeValue = m3(hormigon);
    $("cap-r-hor-s").textContent = cubas + (cubas === 1 ? " cuba de " : " cubas de ") + dec(capCuba,0) + " m³";
    $("cap-r-rev").firstChild.nodeValue = m2(revestirMerma);
    $("cap-r-rev-s").textContent = m2(revestir) + " + " + m2(revestirMerma - revestir) + " de cortes";
    $("cap-r-cor").firstChild.nodeValue = ml(corML);
    $("cap-r-cor-s").textContent = m2(corM2) + " de pieza";

    // --- playa: sobre los metros que indique, solo se añade la merma
    var playaM2 = playaDicha > 0 ? playaDicha * (1 + merma) : 0;

    // --- material del catálogo
    pintarMateriales(revestirMerma, corML, playaM2, playaDicha, merma);

  }

  // el sistema constructivo reescribe los espesores
  form.querySelectorAll('input[name="sistema"]').forEach(function(r){
    r.addEventListener("change", function(){
      $("cap-emuro").value   = this.dataset.muro;
      $("cap-esolera").value = this.dataset.solera;
      calcular();
    });
  });

  form.addEventListener("input", calcular);
  form.addEventListener("change", calcular);

  function estadoMaterial(mensaje){
    ["cap-mat-vaso","cap-mat-corona","cap-mat-playa"].forEach(function(id, i){
      $(id).innerHTML = i === 0 ? '<div class="cards"><p class="vacio-mat">' + mensaje + '</p></div>' : "";
    });
  }

  // ---------------------------------------------------------------
  // Añadir al carrito sin salir de la página.
  // Se usa el endpoint AJAX de WooCommerce, que respeta los decimales de los
  // m2 y aplica el descuento por palet igual que la ficha (probado el
  // 28-ago-2026: 76,32 m2 de Sagano grey -> 1.215,01 EUR con su 20%).
  // Si algo falla, el enlace sigue siendo un add-to-cart normal.
  // ---------------------------------------------------------------
  function avisar(texto){
    var caja = document.getElementById("cap-aviso-carrito");
    if (!caja){
      caja = document.createElement("div");
      caja.id = "cap-aviso-carrito";
      caja.className = "cap-toast";
      document.getElementById("cap-calc").appendChild(caja);
    }
    var url = (window.CAP_DATA && CAP_DATA.carrito) || (TIENDA + "pedido/");
    // en pestaña nueva: quien está calculando no debe perder lo que lleva hecho
    caja.innerHTML = '<span>' + texto + '</span><a href="' + url + '" target="_blank" rel="noopener">Ver el pedido</a>';
    caja.classList.add("visible");
    clearTimeout(caja._temporizador);
    caja._temporizador = setTimeout(function(){ caja.classList.remove("visible"); }, 6000);
  }

  function alCarrito(boton){
    if (boton.dataset.ocupado === "1"){ return; }
    var id = boton.getAttribute("data-id");
    var qty = boton.getAttribute("data-qty");
    if (!id || !qty){ return false; }

    var textoOriginal = boton.textContent;
    boton.dataset.ocupado = "1";
    boton.classList.add("cargando");
    boton.textContent = "Añadiendo…";

    fetch(TIENDA + "?wc-ajax=add_to_cart", {
      method: "POST",
      headers: {"Content-Type": "application/x-www-form-urlencoded"},
      body: "product_id=" + encodeURIComponent(id) + "&quantity=" + encodeURIComponent(qty),
      credentials: "same-origin"
    })
      .then(function(r){ return r.json(); })
      .then(function(d){
        if (!d || d.error){ throw new Error("woocommerce"); }
        // refrescar el carrito de la cabecera con los fragmentos que devuelve Woo
        if (d.fragments && window.jQuery){
          jQuery.each(d.fragments, function(clave, valor){
            try { jQuery(clave).replaceWith(valor); } catch(e) {}
          });
          jQuery(document.body).trigger("added_to_cart", [d.fragments, d.cart_hash]);
        }
        boton.textContent = "Añadido ✓";
        boton.classList.remove("cargando");
        boton.classList.add("hecho");
        avisar(textoOriginal.replace("Añadir", "Añadido:"));
        setTimeout(function(){
          boton.textContent = textoOriginal;
          boton.classList.remove("hecho");
          boton.dataset.ocupado = "";
        }, 2500);
      })
      .catch(function(){
        // que no se quede sin comprar: se cae al enlace de toda la vida
        boton.textContent = textoOriginal;
        boton.classList.remove("cargando");
        boton.dataset.ocupado = "";
        window.location.href = boton.href;
      });
    return true;
  }

  // delegado: las tarjetas se repintan en cada cálculo
  document.getElementById("cap-calc").addEventListener("click", function(ev){
    var boton = ev.target.closest ? ev.target.closest(".cbuy") : null;
    if (!boton || !boton.getAttribute("data-id")){ return; }  // sin id: enlace a la ficha
    if (ev.metaKey || ev.ctrlKey || ev.shiftKey){ return; }  // abrir en pestaña, si quiere
    ev.preventDefault();
    alCarrito(boton);
  });

  // El catálogo lo inyecta el PHP (WooCommerce en vivo), no hay fetch.
  CATALOGO = window.CAP_DATA || null;
  if (!CATALOGO){
    estadoMaterial("El catálogo no está disponible ahora mismo. Los metros de arriba siguen siendo válidos.");
  }

  calcular();
})();
