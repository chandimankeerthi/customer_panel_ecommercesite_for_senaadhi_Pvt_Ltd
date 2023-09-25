<?php 
session_start();
include "config.php";
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
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
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
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products Image</th>
                            <th>Products Name</th>
                            <th>Order Status</th>
                            <th>Quantity</th>
                            <th>Tracking ID</th>
                            <th>Total Price</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Product
                                Name</td>
                            <td class="align-middle">Processing</td>
                            <td class="align-middle">21933823320</td>
                            <td class="align-middle">RS:200</td>

                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Product
                                Name</td>
                            <td class="align-middle">Out for Delivery</td>
                            <td class="align-middle">62340264020</td>
                            <td class="align-middle">RS:650</td>

                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Product
                                Name</td>
                            <td class="align-middle">Delivered</td>
                            <td class="align-middle">7830530563603</td>
                            <td class="align-middle">RS:150</td>

                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Product
                                Name</td>
                            <td class="align-middle">Processing</td>
                            <td class="align-middle">6356630563953</td>
                            <td class="align-middle">RS:200</td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Tracking ID">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Package
                        Live Location</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Orders in Progress</h6>
                            <h6>10</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Completed Orders</h6>
                            <h6 class="font-weight-medium">5</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total Orders</h5>
                            <h5>15</h5>
                        </div>
                        <a class="btn btn-block btn-primary font-weight-bold my-3 py-3"
                            href="https://koombiyodelivery.lk/Track/track_id" target="_blank">Checkout Live Location</a>
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