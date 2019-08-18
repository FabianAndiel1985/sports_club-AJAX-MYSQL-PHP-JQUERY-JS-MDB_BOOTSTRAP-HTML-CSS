<?php include 'components/head.php';?>

<body>

  <?php include 'components/header.php';?>
  
  <div class="container">

  <section class='my-5'>

    <?php 

        // echo $_SESSION["system_user"];

            $sql= "SELECT * FROM courses";
            $result = mysqli_query($conn,$sql); 

            if(mysqli_num_rows($result)>0)
              {

              while($row = mysqli_fetch_assoc($result)) {

              if ($row['id']%2 !== 0) {

        echo "


     <div class='row'>


      <div class='col-lg-5'>

        <div class='view overlay rounded z-depth-2 mb-lg-0 mb-4'>
          <img class='img-fluid' src='".$row['img']."' alt='Sample image'>
          <a>
            <div class='mask rgba-white-slight'></div>
          </a>
        </div>

      </div>

      <div class='col-lg-7'>
     
        
        <h3 class='font-weight-bold mb-3 white-text'><strong>".$row['name']."</strong></h3>
   
        <ul>
          <li class='white-text'> course hours: ".$row['course_hours']."</li>
          <li class='white-text'>".$row['description']."</li>  
        </ul> ";

        if ($_SESSION['user_status'] !== "trainer" && $_SESSION['user_status'] !== "member" )  { 
        
        echo "
             <a href='deletion_assurance.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-danger btn-rounded waves-effect'>Delete</button>

              </a>

              <a href='update.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-success waves-effect'>update</button>

              </a>
                ";
        };

         if ($_SESSION['user_status'] == "member")  { 
        
        echo "
              <a href='enroll.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-success waves-effect'>enroll</button>

              </a>
                ";
        };

      
        echo "
        <a href='details.php?id=".$row['id']."'>

          <button type='button' class='btn btn-outline-default waves-effect'>details</button>

        </a>

      </div>
    </div>


    <hr class='my-5'>

";
  
      }

      else  {
        echo "  

  <div class='row'>

    <!-- Grid column -->
    <div class='col-lg-7'>

      <!-- Category -->
     
      <!-- Post title -->
      <h3 class='font-weight-bold mb-3 white-text'><strong>".$row['name']."</strong></h3>
      
      <ul>
        <li class='white-text'> course hours: ".$row['course_hours']."</li>
        <li class='white-text'>".$row['description']."</li>  
      </ul>";

      if ($_SESSION['user_status'] !== "trainer" && $_SESSION['user_status'] !== "member" )  { 
        echo "
             <a href='deletion_assurance.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-danger btn-rounded waves-effect'>Delete</button>

              </a>

              <a href='update.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-success waves-effect'>update</button>
                
              </a>
                ";
        };

       if ($_SESSION['user_status'] == "member")  { 
        
        echo "
              <a href='enroll.php?id=".$row['id']."'>

                <button type='button' class='btn btn-outline-success waves-effect'>enroll</button>

              </a>
                ";
        };

        echo "

        </a>

        <a href='details.php?id=".$row['id']."'>

          <button type='button' class='btn btn-outline-default waves-effect'>details</button>

        </a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class='col-lg-5'>

      <!-- Featured image -->
      <div class='view overlay rounded z-depth-2'>
        <img class='img-fluid'  src='".$row['img']."' alt='Sample image'>
        <a>
          <div class='mask rgba-white-slight'></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class='my-5'>
  ";

      }

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



 






<!-- ____________________________________________________________________- -->


<!-- 
  <section class="my-5">

   
    <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
   
    <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit
      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
      qui officia deserunt mollit anim id est laborum.</p>

    <div class="row">

      <div class="col-lg-5">

      
        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
          <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
   
      <div class="col-lg-7">

     
        <a href="#!" class="green-text">
          <h6 class="font-weight-bold mb-3"><i class="fas fa-utensils pr-2"></i>Food</h6>
        </a>
        
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
   
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
          placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis.</p>


        <p>by <a><strong>Carine Fox</strong></a>, 19/08/2018</p>
       
        <a class="btn btn-success btn-md">Read more</a>

      </div>
    
    </div>


    
  </section>
 

 -->