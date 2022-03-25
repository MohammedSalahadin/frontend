-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2022 at 05:23 PM
-- Server version: 10.4.16-MariaDB-log
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admincustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `companyId` int(11) NOT NULL,
  `companyName` text NOT NULL,
  `webAddress` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `billingAddress` text DEFAULT NULL,
  `streetNumber` text DEFAULT NULL,
  `streetName` text DEFAULT NULL,
  `streetType` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `zip` text DEFAULT NULL,
  `buildingNumber` text DEFAULT NULL,
  `mainPhone` text DEFAULT NULL,
  `fax` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`companyId`, `companyName`, `webAddress`, `note`, `billingAddress`, `streetNumber`, `streetName`, `streetType`, `city`, `state`, `zip`, `buildingNumber`, `mainPhone`, `fax`) VALUES
(9, 'test33', 'website', 'note', NULL, '123', '123', 'Street', 'city', 'CA', '1111', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `shippingAddresses`
--

CREATE TABLE `shippingAddresses` (
  `addressId` int(11) NOT NULL,
  `streetNumber` text NOT NULL,
  `streetName` text NOT NULL,
  `streetType` text NOT NULL,
  `addressLine2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `country` text NOT NULL,
  `buildingNumber` text NOT NULL,
  `addressType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shippingAddresses`
--

INSERT INTO `shippingAddresses` (`addressId`, `streetNumber`, `streetName`, `streetType`, `addressLine2`, `city`, `state`, `zip`, `country`, `buildingNumber`, `addressType`) VALUES
(1, '123', '123', 'Alley', 'address line 2', 'city', 'HI', '1111', 'USA', '123', 'APARTMENT COMPLEX');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `role`) VALUES
(1, 'admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `shippingAddresses`
--
ALTER TABLE `shippingAddresses`
  ADD PRIMARY KEY (`addressId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shippingAddresses`
--
ALTER TABLE `shippingAddresses`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
