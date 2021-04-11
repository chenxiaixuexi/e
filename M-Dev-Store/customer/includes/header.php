<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/new.css">
</head>

<body>
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">ababababa</a>
            </div>

            <div class="col-md-6">
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Go to Cart</a></li>
                    <li><a href="checkout.php">Login</a></li>
                </ul> <!-- muen end-->
            </div> <!-- col md 6 end-->
        </div>
    </div>
    <!-- <button>开始动画</button> -->
    <!-- <p>默认情况下，所有 HTML 元素的位置都是静态的，并且无法移动。如需对位置进行操作，记得首先把元素的 CSS position 属性设置为 relative、fixed 或 absolute。</p>
<div style="background:#98bf21;height:100px;width:100px;position:absolute;">
</div> -->
    <!-- <div class="container">
      <h2>排版</h2>
      <p>这是一个普通的段落。</p>
      <p class="lead">这是个文字突出的段落。</p>
      <p>这是一个普通的段落。</p>
    </div> -->

    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                </a>
                <!--collapse后可以看到-->
                <!--这里的navigation可以打开菜单，在缩小的情况下-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <!--有两个search button是因为要考虑在缩小和放在的情况下都可以search-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <!--加宽后会看到-->
            <div class="navbar-collapse collapse" id="navigation">
                <!--******navigation!!!***-->
                <div class="padding-nav">
                    <!--左侧的导航框-->
                    <ul class="nav navbar-nav left">
                        <li class="<?php if ($active == 'Home') echo 'active'; ?>">
                            <a href="../index.php">Home</a>
                        </li>
                        <li class="<?php if ($active == 'Shop') echo 'active'; ?>">
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="<?php if ($active == 'Account') echo 'active'; ?>">
                            <a href='my_account.php?my_orders'>My Account</a>

                        </li>
                        <li class="<?php if ($active == 'Cart') echo 'active'; ?>">
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li class="<?php if ($active == 'Contact') echo 'active'; ?>">
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- add icon for shoping cart-->
                <a href="" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shoping-cart"></i>
                    <span>4 Item In your Cart</span>
                </a>
                <!-- add serach button-->
                <div class="navbar-collapse collapse right">
                    <!-- data-toggle: 触发方式 组件类型 data-traget 要操作的元素！！-->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

                <!-- add a search form -->
                <!-- ******这个是上面的btn要操作的元素,宽屏时出现的同一行，对应的上面的-->
                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <!-- required means cannot input null-->
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn">
                                <!--input group-btn span-->
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

            </div>
            <!-- ******这个是缩小屏幕的btn要操作的元素，如果打开了宽屏的搜索，再打开这个会出现bug-->
            <div class="collapse clearfix" id="search">
                <form method="get" action="results.php" class="navbar-form">
                    <div class="input-group">
                        <!-- required means cannot input null-->
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <button type="submit" name="search" value="Search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>