-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- Host: egv-vmjmladb01
-- Generation Time: Sep 17, 2013 at 01:39 PM
-- Server version: 5.1.57
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `__global`
--

--
-- Dumping data for table `gpr_schools`
--

INSERT INTO `gpr_schools` (`id`, `school`, `reg_open`, `reg_close`, `time_offset`) VALUES
(1, 'Carnegie Mellon - Tepper School of Business', '2012-09-21 08:00:00', '2012-09-27 23:00:00', 1),
(2, 'Columbia Business School', '2012-09-24 08:00:00', '2012-10-01 23:59:00', 1),
(3, 'Kellogg School of Management', '2012-10-01 09:00:00', '2012-10-05 23:59:00', 0),
(4, 'Chicago Booth School of Business', '2012-10-17 09:00:00', '2012-10-21 12:00:00', 0),
(5, 'Michigan Ross School of Business', '2012-09-24 08:00:00', '2012-09-28 23:59:00', 1),
(6, 'The Wharton School', '2012-09-24 08:00:00', '2012-10-10 23:00:00', 1),
(7, 'Cranfield School of Management', '2012-09-30 18:00:00', '2012-10-03 18:00:00', 6),
(8, 'INSEAD', '2012-10-01 02:00:00', '2012-10-03 18:00:00', 7),
(9, 'Judge Business School', '2012-09-30 18:00:00', '2012-10-03 18:00:00', 6),
(10, 'London Business School', '2012-09-30 18:00:00', '2012-10-03 18:00:00', 6),
(11, 'SDA Bocconi', '2012-10-08 13:00:00', '2012-10-09 11:00:00', 7),
(12, 'Rotterdam School of Management', '2012-09-30 18:00:00', '2012-10-03 18:00:00', 7),
(14, 'HEC Paris', '2012-09-30 18:00:00', '2012-10-03 18:00:00', 7),
(15, 'Oxford Said', '2012-10-03 18:00:00', '2012-10-09 18:00:00', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
