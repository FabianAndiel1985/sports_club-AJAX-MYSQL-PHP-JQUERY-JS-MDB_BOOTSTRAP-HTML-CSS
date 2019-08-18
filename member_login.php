<?php include 'components/head.php';?>


<!-- prevent logged in user from accessing this page -->

<?php

  if(isset($_SESSION['user_status']) != "" )
  {
   header("Location: main.php" ); 
  };

?>



<body>

     <div id="div_login">
          <h1>Login</h1>
          <div id="message"></div>
          <div>
              <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
          </div>
          <div>
              <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
          </div>
          <div>
              <input type="button" value="Submit" name="but_submit" id="but_submit" />
          </div>
      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
    
    $(document).ready(function(){
      $("#but_submit").click(function(){
          var username = $("#txt_uname").val().trim();
          var password = $("#txt_pwd").val().trim();

          if( username != "" && password != "" ){
              $.ajax({
                  url:'checkUser.php',
                  type:'post',
                  data:{username:username,password:password},
                  success:function(response){
                      var msg = "";
                      if(response == 1){
                          window.location = "main.php";
                          
                      }else{
                          msg = "Invalid username and password!";
                      }
                      $("#message").html(msg);
                    }
                });
            }
        });
    });
  </script>





   



<?php include 'components/scripts.php';?>

       

</body>
</html>