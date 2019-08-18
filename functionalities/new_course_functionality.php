  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


       <script type="text/javascript">

        $("#createNewCourseForm").submit(function(event){


          var $form= $("#createNewCourseForm");

          var $inputs = $form.find("input");

          var serializedInputs = $form.serialize();

          console.log(serializedInputs);

          request = $.ajax({
           url: "server_side_new_course.php",
           type: "post",
           data: serializedInputs
          });

           request.done(function (response, textStatus, jqXHR){
             
              
              if (response == "OK") {
               alert("geht net");
              }

              else {
                window.location.href="main.php";
              }
              
              });

           request.fail(function (jqXHR, textStatus, errorThrown){
       
              console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });



        });

       </script>

