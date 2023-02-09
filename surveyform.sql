-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 11:38 AM
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
-- Database: `surveyform`
--

-- --------------------------------------------------------

--
-- Table structure for table `supersecureadmin1234`
--

CREATE TABLE `supersecureadmin1234` (
  `admn_unm` varchar(255) NOT NULL,
  `admn_pwd` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supersecureadmin1234`
--

INSERT INTO `supersecureadmin1234` (`admn_unm`, `admn_pwd`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar(255) NOT NULL,
  `ans4` varchar(255) NOT NULL,
  `ans5` varchar(255) NOT NULL,
  `ans6` varchar(255) NOT NULL,
  `ans7` varchar(255) NOT NULL,
  `ans8` varchar(255) NOT NULL,
  `ans9` varchar(255) NOT NULL,
  `ans10` varchar(255) NOT NULL,
  `ans11` varchar(255) NOT NULL,
  `ans12` varchar(255) NOT NULL,
  `ans13` varchar(255) NOT NULL,
  `ans14` varchar(255) NOT NULL,
  `ans15` varchar(255) NOT NULL,
  `ans16` varchar(255) NOT NULL,
  `ans17` varchar(255) NOT NULL,
  `ans18` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `dateofjoining` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supersecureadmin1234`
--
ALTER TABLE `supersecureadmin1234`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supersecureadmin1234`
--
ALTER TABLE `supersecureadmin1234`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
