<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email-address'; // Your email
    $mail->Password = 'your-app-password'; // https://www.youtube.com/watch?v=jjDNndrl7_U
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // SMTP port

    // Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('receiver-email'); // Email you'd like the message to be sent to.

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Message from Contact Form';
    $mail->Body    = nl2br("
        Name: {$_POST['name']}<br>
        Email: {$_POST['email']}<br>
        Mobile: {$_POST['mobile']}<br>
        Website: {$_POST['website']}<br>
        Message: {$_POST['message']}
    ");
    $mail->AltBody = strip_tags("
        Name: {$_POST['name']}
        Email: {$_POST['email']}
        Mobile: {$_POST['mobile']}
        Website: {$_POST['website']}
        Message: {$_POST['message']}
    ");

    $mail->send();
    echo 'Your message has been sent!';
} catch (Exception $e) {
    echo "Sorry, failed to send your message. Mailer Error: {$mail->ErrorInfo}";
}
?>
