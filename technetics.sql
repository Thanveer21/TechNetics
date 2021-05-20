-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technetics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `regno` varchar(9) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`regno`, `name`, `email`, `password`) VALUES
('20MCA0051', 'NASEER THANVEER', 'naseerthanveer@gmail.com', 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QuestionNo` int(11) NOT NULL,
  `Question` varchar(70) NOT NULL,
  `Answer` varchar(70) NOT NULL,
  `option1` varchar(70) NOT NULL,
  `option2` varchar(70) NOT NULL,
  `option3` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `DueDate` varchar(30) NOT NULL,
  `timemins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QuestionNo`, `Question`, `Answer`, `option1`, `option2`, `option3`, `status`, `Type`, `DueDate`, `timemins`) VALUES
(1, 'what is  your name?', 'Kavya', 'Navya', 'Bhavna', 'Shravya', 'old', 'Recruitments', '24th April', 30),
(2, 'what are you studying?', 'MCA', 'BCA', 'BB', 'BCOM', 'old', 'Recruitments', '24th April', 30),
(3, 'What do you do for a living?', 'student', 'Professor', 'Engineer', 'Lawyer', 'old', 'Recruitments', '24th April', 30),
(4, 'What is the language you know best?', 'Java', 'Python', 'C', 'C++', 'old', 'Recruitments', '24th April', 30),
(5, 'What are you planning to do ?', 'JOB', 'Higher studies', 'get married', 'housewife/househusband', 'old', 'Recruitments', '24th April', 30),
(6, 'what is the job you aspire to have?', 'Project Manager', 'Job Manager', 'Supervisor', 'Team member', 'old', 'Recruitments', '24th April', 30),
(7, 'What is your age?', '21', '22', '23', '34', 'old', 'Recruitments', '24th April', 30),
(8, 'what is your favourite domain?', 'Web Development', 'Full Stack', 'Cloud', 'cryptography', 'old', 'Recruitments', '24th April', 30),
(9, 'Where do you see yourself in five years?', 'heading your team', 'good job', 'owning own place', 'working in my team', 'old', 'Recruitments', '24th April', 30),
(10, 'what is my name?', 'Kavya', 'Shrvaya', 'Bhavan', 'Snap', 'old', 'Recruitments', '24th April', 30),
(1, 'what is  your name?', 'Kavya', 'Navya', 'Bhavna', 'Shravya', 'new', 'Recruitments', '24th April', 30),
(2, 'what are you studying?', 'MCA', 'BCA', 'BB', 'BCOM', 'new', 'Recruitments', '24th April', 30),
(3, 'What do you do for a living?', 'student', 'Professor', 'Engineer', 'Lawyer', 'new', 'Recruitments', '24th April', 30),
(4, 'What is the language you know best?', 'Java', 'Python', 'C', 'C++', 'new', 'Recruitments', '24th April', 30),
(5, 'What are you planning to do ?', 'JOB', 'Higher studies', 'get married', 'housewife/househusband', 'new', 'Recruitments', '24th April', 30),
(6, 'what is the job you aspire to have?', 'Project Manager', 'Job Manager', 'Supervisor', 'Team member', 'new', 'Recruitments', '24th April', 30),
(7, 'What is your age?', '21', '22', '23', '34', 'new', 'Recruitments', '24th April', 30),
(8, 'what is your favourite domain?', 'Web Development', 'Full Stack', 'Cloud', 'cryptography', 'new', 'Recruitments', '24th April', 30),
(9, 'Where do you see yourself in five years?', 'heading your team', 'good job', 'owning own place', 'working in my team', 'new', 'Recruitments', '24th April', 30),
(10, 'what is my name?', 'Kavya', 'Shrvaya', 'Bhavan', 'Snap', 'new', 'Recruitments', '24th April', 30);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `regno` varchar(9) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `event` varchar(15) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `regno`, `name`, `email`, `event`, `content`) VALUES
(1, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'afdsfads'),
(3, '20MCA0001', 'SNEGHA  A', 'sneghaa@gmail.com', 'TechHack', 'The hackathon was awesome, we learnt so much from it its not about winning or loosing there its only about what you learn from it. The organizers where very friendly they helped us when we where stuck, the food provided was also good. Inshort we were very well treated and we learnt a lot in that 36 hours which is gonna be helpful for us!!'),
(4, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'adsfdsf'),
(5, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'adsfdsf'),
(6, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'adsfdsf'),
(7, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'safdf'),
(8, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'qwedfghngf'),
(9, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'qwedfghngf'),
(10, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'qwedfghngf'),
(11, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'qwedfghngf'),
(12, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(13, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(14, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(15, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(16, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(17, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'Tech 1.0', 'One hell of a event'),
(18, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'fine'),
(19, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'fine'),
(20, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'fdsaf'),
(21, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'TechHack', 'It was amazing to see how well organized the competition was. i learnt alot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `register_no` varchar(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `code` mediumint(50) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `register_no`, `name`, `email`, `password`, `code`, `status`) VALUES
(4, '20MCA0051', 'Naseer Thanveer', 'thanveer2101@gmail.com', 'asdfghjkl', 0, 'verified'),
(5, '20MCA0001', 'SNEGHA A', 'sneghaa@gmail.com', 'asdfghjkl', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `register_no` (`register_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
