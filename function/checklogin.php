<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['userLogin'])){
		header("location:/profile/admin/login.php");
	}
?>