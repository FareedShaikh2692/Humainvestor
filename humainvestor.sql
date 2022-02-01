-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humainvestor`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `nickname` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `dob` varchar(256) DEFAULT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  `coverImage` varchar(256) DEFAULT NULL,
  `short_description` varchar(256) DEFAULT NULL,
  `country` varchar(256) DEFAULT NULL,
  `subscription` varchar(256) DEFAULT NULL,
  `follow_count` varchar(256) DEFAULT NULL,
  `security_count` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reset_token` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `nickname`, `email`, `phone`, `dob`, `avatar`, `coverImage`, `short_description`, `country`, `subscription`, `follow_count`, `security_count`, `password`, `created_at`, `updated_at`, `reset_token`) VALUES
(10, 'Fareed', 'Shaikh', 'test', 'Fareedshaikh8623@gmail.com', '+919404825122', '2000-06-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$q9VGVOfzSMBIMR4C7vWNjOAwREkZCyvXkmuowxpLP1AZuNLL2nVfq', '2022-01-28 14:13:09', '2022-01-28 14:13:09', NULL),
(11, 'Fareed', 'Shaikh', 'demo', 'Fareedshaikh2692@gmail.com', '+919404825122', '2022-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$6/TzHpOKsc.R7diLTv2v.ePjYE8Nd1LeLJoaOmnLsMrZpfT8cPTOG', '2022-01-28 12:22:23', '2022-01-28 12:22:23', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
