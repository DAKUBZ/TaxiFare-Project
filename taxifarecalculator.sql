-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 08:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxifarecalculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `driverdetails`
--

CREATE TABLE `driverdetails` (
  `DriverID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Cellphone` text NOT NULL,
  `Address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driverdetails`
--

INSERT INTO `driverdetails` (`DriverID`, `Email`, `Password`, `FName`, `LName`, `Cellphone`, `Address`) VALUES
(1, 'weirdsmile1@gmail.com', '123456', 'Mzamo', 'Mbhele', '0680033397', 'J1378 Ngome Road Umlazi'),
(3, 'repz1.nr@gmail.com', 'Reply@9705', 'Nhlamulo2', 'Shikweni2', '0735712985', 'Zandspruit Transit Camp 786');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `driver_id`, `price`) VALUES
(1, 3, 40),
(2, 3, 40),
(3, 3, 40),
(4, 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `cash` double NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `cash`, `driver_id`) VALUES
(1, 40, 0),
(2, 40, 0),
(3, 40, 0),
(4, 40, 0),
(5, 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `Date` text NOT NULL,
  `Time` text NOT NULL,
  `Cash` text NOT NULL,
  `Passengers` text NOT NULL,
  `Fare` text NOT NULL,
  `DriverCell` text NOT NULL,
  `changeAmt` double NOT NULL,
  `locationId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `Date`, `Time`, `Cash`, `Passengers`, `Fare`, `DriverCell`, `changeAmt`, `locationId`) VALUES
(2, '2022/04/24', '11:20:09pm', '400', '4', '100', '+27788563580', 0, 0),
(3, '2022/04/24', '11:22:11pm', '300', '3', '100', '+27788563580', 0, 0),
(4, '2022/04/24', '11:24:58pm', '400', '2', '200', '+27788563580', 0, 0),
(5, '2022/04/25', '12:35:46am', '600', '2', '300', '+27788563580', 0, 0),
(6, '2024/05/30', '07:26:35pm', '200', '10', '40', '', -200, 1),
(7, '2024/05/30', '07:26:35pm', '200', '10', '40', '', -200, 2),
(8, '2024/05/30', '07:26:35pm', '200', '10', '40', '', -200, 3),
(9, '2024/05/30', '07:33:17pm', '100', '2', '40', '', 20, 1),
(10, '2024/05/30', '07:33:17pm', '100', '2', '40', '', 20, 2),
(11, '2024/05/30', '07:33:17pm', '100', '2', '40', '', 20, 3),
(12, '2024/05/30', '07:33:17pm', '100', '2', '40', '', 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

CREATE TABLE `taxi` (
  `taxiRegistration` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `car_name` int(11) NOT NULL,
  `model` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`taxiRegistration`, `driver_id`, `id`, `car_name`, `model`) VALUES
('trs 345 gfd', 3, 1, 0, 0),
('trs 345 gfd', 3, 2, 0, 0),
('trs 345 gfd', 3, 3, 0, 0),
('trs 345 gfd', 3, 4, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driverdetails`
--
ALTER TABLE `driverdetails`
  ADD PRIMARY KEY (`DriverID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driverdetails`
--
ALTER TABLE `driverdetails`
  MODIFY `DriverID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `taxi`
--
ALTER TABLE `taxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
