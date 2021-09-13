<?php session_start(); ?>
<?php 

    $active='Account';
    include("includes/header.php");

?>  

  <!--================Home Banner Area =================-->
    <section class="banner_area" >
      <div class="banner_inner d-flex align-items-center" style="min-height:100px !important;">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center w-100"
          >
            <div class="mb-3 mb-md-0">
                <br/>
              <h2>Checkout</h2>
             
            </div>
         
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

 <div id="content"><!-- #content Begin -->
       <div class="container">

<div class="row">
    
    
    
    
     <div class="col-md-9 box border" style="border-radius:50px;margin:30px;padding:30px;">
         <div class="box">
    
      <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("assets/customer/customer_login.php");
               
           }else{
               
               include("payment_options.php");
               
           }
           
           ?>
    
    
    
    </div>
    </div>
   
 <div class="col-md-3 box border " style="border-radius:50px;margin:30px;"><!-- col-md-3 Begin -->
                <br/>
    <br/>
    <br/>
   
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header text-center"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   <br/>
    <br/>
                   
                   <p class="text-muted text-center"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have choosed.
                       
                   </p><!-- text-muted Finish -->
                   <br/>
    <br/>
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                                        <?php 
                                $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                                   
                                   $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                     $pro_id = $row_cart['p_id'];
                                       
                                     $pro_size = $row_cart['size'];
                                       
                                     $pro_qty = $row_cart['qty'];
                                       
                                       $get_products = "select * from products where product_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($con,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
                                           
                                           $product_title = $row_products['product_title'];
                                           
                                           $product_img1 = $row_products['product_img1'];
                                           
                                           $only_sprice = $row_products['product_sprice'];
                                           
                                           $sub_total = $row_products['product_sprice']*$pro_qty;
                                           
                                           $total += $sub_total;
                                           
                                   ?>
                                   
                                     <?php } } ?>
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order All Sub-Total </td>
                                   <th> ₹<?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Shipping and Handling </td>
                                   <td> ₹0 </td>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Tax </td>
                                   <th> ₹0 </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Total </td>
                                   <th>₹<?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                         
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->


</div>
     </div>
</div>


<?php include('includes/foot.php'); include('includes/menu.php'); ?>











