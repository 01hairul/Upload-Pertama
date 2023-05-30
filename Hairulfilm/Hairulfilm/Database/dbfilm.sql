CREATE TABLE `tb_album` (
  `alb_id` int(11) NOT NULL,
  `alb_id_art` int(11) NOT NULL,
  `alb_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb_artist` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb_played` (
  `ply_id` int(11) NOT NULL,
  `ply_id_track` int(11) NOT NULL,
  `ply_played` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb_track` (
  `trc_id` int(11) NOT NULL,
  `trc_name` varchar(100) NOT NULL,
  `trc_id_album` int(11) NOT NULL,
  `trc_time` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`alb_id`),
  ADD UNIQUE KEY `alb_name` (`alb_name`),
  ADD KEY `tb_album_ibfk_1` (`alb_id_art`);

ALTER TABLE `tb_artist`
  ADD PRIMARY KEY (`art_id`);

ALTER TABLE `tb_played`
  ADD PRIMARY KEY (`ply_id`);

ALTER TABLE `tb_track`
  ADD PRIMARY KEY (`trc_id`),
  ADD UNIQUE KEY `trc_name` (`trc_name`),
  ADD KEY `tb_track_ibfk_1` (`trc_id_album`);

ALTER TABLE `tb_album`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_played`
  MODIFY `ply_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_track`
  MODIFY `trc_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`alb_id_art`) REFERENCES `tb_artist` (`art_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tb_track`
  ADD CONSTRAINT `tb_track_ibfk_1` FOREIGN KEY (`trc_id_album`) REFERENCES `tb_album` (`alb_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;