<?php
require('coneccion.php');
session_start();

function modificar() {
    $conn = conectar_bd();
    
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Recoger datos del formulario
    $newNombre = $_POST['nuevoNombre'];
    $newEmail = $_POST['nuevoEmail'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['nuevaPassword'];
    $newUbicacion = $_POST['nuevaDireccion']; // Se cambió el nombre a ubicacion
    $newTelefono = (int)$_POST['nuevoNumero']; // Convertir a entero
    $correo = $_SESSION['correo']; // Usamos el correo desde la sesión

    // Verificar la contraseña actual del usuario por correo
    $sql_verif = "SELECT contrasena FROM cliente WHERE correo = ?";
    if ($stmt = $conn->prepare($sql_verif)) {
        $stmt->bind_param("s", $correo); // Buscamos el usuario por correo
        $stmt->execute();
        $stmt->bind_result($contrasenaActual);
        $stmt->fetch();
        $stmt->close();

        // Verificar si la contraseña coincide
        if (password_verify($oldPassword, $contrasenaActual)) {

            // Verificar si el nuevo correo electrónico ya existe
            $sql_check_email = "SELECT COUNT(*) FROM cliente WHERE correo = ?";
            if ($stmt = $conn->prepare($sql_check_email)) {
                $stmt->bind_param("s", $newEmail);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();

                if ($count > 0 && $correo != $newEmail) {
                    echo "El nuevo correo electrónico ya está en uso. <a href='modificar_form.php'>Intentar de nuevo</a>";
                } else {
                    // Si el correo electrónico no existe o es el mismo, procedemos a actualizar
                    $sql_modificar = "UPDATE cliente SET nombre = ?, correo = ?, contrasena = ?, ubicacion = ?, telefono = ? WHERE correo = ?";
                    if ($stmt = $conn->prepare($sql_modificar)) {
                        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                        $stmt->bind_param("ssssis", $newNombre, $newEmail, $hashedPassword, $newUbicacion, $newTelefono, $correo); // Usamos el correo para actualizar
                        
                        if ($stmt->execute()) {
                            // Actualizar las variables de sesión con los nuevos valores
                            $_SESSION['correo'] = $newEmail;
                            $_SESSION['nombre'] = $newNombre;
                            $_SESSION['ubicacion'] = $newUbicacion;
                            $_SESSION['telefono'] = $newTelefono;

                            header("Location: ../index.php");
                        } else {
                            echo "Error al modificar los datos: " . $stmt->error;
                        }

                        $stmt->close();
                    }
                }
            } else {
                echo "Error al preparar la consulta de verificación del correo electrónico.";
            }
        } else {
            echo "Contraseña incorrecta. <a href='modificar_form.php'>Intentar de nuevo</a>";
        }
    } else {
        echo "Error al preparar la consulta de verificación de la contraseña.";
    }

    $conn->close();
}

// Llamamos a la función modificar solo si es una petición POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    modificar();
}
?>
