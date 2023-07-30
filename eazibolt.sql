-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 07:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eazibolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isEmail` int(1) NOT NULL,
  `balance` int(11) NOT NULL,
  `EaziboltCoin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `email`, `image`, `password`, `isEmail`, `balance`, `EaziboltCoin`) VALUES
(1, 'firstclass', 'firstclass@gmail.com', 'IMG-20230713-WA0026.jpg', '50c2c77489e2112e9a973e1f3d44e9f8', 1, 100, 0),
(2, 'UGWUGRACE', 'graceugwu249@gmail.com', 'IMG-20230722-WA0008.jpg', 'fdf9cd57e3deced752cc5c30e01ab7b3', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reportdriver`
--

CREATE TABLE `reportdriver` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `driver_id` varchar(255) NOT NULL,
  `Ride_number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `caseStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportdriver`
--

INSERT INTO `reportdriver` (`id`, `user_id`, `driver_id`, `Ride_number`, `title`, `message`, `caseStatus`) VALUES
(1, 1, 'dri7897834543', 'tracking_id7894395849', 'wasting of time', 'he didnot come on time', 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bankname` varchar(400) NOT NULL,
  `accountNumber` int(11) NOT NULL,
  `accountName` varchar(400) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `bankname`, `accountNumber`, `accountName`, `amount`, `date`) VALUES
(1, 1, 'uba', 2147483647, 'micheal', 20, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportdriver`
--
ALTER TABLE `reportdriver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reportdriver`
--
ALTER TABLE `reportdriver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reportdriver`
--
ALTER TABLE `reportdriver`
  ADD CONSTRAINT `reportdriver_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`);

--
-- Constraints for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD CONSTRAINT `withdrawal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
