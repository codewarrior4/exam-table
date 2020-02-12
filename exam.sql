-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 10:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `phonenumber` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `phonenumber`, `email`, `username`, `password`, `date`) VALUES
(1, 'MR Adeleke Adebayo', '483984093840938', 'oshorisqat97@gmail.com', 'adeleke123', 'etisalat123', '2019-09-06 10:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `exam_table`
--

CREATE TABLE `exam_table` (
  `id` int(11) NOT NULL,
  `level` varchar(100) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_table`
--

INSERT INTO `exam_table` (`id`, `level`, `title`) VALUES
(1, 'level', '0'),
(3, 'ND2', '0'),
(4, 'ND2', '0'),
(6, '$level', '0'),
(7, 'ND1', '0'),
(8, 'HND2', '0'),
(9, 'HND1', 'New First semester exam'),
(10, 'ND1', 'semester one'),
(11, 'ND1', 'provisional table');

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE `ttable` (
  `id` int(11) NOT NULL,
  `day` varchar(25) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `titleid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `hours` varchar(8) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`id`, `day`, `code`, `title`, `titleid`, `time`, `hours`, `venue`, `level`) VALUES
(1, 'Monday,  2020-02-01', 'com111', 'provisional table', 11, '2-4', '', 'com rm2', 'ND1'),
(2, 'Tuesday,  2021-01-01', 'sta112', 'provisional table', 11, '3-5', '', 'bus lt', 'ND1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_table`
--
ALTER TABLE `exam_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttable`
--
ALTER TABLE `ttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_table`
--
ALTER TABLE `exam_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ttable`
--
ALTER TABLE `ttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
