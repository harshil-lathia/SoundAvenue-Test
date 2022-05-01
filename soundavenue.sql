-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundavenue`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signup_date_time` datetime DEFAULT current_timestamp(),
  `last_login_date_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `signup_date_time`, `last_login_date_time`) VALUES
(1, 'test', 'test', 'test@gmail.com', 'pass', '2022-05-01 12:40:14', '2022-05-04 08:53:47'),
(2, 'test', 'test', 'harshil.lathia@somaiya.edu', 'ttt', '2022-05-01 12:24:32', '2022-05-01 07:18:20'),
(5, 'Ram', 'A', 'rama@gmail.com', 'pass', '2022-05-03 12:50:45', '2022-05-01 07:20:47'),
(6, 'Ram', 'A', 'pateljai93@gmail.com', 'pass', '2022-05-01 12:49:59', '2022-05-01 07:20:30'),
(7, 'John', 'B', 'john@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 12:52:18', '2022-05-01 07:25:50'),
(8, 'test', 'test', 'testq@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 13:03:42', '2022-04-30 21:37:03'),
(9, 'test', 'www', 'qwer@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', NULL, '2022-05-03 14:30:02'),
(10, 'test', 'test', 'testa@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 14:58:16', '2022-04-30 21:28:45'),
(11, 'test', 'test', 'test112@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 15:15:48', '2022-05-03 14:29:42'),
(12, 'test', 'A', 'testw@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 15:26:32', '2022-05-02 14:29:47'),
(13, 'Ram', 'test', 'john2@gmail.com', 'd7f69547d875d5984c7c0d185f62a81b', '2022-05-01 15:27:19', '2022-05-16 14:29:53'),
(14, 'test', 'test', 'john4@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f', '2022-05-01 15:29:06', '2022-05-02 14:29:56'),
(15, 'Raju', 'S', 'rajus@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2022-05-01 16:54:33', '2022-05-01 11:56:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
