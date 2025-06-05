-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2025 at 01:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Harsh', '9464165010');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Harshdeep Kaur', 'harshdeepbca503@gmail.com', 'Web Development', 'jtfihjitjrhis', '2025-04-04 08:28:37'),
(2, 'Komal', 'komal@gmail.com', '', 'Hello Mam ', '2025-04-19 04:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `level1` varchar(50) DEFAULT NULL,
  `level2` varchar(50) DEFAULT NULL,
  `level3` varchar(50) DEFAULT NULL,
  `level4` varchar(50) DEFAULT NULL,
  `level5` varchar(55) DEFAULT NULL,
  `level6` varchar(55) DEFAULT NULL,
  `level7` varchar(55) DEFAULT NULL,
  `level8` varchar(55) DEFAULT NULL,
  `level9` varchar(55) DEFAULT NULL,
  `level10` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `level1`, `level2`, `level3`, `level4`, `level5`, `level6`, `level7`, `level8`, `level9`, `level10`) VALUES
(8, 'AI', 'Cursor', 'khs', 'sdhg', 'dhsUF', 'idnj', 'kdnf', 'djfn', 'djfnj', 'hdfjNd', 'usdhzf'),
(2, 'Web Development', 'HTML', 'CSS & Layouts', 'JavaScript Basics', 'Advanced JavaScript', 'Git & GitHub', 'Bootstrap Framework', 'Node.js', 'MongoDB', 'REST APIs', 'Full Stack Integration'),
(3, 'Web Designing', 'HTML Structure', 'CSS Styling', 'Responsive Design', 'UI/UX Basics', 'Figma & Wireframes', 'Bootstrap Design', 'Color Theory', 'Typography', 'Website Templates', 'Portfolio Project'),
(4, 'Programming Languages', 'C Language', 'C++ Concepts', 'Java Basics', 'Python Basics', 'JavaScript', 'Data Structures', 'OOP Concepts', 'File Handling', 'Exception Handling', 'Mini Project');

-- --------------------------------------------------------

--
-- Table structure for table `course_level_access`
--

DROP TABLE IF EXISTS `course_level_access`;
CREATE TABLE IF NOT EXISTS `course_level_access` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `min_fee` int NOT NULL,
  `max_level_access` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_level_access`
--

INSERT INTO `course_level_access` (`id`, `course_name`, `min_fee`, `max_level_access`) VALUES
(1, 'Web Development', 3000, 2),
(2, 'Web Development', 6000, 4),
(3, 'Web Development', 9000, 6),
(4, 'Web Development', 12000, 8),
(5, 'Web Development', 15000, 9),
(6, 'Web Development', 18000, 10),
(7, 'Programming Languages', 2000, 2),
(8, 'Programming Languages', 4000, 5),
(9, 'Programming Languages', 6000, 10),
(10, 'Web Designing', 1500, 3),
(11, 'Web Designing', 3000, 6),
(12, 'Web Designing', 5000, 10),
(13, 'Basics', 1000, 3),
(14, 'Basics', 2000, 6),
(15, 'Basics', 3000, 10),
(16, 'AI & ML', 3000, 3),
(17, 'AI & ML', 6000, 6),
(18, 'AI & ML', 9000, 10),
(19, 'Networking', 2000, 3),
(20, 'Networking', 4000, 6),
(21, 'Networking', 6000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `rating`, `comments`, `created_at`) VALUES
(1, 'Harshdeep Kaur', 'harshdeepbca503@gmail.com', 5, 'Nice Course', '2025-04-04 08:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_status` enum('success','failed') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `course_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `amount`, `payment_method`, `transaction_id`, `payment_status`, `created_at`, `course_name`, `user_name`) VALUES
(1, 2, '3000.00', 'UPI', '', 'success', '2025-04-18 06:25:47', 'Web Development', 'Harshdeep Kaur'),
(2, 2, '3000.00', 'UPI', '', 'success', '2025-04-18 07:35:51', 'Web Development', 'Harshdeep Kaur'),
(4, 6, '3000.00', 'UPI', '', 'success', '2025-04-19 04:29:20', 'Web Development', 'Neena'),
(5, 2, '3000.00', 'UPI', '1234677', 'failed', '2025-04-19 05:16:08', 'Web Development', 'Harshdeep Kaur'),
(6, 8, '3000.00', 'Cash', '', 'success', '2025-04-22 17:48:19', 'Programming languages', 'Shyna'),
(11, 2, '3000.00', 'UPI', '', 'success', '2025-04-23 06:30:00', 'Web Development', 'Harshdeep Kaur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `course_name` varchar(55) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `fee` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_course_name` (`course_name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `course_name`, `start_date`, `end_date`, `fee`) VALUES
(3, 'Neha', 'Neha@gmail.com', 'neha', 'Programming languages', '2025-04-17', '2025-09-17', 18000),
(2, 'Harshdeep Kaur', 'harshdeep@gmail.com', 'harsh', 'Web Development', '2025-04-04', '2026-04-04', 18000),
(4, 'Komal', 'Komal@gmail.com', 'komal', 'Web Desingning', '2025-04-17', '2025-07-17', 6000),
(8, 'Shyna', 'shyna456@gmail.com', 'neena', 'Programming languages', '2025-04-22', '2025-10-22', 18000),
(6, 'Neena', 'neena@gmail.com', 'neena', 'Web Development', '2024-11-18', '2025-04-18', 18000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
