<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
 

  <body>
    <!--================Header Menu Area =================-->
   
   <?php 

    $active='Shop';
    include("includes/header.php");
      include("includes/pro.php");

    ?>
    
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="min-height:100px !important;">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0"> 
                        <h2>Shop Category</h2>
             

              
            </div>
           
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area">
      <div class="container">
        <div class="row flex-row-reverse">
             <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                   <a href="#" data-toggle="collapse" data-target="#products1"><h3>Browse Categories<i class="fa fa-fw fa-caret-down"></i></h3></a>
                </div>
                <div class="widgets_inner">
                 <ul  id="products1" class="collapse">
                    <ul class="list">
                        
                  <?php getPcats(); ?>
                        
                        
                  </ul>
                    </ul>
                    
                </div>
              </aside>

             <aside class="left_widgets p_filter_widgets ">
                <div class="l_w_title">
                  <a href="#" data-toggle="collapse" data-target="#products"><h3>Product Categories <i class="fa fa-fw fa-caret-down"></i></h3>
                    </a>
                </div>
                <div class="widgets_inner">
                  
                    <ul  id="products" class="collapse">
                   <ul class="list ">
                  
                        
                        <?php getPcats(); ?>
                      
                        </ul>
                  </ul>
                </div>
              </aside>
                 <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                    <a href="#" data-toggle="collapse" data-target="#products2"><h3>Product Brands<i class="fa fa-fw fa-caret-down"></i></h3></a>
                </div>
                <div class="widgets_inner">
                   <ul  id="products2" class="collapse">
                    <ul class="list ">
                  
                        
                        <?php getBrands(); ?>
                      
                      
                  </ul>
                </div>
              </aside>

              <!--   <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Color Filter</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Black</a>
                    </li>
                    <li>
                      <a href="#">Black Leather</a>
                    </li>
                    <li class="active">
                      <a href="#">Black with red</a>
                    </li>
                    <li>
                      <a href="#">Gold</a>
                    </li>
                    <li>
                      <a href="#">Spacegrey</a>
                    </li>
                  </ul>
                </div>
              </aside>

           <!--  <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Price Filter</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Price : </label>
                      <input type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside> -->
            </div>
          </div>
          <div class="col-lg-9">
            <div class="product_top_bar">
              
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
                  
             
                                
        
           
                  
                  
                  
                  
                  
                   <?php 
                  
                   if(!isset($_GET['search'])){
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=20; 
                             
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }else{
                                
                                $page=1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                             
                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                             
                            $run_products = mysqli_query($con,$get_products);
                             
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
                <a href='details.php?pro_id=$pro_id '>
                  <i class='ti-eye'></i>
                </a>
                
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
                <del> ₹ $pro_rprice</del>
              </div>
            </div>
          </div>
        </div>
                                
                                ";
                                
                        }
                        
                   ?>
                  
      
                </div>
                          <center>
                   <ul class="pagination"><!-- pagination Begin -->
					 <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        echo "
                        
                            <li>
                            
                                <a href='delite_category.php?page=1'> ".'First Page'." </a>
                            
                            </li>
                        
                        ";
                             
                        for($i=1; $i<=$total_pages; $i++){
                            
                              echo "
                        
                            <li>
                            
                                <a href='delite_category.php?page=".$i."'> ".$i." </a>
                            
                            </li>
                        
                        ";  
                            
                        };
                             
                        echo "
                        
                            <li>
                            
                                <a href='delite_category.php?page=$total_pages'> ".'Last Page'." </a>
                            
                            </li>
                        
                        ";
                             
					    	}
							
						}
                   }
					 
					 ?> 
                       
                   </ul><!-- pagination Finish -->
               </center>
                 
                <?php 
               
               getpcatpro(); 
               
               getcatpro();
                
                getsrchpro();
                
               
               ?> 
       
            </div>
          </div>

         
        </div>
          
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <!--================ start footer Area  =================-->
 <?php
   
   include('includes/foot.php')
   
   ?>

    
    </body>
    <style>.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination > li {
    display: inline;
}
.pagination > li > a,
.pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
    z-index: 2;
    color: #23527c;
    background-color: #eee;
    border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
}
.pagination > .disabled > a,
.pagination > .disabled > a:focus,
.pagination > .disabled > a:hover,
.pagination > .disabled > span,
.pagination > .disabled > span:focus,
.pagination > .disabled > span:hover {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}</style>
</html>
