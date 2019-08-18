<?php include 'components/head.php';?>

<body>

  <?php include 'components/header.php';?>
  
  <div class="container">

    <?php 

        // echo $_SESSION["system_user"];

            $sql= "SELECT * FROM admin_messages";
            $result = mysqli_query($conn,$sql); 

            if(mysqli_num_rows($result)>0)
              {

              while($row = mysqli_fetch_assoc($result)) {

                echo "
                <!-- Grid row -->

                <div class='row'>

                  <!-- Grid column -->

                  <div class='col-lg-12 col-xl-12'>

                    <!-- Post title -->

                    <h3 class='font-weight-bold mb-3 white-text'><strong>Message</strong></h3>
                    
                    <!-- Excerpt -->
                    
                    <p class='white-text'>
                      ".$row['message']."
                    </p>

                    <!-- Post data -->

                    <p class='white-text' class='font-weight-bold'> written by ".$row['firstname']." ".$row['lastname'].", ".$row['email']." </p>

                    <!-- Read more button -->

                     <a href='admin_delete_message.php?id=".$row['id']."'>

                        <button type='button' class='btn btn-outline-danger btn-rounded waves-effect'>Delete</button>

                      </a>

                  </div>
                  
                  <!-- Grid column -->

                </div>
                ";
   
            } /* end of while display */
          } /* end of if clause */

      ?>

      
  

        <br>
        <br>
        <br>

      <a class="white-text my-5" href="logout.php?logout"> Logout</a>

</div> <!-- End of bootstrap container -->



  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>



 
