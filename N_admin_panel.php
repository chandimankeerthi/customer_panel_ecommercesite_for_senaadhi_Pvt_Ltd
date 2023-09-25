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
    include "admin_topbar.php";
    ?>



    <!-- Navbar Start -->
    <?php
    // include "navbar.php";
    ?>
    <!-- Navbar End -->





    <iframe height="1000px" width="1700px" src="../admin panel/N_admin_dashboard.php"></iframe>




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