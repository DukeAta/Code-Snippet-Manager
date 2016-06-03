-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2015 at 10:43 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `syntax_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsnippts`
--

CREATE TABLE IF NOT EXISTS `addsnippts` (
  `sniptsid` int(11) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `languages` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `snippts_status` varchar(20) NOT NULL default 'A',
  `gernal_status` varchar(30) NOT NULL,
  PRIMARY KEY  (`sniptsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `addsnippts`
--

INSERT INTO `addsnippts` (`sniptsid`, `title`, `user`, `languages`, `description`, `date`, `snippts_status`, `gernal_status`) VALUES
(5, 'Loop', 'c@yahoo.com', '2', 'using System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\nzzzz', '2015-04-15 15:53:20', 'A', 'PU'),
(8, 'Featured Courses', 'c@yahoo.com', '1', 'using System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Oze \r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Oze\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Oze', '2015-04-15 13:35:55', 'A', 'PU'),
(9, 'Free Coursesqq', 'c@yahoo.com', '3', 'qqqTest \r\nusing System;\r\nusing Ozeki.Media;\r\nusing Ozeki.VoIP;\r\n\r\nusing System;\r\nusing Ozeki.Media;\r\nusing Oze \r\nz', '2015-04-16 14:04:43', 'A', 'PU');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `favID` int(11) NOT NULL auto_increment,
  `snipID` int(11) NOT NULL,
  `snipName` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `favStatus` varchar(20) NOT NULL default 'A',
  PRIMARY KEY  (`favID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favID`, `snipID`, `snipName`, `language`, `userEmail`, `favStatus`) VALUES
(26, 8, 'Featured Courses', 'Java', 'c@yahoo.com', 'A'),
(35, 5, 'Loop', '2', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `lanid` int(11) NOT NULL auto_increment,
  `langname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`lanid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lanid`, `langname`, `status`) VALUES
(2, 'Web', ''),
(3, 'Java', ''),
(4, 'Algo', '');

-- --------------------------------------------------------

--
-- Table structure for table `threaded_comments`
--

CREATE TABLE IF NOT EXISTS `threaded_comments` (
  `id` int(11) NOT NULL auto_increment,
  `author` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `parent_id` varchar(50) NOT NULL,
  `SaleProductId` int(11) NOT NULL,
  `BuyProductId` int(11) NOT NULL,
  `JobProduct` int(11) NOT NULL,
  `ServiceProduct` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `threaded_comments`
--

INSERT INTO `threaded_comments` (`id`, `author`, `comment`, `created_at`, `parent_id`, `SaleProductId`, `BuyProductId`, `JobProduct`, `ServiceProduct`) VALUES
(1, 'Test', 'q', '2015-04-15 15:28:39', '0', 0, 10, 0, 0),
(2, 'Test', 'zzz', '2015-04-15 15:30:30', '1', 0, 10, 0, 0),
(3, 'Test', 'z', '2015-04-15 15:38:22', '0', 0, 8, 0, 0),
(4, 'Test', 'zzz', '2015-04-15 15:40:10', '0', 0, 10, 0, 0),
(5, 'Test', 'qqq', '2015-04-15 15:47:46', '1', 0, 10, 0, 0),
(6, 'admin', 'qqq bbb b  b', '2015-04-15 15:58:55', '4', 0, 10, 0, 0),
(7, 'admin', 'q', '2015-04-15 16:15:13', '0', 0, 9, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uprofile`
--

CREATE TABLE IF NOT EXISTS `uprofile` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` text NOT NULL,
  `status` varchar(100) NOT NULL default 'a',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `uprofile`
--

INSERT INTO `uprofile` (`id`, `fname`, `name`, `email`, `Password`, `birthday`, `Country`, `Location`, `contact`, `gender`, `photo`, `status`) VALUES
(1, 'admin', '', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '09-APR-2015', 'ALBANIA', '', '', 'Male', '../photo/5528d341da63eadmin.png', 'a'),
(12, 'Muhammad1', 'muhammad Asif1', 'chnavied@gmail.com1', '1234', 'z', 'BAHAMAS', 'khanpur1', '030280668731', 'Male', '../photo/5528d29cb2bb0navied.png', 'a'),
(14, 'Test', 'K-Logo', 'c@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '15-APR-2015', 'ALBANIA', 'Bahawalpur', '3458024881', 'Male', 'photo/552516d07738fnavied.png', 'a');
