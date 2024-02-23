<?php
require_once('../db/DB_connection.php');
require_once('../db/DB_register.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopiria | Register</title>
    <link rel="stylesheet" href="../assets/style/register.css">
</head>
<body>
    <div class="container">
    <img style="width: 100px; margin-bottom: 2rem;" src="assets/images/koins.png" alt="">
        <form method="POST">
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <div class="box form-box">
            <center><h1>Register</h1></center> 
            <br>
            <div>
                <label for="username">Username</label> <br>
                <input id="username" name="username" type="text" placeholder="" required>
            </div>
            <div>
                <label for="password">Password</label> <br>
                <input id="password" name="password" type="password" placeholder="" required>
            </div>
            <div>
                <label for="nama">Nama</label> <br>
                <input id="nama" name="nama" type="text" placeholder="" required>
            </div>
            <div>
                <button type="submit" class="btn">Register</button>
            </div>
            <p>Have an account? <a href="../index.php">Login!</a></p>
        </form>
    </div>
            </div>
</body>
</html>