<?php include("header.php");
$query = "select * from categories where cat_img1!='' order by rand()";
$execute = mysqli_query($db, $query);

$query2 = "select * from sub_categories where sub_cat_img!='' order by rand()";
$exe = mysqli_query($db, $query2);
?>


<section class="">
    <div class="container">
        <center>
            <h3>ALL CATEGORIES</h3>
        </center>
        <div class="row">

            <?php
            while ($read = mysqli_fetch_array($execute)) {
            ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 allCategories categories_product">
                    <a href="cat_products.php?Id=<?php echo $read['id']; ?>"><img src="admin/images/<?php echo $read['cat_img1'] ?>" class="img-responsive" alt=""></a>

                    <p><?php echo $read['cat_name']; ?></p>

                </div>
                <!-- <div class="clearfix"></div> -->
            <?php }
            while ($reader = mysqli_fetch_array($exe)) { ?>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 allCategories sub_categories_product">
                    <a href="sub_cat_product.php?Id=<?php echo $reader['id']; ?>"><img src="admin/images/<?php echo $reader['sub_cat_img'] ?>" class="img-responsive" alt=""></a>
                    <p><?php echo $reader['sub_cat_name']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>