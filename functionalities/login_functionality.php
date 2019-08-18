 $(document).ready(function(){
      $("#but_submit").click(function(){
          var username = $("#txt_uname").val().trim();
          var password = $("#txt_pwd").val().trim();

          if( username != "" && password != "" ){
              $.ajax({
                  url:'server_side_login.php',
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