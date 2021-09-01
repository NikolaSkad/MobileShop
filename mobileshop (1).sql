-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 06:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brnad_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `brnad_image`) VALUES
(1, 'Apple', '...'),
(3, 'Samsung', '...'),
(4, 'Xiaomi', '....'),
(6, 'Huawei', '...');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `user_id`, `phone_id`) VALUES
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `model`, `brand_id`, `price`, `item_image`, `item_register`) VALUES
(2, '12 pro Max', 1, 999, 'https://www.pametno.rs/slike/products/70/31/12203170/thumb290_apple-iphone-12-pro-max-128gb_b959c415.jpeg', '2021-08-11 19:58:59'),
(5, 'P40 Pro', 6, 759, 'https://www.mobilplanet.net/wp-content/uploads/2020/07/p40-pro-silver_5e7bbfce3e7ce.jpg', '2021-08-23 18:56:34'),
(6, 'Galaxy Note20 Ultra', 3, 1299, 'https://m.media-amazon.com/images/I/71RD0mYwYoL._AC_SL1500_.jpg', '2021-08-16 20:00:11'),
(8, 'Redmi Note 10 Pro', 4, 299, 'https://mi-srbija.rs/storage/product/images/78/9c/redmi-note-10-pro-1119.jpg', '2021-07-16 20:02:08'),
(9, 'Galaxy A52', 3, 299, 'https://www.mytrendyphone.rs/images/Samsung-Galaxy-A52-Duos-128GB-Black-8806090987557-20032021-01-p.jpg', '2021-08-03 18:56:34'),
(11, 'SE2020', 1, 555, 'https://www.mobilnionline.com/sites/default/files/proizvodi/mobilni-telefoni/apple-iphone-se-2020-red_0.jpg', '2021-08-14 18:58:10'),
(12, 'Nord N100', 6, 399, 'https://www.starmac.co.ke/wp-content/uploads/2021/03/OnePlus-Nord-N100-1-500x500-1.jpg', '2021-08-15 18:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(1, 'Nikola', 'Skadric', 'skadric_nikola', 'nikolaskadric@gmail.com', '12345'),
(2, 'Igor', 'Stojanov', 'stojanov_igor', 'igorstojanov@gmail.com', '12345'),
(3, 'Nikola', 'Soric', 'soric_nikola', 'nikolasoric@gmail.com', '12345'),
(4, 'Lazar', 'Ilic', 'ilic_lazar', 'lazarilic@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`phone_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`phone_id`) REFERENCES `phone` (`phone_id`),
  ADD CONSTRAINT `card_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
