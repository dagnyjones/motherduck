<?php
$active='SHOP';
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


<?php

if(!isset($_GET['p_cat'])){

if(!isset($_GET['cat'])){



echo "

<div class='box'>

<h1>
SHOP
</h1>

<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi soluta, ea eum a mollitia maxime veniam officiis nihil itaque! Beatae, eum! Ex, aut dolores? Totam autem vitae quas repudiandae. Neque.
</p>

</div>

";

}

}

?>


<div class="row">

<?php

if(!isset($_GET['p_cat'])){

if(!isset($_GET['cat'])){

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}

else 

{

$page=1;

}



$start_from = ($page-1) * $per_page;

$get_products = "SELECT * FROM news ORDER BY 1 DESC LIMIT $start_from, $per_page";

$run_products = mysqli_query($conn, $get_products);

while($row_products=mysqli_fetch_array($run_products)){

$pro_id = $row_products['product_id'];
$pro_title = $row_products['product_title'];
$pro_price = $row_products['product_price'];
$pro_img1 = $row_products['product_img1'];

echo "

<div class='col-md-4 col-sm-6 center-responsive'>

<div class='product'>

<a href='details.php?pro_id=$pro_id'>

<img class='img-responsive' src='admin/product_images/$pro_img1'>

</a>

<div class='text'>

<h3>

<a href='details.php?pro_id=$pro_id'>

$pro_title

</a>

</h3>

<p class='price'>

$$pro_price

</p>

<p class='buttons'>

<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

VIEW DETAILS

</a>

<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

ADD TO CART

</a>


</p>



</div>


</div>

</div>

";



}





?>

            
</div>

<!-- products end -->

                
         

<center>

<ul class="pagination">

<?php

$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);
$total_records = mysqli_num_rows($result);
$total_pages = ceil($total_records / $per_page);

echo "

<li>
<a href='shop.php?page=1'> ".'First Page'." </a>
</li>


";

for($i=1; $i<=$total_pages; $i++){

echo"

<li>
<a href='shop.php?page=".$i."'>".$i."</a>
</li>

";

};

echo "

<li>
<a href='shop.php?page=$total_pages'> ".'Last Page'." </a>
</li>


";
}
}

?>
                    
</ul>

</center>


    <?php 

    getpcatPro();
    getcatpro();
    
    
    ?>


        
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