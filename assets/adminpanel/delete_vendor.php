<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_vendor'])){
        
        $delete_vendor_id = $_GET['delete_vendor'];
        
        $delete_vendor = "delete from vendors where vendor_id='$delete_vendor_id'";
        
        $run_delete = mysqli_query($con,$delete_vendor);
        
        if($run_delete){
            
            echo "<script>alert('One of your Admins User has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_vendor','_self')</script>";
            
        }
        
    }

?>

<?php } ?>