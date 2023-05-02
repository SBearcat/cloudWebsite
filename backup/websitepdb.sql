-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 02, 2023 at 03:43 AM
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
-- Database: `websitepdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `filestorage`
--

CREATE TABLE `filestorage` (
  `id` int(11) NOT NULL,
  `users` varchar(255) DEFAULT NULL,
  `file` longblob DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `upload_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userslogged`
--

CREATE TABLE `userslogged` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `signupdate` datetime NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `file_name` longblob DEFAULT NULL,
  `uploaded_on` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userslogged`
--

INSERT INTO `userslogged` (`id`, `user_name`, `password`, `email`, `signupdate`, `user_id`, `file_name`, `uploaded_on`) VALUES
(2, 'johndoe', '1234', 'doej23@email.com', '0000-00-00 00:00:00', 8904983, 0x30, '0'),
(3, 'MaryAnn', '4567', 'MA123@excite.com', '0000-00-00 00:00:00', 2147483647, 0x30, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filestorage`
--
ALTER TABLE `filestorage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userslogged`
--
ALTER TABLE `userslogged`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filestorage`
--
ALTER TABLE `filestorage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userslogged`
--
ALTER TABLE `userslogged`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
