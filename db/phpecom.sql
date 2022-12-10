-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `image1` varchar(191) NOT NULL,
  `price` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image1`, `price`, `created_at`) VALUES
(13, 'Adidas Football UEFA Champions League Finale 2022 Club TPU Performance Soccer Ball for Trainings and Matches Size 5 (Gold Metallic Black White - H57814)', 'ball2', 'Adidas Football UEFA Champions League Finale 2022 Club TPU Performance Soccer Ball is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668185.jpg', 399, '2022-11-28 20:43:05'),
(14, 'adidas unisex-adult Rihla League', 'ball3', 'adidas unisex-adult Rihla League is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668349.jpg', 3250, '2022-11-28 20:45:49'),
(15, 'Bodysports.co Messi Argentina Football Jersey Classic EMBROIDRED Logo', 'kit1', 'Bodysports.co Messi Argentina Football Jersey Classic EMBROIDRED Logo is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668421.jpg', 599, '2022-11-28 20:47:01'),
(16, 'Real Madrid Away Replica Full Sleeves Football Jersey', 'kit2', 'Real Madrid Away Replica Full Sleeves Football Jersey is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668484.jpg', 324, '2022-11-28 20:48:04'),
(17, 'Benstar Hard Plastic Football Shin Guard Youth Size (Black)', 'shin1', 'Benstar Hard Plastic Football Shin Guard Youth Size (Black) is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668533.jpg', 168, '2022-11-28 20:48:53'),
(18, 'Nike J Guard [White/Black] ', 'shin3', 'Nike J Guard is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668590.jpg', 3950, '2022-11-28 20:49:50'),
(19, 'Adidas Mens Copa Sense.4 FxG Football Shoes', 'shoes1', 'Adidas Mens Copa Sense.4 FxG Football Shoes is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668657.jpg', 3009, '2022-11-28 20:50:57'),
(20, 'Nivia Men Carbonite 4.0 Football Shoes', 'shoes3', 'Nivia Men Carbonite 4.0 Football Shoes is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668716.jpg', 805, '2022-11-28 20:51:56'),
(21, 'Just rider Bamboo Football Cotton Socks/Stockings for Men Women Knee High Length Superior Grip for Shin Guard, Anti Slip Blister Protection Anti Odour, Free Size (Black)', 'soc1', 'Just rider Bamboo Football Cotton Socks/Stocking is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668770.jpg', 205, '2022-11-28 20:52:50'),
(22, 'Nivia Plain Encounter Stockings (L, Black) - Polyester Blend, Unisex, Knee Length, Pack of 1 Pair', 'soc2', 'Nivia Plain Encounter Stockings is one of the established sports brands who provide stylish and innovative sports gear to most of the aspiring sport players as well as others. As a brand they have \r\n                        produced thousands of spectacular gear which have been used by numerous renowned sport personalities. Football, volleyball, basketball, cricket, tennis, badminton and squash are \r\n                        the sports in whose accessories and gear they deal in regularly.', '1669668826.jpg', 112, '2022-11-28 20:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'abc', 'asdsad@gmail.com', 'asd', '2022-11-19 13:31:16'),
(2, 'vanky.11', 'boyvanky11@gmail.com', '123456789', '2022-11-19 13:47:14'),
(3, 'hello', 'hello@123', 'abc', '2022-11-19 15:37:37'),
(4, 'user1', 'user1@gm', 'user1', '2022-11-19 15:38:33'),
(5, 'user2', 'user2@user2', 'user2', '2022-11-19 15:43:34'),
(6, 'user3', 'user3@user3', 'user3', '2022-11-19 15:44:02'),
(7, 'user5', 'user5@user5', 'user5', '2022-11-19 16:25:26'),
(8, 'user6', 'user6@gmail.com', 'user6', '2022-11-23 20:34:27'),
(9, 'user7', 'user7@gmail.com', 'user7', '2022-11-24 07:11:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
