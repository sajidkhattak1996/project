-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 04:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bunk_room`
--

CREATE TABLE `bunk_room` (
  `b_room_no` int(11) NOT NULL,
  `nopproom` int(11) NOT NULL,
  `tnoppr` int(11) NOT NULL,
  `cnic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunk_room`
--

INSERT INTO `bunk_room` (`b_room_no`, `nopproom`, `tnoppr`, `cnic`) VALUES
(1, 0, 6, ''),
(2, 0, 6, ''),
(3, 0, 6, ''),
(4, 0, 6, ''),
(5, 0, 6, ''),
(6, 0, 6, ''),
(7, 0, 6, ''),
(8, 0, 6, ''),
(9, 0, 6, ''),
(10, 0, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `exective_room`
--

CREATE TABLE `exective_room` (
  `e_room_no` int(11) NOT NULL,
  `nopproom` int(11) NOT NULL,
  `tnoppr` int(11) NOT NULL,
  `cnic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exective_room`
--

INSERT INTO `exective_room` (`e_room_no`, `nopproom`, `tnoppr`, `cnic`) VALUES
(1, 0, 2, ''),
(2, 0, 2, ''),
(3, 0, 2, ''),
(4, 0, 2, ''),
(5, 0, 2, ''),
(6, 0, 2, ''),
(7, 0, 2, ''),
(8, 0, 2, ''),
(9, 0, 2, ''),
(10, 0, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `branch` varchar(30) NOT NULL,
  `hostel_name` varchar(60) NOT NULL,
  `b_room_no` int(11) NOT NULL,
  `e_room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`branch`, `hostel_name`, `b_room_no`, `e_room_no`) VALUES
('islamabad', 'lahore hostel', 0, 0),
('karachi ', 'karachi hostel', 0, 0),
('lahore ', 'hostel 2', 0, 0),
('mardan', 'mardan hostel', 0, 0),
('peshawar', 'rehman baba hostel no 2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bunk_room`
--
ALTER TABLE `bunk_room`
  ADD PRIMARY KEY (`b_room_no`,`nopproom`),
  ADD KEY `b_room_no` (`b_room_no`),
  ADD KEY `b_room_no_2` (`b_room_no`),
  ADD KEY `cnic` (`cnic`);

--
-- Indexes for table `exective_room`
--
ALTER TABLE `exective_room`
  ADD PRIMARY KEY (`e_room_no`,`nopproom`),
  ADD KEY `e_room_no` (`e_room_no`),
  ADD KEY `cnic` (`cnic`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`branch`),
  ADD KEY `b_room_no` (`b_room_no`),
  ADD KEY `e_room_no` (`e_room_no`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`cnic`),
  ADD KEY `cnic` (`cnic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bunk_room`
--
ALTER TABLE `bunk_room`
  MODIFY `b_room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exective_room`
--
ALTER TABLE `exective_room`
  MODIFY `e_room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
