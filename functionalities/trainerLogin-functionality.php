<?php 


	 if(isset($_POST['login_button'])) {
	 			
				  	$email = $_POST['email'];

				  	$password = $_POST['password'];

				  	// echo $email;

				  	// echo $password;

				  	$login_query= "SELECT * FROM app_users WHERE email ='$email' ";

				  	$retrievedUser = mysqli_query($conn,$login_query);

				  	$retrievedUserArray = mysqli_fetch_assoc($retrievedUser);

				  	// echo $retrievedUserArray['zip'];

				  	$count = mysqli_num_rows($retrievedUser);  



				  	if ($count == 1 && $retrievedUserArray['pass'] == $password) {

				  		// echo "Hello";
						
						$_SESSION["user_status"] = $retrievedUserArray['status'];

						

						// echo $_SESSION["system_user"];

						header('Location: businessBro.php');
									
						exit();

				  	};


				  }; /*END of Login button set */




	?>