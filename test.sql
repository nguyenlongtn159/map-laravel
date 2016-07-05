-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2016 at 06:11 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `key`, `eng`, `vn`, `created_at`, `updated_at`) VALUES
(4, 'location', 'LOCATION', 'Vị Trí', NULL, '2016-07-05 03:50:02'),
(5, 'change-language', 'Change language', 'Thay đổi ngôn ngữ', NULL, '2016-07-05 03:50:02'),
(7, 'term', 'Term & Conditions', 'Chính sách & Điều khoản', NULL, '2016-07-05 03:50:02'),
(8, 'help-support', 'Help & Support', 'Hỗ trợ', NULL, '2016-07-05 03:50:02'),
(17, 'map', 'MAP', 'Bản đồ', NULL, '2016-07-05 03:50:02'),
(18, 'edit', 'Edit', 'Chỉnh sửa', NULL, '2016-07-05 03:50:02'),
(19, 'delete', 'Delete', 'Xóa', NULL, '2016-07-05 03:50:02'),
(20, 'powered-by', 'Powered by', 'Cung cấp bởi', NULL, '2016-07-05 03:50:02'),
(21, 'reference-site', 'Reference site', 'Trang liên kết', NULL, '2016-07-05 03:50:02'),
(22, 'go-back', 'GO BACK', 'QUAY LẠI', NULL, '2016-07-05 03:50:02'),
(23, 'check-in-wrong-place', 'You were check in in a wrong places!', 'Trang bạn yêu cầu không tồn tại!', NULL, '2016-07-05 03:50:02'),
(24, 'key:', 'Key:', 'Từ khóa:', NULL, '2016-07-05 03:50:02'),
(25, 'list', 'List', 'Danh sách', NULL, '2016-07-05 03:50:02'),
(26, 'content', 'content', 'nội dung', NULL, '2016-07-05 03:50:02'),
(27, 'reset-password', 'Reset password', 'Reset mật khẩu', NULL, '2016-07-05 03:50:02'),
(28, 'confirm-password', 'Confirm password', 'Xác nhận password', NULL, '2016-07-05 03:50:02'),
(29, 'email-address', 'E-mail address', 'Địa chỉ email', NULL, '2016-07-05 03:50:02'),
(30, 'send-password-reset-link', 'Send password reset link', 'Gửi link reset mật khẩu', NULL, '2016-07-05 03:50:02'),
(31, 'click-reset-password', 'Click here to reset password', 'Click để reset password', NULL, '2016-07-05 03:50:02'),
(32, 'register', 'Register', 'Đăng ký', NULL, '2016-07-05 03:50:02'),
(33, 'forgot-your-pass-word', 'Forgot your password', 'Quên mật khẩu', NULL, '2016-07-05 03:50:02'),
(34, 'remember-me', 'Remember me', 'Nhớ', NULL, '2016-07-05 03:50:02'),
(35, 'login', 'Login', 'Đăng nhập', NULL, '2016-07-05 03:50:02'),
(36, 'password', 'Password', 'Mật khẩu', NULL, '2016-07-05 03:50:02'),
(37, 'name', 'Name', 'Tên', NULL, '2016-07-05 03:50:02'),
(38, 'logout', 'Logout', 'Đăng xuất', NULL, '2016-07-05 03:50:02'),
(41, 'home', 'Home Page', 'Trang chu', NULL, '2016-07-05 03:50:02'),
(46, 'error', 'Not page', 'Loi trang', NULL, '2016-07-05 03:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `address`, `lat`, `lng`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Hanoi', 'Vietnam', '21.022773', '105.801944', 'capital', '2016-07-05 03:43:15', '2016-07-05 03:43:15'),
(2, 'Ho Chi Minh', 'Vietnam', '10.769000', '106.414162', 'city', '2016-07-05 03:43:15', '2016-07-05 03:43:15'),
(3, 'Bangkok', 'Thailand', '13.725110', '100.352911', 'capital', '2016-07-05 03:43:15', '2016-07-05 03:43:15'),
(4, 'Texas', 'United States', '31.100678', '-104.571252', 'state', '2016-07-05 03:43:15', '2016-07-05 03:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_01_084043_create_sessions_table', 1),
('2016_07_01_090507_Lang', 1),
('2016_07_01_094218_Session', 2),
('2016_07_05_021913_Map', 3),
('2016_07_05_034013_Map', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nguyenlongtn159@gmail.com', 'dd263b56654917e66f5a2203a7e5578027e583c910a75bad7143a93e8ef31540', '2016-07-04 02:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `select_languages`
--

CREATE TABLE `select_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `select_languages`
--

INSERT INTO `select_languages` (`id`, `lang`, `created_at`, `updated_at`) VALUES
(2, 'eng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nguyenlongtn159@gmail.com', '$2y$10$bxzKWJ0YMtX6ndt0iGdSnO39OgCooFHFiDJsDC7E.chLZZ3yO4yjy', 'puzuiFyMgfs8bkKpcke7IjQHk9m6Ji5unAUwjrvOX7bCkHVixzIGfHmXflVE', '2016-07-03 23:52:39', '2016-07-04 18:32:55'),
(2, 'Nguyễn Đình Long', 'nguyenlongtn15@gmail.com', '$2y$10$lhBrgkf0nLh51TFmTT.gg.hbf6PwUzjdnXT9wxy.HIzwuRAxPg0gi', 'FIwI9uFXX2Lj2nWU6UP3sB1lBVi3XCALUe0XSRxpDZGA51INT2dZL1I5LVLY', '2016-07-04 01:23:09', '2016-07-04 01:26:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `select_languages`
--
ALTER TABLE `select_languages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `select_languages`
--
ALTER TABLE `select_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
