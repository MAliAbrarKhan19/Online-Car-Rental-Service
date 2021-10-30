-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2021 at 03:54 PM
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
  `booking_slno` varchar(255) DEFAULT NULL,
  `booking_time` varchar(255) DEFAULT NULL,
  `booking_date` varchar(255) DEFAULT NULL,
  `booking_name` varchar(255) DEFAULT NULL,
  `booking_mobile` varchar(255) DEFAULT NULL,
  `booking_email` varchar(255) DEFAULT NULL,
  `booking_passengernum` varchar(255) DEFAULT NULL,
  `booking_pickuptime` varchar(255) DEFAULT NULL,
  `booking_pickupdate` varchar(255) DEFAULT NULL,
  `booking_pickupaddress` varchar(255) DEFAULT NULL,
  `booking_dropoffaddress` varchar(255) DEFAULT NULL,
  `booking_ride_id` varchar(255) DEFAULT NULL,
  `booking_numofcars` int(100) DEFAULT NULL,
  `booking_bkashno` varchar(255) DEFAULT NULL,
  `booking_bkashtxid` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `booking_cost` int(200) DEFAULT NULL,
  `booking_days` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_slno`, `booking_time`, `booking_date`, `booking_name`, `booking_mobile`, `booking_email`, `booking_passengernum`, `booking_pickuptime`, `booking_pickupdate`, `booking_pickupaddress`, `booking_dropoffaddress`, `booking_ride_id`, `booking_numofcars`, `booking_bkashno`, `booking_bkashtxid`, `username`, `booking_cost`, `booking_days`) VALUES
(1, NULL, '10:20 am', 'Fri, 29-Oct-2021  ', 'M. Ali Abrar Khan', '', NULL, '', '', '', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', '', '5', 2, NULL, NULL, NULL, NULL, NULL);

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
  `ride_cost` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`ride_id`, `ride_type`, `ride_name`, `ride_image`, `ride_passengercap`, `ride_baggagecap`, `ride_count`, `ride_count_status`, `ride_cost`) VALUES
(4, 'Four Wheeler', 'Toyota primo', './img/toyota_primo.jpg', 6, 8, 600, 600, 1000),
(3, 'Four Wheeler', 'Toyota Coralla', './img/ex_corolla.jpg', 4, 6, 800, 777, 2000),
(5, 'Eight wheels', 'Hondai Bus', './img/20seatbus.jpg', 20, 100, 400, 400, 10000),
(6, 'Eight wheels', 'Bus Large', './img/40seatbus.jpg', 40, 230, 300, 200, 12000),
(7, 'Four Wheeler', 'Scorpio Jeep/ SUV', './img/jeep.jpg', 8, 20, 500, 300, 3000),
(8, 'Three Wheeler', 'Auto Rickshaw-Battery ', './img/autorikshaw.jpg', 5, 6, 220, 208, 800),
(9, 'Three Wheeler', 'Auto Rickshaw-Battery 2p', './img/autorikshaw2.jpg', 2, 3, 330, 328, 900);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `upass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `upass`) VALUES
(3, 'abrar', 'ab@gmail.com', '1234');

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
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `ride_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
