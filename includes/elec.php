
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products_elec where product_id='$product_id'";
    
   
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_sprice = $row_product['product_sprice'];
    
    $pro_rprice = $row_product['product_rprice'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $pro_exd = $row_product['product_exd'];
    
    $pro_ven = $row_product['vendor_id'];
    
    $pro_brand = $row_product['product_brand'];
    
    $pro_qua = $row_product['product_quality'];
    
    $pro_box = $row_product['product_box'];
    
    $pro_avl = $row_product['product_avl'];
    
   
    

    
    $get_p_cat = "select * from product_categories_elec where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
    
     $get_vendor= "select * from vendors where vendor_id='$pro_ven'";
    
       $run_vendor = mysqli_query($con,$get_vendor);
    
    $row_vendor = mysqli_fetch_array($run_vendor);
    
     $ven_name = $row_vendor['vendor_name'];
    
     $ven_fname = $row_vendor['vendor_firm'];
    
     $ven_mail = $row_vendor['vendor_email'];
    
     $ven_state = $row_vendor['vendor_state'];
}

?>