<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Colaborador</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php include __DIR__ . '/encabezado.php'; ?>

  <main>
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="badge badge-project mb-3">COLABORADOR</span>
            <h1>CHRYSTIAN ALONSO FLORES</h1>
            <p class="lead">Página del colaborador del proyecto.</p>
            <a href="<?php echo $base; ?>index.php" class="btn btn-primary btn-lg mt-3">Regresar al inicio</a>
          </div>
          <div class="col-lg-3">
            <div class="hero-card">
              
              <img src="<?php echo $base; ?>img/GMC Teases the 2019 GMC Sierra; Debut Imminent!.jpg" alt="Foto de Chrystian" class="img-fluid rounded-circle">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/pie.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
