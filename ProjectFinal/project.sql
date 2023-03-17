-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2022 at 03:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `age`, `nid`, `email`, `address`, `gender`, `password`, `mobile`) VALUES
(1, 'ARJUN', 'kumar', '21', '1234567891', 'arnob@gmail.com', 'Bashundhara R/A', 'male', 'Asd123!', '01712005123'),
(28, 'ARNOB', 'bhai', '33', '1234567892', 'arnovirus@gmail.com', 'Bashundhara R/A, Block: F, Road: 6, House: 171', 'male', 'Asd123!', '01763688988'),
(33, 'DON', 'bose', '41', '8615238124', 'bose@gmail.com', 'Bashundhara R/A, Block: F, Road: 6, House: 171', 'male', 'THEa913@', '01912332176'),
(2, 'ARNOB', 'bose', '22', '1234567891', 'bosu@gmail.com', 'Bashundhara F', 'male', 'LLOr1051@!', '01418730572'),
(34, 'JOSS', 'bhai', '71', '3975238124', 'joss@gmail.com', 'Bashundhara R/A, Block: F, Road: 6, House: 171', 'male', 'Qwe123!', '01391653920');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_buy`
--

CREATE TABLE `buyer_buy` (
  `id` int(100) NOT NULL,
  `buyer_uname` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `buy_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_cart`
--

CREATE TABLE `buyer_cart` (
  `id` int(100) NOT NULL,
  `buyer_uname` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_cart`
--

INSERT INTO `buyer_cart` (`id`, `buyer_uname`, `product_id`, `product_name`) VALUES
(1, 'arjun', 3, 'iPhone 12 (64GB)');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_info`
--

CREATE TABLE `buyer_info` (
  `id` int(100) NOT NULL,
  `b_fname` varchar(100) NOT NULL,
  `b_lname` varchar(100) NOT NULL,
  `b_uname` varchar(100) NOT NULL,
  `b_mbl_no` int(100) NOT NULL,
  `b_email` varchar(100) NOT NULL,
  `b_pass` varchar(100) NOT NULL,
  `b_dob` date NOT NULL,
  `b_gender` varchar(100) NOT NULL,
  `b_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_info`
--

INSERT INTO `buyer_info` (`id`, `b_fname`, `b_lname`, `b_uname`, `b_mbl_no`, `b_email`, `b_pass`, `b_dob`, `b_gender`, `b_file`) VALUES
(1, 'naim', 'mostaque', 'naim12', 1758550331, 'mostaquenaimislam@gmail.com', 'naim123', '2022-08-02', 'Male', 'C:xampp	mpphp6AD8.tmp'),
(2, 'jb', 'jbcd', 'naim123', 888, 'jhsdbhf@gmail.com', 'naim123', '2022-08-01', 'Male', 'C:xampp	mpphp54D5.tmp'),
(6, 'arjun', 'kumar', 'ak47', 8787, 'bjj@Gmail.com', 'ak47', '2022-08-01', 'Male', 'C:xampp	mpphp7759.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_wish`
--

