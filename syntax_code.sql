-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2015 at 08:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `syntax_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `lanid` int(11) NOT NULL AUTO_INCREMENT,
  `langname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`lanid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lanid`, `langname`, `status`) VALUES
(2, 'Web development', ''),
(3, 'wab deigning', ''),
(4, 'C#', '');

-- --------------------------------------------------------

--
-- Table structure for table `uprofile`
--

CREATE TABLE IF NOT EXISTS `uprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `uprofile`
--

INSERT INTO `uprofile` (`id`, `fname`, `name`, `email`, `Password`, `birthday`, `Country`, `Location`, `contact`, `gender`, `photo`, `status`) VALUES
(8, 'Jaquan1', 'Kelsor1', 'fingerdawg@gmail.com1', 'Jaquan kel1', '11-MAR-2015', 'AZERBAIJAN', 'Jaquan1', '1-983-383-3743a1', 'Male', 'photo/5524c05f356ccfind_user.png', 'a'),
(11, 'Muhammad', 'muhammad Asif', 'chnavied@gmail.com', '1234', '11-APR-2015', 'AUSTRALIA', 'khanpur', '03028066873', 'Female', 'photo/55239ff5eff2e551ce2d0448db10003523_851657951552124_775373261408434389_n.jpg', 'a'),
(12, 'Muhammad', 'muhammad Asif', 'chnavied@gmail.com', '1234', '11-APR-2015', 'AUSTRALIA', 'khanpur', '03028066873', 'Female', 'photo/5523a00f96dea551ce2d0448db10003523_851657951552124_775373261408434389_n.jpg', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
