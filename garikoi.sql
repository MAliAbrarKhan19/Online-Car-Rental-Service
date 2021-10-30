-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 06:02 AM
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
  `booking_slno` varchar(100) DEFAULT NULL,
  `booking_datetime` varchar(6) DEFAULT NULL,
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
  `booking_cost` int(200) DEFAULT NULL,
  `booking_days` int(200) DEFAULT NULL,
  `booking_status` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `booking_bkashno` varchar(255) DEFAULT NULL,
  `booking_bkashtxid` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_slno`, `booking_datetime`, `booking_time`, `booking_date`, `booking_name`, `booking_mobile`, `booking_email`, `booking_passengernum`, `booking_pickuptime`, `booking_pickupdate`, `booking_pickupaddress`, `booking_dropoffaddress`, `booking_ride_id`, `booking_numofcars`, `booking_cost`, `booking_days`, `booking_status`, `username`, `booking_bkashno`, `booking_bkashtxid`) VALUES
(1, '$booking_slno', '', '05:59 am', 'Sat, 30-Oct-2021  ', 'M. Ali Abrar Khan', '', '', 1, '07:59', '2021-10-27', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', '', 9, 2, 1800, 1, '', 'abrar', NULL, NULL),
(2, '$booking_slno', '', '05:59 am', 'Sat, 30-Oct-2021  ', 'M. Ali Abrar Khan', '', '', 1, '07:59', '2021-10-27', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', '', 9, 2, 1800, 1, '', 'abrar', NULL, NULL),
(3, '5354043010060706', '', '06:06 am', 'Sat, 30-Oct-2021  ', 'M. Al', '01939123946', 'mali@mail.com', 2, '06:06', '2021-10-28', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', 'askmdmsm', 8, 3, 2400, 1, '', 'abrar', NULL, NULL),
(4, '1272993010063906', '', '06:06 am', 'Sat, 30-Oct-2021  ', '', '', '', 2, '06:06', '2021-10-28', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', 'askmdmsm', 8, 3, 2400, 1, '', 'abrar', NULL, NULL),
(5, '1270743010084836', '', '08:36 am', 'Sat, 30-Oct-2021  ', 'Arman', '0193922222', 'mali@mail.com', 3, '01:36', '2021-10-31', '38, Sultan Ahmed Road, Moulovi Para,1st floor, , Khulna Sadar, Khulna , Bangladesh', 'kdslkam', 8, 1, 800, 1, '', 'abrar', '01923232322', 'awawewdad'),
(6, '2790523010084342', '', '08:42 am', 'Sat, 30-Oct-2021  ', 'a', '1231231223', 'mli@mail.com', 1, '', '', '', '', 8, 1, 1600, 2, '', 'abrar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `ride_id` int(100) NOT NULL,
  `ride_type` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ride_name` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ride_image` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
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
(7, 'Four Wheeler', 'Scorpio Jeep/ SUV', './img/jeep.jpg', 8, 20, 500, 283, 3000),
(8, 'Three Wheeler', 'Auto Rickshaw-Battery ', './img/autorikshaw.jpg', 5, 6, 220, 205, 800),
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
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_ride_id` (`booking_ride_id`);

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
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
