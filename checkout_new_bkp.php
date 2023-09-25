<?php
session_start();
include "config.php";

if(isset($_REQUEST['InsertProduct'])){
$bfname=$_REQUEST['bfname'];
$blname=$_REQUEST['blname'];
$bemail=$_REQUEST['bemail'];
$bcontact=$_REQUEST['bcontact'];
$bresidence1=$_REQUEST['bresidence1'];
$bresidence2=$_REQUEST['bresidence2'];
$bcountry=$_REQUEST['bcountry'];
$bcity=$_REQUEST['bcity'];
$bpostal=$_REQUEST['bpostal'];
$sfname=$_REQUEST['sfname'];
$slname=$_REQUEST['slname'];
$semail=$_REQUEST['semail'];
$scontact=$_REQUEST['scontact'];
$sresidence1=$_REQUEST['sresidence1'];
$sresidence2=$_REQUEST['sresidence2'];
$scountry=$_REQUEST['scountry'];
$scity=$_REQUEST['scity'];
$spostal=$_REQUEST['spostal'];
$Payement_method='Cash On Delivery';
$stockStatus='In Stock';



// $sql="INSERT INTO `order_detail`(`buyer_fname`,`buyer_lname`,`buyer_email`,`buyer_contact`,`buyer_residence1`,`buyer_residence2`,`buyer_country`,`buyer_city`,`buyer_postalcode`)
// VALUES ('$bfname','$blname','$bemail',$bcontact,'$bresidence1','$bresidence2','$bcountry','$bcity',$bpostal)";
 
$sql="INSERT INTO `order_detail`(`buyer_fname`,`buyer_lname`,`buyer_email`,`buyer_contact`,`buyer_residence1`,`buyer_residence2`,`buyer_country`,`buyer_city`,`buyer_postalcode`,`shipping_fname`,`shipping_lname`,`shipping_email`,`shipping_contact`,`shipping_residence1`,`shipping_residence2`,`shipping_country`,`shipping_city`,`shipping_postalcode`,`Payement_method`)
VALUES ('$bfname','$blname','$bemail',$bcontact,'$bresidence1','$bresidence2','$bcountry','$bcity',$bpostal,'$sfname','$slname','$semail','$scontact','$sresidence1','$sresidence2','$scountry','$scity','$spostal','$Payement_method')";

$conn->query($sql);


}else{}

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
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->

    <form>
        <div class="container-fluid">

            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Billing
                            Address</span></h5>
                    <div class="bg-light p-30 mb-5">

                        <?php
$coustemerid=$_SESSION['id'];


$getToCartSql="select * from user_details WHERE id='$coustemerid' order by id asc";

