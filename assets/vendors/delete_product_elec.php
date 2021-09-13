<?php 
    
    if(!isset($_SESSION['vendor_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_product_elec'])){
        
        $delete_id = $_GET['delete_product_elec'];
        
        $delete_pro = "delete from products_elec where product_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('One of your product has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_products_elec','_self')</script>";
            
        }
        
    }

?>

<?php } ?>