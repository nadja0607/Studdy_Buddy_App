-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 05:03 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `netID` varchar(10) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `major` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `total_hours` decimal(4,0) UNSIGNED NOT NULL,
  `p_gender` varchar(20) NOT NULL,
  `p_major` varchar(50) NOT NULL,
  `p_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`netID`, `first_name`, `last_name`, `email`, `major`, `level`, `gender`, `total_hours`, `p_gender`, `p_major`, `p_level`) VALUES
('ah4601', 'Aisha', 'Hodzic', 'ah4601@nyu.edu', 'Computer Science', 'junior', 'female', '0', 'female', 'Computer Science', 'junior'),
('hbh253', 'Hessa Bani', 'Hammad', 'hbh253@nyu.edu', 'Computer Science', 'senior', 'female', '0', 'male', 'Economics', 'senior'),
('nf1108', 'Nadja', 'Fejzic', 'nf1108@nyu.edu', 'Computer Science', 'junior', 'female', '0', 'female', 'Computer Science', 'junior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`netID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
