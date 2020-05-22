<?php



if(!isset($_SESSION['admin_email'])) {
    echo "

    <script>window.open('login.php','_self')</script>


    ";
}
else {



?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse">
            <span class="sr-only">
                toggle navigation
            </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php?dashboard" class="navbar-brand">
            ADMIN
        </a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <?php echo $admin_name; ?><b class="caret"></b>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                        <i class="fa fa-fw fa-user"></i>
                        PROFILE
                    </a>
                </li>

                <li>
                    <a href="index.php?view_products">
                        <i class="fa fa-fw fa-envelope"></i>
                        PRODUCTS
                        <span class="badge"><?php echo $count_products; ?></span>
                    </a>
                </li>

                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw fa-users"></i>
                        CUSTOMERS
                        <span class="badge"><?php echo $count_customers; ?></span>
                    </a>
                </li>

                <li>
                    <a href="index.php?view_cats">
                        <i class="fa fa-fw fa-gear"></i>
                        PRODUCT CATEGORIES
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                    </a>
                </li>

                <li class="divider"></li>

                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i>
                        LOGOUT
                        
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-exl-collapse">
        <ul class="nav navbar-nav side-nav">

            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i>
                        DASHBOARD
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                    <i class="fa fa-fw fa-tag"></i>
                        PRODUCTS

                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="products" class="collapse">
                    <li>
                        <a href="index.php?insert_product">
                            INSERT PRODUCT
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_product">
                            VIEW PRODUCT
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <i class="fa fa-fw fa-tag"></i>
                        CATEGORIES

                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="cat" class="collapse">
                    <li>
                        <a href="index.php?insert_cat">
                            INSERT CATEGORY
                        </a>
                    </li>
                    <li>
                            <a href="index.php?view_cats">
                            VIEW CATEGORIES
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <i class="fa fa-fw fa-tag"></i>
                        SLIDER

                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="slides" class="collapse">
                    <li>
                        <a href="index.php?insert_slide">
                            INSERT SLIDE
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_slides">
                            VIEW SLIDES
                        </a>

                    </li>
                </ul>
            </li>

            <li>
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i>
                    VIEW CUSTOMERS
                </a>
            </li>

            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-users"></i>
                    VIEW ORDERS
                </a>
            </li>

            <li>
                <a href="index.php?view_payments">
                    <i class="fa fa-fw fa-users"></i>
                    VIEW PAYMENTS
                </a>
            </li>

            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                    <i class="fa fa-fw fa-tag"></i>
                    NEWS

                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="index.php?insert_news">
                            INSERT NEWS
                        </a>
                    </li>
                    <li>
                        <a href="index.php?view_users">
                            VIEW NEWS
                        </a>
                    </li>
                    <li>
                        <a href="index.php?userprofile=<?php echo $admin_id; ?>">
                            EDIT NEWS
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-Power-off"></i>
                    LOGOUT
                </a>
            </li>

        </ul>
    </div>
</nav>

<?php

}

?>