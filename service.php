<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<pre>
<?php 
	$user_name = "root";
	$password = "";
	$database = "events";
	$server = "localhost";
	$link = mysqli_connect($server, $user_name,$password)
	or die("Unable to connect to MySQL");
	
	$selected = mysqli_select_db($link, $database)
	or die("Could not select events");
	printf("Connection to the Server Opened");
	
	$SQL = "SELECT * FROM people";
	$result = mysqli_query($link,$SQL);
		while($db_field = mysqli_fetch_assoc($result)){
			printf($db_field['ID'] . "</br>");
		}
	print_r($_POST);
?>
</pre>
<!-- try linking a submit button to a certain link-->
<a href = "index.html"> Go back </a>
<p> Your service will be reviewed within the next 48 hours, Thank you for your service to Alpha Phi Omega: Gamma Beta </p>
<form action = "index.html">

<input type = "submit" value = "Go Back" ></input>
</form>
</body>

</html>