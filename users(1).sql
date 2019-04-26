-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 04:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `ID` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`ID`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `bday` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `sscyear` varchar(40) NOT NULL,
  `hscyear` varchar(40) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `addroll` int(50) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `choice1` varchar(50) NOT NULL,
  `choice2` varchar(50) NOT NULL,
  `choice3` varchar(50) NOT NULL,
  `choice4` varchar(50) NOT NULL,
  `choice5` varchar(50) NOT NULL,
  `rank` int(10) NOT NULL,
  `district` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `allot` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `father_name`, `mother_name`, `telephone`, `user_email`, `bday`, `religion`, `nationality`, `sscyear`, `hscyear`, `bloodgroup`, `addroll`, `unit`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `rank`, `district`, `area`, `allot`) VALUES
(1, 'miskat', 'Ali', 'jannat', '234', 'miskat@gmail.com', '0000-00-00', 'islam', 'bangladeshi', '2014', '2016', 'A+', 301, 'A', 'cste', 'ice', 'se', 'eee', 'math', 1, 'chittagong', 'bakolia', 'CSTE'),
(2, 'Shithil', 'kutub Uddin', 'Mehbuba', '1234', 'nj@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 302, 'A', 'cste', 'se', 'ice', 'eee', 'math', 2, 'Dhaka', 'md pur', 'CSTE'),
(18, 'Shithil', 'kutub Uddin', 'Mehbuba', '1234', 'nj@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 307, 'A', 'cste', 'se', 'ice', 'eee', 'math', 7, 'Dhaka', 'md pur', 'ICE'),
(19, 'Farhad', 'nizam Uddin', 'nazma', '1234', 'farhad@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 303, 'A', 'cste', 'se', 'ice', 'eee', 'math', 3, 'Dhaka', 'md pur', 'CSTE'),
(20, 'zisan', 'jalal Uddin', 'nazma', '1234', 'zisan@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 304, 'A', 'cste', 'se', 'ice', 'eee', 'math', 4, 'comilla', 'md pur', 'SE'),
(21, 'rakib', 'kutub mia', 'asma', '1234', 'rakib@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 305, 'A', 'cste', 'se', 'ice', 'eee', 'math', 5, 'Dhaka', 'md pur', 'SE'),
(22, 'rima', 'kutub Uddin', 'Mehbuba', '1234', 'rima@gmail.com', '0000-00-00', 'Islam', 'Bangladeshi', '2014', '2016', 'A+', 306, 'A', 'cste', 'se', 'ice', 'eee', 'math', 6, 'Dhaka', 'md pur', 'ICE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `hsc_roll` int(50) NOT NULL,
  `hsc_reg` int(50) NOT NULL,
  `ad_roll` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `hsc_roll`, `hsc_reg`, `ad_roll`) VALUES
(1, 101, 201, 301),
(2, 102, 202, 302),
(3, 103, 203, 303),
(12, 104, 204, 304),
(13, 105, 205, 305),
(14, 106, 206, 306),
(15, 107, 207, 307),
(16, 108, 208, 308),
(17, 109, 209, 309),
(18, 110, 210, 310),
(19, 111, 211, 311),
(150, 800, 1050, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rank` (`rank`),
  ADD UNIQUE KEY `addroll` (`addroll`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hsc_roll` (`hsc_roll`),
  ADD UNIQUE KEY `hsc_reg` (`hsc_reg`),
  ADD UNIQUE KEY `ad_roll` (`ad_roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
