
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../templates/admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files --> 
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main --> 
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
					<!-- login form -->

					<div class="login-form loginw3-agile"> 
						<div class="agile-row">
							<h1>Login Form</h1>
							<?php 
								if (isset($_GET["err"])) {
									$msg = "Email or Password invalid";
							?> 
							<h4><?= $msg ?></h4>
							<?php } ?>
							<div class="login-agileits-top"> 	
								<form action="loginController.php" method="post"> 
									<p>Email </p>
									<input type="text" class="name" name="email" required=""/>
									<p>Password</p>
									<input type="password" class="password" name="password" required=""/>  
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span> Remember me ?</span> 
									</label> 
									<input type="submit" name="submit" value="Login"> 
								</form> 	
							</div> 
							
						</div>  
					</div>   
				</div>
				<div class="w3lsfooteragileits">
					<p> &copy; Login Form. All Rights Reserved | Design by <a href="" target="_blank">VTS</a></p>
				</div> 
			</div>   
		</div>
	</div>	 
	<!-- //main --> 
</body>
</html>