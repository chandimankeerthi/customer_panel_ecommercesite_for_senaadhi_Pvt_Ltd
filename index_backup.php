<?php
    session_start();
    include "config.php";
$image_dir="../uploads";
    if(isset($_REQUEST['add'])){
        $coustemerID=$_SESSION['id'];
        $itemId=$_REQUEST['hidden_id'];
        $color='Null';
        $size='XS';
	    $sqlAddCart="INSERT INTO cart VALUES($coustemerID,$itemId,1,'$color','$size')";
	    $conn->query($sqlAddCart);
        //$_REQUEST['log']=$_REQUEST['login'];

    }

    if(isset($_REQUEST['log'])){//if login sucess login states will be =1
	    if($_REQUEST['log']==1){
		    $_SESSION['loginStat']=1;
	    }
	    else{
		    $_SESSION['loginStat']=0;
		   
	    }
	
    }
    else if(isset($_REQUEST['login'])){
	    if($_REQUEST['login']==1){
		    $_SESSION['loginStat']=1;
	    }
	    else{
		    $_SESSION['loginStat']=0;
	    
        }
    }
    else{
        $_SESSION['loginStat']=0;
    }
    



    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="index.php"</script>';
                }
            }
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

    <link rel="stylesheet" href="styles.css">

    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>

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
                    <span class="breadcrumb-item active">Home</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3" style="background-color:#e9edf6;">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-9.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/f3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                        Furniture Items</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-5.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women
                                        Fashion</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet
                                        lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/carousel-10.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

 
    <!-- Trending Products Start -->
    <div class="container pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">TRENDING
                PRODUCTS</span>
        </h2>
        <div class=" row px-xl-5"> 

            <?php
                    $query = "select * from product_details where trending='T'  order by id asc";                              
                                 
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                            ?>
                                             
                            
            <!-- card -->
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">     

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px" class="img-responsive">
                        </div>
                    </div>
                    <div class="text-center">


                    <?php
$mainCat = $row["mainCat"];


if ($mainCat === "Shirt") {
    $detailPage = "N_Shirt_detail.php";
} elseif ($mainCat === "T-shirt") {
    $detailPage = "N_tshirt_detail.php";
} elseif ($mainCat === "Trouser") {
    $detailPage = "N_Trouser_detail.php";
} else {
    // Default to a generic detail page if mainCat doesn't match any of the expected values
    $detailPage = "generic_detail.php";
}
?>


<a class="h6 text-decoration-none text-truncate" href="<?php echo $detailPage . '?pID=' . $pID; ?>">
    <b><?php echo $row["Productname"]; ?></b>
