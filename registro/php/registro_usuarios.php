<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$apellido_completo = $_POST['apellido_completo'];
$dni = $_POST['dni'];
$correo =  $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena= hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, apellido_completo, dni, correo, usuario, contrasena)
          VALUES('$nombre_completo', '$apellido_completo', '$dni', '$correo', '$usuario', '$contrasena')";

//verificar el correo que no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../registro.php";
        </script>
        ';
        exit();
}

//verificar el usuario que no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro usuario");
            window.location = "../registro.php";
        </script>
        ';
        exit();
}

//verificar el DNI que no se repita
$verificar_dni= mysqli_query($conexion, "SELECT * FROM usuarios WHERE dni = '$dni' ");

if(mysqli_num_rows($verificar_dni) > 0){
    echo '
        <script>
            alert("Este DNI ya está registrado");
            window.location = "../registro.php";
        </script>
        ';
        exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../registro.php";
        </script>
        ';
}else{
    echo '
        <script>
            alert("Intentelo de nuevo, suario no registrado exitosamente");
            window.location = "../registro.php";
        </script>
        ';
}
mysqli_close($conexion);

?>