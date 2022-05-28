-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2022 at 07:28 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sezi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_read` int(11) NOT NULL DEFAULT '0',
  `contact_read_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_subject`, `contact_message`, `contact_date`, `contact_read`, `contact_read_date`) VALUES
(11, 'Test', 'test@hotmail.com', '', 'Test', 'Test', '2022-05-06 14:58:26', 1, '2022-05-07 11:52:42'),
(13, 'No', 'no@hotmail.com', '0539 532 00 00', 'No', 'No', '2022-05-07 08:15:55', 1, '2022-05-23 17:50:46'),
(14, 'new', 'new@hotmail.com', '0561 000 6161', 'New', 'nl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu denemenl2br fonksiyonu deneme\r\nnl2br fonksiyonu deneme\r\n\r\nnl2br fonksiyonu deneme', '2022-05-07 08:37:08', 0, ''),
(15, 'Erdem', '123@hotmail.com', '123', '123', '123', '2022-05-23 14:51:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `message_id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `message_subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`message_id`, `sender_name`, `message_subject`, `message`, `message_date`) VALUES
(9, 'Erdem Özen', 'İlk Test', 'İlk Mesaj', '2022-05-16 13:44:52'),
(17, 'Erdem', 'test', 'test', '2022-05-23 12:48:45'),
(22, 'Test2', 'Test2', '<script>alert(1)</script>', '2022-05-28 08:22:46'),
(23, 'Erdem', 'Test', '<script>alert(1)</script>', '2022-05-28 13:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs2`
--

CREATE TABLE `logs2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sil`
--

CREATE TABLE `sil` (
  `deneme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_url` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_rank` int(11) NOT NULL DEFAULT '3',
  `user_about` text,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_url`, `user_password`, `user_rank`, `user_about`, `user_date`) VALUES
(5, 'deneme', 'deneme', 'deneme', 3, 'deneme hakkında', '2022-05-08 13:07:39'),
(8, 'erdem', 'erdem', 'erdem2', 3, 'Erdem hakkında bilgileri.', '2022-05-08 18:25:18'),
(10, 'admin', 'admin', 'erdem2', 1, 'Admin hakkında sayfası\r\n\r\n', '2022-05-14 17:20:00'),
(12, 'test', 'test', 'test', 3, 'Test hakkında', '2022-05-18 23:37:17'),
(13, 'test2', 'test2', 'test2', 3, 'test2 hakkında', '2022-05-23 12:38:59'),
(14, 'test3', 'test3', 'test3', 3, 'test3 hakkında', '2022-05-25 18:16:39'),
(16, 'bruteforce', 'bruteforce', 'secret', 3, NULL, '2022-05-26 16:10:34'),
(17, ' erdem', ' erdem', 'test', 3, 'test', '2022-05-28 09:21:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs2`
--
ALTER TABLE `logs2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs2`
--
ALTER TABLE `logs2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
