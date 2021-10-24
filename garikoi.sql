-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2021 at 07:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garikoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'toufiq', 'admin@gmail.com', '90512d30e18c46f42edab1553a398801'),
(3, 'abrar', 'ad@ad.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(100) NOT NULL,
  `booking_datetime` timestamp(6) NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `booking_time` varchar(255) DEFAULT NULL,
  `booking_date` varchar(255) DEFAULT NULL,
  `booking_name` varchar(255) DEFAULT NULL,
  `booking_mobile` varchar(255) DEFAULT NULL,
  `booking_email` varchar(255) DEFAULT NULL,
  `booking_passengernum` int(100) DEFAULT NULL,
  `booking_pickuptime` varchar(255) DEFAULT NULL,
  `booking_pickupdate` varchar(255) DEFAULT NULL,
  `booking_pickupaddress` varchar(255) DEFAULT NULL,
  `booking_dropoffaddress` varchar(255) DEFAULT NULL,
  `booking_ride_id` int(100) DEFAULT NULL,
  `booking_numofcars` int(100) DEFAULT NULL,
  `booking_cost` int(200) NOT NULL,
  `booking_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_datetime`, `booking_time`, `booking_date`, `booking_name`, `booking_mobile`, `booking_email`, `booking_passengernum`, `booking_pickuptime`, `booking_pickupdate`, `booking_pickupaddress`, `booking_dropoffaddress`, `booking_ride_id`, `booking_numofcars`, `booking_cost`, `booking_status`) VALUES
(1, NULL, '10:04 am', 'Wed, 09-Sep-2020  ', 'ratul', '01889955766', NULL, 6, '13:05', '2020-09-09', '33, strt', 'daulatpur', 4, 1, 0, 'yet not'),
(2, NULL, '10:15 am', 'Wed, 09-Sep-2020  ', 'Mr hassan', '01889945545', NULL, 30, '14:15', '2020-09-16', 'Shib Bari Mor, Khulna', 'Mogla EPZ', 6, 1, 1200, 'yet not'),
(3, NULL, '10:15 am', 'Wed, 09-Sep-2020  ', 'Mr hassan', '01889945545', NULL, 30, '14:15', '2020-09-16', 'Shib Bari Mor, Khulna', 'Mogla EPZ', 6, 1, 0, 'yet not'),
(4, NULL, '10:17 am', 'Wed, 09-Sep-2020  ', 'kaes', '01812121212', NULL, 5, '11:17', '2020-09-28', 'Shib Bari Mor, Khulna', 'jeshore', 7, 1, 1200, 'yet not'),
(5, NULL, '10:24 am', 'Wed, 09-Sep-2020  ', 'ratul', '01889955766', NULL, 4, '00:24', '2020-09-16', 'Shib Bari Mor, Khulna', 'daulatpur', 3, 1, 1200, 'no'),
(6, NULL, '10:24 am', 'Wed, 09-Sep-2020  ', 'ratul', '01889955766', NULL, 4, '00:24', '2020-09-16', 'Shib Bari Mor, Khulna', 'daulatpur', 3, 1, 1000, 'on the way');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ride_id` int(100) NOT NULL,
  `ride_type` varchar(255) DEFAULT NULL,
  `ride_name` varchar(255) DEFAULT NULL,
  `ride_image` varchar(255) NOT NULL,
  `ride_passengercap` int(100) DEFAULT NULL,
  `ride_baggagecap` int(100) DEFAULT NULL,
  `ride_count` int(100) DEFAULT NULL,
  `ride_count_status` int(100) DEFAULT NULL,
  `ride_cost` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ride_id`, `ride_type`, `ride_name`, `ride_image`, `ride_passengercap`, `ride_baggagecap`, `ride_count`, `ride_count_status`, `ride_cost`) VALUES
(4, 'Four Wheeler', 'Toyota primo', './img/toyota_primo.jpg', 6, 8, 6, 6, '1000'),
(3, 'Four Wheeler', 'Toyota Coralla', './img/ex_corolla.jpg', 4, 6, 8, 7, '2000'),
(5, 'Eight wheels', 'Hondai Bus', './img/20seatbus.jpg', 20, 100, 4, 4, '10000'),
(6, 'Eight wheels', 'Bus Large', './img/40seatbus.jpg', 40, 230, 3, 2, '12000'),
(7, 'Four Wheeler', 'Scorpio Jeep/ SUV', './img/jeep.jpg', 8, 20, 5, 3, '3000'),
(8, 'Three Wheeler', 'Auto Rickshaw-Battery ', './img/autorikshaw.jpg', 5, 6, 20, 10, '800'),
(9, 'Three Wheeler', 'Auto Rickshaw-Battery 2p', './img/autorikshaw2.jpg', 2, 3, 30, 30, '900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_ride_id` (`booking_ride_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `ride_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
