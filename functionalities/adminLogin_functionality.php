<?php

  if(isset($_POST['login_button'])) {
            
                $email = $_POST['email'];

                $password = $_POST['password'];


                $login_query= "SELECT * FROM admin WHERE email ='$email' ";

                $retrievedUser = mysqli_query($conn,$login_query);

                $retrievedUserArray = mysqli_fetch_assoc($retrievedUser);

                $count = mysqli_num_rows($retrievedUser);  

                if ($count == 1 && $retrievedUserArray['pass'] == $password) {
                
                $_SESSION["user_status"] = "admin";

                echo $_SESSION["user_status"];

                header('Location: main.php');
                      
                exit();

                };


              }; 

  ?>
