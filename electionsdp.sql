-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2024 at 12:42 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electionsdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistantsecretary`
--

CREATE TABLE `assistantsecretary` (
  `assid` int(10) NOT NULL,
  `canid` int(10) NOT NULL,
  `cannam` varchar(25) NOT NULL,
  `stuid` int(10) NOT NULL,
  `Whatyourchoicecandasst` varchar(100) NOT NULL,
  `electiondate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assistantsecretary`
--

INSERT INTO `assistantsecretary` (`assid`, `canid`, `cannam`, `stuid`, `Whatyourchoicecandasst`, `electiondate`) VALUES
(10, 300, 'مي', 15, 'نعم للترشح', '2024-07-12'),
(11, 700, 'وليد سعد	', 15, 'نعم ', '2024-07-01'),
(12, 300, 'نجاح طه النحاس	', 16, 'نعم للترشح', '2024-07-02'),
(13, 700, 'وليد سعد', 19, ' نعم للترشح لاجل المتعه', '2024-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `canid` int(10) NOT NULL,
  `cannam` varchar(25) NOT NULL,
  `candnotes` varchar(100) NOT NULL,
  `electsymbol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`canid`, `cannam`, `candnotes`, `electsymbol`) VALUES
(100, 'محمد الشعراوي ', '\r\nمرشح الامين العام ', 'الهلال'),
(200, 'مازن وائل', 'مرشح الامين العام\r\n', 'الحصان'),
(300, 'نجاح طه النحاس', 'مرشح مساعد الامين العام', 'الوردة'),
(400, 'منير صالح', 'مرشح الامين العام ', 'النجمة'),
(500, 'محمود عبدالعظيم', 'مرشح الامين العام ', 'نخلة'),
(600, 'مريم محمد ', 'مرشح الامين المساعد\r\n', 'نجفه'),
(700, 'وليد سعد', 'مرشح الامين المساعد\r\n', 'مفتاح');

-- --------------------------------------------------------

--
-- Table structure for table `secretarygeneral`
--

CREATE TABLE `secretarygeneral` (
  `secid` int(10) NOT NULL,
  `canid` int(10) NOT NULL,
  `cannam` varchar(25) NOT NULL,
  `stuid` int(10) NOT NULL,
  `Whatyourchoicecandidate` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `electiondate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secretarygeneral`
--

INSERT INTO `secretarygeneral` (`secid`, `canid`, `cannam`, `stuid`, `Whatyourchoicecandidate`, `electiondate`) VALUES
(8, 100, 'محمد الشعراوي', 15, 'نعم للترشح', '2024-07-01'),
(9, 200, 'مازن وائل	', 18, 'نعم للترشح', '2024-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` int(10) NOT NULL,
  `stuname` varchar(30) NOT NULL,
  `stupass` varchar(30) NOT NULL,
  `idnum` varchar(14) NOT NULL,
  `stutil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `stuname`, `stupass`, `idnum`, `stutil`) VALUES
(15, 'Mohmed elshaarawy', '123', '', '01017684340'),
(16, 'نجيب محمد', '123', '', '123123123'),
(17, 'كريم', '1234', '', '0123456789'),
(18, 'كارم', '1234', '', '0123456789'),
(19, 'zeyad tarek', '1020304050@Zeyad', '', '01062113006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistantsecretary`
--
ALTER TABLE `assistantsecretary`
  ADD PRIMARY KEY (`assid`),
  ADD KEY `assid` (`assid`),
  ADD KEY `canid` (`canid`),
  ADD KEY `stuid` (`stuid`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`canid`);

--
-- Indexes for table `secretarygeneral`
--
ALTER TABLE `secretarygeneral`
  ADD PRIMARY KEY (`secid`),
  ADD KEY `canid` (`canid`),
  ADD KEY `secid` (`secid`),
  ADD KEY `stuid` (`stuid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`),
  ADD UNIQUE KEY `stuid` (`stuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistantsecretary`
--
ALTER TABLE `assistantsecretary`
  MODIFY `assid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `secretarygeneral`
--
ALTER TABLE `secretarygeneral`
  MODIFY `secid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assistantsecretary`
--
ALTER TABLE `assistantsecretary`
  ADD CONSTRAINT `candidates_ibfk_3` FOREIGN KEY (`canid`) REFERENCES `candidates` (`canid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `secretarygeneral`
--
ALTER TABLE `secretarygeneral`
  ADD CONSTRAINT `candidates_ibfk_1` FOREIGN KEY (`canid`) REFERENCES `candidates` (`canid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
