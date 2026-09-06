<?php 
include('Layout/header.php');
include('Layout/navbar.php');
?>

<!-- Hero Section adaptada al tema dinámico -->
<header class="py-5 mb-5 rounded-bottom-5 position-relative overflow-hidden shadow-lg border-bottom">

  <div class="container text-center text-lg-start position-relative z-1 py-4">
    <div class="row align-items-center gy-4">
      <div class="col-lg-7">
        <div class="p-4 p-md-5 rounded-4 shadow-lg border position-relative overflow-hidden mb-4">

          <div class="position-relative z-2">
            <span class="badge bg-info bg-gradient text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm d-inline-flex align-items-center" data-es="Bienvenido" data-en="Welcome">
              <i class="bi bi-stars me-1"></i> Bienvenido
            </span>
            
            <h1 class="display-4 fw-black mb-3 tracking-tight" data-es="Mi portafolio" data-en="My portfolio">
              Transformando ideas en experiencias digitales
            </h1>
            
            <p class="lead text-muted mb-4 max-w-xl fw-normal" data-es="este es mi portafolio de actividades" data-en="This is my portfolio of activities.">
              Desarrollador enfocado en construir aplicaciones web dinámicas, interfaces intuitivas y soluciones backend robustas.
            </p>
            
            <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap pt-2">
              <a href="projectver.php" class="btn btn-gradient btn-lg px-4 shadow rounded-pill fw-semibold btn-hover-grow" data-es="Ver Proyectos" data-en="View Projects">
                <i class="bi bi-rocket-takeoff me-2"></i>Ver Proyectos
              </a>
              <a href="contacver.php" class="btn btn-outline-primary btn-lg px-4 rounded-pill fw-semibold btn-hover-glow" data-es="Contactar" data-en="Contact">
                Contactar
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-5 text-center">
        <div class="p-3 rounded-circle d-inline-block shadow-lg">
          <div class="rounded-circle shadow-sm overflow-hidden" style="width: 230px; height: 230px; display: inline-flex; align-items: center; justify-content: center;">
            <a href="work/18august.php" class="w-100 h-100 d-block icon-bounce" aria-label="Ver destacado">
              <img src="img/team-3.png" alt="Foto de perfil o destacado" class="w-100 h-100 object-fit-cover rounded-circle">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- My Skill -->
<!-- Sección de Skills -->
<section id="skills" class="py-5 mb-5">
  <div class="container">
    <div class="text-center mb-5">
      <span class="badge bg-info bg-gradient text-dark px-3 py-2 rounded-pill mb-2 fw-bold shadow-sm" 
            data-es="Habilidades" data-en="Skills">
        <i class="bi bi-code-slash me-1"></i> Habilidades
      </span>
      <h2 class="fw-black" data-es="Mis Skills" data-en="My Skills">
        Lo que sé hacer
      </h2>
    </div>

    <div class="row g-4">
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-filetype-php fs-1 mb-2 text-primary"></i>
          <h6 class="fw-semibold mb-1">PHP</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar" style="width:85%"></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-database fs-1 mb-2 text-success"></i>
          <h6 class="fw-semibold mb-1">MySQL</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-success" style="width:80%"></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-bootstrap fs-1 mb-2" style="color:#6f42c1; opacity:1;"></i>
          <h6 class="fw-semibold mb-1">Bootstrap</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-info" style="width:90%"></div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-diagram-3 fs-1 mb-2 text-warning"></i>
          <h6 class="fw-semibold mb-1">MVC</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-warning" style="width:75%"></div>
          </div>
        </div>
      </div>

        <!-- JavaScript -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-filetype-js fs-1 mb-2 text-warning"></i>
          <h6 class="fw-semibold mb-1">JavaScript</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-warning" style="width:75%"></div>
          </div>
        </div>
      </div>

      <!-- Git -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-git fs-1 mb-2 text-danger"></i>
          <h6 class="fw-semibold mb-1">Git / GitHub</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-danger" style="width:80%"></div>
          </div>
        </div>
      </div>

      <!-- HTML5 / CSS3 -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-filetype-html fs-1 mb-2 text-primary"></i>
          <h6 class="fw-semibold mb-1">HTML5 & CSS3</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar" style="width:90%"></div>
          </div>
        </div>
      </div>

      <!-- API REST -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="p-4 rounded-4 shadow-sm border text-center h-100 btn-hover-grow">
          <i class="bi bi-cloud-arrow-up fs-1 mb-2 text-info"></i>
          <h6 class="fw-semibold mb-1">REST APIs</h6>
          <div class="progress" style="height:6px;">
            <div class="progress-bar bg-info" style="width:70%"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Sección de Proyectos -->
<section id="proyectos">
  <?php include('proyect.php'); ?>
</section>


<!-- Sección de Proyectos -->
<section id="proyectos">
  <?php include('proyect.php'); ?>
</section>

<?php 
include('contact.php');
?>

<?php 
include('Layout/footer.php');
?>