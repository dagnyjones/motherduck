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



        <body>
    <main>
      <div class="wrapper-main">
        <section class="section-default">

        <h1>CUSTOMER CARE</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo doloribus in, expedita rerum adipisci quis porro! Sint ea in sapiente a veritatis consequuntur voluptas, aperiam minus necessitatibus similique neque ipsam.</p>

<form action="contactform.php" class="contact-form" method="POST">
    <input type="text" name="name" placeholder="FULL NAME">
    <input type="text" name="mail" placeholder="EMAIL">
    <input type="text" name="subject" placeholder="SUBJECT">
    <textarea name="message" placeholder="MESSAGE"></textarea>
    <button type="submit" name="submit">SEND MAIL</button>

</form>
          
        </section>
      </div>
    </main>

<?php
  require "includes/footer.php";
?>











<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
 </body>
</html> 