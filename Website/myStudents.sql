-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2020 at 04:50 PM
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
-- Database: `myStudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `myPref`
--

CREATE TABLE `myPref` (
  `p_major` varchar(30) NOT NULL,
  `p_gender` varchar(10) NOT NULL,
  `p_year` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myPref`
--

INSERT INTO `myPref` (`p_major`, `p_gender`, `p_year`) VALUES
('Major', 'Gender', 'myYear'),
('Interactive Media', 'Forth-year', 'fem'),
('Interactive Media', 'Third-year', 'fem'),
('Art and Art History', 'Freshmen', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `myStudents`
--

CREATE TABLE `myStudents` (
  `ID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myStudents`
--

INSERT INTO `myStudents` (`ID`, `name`, `lastName`, `email`) VALUES
(1, 'Test', 'Testing', 'Testing@tesing.com'),
(2, 'Test', 'Testing', 'Testing@tesing.com'),
(3, 'me', 'NotMe', 'me@notme.com'),
(4, 'Lana', 'Del Ray ', 'lanadelray@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myStudents`
--
ALTER TABLE `myStudents`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myStudents`
--
ALTER TABLE `myStudents`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
