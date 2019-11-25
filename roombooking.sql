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
-- Bază de date: `roombooking`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `bookingtable`
--

DROP TABLE IF EXISTS `bookingtable`;
CREATE TABLE IF NOT EXISTS `bookingtable` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_name` varchar(50) NOT NULL,
  `res_email` varchar(50) NOT NULL,
  `res_tel` varchar(50) NOT NULL,
  `res_room` varchar(50) NOT NULL,
  `res_date` date NOT NULL,
  `res_hour` varchar(10) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `bookingtable`
--

INSERT INTO `bookingtable` (`res_id`, `res_name`, `res_email`, `res_tel`, `res_room`, `res_date`, `res_hour`) VALUES
(1, 'Iulia', 'iulia@gmail.com', '0733452456', '', '2019-11-18', '12:00'),
(2, 'Iulia', 'iulia@gmail.com', '0733452456', 'Nightmare', '2019-11-18', '12:00'),
(3, 'Iulia', 'iuliasorina@yahoo.com', '0733452456', 'Nightmare', '2019-11-19', '18:00'),
(4, 'Iulia', 'iulia@gmail.com', '0733452456', 'Nightmare', '2019-11-20', '18:00'),
(5, 'Ale', 'iuliasorina@yahoo.com', '0733452456', 'Nightmare', '2019-11-21', '18:00'),
(6, 'Edi', 'eduard@gmail.com', '0733452456', 'Nightmare', '2019-11-28', '18:00'),
(7, 'Iulia', 'iulia@gmail.com', '0733452456', 'Zombies Invasion', '2019-11-20', '10:00'),
(8, 'Iulia', '1234hdkhsd', '0733452456', 'The Tomb', '2019-11-28', '12:00'),
(9, 'ale', 'alew', '0722347516', 'Zombies Invasion', '2019-11-22', '11:00'),
(10, 'Alexandra', 'ale.veres@gmail.com', '0733452456', 'Nightmare', '2019-11-29', '12:00'),
(11, 'Olga', 'adriandeaconu98@gmail.com', '0738178368', 'Cave', '2019-11-14', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
