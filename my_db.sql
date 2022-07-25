-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 09:00 AM
-- Server version: 8.0.29
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `status` enum('Active','Deleted') NOT NULL DEFAULT 'Active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `status`, `created_at`) VALUES
(1, 'Sport', 'Active', '2022-06-29 17:50:28'),
(2, 'Health', 'Active', '2022-06-29 17:52:30'),
(3, 'Beauty', 'Active', '2022-06-29 17:53:00'),
(4, 'News', 'Active', '2022-06-29 17:53:28'),
(5, 'Another One', 'Active', '2022-07-21 07:46:20'),
(6, 'This is the update', 'Active', '2022-07-21 07:47:37'),
(7, 'see me ', 'Active', '2022-07-21 08:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `short_desc` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_url`, `short_desc`, `created_at`, `post_id`) VALUES
(1, '2ddd40d5e2cf69248dab690d9065859c.jpg', 'Nice photo', '2022-07-21 18:25:05', 1),
(2, 'aef6116dc15f2194aa427e8f31cde96a.jpg', 'Nice photo again', '2022-07-21 18:27:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL,
  `activity` varchar(300) NOT NULL,
  `ipaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `logdate`, `username`, `activity`, `ipaddress`) VALUES
(1, '2022-06-23 14:38:57', 'vajayi', 'Successful Login', '::1'),
(2, '2022-06-23 14:54:58', 'Ngkebi', 'Successful Login', '::1'),
(3, '2022-06-23 16:01:20', 'Ngkebi', 'Successful Login', '::1'),
(4, '2022-06-23 16:04:44', 'Ngkebi', 'Successful Login', '::1'),
(5, '2022-06-23 16:08:54', 'Ngkebi', 'Successful Login', '::1'),
(6, '2022-06-23 16:18:43', 'Ngkebi', 'Successful Login', '::1'),
(7, '2022-06-24 12:15:20', 'Ngkebi', 'Successful Login', '::1'),
(8, '2022-06-29 16:04:56', 'Ngkebi', 'Successful Login', '::1'),
(9, '2022-06-29 16:41:35', 'Ngkebi', 'Successful Login', '::1'),
(10, '2022-06-29 17:04:32', 'Ngkebi', 'Successful Login', '::1'),
(11, '2022-06-29 17:39:34', 'Ngkebi', 'Successful Login', '::1'),
(12, '2022-06-29 18:15:07', 'Ngkebi', 'Successful Login', '::1'),
(13, '2022-07-20 16:24:08', 'Ngkebi', 'Successful Login', '::1'),
(14, '2022-07-20 16:24:24', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(15, '2022-07-20 16:24:32', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(16, '2022-07-20 16:25:15', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(17, '2022-07-20 16:25:35', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(18, '2022-07-20 16:35:59', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(19, '2022-07-20 17:21:26', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(20, '2022-07-21 06:36:35', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(21, '2022-07-21 07:02:14', 'Ngkebi', 'Successful Login', '::1'),
(22, '2022-07-21 07:39:21', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(23, '2022-07-21 07:39:32', 'Ngkebi', 'Category see me  was Created', '127.0.0.1'),
(24, '2022-07-21 08:09:40', 'Ngkebi', 'Category New Test was Created', '127.0.0.1'),
(25, '2022-07-21 08:10:45', 'Ngkebi', 'Category New Test was Created', '127.0.0.1'),
(26, '2022-07-21 08:27:15', '9', 'Category New  was Created', '127.0.0.1'),
(27, '2022-07-21 08:27:30', '10', 'Category Ne was Created', '127.0.0.1'),
(28, '2022-07-21 08:28:02', '11', 'Category NeEYE was Created', '127.0.0.1'),
(29, '2022-07-21 08:29:36', 'Ngkebi', 'Category with id 6 was Updated', '127.0.0.1'),
(30, '2022-07-21 08:30:48', 'Ngkebi', 'Category with id 6 was Updated', '127.0.0.1'),
(31, '2022-07-21 08:31:05', 'Ngkebi', 'Category with id 5 was Updated', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(300) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` longtext NOT NULL,
  `author` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Deleted') NOT NULL DEFAULT 'Active',
  `cat_id` int NOT NULL,
  `uploaded_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_desc`, `long_desc`, `author`, `created_at`, `status`, `cat_id`, `uploaded_by`) VALUES
(1, 'This is a test for knowledge', 'Real Madrid will finish the tour at the Rose Bowl Stadium in Los Angeles on Sunday, July 31, against Juventus.', 'The tour\n\nReal Madrid\'s first and most important game in the United States will be the El Clasico match against Barcelona in the early hours of Sunday, July 24.\n\nThe Allegiant Stadium in Las Vegas will host the duel between the two Spanish giants in a match that will be a sell-out.\n\nThree days later, on July 27, Real Madrid will head to San Francisco to take on Club America of Mexico in a match that will be played at 04:30 local time at Oracle Park.\n\nReal Madrid will finish the tour at the Rose Bowl Stadium in Los Angeles on Sunday, July 31, against Juventus.\n\nBale\'s debut\n\nLos Angeles FC\'s 2-1 away win over Nashville was Bale\'s first official club match since April 9.', 'Ikeaba Ngozi', '2022-07-21 16:55:26', 'Active', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `LastAuthenticatedToken` varchar(255) DEFAULT NULL,
  `LastLoginDate` timestamp NULL DEFAULT NULL,
  `DateCreated` date DEFAULT NULL,
  `LPasswordCDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `LastAuthenticatedToken`, `LastLoginDate`, `DateCreated`, `LPasswordCDate`) VALUES
(1, 'Ngkebi', 'Ikeaba Ngozichukwuka I', 'kebidegozi@gmail.com', '359328345545daae46ed061ebe16f6b5', 'WS1yDaoGCGZ5wTvbheYF', '2022-07-21 07:39:21', '2022-06-23', '2022-06-23 14:37:54'),
(2, 'vajayi', 'Victor Ajayi', 'Vajayi@gmail.com', '86067c9f2f4e24838d70bf1e00714a84', 'YqP1M47M870dmar2uqqz', '2022-06-23 14:38:57', '2022-06-23', '2022-06-23 14:38:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `uploaded_by` (`uploaded_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
