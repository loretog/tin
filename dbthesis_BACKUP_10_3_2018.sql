-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:18 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbthesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` bigint(20) NOT NULL,
  `college_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`) VALUES
(14, 'CASs'),
(15, 'COE'),
(16, 'CEA'),
(18, 'CIT'),
(21, 'ICT'),
(22, 'CAS'),
(23, 'CEA');

-- --------------------------------------------------------

--
-- Table structure for table `columns`
--

CREATE TABLE `columns` (
  `columns_id` int(20) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `part_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `columns`
--

INSERT INTO `columns` (`columns_id`, `parent_id`, `title`, `part_id`) VALUES
(11, 0, 'yyyuuuu', NULL),
(16, 0, 'desired learning outcomes', NULL),
(17, 0, 'Course Content/Subject Matter', NULL),
(18, 0, 'Textbooks/Referrences', NULL),
(19, 0, 'Teaching and Learning Activities (ATs)', NULL),
(71, 0, 'course content/subject matter', 12),
(72, 0, 'Teaching and Learning Activities (ATs)', 12),
(75, 0, 'asd', 10),
(76, 0, 'asds', 10),
(77, 0, 'Teaching and Learning Activities (ATs)', 11),
(78, 0, 'desired learning outcomes', 11),
(79, 0, 'textbooks/referrences', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `usersubject_id` int(11) DEFAULT NULL,
  `user_id` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` bigint(20) NOT NULL,
  `dept_id` bigint(20) DEFAULT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `dept_id`, `course_name`, `course_description`) VALUES
(7, 13, 'BSIF', 'oolpplok'),
(8, 16, 'xxxx', 'xxx'),
(9, 24, 'ddd', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` bigint(20) NOT NULL,
  `college_id` bigint(20) DEFAULT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `college_id`, `dept_name`) VALUES
