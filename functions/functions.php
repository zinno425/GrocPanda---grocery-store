<?php 

$db = mysqli_connect("localhost","root","","ecom_store");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// finish getRealIpUser functions ///

/// begin add_cart functions ///

function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
  
        
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            
            echo "<script>window.open('cart.php','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty) values ('$p_id','$ip_add','$product_qty')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}

/// finish add_cart functions ///

/// begin getPro functions ///

function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
       $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
         <div class='col-lg-4 col-md-6' style='max-width:50%' >
          <div class='single-product '>
            <div class='product-img'>
              <img class='img-fluid w-100' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
                <a href='details.php?pro_id=$pro_id '>
                  <i class='ti-shopping-cart'></i>
                </a>
                
                
              </div>
            </div>
            <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
              
              
            </div>
          </div>
        </div>
        ";
        
    }
    
}

/// finish getPro functions ///

/// begin getspcPro functions ///

function getSpcPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,1";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
       $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-lg-6' >
          <div class='new_product box border'style='border-radius:30px;margin:30px;height: 1240px;'>
            <h5 class='text-uppercase'>Today's offer</h5>
            <h3 class='text-uppercase'>$pro_title</h3>
            <div class='product-img'>
              <img class='img-fluid' src='assets/adminpanel/product_images/$pro_img1' alt='' />
            </div>
            <h5><del>₹ $pro_rprice</del></h5>
            <h3>₹ $pro_sprice</h3>
            <br />
            <a href='details.php?pro_id=$pro_id' class='main_btn'>Add to cart</a>
          </div>
        </div>
        
        ";
        
    }
    
}

/// finish getSpcPro functions ///

/// begin getFePro functions ///
function getFePro(){
    
    global $db;
    
    $get_products = "select * from products order by rand() LIMIT 4";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
     $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
         <div class='col-lg-4 col-md-6'style='max-width:50%'>
          <div class='single-product'>
            <div class='product-img'>
              <img class='img-fluid w-100' src='assets/adminpanel/product_images/$pro_img1' alt='' />
              <div class='p_icon'>
             
                <a href='details.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        ";
        
    }
    
}


/// finish getFePro functions ///



/// begin getNewPro functions ///
function getNewPro(){
    
    global $db;
    
    $get_products = "select * from products order by rand() LIMIT 6";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
     $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
               <div class='col-lg-6 col-md-6' style='max-width:50%'>
              <div class='single-product'>
                <div class='product-img'>
                  <img class='img-fluid w-100' src='assets/adminpanel/product_images/$pro_img1' alt='' />
                  <div class='p_icon'>
                    
               
                <a href='details.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
                  </div>
                </div>
                <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                     <del>₹ $pro_rprice</del>
                  </div>
                </div>
              </div>
            </div>
        ";
        
    }
    
}


/// finish getFePro functions ///




/// begin getPCats functions ///

