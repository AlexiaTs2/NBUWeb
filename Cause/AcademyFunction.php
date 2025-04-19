<?php
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';
require_once '../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $experience = $_POST['experience'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '19202@uktc-bg.com';
        $mail->Password   = 'nkfo bqqu shrn oznq';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ],
        ];
        

        $mail->setFrom('19202@uktc-bg.com', 'Academy Signup');
        $mail->addAddress('19202@uktc-bg.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Ride&Help Academy Email';
        $mail->Body = "
            <p><strong>Име:</strong> $name</p>
            <p><strong>Имейл:</strong> $email</p>
            <p><strong>Телефон:</strong> $phone</p>
            <p><strong>Ниво на опит:</strong> $experience</p>
        ";

        $mail->send();

        header("Location: ../Cause/index.php?academy=1#section4");
        exit();
    } catch (Exception $e) {
        $errorMessage = urlencode($e->getMessage());
        header("Location: ../Cause/index.php?academy=0&error=$errorMessage#section4");
        exit();
    }
}
?>