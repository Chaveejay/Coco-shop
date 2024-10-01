<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Types</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="App">
    <header class="App-header">
           <p>Pure Coco</p>
        </header>
        <main>
            <h2>Select your user type...</h2>
            <div class="user-options">
                <a href="userlogin.php" class="user-button">
                    <div class="icon-container">
                        <img src="img/users.png" alt="User " class="button-icon">
                    </div>
                    User
                </a>

                <a href="organizer-signin.php" class="user-button">
                    <div class="icon-container">
                        <img src="img/admin.png" alt="Admin" class="button-icon">
                    </div>
                    Admin
                </a>

                
            </div>

            <a href="guesthome.php" class="guest-button">
                <div class="icon-container">
                    <img src="img/users.png" alt="Guest Icon" class="button-icon">
                </div>
                Login as Guest User
            </a>
        </main>
    </div>
</body>
</html>
