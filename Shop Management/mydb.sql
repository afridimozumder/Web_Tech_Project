-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 06:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(100) NOT NULL,
  `complain_type` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `complain_type`, `description`, `user_id`) VALUES
(1, 'hoihjkb', 'rr', '8'),
(2, 'hello', 'sdfdg', ''),
(4, 'qqqqqqqqqqqqq', 'qqq', ''),
(5, 'hoihjkb', 'jkjj', '8'),
(6, 'Dress', 'Bad quality', '7'),
(7, 'aaaa', 'something wrong', '7'),
(8, 'hello', 'jkjj', '7'),
(9, 'Dress', 'dtrghfh', '1'),
(10, 'aaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '8'),
(11, 'dress', 'something wrong', '1'),
(12, 'hello', 'something wrong', '1'),
(13, 'Hello', 'i donno', '9');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `purchased_id` int(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `producr_price` int(100) NOT NULL,
  `purchase_from` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `purchase_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`purchased_id`, `product_type`, `product_name`, `product_quantity`, `producr_price`, `purchase_from`, `user_id`, `purchase_date`) VALUES
(1, 'Cloth', 'Sharee', 2, 5000, 'Jamuna Future Park', 1, '03/03/2021'),
(2, 'Cloth', 'Gown', 1, 2700, 'Jamuna Future Park', 8, '01/02/2021');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `contact_number`, `username`, `gender`, `dob`, `address`, `user_type`, `password`, `confirm_password`) VALUES
(8, 'Pyaasa', 'pyaasa@gmail.com', '01625228982', 'admin', 'female', '2021-03-10', 'Bashundhara', 'Customer', '123123', '123123'),
(9, 'ahmed afridi', 'afridimozumder@gmail.com', '01521232605', 'afridimozumder', 'male', '2004-01-12', 'Kotbari', 'Customer', '12345', '12345'),
(10, 'Shorif Ahmed Afridi Mozumder', 'arefinashikul@gmail.com', '01521232604', 'admin2', 'male', '2021-03-03', 'dhaka', 'admin', 'zxcv', 'zxcv');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `interests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `firstname`, `email`, `address`, `dob`, `gender`, `profession`, `interests`) VALUES
('hsa10', '123456', 'Sazzad', 'sazzad@aiub.edu', 'Aiub', '19/12/19', 'male', 'Academician', 'music'),
('jhon', '123', 'jhon', 'jhon@email.com', 'bashundhara', '11/11/2001', 'male', 'student', 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `username`, `password`, `gender`) VALUES
('Anonna', 'anna@yahoo.com', 'anonna', 'abcd', 'male'),
('niloy', 'niloy@gmail.com', 'niloy', 'xyz', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`purchased_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `purchased_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
