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
            <p class="text-muted">
                You currently have 3 items in your cart
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
                        <tr>
                            <td>
                                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
                            </td>
                            <td>
                                <a href="#">duck poster</a>
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                $300
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]">
                            </td>
                            <td>
                                $600
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>
                                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
                            </td>
                            <td>
                                <a href="#">duck poster</a>
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                $300
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]">
                            </td>
                            <td>
                                $600
                            </td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>
                                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
                            </td>
                            <td>
                                <a href="#">duck poster</a>
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                $300
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                <input type="checkbox" name="remove[]">
                            </td>
                            <td>
                                $600
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">Total</th>
                            <th colspan="2">$1800</th>
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

    <div id="row same-height-row">
    <div class="col-md-3 col-sm-6">
        <div class="box same-heightheadline">
            <h3 class="text-center">
                products you may like
            </h3>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="details.php">
                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
            </a>
            <div class="text">
                <h3><a href="details.php">
                    DUCK POSTER
                </a></h3>
                <p class="price">
                    $300
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="details.php">
                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
            </a>
            <div class="text">
                <h3><a href="details.php">
                    DUCK POSTER
                </a></h3>
                <p class="price">
                    $300
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="details.php">
                <img class="img-responsive" src="admin/product_images/item1.png" alt="product1">
            </a>
            <div class="text">
                <h3><a href="details.php">
                    DUCK POSTER
                </a></h3>
                <p class="price">
                    $300
                </p>
            </div>
        </div>
    </div>
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
                            $1800
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
                            $1800
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