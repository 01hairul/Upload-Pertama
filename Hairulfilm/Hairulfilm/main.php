
<?php

include "koneksi.php";

$sql = "SELECT art_id, art_name, alb_name, trc_name 
            FROM tb_artist, tb_album, tb_track
                WHERE tb_artist.art_id=tb_album.alb_id_art
                    AND tb_album.alb_id=tb_track.trc_id_album";

$stmt1 = $koneksi->prepare($sql);
$stmt1->execute();

?>

<h3>Info Film Terbaru</h3>
    <table>
        <tr>
            <th>Nama Film</th>
            <th>Genre Film</th>
            <th>Aktor Film</th>
        </tr>
<?php while ($row =$stmt1->fetch()) { ?>
        <tr>
            <td><?php echo $row['art_name']; ?></td>
            <td><?php echo $row['alb_name']; ?></td>
            <td><?php echo $row['trc_name']; ?></td>
        </tr>
 <?php } ?>
    </table>