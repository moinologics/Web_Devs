-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paginator`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Abhay\r\n', 'Abhay\r\n90@gmail.com', '9239897516\r\n'),
(2, 'Adesh\r\n', 'Adesh\r\n90@gmail.com', '9736741211\r\n'),
(3, 'Adhik\r\n', 'Adhik\r\n96@gmail.com', '9513346368\r\n'),
(4, 'Aditya\r\n', 'Aditya\r\n91@gmail.com', '9058366641\r\n'),
(5, 'Agni\r\n', 'Agni\r\n92@gmail.com', '9057425929\r\n'),
(6, 'Ajay\r\n', 'Ajay\r\n94@gmail.com', '9303263617\r\n'),
(7, 'Ajeet \r\n', 'Ajeet \r\n90@gmail.com', '9123943254\r\n'),
(8, 'Ajit \r\n', 'Ajit \r\n96@gmail.com', '9433890644\r\n'),
(9, 'Ajith \r\n', 'Ajith \r\n92@gmail.com', '9559598966\r\n'),
(10, 'Akash \r\n', 'Akash \r\n96@gmail.com', '9544856753\r\n'),
(11, 'Akhil \r\n', 'Akhil \r\n99@gmail.com', '9757381757\r\n'),
(12, 'Amar \r\n', 'Amar \r\n93@gmail.com', '9267807320\r\n'),
(13, 'Amit \r\n', 'Amit \r\n91@gmail.com', '9097999004\r\n'),
(14, 'Amrit \r\n', 'Amrit \r\n95@gmail.com', '9926388104\r\n'),
(15, 'Anand \r\n', 'Anand \r\n97@gmail.com', '9294497398\r\n'),
(16, 'Ananden\r\n', 'Ananden\r\n94@gmail.com', '9871810766\r\n'),
(17, 'Anandha \r\n', 'Anandha \r\n93@gmail.com', '9223649722\r\n'),
(18, 'Anant \r\n', 'Anant \r\n93@gmail.com', '9182150740\r\n'),
(19, 'Ananta\r\n', 'Ananta\r\n94@gmail.com', '9655810471\r\n'),
(20, 'Ananth \r\n', 'Ananth \r\n90@gmail.com', '9150500686\r\n'),
(21, 'Anil \r\n', 'Anil \r\n98@gmail.com', '9236647249\r\n'),
(22, 'Aniruddha \r\n', 'Aniruddha \r\n95@gmail.com', '9060254962\r\n'),
(23, 'Anish \r\n', 'Anish \r\n94@gmail.com', '9605038939\r\n'),
(24, 'Ankur \r\n', 'Ankur \r\n95@gmail.com', '9936863237\r\n'),
(25, 'Anuj \r\n', 'Anuj \r\n90@gmail.com', '9840166245\r\n'),
(26, 'Anupam \r\n', 'Anupam \r\n94@gmail.com', '9149080524\r\n'),
(27, 'Aravind \r\n', 'Aravind \r\n91@gmail.com', '9994862238\r\n'),
(28, 'Aravinda \r\n', 'Aravinda \r\n97@gmail.com', '9485307594\r\n'),
(29, 'Arjun \r\n', 'Arjun \r\n97@gmail.com', '9954474613\r\n'),
(30, 'Arjuna \r\n', 'Arjuna \r\n99@gmail.com', '9115474064\r\n'),
(31, 'Arun \r\n', 'Arun \r\n93@gmail.com', '9019103182\r\n'),
(32, 'Aruna \r\n', 'Aruna \r\n91@gmail.com', '9481414114\r\n'),
(33, 'Aseem \r\n', 'Aseem \r\n91@gmail.com', '9356980350\r\n'),
(34, 'Ashok \r\n', 'Ashok \r\n97@gmail.com', '9543820130\r\n'),
(35, 'Ashoka \r\n', 'Ashoka \r\n94@gmail.com', '9666028908\r\n'),
(36, 'Avinash \r\n', 'Avinash \r\n97@gmail.com', '9788788614\r\n'),
(37, 'Baladeva \r\n', 'Baladeva \r\n97@gmail.com', '9946327957\r\n'),
(38, 'Baldev \r\n', 'Baldev \r\n98@gmail.com', '9014182236\r\n'),
(39, 'Bharat \r\n', 'Bharat \r\n99@gmail.com', '9359934887\r\n'),
(40, 'Bharata \r\n', 'Bharata \r\n90@gmail.com', '9054640974\r\n'),
(41, 'Bhaskar \r\n', 'Bhaskar \r\n95@gmail.com', '9391065122\r\n'),
(42, 'Bhaskara \r\n', 'Bhaskara \r\n99@gmail.com', '9021452766\r\n'),
(43, 'Bishen \r\n', 'Bishen \r\n98@gmail.com', '9388081318\r\n'),
(44, 'Brahma \r\n', 'Brahma \r\n94@gmail.com', '9031405427\r\n'),
(45, 'Brijesh \r\n', 'Brijesh \r\n99@gmail.com', '9892492170\r\n'),
(46, 'Brijesha \r\n', 'Brijesha \r\n96@gmail.com', '9636202997\r\n'),
(47, 'Buddha \r\n', 'Buddha \r\n97@gmail.com', '9650714294\r\n'),
(48, 'Carpanin\r\n', 'Carpanin\r\n93@gmail.com', '9801718911\r\n'),
(49, 'Chandan \r\n', 'Chandan \r\n92@gmail.com', '9382462836\r\n'),
(50, 'Chander \r\n', 'Chander \r\n99@gmail.com', '9451293394\r\n'),
(51, 'Chandrakant \r\n', 'Chandrakant \r\n99@gmail.com', '9500800454\r\n'),
(52, 'Chandraradj', 'Chandraradj99@gmail.com', '9557122398'),
(53, 'Abhay\r\n', 'Abhay\r\n98@gmail.com', '9239897516\r\n'),
(54, 'Adesh\r\n', 'Adesh\r\n92@gmail.com', '9736741211\r\n'),
(55, 'Adhik\r\n', 'Adhik\r\n96@gmail.com', '9513346368\r\n'),
(56, 'Aditya\r\n', 'Aditya\r\n91@gmail.com', '9058366641\r\n'),
(57, 'Agni\r\n', 'Agni\r\n96@gmail.com', '9057425929\r\n'),
(58, 'Ajay\r\n', 'Ajay\r\n95@gmail.com', '9303263617\r\n'),
(59, 'Ajeet \r\n', 'Ajeet \r\n98@gmail.com', '9123943254\r\n'),
(60, 'Ajit \r\n', 'Ajit \r\n92@gmail.com', '9433890644\r\n'),
(61, 'Ajith \r\n', 'Ajith \r\n92@gmail.com', '9559598966\r\n'),
(62, 'Akash \r\n', 'Akash \r\n90@gmail.com', '9544856753\r\n'),
(63, 'Akhil \r\n', 'Akhil \r\n91@gmail.com', '9757381757\r\n'),
(64, 'Amar \r\n', 'Amar \r\n97@gmail.com', '9267807320\r\n'),
(65, 'Amit \r\n', 'Amit \r\n91@gmail.com', '9097999004\r\n'),
(66, 'Amrit \r\n', 'Amrit \r\n90@gmail.com', '9926388104\r\n'),
(67, 'Anand \r\n', 'Anand \r\n94@gmail.com', '9294497398\r\n'),
(68, 'Ananden\r\n', 'Ananden\r\n98@gmail.com', '9871810766\r\n'),
(69, 'Anandha \r\n', 'Anandha \r\n96@gmail.com', '9223649722\r\n'),
(70, 'Anant \r\n', 'Anant \r\n92@gmail.com', '9182150740\r\n'),
(71, 'Ananta\r\n', 'Ananta\r\n95@gmail.com', '9655810471\r\n'),
(72, 'Ananth \r\n', 'Ananth \r\n94@gmail.com', '9150500686\r\n'),
(73, 'Anil \r\n', 'Anil \r\n96@gmail.com', '9236647249\r\n'),
(74, 'Aniruddha \r\n', 'Aniruddha \r\n93@gmail.com', '9060254962\r\n'),
(75, 'Anish \r\n', 'Anish \r\n95@gmail.com', '9605038939\r\n'),
(76, 'Ankur \r\n', 'Ankur \r\n99@gmail.com', '9936863237\r\n'),
(77, 'Anuj \r\n', 'Anuj \r\n90@gmail.com', '9840166245\r\n'),
(78, 'Anupam \r\n', 'Anupam \r\n96@gmail.com', '9149080524\r\n'),
(79, 'Aravind \r\n', 'Aravind \r\n95@gmail.com', '9994862238\r\n'),
(80, 'Aravinda \r\n', 'Aravinda \r\n95@gmail.com', '9485307594\r\n'),
(81, 'Arjun \r\n', 'Arjun \r\n93@gmail.com', '9954474613\r\n'),
(82, 'Arjuna \r\n', 'Arjuna \r\n99@gmail.com', '9115474064\r\n'),
(83, 'Arun \r\n', 'Arun \r\n97@gmail.com', '9019103182\r\n'),
(84, 'Aruna \r\n', 'Aruna \r\n91@gmail.com', '9481414114\r\n'),
(85, 'Aseem \r\n', 'Aseem \r\n92@gmail.com', '9356980350\r\n'),
(86, 'Ashok \r\n', 'Ashok \r\n92@gmail.com', '9543820130\r\n'),
(87, 'Ashoka \r\n', 'Ashoka \r\n97@gmail.com', '9666028908\r\n'),
(88, 'Avinash \r\n', 'Avinash \r\n95@gmail.com', '9788788614\r\n'),
(89, 'Baladeva \r\n', 'Baladeva \r\n98@gmail.com', '9946327957\r\n'),
(90, 'Baldev \r\n', 'Baldev \r\n96@gmail.com', '9014182236\r\n'),
(91, 'Bharat \r\n', 'Bharat \r\n90@gmail.com', '9359934887\r\n'),
(92, 'Bharata \r\n', 'Bharata \r\n91@gmail.com', '9054640974\r\n'),
(93, 'Bhaskar \r\n', 'Bhaskar \r\n97@gmail.com', '9391065122\r\n'),
(94, 'Bhaskara \r\n', 'Bhaskara \r\n98@gmail.com', '9021452766\r\n'),
(95, 'Bishen \r\n', 'Bishen \r\n99@gmail.com', '9388081318\r\n'),
(96, 'Brahma \r\n', 'Brahma \r\n95@gmail.com', '9031405427\r\n'),
(97, 'Brijesh \r\n', 'Brijesh \r\n94@gmail.com', '9892492170\r\n'),
(98, 'Brijesha \r\n', 'Brijesha \r\n92@gmail.com', '9636202997\r\n'),
(99, 'Buddha \r\n', 'Buddha \r\n94@gmail.com', '9650714294\r\n'),
(100, 'Carpanin\r\n', 'Carpanin\r\n99@gmail.com', '9801718911\r\n'),
(101, 'Chandan \r\n', 'Chandan \r\n93@gmail.com', '9382462836\r\n'),
(102, 'Chander \r\n', 'Chander \r\n94@gmail.com', '9451293394\r\n'),
(103, 'Chandrakant \r\n', 'Chandrakant \r\n99@gmail.com', '9500800454\r\n'),
(104, 'Chandraradj', 'Chandraradj96@gmail.com', '9557122398');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
