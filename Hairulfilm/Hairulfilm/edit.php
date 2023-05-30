<?php

include "koneksi.php";
$id = $_GET['art_id'];
$sql = "SELECT art_id, art_name , alb_name , trc_name 
            FROM tb_artist, tb_album, tb_track
                WHERE art_id = :art_id AND alb_id_art = :alb_id_art AND trc_id_album = :trc_id_album";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":art_id", $id);
$stmt->bindParam(":alb_id_art", $id);
$stmt->bindParam(":trc_id_album", $id);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERBHARUI FILM</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <main>
        <header>
            <img src="Assets/images/header.jpg" alt="YNKTS">
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
            <h3>Edit Data Musik</h3>
    <form action="proses.php" method="post">
        <input type="hidden" name="art_id" value="<?php echo $id ?>">
        <table>
            <tr>
                <td>Nama Artis</td>
                <td><input type="text" name="art_name" value="<?php echo $row['art_name']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="alb_name" value="<?php echo $row['alb_name']; ?>"></td>
            <tr>
            <tr>
                <td>Nama Musik</td>
                <td><input type="text" name="trc_name" value="<?php echo $row['trc_name']; ?>"></td>
            <tr>
                <td></td>
                <td><input type="submit" name="btn_update" value="UPDATE"></td>
            </tr>
            </tr>
        </table>
    </form>
        </section>
        <footer>
            Copyright &copy; 2022. Designed By HarunYahya
        </footer>
        
    </main>

</body>
</html>