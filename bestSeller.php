<?php include('header.php'); ?>
<?php
$sub_cat_id = $_GET['Id'];

$per_page_record = 16;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $per_page_record;

$q = "select *,(price/100)*offer as newprices from product where best_sellers=1 order by id desc LIMIT $start_from, $per_page_record";
$exe = mysqli_query($db, $q);
?>

<!-- add to cart -->
<?php
$userId = $_SESSION['id'];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('d-M-Y h:i:s A', time());

if (isset($_POST['addCart'])) {
    $pid = $_POST['pid'];
    $newprice = 0;
    // echo $pid;
    //exit();
    if ($userId) {
        $check = mysqli_query($db, "select * from tbl_cart where product_id='$pid' and user_id='$userId'");
        $rows = mysqli_num_rows($check);
        if (
            $rows >= 1
        ) {
            echo "<div class='cart_notify' >   <p><strong>Already exist</strong></p>  </div>";
        } else {
            $insq = "insert into tbl_cart (product_id,product_name,product_price,user_id,product_img,created_date,shipping) select id,p_name,price-((price/100)*offer),$userId,p_img1,'$currentTime',shipping FROM product where id='$pid'";
            $execute = mysqli_query($db, $insq);
            echo "<div class='cart_notify' >   <p><strong>Added in Cart</strong></p>  </div>";
        }
    } else {
        echo "<script>window.location.href='login.php' </script>";
    }
}
?>

<!--content-->
<div class="content">
    <div class="products-agileinfo">
        <h2 class="tittle">Best Sellers</h2>
        <div class="container">
            <div class="product-agileinfo-grids w3l">
                <div class="col-md-12 product-agileinfon-grid1 w3l">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="product-tab row">
                                        <?php

                                        $check = mysqli_num_rows($exe);
                                        if ($check > 0) {
                                            while ($row = mysqli_fetch_array($exe)) {
                                                if ($row['status'] == 'ACTIVE') {
                                        ?>
                                                    <div class="col-md-3 col-lg-3 product-tab-grid simpleCart_shelfItem">
                                                        <div class="grid-arr">
                                                            <form method="post" enctype="multipart/form-data">
                                                                <div class="grid-arrival">
                                                                    <div class="offer_section">
                                                                        <?php if ($row['offer'] > 0) { ?>
                                                                            <span class="offer"><?php echo $row['offer']; ?>%</span>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <figure>
                                                                        <input type="hidden" name="pid" value="<?php echo $row["id"] ?>">
                                                                        <input type="hidden" name="submit_form" value="yes">
                                                                        <a href="single.php?ID=<?php echo $row['id']; ?>" class="new-gri">
                                                                            <div class="grid-img">
                                                                                <img src="upload/<?php echo $row['p_img1']; ?>" alt="">
                                                                            </div>
                                                                            <!-- <div class="grid-img small_dis">
                                                                                <img src="upload/<?php echo $row['p_img1']; ?>" alt="">
                                                                            </div> -->
                                                                        </a>
                                                                    </figure>
                                                                </div>
                                                                <div class="grid-info">
                                                                    <h6><?php echo $row['p_title']; ?></h6>
                                                                    <!-- <p> <span class="money">Rs.<?php echo $row['price']; ?> </span></p> -->
                                                                    <?php
                                                                    if ($row['offer'] > 0) {
                                                                    ?>
                                                                        <p><span class="newmoney">Rs.<?php echo $newprice = $row['price'] - $row['newprices']; ?></span> &nbsp; <span class="money"><del>Rs.<?php echo $row['price']; ?></del> </span></p>
                                                                    <?php } else { ?>
                                                                        <p><em class="item_price">&#8377;<?php echo $row['price']; ?></em></p>
                                                                    <?php } ?>
                                                                    <input type="submit" name="addCart" value="Add to Cart" class="btnAddAction  cart_btn" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                            <?php }
                                            }
                                        } else {
                                            ?>
                                            <div class="">
                                                <p> There id no product found! </p>
                                            </div>
                                        <?php
                                        }

                                        ?>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>

                            </div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="container pagination_section">
                <div class="pagination">
                    <?php
                    $query1 = "SELECT COUNT(id) FROM product where status='ACTIVE' and best_sellers='1'";
                    // echo $query;
                    // exit();
                    $rs_result1 = mysqli_query($db, $query1);
                    $row = mysqli_fetch_row($rs_result1);
                    $total_records = $row[0];

                    echo "</br>";
                    // Number of pages required.   
                    $total_pages = ceil($total_records / $per_page_record);
                    $pagLink = "";

                    if ($page >= 2) {
                        echo "<a href='bestSeller.php?page=" . ($page - 1) . "'>  Prev </a>";
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            $pagLink .= "<a class = 'active' href='bestSeller.php?page="
                                . $i . "'>" . $i . " </a>";
                        } else {
                            $pagLink .= "<a href='bestSeller.php?page=" . $i .  "'> " . $i . " </a>";
                        }
                    };
                    echo $pagLink;

                    if ($page < $total_pages) {
                        echo "<a href='bestSeller.php?page=" . ($page + 1) . "'>  Next </a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--content-->

<!---footer--->
<?php include("footer.php"); ?>
<!-- end:footer -->