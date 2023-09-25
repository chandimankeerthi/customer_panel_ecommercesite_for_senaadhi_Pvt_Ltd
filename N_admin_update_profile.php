<?php
session_start();
include "config.php";


if(isset($_REQUEST['update'])){   
    $id=$_REQUEST['uid']; 
    $bfname=$_REQUEST['ufname'];
    $blname=$_REQUEST['ulname'];
    $bcontact=$_REQUEST['ucontact'];
    $bresidence1=$_REQUEST['uresidence1'];
    $bresidence2=$_REQUEST['uresidence2'];
    $bcountry=$_REQUEST['ucountry'];
    $bcity=$_REQUEST['ucity'];
    $bpostal=$_REQUEST['upostal'];    
    $bdistrict=$_REQUEST['udistrict'];

    $update="UPDATE `user_details` SET `customer_fname`='$bfname',`customer_lname`='$blname',`contact_number`='$bcontact',`residence1`='$bresidence1',`residence2`='$bresidence2',`country`='$bcountry',`city`='$bcity',`postal_code`='$bpostal',`district`='$bdistrict' WHERE id=$id";
   
    $conn->query($update);

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
                    <a class="breadcrumb-item text-dark" href="index.php">Home</a>
                    <span class="breadcrumb-item active">Update User Profile</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->


    <div class="container-fluid">

        <div class="row px-xl-5">
            <div class="col-lg-10">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Update
                        My Profile</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form>
                        <?php
$coustemerid=$_SESSION['email'];


$getToCartSql="select * from user_details WHERE email='$coustemerid' order by id asc";

$resultGetToCart=$conn->query($getToCartSql);
while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>

                        <address><br>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="inputufname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="ufname"
                                        value="<?php echo $rowGetToCart['customer_fname'];?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputulname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="ulname"
                                        value="<?php echo $rowGetToCart['customer_lname']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputucontact" class="form-label">Mobile No</label>
                                    <input type="tel" class="form-control" name="ucontact"
                                        value="<?php echo $rowGetToCart['contact_number']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputuresidence1" class="form-label">Address Line 1</label>
                                    <input type="text" class="form-control" name="uresidence1"
                                        value="<?php echo $rowGetToCart['residence1']; ?>">

                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputuresidence2" class="form-label">Address Line 2</label>
                                    <input class="form-control" type="text" name="uresidence2"
                                        value="<?php echo $rowGetToCart['residence2']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputucountry" class="form-label">Country</label>
                                    <input class="form-control" type="text" name="ucountry" value="Sri Lanka">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputudistrict" class="form-label">District</label>
                                    <input class="form-control" type="text" name="udistrict"
                                        value="<?php echo $rowGetToCart['district']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputucity" class="form-label">City</label>
                                    <input class="form-control" type="text" name="ucity"
                                        value="<?php echo $rowGetToCart['city']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="inputupostal" class="form-label">ZIP Code</label>
                                    <input class="form-control" type="text" name="upostal"
                                        value="<?php echo $rowGetToCart['postal_code']; ?>">
                                </div>
                                <div class="col-md-6 form-group">

                                    <input class="form-control" type="hidden" name="uid"
                                        value="<?php echo $rowGetToCart['id']; ?>">
                                </div>
                                <div>
                                    <div class="col-md-6 form-group">

                                        <span class="status-btn active-btn"><input type="submit" name="update"
                                                value="Update" class="btn btn-primary"></span>
                                    </div>
                                </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Checkout End -->



    <?php

} ?>

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