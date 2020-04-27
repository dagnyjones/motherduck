<?php

$db = mysqli_connect("localhost", "root", "123456", "Motherduck");

/// byrja a ad gera getPro ///

function getPro(){

    global $db;

    $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db, $get_products);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo 
        
        "
        
        <div class='col-md-4 col-sm-6 single'>

        <div class='product'>

        <a href='details.php?pro_id=$pro_id'>
        
        <img class='img-responsive' src='admin/product_images/$pro_img1'>

        </a>
        
        <div class='text'>

        <h3>

        <a href='details.php?pro_id=$pro_id'>
        
        $pro_title

        </a>

        </h3>

        <p class='price'>
        
        $ $pro_price

        </p>

        <p class='button'>

        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
        
        VIEW DETAILS

        </a>

        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
        
        ADD TO CART

        </a>

        </p>

        </div>

        </div>
        
        </div>
        
        ";


    }

}

/// enda getpro ///

/// byrja getpcat ///

function getPCats(){

    global $db;

    $get_p_cats = "SELECT * FROM product_categories";
    $run_p_cats = mysqli_query($db, $get_p_cats);

    while($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
        
        <li>

        <a href='shop.php?p_cat=$p_cat_id'>

        $p_cat_title

        </a>
        
        </li>
        ";
        



    }



}

?>