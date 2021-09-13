<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 
        
        
        if(isset($_GET['active_panda'])){
            
            $c_id = $_GET['active_panda'];
            
             
            
            $level = "0"; 
            
            $status = "INACTIVE";
            
            $get_cus = " INSERT INTO `panda_p_service`(`customer_id`, `level`, `status`) VALUES ('$c_id','$level','$status')";
            
            $run_add = mysqli_query($con,$get_cus);
            
            if($run_add){
                
                echo "<script>alert('Customer has been added to PPS')</script>";
                
               echo "<script>window.open('index.php?customer_panel','_self')</script>";
            }
        }
           
           ?>

<?php } ?>