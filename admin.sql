-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 02:33 PM
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ashwini', 'ashu@gmail.com', 'CSE', ''),
(2, 'Namrata', 'namu@gmail.com', 'ENTC', 'Good Design');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `images` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `materials` varchar(256) NOT NULL,
  `quality` varchar(256) NOT NULL,
  `uses` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `gms` int(11) NOT NULL,
  `colors` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `images`, `title`, `materials`, `quality`, `uses`, `size`, `gms`, `colors`) VALUES
(2, 'Dobby Border Towel', 'image1.jpeg', 'Description', '100% cotton Bath Towel', 'Piece Dyed Dobby Border Bath Towel', 'Bath Sheet, Bath Towel, Hand Towel', '90X180, 75X150, 50X90, 40X60', 450, 'As Per Requirement'),
(3, 'Ribs Towel', 'image2.jpeg', 'Description', '100% cotton', 'Piece Dyed Ribs Bath Towel', 'Bath Towel, Hand Towel', '40X60, 50X90, 75X150 cms', 450, 'As Per Requirement'),
(5, 'Jacquard Velour Towel', 'image3.jpeg', 'Description', '100% cotton', 'Piece Dyed Jacquard Velour', 'Bath Towel, Hand Towel', '75X150, 50X90, 40X60', 450, 'As Per Requirement'),
(6, 'Promotional Towels', 'image4.jpeg', 'Description', '100% cotton', 'Promotional Towel', 'Promotional Sets for Gift Purpose', '40X60, 50X90, 70X140', 450, 'As Per Requirement'),
(7, 'Yarn Jacquard Beach Velour', 'image5.jpg', 'Description', '100% cotton', 'Beach Towel', 'Beach', '100X180, 90X180, 80X160, 75X150', 450, 'As Per Required'),
(8, 'yarn dyed jacquard fouta', 'image6.jpeg', 'Description', '100% cotton', 'Fouta Towel', 'Beach Towel', '90X180, 80X160', 350, 'As Per Required');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
