-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AUTH_ID` int(11) NOT NULL,
  `AUTH_NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AUTH_ID`, `AUTH_NAME`) VALUES
(1, 'John Uffenbeck'),
(2, ' K M Bhurchandani'),
(3, 'A k Ray');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(8) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `LANGUAGE` varchar(20) NOT NULL,
  `PUBLISHER` varchar(30) DEFAULT NULL,
  `MRP` int(11) NOT NULL,
  `PUB_DATE` date NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `TITLE`, `LANGUAGE`, `PUBLISHER`, `MRP`, `PUB_DATE`, `QUANTITY`) VALUES
('CSC5011', '8086/8088 family: Design Programming and Interfacing', 'ENGLISH', 'Prentice Hall ', 4489, '2001-02-14', 2),
('CSC5012', 'Advanced Microprocessors and Peripheral', 'ENGLISH', 'Tata McGraw Hill', 715, '2017-07-01', 3),
('CSC5013', 'DATABASE SYSTEM CONCEPTS', 'ENGLISH', 'McGraw-Hill Education', 526, '2020-07-17', 5);

-- --------------------------------------------------------

--
-- Table structure for table `emplogin`
--

CREATE TABLE `emplogin` (
  `EMP_ID` varchar(8) NOT NULL,
  `PASS` int(11) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `CONTACT NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplogin`
--

INSERT INTO `emplogin` (`EMP_ID`, `PASS`, `EMAIL`, `CONTACT NO`) VALUES
('E01', 123, 'e01@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `employeee`
--

CREATE TABLE `employeee` (
  `EMP_ID` varchar(8) NOT NULL,
  `E_FNAME` varchar(10) NOT NULL,
  `E_MNAME` varchar(10) NOT NULL,
  `E_LNAME` varchar(10) NOT NULL,
  `E_DOB` date NOT NULL,
  `E_GENDER` varchar(1) NOT NULL,
  `E_ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeee`
--

INSERT INTO `employeee` (`EMP_ID`, `E_FNAME`, `E_MNAME`, `E_LNAME`, `E_DOB`, `E_GENDER`, `E_ADDRESS`) VALUES
('E01', 'Nikhil', 'Nikhil', 'Bhalerao', '1991-09-29', 'M', 'A301,SHIVAJI NAGAR,MH, India-422207 ');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE `issued_books` (
  `student_rollno` int(6) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `ISSUED_DATE` date NOT NULL,
  `RENEWED_DATE` date NOT NULL,
  `FINE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issued_books`
--

INSERT INTO `issued_books` (`student_rollno`, `ISBN`, `ISSUED_DATE`, `RENEWED_DATE`, `FINE`) VALUES
(100000, 'CSC5011', '2020-09-27', '2020-10-02', 10);

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `EMP_ID` varchar(8) NOT NULL,
  `student_rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`EMP_ID`, `student_rollno`) VALUES
('E01', 101617);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `student_rollno` int(6) NOT NULL,
  `student_password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_emailid` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `login_attempt` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`student_rollno`, `student_password`, `student_emailid`, `student_contact`, `login_attempt`) VALUES
(100000, '123456789', 'a@gmail.com', '9000000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_rollno` int(6) NOT NULL,
  `student_firstname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `student_middlename` varchar(20) CHARACTER SET latin1 NOT NULL,
  `student_lastname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `student_date_of_birth` date NOT NULL,
  `student_gender` varchar(8) CHARACTER SET latin1 NOT NULL,
  `student_bloodgroup` varchar(3) CHARACTER SET latin1 NOT NULL,
  `student_branch` varchar(50) CHARACTER SET latin1 NOT NULL,
  `student_semester` int(1) NOT NULL,
  `student_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `student_hostelite` varchar(5) CHARACTER SET latin1 NOT NULL,
  `student_hobbies` varchar(100) CHARACTER SET latin1 NOT NULL,
  `student_image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_rollno`, `student_firstname`, `student_middlename`, `student_lastname`, `student_date_of_birth`, `student_gender`, `student_bloodgroup`, `student_branch`, `student_semester`, `student_address`, `student_hostelite`, `student_hobbies`, `student_image`) VALUES
(100000, 'Test', 'Bench', 'User1', '1990-10-25', 'M', 'B', 'COMP', 5, 'sdagfyia', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `written`
--

CREATE TABLE `written` (
  `ISBN` varchar(8) NOT NULL,
  `AUTH_ID` decimal(11,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `written`
--

INSERT INTO `written` (`ISBN`, `AUTH_ID`) VALUES
('CSC5011', '3.750000'),
('CSC5012', '5.000000'),
('CSC5012', '6.250000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AUTH_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `emplogin`
--
ALTER TABLE `emplogin`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `employeee`
--
ALTER TABLE `employeee`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- Indexes for table `issued_books`
--
ALTER TABLE `issued_books`
  ADD KEY `ibfk` (`ISBN`),
  ADD KEY `issbk` (`student_rollno`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD KEY `mefk` (`EMP_ID`),
  ADD KEY `msfk` (`student_rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
