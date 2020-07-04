-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 04:06 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dailylife`
--
CREATE DATABASE IF NOT EXISTS `dailylife` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dailylife`;

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

DROP TABLE IF EXISTS `diary`;
CREATE TABLE IF NOT EXISTS `diary` (
  `emotion` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `content` varchar(16000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`emotion`, `date`, `content`) VALUES
('Happy', '01/01/2016', 'Today was a very good day and I felt very happy'),
('Surprised', '01/06/2016', 'It was a very unusual day today.\r\n'),
('Sad', '01/12/2016', 'Today was not a good day.\r\n'),
('Happy', '01/16/2016', 'Today was a very good day and I felt very happy\r\n'),
('Surprised', '01/21/2016', 'It was a very unusual day today.\r\n'),
('Angry', '01/25/2016', 'I am very much disturbed today\r\n'),
('Happy', '02/02/2016', 'Today was a very good day and I felt very happy\r\n'),
('Sad', '02/07/2016', 'Today was not a good day.\r\n'),
('Surprised', '02/14/2016', 'It was a very unusual day today.\r\n'),
('Happy', '02/18/2016', 'Today was a very good day and I felt very happy\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
