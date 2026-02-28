<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
        }
    </style>
</head>

<body>

    <div class="modal fade" id="resultadoModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fs-4" id="modalLabel"><?= $icono ?> <?= $titulo ?></h5>
                </div>
                <div class="modal-body text-secondary fs-5 mt-2">
                    <?= $mensaje ?>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <a href="index.php" class="btn <?= $claseBoton ?> btn-lg w-100">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var myModal = new bootstrap.Modal(document.getElementById('resultadoModal'));
            myModal.show();
        });
    </script>

</body>

</html>