<?php
session_start();
error_reporting(0);
date_default_timezone_set('asia/kolkata');

if(isset($_POST['submit']))
{
 
  $username = $_POST['username'];
  $password = $_POST['password']; 
 
 if($username=="Admin" && $password=="Admin@123")
{ 
    $_SESSION['username']=$username;
	
	header("location:add-details.php");

         $uip=$_SERVER['REMOTE_ADDR'];

         $host  = $_SERVER['HTTP_HOST'];
         $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
         //header("location:http://$host$uri/$extra");
         exit();
		 
}

else
{
    
   echo "<script>alert('Please enter correct credentials');</script>";
}

}

?>
 
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servant of God Rev. Fr. Alfred Roche Capuchin</title>
    <!-- Favicon icon -->
   
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendor/lightgallery/css/lightgallery.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
	
</head>
<style>
	.main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #008080;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2{
	color:#008080;
}
.login_form{
	background-color: #fff;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
form{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em .5em .5em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
}
.form__input:focus{
	border-bottom-color: #008080;
	box-shadow: 0 0 5px rgba(0,80,80,.4); 
	border-radius: 4px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	border-radius: 30px;
	color:#008080;
	font-weight: 600;
	background-color: #fff;
	border: 1px solid #008080;
	margin-top: 1.5em;
	margin-bottom: 1em;
}
.btn:hover, .btn:focus{
	background-color: #008080;
	color:#fff;
}
	</style>
<body>

<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<img src="img/Muditaa.webp">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form control="" action="" method="post" class="form-group">
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							<!--div class="row">
								<input type="checkbox" name="remember_me" id="remember_me" class="">
								<label for="remember_me">Remember Me!</label>
							</div-->
							<div class="row">
								<input type="submit" name="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
					<!--div class="row">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div-->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
<!--div class="container-fluid text-center footer">
		Coded with &hearts; by <a href="https://bit.ly/yinkaenoch">Yinka.</a></p>
	</div--> 
	
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="vendor/wow/wow.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="vendor/owl-carousel/owl.carousel.js"></script><!-- OWL-CAROUSEL JS -->
<script src="vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="vendor/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="vendor/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
<script src="vendor/bootstrap-select/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT -->
<script src="js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>


</html>