<?php
    require 'functions.php';
    $data = query("SELECT * FROM resiko");
    if(isset($_POST["login"])) {
        //cek username dan password
        if($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: admin.php");
            exit;
        } elseif ($_POST["username"] == "user" && $_POST["password"] == "456") {
            header("Location: user.php");
        } 
        else {
            $error_message = "Username tidak ditemukan!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Risiko Mitigasi</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
    <h2>Aplikasi Risiko Mitigasi </h2>
    <form action="" method="POST"> 
        <input type="text" name="username" placeholder="Username" required/> 
        <input type="password" name="password" placeholder="Password" required/> 
        <input type="submit" name="login" value="Login" class="login-button"/> 
    </form>
    <?php if ($error_message): ?> 
        <p class="error"><?= $error_message; ?>
    </p> <?php endif; ?>
    <h2>&nbsp;</h2>
  </div>
<body>
</body>
</html>
