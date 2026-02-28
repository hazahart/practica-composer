<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción al Boletín</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5"> <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-5 text-center">
          
          <h2 class="mb-3 fw-bold">Suscríbete</h2>
          <p class="text-muted mb-4">Suscríbete a nuestro boletín para recibir las últimas novedades, recursos y actualizaciones directamente en tu correo electrónico</p>
          
          <form method="post" action="app.php">
            <div class="mb-3 text-start">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Juán Pérez" required>
            </div>
            
            <div class="mb-4 text-start">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control form-control-lg" id="correo" name="correo" placeholder="ejemplo@email.com" required>
            </div>
            
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Suscribirme</button>
            </div>
          </form>
          
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>