<?php
$active='CONTACT';
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
                    Contact Us
                </li>
            
            </ul>
        </div>

        <div class="col-md-3">






        <?php

            include("includes/sidebar.php");

        ?>
        </div>


<!--- contact starts here -->

<div class="col-md-9">
    <div class="box">
        <div class="box-header">
            <center>
                <h2>
                    Feel free to contact us
                </h2>
                <p class="text-muted">
                    If you have any questions, feel free to contact us.
                </p>
            </center>
            <form action="contact.php" method="post">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        Send Message
                    </button>
                </div>

            </form>


<?php

/* if(isset($_POST['submit'])) {

$sender_name = $_POST['name'];
$sender_email = $_POST['email'];
$sender_subject = $_POST['subject'];
$sender_message = $_POST['message'];

$reciver_email = "dagnyjones@gmail.com";

mail($reciver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

// AUTO RESPONSE //

$email = $_POST['email'];

$subject = "Welcome to MOTHERDUCK";

$msg = "Thanks for sending us a message. We will respond soon as possible.";

$from = "dagnyjones@gmail.com";

mail($email, $subject, $msg, $from);

echo "

<h2> Your message has been sent successfully.</h2>

";


}

?> */




        </div>
    </div>
</div>


<!--- contact ends here-->

</div>
</div>



<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>