<?php
    session_start();
    include "config.php";
    if($_SESSION['loginStat']==1){
    $coustemeeID=$_SESSION['id'];
}
else{
    $coustemeeID='';
}



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


    if(isset($_REQUEST['FilterCategory'])){
        $mainC1=$_REQUEST['mainCat'];
        if($mainC1=="Furniture"){
            $mainC2="Fashion";
        }
        else{
            $mainC2="Furniture";
        }
    }
    else{
        $mainC1="Furniture";
        $mainC2="Fashion";
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
                    <span class="breadcrumb-item active">Filter</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->


            <!-- //////////////////////////////////////////////////////////////////// -->





            <!-- //////////////////////////////////////////////////////////////// -->




            <div class="col-lg-3 col-md-4">
                <!-- Filter Form Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span
                        class="bg-secondary pr-3">Filter</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form action="filter_common.php" method="GET">
                        <div class="form-group">
                            <label for="productType">Product Type</label>
                            <select class="form-control" name="productType" id="productType">
                                <?php
$getCategory="SELECT distinct(product_type) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['product_type'] ?>">
                                    <?php echo $rowSub1['product_type'] ?></option>
                                <!-- Add more options as needed -->


                                <?php
}
        ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mainCategory">Product Main Category</label>
                            <select class="form-control" name="mainCategory" id="mainCategory">
                                <?php
$getCategory="SELECT distinct(mainCat) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['mainCat'] ?>"><?php echo $rowSub1['mainCat'] ?>
                                </option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subCategory">Product Sub Category</label>
                            <select class="form-control" name="subCategory" id="subCategory">
                                <?php
$getCategory="SELECT distinct(sub_categorey) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['sub_categorey'] ?>">
                                    <?php echo $rowSub1['sub_categorey'] ?></option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <!-- Add more filter options for other columns (e.g., gendertype, brand, size, colorfamily, etc.) here -->
                        <!-- Fashion-specific filters -->
                        <div class="form-group fashion-filters">
                            <label for="gendertype">Gender Type</label>
                            <select class="form-control" name="gendertype" id="gendertype">
                                <?php
$getCategory="SELECT distinct(gendertype) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['gendertype'] ?>">
                                    <?php echo $rowSub1['gendertype'] ?></option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <div class="form-group fashion-filters">
                            <label for="brand">Brand</label>
                            <select class="form-control" name="brand" id="brand">
                                <?php
$getCategory="SELECT distinct(brand) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['brand'] ?>"><?php echo $rowSub1['brand'] ?></option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <!-- Furniture-specific filters -->
                        <div class="form-group furniture-filters">
                            <label for="size">Size</label>
                            <select class="form-control" name="size" id="size">
                                <?php
$getCategory="SELECT distinct(size) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['size'] ?>"><?php echo $rowSub1['size'] ?></option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <div class="form-group furniture-filters">
                            <label for="colorfamily">Color Family</label>
                            <select class="form-control" name="colorfamily" id="colorfamily">
                                <?php
