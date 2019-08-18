<?php include 'components/head.php';?>



<body>
	
  <div class="container">

    <!-- Jumbotron -->
    <div class="jumbotron text-center #000000 black">

      <!-- Title -->
      <h4 class="card-title white-text h4 pb-2 "><strong>The admin, the boss</strong></h4>

      <!-- Card image -->
      <div class="view overlay my-4">
        <img src="images/admin_login.jpg" class="img-fluid" alt="">
      </div>

      <h5 class="white-text h5 mb-4">Login for admin</h5>

        
        <form id="loginForm" method="POST" action="adminLogin.php">

  
            <div class="md-form mb-0">
              <input type="email" id="email" name="email" class="form-control">
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
    

  </div>




<?php include 'functionalities/adminLogin_functionality.php';?>
   


<?php include 'components/scripts.php';?>

       

</body>
</html>