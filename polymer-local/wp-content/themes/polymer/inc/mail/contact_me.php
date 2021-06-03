<?php

if( $_POST ){
	require 'phpmailer/PHPMailerAutoload.php';


$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$nameCompany = strip_tags(htmlspecialchars($_POST['nameCompany']));
$message = strip_tags(htmlspecialchars($_POST['message']));

//info
//,e45DpVyFDkk

	$mail = new PHPMailer;

	$mail->isSMTP();

	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'no-reply@380-volt.kz'; // логин от вашей почты
	$mail->Password = '$82yHuQOLpis'; // пароль от почтового ящика
	$mail->SMTPSecure = 'ssl';
	$mail->Port = '465';

	$mail->CharSet = 'UTF-8';
	$mail->From = 'no-reply@380-volt.kz'; // адрес почты, с которой идет отправка
	$mail->FromName = $name; // имя отправителя
	$mail->addReplyTo($email_address, $name); // кому ответить
	$mail->addAddress('dmzhvk@gmail.com', '380 volt');
	//$mail->addAddress('bullet2018@mail.ru', '380 volt');

	$mail->Subject = "Заполнена форма заявки:  $email_address";
	$mail->Body = "Вы получили новое сообщение из контактной формы обратной связи вашего сайта.\n\n"."Имя: $name\n\nEmail: $email\n\nНазвание компании: $nameCompany\n\nСообщение:\n$message";

	// $mail->SMTPDebug = 1;

	if( $mail->send() ){
		$answer = '1';
	}else{
		$answer = '0';
		/*echo 'Письмо не может быть отправлено. ';
		echo 'Ошибка: ' . $mail->ErrorInfo;*/
	}
	
	die( $answer );
}

       
?>
