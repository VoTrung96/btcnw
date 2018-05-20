<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/checklogin.php' ?>
<?php
	if (!isset($_GET['id'])){
		header("location:index.php?err=1");
        exit;
	}
	$id = $_GET['id'];
	$sql = "delete from experiences where id = {$id}";
	$result = mysqli_query($conn, $sql);
	if ($result) {
	    header("location:index.php?msg=3");
	    exit;
	} else {
		header("location:index.php?err=1");
	    exit;
	}
?>