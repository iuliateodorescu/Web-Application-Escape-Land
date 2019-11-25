-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: nov. 21, 2019 la 06:58 PM
-- Versiune server: 5.7.26
-- Versiune PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `userregistration`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` int(2) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `isAdmin`) VALUES
('adi', '202cb962ac59075b964b07152d234b70', 1),
('ale', '$2y$10$yJ8dhK8oseu.yTKyM6pRK.DzsUUtOIFbo7P.Fa0Y2non/XqCM9CE6', 0),
('alexandra', 'e99a18c428cb38d5f260853678922e03', 0),
('ana', '202cb962ac59075b964b07152d234b70', 0),
('iulia', '7d18d4c9ddb6790d732f70211345d1b5', 0),
('iulia.teodorescu', '$2y$10$aEhFZcGuNxztDWITU8Yq.Oh3Ft7bi85LQjdZITC7cmNrxiTAQ0JWe', 0),
('iulica', '$2y$10$DlNTZ3Hzg8RAT3h3Tn583.ryeI85/h0vOtdKxy/f55M5XkBRMIhYG', 0),
('teo.iulia', '$2y$10$xAwuILLgdFMXIiEunC2HPucFke1A/d.gi9fGFZaikYlGLtt.oXIZO', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
