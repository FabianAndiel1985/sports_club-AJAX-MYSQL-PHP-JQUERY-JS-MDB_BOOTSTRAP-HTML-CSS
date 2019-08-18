	<?php

		if(isset($_POST['send_button'])) {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			$conn = new mysqli("localhost" , "root", "", "cr14_fabian_andiel_sportsclub");

    		$query= "INSERT INTO admin_messages VALUES (NULL, '$firstname', '$lastname', '$message','$email')";


		    if ($enteredData = mysqli_query($conn,$query)) {

		    	header('Location: main.php');
		    	exit();
			
			} else {
		        echo "Error didn't work";
		    }


		}

	?>