$resultGetToCart=$conn->query($getToCartSql);
while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="inputbfname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="inputbfname" name="bfname"
                                    value="<?php echo $_SESSION['customer_fname'];?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputblname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputblname" name="blname"
                                    value="<?php echo $rowGetToCart['customer_lname']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputblname" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="inputbemail" name="bemail"
                                    value="<?php echo $rowGetToCart['email']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbcontact" class="form-label">Mobile No</label>
                                <input type="tel" class="form-control" id="inputbcontact" name="bcontact"
                                    value="<?php echo $rowGetToCart['contact_number']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbresidence1" class="form-label">Address Line 1</label>
                                <input type="text" class="form-control" id="inputbresidence1" name="bresidence1"
                                    value="<?php echo $rowGetToCart['residence1']; ?>">

                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbresidence2" class="form-label">Address Line 2</label>
                                <input class="form-control" type="text" name="bresidence2"
                                    value="<?php echo $rowGetToCart['residence2']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbcountry" class="form-label">Country</label>
                                <input class="form-control" type="text" name="bcountry" value="Sri Lanka">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbcity" class="form-label">City</label>
                                <input class="form-control" type="text" name="bcity"
                                    value="<?php echo $rowGetToCart['city']; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputbpostal" class="form-label">ZIP Code</label>
                                <input class="form-control" type="text" name="bpostal"
                                    value="<?php echo $rowGetToCart['postal_code']; ?>">
                            </div>





                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="shipto">
                                    <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                        data-target="#shipping-address">Ship to different address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse mb-5" id="shipping-address">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span
                                class="bg-secondary pr-3">Shipping Address</span></h5>
                        <div class="bg-light p-30">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="inputsfname" class="form-label">First Name</label>
                                    <input class="form-control" type="text" name="sfname" placeholder="John">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputslname" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="slname" placeholder="Doe">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputsemail" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" name="semail"
                                        placeholder="example@email.com">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputscontact" class="form-label">Mobile No</label>
                                    <input class="form-control" type="tel" name="scontact" placeholder="+9476 456 789">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputsresidence1" class="form-label">Address Line 1</label>
                                    <input class="form-control" type="text" name="sresidence1" placeholder="123 Street">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputsresidence2" class="form-label">Address Line 2</label>
                                    <input class="form-control" type="text" name="sresidence2" placeholder="Lotus Lane">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputscountry" class="form-label">Country</label>
                                    <input class="form-control" type="text" name="scountry" value="Sri Lanka">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputscity" class="form-label">City</label>
                                    <input class="form-control" type="text" name="scity" placeholder="Kegalle">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputspostal" class="form-label">ZIP Code</label>
                                    <input class="form-control" type="text" name="spostal" placeholder="123">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

} ?>
                <div class="col-lg-4">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span
                            class="bg-secondary pr-3">Order
                            Total</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="border-bottom">
                            <h6 class="mb-3">Products</h6>
                            <?php
$coustemerid=$_SESSION['id'];
$totPrice=0;
$totItem=0;
$getToCartSql="SELECT F.*,C.Quantity FROM cart C, product_details F WHERE C.item_id=F.id AND C.user_id='$coustemerid'";

$resultGetToCart=$conn->query($getToCartSql);
while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                            <div class="d-flex justify-content-between">
                                <p><?php echo $rowGetToCart['Productname'] ?></p>
                                <p><?php echo $rowGetToCart['Quantity'] ?>&nbsp;*
                                    &nbsp;RS.<?php echo $rowGetToCart['productPrice'] ?></p>
                            </div> <?php
                     $totPrice+=$rowGetToCart['productPrice']*$rowGetToCart['Quantity'];
                     } ?>

                        </div>
                        <div class="border-bottom pt-3 pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Subtotal</h6>
                                <h6>RS.<?php echo $totPrice ?></h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">Rs.400</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>Rs.<?php echo $totPrice+400; ?></h5>
                            </div>
                            <a href="invoice.php" class="btn btn-block btn-danger font-weight-bold py-3">Generate
                                Invoice</a>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span
                                class="bg-secondary pr-3">Payment</span></h5>
                        <div class="bg-light p-30">

                            <div class="form-group mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                    <label class="custom-control-label" for="banktransfer" name="Payement_method"
                                        value="Cash On Delivery">Cash On Delivery</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-primary" value="Place Order" name="InsertProduct"
                                    style="width: 300px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Checkout End -->
    </form>

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Our
                Official Partners</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="bg-light p-4">
                        <img src="img/fb1.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb2.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb3.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb4.jpg" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb5.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb6.png" alt="">
                    </div>
                    <div class="bg-light p-4">
                        <img src="img/fb7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">Sri Lankas Number One Fashion and Furniture Store Since 2018.We Sell Over 500+ Branded
                    Products On Our Website</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Senaadhi (Pvt)Ltd,
                    A/88,Ruwanwella,Avissawella</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>infosenaadhi@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+94 711 234567</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Customer Care</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Track My
                                Order</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop
                                Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Get the latest updates and promotions in your inbox. <br>We won’t share or sell your email.
                        </p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Senaadhi(Pvt)Ltd</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
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