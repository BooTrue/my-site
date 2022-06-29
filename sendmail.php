<?php

$name = htmlspecialchars($_GET["name"]);
$email = htmlspecialchars($_GET["email"]);
$message = htmlspecialchars($_GET["message"]);

mail("pea@d-element.ru",
    "Message from pea-sites.ru",
    'You have a new visitor: \r\n' .
    'Name: ' . $name . '\r\n' . 'E-mail: ' . $email . '\r\n' . 'Message: ' . $message);

?>