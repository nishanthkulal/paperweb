-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 03:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qstn_paper`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `papername` varchar(20) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `no` int(11) NOT NULL,
  `subno` varchar(5) NOT NULL,
  `question` varchar(5000) DEFAULT NULL,
  `mark` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `papername`, `e_name`, `sub`, `no`, `subno`, `question`, `mark`) VALUES
(121, '123', '3rd Internal', 'CNS', 0, '', '', 0),
(122, '123', '3rd Internal', 'CNS', 1, 'a)', 'ayfdydfuqdqfqudqydfquy', 10),
(123, '123', '3rd Internal', 'CNS', 1, 'b', 'sdaydvtdfyqwdtqfd', 10),
(124, '123', '3rd Internal', 'CNS', 2, 'a)', 'sgdadafsduya', 10),
(125, '123', '3rd Internal', 'CNS', 2, 'b', 'adsdasdada', 10),
(126, '256', '2nd Internal', 'ADP', 1, '4', '456', 10),
(127, '256', '2nd Internal', 'ADP', 123, '456', 'hbccvcvbhxc', 10),
(128, '456', '1st Internal', 'ADP', 0, '', '', 0),
(129, '456', '1st Internal', 'ADP', 0, '', '', 0),
(130, '456', '1st Internal', 'ADP', 0, '', '', 0),
(131, '456', '1st Internal', 'ADP', 0, '', '', 0),
(132, '456', '1st Internal', 'ADP', 0, '', '', 0),
(133, '456', '1st Internal', 'ADP', 0, '', '', 0),
(134, '456', '1st Internal', 'ADP', 0, '', '', 0),
(135, '456', '1st Internal', 'ADP', 0, '', '', 0),
(136, '456', '1st Internal', 'ADP', 0, '', '', 0),
(137, '456', '1st Internal', 'ADP', 0, '', '', 0),
(138, '456', '1st Internal', 'ADP', 0, '', '', 0),
(139, '456', '1st Internal', 'ADP', 0, '', '', 0),
(140, '456', '1st Internal', 'ADP', 0, '', '', 0),
(142, '', '1st Internal', 'ADP', 0, '', '', 0),
(144, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 1, 'b)', 'Explain different roles of management and different level in management.', 10),
(145, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 2, 'a)', 'Discuss planning and importance of planning.', 10),
(146, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 3, 'a)', 'List the various steps involved in the planning process?', 10),
(147, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 3, 'b)', 'Demonstrate Bureaucratic Administration in management.', 10),
(148, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 4, 'a)', 'List the types of organization? State the different principles of organization.', 10),
(149, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 4, 'b)', 'Demonstrate the process of Recruitment & Selection techniques.', 10),
(150, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 5, 'a)', 'Describe directing, nature of directing and principles of directing.', 10),
(151, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 6, 'a)', 'Explain different leadership styles with examples.', 10),
(152, 'nishanth', 'First Internal Assessment Test', 'MANAGEMENT AND ENTEREPRENURSHIP FOR IT INDUSTRY (18CS51)', 1, 'a)', 'Summarize meaning, characteristics and functional areas of managements.', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
