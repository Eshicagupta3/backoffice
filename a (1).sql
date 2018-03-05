-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `datetime` datetime NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `mob1` int(11) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `mob2` int(11) NOT NULL,
  `prize1` int(11) NOT NULL,
  `prize2` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contact`, `course`, `branch`, `year`, `rollno`) VALUES
(12, 'es', 'eshicagupta3@gmail.com', 2147483647, 'Btech', 'EC', 1, 1509121025),
(13, 'isha', 'eshicagupta3@gmail.com', 123, 'Btech', 'EC', 1, 56),
(14, 'es', 'y@gm.com', 2147483647, 'Btech', 'EC', 1, 888),
(15, 'ishika', 'eshicagupta3@gmail.com', 12344, 'Btech', 'EC', 1, 1509121025);

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zealid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eid` (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `society` (`id`);

--
-- Constraints for table `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `winner_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `event` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
