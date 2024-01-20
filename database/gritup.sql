-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gritup`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `answer` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `adminemail`, `useremail`, `question`, `answer`) VALUES
(1, 'test@gmail.com', 'kasthu@gmail.com', 'Hello this my first application', 'Thanks for contacting'),
(2, 'test@gmail.com', 'kasthu@gmail.com', 'Hello', 'Hello how can i help you');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Do I need to complete a course in one go?', 'No, you can complete our courses in your own time. If you need to leave a course, click the course e'),
(2, 'How do you evaluate course effectiveness?', 'A well-defined e-learning development process comprises four phases viz. Content analysis, developin');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `descript` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `cname`, `role`, `date`, `descript`) VALUES
(1, 'TCS', 'Internship', '2023-06-14', 'internship for dipoma');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `servicename` varchar(30) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `servicename`, `branch`, `syllabus`, `semester`, `link`, `file`) VALUES
(5, 'notes', 'CS', 'C20', '2nd Sem', 'Hello', '1.pdf'),
(6, 'textbooks', 'CS', 'C20', '2nd Sem', 'https://www.youtube.com/embed/SqcY0GlETPk', '4.jpg'),
(8, 'dcet', 'EC', 'C15', '2nd Sem', 'cs demo', 'bug.docx'),
(9, 'QP', 'CS', 'C20', '1st Sem', 'sample', 'BCA - Titles.txt'),
(10, 'elearning', 'CS', 'C20', '2nd Sem', 'https://www.youtube.com/embed/z4a6QJSGL28', 'Faculty.docx'),
(11, 'textbooks', 'EC', 'C15', '2nd Sem', 'Demo', 'ferti1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `branch`, `semester`, `email`, `password`) VALUES
(1, 'kasthu', 'EC', '2nd Sem', 'kasthu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentadmin`
--

CREATE TABLE `studentadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentadmin`
--

INSERT INTO `studentadmin` (`id`, `name`, `branch`, `semester`, `email`, `password`) VALUES
(1, 'keerthi', 'CS', '3rd Sem', 'keerthi@gmail.com', '12345'),
(2, 'test', 'CS', '1st Sem', 'test@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentadmin`
--
ALTER TABLE `studentadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentadmin`
--
ALTER TABLE `studentadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
