<?php 
require("coneccion.php");

$con = conectar_bd();

if (isset($_POST["envio"])) {
    
    $email = $_POST["email"];
    $contrasenia = $_POST["password"];

    // Llamada a la función login
    logear($con, $email, $contrasenia);
}

$existe_usr = consultar_existe_usr($con, $email); 

function consultar_existe_usr($con, $email) {

    $email = mysqli_real_escape_string($con, $email);
    $consulta_existe_usr = "SELECT correo FROM cliente WHERE correo = '$email'";
    $resultado_existe_usr = mysqli_query($con, $consulta_existe_usr);
    return mysqli_num_rows($resultado_existe_usr) > 0;
}

function logear($con, $email, $pass) {

    session_start();

    // Preparar la consulta SQL usando una declaración preparada
    $consulta_login = "SELECT * FROM cliente WHERE correo = ?";
    
    if ($stmt = mysqli_prepare($con, $consulta_login)) {
        // Enlazar los parámetros (s: string)
        mysqli_stmt_bind_param($stmt, "s", $email);
        
        // Ejecutar la consulta
        mysqli_stmt_execute($stmt);
        
        // Obtener el resultado de la consulta
        $resultado_login = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($resultado_login) > 0) {

            // Se crea una variable con el objeto fetch asoc para acceder a las columnas que necesite
            $fila = mysqli_fetch_assoc($resultado_login);

            // Asigno en una variable el campo pass de la BD...
            $password_bd = $fila["contrasena"];

            // Uso la función password_verify para comparar lo que ingresa el usuario con lo que tengo en la BD.
            if (password_verify($pass, $password_bd)) {
                
                // Si todo es correcto, inicio la sesión y guardo los datos necesarios
                $_SESSION["correo"] = $email;
                $_SESSION["nombre"] = $fila["nombre"];
                $_SESSION["telefono"] = $fila["telefono"];
                $_SESSION["ubicacion"] = $fila["ubicacion"];
                
                // Redirijo a la página del usuario logueado
                header("Location: ../index.php");
                exit();
            } else {
                // Contraseña incorrecta
                header("Location: ../login.php?error=Contraseña incorrecta");
                exit();
            }
        } else {
            // Usuario no encontrado
            header("Location: ../login.php?error=Usuario no encontrado");
            exit();
        }
        
        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        // Error en la preparación de la consulta
        header("Location: ../login.php?error=Error en la base de datos");
        exit();
    }
}
?>
