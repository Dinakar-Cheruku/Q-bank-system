-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 02:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainmini`
--

-- --------------------------------------------------------

--
-- Table structure for table `adp`
--

CREATE TABLE `adp` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `atc`
--

CREATE TABLE `atc` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cns`
--

CREATE TABLE `cns` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE `dbms` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meit`
--

CREATE TABLE `meit` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `email`, `password`, `name`, `admin`) VALUES
(1, 'test1@gmail.com', 'test1', 'test1', 0),
(2, 'test2@gmail.com', 'test2', 'test2', 0),
(3, 'test3@gmail.com', 'test3', 'test3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `up`
--

CREATE TABLE `up` (
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `module` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `diff` text NOT NULL,
  `co` text NOT NULL,
  `rbt` text NOT NULL,
  `selected` int(11) NOT NULL DEFAULT 0,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `up`
--

INSERT INTO `up` (`qid`, `question`, `module`, `marks`, `diff`, `co`, `rbt`, `selected`, `img`) VALUES
(8, 'Explain with neat diagram the architecture of Unix operating system', 1, 6, 'Very Easy', 'CO1', 'RBT-2', 0, ''),
(9, 'With suitable example, bring out the difference between absolute and relative path names.', 1, 4, 'Very Easy', 'CO1', 'RBT-2', 0, ''),
(10, 'Compare the contrast between internal and external commands in Unix Operating system', 1, 4, 'Very Easy', 'CO1', 'RBT-3', 0, ''),
(11, 'List and explain the salient features of Unix Operating system.', 1, 6, 'Very Easy', 'CO1', 'RBT-2', 0, ''),
(12, 'Explain daemon characteristics and basic coding rules.', 5, 10, 'Moderate', 'CO4', 'RBT-1', 0, ''),
(13, 'Explain the sigsetjmp and siglongjmp functions with examples.', 5, 10, 'Moderate', 'CO4', 'RBT-2', 0, ''),
(14, 'Write a note on ,\r\n(i) Process accounting\r\n(ii) Process Timers', 4, 10, 'Moderate', 'CO3', 'RBT-1', 0, ''),
(15, 'With neat diagram explain the memory layout of C program.', 3, 10, 'Easy', 'CO3', 'RBT-2', 0, ''),
(16, 'Define Shell Programming ? Write a shell program to create a simple calculator which can perform basic arithmetic operations.', 2, 10, 'Moderate', 'CO2', 'RBT-4', 0, ''),
(21, '', 1, 0, '', '', 'L1', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adp`
--
ALTER TABLE `adp`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `atc`
--
ALTER TABLE `atc`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `cns`
--
ALTER TABLE `cns`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `meit`
--
ALTER TABLE `meit`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `up`
--
ALTER TABLE `up`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adp`
--
ALTER TABLE `adp`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `atc`
--
ALTER TABLE `atc`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cns`
--
ALTER TABLE `cns`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dbms`
--
ALTER TABLE `dbms`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `meit`
--
ALTER TABLE `meit`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `up`
--
ALTER TABLE `up`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
