-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2019 at 08:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ibm_hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `electric`
--

CREATE TABLE IF NOT EXISTS `electric` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dateprob` date NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electric`
--

INSERT INTO `electric` (`name`, `mobile`, `dateprob`, `location`) VALUES
('abcd', '9909', '1999-08-30', 'potheri'),
('abcdju124', 'sdfgsrgg', '2019-09-30', 'potheri');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `person_mob` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `mobile`, `person_name`, `person_mob`, `location`, `image`) VALUES
('abcd', '9909', 'efgh', '1234', 'chengapettu', 0x70726f66696c652d696d6167652e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE IF NOT EXISTS `road` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`name`, `mobile`, `location`, `image`) VALUES
('abcd', '9909', 'potheri', ''),
('abcd', '9909', 'potheri', ''),
('abcd', '99099', 'tambaram', ''),
('abcd', '9909', 'potheri', ''),
('abcd', '9909', 'potheri', ''),
('abcd', '9909', 'potheri', ''),
('abcd', '9909', 'abcdefg', 0x7069633038),
('abcd', '9909', 'abcdefg', 0x7069633038),
('abcd', '9909', 'abcdefg', 0x7069633038),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67),
('abcd', '99099', 'potheri', 0x70726f66696c652d696d6167652e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE IF NOT EXISTS `water` (
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dateprob` date NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`name`, `mobile`, `dateprob`, `location`) VALUES
('abcd', '9909', '1999-08-30', 'potheri');
