-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 08:19 PM
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
  `Password` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `major` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `total_hours` decimal(4,0) UNSIGNED NOT NULL,
  `p_gender` varchar(20) NOT NULL,
  `p_major` varchar(50) NOT NULL,
  `p_level` varchar(10) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`netID`, `Password`, `first_name`, `last_name`, `email`, `major`, `level`, `gender`, `total_hours`, `p_gender`, `p_major`, `p_level`, `status`) VALUES
('ah4601', 'ahpass', 'Aisha', 'Hodzic', 'ah4601@nyu.edu', 'Computer Science', 'junior', 'female', '0', 'Female', 'Art and Art History', 'Freshmen', 'Inactive'),
('fj8912', 'fjpass', 'Feja', 'Peh', 'fej@gmail.com', 'Art and Art History', 'Sophomore', 'Male', '0', 'none', 'none', 'none', 'Active'),
('gh7384', 'lspass', 'Lejla', 'Spahic', 'lsh9@gmail.com', 'Biology', 'freshman', 'female', '0', 'male', 'Economics', 'senior', 'Active'),
('gn345', 'gabipass', 'Gabbi', 'Novak', 'gn345@nyu.edu', 'Legal Studies	', 'Senior', 'Female', '0', 'none', 'none', 'none', 'Active'),
('hbh253', 'hbhpass', 'Hessa Bani', 'Hammad', 'hbh253@nyu.edu', 'Computer Science', 'senior', 'female', '0', 'male', 'Economics', 'senior', 'Active'),
('hh1111', 'hhpass', 'Halil', 'Hilma', 'hh789@nyu.edu', 'Civil Engineering	', 'Freshmen', 'Female', '0', 'Female', 'Music', 'Junior', 'Inactive'),
('hj789', 'hjpass', 'Hanna', 'James', 'hj789@nyu.edu', 'Mathematics		', 'Senior', 'Female', '0', 'No-pref', 'Philosophy', 'Freshmen', 'Active'),
('nf1108', 'nfpass', 'Nadja', 'Fejzic', 'nf1108@nyu.edu', 'Computer Science', 'junior', 'female', '0', 'Female', 'Computer Science	', 'Junior', 'Inactive'),
('um543', 'ummapass', 'Umma', 'Lin', 'um543@gmail.com', 'Arab Crossroads Studies			', 'Freshmen', 'Female', '0', 'none', 'none', 'none', 'Active');

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
