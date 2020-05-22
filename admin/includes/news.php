<?php
	//Here we include our database connection
	include_once 'db.php';

	//Here we fetch the data from the URL that was passed from our HTML form
	$news_title = $_POST['news_title'];
	$news_sub_title = $_POST['news_sub_title'];
	$news_desc = $_POST['news_desc'];
	$news_img1 = $_POST['news_img1'];


	//Here we create a SQL statement that insert data into our database
	$sql = "INSERT INTO news (news_title, news_sub_title, news_desc, news_img1) VALUES ('$news_title', '$news_sub_title', '$news_desc', '$news_img1');";
	//Here we "query" the data in the database
	mysqli_query($conn, $sql);

	//We don't need to do anythin else in order to insert data
	//HOWEVER!!!
	//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

	//Here we go back to the front page
	header("Location: ../index.php?dashboard");
