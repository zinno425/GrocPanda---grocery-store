<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_penny = "SELECT * FROM `panda_p_service` WHERE `customer_id` = '$customer_id'";

$run_penny = mysqli_query($con,$get_penny);

$row_penny =mysqli_fetch_array($run_penny);

 $due_amount = $row_penny['due_amount'];

$level = $row_penny['level'];

$status = $row_penny['status'];

$balance = $row_penny['balance'];



?>
<link rel="stylesheet" href="assets/styles/style.min.css">

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="row">
        <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-center" style="font-famiy:BAGERS">PANDA PENNY SERVICE</h2>
            </div>
             <div class="col-md-3"></div>
        </div>
    
    <div class="row small-spacing">
        
        
        
        	<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-info"></i>
						<p class="text text-white">STATUS</p>
						<h2 style="color:#fff;"><?php echo $status ; ?></h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-diamond"></i>
						<p class="text text-white">LEVEL</p>
						<h2 class="counter"><?php echo $level; ?></h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-usd"></i>
						<p class="text text-white">BALANCE</p>
						<h2 class="counter"><?php echo $balance; ?></h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-credit-card-alt"></i>
						<p class="text text-white">DUE AMOUNT</p>
						<h2 class="counter"><?php echo $due_amount; ?></h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>
    
    
    
    
    </div>
    <div class="col-md-3">
    
    
    </div>



</div>

<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
    
    <div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> #: </th>
                <th> Invoice No: </th>
                <th> Paying Date:</th>
                 <th> Amount: </th>
                 <th> Transaction id: </th>
                <th> Status: </th>
                
            </tr> <!-- tr Finish -->
            
        </thead> <!-- thead Finish -->
        <tbody>
            <?php 
            
            $i = 0;
            $get_p_his = "SELECT * FROM `panda_penny_history` WHERE `customer_id`= '$customer_id'";
            
            $run_p_his = mysqli_query($con,$get_p_his);
            
            while($row_p_his = mysqli_fetch_array($run_p_his)){
                
                $invoice = $row_p_his['invoice_no'];
                $date = $row_p_his['date'];
                $status_h= $row_p_his['status'];
                $amount= $row_p_his['amount'];
                $trans_id= $row_p_his['tran_id'];
            
            
            $i ++;
            
            
            ?>
        
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $invoice; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $amount; ?></td>
            <td><?php echo $trans_id; ?></td>
            <td><?php echo $status_h; ?></td>
            
            </tr>
        <?php } ?>
        
        
        
        </tbody>
    
        </table>
    
    
    </div>
    </div>

<div class="col-md-3"></div>



</div>
    </div>




 
    
    