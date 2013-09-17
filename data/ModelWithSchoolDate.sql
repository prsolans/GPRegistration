-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2013 at 09:58 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `globalprize`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpr_schools`
--
USE globalprize;

CREATE TABLE `Schools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `reg_open` datetime NOT NULL DEFAULT '2011-01-01 00:00:00',
  `reg_close` datetime NOT NULL DEFAULT '2011-01-02 00:00:00',
  `time_offset` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `Schools`
--

INSERT INTO `Schools` (`id`, `name`, `reg_open`, `reg_close`, `time_offset`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_booth`
--

CREATE TABLE `Registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `team_name` varchar(255) NOT NULL,
  `team_1` varchar(255) NOT NULL,
  `team_1_email` varchar(255) NOT NULL,
  `team_1_phone` varchar(255) NOT NULL,
  `team_2` varchar(255) NOT NULL,
  `team_2_email` varchar(255) NOT NULL,
  `team_3` varchar(255) NOT NULL,
  `team_3_email` varchar(255) NOT NULL,
  `team_4` varchar(255) NOT NULL,
  `team_4_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;



