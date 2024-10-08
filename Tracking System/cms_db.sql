-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 06:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(1, 'SARL0PqMogyOWhF', 'No.12,Yatwathura,Hewaheta', 'Mathara', 'South', '12400', 'Sri Lanka', '0766420314', '2022-08-17 17:41:17'),
(3, 'KKRTab3mYBgAX71t', 'No.21/32,Okandhawatta,Panthiya', 'Mathugama', 'Western', '12100', 'Sri Lanka', '0342243843', '2022-08-17 16:45:05'),
(4, 'WPbUK5mEh96f0Zc', 'Uwapaenagama, Temple Rd', 'adulla', 'Uva', '99999', 'Sri Lanka', '0552224122', '2022-08-17 13:31:49'),
(5, 'sfG8DjB5Tz3XmWZ', 'Galle Rd, mahakandha', 'Hambanthota', 'South', '12100', 'Sri Lanka', '0769407603', '2022-08-17 18:14:55'),
(6, 'woqczEIh7WCl8v4', 'makehelwala, muthur', 'Ampara', 'Estern', '451112', 'Sri Lanka', '0324457856', '2022-08-17 18:16:05'),
(7, 'T7Ve9hxZqLD6oOj', 'Aiyanayaka Rd, rabukpoth', 'Jaffna', 'Noth', '000045', 'Sri Lanka', '7778954562', '2022-08-17 18:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` varchar(30) NOT NULL,
  `to_branch_id` varchar(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`) VALUES
(4, '514912669061', 'Mahindha Rajapaksha', 'passra Rd, Badulla', '0345578954', 'Gotabaya Rajapaksha', 'Colombo', '01124569875', 2, '4', '1', '23kg', '12in', '12in', '15in', 1900, 6, '2020-11-27 13:52:14'),
(6, '505604168988', 'Denuwan Yashodhana', 'Gamapaha', '0114523654', 'Thisata Kavinga', 'Mathara', '03422546845', 1, '1', '', '23kg', '12in', '12in', '15in', 2500, 3, '2020-11-27 14:06:42'),
(7, '522894510610', 'Shashitha Akalanka', 'Mathugama', '0769407603', 'hasith aSampath', 'No 21/32,Okandhawatta,Panthiya,Mathugama', '0342243843', 2, '3', '4', '12kg', '2cm', '22cm', '12cm', 12100, 5, '2022-08-17 17:56:21'),
(8, '600421574154', 'Akalnakaa', 'Panthiya,Jaffna', '333254463', 'Shashitha', 'Jaffana', '11254532552', 1, '7', '7', '50g', '12cm', '6cm', '2cm', 1240, 1, '2022-08-17 18:19:04'),
(9, '823271756404', 'Akalnakaa', 'Panthiya,Jaffna', '333254463', 'Shashitha', 'Jaffana', '11254532552', 1, '7', '7', '49g', '15cm', '5cm', '2cm', 3800, 4, '2022-08-17 18:19:04'),
(10, '913490563569', 'Swuwandhi', 'badulla', '112352145', 'silava', 'Ampara', '44585556555', 2, '4', '6', '112g', '51cm', '12cm', '44cm', 18000, 2, '2022-08-17 18:20:16'),
(11, '914079082282', 'Thisara', 'Rabukpotha', '1111111111111111', 'Kavinga', 'galle', '222222222222222', 2, '5', '4', '11g', '12cm', '12cm', '12cm', 122222, 0, '2022-08-17 18:25:29'),
(12, '252159384977', 'lakmal', 'monaragala', '4452212366', 'usama', 'Aluthgama', '66852456335', 1, '4', '6', '1kg', '22cm', '5cm', '123cm', 222000, 7, '2022-08-17 18:30:34'),
(13, '059958008254', 'Shashitha Akalanka', 'No 21/32,Okandhawatta,Panthiya,Mathugama', '1111111111111111', 'Shashitha Akalanka', 'No 21/32,Okandhawatta,Panthiya,Mathugama', '0342243843', 2, '3', '3', '112g', '12cm', '12cm', '12cm', 12100, 0, '2022-08-27 00:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 10, 2, '2022-08-17 18:23:04'),
(12, 8, 3, '2022-08-17 18:23:26'),
(13, 9, 4, '2022-08-17 18:23:39'),
(14, 7, 5, '2022-08-17 18:23:54'),
(15, 4, 6, '2022-08-17 18:24:09'),
(16, 6, 8, '2022-08-17 18:35:45'),
(17, 6, 2, '2022-08-17 18:36:22'),
(18, 6, 3, '2022-08-17 18:36:32'),
(19, 12, 0, '2022-08-17 18:54:08'),
(20, 12, 1, '2022-08-17 18:54:16'),
(21, 12, 2, '2022-08-17 18:54:23'),
(22, 12, 3, '2022-08-17 18:54:31'),
(23, 12, 4, '2022-08-17 18:54:38'),
(24, 12, 6, '2022-08-17 18:54:58'),
(25, 12, 7, '2022-08-17 18:55:06'),
(26, 8, 1, '2022-08-17 18:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `Id` int(3) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`Id`, `first_name`, `telephone`) VALUES
(1, 'Shashitha Akalanka', '0769407603');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'cms@gmail.com', '+94348456710', 'No:21/32 Okandhawatta,Panthiya,Mathugama', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 0, '2020-11-26 10:57:04'),
(2, 'Chatura', 'Dhinushaka', 'Chatura@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '2020-11-26 11:52:04'),
(3, 'Usama', 'Mohomad', 'Usama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 4, '2020-11-27 13:32:12'),
(4, 'Chamod ', 'Lakmal', 'Chamod@gmail.com', '07e1cd7dca89a1678042477183b7ac3f', 2, 4, '2022-08-17 17:47:43'),
(5, 'Thisara', 'Kavinga', 'Thisara@gamial.com', '95208585014315ab9b4baac53f616be0', 2, 3, '2022-09-06 09:07:50'),
(6, 'amila', 'lasitha', 'lasitha@gmail.com', 'e2e899765863bc0139c4335cfbafbd53', 2, 4, '2022-09-06 09:53:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
