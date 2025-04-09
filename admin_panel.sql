-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 09, 2025 at 11:13 AM
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
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_picture`, `created_at`) VALUES
(1, 'Odi', 'Timothy', 'vianneyodi@gmail.com', '$2y$10$ZivQJh1COkCVxLEHhw8TsurUauIe75ZT80x.xN8lYqh.RHhu5Tt96', 'uploads/nou241612993.jpg', '2024-10-10 21:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_table`
--

CREATE TABLE `alumni_table` (
  `alumni_id` int(11) NOT NULL,
  `alumni_image` varchar(255) NOT NULL,
  `alumni_name` varchar(50) NOT NULL,
  `alumni_position` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facility_images`
--

CREATE TABLE `facility_images` (
  `id` int(11) NOT NULL,
  `facility_image` varchar(255) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility_images`
--

INSERT INTO `facility_images` (`id`, `facility_image`, `image_name`, `created_at`) VALUES
(2, 'Graduations/AIRFIELD SIGN & MARKINGS.jpg', 'AME SCHOOL', '2024-10-10 22:00:15'),
(3, 'Graduations/737.jpg', 'Nigerian college of aviation technology', '2024-10-11 06:16:42'),
(4, 'facilities/aircraft-44.jpg', 'ame', '2025-03-20 15:06:38'),
(5, 'facilities/inside-sim2.png', 'facility', '2025-03-20 15:07:15'),
(6, 'facilities/1 NOS DIAMOND DA42NG AIRCRAFT.jpg', 'facility', '2025-03-20 15:07:34'),
(7, 'facilities/aircraft.jpg', 'facility', '2025-03-20 15:08:02'),
(8, 'facilities/Ame.png', 'facility', '2025-03-20 15:08:26'),
(9, 'facilities/Ame-1.jpg', 'facility', '2025-03-20 15:08:40'),
(10, 'facilities/Ame-2.jpg', 'facility', '2025-03-20 15:08:52'),
(11, 'facilities/Ame-3.jpg', 'facility', '2025-03-20 15:09:04'),
(12, 'facilities/ATC radar simulator.png', 'facility', '2025-03-20 15:09:19'),
(13, 'facilities/ATSCOM_language laboratory.jpg', 'facility', '2025-03-20 15:09:38'),
(14, 'facilities/AVIATION MANAGEMENT SCHOOL (UPPER FLOOR).jpg', 'facility', '2025-03-20 15:09:55'),
(15, 'facilities/B737NG FULL FLIGHT SIMULATOR.jpg', 'facility', '2025-03-20 15:10:08'),
(16, 'facilities/CNC LATHE MACHINE.jpg', 'facility', '2025-03-20 15:10:22'),
(17, 'facilities/CNC MILLING MACHINE.jpg', 'facility', '2025-03-20 15:11:02'),
(18, 'facilities/DVOR EQUIPMENT.jpg', 'facility', '2025-03-20 15:11:16'),
(19, 'facilities/ncat-ams2.jpg', 'facility', '2025-03-20 15:11:32'),
(20, 'facilities/THALES CVOR_DME EQUIPMENT.jpg', 'facility', '2025-03-20 15:11:51'),
(21, 'facilities/simfinity.jpg', 'facility', '2025-03-20 15:12:15'),
(22, 'facilities/ULTRA MODERN AUDITORIUM COMPLEX_2.png', 'facility', '2025-03-20 15:17:04'),
(23, 'facilities/ULTRA MODERN AUDITORIUM COMPLEX.png', 'facility', '2025-03-20 15:17:19'),
(24, 'facilities/sim-1.png', 'facility', '2025-03-20 15:17:34'),
(25, 'facilities/pool.jpg', 'facility', '2025-03-20 15:17:45'),
(26, 'facilities/gym1.jpg', 'facility', '2025-03-20 15:18:02'),
(27, 'facilities/GLIDE SLOPE EQUIPMENT.jpg', 'facility', '2025-03-20 15:18:12'),
(28, 'facilities/HYDRAULIC SHEARING MACHINE.jpg', 'facility', '2025-03-20 15:18:23'),
(29, 'facilities/hanger.jpg', 'facility', '2025-03-20 15:18:42'),
(30, 'facilities/MINI-LED AIRFIELD LIGHTING.jpg', 'facility', '2025-03-20 15:19:01'),
(31, 'facilities/gym1.jpg', 'facility', '2025-03-20 15:19:28'),
(32, 'facilities/mag-2.jpg', 'facility', '2025-03-20 15:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `graduation_activities`
--

CREATE TABLE `graduation_activities` (
  `grad_id` int(11) NOT NULL,
  `grad_image` varchar(255) NOT NULL,
  `grad_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduation_activities`
--

INSERT INTO `graduation_activities` (`grad_id`, `grad_image`, `grad_name`, `created_at`) VALUES
(4, 'Graduations/grad-5.jpg', 'grad', '2025-03-20 15:36:33'),
(5, 'Graduations/grad-4.jpg', 'grad', '2025-03-20 15:37:34'),
(7, 'Graduations/grad-44.jpg', 'grad', '2025-03-20 15:38:39'),
(8, 'Graduations/grad-3.jpg', 'grad', '2025-03-20 15:38:51'),
(9, 'Graduations/grad--4.jpg', 'grad', '2025-03-20 15:39:04'),
(10, 'Graduations/graduation-4.jpg', 'grad', '2025-03-20 15:39:42'),
(11, 'Graduations/graduation-2.jpg', 'grad', '2025-03-20 15:40:07'),
(12, 'Graduations/conggratulation.jpg', 'grad', '2025-03-20 15:40:24'),
(13, 'Graduations/grad.jpg', 'grad', '2025-03-20 15:40:41'),
(14, 'Graduations/grad-7.jpg', 'grad', '2025-03-20 15:41:10'),
(15, 'Graduations/gradduations.jpg', 'grad', '2025-03-20 15:41:25'),
(17, 'Graduations/Graduation--3.jpg', 'grad', '2025-03-20 15:42:58'),
(18, 'Graduations/graduation4.jpg', 'grad', '2025-03-20 15:43:14'),
(19, 'Graduations/gradution ceremony.jpg', 'grad', '2025-03-20 15:43:35'),
(20, 'Graduations/Graduation-34.jpg', 'grad', '2025-03-20 15:43:52'),
(21, 'Graduations/students.jpg', 'grad', '2025-03-20 15:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_table`
--

CREATE TABLE `testimonial_table` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(255) NOT NULL,
  `testimonial_position` varchar(255) NOT NULL,
  `testimonial_remark` text NOT NULL,
  `testimonial_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_name` (`email`);

--
-- Indexes for table `alumni_table`
--
ALTER TABLE `alumni_table`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `facility_images`
--
ALTER TABLE `facility_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduation_activities`
--
ALTER TABLE `graduation_activities`
  ADD PRIMARY KEY (`grad_id`);

--
-- Indexes for table `testimonial_table`
--
ALTER TABLE `testimonial_table`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni_table`
--
ALTER TABLE `alumni_table`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_images`
--
ALTER TABLE `facility_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `graduation_activities`
--
ALTER TABLE `graduation_activities`
  MODIFY `grad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimonial_table`
--
ALTER TABLE `testimonial_table`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
