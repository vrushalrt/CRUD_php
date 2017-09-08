-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 04:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `con_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `skills` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `contact`, `gender`, `skills`, `timestamp`) VALUES
(4, 'Joe Macmillan', 9876543210, 'male', 'php php&mysql jquery', '2017-08-30 09:53:42'),
(5, 'Gordon Clark', 9876543210, 'male', 'php php&mysql jquery', '2017-08-30 09:53:53'),
(16, 'Cameran Howe', 987654321, 'female', 'php jquery ajax', '2017-08-31 10:46:52'),
(29, 'Vrushal Raut', 8087161234, 'male', 'php php&mysql jquery ajax', '2017-09-03 06:31:21'),
(57, 'Success Updates', 8087161234, 'male', 'php php&mysql jquery ajax', '2017-09-03 17:38:43'),
(69, 'Test Add', 8087161234, 'female', 'php&mysql jquery ajax', '2017-09-06 04:32:08'),
(70, 'Test Add 2', 8087161234, 'male', 'php php&mysql', '2017-09-06 04:33:50'),
(71, 'Test ADD 4', 80871661234, 'female', 'php php&mysql jquery ajax', '2017-09-06 04:51:15'),
(73, 'Finally you did it', 80871661234, 'female', 'php php&mysql jquery ajax', '2017-09-08 06:05:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
