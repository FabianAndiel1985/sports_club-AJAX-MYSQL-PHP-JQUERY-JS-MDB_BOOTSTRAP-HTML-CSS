      <?php

      if( isset($_POST['enroll_button']) ) {

         $user_id = $_SESSION['user_id'];
         $course_id = $id;

         $conn = new mysqli("localhost" , "root", "", "cr14_fabian_andiel_sportsclub");

         // validate if the member has signed in to the specific course before

         $validation_query = "SELECT * FROM enrollment WHERE course_ID_FK = '$course_id' AND students_ID_FK = '$user_id'";

         $validation = mysqli_query($conn,$validation_query);

         if (!mysqli_num_rows($validation)>0) {

            echo "You can sign up";
            $query= "INSERT INTO enrollment VALUES (NULL,$course_id, $user_id)";
            $enteredData = mysqli_query($conn,$query);
            header("Location: main.php");

         }

         else {

          echo "<div class='text-center'>
                  <span class='red-text'> 
                    You are already signed up 
                  </span>
                </div>";

         }


         // $query= "INSERT INTO enrollment VALUES (NULL,$course_id, $user_id)";

         // if ($enteredData = mysqli_query($conn,$query)) {

         //    header("Location: main.php");
       
         //  } 
          
         //  else
         //  {
         //      echo "OK";
         //  }



      } /* end of main if clause */

      ?>