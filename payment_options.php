<body>
    <div class="box">

    <?php
    
        $session_email = $_SESSION['customer_email'];

        $select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";

        $run_customer = mysqli_query($conn, $select_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['customer_id'];
    
    ?>
        <h1 class="text-center">Payment Options For You</h1>
        <p class="lead text-center">
            <a class="order.php?c_id=<?php echo $customer_id; ?>" href="#">Offline Payment</a>
        </p>

        <center>
            <p class="lead">
                <a href="#">
                    PAYPAL PAYMENT
                    <img src="images/paypal.jpeg" alt="" class="img-responsive">
                </a>
            </p>
        </center>

    </div>
</body>