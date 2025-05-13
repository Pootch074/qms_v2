-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2024 at 12:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.29

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
  `user_id` int DEFAULT NULL,
  `position` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ass_step` int DEFAULT NULL,
  `ass_window` int DEFAULT NULL,
  `ass_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `section` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `division_id` int NOT NULL,
  `section_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qms_users`
--

INSERT INTO `qms_users` (`id`, `fname`, `lname`, `user_id`, `position`, `user_pass`, `ass_step`, `ass_window`, `ass_category`, `section`, `user_type`, `status`, `division_id`, `section_id`) VALUES
(1, 'Inday', 'Neñe', 111111, 'SWO II', '$2y$10$zswT62C1OV.yIPdXakb9yeKCN1sa47qsCR6cbG3JlyAN5F05IzIyy', 1, NULL, 'PRIORITY', 'Crisis Intervention Section', 'QND', '', 9, 15),
(2, 'Dodong', 'Nene', 112222, 'SWO II', '$2y$10$RpHxVeTMPaTqLWcxGxqaSeKkeV6hG.IIbgD/VhOU2hvIMkEqV2pP.', 1, NULL, 'REGULAR', 'Crisis Intervention Section', 'QND', '', 9, 15),
(3, 'Aryc', 'Yuson', 113333, 'SWO II', '$2y$10$//uzPFxSwlPiUC84uuCIQe.i2kQcWrGTCDsY5Aq37OQVAi4mrFIwS', 2, NULL, 'PRIORITY', 'CIS', 'QSF', 'ACTIVE', 9, 15),
(4, 'Juan', 'Cruz', 114444, 'SWO II', '$2y$10$fKlXSwpEOTnxlj.5TLo34OoAG3i7i9ZFA6h68hwA2Xdlj/1lpcL0W', 2, NULL, 'REGULAR', 'CIS', 'QSF', '', 9, 15),
(5, 'Shaira Marie', 'Udin', 115551, 'SWO II', '$2y$10$dJmzlws7bMlyYoct5mBoL.9SZ7V7ntorRQWvd0CZqKg8YBdBmaV3e', 3, 1, 'ALL', 'CIS', 'QSF', '', 9, 15),
(6, 'Sak', 'Maestro', 115552, 'SWO II', '$2y$10$WepyDvvF1QTNB92i6L2dv.kB0woUaV0wyXl373E2xu1u5GnvKSTMa', 3, 2, 'ALL', 'CIS', 'QSF', '', 9, 15),
(7, 'Phoebus', 'Apollo', 115553, 'SWO II', '$2y$10$Y6Gq1jUU.X1KfItU0NugGeVWDA/PS5zT.nnvCVnrjokg4RA2AJ2Ei', 3, 3, 'ALL', 'CIS', 'QSF', '', 9, 15),
(8, 'Six', 'Threat', 116661, 'SWO II', '$2y$10$i99ZIKiZaTqZO1oZQJ2VaePvsqxhWEHYgsOcr8QhRu/gGbxzMEhNe', 4, 1, 'ALL', 'CIS', 'QSF', '', 9, 15),
(9, 'Sarah', 'Cruz', 116662, 'SWO II', '$2y$10$wf4rBATKpzUHhT7.MSoUle.PUCX4DVHWLv7fHQ.CyA/eIAG2AsBxa', 4, 2, 'ALL', 'CIS', 'QSF', '', 9, 15),
(10, 'Dodong', 'Saypa', 117777, 'SWO II', '$2y$10$UlrQx9iZByOS1plo240ASu7xHVkmClu4SArRpYuaZdBuJd1doYk4G', NULL, NULL, 'PRIORITY', 'CIS', 'QSD', '', 9, 15),
(11, 'Maria', 'Clara', 118888, 'SWO II', '$2y$10$jBElYx.XXUMyxxE4KGpxJOUVz5rmqJug8Mv3y9713kDOoAFlM/bDG', NULL, NULL, 'REGULAR', 'CIS', 'QSD', '', 9, 15);

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
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category_name`) VALUES
(1, 'PRIORITY'),
(2, 'REGULAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisions`
--

