-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 02:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniprjct`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(15) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `question`) VALUES
(1, 'ali', 'hnawar880@gmail.com', 'Csafsaf'),
(2, 'mohamad', 'moooj99@gmail.com', 'aaaaaaaaa'),
(3, 'ahmadali', 'ahmadali99@gmail', 'i am ahamd');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(15) NOT NULL,
  `namee` varchar(150) NOT NULL,
  `ema` text NOT NULL,
  `e_team` varchar(150) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `dis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `namee`, `ema`, `e_team`, `spec`, `dis`) VALUES
(10, 'hson', 'kamhhel44@gmail.com', '2', 'front_end', 'wdqwfrq'),
(14, 'mohamad', 'mohamadmansour99@gmail.com', '1', 'front_end', 'i am mohamad');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(15) NOT NULL,
  `p_client` int(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment_method` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `serves` varchar(50) NOT NULL,
  `packages` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `p_client`, `start_date`, `end_date`, `payment_method`, `email`, `serves`, `packages`, `name`) VALUES
(1, 0, '0000-00-00', '0000-00-00', '', 'alialsdgi99@gmail.com', 'EDM', 'GOLD', 'ali ali'),
(3, 0, '0000-00-00', '0000-00-00', '', 'moommo99@gmail.com', 'EDM', 'Silver', 'moooo momo'),
(4, 0, '0000-00-00', '0000-00-00', '', 'ahmadali99@gmail', 'EDM', 'BASIC', 'ahmad ali');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(15) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `serv` varchar(150) NOT NULL,
  `price` int(15) NOT NULL,
  `hur` varchar(150) NOT NULL,
  `phone` int(12) NOT NULL,
  `despro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `p_name`, `serv`, `price`, `hur`, `phone`, `despro`) VALUES
(2, 'yazan', 'EDM,e_marketing', 0, 'quickly', 991626850, 'iam yazan');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `name` varchar(150) NOT NULL,
  `t_specialization` text NOT NULL,
  `t_leader` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(15) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fusername` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `lname`, `fusername`, `email`, `pass`, `type`) VALUES
(1, 'ali', 'ali', 'kamel44@gmail.com', '111', 1),
(2, 'ali', 'ali', 'alialsdgi99@gmail.com', 'www', 0),
(3, 'safsdaf', 'safas', 'mooasfo99@gmail.com', 'rr', 0),
(4, 'كمال', 'kkkk', 'kameasfsal44@gmail.com', '55', 0),
(5, 'ali', 'mans', 'mooalo99@gmail.com', '66', 0),
(6, 'ali', 'mansour', 'alimai99@gmail.com', 'tt', 0),
(7, 'ali', 'kkkk', 'hnawsdfar880@gmail.com', 'ty', 0),
(8, 'moooo', 'momo', 'moommo99@gmail.com', '12', 0),
(9, 'ali', 'mo', 'alimopi99@gmail.com', '111', 0),
(10, 'ahmad', 'ali', 'ahmadali99@gmail', '12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `pro_id` (`pro_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`name`),
  ADD KEY `fk_t_leader` (`t_leader`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `fk_t_leader` FOREIGN KEY (`t_leader`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
