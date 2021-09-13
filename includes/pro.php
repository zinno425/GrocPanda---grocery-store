
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
   
    
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
    
   
    $pro_key = $row_product['product_key'];
  
    $pro_pack = $row_product['product_pack'];
    
    $pro_exp = $row_product['product_exp'];
    
    $pro_qua = $row_product['product_quality'];
    
    $pro_unit = $row_product['product_unit'];
   
    $pro_avl = $row_product['product_avl'];
    
    $pro_man = $row_product['product_man'];
    
    $brand_id= $row_product['brand_id'];
   
    $get_brand = "select * from brands where brand_id='$brand_id'";
    
    $run_brand = mysqli_query($con,$get_brand);
    
    $row_brand = mysqli_fetch_array($run_brand);
    
    $pro_brand = $row_brand['brand_title'];

    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
    
   
}

?>