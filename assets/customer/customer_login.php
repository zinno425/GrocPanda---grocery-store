

<center>    
 <div class="limiter col-md-9">
		
			
				<form class="login100-form validate-form" method="post" action="checkout.php">
			
					<span class="login100-form-title p-b-49">
						Login
					</span>
                   
                
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username/Email</span>
						<input class="input100" type="text" name="c_email" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="c_pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="change_pass.php">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">
								Login
							</button>
						</div>
					</div>

					

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="customer_register.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			
	</div>
    </center>




<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['c_email'];
    
    $customer_pass = $_POST['c_pass'];
    
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    $select_cart = "select * from cart where ip_add='$get_ip'";
    
    $run_cart = mysqli_query($con,$select_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_customer==0){
        
       
         echo "<script> window.open('checkout.php','_self'); </script>";
         
        exit();
        
    }
    
    if($check_customer==1 AND $check_cart==0){
        
        $_SESSION['customer_email']=$customer_email;
        
      /// echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('index.php','_self')</script>";
        
    }else{
        
        $_SESSION['customer_email']=$customer_email;
        
       ///echo "<script>alert('You are Logged in')</script>"; 
        
       echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    
}

?>









<link rel="icon" type="image/png" href="assets/customer/log/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/customer/log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/customer/log/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/customer/log/css/main.css">
<!--===============================================================================================-->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
		
		
         
		 <link rel="stylesheet" href="css/style.css">


<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/customer/log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/customer/log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/customer/log/js/main.js"></script>
      



