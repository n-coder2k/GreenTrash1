<?php
session_start();
header('location:buyer-login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'greentrash');

$username = $_POST['username'];
$password = $_POST['password'];

$s = " select * from buyertable where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:buyer_dashboard.php');
    // echo "you are on dashboard!";
}
else{
     header('location:../popup2.php');
} 
?>