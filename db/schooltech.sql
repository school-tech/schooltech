-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 11:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooltech`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `classname` varchar(125) NOT NULL,
  `department` varchar(125) NOT NULL,
  `level` varchar(125) NOT NULL,
  `classmaster` varchar(125) NOT NULL,
  `location` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `school_id`, `schoolname`, `classname`, `department`, `level`, `classmaster`, `location`, `date`, `month`, `year`) VALUES
(1, '6041352', '6041352', 'Mr Saffa', '', 'SSS1', '', '', '', '', ''),
(2, '6041352', '6041352', 'Mr Conteh', 'Science', 'SSS1', '', 'Room 1', 'February 29, 2024', 'February', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE `schooladmin` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `dob` varchar(125) NOT NULL,
  `maritalstatus` varchar(125) NOT NULL,
  `emailaddress` varchar(125) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `homeaddress` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `district` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schooladmin`
--

INSERT INTO `schooladmin` (`id`, `school_id`, `schoolname`, `firstname`, `lastname`, `gender`, `dob`, `maritalstatus`, `emailaddress`, `phonenumber`, `homeaddress`, `password`, `status`, `district`, `date`, `month`, `year`) VALUES
(1, 6041352, 'Holy Family Senior Secondary School', 'Augustine M', 'Kamara', 'Male', 'December 25, 1972', 'Married', 'augustinemkamara@gmail.com', '+23273468738', 'Allentown', 'aug', 'Active', '', '24-02-2023', 'February', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `school_id` varchar(15) NOT NULL,
  `adm_no` varchar(15) NOT NULL,
  `id_no` varchar(15) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `homeaddress` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `nin` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `disability_type` varchar(100) NOT NULL,
  `sick` varchar(100) NOT NULL,
  `sick_type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `school_id`, `adm_no`, `id_no`, `schoolname`, `firstname`, `lastname`, `dob`, `gender`, `bgroup`, `class`, `homeaddress`, `phonenumber`, `emailaddress`, `nin`, `religion`, `nationality`, `disability`, `disability_type`, `sick`, `sick_type`, `date`, `month`, `year`) VALUES
(1, '6041352', '8656543143', '', '6041352', 'Emmanuel Sahr', 'Dauda', '2001-11-07', 'Male', 'O+', 'SSS3 Science', 'Allen Town', '074380058', 'emmanuelsahrdauda17@gmail.com', '62780327429842', 'Christianity', 'Sierra Leonean', 'No', '', 'No', '', 'February 29, 2024', 'February', '2024'),
(2, '6041352', '8656543144', '', '6041352', 'James Bella ', 'Turay', '2001-11-28', 'Male', 'B+', 'SSS3 Science', 'Allen Town', '074380058', 'bellajayturay@gmail.com', '2145769832844', 'Christianity', 'Sierra Leonean', 'No', '', 'No', '', 'February 29, 2024', 'February', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `teacher_name` varchar(125) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `subject_title` varchar(125) NOT NULL,
  `class` varchar(125) NOT NULL,
  `faculty` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `school_id`, `schoolname`, `teacher_name`, `teacher_id`, `subject_title`, `class`, `faculty`, `date`, `month`, `year`) VALUES
(1, '6041352', '6041352', 'Mamoud Exodos Saffa	', '1', 'Physics', 'SSS1', 'Science', 'February 29, 2024', 'February', '2024'),
(2, '6041352', '6041352', 'Mrs Mariama Conteh', '2', 'Chemistry', 'SSS2', 'Science', 'February 29, 2024', 'February', '2024'),
(3, '6041352', '6041352', 'Mr Alfred Kamara', '', 'Chemistry', 'SSS1', 'Science', 'February 29, 2024', 'February', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(125) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `dob` varchar(125) NOT NULL,
  `pincode` varchar(125) NOT NULL,
  `nationality` varchar(125) NOT NULL,
  `ethnicgroup` varchar(125) NOT NULL,
  `homeaddress` varchar(125) NOT NULL,
  `contactcode` varchar(125) NOT NULL,
  `phonenumber` varchar(125) NOT NULL,
  `nin` varchar(125) NOT NULL,
  `religion` varchar(125) NOT NULL,
  `emailaddress` varchar(125) NOT NULL,
  `class` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `school_id`, `schoolname`, `firstname`, `lastname`, `gender`, `dob`, `pincode`, `nationality`, `ethnicgroup`, `homeaddress`, `contactcode`, `phonenumber`, `nin`, `religion`, `emailaddress`, `class`, `password`, `status`, `date`, `month`, `year`) VALUES
(1, '6041352', 'Holy Family Senior Secondary School', 'Mamoud Exodos', 'Saffa', 'Male', '05-21-2980', '13423243', 'Sierra Leonean', 'Mende', 'Mayenkineh', '+232', '87990990', '2343546534242', '0', 'mamoudsaffa@gmail.com', 'SSS3 Science', 'saff', 'Active', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schooladmin`
--
ALTER TABLE `schooladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schooladmin`
--
ALTER TABLE `schooladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