CREATE TABLE `tbl_divisions` (
  `id` int NOT NULL,
  `division_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_divisions`
--

INSERT INTO `tbl_divisions` (`id`, `division_name`) VALUES
(1, 'DISASTER RESPONSE MANAGEMENT DIVISION'),
(2, 'FINANCIAL MANAGEMENT DIVISION'),
(3, 'GENERAL ADMINISTRATIVE SUPPORT SERVICES DIVISION'),
(4, 'HUMAN RESOURCE MANAGEMENT & DEVELOPMENT DIVISION'),
(5, 'OFFICE OF THE REGIONAL DIRECTOR'),
(6, '4PS MANAGEMENT DIVISION'),
(7, 'POLICY AND PLANS DIVISION'),
(8, 'PROMOTIVE SERVICES DIVISION'),
(9, 'PROTECTIVE SERVICES DIVISION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sections`
--

CREATE TABLE `tbl_sections` (
  `id` int NOT NULL,
  `division_id` int NOT NULL,
  `section_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sections`
--

INSERT INTO `tbl_sections` (`id`, `division_id`, `section_name`) VALUES
(1, 1, 'DISASTER RESPONSE MANAGEMENT SECTION'),
(2, 2, 'ACCOUNTING SECTION'),
(3, 3, 'PROPERTY AND SUPPLY SECTION '),
(4, 3, 'RECORDS AND ARCHIVE MANAGEMENT SECTION '),
(5, 4, 'HR PERSONNEL ADMINISTRATION SECTION (HRPASS)'),
(6, 5, 'LEGAL UNIT'),
(7, 5, 'SOCIAL MARKETING UNIT'),
(8, 5, 'SOCIAL TECHNOLOGY UNIT'),
(9, 6, 'PANTAWID PAMILYA PILIPINO PROGRAM MANAGEMENT SECTION'),
(10, 7, 'POLICY DEVELOPMENT AND PLANNING SECTION'),
(11, 7, 'STANDARDS SECTION'),
(12, 8, 'SUSTAINABLE LIVELIHOOD PROGRAM (SLP)'),
(13, 9, 'CENTER AND RESIDENTIAL CARE FACILITY (CRCF)'),
(14, 9, 'COMMUNITY-BASED SERVICES SECTION (CBSS)'),
(15, 9, 'CRISIS INTERVENTION SECTION'),
(16, 9, 'SOCIAL PENSION PROGRAM'),
(17, 9, 'SUPPLEMENTARY FEEDING PROGRAM'),
(18, 7, 'NATIONAL HOUSEHOLD TARGETING SECTION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int NOT NULL,
  `section_id` int NOT NULL,
  `service_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `section_id`, `service_name`) VALUES
(1, 1, 'DSWD Disaster Data Request Processing'),
(2, 1, 'LOCAL IN-KIND DONATIONS FACILITATION'),
(3, 1, 'PROCESSING OF RELIEF AUGMENTATION REQUEST'),
(4, 2, 'PROCESSING OF BIR FORM 2322 (CERTIFICATE OF DONATION)'),
(5, 2, 'PROCESSING OF REQUEST FOR ACCOUNTING CERTIFICATION FOR DSWD EMPLOYEES'),
(6, 3, 'ISSUANCE OF GATE PASS FOR SERVICE PROVIDERS AND SUPPLIERS'),
(7, 3, 'ISSUANCE OF PROPERTY CLEARANCE'),
(8, 4, 'RECEIVING REQUEST FOR INFORMATION'),
(9, 5, 'ISSUANCE OF CERTIFICATE OF EMPLOYMENT (COE) TO SEPARATED OFFICIALS AND EMPLOYEES'),
(10, 5, 'ISSUANCE OF CERTIFICATE OF LEAVE WITHOUT PAY (LWOP)/NO LWOP TO SEPARATED OFFICIALS AND EMPLOYEES'),
(11, 5, 'ISSUANCE OF SERVICE RECORD (SR) TO SEPARATED OFFICIALS AND EMPLOYEES'),
(12, 5, 'REGIONAL CLEARANCE CERTIFICATE FROM MONEY, PROPERTY AND LEGAL ACCOUNTABILITIES (FO CLEARANCE) TO SEPARATED OFFICIALS AND EMPLOYEES'),
(13, 6, 'RENDERING LEGAL OPINIONS AND ADVICE ON MATTER BROUGHT TO BY EXTERNAL CLIENTS'),
(14, 7, 'HANDLING 8888 COMPLAINTS AND GRIEVANCES'),
(15, 7, 'FACILITATIONS OF MEDIA INTERVIEW'),
(16, 8, 'PROVISION OF TECHNICAL ASSISTANCE ON SOCIAL MARKETING FOR THE INSTITUTIONALIZATION OF COMPLETED SOCIAL TECHNOLOGIES (STS)'),
(17, 8, 'SHARING OF DATA, INFORMATION, AND KNOWLEDGE PRODUCTS ON SOCIAL TECHNOLOGIES (STS)'),
(18, 18, 'DATA/RESEARCH REQUEST ON 4PS PROGRAM'),
(19, 18, 'GRIEVANCE INTAKE AND RESPONSE IN 4PS PROGRAM'),
(20, 18, 'REQUEST FOR LBP ENDORSEMENT TO BENEFICIARIES WITH DAMAGE CASH CARDS'),
(21, 18, 'REQUEST FOR PHIC CERTIFICATION'),
(22, 9, 'DATA SHARING - LIST OF DATA SUBJECTS'),
(23, 9, 'DATA SHARING - NAME MATCHING'),
(24, 9, 'DATA SHARING - STATISTICS/RAW DATA REQUEST'),
(25, 9, 'WALK-IN NAME MATCHING DATA REQUEST'),
(26, 10, 'APPROVAL FOR THE CONDUCT OF RESEARCH STUDY AND ACQUIRING PRIMARY DATA FROM DSWD OFFICIALS/PERSONNEL, BENEFICIARIES AND CLIENTS'),
(27, 10, 'OBTAINING SOCIAL WELFARE AND DEVELOPMENT (SWD) DATA AND INFORMATION'),
(28, 11, 'REGISTRATION, LICENSING AND ACCREDITATION OF SOCIAL WELFARE AND DEVELOPMENT'),
(29, 12, 'SLP REFERRAL MANAGEMENT PROCESS'),
(30, 13, 'CASE MANAGEMENT IN CENTER AND RESIDENTIAL CARE FACILITY'),
(31, 14, 'AUXILIARY SOCIAL SERVICES FOR PERSONS WITH DISABILITIES'),
(32, 14, 'EXTENSION OF SOCIAL WELFARE SERVICES TO DISTRESSED OVERSEAS FILIPIN0S, AND THEIR FAMILIES IN THE PHILIPPINES'),
(33, 14, 'FACILITATION OF REFERRAL ON CHILD IN NEED OF SPECIAL PROTECTION TO FIELD OFFICES AND OTHER INTERMEDIARIES'),
(34, 14, 'IMPLEMENTATION OF GOVERNMENT INTERNSHIP PROGRAM (GIP) IN FIELD OFFICES'),
(35, 14, 'SECURING TRAVEL CLEARANCE FOR MIN0RS TRAVELLING ABROAD'),
(36, 14, 'PROVISION OF ASSISTANCE TO PEOPLE LIVING WITH HIV'),
(37, 14, 'PROVISION OF ASSISTANCE UNDER THE RECOVERY AND REINTEGRATION PROGRAM FOR TRAFFICKED PERSONS'),
(38, 15, 'IMPLEMENTATION OF ASSISTANCE TO INDIVIDUALS IN CRISIS SITUATION SITUATIONS'),
(39, 16, 'PROCEDURE FOR SOCIAL PENSION PROVISION TO INDIGENT SENIOR CITIZENS'),
(40, 16, 'PROVISION OF CENTENARIAN GIFTS TO CENTENARIANS'),
(41, 17, 'IMPLEMENTATION OF SUPPLEMENTARY FEEDING PROGRAM');

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
(30, 1, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:04', '1', 2, 0),
(31, 2, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:11', '0', 2, 0),
(32, 3, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:14', '0', 2, 0),
(33, 4, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:19', '0', 2, 0),
(34, 5, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:24', '0', 2, 0),
(35, 6, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:27', '0', 2, 0),
(36, 7, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:31', '0', 2, 0),
(37, 8, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:35', '0', 2, 0),
(38, 9, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:39', '0', 2, 0),
(39, 10, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:43', '0', 2, 0),
(40, 11, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:47', '0', 2, 0),
(41, 12, 9, 15, 'PRIORITY', 15, '2024-11-07 06:25:51', '0', 2, 0),
(50, 13, 9, 15, 'PRIORITY', 15, '2024-11-07 06:39:09', '0', 2, 0),
(51, 14, 9, 15, 'PRIORITY', 15, '2024-11-07 06:39:31', '0', 2, 0),
(52, 15, 9, 15, 'PRIORITY', 15, '2024-11-07 06:40:06', '0', 2, 0),
(53, 16, 9, 15, 'PRIORITY', 15, '2024-11-07 06:40:10', '0', 2, 0),
(54, 1, 9, 15, 'REGULAR', 15, '2024-11-07 07:27:58', '0', 2, 0),
(55, 2, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:04', '0', 2, 0),
(56, 3, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:09', '0', 2, 0),
(57, 4, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:13', '0', 2, 0),
(58, 5, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:16', '0', 2, 0),
(59, 6, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:20', '0', 2, 0),
(60, 7, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:23', '0', 2, 0),
(61, 8, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:26', '0', 2, 0),
(62, 9, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:30', '0', 2, 0),
(63, 10, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:34', '0', 2, 0),
(64, 11, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:47', '0', 2, 0),
(65, 12, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:50', '0', 2, 0),
(66, 13, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:53', '0', 2, 0),
(67, 14, 9, 15, 'REGULAR', 15, '2024-11-07 07:28:56', '0', 2, 0),
(68, 15, 9, 15, 'REGULAR', 15, '2024-11-07 07:29:03', '0', 2, 0),
(69, 16, 9, 15, 'REGULAR', 15, '2024-11-07 07:29:06', '0', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qms_users`
--
ALTER TABLE `qms_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

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
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`division_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sections`
--
ALTER TABLE `tbl_sections`
  ADD CONSTRAINT `test` FOREIGN KEY (`division_id`) REFERENCES `tbl_divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
