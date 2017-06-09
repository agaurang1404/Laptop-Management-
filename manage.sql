-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 06:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `Emp_No` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Serial_No` varchar(45) DEFAULT NULL,
  `Received` varchar(5) DEFAULT NULL,
  `Loc_Code` varchar(5) DEFAULT NULL,
  `Emp_Code` varchar(12) DEFAULT NULL,
  `Emp_Design` varchar(45) DEFAULT NULL,
  `Comments` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`Emp_No`, `Name`, `Serial_No`, `Received`, `Loc_Code`, `Emp_Code`, `Emp_Design`, `Comments`) VALUES
(31922560, 'Gagandeep Singh Karir', 'UNVDKS1004H0936523\nNXVDKS1008707007C47200', 'Y', '12171', '12171400', 'Senior Operations Officer ', 'Handover to Nakul'),
(31923010, 'Amaresh Kumar', 'UNVDKS1004H0936550\nNXVDKS1008707006757200', 'N', '11111', '11111002', 'Deputy Manager - Sales, Morada\n', 'Not Specified'),
(31923850, 'Shailendra Verma', 'UNVDKS1004H0936482\nNXVDKS1008707007017200', 'N', '12112', '12112002', 'Deputy Manger - Sales, Allahab', 'Not Specified'),
(31924060, 'Dinesh Pangtey', 'UNVDKS1004H0936603\nNXVDKS10087070081D7200', 'y', '11339', '11339701', 'Deputy Manager - Operations ', 'Not Specified'),
(31925280, 'Hamid Bashir Bulbul', 'UNVDKS1004H0936563\nNKVDKS1008707006FC7200', 'Y', '12102', '12102002', 'Deputy Manager - Sales, Udhamp\n', 'Handover to Nakul'),
(31926380, 'Dosodia Abhishek', 'UNVDKS1004H0936472\nNXVDKS10087070073E7200', 'Y', '11221', '11221805', 'Deputy Manager - Quality Contr', 'Not Specified'),
(31928070, 'B Rajesh Naik', 'UNVDKS1004H0936381\nNXVDKS1008707007F67200', 'N', '09341', '09341005', 'Deputy Manager \n', 'Not Specified'),
(31929040, 'Pandey Sanjay', 'UNVDKS1004H0936574\nNKVDKS1008707007377200', 'Y', '11114', '11114002', 'Senior Sales Officer - Faridab', 'Not Specified'),
(31939000, 'Diwakar Nigam', 'UNVDKS1004H0936204\nNXVDKS1008707006F17200', 'N', '11302', '11302701', 'Senior Operations Officer', 'Not Specified'),
(31939800, 'Ved Prakash', 'UNVDKS1004H0936433\nNXVDKS1008707006F27200', 'N', '10119', '10119700', 'Senior Project Engineer, Bahad\n', 'Not Specified'),
(31939930, 'Sunil Kumar Meena', 'UNVDKS1004H0936390\nNXVDKS10087070071C7200', 'Y', '11146', '11146351', 'Senior Operations Officer', 'Colected by tarachand on 06/04/2017'),
(31941520, 'Mathur Rituraj', 'UNVDKS1004H0936472\nNXVDKS10087070073E7200', 'Y', '09304', '09304005', 'Senior Officer - PMUY Co-ordin\n', 'Not Specified'),
(31942010, 'Rupak Anand', 'UNVDKS1004H0936396\nNXVDKS10087070071F7200', 'N', '13123', '13123351', 'Senior Aviation Officer ', 'Not Specified'),
(31944480, 'Singh Ram Ratan', 'UNVDKS1004H0936526\nNXVDKS1008707008127200', 'Y', '11410', '11410002', 'Senior Engineer - PVPL Project', 'Not Specified'),
(31947610, 'Rohit Chadha', 'UNVDKS1004H0936385\nNXVDKS1008707007AS7200', 'N', '14106', '14106351', 'Senior Sales Officer - Bazaar', 'Not Specified'),
(31951010, 'Kumar Rahul', 'UNVDKS1004H0936567\nNXVDKS10087006547200', 'Y', '13102', '13102002', 'Sales Officer - Iand C, Ghazia\n', 'Not Specified'),
(31952900, 'Rohit Kadam', 'UNVDKS1004H0936502\nNXVDKS1008707006AE7200', 'N', '12105', '12105002', 'Sales Officer - Jhansi S/A \n', 'Not Specified'),
(31954950, 'Shovit Kumar Srivastava', 'UNVDKS1004H0936134\nNXVDKS1008707007EA7200', 'N', '12105', '12105002', 'Sales Officer - Sitapur LPG Sa', 'Not Specified'),
(31964980, 'Abhishek Rahi', 'UNVDKS1004H0936125\nNXVDKS1008707006BD7200', 'Y', '11148', '11148351', 'Operations Officer \n', 'Not Specified'),
(31967590, 'Pranav Kumar Meena', 'UNVDKS1004H0936357\nNXVDKS1008707007BR7200', 'Y', '11114', '11114002', 'Officer - Retail Automation \n', 'Already distributed'),
(31973110, 'Sharma Prashant', 'UNVDKS1004H0936504\nNXVDKS1008707007C37200', 'N', '11110', '11110002', 'Marketing Officer ', 'Not Specified'),
(31975510, 'Sri Rup Saurabh', 'UNVDKS1004H0936452\nNXVDKS1008707006E27200', 'N', '11120', '11120009', 'Legal Officer ', 'Colect from Agra-Authorise officer Lucknow'),
(35414050, 'Paul Surinder', 'UNVDKS1004H0936500\nNKVDKS1008707006A47200', 'Y', '11114', '11114002', 'Senior COMCO Officer ', 'Not Specified');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Type`) VALUES
('', '', 'user'),
('admin', 'admin', 'admin'),
('adminis', 'adminis', 'admin'),
('agaurang1404', 'amit2390', 'admin'),
('user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`Emp_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
