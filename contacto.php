<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
    <script defer src="https://app.embed.im/snow.js">
        
    </script>
</head>
<body>
    <header>
        <img src="imagenes/logo.png" class="logo">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="/servicios.php">Servicios</a></li>
                <li><a href="/nosotros.php">Nosotros</a></li>
                <li><a href="/contacto.html">Contáctanos</a></li>
                <li><a href="registro/registro.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <div class="contacto">

        <form method="post">
            <h1 style="color: white;">CONTACTANOS</h1>
            <div class="check">
                <input type="radio" name="accion" value="consulta" checked="">Consulta 
                <input type="radio" name="accion" value="consulta" checked="">Solicitud 
                <input type="radio" name="accion" value="consulta" checked="">Reclamo 
            </div>
            <input type="text" value="Nombre :"placeholder="Nombre">
            <input type="text" value="Correo :" placeholder="Correo">
            <textarea>Mensaje : </textarea>
            <div class="button1">
                <button type="submit">
                    <img src="iconos/enviar.png" alt="enviar" width="20" height="20">
                    Enviar
                </button>
                <button type="reset">
                    <img src="iconos/descarga.png" alt="limpiar" width="20" height="20">
                    Limpiar
                </button>
                <button type="submit">
                    <img src="iconos/ekis.jpg" alt="cancelar" width="20" height="20">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</body>
</html>