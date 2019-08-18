<?php include 'components/head.php';?>


<!-- prevent logged in user from accessing this page -->

<?php

  if(isset($_SESSION['user_status']) != "" )
  {
   header("Location: main.php" ); 
  };

?>


<body class="">

	<div class="container">

		<!-- Jumbotron -->
		<div class="jumbotron text-center #000000 black">

		  <!-- Title -->
		  <h4 class="card-title white-text h4 pb-2 "><strong>My career, my choices</strong></h4>

		  <!-- Card image -->
		  <div class="view overlay my-4">
		    <img src="images/trainer_login.jpg" class="img-fluid" alt="">
		  </div>

		  <h5 class="white-text h5 mb-4">Login for trainers</h5>

				<!-- Default form subscription -->
				<form class="text-center p-5" method="POST" action="trainer_login.php">

				    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">email</label>
                    </div>


				    <div class="md-form mb-0">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password" class="">password</label>
                    </div>


				    <button type="submit" class="btn btn-outline-white waves-effect" name="login_button">Log in</button>
				 
				    <div class="mt-3">
					    <a class="white-text" href="landing.php">  
					    	go back
					    </a>
					</div>


				</form>
				<!-- Default form subscription -->


		</div>
		<!-- Jumbotron -->

	</div> <!-- End of BS container -->



	<?php include 'functionalities/trainerLogin-functionality.php';?>


	<?php include 'components/scripts.php';?>

</body>
</html>