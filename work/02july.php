<?php 
include('../Layout/header.php');
include('../Layout/navbarWork.php');
?>

<!-- Header Principal adaptado al tema (sin estilos azules forzados) -->
<header class="py-5 mb-5 rounded-bottom-5 position-relative overflow-hidden shadow-lg border-bottom">

    <div class="container text-center position-relative z-1 py-3">

        <h1 
            class="display-4 fw-black mb-3 tracking-tight"
            data-es="Presentación de Inglés"
            data-en="English Presentation">
            Presentación de Inglés
        </h1>

        <p 
            class="lead text-muted mb-0 max-w-xl mx-auto fw-normal"
            data-es="Exposición en video sobre conceptos en inglés."
            data-en="Video presentation on English concepts.">
            Exposición en video sobre conceptos en inglés.
        </p>
    </div>
</header>

<!-- Contenido del Video -->
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
            
            <!-- Tarjeta Contenedora del Video adaptada al tema dinámico -->
            <div class="card border-0 rounded-4 shadow-lg overflow-hidden">
                
                <!-- Encabezado de la Tarjeta (Barra superior) -->
                <div class="card-header border-bottom p-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <span class="rounded-circle bg-danger d-inline-block" style="width: 12px; height: 12px;"></span>
                        <span class="rounded-circle bg-warning d-inline-block" style="width: 12px; height: 12px;"></span>
                        <span class="rounded-circle bg-success d-inline-block" style="width: 12px; height: 12px;"></span>
                    </div>
                    <small class="text-muted fw-semibold"><i class="bi bi-play-circle me-1"></i> Reproductor MP4</small>
                </div>

                <!-- Cuerpo de la Tarjeta / Reproductor Adaptativo sin recortes -->
                <div class="card-body p-0 position-relative">
                    <div class="ratio ratio-16x9">
                        <video class="w-100 h-100 rounded-bottom-4" controls preload="metadata" poster="" style="object-fit: contain;">
                            <source src="../Video/video_ingles.mp4" type="video/mp4">
                            <span data-es="Tu navegador no soporta la reproducción de videos." data-en="Your browser does not support video playback.">
                                Tu navegador no soporta la reproducción de videos.
                            </span>
                        </video>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>

<?php 
include('../Layout/footer.php');
?>