-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reine_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `taille` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `taille`, `password`, `email`) VALUES
(2, 'cabrel', 'sianou', '14', '6934105ad50010b814c933314b1da6841431bc8b', 'sianou93@gmail.com'),
(3, 'rootshadow', 'toot', '14', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sianou93@gmail.com'),
(4, 'yo', 'sianou', '17', '8aefb06c426e07a0a671a1e2488b4858d694a730', 'yo@gmail.com'),
(5, 'rebecca', 'rol', '10', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'rebe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vetement`
--

CREATE TABLE `vetement` (
  `id` int(11) NOT NULL,
  `nom_vetement` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vetement`
--

INSERT INTO `vetement` (`id`, `nom_vetement`, `couleur`, `image`, `description`, `prix`, `date_ajout`) VALUES
(4, '', '', 'Capture d’écran (18).png', 'reddzd', '', '0000-00-00 00:00:00'),
(5, '', '', 'Capture d’écran (7).png', 'pantalon pour le foid', '', '0000-00-00 00:00:00'),
(6, 'pantalon', 'noir', 'buy-3.jpg', 'pantalon de jeune de taill  27', '', '0000-00-00 00:00:00'),
(7, 'robe', 'orange', 'buy-2.jpg', 'montre de sport', '2540F', '0000-00-00 00:00:00'),
(8, 'tenis', 'blanche', 'product-7.jpg', 'tenis de sport', '2740F', '0000-00-00 00:00:00'),
(9, 'pull', 'blanche', 'category-3.jpg', 'pull pour le froid', '2540F', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetement`
--
ALTER TABLE `vetement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
