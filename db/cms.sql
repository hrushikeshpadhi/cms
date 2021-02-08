-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 11:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_candidates`
--

CREATE TABLE `cms_candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applied_date` date DEFAULT NULL,
  `candidate_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expnrce` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currnt_comp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_locn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currnt_ctc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_ctc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notic_period` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_jobs`
--

CREATE TABLE `cms_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `compname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assndate` date DEFAULT NULL,
  `exprenc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ctc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noticperiod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_jobs`
--

INSERT INTO `cms_jobs` (`id`, `compname`, `assndate`, `exprenc`, `ctc`, `noticperiod`, `locn`, `userid`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'testing', '2021-02-03', '4', '10', '30', 'Bhubaneswar', '2', 'Test Engineers are responsible for conducting automated and manual tests to ensure the software created by developers fits its purpose. Assessing codes is one of the main duties of test engineers.\r\nIn order to attract Test Engineers that best matches your needs, it is very important to write a clear and precise Test Engineer job description', '', '2021-02-02 00:09:04', '2021-02-02 00:09:04'),
(2, 'south co', '2021-02-02', '5', '15', '60', 'Bangalore', '4', 'We are looking to hire an experienced AngularJS Developer to join our dynamic team. As a lead Developer, you will be responsible for creating a top-level coding-base using Angular best practices. Your role will require you to implement an exciting and streamlined user experience in the form of a Java-based desktop and mobile web-app.\r\n\r\nTo ensure success as an AngularJS Developer, you should have extensive knowledge of theoretical software engineering, be proficient in JavaScript, HTML, and CSS, and have excellent project management skills. Ultimately, a top-class AngularJS Developer can design and build a streamlined application to company specifications that perfectly meet the needs of the user.', '', '2021-02-02 04:17:45', '2021-02-02 04:17:45'),
(3, 'TCS', '2021-02-04', '5', '15', '30', 'All India', '2', 'Great React Native developers can build apps that feel truly native while using web technologies that are familiar to a wide range of developers. They usually focus on the front end of the product, but they are also adept at understanding the API services and infrastructure with which the app needs to integrate.', '2076840025.pdf', '2021-02-04 00:55:25', '2021-02-04 00:55:25'),
(4, 'gsfgsg', '2021-02-05', 'gsgsgs', 'gsgs', 'gsgsgfsg', 'gdsfgdgdsg', '2', 'gsgfdsgsggfsgdsgsgc\r\nbvbz\r\nbxvb\r\nbx\r\nbvcb\r\nxc\r\nbvcx\r\nbxcbv', '1220600342.xlsx', '2021-02-04 01:50:36', '2021-02-04 01:50:36'),
(5, 'infosis', '2021-02-05', '5', '10', '34', 'fgfg', '4', 'nxnxnxn\r\nfmcnm\r\nmcmcnm', 'infosis.pdf', '2021-02-04 01:55:55', '2021-02-04 01:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `cms_roles`
--

CREATE TABLE `cms_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_roles`
--

INSERT INTO `cms_roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-01-26 18:30:00', '2021-01-26 18:30:00'),
(2, 'User', '2021-01-26 18:30:00', '2021-01-26 18:30:00'),
(3, 'Candidate', '2021-01-26 18:30:00', '2021-01-26 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_27_075712_create_cms_roles_table', 2),
(5, '2021_01_29_111421_create_cms_candidates_table', 3),
(6, '2021_01_29_113457_create_cms_candidates_table', 4),
(7, '2021_02_01_122307_create_cms_jobs_table', 5);

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
  `login_role` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_role`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MARVA FARRIS', NULL, 'and@xyz.com', NULL, '$2y$10$Eqnul.c.O.yg.WRpzACGWuaIr9s8sCxBLgte6lApm7nmbWSkwo.x2', NULL, '1', '', '2021-01-27 02:02:03', '2021-01-27 02:02:03'),
(2, 1, 'Hrushikesh', 'Padhi', 'dipun.hrushikesh@gmail.com', NULL, '$2y$10$hut9MO77AySYi/aHZqayAeZy/aYjeeS34cq4Vy.MnHd9EwqWhG4P6', NULL, '1,2', '::1', '2021-01-28 05:25:52', '2021-02-08 02:01:26'),
(4, 2, 'Swaraj', 'Mohapatra', 'swaraj.m@winvest-global.com', NULL, '$2y$10$slby2nFD9D0fAaIUYUtSDuRNiNtjOCQg703dDdF6vGFxHC38ivHy6', NULL, '2', '::1', '2021-02-02 00:46:16', '2021-02-03 04:37:20'),
(5, NULL, 'Hari', 'Kar', 'hari.k@winvest-global.com', NULL, '$2y$10$aiGTtUxOgpciMHNAHhum1u.98RgkRIXVEviI8JCm0F5uCG0s/NWly', NULL, '2', NULL, '2021-02-02 00:47:15', '2021-02-02 00:47:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_candidates`
--
ALTER TABLE `cms_candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cms_candidates_email_unique` (`email`);

--
-- Indexes for table `cms_jobs`
--
ALTER TABLE `cms_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_roles`
--
ALTER TABLE `cms_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `cms_candidates`
--
ALTER TABLE `cms_candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_jobs`
--
ALTER TABLE `cms_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_roles`
--
ALTER TABLE `cms_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
