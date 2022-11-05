-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 07:32 AM
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
(1, 'Engineering Mathmatics I', '1'),
(2, 'Chemistry', '1'),
(3, 'Communication Techniques	', '1'),
(4, 'Basic Electrical Engineering', '1'),
(5, 'Mechanical Workshop', '1'),
(6, 'Programming in C	', '1'),
(7, 'Engineering Mathematics-II', '2'),
(8, 'Physis', '2'),
(9, 'Thermal Science', '2'),
(10, 'Engineering Drawing', '2'),
(11, 'Object Oriented Programming in C++\n', '2'),
(12, 'Applied Mechanics I\n', '2'),
(13, 'Engineering Mathematics - III', '3'),
(14, 'Electrical Engineering Materials', '3'),
(15, 'Network Theory', '3'),
(16, 'Electronic Devices and Circuits', '3'),
(17, 'Logic Circuits', '3'),
(18, 'Data Structure and Algorithms', '3'),
(19, 'Engineering Math IV', '4'),
(20, 'Instrumentation', '4'),
(21, 'Programming Technology', '4'),
(22, 'Database Management Systems', '4'),
(23, 'Microprocessor', '4'),
(24, 'Project I', '4'),
(25, 'Operating System', '5'),
(26, 'Numerical Methods', '5'),
(27, 'Probability and Statistics', '5'),
(28, 'Computer Architecture	', '5'),
(29, 'Computer Graphics	', '5'),
(30, 'Theory of Computation	', '5'),
(31, 'Simulation and Modeling', '6'),
(32, 'Data Communication\n', '6'),
(33, 'Object Oriented Software Engineering\n', '6'),
(34, 'Embedded System\n', '6'),
(35, 'Elective I\n', '6'),
(36, 'Project II\n', '6'),
(37, 'Engineering Economics	', '7'),
(38, 'Artificial Intelligence	', '7'),
(39, 'Computer Networks	', '7'),
(40, 'Image Processing and Pattern Recognition	', '7'),
(41, 'ICT Project Management	', '7'),
(42, 'Elective II	', '7'),
(43, 'Digital Signal Analysis and Processing\n', '8'),
(44, 'Social and Professional Issues in IT\n', '8'),
(45, 'Organization and Management\n', '8'),
(46, 'Information System\n', '8'),
(47, 'Elective III\n', '8'),
(48, 'Major Project\n', '8'),
(49, 'Engineering Mathematics-I	', '9'),
(50, 'Physics	', '9'),
(51, 'Communication Technique	', '9'),
(52, 'Problem Solving Techniques	', '9'),
(53, 'Fundamentals of IT	', '9'),
(54, 'Programming in C	', '9'),
(55, 'Engineering Mathematics-II', '10'),
(56, 'Logic Circuits\n', '10'),
(57, 'Mathematical Foundation of Computer Science\n', '10'),
(58, 'Engineering Drawing\n', '10'),
(59, 'Object Oriented Programming in C++\n', '10'),
(60, 'Web Technology\n', '10'),
(61, 'Engineering Mathematics - III', '11'),
(62, 'Software Engineering Fundaments	', '11'),
(63, 'Microprocessor & Assembly Lang	', '11'),
(64, 'Data Structure and Algorithms	', '11'),
(65, 'Probability & Queuing Theory	', '11'),
(66, 'Programming in Java	', '11'),
(67, 'Numerical Methods\n', '12'),
(68, 'Computer Graphics\n', '12'),
(69, 'Computer Organization & Architecture\n', '12'),
(70, 'Database Management Systems\n', '12'),
(71, 'Object Oriented Design & Modeling through UML\n', '12'),
(72, 'Project I\n', '12'),
(73, 'Applied Operating System	', '13'),
(74, 'Simulation & Modeling	', '13'),
(75, 'Artificial Intelligence & Neural Network	', '13'),
(76, 'System Programming	', '13'),
(77, 'Analysis & Design of Algorithm	', '13'),
(78, 'Organization and Management	', '13'),
(79, 'Multimedia Systems', '14'),
(80, 'Computer Networks\n', '14'),
(81, 'Principles of Programming Languages\n', '14'),
(82, 'Engineering Economics\n', '14'),
(83, 'Object Oriented Software Development\n', '14'),
(84, 'Project II\n', '14'),
(85, 'Real -Time Systems', '15'),
(86, 'Distributed System	', '15'),
(87, 'Enterprise Application Development	', '15'),
(88, 'Image Processing & Pattern Recognition	', '15'),
(89, 'Software Testing, Verification, Validation & Quality Assurance	', '15'),
(90, 'Elective I	', '15'),
(91, 'Software Project Management\n', '16'),
(92, 'Network Programming\n', '16'),
(95, 'Elective II\n', '16'),
(96, 'Major Project', '16'),
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
