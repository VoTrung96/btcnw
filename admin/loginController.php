<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<?php
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "select id, email from users where email = '{$email}' and password = '{$password}' limit 1";
		$result = mysqli_query($conn, $query);
		$userLogin = mysqli_fetch_assoc($result);
		if(count($userLogin) > 0){
			$_SESSION['userLogin'] = $userLogin;
			echo $_SESSION['userLogin']['id'];
			header("location:/profile/admin/home.php");
			exit;
		}else{
			header("location:/profile/admin/login.php?err=1");
			exit;
		}
	}
?>