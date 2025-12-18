-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2025 at 04:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `middle_name`, `birthday`, `gender`, `nationality`, `height`, `weight`, `mobile_number`, `province`, `city`) VALUES
(1, 'Henson Brix', 'Arroyo', 'A.', '2004-02-21', 'Male', '', 0, 0.00, '', '', ''),
(6, 'Juan', 'Dela Cruz', 'Santos', '1995-03-15', 'Male', 'Filipino', 175, 72.50, '09123456789', 'Laguna', 'Santa Cruz'),
(7, 'Maria Clara', 'Lim', 'Reyes', '1998-07-22', 'Female', 'Filipino', 162, 55.00, '09987654321', 'Metro Manila', 'Quezon City'),
(8, 'Jose', 'Rizal', 'Protacio', '1861-06-19', 'Male', 'Filipino', 165, 60.00, '09111223344', 'Laguna', 'Calamba'),
(9, 'Ana', 'Garcia', 'Lopez', '2000-11-05', 'Female', 'Filipino', 158, 48.75, '09344556677', 'Cavite', 'Dasmariñas'),
(10, 'Carlos', 'Tan', 'Mendoza', '1992-09-30', 'Male', 'Filipino', 180, 85.20, '09778889900', 'Bulacan', 'Malolos'),
(11, 'Sofia', '', 'Villanueva', '1997-02-14', 'Female', 'Filipino', 170, 62.30, '09223334455', 'Rizal', 'Antipolo'),
(12, 'Miguel', 'Santos', 'Aquino', '1994-12-01', 'Male', 'Filipino', 168, 68.00, '09199887766', 'Batangas', 'Batangas City'),
(13, 'Isabella', 'Rivera', 'Cruz', '2001-05-18', 'Female', 'Filipino', 160, 52.10, '09455667788', 'Pampanga', 'San Fernando'),
(14, 'Diego', 'Ong', 'Ramos', '1996-08-25', 'Male', 'Filipino', 172, 78.50, '09366778899', 'Cebu', 'Cebu City'),
(15, 'Luz', 'Viola', '', '1999-04-10', 'Female', 'Filipino', 155, 50.00, '09577889911', 'Ilocos Sur', 'Vigan'),
(16, 'Henson Brix', 'Arroyo', 'A', '2025-12-21', 'Male', '', 0, 0.00, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'employee',
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@example.com', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2025-12-17 10:09:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `unique_username` (`username`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
