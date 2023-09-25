<?php
    session_start();
    include "config.php";
    if($_SESSION['loginStat']==1){
    $coustemeeID=$_SESSION['id'];
}
else{
    $coustemeeID='';
}

    if(isset($_REQUEST['count'])){// Update Quatity
	$str=$_REQUEST['count'];    
	$get=explode(" ",$str);
	$itemID=$get[1];
	$quantity=(int)$get[0];
    //echo $quantity;
	if($quantity>0 && $quantity<=$_SESSION['productQuantity']){
		
		$sqlUpdateq="UPDATE cart SET Quantity='$quantity' WHERE user_id=$coustemeeID AND item_id=$itemID";        
		$conn->query($sqlUpdateq);
	}
		
}

if(isset($_REQUEST['Delete'])){// Remove items from cart
	$itemID=$_REQUEST['Delete'];
	$sqlDel="DELETE FROM cart WHERE user_id=$coustemeeID AND item_id=$itemID";
	$conn->query($sqlDel);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Senaadhi - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
    table,
    th,
    td {
        border: 1px solid white;
        border-collapse: collapse;
    }

    th,
    td {
        background-color: #ffffff;
    }
    </style>


</head>

<body>
    <!-- Topbar Start -->
    <?php
    include "topbar.php";
    ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php
    include "navbar.php";
    ?>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <span class="breadcrumb-item active">Track My Order</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table style="width:100%">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Quantity and Cost</th>
                            <th>Total Price</th>
                            <th>Date Of Ordered</th>
                            <th>Estimate Delevery Date</th>
                            <th>Order Status</th>
                            <th>Tracking ID</th>


                        </tr>
                    </thead>
                    <tbody class="align-middle">




                        <tr>

                            <td>

                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <a href="N_Shirt_detail.php">
                                        <p><?php echo $rowGetToCart['product_name'] ?></p>
                                    </a>

                                </div> <?php   } ?>


                            </td>
                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['color_family'] ?></p>

                                </div> <?php   } ?>
                            </td>

                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['size'] ?> </p>

                                </div> <?php   } ?>
                            </td>

                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['product_cost'] ?> </p>

                                </div> <?php   } ?>
                            </td>

                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p>Rs : <?php echo $rowGetToCart['total_price'] ?> </p>

                                </div> <?php   } ?>
                            </td>

                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['timeSTMP'] ?> </p>

                                </div> <?php   } ?>
                            </td>
                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['date_of_delivered'] ?> </p>

                                </div> <?php   } ?>
                            </td>
                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['order_status'] ?> </p>

                                </div> <?php   } ?>
                            </td>
                            <td>
                                <?php
                                $coustemerid=$_SESSION['email'];

                                $getToCartSql="SELECT * FROM order_detail  WHERE buyer_email='$coustemerid'";

                                $resultGetToCart=$conn->query($getToCartSql);
                                    while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                <div class="d-flex justify-content-between">

                                    <p><?php echo $rowGetToCart['tracking_id'] ?> </p>

                                </div> <?php   } ?>
                            </td>


                        </tr>




                    </tbody>
                </table>


            </div>


















        </div>
    </div>


    <!-- Vendor Start -->
    <?php
    include "vendor.php";
    ?>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <?php
    include "footer.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>