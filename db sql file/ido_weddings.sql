-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 07:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ido_weddings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `date`) VALUES
(1, 'jaidev@gmail.com', 'jaidev@9943', '2022-02-26 11:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `banquet_hall_bookings`
--

CREATE TABLE `banquet_hall_bookings` (
  `id` int(11) NOT NULL,
  `hall_name` varchar(222) NOT NULL,
  `full_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `number_of_guests` varchar(222) NOT NULL,
  `price_per_plate` varchar(222) NOT NULL,
  `total_bill` varchar(222) NOT NULL,
  `date_of_event` varchar(222) NOT NULL,
  `number_of_rooms` varchar(222) NOT NULL,
  `function` varchar(222) NOT NULL,
  `function_time` varchar(222) NOT NULL,
  `booked_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banquet_hall_bookings`
--

INSERT INTO `banquet_hall_bookings` (`id`, `hall_name`, `full_name`, `email`, `phone`, `number_of_guests`, `price_per_plate`, `total_bill`, `date_of_event`, `number_of_rooms`, `function`, `function_time`, `booked_at`) VALUES
(4, 'The Grand Ballroom', 'rajkamal', 'rajkamalgautam2001@gmail.com', '9859859855', '45', '3700', '166500', '2022-02-22', '20', 'Mehendi', 'Evening', '2022-02-25 15:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'rajkamal', 'raj@gmail.com', 'project', 'wedding planner', '2022-02-25 04:55:58'),
(2, 'jaideev', 'jaideev@gmail.com', 'project update', 'add payment gateway', '2022-02-25 05:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriber`
--

CREATE TABLE `newsletter_subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter_subscriber`
--

INSERT INTO `newsletter_subscriber` (`id`, `email`, `date`) VALUES
(1, 'jaideb@gmail.com', '2022-02-25 10:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `date_of_birth` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `token` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `email`, `password`, `city`, `date_of_birth`, `gender`, `token`, `date`) VALUES
(2, 'rajkamal', 'gautam', 'rajkamalgautam2001@gmail.com', 'marshall', 'mumbai', '2001-10-18', 'Male', '17834829', '2022-02-24 15:48:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banquet_hall_bookings`
--
ALTER TABLE `banquet_hall_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriber`
--
ALTER TABLE `newsletter_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banquet_hall_bookings`
--
ALTER TABLE `banquet_hall_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter_subscriber`
--
ALTER TABLE `newsletter_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
