<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View vendors
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View vendors
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> vendor Name: </th>
                                <th> vendor Image: </th>
                                <th> vendor E-Mail: </th>
                                <th> vendor Country: </th>
                                <th> vendor Job: </th>
                                <th> vendor Contact: </th>
                                <th> Edit: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_vendors = "select * from vendors";
                                
                                $run_vendors = mysqli_query($con,$get_vendors);
          
                                while($row_vendors=mysqli_fetch_array($run_vendors)){
                                    
                                    $vendor_id = $row_vendors['vendor_id'];
                                    
                                    $vendor_name = $row_vendors['vendor_name'];
                                    
                                    $vendor_img = $row_vendors['vendor_image'];
                                    
                                    $vendor_email = $row_vendors['vendor_email'];
                                    
                                    $vendor_state = $row_vendors['vendor_state'];
                                    
                                    $vendor_job = $row_vendors['vendor_job'];
                                    
                                    $vendor_contact = $row_vendors['vendor_contact'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $vendor_name; ?> </td>
                                <td> <img src="../vendor_area/vendor_images/<?php echo $vendor_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $vendor_email; ?> </td>
                                <td> <?php echo $vendor_state; ?></td>
                                <td> <?php echo $vendor_job; ?> </td>
                                <td> <?php echo $vendor_contact ?> </td>
                                <td>    
                                     
                                     <a href="index.php?user_profile=<?php echo $vendor_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?delete_vendor=<?php echo $vendor_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>