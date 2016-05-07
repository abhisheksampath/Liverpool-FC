SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `login` (`username`, `password`) VALUES
('abhishek', '12345678'),
('sampath', '12345678');

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `name` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `height` int(20) NOT NULL,
  `weight` int(20) NOT NULL,
  `foot` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(20) NOT NULL,
  `kit` int(20) NOT NULL,
  `club` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `ballcontrol` int(10) NOT NULL,
  `dribbling` int(10) NOT NULL,
  `crossing` int(10) NOT NULL,
  `shortpass` int(10) NOT NULL,
  `longpass` int(10) NOT NULL,
  `marking` int(10) NOT NULL,
  `slide` int(10) NOT NULL,
  `stand` int(10) NOT NULL,
  `acc` int(10) NOT NULL,
  `stam` int(10) NOT NULL,
  `strength` int(10) NOT NULL,
  `sprint` int(10) NOT NULL,
  `agility` int(10) NOT NULL,
  `jumping` int(10) NOT NULL,
  `heading` int(10) NOT NULL,
  `shotpower` int(10) NOT NULL,
  `finish` int(10) NOT NULL,
  `longshot` int(10) NOT NULL,
  `curve` int(10) NOT NULL,
  `fkacc` int(10) NOT NULL,
  `penalty` int(10) NOT NULL,
  `volley` int(10) NOT NULL,
  PRIMARY KEY (`kit`),
  KEY `volley` (`volley`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `player` (`name`, `position`, `height`, `weight`, `foot`, `birthdate`, `age`, `kit`, `club`, `country`, `ballcontrol`, `dribbling`, `crossing`, `shortpass`, `longpass`, `marking`, `slide`, `stand`, `acc`, `stam`, `strength`, `sprint`, `agility`, `jumping`, `heading`, `shotpower`, `finish`, `longshot`, `curve`, `fkacc`, `penalty`, `volley`) VALUES
('Coutinho', 'CAM/LM', 171, 68, 'right', '1992-06-12', 23, 10, 'Liverpool', 'Brazil', 88, 87, 74, 85, 78, 24, 35, 38, 89, 73, 56, 77, 91, 59, 47, 79, 70, 80, 84, 72, 64, 75),
('hari', '23', 23, 23, '23', '2016-03-10', 23, 23, '23', '23', 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23),
('milner', 'CAM', 172, 78, 'right', '2016-04-04', 36, 7, 'Liverpool', 'England', 76, 78, 82, 82, 80, 86, 78, 80, 76, 88, 88, 82, 78, 76, 72, 75, 71, 68, 75, 76, 85, 80),
('Lallana', 'CAM/RW', 172, 73, 'Right', '1988-10-05', 27, 20, 'Liverpool', 'England', 82, 85, 74, 86, 74, 30, 38, 52, 76, 83, 67, 76, 83, 73, 67, 68, 73, 72, 77, 66, 70, 72),
('Firmino', 'CF/CAM/ST', 181, 76, 'Right', '1991-10-02', 24, 11, 'Liverpool', 'Brazil', 83, 87, 70, 82, 74, 24, 31, 52, 78, 79, 71, 78, 82, 81, 71, 79, 82, 79, 78, 67, 72, 78);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
