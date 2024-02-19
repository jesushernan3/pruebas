<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';

    $formName = $_POST['name'];
    $formEmail = $_POST['email'];
    $formMobile = $_POST['mobile'];
    $formMessage = $_POST['message'];

    $body = "Nombre: " . $formName .'<br>'.
            "Correo: " . $formEmail .'<br>'.
            "Telfono: " . $formMobile .'<br>'.
            "Mensaje: " . $formMessage;

    $mail = new PHPMailer(true);

    
    if (isset($_POST['submit'])) {
      
      
      
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->Host = "smtp.mailtrap.io"; // SMTP a utilizar. Por ej. smtp.elserver.com
      $mail->Username = "a92a1db0d2361d"; // Correo completo a utilizar
      $mail->Password = "dfdc81142056f9"; // Contraseña
      $mail->Port = 25; // Puerto a utilizar
      
  
  //Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
  
    $mail->setFrom($formEmail, $formName);
    $mail->addAddress('acrobata@protonmail.com', 'Administrador del sitio');     // Add a recipient

    //Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = 'este es el asunto'; // Este es el titulo del email.
    $body = 'esta es la primera linea <br>';
    $body = 'del codigo de prueba <strong>mensaje</strong>';
    $mail->Body = $body; // Mensaje a enviar

    $exito = $mail->Send(); // Envía el correo.
    echo 'mensaje se ha enviado';

    //También podríamos agregar simples verificaciones para saber si se envió:
    // if($exito){
    //   echo (‘El correo fue enviado correctamente’);
    // }else{
    // echo ‘Hubo un inconveniente. Contacta a un administrador.’;
    // }


}

    var_dump($formEmail);
      die();
  // if (isset($_POST['submit'])) {
  //   $subject = $_POST['submit'];
  //   $subject = $_POST['email'];
  //   $subject = $_POST['message'];


    
  // }

      // :::Credenciales de El Server ::: //
      // $mail->Host = "smtp.crmode.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
      // $mail->Username = "info@crmode.com"; // Correo completo a utilizar
      // $mail->Password = "1Qaz3Plo*"; // Contraseña
      // $mail->Port = 465;