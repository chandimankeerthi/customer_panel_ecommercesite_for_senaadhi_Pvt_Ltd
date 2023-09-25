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

if (isset($_REQUEST['Delete'])) {
    $itemID = $_REQUEST['Delete'];
    $sqlDel = "DELETE FROM cart WHERE user_id = $coustemeeID AND item_id = $itemID";
    $resultDel = $conn->query($sqlDel);

    if ($resultDel) {
        echo '<script>alert("Product Deleted Successfully");</script>';
    } else {
        echo '<script>alert("Failed to Delete Product");</script>';
    }
}


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
</head>

<body>
    <?php
    include "topbar.php";
    ?>



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
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Product </th>
                            <th>Unit Price</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
if($_SESSION['loginStat']==1){


$coustemerid=$_SESSION['id'];
$totPrice=0;
$totItem=0;
$shipping_cost=0;
$getToCartSql="SELECT F.*,C.Quantity FROM cart C, product_details F WHERE C.item_id=F.id AND C.user_id='$coustemerid'";
$resultGetToCart=$conn->query($getToCartSql);
while($rowGetToCart=$resultGetToCart->fetch_array()){
    $_SESSION['productQuantity']=$rowGetToCart['productQuantity'];    
?>

                        <tr>
                            <td class="align-middle"><img src="../uploads/<?php echo$rowGetToCart['productImage1']; ?>"
                                    alt="" style="width: 50px;"></a></td>


                            <td>

                                <?php
$mainCat = $rowGetToCart["mainCat"];
$pID = $rowGetToCart["id"];


if ($mainCat === "Shirt") {
    $detailPage = "N_Shirt_detail.php";
} elseif ($mainCat === "T-shirt") {
    $detailPage = "N_tshirt_detail.php";
} elseif ($mainCat === "Trouser") {
    $detailPage = "N_Trouser_detail.php";
} elseif ($mainCat === "Bed") {
    $detailPage = "N_Bed_detail.php";
} elseif ($mainCat === "Chair") {
    $detailPage = "N_Chair_detail.php";
} else {
    // Default to a generic detail page if mainCat doesn't match any of the expected values
    $detailPage = "generic_detail.php";
}
?>


                                <a class="h6 text-decoration-none text-truncate"
                                    href="<?php echo $detailPage . '?pID=' . $pID; ?>">
                                    <b><?php echo $rowGetToCart["Productname"]; ?></b>
                                </a>
                                <p class="mb-5"
                                    style="color: <?php echo $rowGetToCart["productQuantity"] != '0' ? 'green' : 'red'; ?>">
                                    <?php echo $rowGetToCart["productQuantity"] != '0' ? 'In Stock' : 'Out of Stock'; ?>
                                </p>
                            </td>

                            <td class="align-middle">
                                <?php echo ($rowGetToCart["productPrice"]* (100 - $rowGetToCart["discountpercentage"]))/100;?>
                            </td>

                            <?php
$getCategory="SELECT * FROM cart";
$resultSubCategory2=$conn->query($getCategory);
while($rowSub2 = $resultSubCategory2->fetch_array()){
?>
                            <td class="align-middle"><?php echo $rowSub2['color'] ?></td>
                            <td class="align-middle"><?php echo $rowSub2['size'] ?></td>

                            <?php
}
        ?>



                            <td class="align-middle">
                                <a href="cart.php?count=<?php echo ($rowGetToCart['Quantity']-1)." ".$rowGetToCart['id']; ?>"
                                    class="btn btn-sm btn-primary btn-minus"><i class="fa fa-minus"></i></a>
                                <!-- Minus button-->
                                <?php echo $rowGetToCart['Quantity']; ?>
                                <a href="cart.php?count=<?php echo ($rowGetToCart['Quantity']+1)." ".$rowGetToCart['id']; ?>"
                                    class="btn btn-sm btn-primary btn-plus"><i class="fa fa-plus"></i></a>
                                <!-- Add button-->
                            </td>
                            <b><?php echo ($rowGetToCart["productPrice"]* (100 - $rowGetToCart["discountpercentage"]))/100;?></b>

                            <td class="align-middle">
                                Rs.<?php $totPrice+=($rowGetToCart["productPrice"]* (100 - $rowGetToCart["discountpercentage"]))/100*$rowGetToCart['Quantity']; 
                                echo $rowGetToCart['productPrice']*$rowGetToCart['Quantity'];
                                $shipping_cost+=$rowGetToCart['shipping_cost']*$rowGetToCart['Quantity']; ?>
                            </td>

                            <td class="align-middle"><a href="cart.php?Delete=<?php echo $rowGetToCart['id'];  ?>"
                                    class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i></a></td>
                        </tr>
                        <?php $totItem+=$rowGetToCart['Quantity'];
}}
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                        Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>Rs.<?php 
                            
                            if($_SESSION['loginStat']==1)
                                        {
                                            echo $totPrice;
                                        }
                                        else{
                                            echo 0;
                                            } ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Total Shipping Cost</h6>
                            <h6 class="font-weight-medium">Rs.<?php 
                            
                            if($_SESSION['loginStat']==1)
                                        {
                                            echo $shipping_cost;
                                        }
                                        else{
                                            echo 0;
                                            } ?></h6>

                        </div>

                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>Rs.<?php if($_SESSION['loginStat']==1&&$totItem!=0)
                                        {
                                            echo $totPrice+$shipping_cost;
                                        }
                                        else{
                                            echo 0;
                                            } ?></h5>
                        </div>

                        <form action="checkout.php" method="post">

                            <?php
if($_SESSION['loginStat']==1 && $totItem!=0) { 
					?>
                            <div class="checkout">
                                <input type="hidden" value="<?php 	echo $_SESSION['email'];?>" name="coustomerEmail">
                                <input type="hidden" value="<?php 	echo $totPrice;?>" name="totPrice">
                                <input type="hidden" value="<?php 	echo $totItem;?>" name="totitem">
                                <div class="d-grid gap-2">
                                    <input type="submit" value="Proceed to Checkout"
                                        class="btn btn-block btn-primary font-weight-bold my-3 py-3">
                                </div>
                                <?php
}
?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


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