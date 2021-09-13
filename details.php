
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <body>
    <!--================Header Menu Area =================-->
   <?php
      $active='Cart';
      include('includes/header.php');
      include("includes/pro.php");
   
    ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="min-height:100px; padding-top: 20px">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
                
                <br/>
              <h2>Product Details</h2>
             
            </div>
           
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                 <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100"
                   src="assets/adminpanel/product_images/<?php echo $pro_img1; ?>" 
                      alt="First slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/adminpanel/product_images/<?php echo $pro_img2; ?>" 
                      alt="Second slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="assets/adminpanel/product_images/<?php echo $pro_img3; ?>" 
                      alt="Third slide"
                    />
                  </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
                
              <h3> <?php echo $pro_title; ?> </h3>
                
            <del>₹ <?php echo $pro_rprice; ?></del>
              <h2 class="price">₹ <?php echo $pro_sprice; ?></h2>

              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : <?php echo $p_cat_title; ?></a
                  >
                </li>
                <li>
                  <a    > <span>Availibility</span> :   <?php 
                                    
                                        if($pro_avl=='in_stock'){
                                            
                                            echo 'In Stock';
                                            
                                        }else{
                                            
                                            echo 'Out Of Stock';
                                            
                                        }
                                    
                                    ?></a>
                </li>
              </ul>
             
                 <?php add_cart(); ?>
                
                               
                <form  action="details.php?add_cart=<?php echo $product_id; ?>"class="form-horizontal" method="post">
                
            
                    <div class="col-md-12" style="width:80%;">
                        <div class="row ">
                 
                            <div class="col-md-2">
                                <br />
                            </div>
                    <!-- col-md-7 Finish -->  
      <div class="form-group col-md-6"><!-- form-group Begin -->
                                  
                                <h4>Quantity</h4>
                                          <select name="product_qty" id="pro_qty" class="form-control"><!-- select Begin -->
                                              <option disabled >Select Quantity</option>
                                           <option selected>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                               
                                   
                               </div><!-- form-group Finish -->
                        </div>
                    </div>
                   <?php 
                    if($pro_avl == 'in_stock'){
             
                echo " <p class='button'><button class='main_btn' >Add to Cart</button></p>";
                    }
                    else{
                        
                        echo" <p class='button'><button class='main_btn' disabled >OUT OF STOCK</button></p> ";
                    }
              ?>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="home-tab"
              data-toggle="tab"
              href="#home"
              role="tab"
              aria-controls="home"
              aria-selected="true"
              >Highlights</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="profile-tab"
              data-toggle="tab"
              href="#profile"
              role="tab"
              aria-controls="profile"
              aria-selected="false"
              >Specification</a
            >
          </li>
             <li class="nav-item">
            <a
              class="nav-link"
              id="info-tab"
              data-toggle="tab"
              href="#info"
              role="tab"
              aria-controls="info"
              aria-selected="false"
              >Info</a
            >
          </li>
            
        
            
         <!--  <li class="nav-item">
            <a
              class="nav-link"
              id="review-tab"
              data-toggle="tab"
              href="#review"
              role="tab"
              aria-controls="review"
              aria-selected="false"
              >Reviews</a
            >
          </li> -->
            
        </ul>
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
              <h4>Description :</h4>
            <p>
             <?php echo $pro_desc; ?>
            </p>
              <h4>Ingredients :</h4>
              <p>
                <?php echo $pro_key; ?>
              </p>
           
          </div>
          <div
            class="tab-pane fade"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
          >
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <h5>Brand</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_brand; ?></h5>
                    </td>
                  </tr>
                 
                  <tr>
                    <td>
                      <h5>Quality checking</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_qua; ?></h5>
                    </td>
                  </tr>
             
                 
                  <tr>
                    <td>
                      <h5>Unit</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_unit; ?></h5>
                    </td>
                  </tr>
                     <tr>
                    <td>
                      <h5>Packaging Type</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_pack; ?></h5>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
               <div
            class="tab-pane fade"
            id="info"
            role="tabpanel"
            aria-labelledby="info-tab"
          >
            
                     <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <h5>Shelf life</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_exp; ?></h5>
                    </td>
                  </tr>
                 
                  <tr>
                    <td>
                      <h5>Manufacturer Details</h5>
                    </td>
                    <td>
                      <h5><?php echo $pro_man; ?></h5>
                    </td>
                  </tr>
             
                 
                 
                    
                </tbody>
              </table>
            </div>
                   
           
          </div>
      
            
      
        </div>
      </div>
    </section>
    <!--================End Product Description Area =================-->
  <?php include('includes/menu.php')?>
    <!--================ start footer Area  =================-->
 <?php
   
   include('includes/foot.php')
   
   ?>
  </body>
</html>


