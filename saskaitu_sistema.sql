-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 04:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saskaitu_sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `klientai`
--

CREATE TABLE `klientai` (
  `kliento_nr` int(4) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `adresas` varchar(50) NOT NULL,
  `saskaitos_nr` varchar(10) NOT NULL,
  `el_pastas` varchar(30) NOT NULL,
  `statusas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientai`
--

INSERT INTO `klientai` (`kliento_nr`, `vardas`, `pavarde`, `slaptazodis`, `adresas`, `saskaitos_nr`, `el_pastas`, `statusas`) VALUES
(2337, 'Lina', 'Makstyte', '$2y$10$f4hJG4oBmR/BRx6DHnvLNOPAkBmnhj1fgb48FxhkLEBrBGRiTDlIC', 'Utena', 'LT12567845', 'makst@gmail.com', 'klientas'),
(3095, 'Tadas', 'Belushis', '$2y$10$3rGLYAZca78org7SPUoFzuylSfb3C5o5pCHUKF2icPlIB3jR9uGdq', 'Kaunas', 'LT98653265', 'tasd@yahoo.com', 'klientas'),
(6454, 'Karina', 'Krisko', '$2y$10$aFMEB4uL6QBLA0k.u3ybhOm56LS11JWJTPYij5ky45C/pv2nmuAMa', 'Vilnius', 'LT85857474', 'karina@gmail.com', 'buhalteris'),
(9672, 'Mantas', 'Vyšniauskas', '$2y$10$OIfjiDRuWVMdm3PvHWyBruWALEKHVePw4a7hIJ2VsIB8pDJYrtQBC', 'Kaunas', 'LT56742584', 'mantutis@gmail.com', 'administratorius');

-- --------------------------------------------------------

--
-- Table structure for table `saskaitos`
--

CREATE TABLE `saskaitos` (
  `serijos_nr` int(11) NOT NULL,
  `saskaitos_nr` varchar(30) NOT NULL,
  `kliento_nr` int(11) NOT NULL,
  `gavejas` varchar(30) NOT NULL,
  `mokejimo_paskirtis` varchar(30) NOT NULL,
  `kiekis` int(11) NOT NULL,
  `data` date NOT NULL,
  `suma` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saskaitos`
--

INSERT INTO `saskaitos` (`serijos_nr`, `saskaitos_nr`, `kliento_nr`, `gavejas`, `mokejimo_paskirtis`, `kiekis`, `data`, `suma`) VALUES
(1, 'LT9865326598', 2337, 'UAB \"Makentošas\"', 'Makiažas', 5, '2020-12-31', '159.00'),
(2, 'LT7845124587', 2337, 'UAB \"Senukai\"', 'Buitinė technika', 2, '2021-01-31', '63.00'),
(3, 'LT78451245', 2337, 'UAB \"Meirinda\"', 'Batai', 1, '2021-01-22', '56.00'),
(4, 'LT5284621387', 2337, 'UAB \"Makendonas\"', 'Maistas', 20, '2021-02-24', '68.87'),
(5, 'LT7852145214', 3095, 'UAB \"Maxima\"', 'Maisto prekės', 11, '2020-12-24', '78.45'),
(6, 'LT2021542874', 3095, 'UAB \"Regitra\"', 'Vairuotojo pažymėjimas', 1, '2021-02-28', '15.89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientai`
--
ALTER TABLE `klientai`
  ADD PRIMARY KEY (`kliento_nr`);

--
-- Indexes for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD PRIMARY KEY (`serijos_nr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saskaitos`
--
ALTER TABLE `saskaitos`
  MODIFY `serijos_nr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
