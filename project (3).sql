-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2021 at 08:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic staff`
--

DROP TABLE IF EXISTS `academic staff`;
CREATE TABLE IF NOT EXISTS `academic staff` (
  `serial number` varchar(255) NOT NULL,
  `skill level` varchar(255) NOT NULL,
  `programme code` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `year` varchar(500) NOT NULL,
  `institution` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic staff`
--

INSERT INTO `academic staff` (`serial number`, `skill level`, `programme code`, `male`, `female`, `year`, `institution`, `date`) VALUES
('eyyee', 'FIRST DEGREE', '140024', '37', 'yryr', '363', 'Embu Vocational Rehabilitation Centre', '2021-03-02'),
('James', 'PHD', '140024', '89', '78', '890', 'Advisory Centre for Overseas Education', '2021-03-25'),
('been', 'NO CERTIFICATE', '140024', '76', '98', '678', 'Nyandarua Vocational Rehabilitation Centre', '2021-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

DROP TABLE IF EXISTS `institutions`;
CREATE TABLE IF NOT EXISTS `institutions` (
  `date` date NOT NULL,
  `name` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `postal address` varchar(500) NOT NULL,
  `telephone` varchar(500) NOT NULL,
  `county` varchar(500) NOT NULL,
  `sub-county` varchar(500) NOT NULL,
  `town` varchar(500) NOT NULL,
  `road` varchar(500) NOT NULL,
  `building` varchar(500) NOT NULL,
  `type of ownership` varchar(500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`date`, `name`, `type`, `postal address`, `telephone`, `county`, `sub-county`, `town`, `road`, `building`, `type of ownership`, `id`) VALUES
('2021-03-02', 'Embu Vocational Rehabilitation Centre', 'other', 'yyry', 'dhdh', 'Mombasa', 'hhhd', 'dhhhd', 'hhdhd', 'dhhdhd', 'public', 1),
('2021-03-18', 'A.I.C. Kijabe School of Nursing', 'university', 'seem', 'jh', 'Mombasa', 'nm', 'hh', 'jj', 'hh', 'public', 2),
('2021-03-25', 'Advisory Centre for Overseas Education', 'university', 'james', 'cccj', 'Mombasa', 'cjc', 'how', 'dhd', 'shddh', 'public', 3),
('2021-03-19', 'Nyandarua Vocational Rehabilitation Centre', 'National Polytechnic', 'been', 'jjkj', 'Mombasa', 'ui', 'ju', 'ui', 'erw', 'public', 4),
('2021-03-25', 'A C K Language & Orientation School', 'Medical Training College', 'uuu', 'uyyu', 'Mombasa', 'rew', 'twr', 'iuy', 'pon', 'public', 5),
('2021-03-24', 'A C K Language & Orientation School', 'National Polytechnic', 'seeeeee', 'hhj', 'Isiolo', 'gg', 'ffg', 'jjjj', 'jjj', 'private', 6),
('2021-03-25', 'Adventist University of Africa', 'university', 'kl', 'lk', 'Mombasa', 'kl', 'jk', 'kl', 'kl', 'public', 7),
('2021-03-25', 'A C K Language & Orientation School', 'university', 'hs', 'mx', 'Mombasa', 'mc', 'ton', 'njjn', 'qen', 'public', 8);

-- --------------------------------------------------------

--
-- Table structure for table `respondent`
--

DROP TABLE IF EXISTS `respondent`;
CREATE TABLE IF NOT EXISTS `respondent` (
  `respondent name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respondent`
--

INSERT INTO `respondent` (`respondent name`, `designation`, `date`) VALUES
('jam', 'see', '2021-03-18'),
('jam', 'yru', '2021-03-11'),
('jomm', 'N/A', '2021-03-24'),
('you', 'hj', '2021-03-24'),
('you', 'me', '2021-03-24'),
('you', 'me', '2021-03-24'),
('you', 'me', '2021-03-24'),
('twtwt', 'aah', '2021-03-24'),
('twtwt', 'aah', '2021-03-24'),
('twtwt', 'aah', '2021-03-24'),
('twtwt', 'aah', '2021-03-25'),
('twtwt', 'aah', '2021-03-27'),
('bammm', 'aah', '2021-03-02'),
('seem', 'na', '2021-03-18'),
('seem', 'na', '2021-03-18'),
('james', 'N/A', '2021-03-25'),
('james', 'N/A', '2021-03-25'),
('been', 'N/A', '2021-03-19'),
('been', 'N/A', '2021-03-19'),
('fg', 'gh', '2021-03-25'),
('gh', 'gh', '2021-03-24'),
('jhh', 'yhh', '2021-03-24'),
('thj', 'iiib', '2021-03-25'),
('hdj', 'iiib', '2021-03-25'),
('hdj', 'iiib', '2021-03-25'),
('hdj', 'iiib', '2021-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `students admitted`
--

DROP TABLE IF EXISTS `students admitted`;
CREATE TABLE IF NOT EXISTS `students admitted` (
  `date` date NOT NULL,
  `institution` varchar(500) NOT NULL,
  `serial number` varchar(255) NOT NULL,
  `programme` varchar(300) NOT NULL,
  `programme code` varchar(300) NOT NULL,
  `male` varchar(300) NOT NULL,
  `female` varchar(300) NOT NULL,
  `year` varchar(300) NOT NULL,
  PRIMARY KEY (`serial number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students admitted`
--

INSERT INTO `students admitted` (`date`, `institution`, `serial number`, `programme`, `programme code`, `male`, `female`, `year`) VALUES
('2021-03-02', 'Embu Vocational Rehabilitation Centre', 'ty', '140003 Agriculture, Education and Extension', '140024', '67', 'gg', 'gcg'),
('2021-03-02', 'Embu Vocational Rehabilitation Centre', 'ssy', '140012 Development Studies', '140024', 'ty', 'cg', 'noo'),
('2021-03-25', 'A C K Language & Orientation School', 'den', '140003 Agriculture, Education and Extension', '140024', '23', '34', '34');

-- --------------------------------------------------------

--
-- Table structure for table `students graduated`
--

DROP TABLE IF EXISTS `students graduated`;
CREATE TABLE IF NOT EXISTS `students graduated` (
  `serial number` varchar(255) NOT NULL,
  `programme` text NOT NULL,
  `duration1` varchar(255) NOT NULL,
  `code1` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `institution` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students graduated`
--

INSERT INTO `students graduated` (`serial number`, `programme`, `duration1`, `code1`, `male`, `female`, `year`, `institution`, `date`) VALUES
('hj', '140015 Education', '3-4 YEARS', '140024', 'yu', 'ty', '456', 'Embu Vocational Rehabilitation Centre', '2021-03-02'),
('yey', '140014 Economics Of Education', 'LESS THAN A YEAR', '140024', '67', '77', '78', 'Embu Vocational Rehabilitation Centre', '2021-03-02'),
('seem', '140010 Creative Art Education', 'LESS THAN A YEAR', '140024', 'yy', 'yu', 'uty', 'A.I.C. Kijabe School of Nursing', '2021-03-18'),
('james', '140003 Agriculture, Education and Extension', 'LESS THAN A YEAR', '140024', '87', '89', '789', 'Advisory Centre for Overseas Education', '2021-03-25'),
('been', '140003 Agriculture, Education and Extension', 'LESS THAN A YEAR', '140024', '87', '89', '98', 'Nyandarua Vocational Rehabilitation Centre', '2021-03-19'),
('been', '140003 Agriculture, Education and Extension', 'LESS THAN A YEAR', '140024', 'see', 'of', '6878', 'Nyandarua Vocational Rehabilitation Centre', '2021-03-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
