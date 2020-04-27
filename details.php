<?php

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
                    Shop
                </li>
            
            </ul>
        </div>

        <div class="col-md-3">

        <?php

            include("includes/sidebar.php");

        ?>
        </div>

<div class="col-md-9">
    <div id="productMain" class="row">
        <div class="col-sm-6">
            <div id="mainImage">
                <div id="mycarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <center><img class="img-responsive" src="admin/product_images/item1.png" alt="product1"></center>
                        </div>
                        <div class="item">
                            <center><img class="img-responsive" src="admin/product_images/item1.png" alt="product1"></center>
                        </div>
                        <div class="item">
                            <center><img class="img-responsive" src="admin/product_images/item1.png" alt="product1"></center>
                        </div>
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

        <div class="col-sm-6">
            <div class="box">
                <h1 class="text-center">POSTER DUCK</h1>
                <form action="details.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="col-md-5 control-label">
                            Product Quantity
                        </label>
                        <div class="col-md-7">
                            <select name="product_qty" id="" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 control-label">
                            Product Size
                        </label>
                        <div class="col-md-7">
                            <select name="product_size" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <p class="price">$300</p>
                    <p class="text-center buttons"><button class="btn btn-primary">
                        add to cart
                    </button></p>


                </form>
            </div>

            <div class="row" id="thumbs">
                <div class="col-xs-4">
                    <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                        <img src="admin/product_images/item1.png" alt="product1" class="img img-responsive">
                    </a>
                </div>

                <div class="col-xs-4">
                    <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                        <img src="admin/product_images/item1.png" alt="product1" class="img img-responsive">
                    </a>
                </div>

                <div class="col-xs-4">
                    <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                        <img src="admin/product_images/item1.png" alt="product1" class="img img-responsive">
                    </a>
                </div>

                
            </div>
        </div>

    </div>


<div class="box" id="details">
    
        <h4>
            product details
        </h4>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde aliquid quo consectetur voluptatem quia ad voluptates excepturi nemo accusantium, eveniet facere labore dolores architecto nobis et quaerat pariatur perspiciatis maiores.

        </p>

        <h4>size</h4>

        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
        
    
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
</div>
</div>



<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>