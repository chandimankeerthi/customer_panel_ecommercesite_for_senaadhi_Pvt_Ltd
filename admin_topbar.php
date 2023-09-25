<?php
include "config.php";
$image_dir = "../uploads";



if($_SESSION['loginStat']==1){
    $coustemerEmail=$_SESSION['id'];
}
else{
    $coustemerEmail='';
}
//$coustemerEmail=$_SESSION['id'];
$sqlGetCountItem="SELECT COUNT(item_id) AS count FROM cart WHERE user_id='$coustemerEmail'";
$resultGetCountItem=$conn->query($sqlGetCountItem);
foreach($resultGetCountItem as $Count){	
}



?>

<!-- Topbar Start -->

<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100 ;">
                <a class="text-body mr-3" href="index.php?log=<?php echo $_SESSION['loginStat']; ?>">Website</a>

                <!-- <a class="text-body mr-3" href="checkout.php">Checkout</a>  -->

            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">

                <!-- <div class="btn-group mx-2">
                     <a href="track_order.php" type="button" class="btn btn-sm btn-light">Track
                         My Order</a>

                 </div>
                 <div class="btn-group mx-2">
                     <a href="filter.php" type="button" class="btn btn-sm btn-light">Filter</a>

                 </div>
                 <div class="btn-group mx-2">
                     <a href="invoice.php" type="button" class="btn btn-sm btn-light">Invoices</a>

                 </div> -->

                <!-- Show user -->

                <?php
if ($_SESSION['loginStat'] == 1) {
    ?>
                <div class="btn-group mx">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_SESSION['customer_fname']; ?>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="track_order.php" class="dropdown-item" type="button">Track My Orders</a>
                        <a href="invoice.php" class="dropdown-item" type="button">My Invoices</a>


                        <?php
            // Retrieve user role from the database
            $customer_email = $_SESSION['email'];
            $getToCartSql = "SELECT userRole FROM user_details WHERE email = '$customer_email'";
            $resultGetToCart = $conn->query($getToCartSql);

            // Initialize the userRole variable
            $userRole = '';

            while ($rowGetToCart = $resultGetToCart->fetch_array()) {
                // Concatenate user roles (if there are multiple roles)
                $userRole .= $rowGetToCart['userRole'];
            }

            // Check if the userRole contains 'admin' and display the link accordingly
            if ($userRole === 'admin') {
                echo '<a href="N_admin_panel.php" class="dropdown-item" type="button">Admin Panel</a>';
            }
            ?>
                        <input type="hidden" name="userRole" value="<?php echo $userRole; ?>">


                        <a href="N_admin_profile.php" class="dropdown-item" type="button">Manage My Account</a>
                        <a href="index.php?log=0" class="dropdown-item" type="button">Log out</a>
                    </div>
                </div>


                <?php
} else {
    ?>

                <div class="btn-group mx">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                        My Account
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="signin.php" class="dropdown-item" type="button">Sign in</a>
                        <a href="signup.php" class="dropdown-item" type="button">Sign up</a>
                    </div>
                </div>
                <?php
}
?>

            </div>
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>



</div>
<!-- Topbar End -->