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

    <link rel="stylesheet" href="style.css" />


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
    <div>
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Sign in</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->







    <!-- Signin -->
    <div class="login-wrapper">
        <form action="login.php" class="form" method="POST">
            <?php if (isset($_SESSION['error_message'])) { ?>
            <p class="error" style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
            <?php unset($_SESSION['error_message']); ?>
            <?php } elseif (isset($_SESSION['success_message'])) { ?>
            <p class="success" style="color: green;"><?php echo $_SESSION['success_message']; ?></p>
            <?php unset($_SESSION['success_message']); ?>
            <?php } ?>

            <label> Your Email<span class="req"></span> </label>
            <input type="email" class="form-control" id="email" required
                data-validation-required-message="Please enter your email address." autocomplete="off" name="email">
            <p class="help-block text-danger"></p>

            <label> Password<span class="req"></span> </label>
            <input type="password" class="form-control" id="password" required
                data-validation-required-message="Please enter your password" autocomplete="off" name="password">
            <p class="help-block text-danger"></p>


            <input style="margin-right:100px;" type="submit" value="Sign in" name="SignIn" class="submit-btn" /><br>
            <p style="margin-left:60px;">Not a member ? <a href="signup.php">Sign up</a></p>


        </form>

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