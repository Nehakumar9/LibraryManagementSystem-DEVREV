-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 08:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logreg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `title`, `author`, `subject`, `publish_date`) VALUES
(1, 'Advances in Information Technology and Industry Applications', 'Dehuai Zeng', 'Information technology', '2012-12-04'),
(2, 'Blockchain for beginners', 'Scott Marks', 'Blockchain', '2017-08-14'),
(3, 'The C Programming Language', 'Brian Kernighan', 'C programming language', '1994-02-02'),
(4, 'Computer Architecture', 'David A Patterson', 'Computer Architecture', '2011-09-09'),
(5, 'Computer Networks', 'Andrew S. Tanenbaum', 'Computer Networks', '2023-01-22'),
(6, 'Software Engineering ', 'Ian Sommerville', 'Software Engineering ', '2023-06-06'),
(7, 'Operating System', 'Vijay Shukla', 'Operating System', '2007-04-11'),
(8, 'Digital Logic and Computer Design\r\n\r\n', 'Book by M. Morris Mano', 'Digital Logic Design', '2023-01-01'),
(9, 'Design and Analysis of Algorithms', 'S. Sridhar', 'Design and Analysis of Algorithms', '2023-12-15'),
(10, 'The Full Stack Web Developer', 'Christ Northwood', 'Web Technology', '2023-11-20'),
(11, 'Machine Learning For Absolute Beginners ', 'Oliver Theobald', 'Machine Learning', '2018-03-13'),
(12, 'Deep Learning with Python\r\n', 'François Chollet\r\n', 'Deep Learning', '2014-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '$2y$10$6fiVXW7ifQQRpVyt3HKipeSkIDUci0upx4TfgsAS.axC7BbTMrVA.'),
(2, 'abc', 'abc@gmail.com', '$2y$10$Cbe/eywcZGqzVQpF2gCZmOdeSmITwd93q5fgH8YfDearxhXBg1Rpe'),
(3, 'abc', 'abc@gmail.com', '$2y$10$jFt2Y1GxH/y2lFEKKDv0UutUeJDuuPLUOmPpK2mi0MSsDjwufWKN6'),
(4, 'user', 'user@gmail.com', '$2y$10$L1jcvG3XOUON5DBt6bpIS.OqUYMTy5L/gkjY9khY2PWKBS6J4nM.K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
