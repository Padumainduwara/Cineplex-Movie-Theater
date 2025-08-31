-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2024 at 04:47 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cineplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_type`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin1', 'admin1@gmail.com', '1212'),
(2, 'admin', 'admin2', 'admin2@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `yourName` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `time` time NOT NULL,
  `seats` int NOT NULL,
  `selectedSeats` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `yourName`, `title`, `booking_date`, `time`, `seats`, `selectedSeats`) VALUES
(17, 'qsqwa', 'The Covenant 2023', '2024-03-14', '07:17:00', 12, '2, 7, 12, 17, 22'),
(2, 'Indu', 'Forgotten 2017', '2024-02-07', '16:40:00', 12, '3, 8, 13, 18, 23'),
(16, 'aaaaaaa', 'Solo 2018', '2024-02-16', '16:32:00', 16, '2, 3, 7, 8, 12, 13, 17, 18, 22, 23'),
(20, 'Xccx', 'XXXX', '2024-03-08', '09:58:00', 10, '2, 3, 7, 8, 12, 13, 17, 18, 22, 23'),
(14, 'Abc', 'Law of Return 2023', '2024-02-05', '16:32:00', 11, '3, 8, 13, 18, 23'),
(11, 'the', 'Solo 2018', '2024-02-03', '13:55:00', 1, '1, 2, 6, 7'),
(18, 'AsAs', 'AABBCC', '2024-03-07', '06:41:00', 10, '2, 3, 7, 8, 12, 13, 17, 18, 22, 23'),
(19, 'Abc', 'The Covenant 2023', '2024-03-22', '08:07:00', 11, '4, 24');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `email`, `password`, `user_type`) VALUES
('Paduma', 'pad@gmail.com', '1111', 'customer'),
('Paduma', 'paduma02@gmail.com', '1122', 'customer'),
('Paduma', 'cus1@gmail.com', '1212', 'customer'),
('Paduma', 'cus2@gmail.com', '1111', 'customer'),
('Paduma', 'cus3@gmail.com', '1122', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `duration` int NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `genre`, `release_date`, `duration`) VALUES
(1, 'The Covenant 2023', 'Action, Drama, Triller', '2024-02-29', 120),
(2, 'Solo 2018', 'Action, Drama, Triller', '2024-02-09', 60),
(3, 'Forgotten 2017', 'Crime, Mystery, Triller', '2024-02-08', 100),
(5, 'Law of Return 2023', 'Action, Drama, War', '2024-02-15', 60),
(9, 'Animal', 'Action, Drama, Triller', '2024-02-01', 120),
(14, 'XXXX', 'XXXX', '2024-03-13', 120),
(11, 'AABBCC', 'Action, Drama, Triller', '2024-03-07', 120),
(12, 'A1A2aa', 'Action, Drama, Triller', '2024-03-06', 120),
(13, 'wewe', 'Action, Drama, Triller', '2024-03-05', 60);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rating` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`email`, `password`, `user_type`) VALUES
('staff1@gmail.com', '1111', 'staff'),
('staff2@gmail.com', '1234', 'staff');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
