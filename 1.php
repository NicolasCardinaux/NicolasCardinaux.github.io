<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];

$formcontent="
    Nombre: $nombre \n
    E-mail: $correo \n
    Tema: $tema \n
";

$recipient = "niconccar@gmail.com";

$subject = "Web de servicios";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>
