<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Encrypting & Decrypting Strings for Security</title>
</head>
<body>
<?php

$password = "helloclass";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo  $hashed_password;

?>
</body>
</html>