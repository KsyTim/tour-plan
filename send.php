<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$name = $_POST['input-name'];
$phone = $_POST['input-number'];
$message = $_POST['feedback-message'];
$subscription = $_POST['subscription-input'];

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

function subscribe($title,$body){
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
        $mail->Username   = 'kseniia.timoshenko.0220@gmail.com'; // Логин на почте
        $mail->Password   = '@choOl55'; // Пароль на почте
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

function feedback($title,$body){
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
        $mail->Username   = 'kseniia.timoshenko.0220@gmail.com'; // Логин на почте
        $mail->Password   = '@choOl55'; // Пароль на почте
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('kseniia.timoshenko.0220@gmail.com', 'Kseniia Timoshenko'); // Адрес самой почты и имя отправителя
        // Получатель письма
        $mail->addAddress('timoshenko.ksenia.1998@gmail.com');  
        // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body; 
        // $mail->send();   

        // Проверяем отравленность сообщения
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}

    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }

}

$action = $_POST["action"];
if($action =="subscribe"){
    subscribe($titleSub, $bodySub);
    header('Location: subscribe.php');
}

if($action == "feedback"){ 
    feedback($title, $body);
    header('Location: feedback.php');
}
else {
    echo "Error";
}
