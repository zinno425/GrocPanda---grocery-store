<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
		<meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
		<meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
		<meta name="author" content="Sara Soueidan for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="menu/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="menu/ss/demo.css" />
		<link rel="stylesheet" type="text/css" href="menu/css/component1.css" />
        <link rel="stylesheet" type="text/css" href="menu/fontello/fontello.css" />
		<script src="menu/js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
		
			<div class="component">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="#"><span class="icon-search-1"></span></a></li>
				      <li><a href="../../cart.php"><span class="icon-cart"></span></a></li>
				      <li><a href="../../index.php"><span class="icon-home"></span></a></li>
				    
				      <li>   <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../../checkout.php'><span class='icon-user''></span></a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?my_orders'><span class='icon-user'></span></a>"; 
                               
                           }
                           
                           ?></li>
                          <li><a href="../../contact.php"><span class="icon-wechat"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
				<!-- End Nav Structure -->
			</div>
		</div><!-- /container -->
		<script src="menu/js/polyfills.js"></script>
		<script src="menu/js/demo1.js"></script>
		<!-- For the demo ad only -->   

	</body>
</html>