-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 06:49 AM
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
  `description` varchar(50) NOT NULL,
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
(7, 'Barbeque', '777770719794', 20, '20.00', 'uploads/c08fe6c546ee103c58a9650f5644fc4b72df40e6_7138.png', '2023-05-11 06:05:56', 3, '1'),
(8, 'Chicken Inasal', '7777585412169', 50, '75.00', 'uploads/d24175ba7e515816b8d244b4beb7dbd6027a5bc4_4387.png', '2023-05-11 06:06:53', 2, '1'),
(9, 'Liempo', '7777433464568', 20, '100.00', 'uploads/ca36bd5d0d7341a5d5058ecb7e3dce4159f12d7b_3990.png', '2023-05-11 06:08:19', 0, '1'),
(10, 'Bangus', '777723410594', 30, '180.00', 'uploads/06d4e04c12be6f3fd472980976aa309548b1b733_5839.png', '2023-05-11 06:09:20', 0, '1'),
(11, 'Tenga ', '7777778471549', 20, '15.00', 'uploads/b78d84a66ed369fa2cd59d9a4e90ef294cfe986a_8613.png', '2023-05-11 06:10:22', 0, '1'),
(12, 'Isaw ng baboy', '7777523931029', 10, '15.00', 'uploads/3149197f95c7dd73d803be0139e71554b26920be_3557.png', '2023-05-11 06:11:06', 0, '1'),
(13, 'Hotdog', '7777487928585', 100, '15.00', 'uploads/ee7a60025759ffcce75c0c5ab45c209e9dac6ace_7160.png', '2023-05-11 06:11:53', 0, '1'),
(15, 'Ulo', '7777822137229', 10, '15.00', 'uploads/d8b090abda3798949d13af4208c4f2b7fd4a35ba_9921.png', '2023-05-11 06:13:20', 0, '1'),
(16, 'Atay', '7777368426470', 10, '15.00', 'uploads/415f1c578b7a2a69d8ddad9227bdd3df99c153a8_4297.png', '2023-05-11 06:13:56', 0, '1'),
(19, 'Isaw ng Manok', '7777325168691', 100, '5.00', 'uploads/921ea3ececf8df148deede11d9b8fe5afecb90bb_2296.png', '2023-05-11 06:16:50', 2, '1'),
(26, 'Pusit', '01189760988', 12, '80.00', 'uploads/d4ff3c9a65ea98ab904d77dc7a96fa5ec91349fd_1077.jpg', '2023-05-18 00:19:40', 0, '1'),
(27, 'logo', '01261744087', 1, '50.00', 'uploads/45747ec8e5ef4f24f8e63d1041c8b6f66ebeb7a4_7078.png', '2023-05-18 01:07:30', 0, '1'),
(28, 'ryan', '0117903126', 1, '2.00', 'uploads/87fc877431becbc3d4a105449124908905906431_5482.png', '2023-05-18 01:08:51', 0, '1'),
(29, 'ryan', '01731279603', 1, '2.00', 'uploads/fa18ea48f570e8d04490e28731796d00da984e9b_8492.png', '2023-05-18 01:08:51', 0, '1'),
(30, 'product', '01863788249', 1, '80.00', 'uploads/05abd81a149a75b9c86c15bd2944057e7bcabc2d_2605.png', '2023-05-18 01:09:07', 0, '1'),
(31, 'dasdddadsa', '01384601530', 1, '52.00', 'uploads/1464cdc77e0320481aba3ee0024a552c9e68e393_5210.png', '2023-05-18 01:09:22', 0, '1'),
(32, 'ham', '01513098728', 1, '8555.00', 'uploads/ebe688b3adb05e634aebb642ace48dd1269934a8_2598.jpg', '2023-05-18 01:09:35', 0, '1'),
(33, '1212', '01182915245', 1, '2312.00', 'uploads/44c5e1723d6f2d531c0b680b807d375c45edf32f_7999.png', '2023-05-18 01:09:57', 0, '1'),
(34, '3213', '014792379', 1, '321312.00', 'uploads/f790218cd1313fba893e13142138aef98be7b48f_4650.jpg', '2023-05-18 01:10:04', 0, '1'),
(35, '212', '01317568276', 1, '21.00', 'uploads/674e4ed2156e9a81d4855b4fb6054638ce972009_8544.png', '2023-05-18 01:10:10', 0, '1'),
(40, 'shittt', '01787426175', 1, '21.00', 'uploads/dc23a3f765af85d19959e97ba43b145fefd8e49a_7753.png', '2023-05-18 01:11:11', 0, '1'),
(41, 'shithead', '01288677570', 1, '12.00', 'uploads/598d3038880bbaa41e16e962c7dcc5b5a48a2b46_4932.png', '2023-05-18 01:12:13', 0, '1'),
(42, 'ham', '01841964365', 1, '21.00', 'uploads/b03200de095fc9a37c23fc5b54fc9bd30fdf618a_9446.png', '2023-05-18 01:12:31', 0, '1'),
(43, '121221', '01456640886', 1, '21.00', 'uploads/92dda00e71849071a263a771391f4c51f3d38aea_3024.png', '2023-05-18 01:17:17', 0, '1'),
(44, 'ryan211', '0131166011', 1, '211.00', 'uploads/e37ed105314882750017bf8325ef2ed27f653968_4548.png', '2023-05-18 01:17:27', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `receipt_no` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `customer_name` varchar(50) DEFAULT 'Unknown',
  `customer_contact` varchar(11) DEFAULT 'Unknown'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `barcode`, `receipt_no`, `description`, `qty`, `amount`, `total`, `date`, `user_id`, `customer_name`, `customer_contact`) VALUES
