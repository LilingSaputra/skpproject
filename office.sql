-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2012 at 12:51 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `vendor_sn` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `division_id` int(11) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `username`, `fullname`, `password`, `division_id`, `job_position`, `email`, `phone`, `address`, `birthdate`) VALUES
(1, 'franscelstain', 'Fransiscus Gultom', '93429a0d5a7de96a4de7ebc603067074', 1, 'Programmer', 'fransiskusgultom@live.com', '08989300794', 'Bekasi Selatan', '1991-02-04'),
(2, 'gultomers', 'Gultom', '93429a0d5a7de96a4de7ebc603067074', 2, 'Manager HRD', 'fransiskusgultom@live.com', '08989300794', 'Jakarta', '1991-02-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
