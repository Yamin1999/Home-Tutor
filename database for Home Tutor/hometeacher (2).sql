-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2020 at 04:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometeacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `postresponse`
--

CREATE TABLE `postresponse` (
  `p_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `s_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postresponse`
--

INSERT INTO `postresponse` (`p_id`, `uid`, `s_uid`) VALUES
(6, 21, 7),
(6, 20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `post_to_get`
--

CREATE TABLE `post_to_get` (
  `p_id` int(11) NOT NULL,
  `s_uid` int(11) DEFAULT NULL,
  `p_email` varchar(50) DEFAULT NULL,
  `p_phone` int(20) DEFAULT NULL,
  `p_division` varchar(50) DEFAULT NULL,
  `p_district` varchar(50) DEFAULT NULL,
  `p_zip` int(20) DEFAULT NULL,
  `p_institution` varchar(50) DEFAULT NULL,
  `p_group` varchar(50) DEFAULT NULL,
  `p_gender` varchar(50) DEFAULT NULL,
  `p_class` varchar(50) DEFAULT NULL,
  `p_mpayment` int(20) DEFAULT NULL,
  `p_dayspw` varchar(50) DEFAULT NULL,
  `p_address` varchar(50) DEFAULT NULL,
  `p_subject` varchar(50) DEFAULT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_to_get`
--

INSERT INTO `post_to_get` (`p_id`, `s_uid`, `p_email`, `p_phone`, `p_division`, `p_district`, `p_zip`, `p_institution`, `p_group`, `p_gender`, `p_class`, `p_mpayment`, `p_dayspw`, `p_address`, `p_subject`, `other`) VALUES
(6, 7, 'yaminhaque1999@gmail.com', 1521419981, 'Rajshahi', 'Rajshahi', 6000, 'CITY College', 'Science', 'Male', 'HSC 1st Year', 4000, '4 days/week', 'Raipara, Rajpara, Rajshahi', 'physics', '');

-- --------------------------------------------------------

--
-- Table structure for table `requestaccept`
--

CREATE TABLE `requestaccept` (
  `uid` int(11) DEFAULT NULL,
  `s_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestaccept`
--

INSERT INTO `requestaccept` (`uid`, `s_uid`) VALUES
(20, 7);

-- --------------------------------------------------------

--
-- Table structure for table `studentpanel`
--

CREATE TABLE `studentpanel` (
  `s_uid` int(11) NOT NULL,
  `s_first_name` varchar(50) DEFAULT NULL,
  `s_last_name` varchar(50) DEFAULT NULL,
  `s_username` varchar(50) DEFAULT NULL,
  `s_password` varchar(50) DEFAULT NULL,
  `s_email` varchar(50) DEFAULT NULL,
  `s_phone` int(20) DEFAULT NULL,
  `s_division` varchar(50) DEFAULT NULL,
  `s_district` varchar(50) DEFAULT NULL,
  `s_zip` int(20) DEFAULT NULL,
  `s_institution` varchar(50) DEFAULT NULL,
  `s_group` varchar(50) DEFAULT NULL,
  `s_address` varchar(50) DEFAULT NULL,
  `s_subject` varchar(50) DEFAULT NULL,
  `s_profilepic` varchar(50) NOT NULL,
  `s_studentidcard` varchar(50) NOT NULL,
  `s_gender` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentpanel`
--

INSERT INTO `studentpanel` (`s_uid`, `s_first_name`, `s_last_name`, `s_username`, `s_password`, `s_email`, `s_phone`, `s_division`, `s_district`, `s_zip`, `s_institution`, `s_group`, `s_address`, `s_subject`, `s_profilepic`, `s_studentidcard`, `s_gender`, `class`) VALUES
(7, 'evan', 'Haque', 'evan19', 'a657aefe139a2db04ac1656f45ed3787', 'evanhaquee@gmail.com', 1770156333, 'Rajshahi', 'Rajshahi', 6000, 'NGDC', 'Science', 'Raipara, Rajpara, Rajshahi', 'physicsmath', 'download.png', 'download (2).png', 'Male', 'HSC 2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `teacherpanel`
--

CREATE TABLE `teacherpanel` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `zip` int(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `Institution` varchar(50) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `profilepic` varchar(50) NOT NULL,
  `studentidcard` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherpanel`
--

INSERT INTO `teacherpanel` (`uid`, `first_name`, `last_name`, `username`, `password`, `email`, `phone`, `division`, `district`, `zip`, `address`, `subject`, `Institution`, `department`, `profilepic`, `studentidcard`, `gender`, `year`) VALUES
(20, 'Raad', 'Rahman', 'raad19', 'f6ff6cf35fe3be6955c4cdf8dcd85e01', 'evanhaquee@gmail.com', 1770156333, 'Dhaka', 'Dhaka', 1000, 'Mirpur-1', 'physicsmath', 'NSU', 'EEE', 'o.jfif', 'sd1.jfif', 'Male', '2nd Year'),
(21, 'Yamina', 'Haque', 'Yamin19', 'f6ff6cf35fe3be6955c4cdf8dcd85e01', 'MarufHossain@gmail.com', 1521419981, 'Rajshahi', 'Rajshahi', 6000, 'Raipara, Rajpara, Rajshahi', 'physicschemistry', 'Ruet', 'CSE', 'kk.jfif', 'sd2.png', 'Male', '3rd Year');

-- --------------------------------------------------------

--
-- Table structure for table `tutorrequwst`
--

CREATE TABLE `tutorrequwst` (
  `uid` int(11) DEFAULT NULL,
  `s_uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorrequwst`
--

INSERT INTO `tutorrequwst` (`uid`, `s_uid`) VALUES
(21, 7),
(20, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postresponse`
--
ALTER TABLE `postresponse`
  ADD KEY `uid` (`uid`),
  ADD KEY `s_uid` (`s_uid`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `post_to_get`
--
ALTER TABLE `post_to_get`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `s_uid` (`s_uid`);

--
-- Indexes for table `requestaccept`
--
ALTER TABLE `requestaccept`
  ADD KEY `uid` (`uid`),
  ADD KEY `s_uid` (`s_uid`);

--
-- Indexes for table `studentpanel`
--
ALTER TABLE `studentpanel`
  ADD PRIMARY KEY (`s_uid`);

--
-- Indexes for table `teacherpanel`
--
ALTER TABLE `teacherpanel`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tutorrequwst`
--
ALTER TABLE `tutorrequwst`
  ADD KEY `uid` (`uid`),
  ADD KEY `s_uid` (`s_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_to_get`
--
ALTER TABLE `post_to_get`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentpanel`
--
ALTER TABLE `studentpanel`
  MODIFY `s_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacherpanel`
--
ALTER TABLE `teacherpanel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postresponse`
--
ALTER TABLE `postresponse`
  ADD CONSTRAINT `postresponse_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `teacherpanel` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `postresponse_ibfk_2` FOREIGN KEY (`s_uid`) REFERENCES `studentpanel` (`s_uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `postresponse_ibfk_3` FOREIGN KEY (`p_id`) REFERENCES `post_to_get` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `post_to_get`
--
ALTER TABLE `post_to_get`
  ADD CONSTRAINT `post_to_get_ibfk_1` FOREIGN KEY (`s_uid`) REFERENCES `studentpanel` (`s_uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestaccept`
--
ALTER TABLE `requestaccept`
  ADD CONSTRAINT `requestaccept_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `teacherpanel` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `requestaccept_ibfk_2` FOREIGN KEY (`s_uid`) REFERENCES `studentpanel` (`s_uid`) ON DELETE CASCADE;

--
-- Constraints for table `tutorrequwst`
--
ALTER TABLE `tutorrequwst`
  ADD CONSTRAINT `tutorrequwst_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `teacherpanel` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutorrequwst_ibfk_2` FOREIGN KEY (`s_uid`) REFERENCES `studentpanel` (`s_uid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
