  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">

          
         document.getElementById("test").onclick= update;
         
         function update() {

          var id = $('#id').val();
          var name = $('#name').val();
          var course_category = $('#course_category').val();
          var course_hours = $('#course_hours').val();
          var course_category = $('#course_category').val();
          var description = $('#description').val();
          var image_path = $('#image_path').val();

          // console.log(id, name, course_category);

          var updateRequest = new XMLHttpRequest();

          updateRequest.open("GET","http://localhost:8080/fProject/server_side_update.php?id="+id+"&name="+name + "&course_hours="+ course_hours + "&course_category="+course_category + "&description=" + description + "&image_path=" + image_path,true);


          updateRequest.onreadystatechange = function() {
           if (updateRequest.readyState == 4  && updateRequest.status == 200 ) {
            var response = updateRequest.responseText;
            // console.log(response);
            
            if (response == 1 ) {
              window.location.href = "main.php";
            }

            else {

            }

        }
      };


          updateRequest.send();
      }

      </script>
