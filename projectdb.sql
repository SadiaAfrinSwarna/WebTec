-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 10:35 AM
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
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `ID` int(11) NOT NULL,
  `auname` varchar(55) NOT NULL,
  `aname` varchar(55) NOT NULL,
  `aemail` varchar(55) NOT NULL,
  `apass` varchar(55) NOT NULL,
  `aconpass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`ID`, `auname`, `aname`, `aemail`, `apass`, `aconpass`) VALUES
(1, '', 'Fahim', 'fferdous15@gmail.com', '123456', '123456'),
(2, 'john007', 'John', 'john@gmail.com', '123456', ''),
(3, 'root', 'Fahim', 'fferdous15@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `headteacher`
--

CREATE TABLE `headteacher` (
  `ID` int(11) NOT NULL,
  `huname` varchar(55) NOT NULL,
  `hname` varchar(55) NOT NULL,
  `hemail` varchar(55) NOT NULL,
  `hpass` varchar(55) NOT NULL,
  `hconpass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headteacher`
--

INSERT INTO `headteacher` (`ID`, `huname`, `hname`, `hemail`, `hpass`, `hconpass`) VALUES
(1, '', 'Fahim', 'fferdous15@gmail.com', '123456', '123456'),
(2, 'fferdous15', 'Fahim', 'fferdous15@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `interests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `firstname`, `email`, `address`, `dob`, `gender`, `profession`, `interests`) VALUES
('hsa10', '123456', 'bob', 'sazzad123@aiub.edu', 'aaa', '1990-12-23', 'male', 'Academician', 'music'),
('jhon', '123', 'jhon', 'jhon@email.com', 'bashundhara', '1990-12-23', 'male', 'student', 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `tuname` varchar(55) NOT NULL,
  `tname` varchar(55) NOT NULL,
  `temail` varchar(55) NOT NULL,
  `tpass` varchar(55) NOT NULL,
  `tconpass` varchar(55) NOT NULL,
  `tgender` varchar(10) NOT NULL,
  `tphone` int(15) NOT NULL,
  `taddress` varchar(55) NOT NULL,
  `tdob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `tuname`, `tname`, `temail`, `tpass`, `tconpass`, `tgender`, `tphone`, `taddress`, `tdob`) VALUES
(1, '', 'Fahim', 'fferdous15@gmail.com', '1234', '123456', 'male', 1936112964, 'Rajbari', '2021-04-12'),
(2, '', 'alice', 'alice@gmail.com', '1234', '', '', 0, '', ''),
(3, '', 'Fahim', 'fferdous15@gmail.com', '1234', '', 'male', 1936112964, 'Rajbari', '2021-04-21'),
(4, 'fferdous15', 'Fahim Ferdous', 'fferdous15@gmail.com', '1234', '', 'male', 1936112964, 'Rajbari', '2021-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `headteacher`
--
ALTER TABLE `headteacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `headteacher`
--
ALTER TABLE `headteacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
