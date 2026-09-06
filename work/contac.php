<?php 
include('../Layout/header.php');
include('../Layout/navbarWork.php');
?>

<!-- Encabezado Hero / Contacto -->
<header class="hero-section py-5 mb-4 position-relative overflow-hidden">
  <!-- Destellos de fondo (Glow Effects) -->
  <div class="position-absolute top-0 start-0 translate-middle bg-info opacity-25 rounded-circle blur-bg" style="width: 300px; height: 300px; filter: blur(80px);"></div>
  <div class="position-absolute bottom-0 end-0 translate-middle-x bg-primary opacity-25 rounded-circle blur-bg" style="width: 250px; height: 250px; filter: blur(70px);"></div>

  <div class="container position-relative z-1 pt-3">
    <h1 class="display-4 fw-bold mb-3 tracking-tight" data-es="Contacto" data-en="Contact Me">
      Contacto
    </h1>
    <p class="lead opacity-75 max-w-xl mb-0" data-es="¿Tienes alguna pregunta sobre mis actividades o proyectos? Siéntete libre de escribirme." data-en="Have a question about one of my activities, or just want to say hi? Feel free to reach out.">
      ¿Tienes alguna pregunta sobre mis actividades o proyectos? Siéntete libre de escribirme.
    </p>
  </div>
</header>

<!-- Sección Principal de Contacto -->
<main class="container mb-5">
  <div class="row g-4">
    
    <!-- Columna Izquierda: Tarjetas de Información -->
    <div class="col-lg-4">
      <div class="d-flex flex-column gap-3">
        
        <!-- Tarjeta de Email -->
        <div class="card border-0 shadow-sm rounded-4 p-3 border-start border-4 border-primary">
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary">
              <i class="bi bi-envelope fs-4"></i>
            </div>
            <div>
              <span class="text-uppercase small fw-bold text-muted d-block" data-es="Correo Electrónico" data-en="Email">Correo Electrónico</span>
              <!-- Se cambió text-dark por text-muted -->
              <a href="mailto:duartew349@gmail.com" class="text-decoration-none fw-semibold text-muted">duartew349@gmail.com</a>
            </div>
          </div>
        </div>

        <!-- Tarjeta de Teléfono -->
        <div class="card border-0 shadow-sm rounded-4 p-3 border-start border-4 border-primary">
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary">
              <i class="bi bi-telephone fs-4"></i>
            </div>
            <div>
              <span class="text-uppercase small fw-bold text-muted d-block" data-es="Teléfono" data-en="Phone">Teléfono</span>
              <!-- Se cambió text-dark por text-muted -->
              <a href="tel:+573208609928" class="text-decoration-none fw-semibold text-muted">+57 320 860 9928</a>
            </div>
          </div>
        </div>

        <!-- Tarjeta de Ubicación -->
        <div class="card border-0 shadow-sm rounded-4 p-3 border-start border-4 border-primary">
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary">
              <i class="bi bi-geo-alt fs-4"></i>
            </div>
            <div>
              <span class="text-uppercase small fw-bold text-muted d-block" data-es="Ubicación" data-en="Location">Ubicación</span>
              <!-- Se cambió text-dark por text-muted -->
              <span class="fw-semibold text-muted">Villeta, Cundinamarca — Colombia</span>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Columna Derecha: Formulario de Mensaje -->
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
        <form action="" method="POST">
          <div class="row g-3">
            
            <div class="col-md-6">
              <label for="name" class="form-label fw-semibold text-muted small" data-es="Nombre" data-en="Name">Nombre</label>
              <input type="text" class="form-control form-control-lg bg-light border-0 rounded-3 fs-6" id="name" name="name" placeholder="Tu nombre" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label fw-semibold text-muted small" data-es="Correo Electrónico" data-en="Email">Correo Electrónico</label>
              <input type="email" class="form-control form-control-lg bg-light border-0 rounded-3 fs-6" id="email" name="email" placeholder="nombre@ejemplo.com" required>
            </div>

            <div class="col-12">
              <label for="subject" class="form-label fw-semibold text-muted small" data-es="Asunto" data-en="Subject">Asunto</label>
              <input type="text" class="form-control form-control-lg bg-light border-0 rounded-3 fs-6" id="subject" name="subject" placeholder="Asunto del mensaje" required>
            </div>

            <div class="col-12">
              <label for="message" class="form-label fw-semibold text-muted small" data-es="Mensaje" data-en="Message">Mensaje</label>
              <textarea class="form-control bg-light border-0 rounded-3 fs-6" id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <div class="col-12 pt-2">
              <button type="submit" class="btn btn-primary btn-lg px-4 rounded-3 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                <span data-es="Enviar Mensaje" data-en="Send Message">Enviar Mensaje</span>
                <i class="bi bi-send"></i>
              </button>
            </div>

          </div>
        </form>
      </div>
    </div>

  </div>
</main>

<?php 
include('../Layout/footer.php');
?>