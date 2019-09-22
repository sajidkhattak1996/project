-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 04:06 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('sajidkhattak', 'sajidktkkpk@gmail.com', 'sajidkhattak12345'),
('kashid', 'kashif@gmail.com', '12345'),
('faheem', 'faheem@gmail.com', '12345'),
('khan', 'sajidktkkpk@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `bunk_room`
--

CREATE TABLE `bunk_room` (
  `b_room_no` int(11) NOT NULL,
  `bnopproom` int(11) NOT NULL,
  `tnoppr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bunk_room`
--

INSERT INTO `bunk_room` (`b_room_no`, `bnopproom`, `tnoppr`) VALUES
(1, 6, 6),
(2, 6, 6),
(3, 6, 6),
(4, 6, 6),
(5, 6, 6),
(6, 6, 6),
(7, 6, 6),
(8, 2, 6),
(9, 0, 6),
(10, 0, 6),
(11, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `exective_room`
--

CREATE TABLE `exective_room` (
  `e_room_no` int(11) NOT NULL,
  `enopproom` int(11) NOT NULL,
  `tnoppr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exective_room`
--

INSERT INTO `exective_room` (`e_room_no`, `enopproom`, `tnoppr`) VALUES
(1, 2, 2),
(2, 2, 2),
(3, 2, 2),
(4, 2, 2),
(5, 1, 2),
(6, 0, 2),
(7, 0, 2),
(8, 0, 2),
(9, 0, 2),
(10, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `brach` varchar(30) NOT NULL,
  `hname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`brach`, `hname`) VALUES
('Islamabad', 'Islamabad Hostel'),
('Karachi', 'Karachi Hostel'),
('Lahore', 'Lahore Hostel'),
('Mardan', 'Mardan Hostel'),
('Peshawar', 'Rehman Baba Hostel no 2');

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
  `booking_date` datetime NOT NULL,
  `brach` varchar(30) NOT NULL,
  `b_room_no` int(3) NOT NULL,
  `e_room_no` int(3) NOT NULL,
  `night` int(5) NOT NULL,
  `checkin_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`firstname`, `lastname`, `fathername`, `cnic`, `email`, `phone_no`, `address`, `booking_date`, `brach`, `b_room_no`, `e_room_no`, `night`, `checkin_date`) VALUES
('sajid', 'kljs', 'muhammad_sajid', '132222243111111111', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-05-11 08:22:25', 'Peshawar', 7, 0, 11, '2019-05-11'),
('sajid', 'lgslkn', 'muhammad_sajid', '1420279089405', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-08-19 02:39:42', 'Peshawar', 8, 0, 6, '2019-08-22'),
('sajid', 'kljs', 'khan', '213442311111', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-05-11 12:23:29', 'Lahore', 0, 4, 18, '2019-05-09'),
('daa', 'lgslkn', 'muhammad_sajid', '23444444444567', 'sajidktkkpk@gmail.com', '03102093992', 'wali khan banda mandwa', '2019-05-10 11:59:06', 'Peshawar', 0, 3, 28, '2019-05-01'),
('daa', 'kljs', 'muhammad_sajid', '244133333333', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-05-11 01:04:08', 'Peshawar', 0, 4, 12, '2019-05-09'),
('daa', 'kljs', 'muhammad_sajid', '34566666666666', 'sajidktkkpk@gmail.com', '43111111111111', 'skldfn#snkalnsd', '2019-05-11 12:02:52', 'Karachi', 6, 0, 17, '2019-05-13'),
('sajid', 'jkldsf', 'muhammad_sajid', '3522222222222222', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-05-11 01:00:53', 'Lahore', 7, 0, 1, '2019-05-15'),
('sajid', 'lgslkn', 'muhammad_sajid', '435112222222', 'sajidktkkpk@gmail.com', '43111111111111', 'wali khan banda mandwa', '2019-05-11 12:06:24', 'Peshawar', 0, 3, 13, '2019-05-16'),
('sajid', 'kljs', 'khan', '754444444444444', 'sajidktkkpk@gmail.com', '398752443534', 'wali khan banda mandwa', '2019-05-11 01:03:22', 'Lahore', 7, 0, 1, '2019-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bunk_room`
--
ALTER TABLE `bunk_room`
  ADD PRIMARY KEY (`b_room_no`,`bnopproom`),
  ADD KEY `b_room_no` (`b_room_no`),
  ADD KEY `b_room_no_2` (`b_room_no`);

--
-- Indexes for table `exective_room`
--
ALTER TABLE `exective_room`
  ADD PRIMARY KEY (`e_room_no`,`enopproom`),
  ADD KEY `e_room_no` (`e_room_no`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`brach`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`cnic`),
  ADD KEY `cnic` (`cnic`),
  ADD KEY `brach` (`brach`,`b_room_no`,`e_room_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bunk_room`
--
ALTER TABLE `bunk_room`
  MODIFY `b_room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exective_room`
--
ALTER TABLE `exective_room`
  MODIFY `e_room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
