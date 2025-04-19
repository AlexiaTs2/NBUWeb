<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

if (isset($_POST['submit'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '19202@uktc-bg.com';           // Твоят Gmail
        $mail->Password   = 'nkfo bqqu shrn oznq';         // Приложна парола от Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer'       => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true
    ]
];


        $mail->setFrom('19202@uktc-bg.com', 'Ride & Help');
        $mail->addAddress('19202@uktc-bg.com');

        $mail->isHTML(true);
        $mail->Subject = 'Ride&Help Email';
        $mail->Body    = "
            <p><strong>Име:</strong> $name</p>
            <p><strong>Имейл:</strong> $email</p>
            <p><strong>Телефон:</strong> $phone</p>
            <p><strong>Съобщение:</strong><br>$message</p>
        ";

        $mail->send();

        // Успешно изпратено
        header("Location: index.php?success=1#section9");
        exit();
    } catch (Exception $e) {
        // Покажи точната грешка
        echo "<h3 style='color: orange;'>Грешка при изпращане на имейл:</h3>";
        echo "<pre>" . $mail->ErrorInfo . "</pre>";
        exit();
    }
}
?>


