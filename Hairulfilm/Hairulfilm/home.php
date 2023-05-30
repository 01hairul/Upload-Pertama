<?php
  
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA FILM</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <main>
        <header>
            <img src="assets/images/header.jpg" alt="YNKTS">
        </header>
    
        <nav>
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="home.php?page=add">Tambah</a></li>
                <li><a href="home.php?page=info">Info</a></li>
                <li><a href="login.php">LogOut</a></li>
             </ul>
        </nav>
    
        <section>
            <?php
            if (isset($_GET['page'])){
                include $_GET['page'] . ".php";
            } else {
                include "main.php";
            }

            ?>
        </section>
    
        <footer>
            Copyright &copy; 2022. Designed By HarunYahya
        </footer>
        
    </main>

</body>
</html>