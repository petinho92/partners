CREATE TABLE `majors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_hu` varchar(100) DEFAULT NULL,
  `name_en` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `majors_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;