<?php
    require 'connection.php';
    session_start();
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
                        <h2 class="form-title">Login Here</h2>
                       
                        <div class="form-group">
                            <input type="text" class="form-input" name="u_name" required placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="u_password" required placeholder="Password"/>
                            
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="login" class="form-submit" value="Login"/>
                        </div>
                         <p class="loginhere">
                            Create Your account ? <a href="register.php" class="loginhere-link">Sign Up</a>
                         </p>
                    </form>
                </div>
            </div>
            
        </section>
    
    </div>
<!-- DatabaseCode -->
    <?php
    if(isset($_POST['login'])){
            $u_name = $_POST['u_name'];
            $u_password = md5($_POST['u_password']);
            $sql = "SELECT * FROM users WHERE u_name = '$u_name'";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) > 0)
            {
              while($user = mysqli_fetch_assoc($result))
              {
                
                if ( $u_name == $user['u_name'] && $u_password == $user['u_password']) 
                {
                    $_SESSION['u_name'] = $u_name;
                    header('location:dash.php');
                }
                else
                {
                    echo "<script>alert('Incorrect Credential')</script>";
                }

            }
        }
        else
        {
            echo "<script>alert('Error While Login')</script>";
        }
    }
?>


    

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