function getPCats(){
    
    global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cat_id = $row_p_cats['p_cat_id'];
        
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_category.php?p_cat=$p_cat_id'> $p_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getPCats functions ///

/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_category.php?cat=$cat_id'> $cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getCats functions ///

/// begin getBrandsfunctions ///

function getBrands(){
    
    global $db;
    
    $get_brand = "select * from brands";
    
    $run_brand = mysqli_query($db,$get_brand);
    
    while($row_brand=mysqli_fetch_array($run_brand)){
        
        $brand_id = $row_brand['brand_id'];
        
        $brand_title = $row_brand['brand_title'];
        
        echo "
        
            <li>
            
                <a href='delite_category.php?brand=$brand_id'> $brand_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish getCats functions ///

/// begin getpcatpro functions ///

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6' style='max-width:50%'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function getcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_sprice = $row_products['product_sprice'];
            
                $pro_rprice = $row_products['product_rprice'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6' style='max-width:50%'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///
/// begin getcatpro functions ///

function getsrchpro(){
    
    global $db;
    
    if(isset($_POST['search'])){
        
        $search = $_POST['search'];
        
        $get_pro = "select * from products where product_title OR product_keywords = '$search' OR product_keywords_1 = '$search' OR product_keywords_2 = '$search' OR product_keywords_3 = '$search' OR product_keywords_4 = '$search'";
        
        $run_pro = mysqli_query($db,$get_pro);
        
    
            
      
        
        $count = mysqli_num_rows($run_pro);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1 class='text-center' > No Product Found In This Category </h1>
                    <h3 class='text-center' > Kindly look into the category option .</h3>
                
                </div>
            
            ";
            
        }else{
            
            echo  " " ; 
        }
        
        while($row_pro=mysqli_fetch_array($run_pro)){
            
            $pro_id = $row_pro['product_id'];
            
            $pro_title = $row_pro['product_title'];
            
            $pro_sprice = $row_pro['product_sprice'];
            
            $pro_rprice = $row_pro['product_rprice'];
            
            $pro_desc = $row_pro['product_desc'];
            
            $pro_img1 = $row_pro['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6' style='max-width:50%'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///


/// finish getRealIpUser functions ///

function items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where ip_add='$ip_add'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        
        $pro_qty = $record['qty'];
        
        $get_price = "select * from products where product_id='$pro_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_sprice']*$pro_qty;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo "₹" . $total;
    
}

/// finish total_price functions ///

/// /////////////////////////////////////////////////////////////////////////////////////////////////////











///// PRODUCT CAT NAV BAR BEGIN//////////////////////////\




/// begin get_El_PCats functions ///

function get_EL_PCats(){
    
    global $db;
    
    $get_pe_cats = "select * from product_categories_elec";
    
    $run_pe_cats = mysqli_query($db,$get_pe_cats);
    
    while($row_pe_cats=mysqli_fetch_array($run_pe_cats)){
        
        $pe_cat_id = $row_pe_cats['p_cat_id'];
        
        $pe_cat_title = $row_pe_cats['p_cat_title'];
        
        echo "
        
            <li class='nav-item'>
            
                <a class='nav-link' href='delite_elec.php?p_cat=$pe_cat_id'> $pe_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_elec_PCats functions ///



/// begin get_gro_PCats functions ///

function get_Gro_PCats(){
    
    global $db;
    
    $get_pg_cats = "select * from product_categories_gro";
    
    $run_pg_cats = mysqli_query($db,$get_pg_cats);
    
    while($row_pg_cats=mysqli_fetch_array($run_pg_cats)){
        
        $pg_cat_id = $row_pg_cats['p_cat_id'];
        
        $pg_cat_title = $row_pg_cats['p_cat_title'];
        
        echo "
        
            <li class='nav-item'>
            
                <a class='nav-link' href='delite_gro.php?p_cat=$pg_cat_id'> $pg_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_gro_PCats functions ///





/// begin get_mob_PCats functions ///

function get_Mob_PCats(){
    
    global $db;
    
    $get_pm_cats = "select * from product_categories_mobile";
    
    $run_pm_cats = mysqli_query($db,$get_pm_cats);
    
    while($row_pm_cats=mysqli_fetch_array($run_pm_cats)){
        
        $pm_cat_id = $row_pm_cats['p_cat_id'];
        
        $pm_cat_title = $row_pm_cats['p_cat_title'];
        
        echo "
        
            <li class='nav-item'>
            
                <a class='nav-link' href='delite_mob.php?p_cat=$pm_cat_id'> $pm_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_mob_PCats functions ///





/// begin get_El_PCats functions ///

function get_Clo_PCats(){
    
    global $db;
    
    $get_pc_cats = "select * from product_categories_clo";
    
    $run_pc_cats = mysqli_query($db,$get_pc_cats);
    
    while($row_pc_cats=mysqli_fetch_array($run_pc_cats)){
        
        $pc_cat_id = $row_pc_cats['p_cat_id'];
        
        $pc_cat_title = $row_pc_cats['p_cat_title'];
        
        echo "
        
            <li class='nav-item'>
            
                <a class='nav-link' href='delite_clo.php?p_cat=$pc_cat_id'> $pc_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_clo_PCats functions ///





/// begin get_tv_PCats functions ///

function get_Tv_PCats(){
    
    global $db;
    
    $get_pt_cats = "select * from product_categories_tv";
    
    $run_pt_cats = mysqli_query($db,$get_pt_cats);
    
    while($row_pt_cats=mysqli_fetch_array($run_pt_cats)){
        
        $pt_cat_id = $row_pt_cats['p_cat_id'];
        
        $pt_cat_title = $row_pt_cats['p_cat_title'];
        
        echo "
        
            <li class='nav-item'>
            
                <a class='nav-link' href='delite_tv.php?p_cat=$pt_cat_id'> $pt_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_tv_PCats functions ///









///// PRODUCT CAT NAV BAR end//////////////////////////\


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




///// PRODUCT CAT  BAR BEGIN//////////////////////////\




/// begin get_El_PCats functions ///

function get_Elec_PCats(){
    
    global $db;
    
    $get_pe_cats = "select * from product_categories_elec";
    
    $run_pe_cats = mysqli_query($db,$get_pe_cats);
    
    while($row_pe_cats=mysqli_fetch_array($run_pe_cats)){
        
        $pe_cat_id = $row_pe_cats['p_cat_id'];
        
        $pe_cat_title = $row_pe_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a  href='delite_elec.php?p_cat=$pe_cat_id'> $pe_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_elec_PCats functions ///



/// begin get_gro_PCats functions ///

function get_Gr_PCats(){
    
    global $db;
    
    $get_pg_cats = "select * from product_categories_gro";
    
    $run_pg_cats = mysqli_query($db,$get_pg_cats);
    
    while($row_pg_cats=mysqli_fetch_array($run_pg_cats)){
        
        $pg_cat_id = $row_pg_cats['p_cat_id'];
        
        $pg_cat_title = $row_pg_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_gro.php?p_cat=$pg_cat_id'> $pg_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_gro_PCats functions ///





/// begin get_mob_PCats functions ///

function get_Mo_PCats(){
    
    global $db;
    
    $get_pm_cats = "select * from product_categories_mobile";
    
    $run_pm_cats = mysqli_query($db,$get_pm_cats);
    
    while($row_pm_cats=mysqli_fetch_array($run_pm_cats)){
        
        $pm_cat_id = $row_pm_cats['p_cat_id'];
        
        $pm_cat_title = $row_pm_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_mob.php?p_cat=$pm_cat_id'> $pm_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_mob_PCats functions ///





/// begin get_El_PCats functions ///

function get_Cl_PCats(){
    
    global $db;
    
    $get_pc_cats = "select * from product_categories_clo";
    
    $run_pc_cats = mysqli_query($db,$get_pc_cats);
    
    while($row_pc_cats=mysqli_fetch_array($run_pc_cats)){
        
        $pc_cat_id = $row_pc_cats['p_cat_id'];
        
        $pc_cat_title = $row_pc_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_clo.php?p_cat=$pc_cat_id'> $pc_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_clo_PCats functions ///





/// begin get_tv_PCats functions ///

function get_TvA_PCats(){
    
    global $db;
    
    $get_pt_cats = "select * from product_categories_tv";
    
    $run_pt_cats = mysqli_query($db,$get_pt_cats);
    
    while($row_pt_cats=mysqli_fetch_array($run_pt_cats)){
        
        $pt_cat_id = $row_pt_cats['p_cat_id'];
        
        $pt_cat_title = $row_pt_cats['p_cat_title'];
        
        echo "
        
            <li>
            
                <a href='delite_tv.php?p_cat=$pt_cat_id'> $pt_cat_title </a>
            
            </li>
        
        ";
        
    }
    
}
    
/// finish get_tv_PCats functions ///









///// PRODUCT CAT NAV BAR end//////////////////////////\





/////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////   ELEC PRODUCTS //////////////////////////








/// begin getpcatpro functions ///

function get_elec_pcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories_elec where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products_elec where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details_elec.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_elec.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function get_elec_catpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories_elec where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products_elec where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_sprice'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details_elec.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_elec.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




































//////////////   ELEC PRODUCTS //////////////////////////


//////////////  Clo PRODUCTS //////////////////////////








/// begin getpcatpro functions ///

function get_clo_pcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories_clo where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products_clo where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
                
                
                <a href='details_clo.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_clo.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function get_clo_catpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories_clo where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products_clo where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details_clo.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_clo.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




































//////////////   _clo PRODUCTS //////////////////////////





//////////////  _gro PRODUCTS //////////////////////////








/// begin getpcatpro functions ///

function get_gro_pcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories_gro where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products_gro where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
             
                
                <a href='details_gro.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_gro.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function get_gro_catpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories_gro where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products_gro where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                
                <a href='details_gro.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_gro.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




































//////////////  _gro PRODUCTS //////////////////////////





//////////////  mob PRODUCTS //////////////////////////








/// begin getpcatpro functions ///

function get_mob_pcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories_mob where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products_mob where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
                <a href='details_mob.php?pro_id=$pro_id '>
                  <i class='ti-eye'></i>
                </a>
                
                <a href='details_mob.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_mob.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function get_mob_catpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories_mob where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products_mob where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
               
                <a href='details_mob.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_mob.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




































//////////////  _mob PRODUCTS //////////////////////////




//////////////   tv PRODUCTS //////////////////////////








/// begin getpcatpro functions ///

function get_tv_pcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from product_categories_tv where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($db,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        $get_products ="select * from products_tv where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Product Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        
            $pro_title = $row_products['product_title'];

            $pro_sprice = $row_products['product_sprice'];
            
             $pro_rprice = $row_products['product_rprice'];

            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
              
              <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
                
                
                <a href='details_tv.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_tv.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                 <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
        
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

/// begin getcatpro functions ///

function get_tv_catpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from categories_tv where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($db,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        $get_cat = "select * from products_tv where cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($db,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> No Product Found In This Category </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
            
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            
            $pro_title = $row_products['product_title'];
            
            $pro_price = $row_products['product_price'];
            
            $pro_desc = $row_products['product_desc'];
            
            $pro_img1 = $row_products['product_img1'];
            
            echo "
            
                 <div class='col-lg-4 col-md-6'>
          <div class='single-product '>
            <div class='product-img'>
              <img class='card-img' src='assets/adminpanel/product_images/$pro_img1'  />
              <div class='p_icon'>
                
                
                <a href='details_tv.php?pro_id=$pro_id'>
                  <i class='ti-shopping-cart'></i>
                </a>
              </div>
            </div>
            <div class='product-btm'>
              <a href='details_tv.php?pro_id=$pro_id' class='d-block'>
                <h4> $pro_title </h4>
              </a>
              <div class='mt-3'>
                <span class='mr-4'>₹ $pro_sprice</span>
                       <del>₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
            ";
            
        }
        
    }
    
}

/// finish getcatpro functions ///




































////////////// _tv PRODUCTS //////////////////////////















?>