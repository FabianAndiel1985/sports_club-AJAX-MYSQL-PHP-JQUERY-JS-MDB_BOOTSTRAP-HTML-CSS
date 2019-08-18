<?php include 'components/head.php';?>

<body>

  <?php include 'functionalities/update_details_fetch_functionality.php';?>

  <?php echo $_SESSION['user_firstname'], $data['name'] ?>


  <div class="container">

    <h1 class="white-text text-center">Really want to enroll in the following course:</h1>


    <?php 
      echo "
        <form class='text-center p-5' method='POST' action='enroll.php?id=".$data['id']."'>

              <button type='submit' class='btn btn-outline-success waves-effect' name='enroll_button'>Yes, enroll</button>
           
        </form>";
    ?>


     <a href="main.php">
      <button type="button" class="btn btn-outline-white waves-effect">
      go back
      </button>
    </a>





  <?php include 'functionalities/enroll_functionality.php';?>

  </div>
  
  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>
