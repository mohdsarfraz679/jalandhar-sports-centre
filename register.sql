-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2021 at 01:28 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'fdgdf', 'gdfgd', 1234567890, 'cfdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `schoolname` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `aadhar` int NOT NULL,
  `zip` int NOT NULL,
  `profile_img` varchar(255) NOT NULL DEFAULT 'demouser.jpg',
  `age` int NOT NULL,
  `academic_year` int NOT NULL,
  `studentid` int NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `otherinfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `address`, `city`, `state`, `dob`, `schoolname`, `mobile`, `aadhar`, `zip`, `profile_img`, `age`, `academic_year`, `studentid`, `gender`, `otherinfo`) VALUES
(1, '$username', '$password', '$email', '$address', '$city', '$state', '2010-12-10', '$school_name', 12, 1234, 3, 'demouser.jpg', 0, 0, 0, 'male', ''),
(2, 'yourrozg', '399d595e22a858b3c136b5cebec12b1b', 'bjdshfb@hdd.dd', 'sdjbgjf', 'fdsggf', 'VG', '2020-10-23', 'nj njfs djfgnd', 1234567890, 2893, 12345, 'demouser.jpg', 0, 0, 0, 'male', ''),
(3, 'john', '65b2b40e0d01a9b04ae66106cb98e118', 'john@gmail.com', '324 fdg gfgh', 'bareilly', 'RJ', '2021-05-28', 'nfbdsbf', 1234567890, 1234, 12344, 'demouser.jpg', 0, 0, 0, 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
