-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 02:22 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posmodel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fname` varchar(155) DEFAULT NULL,
  `lname` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(65) NOT NULL,
  `home_phone` varchar(55) NOT NULL,
  `cell_phone` varchar(55) NOT NULL,
  `work_phone` varchar(55) NOT NULL,
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `fname`, `lname`, `email`, `address`, `address2`, `city`, `state`, `zip`, `home_phone`, `cell_phone`, `work_phone`, `deleted`) VALUES
(1, 1, 'David', 'Sunday', 'sunny@gmail.com', '123 Enugu', 'Apt 123', 'Emene', 'Enugu', '4001201', '234 506 940450', '234 506 946750', '234 506 123450', 0),
(4, 1, 'Ikenna', 'Right', '', 'Enugu', '', '', '', '', '', '234 49585212', '', 1),
(5, 1, 'Emmanuel', 'Right', 'emma@gmail.com', '', '', '', '', '', '', '345654321``', '', 1),
(6, 1, 'Solomon', 'Grandy', 'solo@mailmaker.com', '22B Ibenuki west region', '04 complex building', 'Bangladash', 'Bangladash', '0029984', '098765432', '123456789', '5673892029', 0),
(7, 1, 'Branda', 'Bleck', 'bleck@mailmaker.com', '001 mount street', '', 'vally hill', 'Washinton', '01223', '', '9098 239 2823', '2020 1919 234', 0),
(8, 1, 'Cynthia', 'Black', 'cyndi@gmail.com', 'Enugu', 'Enugu metropolis', 'Ibagwa', 'Enugu', '4001200', '098 3093 0309', '234 49585212', '', 0),
(9, 1, 'a,sdda', 'asdasdaas', 'asd@m.com', 'sdsdf', 'sdsadw23', 'sss', 'ddff', 'lyhu', '23456', '12345', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `acl` text,
  `deleted` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fname`, `lname`, `acl`, `deleted`) VALUES
(1, 'sunny', 'sunny@gmail.com', '$2y$10$kNtAXOfZEzEHpQ/UbUVdbOeLpku9P7D6UtinqJ/XaTX8m95kuYURK', 'Ifeanyi', 'Sunday', '', 0),
(3, 'davison', 'dave@gmail.com', '$2y$10$gpUoGt0NdErZ6a8AB9M92udMwhP.SyEV4t/QgtaF05p6hr1sm/A.2', 'Sunday', 'Luke', NULL, NULL),
(4, 'samuel', 'omimi@uzo.com', '$2y$10$QzHIXvUcXMEwJoEDJ.aX/.MxUwO7FAfbFmALxKQfc9lH8vFUcEc6q', 'Uzo', 'Omimi', NULL, NULL),
(5, 'samluke', 'samluke@gmail.com', '$2y$10$TRdwnXfWy9HituX.Kt9iae1KaCYd9wVuws4BFYVDQMfafsowP.2P6', 'Samuel', 'Luke', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `deleted` (`deleted`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
