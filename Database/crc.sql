-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `name`, `mobilenumber`, `address`, `password`) VALUES
(1, 'admin', 'RANJEET PATEL', 7220817628, '123, Sastri Nagar, Jodhpur, Rajasthan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `name`, `mobilenumber`, `address`, `password`) VALUES
(111, 'customer', 'RANJEET PATEL', 7220817628, '125, SASTRI NAGAR Jodhpur', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(6) NOT NULL,
  `item` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item`, `type`, `price`) VALUES
(1, 'Paneer', 'veg', 100),
(2, 'Tikka-Biryani', 'nonveg', 150),
(3, 'Butter-Chicken', 'nonveg', 100),
(4, 'Chikan-Lolipop', 'nonveg', 100),
(5, 'Dum-Biryani', 'nonveg', 120),
(6, 'Veg-Biryani', 'veg', 70),
(7, 'Veg-Pulav', 'veg', 60),
(8, 'Razma', 'veg', 90),
(9, 'Dosa', 'south', 70),
(10, 'Idli(6-pieces)', 'south', 60),
(11, 'Sambhar', 'south', 40),
(12, 'Uththpam', 'south', 80),
(13, 'Chocolate Gateaux', 'dessert', 100),
(14, 'Strawberry Tarts', 'dessert', 120),
(15, 'Chocolate Fudge Cake', 'dessert', 140),
(16, 'Fruit Jelly with Ice Cream', 'dessert', 140),
(17, 'Orange', 'drink', 50),
(18, 'Sprite Lime Flavoured Soft Drink', 'drink', 50),
(19, 'Mello Yello', 'drink', 50),
(20, 'Coca-Cola', 'drink', 50),
(21, 'Merlot', 'wine', 100),
(22, 'Pinot Noir', 'wine', 100),
(23, 'Cabernet Sauvignon', 'wine', 100),
(24, 'Chardonnay', 'wine', 100);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(9) NOT NULL,
  `customer_id` bigint(6) NOT NULL,
  `item` varchar(255) NOT NULL,
  `anysuggestion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '''Order Pending''',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `item`, `anysuggestion`, `status`, `date`) VALUES
(3, 111, 'dessert4- ₹140, drink4- ₹50, wine4- ₹100', '', 'Order Delivered', '2020-06-03 11:29:43'),
(4, 111, 'Paneer- ₹100, Tikka-Biryani- ₹150', '', 'Order Pending', '2020-06-05 05:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` bigint(9) NOT NULL,
  `name` varchar(40) NOT NULL,
  `yourexperience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `name`, `yourexperience`) VALUES
(1, 'Ranjeet Patel', 'It\'s easier to be faithful to a restaurant than it is to a woman'),
(2, 'Amit Kumar', 'It\'s easier to be faithful to a restaurant than it is to a woman'),
(3, 'Rajat Pachauri', 'It\'s easier to be faithful to a restaurant than it is to a woman'),
(4, 'Rajat Pachauri', 'It\'s easier to be faithful to a restaurant than it is to a woman');

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` bigint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