CREATE TABLE `buyer_wish` (
  `id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `buyer_uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_wish`
--

INSERT INTO `buyer_wish` (`id`, `product_name`, `product_id`, `buyer_uname`) VALUES
(2, 'only camera', 3, 'ak47'),
(3, 'only camera', 3, 'ak47'),
(4, 'only camera', 3, 'ak47');

-- --------------------------------------------------------

--
-- Table structure for table `chat_seller_buyer`
--

CREATE TABLE `chat_seller_buyer` (
  `id` int(100) NOT NULL,
  `b_uname` varchar(100) NOT NULL,
  `s_uname` varchar(100) NOT NULL,
  `seller_msg` varchar(100) NOT NULL,
  `buyer_msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_seller_buyer`
--

INSERT INTO `chat_seller_buyer` (`id`, `b_uname`, `s_uname`, `seller_msg`, `buyer_msg`) VALUES
(1, 'a', 'a', 'a', 'a'),
(123, 'ak47', 'tumi_seller', '', 'hi'),
(124, 'ak47', 'tumi_seller', '', 'hi'),
(125, 'ak47', 'tumi_seller', '', 'hi'),
(126, 'ak47', 'tumi_seller', '', 'hi'),
(127, 'ak47', 'ami_seller', '', 'hi'),
(128, 'ak47', 'ami_seller', '', 'hi'),
(129, 'ak47', 'tumi_seller', '', 'no'),
(130, 'ak47', 'tumi_seller', '', 'no'),
(131, 'ak47', 'ami_seller', '', 'yes'),
(132, 'ak47', 'ami_seller', '', 'yes'),
(133, 'hellohi', 'tumi_seller', '', 'keu'),
(134, 'hellohi', 'tumi_seller', '', 'keu'),
(135, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(136, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(137, 'tilkaa12', 'tumi_seller', 'bolen', ''),
(138, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(139, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(140, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(141, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(142, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(143, 'tilkaa12', 'tumi_seller', '', 'hi\r\n'),
(144, 'ak48', 'tumi_seller', '', 'hi'),
(145, 'ak48', 'tumi_seller', '', 'hi'),
(146, 'ak48', 'tumi_seller', '', 'hi'),
(147, 'ak48', 'tumi_seller', '', 'hi'),
(149, 'ak48', 'tumi_seller', 'bolen', ''),
(150, 'ak48', 'tumi_seller', '', 'hi'),
(151, 'ak48', 'tumi_seller', '', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cod`
--

CREATE TABLE `delivery_cod` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_cod`
--

INSERT INTO `delivery_cod` (`id`, `name`, `address`, `mobile`, `product`) VALUES
(1, 'Rabbi', 'Bashundhara F block, House: 81', '01912331120', 'Tea Table');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_courier`
--

CREATE TABLE `delivery_courier` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `product` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_courier`
--

INSERT INTO `delivery_courier` (`id`, `name`, `address`, `mobile`, `product`) VALUES
(1, 'Shihab Mollah', 'Khilkhet, Dhaka', '017120011333', 'OnePlus 9R (Used)'),
(2, 'Rayhan', 'Nikunja, Dhaka', '017120011332', 'iPhone 13 (Used)'),
(3, 'Shojib', 'Gulshan, Dhaka', '017120022332', 'MacBook Pro 13\'3 M1 (Used)');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `package` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `starting_date` varchar(250) NOT NULL,
  `expiring_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `username`, `package`, `cost`, `payment`, `starting_date`, `expiring_date`) VALUES
(1, 'Arnob', 'gold', '350', 'paid', '20/Aug/2022', '20/Dec/2022'),
(5, 'Arjun', 'gold', '350', 'unpaid', '', ''),
(6, 'Naim', 'platinum', '450', 'paid', '21/Aug/2022', '01/Jan/2022');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `name`, `description`) VALUES
(1, '20% off!', 'Buy one iPhone and get 20% off on JBL headphone!!'),
(2, '15% instant bonus!', 'Get 15% instant bonus on Bkash payments!'),
(9, '40% discount!', 'Get 40% discount on purchasing Tea Table & get discount on next purchase!');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(250) NOT NULL,
  `report` varchar(250) NOT NULL,
  `shop_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report`, `shop_name`) VALUES
(1, 'bhai baje akdom!', 'Naim Shop Co.'),
(3, 'amar taka niye product dey nai :(', 'Thamid Corporation');

-- --------------------------------------------------------

--
-- Table structure for table `seller_table`
--

CREATE TABLE `seller_table` (
  `id` int(100) NOT NULL,
  `s_uname` varchar(100) NOT NULL,
  `up_product_name` varchar(100) NOT NULL,
  `up_product_price` int(100) NOT NULL,
  `s_phone` varchar(100) NOT NULL,
  `product_details` varchar(100) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `s_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_table`
--

INSERT INTO `seller_table` (`id`, `s_uname`, `up_product_name`, `up_product_price`, `s_phone`, `product_details`, `stock`, `s_address`) VALUES
(3, 'Hasan', 'iPhone 12 (64GB)', 40000, '01664541421', 'Mint', 'in Stock', 'Bashundhara R/A, Dhaka'),
(1, 'Jonathan', 'Pencil', 100, '01958683220', 'Blooded', 'in Stock', 'Gulshan, Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `buyer_buy`
--
ALTER TABLE `buyer_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_cart`
--
ALTER TABLE `buyer_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_info`
--
ALTER TABLE `buyer_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_uname` (`b_uname`);

--
-- Indexes for table `buyer_wish`
--
ALTER TABLE `buyer_wish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_seller_buyer`
--
ALTER TABLE `chat_seller_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_cod`
--
ALTER TABLE `delivery_cod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `delivery_courier`
--
ALTER TABLE `delivery_courier`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `buyer_buy`
--
ALTER TABLE `buyer_buy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_cart`
--
ALTER TABLE `buyer_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `buyer_info`
--
ALTER TABLE `buyer_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_cod`
--
ALTER TABLE `delivery_cod`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_courier`
--
ALTER TABLE `delivery_courier`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
