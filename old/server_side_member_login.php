<?php include 'components/head.php';?>


<?php

	$email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    

	$conn = new mysqli("localhost" , "root", "", "cr14_fabian_andiel_sportsclub");

    $query= "SELECT * FROM app_users WHERE email = '$email' AND pass = '$password'";

    $retrievedData = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($retrievedData);


    if ($retrievedData->num_rows > 0) {
        

        $_SESSION['user_status'] = $row['status'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_firstname'] = $row['firstname'];
        $_SESSION['user_lastname'] = $row['lastname'];

        echo "this email is exist";

	
	} 

    else {
        echo "OK";
    }
	
?>