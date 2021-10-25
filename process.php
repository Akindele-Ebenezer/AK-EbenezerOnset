<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tobi.akindele@gmail.com';                     //SMTP username
    $mail->Password   = 'ebenkeyz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email);
    $mail->addAddress('tobi.akindele@gmail.com', 'Ebenezer');     //Add a recipient
   // $mail->addAddress('tobi.akindele@gmail.com');               //Name is optional
    $mail->addReplyTo($email); 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "Email: $email" . ' <br><br>' . $message;
    $mail->AltBody = 'Bye!';

    $mail->send();
    echo "<p style='font-family: verdana; font-style: italic'>Message has been sent.</p> <hr>";
	echo "<p style='font-family: verdana'>Thanks for your time, " . '<strong>' . strtoupper($name) . '</strong>' . '.' . " I'll get back to you.</p> <hr>";
	echo "<p style='font-family: verdana'><a href='index.php'><strong>Go back to my SITE.</strong></a></p>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
