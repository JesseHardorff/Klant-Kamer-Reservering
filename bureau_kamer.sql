-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 02:09 PM
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
-- Database: `bureau_kamer`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserveringen`
--

CREATE TABLE `reserveringen` (
  `reservering_id` int(11) NOT NULL,
  `lokaal` varchar(10) NOT NULL,
  `datum` date NOT NULL,
  `start_tijd` time NOT NULL,
  `eind_tijd` time NOT NULL,
  `klant` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `student_nummer` int(6) NOT NULL,
  `tijd_aangemaakt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserveringen`
--

INSERT INTO `reserveringen` (`reservering_id`, `lokaal`, `datum`, `start_tijd`, `eind_tijd`, `klant`, `type`, `student_nummer`, `tijd_aangemaakt`) VALUES
(20, 'W003a', '2025-03-19', '13:02:00', '14:11:00', 'KAN DIT', 'Klant gesprek', 230838, '2025-03-18 12:03:06'),
(21, 'W003b', '2025-03-19', '13:03:00', '13:04:00', 'LENGTEMETER\na aa a a a a a a a a  a ', 'Klant gesprek', 230838, '2025-03-18 12:03:41'),
(22, 'W002a', '2025-03-18', '14:03:00', '15:05:00', 'LENGTEMETER', 'Klant gesprek', 0, '2025-03-18 12:04:05'),
(23, 'W003b', '2025-03-18', '09:17:00', '14:44:00', 'wad', 'Klant gesprek', 230838, '2025-03-18 12:45:21'),
(24, 'W003a', '2025-03-18', '13:46:00', '16:46:00', 'watermelon', 'Klant gesprek', 230838, '2025-03-18 12:47:08'),
(25, 'W003a', '2025-03-20', '13:46:00', '16:46:00', 'watermelon', 'Klant gesprek', 230838, '2025-03-18 12:55:20'),
(26, 'W003a', '2025-03-24', '13:46:00', '16:46:00', 'watermelon', 'Klant gesprek', 230838, '2025-03-18 12:55:34'),
(27, 'W003a', '2025-03-25', '13:46:00', '16:46:00', 'watermelon', 'Klant gesprek', 230838, '2025-03-18 12:56:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`reservering_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `reservering_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
