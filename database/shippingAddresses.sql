-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 05:01 AM
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
  `addressType` text NOT NULL,
  `companyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shippingAddresses`
--
ALTER TABLE `shippingAddresses`
  ADD PRIMARY KEY (`addressId`),
  ADD KEY `companyId` (`companyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shippingAddresses`
--
ALTER TABLE `shippingAddresses`
  MODIFY `addressId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shippingAddresses`
--
ALTER TABLE `shippingAddresses`
  ADD CONSTRAINT `shippingAddresses_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `companies` (`companyId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
