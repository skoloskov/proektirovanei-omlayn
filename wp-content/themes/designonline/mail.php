<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['tel']));
	$name = htmlspecialchars(trim($_POST['name']));
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$error) {
		$address = "ekaterem@mail.ru";
		$mes = "Телефон: ".$email."\n\nИмя: ".$name."\n\nТема: 'Заявка на расчёт стоимости c сайта проектируем онлайн'\n\nСообщение: ".$email."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'Ваша заявка отправлена!';  echo '<br><a href="https://xn--80adicmck1addgme0a.xn--80asehdb/"> назад</a>';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>