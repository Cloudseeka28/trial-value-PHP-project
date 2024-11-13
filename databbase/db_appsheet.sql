-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 08:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appsheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `question` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `organization`, `question`, `created_at`, `active`) VALUES
(1, 'Ankit', 'ak@gmail.com', 'asdf', 'asdfsdf', '2023-07-14 11:04:48', 'N'),
(2, 's', 'ak@gmail.com', 'asdf', '', '2023-07-14 11:04:56', 'N'),
(3, 'sadf', 'ak@gmail.com', 'sdf', 'sdf', '2023-07-14 11:05:11', 'N'),
(4, 'Ankit', 'asdf', 'sadf', 'sdfsdf', '2023-07-14 11:54:54', 'N'),
(5, 'Ankit', 'ak@gmail.com', 'asdf', 'sdaf', '2023-07-14 11:55:02', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `financialburdencalculator`
--

CREATE TABLE `financialburdencalculator` (
  `id` int(11) NOT NULL,
  `valuepatientfinancialburden_id` int(11) NOT NULL,
  `MODULE1STUDYBURDEN` varchar(250) NOT NULL,
  `protocol_information` varchar(100) NOT NULL,
  `condition_burden_by_therapeutic_area` varchar(110) NOT NULL DEFAULT '',
  `Study_type` varchar(111) NOT NULL DEFAULT '',
  `Participant` varchar(200) NOT NULL,
  `Clinic_visit_frequency_during_treatment` varchar(100) NOT NULL,
  `Clinic_visit_frequency_during_follow_up` varchar(255) DEFAULT NULL,
  `Study_duration` varchar(255) DEFAULT NULL,
  `Number_of_visits_per_study` varchar(255) DEFAULT NULL,
  `Procedures` varchar(255) DEFAULT NULL,
  `Invasive_procedures` varchar(255) DEFAULT NULL,
  `Hospitalisation_AND_Overnight_stay` varchar(255) DEFAULT NULL,
  `Questionnaire_and_Diary_usage` varchar(255) DEFAULT NULL,
  `Average_time_spent_in_clinic_per_visit` varchar(255) DEFAULT NULL,
  `Long_term_follow_up_visits` varchar(255) DEFAULT NULL,
  `Participant_information` varchar(255) DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `Care_giver_or_child_care_support_required` varchar(255) DEFAULT NULL,
  `Clinic_visit_travel_distance_round_trip` varchar(255) DEFAULT NULL,
  `Average_travel_time_per_clinic_visit_round_trip` varchar(255) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'N',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  `modify_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `Lostincome` varchar(255) DEFAULT NULL,
  `Stipend` varchar(255) DEFAULT NULL,
  `EstimatedCompensationTotal` varchar(255) DEFAULT NULL,
  `Travelaccomodationexpense` varchar(255) DEFAULT NULL,
  `Patientsupportexpense` varchar(255) DEFAULT NULL,
  `EstimatedReimbursementTotal` varchar(255) DEFAULT NULL,
  `BurdenImpact` varchar(255) DEFAULT NULL,
  `BurdenImpactRisk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financialburdencalculator`
--

INSERT INTO `financialburdencalculator` (`id`, `valuepatientfinancialburden_id`, `MODULE1STUDYBURDEN`, `protocol_information`, `condition_burden_by_therapeutic_area`, `Study_type`, `Participant`, `Clinic_visit_frequency_during_treatment`, `Clinic_visit_frequency_during_follow_up`, `Study_duration`, `Number_of_visits_per_study`, `Procedures`, `Invasive_procedures`, `Hospitalisation_AND_Overnight_stay`, `Questionnaire_and_Diary_usage`, `Average_time_spent_in_clinic_per_visit`, `Long_term_follow_up_visits`, `Participant_information`, `Age`, `Care_giver_or_child_care_support_required`, `Clinic_visit_travel_distance_round_trip`, `Average_travel_time_per_clinic_visit_round_trip`, `active`, `created_at`, `deleted`, `modify_at`, `created_by`, `deleted_at`, `deleted_by`, `Lostincome`, `Stipend`, `EstimatedCompensationTotal`, `Travelaccomodationexpense`, `Patientsupportexpense`, `EstimatedReimbursementTotal`, `BurdenImpact`, `BurdenImpactRisk`) VALUES
(1, 13, '', '', 'High', 'Interventional', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '1', '1', '3', '3', 'N', '2023-07-09 18:16:19', 'N', '2023-07-09 18:16:19', 0, '0000-00-00 00:00:00', 0, '600', '60', '660', '6', '9', '15', '30', 'High'),
(2, 15, '', '', 'High', 'Interventional', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '1', '1', '3', '3', 'N', '2023-07-09 18:18:33', 'N', '2023-07-09 18:18:33', 0, '0000-00-00 00:00:00', 0, '600', '60', '660', '6', '9', '15', '30', 'High'),
(3, 16, '', '', '3', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '1', '1', '3', '3', 'N', '2023-07-09 18:19:33', 'N', '2023-07-09 18:19:33', 0, '0000-00-00 00:00:00', 0, '600', '60', '660', '6', '9', '15', '30', 'High'),
(4, 17, '', '', '2', '0', '1', '3', '2', '2', '3', NULL, '2', '3', '3', '3', '1', NULL, '3', '0', '1', '1', 'N', '2023-07-10 18:14:59', 'N', '2023-07-10 18:14:59', 0, '0000-00-00 00:00:00', 0, '460', '115', '575', '23230', '37605', '60835', '30', 'High'),
(5, 18, '', '', '2', '0', '1', '3', '1', '2', '3', NULL, '1', '2', '2', '3', '1', NULL, '3', '0', '3', '1', 'N', '2023-07-10 18:16:03', 'N', '2023-07-10 18:16:03', 0, '0000-00-00 00:00:00', 0, '328', '164', '492', '0', '0', '0', '28', 'MEDIUM'),
(6, 19, '', '', '2', '0', '1', '3', '1', '2', '3', NULL, '1', '2', '2', '3', '1', NULL, '3', '0', '3', '1', 'N', '2023-07-10 18:17:26', 'N', '2023-07-10 18:17:26', 0, '0000-00-00 00:00:00', 0, '328', '164', '492', '0', '0', '0', '28', 'MEDIUM'),
(7, 20, '', '', '1', '0', '1', '3', '3', '2', '3', NULL, '1', '3', '2', '3', '1', NULL, '2', '1', '2', '1', 'N', '2023-07-10 18:22:01', 'N', '2023-07-10 18:22:01', 0, '0000-00-00 00:00:00', 0, '210', '105', '315', '2205', '10710', '12915', '29', 'High'),
(8, 21, '', '', '2', '0', '1', '1', '1', '2', '3', NULL, '1', '3', '1', '3', '1', NULL, '1', '1', '1', '1', 'N', '2023-07-11 17:46:24', 'N', '2023-07-11 17:46:24', 0, '0000-00-00 00:00:00', 0, '9100', '5824', '14924', '4823', '12558', '17381', '23', 'MEDIUM'),
(9, 22, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '3', '1', '1', '2', 'N', '2023-07-11 17:51:02', 'N', '2023-07-11 17:51:02', 0, '0000-00-00 00:00:00', 0, '1480', '3404', '4884', '1924', '4366', '6290', '28', 'MEDIUM'),
(10, 23, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '3', '1', '1', '2', 'N', '2023-07-11 17:53:54', 'N', '2023-07-11 17:53:54', 0, '0000-00-00 00:00:00', 0, '1480', '3404', '4884', '1924', '4366', '6290', '28', 'MEDIUM'),
(11, 24, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '3', '1', '1', '2', 'N', '2023-07-11 17:54:31', 'N', '2023-07-11 17:54:31', 0, '0000-00-00 00:00:00', 0, '1480', '3404', '4884', '1924', '4366', '6290', '28', 'MEDIUM'),
(12, 25, '', '', '1', '0', '1', '2', '3', '2', '3', NULL, '2', '3', '1', '3', '1', NULL, '2', '1', '2', '1', 'N', '2023-07-11 17:55:07', 'N', '2023-07-11 17:55:07', 0, '0000-00-00 00:00:00', 0, '3120', '1872', '4992', '5616', '10998', '16614', '28', 'MEDIUM'),
(13, 26, '', '', '2', '0', '1', '1', '3', '2', '3', NULL, '2', '2', '3', '3', '1', NULL, '1', '1', '2', '1', 'N', '2023-07-11 17:56:01', 'N', '2023-07-11 17:56:01', 0, '0000-00-00 00:00:00', 0, '2360', '2301', '4661', '5251', '6549', '11800', '28', 'MEDIUM'),
(14, 27, '', '', '1', '1', '1', '3', '2', '2', '3', NULL, '2', '3', '2', '3', '1', NULL, '3', '1', '1', '1', 'N', '2023-07-11 17:57:38', 'N', '2023-07-11 17:57:38', 0, '0000-00-00 00:00:00', 0, '4800', '1776', '6576', '2592', '4272', '6864', '30', 'High'),
(15, 28, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '2', '2', '3', '1', NULL, '3', '1', '2', '1', 'N', '2023-07-11 18:01:11', 'N', '2023-07-11 18:01:11', 0, '0000-00-00 00:00:00', 0, '1240', '1829', '3069', '1302', '3007', '4309', '30', 'High'),
(16, 29, '', '', '2', '1', '1', '2', '3', '2', '3', NULL, '2', '3', '1', '3', '1', NULL, '3', '1', '2', '2', 'N', '2023-07-11 18:04:53', 'N', '2023-07-11 18:04:53', 0, '0000-00-00 00:00:00', 0, '39400', '2167', '41567', '1970', '7092', '9062', '32', 'High'),
(17, 30, '', '', '1', '1', '1', '2', '3', '1', '3', NULL, '1', '2', '2', '3', '2', NULL, '2', '1', '1', '2', 'N', '2023-07-11 18:05:42', 'N', '2023-07-11 18:05:42', 0, '0000-00-00 00:00:00', 0, '5160', '2967', '8127', '3784', '10320', '14104', '28', 'MEDIUM'),
(18, 31, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '1', '1', '3', '1', NULL, '2', '0', '2', '2', 'N', '2023-07-11 18:17:18', 'N', '2023-07-11 18:17:18', 0, '0000-00-00 00:00:00', 0, '4720', '2183', '6903', '3304', '8319', '11623', '27', 'MEDIUM'),
(19, 32, '', '', '2', '0', '1', '2', '3', '2', '3', NULL, '1', '2', '1', '3', '2', NULL, '3', '0', '1', '2', 'N', '2023-07-11 18:19:11', 'N', '2023-07-11 18:19:11', 0, '0000-00-00 00:00:00', 0, '13900', '8201', '22101', '9452', '18209', '27661', '28', 'MEDIUM'),
(20, 33, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '2', '1', '1', '3', '2', NULL, '1', '1', '2', '3', 'N', '2023-07-11 18:23:43', 'N', '2023-07-11 18:23:43', 0, '0000-00-00 00:00:00', 0, '0', '0', '0', '0', '0', '0', '30', 'High'),
(21, 34, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:36:13', 'N', '2023-07-11 18:36:13', 0, '0000-00-00 00:00:00', 0, '16800', '3360', '20160', '0', '0', '0', '30', 'High'),
(22, 35, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:36:19', 'N', '2023-07-11 18:36:19', 0, '0000-00-00 00:00:00', 0, '16800', '3360', '20160', '2184', '5376', '7560', '30', 'High'),
(23, 36, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:36:25', 'N', '2023-07-11 18:36:25', 0, '0000-00-00 00:00:00', 0, '16800', '3360', '20160', '0', '0', '0', '30', 'High'),
(24, 37, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:36:49', 'N', '2023-07-11 18:36:49', 0, '0000-00-00 00:00:00', 0, '0', '5712', '5712', '5376', '5040', '10416', '30', 'High'),
(25, 38, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:36:54', 'N', '2023-07-11 18:36:54', 0, '0000-00-00 00:00:00', 0, '0', '5712', '5712', '5376', '5040', '10416', '30', 'High'),
(26, 39, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '2', '3', '2', NULL, '2', '0', '2', '3', 'N', '2023-07-11 18:37:06', 'N', '2023-07-11 18:37:06', 0, '0000-00-00 00:00:00', 0, '16800', '7560', '24360', '5376', '14784', '20160', '30', 'High'),
(27, 40, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '1', '1', '3', '2', NULL, '1', '0', '1', '3', 'N', '2023-07-11 18:50:52', 'N', '2023-07-11 18:50:52', 0, '0000-00-00 00:00:00', 0, '0', '702', '702', '3510', '5694', '9204', '27', 'MEDIUM'),
(28, 41, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '1', '1', '3', '2', NULL, '1', '0', '1', '3', 'N', '2023-07-11 18:51:54', 'N', '2023-07-11 18:51:54', 0, '0000-00-00 00:00:00', 0, '2730', '702', '3432', '3510', '5694', '9204', '27', 'MEDIUM'),
(29, 42, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '1', '1', '3', '2', NULL, '1', '0', '1', '3', 'N', '2023-07-11 18:52:28', 'N', '2023-07-11 18:52:28', 0, '0000-00-00 00:00:00', 0, '2730', '702', '3432', '3510', '5694', '9204', '27', 'MEDIUM'),
(30, 43, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '1', '1', '1', '3', '2', NULL, '1', '0', '1', '3', 'N', '2023-07-11 18:54:17', 'N', '2023-07-11 18:54:17', 0, '0000-00-00 00:00:00', 0, '10920', '312', '11232', '3510', '5694', '9204', '27', 'MEDIUM'),
(31, 44, '', '', '2', '0', '1', '3', '3', '2', '3', NULL, '2', '3', '1', '3', '2', NULL, '2', '1', '2', '1', 'N', '2023-07-11 18:55:31', 'N', '2023-07-11 18:55:31', 0, '0000-00-00 00:00:00', 0, '1600', '2280', '3880', '880', '1520', '2400', '31', 'High'),
(32, 45, '', '', '1', '0', '1', '3', '3', '2', '3', NULL, '1', '3', '1', '3', '2', NULL, '2', '0', '3', '1', 'N', '2023-07-11 18:57:57', 'N', '2023-07-11 18:57:57', 0, '0000-00-00 00:00:00', 0, '8970', '0', '8970', '25116', '150696', '175812', '29', 'High'),
(33, 46, '', '', '1', '0', '1', '3', '3', '3', '3', NULL, '2', '3', '1', '3', '2', NULL, '3', '0', '2', '2', 'N', '2023-07-11 19:02:55', 'N', '2023-07-11 19:02:55', 0, '0000-00-00 00:00:00', 0, '0', '5120', '5120', '0', '0', '0', '32', 'High'),
(34, 47, '', '', '1', '0', '1', '3', '3', '3', '3', NULL, '2', '3', '1', '3', '2', NULL, '3', '0', '2', '2', 'N', '2023-07-11 19:03:12', 'N', '2023-07-11 19:03:12', 0, '0000-00-00 00:00:00', 0, '0', '5120', '5120', '0', '0', '0', '32', 'High'),
(35, 48, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '2', '0', '1', '1', 'N', '2023-07-11 19:04:51', 'N', '2023-07-11 19:04:51', 0, '0000-00-00 00:00:00', 0, '1000', '925', '1925', '2150', '3775', '5925', '25', 'MEDIUM'),
(36, 49, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '2', '0', '1', '1', 'N', '2023-07-11 19:05:18', 'N', '2023-07-11 19:05:18', 0, '0000-00-00 00:00:00', 0, '1000', '925', '1925', '2150', '3775', '5925', '25', 'MEDIUM'),
(37, 50, '', '', '2', '0', '1', '2', '2', '2', '3', NULL, '2', '2', '1', '3', '1', NULL, '2', '0', '1', '1', 'N', '2023-07-11 19:05:37', 'N', '2023-07-11 19:05:37', 0, '0000-00-00 00:00:00', 0, '1000', '925', '1925', '2150', '3775', '5925', '25', 'MEDIUM'),
(38, 51, '', '', '2', '1', '1', '2', '2', '2', '3', NULL, '2', '1', '2', '3', '1', NULL, '3', '1', '2', '2', 'N', '2023-07-11 19:08:08', 'N', '2023-07-11 19:08:08', 0, '0000-00-00 00:00:00', 0, '2240', '1540', '3780', '616', '924', '1540', '30', 'High'),
(39, 52, '', '', '1', '1', '1', '3', '2', '3', '3', NULL, '1', '2', '1', '3', '1', NULL, '3', '1', '2', '3', 'N', '2023-07-12 15:17:12', 'N', '2023-07-12 15:17:12', 0, '0000-00-00 00:00:00', 0, '67500', '6875', '74375', '3500', '5000', '8500', '31', 'High'),
(40, 67, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:39:43', 'N', '2023-07-13 19:39:43', 0, '0000-00-00 00:00:00', 0, '-88560', '1080', '-87480', '0', '0', '0', '28', 'MEDIUM'),
(41, 68, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:41:39', 'N', '2023-07-13 19:41:39', 0, '0000-00-00 00:00:00', 0, '-88560', '1080', '-87480', '0', '0', '0', '28', 'MEDIUM'),
(42, 69, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:41:56', 'N', '2023-07-13 19:41:56', 0, '0000-00-00 00:00:00', 0, '88560', '1080', '89640', '0', '0', '0', '28', 'MEDIUM'),
(43, 70, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:42:28', 'N', '2023-07-13 19:42:28', 0, '0000-00-00 00:00:00', 0, '-88560', '0', '-88560', '0', '0', '0', '28', 'MEDIUM'),
(44, 71, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:44:48', 'N', '2023-07-13 19:44:48', 0, '0000-00-00 00:00:00', 0, '-88560', '0', '-88560', '0', '0', '0', '28', 'MEDIUM'),
(45, 72, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:51:36', 'N', '2023-07-13 19:51:36', 0, '0000-00-00 00:00:00', 0, '-88560', '0', '-88560', '0', '0', '0', '28', 'MEDIUM'),
(46, 73, '', '', '1', '1', '1', '2', '2', '1', '3', NULL, '1', '3', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:52:02', 'N', '2023-07-13 19:52:02', 0, '0000-00-00 00:00:00', 0, '-88560', '0', '-88560', '0', '0', '0', '28', 'MEDIUM'),
(47, 74, '', '', '3', '0', '1', '2', '3', '1', '3', NULL, '1', '1', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:53:11', 'N', '2023-07-13 19:53:11', 0, '0000-00-00 00:00:00', 0, '-23460', '1785', '-21675', '0', '6732', '6732', '28', 'MEDIUM'),
(48, 75, '', '', '3', '0', '1', '2', '3', '1', '3', NULL, '1', '1', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:54:05', 'N', '2023-07-13 19:54:05', 0, '0000-00-00 00:00:00', 0, '-23460', '1785', '-21675', '0', '6732', '6732', '28', 'MEDIUM'),
(49, 76, '', '', '3', '0', '1', '2', '3', '1', '3', NULL, '1', '1', '1', '3', '1', NULL, '2', '1', '2', '3', 'N', '2023-07-13 19:54:39', 'N', '2023-07-13 19:54:39', 0, '0000-00-00 00:00:00', 0, '-23460', '1785', '-21675', '0', '6732', '6732', '28', 'MEDIUM'),
(50, 77, '', '', '1', '1', '1', '2', '3', '1', '3', NULL, '1', '2', '1', '3', '1', NULL, '2', '1', '1', '3', 'N', '2023-07-13 19:56:23', 'N', '2023-07-13 19:56:23', 0, '0000-00-00 00:00:00', 0, '-77400', '1152', '-76248', '0', '2052', '2052', '27', 'MEDIUM'),
(51, 78, '', '', '2', '1', '1', '1', '3', '3', '3', NULL, '2', '3', '2', '3', '1', NULL, '2', '1', '1', '3', 'N', '2023-07-13 19:57:58', 'N', '2023-07-13 19:57:58', 0, '0000-00-00 00:00:00', 0, '-127840', '4624', '-123216', '0', '4488', '4488', '32', 'High'),
(52, 79, '', '', '1', '1', '1', '3', '3', '3', '3', NULL, '2', '3', '1', '3', '1', NULL, '2', '1', '1', '3', 'N', '2023-07-13 19:59:17', 'N', '2023-07-13 19:59:17', 0, '0000-00-00 00:00:00', 0, '227900', '0', '227900', '0', '6192', '6192', '32', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  `last_login_date` datetime DEFAULT NULL,
  `last_logout_date` datetime DEFAULT NULL,
  `is_logged_in` enum('Y','N') NOT NULL DEFAULT 'N',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contact` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`, `first_name`, `last_name`, `email`, `active`, `deleted`, `last_login_date`, `last_logout_date`, `is_logged_in`, `created_at`, `updated_at`, `contact`) VALUES
(1, 'superadmin', '$2y$10$f6Eg8j9bCKYQE3zQOd6y8.VgA4/NDZsWaQq4e.0iRoJtG4tmWVM9.', 1, 'Super', 'Admin', 'superadmin@admin.com', 'Y', 'N', '2023-07-14 11:25:46', '2023-06-01 11:19:56', 'Y', '2022-08-21 13:46:16', '2023-07-14 11:25:46', ''),
(2, 'adminn', '$2y$10$f6Eg8j9bCKYQE3zQOd6y8.VgA4/NDZsWaQq4e.0iRoJtG4tmWVM9.', 2, 'Admin', 'Admin', 'admin@admin.com', 'Y', 'N', '2023-05-31 21:27:44', '2023-03-30 11:38:28', 'Y', '2022-08-21 13:46:16', '2023-07-06 16:19:39', ''),
(3, '', '$2y$10$upEN89dGP6kxpy/Yix9nF.60gGHho/nz4RPds3.FB6b2RO2O8FUF2', 0, 'vikash', '', 'ak@gmail.com', 'Y', 'N', '2023-07-14 11:42:47', NULL, 'Y', '2023-07-14 11:42:13', '2023-07-14 11:57:43', '9174255785'),
(4, 'kamn@gmail.com', '$2y$10$WXwi6mAxWc4lMAyuUZ8s3.jV.i/AzgHFv9RFqPyHso/CSJZlRPcgS', 0, 'asdf', '', 'kamn@gmail.com', 'Y', 'N', NULL, NULL, 'N', '2023-07-14 11:56:15', '2023-07-14 11:56:15', '123124213'),
(5, 'ak@gmail.com', '$2y$10$n3j/qTaRtYtq5y/cRzjetedBt/tomE40/p57mv8olXodiTA4A4s8K', 0, 'safd', '', 'ak@gmail.com', 'Y', 'N', NULL, NULL, 'N', '2023-07-14 11:57:31', '2023-07-14 11:57:31', '34432534');

-- --------------------------------------------------------

--
-- Table structure for table `valuepatientfinancialburden`
--

CREATE TABLE `valuepatientfinancialburden` (
  `id` int(11) NOT NULL,
  `MODULE1STUDYBURDEN` varchar(250) NOT NULL,
  `General_Information` varchar(250) NOT NULL,
  `Therapeutic_Area` varchar(200) NOT NULL,
  `protocol_information` varchar(100) NOT NULL,
  `condition_burden_by_therapeutic_area` enum('Low','Medium','High') NOT NULL DEFAULT 'Low',
  `Study_type` enum('Interventional','Non-Interventional') NOT NULL DEFAULT 'Non-Interventional',
  `Participant` varchar(200) NOT NULL,
  `Clinic_visit_frequency_during_treatment` varchar(100) NOT NULL,
  `Clinic_visit_frequency_during_follow_up` varchar(255) DEFAULT NULL,
  `Study_duration` varchar(255) DEFAULT NULL,
  `Number_of_visits_per_study` varchar(255) DEFAULT NULL,
  `Procedures` varchar(255) DEFAULT NULL,
  `Invasive_procedures` varchar(255) DEFAULT NULL,
  `Hospitalisation_AND_Overnight_stay` varchar(255) DEFAULT NULL,
  `Questionnaire_and_Diary_usage` varchar(255) DEFAULT NULL,
  `Average_time_spent_in_clinic_per_visit` varchar(255) DEFAULT NULL,
  `Long_term_follow_up_visits` varchar(255) DEFAULT NULL,
  `Participant_information` varchar(255) DEFAULT NULL,
  `Age` varchar(255) DEFAULT NULL,
  `Care_giver_or_child_care_support_required` varchar(255) DEFAULT NULL,
  `Clinic_visit_travel_distance_round_trip` varchar(255) DEFAULT NULL,
  `Average_travel_time_per_clinic_visit_round_trip` varchar(255) DEFAULT NULL,
  `MODULE_2_COST_AND_PAYMENTS` varchar(255) DEFAULT NULL,
  `Compensation_method` varchar(255) DEFAULT NULL,
  `Participation_stipend` varchar(255) DEFAULT NULL,
  `Lost_income` varchar(255) DEFAULT NULL,
  `Reimbursement` varchar(255) DEFAULT NULL,
  `Expense_amounts_USD` varchar(255) DEFAULT NULL,
  `Travel_accomodation` varchar(255) DEFAULT NULL,
  `Patient_support_expenses` varchar(255) DEFAULT NULL,
  `Stipend_amounts_per_visit_USD` varchar(255) DEFAULT NULL,
  `Stipend_amounts_per_visit_USD_select` varchar(200) NOT NULL,
  `Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD` varchar(255) DEFAULT NULL,
  `Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect` varchar(200) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'N',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted` enum('Y','N') NOT NULL DEFAULT 'N',
  `modify_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valuepatientfinancialburden`
--

INSERT INTO `valuepatientfinancialburden` (`id`, `MODULE1STUDYBURDEN`, `General_Information`, `Therapeutic_Area`, `protocol_information`, `condition_burden_by_therapeutic_area`, `Study_type`, `Participant`, `Clinic_visit_frequency_during_treatment`, `Clinic_visit_frequency_during_follow_up`, `Study_duration`, `Number_of_visits_per_study`, `Procedures`, `Invasive_procedures`, `Hospitalisation_AND_Overnight_stay`, `Questionnaire_and_Diary_usage`, `Average_time_spent_in_clinic_per_visit`, `Long_term_follow_up_visits`, `Participant_information`, `Age`, `Care_giver_or_child_care_support_required`, `Clinic_visit_travel_distance_round_trip`, `Average_travel_time_per_clinic_visit_round_trip`, `MODULE_2_COST_AND_PAYMENTS`, `Compensation_method`, `Participation_stipend`, `Lost_income`, `Reimbursement`, `Expense_amounts_USD`, `Travel_accomodation`, `Patient_support_expenses`, `Stipend_amounts_per_visit_USD`, `Stipend_amounts_per_visit_USD_select`, `Minimum_and_Mean_Hourly_Earning_PPP_ILO_USD`, `Minimum_and_Mean_Hourly_Earning_PPP_ILO_USDSelect`, `active`, `created_at`, `deleted`, `modify_at`, `created_by`, `deleted_at`, `deleted_by`) VALUES
(1, '', '', '', '', 'Low', 'Interventional', 'Non\r\n                        Patient', 'Weekly', 'Bi-weekly', '5', '5', NULL, 'One time invesive', '5', 'Medium', '12', '2', NULL, '13-18', 'interventional', '10-30KM', '12', '12', '12', 'No', 'Yes', 'No', '12', '6', '4', '12', '', '12', '', 'N', '2023-07-09 16:52:39', 'N', '2023-07-09 16:52:39', 0, '0000-00-00 00:00:00', 0),
(2, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:04:36', 'N', '2023-07-09 17:04:36', 0, '0000-00-00 00:00:00', 0),
(3, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:04', 'N', '2023-07-09 17:05:04', 0, '0000-00-00 00:00:00', 0),
(4, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:28', 'N', '2023-07-09 17:05:28', 0, '0000-00-00 00:00:00', 0),
(5, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:29', 'N', '2023-07-09 17:05:29', 0, '0000-00-00 00:00:00', 0),
(6, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:30', 'N', '2023-07-09 17:05:30', 0, '0000-00-00 00:00:00', 0),
(7, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:31', 'N', '2023-07-09 17:05:31', 0, '0000-00-00 00:00:00', 0),
(8, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:32', 'N', '2023-07-09 17:05:32', 0, '0000-00-00 00:00:00', 0),
(9, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:33', 'N', '2023-07-09 17:05:33', 0, '0000-00-00 00:00:00', 0),
(10, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:37', 'N', '2023-07-09 17:05:37', 0, '0000-00-00 00:00:00', 0),
(11, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '0', '0', NULL, 'NoN-invasive', '5', 'Medium', '1', '1', NULL, '18-65', 'interventional', '<10KM', '1', '1', '1', 'Yes', 'No', 'Yes', '1', '0', '0', '1', '', '1', '', 'N', '2023-07-09 17:05:59', 'N', '2023-07-09 17:05:59', 0, '0000-00-00 00:00:00', 0),
(12, '', '', '', '', 'High', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '3', NULL, 'NoN-invasive', '3', 'No', '10', 'Yes treatment option', NULL, '18-65', 'Yes', '>30KM', '10', '10', '10', 'Yes', 'No', 'Yes', '10', '2', '3', '20', '', '10', '', 'N', '2023-07-09 18:13:23', 'N', '2023-07-09 18:13:23', 0, '0000-00-00 00:00:00', 0),
(13, '', '', '', '', 'High', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '3', NULL, 'NoN-invasive', '3', 'No', '10', 'Yes treatment option', NULL, '18-65', 'Yes', '>30KM', '10', '10', '10', 'Yes', 'No', 'Yes', '10', '2', '3', '20', '', '10', '', 'N', '2023-07-09 18:16:19', 'N', '2023-07-09 18:16:19', 0, '0000-00-00 00:00:00', 0),
(14, '', '', '', '', 'High', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '3', NULL, 'NoN-invasive', '3', 'No', '10', 'Yes treatment option', NULL, '18-65', 'Yes', '>30KM', '10', '10', '10', 'Yes', 'No', 'Yes', '10', '2', '3', '20', '', '10', '', 'N', '2023-07-09 18:18:06', 'N', '2023-07-09 18:18:06', 0, '0000-00-00 00:00:00', 0),
(15, '', '', '', '', 'High', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '3', NULL, 'NoN-invasive', '3', 'No', '10', 'Yes treatment option', NULL, '18-65', 'Yes', '>30KM', '10', '10', '10', 'Yes', 'No', 'Yes', '10', '2', '3', '20', '', '10', '', 'N', '2023-07-09 18:18:33', 'N', '2023-07-09 18:18:33', 0, '0000-00-00 00:00:00', 0),
(16, '', '', '', '', 'High', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '3', NULL, 'NoN-invasive', '3', 'No', '10', 'Yes treatment option', NULL, '18-65', 'Yes', '>30KM', '10', '10', '10', 'Yes', 'No', 'Yes', '10', '2', '3', '20', '', '10', '', 'N', '2023-07-09 18:19:33', 'N', '2023-07-09 18:19:33', 0, '0000-00-00 00:00:00', 0),
(17, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Monthly', '1', '115', NULL, 'One time invesive', '0', 'High', '3', 'Yes treatment option', NULL, '0-12', 'No', '<10KM', '1', '0', '0', NULL, 'Yes', NULL, '1', '202', '327', '1', '', '1', '', 'N', '2023-07-10 18:14:59', 'N', '2023-07-10 18:14:59', 0, '0000-00-00 00:00:00', 0),
(18, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Quartely', '4', '164', NULL, 'NoN-invasive', '2', 'Medium', '1', 'Yes treatment option', NULL, '0-12', 'No', '>30KM', '1', '0', '0', NULL, NULL, NULL, '1', '0', '0', '1', '', '1', '', 'N', '2023-07-10 18:16:03', 'N', '2023-07-10 18:16:03', 0, '0000-00-00 00:00:00', 0),
(19, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Quartely', '4', '164', NULL, 'NoN-invasive', '2', 'Medium', '1', 'Yes treatment option', NULL, '0-12', 'No', '>30KM', '1', '0', '0', NULL, NULL, NULL, '1', '0', '0', '1', '', '1', '', 'N', '2023-07-10 18:17:26', 'N', '2023-07-10 18:17:26', 0, '0000-00-00 00:00:00', 0),
(20, '', '', '', '', 'Low', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '2', '105', NULL, 'NoN-invasive', '3', 'Medium', '1', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '1', '0', '0', NULL, NULL, NULL, '1', '21', '102', '1', '', '1', '', 'N', '2023-07-10 18:22:01', 'N', '2023-07-10 18:22:01', 0, '0000-00-00 00:00:00', 0),
(21, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Quartely', 'Quartely', '2', '91', NULL, 'NoN-invasive', '4', 'No', '1', 'Yes treatment option', NULL, '18-65', 'Yes', '<10KM', '1', '0', '0', NULL, NULL, NULL, '0', '53', '138', '64', 'Europe', '50', 'Europe', 'N', '2023-07-11 17:46:24', 'N', '2023-07-11 17:46:24', 0, '0000-00-00 00:00:00', 0),
(22, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '74', NULL, 'One time invesive', '2', 'No', '2', 'Yes treatment option', NULL, '0-12', 'Yes', '<10KM', '2', '0', '0', NULL, NULL, NULL, '0', '26', '59', '46', 'Americas', '5', 'Africa and Middle East', 'N', '2023-07-11 17:51:02', 'N', '2023-07-11 17:51:02', 0, '0000-00-00 00:00:00', 0),
(23, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '74', NULL, 'One time invesive', '2', 'No', '2', 'Yes treatment option', NULL, '0-12', 'Yes', '<10KM', '2', '0', '0', NULL, NULL, NULL, '0', '26', '59', '46', 'Americas', '5', 'Africa and Middle East', 'N', '2023-07-11 17:53:54', 'N', '2023-07-11 17:53:54', 0, '0000-00-00 00:00:00', 0),
(24, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '74', NULL, 'One time invesive', '2', 'No', '2', 'Yes treatment option', NULL, '0-12', 'Yes', '<10KM', '2', '0', '0', NULL, NULL, NULL, '0', '26', '59', '46', 'Americas', '5', 'Africa and Middle East', 'N', '2023-07-11 17:54:31', 'N', '2023-07-11 17:54:31', 0, '0000-00-00 00:00:00', 0),
(25, '', '', '', '', 'Low', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '2', '78', NULL, 'One time invesive', '4', 'No', '1', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '1', '0', '0', NULL, NULL, NULL, '0', '72', '141', '24', 'Americas', '20', 'Europe', 'N', '2023-07-11 17:55:07', 'N', '2023-07-11 17:55:07', 0, '0000-00-00 00:00:00', 0),
(26, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Quartely', 'Bi-weekly', '1.5', '59', NULL, 'One time invesive', '2', 'High', '1', 'Yes treatment option', NULL, '18-65', 'Yes', '10-30KM', '1', '0', '0', NULL, NULL, NULL, '0', '89', '111', '39', 'Europe', '20', 'Americas', 'N', '2023-07-11 17:56:01', 'N', '2023-07-11 17:56:01', 0, '0000-00-00 00:00:00', 0),
(27, '', '', '', '', 'Low', 'Interventional', 'Patient', 'Bi-weekly', 'Monthly', '4', '48', NULL, 'One time invesive', '4', 'Medium', '1', 'Yes treatment option', NULL, '0-12', 'Yes', '<10KM', '1', '0', '0', NULL, NULL, NULL, '0', '54', '89', '37', 'Europe', '50', 'Europe', 'N', '2023-07-11 17:57:38', 'N', '2023-07-11 17:57:38', 0, '0000-00-00 00:00:00', 0),
(28, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '2.5', '31', NULL, 'NoN-invasive', '2', 'Medium', '1', 'Yes treatment option', NULL, '0-12', 'Yes', '10-30KM', '1', '0', '0', NULL, NULL, NULL, '0', '42', '97', '59', 'Europe', '20', 'Europe', 'N', '2023-07-11 18:01:11', 'N', '2023-07-11 18:01:11', 0, '0000-00-00 00:00:00', 0),
(29, '', '', '', '', 'Medium', 'Interventional', 'Patient', 'Monthly', 'Weekly', '3.5', '197', NULL, 'One time invesive', '3', 'No', '2', 'Yes treatment option', NULL, '0-12', 'Yes', '10-30KM', '2', '0', '0', NULL, NULL, NULL, '0', '10', '36', '11', 'Americas', '50', 'Americas', 'N', '2023-07-11 18:04:53', 'N', '2023-07-11 18:04:53', 0, '0000-00-00 00:00:00', 0),
(30, '', '', '', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Bi-weekly', '1.5', '43', NULL, 'NoN-invasive', '2', 'Medium', '4', 'check up', NULL, '13-18', 'Yes', '<10KM', '2', '0', '0', NULL, NULL, NULL, '0', '88', '240', '69', 'Americas', '20', 'Americas', 'N', '2023-07-11 18:05:42', 'N', '2023-07-11 18:05:42', 0, '0000-00-00 00:00:00', 0),
(31, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Weekly', '1.5', '59', NULL, 'NoN-invasive', '1', 'No', '2', 'Yes treatment option', NULL, '13-18', 'No', '10-30KM', '2', '0', '0', NULL, NULL, NULL, '0', '56', '141', '37', 'Americas', '20', 'Europe', 'N', '2023-07-11 18:17:18', 'N', '2023-07-11 18:17:18', 0, '0000-00-00 00:00:00', 0),
(32, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Bi-weekly', '2.5', '139', NULL, 'NoN-invasive', '2', 'No', '3', 'check up', NULL, '0-12', 'No', '<10KM', '2', '0', '0', NULL, NULL, NULL, '0', '68', '131', '59', 'Americas', '20', 'Europe', 'N', '2023-07-11 18:19:11', 'N', '2023-07-11 18:19:11', 0, '0000-00-00 00:00:00', 0),
(33, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Weekly', 'Weekly', '3.5', '83', NULL, 'One time invesive', '1', 'No', '2', 'check up', NULL, '18-65', 'Yes', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '0', '0', '0', 'Americas', NULL, 'Americas', 'N', '2023-07-11 18:23:43', 'N', '2023-07-11 18:23:43', 0, '0000-00-00 00:00:00', 0),
(34, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Europe', 'N', '2023-07-11 18:36:13', 'N', '2023-07-11 18:36:13', 0, '0000-00-00 00:00:00', 0),
(35, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '13', '32', '20', 'Americas', '20', 'Europe', 'N', '2023-07-11 18:36:19', 'N', '2023-07-11 18:36:19', 0, '0000-00-00 00:00:00', 0),
(36, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Europe', 'N', '2023-07-11 18:36:25', 'N', '2023-07-11 18:36:25', 0, '0000-00-00 00:00:00', 0),
(37, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '32', '30', '34', 'Europe', NULL, 'Americas', 'N', '2023-07-11 18:36:49', 'N', '2023-07-11 18:36:49', 0, '0000-00-00 00:00:00', 0),
(38, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '32', '30', '34', 'Europe', NULL, 'Americas', 'N', '2023-07-11 18:36:54', 'N', '2023-07-11 18:36:54', 0, '0000-00-00 00:00:00', 0),
(39, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '3', '168', NULL, 'One time invesive', '2', 'Medium', '2', 'check up', NULL, '13-18', 'No', '10-30KM', '3', '0', '0', NULL, NULL, NULL, '0', '32', '88', '45', 'Americas', '20', 'Americas', 'N', '2023-07-11 18:37:06', 'N', '2023-07-11 18:37:06', 0, '0000-00-00 00:00:00', 0),
(40, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '3', '78', NULL, 'NoN-invasive', '1', 'No', '3', 'check up', NULL, '18-65', 'No', '<10KM', '4', '0', '0', NULL, NULL, NULL, '0', '45', '73', '9', 'Africa and Middle East', NULL, 'Americas', 'N', '2023-07-11 18:50:52', 'N', '2023-07-11 18:50:52', 0, '0000-00-00 00:00:00', 0),
(41, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '3', '78', NULL, 'NoN-invasive', '1', 'No', '3', 'check up', NULL, '18-65', 'No', '<10KM', '4', '0', '0', NULL, NULL, NULL, '0', '45', '73', '9', 'Africa and Middle East', '5', 'Africa and Middle East', 'N', '2023-07-11 18:51:54', 'N', '2023-07-11 18:51:54', 0, '0000-00-00 00:00:00', 0),
(42, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '3', '78', NULL, 'NoN-invasive', '1', 'No', '3', 'check up', NULL, '18-65', 'No', '<10KM', '4', '0', '0', NULL, NULL, NULL, '0', '45', '73', '9', 'Africa and Middle East', '5', 'Africa and Middle East', 'N', '2023-07-11 18:52:28', 'N', '2023-07-11 18:52:28', 0, '0000-00-00 00:00:00', 0),
(43, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '3', '78', NULL, 'NoN-invasive', '1', 'No', '3', 'check up', NULL, '18-65', 'No', '<10KM', '4', '0', '0', NULL, NULL, NULL, '0', '45', '73', '4', 'Africa and Middle East', '20', 'Americas', 'N', '2023-07-11 18:54:17', 'N', '2023-07-11 18:54:17', 0, '0000-00-00 00:00:00', 0),
(44, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Bi-weekly', 'Bi-weekly', '0.5', '40', NULL, 'One time invesive', '5', 'No', '1', 'check up', NULL, '13-18', 'Yes', '10-30KM', '1', '0', '0', NULL, NULL, NULL, '0', '22', '38', '57', 'Europe', '20', 'Europe', 'N', '2023-07-11 18:55:31', 'N', '2023-07-11 18:55:31', 0, '0000-00-00 00:00:00', 0),
(45, '', '', '', '', 'Low', '', 'Patient', 'Weekly', 'Bi-weekly', '5', '299', NULL, 'NoN-invasive', '0', 'No', '1', 'check up', NULL, '13-18', 'No', '>30KM', '1', '0', '0', NULL, NULL, NULL, '0', '84', '504', '0', 'Asia Pac', '15', 'Asia Pac', 'N', '2023-07-11 18:57:57', 'N', '2023-07-11 18:57:57', 0, '0000-00-00 00:00:00', 0),
(46, '', '', '', '', 'Low', '', 'Healthy_volunteer', 'Bi-weekly', 'Weekly', '3', '256', NULL, 'One time invesive', '5', 'No', '4', 'check up', NULL, '0-12', 'No', '10-30KM', '2', '0', '0', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-11 19:02:55', 'N', '2023-07-11 19:02:55', 0, '0000-00-00 00:00:00', 0),
(47, '', '', '', '', 'Low', '', 'Healthy_volunteer', 'Bi-weekly', 'Weekly', '3', '256', NULL, 'One time invesive', '5', 'No', '4', 'check up', NULL, '0-12', 'No', '10-30KM', '2', '0', '0', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-11 19:03:12', 'N', '2023-07-11 19:03:12', 0, '0000-00-00 00:00:00', 0),
(48, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '25', NULL, 'One time invesive', '2', 'No', '1', 'Yes treatment option', NULL, '13-18', 'No', '<10KM', '1', '0', '0', NULL, NULL, NULL, '0', '86', '151', '37', 'Americas', '20', 'Europe', 'N', '2023-07-11 19:04:51', 'N', '2023-07-11 19:04:51', 0, '0000-00-00 00:00:00', 0),
(49, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '25', NULL, 'One time invesive', '2', 'No', '1', 'Yes treatment option', NULL, '13-18', 'No', '<10KM', '1', '0', '0', NULL, NULL, NULL, '0', '86', '151', '37', 'Americas', '20', 'Europe', 'N', '2023-07-11 19:05:18', 'N', '2023-07-11 19:05:18', 0, '0000-00-00 00:00:00', 0),
(50, '', '', '', '', 'Medium', '', 'Healthy_volunteer', 'Monthly', 'Monthly', '1.5', '25', NULL, 'One time invesive', '2', 'No', '1', 'Yes treatment option', NULL, '13-18', 'No', '<10KM', '1', '0', '0', NULL, NULL, NULL, '0', '86', '151', '37', 'Americas', '20', 'Europe', 'N', '2023-07-11 19:05:37', 'N', '2023-07-11 19:05:37', 0, '0000-00-00 00:00:00', 0),
(51, '', '', '', '', 'Medium', 'Interventional', 'Patient', 'Monthly', 'Monthly', '1', '28', NULL, 'One time invesive', '1', 'Medium', '2', 'Yes treatment option', NULL, '0-12', 'Yes', '10-30KM', '2', '0', '0', NULL, NULL, NULL, '0', '22', '33', '55', 'Americas', '20', 'Europe', 'N', '2023-07-11 19:08:08', 'N', '2023-07-11 19:08:08', 0, '0000-00-00 00:00:00', 0),
(52, '', 'af asdf sdf asdf', 'Otolaryngology', '', 'Low', 'Interventional', 'Patient', 'Bi-weekly', 'Monthly', '2', '125', NULL, 'NoN-invasive', '2', 'No', '18', 'Yes treatment option', NULL, '0-12', 'Yes', '10-30KM', '9', '0', 'Reimbursement', NULL, NULL, NULL, '0', '28', '40', '55', 'Europe', '20', 'Europe', 'N', '2023-07-12 15:17:12', 'N', '2023-07-12 15:17:12', 0, '0000-00-00 00:00:00', 0),
(53, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-13 19:28:55', 'N', '2023-07-13 19:28:55', 0, '0000-00-00 00:00:00', 0),
(54, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-13 19:30:04', 'N', '2023-07-13 19:30:04', 0, '0000-00-00 00:00:00', 0),
(55, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-13 19:32:08', 'N', '2023-07-13 19:32:08', 0, '0000-00-00 00:00:00', 0),
(56, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-13 19:32:43', 'N', '2023-07-13 19:32:43', 0, '0000-00-00 00:00:00', 0),
(57, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', NULL, 'Americas', 'N', '2023-07-13 19:33:03', 'N', '2023-07-13 19:33:03', 0, '0000-00-00 00:00:00', 0),
(58, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:33:25', 'N', '2023-07-13 19:33:25', 0, '0000-00-00 00:00:00', 0),
(59, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:33:38', 'N', '2023-07-13 19:33:38', 0, '0000-00-00 00:00:00', 0),
(60, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:33:51', 'N', '2023-07-13 19:33:51', 0, '0000-00-00 00:00:00', 0),
(61, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:34:32', 'N', '2023-07-13 19:34:32', 0, '0000-00-00 00:00:00', 0),
(62, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:35:21', 'N', '2023-07-13 19:35:21', 0, '0000-00-00 00:00:00', 0),
(63, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:35:28', 'N', '2023-07-13 19:35:28', 0, '0000-00-00 00:00:00', 0),
(64, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:35:52', 'N', '2023-07-13 19:35:52', 0, '0000-00-00 00:00:00', 0),
(65, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend, Lost income, Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:36:43', 'N', '2023-07-13 19:36:43', 0, '0000-00-00 00:00:00', 0),
(66, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend,Lost income,Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:37:08', 'N', '2023-07-13 19:37:08', 0, '0000-00-00 00:00:00', 0),
(67, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend,Lost income,Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:39:43', 'N', '2023-07-13 19:39:43', 0, '0000-00-00 00:00:00', 0),
(68, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend,Lost income,Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:41:38', 'N', '2023-07-13 19:41:38', 0, '0000-00-00 00:00:00', 0),
(69, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Participation stipend,Lost income,Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:41:56', 'N', '2023-07-13 19:41:56', 0, '0000-00-00 00:00:00', 0),
(70, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:42:28', 'N', '2023-07-13 19:42:28', 0, '0000-00-00 00:00:00', 0),
(71, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:44:48', 'N', '2023-07-13 19:44:48', 0, '0000-00-00 00:00:00', 0),
(72, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:51:36', 'N', '2023-07-13 19:51:36', 0, '0000-00-00 00:00:00', 0),
(73, '', '', 'Autoimmune', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Monthly', '2', '54', NULL, 'NoN-invasive', '4', 'No', '44', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '38', '0', 'Reimbursement', NULL, NULL, NULL, '0', '0', '0', '20', 'Americas', '20', 'Americas', 'N', '2023-07-13 19:52:02', 'N', '2023-07-13 19:52:02', 0, '0000-00-00 00:00:00', 0),
(74, '', '', 'Autoimmune', '', 'High', '', 'Healthy_volunteer', 'Monthly', 'Weekly', '1.5', '51', NULL, 'NoN-invasive', '1', 'No', '7', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '16', '0', 'Participation stipend', NULL, NULL, NULL, '0', '48', '132', '35', 'Europe', '20', 'Americas', 'N', '2023-07-13 19:53:11', 'N', '2023-07-13 19:53:11', 0, '0000-00-00 00:00:00', 0),
(75, '', '', 'Autoimmune', '', 'High', '', 'Healthy_volunteer', 'Monthly', 'Weekly', '1.5', '51', NULL, 'NoN-invasive', '1', 'No', '7', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '16', '0', 'Participation stipend', NULL, NULL, NULL, '0', '48', '132', '35', 'Europe', '20', 'Americas', 'N', '2023-07-13 19:54:05', 'N', '2023-07-13 19:54:05', 0, '0000-00-00 00:00:00', 0),
(76, '', '', 'Autoimmune', '', 'High', '', 'Healthy_volunteer', 'Monthly', 'Weekly', '1.5', '51', NULL, 'NoN-invasive', '1', 'No', '7', 'Yes treatment option', NULL, '13-18', 'Yes', '10-30KM', '16', '0', 'Participation stipend', NULL, NULL, NULL, '0', '48', '132', '35', 'Europe', '20', 'Americas', 'N', '2023-07-13 19:54:39', 'N', '2023-07-13 19:54:39', 0, '0000-00-00 00:00:00', 0),
(77, '', '', 'Dermatology', '', 'Low', 'Interventional', 'Patient', 'Monthly', 'Weekly', '3', '36', NULL, 'NoN-invasive', '2', 'No', '20', 'Yes treatment option', NULL, '13-18', 'Yes', '<10KM', '23', '0', 'Participation stipend', NULL, NULL, NULL, '0', '33', '57', '32', 'Americas', '50', 'Europe', 'N', '2023-07-13 19:56:23', 'N', '2023-07-13 19:56:23', 0, '0000-00-00 00:00:00', 0),
(78, '', '', 'Cardiovascular', '', 'Medium', 'Interventional', 'Patient', 'Quartely', 'Weekly', '3', '136', NULL, 'One time invesive', '3', 'Medium', '20', 'Yes treatment option', NULL, '13-18', 'Yes', '<10KM', '27', '0', 'Participation stipend', NULL, NULL, NULL, '0', '28', '33', '34', 'Europe', '20', 'Americas', 'N', '2023-07-13 19:57:58', 'N', '2023-07-13 19:57:58', 0, '0000-00-00 00:00:00', 0),
(79, '', '', 'Cardiovascular', '', 'Low', 'Interventional', 'Patient', 'Bi-weekly', 'Weekly', '2.5', '86', NULL, 'One time invesive', '3', 'No', '24', 'Yes treatment option', NULL, '13-18', 'Yes', '<10KM', '29', '0', 'Lost income', NULL, NULL, NULL, '0', '50', '72', '45', 'Europe', '50', 'Americas', 'N', '2023-07-13 19:59:17', 'N', '2023-07-13 19:59:17', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financialburdencalculator`
--
ALTER TABLE `financialburdencalculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `valuepatientfinancialburden`
--
ALTER TABLE `valuepatientfinancialburden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `financialburdencalculator`
--
ALTER TABLE `financialburdencalculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `valuepatientfinancialburden`
--
ALTER TABLE `valuepatientfinancialburden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
