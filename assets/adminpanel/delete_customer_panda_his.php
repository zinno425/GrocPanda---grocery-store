<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_customer_panda_his'])){
        
        $id = $_GET['delete_customer_panda_his'];
        
        $delete_c = "DELETE FROM `panda_penny_history` WHERE invoice_no ='$id'";
        
        $run_delete = mysqli_query($con,$delete_c);
        
        if($run_delete){
            
            echo "<script>alert('One of your costumer has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_panda_history','_self')</script>";
            
        }
        
    }

?>

<?php } ?>