(1, '7777368426470', 1, 'Atay', 5, '15.00', '75.00', '2023-05-17 00:00:00', '1', 'Unknown', 'Unknown'),
(2, '7777822137229', 1, 'Ulo', 1, '15.00', '15.00', '2023-05-17 17:23:27', '1', 'Unknown', 'Unknown'),
(3, '7777487928585', 1, 'Hotdog', 5, '15.00', '75.00', '2023-05-17 17:23:27', '1', 'Unknown', 'Unknown'),
(4, '7777523931029', 1, 'Isaw ng baboy', 1, '15.00', '15.00', '2023-05-17 17:23:27', '1', 'Unknown', 'Unknown'),
(5, '7777739323347', 2, 'ham', 3, '21.00', '63.00', '2023-05-17 17:23:43', '1', 'Unknown', 'Unknown'),
(6, '7777132704177', 2, 'ryan', 2, '20.00', '40.00', '2023-05-17 17:23:43', '1', 'Unknown', 'Unknown'),
(7, '7777325168691', 2, 'Isaw ng Manok', 2, '5.00', '10.00', '2023-05-17 17:23:43', '1', 'Unknown', 'Unknown'),
(8, '7777368426470', 3, 'Atay', 2, '15.00', '30.00', '2023-05-17 17:24:30', '1', 'Unknown', 'Unknown'),
(9, '7777822137229', 3, 'Ulo', 2, '15.00', '30.00', '2023-05-17 17:24:30', '1', 'Unknown', 'Unknown'),
(10, '7777368426470', 4, 'Atay', 2, '15.00', '30.00', '2023-05-17 17:24:59', '1', 'Unknown', 'Unknown'),
(11, '7777368426470', 5, 'Atay', 2, '15.00', '30.00', '2023-05-17 17:25:48', '1', 'Unknown', 'Unknown'),
(12, '7777325168691', 6, 'Isaw ng Manok', 2, '5.00', '10.00', '2023-05-17 17:26:10', '1', 'Unknown', 'Unknown'),
(13, '7777368426470', 6, 'Atay', 1, '15.00', '15.00', '2023-05-17 17:26:10', '1', 'Unknown', 'Unknown'),
(14, '7777487928585', 7, 'Hotdog', 1, '15.00', '15.00', '2023-05-17 17:26:33', '1', 'Unknown', 'Unknown'),
(15, '7777523931029', 7, 'Isaw ng baboy', 1, '15.00', '15.00', '2023-05-17 17:26:33', '1', 'Unknown', 'Unknown'),
(16, '7777523931029', 8, 'Isaw ng baboy', 4, '15.00', '60.00', '2023-05-17 18:12:18', '1', 'Unknown', 'Unknown'),
(17, '7777487928585', 8, 'Hotdog', 1, '15.00', '15.00', '2023-05-17 18:12:18', '1', 'Unknown', 'Unknown'),
(18, '7777368426470', 9, 'Atay', 3, '15.00', '45.00', '2023-05-17 18:13:27', '1', 'Unknown', 'Unknown'),
(19, '7777822137229', 9, 'Ulo', 1, '15.00', '15.00', '2023-05-17 18:13:27', '1', 'Unknown', 'Unknown'),
(21, '7777822137229', 10, 'Ulo', 4, '15.00', '60.00', '2023-05-17 18:42:08', '1', 'Unknown', 'Unknown'),
(22, '7777487928585', 10, 'Hotdog', 2, '15.00', '30.00', '2023-05-17 18:42:08', '1', 'Unknown', 'Unknown'),
(23, '7777325168691', 11, 'Isaw ng Manok', 2, '5.00', '10.00', '2023-05-17 18:55:51', '1', 'Unknown', 'Unknown'),
(24, '7777368426470', 11, 'Atay', 2, '15.00', '30.00', '2023-05-17 18:55:51', '1', 'Unknown', 'Unknown'),
(27, '7777822137229', 12, 'Ulo', 2, '15.00', '30.00', '2023-05-17 18:57:08', '1', 'Unknown', 'Unknown'),
(28, '7777368426470', 13, 'Atay', 2, '15.00', '30.00', '2023-05-17 19:00:25', '1', 'Unknown', 'Unknown'),
(29, '7777368426470', 14, 'Atay', 1, '15.00', '15.00', '2023-05-17 19:01:59', '1', 'Unknown', 'Unknown'),
(30, '7777739323347', 14, 'ham', 2, '21.00', '42.00', '2023-05-17 19:01:59', '1', 'Unknown', 'Unknown'),
(31, '7777822137229', 15, 'Ulo', 3, '15.00', '45.00', '2023-05-17 19:14:45', '1', 'Unknown', 'Unknown'),
(32, '7777368426470', 16, 'Atay', 2, '15.00', '30.00', '2023-05-17 19:16:33', '1', 'Unknown', 'Unknown'),
(33, '7777368426470', 17, 'Atay', 2, '15.00', '30.00', '2023-05-17 19:22:24', '1', 'Unknown', 'Unknown'),
(34, '7777822137229', 17, 'Ulo', 1, '15.00', '15.00', '2023-05-17 19:22:24', '1', 'Unknown', 'Unknown'),
(35, '7777822137229', 18, 'Ulo', 3, '15.00', '45.00', '2023-05-18 00:08:25', '1', 'Unknown', 'Unknown'),
(36, '7777487928585', 18, 'Hotdog', 1, '15.00', '15.00', '2023-05-18 00:08:25', '1', 'Unknown', 'Unknown'),
(37, '7777487928585', 19, 'Hotdog', 2, '15.00', '30.00', '2023-05-18 00:22:36', '1', 'Unknown', 'Unknown'),
(38, '7777778471549', 20, 'Tenga ', 2, '15.00', '30.00', '2023-05-18 00:40:24', '1', 'Unknown', 'Unknown'),
(39, '777723410594', 20, 'Bangus', 1, '180.00', '180.00', '2023-05-18 00:40:24', '1', 'Unknown', 'Unknown'),
(40, '7777822137229', 21, 'Ulo', 1, '15.00', '15.00', '2023-05-18 00:44:15', '1', 'Unknown', 'Unknown'),
(41, '777723410594', 22, 'Bangus', 1, '180.00', '180.00', '2023-05-18 00:44:21', '1', 'Unknown', 'Unknown'),
(42, '01189760988', 23, 'Pusit', 2, '80.00', '160.00', '2023-05-18 00:51:32', '1', 'Unknown', 'Unknown'),
(43, '7777585412169', 24, 'Chicken Inasal', 7, '75.00', '525.00', '2023-05-18 00:54:29', '1', 'Unknown', 'Unknown'),
(44, '7777585412169', 25, 'Chicken Inasal', 3, '75.00', '225.00', '2023-05-18 00:55:41', '1', 'Unknown', 'Unknown'),
(45, '7777585412169', 26, 'Chicken Inasal', 2, '75.00', '150.00', '2023-05-18 00:56:53', '1', 'Unknown', 'Unknown'),
(46, '7777585412169', 27, 'Chicken Inasal', 2, '75.00', '150.00', '2023-05-18 00:57:16', '1', 'Unknown', 'Unknown'),
(47, '777770719794', 28, 'Barbeque', 1, '20.00', '20.00', '2023-05-18 01:02:01', '1', 'Unknown', 'Unknown'),
(48, '777770719794', 29, 'Barbeque', 1, '20.00', '20.00', '2023-05-18 01:02:06', '1', 'Unknown', 'Unknown'),
(49, '777770719794', 30, 'Barbeque', 3, '20.00', '60.00', '2023-05-18 01:02:19', '1', 'Unknown', 'Unknown'),
(50, '7777325168691', 31, 'Isaw ng Manok', 1, '5.00', '5.00', '2023-05-18 01:03:55', '1', 'Unknown', 'Unknown'),
(51, '7777325168691', 32, 'Isaw ng Manok', 1, '5.00', '5.00', '2023-05-18 01:03:59', '1', 'Unknown', 'Unknown');

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
  `role` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL DEFAULT 'male',
  `remove_user` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `date`, `image`, `role`, `gender`, `remove_user`) VALUES
(1, 'ryanshit', 'email@email.com', '$2y$10$tNZN5qByI8zC4IwbCIgxw.R/rjlcIQhLPkg0PDx1yYoW89gxXb1gm', '2023-05-03 13:28:40', '', 'admin', 'female', 0),
(2, 'Ryan', 'email1@gmail.com', '$2y$10$7o9P3XXDlTRCcRyO1yzo4.vNvzsBxsbo5AMLT7Q5c4IRIKYpWA9CC', '2023-05-03 00:00:00', '', 'owner', 'male', 1);

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
  ADD KEY `receipt_no` (`receipt_no`),
  ADD KEY `amount` (`amount`),
  ADD KEY `total` (`total`),
  ADD KEY `customer_name` (`customer_name`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
