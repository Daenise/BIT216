-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 10:41 AM
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
('employer1@email.com', '111', 'employer1', '111-111-1111', '11, 12,12334545', 'Jinjang', 'selangor', '68100'),
('employer3@email.com', '55555', 'employer3', '111-111-1115', 'Kantin Sek Keb Bbsb Jln Kuala 47000 Sungai Buloh Sungai Buloh 47000 Malaysia Sungai Buloh 47000 Mala', 'Jinjang', 'kl', '68100'),
('employer5@email.com', '55555', 'employe5', '222-333-4444', '1234243564', 'Jinjang', 'kl', '68100');

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
(5, 'job2', 'haha', 12, '2018-03-02', '01:45:00', '14:03:00', 'home', 'gardening', 'available', 'employer1@email.com', 'empty');

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
('parttimer2@mail.com', '', 'parttimer2', '333-333-3333', '12345', '12435', 'kl', '77777', 'gardening'),
('parttimer@mail.com', '', 'parttimer1', '111-222-5555', '11, 12,12334545', '12', 'kl', '12345', 'housework');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
