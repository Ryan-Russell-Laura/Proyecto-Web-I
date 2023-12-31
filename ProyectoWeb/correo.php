<?php
if (isset($_POST['registrar'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['celular'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $celular = $_POST['celular'];

        $to = $email;
        $subject = 'Registro Exitoso';
        $message = "Hola $name,\n\nGracias por registrarte. Tu registro ha sido exitoso.\n\nDetalles de registro:\nEmail: $email\nContraseña: $password\nNúmero de Celular: $celular";
        $headers = 'From: noreply@example.com' . "\r\n" .
            'Reply-To: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $mail = @mail($to, $subject, $message, $headers);

        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
?>
