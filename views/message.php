<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f6;">
    <div style="max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        
        <div style="background-color: #0d6efd; color: #ffffff; padding: 30px 20px; text-align: center;">
            <h1 style="margin: 0; font-weight: 700; letter-spacing: 1px; font-size: 28px;">¡Gracias por suscribirte!</h1>
        </div>
        
        <div style="padding: 30px; color: #444444; line-height: 1.6;">
            <p style="font-size: 18px; margin-top: 0; color: #2c3e50;">
                Hola <strong><?= htmlspecialchars($nombreDestinatario) ?></strong>,
            </p>
            <p style="font-size: 16px;">
                Muchas gracias por suscribirte. A partir de ahora recibirás en tu correo electrónico (<strong><?= htmlspecialchars($destinatario) ?></strong>) todas nuestras novedades, recursos y actualizaciones.
            </p>
            <p style="font-size: 16px;">
                Pronto tendrás noticias nuevas.
            </p>
        </div>
        
        <div style="background-color: #f8fafc; padding: 20px; text-align: center; color: #64748b; font-size: 12px; border-top: 1px solid #e2e8f0;">
            <p style="margin: 0;">GVTeam - Tópicos Avanzados de Desarrollo Web 2026</p>
        </div>
        
    </div>
</body>
</html>