</a>




                        <a class="h6 text-decoration-none text-truncate"
                            href="N_Shirt_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b></h4>
                            <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del></h5>
                        </div>
                        <div>
                            <h5 class="" style="height: 50px;"><?php echo $row["productInfo"];?></h5>
                        </div>

                        
                    </div>

                </div>

            </div>
            
            <?php
          }
      }        
       ?>

        </div>      

       

    </div>


     <!-- All Shirt Products Start -->
   <div class="container pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ALL
                PRODUCTS</span>
        </h2>
       <div class=" row px-xl-5">

           <?php
           $query = "select * from product_details where mainCat='Shirt' order by id asc";
           $result = mysqli_query($conn,$query);
           if(mysqli_num_rows($result)>0){
               while($row = mysqli_fetch_array($result)){
                   ?>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1" style="float: left;">
               <div class="product-item bg-light mb-4">
                   <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                       <div class="product">
                           <div class="product-img position-relative overflow-hidden">
                               <img src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px"
                                   class="img-responsive">                               
                           </div>
                           <div class="text-center">
                               <a class="h6 text-decoration-none text-truncate"
                                   href="N_Shirt_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                               <div class="d-flex align-items-center justify-content-center mt-2">
                                   <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b>
                                   </h4>
                                   <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del>
                                   </h5>

                               </div>
                               <div>
                                   <h5 class="text-info"><?php echo $row["productInfo"];?></h5>
                               </div>
                               <input type="text" name="quantity" class="form-control" value="1" hidden>
                               
                           </div>
                       </div>
                   </form>
               </div>
           </div>
           <?php
               }
           }
       ?>

       </div>
   </div>

   <!-- Products End -->    
   
    
    <!-- All Tshirt Products Start -->
    <div class="container pt-5 pb-3">
       
        <div class=" row px-xl-5">

            <?php
            $query = "select * from product_details where mainCat='T-shirt' order by id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1" style="float: left;">
                <div class="product-item bg-light mb-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                        <div class="product">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px"
                                    class="img-responsive">                                
                            </div>
                            <div class="text-center">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="N_tshirt_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b>
                                    </h4>
                                    <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del>
                                    </h5>

                                </div>
                                <div>
                                    <h5 class="text-info"><?php echo $row["productInfo"];?></h5>
                                </div>
                                <input type="text" name="quantity" class="form-control" value="1" hidden>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
            }
        ?>

        </div>
    </div>

    <!-- Products End -->

    <!-- All Bed Products Start -->
    <div class="container pt-5 pb-3">
       
        <div class=" row px-xl-5">

            <?php
            $query = "select * from product_details where mainCat='Bed' order by id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1" style="float: left;">
                <div class="product-item bg-light mb-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                        <div class="product">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px"
                                    class="img-responsive">                                
                            </div>
                            <div class="text-center">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="N_Bed_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b>
                                    </h4>
                                    <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del>
                                    </h5>

                                </div>
                                <div>
                                    <h5 class="text-info"><?php echo $row["productInfo"];?></h5>
                                </div>
                                <input type="text" name="quantity" class="form-control" value="1" hidden>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
            }
        ?>

        </div>
    </div>

    <!-- Products End -->


    <!--All Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/f4.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/carousel-8.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- All Chair Products Start -->
    <div class="container pt-5 pb-3">
       
        <div class=" row px-xl-5">

            <?php
            $query = "select * from product_details where mainCat='Chair' order by id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1" style="float: left;">
                <div class="product-item bg-light mb-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                        <div class="product">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px"
                                    class="img-responsive">                                
                            </div>
                            <div class="text-center">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="N_Chair_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b>
                                    </h4>
                                    <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del>
                                    </h5>

                                </div>
                                <div>
                                    <h5 class="text-info"><?php echo $row["productInfo"];?></h5>
                                </div>
                                <input type="text" name="quantity" class="form-control" value="1" hidden>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
            }
        ?>

        </div>
    </div>

    <!-- Products End -->


    <!-- All Trouser Products Start -->
    <div class="container pt-5 pb-3">
       
        <div class=" row px-xl-5">

            <?php
            $query = "select * from product_details where mainCat='Trouser' order by id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1" style="float: left;">
                <div class="product-item bg-light mb-4">
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                        <div class="product">
                            <div class="product-img position-relative overflow-hidden">
                                <img src="<?php echo $image_dir."/". $row["productImage1"];?>" width="190px" height="200px"
                                    class="img-responsive">                                
                            </div>
                            <div class="text-center">
                                <a class="h6 text-decoration-none text-truncate"
                                    href="N_Trouser_detail.php?pID=<?php echo $row["id"];?>"><b><?php echo $row["Productname"];?></b></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h4 class=""><b><?php echo ($row["productPrice"]* (100 - $row["discountpercentage"]))/100;?></b>
                                    </h4>
                                    <h5 class="text-muted ml-2"><del><?php echo $row["productPrice"];?></del>
                                    </h5>

                                </div>
                                <div>
                                    <h5 class="text-info"><?php echo $row["productInfo"];?></h5>
                                </div>
                                <input type="text" name="quantity" class="form-control" value="1" hidden>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
            }
        ?>

        </div>
    </div>

    <!-- Products End -->
    

        
    </div>

    <!-- Products End -->

   
    </div>

    <!-- Products End -->

    
   </div>

   <!-- Products End -->  


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