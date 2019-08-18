    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


       <script type="text/javascript">

        $("#loginForm").submit(function(){


          var $form= $("#loginForm");
          // console.log($form);

          var $inputs = $form.find("input");

          var serializedInputs = $form.serialize();

          console.log(serializedInputs);

          request = $.ajax({
           url: "server_side_member_login.php",
           type: "post",
           data: serializedInputs
          });

           request.done(function (response, textStatus, jqXHR){
             // Log a message to the console
             
              document.getElementById("result").innerHTML = response;


              // if (response == "OK") {
              //   document.getElementById('result').innerHTML = response;
              // }

              // else {                
              //   window.location.href="main.php";

              // }
              
              });

           request.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

        });

       </script>