<?php
	session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset='UTF-8'>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<title>NEW TRIP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADD TRIP</title>
	 <link rel="shortcut icon" type="image/x-icon" href="moneyplant.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

</head>
<style>
	body {
		color: #fff;
		background: #FAA782 ;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: #7a7a7a;
		border-radius: 2px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #ececec;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
        position: relative;	
    }
	.login-form h2 {
		font-size: 22px;
        margin: 35px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #F1C40F;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #F1C40F; 
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #000000;
        outline: none !important;
	}    
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>

<body>

	<div class = "container">
		<div class="row justify-content-center">
			<div class = "col-md-8">
				<?php
					if(isset($_SESSION['status']))
					{
						echo "<h4>".$_SESSION['status']."</h4>";
						unset($_SESSION['status']);
					}
				
				?>
				
					<div class="login-form">
                     <form method = "post" action="tripserver.php"> 
					<span class="login100-form-title">
					<h4>ADD TRIP</h4>
						
					</span>
					  <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter destination">
						<input class="input100" type="text" name="destination" placeholder="destination" required>
						<span class="focus-input100"></span>
					</div>
				
					<br>
					 <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter description">
						<input class="input100" type="text" name="description" placeholder="description" required>
						<span class="focus-input100"></span>
					</div>
					<br>
					 <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter number of Volunteers">
						<input class="input100" type="text" name="numOfVolunteers" placeholder="numOfVolunteers" required>
						<span class="focus-input100"></span>
					</div>
					<br>
					 <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter the Duration">
						<input class="input100" type="text" name="duration" placeholder="duration" required>
						<span class="focus-input100"></span>
					</div>
					<br>
					<label for="cars">Crisis Type :</label>
						<select id="crisisType" name="crisisType">
						  <option value="flood">FLOOD</option>
						  <option value="earthquake">EARTHQUAKE</option>
						  <option value="wildlife">WILDLIFE</option>
						
						</select>
					<br>
					<br>
					<div>
					<label for="tripDate">Trip Date:</label>
					<input type="date" id="tripDate" name="tripDate">
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit"  name="register" id="submit" >
							Register 
						</button>
						<br>
						<br>
					</div>
				</form>
			</div>
		</div>
		
		
	<div class="limiter">
		<div class="container-login100 " align="center">
			<div class="wrap-login100" align="center">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method = "post" action="StaffIndex.php">
					<span class="login100-form-title">
						Login
					</span>
					

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="login" value="login">
							Login
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up 
						</a>
					</div>
				</form>
			</div>
		</div>

	</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/js/bootstrap.bunle.min.js"></script>


</body>
</html>