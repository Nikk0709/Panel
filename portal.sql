-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `coursetype` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `coursefullname` varchar(50) NOT NULL,
  `maxsem` varchar(50) NOT NULL,
  `descript` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursetype`, `coursename`, `coursefullname`, `maxsem`, `descript`) VALUES
(8, 'M.Tech', 'nik', 'nikhil', '1', 'mahan insaan'),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, 'B.tech', 'xyz', 'xyz', '23', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `registerat`
--

CREATE TABLE `registerat` (
  `Scholarnumber` varchar(200) NOT NULL,
  `image` varchar(60) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `middlename` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `fathername` varchar(20) DEFAULT NULL,
  `mothername` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `psw` varchar(40) DEFAULT NULL,
  `pnum` varchar(13) DEFAULT NULL,
  `wnum` varchar(13) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `pincode` int(8) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerat`
--

INSERT INTO `registerat` (`Scholarnumber`, `image`, `firstname`, `middlename`, `lastname`, `fathername`, `mothername`, `dob`, `email`, `psw`, `pnum`, `wnum`, `gender`, `category`, `aadhar`, `state`, `city`, `pincode`, `address`) VALUES
('EN23CS0031', '', 'Namish', '', 'Shaikh', 'Imteyaz', 'Goldy', '2003-11-08', 'namishshaikh008@gmail.com', '1234567', '9893545376', '9893545376', 'female', 'general-ews', '', 'MP', 'Dewas', 455001, 'Bus Stand '),
('EN23CS0032', '', 'Saloni ', '', 'Agrawal', 'Manish', 'Manju', '2002-10-20', 'saloniagrawal160@gmail.com', '123456', '9826052381', '9826052381', 'female', 'general-ews', '', 'MP', 'Indore', 452010, '1023/9 Satyam Vihar 24 Bungalow Bajrang Nagar, Ind'),
('EN23CS0033', '', 'Mansi', '', 'patil', 'Dilip', 'Bhavna', '2003-10-05', 'en21cs301441@medicaps.ac.in', 'mansi', '8269647594', '8269647594', 'female', 'general', '', 'MP', 'Indore', 452001, 'bhandari bridge'),
('EN23CS0036', '64cb5b0007144.', 'Nikhil', '', 'Parwani', 'Prakash', 'Jhanvi', '2003-09-07', 'nikhilpar425@gmail.com', 'Nikk123', '9630133916', '9630133916', 'male', 'general-ews', '', 'MP', 'Indore', 452007, '67 Jairampur Colony...');

--
-- Triggers `registerat`
--
DELIMITER $$
CREATE TRIGGER `my_trig` BEFORE INSERT ON `registerat` FOR EACH ROW BEGIN
INSERT INTO scholar_id VALUES (NULL);
SET NEW.Scholarnumber = CONCAT("EN23CS" , LPAD(LAST_INSERT_ID(), 4,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `scholar_id`
--

CREATE TABLE `scholar_id` (
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholar_id`
--

INSERT INTO `scholar_id` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subjecttype` varchar(20) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `extmark` varchar(20) NOT NULL,
  `intmark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course`, `session`, `semester`, `subjecttype`, `subjectname`, `credit`, `code`, `extmark`, `intmark`) VALUES
(1, 'B.Tech', '2021-2025', '3rd sem', 'optional', 'ss', '2', 'sws', '20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerat`
--
ALTER TABLE `registerat`
  ADD PRIMARY KEY (`Scholarnumber`);

--
-- Indexes for table `scholar_id`
--
ALTER TABLE `scholar_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `scholar_id`
--
ALTER TABLE `scholar_id`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
