<?php 
session_start();
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Senaadhi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>

<body>



<div class="container" id="screenshot-content">
    <div class="row">
        <div class="col-xs-12">

					<?php
						$coustemerid=$_SESSION['email'];
						$getToCartSql="select * from order_detail WHERE buyer_email='$coustemerid' AND order_status='Delevered' order by id asc";
						$resultGetToCart=$conn->query($getToCartSql);
						while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
							<br>
    								<div class="invoice-title">
    										<h2>Senaadhi Easy Shopping Invoice</h2><h3 class="pull-right">Order <?php echo $rowGetToCart['id']; ?></h3>
											<address>
    											<strong>Order Date:</strong><br>
    											<?php echo date("timeSTMP");?><br><br>
    										</address>				
    								</div>
    							<hr>    		
    				<div class="row">
    					<div class="col-xs-6">

											Hi <strong><?php echo $_SESSION['customer_fname'];?>  <?php echo $rowGetToCart['buyer_lname']; ?></strong>,Thank you for ordering from <strong>Senaadhi! </strong>
    										<address><br>
												<strong>Billing Details</strong><br>  <br>  					
												<strong>Buyer Name:</strong><?php echo $_SESSION['customer_fname'];?>  <?php echo $rowGetToCart['buyer_lname']; ?><br>
												<strong>Email Address:</strong><?php echo $rowGetToCart['buyer_email']; ?><br>
												<strong>Contact Number:</strong><?php echo $rowGetToCart['buyer_contact']; ?><br>						
												<strong>Buyer Address:</strong><?php echo $rowGetToCart['buyer_residence1']; ?> , <?php echo $rowGetToCart['buyer_residence2']; ?> , <?php echo $rowGetToCart['buyer_city']; ?> ,<?php echo $rowGetToCart['buyer_country']; ?><br>
												<strong>Buyer Postal Code:</strong><?php echo $rowGetToCart['buyer_postalcode']; ?><br>						
												<strong>Payment Method:</strong>Cash On Delivery<br>    											
    										</address>
    					</div>    	<br><br>		
						<div class="col-xs-6">
    										<address>
												<strong>Shipping Details</strong><br>  <br>  					
												<strong>Delevery Name:</strong> <?php echo $rowGetToCart['shipping_fname']; ?>  <?php echo $rowGetToCart['shipping_lname']; ?><br>
												<strong>Email Address:</strong><?php echo $rowGetToCart['shipping_email']; ?><br>
												<strong>Contact Number:</strong><?php echo $rowGetToCart['shipping_contact']; ?><br>						
												<strong>Delevery Address:</strong><?php echo $rowGetToCart['shipping_residence1']; ?> , <?php echo $rowGetToCart['shipping_residence2']; ?> , <?php echo $rowGetToCart['shipping_city']; ?> ,<?php echo $rowGetToCart['shipping_country']; ?><br>
												<strong>Postal Code:</strong><?php echo $rowGetToCart['shipping_postalcode']; ?><br>						    										
    										</address>
    					</div>
						

<div class="container">     
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    					<div class="panel-body">
    						<div class="table-responsive">
    							<table class="table table-condensed">
    										<thead>
                                				<tr>
													<td class="text-right"><strong>Product ID</strong></td>
        											<td class="text-right"><strong>Totals</strong></td>
        											<td class="text-center"><strong>Quantity * Unit Price </strong></td>      							
													<td class="text-center"><strong> Quantity * Unit Delevery Fee </strong></td>
        											<td class="text-right"><strong>Totals</strong></td>
													<td class="text-right"><strong></strong></td>
													<td class="text-right"><strong></strong></td>
                               		 			</tr>
    										</thead>
    								<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->		
                                                            

    											<tr>
													<td><?php echo $rowGetToCart['id']; ?></td>
    												<td><?php echo $rowGetToCart['product_name']; ?></td>
													<td class="text-center"><?php echo $rowGetToCart['product_cost']?></td>
    												<td class="text-center">Rs.<?php echo $rowGetToCart['deleveryfee']; ?></td> 
													<td class="text-center">Rs.<?php echo $rowGetToCart['total_price']; ?></td>  	
												<tr>						     	
    								</tbody>
    							</table>
    						</div>
    					</div>
    		</div>
    	</div>
    </div>
</div>
<?php

} ?> 
				
    		


</body>
</html>