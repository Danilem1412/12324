<?php
$name = htmlspecialchars(strip_tags($_POST['name']));
$surname = htmlspecialchars(strip_tags($_POST['surname']));
$phone = htmlspecialchars(strip_tags($_POST['phone']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$text = htmlspecialchars(strip_tags($_POST['text']));



$to = "breadsmiggles@gmail.com";
$date = date("d.m.Y");
$time = date("h:i");
$from = $email;
$subject = "Заявка c сайта";


$msg = "
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text";
mail($to, $subject, $msg, "From: $from ");
?>