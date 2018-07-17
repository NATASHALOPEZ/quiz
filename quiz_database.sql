-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 05:11 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers_fun`
--

CREATE TABLE `answers_fun` (
  `aid` int(250) NOT NULL,
  `answer` varchar(2500) DEFAULT NULL,
  `q_number` int(250) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_fun`
--

INSERT INTO `answers_fun` (`aid`, `answer`, `q_number`, `correct`) VALUES
(1, 'Laughs', 1, 1),
(2, 'Farts', 1, 0),
(3, 'Sings', 1, 0),
(4, 'Sighs', 1, 0),
(5, 'Opens Fridge', 2, 1),
(6, 'Opens Window', 2, 0),
(7, 'Opens Closet', 2, 0),
(8, 'Opens Laptop', 2, 0),
(9, ' An army', 3, 1),
(10, 'A Blessing', 3, 0),
(11, 'Gross', 3, 0),
(12, 'A Team', 3, 0),
(13, 'A blessing', 4, 1),
(14, 'A mess', 4, 0),
(15, ' An unkindness', 4, 0),
(16, ' A murder', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `answers_lessfun`
--

CREATE TABLE `answers_lessfun` (
  `aid` int(250) NOT NULL,
  `answer` varchar(2500) DEFAULT NULL,
  `q_number` int(250) DEFAULT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers_lessfun`
--

INSERT INTO `answers_lessfun` (`aid`, `answer`, `q_number`, `correct`) VALUES
(1, 'Dom Perignon', 1, 1),
(2, 'John Wayne', 1, 0),
(3, 'Keanu Reeves', 1, 0),
(4, 'Berkshire', 1, 0),
(5, 'Lake Superior', 2, 1),
(6, 'Lake Infirior', 2, 0),
(7, 'Lake Redfish', 2, 0),
(8, 'Lake Sunrise', 2, 0),
(9, 'The Moon', 3, 1),
(10, 'The Sun', 3, 0),
(11, 'The Star', 3, 0),
(12, 'The Planet', 3, 0),
(13, ' A farrier', 4, 1),
(14, 'Birkenhead', 4, 0),
(15, 'Glass Key', 4, 0),
(16, 'Flowerdew', 4, 0),
(17, 'Louis Pasteur', 5, 1),
(18, 'Veronica', 5, 0),
(19, 'Peter Jackson', 5, 0),
(20, 'Hammer Horror', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions_fun`
--

CREATE TABLE `questions_fun` (
  `qid` int(250) NOT NULL,
  `question` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_fun`
--

INSERT INTO `questions_fun` (`qid`, `question`) VALUES
(1, 'The average person does what thirteen times a day?'),
(2, 'The Average American does what 22 times a day?'),
(3, 'What is a group of frogs known as?'),
(4, 'What is a group of unicorns known as?');

-- --------------------------------------------------------

--
-- Table structure for table `questions_lessfun`
--

CREATE TABLE `questions_lessfun` (
  `qid` int(250) UNSIGNED NOT NULL,
  `question` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_lessfun`
--

INSERT INTO `questions_lessfun` (`qid`, `question`) VALUES
(1, 'Who was the legendary Benedictine monk who invented champagne?'),
(2, 'Name the largest freshwater lake in the world?'),
(3, 'Where would you find the Sea of Tranquility?'),
(4, 'What is someone who shoes horses called?'),
(5, 'Who invented the rabies vaccination?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalquestions` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers_fun`
--
ALTER TABLE `answers_fun`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `answers_lessfun`
--
ALTER TABLE `answers_lessfun`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions_fun`
--
ALTER TABLE `questions_fun`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `questions_lessfun`
--
ALTER TABLE `questions_lessfun`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers_fun`
--
ALTER TABLE `answers_fun`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `answers_lessfun`
--
ALTER TABLE `answers_lessfun`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions_fun`
--
ALTER TABLE `questions_fun`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions_lessfun`
--
ALTER TABLE `questions_lessfun`
  MODIFY `qid` int(250) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
