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
-- Bază de date: `roomlist`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `EnNameRoom` int(11) NOT NULL,
  `EnTitleRoom` int(11) NOT NULL,
  `EnDescription` int(11) NOT NULL,
  `RoNameRoom` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `roomtable`
--

DROP TABLE IF EXISTS `roomtable`;
CREATE TABLE IF NOT EXISTS `roomtable` (
  `EnNameRoom` varchar(40) NOT NULL,
  `EnTitleRoom` varchar(80) NOT NULL,
  `Img` varchar(100) NOT NULL,
  `EnDescription` varchar(700) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `RoNameRoom` varchar(40) NOT NULL,
  `RoTitleRoom` varchar(80) NOT NULL,
  `RoDescription` varchar(700) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `roomtable`
--

INSERT INTO `roomtable` (`EnNameRoom`, `EnTitleRoom`, `Img`, `EnDescription`, `id`, `RoNameRoom`, `RoTitleRoom`, `RoDescription`) VALUES
('ZOMBIES INVASION', 'WILL YOU MAKE IT OUT ALIVE?', 'img/room/ZOMBIES INVASION.jpg', '2030 - The Fall Of Mankind. An epidemic - mutated Ebola Virus â€“ has changed the chemical structure of a normal human body, turning it into a bloodthirsty Zombie, eradicating half of the Human Race. A known survivor, Dr. Anton Redkevych, a talented microbiologist, made a breakthrough - a vaccine for the current plague. Announcing that he has found the â€œCUREâ€ on a common radio frequency, you and your team are dispatched for a search-and-rescue mission. You must retrieve the vaccine and the â€œMiracle Doctorâ€ due to ceased communications without any probable cause. You only have an hour before the \"SAFE WINDOW PERIOD\" endsâ€¦', 4, 'Invazia zombilor', 'Vei supravietui?', '2030 - Declinul omenirii. O epidemie - mutatie a virusului Ebola - a alterat structura chimica normala a corpului uman, transformand indivizii in zombie si eradicand jumatate rasa umana. Dr. Anton Redkevych, un cunoscut supravietuitor si talentat microbiologist, a facut o descoperire - un vaccin antidot pentru aceasta boala. Doctorul anunta descoperirea printr-o frecventa radio, iar echipa voastra este trimisa intr-o misiune de salvare. Trebuie sa gasiti vaccinul si pe miraculosul doctor datorita intreruperii comunicatiei fara nici o cauza cunoscuta. Aveti la dispozitie doar o ora pana perioada de siguranta se incheie.'),
('PIRATE CAVE', 'AHOY, MATE!', 'img/room/PIRATE CAVE.jpg', 'You sailed out on a mission commissioned by admiral Howell Davis to the Unknown Islands northwest of the Atlantic Ocean, in order to retrieve his treasure. Leaving the harbor behind and sailing on strange tides! You were attacked by pirates and most of the crew died. You and few others were taken as prisoners to the pirate cave. The pirates went on the prowl and this is your chance to get your freedom before they return. Dive into the world of pirates and become a part of a treasure hunting adrenaline-raising experience. Find the treasure, escape and discover the secret of Pirate Cave', 5, 'Pestera piratilor', 'Ahoy, camarade!', 'Porniti spre Insulele Necunoscute in nord-vestul Oceanului Atlantic intr-o misiune data de comandantul Howell Davis pentru a-i gasi comoara. Lasati portul in urma si navigati pe ape misterioase! Sunteti atacati de pirati si majoritatea echipajului este ucis. Cativa sunteti luati prizonieri in pestera piratilor. Piratii pleaca dupa prada si aceasta e sansa voastra pentru a va recapata libertatea! Intrati in lumea piratilor si luati parte la o vanatoare de comori care va ridica adrenalina! Gasiti comoara si descoperiti secretul pesterii piratilor!'),
('THE TOMB', 'PERCEIVE THE TOTAL EGYPTIAN MUMMY EXPERIENCE!', 'img/room/THE TOMB.jpg', 'Riddle of the Philosopherâ€™s Stone embarks you on an expedition to the outskirts of an ancient town in Abusira, Egypt. This is where ancient myth reveals an underground pyramid said to be the whereabouts of the tomb of the great Pharaoh Nyuserre Ini of the 5th Dynasty. Rumor has it that the journey itself cost the lives of hundreds of expeditioners searching for hidden treasures. Venture upon the ancient maze and solve time-worn mechanisms to escape this horrendous ancient ruin, or let your mortal body becomes a keepsake of the tombs vengeance for culprits.', 6, 'Mormantul', 'Traieste experiente in Egipt!', 'Ghicitoarea Pietrei Filosofale va trimite intr-o expeditie la periferia unui oras antic din Abusira, Egipt. Aici mitul antic dezvaluie sub pamant o piramida care se crede a fi mormantul marelui Faraon Nyuserre Ini din Dinastia a 5-a. Se zvoneste ca aceasta expeditie i-a costat viata pe exploratorii care cautau comori ascunse. Aventurati-va in labirintul antic si rezolvati mecanismele stravechi pentru a iesi din aceasta ruina sau lasati-va trupurile neinsufletite drept amintire a razbunarii mormantului.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
