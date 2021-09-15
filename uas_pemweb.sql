-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 03:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pemweb`
--
CREATE DATABASE IF NOT EXISTS `uas_pemweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uas_pemweb`;

-- --------------------------------------------------------

--
-- Table structure for table `file_user`
--

CREATE TABLE `file_user` (
  `fileID` int(11) NOT NULL,
  `uID` int(11) NOT NULL,
  `file` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_user`
--

INSERT INTO `file_user` (`fileID`, `uID`, `file`) VALUES
(79, 21, 'arsam_color_changer.png'),
(80, 21, 'IMG_20180630_195411.jpg'),
(81, 21, 'TB_OOP.zip'),
(86, 23, 'IMG_20160913_105322_HDR.jpg'),
(88, 23, 'IMG_20160928_195055.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `namaUser` varchar(100) NOT NULL,
  `jkUser` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `namaUser`, `jkUser`, `username`, `password`, `email`) VALUES
(1, 'dani', 'laki-laki', 'dani', '55b7e8b895d047537e672250dd781555', 'dani@gmail.com'),
(2, 'ana', 'laki-laki', 'ana', '276b6c4692e78d4799c12ada515bc3e4', 'ana@gmail.com'),
(16, 'ilham alfin', 'laki', 'ilham', '6eaa55e20824f73a9434813cadf2d486', 'ilham@gmail.com'),
(19, 'levani', 'perempuan', 'levani123', '43f981584b48328f6e2244e113186db0', 'levina@gmail.com'),
(20, 'joni', 'laki', 'jonijoni', '1c0ac25b077a885dc53d91b05b14544e', 'joni@gmail.com'),
(21, 'ilham alfin', 'perempuan', 'hamfin', 'fadb9957947ede58d340096e77713367', 'hamfin@gmail.com'),
(22, 'dadang', 'laki', 'dadang aron', 'f63f1ed278d0cb8f2ede661328779791', 'dadang@gmail.com'),
(23, 'handi nugroho', 'laki', 'handi', 'd06aab75b19db81f44975b164a5fe86f', 'handi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_user`
--
ALTER TABLE `file_user`
  ADD PRIMARY KEY (`fileID`),
  ADD KEY `uID` (`uID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_user`
--
ALTER TABLE `file_user`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_user`
--
ALTER TABLE `file_user`
  ADD CONSTRAINT `file_user_ibfk_1` FOREIGN KEY (`uID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
