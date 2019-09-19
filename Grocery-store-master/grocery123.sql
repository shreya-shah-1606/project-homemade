-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 02:47 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `noi` int(10) NOT NULL,
  `itemid` int(10) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `userID`, `noi`, `itemid`, `cost`) VALUES
(1, 18, 1, 22, 10),
(61, 18, 1, 18, 10),
(80, 24, 1, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemid` int(10) NOT NULL,
  `itemname` varchar(60) NOT NULL,
  `iimg` varchar(40) NOT NULL,
  `amount` int(10) NOT NULL,
  `disamt` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `iimg`, `amount`, `disamt`, `pid`) VALUES
(1, 'Fresh Cauliflower (2 No''''s)', '30.png', 8, 3, 4),
(2, 'Fresh Brinjal Bharta (1 Kg)', '31.png', 3, 1, 4),
(3, 'Fresh Basket Onion (1 Kg)', '33.png', 7, 2, 4),
(4, 'Fresh Mushroom (500 Ml)', '35.png', 15, 4, 4),
(5, 'Fresh Apple Red (1 Kg)', '11.png', 8, 2, 4),
(6, 'Fresh Bananas (1 Kg)', '29.png', 12, 2, 4),
(7, 'Fresh Sweet Lime (500 Gm)', '32.png', 7, 1, 4),
(8, 'Fresh Strawberry (1 Pc)', '36.png', 9, 2, 4),
(9, 'Dishwash Gel, Lemon (1.5 Ltr)', '17.png', 10, 8, 2),
(10, 'Dish Wash Bar (500 Gm)', '18.png', 4, 2, 2),
(11, 'Air Freshener (50 Gm)', '19.png', 5, 3, 2),
(12, 'Toilet Cleaner Expert (1 Ltr)', '20.png', 10, 7, 2),
(13, 'Princeware Packaging Container Pack (6 No''s)', '21.png', 18, 10, 2),
(14, 'Signoraware Container Center Press (900 Ml)', '22.png', 8, 5, 2),
(15, 'Ship Stainless Steel Sauce Pan Single (1 Pc)', '23.png', 8, 5, 2),
(16, 'Omega Stainless Steel Puri Dabba (1 Pc)', '24.png', 8, 6, 2),
(17, 'Fortune Sunflower Oil', '1.png', 10, 2, 11),
(18, 'Basmati Rise (5 Kg)', '3.png', 15, 4, 11),
(19, 'Pepsi Soft Drink (2 Ltr)', '2.png', 10, 2, 11),
(20, 'Dogs Food (4 Kg)', '4.png', 11, 2, 11),
(21, 'Orange Soft Drink (250 Ml)', '49.png', 7, 2, 5),
(22, 'Prune Juice - Sunsweet (1 Ltr)', '14.png', 9, 4, 5),
(23, 'Coco Cola Zero Can (330 Ml)', '15.png', 8, 5, 5),
(24, 'Sprite Bottle (2 Ltr)', '16.png', 7, 4, 5),
(25, 'Mixed Fruit Juice (1 Ltr)', '13.png', 8, 5, 5),
(26, 'Aamras Juice (250 Ml)', '50.png', 9, 4, 5),
(27, 'Coconut Water (1000 Ml)', '51.png', 8, 2, 5),
(28, 'Ceres Orange Juice (1 Ltr)', '52.png', 8, 3, 5),
(29, 'Dabur Glucose D (250 Gm)', '53.png', 15, 5, 5),
(30, 'Mix Lemon Flavour (50 Gm)', '54.png', 12, 4, 5),
(31, 'Schweppes Water (250 Ltr)', '55.png', 12, 6, 5),
(32, 'Red Bull Energy Drink (250 Ml)', '56.png', 9, 2, 5),
(33, 'Can - Tuna For Cats (400 Gm)', '57.png', 8, 8, 7),
(34, 'Junior Pet Food (90 Gm)', '58.png', 8, 3, 7),
(35, 'Dogs Food - Junior (4 Kg)', '4.png', 11, 2, 7),
(36, 'Gravy Food For Dogs (20 Kg)', '59.png', 18, 3, 7),
(37, 'Meat For Dogs (100 Gm)', '60.png', 20, 10, 7),
(38, 'Weekly Pack (200 Gm)', '61.png', 10, 5, 7),
(39, 'Dog Munchies (500 Gm)', '62.png', 8, 2, 7),
(40, 'Nutrition For Cats (90 Gm)', '63.png', 10, 4, 7),
(41, 'Pepper Salami (250 Gm)', '64.png', 20, 10, 8),
(42, 'Sumeru Green Pees (500 Gm)', '65.png', 19, 9, 8),
(43, 'Tikka Chicken (300 Gm)', '66.png', 9, 3, 8),
(44, 'Mixed Vegetables (500 Gm)', '67.png', 9, 1, 8),
(45, 'Mango Pulp (800 Gm)', '68.png', 11, 2, 8),
(46, 'Kesar Mango Pulp (800 Gm)', '69.png', 9, 4, 8),
(47, 'Frozen Sweet Corn (250 Gm)', '70.png', 16, 10, 8),
(48, 'Chicken Nuggets (1 Kg)', '71.png', 9, 5, 8),
(49, 'Raisin Rolls (2 In 1 Pack)', '37.png', 5, 1, 10),
(50, 'Bread Wheat Pita (250 Gm)', '39.png', 7, 4, 10),
(51, 'Hot Dog Roll (150 Gm)', '40.png', 9, 5, 10),
(52, 'Masala Bread (500 Gm)', '41.png', 7, 3, 10),
(53, 'Eggless Walnut (250 Gm)', '45.png', 10, 4, 10),
(54, 'Assorted Muffins (200 Gm)', '46.png', 17, 10, 10),
(55, 'Bagels - Sesame (200 Gm)', '47.png', 8, 2, 10),
(56, 'Flax & Walnut Loaf (400 Gm)', '48.png', 9, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `orderid` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `email`, `product`, `price`, `name`, `demail`, `phone`, `landmark`, `address`, `img`) VALUES
(1, 0, 'xyz@xyz.com', 'Fresh Apple Red (1 Kg)', '8', 'xyz', 'xyz@xyz.com', '', 'xyz', 'xyz\nxyz\nxyz', '11.png'),
(18, 18, 'soumyareddykolan@gmail.com', 'Fresh Basket Onion (1 Kg)', '7', 'Soumya Reddy Kolan', 'soumyareddykolan@gmail.com', '', 'telangana', '502 sai leela residency karthikeya nagar nacharam hyderabad-500076', '33.png'),
(19, 19, 'abcd@ab.com', 'Fresh Basket Onion (1 Kg)', '7', 'abcd', 'abcd@abcd.com', '', 'abcd', 'abcd efgh ijkl', '33.png'),
(25, 21, '123@gmail.com', 'Fresh Cauliflower (2 No''s)', '8', '123', '123@gmail.com', '', '14323', '1432', '30.png'),
(27, 26, 'abcd@ab.com', 'Fresh Basket Onion (1 Kg)', '7', 'abcd', 'abcd@abcd.com', '', 'dssg', 'gddf', '33.png'),
(28, 28, 'abcd@ab.com', 'Fortune Sunflower Oil', '10', 'abcd', 'abcd@abcd.com', '', 'aad', 'acc', '1.png'),
(29, 29, 'abcd@ab.com', 'Fresh Mushroom (500 Ml)', '15', 'abcd', 'abcd@abcd.com', '', 'abvgf', 'vacbch', '35.png'),
(30, 30, '899@899.com', 'Dish Wash Bar (500 Gm)', '4', '899', '899@899.com', '8998998998', 'dfgdhj', 'dsttfgfb', '18.png'),
(32, 31, 'xyz@xyz.com', 'Fresh Sweet Lime (500 Gm)', '7', 'xyz', 'xyz@xyz.com', '', 'ghdyht', 'bgdhfvmn', '32.png'),
(34, 33, '1234@123.com', 'Orange Soft Drink (250 Ml)', '7', '1234', '1234@123.com', '', '123456', 'hfdyrtsdhjkklj', '49.png'),
(35, 35, '456@456.com', 'Dishwash Gel, Lemon (1.5 Ltr)', '10', '456', '456@456.com', '', '456', 'gfdyjukygf', '17.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(10) NOT NULL,
  `pname` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`) VALUES
(1, 'Branded Foods'),
(2, 'Households'),
(3, 'Vegetables'),
(4, 'Fruits'),
(5, 'Softdrinks'),
(6, 'Juices'),
(7, 'Petfood'),
(8, 'Frozensnacks'),
(9, 'Frozennonveg'),
(10, 'Breadbakery'),
(11, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `email`, `phone`) VALUES
(18, 'soumya', '123456', 'soumyareddykolan@gmail.com', '8008800400'),
(19, 'abcd', 'abcd', 'abcd@ab.com', '8888888888'),
(20, 'xyz', 'xyz', 'xyz@xyz.com', '9999999999'),
(21, '123', '123', '123@gmail.com', '1111111111'),
(22, '899', '899', '899@899.com', '8998998998'),
(23, '1234', '1234', '1234@123.com', '1234567890'),
(24, '456', '456', '456@456.com', '7894561230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD UNIQUE KEY `userID` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
