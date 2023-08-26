-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 05:36 PM
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
-- Table structure for table `appydriver`
--

CREATE TABLE `appydriver` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appydriver`
--

INSERT INTO `appydriver` (`id`, `user_id`, `surname`, `firstname`, `lastname`, `address`, `state`, `image`, `status`) VALUES
(2, 1, 'ezea', 'ugchukwu', 'micheal', 'mtd', 'enug', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `card_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 3, 1);

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
(1, 'firstclass', 'firstclass@gmail.com', 'IMG-20230713-WA0026.jpg', '50c2c77489e2112e9a973e1f3d44e9f8', 1, 232000, 0),
(2, 'UGWUGRACE', 'graceugwu249@gmail.com', 'IMG-20230722-WA0008.jpg', 'fdf9cd57e3deced752cc5c30e01ab7b3', 0, 0, 0),
(3, 'maria', 'maria@gmail.com', 'pexels-ketut-subiyanto-4474012.jpg', '263bce650e68ab4e23f28263760b9fa5', 0, 30000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(900) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `amount`, `date`, `status`) VALUES
(1, 1, '6000', '2023-08-03 19:17:59.941662', 0),
(3, 3, '30000', '2023-08-09 12:57:36.401529', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `des`, `image`, `count`, `amount`, `sold`) VALUES
(1, 'phone', 'a very good phone', 'rahul-chakraborty-xsGxhtAsfSA-unsplash.jpg', 1, 34000, 0),
(2, 'laptop', '6G ram', 'glenn-carstens-peters-npxXWgQ33ZQ-unsplash.jpg', 2, 140000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `message`, `time`) VALUES
(1, 1, 'You have place a withdrawal', '2023-08-16 13:58:30.000000'),
(3, 1, 'You sucessfully login', '2023-08-16 14:30:59.000000'),
(4, 1, 'You sucessfully login', '2023-08-16 14:50:46.000000'),
(5, 1, 'You sucessfully login', '2023-08-16 19:24:42.000000'),
(6, 1, 'You sucessfully login', '2023-08-16 20:07:29.000000'),
(7, 1, 'You sucessfully login', '2023-08-17 15:02:16.000000'),
(8, 1, 'You sucessfully login', '2023-08-18 07:32:08.000000'),
(9, 1, 'You sucessfully login', '2023-08-23 20:33:49.000000'),
(10, 1, 'You sucessfully login', '2023-08-24 17:15:06.000000'),
(11, 1, 'You sucessfully login', '2023-08-26 15:30:56.000000');

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
-- Table structure for table `ridelist`
--

CREATE TABLE `ridelist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rideFrom` varchar(255) NOT NULL,
  `rideTo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `houseNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`id`, `user_id`, `items_id`, `state`, `address`, `houseNumber`) VALUES
(1, 1, 2, 0, 'mtd gariki', '56'),
(2, 1, 1, 0, 'enugu ', '52'),
(3, 1, 1, 0, 'imo', '44');

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
  `date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`id`, `user_id`, `bankname`, `accountNumber`, `accountName`, `amount`, `date`, `status`) VALUES
(10, 1, 'zenith', 56789, 'ugochukwu', 45678, '2023-08-16 14:58:30', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appydriver`
--
ALTER TABLE `appydriver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportdriver`
--
ALTER TABLE `reportdriver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ridelist`
--
ALTER TABLE `ridelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appydriver`
--
ALTER TABLE `appydriver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reportdriver`
--
ALTER TABLE `reportdriver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ridelist`
--
ALTER TABLE `ridelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appydriver`
--
ALTER TABLE `appydriver`
  ADD CONSTRAINT `appydriver_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
