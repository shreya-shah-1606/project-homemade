-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 07:20 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_made`
--

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `m_id` varchar(12) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `products` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `name`, `m_id`, `address`, `email`, `products`, `password`) VALUES
(1, 'abc', '', ' ', '', '', ''),
(2, 'xyz', '9547120388', 'nkanxk ', 'xyz@gmail.com', ' handicrafts jewelery', '123');

-- --------------------------------------------------------

--
-- Table structure for table `order_id`
--

CREATE TABLE `order_id` (
  `id` int(11) NOT NULL,
  `u_id` varchar(12) NOT NULL,
  `m_id` varchar(12) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(10) NOT NULL,
  `u_id` varchar(12) NOT NULL,
  `m_id` varchar(12) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` double NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `u_id`, `m_id`, `p_name`, `qty`, `price`, `order_id`, `status`) VALUES
(1, '', 'merchant1', '', 0, 0, '', 0),
(2, '', 'merchant1', '', 0, 0, '', 0),
(3, '', 'merchant1', '', 0, 0, '', 0),
(4, '', 'merchant1', '', 0, 0, '', 0),
(5, '', 'merchant3', '', 0, 0, '', 0),
(6, '', 'merchant2', '', 0, 0, '', 0),
(7, '', 'merchant2', '', 0, 0, '', 0),
(8, '', 'merchant1', '', 0, 0, '', 0),
(9, '', 'merchant1', '', 0, 0, '', 0),
(10, '', 'merchant1', '', 0, 0, '', 0),
(11, '', 'merchant1', '', 0, 0, '', 0),
(12, '8', 'merchant1', '', 0, 0, '', 0),
(13, '8', 'merchant3', '', 0, 0, '', 0),
(14, '8', 'merchant2', '', 0, 0, '', 0),
(15, '8', 'merchant2', '', 0, 0, '', 0),
(16, '8', 'merchant2', '', 0, 0, '', 0),
(17, '8', 'merchant1', '', 0, 0, '', 0),
(18, '8', 'merchant1', '', 0, 0, '', 0),
(19, '8', 'merchant1', '', 0, 0, '', 0),
(20, '8', 'merchant1', '', 0, 0, '', 0),
(21, '8', 'merchant1', '', 0, 0, '', 0),
(22, '8', 'merchant1', '', 0, 0, '', 0),
(23, '8', 'merchant1', 'Transparent ring, Rs. 80', 0, 0, '', 0),
(24, '8', 'merchant2', 'Rose', 0, 0, '', 0),
(25, '8', 'merchant2', 'Pearl ring', 0, 0, '', 0),
(26, '8', 'merchant2', 'Pearl ring', 0, 0, '', 0),
(27, '8', 'merchant3', 'Interlocked rings', 0, 0, '', 0),
(28, '8', 'merchant2', 'Rose', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `m_id` varchar(12) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `u_id` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `u_id`, `email`, `password`) VALUES
(1, 'helly', '', '8', 'hellymehta20@yahoo.in', '1234'),
(3, 'asma', '', '96247752277', 'asma@gmail.com', '123'),
(5, 'shreya', '', '8238105770', 's@gmail.com', '123'),
(6, 'chinmayi', '', '3624332211', 'chinee@gmail.com', '123'),
(7, 'parth', '', '987451203', 'parth@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
