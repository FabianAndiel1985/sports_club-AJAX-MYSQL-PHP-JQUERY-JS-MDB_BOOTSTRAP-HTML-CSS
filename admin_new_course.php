<?php include 'components/head.php';?>

<?php
  // echo $_SESSION['user_status'];
  if(!isset($_SESSION['user_status']) == "admin")
  {
   header("Location: main.php" ); 
  };

?>

<body>

  <?php include 'components/header.php';?>


        <div class="container">

          <div class="row">

              <!--Grid column-->
              <div class="col-12 mb-md-0 mb-5">

                  <form id="createNewCourseForm"> <!-- FORM START -->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <!-- <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="id" name="id" class="form-control">
                                  <label for="id" class="">id</label>
                              </div>
                          </div> -->
                          <!--Grid column-->

                      </div>

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Course name</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="course_category" name="course_category" class="form-control">
                                  <label for="course_category" class="">Course category (either Fitness, Martial Art or Chill Out)</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="course_hours" name="course_hours" class="form-control">
                                  <label for="course_hours" class="">course hours</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="description" name="description" class="form-control">
                                  <label for="description" class="">description</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->


                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="image_path" name="image_path" class="form-control">
                                  <label for="image_path" class="">image path</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

              
                    <button class="btn btn-outline-success waves-effect" type="submit" name="login_button">Add new course</button>


                  </form> <!-- FORM END -->

              </div>
            
          </div>

        </div>




  <?php include 'functionalities/new_course_functionality.php';?>

  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>