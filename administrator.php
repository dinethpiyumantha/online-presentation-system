<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrator Login</title>

    <link rel="stylesheet" type="text/css" href="styles/fonts.css">
    <link rel="stylesheet" type="text/css" href="styles/admin/master.css">

    <link rel="shortcut icon" href="images/favicon.png">
    
    <script type="text/javascript" src="js/admin/masterScript.js"></script>
    <script type="text/javascript" src="js/admin/admin_login.js"></script>
</head>
<body>
    <div class="container">
        <img src="images/admin/logo.png" alt="" style="position: absolute;width: 270px;bottom: 70px;left:50%;transform:translate(-50%,0%);">
        <div class="login-box">
            <form class="admin-login" method="POST" action="admin_profile.php">
                <img class="login-logo" src="images/admin/shield.png">
                <h1 class="title">Login</h1><br>
                <div class="icon"><img class="icon-login" src="images/admin/user.png"></div>
                <input type="text" id="username" value="" name="un" class="login-un"><br>
                <div class="icon"><img class="icon-login" src="images/admin/key.png"></div>
                <input type="password" id="password" value="" name="pw" class="login-pw"><br>
                <input type="submit" id="submit" value="Login" class="login-btn" name="btnLogin" onclick="adminLogin();">
                <p class="login-description">Only can login to system administrators.</p>
            </form>
        </div>
    </div>
    <div class="footer">
        &copy 2020 by MLB_01.02_10 Assignment Group
    </div>
</body>
</html>

