-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 07:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registrationforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `dob`) VALUES
(1, 'john', 'danial', 'danial@123', '123', '41', '2000-10-01'),
(2, 'john', 'danial', 'danial@123', '123', '42', '2000-01-20'),
(3, 'john', 'danial', 'john@123', '123', '43', '2022-02-02'),
(4, 'john', 'qwee', 'admin@123', '123', '44', '2000-03-22'),
(5, 'john', 'qwe', 'qwe@123', '123', '45', '2000-03-22'),
(6, 'john', 'aqwe', 'aqwe@123', '123', '46', '2000-03-22'),
(7, 'john', 'danial', 'danial@1234', '123', '47', '2000-03-22'),
(8, 'john', 'john123', 'john123@123', '123', '411', '2000-03-22'),
(9, 'john', 'danial123', 'danial@12345', '123', '412', '2000-03-22'),
(10, 'john', 'qwer', 'qwer@123', '123', '413', '2000-03-22'),
(12, 'rajeshwari', 'g', 'rajeshwari@123', '987654321', '23', '2000-01-31'),
(14, 'admin', 'ad', 'admin@123', '8628888881', '42', '2000-03-22'),
(15, 'danial1', 'qweq', 'danial1@erewrw', '123244', '432', '2000-03-22'),
(16, 'danial11', 'qwe', 'danial11@qwew', '123244', '444', '2000-03-22'),
(17, 'admin123', 'john', 'aderre@123', '123244', '412', '2000-03-22'),
(18, 'admin121', 'ad', 'admin121@123', '289818828', '522', '2023-01-01'),
(19, 'danial987', 'qwe', 'danial987@123', '123244', '731', '2023-03-31'),
(20, 'danial', 'john12', 'john@12322', '123244', '12', '2000-02-03'),
(21, 'danial', 'john3', 'jdajnd@gmail.com', '232133213', '13', '2000-03-08'),
(22, 'admin', 'ad', 'admin@123', '9876543213', '14', '2000-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
