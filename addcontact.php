<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sql = "insert into contact(name, email, message) values('{$name}', '{$email}', '{$message}')";
	$result = mysqli_query($conn, $sql);
	echo "ok";
?>