<?php

$active='CART';
include("includes/header.php");

?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    CART
                </li>
            
            </ul>
        </div>

<div id="cart" class="col-md-9">
    <div class="box">
        <form action="cart.php" method="post" enctype="multipart/form-data">
            <h1>Shopping Cart</h1>

            <?php

            $ip_add = getRealIpUser();
            
            $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

            $run_cart = mysqli_query($conn, $select_cart);
            
            $count = mysqli_num_rows($run_cart);
            
            
            ?>



            <p class="text-muted">
                You currently have <?php echo $count; ?> item(s) in your cart
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th> Quantity</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th colspan="1">Delete</th>
                            <th colspan="2">Total Price</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php

                    $total = 0;

                    while($row_cart = mysqli_fetch_array($run_cart)) {

                        $pro_id = $row_cart['p_id'];

                        $pro_size = $row_cart['size'];

                        $pro_qty = $row_cart['qty'];

                        $get_products = "SELECT * FROM products WHERE product_id='$pro_id'";

                        $run_products = mysqli_query($conn, $get_products);

                        while($row_products = mysqli_fetch_array($run_products)) {

                            $product_title = $row_products['product_title'];

                            $product_img1 = $row_products['product_img1'];

                            $only_price = $row_products['product_price'];

                            $sub_total = $row_products['product_price']*$pro_qty;

                            $total += $sub_total;
                    ?>



                        <tr>
                            <td>
                                <img class="img-responsive" src="admin/product_images/<?php echo $product_img1; ?>" alt="product1">
                            </td>
                            <td>
                                <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a>
                            </td>
                            <td>
                            <?php echo $pro_qty; ?>
                            </td>
                            <td>
                            <?php echo $only_price; ?>
                            </td>
                            <td>
                            <?php echo $pro_size; ?>
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                            </td>
                            <td>
                                $<?php echo $sub_total; ?>
                            </td>
                        </tr>


                        <?php } }  ?>






                    </tbody>

                    
                    <tfoot>
                        <tr>
                            <th colspan="5">Total</th>
                            <th colspan="2">$<?php echo $total; ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="box-footer">

                <div class="pull-left">
                    <a href="index.php" class="btn btn-default">
                     Continue Shopping
                    </a>
                </div>

                <div class="pull-right">
                    <button type="submit" name="update" value="Update Cart" href="index.php" class="btn btn-default">
                     Update cart
                    </button>

                    <a href="checkout.php" class="btn btn-primary">
                        Proceed to Checkout
                    </a>
                </div>

            </div>
        </form>
    </div>

    <?php

    function update_cart() {
        global $conn;

        if(isset($_POST['update'])) {

            foreach($_POST['remove'] as $remove_id) {
                $delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";

                $run_delete = mysqli_query($conn, $delete_product);

                if($run_delete) {

                    echo "
                    <script>window.open('cart.php','_self')</script>
                    ";
                }
            }

        }
    }

    echo $up_cart = update_cart();

    ?>

    <div id="row same-height-row">
    <div class="col-md-3 col-sm-6">
        <div class="box same-heightheadline">
            <h3 class="text-center">
                products you may like
            </h3>
        </div>
    </div>

    <?php
    
    $get_products = "SELECT * FROM products ORDER BY rand() LIMIT 0,3";  
    
    $run_products = mysqli_query($conn, $get_products);

    while($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
        
        <div class='col-md-3 col-sm-6 center-responsive'>
            <div class='product same-height'>
                <a href='details.php?pro_id=$pro_id'>
                <img class='img-responsive' src='admin/product_images/$pro_img1' alt='product1'>
            </a>
            <div class='text'>
                <h3><a href='details.php?pro_id=$pro_id'>
                    $pro_title
                </a></h3>
                <p class='price'>
                    $$pro_price
                </p>
            </div>
        </div>
    </div>
        
        ";


    }
    
    ?>


    
    
    
</div>

</div>

<div class="col-md-3">
    <div id="order-summary"  class="box">
        <div class="box-header">
            <h3>
                ORDER SUMMARY
            </h3>
        </div>
        <p class="text-muted">
            Shipping and additonal cost ..........
        </p>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            Order Total Cost
                        </td>
                        <td>
                        $<?php echo $sub_total; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Shipping and Handeling
                        </td>
                        <td>
                            $0
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tax
                        </td>
                        <td>
                            $0
                        </td>
                    </tr>
                    <tr class="total">
                        <td>
                            Total
                        </td>
                        <td>
                            $<?php echo $total; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>


<!-- CART BEGINS-->




<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>