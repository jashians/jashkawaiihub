<?php
$userId = $_SESSION['id'];

if (isset($_POST['addCart'])) {
    $pid = $_POST['pid'];
    $newprice = 0;
    
    if ($userId) {
        $check = mysqli_query($db, "select * from tbl_cart where product_id='$pid' and user_id='$userId'");
        $rows = mysqli_num_rows($check);
        if (
            $rows >= 1
        ) {
            echo "<div class='cart_notify' >   <p><strong>Already exist</strong></p>  </div>";
        } else {
            $insq = "insert into tbl_cart (product_id,product_name,product_price,user_id,product_img) select id,p_name,price-((price/100)*offer),$userId,p_img1 FROM product where id='$pid'";
            $execute = mysqli_query($db, $insq);
            echo "<div class='cart_notify' >   <p><strong>Added in Cart</strong></p>  </div>";
        }
    } else {
        echo "<script>window.location.href='login.php' </script>";
    }
}
?>