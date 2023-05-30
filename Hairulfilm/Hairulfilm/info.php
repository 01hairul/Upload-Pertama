<?php

include "koneksi.php";

$sql = "SELECT art_id, art_name, alb_name, trc_name 
            FROM tb_artist, tb_album, tb_track
                WHERE tb_artist.art_id=tb_album.alb_id_art
                    AND tb_album.alb_id=tb_track.trc_id_album";

$stmt = $koneksi->prepare($sql);

$stmt->execute();

?>

<h3>Info Film</h3>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Film</th>
            <th>Genre Film</th>
            <th>Aktor Film</th>
            <th>AKSI</th>
        </tr>
<?php
            $no = 1;
            while ($row =$stmt->fetch()) { ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $row['art_name']; ?></td>
            <td><?php echo $row['alb_name']; ?></td>
            <td><?php echo $row['trc_name']; ?></td>
            <td>
                <a href="edit.php?art_id=<?php echo $row['art_id']; ?>">EDIT</a>
                <a href="proses.php?del=<?php echo $row['art_id']; ?>" onclick="return confirm('Apakah anda yakin?')">HAPUS</a>
            </td>
        </tr>
        
 <?php $no += 1; } ?>
    </table>