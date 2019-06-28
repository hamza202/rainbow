<?php


require('php_mailer/src/PHPMailer.php');
require('php_mailer/src/SMTP.php');

$mail = new PHPMailer\PHPMailer\PHPMailer();

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$course = $_POST["course"];

try {
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host       = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->Port       = 465;
    $mail->isHTML(true);
    $mail->Username   = 'no.replay.website.messages@gmail.com';
    $mail->Password   = 'ufwijbcfgcyjpjrt';

    $mail->setFrom('no-replay@rainbow.com', 'Rainbow');
    $mail->Subject = 'Rainbow | New Course Registration';
    $mail->Body    = 'رسالة تسجيل جديدة لدورة تدريبية ، بهذه التفاصيل<br>
                        الاسم : ' . $name . '<br>
                        رقم الجوال  : ' . $mobile . ' <br> 
                        العنوان : ' . $address . '<br>
                        اسم الدورة التدريبية : ' . $course;

    $mail->addAddress('info@rainbowcc.co');
    $mail->send();

    header("Location:index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>