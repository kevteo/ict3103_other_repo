-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 05:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bankID` int(11) NOT NULL,
  `bankName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bankID`, `bankName`) VALUES
(1, 'mBank'),
(2, 'aBank'),
(3, 'bBank'),
(4, 'cBank'),
(5, 'dBank');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(11) NOT NULL,
  `amount` decimal(17,2) NOT NULL,
  `userID` int(11) NOT NULL,
  `payeeID` int(11) DEFAULT NULL,
  `datetime` varchar(45) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `amount`, `userID`, `payeeID`, `datetime`, `type`) VALUES
(482, '5.00', 1, NULL, '2018-11-03', 'deposit'),
(483, '0.00', 1, NULL, '2018-11-03', 'withdraw'),
(484, '-5.00', 1, NULL, '2018-11-03', 'withdraw'),
(485, '-100.00', 1, NULL, '2018-11-03', 'withdraw'),
(486, '2.00', 1, 2, '2018-11-03', 'transfer'),
(487, '0.50', 1, NULL, '2018-11-03', 'charge'),
(488, '4.00', 1, 2, '2018-11-03', 'transfer'),
(489, '0.50', 1, NULL, '2018-11-03', 'charge'),
(490, '4.00', 1, 2, '2018-11-05', 'transfer'),
(491, '0.50', 1, NULL, '2018-11-05', 'charge'),
(492, '5.00', 1, 2, '2018-11-05', 'transfer'),
(493, '10.00', 1, 2, '2018-11-05', 'transfer'),
(494, '10.00', 2, 2, '2018-11-16', 'transfer'),
(495, '20.00', 2, 2, '2018-11-16', 'transfer'),
(496, '20.00', 2, 2, '2018-11-16', 'deposit'),
(497, '-10.00', 2, NULL, '2018-11-18', 'withdraw'),
(498, '2.00', 2, 2, '2018-11-18', 'transfer'),
(499, '0.50', 2, NULL, '2018-11-18', 'charge'),
(500, '4.00', 2, 2, '2018-11-18', 'transfer'),
(501, '0.50', 2, NULL, '2018-11-18', 'charge'),
(502, '9999.00', 2, NULL, '2018-11-18', 'deposit'),
(503, '123.00', 3, 2, '2018-11-19', 'transfer'),
(504, '5.00', 3, 2, '2018-11-19', 'transfer'),
(505, '4.00', 3, 1, '2018-11-19', 'transfer'),
(506, '0.50', 3, NULL, '2018-11-19', 'charge'),
(507, '12.00', 1, 2, '2018-11-19', 'transfer'),
(508, '1000.00', 1, 2, '2018-11-19', 'transfer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nric` varchar(20) NOT NULL,
  `mobileNumber` varchar(30) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `account` varchar(15) DEFAULT NULL,
  `salary` varchar(40) DEFAULT NULL,
  `balance` decimal(17,2) NOT NULL,
  `status` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `requestToggleActive` tinyint(1) NOT NULL,
  `lastActive` varchar(45) DEFAULT NULL,
  `isTerminated` tinyint(1) NOT NULL,
  `f2a` int(6) NOT NULL,
  `bankID` int(11) NOT NULL,
  `monthStartBalance` decimal(17,2) NOT NULL,
  `monthMinBalance` decimal(17,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `role`, `name`, `nric`, `mobileNumber`, `email`, `address`, `account`, `salary`, `balance`, `status`, `isActive`, `requestToggleActive`, `lastActive`, `isTerminated`, `f2a`, `bankID`, `monthStartBalance`, `monthMinBalance`) VALUES
