-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mob`, `img`) VALUES
(1, 'Sathe Akanksha Arun ', 'asathe1711@gmail.com', 'Sathe@123', '', ''),
(2, '', '', 'Sathe@1234', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'Sathe Akanksha', 'asathe1711@gmail.com', 'hii', 'hello'),
(2, 'Akanksha', 'asathe17711@gmail.com', 'hey', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_info`
--

CREATE TABLE `farmer_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmer_info`
--

INSERT INTO `farmer_info` (`id`, `name`, `email`, `mob`, `address`, `password`) VALUES
(11, 'Akanksha Arun Sathe', 'asathe1711@gmail.com', '8668738997', 'A/P bi.bi.darfal,north solapur, Solapur', 'Sathe@123'),
(12, 'Asmita Arun Sathe', 'asathe1411@gmail.com', '8668738997', 'A/P bi.bi.darfal,north solapur, Solapur', 'Sathe@123'),
(13, 'Shivam Kiran Yelgire', 'skyelgire1114@gmail.com', '8668738997', 'A/P bi.bi.darfal,north solapur, Solapur', '1234@Shivam');

-- --------------------------------------------------------

--
-- Table structure for table `harvester`
--

CREATE TABLE `harvester` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harvester`
--

INSERT INTO `harvester` (`id`, `name`, `mob`, `image`, `info`, `date`, `price`) VALUES
(20, 'Akanksha Sathe', '8668738997\r\n', '6438ebe8115152.86247049.jpg', 'hey', '2023-04-30', '788'),
(21, 'Asmita Sathe', '8530251297', '643908d75a9062.21458465.jpg', 'hi', '2023-04-14', '7'),
(22, 'Aditi Igade', '1234567890', '6439c17221d009.14976387.jpg', 'hello', '2023-04-15', '1234'),
(23, 'Priya Inagle', '3345678654', '643a409177f6c7.67668060.jpg', 'hello', '2023-04-15', '1234'),
(24, 'Adarsh Sathe', '9673139793', '643ac7ebc50c33.66371022.jpg', 'harvester', '2023-04-15', '1000'),
(25, 'Priya Inagle', '1256764667', '643b05038de783.73758464.jpg', 'hello', '2023-04-15', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `info`, `date`, `price`) VALUES
(1, 'WIN_20210917_22_11_28_Pro (2).jpg', '', '0000-00-00', 0),
(2, 'WIN_20210917_22_11_28_Pro (2).jpg', '', '0000-00-00', 0),
(3, 'WIN_20210908_12_30_44_Pro (2).jpg', 'hii', '2023-04-14', 34),
(4, '2.JPG', 'h', '0000-00-00', 0),
(5, 'Geometry-of-Complex-Numbers-03.png', 'j', '0000-00-00', 0),
(6, '', '', '0000-00-00', 0),
(7, '', '', '0000-00-00', 0),
(8, '3.JPG', 'jj', '0000-00-00', 0),
(9, '3.JPG', 'jj', '0000-00-00', 0),
(10, '-1681416499.', '', '0000-00-00', 0),
(11, '-1681450759.', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leveler`
--

CREATE TABLE `leveler` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leveler`
--

INSERT INTO `leveler` (`id`, `image`, `info`, `date`, `price`) VALUES
(1, '6439a904873d08.51518912.jpg', 'Hii', '2023-04-15', 123);

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `name`, `email`, `mob`, `address`, `password`) VALUES
(2, 'Akanksha Arun Sathe', 'asathe1711@gmail.com', '8668738997', 'A/P bi.bi.darfal,north solapur, Solapur', 'Sathe@123'),
(3, 'Akanksha Arun Sathe', 'asathe17711@gmail.com', '8668738997', 'A/P bi.bi.darfal,north solapur, Solapur', 'Sathe@123');

-- --------------------------------------------------------

--
-- Table structure for table `paddy`
--

CREATE TABLE `paddy` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plough`
--

CREATE TABLE `plough` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plough`
--

INSERT INTO `plough` (`id`, `image`, `info`, `date`, `price`) VALUES
(1, '64390bc03a81c8.03156648.jpg', 'hello', '2023-04-14', 700),
(2, '64390c28d6b051.77074172.jpg', 'hello', '2023-04-14', 700);

-- --------------------------------------------------------

--
-- Table structure for table `rotary`
--

CREATE TABLE `rotary` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rotary`
--

INSERT INTO `rotary` (`id`, `image`, `info`, `date`, `price`) VALUES
(1, '64390d1ec99ed3.73830197.jpg', 'hello', '2023-04-14', 700);

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`id`, `image`, `info`, `date`, `price`) VALUES
(1, '6439a8b6899491.40249056.png', 0, 2023, 122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_info`
--
ALTER TABLE `farmer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harvester`
--
ALTER TABLE `harvester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leveler`
--
ALTER TABLE `leveler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paddy`
--
ALTER TABLE `paddy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plough`
--
ALTER TABLE `plough`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rotary`
--
ALTER TABLE `rotary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmer_info`
--
ALTER TABLE `farmer_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `harvester`
--
ALTER TABLE `harvester`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leveler`
--
ALTER TABLE `leveler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paddy`
--
ALTER TABLE `paddy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plough`
--
ALTER TABLE `plough`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rotary`
--
ALTER TABLE `rotary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
