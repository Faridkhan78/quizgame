-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 02:51 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correctAnswer` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correctAnswer`, `time`, `created_at`, `updated_at`) VALUES
(1, 'who is PM of india', 'daud don', 'narend modi', 'baba siddique', 'nirmala sitaramn', 'b', 20, '2024-10-17 05:09:58', '2024-10-17 06:48:17'),
(2, 'who is president of india', 'adiynath yogi', 'amitshah', 'dropadimurmur', 'rahul gandhi', 'c', 20, '2024-10-17 05:56:11', '2024-10-17 05:56:11'),
(3, 'who is finance minister of india', 'jignesh mevani', 'salman khan', 'shahrukh khan', 'Smt. Nirmala Sitharaman', 'd', 20, '2024-10-17 05:57:50', '2024-10-17 05:57:50'),
(4, 'Who was the very first President of India?', 'Sardar Vallabhbhai Patel', 'Dr. B.R. Ambedkar', 'Dr. Rajendra Prasad', 'Jawaharlal Nehru', 'c', 20, '2024-10-17 06:01:29', '2024-10-17 06:01:29'),
(5, 'How many houses are there in the Indian Parliament?', 'Three', 'Four', 'One', 'Two', 'd', 20, '2024-10-17 06:02:13', '2024-10-17 06:02:13'),
(6, 'Which article in the Constitution of India deals with the Right to Equality?', 'Article 14-18', 'Article 12-35', 'Article 23-24', 'Article 19-22', 'a', 20, '2024-10-17 06:03:15', '2024-10-17 06:03:15'),
(7, 'In which year did India adopt the Constitution?', '1950', '1947', '1952', '1945', 'a', 20, '2024-10-17 06:04:10', '2024-10-17 06:04:10'),
(8, 'General elections are held in India every ___________ year!', 'Every 4 years', 'Every 5 years', 'Every 3 years', 'Every 2 years', 'b', 20, '2024-10-17 06:04:59', '2024-10-17 06:04:59');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
