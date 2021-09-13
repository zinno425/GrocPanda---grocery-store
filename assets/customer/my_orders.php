
<center><!--  center Begin  -->
    
    <h1> My Orders </h1>
    
    <p class="lead"> Your orders on one place</p>
    
    <p class="text-muted">
        
        If you have any questions, feel free to <a href="../../contact.php">Contact Us</a>. Our Customer Service work <strong>24/7</strong>
        
    </p>
    
</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> #: </th>
                <th> Amount: </th>
                <th> Invoice No: </th>
                <th> Product Name: </th>
                <th> Qty: </th>
                
                <th> Order Date:</th>
                <th> Paid / Unpaid: </th>
                <th> Status: </th>
                
            </tr> <!-- tr Finish -->
            
        </thead> <!-- thead Finish -->
        
        <tbody> <!--  tbody Begin -->
           
           <?php 
            
            include('includes/db.php'); 
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "SELECT * FROM `customers` WHERE `customer_name` = '$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "SELECT * FROM `customer_orders` WHERE `customer_id` = '$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            
            
            while($row_order = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_order['order_id'];
                
                $due_amount = $row_order['due_amount'];
                
                $invoice_no = $row_order['invoice_no'];
                
                $qty = $row_order['qty'];
                
                $prod_id = $row_order['product_id'];
                
                 $get_prod = "SELECT * FROM `products` WHERE `product_id`='$prod_id'";
                                    
                 $run_prod = mysqli_query($con,$get_prod);
                                    
                 $row_prod = mysqli_fetch_assoc($run_prod);
                                    
                 $title = $row_prod['product_title'];
             
                
                $order_date = substr($row_order['order_date'],0,11);
                
                $order_status = $row_order['order_status'];
                
              
                
                $i++;
                
                if($order_status=='pending'){
                    
                    $order1_status = 'Unpaid';
                    
                }else{
                    
                    $order1_status = 'Paid';
                    
                }
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> ₹<?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $title; ?> </td>
                
                <td> <?php echo $qty; ?> </td>
            
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order1_status; ?> </td>
                
                <td>
                    
                   <?php echo $order_status; ?>
                    
                </td>
                
            </tr><!--  tr Finish  -->
            
            <?php } ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->