


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">


<link rel="stylesheet" href="nav/css/main.css">
    <link rel="stylesheet" href="nav/css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="nav/img/favicon.png" />
<style>

    .not-container{
        
        position: fixed;
        bottom: 300px;
        right: -20px;
        z-index: 9999;
        cursor: pointer;
    }
    
    .not-button{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #00FA9A;
        box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }
    .not-button:hover{
        opacity: 0.8;
    }
    
    .not-button a{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

</style>




  <?php 
        
   if(isset($_SESSION['customer_email'])){
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
       
        $customer_name = $row_customer['customer_name'];
   }

?>



<div class="page-wrapper default-theme sidebar-bg bg1 ">
 <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="index.php">GROC PANDA</a>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
               
                    <div class="user-info">
                        <span class="user-name">
                            <strong>    <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Guest";
                       
                   }else{
                       
                       echo $customer_name;
                       
                   }
                   
                   ?></strong>
                        </span>
                        <span class="user-role"> <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "User@mail.com";
                       
                   }else{
                       
                       echo "" . $_SESSION['customer_email'] . "";
                       
                   }
                            ?>
                        
                        
                        </span>
                        <a><li>  <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> Login </a>";

                               }else{

                                echo " <a href='assets/customer/logout.php'> Log Out </a> ";

                               }
                           
                           ?></li></a>
                       
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-item sidebar-search">
                    <div>
                        <form method="post" action="search.php?search='<?php echo $search=$_POST['search'];?>'">
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search..." name="search">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                         <li class="header-menu">
                            <span>Panda on call</span>
                        </li>
                        <li>
                            <a href="tel:+918318834899">
                                <i class="fa fa-drupal"></i>
                                <span class="menu-text">Order on call</span>
                                
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>Category</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span class="menu-text">Grocery & Staples</span>
                               
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Pulses</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Atta & Other Flours</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Rice & Other grains</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Edible oils</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Salt & Sugar</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Ghee & Vanaspaties</a>
                                    </li>
                                    <li>
                                        <a href="delite_category.php?p_cat=6">Spices</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                  <i class="fa fa-plus"></i>
                                <span class="menu-text">HouseHold Needs</span>
                               
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                  <li>
                                        <a href="#">Laundry Detergent</a>
                                    </li>
                                    <li>
                                        <a href="#">Dishwashers</a>
                                    </li>
                                    <li>
                                        <a href="#">Cleaners</a>
                                    </li>
                                    <li>
                                        <a href="#">Cleaning tools and brushes</a>
                                    </li>
                                    <li>
                                        <a href="#">Pooja Needs</a>
                                    </li>
                                    <li>
                                        <a href="#">Repellets</a>
                                    </li>
                                    <li>
                                        <a href="#">Premium home care</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                 <i class="fa fa-plus"></i>
                                <span class="menu-text">Personal care</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Bath & Body</a>
                                    </li>
                                    <li>
                                        <a href="#">Hair Care</a>
                                    </li>
                                    <li>
                                        <a href="#">Skin Care</a>
                                    </li>
                                    <li>
                                        <a href="#">Oral Care</a>
                                    </li>
                                    <li>
                                        <a href="#">Face care</a>
                                    </li>
                                    <li>
                                        <a href="#">Shaving Needs</a>
                                    </li>
                                    <li>
                                        <a href="#">Cosmetics</a>
                                    </li>
                                    <li>
                                        <a href="#">Female Hygiene</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                 <i class="fa fa-plus"></i>
                                <span class="menu-text">Food & Breverages</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Cold drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Snaks & namkeens</a>
                                    </li>
                                    <li>
                                        <a href="#">Chips & Crips</a>
                                    </li>
                                    <li>
                                        <a href="#">Juices & Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Healthy & Energy Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Water & Soda</a>
                                    </li>
                                    <li>
                                        <a href="#">Milk Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Juices & Drinks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <span class="menu-text">Dairy products</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Milk</a>
                                    </li>
                                    <li>
                                        <a href="#">Dahi</a>
                                    </li>
                                     <li>
                                        <a href="#">Lassi</a>
                                    </li>
                                     <li>
                                        <a href="#">Butter</a>
                                    </li>
                                     <li>
                                        <a href="#">Cheese</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                 <i class="fa fa-plus"></i>
                                <span class="menu-text">Insta Food</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Noodles</a>
                                    </li>
                                    <li>
                                        <a href="#">Pasta</a>
                                    </li>
                                     <li>
                                        <a href="#">Macroni</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php 
                        
                        if(isset($_SESSION['customer_email'])){
                       
                       echo " <li class='header-menu'>
                            <span>My Account</span>
                        </li>
                        <li>
                            <a href='assets/customer/my_account.php?my_orders'>
                                <i class='fa fa-book'></i>
                                <span class='menu-text'>My Order</span>
                                
                            </a>
                        </li>
                          <li>
                            <a href='assets/customer/my_account.php?panda_penny'>
                                <i class='fa fa-credit-card'></i>
                                <span class='menu-text'>Panda penny services</span>
                            </a>
                        </li>
                        <li>
                            <a href='assets/customer/my_account.php?change_pass'>
                                <i class='fa fa-key'></i>
                                <span class='menu-text'>Change Password</span>
                            </a>
                        </li>
                           <li>
                            <a href='assets/customer/my_account.php?edit_account'>
                                <i class='fa fa-info'></i>
                                <span class='menu-text'>Edit account</span>
                            </a>
                        </li>";
                       
                   }else{
                       
                       echo "";
                       
                   }
                        ?>
                         
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="contact.php">
                                <i class="fa fa-microphone"></i>
                                <span class="menu-text">Contact us</span>
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                <span class="menu-text">Faq's</span>
                            </a>
                        </li>
                   
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-footer  -->
        
        </nav>
</div>
<div class="not-container">
<div class="not-button" id="not_button">
    <a class="icon-align-justify" id="toggle-sidebar" ></a>
    
    
    
    </div>

</div>
 <div id="overlay" class="overlay"></div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

 <script src="nav/js/main.js"></script>
