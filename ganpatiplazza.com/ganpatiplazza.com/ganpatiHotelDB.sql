-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 198.71.225.62:3306
-- Generation Time: Mar 15, 2016 at 03:03 AM
-- Server version: 5.5.43-37.2-log
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganpatiHotelDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `BookingDetails`
--

CREATE TABLE `BookingDetails` (
  `BookingId` varchar(500) NOT NULL,
  `CustomerName` varchar(500) NOT NULL,
  `CustomerEmail` varchar(500) NOT NULL,
  `CustomerPhone` varchar(500) NOT NULL,
  `RoomType` varchar(500) NOT NULL,
  `CheckinDate` varchar(500) NOT NULL,
  `CheckOutDate` varchar(500) NOT NULL,
  `Adults` int(11) NOT NULL,
  `Childs` int(11) NOT NULL,
  `Rooms` int(11) NOT NULL,
  `BookingDate` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BookingDetails`
--

INSERT INTO `BookingDetails` (`BookingId`, `CustomerName`, `CustomerEmail`, `CustomerPhone`, `RoomType`, `CheckinDate`, `CheckOutDate`, `Adults`, `Childs`, `Rooms`, `BookingDate`) VALUES
('26411', 'Satyaveer Singh Yadav', 'Veer.in@gmail.om', '9999999999', 'Deluxe Room', '2015-03-20', '2015-03-21', 8, 7, 7, 'March 20, 2015, 12:52 am IST'),
('9672', '1', '2', '2', 'Deluxe Room', '2015-03-20', '2015-03-21', 3, 4, 5, 'March 20, 2015, 1:02 am IST'),
('492', 'Satyaveer Yadav', 'vv', '888', 'Deluxe Room', '2015-03-20', '2015-03-21', 6, 7, 9, 'March 20, 2015, 1:18 am IST'),
('32425', '2121', 'qq', '77777', 'Single Room', '2015-03-31', '2015-04-01', 11, 10, 10, 'March 20, 2015, 1:22 am IST'),
('31994', 'Satyaveer Yadav', 'ss', 'ss', 'Deluxe Room', '2015-03-27', '2015-03-28', 7, 8, 8, 'March 20, 2015, 1:33 am IST'),
('23061', 'Varun', 'varun@gmail.com', '8889898989', 'Deluxe Room', '2015-03-20', '2015-03-13', 9, 9, 6, 'March 20, 2015, 12:05 pm IST'),
('30597', 'Satyaveer Singh Yadav', 'ssyadav.in@gmail.com', '9620265604', 'Deluxe Room', '2015-03-22', '2015-03-30', 5, 2, 3, 'March 22, 2015, 3:27 am IST'),
('29476', 'Khalid', 'adasd', '45456', 'Deluxe Room', '2015-03-27', '2015-03-26', 1, 2, 3, 'March 25, 2015, 11:28 am IST'),
('22639', 'hhhhhggyuuuytt', 'gfty', 'gyyy', 'ffgt', '', '', 3333522, 5552, 5555, 'April 10, 2015, 12:24 am IST'),
('2554', 'karmveer', 'sharma.karm@gmail.com', '9741901120', 'ka2jjjj', '2015-04-22', '2015-04-25', 2, 1, 1, 'April 22, 2015, 8:15 pm IST'),
('12431', 'Satyaveer', 'ssyadav.in@gmail.com', '9620265604', 'Deluxe Room', '2015-05-14', '2015-05-15', 4, 3, 2, 'May 13, 2015, 11:59 pm IST'),
('3718', 'Ravi Prakash Verma', 'ravikhare18@yahoo.in', '09740918960', 'Luxury Room', '2015-05-26', '2015-05-31', 2, 1, 1, 'May 24, 2015, 7:28 pm IST'),
('27171', 'vivek', 'vcky132630@gmail.com', '9406868355', 'Deluxe Room', '2015-06-30', '2015-07-03', 2, 1, 1, 'June 1, 2015, 2:27 am IST'),
('2211', 'Kuldeep', 'kulddep@gmail.com', '9999999999', 'Deluxe Room', '2015-06-09', '2015-06-11', 1, 1, 1, 'June 7, 2015, 10:48 pm IST'),
('22384', 'pradeep', 'PRC.Bangalore @gmail.com', '9001462076', 'Single Room', '2015-08-24', '2015-08-23', 1, 10, 1, 'August 23, 2015, 6:37 pm IST');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
