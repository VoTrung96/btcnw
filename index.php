<?php require_once $_SERVER['DOCUMENT_ROOT'].'/profile/function/dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple CV</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple CV Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="templates/public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="templates/public/css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="templates/public/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->   
<link rel="stylesheet" href="templates/public/css/swipebox.css">    <!-- swipebox -->   
<!-- //Custom Theme files --> 
<!-- js -->
<script src="templates/public/js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body>  
	<!-- main --> 
	<div class="buttons-wrapper"> 
		<input id="slide1" class="w3slider-input" type="radio" name="slider" checked>
		<input id="slide2" class="w3slider-input" type="radio" name="slider">
		<input id="slide3" class="w3slider-input" type="radio" name="slider">
		<input id="slide4" class="w3slider-input" type="radio" name="slider">
		<ul class="slider">
			<li class="agileits"> 
				<!-- banner -->
				<div class="banner">
					<div class="banner-w3lsinfo">
						<h2>Simple CV</h2>
						<?php
							$sql = "select * from users";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)){
						?>
						<div class="container">
							<div class="col-md-4 header-w3left">
								<img width="350" height="350" src="files/<?=$row['avatar']?>" alt=""/>
								<div class="header-imgtext-w3ls">
									<h1><?=$row['name']?></h1> 
									
								</div>
							</div>
							<div class="col-md-8 header-w3right"> 
								<h3 class="agileits-title">ABOUT Me</h3> 
								<div class="profile-agileinfo"> 
									<p><?=$row['summary']?></p>
									<div class="col-md-6 col-xs-6 profile-grids"> 
										<i class="fa fa-user"></i>
										<h5>Personal Info</h5>
										<ul class="address"> 
											<li> 
												<b>JOB TITLE</b> : <?=$row['job']?>
											</li>
											<li> 
												<b>E-MAIL</b> : <a href="mailto:example@mail.com"> <?=$row['email']?></a>
											</li>
										</ul>
									</div>
									<div class="col-md-6 col-xs-6 profile-grids"> 
										<i class="fa fa-envelope"></i>
										<h5>Contact Me</h5>
										<ul class="address"> 
											<li> 
												<b>PHONE</b> : +<?=$row['phone']?>
											</li> 
											
											<li> 
												<b>ADDRESS</b> : <?=$row['address']?>
											</li>
										</ul>
									</div>
									
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<?php } ?>
						
					</div>
				</div>
				<!-- //banner --> 
			</li>
			<li class="agileits"> 
				<!-- skills --> 
				<div class="skills">
					<div class="container">
						<?php
							$sql = "select id, name from users limit 0,1";
							$result = mysqli_query($conn, $sql);
							$user1 = mysqli_fetch_assoc($result);
						?> 
						<div class="col-md-6 skills-w3lsleft">
							<h3 class="agileits-title"><?=$user1['name']?>'s Skills</h3> 
							
							<div class="skill-agileinfo">

								<?php
									$query = "select * from skills where user_id = {$user1['id']}";
									$result = mysqli_query($conn, $query);
									while($row = mysqli_fetch_assoc($result)){
								?>
								<div class="skillbar" data-percent="<?=$row['percent']?>">
									<span class="skillbar-title" style="background: #d35400;"><?=$row['name']?></span>
									<p class="skillbar-bar" style="background: #e67e22;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<?php } ?>
							</div>
						</div>

						<?php
							$sql = "select id, name from users limit 1,1";
							$result = mysqli_query($conn, $sql);
							$user2 = mysqli_fetch_assoc($result);
						?> 
						<div class="col-md-6 skills-w3lsleft">
							<h3 class="agileits-title"><?=$user2['name']?>'s Skills</h3> 
							
							<div class="skill-agileinfo">

								<?php
									$query = "select * from skills where user_id = {$user2['id']}";
									$result = mysqli_query($conn, $query);
									while($row = mysqli_fetch_assoc($result)){
								?>
								<div class="skillbar" data-percent="<?=$row['percent']?>">
									<span class="skillbar-title" style="background: #d35400;"><?=$row['name']?></span>
									<p class="skillbar-bar" style="background: #e67e22;"></p>
									<span class="skill-bar-percent"></span>
								</div>
								<?php } ?>
							</div>
						</div>
						  
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //skills --> 
			</li>
			<li class="agileits"> 
				<!-- work --> 
				<div class="work agileits-w3layouts">
					<div class="container">  
						<div class="col-md-6 work-agile-left">
							<h3 class="agileits-title"><?=$user1['name']?>'s Experience</h3> 
							<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
									$query = "select * from experiences where user_id = {$user1['id']}";
									$result = mysqli_query($conn, $query);
									while($row = mysqli_fetch_assoc($result)){
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title asd">
											<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$row['id']?>" aria-expanded="true" aria-controls="<?=$row['id']?>">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
												<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
												<?=$row['start_at']?> - <?=$row['finish_at']?>
											</a>
										</h4>
									</div>
									<div id="<?=$row['id']?>" class="panel-collapse collapse in" role="tabpanel">
										<div class="panel-body panel_text">
											<?=$row['summary']?>
										</div>
									</div>
								</div>
								<?php } ?>
							</div> 
							
						</div>

						<div class="col-md-6 work-agile-left">
							<h3 class="agileits-title"><?=$user2['name']?>'s Experience</h3> 
							<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
									$query = "select * from experiences where user_id = {$user2['id']}";
									$result = mysqli_query($conn, $query);
									while($row = mysqli_fetch_assoc($result)){
								?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title asd">
											<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$row['id']?>" aria-expanded="true" aria-controls="<?=$row['id']?>">
												<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
												<i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
												<?=$row['start_at']?> - <?=$row['finish_at']?>
											</a>
										</h4>
									</div>
									<div id="<?=$row['id']?>" class="panel-collapse collapse in" role="tabpanel">
										<div class="panel-body panel_text">
											<?=$row['summary']?>
										</div>
									</div>
								</div>
								<?php } ?>
								
							</div> 
							
						</div> 
						
						<div class="clearfix"> </div>
					</div> 
				</div> 
				<!-- //work --> 
			</li>

			<li class="agileits"> 
				<!-- contact -->
				<div class="contact agileits-w3layouts">
					<div class="container"> 
						<h3 class="agileits-title">Contact Us</h3> 	
						<div class="contact-w3lsrow">
							<div class="col-md-6 contact-wthree-left">
								
								<div class="faddressw3-agileinfo">
									<div class="faddress-w3left">
										<p>K34/54 Au CO,<br> Da Nang </p>
									</div>
									<div class="faddress-w3right">
										<p>Call us :  +01 111 222 3333</p>
										<p>E-mail : <a href="mailto:info@example.com">mail@example.com</a></p>
									</div>
									<div class="clearfix"></div> 
								</div>
							</div>
							<div class="col-md-6 contact-wthree-right">
								<form action="javascript:void(0)" method="post">
									<input type="text" id="name" placeholder="Name" required="">
									<input type="email" class="email" id="email" placeholder="Email" required="">
									<textarea id="message" placeholder="Message" required=""></textarea>
									<input id="btnContact" type="submit" name="submit" value="SUBMIT" >
								</form> 
							</div>
							<div class="clearfix"> </div>
						</div> 
						<!-- footer -->
						<div class="agile-footer"> 
							<p>© 2017 Simple CV. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">w3layouts</a> </p>
						</div>
						<!-- //footer --> 
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#btnContact').click(function(event) {
					        var name = $("#name").val();
					        var email = $("#email").val();
					        var message = $("#message").val();
					        $.ajax({
					            url: 'addcontact.php',
					            type: 'post',
					            data: {
					                name: name,
					                email: email,
					                message: message
					            },
					            success: function( data ) {
					                alert("Thanks for your contact");
					                $("#name").val("");
					                $("#email").val("");
					                $("#message").val("");
					            }
					        });
					    });
					})

				</script>
				<!-- //contact -->  
			</li> 

		</ul> 
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></label>
			<label for="slide4"></label> 
	</div>	
	<!-- //main -->  
	<!-- swipe box js -->
	<script src="templates/public/js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script> 
	<!-- //swipe box js --> 	
	<!-- Skill Bar js --> 
	<script src="templates/public/js/skill.bars.jquery.js"></script> 
	<script> 
	$(document).ready(function(){
		
		$('.skillbar').skillBars({
			from: 0,
			speed: 4000, 
			interval: 100,
			decimals: 0,
		});
		
	}); 
	</script> 
	<!-- //End Skill Bar js --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="templates/public/js/bootstrap.js"></script>
</body>
</html>