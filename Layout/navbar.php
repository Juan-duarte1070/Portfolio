<nav class="navbar navbar-expand-lg fixed-top shadow-sm navbar-tema py-2">
    <div class="container">

        <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="index.php">
            <i class="bi bi-code-slash text-info me-2 fs-3"></i>
            <span data-es="Portafolio" data-en="Portfolio">
                Portafolio
            </span>
        </a>

        <button class="navbar-toggler border-0 p-2 shadow-none" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse mt-3 mt-lg-0 p-3 p-lg-0 rounded-4 shadow-lg shadow-lg-none" id="navbarNav">

            <ul class="navbar-nav ms-auto fw-semibold align-items-lg-center gap-2 gap-lg-1">

                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill nav-link-custom" href="#trabajos"
                       data-es="Proyectos"
                       data-en="Projects">
                        Proyectos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill nav-link-custom" href="#contac"
                       data-es="Contacto"
                       data-en="Contact">
                        Contacto
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-pill nav-link-custom" href="#skills"
                       data-es="Habilidades"
                       data-en="Skills">
                        Skills
                    </a>
                </li>

                <!-- Idioma -->
                <li class="nav-item">
                    <button id="btnIdioma" class="btn btn-outline-info btn-sm rounded-pill px-3 py-1 ms-lg-2 my-1 my-lg-0 d-inline-flex align-items-center gap-1 shadow-sm">
                        🇺🇸 English
                    </button>
                </li>

                <!-- Tema -->
                <li class="nav-item">
                    <button id="btnTema"
                            class="btn btn-outline-warning btn-sm rounded-pill px-3 py-1 ms-lg-2 my-1 my-lg-0 d-inline-flex align-items-center gap-2 shadow-sm"
                            aria-label="Cambiar tema">

                        <i class="bi bi-sun-fill" id="iconoTema"></i>

                        <span id="textoTema">
                            Claro
                        </span>

                    </button>
                </li>

            </ul>

        </div>
    </div>
</nav>