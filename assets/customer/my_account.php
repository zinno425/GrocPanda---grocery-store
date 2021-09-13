<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("../../functions/functions.php");
include('includes/menu.php');
    
     $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    
      $get_panda = "SELECT * FROM `panda_p_service` where customer_id ='$customer_id' ";
        
      $run_panda = mysqli_query($con,$get_panda);
        
      $row_panda = mysqli_fetch_array($run_panda);
    
      $status = $row_panda['status'];
    
     
        
       

?>
  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrocPanda Customer profile</title>
    
    
    
    
    <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
    
    
    
</head>
<body>
<?php include('includes/header.php') ?>
    
    <div class="content">
        <div class="container">
            
            <br/><br/><br/><br/>
            
            <div class="row">
                
                
                <div class="col-md-3 ">
                
               
                
                
                
                
                </div> 
                
                
                
                <div class="col-md-9">
                    
                    <div class="box border" style="border-radius:30px;margin:10px;padding:10px;">
                    
                    
                        
                   <?php
                   
                   if (isset($_GET['my_orders'])){
                       include("my_orders.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['pay_offline'])){
                       include("pay_offline.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['edit_account'])){
                       include("edit_account.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['change_pass'])){
                       include("change_pass.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['delete_account'])){
                       include("delete_account.php");
                   }
                   
                   ?>
                         <?php
                    if($status == "ACTIVE"){
                    if(isset($_GET['panda_penny'])){
                       include("panda_penny_service.php");
                       }
                    }
                       else{
                        if(isset($_GET['panda_penny'])){
                       include("panda_penny.php");
                       }
                       }
                   
                   
                   ?>
                    
                    
                    
                    
                    
                    </div>
                
                
                
                
                
                </div>
            
            
            
            
            
            
            
            
            </div>
        
        
        
        
        
        
        </div>
    
    
    </div>
    <div class="row">
<div class="col-md-12">
    
    <br/>
    <br/>
    <br/>
    </div>

</div>
   
  
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="extra/js/jquery-331.min.js"></script>
    <script src="extra/js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>



