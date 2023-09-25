<?php 
session_start(); 
include "config.php";
//session_start();
//php code for signup

$errors = array();

// REGISTER USER
if (isset($_POST['SignUp'])) {
    // receive all input values from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $pnumber = $_POST['pnumber'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $postal = $_POST['postal'];
    $city = $_POST['city_type'];
    $district = $_POST['district'];
    $country = 'Sri Lanka';
    
    function validate_phone_number($phone_num)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone_num, FILTER_SANITIZE_NUMBER_INT);

        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($filtered_phone_number) == 10 ) {
            return true;
        } else {
        return false;
        }
    }
    
    if ($password1 == $password2) 
    { 
        if (validate_phone_number($pnumber) == true) 
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == true)
            {
                $checkemail = "SELECT email FROM user_details WHERE email='$email'";
                $checkemail_run = mysqli_query($conn, $checkemail);

                if(mysqli_num_rows($checkemail_run)>0)
                {
                    //Taken Already exists
                    echo '<script>alert("Email id is already taken.!");</script>';
                    
                }
                else
                {
                    $password = $password1;
                    //$password = md5($password1);//encrypt the password before saving in the database
                    $query = "INSERT INTO user_details (customer_fname, customer_lname, email, contact_number, residence1 , residence2 , user_password, postal_code, city, district,country) 
                            VALUES('$fname', '$lname', '$email', '$pnumber', '$address1' , '$address2' ,'$password',$postal,'$city','$district','$country')";
                    $conn->query($query);
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['success'] = "You are now logged in";                    
                
                    echo('location: signup.php');
                } 
            }
            else
            {
                echo '<script>alert("Not a valid email address.!");</script>';
                
            }
        }
        else
        {
            echo '<script>alert("Not a valid phone number.!");</script>';
            
        }
    }
    else
    {
        echo '<script>alert("Password and confirm password does not match.!");</script>';
        
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
                    <span class="breadcrumb-item active">Sign up</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Signup -->
    <br><br>

    <!-- <div  class=" login-wrapper"> -->
    <div class="container">

        <div class=" col-md-5">

            <form class="form" method="POST" enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h2>SIGN UP</h2>
                <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>First Name<span class="req"></span> </label>
                            <input type="text" class="form-control" id="fname" required name="fname"
                                data-validation-required-message="Please enter your first name." autocomplete="off">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label> Last Name<span class="req"></span> </label>
                            <input type="text" class="form-control" id="lname" required name="lname"
                                data-validation-required-message="Please enter your last name." autocomplete="off">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label> Your Email<span class="req"></span> </label>
                    <input type="email" class="form-control" id="email" required name="email"
                        data-validation-required-message="Please enter your email address." autocomplete="on">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <label> Your Phone<span class="req"></span> </label>
                    <input type="tel" class="form-control" id="pnumber" required name="pnumber"
                        data-validation-required-message="Please enter your phone number." autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <label> Password<span class="req"></span> </label>
                    <input type="password" class="form-control" id="password" required name="password1"
                        data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <label>Confirm Password<span class="req"></span> </label>
                    <input type="password" class="form-control" id="password" required name="password2"
                        data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <label> Address Line1</Address><span class="req"></span> </label>
                    <input type="text" class="form-control" id="address1" required name="address1"
                        data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <label> Address Line2</Address><span class="req"></span> </label>
                    <input type="text" class="form-control" id="address2" required name="address2"
                        data-validation-required-message="Please enter your password" autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <label>Postal Code</Address><span class="req"></span> </label>
                    <input type="number" class="form-control" name="postal" autocomplete="off">
                    <p class="help-block text-danger"></p>
                </div>


                <div class="form-group">
                    <label for="city_type" class="form-label">City </label>
                    <select class="form-select" aria-label="Default select example" name="city_type">
                        <?php
$getCategory="SELECT distinct(city_type) FROM city";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                        <option value="<?php echo $rowSub1['city_type'] ?>"><?php echo $rowSub1['city_type'] ?>
                        </option>
                        <?php
}
        ?>
                    </select>
                </div>

                <br>

                <div class="form-group">
                    <label for="inputdistrict" class="form-label">Distric</label>
                    <select class="form-select" aria-label="Default select example" name="district">
                        <?php
$getCategory="SELECT distinct(district_type) FROM district ";
$resultSubCategory1=$conn->query($getCategory);
while($rowSub1 = $resultSubCategory1->fetch_array()){
?>
                        <option value="<?php echo $rowSub1['district_type'] ?>"><?php echo $rowSub1['district_type'] ?>
                        </option>
                        <?php
}
        ?>
                </div>

                <div class="form-group">
                    <label>Country</Address><span class="req"></span> </label>
                    <input type="text" class="form-control" name="country" autocomplete="off" value="Sri Lanka">
                    <p class="help-block text-danger"></p>
                </div>




                <input style="margin-right:100px;" type="submit" value="Sign up" name="SignUp" class="submit-btn" /><br>
                <p style="margin-left:60px;">Registered members ? <a href="signin.php">Sign In</a></p>
            </form>
        </div>
    </div><br>


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