-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 03:09 PM
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
-- Database: `cadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `MovieID` int(11) NOT NULL,
  `MovieName` varchar(45) NOT NULL,
  `MovieLength` time NOT NULL,
  `MovieStart` time NOT NULL,
  `DateReleased` date NOT NULL,
  `Director` varchar(30) NOT NULL,
  `Genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`MovieID`, `MovieName`, `MovieLength`, `MovieStart`, `DateReleased`, `Director`, `Genre`) VALUES
(1, 'Spider-Man: No Way Home', '02:28:00', '15:15:00', '2021-12-15', 'Jon Watts', 'Superhero'),
(2, 'IT', '02:15:00', '17:45:00', '2017-09-08', 'Andres Muschietti', 'Horror'),
(3, 'Avengers: Infinity War', '02:29:00', '20:15:00', '2018-04-23', 'Joe Russo', 'Superhero'),
(4, 'Avengers: Endgame', '03:02:00', '22:45:00', '2019-04-25', 'Joe Russo', 'Superhero'),
(5, 'Doctor Strange', '01:55:00', '21:00:00', '2016-10-26', 'Scott Derrickson', 'Superhero'),
(18, 'Joker', '02:02:00', '16:30:00', '2019-10-04', 'Todd Phillips', 'Crime'),
(19, 'Deadpool', '01:48:00', '20:45:00', '2016-02-10', 'Tim Miller', 'Superhero'),
(20, 'Deadpool 2', '02:00:00', '22:45:00', '2018-05-01', 'David Leitch', 'Superhero'),
(21, 'The Conjuring', '01:52:00', '18:30:00', '2013-07-15', 'James Wan', 'Horror'),
(22, 'The Conjuring 2', '02:14:00', '19:45:00', '2016-06-13', 'James Wan', 'Horror');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MovieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `MovieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
