<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['tel']));
	$name = htmlspecialchars(trim($_POST['name']));
	$complect_type = htmlspecialchars(trim($_POST['complect_type']));
	$complect =  htmlspecialchars(trim($_POST['complect']));
	$plishad =  htmlspecialchars(trim($_POST['plishad']));
	$complect_y = htmlspecialchars(trim($_POST['complect_y']));
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$error) {
		$address = "ekaterem@mail.ru";
		$mes = 
			"Телефон: ".$email."\n\n
			Имя: ".$name."\n\n
			Тема: 'Заявка на расчёт стоимости c сайта проектируем онлайн'\n\n
			Сообщение: \n\n  
			Телефон: ".$email."\n\n
			ТИП ОБЪЕКТА: ".$complect_type."\n\n
			ТИП КОМПЛЕКТАЦИИ: ".$complect."\n\n
			ЖЕЛАЕМАЯ ПЛОЩАДЬ ДОМА: ".$plishad."\n\n
			ТЕСТЬ УЧАСТОК: ".$complect_y."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'Ваша заявка отправлена!';  echo '<br><a href="https://xn--80adicmck1addgme0a.xn--80asehdb/"> назад</a>';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>