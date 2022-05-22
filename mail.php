<?php 
	$de = "scorpionmorales17@gmail.com";
	$name = $_POST["name-contact"];
	$para = $_POST["email-contact"];
	$message = $_POST["message-contact"];

	$header = "Enviado a traves del Blog: Desarrollo Web";

	$messageComplete = $message . "\nAtentamente: " . $name;

	if (mail($para, $message, $messageComplete, $de)){
		echo "Correo enviado satisfactoriamente";
	}
	echo "<script> window.location.href='index.php' </script>";
?>