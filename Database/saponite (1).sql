-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 08:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saponite`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrers_applications`
--

CREATE TABLE `carrers_applications` (
  `application_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `position` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `resume` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrers_applications`
--

INSERT INTO `carrers_applications` (`application_id`, `name`, `email`, `contact`, `position`, `message`, `resume`, `timestamp`) VALUES
(1, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', '7774882080', 'Sales & Marketing', 'message here', 'resume here', '2023-10-10 05:49:15'),
(2, 'na', 'na@gmail.com', '3333333', 'SAP ABAP Developer', 'message', 'resume here', '2023-10-10 05:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`, `timestamp`) VALUES
(1, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.com', 'message', '2023-10-10 04:54:40'),
(2, 'Shubham Ashok Shinde', 'shubhamshinde9530@gmail.comme', 'm', '2023-10-10 07:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `nl_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newslatter`
--

INSERT INTO `newslatter` (`nl_id`, `email`, `timestamp`) VALUES
(1, 'shubhamshinde9530@gmail.com', '2023-10-10 05:09:13'),
(2, 'shubhamshinde9530@gmail.com', '2023-10-10 05:12:47'),
(3, 'shubhamshinde9530@gmail.com', '2023-10-10 05:49:15'),
(4, 'na@gmail.com', '2023-10-10 05:49:43'),
(5, 'na@gmail.com', '2023-10-10 07:16:37'),
(6, 'shubhamshinde9530@gmail.comme', '2023-10-10 07:26:28'),
(7, 'shubhamshinde9530@gmail.commmm', '2023-10-16 07:43:01'),
(8, 'position', '2023-10-17 03:41:35'),
(9, 'position', '2023-10-17 05:24:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrers_applications`
--
ALTER TABLE `carrers_applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`nl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrers_applications`
--
ALTER TABLE `carrers_applications`
  MODIFY `application_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `nl_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
