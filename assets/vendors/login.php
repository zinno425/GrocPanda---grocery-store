<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DELITEDEALS - VENDORS AREA</title>
  
	      <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="extra/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="extra/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="extra/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="extra/css/util.css">
	<link rel="stylesheet" type="text/css" href="extra/css/main.css">
<!--===============================================================================================-->
 <style>.img-container-block {
  text-align: center;
}
.img-container-inline {
  text-align: center;
  display: block;
}</style>
</head>
<body>
   
  
   
       
    	<div class="container">
    	
	    		
		    
		  </div>
   
        
        <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="" class="login100-form validate-form" method="post">
				<div class="img-container-block">
 <a href="../../index.php"> <img src="extra/logo.png"  alt="logo"></a>
</div>
					<span class="login100-form-title p-b-49">
						Vendor Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Vendor email</span>
						<input class="input100" type="text" name="vendor_email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="vendor_pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="vendor_login">
								Login
							</button>
						</div>
					</div>

				

					
				</form>
			</div>
		</div>
	</div>
    
</body>
</html>


<?php 

    if(isset($_POST['vendor_login'])){
        
        $vendor_email = mysqli_real_escape_string($con,$_POST['vendor_email']);
        
        $vendor_pass = mysqli_real_escape_string($con,$_POST['vendor_pass']);
        
        $get_vendor = "select * from vendors where vendor_email='$vendor_email' AND vendor_pass='$vendor_pass'";
        
        $run_vendor = mysqli_query($con,$get_vendor);
        
        $count = mysqli_num_rows($run_vendor);
        
        if($count==1){
            
            $_SESSION['vendor_email']=$vendor_email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>