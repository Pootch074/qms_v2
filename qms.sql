-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 06, 2025 at 04:50 PM
-- Server version: 8.0.42
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qms`
--

-- --------------------------------------------------------

--
-- Table structure for table `qms_users`
--

CREATE TABLE `qms_users` (
  `id` int NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `employee_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ass_step` int DEFAULT NULL,
  `ass_window` int DEFAULT NULL,
  `ass_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `log_status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'INACTIVE',
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'PENDING',
  `user_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `section` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qms_users`
--

INSERT INTO `qms_users` (`id`, `fname`, `lname`, `employee_id`, `role`, `ass_step`, `ass_window`, `ass_category`, `log_status`, `status`, `user_pass`, `section`) VALUES
(18, 'Preasses', 'Priority', '11-1110', 'Preasses', 1, NULL, 'PRIORITY', 'INACTIVE', 'APPROVED', '$2y$10$lSK2mR5iJ8TkBXuNesfbkepteE7O4fcqMnzX8uTVmqvemIeTEukOS', 'CIS'),
(19, 'EncoderW1', 'Priority', '11-1111', 'Encode', 2, 1, 'PRIORITY', 'INACTIVE', 'APPROVED', '$2y$10$JI6dgc.fZo7H9SIgSpYZzuSgNquMRBilKH/wvcLFscg8TUkJV0tGu', NULL),
(20, 'EncoderW2', 'Priority', '11-1112', 'Encode', 2, 2, 'PRIORITY', 'INACTIVE', 'APPROVED', '$2y$10$PpdTBBajgjQwejb8g.cm8.8JNcMrQXLWMw7lSq7OfgUksvDte5iq.', NULL),
(21, 'Preasses', 'Regular', '11-2220', 'Preasses', 1, NULL, 'REGULAR', 'INACTIVE', 'APPROVED', '$2y$10$Dfxo7BPzlmb5VeTGvE1aOu.gmZVjlCgplobfcpF/ETO/lQhIdwyzO', NULL),
(22, 'EncoderW1', 'Regular', '11-2221', 'Encode', 2, 1, 'REGULAR', 'INACTIVE', 'APPROVED', '$2y$10$TwmU.fdsV84Ix2IjqDk68eRO3rxI3hEnIyoAQp3G76g7kYdo6Lcay', NULL),
(23, 'EncoderW2', 'Regular', '11-2222', 'Encode', 2, 2, 'REGULAR', 'INACTIVE', 'APPROVED', '$2y$10$qjbcUWhsadZk3CjiEC2VNOWZFoGEpf9cl8AqCzTfWBXvNLShtrU.a', NULL),
(24, 'Assesment', 'W1', '11-3331', 'Assesment', 3, 1, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$GfPaQmKtP0iROp6izcCMg.XL5QfkwfOX2pgSq1doy60Bsxktj37w.', NULL),
(25, 'Assesment', 'W2', '11-3332', 'Assesment', 3, 2, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$I5gJ278jcsQRDS31om7Aou2d2qsoogvcNy7sROS6RXkLWfBfDob3a', NULL),
(26, 'Assesment', 'W3', '11-3333', 'Assesment', 3, 3, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$LEsxs4VvuZYFOMYmHOJuyOf19Aw020LmQO7ouxSiUIFyTXETEfCQm', NULL),
(27, 'Assesment', 'W4', '11-3334', 'Assesment', 3, 4, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$qzPFQRNR9Ql2Blb6yxvvqeVQKMgw8Zg3SRfPnd7fitMinUBcV9jEi', NULL),
(28, 'Release', 'W1', '11-4441', 'Release', 4, 1, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$KrXMKWo8JQrAANGZeGebO.XgeD45iMQn6EHtWWHOxNxqrEvaCF2.S', NULL),
(29, 'Release', 'W2', '11-4442', 'Release', 4, 2, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$wYmUHsEKCPo3w/yn0n5S6uCt.yj.3tZC5rl9Um.12BBfyP9lKXYIm', NULL),
(30, 'Release', 'W3', '11-4443', 'Release', 4, 3, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$1LwA6QlDO9BO00HXHK9BguwpDOGUx/LT7rC/h7nWM9eRx2CKDKt.a', NULL),
(31, 'Display1', 'Priority', '11-5551', 'Display', NULL, NULL, 'PRIORITY', 'INACTIVE', 'APPROVED', '$2y$10$5ln6Jb5b7FELD5m.TIaXpOg1LtM.M5M95V/eNWET1rMp8eacS2TFC', NULL),
(32, 'Display2', 'Regular', '11-5552', 'Display', NULL, NULL, 'REGULAR', 'INACTIVE', 'APPROVED', '$2y$10$6vIuYXCAZ9.HAOnqtpcd7.Ye3Z5ypJY2lK.Mtultc8wVgTRtvRlcu', NULL),
(33, 'System', 'Admin', '11-0000', 'Admin', NULL, NULL, 'BOTH', 'INACTIVE', 'APPROVED', '$2y$10$CIpUs3.2Xk5j9nWj9ZpTpeXoKG6MtNzUWzgXHmXQYbB8uxOn33jZu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qms_users2`
--

