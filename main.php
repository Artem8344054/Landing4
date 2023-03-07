<?
var_dump($_GET);
?>

<?php
    if (isset($_POST)) {
        print("Name: " . $_POST['name']);
        print("Number: " . $_POST['number']);
        print("Date: " . $_POST['date']);
        
		print("Time: " . $_POST['time']);
		
		print("Phone: " . $_POST['phone']);

		print("Phone: " . $_POST['phone']);
    }
?>
