<?php

	ob_start();
	session_start();
	require_once('dbconnect.php');

	$id = $_GET['id'];
	$name = $_GET['name'];
	$course_category = $_GET['course_category'];
	$course_hours = $_GET['course_hours'];
	$course_category = $_GET['course_category'];
	$description = $_GET['description'];
	$image_path = $_GET['image_path'];

	// echo $id, $name, $course_category, $course_hours, $description,$image_path;

	$updateQuery = "UPDATE courses SET name = '$name', category = '$course_category', course_hours = '$course_hours', description ='$description', img = '$image_path' WHERE id = {$id}" ;
  
    if( $result = mysqli_query($conn,$updateQuery) ) {

    	echo "1";

    	// header('Location: main.php');
       
    }else{
   		echo "0";
    }

?>