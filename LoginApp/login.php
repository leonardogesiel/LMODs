<?php
    $conn = mysqli_connect("localhost", "root", "", "database_example");
	mysqli_query($conn, "SET NAMES 'utf8'");
	
	$username = $_POST["UserName"];
	$password = $_POST["Password"];
	$query = "select id from users where username = "'.$username.'" and password = "'.$password.'"';
	$result = mysqli_query($conn, $query) or die('error: ' .mysql_error());
	
	if(mysqli_num_rows($result) == 1) {
	echo "sucess";	
	} else {
	echo "error";	
	}
?>