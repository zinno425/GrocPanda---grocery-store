<?php 
session_start();

include("includes/header.php");


?>
<?php 

if(isset($_GET['c_id'])){
    
    $cus_id = $_GET['c_id'];

}
  
    
    $tranx_id = "PPS".mt_rand();
    
    $get_panda = "SELECT * FROM `panda_p_service` where customer_id = '$cus_id'";
        
    $run_panda = mysqli_query($con,$get_panda);
        
    $row_panda = mysqli_fetch_array($run_panda);
        
    $due_amount = $row_panda['due_amount'];
                                    
    $customer_id = $row_panda['customer_id'];                             
                                    
    $balance = $row_panda['balance'];


      
         
    
    
    
    $ip_add = getRealIpUser();
                       
    $select_cart = "select * from cart where ip_add='$ip_add'";
                       
    $run_cart = mysqli_query($con,$select_cart);
                       
    $count = mysqli_num_rows($run_cart);
                                 
    $total = 0;
                                   
    while($row_cart = mysqli_fetch_array($run_cart)){
                                       
    $pro_id = $row_cart['p_id'];
                                       
                                    
                                       
  $pro_qty = $row_cart['qty'];
                                       
  $get_products = "select * from products where product_id='$pro_id'";
                                       
    $run_products = mysqli_query($con,$get_products);
                                       
  while($row_products = mysqli_fetch_array($run_products)){
                                           
   $product_title = $row_products['product_title'];
                                           
   $product_img1 = $row_products['product_img1'];
                                           
   $only_sprice = $row_products['product_sprice'];
                                           
 $sub_total = $row_products['product_sprice']*$pro_qty;
                                           
 $total += $sub_total;

  }
    }


?>


<body>

<div class="content" >
<div class= "container">
    <div class = "row box border" style="margin-top:120px;padding:30px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" class="form-horizontal" method="get">
            <div class="row">
            
                <h2>Payment Though PPS</h2>
            
            </div>
            
            <div class="row">
                
                <div class="col-md-6"><h4>Trancstion Id: <?php echo $tranx_id; ?></php></h4></div>
                <div class="col-md-6"><h4>Customer Id :<?php echo $cus_id; ?></h4></div>
            
            
            </div>
        
        <div class ="row">
            
            <div class="col-md-6"><h4>Balance : <?php echo $balance; ?></h4></div>
            <div class="col-md-6">Total:<?php echo $total; ?> <?php ?></div>
            
        </div>
        
        <?php
        
        if($total <= $balance){
            
        $status = "unpaid";
        
          echo "<div class='form-group'><!-- form-group begin -->
                    
                        <label for='' class='control-label col-md-3'><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class='col-md-6'><!-- col-md-6 begin -->
                        
                            <input value='pay' name='pay' type='submit' class='form-control btn btn-primary'>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->";
              }
    else{
        
        echo "
        <div class='form-group'><!-- form-group begin -->
                    
                        <label for='' class='control-label col-md-3'><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class='col-md-6'><!-- col-md-6 begin -->
                        
                            <a href='checkout.php' class='btn btn-success'>Go Back</a>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->";
        
    }
        
        ?>
        
        
            </form>
        
        
        </div>
        <div class="col-md-3"></div>
    
    
    </div>



</div>
    </div>
</body>

<?php 

if(isset($_GET['pay'])){
    
   global $tranx_id;
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "select * from customers where customer_email='$session_email'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    $get_panda = "SELECT * FROM `panda_p_service` where customer_id ='$customer_id' ";
        
      $run_panda = mysqli_query($con,$get_panda);
        
      $row_panda = mysqli_fetch_array($run_panda);
    
      $balance = $row_panda['balance'];
    
    
      
    
   
    
    $invoice = mt_rand();
    
    
    
    $status_p = "unpiad";
    
    
    $set_penny = "INSERT INTO `panda_penny_history`(`customer_id`, `invoice_no`, `date`, `status`, `amount`, `tran_id`) VALUES ('$customer_id','$invoice',NOW(),'$status_p','$total','$tranx_id')";
    
    $run_penny = mysqli_query($con,$set_penny);
    
    if($run_penny){
        $get_penny = "SELECT * FROM `panda_p_service` WHERE `customer_id` = '$customer_id'";

$run_penny = mysqli_query($con,$get_penny);

$row_penny =mysqli_fetch_array($run_penny);



$balance = $row_penny['balance'];
        $due = $row_panda['due_amount'];
        
        $due_new = $due + $total;


        $up_bal = ($balance-$total) ;
        
            $set_penny_up = "UPDATE `panda_p_service` SET `due_amount`='$due_new',`balance`='$up_bal' WHERE customer_id = '$customer_id'";
        
            $run_penny_update = mysqli_query($con,$set_penny_up);


        
        $ip_add = getRealIpUser();

$status = "pending";



$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
    
    $pro_id = $row_cart['p_id'];
    
    $pro_qty = $row_cart['qty'];
    
    
    
    $get_products = "select * from products where product_id='$pro_id'";
    
    $run_products = mysqli_query($con,$get_products);
    
    while($row_products = mysqli_fetch_array($run_products)){
        
        $sub_total  = $row_products['product_sprice']*$pro_qty;
        
        $insert_customer_order = "insert into customer_orders (customer_id,due_amount,invoice_no,qty,order_date,order_status,product_id) values ('$customer_id','$sub_total','$invoice','$pro_qty',NOW(),'$status','$pro_id ')";
        
        $run_customer_order = mysqli_query($con,$insert_customer_order);
        
        $insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,qty,order_status) values ('$customer_id','$invoice','$pro_id','$pro_qty','$status')";
        
        $run_pending_order = mysqli_query($con,$insert_pending_order);
        
        $delete_cart = "delete from cart where ip_add='$ip_add'";
        
        $run_delete = mysqli_query($con,$delete_cart);
        
 
     
        echo "<script>window.open('order_suc.php','_self')</script>";
        
        
    }
    
}
        

    
    
}
    else {
        
        echo "<script>window.open('order_fail.php','_self')</script>";
    }


}


?>