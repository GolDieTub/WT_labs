<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

function SendMessage($customer, $msg)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true;
        $mail->Host = 'ssl://smtp.mail.ru';
        $mail->Username = 'goldietub@mail.ru';
        $mail->Password = 'P$pRPiFpde92';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('goldietub@mail.ru', 'Владимир Кучеренко');
        $mail->addAddress($customer);
        $mail->isHTML(true);
        $mail->Subject = "Claude Monet";
        $mail->Body = $msg;
        if ($mail->send()) {
            return 1;
        }
    } catch (Exception $e) {
        return 0;
    }
}


function FormMailMessage($orders,$i){
    $msg="<b>Уважаемый Владимир</b>. Ваш заказ успешно оформлен и отправлен на сборку<br>
		<br><b>Информация о доставке:</b>
		<br>Контактный телефон: +375298401290
		<br><b>Информация о заказе:</b>
		<br>Стоимость: {$orders[$i]['цена']}$
		<br>Дата: {$orders[$i]['дата']}
		<br>Время: {$orders[$i]['время']}<br>";
    return $msg;
}
