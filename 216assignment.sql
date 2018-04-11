-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 07:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `jobID` int(11) NOT NULL,
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
  `zip` varchar(255) NOT NULL,
  `jobID` int(11) NOT NULL,
  `averageRating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`email`, `password`, `fullName`, `contactNo`, `address`, `city`, `state`, `zip`, `jobID`, `averageRating`) VALUES
('b@gmail.com', '123', 'Ben Toh', '012-345-9988', '123,jalan mama', 'damansara', 'kl', '12387', 0, 0),
('d@gmail.com', '12345678', 'dae', '012-234-5566', 'jsjdijsdij', 'asss', 'kl', '12344', 16, 3),
('employer1@email.com', '111', 'employer1', '111-111-1111', '11, 12,12334545', 'Jinjang', 'selangor', '68100', 0, 0),
('employer3@email.com', '55555', 'employer3', '111-111-1115', 'Kantin Sek Keb Bbsb Jln Kuala 47000 Sungai Buloh Sungai Buloh 47000 Malaysia Sungai Buloh 47000 Mala', 'Jinjang', 'kl', '68100', 0, 0),
('employer5@email.com', '55555', 'employe5', '222-333-4444', '1234243564', 'Jinjang', 'kl', '68100', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `EmployerRating`
--

CREATE TABLE `EmployerRating` (
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jobID` int(11) NOT NULL,
  `employerEmail` varchar(255) NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EmployerRating`
--

INSERT INTO `EmployerRating` (`Timestamp`, `jobID`, `employerEmail`, `reviewedBy`, `rating`) VALUES
('2018-04-08 12:51:51', 16, 'd@gmail.com', 'nick teh', 3);

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
(4, 'job1', 'unhappy', 25, '2018-12-11', '13:30:00', '15:03:00', '', '', 'available', 'employer1@email.com', 'empty'),
(5, 'job2', 'haha', 12, '2018-03-02', '01:45:00', '14:03:00', 'home', 'gardening', 'available', 'employer1@email.com', 'empty'),
(9, 'Secondary School Tutor', 'Teach secondary school students English and mathematics', 10, '2018-05-14', '11:00:00', '14:00:00', 'work', 'education', 'available', 'b@gmail.com', 'empty'),
(10, 'hello', '1111', 111, '2018-03-11', '10:00:00', '12:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(11, 'hello', '1234', 12, '2018-03-11', '23:00:00', '10:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(12, 'jdjdd', 'ana', 0, '4222-03-12', '12:33:00', '10:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(13, 'hello my girl', '123d', 12, '2017-10-20', '10:00:00', '14:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(14, 'dddd', 'ddasas', 23, '2018-02-20', '22:00:00', '12:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(15, 'ssa', '1dadas', 12, '2017-10-20', '10:00:00', '12:00:00', 'home', 'housework', 'available', 'b@gmail.com', 'empty'),
(16, 'hello', 'skajsdsj', 12, '2018-10-20', '10:00:00', '12:00:00', 'home', 'housework', 'closed', 'd@gmail.com', 'n@gmail.com');

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
  `skillSet` varchar(255) NOT NULL,
  `registeredJobID` int(10) DEFAULT NULL,
  `averageRating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parttimer`
--

INSERT INTO `parttimer` (`email`, `password`, `fullName`, `contactNo`, `address`, `city`, `state`, `zip`, `skillSet`, `registeredJobID`, `averageRating`) VALUES
('n@gmail.com', '12345678', 'nick teh', '016-445-8899', '12, jalan kecil', 'damansara', 'kl', '12345', 'housework', 16, 1.875),
('parttimer2@mail.com', '', 'parttimer2', '333-333-3333', '12345', '12435', 'kl', '77777', 'gardening', NULL, 0),
('parttimer@mail.com', '', 'parttimer1', '111-222-5555', '11, 12,12334545', '12', 'kl', '12345', 'housework', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `PartTimerRating`
--

CREATE TABLE `PartTimerRating` (
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jobID` int(11) NOT NULL,
  `partTimerEmail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `reviewedBy` varchar(255) CHARACTER SET utf8 NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PartTimerRating`
--

INSERT INTO `PartTimerRating` (`Timestamp`, `jobID`, `partTimerEmail`, `reviewedBy`, `rating`) VALUES
('2018-04-08 15:48:28', 16, 'n@gmail.com', 'dae', 0),
('2018-04-08 15:49:11', 16, 'n@gmail.com', 'dae', 0),
('2018-04-08 15:50:50', 16, 'n@gmail.com', 'dae', 4),
('2018-04-08 15:54:50', 16, 'n@gmail.com', 'dae', 3.5);

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
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
