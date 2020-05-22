<?php

if(isset($_GET['c_id'])){
    $customer_id = $_GET['c_id'];
}

$ip_add = getRealUserIp();

$status = "Pending";

$invoice_no = nt_rand();

$select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

$run_cart = mysqli_query($conn, $select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

    $pro_id = $row_cart['p_id'];

    $pro_qty = $row_cart['qty'];

    $pro_size = $row_cart['size'];

    $get_products = "SELECT * FROM products WHERE product_id='$pro_id'";

    $run_products = mysqli_query($conn, $get_products);





}

?>