    <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

<style>
    


    .loader{
        
        position: fixed;
        z-index: 20;
        overflow: visible;  
        align-items: center;
        justify-content: center;
        
    }
    .gif-loader{
        position: fixed;
        bottom: 300px;
        right: 70px;
       
        align-items: center;
    }



</style>


<div class="loader">


<div class="gif-loader">
    
    <img src="images/loader.gif"/>
    
    <h1 class="text-center">Connection Failed !</h1>
    <div class="row">
    <div class="col-md-6 text-center"><button class="btn btn-info"  onclick="chkInternetStatus();">Refresh</button></div>
         <div class="col-md-6"></div>
    </div>
   
    </div>
    
    
    
</div>  


<script type="text/javascript">
function chkInternetStatus() {
    if(navigator.onLine) {
       window.open('index.php','_self');
    } else {
         window.open('connection.php','_self');
    }
}
</script>