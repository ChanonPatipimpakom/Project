<?php
	session_start();
	include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ツ Ocean Food Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<style>
	.login100-form-title {
		font-family: JosefinSans-Bold;
		font-size: 30px;
		color: #fff;
		line-height: 1.2;
		text-align: center;

		display: block;
		position: absolute;
		width: 100%;
		top: 0;
		left: 0;
		background-color: #000;
		padding-top: 50px;
		padding-bottom: 39px;
	}
	.login100-form-btn {
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 20px;
		width: 100%;
		height: 50px;
		background-color: #c80000;
		border-radius: 25px;

		font-family: Ubuntu-Bold;
		font-size: 15px;
		color: #fff;
		line-height: 1.2;
		text-transform: uppercase;

		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;
		transition: all 0.4s;
	}

	.login100-form-btn:hover {
		background-color: #000;
	}

	.txt3 {
		font-family: Ubuntu-Bold;
		font-size: 15px;
		color: #c80000;
		line-height: 1.4;
		text-transform: uppercase;
	}

	.container-login100 {
		width: 100%;  
		min-height: 100vh;
		display: -webkit-box;
		display: -webkit-flex;
		display: -moz-box;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		padding: 15px;
		position: relative;
		background-color: gray;
	}
	input::-webkit-input-placeholder { color: gray;}
	input:-moz-placeholder { color: gray;}
	input::-moz-placeholder { color: gray;}
	input:-ms-input-placeholder { color: gray;}

	textarea::-webkit-input-placeholder { color: gray;}
	textarea:-moz-placeholder { color: gray;}
	textarea::-moz-placeholder { color: gray;}
	textarea:-ms-input-placeholder { color: gray;}

</style>
<body>
	<?php
        if(isset($_POST['submit'])){
            //mysqli_escape_string => ป้องกันการโดน Hack
            $email = $conn->real_escape_string($_POST['email']);
            $password = md5($conn->real_escape_string($_POST['password']));

            $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password' ORDER BY active";
			
            //mysqli_query
            $result = $conn->query($sql);

            //print_r($result);
            if($result->num_rows>0){
				//fetch
				
                $row=$result->fetch_array();
                $_SESSION['id']=$row['id'];
				$_SESSION['email']=$row['email'];
				$_SESSION['active']=$row['active'];
				$_SESSION['name']=$row['username'];

                //วาร์ปไปหน้าแรก
                header("location: index.php");
            }
        }
    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="" class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title" style="background-color:black">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit">
							Login
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="register.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor1/animsition/js/animsition.min.js"></script>
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor1/select2/select2.min.js"></script>
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
	<script src="vendor1/countdowntime/countdowntime.js"></script>
	<script src="js/main1.js"></script>

</body>
</html>