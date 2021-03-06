<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$name = $_POST['input-name'];
$phone = $_POST['input-number'];
$message = $_POST['feedback-message'];
$subscription = $_POST['subscription-input'];
$modalName = $_POST['modal-window-name'];
$modalEmail = $_POST['modal-window-email'];
$modalNumber = $_POST['modal-window-number'];
$modalMessage = $_POST['modal-window-message'];

$titleSub = "Подписка Best Tour Plan";
$bodySub = "
Данный пользователь <b>$subscription</b> хотел бы оформить новостную подписку!
";

$title = "Новое обращение Best Tour Plan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

$titleModal = "Новое бронирование Best Tour Plan";
$bodyModal = "
<h2>Новая заявка на бронирование</h2>
<b>Имя:</b> $modalName<br>
<b>Телефон:</b> $modalNumber<br>
<b>E-mail:</b> $modalEmail<br><br>
<b>Сообщение:</b><br>$modalMessage
";

function sendMessage($title,$body){
    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        //$mail->SMTPDebug = 2;
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        // Настройки вашей почты
        $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
        $mail->Username   = 'kseniia.timoshenko.0220@gmail.com'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('kseniia.timoshenko.0220@gmail.com', 'Kseniia Timoshenko'); // Адрес самой почты и имя отправителя
        // Получатель письма
        $mail->addAddress('timoshenko.ksenia.1998@gmail.com');  
        // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;    

        // Проверяем отравленность сообщения
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }

}

$action = $_POST["action"];
if ($action == "subscribe") {
    sendMessage($titleSub, $bodySub);
    header('Location: subscribe.php');
} elseif ($action == "feedback") { 
    sendMessage($title, $body);
    header('Location: feedback.php');
} elseif ($action == "modal-window") {
    sendMessage($titleModal, $bodyModal);
    header('Location: booking.php');
}
else {
    echo "Error";
}
