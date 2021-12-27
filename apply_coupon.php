<?php
session_start();
include("admin/conn.php");
$cart_total = $_SESSION['cart_total'];

echo $cart_total;
die();
