<?php
 if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
     
        



?>
<?php
     
     if(isset($_GET['complete_order'])){
         
         $i_no = $_GET['complete_order'];
         
         $status = "complete";
         
          $get_c_order = "select * from pending_orders where invoice_no ='$i_no'";
                                    
            $run_c_order = mysqli_query($con,$get_c_order);
                                    
            $row_c_order = mysqli_fetch_array($run_c_order);
                                    
           $statuss =  $row_c_order['order_status'];
         
          
         
         if($statuss == "pending"){
                                    
              $get_his = "UPDATE `pending_orders` SET `order_status`='$status' WHERE invoice_no = '$i_no'";
                                
          $run_his = mysqli_query($con,$get_his);
             
             if($run_his){
                 
                 $up_total = "UPDATE `customer_orders` SET `order_status`='$status' WHERE invoice_no = '$i_no'";
                 
                 $run_up = mysqli_query($con,$up_total);
                 
                 if($run_up){
                 
                     $rem_pen = "DELETE FROM `pending_orders` WHERE invoice_no = '$i_no'";
                     
                     $run_rem  = mysqli_query($con,$rem_pen);
                     
                     if($run_rem){
             
              echo "<script>alert('Order has been successfully completed')</script>";
                
               echo "<script>window.open('index.php?view_orders','_self')</script>";
                         
                     }
                 }
             }
         }
         
         
         else{
             
              echo "<script>alert('Order is already completed')</script>";
             
             echo "<script>window.open('index.php?view_orders','_self')</script>";
                          

             
         }
         
     }
     
     
     ?>
<?php } ?>