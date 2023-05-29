-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2023 at 12:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `adminUsername` varchar(50) NOT NULL,
  `adminPassword` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `lastLoggedOn` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cartItems`
--

CREATE TABLE `cartItems` (
  `cartItemsId` int(11) NOT NULL,
  `shoppingSessionId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `cartItemQuantity` int(11) NOT NULL,
  `cartItemCreatedDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discountCode`
--

CREATE TABLE `discountCode` (
  `discountCodeId` int(11) NOT NULL,
  `discountCodeForCheckout` varchar(128) NOT NULL,
  `discountPercentage` int(3) NOT NULL,
  `createdDate` datetime DEFAULT current_timestamp(),
  `expiryDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderDetails`
--

CREATE TABLE `orderDetails` (
  `orderDetailsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `orderTotal` float NOT NULL,
  `orderTaxTotal` float NOT NULL,
  `shippingDate` datetime DEFAULT current_timestamp(),
  `billingDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(128) NOT NULL,
  `productPrice` float NOT NULL,
  `category` varchar(128) NOT NULL,
  `unitsInStock` int(11) NOT NULL,
  `averageRating` float NOT NULL,
  `size` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `category`, `unitsInStock`, `averageRating`, `size`) VALUES
(1, 'SuperOversized Bundle Beige', 70, 'Bundle', 46, 4.1, 'XS'),
(2, 'SuperOversized Bundle Beige', 70, 'Bundle', 17, 4.1, 'S'),
(3, 'SuperOversized Bundle Beige', 70, 'Bundle', 60, 4.1, 'M'),
(4, 'SuperOversized Bundle Beige', 70, 'Bundle', 51, 4.1, 'L'),
(5, 'SuperOversized Bundle Beige', 70, 'Bundle', 19, 4.1, 'XL'),
(6, 'SuperOversized Bundle Grey', 70, 'Bundle', 12, 3.4, 'XS'),
(7, 'SuperOversized Bundle Grey', 70, 'Bundle', 22, 3.4, 'S'),
(8, 'SuperOversized Bundle Grey', 70, 'Bundle', 40, 3.4, 'M'),
(9, 'SuperOversized Bundle Grey', 70, 'Bundle', 3, 3.4, 'L'),
(10, 'SuperOversized Bundle Grey', 70, 'Bundle', 60, 3.4, 'XL'),
(11, 'SuperOversized Beige Sweats', 45, 'Sweats', 2, 3.7, 'XS'),
(12, 'SuperOversized Beige Sweats', 45, 'Sweats', 21, 3.7, 'S'),
(13, 'SuperOversized Beige Sweats', 45, 'Sweats', 46, 3.7, 'M'),
(14, 'SuperOversized Beige Sweats', 45, 'Sweats', 31, 3.7, 'L'),
(15, 'SuperOversized Beige Sweats', 45, 'Sweats', 23, 3.7, 'XL'),
(16, 'SuperOversized Grey Sweats', 45, 'Sweats', 43, 3.7, 'XS'),
(17, 'SuperOversized Grey Sweats', 45, 'Sweats', 50, 3.7, 'S'),
(18, 'SuperOversized Grey Sweats', 45, 'Sweats', 6, 3.7, 'M'),
(19, 'SuperOversized Grey Sweats', 45, 'Sweats', 38, 3.7, 'L'),
(20, 'SuperOversized Grey Sweats', 45, 'Sweats', 30, 3.7, 'XL'),
(21, 'SuperOversized Hoodie Beige', 50, 'Hoodies', 41, 4.4, 'XS'),
(22, 'SuperOversized Hoodie Beige', 50, 'Hoodies', 55, 4.4, 'S'),
(23, 'SuperOversized Hoodie Beige', 50, 'Hoodies', 9, 4.4, 'M'),
(24, 'SuperOversized Hoodie Beige', 50, 'Hoodies', 1, 4.4, 'L'),
(25, 'SuperOversized Hoodie Beige', 50, 'Hoodies', 11, 4.4, 'XL'),
(26, 'SuperOversized Hoodie Grey', 50, 'Hoodies', 1, 4.1, 'XS'),
(27, 'SuperOversized Hoodie Grey', 50, 'Hoodies', 25, 4.1, 'S'),
(28, 'SuperOversized Hoodie Grey', 50, 'Hoodies', 13, 4.1, 'M'),
(29, 'SuperOversized Hoodie Grey', 50, 'Hoodies', 41, 4.1, 'L'),
(30, 'SuperOversized Hoodie Grey', 50, 'Hoodies', 21, 4.1, 'XL'),
(31, 'SuperOversized Black Tee', 25, 'Tees', 43, 2.8, 'XS'),
(32, 'SuperOversized Black Tee', 25, 'Tees', 14, 2.8, 'S'),
(33, 'SuperOversized Black Tee', 25, 'Tees', 10, 2.8, 'M'),
(34, 'SuperOversized Black Tee', 25, 'Tees', 39, 2.8, 'L'),
(35, 'SuperOversized Black Tee', 25, 'Tees', 32, 2.8, 'XL'),
(36, 'Welfare Hoodie White', 60, 'Hoodies', 16, 4.7, 'XS'),
(37, 'Welfare Hoodie White', 60, 'Hoodies', 45, 4.7, 'S'),
(38, 'Welfare Hoodie White', 60, 'Hoodies', 20, 4.7, 'M'),
(39, 'Welfare Hoodie White', 60, 'Hoodies', 32, 4.7, 'L'),
(40, 'Welfare Hoodie White', 60, 'Hoodies', 46, 4.7, 'XL'),
(41, 'Welfare Hoodie Black', 60, 'Hoodies', 19, 4, 'XS'),
(42, 'Welfare Hoodie Black', 60, 'Hoodies', 23, 4, 'S'),
(43, 'Welfare Hoodie Black', 60, 'Hoodies', 44, 4, 'M'),
(44, 'Welfare Hoodie Black', 60, 'Hoodies', 14, 4, 'L'),
(45, 'Welfare Hoodie Black', 60, 'Hoodies', 26, 4, 'XL'),
(46, 'Persist Long Sleeve Tee Marl Grey', 25, 'Tees', 53, 2.1, 'XS'),
(47, 'Persist Long Sleeve Tee Marl Grey', 25, 'Tees', 43, 2.1, 'S'),
(48, 'Persist Long Sleeve Tee Marl Grey', 25, 'Tees', 59, 2.1, 'M'),
(49, 'Persist Long Sleeve Tee Marl Grey', 25, 'Tees', 36, 2.1, 'L'),
(50, 'Persist Long Sleeve Tee Marl Grey', 25, 'Tees', 51, 2.1, 'XL'),
(51, 'Persist Long Sleeve Tee Black', 25, 'Tees', 5, 3.2, 'XS'),
(52, 'Persist Long Sleeve Tee Black', 25, 'Tees', 52, 3.2, 'S'),
(53, 'Persist Long Sleeve Tee Black', 25, 'Tees', 30, 3.2, 'M'),
(54, 'Persist Long Sleeve Tee Black', 25, 'Tees', 5, 3.2, 'L'),
(55, 'Persist Long Sleeve Tee Black', 25, 'Tees', 48, 3.2, 'XL'),
(56, 'Limited Edition Blue Denim Jacket', 60, 'Tees', 56, 2.9, 'XS'),
(57, 'Limited Edition Blue Denim Jacket', 60, 'Tees', 13, 2.9, 'S'),
(58, 'Limited Edition Blue Denim Jacket', 60, 'Tees', 41, 2.9, 'M'),
(59, 'Limited Edition Blue Denim Jacket', 60, 'Tees', 39, 2.9, 'L'),
(60, 'Limited Edition Blue Denim Jacket', 60, 'Tees', 23, 2.9, 'XL'),
(61, 'Welfare Shorts Black', 25, 'Sweats', 34, 3.1, 'XS'),
(62, 'Welfare Shorts Black', 25, 'Sweats', 40, 3.1, 'S'),
(63, 'Welfare Shorts Black', 25, 'Sweats', 6, 3.1, 'M'),
(64, 'Welfare Shorts Black', 25, 'Sweats', 38, 3.1, 'L'),
(65, 'Welfare Shorts Black', 25, 'Sweats', 50, 3.1, 'XL'),
(66, 'Original 3 Pack of White Socks', 12, 'Accessories', 56, 2.9, 'XS'),
(67, 'Original 3 Pack of White Socks', 12, 'Accessories', 45, 2.9, 'S'),
(68, 'Original 3 Pack of White Socks', 12, 'Accessories', 5, 2.9, 'M'),
(69, 'Original 3 Pack of White Socks', 12, 'Accessories', 15, 2.9, 'L'),
(70, 'Original 3 Pack of White Socks', 12, 'Accessories', 17, 2.9, 'XL'),
(71, 'Original Suede Cap White', 25, 'Accessories', 49, 3.2, 'XS'),
(72, 'Original Suede Cap White', 25, 'Accessories', 35, 3.2, 'S'),
(73, 'Original Suede Cap White', 25, 'Accessories', 49, 3.2, 'M'),
(74, 'Original Suede Cap White', 25, 'Accessories', 58, 3.2, 'L'),
(75, 'Original Suede Cap White', 25, 'Accessories', 57, 3.2, 'XL'),
(76, 'Simplicity Beanie - Snow White', 15, 'Accessories', 28, 1.4, 'XS'),
(77, 'Simplicity Beanie - Snow White', 15, 'Accessories', 39, 1.4, 'S'),
(78, 'Simplicity Beanie - Snow White', 15, 'Accessories', 48, 1.4, 'M'),
(79, 'Simplicity Beanie - Snow White', 15, 'Accessories', 3, 1.4, 'L'),
(80, 'Simplicity Beanie - Snow White', 15, 'Accessories', 33, 1.4, 'XL'),
(81, 'Simplicity Beanie - Stone Grey', 15, 'Accessories', 19, 4, 'XS'),
(82, 'Simplicity Beanie - Stone Grey', 15, 'Accessories', 11, 4, 'S'),
(83, 'Simplicity Beanie - Stone Grey', 15, 'Accessories', 45, 4, 'M'),
(84, 'Simplicity Beanie - Stone Grey', 15, 'Accessories', 10, 4, 'L'),
(85, 'Simplicity Beanie - Stone Grey', 15, 'Accessories', 27, 4, 'XL'),
(86, 'Simplicity Beanie - Marl Grey', 15, 'Accessories', 54, 3, 'XS'),
(87, 'Simplicity Beanie - Marl Grey', 15, 'Accessories', 39, 3, 'S'),
(88, 'Simplicity Beanie - Marl Grey', 15, 'Accessories', 45, 3, 'M'),
(89, 'Simplicity Beanie - Marl Grey', 15, 'Accessories', 6, 3, 'L'),
(90, 'Simplicity Beanie - Marl Grey', 15, 'Accessories', 50, 3, 'XL'),
(91, 'Simplicity Beanie - Pure Black', 15, 'Accessories', 39, 1.8, 'XS'),
(92, 'Simplicity Beanie - Pure Black', 15, 'Accessories', 8, 1.8, 'S'),
(93, 'Simplicity Beanie - Pure Black', 15, 'Accessories', 42, 1.8, 'M'),
(94, 'Simplicity Beanie - Pure Black', 15, 'Accessories', 57, 1.8, 'L'),
(95, 'Simplicity Beanie - Pure Black', 15, 'Accessories', 54, 1.8, 'XL'),
(96, 'Simplicity Beanie - Pastel Peach', 15, 'Accessories', 60, 4, 'XS'),
(97, 'Simplicity Beanie - Pastel Peach', 15, 'Accessories', 35, 4, 'S'),
(98, 'Simplicity Beanie - Pastel Peach', 15, 'Accessories', 23, 4, 'M'),
(99, 'Simplicity Beanie - Pastel Peach', 15, 'Accessories', 6, 4, 'L'),
(100, 'Simplicity Beanie - Pastel Peach', 15, 'Accessories', 54, 4, 'XL'),
(101, 'Simplicity Beanie - Baby Blue', 15, 'Accessories', 17, 4.1, 'XS'),
(102, 'Simplicity Beanie - Baby Blue', 15, 'Accessories', 13, 4.1, 'S'),
(103, 'Simplicity Beanie - Baby Blue', 15, 'Accessories', 23, 4.1, 'M'),
(104, 'Simplicity Beanie - Baby Blue', 15, 'Accessories', 25, 4.1, 'L'),
(105, 'Simplicity Beanie - Baby Blue', 15, 'Accessories', 4, 4.1, 'XL'),
(106, 'Simplicity Beanie - Hot Pink', 15, 'Accessories', 5, 4.7, 'XS'),
(107, 'Simplicity Beanie - Hot Pink', 15, 'Accessories', 6, 4.7, 'S'),
(108, 'Simplicity Beanie - Hot Pink', 15, 'Accessories', 49, 4.7, 'M'),
(109, 'Simplicity Beanie - Hot Pink', 15, 'Accessories', 23, 4.7, 'L'),
(110, 'Simplicity Beanie - Hot Pink', 15, 'Accessories', 12, 4.7, 'XL'),
(111, 'Hydrator', 20, 'Accessories', 23, 3.1, 'XS'),
(112, 'Hydrator', 20, 'Accessories', 49, 3.1, 'S'),
(113, 'Hydrator', 20, 'Accessories', 46, 3.1, 'M'),
(114, 'Hydrator', 20, 'Accessories', 1, 3.1, 'L'),
(115, 'Hydrator', 20, 'Accessories', 42, 3.1, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingSession`
--

CREATE TABLE `shoppingSession` (
  `shoppingSessionId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `shoppingSessionTotal` float NOT NULL,
  `shoppingSessionCreatedDate` datetime DEFAULT current_timestamp(),
  `discountCodeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'BradSmith02', '$2y$10$VaMS4HU7kj9vfJt9nkRoNO6g1KErcvFJqExSU3mRSqREs0y4fRF3i', '2023-05-14 21:03:51'),
(8, 'andrew32', '$2y$10$1NEBBImAtGmArsCPjBfVNuCNdbQY4HUqED39M7YlFkOF1OpmLcFC2', '2023-05-14 22:07:00'),
(9, 'remi51', '$2y$10$aQgaFHWhuRi7qqx0dKm/d.hyqlmsMifmsLawuMPOHCi20lx3lT2oy', '2023-05-14 22:08:10'),
(10, 'Stuart', '$2y$10$cdjnws2RaxmOJamWHhbTQexPag.9es5nmGO.e7rFT68fd2mDJF/bi', '2023-05-14 22:09:00'),
(11, 'BradSmith03', '$2y$10$aoy7nXlpEh1wEm6DIZ85nOdIRJhZifMla2ipduWkS00tMhY7cKKma', '2023-05-14 22:58:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `adminUsername` (`adminUsername`);

--
-- Indexes for table `cartItems`
--
ALTER TABLE `cartItems`
  ADD PRIMARY KEY (`cartItemsId`),
  ADD UNIQUE KEY `shoppingSessionId` (`shoppingSessionId`),
  ADD UNIQUE KEY `productId` (`productId`);

--
-- Indexes for table `discountCode`
--
ALTER TABLE `discountCode`
  ADD PRIMARY KEY (`discountCodeId`),
  ADD UNIQUE KEY `discountCodeForCheckout` (`discountCodeForCheckout`);

--
-- Indexes for table `orderDetails`
--
ALTER TABLE `orderDetails`
  ADD PRIMARY KEY (`orderDetailsId`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `shoppingSession`
--
ALTER TABLE `shoppingSession`
  ADD PRIMARY KEY (`shoppingSessionId`),
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `discountCodeId` (`discountCodeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartItems`
--
ALTER TABLE `cartItems`
  MODIFY `cartItemsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discountCode`
--
ALTER TABLE `discountCode`
  MODIFY `discountCodeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderDetails`
--
ALTER TABLE `orderDetails`
  MODIFY `orderDetailsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `shoppingSession`
--
ALTER TABLE `shoppingSession`
  MODIFY `shoppingSessionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartItems`
--
ALTER TABLE `cartItems`
  ADD CONSTRAINT `cartitems_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `cartitems_ibfk_2` FOREIGN KEY (`shoppingSessionId`) REFERENCES `shoppingSession` (`shoppingSessionId`);

--
-- Constraints for table `orderDetails`
--
ALTER TABLE `orderDetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `shoppingSession`
--
ALTER TABLE `shoppingSession`
  ADD CONSTRAINT `shoppingsession_ibfk_1` FOREIGN KEY (`discountCodeId`) REFERENCES `discountCode` (`discountCodeId`),
  ADD CONSTRAINT `shoppingsession_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
