<?php 
include('../Layout/header.php');
include('../Layout/navbarWork.php');
?>

<!-- Encabezado Hero adaptado al tema dinámico -->
<header class="py-5 mb-5 rounded-bottom-5 position-relative overflow-hidden shadow-lg border-bottom">

  <div class="container text-center position-relative z-1 py-3">
    <span class="badge bg-info bg-gradient text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm d-inline-flex align-items-center" data-es="Presentación de Documento" data-en="Document Presentation">
      <i class="bi bi-file-earmark-slides me-1"></i> Presentación de Documento
    </span>
    
    <h1 class="display-4 fw-black mb-3 tracking-tight" data-es="Presentación de diapositivas" data-en="Slides Presentation">
      Presentación de diapositivas
    </h1>
    
    <p class="lead text-muted mb-0 max-w-xl mx-auto fw-normal" 
       data-es="Se aborda un debate central dentro del ámbito social y económico: el impacto del turismo en las comunidades locales y si sus efectos son predominantemente positivos o negativos." 
       data-en="A central debate within the social and economic sphere is addressed: the impact of tourism on local communities and whether its effects are predominantly positive or negative.">
      Se aborda un debate central dentro del ámbito social y económico: el impacto del turismo en las comunidades locales y si sus efectos son predominantemente positivos o negativos.
    </p>
  </div>
</header>

<!-- Visor principal de documento -->
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-11 col-xl-10">

      <!-- Visor de tarjetas adaptado sin clases de temas oscuros fijos ni bordes personalizados -->
      <div class="card border-0 rounded-4 shadow-lg" style="overflow: visible;">

        <!-- Barra superior del visor con controles tipo app -->
        <div class="card-header border-bottom p-3 p-md-4 d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3">
            <div class="d-none d-sm-flex align-items-center gap-2 me-2">
              <span class="rounded-circle bg-danger d-inline-block" style="width: 12px; height: 12px;"></span>
              <span class="rounded-circle bg-warning d-inline-block" style="width: 12px; height: 12px;"></span>
              <span class="rounded-circle bg-success d-inline-block" style="width: 12px; height: 12px;"></span>
            </div>
            <div>
              <span class="badge bg-danger bg-gradient text-white fw-semibold mb-1" data-es="Documento PDF" data-en="PDF Document">
                <i class="bi bi-file-earmark-pdf me-1"></i> Documento PDF
              </span>
              <h2 class="h5 fw-bold mb-0" data-es="Impacto del Turismo en Comunidades Locales" data-en="Impact of Tourism on Local Communities">
                Impacto del Turismo en Comunidades Locales
              </h2>
            </div>
          </div>

          <a href="../Document/Exposición.pdf" target="_blank" class="btn btn-gradient btn-sm px-3 rounded-pill shadow btn-hover-grow fw-semibold">
            <i class="bi bi-box-arrow-up-right me-1"></i> <span data-es="Abrir PDF" data-en="Open PDF">Abrir PDF</span>
          </a>
        </div>

        <!-- Contenedor del Iframe -->
        <div class="card-body p-0 m-0 border-0 position-relative">
          <div class="pdf-container">
            <iframe
              src="../Document/Exposición.pdf"
              class="pdf-iframe w-100 border-0"
              title="Visor de Presentación PDF">
            </iframe>
          </div>
        </div>

        <!-- Resumen del contenido debajo del PDF -->
        <div class="card-footer bg-transparent border-top p-4">
          <h3 class="h6 fw-bold mb-2" data-es="Descripción del documento" data-en="Document Description">
            <i class="bi bi-info-circle me-2 text-primary"></i>Descripción del documento
          </h3>
          <p class="text-muted mb-0 small" 
             data-es="En este material se aborda un debate central dentro del ámbito social y económico: el impacto del turismo en las comunidades locales y si sus efectos son predominantemente positivos o negativos." 
             data-en="This material addresses a central debate within the social and economic sphere: the impact of tourism on local communities and whether its effects are predominantly positive or negative.">
            En este material se aborda un debate central dentro del ámbito social y económico: el impacto del turismo en las comunidades locales y si sus efectos son predominantemente positivos o negativos.
          </p>
        </div>

        <!-- Mensaje de ayuda en teléfonos móviles -->
        <div class="d-md-none text-center p-3 border-top">
          <p class="small text-muted mb-2" data-es="¿Problemas para ver el documento en tu teléfono?" data-en="Having trouble viewing the document on your phone?">
            ¿Problemas para ver el documento en tu teléfono?
          </p>
          <a href="../Document/Exposición.pdf" target="_blank" class="btn btn-gradient btn-sm w-100 rounded-pill fw-semibold">
            <i class="bi bi-fullscreen me-1"></i> <span data-es="Ver a pantalla completa" data-en="View full screen">Ver a pantalla completa</span>
          </a>
        </div>

      </div>

    </div>
  </div>
</main>

<?php 
include('../Layout/footer.php');
?>