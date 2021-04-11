<?php
$active = 'Home';
include("includes/header.php");
?>

    <!--Three   图片问题需要修改图片-->
    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <?php
                    $get_slides = "select * from slider LIMIT 0,1";
                    $run_slider = mysqli_query($con, $get_slides);
                    while ($row_slider = mysqli_fetch_array($run_slider)) {
                        $slide_name = $row_slider['slide_name'];
                        $slide_image = $row_slider['slide_image'];
                        echo " <div class='item active'>
              <img src='admin_area/slides_images/$slide_image'>
              </div>
                ";
                    }

                    $get_slides = "select * from slider LIMIT 1,3";

                    $run_slides = mysqli_query($con, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slides)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];

                        echo " <div class='item'>

              <img src='admin_area/slides_images/$slide_image'>

              </div>

                ";
                    }

                    ?>
                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <!--container-->

    <div id="advantages">
        <!-- advantages Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="same-height-row">
                <!-- same-height-row Begin -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-heart"></i>

                        </div><!-- icon Finish -->

                        <h3>

                            <a href="#">
                                Best Offers
                            </a>

                        </h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-tag"></i>

                        </div><!-- icon Finish -->

                        <h3>

                            <a href="#">
                                Best Prices
                            </a>

                        </h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-height Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div><!-- icon Finish -->

                        <h3>

                            <a href="#">
                                100% Original
                            </a>

                        </h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div><!-- box same-height Finish -->

                </div><!-- col-sm-4 Finish -->

            </div><!-- same-height-row Finish -->

        </div><!-- container Finish -->

    </div><!-- advantages Finish -->



    <div id="hot">
        <!-- hot Begin -->

        <div class="box">
            <!-- box Begin -->

            <div class="container">
                <!-- container Begin -->

                <div class="col-md-12">
                    <!-- col-md-12 Begin -->

                    <h2>Our Latest Products</h2>

                </div><!-- col-md-12 Finish -->

            </div><!-- container Finish -->

        </div><!-- box Finish -->

    </div><!-- hot Finish -->

    <div id="content" class="container">
        <!-- #content Begin -->

        <div class="row">
            <!-- row Begin -->
            <!-- 专门用来放product的-->
            <?php

            getPro();

            ?>

        </div><!-- row Finish -->

    </div><!-- #content Finish -->


    <?php
    include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>

</html>