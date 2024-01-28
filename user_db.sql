-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 04:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(50) NOT NULL,
  `flight_no` varchar(40) NOT NULL,
  `flight_name` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `origin` varchar(40) NOT NULL,
  `noofperson` int(40) NOT NULL,
  `class` varchar(40) NOT NULL DEFAULT 'class',
  `name` varchar(40) NOT NULL,
  `mobileno` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `flight_no`, `flight_name`, `destination`, `origin`, `noofperson`, `class`, `name`, `mobileno`, `email`, `date`) VALUES
(1, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', 'king@gmail.com', '2023-01-10'),
(2, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', 'king@gmail.com', '2023-01-10'),
(3, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', 'king@gmail.com', '2023-01-20'),
(4, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', 'king@gmail.com', '2023-01-20'),
(5, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', 'king@gmail.com', '2023-01-20'),
(6, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', 'king@gmail.com', '2023-01-20'),
(7, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', '', '2023-01-20'),
(8, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'Premium', 'king', '4234235434', '', '2023-01-20'),
(9, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'First_Class', 'king', '3075623498', '', '2023-01-21'),
(10, 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 2, 'Premium', 'king', '4234235434', '', '2023-03-08'),
(11, 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 2, 'Premium', 'king', '4234235434', '', '2023-03-08'),
(12, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', '', '2023-03-10'),
(13, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', '', '2023-03-10'),
(14, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', '', '2023-03-10'),
(15, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', '', '2023-03-10'),
(16, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'Premium', 'king', '3075623498', '', '2023-03-10'),
(17, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 1, 'Premium', 'John', '2352234223', '', '2023-03-15'),
(18, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 1, 'Premium', 'John', '2352234223', '', '2023-03-15'),
(19, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 1, 'Premium', 'king', '4234235434', '', '2023-03-09'),
(20, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 1, 'Premium', 'dinesh', '8765904321', '', '2023-03-08'),
(21, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 1, 'Premium', 'dinesh', '8765904321', '', '2023-03-08'),
(22, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 1, 'Premium', 'dinesh', '5435345342', '', '2023-03-15'),
(23, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 1, 'Premium', 'dinesh', '5435345342', '', '2023-03-15'),
(24, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 1, 'Premium', 'dinesh', '5435345342', '', '2023-03-15'),
(25, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 1, 'Premium', 'dinesh', '5435345342', '', '2023-03-15'),
(26, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 1, 'Premium', 'dinesh', '5435345342', '', '2023-03-15'),
(27, 'AA 8763', 'Alliance Air', 'Pune', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-17'),
(28, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-16'),
(29, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-16'),
(30, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-16'),
(31, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-16'),
(32, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-16'),
(33, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(34, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(35, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(36, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(37, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(38, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(39, 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-24'),
(40, 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 3, 'Premium', 'dinesh', '5435345342', '', '2023-03-10'),
(41, 'AC 9341', 'Air Carnival', 'Mumbai ', 'Goa', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-09'),
(42, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 2, 'Premium', 'dinesh', '5435345342', '', '2023-03-08'),
(43, 'AI 0946', 'Air India', 'Chennai', 'Madurai', 2, 'First_Class', 'arun', '9876663563', '', '2023-03-10'),
(44, 'JL 5219', 'JetLite', 'Mumbai', 'Bangalore', 2, 'Economy', 'abhishek', '9876543210', 'abishek@gmail.com', '2023-03-11'),
(45, 'JL 5219', 'JetLite', 'Mumbai', 'Bangalore', 2, 'Economy', 'abhishek', '9876543210', 'abishek@gmail.com', '2023-03-11'),
(46, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 2, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-25'),
(47, 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 2, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-24'),
(48, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(49, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(50, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(51, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(52, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(53, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', 'john@gmail.com', '2023-03-23'),
(54, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 4, 'First_Class', 'John', '9876543210', '', '2023-03-23'),
(55, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(56, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(57, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(58, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(59, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(60, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(61, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(62, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(63, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(64, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(65, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(66, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(67, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(68, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(69, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(70, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(71, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(72, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(73, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(74, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(75, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(76, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(77, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(78, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(79, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(80, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(81, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(82, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(83, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(84, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(85, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(86, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(87, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(88, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(89, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(90, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(91, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(92, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(93, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(94, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(95, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(96, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(97, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(98, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 3, 'Premium', 'John', '9876543210', '', '2023-04-08'),
(99, 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 2, 'Premium', 'king', '3554654434', 'saf@gmail.com', '2023-03-31'),
(100, 'TJ 1876', 'Trujet', 'Delhi', 'Goa', 2, 'Premium', 'yogesh', '8769767898', 'saf@gmail.com', '2023-03-23'),
(101, 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 2, 'Premium', 'kh', '9809870987', 'dfgfd@gmail.com', '2023-03-24'),
(102, 'AI 3479', 'Air India', 'Madurai', 'Chennai', 1, 'First_Class', 'Dinesh Babu K B', '9876543210', 'dinesh@gmail.com', '2023-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `flightlist`
--

CREATE TABLE `flightlist` (
  `id` int(11) NOT NULL,
  `Flight_No` varchar(10) NOT NULL,
  `Flight_Name` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Origin` varchar(30) NOT NULL,
  `Departure` time NOT NULL,
  `Arrival` time NOT NULL,
  `Premium` varchar(10) NOT NULL,
  `First` varchar(10) NOT NULL,
  `Economy` varchar(10) NOT NULL,
  `Frequency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flightlist`
--

INSERT INTO `flightlist` (`id`, `Flight_No`, `Flight_Name`, `Destination`, `Origin`, `Departure`, `Arrival`, `Premium`, `First`, `Economy`, `Frequency`) VALUES
(1, 'AI 0946', 'Air India', 'Chennai', 'Madurai', '07:30:00', '08:30:20', '1600', '1300', '1000', 'Daily'),
(2, 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', '10:00:00', '13:00:00', '5000', '4500', '4250', 'Daily'),
(3, 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', '06:24:00', '07:24:00', '4500', '4250', '4000', 'Daily'),
(4, 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', '07:30:00', '08:45:00', '5000', '4500', '3800', 'Daily'),
(5, 'TJ 1876', 'Trujet', 'Delhi', 'Goa', '10:15:00', '11:30:00', '4500', '4000', '3500', 'Daily'),
(6, 'AC 9341', 'Air Carnival', 'Mumbai ', 'Goa', '05:00:00', '06:15:00', '2500', '2250', '2000', 'Daily'),
(7, 'GF 8471', 'Go First', 'Balgalore', 'Delhi', '06:50:00', '08:40:00', '5200', '4800', '4500', 'Daily'),
(8, 'GF 8731', 'Go First', 'Delhi ', 'Balgalore', '07:00:00', '08:50:00', '5200', '4800', '4500', 'Daily'),
(9, 'AC 8410', 'Air Costa', 'Pune', 'Delhi', '12:00:41', '02:15:00', '5000', '4500', '4200', 'Daily'),
(10, 'AP 8385', 'Air Pegasus', 'Bangalore', 'Goa', '04:00:33', '05:20:33', '3400', '3200', '3000', 'Daily'),
(11, 'JA 7395', 'Jet Airways', 'Bangalore', 'Mumbai', '03:20:00', '05:10:00', '3000', '2850', '2600', 'Daily'),
(12, 'JL 5219', 'JetLite', 'Mumbai', 'Bangalore', '05:30:00', '07:20:00', '3000', '2850', '2600', 'Daily'),
(13, 'SA 6167', 'Star Air', 'Delhi', 'Patna', '03:45:00', '05:25:00', '4500', '4350', '4200', 'Daily'),
(14, 'VA 2351', 'Vistara', 'Delhi', 'Pune', '11:30:00', '13:40:00', '4000', '3800', '3600', 'Daily'),
(15, 'AA 8763', 'Alliance Air', 'Pune', 'Vadodadara', '01:30:00', '08:30:00', '12100', '10000', '8000', 'Daily'),
(16, 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', '12:00:00', '02:30:00', '3000', '2850', '2600', 'Daily'),
(17, 'AI 3479', 'Air India', 'Madurai', 'Chennai', '18:00:00', '19:25:00', '3400', '3200', '3000', 'Daily'),
(18, 'IG 8734', 'IndiGo', 'Chennai', 'Delhi', '20:00:00', '23:00:00', '5000', '4800', '4500', 'Daily'),
(19, 'AA 9268', 'Air Asia', 'Delhi ', 'Kolkata', '19:00:00', '21:05:00', '6000', '5800', '5400', 'Daily'),
(20, 'SJ 8765', 'SpiceJet', 'Hydrabad', 'Delhi', '16:05:00', '18:10:00', '6200', '6000', '5700', 'Daily'),
(21, 'TJ 7250', 'TruJet', 'Kolkata', 'Delhi', '14:30:00', '16:45:00', '5800', '5600', '5400', 'Daily'),
(22, 'AC 6193', 'Air Carnival', 'Patna', 'Delhi', '15:45:00', '17:35:00', '4500', '4400', '4200', 'Daily'),
(23, 'SP 6812', 'Spicejet', 'Mumbai', 'Delhi', '13:30:00', '14:45:00', '5000', '4500', '3800', 'Daily'),
(24, 'TJ 7103', 'TruJet', 'Goa', 'Delhi', '19:15:00', '20:30:00', '4500', '4000', '3500', 'Daily'),
(25, 'AC 7371', 'Air Carnival', 'Goa', 'Mumbai', '19:30:00', '20:45:00', '2500', '2250', '2000', 'Daily'),
(26, 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', '05:15:00', '06:35:00', '3400', '3200', '3000', 'Daily'),
(27, 'SA 7121', 'Star Air', 'Patna', 'Delhi', '01:00:00', '02:40:00', '4500', '4350', '4250', 'Daily'),
(28, 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', '03:15:00', '04:45:00', '3000', '2850', '2600', 'Daily'),
(29, 'TJ 7125', 'TruJet', 'Delhi', 'Kolkata', '04:45:00', '07:00:00', '5800', '5650', '5450', 'Daily'),
(30, 'AI 8885', 'Air India', 'Madurai', 'Mumbai', '05:30:00', '07:35:00', '5300', '5250', '5000', 'Daily');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` varchar(25) NOT NULL,
  `expmonth` varchar(25) NOT NULL,
  `expyear` varchar(25) NOT NULL,
  `cvv` int(25) NOT NULL,
  `amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `name`, `email`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `amount`) VALUES
(1, 'king', 'king@gmail.com', 'King', '2147483647', 'June', '2023', 324, 9000),
(2, 'raja', 'raja@gmail.com', 'raja', '2147483647', 'may', '2023', 678, 9000),
(3, 'king', 'king@gmail.com', 'dsfsdfsd', '2147483647', 'may', '2023', 543, 5000),
(4, 'John', 'john@gmail.com', 'john', '934532423534', 'may', '2024', 312, 5000),
(5, 'John', 'john@gmail.com', 'john', '452353454354', 'may', '2023', 343, 1600),
(8, 'Yogesh', 'yogesh@gmail.com', 'yogesh', '123456789101', 'may', '2023', 785, 5000),
(9, 'Dinesh', 'dinesh@gmail.com', 'Dinesh', '34213432234', 'jan', '2023', 321, 4000),
(10, 'king', 'king@gmail.com', 'king', '123456781234', 'june', '2023', 315, 9600),
(11, 'raj', 'raj@gmail.com', 'raj', '4234235', 'jan', '2023', 123, 10000),
(12, 'raj', 'raj@gmail.com', 'raj', '4123432423', 'jan', '2023', 342, 10000),
(13, '', '', '', '', '', '', 0, 10000),
(14, '', '', '', '', '', '', 0, 10000),
(15, 'dfgdfg', 'dfgdfg@gmaial.com', 'jugrf', '4353456345', 'nav', '2029', 4, 11600),
(16, 'dfgdfg', 'dfgdfg@gmaial.com', 'jugrf', '4353456345', 'nav', '2029', 4, 11600),
(17, 'arun', 'yogesh@gmail.com', 'arun', '23434534', 'jan', '2023', 357, 6800),
(18, 'arun', 'yogesh@gmail.com', 'arun', '23434534', 'jan', '2023', 357, 6800),
(19, 'arun', 'yogesh@gmail.com', 'arun', '23434534', 'jan', '2023', 357, 6800),
(20, 'arun', '', '', '', '', '', 0, 24800),
(21, 'arun', '', '', '', '', '', 0, 24800),
(22, 'dfgdfg', '', '', '', '', '', 0, 11600),
(23, '', '', '', '', '', '', 0, 11600),
(24, 'king', 'king@gmail.com', 'dsfsdfsd', '34243234', 'may', '2023', 143, 10000),
(25, 'king', 'king@gmail.com', 'dsfsdfsd', '34243234', 'may', '2023', 143, 10000),
(26, 'king', 'king@gmail.com', 'fsdds', '234234334', 'may', '2023', 343, 3200),
(27, 'king', 'king@gmail.com', 'fsdds', '234234334', 'may', '2023', 343, 3200),
(28, 'king', 'king@gmail.com', 'fsdds', '234234334', 'may', '2023', 343, 3200),
(29, 'king', 'king@gmail.com', 'fsdds', '234234334', 'may', '2023', 343, 3200),
(30, '', '', '', '', '', '', 0, 3200),
(31, '', '', '', '', '', '', 0, 3200),
(32, '', '', '', '', '', '', 0, 2600),
(33, '', '', '', '', '', '', 0, 10000),
(34, '', '', '', '', '', '', 0, 10000),
(35, '', '', '', '', '', '', 0, 10000),
(36, '', '', '', '', '', '', 0, 10000),
(37, '', '', '', '', '', '', 0, 10000),
(38, '', '', '', '', '', '', 0, 10000),
(39, '', '', '', '', '', '', 0, 10000),
(40, '', '', '', '', '', '', 0, 3000),
(41, '', '', '', '', '', '', 0, 3000),
(42, '', '', '', '', '', '', 0, 3000),
(43, '', '', '', '', '', '', 0, 3000),
(44, '', '', '', '', '', '', 0, 3000),
(45, '', '', '', '', '', '', 0, 3400),
(46, '', '', '', '', '', '', 0, 3400),
(47, '', '', '', '', '', '', 0, 3400),
(48, '', '', '', '', '', '', 0, 3400),
(49, '', '', '', '', '', '', 0, 3400),
(50, '', '', '', '', '', '', 0, 24200),
(51, '', '', '', '', '', '', 0, 6000),
(52, '', '', '', '', '', '', 0, 6000),
(53, '', '', '', '', '', '', 0, 6000),
(54, '', '', '', '', '', '', 0, 6000),
(55, '', '', '', '', '', '', 0, 6000),
(56, '', '', '', '', '', '', 0, 24200),
(57, '', '', '', '', '', '', 0, 24200),
(58, '', '', '', '', '', '', 0, 24200),
(59, '', '', '', '', '', '', 0, 24200),
(60, '', '', '', '', '', '', 0, 24200),
(61, '', '', '', '', '', '', 0, 24200),
(62, '', '', '', '', '', '', 0, 24200),
(63, '', '', '', '', '', '', 0, 15000),
(64, '', '', '', '', '', '', 0, 5000),
(65, '', '', '', '', '', '', 0, 6000),
(66, 'arun', '', '', '', '', '', 0, 2600),
(67, 'abhishek', 'abishek@gmail.com', 'abishek', '897430985734', 'may', '2024', 254, 5200),
(68, 'abhishek', 'abishek@gmail.com', 'abishek', '897430985734', 'may', '2024', 254, 5200),
(69, 'John', 'john@gmail.com', 'John', '124375649871', 'May', '2025', 624, 9000),
(70, 'John', 'john@gmail.com', 'John', '766557476544', 'may', '2024', 513, 8500),
(71, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(72, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(73, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(74, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(75, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(76, 'John', 'john@gmail.com', 'John', '623425345', 'jan', '2024', 234, 19200),
(77, '', '', '', '', '', '', 0, 19200),
(78, '', '', '', '', '', '', 0, 15000),
(79, '', '', '', '', '', '', 0, 15000),
(80, '', '', '', '', '', '', 0, 15000),
(81, '', '', '', '', '', '', 0, 15000),
(82, '', '', '', '', '', '', 0, 15000),
(83, '', '', '', '', '', '', 0, 15000),
(84, '', '', '', '', '', '', 0, 15000),
(85, '', '', '', '', '', '', 0, 15000),
(86, '', '', '', '', '', '', 0, 15000),
(87, '', '', '', '', '', '', 0, 15000),
(88, '', '', '', '', '', '', 0, 15000),
(89, '', '', '', '', '', '', 0, 15000),
(90, '', '', '', '', '', '', 0, 15000),
(91, '', '', '', '', '', '', 0, 15000),
(92, '', '', '', '', '', '', 0, 15000),
(93, '', '', '', '', '', '', 0, 15000),
(94, '', '', '', '', '', '', 0, 15000),
(95, '', '', '', '', '', '', 0, 15000),
(96, '', '', '', '', '', '', 0, 15000),
(97, '', '', '', '', '', '', 0, 15000),
(98, '', '', '', '', '', '', 0, 15000),
(99, '', '', '', '', '', '', 0, 15000),
(100, '', '', '', '', '', '', 0, 15000),
(101, '', '', '', '', '', '', 0, 15000),
(102, '', '', '', '', '', '', 0, 15000),
(103, '', '', '', '', '', '', 0, 15000),
(104, '', '', '', '', '', '', 0, 15000),
(105, '', '', '', '', '', '', 0, 15000),
(106, '', '', '', '', '', '', 0, 15000),
(107, '', '', '', '', '', '', 0, 15000),
(108, '', '', '', '', '', '', 0, 15000),
(109, '', '', '', '', '', '', 0, 15000),
(110, '', '', '', '', '', '', 0, 15000),
(111, '', '', '', '', '', '', 0, 15000),
(112, '', '', '', '', '', '', 0, 15000),
(113, '', '', '', '', '', '', 0, 15000),
(114, '', '', '', '', '', '', 0, 15000),
(115, '', '', '', '', '', '', 0, 15000),
(116, '', '', '', '', '', '', 0, 15000),
(117, '', '', '', '', '', '', 0, 15000),
(118, '', '', '', '', '', '', 0, 15000),
(119, '', '', '', '', '', '', 0, 15000),
(120, '', '', '', '', '', '', 0, 15000),
(121, '', '', '', '', '', '', 0, 15000),
(122, 'sfsfsd', 'saf@gmail.com', 'asfas', '3453463453', 'saf', '2023', 523, 9000),
(123, 'sfsfsd', 'saf@gmail.com', 'asfas', '3534534534', 'sssa', '2023', 422, 9000),
(124, 'fgfd', 'dfgfd@gmail.com', 'gfdgd', '4535435', 'may', '2024', 345, 9000),
(125, 'Dinesh Babu', 'dinesh@gmail.com', 'dinesh', '643534543', 'may', '2024', 324, 3200);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `Flight_No` varchar(25) NOT NULL,
  `seats` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`Flight_No`, `seats`) VALUES
('AI 0946', 'F1 F2 D3 D4 b3 b4 b1 b2 b1 b2 b1 b2 b1 b2 b1 b2 X3 X4 X3 X4 L1 L2 L1 L2 L1 L2 c1 c2 c3 c1 c2 c3 c1 c1 a3 a4 a3 a4 a1 a2 a'),
('IG 1231', 'D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 D1 D2 D3 F1 F2 X2 X3 X2 X3 X2 X3 X2 X3 X2 X3 a5 a6 a5 a6 c1 c2 '),
('AA 4532', 'a1 b3 c4 c5 F1 F2 Q1 Q2 b1 b2 b1 b2 U1 U2 a2 a3 a'),
('SJ 2436', 'a3 a4 a5 D1 D2 D1 D2 P1 P2 P3 Q1 Q2 a1 a2 a'),
('TJ 1876', 'a4 a5 c1 c2 c3 D1 D2 D3 a1 a2 a3 b1 b2 b3 a1 a2 a3 b1 b2 b3 a'),
('AC 9341', 'b1 b3 b2 b2 c1 c2 a1 a2 a'),
('GF 8471', 'F1 F2 F3 F4 F1 F2 F3 F4 F1 F2 F3 F4 F1 F2 F3 F4 F1 F2 F3 F4 F1 F2 F3 F4 F1 F2 F3 F4 a'),
('GF 8731', 'a'),
('AC 8410', 'a'),
('AP 8385', 'a'),
('JA 7395', 'a'),
('JL 5219', 'L1 L2 L1 L2 a'),
('SA 6167', 'a'),
('VA 2351', 'a'),
('AA 8763', 'a2 b2 a2 b2 a2 b2 a2 b2 a2 b2 a2 b2 a2 b2 a1 a3 a'),
('AA 8234', 'a1 b1 a2 a3 a2 a3 a2 a3 a2 a3 a2 a3 a'),
('AI 3479', 'F6 a'),
('IG 8734', 'a'),
('AA 9268', 'N2 N3 N2 N3 N2 N3 N2 N3 a1 a2 a'),
('SJ 8765', 'a1 a2 a3 b3 a1 a2 a3 b3 a'),
('TJ 7250', 'a1 a2 I1 I2 a'),
('AC 6193', 'a1 a2 a'),
('SP 6812', 'a'),
('TJ 7103', 'a1 a2 R1 R2 a1 a2 a'),
('AC 7371', 'b'),
('AP 1946', 'a3 a3 a3 a3 a3 a1 a2 a1 a2 a1 a2 a'),
('SA 7121', 'a'),
('AA 1119', 'b3 b3 a2 a1 a1 a'),
('TJ 7125', 'a4 a5 a4 a5 a'),
('AI 8885', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Mail_ID` varchar(50) NOT NULL,
  `Flight_No` varchar(250) NOT NULL,
  `Flight_Name` varchar(250) NOT NULL,
  `Destination` varchar(250) NOT NULL,
  `Origin` varchar(250) NOT NULL,
  `Seat` varchar(250) NOT NULL,
  `Class` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `Name`, `Mail_ID`, `Flight_No`, `Flight_Name`, `Destination`, `Origin`, `Seat`, `Class`, `Date`, `Time`) VALUES
(1, 'king', 'king@gmail.com', 'AI 0946', 'Air India', 'Chennai', 'Madurai', 'b3 b4', 'Premium', '2023-01-20', '07:30:00'),
(2, 'king', 'king@gmail.com', 'AI 0946', 'Air India', 'Chennai', 'Madurai', 'D3 D4', 'First_Class', '2023-01-21', '07:30:00'),
(3, 'king', 'king@gmail.com', 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 'D1 D2', 'Premium', '2023-03-08', '07:30:00'),
(4, 'king', 'king@gmail.com', 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 'D1 D2', 'Premium', '2023-03-08', '07:30:00'),
(5, 'king', 'king@gmail.com', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'X2 X3', 'Premium', '2023-03-10', '10:00:00'),
(6, 'king', 'king@gmail.com', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'X2 X3', 'Premium', '2023-03-10', '10:00:00'),
(7, 'king', 'king@gmail.com', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'X2 X3', 'Premium', '2023-03-10', '10:00:00'),
(8, 'king', 'king@gmail.com', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'X2 X3', 'Premium', '2023-03-10', '10:00:00'),
(9, 'king', 'king@gmail.com', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'X2 X3', 'Premium', '2023-03-10', '10:00:00'),
(10, 'John', 'john@gmail.com', 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 'a1', 'Premium', '2023-03-15', '03:15:00'),
(11, 'John', 'john@gmail.com', 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 'a1', 'Premium', '2023-03-15', '03:15:00'),
(12, 'king', 'king@gmail.com', 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 'a2', 'Premium', '2023-03-09', '03:15:00'),
(13, 'dinesh', 'dinesh@gmail.com', 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 'b3', 'Premium', '2023-03-08', '03:15:00'),
(14, 'dinesh', 'dinesh@gmail.com', 'AA 1119', 'Air Arabia', 'Delhi', 'Ahamadabad', 'b3', 'Premium', '2023-03-08', '03:15:00'),
(15, 'dinesh', 'dinesh@gmail.com', 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 'a3', 'Premium', '2023-03-15', '05:15:00'),
(16, 'dinesh', 'dinesh@gmail.com', 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 'a3', 'Premium', '2023-03-15', '05:15:00'),
(17, 'dinesh', 'dinesh@gmail.com', 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 'a3', 'Premium', '2023-03-15', '05:15:00'),
(18, 'dinesh', '', 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 'a3', 'Premium', '2023-03-15', '05:15:00'),
(19, 'dinesh', '', 'AP 1946', 'Air Pegasus', 'Goa', 'Bangalore', 'a3', 'Premium', '2023-03-15', '05:15:00'),
(20, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Pune', 'Vadodadara', 'a1 a3', 'Premium', '2023-03-17', '01:30:00'),
(21, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a2 a3', 'Premium', '2023-03-16', '12:00:00'),
(22, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a2 a3', 'Premium', '2023-03-16', '12:00:00'),
(23, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a2 a3', 'Premium', '2023-03-16', '12:00:00'),
(24, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a2 a3', 'Premium', '2023-03-16', '12:00:00'),
(25, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a2 a3', 'Premium', '2023-03-16', '12:00:00'),
(26, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(27, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(28, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(29, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(30, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(31, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(32, 'dinesh', '', 'AA 8763', 'Alliance Air', 'Ahemedabad', 'Vadodadara', 'a2 b2', 'Premium', '2023-03-24', '01:30:00'),
(33, 'dinesh', '', 'SJ 2436', 'Spicejet', 'Delhi ', 'Mumbai', 'a3 a4 a5', 'Premium', '2023-03-10', '07:30:00'),
(34, 'dinesh', '', 'AC 9341', 'Air Carnival', 'Mumbai ', 'Goa', 'b1 b3', 'Premium', '2023-03-09', '05:00:00'),
(35, 'dinesh', '', 'AA 8234', 'Air Arabia', 'Ahamadabad', 'Delhi', 'a1 b1', 'Premium', '2023-03-08', '12:00:00'),
(36, '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00'),
(37, 'arun', '', 'AI 0946', 'Air India', 'Chennai', 'Madurai', 'F1 F2', 'First_Class', '2023-03-10', '07:30:00'),
(38, 'abhishek', '', 'JL 5219', 'JetLite', 'Mumbai', 'Bangalore', 'L1 L2', 'Economy', '2023-03-11', '05:30:00'),
(39, 'abhishek', '', 'JL 5219', 'JetLite', 'Mumbai', 'Bangalore', 'L1 L2', 'Economy', '2023-03-11', '05:30:00'),
(40, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'F1 F2', 'First_Class', '2023-03-25', '10:00:00'),
(41, 'John', '', 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 'F1 F2', 'First_Class', '2023-03-24', '06:24:00'),
(42, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(43, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(44, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(45, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(46, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(47, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(48, 'John', '', 'GF 8471', 'Go First', 'Balgalore', 'Delhi', 'F1 F2 F3 F4', 'First_Class', '2023-03-23', '06:50:00'),
(49, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(50, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(51, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(52, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(53, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(54, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(55, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(56, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(57, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(58, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(59, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(60, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(61, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(62, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(63, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(64, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(65, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(66, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(67, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(68, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(69, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(70, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(71, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(72, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(73, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(74, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(75, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(76, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(77, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(78, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(79, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(80, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(81, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(82, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(83, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(84, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(85, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(86, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(87, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(88, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(89, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(90, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(91, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(92, 'John', '', 'IG 1231', 'IndiGo', 'Delhi', 'Chennai ', 'D1 D2 D3', 'Premium', '2023-04-08', '10:00:00'),
(93, 'king', 'saf@gmail.com', 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 'c4 c5', 'Premium', '2023-03-31', '06:24:00'),
(94, 'yogesh', 'yogesh@gmail.com', 'TJ 1876', 'Trujet', 'Delhi', 'Goa', 'a4 a5', 'Premium', '2023-03-23', '10:15:00'),
(95, 'kh', 'king@gmail.com', 'AA 4532', 'Air Asia', 'Bangalore', 'Mumbai', 'a1 b3', 'Premium', '2023-03-24', '06:24:00'),
(96, 'Dinesh Babu K B', 'dinesh@gmail.com', 'AI 3479', 'Air India', 'Madurai', 'Chennai', 'F6', 'First_Class', '2023-04-15', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(1, 'king', 'king@gmail.com', 'b2086154f101464aab3328ba7e060deb', 'user'),
(2, 'hero', 'hero@gmail.com', 'f04af61b3f332afa0ceec786a42cd365', 'user'),
(3, 'dinesh', 'dinesh@gmail.com', '9c9f1c65b1dc1f79498c9f09eb610e1a', 'admin'),
(4, 'yogesh', 'yogesh@gmail.com', '34fb382763a18c3674530a8b110abde3', 'user'),
(6, 'arun', 'arun@gmail.com', '722279e9e630b3e731464b69968ea4b4', 'admin'),
(7, 'Abhishek', 'abishek@gmail.com', '60a9d3c1eb5df3ab1c369ece4a5111a3', 'user'),
(8, 'Dharmesh', 'dharmesh@gmail.com', '8ba62f5f38ee74c4af2ff48b404c96dc', 'user'),
(9, 'karthi', 'karthi@gmail.com', 'b678c60ee60fd4374df211724aedf4f7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightlist`
--
ALTER TABLE `flightlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `flightlist`
--
ALTER TABLE `flightlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
