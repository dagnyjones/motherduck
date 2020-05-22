<?php
	
	include_once 'db.php';

	
	$news_title = $_POST['news_title'];
	$news_sub_title = $_POST['news_sub_title'];
	$news_desc = $_POST['news_desc'];
	$news_img1 = $_POST['news_img1'];


	
	$sql = "INSERT INTO news (news_title, news_sub_title, news_desc, news_img1) VALUES ('$news_title', '$news_sub_title', '$news_desc', '$news_img1');";
	
	mysqli_query($conn, $sql);

	
	
	header("Location: ../index.php?dashboard");
