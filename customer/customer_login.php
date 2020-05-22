<div class="box">
    <div class="box-header">
        <center>
            <h1>LOGIN</h1>
            <p class="lead">ALREADY HAVE AN ACCONT?</p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus a iusto enim, voluptatibus at quia numquam atque perspiciatis aperiam placeat fuga odit sunt. Repellat, blanditiis adipisci quidem repudiandae perspiciatis quaerat!
            </p>
        </center>
    </div>
    <form method="post" action="checkout.php">

        <div class="form-group">
            <label>EMAIL</label>
            <input name="c_email" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label>PASSWORD</label>
            <input name="c_pass" type="password" class="form-control" required>
        </div>

        <div class="text-center">
            <button name="login" value="Login" class="btn btn-primary">
                <i class="fa fa-sign-in"></i> LOGIN
            </button>
        </div>

    </form>

    <center>
        <a href="customer_register.php">
            <h3>DON'T HAVE AN ACCOUNT? REGISTER HERE</h3>
        </a>
    </center>
</div>

<?php

if(isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($conn, $select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "SELECT * FROM cart WHERE ip_add='$get_ip'";

    $run_cart = mysqli_query($conn, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer==0){
        echo "<script>alert('Your email or password is wrong')</script>";
        exit();

    }
    if($check_customer==1 AND $check_cart==0) {

        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are logged in')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders', '_self')</script>";


    }
    else {

        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are logged in')";
        echo "<script>window.open('checkout.php', '_self')";

    }
}

?>