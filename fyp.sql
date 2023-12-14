-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 04:35 AM
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
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `address`, `phoneNo`, `email`, `username`, `password`) VALUES
(1, 'Nurul Syafiqah', 'No 43, Jalan Bukit Jana, Kamunting, Perak.', '0166359202', 'nurulsyafiqahh06@gmail.com', 'admin', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `submission_time`) VALUES
(1, 'Ammar', 'ammar85@gmail.com', 'Permohonan dataset covid 19', 'Saya ingin meminta dataset covid 19 bagi tujuan pembelajaran saya.', '2023-11-28 04:43:27'),
(23, 'kj', 'kj@gmail.com', 'haijs', 'a', '2023-12-10 04:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `icon`, `description`, `admin_id`) VALUES
(1, 'Malaria', 'fa fa-mosquito', 'In 2021, Sabah reported about 57.5 malaria cases per 100,000 people, while Sarawak had an incidence rate of 37.45, making it the second-highest in Malaysia.', 1),
(2, 'Dengue', 'fa fa-umbrella', 'Dengue Fever Is A Constant Threat In Malaysia, Peaking From October To March Due To Mosquito Breeding. In 2022, 64,078 Cases Were Reported, 26,365 In 2021, And 90,304 In 2020.', 1),
(3, 'Pneumonia', 'fa fa-lungs', 'In 2020, pneumonia stood out as a major contributor to mortality in Malaysia, being the primary cause of 12.2% of recorded deaths.', 1),
(4, 'Leukemia', 'fa fa-tint', 'According To The Latest Data From The World Health Organization (who) In 2020, Leukemia Was Responsible For 1,412 Deaths In Malaysia, Accounting For Approximately 0.84% Of The Total Death Rate.', 1),
(5, 'Kidney Failure', 'fa fa-dna', 'Over 40,000 kidney patients are currently in Malaysia, with over 8,000 new cases each year since 2018. An estimated 106,000 people will require dialysis, including 30% under 45 years old by 2040.', 1),
(6, 'Liver Disease', 'fa fa-flask', 'Liver disease leads to 2 million annual deaths worldwide, with half attributed to cirrhosis complications and the other half to viral hepatitis and hepatocellular carcinoma.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
