-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 12:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` text NOT NULL,
  `course_image` text NOT NULL,
  `course_cat` text NOT NULL,
  `course_code` text NOT NULL,
  `course_tutor` text NOT NULL,
  `course_desc` text NOT NULL,
  `s_count` int(11) NOT NULL DEFAULT '0',
  `course_level` int(11) NOT NULL,
  `access_lvl` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_image`, `course_cat`, `course_code`, `course_tutor`, `course_desc`, `s_count`, `course_level`, `access_lvl`, `created_at`) VALUES
(31492, 'Active Learning (1)', 'elearn2.jpeg', 'Learning Development', '436962845', '', 'Active learning refers to a broad range of teaching strategies which engage students as active participants in their learning during class time with their instructor. Typically, these strategies involve some amount of students working together during class, but may also involve individual work and/or reflection. These teaching approaches range from short, simple activities like journal writing, problem solving and paired discussions, to longer, involved activities or pedagogical frameworks like case studies, role plays, and structured team-based learning. In this course teachers will be able to understand active learning from a scientific approach.\r\n\r\n', 0, 10, 0, '0000-00-00'),
(31928, 'Active Learning (2)', '9072f827_alexandre-debieve-561298-unsplash.jpg', 'Learning Development', '12732663', '', 'Active learning refers to a broad range of teaching strategies which engage students as active participants in their learning during class time with their instructor. Typically, these strategies involve some amount of students working together during class, but may also involve individual work and/or reflection. These teaching approaches range from short, simple activities like journal writing, problem solving and paired discussions, to longer, involved activities or pedagogical frameworks like case studies, role plays, and structured team-based learning. In this course teachers will be able to understand active learning from a scientific approach.\r\n\r\n', 0, 10, 0, '0000-00-00'),
(32915, 'Support Good Thinking', '58d47e7c_inaki-del-olmo-602632-unsplash.jpg', 'Cognitive Development', '69508968', '', 'Learn how to encourage your students to have good thinking.', 0, 9, 0, '0000-00-00'),
(35240, 'Mental Health', '2a43cf69_baim-hanif-89800-unsplash.jpg', 'Learning Development', '1128930290', '', 'Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. Understanding how mental health affects teachers and students will create a positive learning environment.', 0, 9, 1, '0000-00-00'),
(46571, 'Problem Based Learning (1)', '1db4bdd1_karim-ghantous-329207-unsplash.jpg', 'Learning Development', '2007194356', '', 'Problem-Based Learning (PBL) is a teaching method in which complex real-world problems are used as the vehicle to promote student learning of concepts and principles as opposed to direct presentation of facts and concepts.', 0, 10, 0, '0000-00-00'),
(52736, 'ICE in Classroom Learning (2)', '979aa46a_inaki-del-olmo-602632-unsplash.jpg', 'Creativity, Innovation & Entrepreneurship', '1742075991', '', 'Learn the how to integrate creativity, Innovation and entrepreneurship  in classroom learning', 0, 11, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`id`, `course_id`, `email`, `created_at`, `updated_at`) VALUES
(30, 31492, 'ostrategic@gmail.com', NULL, NULL),
(31, 46571, 'ostrategic@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Osaretin Omoruyi', 'ostrategic@gmail.com', NULL, '$2y$10$zzNT0lpyVhDGueorJYLtt.qdJzX3ordIm4jG0N35Nc9EL4bER9Hx6', '1594951016-user0001.jpg', 'nRzYyftk6lc2yyvTBOSNtLhJaSrcETkWYVL8tiT7zbSOymaxeVUXf4wwR3tC', '2020-07-17 00:56:56', '2020-07-17 18:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95404;

--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
