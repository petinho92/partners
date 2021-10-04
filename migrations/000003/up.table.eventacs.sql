CREATE TABLE `eventacs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `station` int unsigned DEFAULT NULL,
  `phase` int unsigned DEFAULT NULL,
  `qrcode` varchar(150) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventacs_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3;