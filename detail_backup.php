<?php
include "config.php";
session_start();
$image_dir="../uploads";
    if(isset($_REQUEST['add'])){
        $coustemerID=$_SESSION['id'];
        $itemId=$_SESSION['pID'];
        $quantity=$_REQUEST['quantity'];
	    $sqlAddCart="INSERT INTO cart VALUES($coustemerID,$itemId,$quantity)";

	    $res=$conn->query($sqlAddCart);
        //$_REQUEST['log']=$_REQUEST['login'];
        if(!$res){
            echo '<script>alert("Item is already in cart")</script>';
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
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Product Detail</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <?php 
if(isset($_REQUEST['pID'])){
    $pID=$_REQUEST['pID'];
    $_SESSION['pID']=$pID;
}
else{
    $pID= $_SESSION['pID'];
}
?>
    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <?php
              $query = "SELECT * FROM `shirt_details` WHERE id =$pID";
              $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_array($result)){
                 ?>

            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="<?php echo $image_dir."/". $row["productImage1"];?>">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo $image_dir."/".$row["productImage2"];?>">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo $image_dir."/".$row["productImage3"];?>">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="<?php echo $image_dir."/".$row["productImage1"];?>">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $row["Productname"];?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <h3 class="text-danger"><?php echo $row["productPrice"]-$row["discountpercentage"];?></h3>
                        <h2 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del></h2><br>
                    </div>
                    <p class="mb-4"><?php echo $row["productDes"];?></p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>


                            <div class="col">
                                <div class="carousel slide">

                                    <div class="col-md-4">
                                        <!-- <label for="inputpatterntype" class="form-label">Pattern Type</label> -->
                                        <select class="form-select" aria-label="Default select example"
                                            name="patterntype">
                                            <?php
                                    $getCategory="SELECT distinct(size) FROM shirt_details";
                                    $resultSubCategory2=$conn->query($getCategory);
                                    while($rowSub2 = $resultSubCategory2->fetch_array()){
                                ?>
                                            <option value="<?php echo $rowSub2['size'] ?>">
                                                <?php echo $rowSub2['size'] ?>
                                            </option>
                                            <?php
                                }
                                ?>

                                        </select>
                                    </div>





                                </div>

                            </div>


                        </form>
                    </div>

                    <div class="d-flex align-items-center mb-4 pt-2">


                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

                            <h6>Select Quantity</h6>
                            <input type="number" class="form-control bg-secondary border-0 text-center" value="1"
                                min="0" max="<?php echo $row["productQuantity"];?>" name="quantity"> <br><br>


                            <div class="d-grid gap-2">

                                <input type="hidden" name="hidden_id" value="<?php echo $row["id"];?>">
                                <?php 
                                    if($_SESSION['loginStat']==1){

                                    ?>
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-primary px-3"
                                    value="Add to cart">
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <br><a href="index.php"><img src="img/AR2.jpg" style="height: 100px; width: 150px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab"
                            href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>Main Category :<?php echo $row["mainCat"];?></p>
                            <p>Shirt Category :<?php echo $row["shirtecategorey"];?></p>
                            <p>Gender Type :<?php echo $row["gendertype"];?></p>
                            <p>Brand Name :<?php echo $row["brand"];?></p>
                            <p>Product Name :<?php echo $row["Productname"];?></p>
                            <p>Sleeve Type :<?php echo $row["sleevetype"];?></p>
                            <p>Fit Type :<?php echo $row["fitype"];?></p>
                            <p>Pattern Type :<?php echo $row["collartype"];?></p>
                            <p>Collor Type :<?php echo $row["size"];?></p>
                            <p>Color Types :<?php echo $row["colorfamily"];?></p>
                            <p>Clothing Materials :<?php echo $row["clothingmaterial"];?></p>
                            <p>Warranty Type :<?php echo $row["warrantytype"];?></p>
                            <p>Warranty Period :<?php echo $row["warrantyperiod"];?></p>
                            <p>Trend Type :<?php echo $row["trendtype"];?></p>
                            <p>Clothing Style :<?php echo $row["clothingstyle"];?></p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Description :<?php echo $row["productInfo"];?></p>
                            <p>Additional Informations :<?php echo $row["productDes"];?></p>

                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam
                                                ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod
                                                ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked
                                        *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php
          }
      }        
       ?>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May
                Also Like</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel" class="carousel slide">
                    <?php
                    $query = "select * from shirt_details order by id asc";
                    $result = mysqli_query($conn,$query);
                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                    ?>
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo $image_dir . "/" . $row["productImage1"]; ?>"
                                style="height: 400px; width: 300px;">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate"
                                href="detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>

                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?= $row['discountpercentage']?></h5>
                                <h6 class="text-muted ml-2"><del><?=$row['productPrice']?></del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        }        
                    ?>
                </div>

            </div>

        </div>

    </div>


    <!-- Products End -->



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