CREATE TABLE `qms_users2` (
  `id` int NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employee_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ass_step` int DEFAULT NULL,
  `ass_window` int DEFAULT NULL,
  `ass_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `log_status` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Pending',
  `user_pass` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qms_users2`
--

INSERT INTO `qms_users2` (`id`, `fname`, `lname`, `employee_id`, `role`, `ass_step`, `ass_window`, `ass_category`, `log_status`, `status`, `user_pass`) VALUES
(10, 'Preasses', 'Priority', '11-1110', 'Preasses', 1, NULL, 'Priority', NULL, 'APPROVED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qms_videos`
--

CREATE TABLE `qms_videos` (
  `id` int NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `uploaded_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `qms_videos`
--

INSERT INTO `qms_videos` (`id`, `filename`, `filepath`, `uploaded_at`) VALUES
(1, 'vid2.mp4', 'assets/resources/uploads/vid2.mp4', '2025-05-28 02:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `qsd_marquee`
--

CREATE TABLE `qsd_marquee` (
  `id` int NOT NULL,
  `section_id` int NOT NULL,
  `marquee_text1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `marquee_text2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qsd_marquee`
--

INSERT INTO `qsd_marquee` (`id`, `section_id`, `marquee_text1`, `marquee_text2`) VALUES
(1, 1, 'WELCOME TO DSWD FO XI', '#BawatBuhayayMahalagasaDSWD');

-- --------------------------------------------------------

--
-- Table structure for table `qsd_steps`
--

CREATE TABLE `qsd_steps` (
  `id` int NOT NULL,
  `section_id` int NOT NULL,
  `step_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qsd_steps`
--

INSERT INTO `qsd_steps` (`id`, `section_id`, `step_number`) VALUES
(2, 15, 2),
(3, 15, 3),
(4, 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int NOT NULL,
  `queue_num` int DEFAULT NULL,
  `division_id` int DEFAULT NULL,
  `section_id` int DEFAULT NULL,
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `service_id` int DEFAULT NULL,
  `datetoday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `step_id` int DEFAULT NULL,
  `window_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `queue_num`, `division_id`, `section_id`, `category`, `service_id`, `datetoday`, `status`, `step_id`, `window_id`) VALUES
(1, 1, 9, 15, 'PRIORITY', 15, '2025-05-26 11:19:42', '2', 2, NULL),
(2, 2, 9, 15, 'PRIORITY', 15, '2025-05-26 11:19:49', '0', 2, NULL),
(3, 3, 9, 15, 'PRIORITY', 15, '2025-05-26 11:19:57', '0', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qms_users`
--
ALTER TABLE `qms_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`employee_id`);

--
-- Indexes for table `qms_users2`
--
ALTER TABLE `qms_users2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`employee_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `qms_videos`
--
ALTER TABLE `qms_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qsd_marquee`
--
ALTER TABLE `qsd_marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qsd_steps`
--
ALTER TABLE `qsd_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qms_users`
--
ALTER TABLE `qms_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `qms_users2`
--
ALTER TABLE `qms_users2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `qms_videos`
--
ALTER TABLE `qms_videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qsd_marquee`
--
ALTER TABLE `qsd_marquee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `qsd_steps`
--
ALTER TABLE `qsd_steps`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
