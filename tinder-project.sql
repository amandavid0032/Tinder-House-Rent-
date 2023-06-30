-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 04:31 PM
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
(37, 0, 'C:xampp	mpphp90D2.tmp', '', 'Flat', '4', '4', 'bhart nagar nabha raod patiala', 'asesdfhgj,', 'Shared', 'Street', 'Centr', 'Yes', 'Pool'),
(38, 29, 'download.jpg', '', 'Flat', '3', '4', 'bhart nagar nabha raod patiala', 'xdfgn', 'Shared', 'Street', 'Centr', 'Yes', 'Pool'),
(39, 31, 'download.jpg', '', 'Flat', '4', '3', 'zscvdfbdvds', 'SAdfghjk', 'In-unit', 'Street', 'Centr', 'Yes', 'Pool'),
(40, 31, 'download.jpg', '', 'Flat', '4', '3', 'zscvdfbdvds', 'SAdfghjk', 'In-unit', 'Street', 'Centr', 'Yes', 'Pool'),
(41, 31, 'download.jpg', '', 'Flat', '4', '3', 'zscvdfbdvds', 'SAdfghjk', 'In-unit', 'Street', 'Centr', 'Yes', 'Pool'),
(43, 40, 'download.jpg', 'download.jpg', 'Flat', '3', '3', 'bhart nagar nabha raod patiala', 'hi am aman from patiala ', 'In-unit', 'Street', 'AC Av', 'Yes', 'Gym');

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
  `created.date` datetime DEFAULT NULL,
  `isfiled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `created.date`, `isfiled`) VALUES
(21, 'AMAN KONDAL', 'admin@gmail.com', '123456', 1, '2023-06-29 18:43:26', 0),
(28, 'AMAN KONDAL', 'aman@gmail.com', '12345', 0, '2023-06-30 10:01:16', 1),
(40, 'AMAN KONDAL', '12@gmail.com', '12', 0, '2023-06-30 15:41:40', 1),
(41, 'AMAN KONDAL', '123@gmail.com', '123', 0, '2023-06-30 15:42:07', 0),
(42, 'AMAN KONDAL', 'aman@gmail.com', '12345', 0, '2023-06-30 16:25:15', 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
