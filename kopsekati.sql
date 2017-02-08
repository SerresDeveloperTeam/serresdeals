-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 01:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE IF NOT EXISTS `KopseKati` /*!40100 DEFAULT CHARACTER SET  utf8 */;
USE `KopseKati`;

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
-- Indexes for table `prosfores`
--
ALTER TABLE `prosfores`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
