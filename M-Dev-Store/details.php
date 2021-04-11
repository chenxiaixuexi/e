<?php
$active = 'Cart';
include("includes/header.php");

?>

<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->
            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                </li>
                <li> <?php echo $pro_title; ?> </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->
        <div class="col-md-3">
            <!-- col-md-3 Begin -->

            <?php

            include("includes/sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9">
            <!-- col-md-9 Begin -->
            <div id="productMain" class="row">
                <!-- row Begin 三张图片滑动-->
                <div class="col-sm-6">
                    <!-- col-sm-6 Begin -->
                    <div id="mainImage">
                        <!-- #mainImage Begin -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- carousel slide Begin -->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                </div>
                            </div>

                        </div><!-- carousel slide Finish -->
                    </div><!-- mainImage Finish -->
                </div><!-- col-sm-6 Finish -->

                <div class="col-sm-6">
                    <!-- col-sm-6 Begin 选型号和件数！！！-->
                    <div class="box">
                        <!-- box Begin -- Php title!!-->

                        <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                           
                           <?php add_cart(); ?>

                        <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                            <!-- form-horizontal Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label for="" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->
                                    <select name="product_qty" id="" class="form-control">
                                        <!-- select Begin -->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select><!-- select Finish -->

                                </div><!-- col-md-7 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label class="col-md-5 control-label">Product Version</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->

                                    <select name="product_type" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                                        <!-- form-control Begin -->
                                        <option disabled selected>Select Version</option>
                                        <option>studio version</option>
                                        <option>compilation version</option>
                                        <option>live version</option>

                                    </select><!-- form-control Finish -->

                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->
                            <!--价格都用php--->
                            <p class="price">$ <?php echo $pro_price; ?></p>

                            <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                        </form><!-- form-horizontal Finish -->

                    </div><!-- box Finish -->


                </div><!-- col-sm-6 Finish -->


            </div><!-- row Finish -->

            <!-- insert details of products -->
            <div class="box" id="details">
                <!-- box Begin -->

                <h4>Product Details</h4>

                <p>
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>

                <hr>

            </div><!-- box Finish -->

            <div id="row same-heigh-row">
                <!-- #row same-heigh-row Begin -->
                <div class="col-md-3 col-sm-6">
                    <!-- col-md-3 col-sm-6 Begin -->
                    <div class="box same-height headline">
                        <!-- box same-height headline Begin -->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline Finish -->
                </div><!-- col-md-3 col-sm-6 Finish -->
                <?php 
                   
                   $get_products = "select * from product order by rand() LIMIT 0,3";
                  
                   $run_products = mysqli_query($con,$get_products);
                  
                  while($row_products=mysqli_fetch_array($run_products)){
                      
                      $pro_id = $row_products['product_id'];
                      
                      $pro_title = $row_products['product_title'];
                      
                      $pro_img1 = $row_products['product_img1'];
                      
                      $pro_price = $row_products['product_price'];
                      
                      echo "
                      
                       <div class='col-md-3 col-sm-6 center-responsive'>
                       
                           <div class='product same-height'>
                           
                               <a href='details.php?pro_id=$pro_id'>
                               
                                   <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                               
                               </a>
                               
                               <div class='text'>
                               
                                   <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                   
                                   <p class='price'> $ $pro_price </p>
                               
                               </div>
                           
                           </div>
                       
                       </div>
                      
                      ";
                      
                  }
                  
                  ?>

            </div><!-- #row same-heigh-row Finish -->

        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>