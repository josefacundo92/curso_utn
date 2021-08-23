<?php


//Registrar datos

include('conexion_db_registro.php');

if(isset($_POST['enviar_mensaje'])){
    
    $apellido= $_POST['apellido'];
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	

	//creación y ejecución consulta
	$consulta= "INSERT INTO suscriptores (apellido,nombre,email) VALUES('$apellido','$nombre','$correo')";
	$respuesta= mysqli_query($conexion,$consulta);
    
	// header("location:index.php");	
	
}



$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$body = "Nombre: ". $nombre . "<br>Correo: ". $correo . "<br>Mensaje: ". $mensaje; 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'correodeprueba.fp@gmail.com';                     //SMTP username
    $mail->Password   = 'correodeprueba';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('correodeprueba.fp@gmail.com');     //Add a recipient    

    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enviado por: '. $nombre;
    $mail->Body= $body;
    $mail->CharSet= 'UTF-8';
   

    $mail->send();
    echo 'El mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

