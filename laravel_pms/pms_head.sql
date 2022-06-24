-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 08:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms_head`
--

-- --------------------------------------------------------

--
-- Table structure for table `bin_projects`
--

CREATE TABLE `bin_projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` text NOT NULL DEFAULT 'Open',
  `duration` varchar(100) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `member_count` int(5) NOT NULL,
  `head_id` int(5) NOT NULL,
  `lead_id` int(5) NOT NULL,
  `user1_id` int(5) NOT NULL,
  `user2_id` int(5) DEFAULT NULL,
  `user3_id` int(5) DEFAULT NULL,
  `discription` text NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `deleted_by` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bin_tasks`
--

CREATE TABLE `bin_tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `assign_time` varchar(100) NOT NULL,
  `deadline_time` varchar(100) NOT NULL,
  `status` text NOT NULL DEFAULT 'Assigned',
  `deleted_by` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `attachment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver`, `message`, `attachment`) VALUES
(5, 1, 'Admin', 'Hello, Admin.', 'RegistrationPrintout_18379352.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `open_projects`
--

CREATE TABLE `open_projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` text NOT NULL DEFAULT 'Open',
  `duration` varchar(100) NOT NULL,
  `head_id` int(5) DEFAULT NULL,
  `lead_id` int(5) DEFAULT NULL,
  `user1_id` varchar(50) NOT NULL,
  `user2_id` varchar(50) DEFAULT NULL,
  `user3_id` varchar(50) DEFAULT NULL,
  `discription` text NOT NULL,
  `attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_projects`
--

INSERT INTO `open_projects` (`id`, `title`, `type`, `status`, `duration`, `head_id`, `lead_id`, `user1_id`, `user2_id`, `user3_id`, `discription`, `attachment`) VALUES
(1, 'Project 01', 'Business', 'In-Process', 'One', 2, 11, '1', '2', '3', 'this is', 'uploadFiles/.docx'),
(2, 'Project 02', 'Marketing', 'In-Process', 'Two', 2, 12, '9', '8', '3', 'this is 2nd project', 'uploadFiles/1647094739.docx'),
(3, 'Project 03', 'Software', 'In-Process', 'Three', 10, 12, '7', '6', '9', 'Software project', 'uploadFiles/1647106766.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `deadline_date` varchar(10) NOT NULL,
  `deadline_time` varchar(10) NOT NULL,
  `task_dis` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Assigned',
  `attachment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `task_name`, `type`, `deadline_date`, `deadline_time`, `task_dis`, `status`, `attachment`) VALUES
(1, 1, 'Task 1', 'Doc', '2022-03-13', '01:01', 'First Task', 'Finished', 'TaskuploadFiles/1647114010.jpg'),
(5, 2, 'Task 1', 'Diagram', '2022-03-17', '14:21', 'Project 2\'s Task 1', 'Finished', 'TaskuploadFiles/1647505305.pdf'),
(6, 3, 'Task 1', 'Script', '2022-03-17', '14:26', 'Project 3\'s Task 1', 'Finished', 'TaskuploadFiles/1647505423.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `positions` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `name`, `email`, `password`, `phone`, `address`, `positions`) VALUES
(1, 'Sourav Saha', 'shanto.sourav07@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01786270162', 'Dhaka', 'Head'),
(6, 'User 01', 'user1@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01521550888', 'Dhaka', 'User'),
(7, 'User 02', 'user2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01521550777', 'Tejgain', 'User'),
(8, 'User 03', 'user3@ieee.org', '827ccb0eea8a706c4c34a16891f84e7b', '01999888811', 'Dhaka', 'User'),
(10, 'Project Head 1', 'p_head@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01715170366', 'Dhaka', 'Head'),
(11, 'Project Lead 1', 'p_lead@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01888888181', 'Dhaka', 'Lead'),
(12, 'Project Lead 2', 'p_lead2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01780869823', 'Khulna', 'Lead'),
(35, 'User 04', 'user4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01786270162', 'Dhaka', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bin_projects`
--
ALTER TABLE `bin_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bin_tasks`
--
ALTER TABLE `bin_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_projects`
--
ALTER TABLE `open_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bin_projects`
--
ALTER TABLE `bin_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bin_tasks`
--
ALTER TABLE `bin_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `open_projects`
--
ALTER TABLE `open_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
