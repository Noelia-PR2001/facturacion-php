<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
include 'vendor/PHPMailer/src/Exception.php';
include 'vendor/PHPMailer/src/PHPMailer.php';
include 'vendor/PHPMailer/src/SMTP.php';
require __DIR__ . '/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Create PDF
    ob_start();
    require __DIR__ . '/bill_pdf.php';
    $html = ob_get_clean();

    $html2pdf = new Html2Pdf(
        'P',
        'A4',
        'es',
        true,
        'UTF-8',
        array(5,5,0,5)
    );

    $html2pdf->writeHTML($html); 
    $pdfContent = $html2pdf->output('', 'S');

    //Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.serviciodecorreo.es';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@onsistems.com';                     //SMTP username
    $mail->Password   = 'MPK?6j6F1$Urv,2a';                      //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;         //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('no-reply@onsistems.com', 'Info onsistems');
    $mail->addAddress('osilvium@gmail.com', 'ChuoaCabra');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Factura Servicios';
    $mail->Body    = "<p>Buenas,</p><br><br><p>Aqui le envio la factura de mis servicio de este mes</p>";
    $mail->AltBody = "Buenas. Aqui le envio la factura de mis servicio de este mes.";

    require __DIR__ . '/generar_pdf.php';
    
    $mail->addStringAttachment($pdfContent, 'factura.pdf');


    $mail->send();
    header('Location: /');
    echo 'Message has been sent';
} catch (PHPMailer\PHPMailer\Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}