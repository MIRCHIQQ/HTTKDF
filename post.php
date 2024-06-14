<?php
$to = "gricevanton8@g.com";
$subject = "Новое сообщение";
$message = "Имя: ".$_POST['first_name']."\nE-mail: ".$_POST['email']."\nТелефон: ".$_POST['phone']."\nАдрес: ".$_POST['address']."\n\n".$_POST['message'];
$headers = "From: example@mail.ru \r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "Сообщение отправлено";
} else {
  echo "Ошибка при отправке сообщения";
}
?>
