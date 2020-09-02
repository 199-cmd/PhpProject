<?php require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PythonEpoint Tutorial</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" class="signup-form">
                        <h2 class="form-title">Make An Account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="u_name" required placeholder="Enter your name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="u_email" required placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="u_password" required   placeholder="Password"/>
                           
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-submit" value="Sign up"/>
                        </div>
                  
                    </form>
                    <p class="loginhere">
                         Already have an account ? <a href="index.php" class="loginhere-link">Login</a>
                    </p>
                </div>
            </div>
            
        </section>

    </div>
    <!-- DatabaseCode -->
    <?php
       if(isset($_POST['submit'])){
            $u_name = $_POST['u_name'];
            $u_email = $_POST['u_email'];
            $u_password = md5($_POST['u_password']);
            
            $sql = "INSERT INTO users(u_name,u_email,u_password) VALUES('$u_name','$u_email','$u_password')";

            if(mysqli_query($conn,$sql)){
                 
                header('location:index.php');
            }else{
                echo "Error".$sql."<br>".mysqli_error($conn);
            }
        }
    ?>

     <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>