-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 02:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_central`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `image` mediumblob DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `nip` int(20) NOT NULL,
  `role` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `image` mediumblob DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `role` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `image` mediumblob DEFAULT NULL,
  `item_type` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `rental_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `item_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total_price` int(20) DEFAULT NULL,
  `date_out` date NOT NULL,
  `date_in` date NOT NULL,
  `debit_card_number` int(10) NOT NULL,
  `name_card` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `security_code` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`rental_id`, `customer_id`, `item_id`, `email`, `phone`, `address`, `zip_code`, `amount`, `total_price`, `date_out`, `date_in`, `debit_card_number`, `name_card`, `expiration`, `security_code`, `created_at`) VALUES
(15, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 2, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, NULL),
(16, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 3, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, NULL),
(17, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 3, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, NULL),
(18, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 3, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, NULL),
(19, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 3, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, '2020-11-12 12:47:12'),
(20, NULL, NULL, 'info@ismconsulting.com', 2147483647, 'No. 2\r\nJl. Telekomunikasi', 4025, 3, NULL, '2020-11-12', '2020-11-14', 1234, 'Rusmana', '2020-11-30', 1234, '2020-11-12 12:53:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `fk_item_id` (`item_id`),
  ADD KEY `fk_customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `rental_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
