-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `tid` bigint(20) NOT NULL,
  `payer` varchar(25) NOT NULL,
  `payee` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `items` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(35) NOT NULL,
  `htno` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pin` varchar(4) NOT NULL,
  `balance` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `htno`, `mobile`, `email`, `password`, `pin`, `balance`) VALUES
('demo', '20261A0506', '9381373847', 'aravindreddyy.@gmail.com', 'abcd', '1223', 999984),
('new', '20261A0522', '7013873682', 'new@mgit', '1234', 'news', 0),
('harish', '20261A6614', '7013873682', 'xyz@gmail.com', '0000', '7878', 0),
('canteen', 'canteen', '9381373847', 'canteen@mgit', '1234', '9999', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `payer` varchar(25) NOT NULL,
  `payee` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `htno` (`htno`),
  ADD UNIQUE KEY `pin` (`pin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
