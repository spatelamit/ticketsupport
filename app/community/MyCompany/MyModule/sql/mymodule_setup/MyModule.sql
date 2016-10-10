-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 04:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magento-1.9`
--

-- --------------------------------------------------------

--
-- Table structure for table `MyModule`
--

CREATE TABLE `MyModule` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `request_type` varchar(50) NOT NULL,
  `relatedfile` varchar(255) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `c_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MyModule`
--

INSERT INTO `MyModule` (`id`, `fullname`, `email`, `orderid`, `request_type`, `relatedfile`, `message`, `status`, `c_time`) VALUES
(1, 'amit', 'spatelamit@gmail.com', '3215454', 'Damage Product recieved.', 'vcxvunspecified', 'czxc', '', ''),
(2, 'amit', 'spatelamit@gmail.com', '3215454', 'Damage Product recieved.', 'vcxvunspecified', 'czxc', 'Pending', '15 Sep 2016'),
(3, 'amit', 'spatelamit@gmail.com', '3215454', 'Damage Product recieved.', 'vcxvunspecified', 'czxc', 'Pending', '15 Sep 2016 01:15:43 pm'),
(4, 'amit', 'spatelamit@gmail.com', '3215454', 'Damage Product recieved.', 'vcxvunspecified', 'czxc', 'Pending', '15 Sep 2016 01:16:50 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MyModule`
--
ALTER TABLE `MyModule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MyModule`
--
ALTER TABLE `MyModule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
