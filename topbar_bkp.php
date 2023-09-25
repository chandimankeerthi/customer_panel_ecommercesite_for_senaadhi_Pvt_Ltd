<?php
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
                 <a class="text-body mr-3" href="index.php?log=<?php echo $_SESSION['loginStat']; ?>">Home</a>
                 <a class="text-body mr-3" href="cart.php">Cart</a>
                 <?php if($_SESSION['loginStat']==1){ ?>
                 <a class="text-body mr-3" href="checkout.php">Checkout</a> <?php } ?>
                 <a class="text-body mr-3" href="about.php">About</a>
                 <a class="text-body mr-3" href="contact.php">Contact</a>
                 <a class="text-body mr-3" href="">Help</a>
                 <a class="text-body mr-3" href="">FAQs</a>
             </div>
         </div>
         <div class="col-lg-6 text-center text-lg-right">
             <div class="d-inline-flex align-items-center">

                 <div class="btn-group mx-2">
                     <a href="track_order.php" type="button" class="btn btn-sm btn-light">Track
                         My Order</a>

                 </div>

                 <!-- Show user -->
                 
                 <?php
                    if($_SESSION['loginStat']==1){
                        ?>
                 <div class="btn-group mx">
                     <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">
                         <?php echo $_SESSION['customer_fname']; ?>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right">                         
                         <a href="N_admin_update_profile.php" class="dropdown-item" type="button">Manage My Account</a>
                         <a href="index.php?log=0" class="dropdown-item" type="button">Log out</a>
                     </div>                                       
                 </div>
                 <?php
                    }
                    else{
                        ?>
                 <div class="btn-group mx">
                     <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">

                         My Account</button>
                     <div class="dropdown-menu dropdown-menu-right">
                         <a href="signin.php" class="dropdown-item" type="button">Sign in</a>
                         <a href="signup.php" class="dropdown-item" type="button">Sign up</a>
                     </div>
                 </div>
                 <?php
                    } 
                    ?>
                 <div class="btn-group mx-2">
                     <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                         data-toggle="dropdown">LKR</button>
                     <div class="dropdown-menu dropdown-menu-right">
                         <button class="dropdown-item" type="button">LKR</button>                         
                     </div>
                 </div>
                 <div class="btn-group">
                     <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                         data-toggle="dropdown">EN</button>                     
                 </div>
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
     <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
         <div class="col-lg-4">
             <a href="index.php"><img src="img/senadhinew2.png" style="height: 130px;"></a>
         </div>
         <div class="col-lg-4 col-6 text-left" style="background-color: black;">
             <form action="">
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for products">
                     <div class="input-group-append">
                         <span class="input-group-text bg-transparent text-primary">
                             <a href="filter.php"><i class="fa fa-search"></i></a>
                         </span>
                         <!--Cart and Fav in Navbar-->
                         <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                             <a href="cart.php" class="btn px-0 ml-3">
                                 <i class="fas fa-shopping-cart text-primary"></i>
                                 <span class="badge text-secondary border border-secondary rounded-circle"
                                     style="padding-bottom: 2px;"><?php  if($_SESSION['loginStat']==1)
                                                                            {
                                                                                echo $Count['count'];
                                                                            }
                                                                            else{
                                                                                echo 0;
                                                                            }
                                                                             ?></span>
                             </a>
                         </div>
                     </div>

                 </div>
             </form>
         </div>
         <div class="col-lg-4 col-6 text-right">
             <p class="m-0">Customer Service</p>
             <h5 class="m-0">+947 611 222 4</h5>
         </div>
     </div>
 </div>
 <!-- Topbar End -->