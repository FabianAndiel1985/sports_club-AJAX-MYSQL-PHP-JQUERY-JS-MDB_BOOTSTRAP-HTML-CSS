<?php include 'components/head.php';?>


<body>

  <?php include 'components/header.php';?>

  <script src="https://www.w3schools.com/lib/w3.js"></script>
  
  <div class="container">

    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    
      <thead>
        <tr>

          <th  class="th-sm" >Course name 
            <span class="ml-2"> 
              <i onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer" class="fas fa-sort">
              </i>
            </span>
          </th>

          <th class="th-sm">Course category 
            <span class="ml-2"> 
              <i onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(2)')" style="cursor:pointer" class="fas fa-sort">
              </i>
            </span>
          </th>

          <th class="th-sm">Member firstname 
            <span class="ml-2"> 
              <i onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(3)')" style="cursor:pointer" class="fas fa-sort">
              </i>
            </span>
          </th>

          <th class="th-sm">Member lastname 
            <span class="ml-2"> 
              <i onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(4)')" style="cursor:pointer" class="fas fa-sort">
              </i>
            </span>
          </th>

        </tr>
      </thead>
      <tbody>


         <?php 

        // echo $_SESSION["system_user"];

            $sql= "SELECT courses.name, courses.category, members.firstname, members.lastname
                   FROM courses 
                   JOIN enrollment ON enrollment.course_ID_FK = courses.id 
                   JOIN members ON enrollment.students_ID_FK = members.id
                   ";


            $result = mysqli_query($conn,$sql);
            // $resultArray = mysqli_fetch_assoc($result);
            // print_r($resultArray);
            


            if(mysqli_num_rows($result)>0)
              {
              
              while($row = mysqli_fetch_assoc($result)) {

                echo "
                  <tr class='item'>
                    <td> ".$row['name']."</td>
                    <td>".$row['category']."</td>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                  </tr>
                ";

                } /* end while loop */

              } /* end if clause */
      ?>



   
        </tbody>
        <tfoot>
          <tr>
          </tr>
        </tfoot>
      </table>





        <br>
        <br>
        <br>

      <a class="white-text my-5" href="logout.php?logout"> Logout</a>

</div> <!-- End of bootstrap container -->



     



  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>

