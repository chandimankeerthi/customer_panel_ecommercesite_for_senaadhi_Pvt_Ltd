<?php 
session_start(); 
include "config.php";

//php code for login 

if (isset($_POST['email']) && isset($_POST['password'])) {

function validate($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$email = validate($_POST['email']);
$pass = validate($_POST['password']);

if (empty($email)) {
header("Location: signin.php?error=Email is required");
exit();
}else if(empty($pass)){
header("Location: signin.php?error=Password is required");
exit();
}else{
$sql = "SELECT * FROM user_details WHERE email='$email' AND user_password='$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
$row = mysqli_fetch_assoc($result);
if ($row['email'] === $email && $row['user_password'] === $pass) {
$_SESSION['email'] = $row['email'];
$_SESSION['customer_fname'] = $row['customer_fname'];
$_SESSION['id'] = $row['id'];

header("Location: index.php?log=1");
exit();
}else{
header("Location: signin.php?error=Incorect User name or password");
exit();
}
}else{
header("Location: signin.php?error=Incorect User name or password");
exit();
}
}

}else{
header("Location: signin.php");
exit();
}