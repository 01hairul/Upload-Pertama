<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
    ?>
    <div class="login">
      <h1 style="color: white;">Masuk</h1>
      <form method="post" action="cek_login.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
  
</body>
</html> 