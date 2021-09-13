<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product ID: </th>
                                <th> Availibility</th>
                                <th> Product Title: </th>
                                <th> Brand: </th>
                                <th> Product Image: </th>
                                <th> Product Sale Price: </th>
                                <th> Product Regular Price: </th>
                                <th> Product Sold: </th>
                                <th> Product Keywords: </th>
                                <th> Product Quality check: </th>
                                <th> Product Expiry: </th>
                                <th> Product Manufacturers: </th>
                                <th> Product Unit: </th>
                                <th> Product Key ingedrients: </th>
                                <th> Product Packaging: </th>
                                <th> Product Date: </th>
                                <th> Product Delete: </th>
                                <th> Product Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from products";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['product_id'];
                                    
                                    $pro_title = $row_pro['product_title'];
                                    
                                    $pro_img1 = $row_pro['product_img1'];
                                    
                                    $pro_sprice = $row_pro['product_sprice'];
                                    
                                    $pro_rprice = $row_pro['product_rprice'];
                                    
                                    $pro_man = $row_pro['product_man'];
                                    
                                     $pro_avl = $row_pro['product_avl'];
                                    
                                     $pro_qc = $row_pro['product_quality'];
                                    
                                     $pro_exp = $row_pro['product_exp'];
                                    
                                     $pro_unit = $row_pro['product_unit'];
                                    
                                     $pro_key = $row_pro['product_key'];
                                    
                                     $pro_pack = $row_pro['product_pack'];
                                    
                                     $pro_exp = $row_pro['product_exp'];
                                    
                                     $pro_brand = $row_pro['brand_id'];
                                    
                                    $pro_keywords = $row_pro['product_keywords'];
                                    
                                    $pro_date = $row_pro['date'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_avl; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <?php 
                                    
                                    $get_brand = "select * from brands where brand_id='$pro_brand'";
                                    
                                        $run_brand = mysqli_query($con,$get_brand);
                                    
                                       $row_brand= mysqli_fetch_array($run_brand);
                                    
                                       echo $brand = $row_brand['brand_title'];
                                    
                                       
                                    
                                    
                                    
                                    ?> </td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> ₹ <?php echo $pro_sprice; ?> </td>
                                <td> ₹ <?php echo $pro_rprice; ?> </td>
                                <td> <?php 
                                    
                                        $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                    
                                        $run_sold = mysqli_query($con,$get_sold);
                                    
                                        $count = mysqli_num_rows($run_sold);
                                    
                                        echo $count;
                                    
                                     ?> 
                                </td>
                                <td> <?php echo $pro_keywords; ?> </td>
                                <td> <?php echo $pro_qc; ?> </td>
                                <td> <?php echo $pro_exp; ?> </td>
                                <td> <?php echo $pro_man; ?> </td>
                                <td> <?php echo $pro_unit; ?> </td>
                                <td> <?php echo $pro_key; ?> </td>
                                <td> <?php echo $pro_pack; ?> </td>
                                <td> <?php echo $pro_date ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
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