-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 06:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pengelola_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `NIK` char(16) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `birth_place` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal_code` char(5) NOT NULL,
  `pfp` blob NOT NULL,
  `username` varchar(30) NOT NULL,
  `password1` varchar(40) NOT NULL,
  `password2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`NIK`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birth_date`, `nationality`, `email`, `phone_number`, `address`, `postal_code`, `pfp`, `username`, `password1`, `password2`) VALUES
('1234567890123456', 'sharon', 'cedila', 'suryadi', 'jakarta', '2022-02-17', 'malaysian', 'shastep1927@gmail.com', '08123456789', 'gang aut', '12345', '', 'shar.cedila', '2e3817293fc275dbee74bd71ce6eb056', '2e3817293fc275dbee74bd71ce6eb056'),
('9876543212345678', 'hyifa', 'dorothy', 'bwarlele', 'bekasi', '2021-10-02', 'indonesian', 'hyifadorothybwar@gmail.com', '08124356978', 'gang simpang lima', '13567', 0x706963732e6a7067, 'hyifad', '85e1c9ab7788bacb481c8ed137c41840', '85e1c9ab7788bacb481c8ed137c41840');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
