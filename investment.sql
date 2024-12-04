-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investment`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `card_img` varchar(500) NOT NULL,
  `title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `get_price` varchar(100) NOT NULL,
  `security_type` varchar(200) NOT NULL,
  `investment` int(11) NOT NULL,
  `maturity` int(11) NOT NULL,
  `min_invest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `tag`, `card_img`, `title`, `location`, `description`, `total_price`, `get_price`, `security_type`, `investment`, `maturity`, `min_invest`) VALUES
(2, 'Home', '10.svg', 'Oxalis', 'Brooklyn', 'A recognized leader in language immersion & early education, opening second school.', '1,000,000', '574,920', 'Revenue Sharing Note', 4, 48, 100),
(3, 'Home', '8.svg', 'Oxolis', 'Brooklyn,NY', 'A recognized leader in language immersion & early education, opening second school.', '1,000,000', '574,920', 'Revenue Sharing Note', 4, 48, 100),
(4, 'Home', '11.svg', 'Oxalis', 'Brooklyn,NY', 'A recognized leader in language immersion & early education, opening second school.', '1,000,000', '574,920', 'Revenue Sharing Note', 4, 48, 1000),
(5, 'Home', '7.svg', 'Oxalis', 'Brooklyn,NY', 'A recognized leader in language immersion & early education, opening second school.', '1,000,000', '574,920', 'Revenue Sharing Note', 4, 48, 100),
(6, 'Home', '9.svg', 'oxalis', 'Brooklyn,NY', 'A recognized leader in language immersion & early education, opening second school.', '1,000,000', '574,920', 'Revenue Sharing Note', 4, 48, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `phone`, `pass`, `role`) VALUES
(2, 'Ankit', 'ankit@gmail.com', 7724, '123123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
