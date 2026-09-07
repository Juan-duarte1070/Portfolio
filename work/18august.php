<?php 
include('../Layout/header.php');
include('../Layout/navbarWork.php');
?>

<!-- Encabezado Hero adaptado al tema dinámico -->
<header class="py-5 mb-5 rounded-bottom-5 position-relative overflow-hidden shadow-lg border-bottom">

  <div class="container text-center position-relative z-1 py-3">
    <span class="badge bg-info bg-gradient text-dark px-3 py-2 rounded-pill mb-3 fw-bold shadow-sm d-inline-flex align-items-center" data-es="Perfil Profesional" data-en="Professional Profile">
      <i class="bi bi-person-badge me-1"></i> Perfil Profesional
    </span>
    
    <h1 class="display-4 fw-black mb-3 tracking-tight" data-es="Hoja de Vida" data-en="Curriculum Vitae">
      Curriculum Vitae
    </h1>
    
    <p class="lead text-muted mb-0 max-w-xl mx-auto fw-normal" 
       data-es="Juan Sebastián Duarte Vega es un aprendiz en tecnología en Análisis y Desarrollo de Software por parte del SENA (Centro de Desarrollo Agroindustrial y Empresarial), radicado en Villeta, Cundinamarca." 
       data-en="Juan Sebastián Duarte Vega is a trainee in the Software Analysis and Development technology program at SENA (Agro-industrial and Business Development Center), based in Villeta, Cundinamarca.">
      Juan Sebastián Duarte Vega es un aprendiz en tecnología en Análisis y Desarrollo de Software por parte del SENA (Centro de Desarrollo Agroindustrial y Empresarial), radicado en Villeta, Cundinamarca.
    </p>
  </div>
</header>

<!-- Contenido Principal -->
<main class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-11 col-xl-10">

      <!-- Tarjeta Visor del CV sin fondos fijos de contenedor -->
      <div class="card border-0 rounded-4 shadow-lg overflow-hidden">

        <!-- Encabezado de la tarjeta -->
        <div class="card-header border-bottom p-3 p-md-4 d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center gap-3">
            
            <!-- Imagen pequeña del perfil -->
            <img src="../img/team-3.png" alt="Perfil" class="rounded-circle object-fit-cover shadow-sm me-1" style="width: 75px; height: 75px;">

            <div>
              <span class="badge bg-primary bg-gradient text-white fw-semibold mb-1" data-es="Documento Oficial" data-en="Official Document">
                <i class="bi bi-file-earmark-person me-1"></i> Documento Oficial
              </span>
              <h2 class="h5 fw-bold mb-0" data-es="Hoja de Vida" data-en="Curriculum Vitae">
                Hoja de Vida
              </h2>
            </div>
          </div>

          <a href="../Document/My Resume!.pdf" target="_blank" class="btn btn-gradient btn-sm px-3 rounded-pill shadow btn-hover-grow fw-semibold">
            <i class="bi bi-box-arrow-up-right me-1"></i> <span data-es="Abrir PDF" data-en="Open PDF">Abrir PDF</span>
          </a>
        </div>

        <!-- Vista previa del PDF sin clases oscuras fijas -->
        <div class="card-body p-0 m-0 border-0 position-relative">
          <div class="pdf-container">
            <iframe
              src="../Document/My Resume!.pdf"
              class="pdf-iframe w-100 border-0"
              style="height: 85vh; min-height: 750px;"
              title="Visor de Curriculum Vitae PDF">
            </iframe>
          </div>
        </div>

        <!-- Resumen del perfil profesional debajo del PDF -->
        <div class="card-footer bg-transparent border-top p-4">
          <h3 class="h6 fw-bold mb-2" data-es="Descripción del perfil" data-en="Profile Description">
            <i class="bi bi-info-circle me-2 text-primary"></i>Descripción del perfil
          </h3>
          <p class="text-muted mb-0 small" 
             data-es="Juan Sebastián Duarte Vega es un aprendiz en tecnología en Análisis y Desarrollo de Software por parte del SENA (Centro de Desarrollo Agroindustrial y Empresarial), radicado en Villeta, Cundinamarca." 
             data-en="Juan Sebastián Duarte Vega is a trainee in the Software Analysis and Development technology program at SENA (Agro-industrial and Business Development Center), based in Villeta, Cundinamarca.">
            Juan Sebastián Duarte Vega es un aprendiz en tecnología en Análisis y Desarrollo de Software por parte del SENA (Centro de Desarrollo Agroindustrial y Empresarial), radicado en Villeta, Cundinamarca.
          </p>
        </div>

        <!-- Pie de tarjeta -->
        <div class="text-center p-4 border-top">
          <p class="text-muted mb-3" data-es="¿Prefieres editar o guardar una copia local en Microsoft Word?" data-en="Would you prefer to edit or save a local copy in Microsoft Word?">
            ¿Prefieres editar o guardar una copia local en Microsoft Word?
          </p>
          <a href="../Document/My Resume!.docx" download class="btn btn-gradient btn-lg px-4 py-2 rounded-pill fw-semibold shadow btn-hover-grow">
            <i class="bi bi-file-earmark-word me-2"></i><span data-es="Descargar Word (.docx)" data-en="Download Word (.docx)">Descargar Word (.docx)</span>
          </a>
        </div>

      </div>

    </div>
  </div>
</main>

<?php 
include('../Layout/footer.php');
?>