(1, 'customer1', '', 'customer', '', 's9999901c', '97832323', '', '', '024-61263-1', '', '23.00', 2, 1, 0, '2018-11-19 01-56-53', 0, 541012, 1, '1200.00', '23.00'),
(2, 'customer2', '123', 'customer', 'customer2', 's9999902c', '97832323', 'leexd1994@gmail.com', 'Jurong st 91, Blk929 #09-929, Singapore 500929', '024-65463-2', '2000-3000', '1695.00', 2, 1, 0, '2018-11-02 01-20-36', 0, 0, 2, '0.00', '0.00'),
(3, 'customer3', '123', 'customer', 'customer3', 's9999903c', '97832323', 'jeremy.nogi46@gmail.com', 'Sengkang st 91, Blk829 #09-829, Singapore 510829', '024-61223-3', '5000-10000', '50.00', 2, 0, 1, '2018-09-30 08-03-56', 0, 0, 3, '0.00', '0.00'),
(4, 'customer4', '123', 'customer', 'customer4', 's9999904c', '97832323', 'MissKYH.sg@gmail.com', 'Seragoon st 95, Blk995 #09-995, Singapore 550995', '024-61263-4', '1000-2000', '50.00', 2, 0, 1, '2018-09-30 08-03-56', 0, 0, 2, '0.00', '0.00'),
(5, 'customer5', '123', 'customer', 'customer5', 's9999905c', '97832323', 'KheoYanHsia@gmail.com', 'Bedok st 85, Blk985 #08-985, Singapore 520985', '024-61263-5', '1000.00', '50.00', 2, 1, 0, '2018-09-30 08-03-56', 0, 0, 1, '0.00', '0.00'),
(6, 'customer6', '123', 'customer', 'customer6', 's9999906c', '97832323', 'gohchoongiap@gmail.com', 'Geylang st 81, Blk981 #09-981, Singapore 520981', '024-61263-6', '900.00', '50.00', 2, 1, 0, '2018-09-30 08-03-56', 0, 0, 2, '0.00', '0.00'),
(7, 'customer7', '123', 'customer', 'customer7', 's9999907c', '97832323', 'kwanlamyujoey@gmail.com', 'Yishun st 91, Blk911 #09-911, Singapore 540911', '024-61263-7', '1500.00', '3697.00', 2, 1, 0, '2018-09-30 08-03-56', 0, 0, 3, '0.00', '0.00'),
(8, 'manager1', '123', 'manager', 'manager1', 's9999908c', '97832323', 'kevin9001@live.com', 'Orchard st 32, Blk32 #02-32, Singapore 520132', NULL, NULL, '9889.50', 2, 1, 0, '2018-11-18 21-36-57', 0, 970065, 2, '0.00', '0.00'),
(9, 'admin1', '123', 'admin', 'admin1', 's9999910c', '97832323', 'kevin9001@live.com', 'Orchard st 32, Blk32 #02-32, Singapore 520132', NULL, NULL, '50.00', 2, 1, 0, '2018-11-02 05-21-14', 0, 361821, 1, '0.00', '0.00'),
(10, 'admin2', '123', 'admin', 'admin2', 's9999911c', '97832323', 'leexd1994@gmail.com', 'Novena st 11, Blk11 #09-11, Singapore 520111', NULL, NULL, '50.00', 2, 1, 0, '2018-09-30 08-03-56', 0, 0, 1, '0.00', '0.00'),
(46, '8765', 'SE5SZ0jP', 'manager', 'managerName', 's9876543c', '98765432', 'email@hotmail.com', 'tampines st91, blk 999 st99, singapore 529999', '024-61261-1', 'Below 2000', '0.00', 1, 1, 0, NULL, 0, 0, 1, '0.00', '0.00'),
(47, 'iriio2765', 'mhS4BmB4', 'manager', 'Airin Song', 's9276541c', '98765432', 'email@hotmail.com', 'tampines st91, blk 999 st99, singapore 529999', '024-61261-1', 'Below 2000', '0.00', 1, 1, 0, NULL, 0, 0, 1, '0.00', '0.00'),
(48, 'nor n3765', 'zYLGZM8W', 'manager', 'Airin Song', 's9376541c', '98765432', 'email@hotmail.com', 'tampines st91, blk 999 st99, singapore 529999', '024-61261-1', 'Below 2000', '0.00', 0, 1, 0, NULL, 0, 0, 1, '0.00', '0.00'),
(49, 'ASriA4765', '3BBJxXE0', 'manager', 'Airin Song', 's9476541c', '98765432', 'email@hotmail.com', 'tampines st91, blk 999 st99, singapore 529999', '024-61261-1', 'Below 2000', '0.00', 0, 1, 0, NULL, 0, 0, 1, '0.00', '0.00'),
(50, 'ginin5765', 'GZzQh4xL', 'manager', 'Airin Song', 's9576541c', '98765432', 'email@hotmail.com', 'tampines st91, blk 999 st99, singapore 529999', '024-61261-1', 'Below 2000', '0.00', 0, 1, 0, NULL, 0, 0, 1, '0.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `fk_Transaction_User_idx` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `fk_user_bank1` (`bankID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_Transaction_User` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_bank1` FOREIGN KEY (`bankID`) REFERENCES `bank` (`bankID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
