<?php 
include('Layout/header.php');
include('Layout/navbarpro.php');
include('proyect.php');
 ?>
 <footer id="contacto" class="bg-dark text-white pt-5 pb-4 mt-auto">
    <div class="container">

        <!-- Llamado a la acción -->
        <div class="text-center mb-5">
            <p class="mb-1 fw-bold" data-es="¿Tienes alguna consulta o propuesta de proyecto?" data-en="Do you have any questions or a project proposal?">¿Tienes alguna consulta o propuesta de proyecto?</p>
            <p class="text-secondary small mb-0" data-es="¡Hablemos y hagamos ideas realidad!" data-en="Let's talk and turn ideas into reality!">¡Hablemos y hagamos ideas realidad!</p>
        </div>

        <div class="row gy-4">

            <!-- Redes Sociales -->
            <div class="col-6 col-md-3">
                <h6 class="fw-bold mb-3" data-es="Redes Sociales" data-en="Social Media">Redes Sociales</h6>
                <div class="d-flex gap-3 fs-5 mb-3">
                    <a href="https://github.com/Juan-duarte1070" target="_blank" rel="noopener noreferrer" class="text-white" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/juan-sebastian-duarte-vega-b34b41434/" target="_blank" rel="noopener noreferrer" class="text-white" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://wa.me/573000000000" target="_blank" rel="noopener noreferrer" class="text-white" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Proyectos -->
            <div class="col-6 col-md-3">
                <h6 class="fw-bold mb-3" data-es="Proyectos" data-en="Projects">Proyectos</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <a href="work/07april.php" class="text-secondary text-decoration-none" data-es="Tema Controversial" data-en="Controversial Topic">Nombre del proyecto 1</a>
                    </li>
                    <li class="mb-2">
                        <a href="work/20april.php" class="text-secondary text-decoration-none" data-es="Ciudad y Famoso" data-en="City And Famous">Nombre del proyecto 2</a>
                    </li>
                    <li class="mb-2">
                        <a href="work/02July.php" class="text-secondary text-decoration-none" data-es="Sincronización Labial" data-en="Lip Syncing">Nombre del proyecto 3</a>
                    </li>
                    <li class="mb-2">
                        <a href="work/27july.php" class="text-secondary text-decoration-none" data-es="Video Juego" data-en="Video Game">Nombre del proyecto 4</a>
                    </li>
                    <li class="mb-2">
                        <a href="work/10august.php" class="text-secondary text-decoration-none" data-es="Menú" data-en="Menu">Nombre del proyecto 5</a>
                    </li>
                    <li class="mb-2">
                        <a href="work/18august.php" class="text-secondary text-decoration-none" data-es="Hoja de Vida" data-en="Curriculum Vitae">Nombre del proyecto 6</a>
                    </li>
                    <li class="mb-2">
                        <a href="../Paginaingles/index.html" class="text-secondary text-decoration-none" data-es="Página De Destino" data-en="Landing Page">Nombre del proyecto 7</a>
                    </li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-6 col-md-3">
                <h6 class="fw-bold mb-3" data-es="Contacto" data-en="Contact">Contacto</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2 text-secondary">
                        <i class="bi bi-envelope-fill me-1"></i>duartew349@gmail.com
                    </li>
                    <li class="mb-2">
                        <a href="https://wa.me/573000000000" target="_blank" rel="noopener noreferrer" class="text-secondary text-decoration-none">
                            <i class="bi bi-whatsapp me-1"></i>WhatsApp
                        </a>
                    </li>
                    <li>
                        <a href="index.html#contac" class="text-secondary text-decoration-none" data-es="Formulario de contacto" data-en="Contact form">Formulario de contacto</a>
                    </li>
                </ul>
            </div>

            <!-- Navegación rápida -->
            <div class="col-6 col-md-3">
                <h6 class="fw-bold mb-3" data-es="Navegación" data-en="Navigation">Navegación</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#home" class="text-secondary text-decoration-none" data-es="Inicio" data-en="Home">Inicio</a></li>
                    <li class="mb-2"><a href="index.html#skills" class="text-secondary text-decoration-none" data-es="Mis habilidades" data-en="My skills">My skills</a></li>
                    <li class="mb-2"><a href="#trabajos" class="text-secondary text-decoration-none" data-es="Proyectos" data-en="Projects">Proyectos</a></li>
                    <li><a href="index.html#contac" class="text-secondary text-decoration-none" data-es="Contacto" data-en="Contact">Contacto</a></li>
                </ul>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 text-center">
            <small class="text-secondary" data-es="&copy; 2026 Mi Portafolio. Todos los derechos reservados." data-en="&copy; 2026 My Portfolio. All rights reserved.">&copy; 2026 Mi Portafolio. Todos los derechos reservados.</small>
            <div class="d-flex gap-3 small">
                <a href="#home" class="text-secondary text-decoration-none" data-es="Inicio" data-en="Home">Inicio</a>
                <a href="projectver.php" class="text-secondary text-decoration-none" data-es="Proyectos" data-en="Projects">Proyectos</a>
                <a href="contacver.php" class="text-secondary text-decoration-none" data-es="Contacto" data-en="Contact">Contacto</a>
            </div>
        </div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- para work -->
<script src="../js/tema.js"></script>
<!-- para index.php -->
<script src="js/tema.js"></script>

<!-- para work -->
<script src="../js/idioma.js"></script>
<!-- para index.php -->
<script src="js/idioma.js"></script>