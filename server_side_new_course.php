<?php

	
    // $id = NULL;

    $name = isset($_POST['name']) ? $_POST['name'] : null;

    $course_category = isset($_POST['course_category']) ? $_POST['course_category'] : null;

    $course_hours = isset($_POST['course_hours']) ? $_POST['course_hours'] : null;

    $description = isset($_POST['description']) ? $_POST['description'] : null;

    $image_path = isset($_POST['image_path']) ? $_POST['image_path'] : null;

    

	$conn = new mysqli("localhost" , "root", "", "cr14_fabian_andiel_sportsclub");

    $query= "INSERT INTO courses VALUES (NULL, '$name', '$course_category', '$course_hours','$description','$image_path')";


    if ($enteredData = mysqli_query($conn,$query)) {

        echo "this email is exist";
    	// if($row['email'] == $email)
    	// 	{echo "success";}
    	
    	// else {
     //   		header("not fund");
    	// }
	
	} else {
        echo "OK";
    }
	
?>