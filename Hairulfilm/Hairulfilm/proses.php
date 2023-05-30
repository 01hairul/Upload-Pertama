<?php

include "koneksi.php";

//INPUT DATA
try {

    if (isset($_POST['btn_simpan'])) {
        $art_name = $_POST['art_name'];
        $alb_name = $_POST['alb_name'];
        $trc_name = $_POST['trc_name'];

        $stmt = $koneksi->prepare("INSERT INTO tb_artist(art_name) values (?)");
        $stmt->execute([$art_name]);
        $last_id_art = $koneksi->lastInsertId();
        
        $stmt = $koneksi->prepare("INSERT INTO tb_album (alb_id_art, alb_name) 
            VALUES (?, ?)");
        $stmt->execute([$last_id_art, $alb_name]);
        $last_id_alb = $koneksi->lastInsertId();
    
        $stmt = $koneksi->prepare("INSERT INTO tb_track (trc_name, trc_id_album) 
            VALUES (? , ?)");
        $stmt->execute([$trc_name, $last_id_alb]);
    
        header("location:home.php?page=info");
    }

} catch (PDOException $e) {
    print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
    die();
}

//EDIT DATA
if (isset($_POST['btn_update'])){
    $id = $_POST['art_id'];
    $art_name = $_POST['art_name'];
    $alb_name = $_POST['alb_name'];
    $trc_name = $_POST['trc_name'];
    

    $stmt = $koneksi->prepare("UPDATE tb_artist SET art_name= ? 
            WHERE art_id = ?");
        $stmt->execute([$art_name, $id]);
    
    $stmt = $koneksi->prepare("UPDATE tb_album SET alb_name = ? 
            WHERE alb_id = ?");
        $stmt->execute([$alb_name, $id]);

    $stmt = $koneksi->prepare("UPDATE tb_track SET trc_name = ?
            WHERE trc_id = ?");
        $stmt->execute([$trc_name, $id]);

     // Balik lagi
    header("location:home.php");
}

//HAPUS DATA
if (isset($_GET['del'])){

    $delete = $_GET['del'];

    $sql2 = "DELETE FROM tb_artist WHERE art_id=:art_id";

    $stmt2 = $koneksi->prepare($sql2);
    $stmt2->bindParam(":art_id", $delete);
    $stmt2->execute();

    //Balik lagi
    header("location:home.php?page=info");
}
