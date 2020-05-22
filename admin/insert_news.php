<!-- <?php

include("includes/db.php");


?>
 -->

<?php

if(!isset($_SESSION['admin_email'])) {
    echo "

    <script>window.open('login.php','_self')</script>


    ";
}
else {

?>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INSERT NEWS</title>





</head>

<body>




<form action="includes/news.php" method="post">
	<input type="text" name="news_title" placeholder="NEWS TITLE">
	<br>
	<input type="text" name="news_sub_title" placeholder="NEWS SUB TITLE">
	<br>
	<input type="text" name="news_desc" placeholder="NEWS CONTENT">
	<br>
	<input name="news_img1" type="file">
	<br>
	<button type="submit" name="submit">insert news</button>
</form>

</body>
</html>















<!-- <div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                DASHBOARD // INSERT NEWS
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    INSERT NEWS
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">

                    <div class="form-group">

                        <label class="col-md-3 control-label">
                            NEWS TITLE
                        </label>

                        <div class="col-md-6">
                            <input name="product_title" type="text" class="form-control" required>
                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label">
                            NEWS SUB TITLE
                        </label>

                        <div class="col-md-6">
                            <input name="product_title" type="text" class="form-control" required>
                        </div>

                        

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label">
                            NEWS CONTENT
                        </label>

                        <div class="col-md-6">
                        <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                        </div>

                    </div>

                    <div class="form-group">

                        <label class="col-md-3 control-label">
                            NEWS IMAGE
                        </label>

                        <div class="col-md-6">
                            <input name="product_img1" type="file" class="form-control" required>
                        </div>

                    </div>

                    
                    <div class="form-group">

                        <label class="col-md-3 control-label">
                            
                        </label>

                        <div class="col-md-6">
                            <input name="submit" value="INSERT NEWS" type="submit" class="btn btn-primary form-control">
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div> -->



<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</body>
</html>




 <!-- <?php



if(isset($_POST['submit'])){
    
    $news_title = $_POST['news_title'];
    $news_sub_title = $_POST['news_sub_title'];
    $news_desc = $_POST['news_desc'];
    
    
    $news_img1 = $_FILES['news_img1']['name'];
   
    
    $temp_name1 = $_FILES['news_img1']['tmp_name'];
    
    
    move_uploaded_file($temp_name1,"news_images/$news_img1");
    
    
    $insert_news = "INSERT INTO news (news_title, news_sub_title, news_desc, news_img1) values ('$news_title', '$news_sub_title', '$news_desc', '$news_img1')";
    
    $run_news = mysqli_query($conn, $insert_news);
    
    if($run_news){
        
        echo "<script>alert('News has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
}

?> -->

<?php

}

?>
