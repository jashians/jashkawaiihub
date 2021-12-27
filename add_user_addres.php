<?php
session_start();
include("admin/conn.php");


date_default_timezone_set('Asia/Kolkata');
$currentTime = date('d-M-Y h:i:s A', time());

$userid = $_SESSION['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$uaddress = $_POST['uaddress'];
$landmark = $_POST['landmark'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
if ($userid) {
    $ins_query = "insert into userinfo set cust_id='$userid', name='$fname',last_name='$lname',email='$email', phone='$phone',address='$uaddress',city='$city',landmark='$landmark',pincode='$pincode',state='$state',country='$country', created_date='$currentTime'";
    // echo $ins_query;
    // die();

    if (mysqli_query($db, $ins_query)) {
        echo 1;
    } else {
        echo 0;
    }
}
?>
<!--  -->