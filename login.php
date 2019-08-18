<?php include 'components/head.php';?>


<!-- prevent logged in user from accessing this page -->

<?php

  if(isset($_SESSION['user_status']) != "" )
  {
   header("Location: main.php" ); 
  };

?>

<body>

  <div class="container">

     <!-- Jumbotron -->
    <div class="jumbotron text-center #000000 black">

      <!-- Title -->
      <h4 class="card-title white-text h4 pb-2 "><strong>Enter your passion</strong></h4>

      <!-- Card image -->
      <div class="view overlay my-4">
        <img src="images/admin_login.jpg" class="img-fluid" alt="">
      </div>

      <h5 class="white-text h5 mb-4">Login</h5>

        
        <form id="loginForm">

  
            <div class="md-form mb-0">
              <input type="email" id="txt_uname" name="txt_uname" class="form-control">
              <label for="txt_uname" class="">email</label>
            </div>

            <div class="md-form mb-0">
              <input type="password" id="txt_pwd" name="txt_pwd" class="form-control">
              <label for="txt_pwd" class="">password</label>
            </div>

            <button id="but_submit" type="submit" class="btn btn-outline-white waves-effect" name="login_button">Log in</button>
         
            <div class="mt-3">
              <a class="white-text" href="landing.php">  
                go back
              </a>
          </div>

        </form>
        
    </div> <!-- end of jumbotron -->

  </div>  <!-- end of container -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
    
      <?php include 'functionalities/login_functionality.php' ?>
  
    </script>

  <?php include 'components/scripts.php';?>

      
</body>
</html>