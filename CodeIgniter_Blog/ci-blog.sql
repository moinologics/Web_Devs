-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2019 at 04:32 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'mohin', 'abc@gmail.com', '1497b58230cfb97e5fa8412d52fde1bd'),
(2, 'mohin', 'xyz@gmail.com', '1497b58230cfb97e5fa8412d52fde1bd');

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` int(11) NOT NULL,
  `artical_id` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `artical_id`, `title`, `likes`, `category`, `images`, `content`, `date`, `admin`) VALUES
(1, '45as5', 'Save Water Today', 4, 'Environment', '45as5_1.jpg,45as5_2.jpg', 'Earth is the only known planet in this universe where life is possible only because of the availability of water and oxygen. Water is most important necessity of life for all the living beings on the earth. Without water no one can exist even for a day. We also know that there is very less percentage of clean water means drinking water available on the earth. So, we should not waste clean water and save it for future generations.\r\nWe should change our bad habits into positive ones and spread awareness among people about the importance of clean water. We should promote the less use and saving of clean water to maintain the continuity of life on the earth.', '05/12/2017', 'abc@gmail.com'),
(2, 'a5as5', 'Aliens Might Shoot Lasers at Black Holes to Travel the Galaxy', 2, 'Science', 'a5as5_1.jpg', 'An astronomer at Columbia University has a new guess about how hypothetical alien civilizations might be invisibly navigating our galaxy: Firing lasers at binary black holes (twin black holes that orbit each other).\r\n\r\nThe idea is a futuristic upgrade of a technique NASA has used for decades.\r\n\r\nRight now, spacecraft already navigate our solar system using gravity wells as slingshots. The spacecraft itself enters orbit around a planet, flings itself as close as possible to a planet or moon to pick up speed, and then uses that added energy to travel even faster toward its next destination', '08/12/2017', 'abc@gmail.com'),
(3, 'e5as5', 'The culture of India', 5, 'Other', 'e5as5_1.jpg', 'The culture of India refers collectively to the thousands of distinct and unique cultures of all religions and communities present in India. India\'s languages, religions, dance, music, architecture, food, and customs differ from place to place within the country. Indian culture, often labeled as an amalgamation of several cultures, spans across the Indian subcontinent and has been influenced by a history that is several millennia old.[1][2] Many elements of India\'s diverse cultures, such as Indian religions, philosophy, cuisine, languages, martial arts, dance, music and movies have a profound impact across the Indosphere, Greater India and the world.', '45/12/2017', 'xyz@gmail.com'),
(4, 'q5ws5', 'How to choose a PHP framework', 3, 'Computer Science', 'q5ws5_1.jpg', 'PHP has become one of the workhorses of the internet due to its power and flexibility. In this article, Dr. Michael Garbade introduces us to and reviews three PHP frameworks: Symfony, Laravel, and Yii. Frameworks are an almost essential tool for those sites that by their nature require frequent updates and interaction with databases.\r\nAll three use templating systems to allow for the creation of PHP code for customized layouts and structures for various web pages, while minimizing the setup work. Dr. Garbade points out the advantages of each framework\'s approach in terms of flexibility, speed, database utilization, and extensibility. Although he couldn\'t recommend an overall winner in all of these categories, each framework has its strong points, depending on your needs.', '05/01/2018', 'xyz@gmail.com'),
(14, '9cd96', 'dfxgchgc', 0, '', '9cd96_1.jpg', 'fghnvjhvb', '28-Mar-2019', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `artical_id` varchar(20) NOT NULL,
  `commenter_name` varchar(100) NOT NULL,
  `commenter_email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `replies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `artical_id`, `commenter_name`, `commenter_email`, `comment`, `date_time`, `replies`) VALUES
(11, '45as5', 'rahul', 'rahul@gmail.com', 'this comment is posted by rahul', '22:13 23-Mar-2019', '[{\"name\":\"rahim\",\"email\":\"rahim@gmail.com\",\"date_time\":\"22:14 23-Mar-2019\",\"reply\":\"this reply is given by rahim\"},{\"name\":\"kadir\",\"email\":\"kadir@gmail.com\",\"date_time\":\"22:56 23-Mar-2019\",\"reply\":\"this reply is given by kadir\"}]'),
(12, '45as5', 'kamil', 'kamil@gmail.com', 'this comment posted by kamil', '22:44 23-Mar-2019', '[{\"name\":\"haroon\",\"email\":\"haroon@gmail.com\",\"date_time\":\"22:45 23-Mar-2019\",\"reply\":\"this reply is given by \"},{\"name\":\"salim\",\"email\":\"salim@gmail.com\",\"date_time\":\"22:48 23-Mar-2019\",\"reply\":\"this reply is given by salim\"},{\"name\":\"imran\",\"email\":\"imran@gmail.com\",\"date_time\":\"22:50 23-Mar-2019\",\"reply\":\"this reply is given by imran\"}]'),
(13, 'e5as5', 'aashim', 'aashim@gmail.com', 'this comment is posted by aashim\r\n', '23:06 24-Mar-2019', '[{\"name\":\"imran\",\"email\":\"imran@gmail.com\",\"date_time\":\"23:07 24-Mar-2019\",\"reply\":\"this reply given by imran\\r\\n\"}]'),
(14, 'e5as5', 'arman', 'arman@gmail.com', 'this comment is posted by arman', '23:08 24-Mar-2019', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `categories`) VALUES
(1, 'Environment'),
(2, 'Science'),
(3, 'Other'),
(4, 'Computer Science'),
(7, 'entertainment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
