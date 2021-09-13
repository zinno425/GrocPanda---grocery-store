<?php
 if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
     
        



?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Total Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Total Orders
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Order id: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                
                                <th> Order Date: </th>
                                <th> Total Amount: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            <?php
     $i = 0;
     
     $get_orders= "Select * from customer_orders";
     
     
     $run = mysqli_query($con,$get_orders);
     
     while($row = mysqli_fetch_array($run)){
         
         $order_id = $row['order_id'];
         
         $c_id  = $row['customer_id'];
         
         $amount = $row['due_amount'];
         
         $i_no = $row['invoice_no'];

         $qty = $row['qty'];
         
         $order_date = $row['order_date'];
         
         $status = $row['order_status'];
         
         $p_id = $row['product_id'];
         
         $get_products = "select * from products where product_id='$p_id'";
                                    
                                    $run_products = mysqli_query($con,$get_products);
                                    
                                    $row_products = mysqli_fetch_array($run_products);
                                    
                                    $product_title = $row_products['product_title'];
         $i++;
     
     
     
     
     
     ?>
                             <td> <?php echo $i; ?> </td>
                             <td> <?php echo $order_id; ?> </td>
                                <td> <?php echo $c_id; ?> </td>
                                <td> <?php echo $i_no; ?></td>
                                <td> <?php echo $product_title; ?> </td>
                                <td> <?php echo $qty; ?></td>
                               
                                <td> <?php echo $order_date; ?> </td>
                                <td> <?php echo $amount; ?> </td>
                            
                               <td>
                                    
                                    <?php 
                                    
                                        
                                            
                                            echo $status;
                                            
                                       
                                    ?> <a href="index.php?complete_order=<?php echo $invoice_no; ?>">
                                     
                                        <i class="fa fa-usd"></i> 
                                    
                                     </a> 
                                    
                                </td>
                                <td> 
                                     
                                     <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>