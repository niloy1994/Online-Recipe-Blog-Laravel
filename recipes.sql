-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2016 at 07:19 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`) VALUES
(6, 'sunny', 'sunny@gmail.com', '1234', 'active'),
(7, 'niloy', 'niloy@gmail.com', '1234', 'active'),
(8, 'nil', 'niloy13240662@gmail.com', '1234', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
`id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploaded_by` int(100) NOT NULL,
  `upload_time` datetime NOT NULL,
  `status` enum('pending','published','rejected') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `uploaded_by`, `upload_time`, `status`) VALUES
(1, 'hkhjhkjhk', 'dgfdsgfg', 1, '2016-09-20 05:02:10', 'pending'),
(2, 'tystsy', 'rtsyreytrsy', 1, '2016-09-20 05:02:46', 'published'),
(3, 'ytiyiiyt', 'yiytffdgftdg', 1, '2016-09-20 05:03:12', 'published'),
(4, 'trtutru', 'ytdutyutu', 1, '2016-09-20 05:03:29', 'published'),
(5, 'kljlj', 'jljhghxfdxzf', 1, '2016-09-20 05:03:43', 'published'),
(6, 'jgxhfdxxzdf', 'xddrteynbvgctg dcrff', 1, '2016-09-20 05:04:00', 'pending'),
(7, 'tryhrt5retgdsf', 'xdtgrdbvchb', 1, '2016-09-20 05:04:15', 'pending'),
(8, 'uigyjhjv', 'vgjbyhgfty', 1, '2016-09-20 05:04:28', 'pending'),
(9, 'ghxfxcbvcb', 'fdtgdbgcbvcb', 1, '2016-09-20 10:43:32', 'pending'),
(10, 'jhjkhkljlkjlk', 'jkhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhbk', 1, '2016-09-21 07:05:36', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `blog_image`
--

CREATE TABLE IF NOT EXISTS `blog_image` (
`id` int(100) NOT NULL,
  `blog_id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_image`
--

INSERT INTO `blog_image` (`id`, `blog_id`, `image`) VALUES
(1, 1, 'hkhjhkjhk_65.jpg'),
(2, 2, 'tystsy_69.jpg'),
(3, 3, 'ytiyiiyt_42.jpg'),
(4, 4, 'trtutru_27.jpg'),
(5, 5, 'kljlj_75.jpg'),
(6, 6, 'jgxhfdxxzdf_71.jpg'),
(7, 7, 'tryhrt5retgdsf_10.jpg'),
(8, 8, 'uigyjhjv_67.jpg'),
(9, 9, 'ghxfxcbvcb_47.jpg'),
(10, 10, 'jhjkhkljlkjlk_76.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `icon`, `image`) VALUES
(6, 'APETIZERS', 'This is a food of apetizers category', 'i-appetizers', 'APETIZERS_4.jpg'),
(7, 'COCKTAILS', 'This is a food of cocktail category', 'i-cocktails', 'COCKTAILS_6.jpg'),
(8, 'DESERTS', 'This is a food of desert category', 'i-deserts', 'DESERTS_98.jpg'),
(9, 'EGGS', 'This is a food of eggs category ', 'i-eggs', 'EGGS_43.jpg'),
(10, 'EQUIPMENTS', 'This is a food of equipments category', 'i-equipment', 'EQUIPMENTS_20.jpg'),
(11, 'EVENTS', 'This is a food of events category', 'i-events', 'EVENTS_94.jpg'),
(12, 'FISH', 'This is a food of fish category', 'i-fish', 'FISH_30.jpg'),
(13, 'FITNESS', 'This is a food of fitness category', 'i-fitness', 'FITNESS_30.jpg'),
(14, 'HEALTHY', 'This is a food of healthy category', 'i-healthy', 'HEALTHY_67.jpg'),
(15, 'ASIAN', 'This is a food of asian category', 'i-asian', 'ASIAN_18.jpg'),
(16, 'MEXICAN', 'This is a food of mexican category', 'i-mexican', 'MEXICAN_29.jpg'),
(17, 'PIZZA', 'This is a food of pizza category', 'i-pizza', 'PIZZA_24.jpg'),
(18, 'KIDS', 'This is a food of kids category', 'i-kids', 'KIDS_76.jpg'),
(19, 'MEAT', 'This is a food of meat category', 'i-meat', 'MEAT_89.jpg'),
(20, 'SNACKS', 'This is a food of snacks category', 'i-snacks', 'SNACKS_47.jpg'),
(21, 'SALADS', 'This is a food of salad category', 'i-salads', 'SALADS_53.jpg'),
(22, 'STORAGE', 'This is a food of storage category', 'i-storage', 'STORAGE_50.jpg'),
(23, 'VEGETARIAN', 'This is a food of vegetarian category', 'i-vegetarian', 'VEGETARIAN_18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`) VALUES
(2, 'Sydney', 2),
(3, 'Sylhet', 1),
(4, 'Lahore', 3),
(5, 'California', 6);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `recipe_id`, `comment`, `created_at`) VALUES
(1, 1, 41, 'frrfaefr', '2016-08-05 08:53:04'),
(2, 1, 41, 'hyghuiyhuihj', '2016-08-29 05:15:37'),
(3, 1, 41, 'dfsdf', '2016-08-29 05:24:11'),
(4, 1, 41, 'sdsff', '2016-08-29 05:30:32'),
(5, 1, 41, 'this is my comment', '2016-08-29 05:31:35'),
(6, 1, 41, 'users comment', '2016-08-29 05:58:55'),
(7, 1, 41, 'trytry', '2016-08-29 06:00:04'),
(8, 5, 41, 'drhdfhfdshdf', '2016-08-29 07:15:40'),
(9, 6, 41, 'vvvvvvvvv', '2016-08-29 07:16:58'),
(10, 6, 40, 'iuouuyouy', '2016-08-29 07:30:57'),
(11, 6, 41, 'yiyti', '2016-08-29 07:49:16'),
(12, 1, 41, 'kjhkhkhkj', '2016-08-29 11:18:51'),
(13, 1, 41, 'kjhkhkhkjlkjul', '2016-08-29 11:19:07'),
(14, 1, 41, 'kjhkhkhkjlkjulojklk', '2016-08-29 11:30:32'),
(15, 1, 40, 'trtrytrytr', '2016-08-29 11:57:48'),
(16, 1, 40, 'trtrytrytrkjhnjkln,n,', '2016-08-29 12:06:01'),
(17, 1, 40, 'trtrytrytrkjhnjkln,n,', '2016-08-29 12:06:01'),
(18, 1, 40, 'oijoijlkjlj', '2016-08-29 12:06:30'),
(19, 1, 40, 'oijoijlkjljjyhfgjf', '2016-08-29 12:08:20'),
(20, 1, 39, 'ihikjojklj', '2016-08-29 12:33:46'),
(21, 1, 39, 'ihikjojkljjgfgjgfh', '2016-08-29 12:44:06'),
(22, 1, 39, 'ihikjojkljjgfgjgfhfjgfjdfh', '2016-08-29 12:44:26'),
(23, 1, 39, 'ihikjojkljjgfgjgfhfjgfjdfhjkhgkj', '2016-08-29 12:44:53'),
(24, 1, 41, 'asfasf', '2016-08-31 06:48:51'),
(25, 5, 41, 'kjhkjhjk', '2016-08-31 07:05:33'),
(26, 5, 41, 'uirutyu', '2016-08-31 07:23:17'),
(27, 1, 37, '6456546', '2016-09-01 08:35:14'),
(28, 1, 37, 'jhghjgfj', '2016-09-01 08:35:21'),
(29, 1, 37, 'jhghjgfjrtytry', '2016-09-01 08:38:25'),
(30, 1, 37, 'jhghjgfjrtytry', '2016-09-01 08:38:27'),
(31, 1, 37, 'jhghjgfjrtytry', '2016-09-01 08:40:08'),
(32, 1, 37, 'fdghfg', '2016-09-01 08:40:19'),
(33, 1, 37, 'fdghfg', '2016-09-01 08:40:22'),
(34, 1, 37, 'fdghfg', '2016-09-01 08:40:34'),
(35, 1, 37, 'wer2rwerwe', '2016-09-01 08:42:10'),
(36, 1, 37, 'rtewrtewtr', '2016-09-01 08:42:49'),
(37, 1, 37, 'retretrewtetrt', '2016-09-01 08:44:06'),
(38, 1, 37, 'tryhtydy', '2016-09-01 08:44:53'),
(39, 1, 37, 'uyiuyiyui', '2016-09-01 08:45:06'),
(40, 5, 36, 'tyrewytretyer', '2016-09-01 08:46:03'),
(41, 1, 38, 'rtytrytry', '2016-09-06 06:39:13'),
(42, 1, 17, 'u6y77rtuy7tr', '2016-09-06 06:40:51'),
(43, 1, 41, '3t43t43t', '2016-09-06 06:51:04'),
(44, 1, 41, 'y5tret', '2016-09-06 06:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Bangladesh'),
(2, 'Australia'),
(3, 'Pakistan'),
(6, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE IF NOT EXISTS `ingredients` (
`id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `recipe_id`, `name`, `amount`, `unit`) VALUES
(4, 4, 'dsfdsfds', '12', 'kg'),
(5, 5, 'cxzvcxv', '12', 'kg'),
(6, 5, 'dsfgv', '11', 'mg'),
(7, 6, 'retgdf', '12', 'mg'),
(8, 7, 'potato', '12', 'gm'),
(9, 8, 'asd', '11', 'gm'),
(10, 9, 'dsds', '12', 'gm'),
(11, 10, 'asd', '12', 'gm'),
(12, 11, 'dfsff', '11', 'gm'),
(13, 12, 'gfdsgd', '2', 'gm'),
(14, 13, 'asdfsf', '1', 'gm'),
(16, 15, 'ghgfh', '6', 'kg'),
(17, 16, 'fsdaf', '11', 'kg'),
(18, 17, 'sdfsd', '34', '21342'),
(57, 18, '', '', ''),
(58, 19, 'fsf', '1', 'mg'),
(116, 14, 'weqwerwr', '1', 'kg'),
(119, 20, 'ds', '5', 'g'),
(156, 3, 'sdasda', '12', 'gm'),
(157, 2, 'potato', '12', 'gm'),
(158, 2, 'brocoli', '10', 'gm'),
(159, 21, 'bread', '200', 'gm'),
(160, 22, 'Bread', '400', 'gm'),
(161, 23, 'potato', '12', 'gm'),
(162, 24, 'potato', '12', 'gm'),
(163, 25, 'potato', '12', 'gm'),
(164, 26, 'brocoli', '12', 'gm'),
(165, 27, 'potato', '12', 'gm'),
(166, 28, 'potato', '12', 'gm'),
(167, 29, 'potato', '12', 'gm'),
(168, 30, 'potato', '12', 'gm'),
(169, 31, 'potato', '12', 'gm'),
(170, 32, 'potato', '12', 'gm'),
(171, 33, 'potato', '12', 'gm'),
(172, 34, 'potato', '12', 'gm'),
(173, 35, 'potato', '12', 'gm'),
(174, 36, 'edesad', '1', 'gm'),
(175, 37, 'edesad', '1', 'gm'),
(176, 38, 'potato', '12', 'gm'),
(177, 39, 'fdsds', '1', 'gm'),
(178, 39, 'eww', '2', 'gm'),
(179, 40, 'kh', '12', 'gm'),
(180, 41, 'potato', '12', 'gm');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
`id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `recipe_id`, `created_at`) VALUES
(1, 6, 41, '2016-09-03 10:12:16'),
(2, 6, 41, '2016-09-03 10:15:49'),
(3, 6, 2, '2016-09-03 11:14:16'),
(4, 1, 15, '2016-09-03 11:15:08'),
(5, 1, 2, '2016-09-03 11:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE IF NOT EXISTS `nutrition` (
`id` int(11) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`id`, `recipe_id`, `name`, `amount`, `unit`) VALUES
(1, 23, 'calories', '10', 'gm'),
(2, 25, 'gfdgd', '12', 'gm'),
(3, 26, 'fsffds', '12', 'gm'),
(4, 26, 'rdfgfdgv', '34', 'gm'),
(5, 27, 'rerw', '1', 'gm'),
(6, 28, 'rerw', '1', 'gm'),
(7, 29, 'rerw', '1', 'gm'),
(8, 30, 'rerw', '1', 'gm'),
(9, 31, 'rerw', '1', 'gm'),
(10, 32, 'rerw', '1', 'gm'),
(11, 33, 'rerw', '1', 'gm'),
(12, 34, 'rerw', '1', 'gm'),
(13, 35, 'rerw', '1', 'gm'),
(14, 36, 'fgteftew', '2', 'gm'),
(15, 37, 'fgteftew', '2', 'gm'),
(16, 38, 'fsffds', '12', 'gm'),
(17, 39, 'ewerwq', '1', 'gm'),
(18, 39, 'wrer', '11', 'gm'),
(19, 40, 'fgteftew', '2', 'gm'),
(20, 41, 'fsffds', '12', 'gm');

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE IF NOT EXISTS `procedures` (
`id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `process` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `recipe_id`, `process`) VALUES
(3, 9, 'fcgvcnvnb'),
(4, 9, 'nvbnnhvbn'),
(5, 9, 'nvbnbvnvn'),
(6, 10, 'sdgdsgdsg'),
(7, 10, 'gsgdsfsgdg'),
(8, 10, 'sdgdsgdsg'),
(9, 10, 'sdgsdgds'),
(10, 11, 'dsfdsafsdf'),
(11, 12, 'gdfsgdgdsag'),
(12, 13, 'fdsfdsfds'),
(14, 15, 'ftgyhgfh'),
(15, 16, 'wseqeq'),
(16, 17, 'dasda'),
(20, 18, ''),
(21, 19, 'edfdsf'),
(134, 14, 'dsfdsfdw'),
(137, 20, 'dfvgf'),
(154, 2, 'ghdfsghdfgfdg'),
(155, 2, 'ddaddadsad'),
(156, 21, 'eddsfcdsfcds'),
(157, 22, 'dfgfdgfdgdfg'),
(158, 23, 'tryhrsdhrd'),
(159, 24, 'tfgdfg'),
(160, 25, 'tfgdfg'),
(161, 26, 'ewfrsafsdf'),
(162, 27, 'rfdsds'),
(163, 28, 'rfdsds'),
(164, 29, 'rfdsds'),
(165, 30, 'rfdsds'),
(166, 31, 'rfdsds'),
(167, 32, 'rfdsds'),
(168, 33, 'rfdsds'),
(169, 34, 'rfdsds'),
(170, 35, 'rfdsds'),
(171, 36, 'dsgvdsgfvdsg'),
(172, 37, 'dsgvdsgfvdsg'),
(173, 38, 'ffdsfsda'),
(174, 39, 'ewrewrwrwq'),
(175, 39, 'ewrwrewr'),
(176, 40, 'ouijiouji[okpok'),
(177, 41, 'tyret');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `country_id` int(100) NOT NULL,
  `type` enum('regular','special') NOT NULL,
  `description` text NOT NULL,
  `preparation_time` int(11) NOT NULL,
  `cooking_time` int(11) NOT NULL,
  `difficulty` enum('easy','medium','hard') NOT NULL,
  `serves` int(100) NOT NULL,
  `video` text NOT NULL,
  `upload_time` datetime(6) NOT NULL,
  `uploaded_by` int(100) NOT NULL,
  `recipe_of_the_day` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `category_id`, `country_id`, `type`, `description`, `preparation_time`, `cooking_time`, `difficulty`, `serves`, `video`, `upload_time`, `uploaded_by`, `recipe_of_the_day`) VALUES
(2, 'Recipe 1', 6, 1, 'special', 'gfjhujrdujhdfhfdjdshfdh', 12, 12, 'easy', 1, '', '2016-07-04 05:12:23.116000', 0, 1),
(3, 'ewtretert', 6, 1, 'regular', 'tfhrdjfgkghll', 12, 12, 'hard', 2, '', '2016-07-03 06:09:00.000000', 0, 0),
(4, 'vbcvnbvcbcv', 7, 0, 'regular', 'fjgdhjfgjhfgj', 12, 1212, 'hard', 7, '', '2016-07-10 06:14:00.000000', 0, 0),
(5, 'afsdfadrfas', 9, 0, 'regular', 'fdhgffffffjhngfj', 12, 13, 'hard', 3, '', '2016-07-18 00:00:00.000000', 0, 0),
(6, 'dsfgdfhgfh', 7, 0, 'special', 'fdshhgfshdfhfgh', 10, 10, 'hard', 2, '', '2016-07-17 04:13:00.000000', 0, 0),
(7, 'nil', 6, 0, 'regular', 'dsggdsgdsg', 11, 11, 'hard', 2, '', '2016-07-10 03:12:00.000000', 0, 0),
(8, 'pen', 7, 0, 'regular', 'jjhghkjhkjlkjkl', 10, 10, 'medium', 4, '', '2016-07-10 06:12:00.000000', 0, 0),
(10, 'category12', 8, 2, 'special', 'fgfhfh', 1, 1, 'hard', 1, '', '2016-07-12 04:14:00.000000', 0, 0),
(12, 'category8', 10, 1, 'regular', 'fdhfghfdh', 2, 2, 'easy', 2, '', '0000-00-00 00:00:00.000000', 0, 0),
(13, 'fghfdh', 11, 1, 'regular', 'dfhfdhdfsh', 1, 1, 'easy', 1, '', '0000-00-00 00:00:00.000000', 0, 0),
(14, 'dsdfgdsfg', 12, 1, 'regular', '<p>dsfgdsf</p>', 12, 10, 'easy', 12, '', '0000-00-00 00:00:00.000000', 0, 0),
(15, 'jgf', 13, 1, 'regular', 'ghgfh', 0, 0, 'easy', 0, '', '0000-00-00 00:00:00.000000', 0, 0),
(16, 'fsadsad', 12, 1, 'regular', 'sadfaf', 12, 12, 'easy', 2, 'fddsfdf', '0000-00-00 00:00:00.000000', 0, 0),
(17, 'tiny', 14, 1, 'regular', '<p>tinymce</p>', 13, 12, 'easy', 12, 'asdd', '0000-00-00 00:00:00.000000', 0, 0),
(18, 'pasta', 7, 1, 'regular', 'eqwwe', 0, 0, 'easy', 0, '', '2016-07-26 04:12:00.000000', 0, 0),
(19, 'pasta', 8, 1, 'regular', '<p>&nbsp;fdsafdsaf</p>', 12, 12, 'easy', 2, 'fdsf', '2016-07-18 05:11:00.000000', 0, 0),
(20, 'burger', 9, 1, 'regular', '<p>sadsa</p>', 1, 1, 'easy', 0, 'dsfds', '2016-07-20 03:17:00.000000', 0, 0),
(21, 'pizza1', 17, 1, 'regular', '<p>fdsdvgcxzvgf</p>', 12, 12, 'easy', 2, 'dsfsdaf', '0000-00-00 00:00:00.000000', 0, 0),
(22, 'pizza2', 6, 1, 'regular', '<p>fdzgdsgfdgvfd</p>', 10, 10, 'easy', 1, 'hnjfgxhjdfyh', '2016-07-12 05:15:00.000000', 0, 0),
(23, 'pizza3', 6, 1, 'regular', '<p>dryhretuyrtjuyuh</p>', 10, 10, 'easy', 1, 'tfghfdhgdfg', '2016-07-12 04:06:00.000000', 0, 0),
(24, 'sfgvsdf', 6, 1, 'regular', '<p>fdsfrewrfew</p>', 12, 1212, 'easy', 1, 'hhytgfr', '2016-07-03 09:15:00.000000', 0, 0),
(25, 'sfgvsdf', 6, 1, 'regular', '<p>fdsfrewrfew</p>', 12, 1212, 'easy', 1, 'hhytgfr', '2016-06-06 06:15:00.000000', 0, 0),
(26, 'wafresadf', 6, 1, 'regular', '<p>dsafdsafa</p>', 121, 22, 'easy', 2, 'dvxzvxczv', '2016-07-04 04:13:00.000000', 0, 0),
(27, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-11 05:16:00.000000', 0, 0),
(28, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-04 04:17:00.000000', 0, 0),
(29, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-04 13:13:00.000000', 0, 0),
(30, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-05 06:21:00.000000', 0, 0),
(31, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-12 06:21:00.000000', 0, 0),
(32, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-05 06:08:00.000000', 0, 0),
(33, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-07 04:18:00.000000', 0, 0),
(34, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-05 05:16:00.000000', 0, 0),
(35, 'rgtestfges', 6, 1, 'regular', '<p>ffsdfsd</p>', 1, 2, 'easy', 1, 'fwefre', '2016-07-29 10:28:02.000000', 0, 0),
(36, 'sfsf', 8, 0, '', 'sacfSAFaf', 12, 12, 'medium', 3, '', '2016-08-04 06:16:43.000000', 0, 0),
(37, 'sfsf', 8, 0, '', 'sacfSAFaf', 12, 12, 'medium', 3, '', '2016-08-04 06:17:43.000000', 0, 0),
(38, 'regtr', 6, 0, '', 'wefrfe', 10, 12, 'easy', 4, '', '2016-08-04 06:21:48.000000', 0, 0),
(39, 'lllllll', 12, 0, '', 'asdsadsad', 1, 1, 'easy', 3, '', '2016-08-04 10:54:45.000000', 0, 0),
(40, 'jhgkjhg', 6, 0, '', 'oiujioytuitgffy', 12, 5, 'easy', 4, '', '2016-08-04 11:45:13.000000', 0, 0),
(41, '45', 6, 0, '', 'tyhtyg', 12, 12, 'easy', 4, '', '2016-08-04 11:49:30.000000', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_image`
--

CREATE TABLE IF NOT EXISTS `recipe_image` (
`id` int(100) NOT NULL,
  `recipe_id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_image`
--

INSERT INTO `recipe_image` (`id`, `recipe_id`, `image`) VALUES
(1, 2, 'brocoli_2.jpg'),
(2, 15, 'ghgfh_54.jpg'),
(3, 16, 'ghgfh_54.jpg'),
(4, 17, 'ghgfh_54.jpg'),
(5, 19, 'ghgfh_54.jpg'),
(6, 20, 'ghgfh_54.jpg'),
(7, 21, 'bread_3.jpg'),
(8, 22, 'Bread_67.jpg'),
(9, 23, 'calories_24.jpg'),
(10, 25, 'gfdgd_11.jpg'),
(11, 26, 'rdfgfdgv_6.jpg'),
(12, 27, 'rerw_69.jpg'),
(13, 28, 'rerw_83.jpg'),
(14, 29, 'rerw_76.jpg'),
(15, 30, 'rerw_62.jpg'),
(16, 31, 'rerw_30.jpg'),
(17, 32, 'rerw_72.jpg'),
(18, 33, 'rerw_46.jpg'),
(19, 34, 'rerw_48.jpg'),
(20, 35, 'rerw_86.jpg'),
(21, 36, 'fgteftew_7.jpg'),
(22, 37, 'fgteftew_59.jpg'),
(23, 38, 'fsffds_58.jpg'),
(24, 39, 'wrer_3.jpg'),
(25, 40, 'fgteftew_18.jpg'),
(26, 41, 'fsffds_70.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_of_the_day` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_of_the_day`) VALUES
(1, 'user', 'user@gmail.com', '1234', 0),
(5, 'nnn', 'n@gmail.com', '1234', 0),
(6, 'vvv', 'v@gmail.com', '12345', 0),
(7, 'dsfdsf', 'r12@gmail.com', '12345', 0),
(8, 'niloy', 'nilll@gmail.com', '1234', 1),
(9, 'bvfbcxb', 'ss@gmail.com', '1234', 0),
(10, 'gfdgfdsg', 'aa@gmail.com', '1234', 0),
(11, 'sdfdsf', 'dffd@gmail.com', '1234', 0),
(12, 'hjfgjh', 'cvx@gmail.com', '1234', 0),
(13, 'dfdsafds', 'sdfds@gmail.com', '1234', 0),
(14, 'rewreter', 'saddjj@gmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_image`
--
ALTER TABLE `blog_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_image`
--
ALTER TABLE `recipe_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_image`
--
ALTER TABLE `blog_image`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `recipe_image`
--
ALTER TABLE `recipe_image`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
