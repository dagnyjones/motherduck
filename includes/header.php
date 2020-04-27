<?php

include("includes/db.php");
include("functions/functions.php");

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
            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="checkout.php">Shopping Cart</a>
        </div>

        <div class="col-md-6">
            <ul class="menu">
                <li>
                   <a href="Customer_register.php">REGISTER</a>
                </li>
                
                <li>
                    <a href="customer/my_account.php">MY ACCOUNT</a>
                </li>

                <li>
                    <a href="cart.php">GO TO CART</a>

                </li>

                <li>
                    <a href="checkout.php">LOGIN</a>

                </li>

            </ul>
        </div>

    </div>

</div><!--top ends-->


<div id="navbar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">

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

                    <li class="
                    <?php 
                    if($active=='HOME') 
                    echo "active"; 
                    ?>
                    ">
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="
                    <?php 
                    if($active=='SHOP') 
                    echo "active"; 
                    ?>
                    ">
                        <a href="shop.php">SHOP</a>
                    </li>
                    <li class="
                    <?php 
                    if($active=='ACCOUNT') 
                    echo "active"; 
                    ?>">
                        <a href="customer_register.php">MY ACCOUNT</a>
                    </li>
                    <li class="
                    <?php 
                    if($active=='CART') 
                    echo "active"; 
                    ?>">
                        <a href="cart.php">SHOPPING CART</a>
                    </li>
                    <li class="
                    <?php 
                    if($active=='CONTACT') 
                    echo "active"; 
                    ?>">
                        <a href="contact.php">CONTACT US</a>
                    </li>

                </ul>
            </div>

            <a href="cart.php" class="btn navbar-btn btn-primary right">

                <i class="fa fa-shopping-cart"></i>
                <span>4 items?</span>

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

                        <input type="text" class="form-control" placeholder="search" name="user_query" requierd>°

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