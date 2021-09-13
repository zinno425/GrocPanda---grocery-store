
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bangers" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="testi/css/style.css">
<meta charset="utf-8">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>

<body>
  <!--================Header Menu Area =================-->
<?php

include('includes/header.php');
?>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
    <section>
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide_1.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide_2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide_3.png" alt="Third slide">
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="images/slide_4.png" alt="Fourth slide">
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="images/slide_5.png" alt="Five slide">
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
</section>
  <!--================End Home Banner Area =================-->
    
    
    <section>
    
        <br />    <br />    <br />    <br />    <br />
    
    </section>

 
    
      <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row" style="padding-left:50px;">
        <div class="col-sm-6" style="max-width:40%;">
          <div class="single-feature">
              <div class="row">
            <a href="#" class="title">
             <img src="images/list/SAFFF-removebg-preview.png" style="max-width:100%">
                <h3 style="font-size:3vw">Grocery & stapels</h3>
            </a>
              </div>
          </div>
        </div>

        <div class=" col-sm-6" style="max-width:40%;">
          <div class="single-feature">
              <div class="row">
            <a href="#" class="title">
             <img src="images/list/h_hold.png" style="max-width:85%">
           <h3 style="font-size:3vw">Household needs</h3>
            </a>
              </div>
          </div>
        </div>
        </div>
        <div class="row" style="padding-left:50px;" >

        <div class="col-sm-6" style="max-width:40%">
          <div class="single-feature">
              <div class="row">
            <a href="#" class="title">
            <img src="images/list/p_care.png" style="max-width:100%">
             <h3 style="font-size:3vw "> Personal & Hygine care </h3>
            </a>
              </div>
          </div>
        </div>

        <div class="col-sm-6" style="max-width:40%">
          <div class="single-feature">
              <div class="row">
            <a href="#" class="title">
              <img src="images/list/fb.png" style="max-width:85%">
              <h3 style="font-size:3vw">Food & Brevrages</h3>
            </a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
 
    
    
    
     <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container box border" style="border-radius: 55px;">
        <br/>
        <h2 class="text-center">Just Belief In YourSelf!</h2>
        <p class="text-center">We will never Disappoint you...</p>
        
        <br />
        
      <div class="row" style="padding-left:50px;">
        <div class="col-sm-6" style="max-width:40%;">
          <div class="single-feature box" style="background-color:#EA7773;border-style:solid;border-color:black;border-radius: 105px;">
            
            <a href="#" class="title">
              <i class="flaticon-money"></i>
               <h3 style="font-size:3vw">Return policy</h3>
            </a>
              
          </div>
        </div>

        <div class=" col-sm-6" style="max-width:40%">
          <div class="single-feature box" style="background-color:#FFF222;border-style:solid;border-color:black;border-radius: 105px;">
              
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3 style="font-size:3vw">Free* Delivery</h3>
            </a>
        
          </div>
        </div>
        </div>
        <div class="row" style="padding-left:50px;" >

        <div class="col-sm-6" style="max-width:40%">
          <div class="single-feature box" style="background-color:#75DA8B;border-style:solid;border-color:black;border-radius: 105px;">
              
            <a href="#" class="title">
              <i class="flaticon-support"></i>
               <h3 style="font-size:3vw">Alway support</h3>
            </a>
       
          </div>
        </div>

        <div class="col-sm-6" style="max-width:40%">
          <div class="single-feature box" style="background-color:#01CBC6;border-style:solid;border-color:black;border-radius: 105px;">
              
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
            <h3 style="font-size:3vw">Secure payment</h3>
            </a>
             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Random products</span></h2>
            <p>WooWy ! What a product list .....</p>
          </div>
        </div>
      </div>

      <div class="row">
          
          
   <?php getFePro(); ?>
          
          
          
          
          
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->

  <!--================ Offer Area =================-->
     <section class="feature-area section_gap_bottom_custom" >
  <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="container box border" style="border-radius: 55px;margin:15px;">
        <div class="heading">
            <br/>
        <h3 class="text-center" style="font-family:BANGERS;font-size:50px;">PANDA ! ALSO LOVES YOU TOO ... </h3>
        </div>
          <div class="box border" style="background:#E8E8E8;border-radius: 55px;padding-bottom:30px;">
     <?php include('testi/index.php');?>
              
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" style="opacity:0">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
              
                <div class="carousel-inner">
    <div class="carousel-item carouselaa-itek-1 active">
        <br/>
            <div class="pic">
      <img src="testi/images/p2.jpeg" alt="">
                </div>
          <p class="description">
                               Acha laga jaan kar ki naye, yuva ki society ke liye kuch kar rahe h . Mujhe inki service achi lagi. Umid hai ye log aage badhenge.
                            </p>
                            <div class="testimonial-prof">
                                <span class="title">Renu Kushwaha</span>
                                <small>Sainik Vihar,Gorakhpur</small>
                            </div>
    </div>
         <div class="carousel-item carouselaa-itek-1">
             <br/>
            <div class="pic">
      <img src="testi/images/p2.jpeg" alt="">
                </div>
          <p class="description">
                               Acha laga jaan kar ki naye, yuva ki society ke liye kuch kar rahe h . Mujhe inki service achi lagi. Umid hai ye log aage badhenge.
                            </p>
                            <div class="testimonial-prof">
                                <span class="title">Renu Kushwaha</span>
                                <small>Sainik Vihar,Gorakhpur</small>
                            </div>
    </div><div class="carousel-item carouselaa-itek-1">
                    <br/>
            <div class="pic">
      <img src="testi/images/p2.jpeg" alt="">
                </div>
          <p class="description">
                               Acha laga jaan kar ki naye, yuva ki society ke liye kuch kar rahe h . Mujhe inki service achi lagi. Umid hai ye log aage badhenge.
                            </p>
                            <div class="testimonial-prof">
                                <span class="title">Renu Kushwaha</span>
                                <small>Sainik Vihar,Gorakhpur</small>
                            </div>
    </div><div class="carousel-item carouselaa-itek-1">
                    <br/>
            <div class="pic">
      <img src="testi/images/p2.jpeg" alt="">
                </div>
          <p class="description">
                               Acha laga jaan kar ki naye, yuva ki society ke liye kuch kar rahe h . Mujhe inki service achi lagi. Umid hai ye log aage badhenge.
                            </p>
                            <div class="testimonial-prof">
                                <span class="title">Renu Kushwaha</span>
                                <small>Sainik Vihar,Gorakhpur</small>
                            </div>
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
      </div>
       <div class="col-md-3"></div>
         </div>
    
  </section>
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>OnSale products</span></h2>
            <p>Tera Dhayan kidhar h naya naya saman idhr hai!</p>
          </div>
        </div>
      </div>

      <div class="row">
               
   <?php getSpcPro(); ?>

        <div class="col-lg-6 mt-5 mt-lg-0">
            
          <div class="row">
           
   <?php getNewPro(); ?>
         
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->
    <section>
    <div>
            <img class="d-block w-100" src="images/PN.jpg">
            
            </div>
        <br/>        <br/>
        <br/>

        <span ><h5 class="text-center"> Made with lots of <i class="fa fa-heart-o" aria-hidden="true"></i> by GrocPanda</h5></span>
    </section>
          <br/> <br/>


 
     <?php include('includes/menu.php')?>
  <!--================ End Blog Area =================-->

  <!--================ start footer Area  =================-->
 <?php include('includes/foot.php')?>
</body>

</html>