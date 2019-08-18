<?php 

	ob_start();
	session_start();
	require_once('dbconnect.php');

	if ($_POST['course_id']) {

	   $id = $_POST['course_id'];

	   $sql = "DELETE FROM courses WHERE id = {$id}";

		if( $result = mysqli_query($conn,$sql) ) {

    	echo "1";

    	// header('Location: main.php');
       
	    }

	    else {

	   		echo "0";
	    }

	} /* end of post course id */

?>