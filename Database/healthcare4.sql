-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 07:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare4`
--

-- --------------------------------------------------------

--
-- Table structure for table `glucose`
--

CREATE TABLE `glucose` (
  `id` int(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `glucose` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glucose`
--

INSERT INTO `glucose` (`id`, `time`, `date`, `glucose`) VALUES
(1, '3:10 AM', 'Nov 13  2018', '119.0 mg/dL'),
(2, '3:10 AM', 'Nov 13  2018', '119.0 mg/dL'),
(3, '3:10 AM', 'Nov 13  2018', '119.0 mg/dL'),
(4, '3:10 AM', 'Nov 13  2018', '119.0 mg/dL'),
(5, '3:10 AM', 'Nov 13  2018', '119.0 mg/dL');

-- --------------------------------------------------------

--
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `heart` float NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dt` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`heart`, `ts`, `dt`) VALUES
(72, '2018-11-26 06:53:44', '2018-11-26 12:53:44'),
(92, '2018-11-28 17:51:58', '2018-11-28 23:51:58'),
(118, '2018-11-28 17:52:55', '2018-11-28 23:52:55'),
(75, '2018-11-28 17:58:18', '2018-11-28 23:58:18'),
(99, '2018-11-28 18:05:41', '2018-11-29 00:05:41'),
(114, '2018-11-28 18:06:55', '2018-11-29 00:06:55'),
(62, '2018-11-28 18:08:32', '2018-11-29 00:08:32'),
(96, '2018-11-28 18:10:33', '2018-11-29 00:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `glucose`
--
ALTER TABLE `glucose`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `glucose`
--
ALTER TABLE `glucose`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
