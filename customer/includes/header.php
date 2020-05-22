<?php
  
 //session_start();

 

  include("includes/db.php");
include("functions/functions.php");
?>

<?php

if(isset($_GET['pro_id'])) {
    $product_id = $_GET['pro_id'];

    $get_product = "SELECT * FROM products WHERE product_id='$product_id'";

    $run_product = mysqli_query($conn, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($conn, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>motherduck</title>

    <script src="https://kit.fontawesome.com/3d20db6269.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>


<div id="top"><!--top begins-->

    <div class="container">

        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
            <?php



        if(!isset($_SESSION['customer_email'])) {

            echo "WELCOME: GUEST";

            }
            else {
                echo "WELCOME: " . $_SESSION['customer_email'] . "";
            }

            ?>
            </a>

            
            <a href="../checkout.php"><?php items(); ?> IN CART // TOTAL PRICE: <?php total_price(); ?></a>
        </div>

        <div class="col-md-6">
            <ul class="menu">
                <li>
                   <a href="../customer_register.php">REGISTER</a>
                </li>
                
                <li>
                    <a href="../checkout.php">MY ACCOUNT</a>
                </li>

                <li>
                    <a href="../cart.php">GO TO CART</a>

                </li>

                <li>
                    <a href="../checkout.php">

                    <?php

                    if(!isset($_SESSION['customer_email'])) {

                        echo "<a href='checkout.php'> LOGIN </a>";

                    }
                    else {
                        echo "<a href='logout.php'> LOGOUT </a>";
                    }

                    ?>
                
                    </a>

                </li>

            </ul>
        </div>

    </div>

</div><!--top ends-->


<div id="navbar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="../index.php" class="navbar-brand home">

                <img src="images/logo.png" alt="logo" class="hidden-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class=sr-only>Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class=sr-only>Toggle search</span>

                    <i class="fa fa-search"></i>

                </button>
        </div>

        <div class="navbar-collapse collapse" id="navigation">

            <div class="padding-nav">
                <ul class="nav navbar-nav left">

                    <li>
                        <a href="../index.php">home</a>
                    </li>
                    <li>
                        <a href="../shop.php">shop</a>
                    </li>
                    <li class="active">
                        <a href="customer/my_account.php">my account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact us</a>
                    </li>

                </ul>
            </div>

            <a href="cart.php" class="btn navbar-btn btn-primary right">

                <i class="fa fa-shopping-cart"></i>
                <span><?php items();  ?> ITEMS IN YOUR CART</span>

            </a>

            <div class="navbar-collapse collapse right">

                <button class="btn -primary navbar-bt" type="button" data-toggle="collapse" data-target="search" >

                    <span class="sr-only">toggle search</span>
                    <i class="fa fa-search"></i>

                </button>

            </div>

            <div class="collapse clearfix" id="search">

                <form method="get" action="results.php" class="navbar-form">


                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="search" name="user_query" requierd>

                        <span class="input-group-btn">

                        <button type="submit" name="search" value="search" class="btn btn-primary">

                        <i class="fa fa-search"></i>

                        </button>

                        </span>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
