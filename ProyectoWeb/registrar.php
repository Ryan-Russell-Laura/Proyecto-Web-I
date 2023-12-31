<?php

include("con_db.php");
    if(isset($_POST['registrar']))
    {
      if(strlen($_POST['name'])>=1 &&
       strlen($_POST['email'])>=1 &&
       strlen($_POST['password'])>=1 &&
       strlen($_POST['celular'])>=1){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);
        $celular=trim($_POST['celular']);
        $consulta = "INSERT INTO datos(name, email, password, celular) VALUES ('$name','$email','$password','$celular')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3>Te has registrado correctamente!</h3>
            <?php
        }else{
            ?>
            <h3>Ha ocurrido un error!</h3>
            <?php
        }
       }else{
            ?>
            <h3>Por favor complete los campos!</h3>
            <?php
       }
    }
?>