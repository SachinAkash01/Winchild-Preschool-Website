-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 01, 2022 at 10:03 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winchilddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `adminName` varchar(20) NOT NULL,
  `telephone` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `adminName`, `telephone`, `address`, `password`) VALUES
('akashmusix01@gmail.com', 'Sachin', 783439022, 'Piliyandala', '152221'),
('winchildadmin@winchild.lk', 'Winchild Admin', 714512189, 'Piliyandala', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `announcementID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`announcementID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcementID`, `title`, `description`, `publish`, `imagePath`, `date`, `email`) VALUES
(47, 'Class Party', 'Christmas party organized by Winchild institute for our very own students will be held on 26th December, 2022.', 1, 'Uploads/img1.jpg', '2022-11-20', 'akashmusix01@gmail.com'),
(48, 'New Year Celebrations', 'Sinhala & Tamil new year celebrations at Winchild institute will be held on 16th April,2022.', 1, 'Uploads/awurudu.jpg', '2022-04-02', 'akashmusix01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

DROP TABLE IF EXISTS `career`;
CREATE TABLE IF NOT EXISTS `career` (
  `careerID` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`careerID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`careerID`, `position`, `description`, `publish`, `imagePath`, `date`, `email`) VALUES
(25, 'Assistant Teacher', 'We are looking for an ambitious female role model who have experienced at least 1 year in pre-school teaching.', 1, 'Uploads/teacher.jpg', '2022-11-23', 'akashmusix01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

DROP TABLE IF EXISTS `guardian`;
CREATE TABLE IF NOT EXISTS `guardian` (
  `email` varchar(100) NOT NULL,
  `guardianName` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`email`, `guardianName`, `telephone`, `occupation`, `address`, `password`) VALUES
('asankakatuwawala@gmail.com', 'Asanka', 714512189, 'Accountant', 'Piliyandala', '123456'),
('sathika@gmail.com', 'Sathika', 772166498, 'Officer Marketing', 'Piliyandala', '987654');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

DROP TABLE IF EXISTS `homework`;
CREATE TABLE IF NOT EXISTS `homework` (
  `homeworkID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `programName` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`homeworkID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`homeworkID`, `title`, `description`, `imagePath`, `programName`, `date`, `email`) VALUES
(42, 'Cookery Day', 'Send 4 pieces of sandwich bread, 1 tomato, 1 boiled egg, and 1 cutting board to do the activities on cookery day held on 30th November, 2022', 'Uploads/20.jpg', 'Lower Nursery', '2022-11-15', 'akashmusix01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `programName` varchar(20) NOT NULL,
  `ageCategory` varchar(20) NOT NULL,
  PRIMARY KEY (`programName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`programName`, `ageCategory`) VALUES
('Play Group', '2 to 3 years'),
('Lower Nursery', '3 to 4 years'),
('Upper Nursery', '4 to 6 years'),
('After School Care', '6 to 10 years');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `programName` varchar(20) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `DoB`, `age`, `gender`, `email`, `programName`) VALUES
(1, 'Pasindu', '2018-01-07', 4, 'Male', 'sathika@gmail.com', 'Upper Nursery'),
(2, 'Manuja', '2020-12-12', 2, 'Male', 'asankakatuwawala@gmail.com', 'Play Group');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
