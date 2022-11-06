
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 05:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL COMMENT 'ISBN; unique',
  `name` varchar(50) NOT NULL COMMENT 'Title of Book',
  `author_name` varchar(50) NOT NULL COMMENT 'Author of Book',
  `course` varchar(50) NOT NULL COMMENT 'Associated Course',
  `number_of_copies` int(3) NOT NULL COMMENT 'number of copies of every book'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `author_name`, `course`, `number_of_copies`) VALUES
(2, 'Calculus', 'Math Matt', 'Math', 0),
(3, 'maths101', 'mathman', 'math', 10);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(3) NOT NULL COMMENT 'unique',
  `course_name` varchar(255) NOT NULL COMMENT 'subject name',
  `course_book` varchar(255) NOT NULL COMMENT 'courses'' books'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_book`) VALUES
(1, 'science', 'science101'),
(2, 'math', 'math101'),
(3, 'computer', 'computer101');

-- --------------------------------------------------------

--
-- Table structure for table `course_books`
--

CREATE TABLE `course_books` (
  `course_books` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_books`
--

INSERT INTO `course_books` (`course_books`, `course_id`, `book_id`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'unique for every user',
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL COMMENT 'students email address',
  `address` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL COMMENT 'students courses',
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `address`, `courses`, `user_type`) VALUES
(1, 'Tester', '', 'Arun', 'Markandu', '', '', '', 'Student'),
(2, 'Bookman', '', 'Bob', 'Cob', '', '', '', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `users_books`
--

CREATE TABLE `users_books` (
  `users_books` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_courses`
--

CREATE TABLE `users_courses` (
  `users_courses` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

CREATE table `feedback` (
	`feedback_id` int(11) NOT NULL,
	`email` varchar(255) NOT NULL COMMENT 'students email address',
	`name` varchar(255) NOT NULL,
	`feedback` varchar(255) NOT NULL COMMENT 'students feedback',
	`date_sent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `feedback` (feedback_id, email, name, feedback, date_sent) VALUES
(1, 'arun2000markandU@gmail.com', 'arun', 'feedback test:Site can be improved', '2022-11-06');


--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_books`
--
ALTER TABLE `course_books`
  ADD PRIMARY KEY (`course_books`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_books`
--
ALTER TABLE `users_books`
  ADD PRIMARY KEY (`users_books`);

--
-- Indexes for table `users_courses`
--
ALTER TABLE `users_courses`
  ADD PRIMARY KEY (`users_courses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'unique', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_books`
--
ALTER TABLE `course_books`
  MODIFY `course_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_books`
--
ALTER TABLE `users_books`
  MODIFY `users_books` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_courses`
--
ALTER TABLE `users_courses`
  MODIFY `users_courses` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
