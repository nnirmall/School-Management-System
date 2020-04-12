-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 06:45 PM
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
-- Database: `studentregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `RegNo` int(11) NOT NULL DEFAULT '0',
  `Street` varchar(20) NOT NULL DEFAULT '',
  `District` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`RegNo`, `Street`, `District`) VALUES
(1, '', ''),
(2, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, '', ''),
(13, '', ''),
(14, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evn`
--

CREATE TABLE `evn` (
  `id` int(11) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `DD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evn`
--

INSERT INTO `evn` (`id`, `Event`, `DD`) VALUES
(0, 'School is Closed from 23Jan to 25Jan ', 2010),
(0, 'School will open from 26 jan 2010', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `WokingYear` int(11) NOT NULL,
  `EmailAddress` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Name`, `DOB`, `PhoneNo`, `Gender`, `WokingYear`, `EmailAddress`, `City`, `Street`, `District`, `Fname`, `Lname`, `Address`) VALUES
(0, 'Shubh Raj Dhital', '1998-05-05', 2147483647, 'Male', 0, 'shubhrajdhital@gmail', '', '', '', '', '', 'Kritipur'),
(0, 'Shubh Raj Dhital', '1998-05-05', 2147483647, 'Male', 0, 'shubhrajdhital@gmail', '', '', '', '', '', 'Kritipur'),
(0, 'Shubh Raj Dhital', '1998-05-05', 2147483647, 'Male', 0, 'shubhrajdhital@gmail', '', '', '', '', '', 'Kritipur'),
(0, 'Shubh Raj Dhital', '1998-05-05', 2147483647, 'Male', 0, 'shubhrajdhital@gmail', '', '', '', '', '', 'Kritipur'),
(0, 'Shubh Raj Dhital', '1999-10-24', 2147483647, 'Male', 2010, 'shubhrajdhital@gmail', '', '', '', '', '', 'Kritipur');

-- --------------------------------------------------------

--
-- Table structure for table `staffusers`
--

CREATE TABLE `staffusers` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffusers`
--

INSERT INTO `staffusers` (`userid`, `password`) VALUES
('Sita', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `RegNo` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Grade` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `EnrollingYear` int(11) NOT NULL,
  `EmailAddress` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`RegNo`, `Name`, `Address`, `Course`, `DOB`, `PhoneNo`, `Gender`, `Grade`, `Department`, `EnrollingYear`, `EmailAddress`, `Fname`, `Lname`) VALUES
(15, 'Julesh Shrestha', 'Illam', 'CS', '1996-05-31', 2147483647, 'Male', 'A-', 'Computer', 2016, 'juleshshrestha@gmail', '', ''),
(16, 'Injal Bhattarai', 'Inarawa', 'ES', '1996-07-29', 2147483647, 'Male', 'A++', 'Environment Science', 2016, 'injalbhattarai@gmail', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentusers`
--

CREATE TABLE `studentusers` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentusers`
--

INSERT INTO `studentusers` (`userid`, `password`) VALUES
('Hari', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `EnrollingYear` int(11) NOT NULL,
  `EmailAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `Name`, `Course`, `Address`, `DOB`, `PhoneNo`, `Gender`, `Department`, `EnrollingYear`, `EmailAddress`) VALUES
(0, 'Hari', 'Cs', 'KUBH', '1996-05-31', 2147483647, 'Male', 'Computer', 2016, 'hari@gmail.com'),
(0, 'Sajal Paudyal', 'Power', 'Baneshwor', '1996-07-17', 2147483647, 'Male', 'Mechanical', 2009, 'sajalpaudyalktomoh@g'),
(0, 'Satyam Karki', 'civil 203', 'Birathnagar', '1996-07-17', 2147483647, 'Male', 'Civil', 2009, 'satyamkarki@gmail.co'),
(0, 'nirmal', 'computer', 'urlabari', '1996-05-31', 2147483647, 'male', 'Computerscicence', 2019, 'nnirmallvhandariee@g'),
(0, 'nirmal', 'computer', 'urlabari', '1996-05-31', 0, 'male', 'Computerscicence', 2019, 'nnirmallvhandariee@g'),
(0, '', '', '', '0000-00-00', 0, '', '', 0, ''),
(0, '', '', '', '0000-00-00', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `teacherusers`
--

CREATE TABLE `teacherusers` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherusers`
--

INSERT INTO `teacherusers` (`userid`, `password`) VALUES
('Ram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`) VALUES
('nirmal', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RegNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`(10));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `RegNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
