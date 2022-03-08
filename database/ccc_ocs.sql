-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2022 at 07:07 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc_ocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio-visual`
--

DROP TABLE IF EXISTS `audio-visual`;
CREATE TABLE IF NOT EXISTS `audio-visual` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `grade_level` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `duration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `copyright` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `barcode` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `edition` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `volume` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `publisher` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pages` int DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `year` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cash_price` int DEFAULT NULL,
  `sof` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barcode` (`barcode`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `barcode`, `title`, `edition`, `volume`, `author`, `publisher`, `class`, `pages`, `remarks`, `date_received`, `year`, `cash_price`, `sof`, `created_at`, `updated_at`) VALUES
(3, 'ZZZ-003', 'Lorem Ipsum', '1st', '4', 'Michael Bourne', 'Lorem Ipsum', 'Lorem Ipsum', 500, '', '2020-05-05', '2021', 1500, 'Lorem Ipsum', '2022-02-20 14:45:42', NULL),
(6, 'ZZZ-006', 'test', 'test', 'test', 'test', 'test', 'test', 123, 'test', '2020-01-28', '2020', 122, 'test', '2022-02-20 16:00:00', '2022-02-22 05:13:03'),
(9, 'ZZZ-009', 'test', '', '', '', '', '', 0, '', '0000-00-00', '', 0, '', '2022-02-22 08:03:01', '2022-02-22 08:03:01'),
(10, 'ZZZ-010', 'test', '1st', 'test', 'test', 'test', 'test', 121, 'test', '2021-03-03', '2020', 120000, 'test', '2022-02-22 02:39:47', '2022-02-22 07:30:17'),
(11, 'ZZZ-011', 'test', 'test', 'test', 'test', 'test', 'test', 1200, 'test', '2021-04-08', '2020', 1900, 'test', '2022-02-22 05:21:23', '2022-02-22 05:22:42'),
(12, 'ZZZ-123', 'Test', 'test', 'test', 'test', 'test', 'test', 700, 'test', '2022-04-08', '2020', 750, 'test', '2022-02-22 08:54:34', '2022-02-22 08:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE IF NOT EXISTS `borrowers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `year_level` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `barangay` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `postal_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `profile_pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `first_name`, `middle_name`, `last_name`, `course`, `year_level`, `contact`, `street`, `barangay`, `city`, `province`, `postal_code`, `profile_pic`, `created_at`, `updated_at`) VALUES
(6, 'Pauls', 'Meyer', 'Watson', 'BLIS', '1st Year', '123123123123', 'Lopez St.', 'Calero', 'Calapan City', 'Oriental MIndoro', '5200', 'x-sLGYaQ_stMM-unsplash-min.jpg', '2022-02-03', '2022-02-03'),
(10, 'William', 'Clarkson', 'Meyers', 'BSIS', '2nd Year', '123123123123', 'Lopez St.', 'Calero', 'Calapan City', 'Oriental Mindoro', '5200', 'pexels-andrea-piacquadio-3771807.jpg', '2022-02-04', '2022-02-04'),
(11, 'Arnold', 'Williss', 'Williams', 'BSIS', '1st Year', '123123123123', 'Lopez St.', 'Calero', 'Calapan City', '0', '5200', '1.jpg', '2022-02-04', '2022-02-04'),
(12, 'Rauls', 'Raul', 'Raul', 'BSIS', '4th Year', '123123123123', 'Lopez St.', 'Calero', 'Calapan City', 'Oriental Mindoro', '5200', 'redux-logo.png', '2022-02-04', '2022-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
CREATE TABLE IF NOT EXISTS `journals` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `volume` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `copy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `issn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `library-resources`
--

DROP TABLE IF EXISTS `library-resources`;
CREATE TABLE IF NOT EXISTS `library-resources` (
  `id` int NOT NULL AUTO_INCREMENT,
  `barcode` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `barcode` (`barcode`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library-resources`
--

INSERT INTO `library-resources` (`id`, `barcode`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ZZZ-001', 'thesis', 'Available', '2022-02-20 05:13:17', NULL),
(2, 'ZZZ-002', 'Manuscript', 'Available', '2022-02-20 05:16:56', NULL),
(3, 'ZZZ-003', 'books', 'available', '2022-02-20 14:47:48', NULL),
(4, 'ZZZ-004', 'Books', 'Available', '2022-02-20 16:00:00', '2022-02-20 16:00:00'),
(6, 'ZZZ-006', 'Books', 'Available', '2022-02-20 16:00:00', '2022-02-20 16:00:00'),
(10, 'ZZZ-010', 'Books', 'Available', '2022-02-22 02:39:47', '2022-02-22 02:39:47'),
(11, 'ZZZ-011', 'Books', 'Available', '2022-02-22 05:21:23', '2022-02-22 05:21:23'),
(12, 'ZZZ-123', 'Books', 'Available', '2022-02-22 08:54:34', '2022-02-22 08:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `manuscript`
--

DROP TABLE IF EXISTS `manuscript`;
CREATE TABLE IF NOT EXISTS `manuscript` (
  `id` int NOT NULL,
  `code_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `course` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `year` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manuscript`
--

INSERT INTO `manuscript` (`id`, `code_number`, `title`, `author`, `course`, `year`, `created_at`, `updated_at`) VALUES
(3, '213', 'Testing', 'Barney Dinosaur', 'Courseone', '2011', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `volume` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `copy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `issn` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stud_tbl`
--

DROP TABLE IF EXISTS `stud_tbl`;
CREATE TABLE IF NOT EXISTS `stud_tbl` (
  `no` int NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `year_lvl` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `account_stat` varchar(45) DEFAULT NULL,
  `print_stat` varchar(45) DEFAULT NULL,
  `user_typ` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `clrnc_stat` varchar(45) DEFAULT NULL,
  `remark` varchar(45) DEFAULT NULL,
  `remark_stat` varchar(45) DEFAULT NULL,
  `apprvd_date` date DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stud_tbl`
--

INSERT INTO `stud_tbl` (`no`, `stud_id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `address`, `course`, `year_lvl`, `email`, `contact_no`, `account_stat`, `print_stat`, `user_typ`, `password`, `clrnc_stat`, `remark`, `remark_stat`, `apprvd_date`) VALUES
(1, '18-0001', 'De Torres', 'Eloisa Mae', 'Manalo', '2000-11-15', 21, 'Female', 'Libis, Calapan City', 'BSIS', 'Fourth', 'detorres@gmail.com', '9123456789', 'Active', '1', 'Student', 'password', 'Approved', 'None', 'Complied', '2022-02-14'),
(2, '18-0002', 'Aboboto', 'Wenzel', 'Lapurga', '2000-09-11', 21, 'Female', 'Baruyan, Calapan City', 'BSIS', 'Fourth', 'abboto@gmail.com', '9123456789', 'Active', '1', 'Student', 'password', 'Not Approved', 'N/A', 'Complied', '2022-02-14'),
(3, '18-00003', 'Evangelista', 'Shiela Mae', 'Barba', '1998-10-27', 25, 'Female', 'annucing, Calapan City', 'BSTM', 'Second Year', 'shiela@gmail.com', '09123456788', 'Not Active', '0', 'Student', 'password', 'Approved', 'N/A', 'Complied', '2022-03-01'),
(4, '18-000009', 'Manliquid', 'Roberto', 'Tanedo', '2000-01-27', 21, 'Male', 'Guinobatan, Calapan City', 'ABM', 'Grade 11', 'benjo@gmial.com', '09876543212', 'In Active', '1', 'Student', 'password', '', '', '', '0000-00-00'),
(5, '3324', 'asdasdadsasdad', 'adsadasda', 'ads', '2001-07-19', 21, 'Female', 'sads', 'STEM', 'Grade 12', 'fff@gmail.com', '1232323', 'In Active', '1', 'Student', 'dsdfsdfsdf', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

DROP TABLE IF EXISTS `thesis`;
CREATE TABLE IF NOT EXISTS `thesis` (
  `id` int NOT NULL,
  `code_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `year` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `code_number`, `title`, `author`, `year`, `created_at`, `updated_at`) VALUES
(1, '1', 'Test Title', 'Arthur Leni', '2009', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(11, 'test3@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'inactive', '2022-02-04', '2022-02-04'),
(10, 'test2@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'inactive', '2022-02-04', '2022-02-04'),
(6, 'test@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'active', '2022-02-03', '2022-02-03'),
(12, 'test4@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'inactive', '2022-02-04', '2022-02-04'),
(15, 'admin@gmail.com', 'password', 'admin', 'Active', '2022-03-01', '2022-03-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
