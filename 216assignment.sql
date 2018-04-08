-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 06:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `216assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appID` int(50) NOT NULL,
  `jobID` varchar(255) NOT NULL,
  `partTimerEmail` varchar(255) NOT NULL,
  `jobStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`email`, `password`, `fullName`, `contactNo`, `address`, `city`, `state`, `zip`) VALUES
('employee2@email.com', '111', 'employee2', '222-222-2222', '222', '222', 'kl', '22222'),
('employer1@email.com', '888888', 'employer1', '666-888-9999', '11,', 'Jinjang', 'kl', '68100'),
('employer3@email.com', '123456', 'employer3', '111-333-4444', '111333444555', 'Jinjang', 'kl', '68100'),
('employer4@email.com', '444444', 'employer4', '666-666-6666', '567', '345', 'kl', '68100'),
('p@email.com', '56789034', 'employer7', '222-222-2223', '3645244', '1235', 'kl', '3243');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL,
  `date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `employerEmail` varchar(255) NOT NULL,
  `partTimerEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `title`, `scope`, `salary`, `date`, `startTime`, `endTime`, `location`, `skill`, `status`, `employerEmail`, `partTimerEmail`) VALUES
(5, 'trash taking', 'ggggg', 78, '2019-08-08', '02:22:00', '15:33:00', 'home', 'gardening', 'available', 'employer1@email.com', 'empty'),
(6, 'spring clean', 'clean up of a home', 15, '2018-12-11', '13:30:00', '15:30:00', 'work', 'housework', 'available', 'employer1@email.com', 'empty'),
(7, 'applebees', 'asdgbh', 11, '1951-12-01', '13:30:00', '02:45:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(8, 'ggha', 'aasc', 67, '1995-12-01', '02:34:00', '20:23:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(9, 'asdfgher', 'asfgf', 15, '1998-02-02', '01:11:00', '14:22:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(10, 'erghrwh', 'wegrfhg', 45, '1997-02-01', '00:34:00', '12:51:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(11, 'fgherhwer', 'adgfegh', 12, '1994-02-01', '13:30:00', '02:12:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(12, 'awsdgb', 'wqef', 12, '2000-02-01', '02:03:00', '03:04:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(13, 'asdfg', '1234', 11, '2003-02-01', '01:23:00', '14:34:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(14, 'adgfeh', 'SDFG', 67, '2004-12-01', '01:23:00', '15:01:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty'),
(15, 'asdgg', '12465t', 55, '1995-02-01', '01:25:00', '14:02:00', 'home', 'housework', 'available', 'employer1@email.com', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `parttimer`
--

CREATE TABLE `parttimer` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `skillSet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parttimer`
--

INSERT INTO `parttimer` (`email`, `password`, `fullName`, `contactNo`, `address`, `city`, `state`, `zip`, `skillSet`) VALUES
('parttimer1@email.com', '111', 'parttimer1', '222-222-2222', '11 12 1233', 'lala', 'kl', '68100', 'catering'),
('parttimer2@email.com', '22222', 'parttimer2', '222-222-2222', '222', '222', 'kl', '222222', 'gardening');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `parttimer`
--
ALTER TABLE `parttimer`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
