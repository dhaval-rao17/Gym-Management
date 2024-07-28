-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2019 at 06:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmc_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `pswd`) VALUES
('admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `aid` int(8) NOT NULL AUTO_INCREMENT,
  `sid` int(8) NOT NULL,
  `enroll` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `package` varchar(40) NOT NULL,
  `amount` varchar(8) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`aid`, `sid`, `enroll`, `name`, `email`, `mob`, `package`, `amount`, `status`) VALUES
(6, 7, 'A-1847', 'vivek kumar', 'vivek@gmail.com', '9078657678', '1 year', '4500', 'paid'),
(5, 3, '2334454', 'ramu', 'ramu@gmail.com', '2435455', '6 month', '2500', 'paid'),
(7, 7, 'A-1847', 'vivek kumar', 'vivek@gmail.com', '9078657678', '6 month', '2500', 'applied');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `mid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `reply` varchar(200) NOT NULL DEFAULT 'no reply',
  `status` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`mid`, `name`, `email`, `sub`, `msg`, `reply`, `status`) VALUES
(2, 'ram', 'ramu@gmail.com', 'diet ', 'what is heavy protien source', 'soya', '1'),
(3, 'vivek', 'vivek@gmail.com', 'food', 'protien', 'no reply', '0');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `eid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `qty` int(8) NOT NULL,
  `weight` int(8) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eid`, `name`, `qty`, `weight`, `brand`, `photo`) VALUES
(1, 'dumble', 8, 2, 'Cosco', 'a.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(4) NOT NULL AUTO_INCREMENT,
  `enroll` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'user.png',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `enroll`, `name`, `email`, `mob`, `pswd`, `photo`) VALUES
(3, '2334454', 'ramu', 'ramu@gmail.com', '2435455', '12345', 'anand.jpg'),
(6, '13233456', 'karan ', 'karan@gmail.com', '1234567890', '123', 'user.png'),
(7, 'A-1847', 'vivek kumar', 'vivek@gmail.com', '9078657678', '12345', 'big-eyes-cute-baby.jpg'),
(10, '12233454', 'ram kumar', 'fv@gmail.com', '7234567834', '123456', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `tid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tid`, `name`, `gen`, `mob`, `email`, `experience`, `photo`) VALUES
(2, 'sunil', 'male', '9030034034', 'sunil@gmail.com', '4 year', 'apple.jpg'),
(3, 'suman', 'female', '9293299', 'suman@gmail.com', '2 year', 'Beautiful-Playing-Baby-Girl-Photo.jpg'),
(4, 'yugal', 'male', '20934909', 'yug@gmail.com', '3 year', 'home.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `bid` int(8) NOT NULL AUTO_INCREMENT,
  `aid` int(8) NOT NULL,
  `sid` int(8) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `cvv` int(3) NOT NULL,
  `amount` int(8) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`bid`, `aid`, `sid`, `ctype`, `cno`, `cname`, `exp`, `cvv`, `amount`) VALUES
(3, 6, 7, 'credit', '1234123412341234', 'vivek', '6/2021', 321, 4779),
(2, 5, 3, 'credit', '4321567812342345', 'ramu', '6/2026', 456, 2655);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
