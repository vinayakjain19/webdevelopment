-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 12:50 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `leavingc`
--

CREATE TABLE IF NOT EXISTS `leavingc` (
  `stuid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `appdate` date NOT NULL,
  `phoneno` int(11) NOT NULL,
  `dop` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `academicyear` int(11) NOT NULL,
  `percentage` float NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `admtype` varchar(20) NOT NULL,
  `school` varchar(40) NOT NULL,
  `lcno` int(11) NOT NULL,
  `grno` int(11) NOT NULL,
  `date` date NOT NULL,
  `delto` varchar(25) NOT NULL,
  `option` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavingc`
--

INSERT INTO `leavingc` (`stuid`, `firstname`, `middlename`, `lastname`, `appdate`, `phoneno`, `dop`, `branch`, `academicyear`, `percentage`, `caste`, `subcaste`, `admtype`, `school`, `lcno`, `grno`, `date`, `delto`, `option`) VALUES
(0, 'vinayak', 'rishabkumar', 'jain', '2019-06-17', 2147483647, '0000-00-00', 'comps', 2016, 82.46, 'jain', 'jain', '1styear', '2014', 123456, 123456, '2019-06-17', 'mam', ''),
(0, 'karan', 'vinod', 'hemdev', '2017-06-16', 2147483647, '2017-06-16', 'comps', 2016, 90, 'open', 'tfws', '1st year', 'jts', 13698, 45689, '2017-06-09', 'hod', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
