<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Examen</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'public/encabezado.php'; ?>

  <main>
    <section class="hero-section">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="badge badge-project mb-3">PROYECTO COLABORATIVO</span>
            <h1>Bienvenido a la página de Said</h1>
            <p class="lead">Este es un examen en el que mi compañero agregara su foto.</p>
          </div>
          <div class="col-lg-3">
            <div class="hero-card">
              <img src="img/pfp.jpg" alt="Imagen de Said" class="img-fluid rounded-circle">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'public/pie.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
