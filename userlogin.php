<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images\icon.png" type="image/gif" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\userlogin.css" >
    <title>Login</title>
</head>
<body>
    <div class="main-box">
        <div class="login">
            <div class="sign-in">
                Sign In
            </div>
            
            <div class="form">
            <form action="loginfunc.php" method="post">

            <div class="new">

            <div class="username">
                 <label for="username">UserName</label><br>
            </div>
              <input type="text" id="username" name="username" required/><br>

            <div class="password">
              <label for="password">Password</label><br>
            </div>
            <input type="password" id="password" name="password" required/><br><br>

            <input type="submit" name = "signin-btn" class="signin-btn" value="Sign IN">
            </div>
        </form> 
            </div>
        </div>


        <div class="sign-up">
       
            <div class="welcome"> Welcome to Login </div>
            <div class="paragraph"> Don't have an account?</div>
            <a href="usersignup.php" class=""><input type="submit" class="signup-btn" value="Sign UP"></a>
        </div>

    </div>
    <div class="back">
        <a href="index.php" class='back-btn'>Back to Users</a>
    </div>
    
</body>
</html>