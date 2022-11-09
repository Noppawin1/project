-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbex`
--

-- --------------------------------------------------------

--
-- Table structure for table `bluelock`
--

CREATE TABLE `bluelock` (
  `id` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `href` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bluelock`
--

INSERT INTO `bluelock` (`id`, `chapter`, `price`, `name`, `href`) VALUES
(1, 1, 50, '', 'blueblockRead1.php'),
(2, 2, 50, '', 'blueblockRead2.php'),
(3, 3, 50, '', 'blueblockRead3.php');

-- --------------------------------------------------------

--
-- Table structure for table `coin`
--

CREATE TABLE `coin` (
  `c_id` int(11) NOT NULL,
  `c_amount` int(11) NOT NULL DEFAULT 0,
  `c_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nanomashin`
--

CREATE TABLE `nanomashin` (
  `id` int(11) NOT NULL,
  `chapter` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `href` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nanomashin`
--

INSERT INTO `nanomashin` (`id`, `chapter`, `price`, `name`, `href`) VALUES
(1, 1, 50, '', 'nanomashinRead1.php'),
(2, 2, 50, '', 'nanomashinRead2.php'),
(3, 3, 50, '', 'nanomashinRead3.php');

-- --------------------------------------------------------

--
-- Table structure for table `overgeared`
--

CREATE TABLE `overgeared` (
  `id` int(11) NOT NULL,
  `chapter` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overgeared`
--

INSERT INTO `overgeared` (`id`, `chapter`, `price`, `name`, `href`) VALUES
(1, '1', 50, '', 'overgearedRead1.php'),
(2, '2', 50, '', 'overgearedRead2.php'),
(3, '3', 50, '', 'overgearedRead3.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `_name` varchar(30) NOT NULL,
  `tel` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'b'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bluelock`
--
ALTER TABLE `bluelock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nanomashin`
--
ALTER TABLE `nanomashin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overgeared`
--
ALTER TABLE `overgeared`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coin`
--
ALTER TABLE `coin`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overgeared`
--
ALTER TABLE `overgeared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
