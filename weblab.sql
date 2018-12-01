-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 04:35 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `B2_CS101`
--

CREATE TABLE IF NOT EXISTS `B2_CS101` (
  `enroll_id` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `july_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B2_CS101`
--

INSERT INTO `B2_CS101` (`enroll_id`, `july`, `july_max`) VALUES
(160001, 0, 0),
(160002, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `B2_IT101`
--

CREATE TABLE IF NOT EXISTS `B2_IT101` (
  `enroll_id` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `july_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B2_IT101`
--

INSERT INTO `B2_IT101` (`enroll_id`, `july`, `july_max`) VALUES
(160001, 7, 0),
(160002, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `B3_CS101`
--

CREATE TABLE IF NOT EXISTS `B3_CS101` (
  `enroll_id` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `july_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B3_CS101`
--

INSERT INTO `B3_CS101` (`enroll_id`, `july`, `july_max`) VALUES
(160003, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `B3_IT101`
--

CREATE TABLE IF NOT EXISTS `B3_IT101` (
  `enroll_id` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `july_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `B3_IT101`
--

INSERT INTO `B3_IT101` (`enroll_id`, `july`, `july_max`) VALUES
(160003, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class` varchar(11) NOT NULL,
  `sub` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class`, `sub`) VALUES
('B2', 'CS101'),
('B2', 'IT101'),
('B3', 'CS101'),
('B3', 'IT101');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_reg`
--

CREATE TABLE IF NOT EXISTS `faculty_reg` (
  `fac_id` varchar(26) NOT NULL,
  `fac_name` varchar(26) NOT NULL,
  `fac_pwd` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_reg`
--

INSERT INTO `faculty_reg` (`fac_id`, `fac_name`, `fac_pwd`) VALUES
('IT001', 'fac01', 'IT001'),
('IT002', 'fac02', 'IT002'),
('IT003', 'fac03', 'IT003');

-- --------------------------------------------------------

--
-- Table structure for table `fac_sub`
--

CREATE TABLE IF NOT EXISTS `fac_sub` (
  `fac_id` varchar(26) NOT NULL,
  `class_name` varchar(26) NOT NULL,
  `sub_name` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_sub`
--

INSERT INTO `fac_sub` (`fac_id`, `class_name`, `sub_name`) VALUES
('IT001', 'B2', 'IT101'),
('IT001', 'B3', 'CS101'),
('IT002', 'B3', 'IT101'),
('IT002', 'B2', 'CS101');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE IF NOT EXISTS `student_reg` (
  `enroll_id` int(11) NOT NULL,
  `stu_name` varchar(26) DEFAULT NULL,
  `stu_pwd` varchar(26) NOT NULL,
  `class` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=160004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`enroll_id`, `stu_name`, `stu_pwd`, `class`) VALUES
(160001, 'Mayank', '160001', 'B2'),
(160002, 'Abhishek', '160002', 'B2'),
(160003, 'Garvit', '160003', 'B3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_reg`
--
ALTER TABLE `faculty_reg`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`enroll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=160004;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
