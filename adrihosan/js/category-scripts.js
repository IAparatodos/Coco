document.addEventListener('DOMContentLoaded', () => {

    // =========================================================================
    // SCRIPT GENERAL PARA ACORDEONES (FAQs)
    // =========================================================================
    function initAccordion(itemSelector, questionSelector, answerSelector) {
        const items = document.querySelectorAll(itemSelector);
        if (!items.length) return;

        items.forEach(item => {
            const question = item.querySelector(questionSelector);
            const answer = item.querySelector(answerSelector);

            if (question && answer) {
                question.addEventListener('click', () => {
                    const isOpen = item.classList.contains('active');

                    // Cierra todos los demás items del mismo grupo para un efecto de acordeón real
                    items.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                            const otherAnswer = otherItem.querySelector(answerSelector);
                            if (otherAnswer) {
                                otherAnswer.style.maxHeight = null;
                            }
                        }
                    });

                    // Abre o cierra el item actual
                    if (isOpen) {
                        item.classList.remove('active');
                        answer.style.maxHeight = null;
                    } else {
                        item.classList.add('active');
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                });
            }
        });
    }

    // --- Inicialización de TODOS los acordeones del sitio ---
    initAccordion('.faq-item-common', '.faq-question-common', '.faq-answer-common');
    initAccordion('.ap-faq-item', '.ap-faq-question', '.ap-faq-answer');
    initAccordion('.adri-faq-espejos__item', '.adri-faq-espejos__question', '.adri-faq-espejos__answer');
    initAccordion('.ap-faq-item-luz', '.ap-faq-question-luz', '.ap-faq-answer-luz');
    initAccordion('.ap-faq-item-redondo', '.ap-faq-question-redondo', '.ap-faq-answer-redondo');
    initAccordion('.ac-faq-item', '.ac-faq-question', '.ac-faq-answer');
    initAccordion('.ahc-faq-item', '.ahc-faq-toggle', '.ahc-faq-answer');
    initAccordion('.bh-faq-item', '.bh-faq-question', '.bh-faq-answer');
    initAccordion('.bhe-faq-item', '.bhe-faq-question', '.bhe-faq-answer');
    initAccordion('.bhb-faq-item', '.bhb-faq-question', '.bhb-faq-answer');
    initAccordion('.bhk-faq-item', '.bhk-faq-question', '.bhk-faq-answer');


   // =========================================================================
 // SCRIPT DE SCROLL AUTOMÁTICO AL FILTRAR
 // =========================================================================
 const urlParams = new URLSearchParams(window.location.search);

 // Se activa si hay cualquier parámetro en la URL, excepto los de paginación.
 if (urlParams.toString().length > 0 && !urlParams.has('paged')) {
  
  // LA LISTA COMPLETA DE POSIBLES ANCLAJES DE "ATERRIZAJE"
  const targetIds = [
   // IDs de la familia "Imitación Hidráulico"
   'catalogo-imitacion',   // Categoría principal (ID 2082)
   'catalogo-paredes',    // Categoría Paredes (ID 4806)
   'ap-productos-bano-grid', // Categoría Baño (ID 2083)
   'catalogo-cocina',     // Categoría Cocina (ID 4876)

   // IDs de la familia "Baldosa Hidráulica Original"
   'bh-product-grid-anchor', // Categoría principal (ID 4862)
   'lista-productos',      // Usado en Baño y Cocina originales (IDs 4865, 4866)
   'catalogo-productos',    // Usado en Exterior original (ID 4869)
   
   // IDs de la familia "Espejos"
   'catalogo-completo',    // Categoría principal (ID 102)
   'catalogo-luz',      // Espejos con Luz (ID 4213)
   'catalogo-redondos',    // Espejos Redondos (ID 4247)
   'catalogo-camerinos',    // Camerinos (ID 2626)

   // ID para Suelo Imitación Madera (ID 2209) <-- ¡¡AÑADIDO AQUÍ!!
   'product-loop' 
  ];

  for (const id of targetIds) {
   const targetElement = document.getElementById(id);
   if (targetElement) {
    // Usamos un pequeño retraso para asegurar que todo esté renderizado
    setTimeout(() => {
     targetElement.scrollIntoView({
      behavior: 'smooth',
      block: 'start' 
     });
    }, 100);
    break; // Importante: nos detenemos en cuanto encontramos un ancla
   }
  }
 }
 
    // =========================================================================
    // SCRIPT PARA SCROLL SUAVE DE BOTONES DE ANCLAJE INTERNOS
    // =========================================================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            // Evita que el script se active para enlaces de pestañas o acordeones de WooCommerce
            if (targetId === '#' || !document.querySelector(targetId)) return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

});