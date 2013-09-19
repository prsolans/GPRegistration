-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 07:27 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `globalprize`
--

--
-- Dumping data for table `Schools`
--

INSERT INTO `Schools` (`id`, `name`, `reg_open`, `reg_close`, `time_offset`, `contactname`, `contactemail`, `formurl`) VALUES
(1, 'Carnegie Mellon - Tepper School of Business', '2013-09-21 10:00:00', '2013-09-17 13:00:00', 4, 'Paul Solans', 'prsolans@gmail.com', 'test2'),
(2, 'Columbia Business School', '2013-09-19 11:05:00', '2013-09-27 00:00:00', 4, 'Paul Solans', 'paul.solans@atkearney.com', ''),
(3, 'Kellogg School of Management', '2013-10-01 09:00:00', '2012-10-05 23:59:00', 5, '', '', ''),
(4, 'Chicago Booth School of Business', '2013-09-19 17:50:00', '2013-09-20 12:00:00', 5, '', '', 'http://atkearney.com'),
(5, 'Michigan Ross School of Business', '2012-09-24 08:00:00', '2012-09-28 23:59:00', 4, NULL, NULL, NULL),
(6, 'The Wharton School', '2013-09-19 13:39:00', '2013-09-21 23:00:00', 4, '', '', ''),
(7, 'Cranfield School of Management', '2013-09-30 00:00:00', '2013-10-03 18:00:00', -1, '', '', ''),
(8, 'INSEAD', '2013-10-01 00:00:00', '2013-10-03 18:00:00', -2, '', '', ''),
(9, 'Judge Business School', '2012-09-30 18:00:00', '2012-10-03 18:00:00', -1, NULL, NULL, NULL),
(10, 'London Business School', '2012-09-30 18:00:00', '2012-10-03 18:00:00', -1, NULL, NULL, NULL),
(11, 'SDA Bocconi', '2013-10-08 13:00:00', '2013-10-09 11:00:00', -2, '', '', ''),
(12, 'Rotterdam School of Management', '2012-09-30 18:00:00', '2012-10-03 18:00:00', -2, NULL, NULL, NULL),
(14, 'HEC Paris', '2013-09-30 00:00:00', '2012-10-03 18:00:00', -2, '', '', ''),
(15, 'Oxford Said', '2012-10-03 18:00:00', '2012-10-09 18:00:00', -1, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
