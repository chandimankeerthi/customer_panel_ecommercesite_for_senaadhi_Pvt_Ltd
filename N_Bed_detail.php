<?php
include "config.php";
session_start();
$image_dir="../uploads";
    if(isset($_REQUEST['add'])){
        $coustemerID=$_SESSION['id'];
        $itemId=$_SESSION['pID'];
        $quantity=$_REQUEST['quantity'];
        $colorfamily=$_REQUEST['colorfamily'];
        $size=$_REQUEST['size'];
	    
        // Check if the item is already in the cart
    $checkCartSql = "SELECT * FROM cart WHERE user_id = $coustemerID AND item_id = $itemId";
    $checkCartResult = $conn->query($checkCartSql);

    if ($checkCartResult->num_rows > 0) {
        // Item is already in the cart, show a JavaScript alert
        echo '<script>alert("Item is already in cart");</script>';
    } else {
        // Insert the item into the cart if it's not already there
        $sqlAddCart = "INSERT INTO cart VALUES($coustemerID, $itemId, '$quantity', '$colorfamily', '$size')";

        $res = $conn->query($sqlAddCart);

        if ($res) {
            echo '<script>alert("Product Successfully Added to Cart");</script>';
        } else {
            echo '<script>alert("Failed to add product to cart");</script>';
        }
    }

    }

    if(isset($_REQUEST['InsertReview'])){
        $id=$_REQUEST['id'];
        $rreview=$_REQUEST['rreview'];
        $remail=$_REQUEST['remail'];
        $rfname=$_REQUEST['rfname'];           
              
                 
        $sql="INSERT INTO `reviews`(`product_id`,`reviwes`,`email_of_reviwer`,`name_of_reviwer`)
        VALUES ('$id','$rreview','$remail','$rfname')";
        
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
              $query = "SELECT * FROM `product_details` WHERE id =$pID";
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

                    <div class="d-flex flex-row bd-highlight mb-3">
                        <h3 class="text-danger">
                            <?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></h3>
                        <h2 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del></h2>
                    </div>

                    <h5>
                        <p class="mb-5" style="color: <?php echo $row["productQuantity"] != '0' ? 'green' : 'red'; ?>">
                            <?php echo $row["productQuantity"] != '0' ? 'In Stock' : 'Out of Stock'; ?>
                        </p>
                    </h5>



                    <div class="d-flex mb-3 ">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                            <strong class="text-dark mr-3">Sizes:</strong>
                            <select class="form-select" aria-label="Default select example" name="size">
                                <?php
                        $getCategory1 = $row["Productname"];
                        $getCategory = "SELECT distinct(beddingsize) FROM product_details where mainCat='Bed' AND Productname='$getCategory1' ";
                        $resultSubCategory2 = $conn->query($getCategory);
                        while ($rowSub2 = $resultSubCategory2->fetch_array()) {
                            // Split the comma-separated values into an array
                            $beddingsizes = explode(',', $rowSub2['beddingsize']);

                            foreach ($beddingsizes as $beddingsize) {
                            $color = trim($beddingsize); // Remove leading/trailing spaces
    
                            // Create an <option> element for each color
                            echo '<option value="' . $beddingsize . '">' . $beddingsize . '</option>';
                            }
                            }    
                        
                        ?>

                            </select><br><br>

                            <div class="d-flex mb-3">

                                <strong class="text-dark mr-3">Color Type:</strong>
                                <select class="form-select" aria-label="Default select example" name="colorfamily">
                                    <?php
                                    
                                    $getCategory = "SELECT distinct(colorfamily) FROM product_details where mainCat='Bed' AND Productname='$getCategory1'";
                                    $resultSubCategory2 = $conn->query($getCategory);
                                    while ($rowSub2 = $resultSubCategory2->fetch_array()) {
                                        // Split the comma-separated values into an array
                                        $colors = explode(',', $rowSub2['colorfamily']);
            
                                        foreach ($colors as $color) {
                                        $color = trim($color); // Remove leading/trailing spaces
                
                                        // Create an <option> element for each color
                                        echo '<option value="' . $color . '">' . $color . '</option>';
                                        }
                                        }                                    
                                    ?>

                                </select>
                            </div>
                            <strong class="text-dark mr-3">Select Quantity:</strong>
                            <input type="number" class="form-control bg-secondary border-0 text-center" value="1"
                                min="0" max="<?php echo $row["productQuantity"];?>" name="quantity">
                            <input type="hidden" name="hidden_id" value="<?php echo $row["id"];?>">
                            <?php 
                                if($_SESSION['loginStat'] == 1){
                            ?>
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-primary px-3"
                                value="Add to cart">
                            <?php } ?>
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
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>Product Name :<?php echo $row["Productname"];?></p>
                            <p>Main Category :<?php echo $row["mainCat"];?></p>
                            <p>Bed Category :<?php echo $row["sub_categorey"];?></p>
                            <p>Brand Name :<?php echo $row["brand"];?></p>
                            <p>Color Type :<?php echo $row["colorfamily"];?></p>
                            <p>Warranty Type :<?php echo $row["warrantytype"];?></p>
                            <p>Warranty Period :<?php echo $row["warrantyperiod"];?></p>
                            <p>Core Construction Type :<?php echo $row["coreconstruction"];?></p>
                            <p>Pattern Type :<?php echo $row["patterntype"];?></p>
                            <p>Linen Fabric Type :<?php echo $row["linenfabric"];?></p>
                            <p>Furniture Feature Type :<?php echo $row["featuretype"];?></p>
                            <p>Furniture Materials :<?php echo $row["materialtype"];?></p>

                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>Description :<?php echo $row["productInfo"];?></p>
                            <p>Additional Informations :<?php echo $row["productDes"];?></p>

                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">Reviews for <?php echo $row["Productname"];?></h4>
                                    <div class="media mb-4">
                                        <?php                                                                
                                         $getToCartSql="SELECT * FROM reviews WHERE product_id=$pID";

                                         $resultGetToCart=$conn->query($getToCartSql);
                                                while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                        <div class="media-body">

                                            <h6><?php echo $rowGetToCart["name_of_reviwer"];?><small> -
                                                    <i><?php echo $rowGetToCart["review_time"];?></i></small></h6>

                                            <p><?php echo $rowGetToCart["reviwes"];?></p> <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked
                                        *</small>
                                    <form>

                                        <?php

                                                if ($_SESSION['loginStat'] == 1) {

                                                    echo '<div class="form-group">';
                                                    echo '<h5> Your Name :</h5>'; 
                                                    echo '<input type="text" class="form-control" id="inputrfname" name="rfname" value="' . $_SESSION['customer_fname'] . '" readonly>';
                                                    echo '</div>';
                                                    echo '<div class="form-group">';
                                                    echo '<h5> Your Email :</h5>';
                                                    echo '<input type="text" class="form-control" id="inputremail" name="remail" value="' . $_SESSION['email'] . '" readonly>';
                                                    echo '</div>';
                                                    echo '<div class="form-group">';
                                                    echo '<h5> Your Review :</h5>';
                                                    echo '<input type="text" class="form-control" id="inputrreview" name="rreview" " max="50">';
                                                    echo '</div>';

                                                } else {
                                                    echo 'Sign In for Place Review';
                                         } ?>

                                        <div class="form-group mb-0">
                                            <a><input type="submit" id="userInput" value="Submit Review"
                                                    name="InsertReview" style="width: 300px; height: 50px;">
                                        </div>
                                        <?php
                                                                
                                                $getToCartSql="SELECT * FROM product_details WHERE id=$pID";

                                                $resultGetToCart=$conn->query($getToCartSql);
                                                        while($rowGetToCart=$resultGetToCart->fetch_array()){ ?>
                                        <div class="d-flex justify-content-between">

                                            <div class="col-md-6 form-group">
                                                <label for="inputsProductnamenew" class="form-label"></label>
                                                <input class="form-control" type="hidden" name="id"
                                                    value="<?php echo $rowGetToCart['id']; ?>">
                                            </div>

                                        </div> <?php } ?>
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
                    $query = "select * from product_details where mainCat='Bed' order by id asc";
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
                                href="detail2.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>

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