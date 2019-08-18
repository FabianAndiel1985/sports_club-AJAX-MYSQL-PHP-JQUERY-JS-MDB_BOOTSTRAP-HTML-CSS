      <?php

  if ($_POST) { 

      $id = $_POST['id'];
      $name = $_POST['name'];
      $category = $_POST['course_category'];
      $course_hours = $_POST['course_hours'];
      $description = $_POST['description'];
      $image_path = $_POST['image_path'];

      echo $id;

      $sql = "UPDATE courses SET name = '$name', category = '$category', course_hours = '$course_hours', description ='$description', img = '$image_path' WHERE id = {$id}" ;

      if($conn->query($sql) === TRUE) {
       echo"hurra";
        $conn->close();
        header("Location: main.php");
     } 

     else {
          echo "Error while updating record :".$conn->error;
     }
    };

      ?>