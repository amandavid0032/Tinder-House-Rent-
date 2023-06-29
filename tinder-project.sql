-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 06:52 PM
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
(22, 'AMAN KONDAL', 'amandavid0032@gmail.com', 'sdvdfvdfvdfvdvsdvsd', '2023-06-29 18:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `s.no` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `created.date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`s.no`, `name`, `email`, `password`, `type`, `created.date`) VALUES
(21, 'AMAN KONDAL', 'admin@gmail.com', '123456', 1, '2023-06-29 18:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `s.no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
