<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "denis.koblya@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Аpplication from the site";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Hello, the form has been submitted!!!</p>
