-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 11:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinder-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accpect-reject`
--

CREATE TABLE `accpect-reject` (
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accpect-reject`
--

INSERT INTO `accpect-reject` (`aid`, `id`, `type`) VALUES
(3, 45, 1),
(4, 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(21, 'david aman kondal', 'amandavid0032@gmail.com', 'hi am aman from patiala i have a issue in resestion ', NULL),
(22, 'AMAN KONDAL', 'amandavid0032@gmail.com', 'sdvdfvdfvdfvdvsdvsd', '2023-06-29 18:49:01'),
(23, 'AMAN KONDAL', 'amandavid0032@gmail.com', 'xcvfdvfd', '2023-06-30 08:19:31'),
(24, 'serdfghmn', 'amandavid9956@gmail.com', 'wqefefegv', '2023-06-30 16:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(200) NOT NULL,
  `uid` int(20) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `roomimage` varchar(500) DEFAULT NULL,
  `propertytype` varchar(20) NOT NULL,
  `bedrooms` varchar(10) NOT NULL,
  `bathrooms` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `laundry` varchar(10) NOT NULL,
  `parking` varchar(10) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `heating` varchar(10) NOT NULL,
  `amenities` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `uid`, `image`, `roomimage`, `propertytype`, `bedrooms`, `bathrooms`, `address`, `description`, `laundry`, `parking`, `ac`, `heating`, `amenities`) VALUES
(4, 45, 'object-dot.png', 'object-dot.png', '', '3', '3', 'ASdfgh', 'asdfgvbnm ', 'Shared', 'Street', 'Centr', 'Yes', 'Pool'),
(46, 46, 'object-dot.png', 'object-dot.png', 'House', '3', '3', 'bhart nagar nabha raod patiala', 'Sdfghbn', 'In-unit', 'Street', 'Centr', 'Yes', 'Pool');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` int(11) DEFAULT 0,
  `createddate` datetime DEFAULT NULL,
  `isfiled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `createddate`, `isfiled`) VALUES
(21, 'AMAN KONDAL', 'admin@gmail.com', '123456', 1, '2023-06-29 18:43:26', 0),
(45, 'AMAN KONDAL', '1@gmail.com', '12', 0, '2023-06-30 21:00:39', 1),
(46, 'Jaya Devi', '123456@gmail.com', '12', 0, '2023-06-30 21:01:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accpect-reject`
--
ALTER TABLE `accpect-reject`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accpect-reject`
--
ALTER TABLE `accpect-reject`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
