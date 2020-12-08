-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 01:59 PM
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
-- Database: `db_user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `reg_num` text COLLATE utf8_unicode_ci NOT NULL,
  `father_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cnic` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` text COLLATE utf8_unicode_ci NOT NULL,
  `leaving_date` text COLLATE utf8_unicode_ci NOT NULL,
  `job_status` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `role`, `type`, `reg_num`, `father_name`, `cnic`, `address`, `joining_date`, `leaving_date`, `job_status`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', '03030000001', 'male', 'admin', 0, '', '', '', '', '', '', '0', 'admin'),
(17, 'Muhammad Mubeen', 'mmubeen761@gmail.com', '030330303', 'male', '', 0, '0001112', 'muhammad javed', '42301-85208520-0', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '', '', '0', ''),
(18, 'Muhammad Mubeen', 'mubenmalik761@gmail.com', '03030303030', 'male', '', 0, '0022', 'muhammad javed', '42301-555555502-0', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '', '', '0', ''),
(19, 'Muhammad Mubeen', 'muben.devzu@gmail.com', '03030303030', 'female', '', 0, '01313131', 'muhammad javed', '42301-555555502-0', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '2020-12-05', '2020-12-14', '0', ''),
(20, 'Muhammad Mubeen', 'mubeen.devzu@gmail.com', '03030303030', 'male', '', 0, '5fcb77373006d', 'muhammad javed', '42301-555555502-0', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '2020-12-05', '2020-12-14', '0', ''),
(21, 'Muhammad Mubeen', 'mubeen.dezu@gmail.com', '03030303030', 'female', '', 0, '5fcb7ea34af62', 'muhammad javed', '42301-555555502-0', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '2020-12-19', '', '0', ''),
(22, 'Muhammad Mubeen', 'khanbaba@gmail.com', '030345456456', 'female', '', 0, '5fcb7fa93bc12', 'muhammad javed', '42301-555555502-0', 'House No. 383, Street No. 17-D, karachi', '2020-12-11', '', 'Full Stack', ''),
(23, 'Muhammad Aftab', 'mubeen.evzu@gmail.com', '03030303030', 'female', '', 0, '5fcb8051772a1', 'muhammad AHmed', '42301-555555502-4', 'House No. 383, Street No. 17-D, Mohalla Nala par azam town, City KARACHI SOUTH', '2020-12-19', '', 'Full Stack', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
