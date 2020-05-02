-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 05:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'admin', 'password', '2020-04-29 02:20:38', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `clock_in` time NOT NULL,
  `clock_out` time NOT NULL,
  `total_work` float NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'todfhsdhfhcvhdhasiehfhfhfhfhsisfhfhsdifshdfsidfsjdf', '2020-04-05 09:24:13', 0),
(2, 1, 2, 'sdasdasdasdasdasdasdasdafdfsdassdfsadafdfafasdadasdasdasdd', '2020-04-05 09:25:10', 0),
(3, 2, 1, 'fdhdhaajshdiwhfhdihfhdiabvhfisdh', '2020-04-05 10:27:42', 0),
(4, 1, 2, '😄🙂', '2020-04-05 10:27:59', 0),
(5, 0, 1, 'hellow', '2020-04-05 10:28:33', 0),
(6, 0, 2, 'hi', '2020-04-05 10:28:37', 0),
(8, 0, 1, 'Ok', '2020-04-05 10:30:08', 0),
(9, 1, 2, 'but you', '2020-04-05 10:31:01', 0),
(10, 2, 1, 'sdsdasd', '2020-04-05 11:14:09', 0),
(11, 2, 1, 'sdsdasd', '2020-04-05 11:14:09', 0),
(12, 2, 1, 'sdsdasd', '2020-04-05 11:14:10', 0),
(13, 2, 1, 'what', '2020-04-05 11:24:58', 0),
(14, 1, 2, '😒😇', '2020-04-05 11:26:28', 0),
(15, 3, 2, 'chat', '2020-04-05 11:42:55', 0),
(16, 1, 2, 'new', '2020-04-05 11:45:40', 0),
(17, 1, 2, 'ok', '2020-04-05 11:45:49', 0),
(18, 1, 2, 'ok', '2020-04-05 11:45:49', 0),
(19, 2, 1, 'hello', '2020-04-05 11:47:37', 0),
(20, 2, 1, 'hi', '2020-04-05 11:47:51', 0),
(21, 1, 2, 'hey', '2020-04-05 11:48:03', 0),
(22, 2, 1, 'hahaha', '2020-04-05 11:48:14', 0),
(23, 1, 2, '😁😁😁', '2020-04-05 12:26:33', 0),
(24, 1, 2, 'sdsd', '2020-04-05 12:54:29', 0),
(25, 2, 1, 'gdgdgdgdgdfgsdfgdggdgsgagdggdggdfgagdggdfgdgahfgggdgfgdfgd', '2020-04-05 13:01:23', 0),
(26, 1, 2, 'dasdasdasdasdasdasdasdasdasdadagdssdf', '2020-04-05 13:02:00', 0),
(27, 2, 1, '😄😃😉😌', '2020-04-05 13:02:12', 0),
(28, 1, 2, '😜😄😄', '2020-04-05 13:02:20', 0),
(29, 1, 2, 'hello', '2020-04-05 13:31:36', 0),
(30, 2, 1, 'hu', '2020-04-05 13:32:19', 0),
(31, 1, 2, 'hmm', '2020-04-05 13:32:29', 0),
(32, 2, 1, 'In 1985 Aldus Corporation launched its first desktop publishing program Aldus PageMaker for Apple Macintosh computers, released in 1987 for PCs running Windows 1.0. Both contained the variant lorem ipsum most common today. Laura Perry, then art director with Aldus, modified prior versions of Lorem Ipsum text from typographical specimens; in the 1960s and 1970s it appeared often in lettering catalogs by Letraset. Anecdotal evidence has it that Letraset used Lorem ipsum already from 1970 onwards, eg. for grids (page layouts) for ad agencies. Many early desktop publishing programs, eg. Adobe PageMaker, used it to create template.', '2020-04-06 08:10:00', 1),
(33, 2, 1, 'Lorem ipsum dolor sit amet, mea te diceret detracto salutandi, pri dolor menandri salutandi ex. Pro ubique menandri te. In usu inani consequuntur. Exerci regione assentior ut est.\r\n\r\nUsu ei dicat iisque mnesarchum, nibh facete numquam vis ut, viris option praesent est no. Cu accusam adolescens definitiones mea, id alterum utroque habemus pri, ei qui tantas deleniti scaevola. Mea tale mucius malorum ut, ut duis eleifend est. Mei solum liber putent at, ad mea dolor voluptaria, ad esse definiebas per. Eligendi deterruisset et eam, vitae meliore tibique est et.', '2020-04-06 10:35:13', 1),
(34, 2, 1, 'Dear All:\n\nAfter a long time of fights, sarcasm, bullying, defaming, I would like to say, there is no possibility of any online test. Hopefully you all will get to know this very soon. Current consent is to finish course content through online classes by this April. University is not thinking about the mid and final right now. Even the UGC itself is concerned about this and they have also urged all the private universities not to take the exam online. However, if there is any problem or concern with the test, you should inform the appropriate authorities (Dept. Chair or Dean) by mail.\n\nRegards', '2020-04-06 11:14:21', 1),
(35, 1, 3, 'Hello', '2020-04-06 15:49:00', 0),
(36, 1, 3, 'i\'m david', '2020-04-06 15:49:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `create_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'IT Analyst', 1, 'admin', '2020-04-28 21:03:23', NULL, NULL),
(2, 'Shawkat Breed', 1, 'admin', '2020-04-29 00:47:44', NULL, NULL),
(3, 'Sunny Feeds', 1, 'admin', '2020-04-29 01:06:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` char(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `create_by` varchar(30) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  `employee_id` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `join_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `user_name`, `password`, `gender`, `email`, `department_id`, `designation_id`, `mobile_no`, `status`, `create_by`, `created_date`, `modified_by`, `modified_date`, `employee_id`, `role`, `department`, `designation`, `role_id`, `join_date`) VALUES
(10, 'Imtiaz', 'Misha', 'imtiazmisha', 'password', 'Female', 'imtiaz@gmail.com', 1, 1, '2131323123', 1, 'admin', '2020-05-01 02:11:18', NULL, NULL, '12121212', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(11, 'Imtiazer', 'Mishadf', 'imtiazmishadf', '12121212', 'Female', 'imtiaz@gmail.com', 1, 4, '2131323123', 1, 'admin', '2020-05-01 02:13:11', NULL, NULL, '12121212', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(12, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '12121212', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:30', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(13, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:34', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(14, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:36', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(15, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:38', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(16, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:40', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(17, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:42', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(18, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:44', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(19, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:46', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00'),
(20, 'Imtiazer88', 'Mishadf4253', 'imtiazmishadf3.4.3', '', 'Female', 'imtiaz@gmail.com', 1, 4, '213132312343', 1, 'admin', '2020-05-01 02:13:48', NULL, NULL, '1212121242.3', 'Admin', NULL, NULL, NULL, '2020-05-01 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designations`
--

CREATE TABLE `employee_designations` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee_designations`
--

INSERT INTO `employee_designations` (`id`, `title`, `status`, `created_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Vice Chairman', 1, 'Admin', '2017-05-24 06:36:17', '', '2017-05-24 06:36:17'),
(2, 'Chief Executive Officer (CEO)', 1, 'Admin', '2017-05-03 18:00:00', NULL, NULL),
(3, 'Chief Finance & Admin Officer', 1, 'admin', '2020-04-28 23:26:06', NULL, NULL),
(4, 'Sr. Finance & Admin Officer - ', 1, 'admin', '2020-04-28 23:26:27', NULL, NULL),
(5, 'Jr. Finance & Admin Officer', 1, 'admin', '2020-04-28 23:26:36', NULL, NULL),
(6, 'Research Associate', 1, 'admin', '2020-04-28 23:26:49', NULL, NULL),
(7, 'Office Assistant', 1, 'admin', '2020-04-28 23:27:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_leavs`
--

CREATE TABLE `employee_leavs` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `total_leave_yarly` int(11) NOT NULL,
  `deducated_leav` int(11) NOT NULL,
  `remaining_leav` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_informations`
--

CREATE TABLE `holiday_informations` (
  `id` int(11) NOT NULL,
  `holiday_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `types` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `holydays`
--

CREATE TABLE `holydays` (
  `id` int(11) NOT NULL,
  `attendace_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `day` date NOT NULL,
  `year` date NOT NULL,
  `description` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `crated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `leav_to` date NOT NULL,
  `leav_from` date NOT NULL,
  `total_leav` int(11) NOT NULL,
  `staus` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `modified_at` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `live_events`
--

CREATE TABLE `live_events` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `live_events`
--

INSERT INTO `live_events` (`id`, `subject`, `event_date`, `event_time`, `description`, `status`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(1, 'Live Event', '2017-05-06', '12:59:00', 'dfgfgfg', 0, 'admin', '2017-05-23 15:03:11', '', NULL),
(2, 'Mitting', '2017-05-13', '12:59:00', 'xcvzxcvc', 0, 'admin', '2017-05-23 15:04:01', '', NULL),
(3, 'Test Event', '2020-04-04', '20:30:00', 'This is a test even.', 0, 'admin', '2020-04-03 10:28:17', '', NULL),
(6, 'New Event ', '2020-04-03', '20:57:00', 'This is a new event, it worked.', 0, 'admin', '2020-04-03 14:57:23', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2020-04-05 11:25:54', 'no'),
(2, 2, '2020-04-05 11:32:34', 'no'),
(3, 2, '2020-04-05 13:53:42', 'no'),
(4, 1, '2020-04-05 13:53:43', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_time` time NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `subject`, `notice_date`, `notice_time`, `description`, `status`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(1, 'Board Mitting', '2017-05-22', '10:01:00', 'fh htyt rtyt t rt', 0, 'admin', '2017-05-21 20:00:50', '', NULL),
(2, 'Something', '0000-00-00', '00:00:00', '', 0, 'admin', '2017-05-23 14:57:17', '', NULL),
(3, 'New Now', '2020-04-03', '20:56:00', 'This is a new notification.', 0, 'admin', '2020-04-03 14:56:32', '', NULL),
(9, 'Day break.', '2020-04-05', '11:17:00', 'Tomorrow we will have a day break.', 0, 'admin', '2020-04-03 18:11:28', '', NULL),
(10, 'I am creating another', '2020-04-04', '16:47:00', 'For recent report list purpose, seeing if its working or not.', 0, 'admin', '2020-04-04 10:47:11', '', NULL),
(11, 'Today is a new test', '2020-04-05', '20:03:00', 'Today is a new test Today is a new test Today is a new test Today is a new test Today is a new testToday is a new test Today is a new test Today is a new test.', 0, 'admin', '2020-04-05 14:05:18', '', NULL),
(12, 'Test Notification', '2020-04-06', '16:28:00', 'ASASGDhsfh', 0, 'admin', '2020-04-06 10:28:37', '', NULL),
(13, 'Send notice check', '2020-04-29', '02:47:00', 'Checked.', 0, 'admin', '2020-04-28 20:48:01', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `ID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`ID`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Employer'),
(4, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_designations`
--
ALTER TABLE `employee_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holydays`
--
ALTER TABLE `holydays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_events`
--
ALTER TABLE `live_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `employee_designations`
--
ALTER TABLE `employee_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holydays`
--
ALTER TABLE `holydays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_events`
--
ALTER TABLE `live_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
