<?php

require("coneccion.php");

$con = conectar_bd();

if (isset($_POST["envio"])) {

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $ubicacion = $_POST["ubicacion"];
    $email = $_POST["email"];
    $contrasenia = $_POST["password"];
   
    if (!FijarseSiLaContraseniaEsMuySeguraOMuyInseguraFunctionPHP($contrasenia)) {
        header("Location: ../signup.php?error_signup=La contraseña no es segura");
        exit();
    }

    $existe_usr = consultar_existe_usr($con, $email);

    insertar_datos($con, $nombre, $telefono, $ubicacion, $email, $contrasenia, $existe_usr);
}

function FijarseSiLaContraseniaEsMuySeguraOMuyInseguraFunctionPHP($contrasenia) {
    if (strlen($contrasenia) < 7) {
        return false;
    }
    if (preg_match('/[a-z]/', $contrasenia) && preg_match('/[A-Z]/', $contrasenia) && preg_match('/[0-9]/', $contrasenia) && preg_match('/[^A-Za-z0-9]/', $contrasenia)) {
        return true;
    } else {
        return false;
    }
}

function consultar_existe_usr($con, $email) {

    $email = mysqli_real_escape_string($con, $email);
    $consulta_existe_usr = "SELECT correo FROM cliente WHERE correo = '$email'";
    $resultado_existe_usr = mysqli_query($con, $consulta_existe_usr);
    return mysqli_num_rows($resultado_existe_usr) > 0;
}

function insertar_datos($con, $nombre, $telefono, $ubicacion, $email, $contrasenia, $existe_usr) {

    if (!$existe_usr) {
        $nombre = mysqli_real_escape_string($con, $nombre);
        $telefono = mysqli_real_escape_string($con, $telefono);
        $ubicacion = mysqli_real_escape_string($con, $ubicacion);
        $email = mysqli_real_escape_string($con, $email);
        $contrasenia = password_hash($contrasenia, PASSWORD_DEFAULT);

        $consulta_insertar = "INSERT INTO cliente (correo, nombre, ubicacion, contrasena, telefono) VALUES ('$email', '$nombre', '$ubicacion', '$contrasenia', '$telefono')";
        
        if (mysqli_query($con, $consulta_insertar)) {
            $salida = consultar_datos($con);
            echo $salida;
        } else {
            echo "Error: " . $consulta_insertar . "<br>" . mysqli_error($con);
        }
    } else {
        header("Location: ../signup.php?error_signup=El usuario ya existe");
        exit();
    }
}

function consultar_datos($con) {
    $consulta = "SELECT * FROM cliente";
    $resultado = mysqli_query($con, $consulta);

    $salida = "";

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            session_start();
            $_SESSION["correo"] = $fila["correo"];
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["telefono"] = $fila["telefono"];
            $_SESSION["ubicacion"] = $fila["ubicacion"];
            header("Location: ../index.php");

        }
    } else {
        $salida = "Sin datos";
    }

    return $salida;
}
mysqli_close($con);
?>
