-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 06:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `world`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `state_id`) VALUES
(1, 'computer-first sem ', '1'),
(2, 'computer-first sem ', '1'),
(3, 'computer-first sem ', '1'),
(4, 'computer-first sem ', '1'),
(5, 'computer-first sem ', '1'),
(6, 'computer-first sem ', '1'),
(7, 'computer-second sem ', '2'),
(8, 'computer-second sem ', '2'),
(9, 'computer-second sem ', '2'),
(10, 'computer-second sem ', '2'),
(11, 'computer-second sem ', '2'),
(12, 'computer-second sem ', '2'),
(13, 'computer-third sem ', '3'),
(14, 'computer-third sem ', '3'),
(15, 'computer-third sem ', '3'),
(16, 'computer-third sem ', '3'),
(17, 'computer-third sem ', '3'),
(18, 'computer-third sem ', '3'),
(19, 'computer-fourth sem ', '4'),
(20, 'computer-fourth sem ', '4'),
(21, 'computer-fourth sem ', '4'),
(22, 'computer-fourth sem ', '4'),
(23, 'computer-fourth sem ', '4'),
(24, 'computer-fourth sem ', '4'),
(25, 'computer-fifth sem ', '5'),
(26, 'computer-fifth sem ', '5'),
(27, 'computer-fifth sem ', '5'),
(28, 'computer-fifth sem ', '5'),
(29, 'computer-fifth sem ', '5'),
(30, 'computer-sixth sem ', '5'),
(31, 'computer-sixth sem ', '6'),
(32, 'computer-sixth sem ', '6'),
(33, 'computer-sixth sem ', '6'),
(34, 'computer-sixth sem ', '6'),
(35, 'computer-sixth sem ', '6'),
(36, 'computer-sixth sem ', '6'),
(37, 'computer-seventh sem ', '7'),
(38, 'computer-seventh sem ', '7'),
(39, 'computer-seventh sem ', '7'),
(40, 'computer-seventh sem ', '7'),
(41, 'computer-seventh sem ', '7'),
(42, 'computer-seventh sem ', '7'),
(43, 'computer-eighth sem ', '8'),
(44, 'computer-eighth sem ', '8'),
(45, 'computer-eighth sem ', '8'),
(46, 'computer-eighth sem ', '8'),
(47, 'computer-eighth sem ', '8'),
(48, 'computer-eighth sem ', '8'),
(49, 'Software-first sem\r\n', '9'),
(50, 'Software-first sem\r\n', '9'),
(51, 'Software-first sem\r\n', '9'),
(52, 'Software-first sem\r\n', '9'),
(53, 'Software-first sem\r\n', '9'),
(54, 'Software-first sem\r\n', '9'),
(55, 'software-second sem ', '10'),
(56, 'software-second sem ', '10'),
(57, 'software-second sem ', '10'),
(58, 'software-second sem ', '10'),
(59, 'software-second sem ', '10'),
(60, 'software-second sem ', '10'),
(61, 'software-third sem ', '11'),
(62, 'software-third sem ', '11'),
(63, 'software-third sem ', '11'),
(64, 'software-third sem ', '11'),
(65, 'software-third sem ', '11'),
(66, 'software-third sem ', '11'),
(67, 'software-fourth sem ', '12'),
(68, 'software-fourth sem ', '12'),
(69, 'software-fourth sem ', '12'),
(70, 'software-fourth sem ', '12'),
(71, 'software-fourth sem ', '12'),
(72, 'software-fourth sem ', '12'),
(73, 'software-fifth sem ', '13'),
(74, 'software-fifth sem ', '13'),
(75, 'software-fifth sem ', '13'),
(76, 'software-fifth sem ', '13'),
(77, 'software-fifth sem ', '13'),
(78, 'software-fifth sem ', '13'),
(79, 'software-sixth sem ', '14'),
(80, 'software-sixth sem ', '14'),
(81, 'software-sixth sem ', '14'),
(82, 'software-sixth sem ', '14'),
(83, 'software-sixth sem ', '14'),
(84, 'software-sixth sem ', '14'),
(85, 'software-seventh sem ', '15'),
(86, 'software-seventh sem ', '15'),
(87, 'software-seventh sem ', '15'),
(88, 'software-seventh sem ', '15'),
(89, 'software-seventh sem ', '15'),
(90, 'software-seventh sem ', '15'),
(91, 'software-eighth sem ', '16'),
(92, 'software-eighth sem ', '16'),
(93, 'software-eighth sem ', '16'),
(94, 'software-eighth sem ', '16'),
(95, 'software-eighth sem ', '16'),
(96, 'computer-eighth sem ', '16'),
(97, 'electrical-first sem ', '4198');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
