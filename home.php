<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <br>
    <h1>Hello, <?php echo $_SESSION['customer_fname']; ?></h1>
    <a href="welcome.php">Let's Shopping!</a><br>
</body>

</html>

<?php 
}else{
     header("Location: signin.php");
     exit();
}
 ?>