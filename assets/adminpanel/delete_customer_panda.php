<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_customer_panda'])){
        
        $delete_id = $_GET['delete_customer_panda'];
        
        $delete_c = "DELETE FROM `panda_p_service` WHERE customer_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('One of your costumer has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_customers','_self')</script>";
            
        }
        
    }

?>

<?php } ?>