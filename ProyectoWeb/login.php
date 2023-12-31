<?php
include("con_db.php");

if(isset($_POST['login'])) {
    if(strlen($_POST['login_email']) >= 1 && strlen($_POST['login_password']) >= 1) {
        $email = trim($_POST['login_email']);
        $password = trim($_POST['login_password']);

        $consulta = "SELECT * FROM datos WHERE email='$email' AND password='$password'";
        $resultado = mysqli_query($conex, $consulta);

        if(mysqli_num_rows($resultado) > 0) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['email'] = $email;
            header("Location: tienda.php"); // Redirige a la página de bienvenida o a donde desees
            exit();
        } else {
            // Usuario o contraseña incorrectos
            echo "<h3>Usuario o contraseña incorrectos. Inténtalo de nuevo.</h3>";
        }
    } else {
        // Por favor, complete todos los campos
        echo "<h3>Por favor, complete todos los campos.</h3>";
    }
}
?>