-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 01:15 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classicphysiotherapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerbankk`
--

CREATE TABLE `answerbankk` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `answered_by` varchar(255) NOT NULL,
  `date_answered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answerbankk`
--

INSERT INTO `answerbankk` (`id`, `question_id`, `answer`, `answered_by`, `date_answered`) VALUES
(1, 1, 'wwwwwww', 'Damilare', '02-03-2018 04:08:pm');

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `dateposted` varchar(255) NOT NULL,
  `question_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`id`, `name`, `email`, `subject`, `question`, `dateposted`, `question_status`) VALUES
(1, 'Damilare Hassan', 'damilareanjorin1@gmail.com', 'About physiotherapy services', '<p><strong>how do i go about the physiotherapy services, i needed to join your group right now</strong></p>', '02-03-2018 12:55:pm', 'Answered'),
(2, 'OKE OLUWASEUN PAUL', 'olotodamilola@gmail.com', 'how are you doing doctor?', '<p>ko</p>', '02-03-2018 04:20:pm', 'Not Yet Answered');

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE `random` (
  `id` int(10) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `ran_num` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerbankk`
--
ALTER TABLE `answerbankk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answerbankk`
--
ALTER TABLE `answerbankk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `questionbank`
--
ALTER TABLE `questionbank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `random`
--
ALTER TABLE `random`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
