<?php

session_start();
include("includes/db.php");

if(!isset($_SESSION['admin_email'])) {
    echo "

    <script>window.open('login.php','_self')</script>


    ";
}
else {

    $admin_session = $_SESSION['admin_email'];

    $get_admin = "SELECT * FROM admins WHERE admin_email='$admin_session'";

    $run_admin = mysqli_query($conn, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];


    $get_products = "SELECT * FROM products";

    $run_products = mysqli_query($conn, $get_products);

    $count_products = mysqli_num_rows($run_products);

    $get_customers = "SELECT * FROM customers";

    $run_customers = mysqli_query($conn, $get_customers);

    $count_customers = mysqli_num_rows($run_customers);

    $get_p_categories = "SELECT * FROM product_categories";

    $run_p_categories = mysqli_query($conn, $get_p_categories);

    $count_p_categories = mysqli_num_rows($run_p_categories);

    $get_pending_orders = "SELECT * FROM pending_orders";

    $run_pending_orders = mysqli_query($conn, $get_pending_orders);

    $count_pending_orders = mysqli_num_rows($run_pending_orders);







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>motherduck</title>

    <script src="https://kit.fontawesome.com/3d20db6269.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">



</head>
<body>


<div id="wrapper">
    <?php include("includes/sidebar.php"); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php
                if(isset($_GET['dashboard'])) {
                    include("dashboard.php");
                }
                if(isset($_GET['insert_product'])) {
                    include("insert_product.php");

                }

                if(isset($_GET['insert_news'])) {
                    include("insert_news.php");

                }


            ?>
        </div>
    </div>
</div>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php

}

?>