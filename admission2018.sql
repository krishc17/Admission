-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 08:34 PM
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `isActive`) VALUES
(1, 'Admin1', '16564017@nuv.ac.in', '1337x', NULL, NULL, NULL),
(2, 'yash karanke', 'll@ll.com', 'random', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(2) NOT NULL,
  `coursename` varchar(20) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `coursename`, `isActive`) VALUES
(18, 'MscIT', NULL),
(19, 'BCA', NULL),
(20, 'BBA', NULL),
(21, 'MHRM', NULL),
(22, 'MBA', NULL),
(23, 'MXA', NULL),
(24, 'MMM', NULL);

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
  `pgrad_attempt` varchar(7) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_information`
--

INSERT INTO `education_information` (`E_ID`, `ID`, `ssc_board`, `ssc_school`, `ssc_per`, `ssc_year`, `ssc_attempt`, `hsc_board`, `hsc_school`, `hsc_per`, `hsc_year`, `hsc_attempt`, `grad_deg`, `grad_board`, `grad_school`, `grad_per`, `grad_year`, `grad_attempt`, `pgrad_deg`, `pgrad_board`, `pgrad_school`, `pgrad_per`, `pgrad_year`, `pgrad_attempt`, `isActive`) VALUES
(1, 2, 'TEST DATA', 'TEST DATA', 'a', '2010', 'First', 'TEST DATA', 'TEST DATA', 'a', '2010', 'First', 'bca', 'TEST DATA', 'TEST DATA', 'a', '2010', 'First', '', '', '', '', '', 'First', 1),
(2, 4, 'Dummy Data', 'Dummy Data', 'A', '2012', 'First', 'Dummy Data', 'Dummy Data', 'A', '2012', 'First', '', '', '', '', '', 'Select ', '', '', '', '', '', 'Select ', 1),
(3, 5, '', '', '', '', 'Select ', '', '', '', '', 'Select ', '', '', '', '', '', 'Select ', '', '', '', '', '', 'Select ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selected_courses`
--

CREATE TABLE `selected_courses` (
  `S_ID` int(2) NOT NULL,
  `ID` int(3) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `isAvailable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selected_courses`
--

INSERT INTO `selected_courses` (`S_ID`, `ID`, `coursename`, `isAvailable`) VALUES
(1, 2, 'MHRM', 1),
(2, 0, 'BCA', 1),
(3, 0, 'BCA', 1),
(4, 2, 'MMM', 1),
(5, 2, 'MscIT', 1),
(6, 2, 'MscIT', 1),
(7, 4, 'MHRM', 1);

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
  `register_date` datetime DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`ID`, `FULLNAME`, `GENDER`, `BGROUP`, `ADDRESS`, `CITY`, `STATE`, `ZIP`, `PNUMBER`, `EMAIL`, `PASSWORD`, `register_date`, `dob`, `profile_image`, `isActive`) VALUES
(1, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADODARA', 'GUJARAT', '390001', '9714574465', 'dex.papa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, '', NULL),
(2, 'YASH KARANKE', 'MALE', 'B+VE', 'VADODARA							', 'VADAODARA', 'GJ', '390001', '9714574465', 'dex@dex.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-08 13:38:22', NULL, '', NULL),
(3, 'Shashi Karanke', 'Male', 'B+VE', 'Vadodara							', 'Vadodara', 'Vadodara', '390007', '9998290920', 'shashi.karanke@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-12 15:28:26', '20-08-1997', '', NULL),
(4, 'Dummy Man', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'VADODARA', '390011', '9714574665', 'dex@google.om', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-15 00:16:11', '01-10-1997', '', 1),
(5, 'Shashi Karanke', 'Male', 'b+ve', 'hogwards', 'Vadodara', 'Gujarat', '390015', '8154036295', '15102009@nuv.ac.in', '8af76326814e1566929ad87a80435880', '2017-10-15 16:10:38', '19-08-1997', '', 1),
(6, 'Yash Karanke', 'Male', 'B+VE', 'Vadodara', 'Vadodara', 'Gujarat', '390001', '9714574465', 'dex@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 09:43:19', '20-12-1995', '', 1),
(7, 'Shane Paryan', 'Male', 'B+E', 'Vadodara', 'Vadodara', 'Gujarat', '390001', '9715744655', 'shane@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 10:18:29', '15-10-1981', 'Shane.png', 1),
(8, 'Shane Paryan', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'Gujarat', '390001', '9714574665', 'shane.p@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 10:29:27', '15-10-1997', 'L', 1),
(9, 'Shane Paryan', 'Male', 'B+VE', 'Vadodara', 'Vadodara', 'Gujarat', '39001', '9714574465', 'sha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 10:36:05', '05-10-1999', '', 1),
(10, 'Shane Paryan', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'VADODARA', '390001', '9714574465', 'sha2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 20:37:38', '07-10-1981', 'D:xampp	mpphp9972.tmp', 1),
(11, 'Shane', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'VADODARA', '3900011', '9714574465', 'sss@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 20:47:28', '11-10-1995', '', 1),
(12, 'Shane', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'Gujarat', '390001', '9714574465', '999@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 20:56:38', '09-10-1996', 'D:xampp	mpphpFE61.tmp', 1),
(13, 'Shane', 'Male', 'B+VE', 'VADODARA', 'VADODARA', 'VADODARA', '390001', '9714574465', 'dexxx@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 21:01:33', '05-03-1986', '/profile_imagesShane.png', 1),
(14, 'Shane', 'Male', 'B+VE', 'Vadodara', 'Vadodara', 'Gujarat', '3900011', '9714574465', 'de@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 21:05:06', '20-12-1992', 'profile_images/Shane.png', 1),
(15, 'Shane', 'Male', 'B+VE', 'VADODARA', 'vadodara', 'Gujarat', '3900011', '9714574465', 'dee@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-16 21:06:31', '20-12-1995', 'profile_images/Shane.png', 1);

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
-- Indexes for table `selected_courses`
--
ALTER TABLE `selected_courses`
  ADD PRIMARY KEY (`S_ID`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `education_information`
--
ALTER TABLE `education_information`
  MODIFY `E_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `selected_courses`
--
ALTER TABLE `selected_courses`
  MODIFY `S_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
