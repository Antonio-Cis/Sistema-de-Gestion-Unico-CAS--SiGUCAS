<?php
  require("../Modelo/class.phpmailer.php");

function correo_crear($destino ,$uid , $cedula){
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->CharSet = "UTF-8";
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->Username = "sac.noreply@unl.edu.ec";
  $mail->Password = "sdir@uti#19010943.Sac";
  $mail->setFrom('sac.noreply@unl.edu.ec', 'Servicios de Autentificación Centralizada SAC');
  $mail->IsHTML(true);
  $mail->addAddress($destino, 'USUARIO SAC');
  $mail->Body ='<html>
  <head>
  <title>Creación de Cuenta de usuario</title>
  <body>
              <center><img src="unl.png" width="284" height="166"></center>
              <p style="font-family: Helvetica LT Condensed; color: #008895; font-weight: bold; font-size: 22px; text-align: center;">CUENTA DE USUARIO</p></td>
              <p align="center">Universidad Nacional de Loja</p>
              <p align="center">Unidad de Telecomunicaciones e Información</p>
              <p align="center">Sistema de Administracion Central SAC</p>
              <p>Estimado Usuario usted a sido añadido al sistema de autenticación central SAC, para que pueda hacer uso de los siguientes sistemas (Cedia y Eduroam).</p>
              <p align="left"><b>Usuario: '.$uid.'</p>
              <p align="left"><b>Contraseña: '.$cedula.'</p>
  </body>
  </html>
  ';
$mail->Subject = "Cuenta de Usuario del Sistema SAC";

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}

function correo_vincular($destino ,$grupo){
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->CharSet = "UTF-8";
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->Username = "sac.noreply@unl.edu.ec";
  $mail->Password = "sdir@uti#19010943.Sac";
  $mail->setFrom('sac.noreply@unl.edu.ec', 'Servicios de Autentificación Centralizada SAC');
  $mail->IsHTML(true);
  $mail->addAddress($destino, 'USUARIO SAC');
  $mail->Body ='<html>
  <head>
  <title>Creación de Cuenta de usuario</title>
  <body>
              <center><img src="unl.png" width="284" height="166"></center>
              <p style="font-family: Helvetica LT Condensed; color: #008895; font-weight: bold; font-size: 22px; text-align: center;">Sistema SAC</p></td>
              <p align="center">Universidad Nacional de Loja</p>
              <p align="center">Unidad de Telecomunicaciones e Información</p>
              <p align="center">Sistema de Administracion Central SAC</p>
              <p>Estimado Usuario usted a sido vinculado con éxito al siguiente grupo).</p>
              <p align="left"><b>Grupo: '.$grupo.'</p>
  </body>
  </html>
  ';
$mail->Subject = "Vinculación de Usuario";


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}

function correo_restablecer($destino ,$enlace){
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->CharSet = "UTF-8";
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->Username = "sac.noreply@unl.edu.ec";
  $mail->Password = "sdir@uti#19010943.Sac";
  $mail->setFrom('sac.noreply@unl.edu.ec', 'Servicios de Autentificación Centralizada SAC');
  $mail->IsHTML(true);
  $mail->addAddress($destino, 'USUARIO SAC');
  $mail->Body ='<html>
  <head>
  <title>Restablecimiento de Contraseña</title>
  <body>
              <center><img src="unl.png" width="284" height="166"></center>
              <p style="font-family: Helvetica LT Condensed; color: #008895; font-weight: bold; font-size: 22px; text-align: center;">Sistema SAC</p></td>
              <p align="center">Universidad Nacional de Loja</p>
              <p align="center">Unidad de Telecomunicaciones e Información</p>
              <p align="center">Sistema de Administracion Central SAC</p>
              <p>Estimado Usuario usted a solicitado un restablecimiento de contraseña para hacerlo ingrese en el siguiente link.</p>
              <p align="left"><b>Enlace: '.$enlace.'</p>
  </body>
  </html>
  ';
$mail->Subject = "Restablecimiento de Contrasenia";


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}

function correo_cambio_contra($destino){
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->CharSet = "UTF-8";
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->Username = "sac.noreply@unl.edu.ec";
  $mail->Password = "sdir@uti#19010943.Sac";
  $mail->setFrom('sac.noreply@unl.edu.ec', 'Servicios de Autentificación Centralizada SAC');
  $mail->IsHTML(true);
  $mail->addAddress($destino, 'USUARIO SAC');
  $mail->Body ='<html>
  <head>
  <title>Cambio de Contraseña</title>
  <body>
              <center><img src="unl.png" width="284" height="166"></center>
              <p style="font-family: Helvetica LT Condensed; color: #008895; font-weight: bold; font-size: 22px; text-align: center;">Sistema SAC</p></td>
              <p align="center">Universidad Nacional de Loja</p>
              <p align="center">Unidad de Telecomunicaciones e Información</p>
              <p align="center">Sistema de Administracion Central SAC</p>
              <p>Estimado Usuario su contraseña fue cambiada con éxito</p>

  </body>
  </html>
  ';
$mail->Subject = "Cambio de Contrasenia";


if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}




?>
