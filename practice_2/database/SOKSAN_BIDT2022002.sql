-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:31 AM
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
-- Database: `webapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `pob` varchar(55) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` int(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `tel`, `pob`, `age`, `dob`, `salary`, `create_at`, `update_at`, `is_deleted`, `description`) VALUES
(1, 'MAKARA', 'HELLO', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:10:01', '2023-01-17 03:26:01', 1, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(2, 'Bo', 'PHA', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:11:50', '2023-01-17 03:11:50', 0, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(3, 'ABO', 'PHA', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:12:07', '2023-01-17 03:26:01', 1, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(6, 'Bo', 'PHA', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:20:57', '2023-01-17 03:20:57', 0, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(7, 'Bo', 'PHA', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:20:57', '2023-01-17 03:20:57', 0, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.'),
(8, 'Bo', 'PHA', '+85512345677', 'Phnom Penh', 20, '2012-07-18', '300', '2023-01-17 03:20:57', '2023-01-17 03:20:57', 0, 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
