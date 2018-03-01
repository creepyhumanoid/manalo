-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 02:27 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpetgender`
--

CREATE TABLE `tblpetgender` (
  `ID` int(11) NOT NULL,
  `gender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpetgender`
--

INSERT INTO `tblpetgender` (`ID`, `gender`) VALUES
(1, 'female'),
(2, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tblpets`
--

CREATE TABLE `tblpets` (
  `ID` int(11) NOT NULL,
  `pet_owner_fn` varchar(25) NOT NULL,
  `pet_owner_mi` varchar(2) NOT NULL,
  `pet_owner_ln` varchar(25) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_gender_id` int(11) NOT NULL,
  `pet_type_id` int(11) NOT NULL,
  `pet_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpets`
--

INSERT INTO `tblpets` (`ID`, `pet_owner_fn`, `pet_owner_mi`, `pet_owner_ln`, `pet_name`, `pet_gender_id`, `pet_type_id`, `pet_status_id`) VALUES
(1, 'Jam', 'A.', 'Tolentino', 'Chloe', 2, 3, 2),
(2, 'Percian', 'C.', 'Borja', 'Browny', 1, 4, 2),
(3, 'Richmon', 'L.', 'Carabeo', 'Andre', 2, 6, 1),
(4, 'Alecs ', 'A.', 'Fullero', 'Marwin', 2, 1, 1),
(5, 'Windell', 'A.', 'Llamasares', 'Kenneth', 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblpettype`
--

CREATE TABLE `tblpettype` (
  `ID` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpettype`
--

INSERT INTO `tblpettype` (`ID`, `type`) VALUES
(1, 'bird'),
(2, 'bunny'),
(3, 'cat'),
(4, 'dog'),
(5, 'fish'),
(6, 'hamster');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `ID` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstatus`
--

INSERT INTO `tblstatus` (`ID`, `status`) VALUES
(1, 'deleted'),
(2, 'registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpetgender`
--
ALTER TABLE `tblpetgender`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpets`
--
ALTER TABLE `tblpets`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpettype`
--
ALTER TABLE `tblpettype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpetgender`
--
ALTER TABLE `tblpetgender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpets`
--
ALTER TABLE `tblpets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpettype`
--
ALTER TABLE `tblpettype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
