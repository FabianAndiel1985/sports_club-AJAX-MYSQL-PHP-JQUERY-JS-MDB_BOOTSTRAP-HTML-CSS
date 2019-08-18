<?php include 'components/head.php';?>

<body>

  <?php include 'components/header.php';?>

  <?php 
  include 'functionalities/update_details_fetch_functionality.php'
  ;?>

      <section class="mb-4">

          <div class="row">
            
              <!--Grid column-->
              <div class="col-12 mb-md-0 mb-5">

                  <form id="createNewCourseForm"> <!-- FORM START -->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="id" name="id" value="<?php echo $data['id'];?>" class="form-control d-none">
                                  <label for="id" class="d-none">id</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" 
                                  value="<?php echo $data['name'];?>"
                                  class="form-control">
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
                                  <input type="text" id="course_category" name="course_category" value="<?php echo $data['category'];?>" class="form-control">
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
                                  <input type="text" id="course_hours" name="course_hours" value="<?php echo $data['course_hours'];?>" class="form-control">
                                  <label for="course_hours" class="">course hours</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="description" name="description" value="<?php echo $data['description'];?>" class="form-control white-text">
                                  <label for="description" class="">description</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->


                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="image_path" name="image_path"  value="<?php echo $data['img'];?>" class="form-control">
                                  <label for="image_path" class="">image path</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                        <!-- Sign in button -->
                    <button id="test" class="btn btn-info btn-block"  name="login_button">Add new course</button>

                  </form> <!-- FORM END -->

              </div>
              <!--Grid column-->

          </div>

      </section>
      <!--Section: Contact v.2-->

  <?php include 'functionalities/update_functionality.php';?>    

  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>



 




