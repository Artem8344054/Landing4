<?
//var_dump($_GET);
?>

<?php
//    if (isset($_POST)) {
//         print("Name: " . $_POST['name']);
//         print("Number: " . $_POST['number']);
//         print("Date: " . $_POST['date']);
        
// 		print("Time: " . $_POST['time']);
		
// 		print("Phone: " . $_POST['phone']);

		
//     }
?>

<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$phone = $_POST['phone'];
       

	$to = "bars834@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = time ("h:i");
	$from = $email;
	$subject = "Аpplication from the site";

	
	$msg="
    name: $name /n
    number: $number /n
    date: $date /n
    number: $number /n
    time: $time /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Hello, the form has been submitted.</p>
