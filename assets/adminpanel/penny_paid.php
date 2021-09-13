<?php
 if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
     
        



?>
<?php
     
     if(isset($_GET['penny_paid'])){
         
         $in_no = $_GET['penny_paid'];
         
         $status = "paid";
         
          $get_his = "SELECT * FROM `panda_penny_history` where invoice_no = '$in_no'";
                                
          $run_his = mysqli_query($con,$get_his);
          
          $row_his =mysqli_fetch_array($run_his);
                                    
          $c_id = $row_his['customer_id'];
                                    
           $amount = $row_his['amount'];
         
         $statuss = $row_his['status'];
         
         if($statuss == "unpaid"){
                                    
                                
          $get_cus = "SELECT * FROM `panda_p_service` where customer_id = '$c_id'";
                                
          $run_cus = mysqli_query($con,$get_cus);
          
          $row_cus =mysqli_fetch_array($run_cus);
                                    
                                                  
           $due_amount = $row_cus['due_amount'];
                                    
                                  
                                    
           $balance = $row_cus['balance'];
                                    
         
          $up_amount = ($due_amount - $amount) ;
         
         $up_bal = ($balance + $amount);
                                   
         
         
         $chng = "UPDATE `panda_penny_history` SET `status`='$status' where invoice_no = '$in_no'";
         
         $run = mysqli_query($con,$chng);
         
         if($run){
             
             $update = "UPDATE `panda_p_service` SET `due_amount`='$up_amount',`balance`='$up_bal' WHERE customer_id = '$c_id'";
             
             $run_up = mysqli_query($con,$update);
             
             if($run_up){
             
              echo "<script>alert('Customer status has been chaged to Paid')</script>";
                
               echo "<script>window.open('index.php?view_history','_self')</script>";
             }
         }
         }
         
         else{
             
              echo "<script>alert('Customer  has already Paid')</script>";
             
             echo "<script>window.open('index.php?view_history','_self')</script>";
                          

             
         }
         
     }
     
     
     ?>
<?php } ?>