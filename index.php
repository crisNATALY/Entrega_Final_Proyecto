<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrappéFinesse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="circle"></div>
        <header>
            <img src="imagenes/logo.png" class="logo">
            <marquee><h1 style="color: white;">FrappéFinesse tu mejor opción!!</h1></marquee>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li><a href="/index.php">Inicio</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="productos/">Productos</a></li>
                    <li><a href="registro/registro.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>
        <script src="/app.js"></script>

        <div class="content">
            <div class="textBox">
                <br>
                <br>
                <h2>Esto no es solo Helado,esto es...<br><span>FrappéFinesse</span></h2>
                <p>Tradicionalmente de café y originaria de Grecia, que a menudo se sirve con nata montada a la que se pueden añadir diferentes toppings!!</p>
                <a href="productos/producto.php">Ver Productos +</a>
            </div>
            <div class="imgBox">
                <img src="imagenes/img1.png" class="starbucks">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="imagenes/thumb1.png" onclick="imgSlider('imagenes/img1.png');changeCircleColor('#017143')"></li>
            <li><img src="imagenes/thumb2.png" onclick="imgSlider('imagenes/img2.png');changeCircleColor('#eb7495')"></li>
            <li><img src="imagenes/thumb3.png" onclick="imgSlider('imagenes/img3.png');changeCircleColor('#d752b1')"></li>
        </ul>
        <ul class="sci">
            <li><a href="https://www.facebook.com/FreeStoreFrapperia/"><img src="imagenes/facebook.png"></a></li>
            <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fi%2Fflow%2Flogin"><img src="imagenes/twitter.png"></a></li>
            <li><a href="https://www.instagram.com/guapacoffee/?hl=es"><img src="imagenes/instagram.png"></a></li>
        </ul>
    <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>

        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
    </div>
    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src = anything
        }

        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>

</body>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/44666355.js"></script>
<!-- End of HubSpot Embed Code -->
</html>