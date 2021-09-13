<div style="height:300px; ">
   
   <?php 
    
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
    
    <h1 class="text-center">Payment Options For You</h1>  
    
    
    <br/>
    <br/>
    <br/>
    
    <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
    
     <h4 class=" text-center" style="font-size:30px;"><!-- lead text-center Begin -->
         
         <a href="order.php?c_id=<?php echo $customer_id ?>"><h4>Pay On Delivery</h4> </a>
         
     </h4><!-- lead text-center Finish -->
     
    <br/>
    <br/>
     <center><!-- center Begin -->
         <?php
      if($status == "ACTIVE"){
    
             echo"<h3><!-- lead Begin -->
            
            <a href='panda_tranx.php?c_id=$customer_id'>
            <h5 >    
               
                Pay with Panda penny service
                
             </h5>
            </a>
            
            
            
          <!-- lead Finish --></h3>";
      }
         else{
             echo " "; 
         }?>
         
    
         
     </center><!-- center Finish -->
</div>
