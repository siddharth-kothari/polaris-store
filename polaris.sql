-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 04:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `user_id` int(20) NOT NULL,
  `item_id` int(20) NOT NULL,
  `owned` int(1) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`) VALUES
(1, 'Control', 'product/Control/Control.jpg', 1699.99),
(2, 'Tom Clancy\'s Rainbow Six: Siege', 'product/R6 Siege/Siege.jpg', 999.99),
(3, 'Metro Exodus', 'product/Metro Exodus/Exodus.jpg', 1179.99),
(4, 'Cyberpunk 2077', 'product/Cyberpunk 2077/CP.png', 2999.99),
(5, 'The Outer Worlds', 'product/The Outer Worlds/OW.png', 3199.99),
(6, 'Watch Dogs: Legion', 'product/Watch Dogs Legion/Legion.jpg', 3699.99),
(7, 'Borderlands 3', 'product/Borderlands 3/Borderlands3.png', 3499.99),
(8, 'The Walking Dead: The Telltale Definitive Series', 'product/The Walking Dead Definitive Series/TWD.png', 1299.99),
(9, 'Vampire: The Masquerade - Bloodlines 2', 'product/Bloodlines 2/Bloodlines2.png', 1499.99),
(12, 'Shadow of the Tomb Raider', 'product/SOTR/SOTR.jpg', 1154.99),
(10, 'The Witcher 3: Wild Hunt', 'product/TW3/TW3.png', 299.99),
(11, 'Dishonored 2', 'product/Dishonored 2/D2.jpg', 534.99),
(13, 'Red Dead Redemption 2', 'product/RDR2/RDR2.jpg', 3199.99),
(14, 'Batman™: Arkham Knight', 'product/BAK/BAK.jpg', 337.99),
(15, 'Counter-Strike: Global Offensive Prime Status', 'product/CSGO/CSGO.jpg', 565.99);

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(3) NOT NULL,
  `Fname` varchar(16) NOT NULL,
  `Lname` varchar(16) NOT NULL,
  `DisplayName` varchar(16) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Moniker` (`DisplayName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
