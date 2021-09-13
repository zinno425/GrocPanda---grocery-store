<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<?php 

    if(isset($_GET['vendor_profile'])){
        
        $edit_vendor = $_GET['vendor_profile'];
        
        $get_vendor = "select * from vendors where vendor_id='$edit_vendor'";
        
        $run_vendor = mysqli_query($con,$get_vendor);
        
        $row_vendor = mysqli_fetch_array($run_vendor);
        
        $vendor_id = $row_vendor['vendor_id'];
        
        $vendor_name = $row_vendor['vendor_name'];
        
        $vendor_pass = $row_vendor['vendor_pass'];
        
        $vendor_email = $row_vendor['vendor_email'];
        
        $vendor_image = $row_vendor['vendor_image'];
        
        $vendor_state = $row_vendor['vendor_state'];
        
        $vendor_about = $row_vendor['vendor_about'];
        
        $vendor_contact = $row_vendor['vendor_contact'];
        
        $vendor_job = $row_vendor['vendor_job'];
        
    }

?>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit vendor
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit vendor
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> vendorname </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_name; ?>" name="vendor_name" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> E-mail </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_email; ?>"  name="vendor_email" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Password </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_pass; ?>"  name="vendor_pass" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> state </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_state; ?>"  name="vendor_state" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Contact </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_contact; ?>"  name="vendor_contact" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Job </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input value="<?php echo $vendor_job; ?>"  name="vendor_job" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Image </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="vendor_image" type="file" class="form-control" required>
                          
                          <img src="vendor_images/<?php echo $vendor_image; ?>" alt="<?php echo $vendor_name; ?>" width="70" height="70">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> About </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea  name="vendor_about" class="form-control" rows="3"> <?php echo $vendor_about; ?></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update vendor" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->


<?php 

      if(isset($_POST['update'])){
    
    $vendor_name = $_POST['vendor_name'];
    $vendor_email = $_POST['vendor_email'];
    $vendor_pass = $_POST['vendor_pass'];
    $vendor_state = $_POST['vendor_state'];
    $vendor_contact = $_POST['vendor_contact'];
    $vendor_job = $_POST['vendor_job'];
    $vendor_about = $_POST['vendor_about'];
    
    $vendor_image = $_FILES['vendor_image']['name'];
    $temp_vendor_image = $_FILES['vendor_image']['tmp_name'];
    
    move_uploaded_file($temp_vendor_image,"vendor_images/$vendor_image");
    
    $update_vendor = "update vendors set vendor_name='$vendor_name',vendor_email='$vendor_email',vendor_pass='$vendor_pass',vendor_state='$vendor_state',vendor_contact='$vendor_contact',vendor_job='$vendor_job',vendor_about='$vendor_about',vendor_image='$vendor_image' where vendor_id='$vendor_id'";
    
    $run_vendor = mysqli_query($con,$update_vendor);
    
    if($run_vendor){
        
        echo "<script>alert('vendor has been updated sucessfully')</script>";
        echo "<script>window.open('login.php','_self')</script>";
        
        session_destroy();
        
    }
    
}

?>


<?php } ?>