-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 08:46 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camera2nd`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_br` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_br`) VALUES
(1, 'canon'),
(2, 'nikon'),
(3, 'sony'),
(4, 'fuji'),
(5, 'lens'),
(6, 'tripods'),
(7, 'bags'),
(8, 'filter');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'member',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text,
  `phone` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `address`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'd64e8e3b3fab138e60e1e43662f49d22d3ffe643f41730b592375d136cc5039b', NULL, NULL, 3, '2018-06-09 20:20:15', '2018-06-09 20:20:15'),
(34, 'member', 'aaaaaaaaaaaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(35, 'member', 'aaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(36, 'member', 'aaaaaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(37, 'member', 'aaaaaaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(38, 'member', 'aaaaaaaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(39, 'member', 'aaaaaaaaaaaaaaaaaa', '', NULL, NULL, 1, '2018-07-17 16:15:43', '2018-07-17 16:15:43'),
(40, 'member', 'aaaa@a.com', '1234', NULL, '922767547', 1, '2018-07-19 13:50:00', '2018-07-19 13:50:00'),
(41, 'member', 'admin@admin.com', '123456', NULL, NULL, 1, '2018-07-19 13:56:10', '2018-07-19 13:56:10'),
(42, 'member', 'admin@admin.com', 'a17a1239d1603db9c40fbc460a682170cdfbe7993f17dc9b0b5e095e4684dbfb', NULL, NULL, 1, '2018-07-19 13:57:54', '2018-07-19 13:57:54'),
(43, 'member', 'aof.kurosung@gmail.com', 'd64e8e3b3fab138e60e1e43662f49d22d3ffe643f41730b592375d136cc5039b', NULL, NULL, 1, '2018-07-19 14:00:14', '2018-07-19 14:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `members_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `created_at`, `updated_at`, `members_id`) VALUES
(1, 70000, '2018-06-09 20:26:48', '2018-06-09 20:27:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `products_id`, `orders_id`, `amount`, `price`, `name`) VALUES
(1, 1, 1, 1, NULL, 'CANON EOS 6D MARK II BODY ( KIT EF 24-70 mm F/4L IS USM)');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `product_types_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `detail`, `image`, `status`, `created_at`, `update_at`, `product_types_id`, `brand_id`) VALUES
(1, 'CANON EOS 6D MARK II BODY ( KIT EF 24-70 mm F/4L IS USM)', 70000, NULL, 'canon6dm2.jpg', 1, '2018-06-09 20:24:03', '2018-06-10 12:23:10', 1, 1),
(4, 'CANON EOS 6D MARK II BODY ( KIT EF 24-70 MM F/4L IS USM)', 80000, NULL, 'img_5b4951be719bd.jpg', 1, '2018-06-10 12:17:16', '2018-06-10 12:23:24', 1, 1),
(5, 'NIKON D750 (BLACK) (Wi-Fi) (KIT AF-S NIKKOR 24-120 mm F/4G ED VR)', 74900, NULL, 'nikond750.jpg', 1, '2018-06-10 13:09:58', '2018-06-10 13:09:58', 1, 2),
(6, 'nikon', 600, NULL, 'avatar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 2),
(8, 'CANON650D', 9000, NULL, 'img_5b1fb49ead5ce.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(9, 'CANON 700 D ', 70000, NULL, 'img_5b209324ab9c0.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(13, 'canon5d', 100000, NULL, 'avatar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(15, 'canon', 12000, NULL, 'avatar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(16, 'nikon', 12000, NULL, 'avatar.jpg', 1, '2018-06-10 12:17:16', '2018-06-10 12:17:16', 1, 1),
(20, 'CANON5D', 100000, NULL, 'avatar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(22, 'CANON5D', 70000, NULL, 'img_5b4882589b4fd.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(23, 'CANON5D', 100000, NULL, 'img_5b4b52cb5ccb0.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(24, 'CANON5D', 1000001, NULL, 'img_5b4c366497d5c.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(26, 'CANON5D', 200000, NULL, 'avatar.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(27, 'CANON5D', 1000002, NULL, 'img_5b4d991937b2f.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(28, 'CANON5D', 1000002, NULL, 'img_5b4d991b9c9e5.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(29, 'CANON5D', 1000002, NULL, 'img_5b4d993587d0c.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(30, 'CANON5D', 1000002, NULL, 'img_5b4d9935e39b9.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(31, 'CANON5D', 1000002, NULL, 'img_5b4d99362ba87.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(32, 'CANON5D', 1000002, NULL, 'img_5b4d99366fee5.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(33, 'CANON', 100, NULL, 'img_5b4d99827c459.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(34, 'CANON800D', 200000, NULL, 'img_5b4d99aa9e2c3.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(35, 'CANON5D', 70000, NULL, 'img_5b4d9b9f4f0bb.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(36, 'CANON600', 100000, NULL, 'img_5b4ed0c02c716.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id_type`, `name_type`, `created_at`, `update_at`) VALUES
(1, 'dslr', '2018-06-09 20:21:40', '2018-06-09 20:21:40'),
(2, 'mirrorless', '2018-06-09 20:21:40', '2018-06-09 20:21:40'),
(3, 'lens', '2018-06-10 12:51:13', '2018-06-10 12:51:13'),
(4, 'tripods', '2018-06-10 12:51:13', '2018-06-10 12:51:13'),
(5, 'bags', '2018-06-10 12:51:13', '2018-06-10 12:51:13'),
(6, 'filter', '2018-06-10 12:51:13', '2018-06-10 12:51:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_members_idx` (`members_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_has_orders_orders1_idx` (`orders_id`),
  ADD KEY `fk_products_has_orders_products1_idx` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_product_types1_idx` (`product_types_id`),
  ADD KEY `fk_products_brand1_idx` (`brand_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_members` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_products_has_orders_orders1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_orders_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id_brand`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_product_types1` FOREIGN KEY (`product_types_id`) REFERENCES `product_types` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
