<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];

$mysql = new mysqli('localhost', 'root', 'root', 'web');
$mysql->query("INSERT INTO 'user' ('name', 'email', 'password') VALUES ('$name', '$email', '$password')");
$mysql->close();
?>