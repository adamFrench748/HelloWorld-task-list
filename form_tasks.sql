-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 11:02 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i9370544_wp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_tasks`
--

CREATE TABLE `form_tasks` (
  `ID` bigint(20) NOT NULL,
  `date_submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` longtext NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=deleted, 1=active, 2=complete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_tasks`
--

INSERT INTO `form_tasks` (`ID`, `date_submitted`, `message`, `status`) VALUES
(1, '2023-07-13 17:46:28', 'Task #1 edited', 2),
(2, '2023-07-13 17:53:02', 'Task to complete Task', 2),
(3, '2023-07-13 17:58:23', 'Test Task', 0),
(4, '2023-07-13 18:02:06', 'Take dogs for a walk', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_tasks`
--
ALTER TABLE `form_tasks`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_tasks`
--
ALTER TABLE `form_tasks`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
