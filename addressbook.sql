-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 06:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `clientdata`
-- (See below for the actual view)
--
CREATE TABLE `clientdata` (
`data` varchar(300)
,`fname` varchar(50)
,`lname` varchar(50)
,`email` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE `contactlist` (
  `cnt` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pcode` int(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactlist`
--

INSERT INTO `contactlist` (`cnt`, `uid`, `cname`, `contact`, `street`, `city`, `state`, `pcode`, `country`) VALUES
(27, 'afnankhan@gmail.com', 'Hemant', '1234567890', 'Vidya knowledge park', 'meerut', 'Uttar Pradesh', 123476, 'india'),
(33, 'afnansheikh96@gmail.com', 'Afnan Sheikh', '8449098808', '437, Bara bazar, lalkurti, meerut cantt', 'Meerut', 'Uttar Pradesh', 250001, 'India'),
(26, 'afnankhan@gmail.com', 'Hemant', '8006641000', 'connaught place', 'delhi', 'Delhi', 123476, 'India'),
(25, 'afnankhan@gmail.com', 'Abhinav', '9876543210', 'London Street', 'London', 'Barking and Dagenham', 123476, 'United Kingdom'),
(29, 'afnankhan@gmail.com', 'Madhur', '9760399169', '32 welinghton street', 'London', 'City of London', 123476, 'United Kingdom'),
(32, 'abhinav.cse12@gmail.com', 'Abhinav1', '9808156144', 'Vidya Knowledge Park', 'Meerut', 'India', 244001, 'India'),
(31, 'afnankhan@gmail.com', 'Sapan', '9808156144', '34 Lane Ave, Bronx', '.', 'New York', 104612, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` varchar(200) NOT NULL,
  `data` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `data`) VALUES
('varuntyagi@gmail.com', 'Nokia'),
('swaastik000@gmail.com', 'Moto G12');

-- --------------------------------------------------------

--
-- Table structure for table `padometer`
--

CREATE TABLE `padometer` (
  `email` varchar(30) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `stepcount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `cnt` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cnt`, `fname`, `lname`, `email`, `pass`) VALUES
(13, 'Abhinav', 'Bhatnagar', 'abhinav.cse12@gmail.com', '9e3ffe6fcc5afee5f62844bdb78c8bfc'),
(14, 'Afnan', 'Sheikh', 'afnansheikh96@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'Afnan1', 'Khan', 'afnankhan@gmail.com', '0947204f0657b1a09ed7ccaa9af37194');

-- --------------------------------------------------------

--
-- Structure for view `clientdata`
--
DROP TABLE IF EXISTS `clientdata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clientdata`  AS  select `data`.`data` AS `data`,`registration`.`fname` AS `fname`,`registration`.`lname` AS `lname`,`registration`.`email` AS `email` from (`data` join `registration`) where (`data`.`id` = `registration`.`email`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactlist`
--
ALTER TABLE `contactlist`
  ADD PRIMARY KEY (`cnt`),
  ADD KEY `myname` (`cname`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`cnt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactlist`
--
ALTER TABLE `contactlist`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `cnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
