-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 09:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopsekati`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `first_name`, `last_name`, `address`, `email`, `password`, `phone`) VALUES
(1, 'Μάριος', 'Τσεκιτσίδης', 'Άνω Καμήλα', 'tsekitsi@grinnell.edu', '1234', '6951487780');

-- --------------------------------------------------------

--
-- Table structure for table `prosfores`
--

CREATE TABLE `prosfores` (
  `id` int(11) NOT NULL,
  `onoma` text,
  `plhrofories` text,
  `timh` float NOT NULL,
  `telikhtimh` float NOT NULL,
  `eikona` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prosfores`
--

INSERT INTO `prosfores` (`id`, `onoma`, `plhrofories`, `timh`, `telikhtimh`, `eikona`) VALUES
(1, 'Κομμωτήριο-Η Μαρία', 'Καλές προσιτές τιμές. ΠΡΟΣΦΟΡΑ στο γυναικέιο κούρεμα: ', 7, 6, 'prosfores/hair.jpg'),
(2, 'Νυχια-Nail Art', 'Καλές προσιτές τιμές. ΠΡΟΣΦΟΡΑ στο ημιμόνιμο: ', 15, 10, 'prosfores/nails.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prosfores`
--
ALTER TABLE `prosfores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
