-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 10:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `Institute Name` varchar(30) NOT NULL,
  `Institute ID` int(5) NOT NULL,
  `Item Name` varchar(20) NOT NULL,
  `Item Discription` text NOT NULL,
  `Price Per Item` int(10) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Approved` varchar(10) DEFAULT NULL,
  `Count` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ID`, `Institute Name`, `Institute ID`, `Item Name`, `Item Discription`, `Price Per Item`, `Quantity`, `Total`, `Approved`, `Count`, `created_at`) VALUES
(185, 'asdf', 21, 'Furniture', 'faf', 51, 151, 7701, 'True', 0, '2022-10-08 06:54:08'),
(186, 'asdf', 21, 'Gym-Equipment', 'asdfsdf', 14, 1516, 21224, 'True', 0, '2022-10-08 07:06:47'),
(188, 'GEC PATAN', 14, 'Gym-Equipment', 'en', 151, 51, 7701, 'True', 0, '2022-10-08 07:06:53'),
(189, 'GEC PATAN', 14, 'PC', 'sdahsf', 15, 41, 615, 'False', 1, '2022-10-08 07:06:54'),
(190, 'asdf', 21, 'Furniture', 'sfsdfs', 121, 121000, 14641000, 'True', 0, '2022-10-08 07:21:39'),
(191, 'asdf', 21, 'Furniture', 'enteer', 2, 20, 40, 'False', 1, '2022-10-08 07:23:29'),
(192, 'asdf', 21, 'Gym-Equipment', 'sfsdfs', 1, 15, 15, 'False', 0, '2022-10-08 08:27:14'),
(193, 'asdf', 21, 'PC', 'jfsf', 2, 14, 28, 'False', 0, '2022-10-08 08:27:14'),
(195, 'GEC PALANPUR', 58, 'Gym-Equipment', 'enteer', 4141, 23, 95243, 'False', 0, '2022-10-08 08:31:49'),
(196, 'GEC PALANPUR', 58, 'PC', '', 1, 1, 1, 'False', 0, '2022-10-08 08:31:49'),
(197, 'GEC PALANPUR', 58, 'Stationary', '', 5, 5, 25, 'True', 0, '2022-10-08 08:31:48'),
(198, 'GEC PALANPUR', 58, 'Server', 'enteer', 4, 8, 32, 'True', 0, '2022-10-08 08:31:47'),
(199, 'GEC PALANPUR', 58, 'Gym-Equipment', '', 12, 12, 144, NULL, 0, '2022-10-08 08:38:59'),
(200, 'GEC PALANPUR', 58, 'PC', 'sfsdfs', 5, 1, 5, NULL, 0, '2022-10-08 08:38:59'),
(201, 'GEC PALANPUR', 58, 'Stationary', 'sfsdfs', 14, 10, 140, NULL, 0, '2022-10-08 08:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `login admin`
--

CREATE TABLE `login admin` (
  `Department ID` int(11) NOT NULL,
  `Department Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login admin`
--

INSERT INTO `login admin` (`Department ID`, `Department Name`, `Email`, `Password`) VALUES
(1, 'education Department', 'Ss@gmail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `login details`
--

CREATE TABLE `login details` (
  `Login ID` int(11) NOT NULL,
  `Institute Name` varchar(30) NOT NULL,
  `Institute ID` int(5) NOT NULL,
  `Department Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` int(11) NOT NULL,
  `Contact No.` int(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login details`
--

INSERT INTO `login details` (`Login ID`, `Institute Name`, `Institute ID`, `Department Name`, `Email`, `Password`, `Contact No.`, `Address`) VALUES
(73, 'asdf', 21, 'sadhfasf', 'sa@gmail.com', 123654789, 2032020, 'ghhfasf'),
(74, 'Patel', 12, 'Computer', 'sh@gmail.com', 123123123, 1651616515, 'fjsjfkhasfjksaf'),
(76, 'GEC PATAN', 25, 'education Department', 'Sas@gmail.com', 159357123, 56551, 'sfsdfasfkjsfkaf'),
(78, 'GEC PATAN', 14, 'fasdfh', 'sd@gmail.com', 123456456, 1231231321, 'ashdfkhasjkdfassf'),
(79, 'GEC PALANPUR', 58, 'hemssf', 'SF@gmail.com', 123789456, 2147483647, '0231gdfgdgsdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login admin`
--
ALTER TABLE `login admin`
  ADD PRIMARY KEY (`Department ID`);

--
-- Indexes for table `login details`
--
ALTER TABLE `login details`
  ADD PRIMARY KEY (`Login ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Contact No.` (`Contact No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `login admin`
--
ALTER TABLE `login admin`
  MODIFY `Department ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login details`
--
ALTER TABLE `login details`
  MODIFY `Login ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
