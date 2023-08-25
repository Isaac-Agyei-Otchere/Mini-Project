-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 07:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canopy`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `chairs` int(11) NOT NULL,
  `canopy` int(11) NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `contact`, `activity`, `chairs`, `canopy`, `number_of_days`, `amount`, `date`, `time`) VALUES
(4, 'koli akoli', 'jennifercofie59@gmail.com', '05468958752', 'Funerals', 50, 10, 30, 4500, '2021-09-27', '05:38:52am');

-- --------------------------------------------------------

--
-- Table structure for table `processed_order`
--

CREATE TABLE `processed_order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `chairs` int(11) NOT NULL,
  `canopy` int(11) NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processed_order`
--

INSERT INTO `processed_order` (`id`, `name`, `email`, `contact`, `activity`, `chairs`, `canopy`, `number_of_days`, `amount`, `date`, `time`) VALUES
(1, 'Jenny Klen', 'jennifddercofie59@gmail.com', '05468958752', 'Wedding', 19, 1990, 30, 3570, '2021-09-27', '03:41:30am'),
(2, 'Jenny Klen', 'jennifercofie59@gmail.comss', '05468958752', 'Wedding', 19, 1990, 30, 3570, '2021-09-27', '03:41:30am'),
(3, 'Jenny Klen', 'jennidfercofie59@gmail.comss', '05468958752', 'Wedding', 19, 1990, 30, 3570, '2021-09-27', '03:41:30am'),
(4, 'Jenny Klen', 'jennssifercofie59@gmail.com', '05468958752', 'Wedding', 19, 1990, 30, 3570, '2021-09-27', '03:41:30am'),
(5, 'Jenny Klen', 'jennifercofie59@gmail.com', '05468958752', 'Wedding', 19, 1990, 30, 3570, '2021-09-27', '03:41:30am'),
(6, 'Jenny Klen', 'jennifercofie59@gmail.com', '05468958752', 'Wedding', 19, 10, 30, 3570, '2021-09-27', '03:41:30am'),
(7, 'Jenny Klen', 'jenniddfercofie59@gmail.com', '05468958752', 'Wedding', 19, 10, 30, 3570, '2021-09-27', '03:41:30am'),
(8, 'Jenny Klen', 'jennddifercofie59@gmail.com', '05468958752', 'Birthday', 70, 10, 30, 5100, '2021-09-27', '04:35:12am'),
(9, 'Jenny Klen', 'jenniddfercofie59@gmail.com', '05468958752', 'Wedding', 19, 10, 30, 3570, '2021-09-27', '03:41:30am'),
(10, 'Jenny Klen', 'jenniddfercofie59@gmail.com', '05468958752', 'Funerals', 100, 10, 30, 6000, '2021-09-27', '05:15:08am');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `registration_id` int(11) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`registration_id`, `uid`, `username`, `role`, `utype`, `log_type`, `date`, `time`) VALUES
(1, '', '', '', '', 'Log In', '2021-09-25', '03:17:08'),
(2, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:22:15'),
(3, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:24:44'),
(4, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:26:59'),
(5, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:28:43'),
(6, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:32:22'),
(7, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:32:46'),
(8, '57', 'Phil klen', 'Admin', 'Access', 'Log In', '2021-09-25', '03:33:00'),
(9, '57', 'Phil klen', 'Admin', 'Access', 'Log In', '2021-09-25', '03:34:27'),
(10, '', 'donratily@gmail.com', '', '', 'Log In', '2021-09-25', '03:35:18'),
(11, '', '', '', '', 'Log In', '2021-09-26', '01:55:37'),
(12, '', '', '', '', 'Log In', '2021-09-26', '04:16:25'),
(13, '', '', '', '', 'Log In', '2021-09-27', '05:39:45'),
(14, '', '', '', '', 'Log In', '2021-09-27', '05:40:23'),
(15, '', '', '', '', 'Log In', '2021-09-27', '05:41:14'),
(16, '', '', '', '', 'Log In', '2021-09-27', '05:48:45'),
(17, '', '', '', '', 'Log In', '2021-09-27', '05:51:44'),
(18, '', 'samuel kofi frimpong', 'User', 'Access', 'Log In', '2021-09-27', '05:53:20'),
(19, '', 'samuel kofi frimpong', 'User', 'Access', 'Log In', '2021-09-27', '05:53:53'),
(20, '', 'samuel kofi frimpong', 'User', 'Access', 'Log In', '2021-09-27', '05:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `chair` int(11) NOT NULL,
  `canopy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `chair`, `canopy`) VALUES
(1, 9900, 9990);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IMG` varchar(200) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Uname` varchar(200) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IMG`, `Uid`, `Uname`, `Gender`, `email`, `password`, `role`, `user_type`) VALUES
('611c891978d8b.jpg', 57, 'Phil klen', 'Male', 'joh5n@d.com', '1234569', 'Admin', 'Access'),
('6143b888322aa.png', 73, 'samuel kofi frimpong', 'Male', 'john1@gmail.com', '1234', 'User', 'Access'),
('61447c6b5a823.jpg', 75, 'paul ekuane', 'Male', 'Pauloksdfoene@gmail.com', '1234', 'Admin', 'Access');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processed_order`
--
ALTER TABLE `processed_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `processed_order`
--
ALTER TABLE `processed_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
