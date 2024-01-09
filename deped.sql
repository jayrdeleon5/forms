-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 03:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deped`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `book1` varchar(10) NOT NULL,
  `book1issued` date NOT NULL,
  `book1returned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `lrn`, `book1`, `book1issued`, `book1returned`) VALUES
(1, '105760140187', 'Science', '2024-01-02', '2024-01-31'),
(2, '159027140018', 'Science', '2024-01-08', '2024-01-31'),
(3, '105760140187', 'English', '2024-02-06', '2024-02-10'),
(6, '105760140187', 'TLE', '2024-01-10', '2024-01-31'),
(7, '105760140187', 'MAPEH', '2024-01-10', '2024-01-31'),
(8, '159027140018', 'MAPEH', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `lrn` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`lrn`, `lastname`, `firstname`, `middlename`, `gender`, `birthdate`, `age`, `street`, `barangay`, `municipality`, `province`, `fname`, `mname`, `gname`, `relationship`, `contact`, `section`) VALUES
('105760140187', 'ALCANTARA', 'DEXTER', '', 'Male', '', 13, '', 'Soledad', 'Santa Rosa', 'Nueva Ecija', '', '', '', '', '', 'Canva'),
('105764140018', 'GARMA', 'JHON BENEDICK', 'BACTASO', 'Male', '', 13, '', 'Soledad', 'Santa Rosa', 'Nueva Ecija', '', '', '', '', '', 'Wakelet'),
('105764140050', 'DAMO', 'RAYBENSON', 'SANQUI', 'Male', '', 13, '', 'Soledad', 'Santa Rosa', 'Nueva Ecija', '', '', '', '', '', 'Zoom'),
('159027140018', 'CAPISTRANO', 'JOHN CYRUS', '', 'Male', '', 13, '', 'Soledad', 'Santa Rosa', 'Nueva Ecija', '', '', '', '', '', 'Canva');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `sid` int(11) NOT NULL,
  `sections` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sid`, `sections`, `adviser`) VALUES
(1, 'Artificial Intelligence', 'Ria May Sevilla'),
(2, 'Wakelet', 'Jamin de Guzman'),
(3, 'Canva', 'Jay-R de Leon'),
(4, 'Zoom', 'Leonila Mag Isa');

-- --------------------------------------------------------

--
-- Table structure for table `sf3`
--

CREATE TABLE `sf3` (
  `lrn` varchar(255) NOT NULL,
  `subj1` varchar(255) NOT NULL,
  `issued1` date NOT NULL,
  `returned1` date NOT NULL,
  `subj2` varchar(255) NOT NULL,
  `issued2` varchar(11) NOT NULL,
  `returned2` date NOT NULL,
  `subj3` varchar(255) NOT NULL,
  `issued3` date NOT NULL,
  `returned3` date NOT NULL,
  `subj4` varchar(255) NOT NULL,
  `issued4` date NOT NULL,
  `returned4` date NOT NULL,
  `subj5` varchar(255) NOT NULL,
  `issued5` date NOT NULL,
  `returned5` date NOT NULL,
  `subj6` varchar(255) NOT NULL,
  `issued6` date NOT NULL,
  `returned6` date NOT NULL,
  `subj7` varchar(255) NOT NULL,
  `issued7` date NOT NULL,
  `returned7` date NOT NULL,
  `subj8` varchar(255) NOT NULL,
  `issued8` date NOT NULL,
  `returned8` date NOT NULL,
  `subj9` varchar(255) NOT NULL,
  `issued9` date NOT NULL,
  `returned9` date NOT NULL,
  `subj10` varchar(255) NOT NULL,
  `issued10` date NOT NULL,
  `returned10` date NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_id`, `name`, `username`, `password`, `section`) VALUES
(1, 'Jay-R de Leon', 'jayr', 'jayr', 'Canva'),
(2, 'Ria May Sevilla', 'ria', 'ria', 'Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'Rolaida', 'Sonza'),
(2, 'qwe', 'qwe', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `logout_date` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learners`
--
ALTER TABLE `learners`
  ADD PRIMARY KEY (`lrn`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
