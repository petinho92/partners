CREATE TABLE `guest` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `organisation` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `programs` json DEFAULT NULL,
  `foodticket` json DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `guid` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guest_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;