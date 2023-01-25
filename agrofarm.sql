-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrofarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingform`
--

CREATE TABLE `bookingform` (
  `orderid` int(11) NOT NULL,
  `fname` varchar(33) NOT NULL,
  `lname` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `productname` varchar(33) NOT NULL,
  `quantity` int(100) NOT NULL,
  `address` varchar(111) NOT NULL,
  `city` varchar(22) NOT NULL,
  `state` varchar(22) NOT NULL,
  `zip` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingform`
--

INSERT INTO `bookingform` (`orderid`, `fname`, `lname`, `email`, `phone`, `productname`, `quantity`, `address`, `city`, `state`, `zip`, `date`) VALUES
(1, 'Nikhil', 'Naikwade', 'nik@gmail.com', 9049889137, 'Apple', 7, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-09 22:22:58'),
(2, 'Madhura', 'Bhartal', 'mad@gmail.com', 905533421, 'Carrot', 6, 'Mundwa Pune', 'Pune', 'Maharashtra', 412105, '2022-12-09 22:23:54'),
(3, 'nikhhiiil', 'naikwade', 'nikhillli.naikwade@gmail.com', 9049889137, 'german shepherd ', 1, 'krushnai building,mit collage ', 'Alandi', 'Goa', 41210, '2022-12-10 10:29:24'),
(4, 'Madhura', 'Bhartal', 'madhura.bhartal@gmail.com', 9552805712, 'German Shepherd ', 2, 'Atharv Heights, SNBP School Road, Majari Bk, Mundwa ', 'Mundwa', 'Maharashtra', 412307, '2022-12-10 10:32:42'),
(5, 'Nikhil', 'Naikwade', 'moviebuddy777@gmail.com', 9049889137, 'Tomato', 3, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-10 12:17:12'),
(6, 'Nikhil', 'Naikwade', 'nikhilnaikwade8989@gmail.com', 9049889137, 'Apple', 2, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-10 13:11:41'),
(7, 'Madhura', 'Bhartal', 'madhura.bhartal@gmail.com', 9049889137, 'Ginger', 5, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'pune', 'Maharashtra', 412105, '2022-12-10 13:22:45'),
(8, 'Nikhil', 'Naikwade', 'nikhilnaikwade8989@gmail.com', 9049889137, 'Beetroot', 21, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-10 14:19:25'),
(9, 'Madhura', 'Bhartal', 'madhura.bhartal@gmail.com', 1234567891, 'Beetroot', 3, 'Mundwa Pune', 'Pune', 'Maharashtra', 412105, '2022-12-10 14:30:41'),
(10, 'Madhura', 'Bhartal', 'nikhilnaikwade8989@gmail.com', 9049889137, 'Beetroot', 3, 'Mundwa Pune', 'Pune', 'Maharashtra', 412105, '2022-12-10 14:48:47'),
(11, 'Nikhil', 'Naikwade', 'moviebuddy777@gmail.com', 9049889137, 'Ginger', 4, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-10 17:22:44'),
(12, 'Nikhil', 'Naikwade', 'moviebuddy777@gmail.com', 9049889137, 'Apple', 12, 'Krushnai Building, Dehu-Phata, Alandi Pune.', 'Pune', 'Maharashtra', 412105, '2022-12-16 06:20:38'),
(13, 'Atul', 'Kande', 'atulkande1747@gmail.com', 8412034997, 'German Shepherd', 1, 'MIT Acsc Project Lab, Pune', 'Pune', 'Maharashtra', 412105, '2022-12-16 06:44:04'),
(14, 'Madhura', 'Bhartal', 'madhura.bhartal@gmail.com', 9552805712, 'Horse', 2, 'Atharv Heights, SNBP School Road, Majari Bk, Mundwa ', 'Mundwa', 'Maharashtra', 412307, '2022-12-20 12:53:32'),
(15, 'Pruthvi', 'Jadhav', 'jadhavpruthvi2608@gmail.com', 9561100221, 'Onions ', 4, 'Jadhavwadi, Pune', 'Pune', 'Maharashtra', 412105, '2022-12-27 10:52:39'),
(16, 'Atul', 'Kande', 'atulkande1747@gmail.com', 8412034997, 'German Shepherd', 2, 'MIT Acsc Project Lab, Pune', 'Pune', 'Maharashtra', 412105, '2023-01-19 04:43:20'),
(17, 'Atul', 'Kande', 'atulkande1747@gmail.com', 8412034997, 'Onions ', 3, 'MIT Acsc Project Lab, Pune', 'Pune', 'Maharashtra', 412105, '2023-01-19 04:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`name`, `email`, `phone`, `message`) VALUES
('Nik', 'nik@gmail.com', 2147483647, 'heyyy'),
('Pruthvi J', 'agrofarm.an.eshoppee@g', 2147483647, 'SRGSE'),
('AgroFarm', 'agrofarm.an.eshoppee@g', 2147483647, 'hvjh'),
('AgroFarm', 'agrofarm.an.eshoppee@g', 2147483647, 'sdgsd'),
('AgroFarm', 'agrofarm.an.eshoppee@g', 2147483647, 'sdgsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingform`
--
ALTER TABLE `bookingform`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingform`
--
ALTER TABLE `bookingform`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
