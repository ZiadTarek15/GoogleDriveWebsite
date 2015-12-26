-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 04:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drive_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_staff`
--

CREATE TABLE IF NOT EXISTS `academic_staff` (
  `as_id` int(20) NOT NULL AUTO_INCREMENT,
  `as_pass` varchar(10) DEFAULT NULL,
  `as_email` varchar(30) DEFAULT NULL,
  `fst_name` varchar(20) NOT NULL,
  `lst_name` varchar(20) NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `course_code` int(20) NOT NULL ,
  `as_id` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`course_code`,`as_id`),
  KEY `fk_dep2` (`as_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `ann_id` int(20) NOT NULL DEFAULT '0',
  `description` mediumtext NOT NULL,
  `date` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`course_code`,`ann_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `course_name` varchar(15) NOT NULL,
  `dep_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`course_code`),
  KEY `fk_course` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int(20) NOT NULL DEFAULT '0',
  `dep_name` varchar(10) NOT NULL,
  `year` int(10) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `as_id` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`course_code`,`as_id`),
  KEY `pk_follow2` (`as_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `graduation_project`
--

CREATE TABLE IF NOT EXISTS `graduation_project` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `doctor` varchar(20) NOT NULL,
  `teacher_ass` varchar(20) DEFAULT NULL,
  `sponsor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `mat_id` int(20) NOT NULL AUTO_INCREMENT,
  `mat_name` varchar(20) NOT NULL,
  `mat_content` varchar(2000) NOT NULL,
  `mat_type` varchar(10) DEFAULT NULL,
  `mat_size` int(10) DEFAULT NULL,
  `last_mod` varchar(15) DEFAULT NULL,
  `course_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`mat_id`),
  KEY `fk_mat` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE IF NOT EXISTS `notify` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `ann_id` int(20) NOT NULL DEFAULT '0',
  `as_id` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`course_code`,`ann_id`,`as_id`),
  KEY `fk_notify2` (`as_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE IF NOT EXISTS `team_member` (
  `mobile_no` int(12) NOT NULL DEFAULT '0',
  `mem_name` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `course_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`mobile_no`),
  KEY `fk_tm` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `course_code` int(6) NOT NULL DEFAULT '0',
  `as_id` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`course_code`,`as_id`),
  KEY `pk_view2` (`as_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `fk_dep` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `fk_dep2` FOREIGN KEY (`as_id`) REFERENCES `academic_staff` (`as_id`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `fk_ann` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `fk_follow` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `pk_follow2` FOREIGN KEY (`as_id`) REFERENCES `academic_staff` (`as_id`);

--
-- Constraints for table `graduation_project`
--
ALTER TABLE `graduation_project`
  ADD CONSTRAINT `fk_gp` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `fk_mat` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `notify`
--
ALTER TABLE `notify`
  ADD CONSTRAINT `fk_notify` FOREIGN KEY (`course_code`, `ann_id`) REFERENCES `announcement` (`course_code`, `ann_id`),
  ADD CONSTRAINT `fk_notify2` FOREIGN KEY (`as_id`) REFERENCES `academic_staff` (`as_id`);

--
-- Constraints for table `team_member`
--
ALTER TABLE `team_member`
  ADD CONSTRAINT `fk_tm` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `fk_view` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`),
  ADD CONSTRAINT `pk_view2` FOREIGN KEY (`as_id`) REFERENCES `academic_staff` (`as_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
