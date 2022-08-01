-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 05:04 PM
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
(1, '5f12c9b2dd1510eb46b7748f91cee2c5.jpg', 'Main Thumb', '2022-07-25 11:01:34', 1),
(2, '7e054cafa00bbb9568d4ffcf9982cda2.jpg', 'Main Thumb', '2022-07-25 11:43:24', 2),
(4, 'b28f6c1f5983cf951a2f09b148033615.jpg', 'Main Thumb', '2022-08-01 11:41:44', 4),
(5, 'e5ec42661c55a92b6ff101b60d14a49f.jpg', 'Main Thumb', '2022-08-01 11:42:08', 5),
(6, '2ddd40d5e2cf69248dab690d9065859c.jpg', 'Main Thumb', '2022-08-01 12:54:11', 6),
(7, 'd89fd2e7bf74117a5cb6df82b33b8c12.jpg', 'Main Thumb', '2022-08-01 13:20:27', 3);

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
(31, '2022-07-21 08:31:05', 'Ngkebi', 'Category with id 5 was Updated', '127.0.0.1'),
(32, '2022-07-25 09:58:22', 'Ngkebi', 'Post with title Cristiano Ronaldo to Atletico? The 10 keys to understanding his future was Published', '127.0.0.1'),
(33, '2022-07-25 10:41:25', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(34, '2022-07-25 10:42:31', 'Ngkebi', 'Post with title Courtois after Real Madrid\'s Clasico defeat: Pre-season results don\'t count was Published', '127.0.0.1'),
(35, '2022-07-25 10:48:50', 'Ngkebi', 'Post with title This is a test for knowledge was Published', '127.0.0.1'),
(36, '2022-07-25 14:07:12', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(37, '2022-07-26 10:45:57', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(38, '2022-07-26 11:17:21', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(39, '2022-07-26 11:23:25', 'Ngkebi', 'Post with title Cristiano Ronaldo to Atletico? The 10 keys to understanding his future was Updated', '127.0.0.1'),
(40, '2022-07-26 11:23:47', 'Ngkebi', 'Post with title Cristiano Ronaldo to Atletico? The 10 keys to understanding his future was Updated', '127.0.0.1'),
(41, '2022-07-26 11:28:47', 'Ngkebi', 'Post with title Cristiano Ronaldo to Atletico? The 10 keys to understanding his future was Updated', '127.0.0.1'),
(42, '2022-07-26 11:29:08', 'Ngkebi', 'Post with title This is a test for was Updated', '127.0.0.1'),
(43, '2022-07-26 11:29:17', 'Ngkebi', 'Post with title This is a test for was Updated', '127.0.0.1'),
(44, '2022-07-26 11:55:59', 'Ngkebi', 'Post  with id 3 was Deleted', '127.0.0.1'),
(45, '2022-07-26 12:57:42', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(46, '2022-07-26 12:59:45', 'Ngkebi', 'Image  with id 3 was Deleted', '127.0.0.1'),
(47, '2022-07-26 14:04:10', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(48, '2022-08-01 09:22:59', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(49, '2022-08-01 10:07:24', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(50, '2022-08-01 10:29:30', 'Ngkebi', 'Post with title Real Madrid\'s \'Bermuda Triangle\' is still challenging opponents and the next generation was Published', '127.0.0.1'),
(51, '2022-08-01 10:30:06', 'Ngkebi', 'Post with title Another one to Test was Published', '127.0.0.1'),
(52, '2022-08-01 11:14:23', 'Ngkebi', 'Post with title This is a test for knowledge was Published', '127.0.0.1'),
(53, '2022-08-01 11:53:24', 'Ngkebi', 'Post with title This is a test for knowledge was Updated', '127.0.0.1'),
(54, '2022-08-01 12:00:44', 'Ngkebi', 'Post with title Cristiano Ronaldo to Atletico? The 10 keys to understanding his future was Updated', '127.0.0.1'),
(55, '2022-08-01 12:23:42', 'Ngkebi', 'Post with title Courtois after Real Madrid\'s Clasico defeat: Pre-season results don\'t count was Updated', '127.0.0.1'),
(56, '2022-08-01 14:17:49', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(57, '2022-08-01 14:18:34', 'Ngkebi', 'Post with title Real Madrid\'s \'Bermuda Triangle\' is still challenging opponents and the next generation was Updated', '127.0.0.1'),
(58, '2022-08-01 14:18:53', 'Ngkebi', 'Post with title Another one to Test was Updated', '127.0.0.1'),
(59, '2022-08-01 14:54:22', 'Ngkebi', 'kebidegozi@gmail.com subscribed to the Newsletter Posts', '127.0.0.1'),
(60, '2022-08-01 14:54:37', 'Ngkebi', 'abigail@gmail.com subscribed to the Newsletter Posts', '127.0.0.1'),
(61, '2022-08-01 14:57:45', 'Ngkebi', 'vajayi@pagefinancials.com subscribed to the Newsletter Posts', '127.0.0.1'),
(62, '2022-08-01 14:58:06', 'Ngkebi', 'nikeaba@pagefinancials.com subscribed to the Newsletter Posts', '127.0.0.1'),
(63, '2022-08-01 14:59:28', 'Ngkebi', 'Post with title This is a test for knowledge was Updated', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'kebidegozi@gmail.com'),
(2, 'abigail@gmail.com'),
(3, 'vajayi@pagefinancials.com'),
(4, 'nikeaba@pagefinancials.com');

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
(1, 'Cristiano Ronaldo to Atletico? The 10 keys to understanding his future', 'Asked to depart Manchester United this summer', '<p>While Atletico Madrid insists that a move for Cristiano Ronaldo is unfeasible, people close to the Manchester United star are not ruling out anything. The Portugal international has reportedly asked to depart the Red Devils in his bid to participate in the Champions League next season.</p>\n<p>Let\'s take a look at the 10 keys to understanding Ronaldo\'s future. Financially unviable with potentially high revenues Atletico can\'t afford to sign Ronaldo for the time being. Los Rojiblancos have no space in their salary cap and they can\'t meet Manchester United\'s demands.</p>\n<p>However, they are aware that their revenue would skyrocket due to the commercial impact a potential Ronaldo arrival would make. A couple of strikers or two important players must leave To make room for Ronaldo, at least two players would have to leave the club.</p>\n<p>One would be Alvaro Morata and the other could be a midfielder such as Saul Niguez or Thomas Lemar.</p>', 'DAVID G. MEDINA', '2022-07-25 10:58:22', 'Active', 1, 1),
(2, 'Courtois after Real Madrid\'s Clasico defeat: Pre-season results don\'t count', 'Los Blancos lost 1-0 to Barcelona in Las Vegas', '<p>Thibaut Courtois has made clear that the result in the pre-season Clasico between Barcelona and Real Madrid will not affect the Los Blancos players. Carlo Ancelotti\'s men lost 1-0 to Barcelona in a pre-season friendly duel that took place in Las Vegas on Sunday, with this being Real Madrid\'s first game of the summer. \"Obviously you can\'t draw too many conclusions,\" Courtois said.</p>\n<p>\"Some have been training for two weeks and others have only been training for one week. \"The most important thing is to get into a rhythm, to start with a good intensity, which in other years we didn\'t have. \"For a first game, it was good. The only thing is that we didn\'t have a goal and they scored a great goal. \"We hit the crossbar and they had one that went into the top corner.</p>\n<p>\"In pre-season, the result doesn\'t count. \"I remember when we lost 7-3 against Atletico Madrid and then we beat them twice and won the league that season. \"The results now don\'t say much. Obviously, we\'d prefer to win, especially in front of the fans in the United States, but it\'s the first game and we had to get into a rhythm.</p>\n<p>\"We don\'t like the defeat but we shouldn\'t take it too dramatically.\"</p>', 'MARIO CORTEGANA', '2022-07-25 11:42:31', 'Active', 1, 2),
(3, 'This is a test for', '\"These are questions for the coach.\n\n\"His injuries are in the past. The other day [Antonio] Rudiger kicked him [in training] and he got up [laughs]\".', '\"These are questions for the coach.\n\n\"His injuries are in the past. The other day [Antonio] Rudiger kicked him [in training] and he got up [laughs]\".', 'Ikeaba Ngo', '2022-07-25 11:48:50', 'Active', 3, 2),
(4, 'Real Madrid\'s \'Bermuda Triangle\' is still challenging opponents and the next generation', 'Casemiro, Modric, and Kroos are still at the top of their game', '<p>Carlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labeled Nacho Fernandez as a pessimistic defender.</p>\n<p>Then, after the match against Juventus in Los Angeles this summer, the Italian coach named Real Madrid\'s midfield trident after an urban legend. \"I call Casemiro, [Toni] Kroos, and [Luka] Modric the Bermuda Triangle, because in their part of the pitch the ball disappears,\" Ancelotti said.</p>\n<p>The Real Madrid coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico, and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over Juventus to highlight a unique midfield. Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but Real Madrid\'s midfield is one of the finest in football history. In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>', 'MIGUEL ÁNGEL LARA', '2022-08-01 11:29:30', 'Active', 3, 2),
(5, 'Another one to Test', 'Casemiro, Modric and Kroos are still at the top of their game', '<p>Carlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labelled Nacho Fernandez as a pessimistic defender.</p>\n<p>Then, after the match against Juventus in Los Angeles this summer, the Italian coach named Real Madrid\'s midfield trident after an urban legend. \"I call Casemiro, [Toni] Kroos and [Luka] Modric the Bermuda Triangle, because in their part of the pitch the ball disappears,\" Ancelotti said.</p>\n<p>The Real Madrid coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over Juventus to highlight a unique midfield. Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but Real Madrid\'s midfield is one of the finest in football history. In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>', 'Micheal Black', '2022-08-01 11:30:06', 'Active', 4, 1),
(6, 'This is a test for knowledge', 'Sorted now ooo thank God', '<div class=\"ue-c-article__body\">\n<p><span class=\"capital-letter\">C</span>arlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labelled <strong>Nacho Fernandez</strong> as a pessimistic defender.</p>\n<p>Then, after <strong><a href=\"https://www.marca.com/en/football/2022/07/31/62e5eb0b22601da32f8b45be.html\" target=\"_blank\" rel=\"noopener\">the match against Juventus in Los Angeles</a></strong> this summer, the Italian coach named <strong><a href=\"https://www.marca.com/en/football/real-madrid.html\" target=\"_blank\" rel=\"noopener\">Real Madrid</a></strong>\'s midfield trident after an urban legend.</p>\n<p>\"I call <strong>Casemiro</strong>, <strong>[Toni] Kroos </strong>and <strong>[Luka] Modric</strong> the Bermuda Triangle, because in their part of the pitch the ball disappears,\" <strong>Ancelotti </strong>said.</p>\n<p>The <strong>Real Madrid</strong> coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over <strong>Juventus </strong>to highlight a unique midfield.</p>\n<p>Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but <strong>Real Madrid</strong>\'s midfield is one of the finest in football history.</p>\n<p>In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>\n<h4 class=\"ue-c-article__subheadline\">Casemiro, Kroos and Modric remain important</h4>\n<p>Beyond the nickname, <strong>Ancelotti </strong>was warning those who are asking for their imminent replacement that this is not his plan, no matter the talent of <strong>Aurelien Tchouameni</strong>,<strong> Eduardo Camavinga </strong>and<strong> Dani Ceballos</strong>.</p>\n<p><strong>Fede Valverde</strong> is a separate case, because the Uruguay international already established himself in the starting line-up in last season\'s final stretch, playing on the right flank ahead of the midfielders in a 4-3-3 formation.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1659349692362\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>No matter how much energy the new arrivals provide the team with, they won\'t be able to take over the starting line-up if the aforementioned three don\'t show any signs of weakness.</p>\n<p>In the match against <strong>Juventus</strong>, <strong>Modric</strong>, <strong>Kroos </strong>and <strong>Casemiro </strong>showed that they are not in the mood for dropping to the bench.</p>\n</div>', 'Micheal Black', '2022-08-01 12:14:23', 'Active', 4, 1);

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
(1, 'Ngkebi', 'Ikeaba Ngozichukwuka I', 'kebidegozi@gmail.com', '359328345545daae46ed061ebe16f6b5', 'SWOeRSB8hz2eGz9It9Hm', '2022-08-01 14:17:49', '2022-06-23', '2022-06-23 14:37:54'),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
