<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    ob_start();
	$localhost = 'localhost';
	$username = "root";
	$password = "";
	$database = 'profile';
	$conn = new mysqli($localhost,$username,$password,$database);
	$conn->set_charset('utf8');
	if(mysqli_connect_errno()){
		echo "Có lỗi xãy ra khi kết nối : " .mysqli_connect_orror();
		die();
	}

?>