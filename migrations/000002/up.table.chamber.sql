CREATE TABLE `chamber` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `chamber` varchar(50) DEFAULT NULL,
  `chambership_number` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `programs` json DEFAULT NULL,
  `foodTicket` json DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `guid` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chamber_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;