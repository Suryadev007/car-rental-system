-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2024 at 08:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_sys_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `admin_id` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `admin_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`admin_id`, `Name`, `user_name`, `user_pwd`, `gender`, `email`, `dob`, `phone`, `admin_img`) VALUES
('1', 'admin', 'admin', 'admin@123', 'male', 'admin@gmail.com', '2019-04-01', '9876543210', 'image/admin/dev7056');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtbl`
--

CREATE TABLE `bookingtbl` (
  `booking_id` varchar(50) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_addr` varchar(250) NOT NULL,
  `date_from` varchar(15) NOT NULL,
  `date_to` varchar(15) NOT NULL,
  `transaction_id` varchar(25) NOT NULL,
  `car_id` varchar(15) NOT NULL,
  `idprof` varchar(50) NOT NULL,
  `license` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `proff` varchar(50) NOT NULL,
  `lic_no` varchar(50) NOT NULL,
  `booking_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carstbl`
--

CREATE TABLE `carstbl` (
  `car_id` varchar(15) NOT NULL,
  `car_name` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `car_category` varchar(25) NOT NULL,
  `car_rent` varchar(25) NOT NULL,
  `avail_no` varchar(25) NOT NULL,
  `car_img` varchar(50) NOT NULL,
  `doors` varchar(10) NOT NULL,
  `passenger` varchar(10) NOT NULL,
  `transmission` varchar(25) NOT NULL,
  `luggage` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carstbl`
--

INSERT INTO `carstbl` (`car_id`, `car_name`, `brand`, `car_category`, `car_rent`, `avail_no`, `car_img`, `doors`, `passenger`, `transmission`, `luggage`, `ac`) VALUES
('Luxary001', 'Aston martin', 'Aston Martin', 'Luxary', '750', '5', 'images/Luxary/Aston martin.jpg', '2', '2', 'Auto', '0', 'Yes'),
('Sports001', 'abc', 'gtr', 'Sports', '650', '5', 'images/Sports/abc2.jpg', '2', '2', 'Auto', '0', 'Yes'),
('Sports002', 'Ford Mustang Gt', 'Ford Mustang', 'Sports', '550', '5', 'images/Sports/Ford Mustang Gt.jpg', '2', '4', 'Auto', '3', 'Yes'),
('Suvs001', 'Mahindra XUV 3XO', 'Mahindra', 'Suvs', '150', '10', 'images/Suvs/Mahindra XUV 3XO.jpg', '5', '5', 'manual & automatic', '5', 'Yes'),
('Suvs002', 'Bentley Bentayga', 'Bentley', 'Suvs', '600', '10', 'images/Suvs/Bentley Bentayga.jpg', '4', '6', 'Auto', '5', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktbl`
--

CREATE TABLE `feedbacktbl` (
  `Sno` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `feedback` varchar(25) NOT NULL,
  `message` varchar(250) NOT NULL,
  `ratings` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `querytbl`
--

CREATE TABLE `querytbl` (
  `S_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `number` varchar(15) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `query` varchar(250) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `Sid` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `bookingtbl`
--
ALTER TABLE `bookingtbl`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `carstbl`
--
ALTER TABLE `carstbl`
  ADD UNIQUE KEY `car_id` (`car_id`),
  ADD KEY `car_id_2` (`car_id`);

--
-- Indexes for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  ADD UNIQUE KEY `Sno` (`Sno`);

--
-- Indexes for table `querytbl`
--
ALTER TABLE `querytbl`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD UNIQUE KEY `user_emal` (`user_email`),
  ADD UNIQUE KEY `Sid` (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacktbl`
--
ALTER TABLE `feedbacktbl`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `querytbl`
--
ALTER TABLE `querytbl`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
