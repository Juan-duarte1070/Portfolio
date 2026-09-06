document.addEventListener("DOMContentLoaded", function () {

    const btnIdioma = document.getElementById("btnIdioma");

    // Obtener idioma guardado
    let idioma = localStorage.getItem("idioma");

    // Idioma predeterminado
    if (!idioma) {
        idioma = "es";
        localStorage.setItem("idioma", idioma);
    }

    // Aplicar idioma
    cambiarIdioma(idioma);


    // Botón de idioma
    if (btnIdioma) {

        btnIdioma.addEventListener("click", function () {

            if (idioma === "es") {
                idioma = "en";
            } else {
                idioma = "es";
            }

            // Guardar idioma
            localStorage.setItem("idioma", idioma);

            // Aplicar idioma
            cambiarIdioma(idioma);

        });

    }


    function cambiarIdioma(idioma) {

        // Buscar todos los elementos que tengan data-es y data-en
        const elementos = document.querySelectorAll("[data-es][data-en]");

        elementos.forEach(function (elemento) {

            if (idioma === "es") {

                elemento.textContent = elemento.getAttribute("data-es");

            } else {

                elemento.textContent = elemento.getAttribute("data-en");

            }

        });


        // Cambiar botón
        if (btnIdioma) {

            if (idioma === "es") {

                btnIdioma.innerHTML = "🇺🇸 English";

            } else {

                btnIdioma.innerHTML = "🇪🇸 Español";

            }

        }

        // Cambiar atributo lang
        document.documentElement.setAttribute("lang", idioma);

    }

});