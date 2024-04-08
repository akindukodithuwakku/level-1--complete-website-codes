-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 07:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `adminID` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`adminID`, `name`, `email`, `password`) VALUES
(1, 'Akindu', 'akindukodithuwakku@gmail.com', '$2y$10$Ef06h0P8AZoBQc4jKn/ROOybVTafAV1zQs9U4uEjrzwqK9kNWwT0m'),
(2, 'mahima', 'mahima@gmail.com', '$2y$10$MHnM.B.h4PaL9mFbmH/K1uZ4Pi3WfjBuok6FE/vBYQz0Boj2Y2Ldy'),
(3, 'akindu', 'akinduscience@gmail.com', '$2y$10$CV3za8iL19Iy6aIXL5Ij1.C3F6UZpBa1Klk7oIBjU4SQEd.UU52/C'),
(4, 'admin', 'admin@gmail.com', '$2y$10$c4n6sFBDq9L4NijjFw3BGe4mUOxSeP40qypU6/emkV2G80Uc.2kIC'),
(5, 'Prime King', 'prime@gmail.com', '$2y$10$gto3zVcX5gE1OKAlvLojLufGBp9sb6C/HTp0tVKVIrfN0ODYEPh2S');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_table`
--

CREATE TABLE `visitor_table` (
  `name` varchar(20) NOT NULL,
  `id` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_table`
--

INSERT INTO `visitor_table` (`name`, `id`, `gender`, `email`, `mobile`, `location`, `purpose`) VALUES
('Akindu Koduthuwakku', '3CB6DA8E', 'Male', 'akindukodithuwakku@gmail.com', 718030311, 'IT', 'visitor'),
('nadini', 'B3D2E395', 'Female', 'nadini@gmail.com', 701933637, 'ENTC', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `visitor_table`
--
ALTER TABLE `visitor_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `adminID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
