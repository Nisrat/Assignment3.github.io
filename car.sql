-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 07:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `car_license` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`car_license`, `name`, `date`) VALUES
(0, 'rana', '2019-06-04'),
(11, 'raquel', '2016-06-04'),
(12, 'rafid', '2019-06-23'),
(123, 'rafid', '2019-06-23'),
(255, 'rasel', '2019-06-27'),
(7522, 'rafid', '2019-06-23'),
(12385, 'rasel', '2019-06-23'),
(147365, 'rafid', '2019-06-24'),
(323231, 'rasel', '2019-07-01'),
(357951, 'rafid', '2019-06-23'),
(446699, 'rafid', '2019-06-24'),
(447711, 'rasel', '2019-06-27'),
(654654, 'rasel', '2019-06-27'),
(807090, 'rasel', '2019-06-27'),
(908070, 'rasel', '2019-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`Name`) VALUES
('Rafid'),
('Rana'),
('Raquel'),
('Rasel'),
('Rimo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Adress` varchar(80) NOT NULL,
  `car_engine` int(11) NOT NULL,
  `car_license` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Phone`, `Adress`, `car_engine`, `car_license`) VALUES
('', '', '', 0, 0),
('Mahmudul Haque', '1521436216', 'baal', 45444, 11),
('Shakil', '015867', 'pata toli', 3691, 12),
('Rimo', '9575', 'Mogbazar', 756545, 123),
('Adittya Shohit', '01152143', 'Aftab', 14753, 255),
('Kez', '02', 'janiiiiii', 258369147, 5645),
('Mahmudul Haque', '15141312', 'Lalmai', 789, 7522),
('Mitus', '02147', 'jaaaan', 1971, 7864),
('mokhao', '554461', 'Banosree', 753594, 12385),
('Mitu', '02e', 'janiiiiiinaaa', 12147, 56405),
('ADi', '522', 'Mohakhali', 7852, 147365),
('Fatema', '01921227774', 'baridhara', 353516, 323231),
('Vota', '45', 'Aftab', 7788, 357951),
('Adittya', '302010', 'Farmgate', 77895, 446699),
('hafeeza', '456112', 'Kopaz', 4561593, 447711),
('Mahmudul Haque', '1521436216', 'baal', 147258, 654654),
('Rafsan', '01716404544', 'kakoli', 75395, 807090),
('Nurul', '3971', 'Khobis', 5555, 908070);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`car_license`,`name`),
  ADD KEY `b` (`name`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`car_license`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `a` FOREIGN KEY (`car_license`) REFERENCES `user` (`car_license`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `b` FOREIGN KEY (`name`) REFERENCES `mechanic` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
