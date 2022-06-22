-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 04:01 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findit`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Product_id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Shop_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Product_name` text COLLATE utf8_unicode_ci NOT NULL,
  `Price` float(10,6) DEFAULT NULL,
  `Description` longtext COLLATE utf8_unicode_ci,
  `Image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` enum('recommend','default') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `RecommendedBY` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Shop_id`, `Product_name`, `Price`, `Description`, `Image`, `Type`, `RecommendedBY`, `DateInserted`, `DateUpdated`) VALUES
(1, 1, 'Chicken shoup', 20.000000, 'Good chicken', NULL, 'default', NULL, '2019-08-21 14:15:52', '2019-08-22 12:37:56'),
(2, NULL, 'Cheeken', 0.000000, 'd', NULL, 'recommend', NULL, '2019-08-21 14:15:52', '2019-08-22 12:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Shop_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `Register_no` bigint(20) DEFAULT NULL,
  `Status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'inactive',
  `Established_date` date DEFAULT NULL,
  `Since` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Latitude` float(10,6) DEFAULT NULL,
  `Longitude` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Id`, `User_id`, `Shop_name`, `Address`, `Contact`, `Register_no`, `Status`, `Established_date`, `Since`, `Updated_at`, `Latitude`, `Longitude`) VALUES
(1, 2, 'Dibesh', 'Gaushala\r\nPinglasthan', 9861315234, NULL, 'active', '2019-08-13', '2019-08-21 19:56:47', '2019-08-21 20:04:35', NULL, NULL),
(2, NULL, 'Makertand', 'Gaushala\r\nPinglasthan', 9861315234, NULL, 'active', '0000-00-00', '2019-08-21 20:02:26', '2019-08-21 20:04:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` enum('male','female','others') COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contact` bigint(20) NOT NULL,
  `Email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` enum('admin','vendor') COLLATE utf8_unicode_ci NOT NULL,
  `Status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `Approval` enum('approved','pending','rejected') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `IP` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Gender`, `Contact`, `Email`, `Password`, `Address`, `Image`, `Token`, `Type`, `Status`, `Approval`, `Created_at`, `Updated_at`, `IP`) VALUES
(1, 'Dibesh Subedi', 'male', 9861315234, 'kingraj530@gmail.com', 'a5c5229d4281ca3134e4d26314d7f07a2d3b0c19', 'Gaushala, Pinglasthan', 'Users--20190819053018711.jpg', '6lpG6ryjmHSvagh0rSGgBd9QJoP2CR3bh167BJW9ucl20zJ1vdBQNPPqQ5Jxf3UNC5lYojNUKkrOJtaX8Xyey48ybLUzujV5qkYU', 'admin', 'active', 'approved', '2019-08-19 18:01:34', '2019-08-21 11:21:26', '127.0.0.1'),
(2, 'System', 'male', 986131523, 'system@system.com', '317f1e761f2faa8da781a4762b9dcc2c5cad209a', 'GAushala', NULL, NULL, 'vendor', 'active', 'approved', '2019-08-20 21:40:40', '2019-08-21 20:05:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Image_Reference_Product` (`Product_id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Product_Reference_Shop` (`Shop_id`) USING BTREE;

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_Shop_Reference_User` (`User_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Contact` (`Contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
