<?php

$active='HOME';
include("includes/header.php");

?>

<!-- SLIDER -->

<div class="container" id="slider">
    <div class="col-md-12">
    <div class="carousel slide" id="mycarousel" data-ride="carousel">
        <ol class="carousel-indicators">
        <li class="active" data-target="#mycarousel" data-slide-to="0"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        </ol> 

<div class="carousel-inner">

<?php
        //first slide//

$get_slides = "SELECT * FROM slider LIMIT 0,1";

$run_slides = mysqli_query($con, $get_slides);

while($row_slides=mysqli_fetch_array($run_slides)){
    
    $slide_name = $row_slides['slide_name'];
    $slide_image = $row_slides['slide_image']; 

    echo "
    
        <div class='item active'>
            <img src='admin/slides_images/$slide_image'>
        </div>
    
    ";
}
//second + 3 + 4 slide//
$get_slides = "SELECT * FROM slider LIMIT 1,3";

$run_slides = mysqli_query($con, $get_slides);

while($row_slides=mysqli_fetch_array($run_slides)){
    
    $slide_name = $row_slides['slide_name'];
    $slide_image = $row_slides['slide_image']; 

    echo "
    
        <div class='item'>
            <img src='admin/slides_images/$slide_image'>
        </div>
    
    ";
}
        
?>
            



</div>

        <a href="#mycarousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">PREVIOUS</span>
        </a>

        <a href="#mycarousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">NEXT</span>
        </a>

    </div>
</div>
</div>


<div id="advantage">
    <div class="container">
        <div class="same-height-row">

            <div class="col-sm-4">
                <div class="box same-height">
                    <h3><a href="#">
                        We love our customer
                    </a></h3>
                    <p>
                        we know the best possible service
                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <h3><a href="#">
                        We love our customer
                    </a></h3>
                    <p>
                        we know the best possible service
                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <h3><a href="#">
                        We love our customer
                    </a></h3>
                    <p>
                        we know the best possible service
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>

<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>
                    our latest products
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container">
    <div class="row">
        


<?php

getPro();

?>




    </div>
</div>

<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>