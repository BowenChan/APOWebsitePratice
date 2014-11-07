<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$pass = strip_tags($_POST["password"]);
$pass2 = md5($pass);
$pass3 = sha1($pass);
	print "This is the password " . $pass . " Crypted is " . $pass2 . " Crypted2 is " . $pass3;
if(empty($pass))
{
	header("Location: http://localhost/apo/login.html");
?>
</body>
</html>