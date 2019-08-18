<?php include 'components/head.php';?>

<body>

  <?php include 'components/header.php';?>

  <?php include 'functionalities/update_details_fetch_functionality.php';?>

  <div class="container">

  <table class="table">
    <thead>
      <tr>
        <td class="first" scope="row"> Name:  </td>
        <td class="first"> <?php echo $data['name'];?> </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Category: </th>
        <td> <?php echo $data['category'];?> </td>
      </tr>
      <tr>
        <th scope="row">Hours:</th>
        <td><?php echo $data['course_hours'];?></td>
      </tr>
      <tr>
        <th scope="row">Description</th>
        <td><?php echo $data['description'];?></td>
      </tr>
    </tbody>
  </table>


  <a href="main.php">
    <button type="button" class="btn btn-outline-success waves-effect">
    go back
    </button>
  </a>

        <br>
        <br>
        <br>

      <a class="white-text my-5" href="logout.php?logout"> Logout</a>

  </div>



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