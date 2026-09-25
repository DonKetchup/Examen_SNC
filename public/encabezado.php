<?php
// URL base del proyecto (ej. /Examen_SNC/) para que los enlaces funcionen
// sin importar desde qué carpeta se incluya el encabezado
$raizProyecto = str_replace('\\', '/', dirname(__DIR__));
$raizServidor = str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']));
$base = substr($raizProyecto, strlen($raizServidor)) . '/';
?>
<nav class="navbar navbar-expand-lg navbar-dark app-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo $base; ?>index.php">Feria Tecnológica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Mostrar navegación">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>public/colabo.php">Participantes</a></li>
      </ul>
    </div>
  </div>
</nav>
