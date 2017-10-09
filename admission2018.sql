-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 12:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', '16564017@nuv.ac.in', '1337x', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(2) NOT NULL,
  `coursename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `coursename`) VALUES
(20, 'BBA'),
(19, 'BCA'),
(22, 'MBA'),
(21, 'MHRM'),
(18, 'MscIT');

-- --------------------------------------------------------

--
-- Table structure for table `education_information`
--

CREATE TABLE `education_information` (
  `E_ID` int(3) NOT NULL,
  `ID` int(3) NOT NULL,
  `ssc_board` varchar(70) NOT NULL,
  `ssc_school` varchar(70) NOT NULL,
  `ssc_per` varchar(3) NOT NULL,
  `ssc_year` varchar(5) NOT NULL,
  `ssc_attempt` varchar(7) NOT NULL,
  `hsc_board` varchar(70) NOT NULL,
  `hsc_school` varchar(70) NOT NULL,
  `hsc_per` varchar(3) NOT NULL,
  `hsc_year` varchar(5) NOT NULL,
  `hsc_attempt` varchar(7) NOT NULL,
  `grad_deg` varchar(70) DEFAULT NULL,
  `grad_board` varchar(70) DEFAULT NULL,
  `grad_school` varchar(70) DEFAULT NULL,
  `grad_per` varchar(3) DEFAULT NULL,
  `grad_year` varchar(5) DEFAULT NULL,
  `grad_attempt` varchar(7) DEFAULT NULL,
  `pgrad_deg` varchar(70) DEFAULT NULL,
  `pgrad_board` varchar(70) DEFAULT NULL,
  `pgrad_school` varchar(70) DEFAULT NULL,
  `pgrad_per` varchar(3) DEFAULT NULL,
  `pgrad_year` varchar(5) DEFAULT NULL,
  `pgrad_attempt` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `ID` int(3) NOT NULL,
  `FULLNAME` varchar(70) DEFAULT NULL,
  `GENDER` varchar(8) DEFAULT NULL,
  `BGROUP` varchar(10) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `CITY` varchar(20) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `ZIP` varchar(10) DEFAULT NULL,
  `PNUMBER` varchar(11) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`ID`, `FULLNAME`, `GENDER`, `BGROUP`, `ADDRESS`, `CITY`, `STATE`, `ZIP`, `PNUMBER`, `EMAIL`, `PASSWORD`, `register_date`) VALUES
(1, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADODARA', 'GUJARAT', '390001', '9714574465', 'dex.papa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(2, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADAODARA', 'GJ', '390001', '9714574465', 'dex@dex.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-08 13:38:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `coursename` (`coursename`);

--
-- Indexes for table `education_information`
--
ALTER TABLE `education_information`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `education_information`
--
ALTER TABLE `education_information`
  MODIFY `E_ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
