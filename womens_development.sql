-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 02:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womens_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Amitava', 'ghosh.amitava272004@gmail.com', '1234'),
(2, 'Amitava', 'ghosh.amitava272004@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `handicraft_id` int(11) NOT NULL,
  `lot_quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `handicraft_id`, `lot_quantity`, `price`) VALUES
(1, 3, 7, 1, 10000.00),
(2, 3, 7, 1, 10000.00),
(3, 3, 8, 3, 50000.00);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `identityproof` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `training_id`, `user_id`, `identityproof`, `address`, `status`) VALUES
(1, 5, 2, '1747201982', 'egrf', 0),
(2, 4, 1, '1747202068', 'SCXV C', 0),
(3, 1, 1, '174720212851e2bdddAjL._SL1280_.jpg', 'rg c', 1),
(4, 5, 3, '1747461889slid.jpg', 'klklkl', 1),
(5, 1, 3, '1747462322slid.jpg', 'er gt r', 0),
(6, 4, 3, '1747462839images (1).jpg', 'lklm.ll;l;l', 0),
(7, 4, 3, '174746397981BIupehFVL._SL1500_.jpg', 'Kolkata', 1);

-- --------------------------------------------------------

--
-- Table structure for table `handicrafts`
--

CREATE TABLE `handicrafts` (
  `hid` int(11) NOT NULL,
  `h_name` varchar(500) NOT NULL,
  `made_by_whom` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `lot` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handicrafts`
--

INSERT INTO `handicrafts` (`hid`, `h_name`, `made_by_whom`, `contact`, `image`, `price`, `lot`, `description`) VALUES
(7, 'Artificial Handicraft', 'Rajesh', '9163907135', '174696500891JmAvzwboL._SL1500_.jpg', '10000.00', '9', 'Good'),
(8, 'Murti', 'Mohit Sharma', '9163907139', '174696525251e2bdddAjL._SL1280_.jpg', '50000.00', '46', 'Excellent'),
(10, 'Chitro', 'Axar Patel', '811115356415', '174696536591UtT5TYrSL._SL1500_.jpg', '7000.00', '11', 'Best');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `tid` int(11) NOT NULL,
  `tr_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `trainer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`tid`, `tr_name`, `duration`, `img`, `pdf`, `description`, `trainer`) VALUES
(1, 'Paper craft', '15 days', '1746968600_81BIupehFVL._SL1500_.jpg', '1746968600_Handicrafts-Student-Workbook.pdf', 'Good', 'Mohan'),
(4, 'Handi craft', '90 days', '1746968766_91WMMK2loaL._SL1500_.jpg', '1746968766_Handicrafts-Student-Workbook.pdf', 'Best', 'Nisi'),
(5, 'Tailoring', '20 days', '1746968988_81LC4l5OymL._SL1500_.jpg', '1746968988_Handicrafts-Student-Workbook.pdf', 'Best Training', 'Yuva');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Amitava Ghosh', 2147483647, 'ghosh.amitava272004@gmail.com', '123'),
(3, 'Jack', 23455643, 'jack@gmail.com', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `handicrafts`
--
ALTER TABLE `handicrafts`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `handicrafts`
--
ALTER TABLE `handicrafts`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
