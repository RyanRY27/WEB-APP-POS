-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 01:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmms_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `description` varchar(15) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `amount` decimal(10,2) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `views` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `barcode`, `qty`, `amount`, `image`, `date`, `views`, `user_id`) VALUES
(4, '1212', '7777769271168', 1, '1.50', 'uploads/b75777a54d2ec2c26d22ac0ade2ea768a5aead5d_3485.png', '2023-05-03 10:47:36', 0, 'Unknown'),
(5, '1221', '7777606252117', 1, '21.00', 'uploads/87f2925d7dc994265811514385c8a246c81312c7_4927.png', '2023-05-03 10:47:47', 0, 'Unknown'),
(6, 'logo', '7777229633273', 1, '30.00', 'uploads/6234152ec59604edc45d3010170774beec3a30f3_7546.png', '2023-05-03 12:36:36', 0, 'Unknown');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `barcode`, `receipt_no`, `description`, `qty`, `amount`, `total`, `date`, `user_id`) VALUES
(1, '7777606252117', 1, '1221', 5, '21.00', '105.00', '2023-05-03 13:23:37', 'Unknown'),
(2, '7777769271168', 1, '1212', 2, '1.50', '3.00', '2023-05-03 13:23:37', 'Unknown'),
(3, '7777229633273', 1, 'logo', 1, '30.00', '30.00', '2023-05-03 13:23:37', 'Unknown'),
(4, '7777229633273', 2, 'logo', 3, '30.00', '90.00', '2023-05-03 13:26:35', 'Unknown'),
(5, '7777606252117', 2, '1221', 3, '21.00', '63.00', '2023-05-03 13:26:35', 'Unknown'),
(6, '7777606252117', 3, '1221', 4, '21.00', '84.00', '2023-05-03 13:32:44', '1'),
(7, '7777229633273', 3, 'logo', 2, '30.00', '60.00', '2023-05-03 13:32:44', '1'),
(8, '7777769271168', 3, '1212', 3, '1.50', '4.50', '2023-05-03 13:32:44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(500) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `image`, `role`) VALUES
(1, 'ryan_magdalita', 'email@email.com', '$2y$10$tNZN5qByI8zC4IwbCIgxw.R/rjlcIQhLPkg0PDx1yYoW89gxXb1gm', '2023-05-03 13:28:40', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `description` (`description`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `qty` (`qty`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `views` (`views`),
  ADD KEY `date` (`date`),
  ADD KEY `amount` (`amount`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barcode` (`barcode`),
  ADD KEY `description` (`description`),
  ADD KEY `qty` (`qty`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `receipt_no` (`receipt_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `role` (`role`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
