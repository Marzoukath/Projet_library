-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2024 at 10:37 PM
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
-- Database: `Digital_Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `matricule` int(100) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `fullname`, `email`, `mobile`, `password`, `matricule`, `created_at`, `updated_at`) VALUES
(1, 'FOUMI zou', 'marzoukatagbodja@gmail.com', 68272463, '09876trygh', 17433022, '2024-07-07', NULL),
(2, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '90ioj', 12330, '2024-07-07', NULL),
(3, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '876', 98765, '2024-07-07', NULL),
(4, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '876', 98765, '2024-07-07', NULL),
(5, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '876', 98765, '2024-07-07', NULL),
(6, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '12344444444', 123302, '2024-07-07', NULL),
(7, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '[-098yt', 9897654, '2024-07-07', NULL),
(8, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '098765t', 123, '2024-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `matricule` int(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id`, `fullname`, `email`, `mobile`, `password`, `matricule`, `filiere`, `newsletter`, `created_at`, `updated_at`) VALUES
(1, 'Alice Dupont', 'alice.dupont@example.com', 123456789, '123', 12345, 'Computer Science', 1, '2024-01-01', '2024-01-01'),
(2, 'Bob Martin', 'bob.martin@example.com', 987654321, '456', 54321, 'Mathematics', 0, '2024-02-01', '2024-02-01'),
(3, 'FOUMI', 'marzoukathagbodja@gmail.com', 68272463, '-09876', 9876, 'git', 0, NULL, NULL),
(4, 'AGBODJA Marzoukath', 'marzoukathagbodja@gmail.com', 68272463, 'y78uioputr', 98768, 'Informatique', 0, NULL, NULL),
(5, 'BATOKO Chahidath', 'chahidathoubatoko@gmail.com', 55581523, 'ghfdghj', 9874, 'Informatique', 0, '2024-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `matricule` int(100) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`id`, `fullname`, `email`, `mobile`, `password`, `matricule`, `specialite`, `grade`, `newsletter`, `created_at`, `updated_at`) VALUES
(1, 'AZOMA Alphonse', 'alphonseazoma@gmail.com', 55599520, '-098uiy', 98760, 'programmation', 'professeur titulaire', 0, '2024-07-07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
