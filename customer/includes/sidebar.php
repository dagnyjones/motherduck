<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <center>
            <img src="customer_images/logo_customer.png" alt="profile pic">
        </center>
        <br/>
        <h3 align="center" class="panel-title">
            Name: dagny
        </h3>
    </div>

    <div class="panel_body">
        <ul class="nav-pills nav-stacked nav">
            <li class="
            
            <?php 
            
            if(isset($_GET['my_orders']))
            {
            echo"active";
            } 
            ?>
            
            ">
                <a href="my_account.php?my_orders">
                    MY ORDERS
                </a>
            </li>

            <li class="
            
            <?php 
            
            if(isset($_GET['edit_account']))
            {
            echo"active";
            } 
            ?>
            
            ">
                <a href="my_account.php?edit_account">
                   EDIT ACCOUNT
                </a>
            </li>

            <li class="
            
            <?php 
            
            if(isset($_GET['change_pass']))
            {
            echo"active";
            } 
            ?>
            
            ">
                <a href="my_account.php?change_pass">
                   CHANGE PASSWORD
                </a>
            </li>

            <li class="
            
            <?php 
            
            if(isset($_GET['delete_account']))
            {
            echo"active";
            } 
            ?>
            
            ">
                <a href="my_account.php?delete_account">
                   DELETE ACCOUNT
                </a>
            </li>



            <li>
                <a href="logout.php">
                    LOG OUT
                </a>
            </li>

        </ul>   
    </div>


</div>