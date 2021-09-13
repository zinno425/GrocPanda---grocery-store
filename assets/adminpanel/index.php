<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
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
        
        $get_vendor= "select * from vendors";
        
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
        
        
        $get_brand = "select * from brands";
        
        $run_brand = mysqli_query($con,$get_brand);
        
        $row_brand = mysqli_fetch_array($run_brand);
        
        $count_brand = mysqli_num_rows($run_brand);
        
        $brand_id = $row_brand['brand_id'];
        $brand_title = $row_brand['brand_title'];
        $brand_desc = $row_brand['brand_desc'];
        
        
        $get_panda = "SELECT * FROM `panda_p_service`";
        
        $run_panda = mysqli_query($con,$get_panda);
        
        $row_panda = mysqli_fetch_array($run_panda);
        
    
        
        
        
        
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrocPanda - Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }   if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }   if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }  if(isset($_GET['delete_brands'])){
                        
                        include("delete_brands.php");
                        
                }   if(isset($_GET['edit_brands'])){
                        
                        include("edit_brands.php");
                        
                }   if(isset($_GET['insert_p_cat'])){
                        
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
                        
                }   if(isset($_GET['view_vendor'])){
                        
                        include("view_vendor.php");
                        
                }   if(isset($_GET['delete_vendor'])){
                        
                        include("delete_vendor.php");
                        
                }   if(isset($_GET['insert_vendor'])){
                        
                        include("insert_vendor.php");
                        
                }   if(isset($_GET['vendor_profile'])){
                        
                        include("vendor_profile.php");
                        
                }   if(isset($_GET['view_brands'])){
                        
                        include("view_brands.php");
                        
                } if(isset($_GET['insert_brands'])){
                        
                        include("insert_brands.php");
                        
                }  if(isset($_GET['customer_panel'])){
                        
                        include("customer_panel_panda.php");
                        
                }  if(isset($_GET['view_history'])){
                        
                        include("view_panda_history.php");
                        
                }  if(isset($_GET['edit_panda_ser'])){
                        
                        include("edit_panda_ser.php");
                        
                }  if(isset($_GET['delete_customer_panda'])){
                        
                        include("delete_customer_panda.php");
                        
                }  if(isset($_GET['delete_customer_panda_his'])){
                        
                        include("delete_customer_panda_his.php");
                        
                }   if(isset($_GET['active_panda'])){
                        
                        include("active_panda.php");
                        
                }   if(isset($_GET['penny_paid'])){
                        
                        include("penny_paid.php");
                        
                }  if(isset($_GET['complete_order'])){
                        
                        include("comp_order.php");
                        
                }  if(isset($_GET['view_total_orders'])){
                        
                        include("total_orders.php");
                        
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