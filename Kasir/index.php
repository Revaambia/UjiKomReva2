<?php
require_once('./db/DB_connection.php');
require_once('./db/DB_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopiria | Login</title>
    <link rel="stylesheet" href="assets/style/login.css">
  
</head>
<body>
    <div class="container">
        <img style="width : 100px, margin-bottom: 2 rem;" src="assets/images/koins.png" alt="">
        <form method ="POST">
            <?php if (isset($error_message)) : ?>
            <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>

<div class="box form-box">
    <center><h1>Login</h1></center> 
    <br>
 <div>
    <label for="username">Username</label>
    <br>
    <input id="username" name="username" type="text" placeholder="" required>
</div>

<div>
    <label for="password">Password</label>
    <br>
    <input id="password" name="password" type="password" placeholders="" required>
</div>

<div>
    <button type="submit" class="btn">Sign In</button>
</div>
<div class="text-center mt-4">
    <p>Don't have an account? <a href="./pages/register.php">Register here!</a></p>
            </div>
        </form>
    </div>
            </div>
</body>

</html>







