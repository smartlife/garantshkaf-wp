<?php
// Отправляет результаты квиза на почту после заполнения.
	
	session_start();
	$win = "true";

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

	$answer1 = $_SESSION['answer1'];
	$answer2_1 = $_SESSION['answer2-1'];
	$answer2_2 = $_SESSION['answer2-2'];
	$answer2_3 = $_SESSION['answer2-3'];
	$answer2_4 = $_SESSION['answer2-4'];
	$answer3 = $_SESSION['answer3'];

	$mail .= "Имя клиента: ".$name."\n\n";
	$mail .= "Телефон клиента: ".$tel."\n\n";
	$mail .= "Email клиента: ".$email."\n\n";
	$mail .= "Тип шкафа: ".$answer1."\n\n";
	$mail .= "Длина: ".$answer2_1."\n\n";
	$mail .= "Ширина: ".$answer2_2."\n\n";
	$mail .= "Высота: ".$answer2_3."\n\n";
	$mail .= "Глубина: ".$answer2_4."\n\n";
	$mail .= "Количество дверей: ".$answer3."\n\n";

	/* Send mails */
	mail( "garantshkaf@mail.ru", "Заявка на расчет шкафа с сайта гарантшкаф.рф.", $mail );
	mail( "vasilyev-r@mail.ru", "Заявка на расчет шкафа с сайта гарантшкаф.рф.", $mail );

	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p>Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>