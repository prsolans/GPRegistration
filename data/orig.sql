-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- Host: egv-vmjmladb01
-- Generation Time: Sep 17, 2013 at 01:21 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `gpr_schools`
--

CREATE TABLE IF NOT EXISTS `gpr_schools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `school` varchar(45) NOT NULL,
  `reg_open` datetime NOT NULL DEFAULT '2011-01-01 00:00:00',
  `reg_close` datetime NOT NULL DEFAULT '2011-01-02 00:00:00',
  `time_offset` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_booth`
--

CREATE TABLE IF NOT EXISTS `gp_reg_booth` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_cmu`
--

CREATE TABLE IF NOT EXISTS `gp_reg_cmu` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_columbia`
--

CREATE TABLE IF NOT EXISTS `gp_reg_columbia` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_cranfield`
--

CREATE TABLE IF NOT EXISTS `gp_reg_cranfield` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_hec`
--

CREATE TABLE IF NOT EXISTS `gp_reg_hec` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_insead`
--

CREATE TABLE IF NOT EXISTS `gp_reg_insead` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_judge`
--

CREATE TABLE IF NOT EXISTS `gp_reg_judge` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_kellogg`
--

CREATE TABLE IF NOT EXISTS `gp_reg_kellogg` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_london`
--

CREATE TABLE IF NOT EXISTS `gp_reg_london` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_michigan`
--

CREATE TABLE IF NOT EXISTS `gp_reg_michigan` (
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

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_oxford`
--

CREATE TABLE IF NOT EXISTS `gp_reg_oxford` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_rotterdam`
--

CREATE TABLE IF NOT EXISTS `gp_reg_rotterdam` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_sda`
--

CREATE TABLE IF NOT EXISTS `gp_reg_sda` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `gp_reg_wharton`
--

CREATE TABLE IF NOT EXISTS `gp_reg_wharton` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
