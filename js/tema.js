document.addEventListener("DOMContentLoaded", function () {

    console.log("TEMA.JS FUNCIONANDO");

    const btnTema = document.getElementById("btnTema");
    const iconoTema = document.getElementById("iconoTema");
    const textoTema = document.getElementById("textoTema");

    // Obtener tema de localStorage o defecto "oscuro"
    let tema = localStorage.getItem("tema") || "oscuro";

    // Aplicar tema inicial
    aplicarTema(tema);

    // Evento Click
    if (btnTema) {
        btnTema.addEventListener("click", function () {
            tema = (tema === "oscuro") ? "claro" : "oscuro";
            localStorage.setItem("tema", tema);
            aplicarTema(tema);
        });
    }

    // Función para alternar atributos y UI
    function aplicarTema(nuevoTema) {
        document.documentElement.setAttribute("data-theme", nuevoTema);
        document.documentElement.setAttribute("data-bs-theme", nuevoTema === "oscuro" ? "dark" : "light");

        if (iconoTema) {
            iconoTema.className = nuevoTema === "oscuro" ? "bi bi-sun-fill" : "bi bi-moon-fill";
        }

        if (textoTema) {
            textoTema.textContent = nuevoTema === "oscuro" ? "Claro" : "Oscuro";
        }
    }

});