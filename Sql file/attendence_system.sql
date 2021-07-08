-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 01:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES
(1, 'Utsav  Sheth', '112'),
(2, 'Faizan Vora', '139'),
(9, 'ADITYA', '51'),
(10, 'CE112_Utsav Sheth', '12'),
(11, 'Utsav', '45'),
(12, 'faizan ', '67');

-- --------------------------------------------------------

--
-- Table structure for table `attendence_records`
--

CREATE TABLE `attendence_records` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence_records`
--

INSERT INTO `attendence_records` (`id`, `student_name`, `roll_number`, `attendence_status`, `date`) VALUES
(0, 'Utsav  Sheth', '112', 'Present', '2021-07-08'),
(0, 'Faizan Vora', '139', 'Absent', '2021-07-08'),
(0, 'ADITYA', '51', 'Present', '2021-07-08'),
(0, 'Utsav  Sheth', '112', 'Present', '2021-07-08'),
(0, 'Faizan Vora', '139', 'Absent', '2021-07-08'),
(0, 'ADITYA', '51', 'Present', '2021-07-08'),
(0, 'Utsav  Sheth', '112', 'Present', '2021-07-08'),
(0, 'Faizan Vora', '139', 'Present', '2021-07-08'),
(0, 'ADITYA', '51', 'Present', '2021-07-08'),
(0, 'CE112_Utsav Sheth', '12', 'Present', '2021-07-08'),
(0, 'Utsav', '45', 'Absent', '2021-07-08'),
(0, 'faizan ', '67', 'Present', '2021-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