$getCategory="SELECT distinct(colorfamily) FROM product_details";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                                <!-- You can dynamically generate options based on your database data -->
                                <option value="<?php echo $rowSub1['colorfamily'] ?>">
                                    <?php echo $rowSub1['colorfamily'] ?></option>
                                <!-- Add more options as needed -->

                                <?php
}
        ?>
                            </select>
                        </div>
                        <!-- End of fashion- and furniture-specific filters -->
                        <button type="submit" class="btn btn-primary">Apply Filters</button>
                    </form>
                </div>
                <!-- Filter Form End -->
            </div>


            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="text-center py-4">
                                <?php
                    // ... (your existing code to connect to the database and start the session)

                    // Initialize filter criteria
                    $productTypeFilter = "";
                    $mainCategoryFilter = "";
                    $subCategoryFilter = "";
                    $genderTypeFilter = "";
                    $brandFilter = "";
                    $sizeFilter = "";
                    $colorFamilyFilter = "";

                    // Check if filter criteria are provided in the URL
                    if (isset($_GET['productType'])) {
                        $productTypeFilter = $_GET['productType'];
                    }

                    if (isset($_GET['mainCategory'])) {
                        $mainCategoryFilter = $_GET['mainCategory'];
                    }

                    if (isset($_GET['subCategory'])) {
                        $subCategoryFilter = $_GET['subCategory'];
                    }

                    if (isset($_GET['gendertype'])) {
                        $genderTypeFilter = $_GET['gendertype'];
                    }

                    if (isset($_GET['brand'])) {
                        $brandFilter = $_GET['brand'];
                    }

                    if (isset($_GET['size'])) {
                        $sizeFilter = $_GET['size'];
                    }

                    if (isset($_GET['colorfamily'])) {
                        $colorFamilyFilter = $_GET['colorfamily'];
                    }

                    // Build the SQL query based on the filter criteria
                    $sqlFilter = "SELECT * FROM product_details WHERE 1";

                    if (!empty($productTypeFilter)) {
                        $sqlFilter .= " AND product_type = '$productTypeFilter'";
                    }

                    if (!empty($mainCategoryFilter)) {
                        $sqlFilter .= " AND mainCat = '$mainCategoryFilter'";
                    }

                    if (!empty($subCategoryFilter)) {
                        $sqlFilter .= " AND sub_categorey = '$subCategoryFilter'";
                    }

                    // Apply fashion-specific filters
                    if ($mainCategoryFilter === 'fashion') {
                        if (!empty($genderTypeFilter)) {
                            $sqlFilter .= " AND gendertype = '$genderTypeFilter'";
                        }

                        if (!empty($brandFilter)) {
                            $sqlFilter .= " AND brand = '$brandFilter'";
                        }
                    }

                    // Apply furniture-specific filters
                    if ($mainCategoryFilter === 'furniture') {
                        if (!empty($sizeFilter)) {
                            $sqlFilter .= " AND size = '$sizeFilter'";
                        }

                        if (!empty($colorFamilyFilter)) {
                            $sqlFilter .= " AND colorfamily = '$colorFamilyFilter'";
                        }
                    }

                    // Execute the filtered query
                    $filterResult = $conn->query($sqlFilter);

                    if ($filterResult->num_rows > 0) {
                        echo "<h2>Filtered Results:</h2>";
                        while ($row = $filterResult->fetch_assoc()) {
                            // Open the <div> for each product
                            echo '<div class="text-center py-5">';
                            // Display the product name within the <a> tag
                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';
                            echo '<img src="' . $image_dir . '/' . $row['productImage1'] . '" alt="Product Image" width="190px" height="200px">';
                            echo '</div>';
                            echo '<a class="h6 text-decoration-none text-truncate" href="#">' . $row['Productname'] . '</a>';
                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';
                            echo '<h5>RS. ' . ($row['productPrice'] - $row['discountpercentage']) . '</h5>';
                            echo '</div>';
                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';
                            echo '<h5><del>RS .' . $row['productPrice'] . '</del></h5>';
                            echo '</div>';
                            // Close the </div> for each product
                            echo '</div>';
                        }
                    } else {
                        echo "No products found for your filter criteria.";
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ///////////////////////////////////////////////////////////////////// -->


        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->

        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">

                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">

                        <div class="text-center py-4">
                            <?php
                            
                                if (isset($_GET['search'])) {
                                    $searchQuery = $_GET['search'];
                                    $sqlSearch = "SELECT * FROM product_details 
                                        WHERE Productname LIKE '%$searchQuery%' 
                                        OR product_type LIKE '%$searchQuery%' 
                                        OR mainCat LIKE '%$searchQuery%' 
                                        OR sub_categorey LIKE '%$searchQuery%'";
                                    $searchResult = $conn->query($sqlSearch);
                                    $image_dir="../uploads";

                                if ($searchResult->num_rows > 0) {
                                            echo "<h2>Search Results:</h2>";
                                        while ($row = $searchResult->fetch_assoc()) {
                                        // Open the <div> for each product
                                            echo '<div class="text-center py-5">';
                                        // Display the product name within the <a> tag                                            

                                        // Display other product details here
                                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';
                                            echo '<img src="' . $image_dir . '/' . $row['productImage1'] . '" alt="Product Image" width="190px" height="200px">';
                                        
                                            echo '</div>';

                                            echo '<a class="h6 text-decoration-none text-truncate" href="#">' . $row['Productname'] . '</a>';  

                                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';
                                        
                                            echo '<h5>RS. ' . ($row['productPrice'] - $row['discountpercentage']) . '</h5>';
                                            echo '</div>';
                                        

                                            echo '<div class="d-flex align-items-center justify-content-center mt-2">';                                            
                                            echo '<h5><del>RS .'. $row['productPrice'] .'</del></h5>';
                                            echo '</div>';

                
                                            // Close the </div> for each product
                                            echo '</div>';
                                        }
                                    } else {
                                             echo "No products found for your search query.";
                                    }
                                }
                                 ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>

    </div>



    <!-- Shop End -->

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