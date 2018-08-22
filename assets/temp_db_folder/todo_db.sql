-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2018 at 02:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_data`
--

CREATE TABLE `todo_data` (
  `userid` varchar(10) NOT NULL,
  `header` varchar(30) NOT NULL,
  `body` text NOT NULL,
  `starttime` varchar(15) NOT NULL,
  `endtime` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo_data`
--

INSERT INTO `todo_data` (`userid`, `header`, `body`, `starttime`, `endtime`, `status`) VALUES
('usr-001', 'To-Do App in PHP', 'Creating a full feature To-DO App in PHP using OOPs concept.', '1534929055', '1534999055', 0),
('usr-002', 'To-Do App in yii2 framework', 'Creating a full feature To-Do App in yii2 a PHP framework.', '1534729055', '1534929955', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_data`
--
ALTER TABLE `todo_data`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
