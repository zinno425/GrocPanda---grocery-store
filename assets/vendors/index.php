<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['vendor_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $vendor_session = $_SESSION['vendor_email'];
        
        $get_vendor = "select * from vendors where vendor_email='$vendor_session'";
        
        $run_vendor = mysqli_query($con,$get_vendor);
        
        $row_vendor = mysqli_fetch_array($run_vendor);
        
        $vendor_id = $row_vendor['vendor_id'];
        
        $vendor_name = $row_vendor['vendor_name'];
        
        $vendor_email = $row_vendor['vendor_email'];
        
        $vendor_image = $row_vendor['vendor_image'];
        
        $vendor_state = $row_vendor['vendor_state'];
        
        $vendor_about = $row_vendor['vendor_about'];
        
        $vendor_contact = $row_vendor['vendor_contact'];
        
        $vendor_job = $row_vendor['vendor_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DELITE-DEALS VENDOR PORTAL</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar_vendor.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }  if(isset($_GET['view_products_elec'])){
                        
                        include("view_products_elec.php");
                        
                }if(isset($_GET['view_products_clo'])){
                        
                        include("view_products_clo.php");
                        
                }if(isset($_GET['view_products_mob'])){
                        
                        include("view_products_mob.php");
                        
                }if(isset($_GET['view_products_gro'])){
                        
                        include("view_products_gro.php");
                        
                }if(isset($_GET['view_products_tv'])){
                        
                        include("view_products_tv.php");
                        
                } if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }  if(isset($_GET['delete_product_elec'])){
                        
                        include("delete_product_elec.php");
                        
                } if(isset($_GET['delete_product_clo'])){
                        
                        include("delete_product_clo.php");
                        
                } if(isset($_GET['delete_product_tv'])){
                        
                        include("delete_product_tv.php");
                        
                } if(isset($_GET['delete_product_gro'])){
                        
                        include("delete_product_gro.php");
                        
                } if(isset($_GET['delete_product_mob'])){
                        
                        include("delete_product_mob.php");
                        
                }  if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }  if(isset($_GET['edit_product_elec'])){
                        
                        include("edit_product_elec.php");
                        
                } if(isset($_GET['edit_product_clo'])){
                        
                        include("edit_product_clo.php");
                        
                } if(isset($_GET['edit_product_mob'])){
                        
                        include("edit_product_mob.php");
                        
                } if(isset($_GET['edit_product_tv'])){
                        
                        include("edit_product_tv.php");
                        
                } if(isset($_GET['edit_product_gro'])){
                        
                        include("edit_product_gro.php");
                        
                }  if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }   if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }   if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }   if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }   if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }   if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }   if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }   if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                }   if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }   if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                }   if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }   if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                }   if(isset($_GET['view_payments'])){
                        
                        include("view_payments.php");
                        
                }   if(isset($_GET['delete_payment'])){
                        
                        include("delete_payment.php");
                        
                }   if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }   if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                } if(isset($_GET['insert_product_elec'])){
                        
                        include("insert_product_elec.php");
                        
                }  if(isset($_GET['insert_product_gro'])){
                        
                        include("insert_product_gro.php");
                        
                }  if(isset($_GET['insert_product_tv'])){
                        
                        include("insert_product_tv.php");
                        
                }  if(isset($_GET['insert_product_mob'])){
                        
                        include("insert_product_mob.php");
                        
                }  if(isset($_GET['insert_product_clo'])){
                        
                        include("insert_product_clo.php");
                        
                } 
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>