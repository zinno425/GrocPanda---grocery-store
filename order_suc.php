   <?php
session_start();
      $active='Cart';
      include('includes/header.php');
      include("includes/menu.php");
   
    ?>
<br/><br/>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bangers" />

<div class="container text-center">
    <img src="images/loader.gif"/>
  <h1 class="display-3">Thank You!</h1>
    <h4  style="font-family:BANGERS">Your oreder has been recieved successfully .</h4>
    <br/>
    <br/>
  <p class="lead">Please check your number for further details of your order.</p>
  <hr>
  <p>
    Having trouble? <a href="contact.php">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="assets/customer/my_account.php?my_orders" role="button">Continue to MyOrder</a>
  </p>
    <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to Home</a>
  </p>
</div>
<br/>
<br/>
<br/>
<br/>