(13, 14, 'Computer'),
(16, 16, 'Architecture'),
(23, 14, 'vcsvsdv'),
(24, 14, 'dfsdf'),
(26, 16, 'Architecture'),
(27, 15, 'Education'),
(28, 16, 'Architecture'),
(29, 16, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `parts_id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `number` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`parts_id`, `title`, `number`) VALUES
(3, 'University Vision, Mission, Goals', 'I'),
(4, 'Program/Degree', 'II'),
(5, 'Program/Degree Outcomes', 'III'),
(6, 'Program Number and Title', 'IV'),
(7, 'Course Pre-requisite', 'V'),
(8, 'Course Credit/Units', 'VI'),
(9, 'Year/Semester Offered', 'VII'),
(10, 'Course Description', 'IX'),
(11, 'Learning Plan', 'X'),
(12, 'Course Requirements', 'XI'),
(13, 'Criteria For Grading', 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `part_content`
--

CREATE TABLE `part_content` (
  `pc_id` int(11) NOT NULL,
  `usersubject_id` int(11) DEFAULT NULL,
  `parts_id` int(11) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part_content`
--

INSERT INTO `part_content` (`pc_id`, `usersubject_id`, `parts_id`, `content`) VALUES
(8, 255, 3, 'Core Values: Integrity, Commitment, Accountable, Responsiveness, Excellence '),
(9, 255, 3, 'Vision: ISAT U as a leading science and Technology University in Southeast Asia by 2030.'),
(11, 255, 4, 'tttttttttttttttttttttttttttttttttttttttttttttttt'),
(12, 255, 3, 'BCBBVEWUTwraaAWRYRYAryrysrusd'),
(13, 255, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `signatories`
--

CREATE TABLE `signatories` (
  `sig_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signatories`
--

INSERT INTO `signatories` (`sig_id`, `designation`, `position`) VALUES
(1, 'Noted By', 'VPAA'),
(2, 'lllllll', 'sada'),
(3, 'lllllll', 'dean'),
(5, 'oooooooiiupop', 'ppppppppppp'),
(6, 'tttttt', 'aaaaa'),
(7, '', 'facutly');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` bigint(20) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_code`, `subject_description`) VALUES
(7, 'Web Engineering', 'ICT30', 'asd asd as');

-- --------------------------------------------------------

--
-- Table structure for table `subjectcourse`
--

CREATE TABLE `subjectcourse` (
  `subjectcourse_id` bigint(20) NOT NULL,
  `school_year` varchar(10) NOT NULL,
  `subject_id` bigint(20) DEFAULT NULL,
  `course_id` bigint(20) DEFAULT NULL,
  `semester` varchar(25) NOT NULL,
  `year_level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectcourse`
--

INSERT INTO `subjectcourse` (`subjectcourse_id`, `school_year`, `subject_id`, `course_id`, `semester`, `year_level`) VALUES
(16, '2018 - 201', 7, 7, '1st semester', '1st year'),
(17, '2019 - 202', 7, 9, 'summer', '2nd year'),
(18, '2026 - 202', 7, 8, '2nd semester', '3rd year');

-- --------------------------------------------------------

--
-- Table structure for table `subjectsignatories`
--

CREATE TABLE `subjectsignatories` (
  `ss_id` int(11) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `sig_id` int(11) DEFAULT NULL,
  `usersubject_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `units_id` int(11) NOT NULL,
  `usersubject_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`units_id`, `usersubject_id`, `title`) VALUES
(1, 255, 'lol'),
(2, 255, 'iuutdkll'),
(4, 255, 'rrr'),
(5, 258, 'ttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `unit_column`
--

CREATE TABLE `unit_column` (
  `uc_id` int(11) NOT NULL,
  `columns_id` int(11) DEFAULT NULL,
  `units_id` int(11) DEFAULT NULL,
  `unit_number` varchar(5) NOT NULL,
  `content` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `dept_id` bigint(20) DEFAULT NULL,
  `UserName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `idno` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(2) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `utype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `dept_id`, `UserName`, `password`, `idno`, `position`, `fname`, `mname`, `lname`, `utype`) VALUES
(73, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-1051-B', '', 'admin', 'ad', 'admin', 'admin'),
(74, NULL, 'jason', '31aaa54a5b9cbccf21c0efd8c225a123', '12345', '', 'Jason', 'O.', 'Padilla', ''),
(81, NULL, 'tin', '2cb1b780138bc273459232edda0e4b96', '2015-1061-A', '', 'ma. christine', 'C.', 'cababada', ''),
(82, 13, 'test', '098f6bcd4621d373cade4e832627b4f6', '', '', '', '', '', 'admin'),
(83, NULL, 'alpha', '2c1743a391305fbf367df8e4f069f9f9', '123456', '', 'abc', 'de', 'ghi', 'user'),
(84, NULL, 'lunes', '4e5c18e09ebf3542e2e540e6c25b0f71', '0987', '', 'lmn', 'op', 'rst', 'user'),
(87, NULL, 'naddy', 'f6e3e7724521d5b8019f094b06fd4083', '12345', '', 'nad', 'A.', 'jardeleza', 'faculty'),
(89, NULL, 'kkk', 'cb42e130d1471239a27fca6228094f0e', '1234ba', '', 'sheila', 'O.', 'kris', 'depthead'),
(90, NULL, 'nad', '938a800650dda9e8aba505177c4cc6bd', '1234ba', '', 'nadianne', 'A.', 'jardeleza', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `usersubject`
--

CREATE TABLE `usersubject` (
  `usersubject_id` int(11) NOT NULL,
  `subjectcourse_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `school_year` varchar(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `revision_number` varchar(20) NOT NULL,
  `effective_date` datetime NOT NULL,
  `document_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersubject`
--

INSERT INTO `usersubject` (`usersubject_id`, `subjectcourse_id`, `user_id`, `semester`, `school_year`, `title`, `revision_number`, `effective_date`, `document_code`) VALUES
(248, 16, 73, '2nd semester', '2018 - 2020', 'ppppp', '44444', '2018-07-19 00:00:00', ' asd1234'),
(249, 16, 73, '1st semester', '2018 - 2019', 'xxxxxxxxxxxxxxx', '1111111111', '0000-00-00 00:00:00', ' '),
(251, 16, 73, 'summer', '2026 - 2027', 'title', '44444', '2018-07-19 00:00:00', '123112333 '),
(252, 16, 81, '2nd semester', '2027 - 2028', 'uytrewsdcvbn', '11111111111111', '2018-07-20 00:00:00', '6666666666 '),
(253, 17, 74, '2nd semester', '2019 - 2020', '', '11111111111111', '2018-07-20 00:00:00', 'ry-876-yyuu '),
(254, 17, 83, '2nd Semester', '2027 - 2028', 'yyoooouuttrlkam;k', '44444444444433333333', '2018-07-22 00:00:00', '3455555'),
(255, 17, 87, '2nd semester', '2018 - 2019', 'lol', '11111111111111', '2018-07-23 00:00:00', '3333333333 '),
(257, 17, 74, '2nd semester', '2019 - 2020', 'ppppp', '44444', '2018-07-23 00:00:00', '555555 '),
(258, 17, 87, '1st semester', '2018 - 2019', 'xxxxxxxxxxxxx', '123123123123', '2018-07-24 00:00:00', '3333 '),
(259, 18, 87, '1st semester', '2018 - 2019', 'dfghdfh', 'fhdfhgdf', '2018-07-23 00:00:00', '35354 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`columns_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `usersubject_id` (`usersubject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`parts_id`);

--
-- Indexes for table `part_content`
--
ALTER TABLE `part_content`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `parts_id` (`parts_id`),
  ADD KEY `usersubject_id` (`usersubject_id`);

--
-- Indexes for table `signatories`
--
ALTER TABLE `signatories`
  ADD PRIMARY KEY (`sig_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subjectcourse`
--
ALTER TABLE `subjectcourse`
  ADD PRIMARY KEY (`subjectcourse_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subjectsignatories`
--
ALTER TABLE `subjectsignatories`
  ADD PRIMARY KEY (`ss_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sig_id` (`sig_id`),
  ADD KEY `usersubject_id` (`usersubject_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`units_id`),
  ADD KEY `usersubject_id` (`usersubject_id`);

--
-- Indexes for table `unit_column`
--
ALTER TABLE `unit_column`
  ADD PRIMARY KEY (`uc_id`),
  ADD KEY `columns_id` (`columns_id`),
  ADD KEY `units_id` (`units_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `usersubject`
--
ALTER TABLE `usersubject`
  ADD PRIMARY KEY (`usersubject_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subjectcourse_id` (`subjectcourse_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `columns`
--
ALTER TABLE `columns`
  MODIFY `columns_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `parts_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `part_content`
--
ALTER TABLE `part_content`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `signatories`
--
ALTER TABLE `signatories`
  MODIFY `sig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subjectcourse`
--
ALTER TABLE `subjectcourse`
  MODIFY `subjectcourse_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subjectsignatories`
--
ALTER TABLE `subjectsignatories`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `units_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `unit_column`
--
ALTER TABLE `unit_column`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `usersubject`
--
ALTER TABLE `usersubject`
  MODIFY `usersubject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `columns`
--
ALTER TABLE `columns`
  ADD CONSTRAINT `columns_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `parts` (`parts_id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`usersubject_id`) REFERENCES `usersubject` (`usersubject_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `part_content`
--
ALTER TABLE `part_content`
  ADD CONSTRAINT `part_content_ibfk_2` FOREIGN KEY (`parts_id`) REFERENCES `parts` (`parts_id`),
  ADD CONSTRAINT `part_content_ibfk_3` FOREIGN KEY (`usersubject_id`) REFERENCES `usersubject` (`usersubject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjectcourse`
--
ALTER TABLE `subjectcourse`
  ADD CONSTRAINT `subjectcourse_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `subjectcourse_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `subjectsignatories`
--
ALTER TABLE `subjectsignatories`
  ADD CONSTRAINT `subjectsignatories_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subjectsignatories_ibfk_7` FOREIGN KEY (`sig_id`) REFERENCES `signatories` (`sig_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subjectsignatories_ibfk_8` FOREIGN KEY (`usersubject_id`) REFERENCES `usersubject` (`usersubject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`usersubject_id`) REFERENCES `usersubject` (`usersubject_id`);

--
-- Constraints for table `unit_column`
--
ALTER TABLE `unit_column`
  ADD CONSTRAINT `unit_column_ibfk_1` FOREIGN KEY (`columns_id`) REFERENCES `columns` (`columns_id`),
  ADD CONSTRAINT `unit_column_ibfk_2` FOREIGN KEY (`units_id`) REFERENCES `units` (`units_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `usersubject`
--
ALTER TABLE `usersubject`
  ADD CONSTRAINT `usersubject_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `usersubject_ibfk_3` FOREIGN KEY (`subjectcourse_id`) REFERENCES `subjectcourse` (`subjectcourse_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
