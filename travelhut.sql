-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 01:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelhut`
--

-- --------------------------------------------------------

--
-- Table structure for table `th_admin`
--

CREATE TABLE `th_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_admin`
--

INSERT INTO `th_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `th_booking`
--

CREATE TABLE `th_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `from_city` varchar(255) NOT NULL,
  `to_city` varchar(255) NOT NULL,
  `from_date` date NOT NULL DEFAULT current_timestamp(),
  `to_date` date NOT NULL,
  `num_person` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `th_feedback`
--

CREATE TABLE `th_feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `th_hotel`
--

CREATE TABLE `th_hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_hotel`
--

INSERT INTO `th_hotel` (`id`, `name`, `price`, `address`, `city`, `state`) VALUES
(1, 'Hotel Aurika', 8000, '01, Kala Rohi, Rani Rd', 'Udaipur', 'Rajasthan '),
(2, 'Hotel Oberoi Amarvilas', 6000, 'Taj East Gate Rd, Paktola, Tajganj', 'Agra', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `th_package`
--

CREATE TABLE `th_package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_package`
--

INSERT INTO `th_package` (`id`, `package_name`) VALUES
(1, 'Best Selling Destinations');

-- --------------------------------------------------------

--
-- Table structure for table `th_package_details`
--

CREATE TABLE `th_package_details` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `subpackage_id` int(11) NOT NULL,
  `hotel` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `days` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_package_details`
--

INSERT INTO `th_package_details` (`id`, `package_id`, `subpackage_id`, `hotel`, `price`, `days`, `nights`, `description`) VALUES
(3, 1, 1, 1, 12000, 5, 4, 'Luxury Rooms, visit to 4 sightseeings, 5 days / 4 nights package, breakfast/lunch/dinner, local transport included, tour guide. '),
(5, 1, 2, 2, 15000, 4, 3, 'Breakfast/Lunch/Dinner, 3 sightseeing visits, local transport available for visit, Luxury hotels.'),
(6, 1, 1, 1, 2000, 1, 1, 'Luxury hotel'),
(7, 1, 1, 2, 100, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `th_subpackage`
--

CREATE TABLE `th_subpackage` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `subpackage_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_subpackage`
--

INSERT INTO `th_subpackage` (`id`, `package_id`, `subpackage_name`) VALUES
(1, 1, 'Udaipur'),
(2, 1, 'Agra');

-- --------------------------------------------------------

--
-- Table structure for table `th_user`
--

CREATE TABLE `th_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `register_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `th_user`
--

INSERT INTO `th_user` (`id`, `name`, `username`, `password`, `dob`, `mobile`, `register_on`, `status`) VALUES
(1, 'ABC', 'abc', '81dc9bdb52d04dc20036dbd8313ed055', '2001-01-01', 9660111869, '2021-06-02 16:00:53', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `th_admin`
--
ALTER TABLE `th_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_booking`
--
ALTER TABLE `th_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `th_feedback`
--
ALTER TABLE `th_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_hotel`
--
ALTER TABLE `th_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_package`
--
ALTER TABLE `th_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th_package_details`
--
ALTER TABLE `th_package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `subpackage_id` (`subpackage_id`),
  ADD KEY `hotel` (`hotel`);

--
-- Indexes for table `th_subpackage`
--
ALTER TABLE `th_subpackage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `th_user`
--
ALTER TABLE `th_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `th_admin`
--
ALTER TABLE `th_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `th_booking`
--
ALTER TABLE `th_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `th_feedback`
--
ALTER TABLE `th_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `th_hotel`
--
ALTER TABLE `th_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `th_package`
--
ALTER TABLE `th_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `th_package_details`
--
ALTER TABLE `th_package_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `th_subpackage`
--
ALTER TABLE `th_subpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `th_user`
--
ALTER TABLE `th_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `th_booking`
--
ALTER TABLE `th_booking`
  ADD CONSTRAINT `th_booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `th_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `th_package_details`
--
ALTER TABLE `th_package_details`
  ADD CONSTRAINT `th_package_details_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `th_package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `th_package_details_ibfk_2` FOREIGN KEY (`subpackage_id`) REFERENCES `th_subpackage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `th_package_details_ibfk_3` FOREIGN KEY (`hotel`) REFERENCES `th_hotel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `th_subpackage`
--
ALTER TABLE `th_subpackage`
  ADD CONSTRAINT `th_subpackage_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `th_package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
