DROP DATABASE IF EXISTS videos;

CREATE DATABASE IF NOT EXISTS videos;

CREATE TABLE `video` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
);