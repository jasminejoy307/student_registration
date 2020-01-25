-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 11:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `deptname` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `adminid` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `dob`, `email`, `gender`, `phoneno`, `deptname`, `qualification`, `adminid`, `password`) VALUES
('admin', '2020-01-05', 'admin@gmail.com', 'male', 99876432, 'cse', 'mtech', 1321, 'admin123'),
('asha', '1995-01-19', 'asha@gmail.com', 'female', 995432167, 'cse', 'mtech', 1421, 'asha');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeid` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `begdate` date NOT NULL,
  `author` varchar(10) NOT NULL,
  `enddate` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `adminid` int(10) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeid`, `title`, `begdate`, `author`, `enddate`, `description`, `adminid`, `semester`) VALUES
(1, 'seminar', '2020-01-04', 'hod', '2020-01-05', 'java description board', 1321, 4),
(1, 'seminar', '2020-01-04', 'hod', '2020-01-05', 'java description board', 1321, 4),
(1, 'seminar', '2020-01-04', 'hod', '2020-01-05', 'java description board', 1321, 4),
(1, 'seminar', '2020-01-04', 'hod', '2020-01-05', 'java description board', 1321, 4),
(2, 'workshop', '2020-01-04', 'hod', '2020-01-09', 'django workshop', 1321, 2),
(2, 'workshop', '2020-01-04', 'hod', '2020-01-09', 'django workshop', 1321, 2),
(3, 'internship', '2020-01-02', 'hod', '2020-01-08', 'keltron internship', 1321, 3),
(4, 'arts day', '2020-01-04', 'advisor', '2020-01-08', 'college arts day', 1421, 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `name` varchar(20) NOT NULL,
  `regno` int(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `deptname` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`name`, `regno`, `dob`, `email`, `gender`, `phoneno`, `deptname`, `qualification`, `batch`, `username`, `password`, `semester`) VALUES
('jasmine joy', 111, '2018-12-14', 'jas@gmail.com', 'female', 99345217, 'cse', 'btech', 'jsd2', 'jasmine', 'jas', 2),
('josy', 121, '2019-07-05', 'josy@gmail.com', 'female', 99564321, 'cse', 'btech', 'jsd2', 'josy', 'josy', 3),
('anija', 150, '2020-01-03', 'anija@gmail.com', 'female', 734933254, 'cse', 'MBBS', 'ui', 'anija', 'anija', 4);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `regno` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `subjectname` varchar(11) NOT NULL,
  `result` varchar(10) NOT NULL,
  `credits` int(10) NOT NULL,
  `totalgpa` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`regno`, `username`, `code`, `subjectname`, `result`, `credits`, `totalgpa`) VALUES
(111, 'jasmine', 1201, 'java', 'a+', 4, '9'),
(150, 'anija', 121, 'java', 'a+', 4, '9'),
(121, 'josy', 121, 'java', 'a+', 5, '10'),
(100, 'aaron', 121, 'python', 'a+', 5, '10');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `year` date NOT NULL,
  `creadit` int(10) NOT NULL,
  `subjectname` varchar(10) NOT NULL,
  `adminid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `semester`, `year`, `creadit`, `subjectname`, `adminid`) VALUES
(121, 2, '2020-01-03', 4, 'java', 1321),
(141, 4, '2020-01-11', 3, 'python', 1321),
(131, 3, '2020-01-09', 5, 'php', 1321);

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `subjectname` varchar(20) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `adminid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`subjectname`, `coursename`, `adminid`) VALUES
('php', '1201', 1321);

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`) VALUES
('superuser', 'superuser123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `semester` int(10) NOT NULL,
  `day` varchar(20) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `code` int(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `adminid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`semester`, `day`, `subjectname`, `coursename`, `code`, `time`, `adminid`) VALUES
(4, 'monday', 'java', 'btech', 121, '10.30 AM', 1321),
(4, 'tuesday', 'php', 'btech', 131, '1.30 PM', 1321),
(3, 'wednesday', 'python', 'btech', 141, '9.30 AM', 1321),
(3, 'wednesday', 'python', 'btech', 141, '9.30 AM', 1321),
(2, 'tuesday', 'php', 'btech', 131, '1.30 PM', 1321);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
