-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 10:01 AM
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
(7, 'd89fd2e7bf74117a5cb6df82b33b8c12.jpg', 'Main Thumb', '2022-08-01 13:20:27', 3),
(8, 'db59bbb299e829e1d0f5dacb7f81c2fb.jpg', 'Main Thumb', '2022-08-03 10:27:06', 7),
(11, '799bad5a3b514f096e69bbc4a7896cd9.jpg', 'Main Thumb', '2022-08-11 13:53:10', 10);

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
(63, '2022-08-01 14:59:28', 'Ngkebi', 'Post with title This is a test for knowledge was Updated', '127.0.0.1'),
(64, '2022-08-02 06:35:10', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(65, '2022-08-02 14:57:31', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(66, '2022-08-03 09:23:53', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(67, '2022-08-03 09:26:02', 'Ngkebi', 'Post with title Ancelotti\'s hunger and the new Real Madrid was Published', '127.0.0.1'),
(68, '2022-08-03 09:40:29', 'Ngkebi', 'Post with title This is a test for was Updated', '127.0.0.1'),
(69, '2022-08-03 11:06:50', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(70, '2022-08-03 11:07:38', 'Ngkebi', 'Post with title Ancelotti\'s hunger and the new Real Madrid was Updated', '127.0.0.1'),
(71, '2022-08-03 12:15:40', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(72, '2022-08-03 14:51:33', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(73, '2022-08-03 15:46:33', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(74, '2022-08-04 07:23:59', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(75, '2022-08-04 09:30:25', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(76, '2022-08-11 12:39:27', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(77, '2022-08-11 12:41:11', 'Ngkebi', 'Post with title Carlo Ancelotti: Real Madrid have a Super Coach was Published', '127.0.0.1'),
(78, '2022-08-11 12:44:00', 'Ngkebi', 'Post with title Carlo Ancelotti: Real Madrid have a Super Coach was Updated', '127.0.0.1'),
(79, '2022-08-11 12:50:56', 'Ngkebi', 'Post with title Ex-Real Madrid player-turned-fisherman Fabio Coentrao punished by Portuguese Federation in retirement was Published', '127.0.0.1'),
(80, '2022-08-11 12:51:52', 'Ngkebi', 'Post with title Real Madrid don\'t play finals, they win them: 17 wins from 19 finals since 2014 was Published', '127.0.0.1'),
(81, '2022-08-15 08:24:37', 'Ngkebi', 'Successful Login', '127.0.0.1'),
(82, '2022-08-15 09:29:27', 'Ngkebi', 'Post with title Asensio\'s labyrinth at Real Madrid was Published', '127.0.0.1'),
(83, '2022-08-15 09:35:55', 'Ngkebi', 'Post with title Ancelotti: The Real Madrid shirt weighs heavy, it was emotionally difficult for the youngsters was Published', '127.0.0.1'),
(84, '2022-08-15 09:43:28', 'Ngkebi', 'Image with id 15 was Deleted', '127.0.0.1'),
(85, '2022-08-15 10:12:41', 'Ngkebi', 'Image with id 9 was Deleted', '127.0.0.1'),
(86, '2022-08-15 10:12:44', 'Ngkebi', 'Image with id 17 was Deleted', '127.0.0.1'),
(87, '2022-08-15 10:12:50', 'Ngkebi', 'Image with id 10 was Deleted', '127.0.0.1'),
(88, '2022-08-15 10:12:53', 'Ngkebi', 'Image with id 16 was Deleted', '127.0.0.1'),
(89, '2022-08-15 10:14:19', 'Ngkebi', 'Image with id 18 was Deleted', '127.0.0.1'),
(90, '2022-08-15 10:22:56', 'Ngkebi', 'Image with id 19 was Deleted', '127.0.0.1'),
(91, '2022-08-15 11:32:04', 'Ngkebi', 'Image with id 20 was Deleted', '127.0.0.1'),
(92, '2022-08-16 07:49:09', 'Ngkebi', 'Successful Login', '127.0.0.1');

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
  `views` int DEFAULT '0',
  `author` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Active','Deleted') NOT NULL DEFAULT 'Active',
  `cat_id` int NOT NULL,
  `uploaded_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_desc`, `long_desc`, `views`, `author`, `created_at`, `status`, `cat_id`, `uploaded_by`) VALUES
(1, 'Cristiano Ronaldo to Atletico? The 10 keys to understanding his future', 'Asked to depart Manchester United this summer', '<p>While Atletico Madrid insists that a move for Cristiano Ronaldo is unfeasible, people close to the Manchester United star are not ruling out anything. The Portugal international has reportedly asked to depart the Red Devils in his bid to participate in the Champions League next season.</p>\n<p>Let\'s take a look at the 10 keys to understanding Ronaldo\'s future. Financially unviable with potentially high revenues Atletico can\'t afford to sign Ronaldo for the time being. Los Rojiblancos have no space in their salary cap and they can\'t meet Manchester United\'s demands.</p>\n<p>However, they are aware that their revenue would skyrocket due to the commercial impact a potential Ronaldo arrival would make. A couple of strikers or two important players must leave To make room for Ronaldo, at least two players would have to leave the club.</p>\n<p>One would be Alvaro Morata and the other could be a midfielder such as Saul Niguez or Thomas Lemar.</p>', 4, 'DAVID G. MEDINA', '2022-07-25 10:58:22', 'Active', 1, 1),
(2, 'Courtois after Real Madrid\'s Clasico defeat: Pre-season results don\'t count', 'Los Blancos lost 1-0 to Barcelona in Las Vegas', '<p>Thibaut Courtois has made clear that the result in the pre-season Clasico between Barcelona and Real Madrid will not affect the Los Blancos players. Carlo Ancelotti\'s men lost 1-0 to Barcelona in a pre-season friendly duel that took place in Las Vegas on Sunday, with this being Real Madrid\'s first game of the summer. \"Obviously you can\'t draw too many conclusions,\" Courtois said.</p>\n<p>\"Some have been training for two weeks and others have only been training for one week. \"The most important thing is to get into a rhythm, to start with a good intensity, which in other years we didn\'t have. \"For a first game, it was good. The only thing is that we didn\'t have a goal and they scored a great goal. \"We hit the crossbar and they had one that went into the top corner.</p>\n<p>\"In pre-season, the result doesn\'t count. \"I remember when we lost 7-3 against Atletico Madrid and then we beat them twice and won the league that season. \"The results now don\'t say much. Obviously, we\'d prefer to win, especially in front of the fans in the United States, but it\'s the first game and we had to get into a rhythm.</p>\n<p>\"We don\'t like the defeat but we shouldn\'t take it too dramatically.\"</p>', 65, 'MARIO CORTEGANA', '2022-07-25 11:42:31', 'Active', 4, 2),
(3, 'This is a test for', '\"These are questions for the coach.\"His injuries are in the past. ', '<p>\"These are questions for the coach. \"His injuries are in the past. The other day [Antonio] Rudiger kicked him [in training] and he got up [laughs]\".</p>\n<div class=\"ue-c-article__body\">\n<p><strong>Carlo Ancelotti </strong>returned from the United States enthusiastic about <a href=\"https://www.marca.com/en/football/real-madrid.html\"><strong>Real Madrid</strong></a>\'s pre-season work.</p>\n<p>Beyond the results and the good performance against <strong>Juventus</strong>, he is pleased with the work and the day-to-day atmosphere he saw on the training grounds at UCLA.</p>\n<p>Winning LaLiga Santander and the Champions League could cause the team to rest on their laurels but there is no sign that <strong>Real Madrid </strong>are doing that.</p>\n<p>The old guard want to make the most of their careers and the youngsters have a desire to join <strong>Real Madrid</strong>\'s legends.</p>\n<p><strong>Ancelotti </strong>has talked publicly about how his squad is more competitive now than it was last season given the arrivals of <strong>Antonio Rudiger </strong>and <strong>Aurelien Tchouameni</strong>.</p>\n<p>It does not seem like the coach is desperate for anyone new given he is content that he has other attacking options beyond <strong>Karim Benzema</strong>.</p>\n<h3>Two XIs</h3>\n<p><strong>Ancelotti</strong>, along with every other coach, is aware that he will have to balance the squad and the dressing room this season as he has youngsters who want minutes and the calendar is tough.</p>\n<p>For now, the team is convinced that unity in the dressing room is the best way to achieve the objectives at the end of the season. LaLiga Santander and, especially, the Champions League were won with the fundamental contribution of the players who came off the bench.</p>\n<p>In the United States, <strong>Ancelotti </strong>has already been holding private conversations with almost all the players in the squad.</p>\n<p>Always with a smile on his face, but being honest with his players, he has explained to each of them what he wants from them and how he intends to manage the season, with five titles up for grabs until FIFA publish the date of the Club World Cup, which is difficult to place in the calendar.</p>\n</div>', 36, 'Ikeaba Ngo', '2022-07-25 11:48:50', 'Active', 3, 2),
(4, 'Real Madrid\'s \'Bermuda Triangle\' is still challenging opponents and the next generation', 'Casemiro, Modric, and Kroos are still at the top of their game', '<p>Carlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labeled Nacho Fernandez as a pessimistic defender.</p>\n<p>Then, after the match against Juventus in Los Angeles this summer, the Italian coach named Real Madrid\'s midfield trident after an urban legend. \"I call Casemiro, [Toni] Kroos, and [Luka] Modric the Bermuda Triangle, because in their part of the pitch the ball disappears,\" Ancelotti said.</p>\n<p>The Real Madrid coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico, and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over Juventus to highlight a unique midfield. Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but Real Madrid\'s midfield is one of the finest in football history. In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>', 2, 'MIGUEL ÁNGEL LARA', '2022-08-01 11:29:30', 'Active', 3, 2),
(5, 'Another one to Test', 'Casemiro, Modric and Kroos are still at the top of their game', '<p>Carlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labelled Nacho Fernandez as a pessimistic defender.</p>\n<p>Then, after the match against Juventus in Los Angeles this summer, the Italian coach named Real Madrid\'s midfield trident after an urban legend. \"I call Casemiro, [Toni] Kroos and [Luka] Modric the Bermuda Triangle, because in their part of the pitch the ball disappears,\" Ancelotti said.</p>\n<p>The Real Madrid coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over Juventus to highlight a unique midfield. Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but Real Madrid\'s midfield is one of the finest in football history. In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>', 1, 'Micheal Black', '2022-08-01 11:30:06', 'Active', 4, 1),
(6, 'This is a test for knowledge', 'Sorted now ooo thank God', '<div class=\"ue-c-article__body\">\n<p><span class=\"capital-letter\">C</span>arlo Ancelotti has provided us with many football and life lessons through his press conferences. Just over a year ago, in Vitoria, he labelled <strong>Nacho Fernandez</strong> as a pessimistic defender.</p>\n<p>Then, after <strong><a href=\"https://www.marca.com/en/football/2022/07/31/62e5eb0b22601da32f8b45be.html\" target=\"_blank\" rel=\"noopener\">the match against Juventus in Los Angeles</a></strong> this summer, the Italian coach named <strong><a href=\"https://www.marca.com/en/football/real-madrid.html\" target=\"_blank\" rel=\"noopener\">Real Madrid</a></strong>\'s midfield trident after an urban legend.</p>\n<p>\"I call <strong>Casemiro</strong>, <strong>[Toni] Kroos </strong>and <strong>[Luka] Modric</strong> the Bermuda Triangle, because in their part of the pitch the ball disappears,\" <strong>Ancelotti </strong>said.</p>\n<p>The <strong>Real Madrid</strong> coach belongs to a generation who grew up with books and films about the mysterious disappearance of planes and ships in the triangle formed by Bermuda, Puerto Rico and the coast of Miami.</p>\n<p>He referred to that paranormal case after the 2-0 win over <strong>Juventus </strong>to highlight a unique midfield.</p>\n<p>Looking to the past, such nicknames were usually reserved for iconic forward lines, rather than for midfield trios, but <strong>Real Madrid</strong>\'s midfield is one of the finest in football history.</p>\n<p>In fact, they have a strong case for being considered the very best, as they led Los Blancos to four Champions League titles between 2016 and 2022.</p>\n<h4 class=\"ue-c-article__subheadline\">Casemiro, Kroos and Modric remain important</h4>\n<p>Beyond the nickname, <strong>Ancelotti </strong>was warning those who are asking for their imminent replacement that this is not his plan, no matter the talent of <strong>Aurelien Tchouameni</strong>,<strong> Eduardo Camavinga </strong>and<strong> Dani Ceballos</strong>.</p>\n<p><strong>Fede Valverde</strong> is a separate case, because the Uruguay international already established himself in the starting line-up in last season\'s final stretch, playing on the right flank ahead of the midfielders in a 4-3-3 formation.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1659349692362\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>No matter how much energy the new arrivals provide the team with, they won\'t be able to take over the starting line-up if the aforementioned three don\'t show any signs of weakness.</p>\n<p>In the match against <strong>Juventus</strong>, <strong>Modric</strong>, <strong>Kroos </strong>and <strong>Casemiro </strong>showed that they are not in the mood for dropping to the bench.</p>\n</div>', 1, 'Micheal Black', '2022-08-01 12:14:23', 'Active', 4, 1),
(7, 'Ancelotti\'s hunger and the new Real Madrid', 'The Italian coach sees the squad as even better than it was last season', '<div class=\"ue-c-article__body\">\n<p><strong>Carlo Ancelotti </strong>returned from the United States enthusiastic about <a href=\"https://www.marca.com/en/football/real-madrid.html\"><strong>Real Madrid</strong></a>\'s pre-season work.</p>\n<p>Beyond the results and the good performance against <strong>Juventus</strong>, he is pleased with the work and the day-to-day atmosphere he saw on the training grounds at UCLA.</p>\n<p>Winning LaLiga Santander and the Champions League could cause the team to rest on their laurels but there is no sign that <strong>Real Madrid </strong>are doing that.</p>\n<p>The old guard want to make the most of their careers and the youngsters have a desire to join <strong>Real Madrid</strong>\'s legends.</p>\n<p><strong>Ancelotti </strong>has talked publicly about how his squad is more competitive now than it was last season given the arrivals of <strong>Antonio Rudiger </strong>and <strong>Aurelien Tchouameni</strong>.</p>\n<p>It does not seem like the coach is desperate for anyone new given he is content that he has other attacking options beyond <strong>Karim Benzema</strong>.</p>\n<p><span style=\"font-size: 14pt;\"><strong><span style=\"line-height: 107%; font-family: \'Cambria\', serif;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ANOTHER TITLE </span></strong></span></p>\n<p><strong>Ancelotti</strong>, along with every other coach, is aware that he will have to balance the squad and the dressing room this season as he has youngsters who want minutes and the calendar is tough.</p>\n<p>For now, the team is convinced that unity in the dressing room is the best way to achieve the objectives at the end of the season. LaLiga Santander and, especially, the Champions League were won with the fundamental contribution of the players who came off the bench.</p>\n<p>In the United States, <strong>Ancelotti </strong>has already been holding private conversations with almost all the players in the squad.</p>\n<p>Always with a smile on his face, but being honest with his players, he has explained to each of them what he wants from them and how he intends to manage the season, with five titles up for grabs until FIFA publish the date of the Club World Cup, which is difficult to place in the calendar.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1659518642115\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>This is a very special season for the Italian coach. <strong>Ancelotti </strong>is still haunted by the low point of his second season in charge and wants to completely banish the memories of the 2014/15 season in which he was sacked.</p>\n<p>\"Once I can get it wrong, twice it\'s difficult,\" <strong>Ancelotti </strong>said last season when asked if he feared he might lose the team by not rotating.</p>\n</div>', 110, 'JUAN IGNACIO GARCÍA-OCHOA', '2022-08-03 10:26:02', 'Active', 1, 1),
(8, 'Carlo Ancelotti: Real Madrid have a Super Coach', 'Italian gave a coaching masterclass to win his fourth UEFA Super Cup', '<div class=\"ue-c-article__body\">\n<p><strong>Carlo Ancelotti </strong>is now the only coach to have won all five major European Leagues. As well, he has won the Champions League four times and as of Wednesday he is the coach with the most European Super Cups.</p>\n<p>It is an impressive record and one that appeared impossible when the Italian coach seemed a forgotten figure in the doldrums of <strong>Everton </strong>on Merseyside.</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\">Memories of the 14th Champions League in Helsinki</h4>\n<p><strong>Ancelotti</strong>\'s fourth Super Cup, which was enough for <strong>Real Madrid </strong>to equal <strong>Barcelona</strong>\'s five and <strong>AC Milan</strong>\'s five, came in Helsinki after an outstanding display of team management by the Italian coach.</p>\n<p>A few weeks before the game he announced that this final was for those who won the Champions League last season, and not for the new arrivals.</p>\n<p>It is a tournament that is a continuation of what we saw last season. And that\'s how the coach assessed it.</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\">The same XI as in Paris</h4>\n<p>The first changes were a reward for the two players with the most influence on last season\'s famous comebacks from the bench: <strong>Rodrygo Goes </strong>and <strong>Eduardo Camavinga</strong>.</p>\n<p>Only after <strong>Karim Benzema </strong>sealed the win for <strong>Real Madrid </strong>did <strong>Ancelotti </strong>remember the new players (<strong>Aurelien Tchouameni </strong>and <strong>Antonio Rudiger</strong>), and also a player who did not feature much last season, but who has helped since returning to the team after recovering from the injury that kept him out for months in <strong>Dani Ceballos</strong>.</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\">All the media</h4>\n<p>The game in Helsinki showed a lot. To start with, the players who were left out, most notably <strong>Alvaro Odriozola</strong>.</p>\n<p>It is clear that he does not have a place in the team and will have to leave.</p>\n<p>Then, <strong> Ancelotti </strong>gave way during the match to all the midfielders he has. The <strong>Toni Kroos</strong>, <strong>Luka Modric </strong>and <strong>Casemiro </strong>trident is his base and to overthrow them will take a lot of work.</p>\n<p>Even more so with the level, they showed against <strong>Eintracht Frankfurt</strong>.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1660221573914\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>After that, the coach moved the pieces to an area where <strong>Tchouameni</strong>, <strong>Camavinga, </strong>and <strong>Ceballos </strong>had a lot of work to do.</p>\n<p>Neither <strong>Eden Hazard </strong>nor <strong>Marco Asensio </strong>played a minute. They are going to have to work very hard to get themselves to the side.</p>\n</div>', 2, 'MIGUEL ÁNGEL LARA', '2022-08-11 13:41:11', 'Active', 1, 1),
(9, 'Ex-Real Madrid player-turned-fisherman Fabio Coentrao punished by Portuguese Federation in retirement', 'Fabio Coentrao was fined by the FPF', '<div class=\"ue-c-article__body\">\n<p><span class=\"capital-letter\">F</span>ormer <strong>Real Madrid </strong>full-back <strong>Fabio Coentrao </strong>has been handed a fine and a one-game ban by the Portuguese football federation (FPF) one year after his retirement.</p>\n<p>The FPF suspended and fined <strong>Coentrao </strong>850 euros for an incident that occurred at the end of the match between his last team, <strong>Rio Ave</strong>, and <strong>Boavista </strong>in April 2021.</p>\n<p>In a statement the FPF explained that \"between the date of the incident and the final decision, 486 days have passed, and eight days from the disciplinary hearing to the final decision issued by the Disciplinary Board.</p>\n<p>\"The fact that a particular sports person has ceased to play does not rule out the possibility of his responsibility for disciplinary offences committed during his playing career.\"</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\">Coentrao\'s surprising new life: Fisherman and boat fleet manager</h4>\n<p>The 34-year-old former footballer spent five seasons at <strong>Real Madrid</strong>, winning two LaLiga Santander titles (2012 and 2017), a Supercopa de Espana (2012), one Copa del Rey (2014), two Champions Leagues (2014 and 2017), a UEFA Super Cup (2014) and two FIFA Club World Cups (2014 and 2017).</p>\n<p>After retiring from football, <strong>Coentrao </strong>hung up his boots and fulfilled his dream of working as a fisherman at sea.</p>\n<p>\"It\'s a job like any other,\" <strong>Coentrao </strong>said.</p>\n<p>\"Not only that, the sea is beautiful and we need it.\"</p>\n<p><strong>Coentrao</strong>, who joined <strong>Real Madrid </strong>in 2011 from <strong>Benfica </strong>for 30 million euros, bought his first boat when he was at Los Blancos.</p>\n<p>\"Life in the sea is not a shame, as many people think,\" <strong>Coentrao </strong>told Empower Brands.</p>\n<p>\"My father had a boat, he used to fish and I always went with him as a child. My life was the sea and fishing.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1660221688463\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>\"Of course, I knew that football would one day end and that I should take a new direction in my life.</p>\n<p>\"And my happiness is this boat and this is the life I want to lead.\"</p>\n</div>', 0, 'ENRIQUE CORBELLA', '2022-08-11 13:50:56', 'Active', 2, 2),
(10, 'Real Madrid don\'t play finals, they win them: 17 wins from 19 finals since 2014', 'Los Blancos have joined Barcelona and AC Milan for UEFA Super Cup wins', '<div class=\"ue-c-article__body\">\n<p><span class=\"capital-letter\">W</span>hen <strong>Real Madrid </strong>play in a final, they win. <strong>Carlo Ancelotti </strong>led his side to their 19th final since 2014 on Wednesday night in Helsinki, this time beating <strong>Eintracht Frankfurt </strong>to the UEFA Super Cup.</p>\n<p>The win was their 17th triumph from those 19 finals, a hot streak of success that started when <strong>Gareth Bale </strong>destroyed <strong>Marc Bartra </strong>in the Copa del Rey at Mestalla, and one that only <strong>Atletico Madrid </strong>have been able to break (twice).</p>\n<p>The two finals lost came against Los Rojiblancos. There have been five Champions League wins, three Supercopa de Espana successes, four Club World Cups, and four UEFA Super Cups. There was also the aforementioned Copa del Rey that Bale won against <strong>Barcelona</strong>.</p>\n<p>Nobody in Europe comes close to matching <strong>Real Madrid</strong>\'s record when it comes to finals. Los Blancos don\'t play finals; they win them.</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\">Florentino has Bernabeu in his sights</h4>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1660221692069\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p><strong>Florentino Perez </strong>added his 30th trophy as <strong>Real Madrid </strong>president with the win in Helsinki, just three behind <strong>Santiago Bernabeu</strong>\'s total now.</p>\n<p>The last decade has seen him gunning for <strong>Bernabeu</strong>\'s tally, and he looks likely to end his reign as president as the record holder.</p>\n</div>', 0, 'MIGUEL ÁNGEL LARA', '2022-08-11 13:51:52', 'Active', 4, 1),
(11, 'Asensio\'s labyrinth at Real Madrid', 'No minutes, no renewal offer and no clear exit from Real Madrid', '<div class=\"ue-c-article__body\">\n<p class=\"ue-c-article--first-letter-highlighted\"><span class=\"capital-letter\">M</span>arco Asensio has been kept out of the spotlight as much as possible during the first two games of <strong><a href=\"https://www.marca.com/en/football/real-madrid.html\" target=\"_blank\" rel=\"noopener\">Real Madrid</a></strong>\'s season and, despite <strong>Carlo Ancelotti </strong>utilising all five substitutions and 19 players in all, he hasn\'t even played a single minute, let alone start either game.</p>\n<p>This season, after becoming accustomed to spending more time on the bench than in the starting XI in 2021/22, he may have his importance further diminished.</p>\n<p>With 2,110 minutes played, he ended the previous season in 15th place for <strong>Real Madrid</strong> players with most minutes. It was his record of 12 goals, which he had never before accomplished, that improved his self-confidence.</p>\n<p>He didn\'t warm up in Helsinki at the UEFA Super Cup, no longer relevant in the competition where he made his debut with a spectacular goal in 2016.</p>\n<p><strong>Ancelotti</strong>\'s words in Finland, in which he declared his intention to rotate more, might have provided solace, but the fact that he has fallen further down the pecking order dealt another blow.</p>\n<p>Five new players were brought in for <strong>Almeria</strong>, but <strong>Asensio </strong>was not one of them.</p>\n<p>\"If something changes in the heads of <strong>Asensio </strong>and <strong>Ceballos </strong>between now and August 31 then we will adapt,\" <strong>Ancelotti </strong>even said in the build-up to that game, a comment which has more meaning to it than first expected.</p>\n<p><strong>Ceballos </strong>has seen his role within the squad grow, while <strong>Asensio </strong>has fallen behind <strong>Eden Hazard</strong> in the rotation.</p>\n<h4 class=\"ue-c-article__subheadline\" style=\"text-align: center;\"><span style=\"font-family: \'book antiqua\', palatino, serif;\">Asensio: From a lack of offers to the World Cup with Spain</span></h4>\n<p><strong>Real Madrid</strong> haven\'t made a contract extension offer to either <strong>Asensio </strong>or <strong>Ceballos</strong>, whose contracts expire in 2023.</p>\n<p>The attacker\'s issue is that he expected to get more lucrative offers - both in terms of the money and the sporting project - than those that have been made to him through <strong>Jorge Mendes</strong>, his new agent.</p>\n<p>Additionally, there is the issue of the World Cup in Qatar in the background. It has always been a top priority for <strong>Asensio</strong>, but that importance has increased since <strong>Luis Enrique</strong> called him up in June.</p>\n<p>But in this situation, his prospects of making the team are dwindling.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1660555617882\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p><strong>Ancelotti </strong>is not a manager with set principles and, if he keeps working, <strong>Asensio </strong>might get some playing time.</p>\n<p>\"He is important as long as he is a <strong>Real Madrid</strong> player,\" <strong><a href=\"https://www.marca.com/en/football/real-madrid/2022/08/15/62f9ee7822601df2128b458d.html\" target=\"_blank\" rel=\"noopener\">Ancelotti stated in Almeria</a></strong>. However, <strong>Asensio</strong>\'s future does look bleak.</p>\n</div>', 4, 'MARIO CORTEGANA', '2022-08-15 10:29:27', 'Active', 1, 2),
(12, 'Ancelotti: The Real Madrid shirt weighs heavy, it was emotionally difficult for the youngsters', 'The coach reflected on the 2-1 win', '<div class=\"ue-c-article__body\">\n<p class=\"ue-c-article--first-letter-highlighted\"><span class=\"capital-letter\">R</span>eal Madrid managed to leave the south of Spain with <strong><a href=\"https://www.marca.com/en/football/laliga/almeria-r-madrid-directo/2022/08/14/01_0101_20220814_1564_186.html\" target=\"_blank\" rel=\"noopener\">a 2-1 win over Almeria on Sunday night</a></strong>, but it was a difficult match and they went in trailing 1-0 at half time.</p>\n<p>At that point, <strong><a href=\"https://www.marca.com/en/football/carlo-ancelotti.html\" target=\"_blank\" rel=\"noopener\">Carlo Ancelotti</a></strong> substituted off <strong>Eduardo Camavinga</strong> for <strong>Luka Modric</strong>, while new signing<strong> Aurelien Tchouameni </strong>didn\'t last much longer.</p>\n<p>Asked after the game if the <strong>Real Madrid</strong> shirt weighed heavy on the young players who took part, the Italian partially agreed.</p>\n<p>\"The youngsters deserved to play because of what they\'re doing in training,\" the coach said.</p>\n<p>\"But, maybe this game weighed on them a little in an emotional sense.</p>\n<p>\"They didn\'t show the quality they\'ve been showing in training, but that\'s normal since they\'re young and it\'s tough to wear this shirt.</p>\n<p>\"I didn\'t take <strong>Camavinga </strong>off because of anything he did wrong, just that he was on a yellow.\"</p>\n<p>The coach went on to reflect on the game as a whole.</p>\n<p>\"We started the match poorly, as they found space in behind,\" he said.</p>\n<p>\"That made the game difficult, as they were very good at closing off space.</p>\n<p>\"We had many shots, but struggled to score.</p>\n<p>\"In the second half, they were more tired and we had more control and chances.</p>\n<p>\"<strong>Lucas Vazquez</strong> did well [to equalise]. He is always alert, always showing the right intensity and the right attitude.\"</p>\n<h3 class=\"ue-c-article__subheadline\"><span style=\"font-family: \'book antiqua\', palatino, serif;\">Ancelotti provides an update on Asensio\'s future</span></h3>\n<p>During the post-match press conference at the Power Horse Stadium, the coach was asked about <strong>Marco Asensio</strong>, who didn\'t even warm up.</p>\n<p>\"For as long as he is a <strong>Real Madrid</strong> player, he is a <strong>Real Madrid</strong> player,\" <strong>Ancelotti </strong>said.</p>\n<div class=\"midwidget-taboola\" style=\"overflow: hidden;\">\n<div id=\"taboola-mid-article-mcaen-oc-1660556059849\" class=\"taboola-mid-article-widget\"></div>\n</div>\n<p>\"We need to remember how good he was last year.</p>\n<p>\"Anything can happen before August 31, but for now he is an important <strong>Real Madrid </strong>player.\"</p>\n</div>', 0, 'JUAN IGNACIO GARCÍA-OCHOA', '2022-08-15 10:35:55', 'Active', 1, 1);

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
(1, 'Ngkebi', 'Ikeaba Ngozichukwuka I', 'kebidegozi@gmail.com', '359328345545daae46ed061ebe16f6b5', '27I68J8BJBz0VlusrApJ', '2022-08-16 07:49:09', '2022-06-23', '2022-06-23 14:37:54'),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
