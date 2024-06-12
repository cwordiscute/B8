-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 09:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b8`
--

-- --------------------------------------------------------

--
-- Table structure for table `utisak`
--

CREATE TABLE `utisak` (
  `Id` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Komentar` varchar(200) NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utisak`
--

INSERT INTO `utisak` (`Id`, `Ime`, `Email`, `Komentar`, `Datum`) VALUES
(1, 'Nikola Tesla', 'tesla@gmail.com', 'Srecno na ispitu!', '2024-05-25 19:50:02'),
(2, 'Mihajlo Pupin', 'pupin@gmail.com', 'Samo napred!', '2024-05-25 19:50:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utisak`
--
ALTER TABLE `utisak`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utisak`
--
ALTER TABLE `utisak`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
