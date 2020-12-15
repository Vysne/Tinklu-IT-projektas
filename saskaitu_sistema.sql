-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Grd 15 d. 23:58
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

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
-- Sukurta duomenų struktūra lentelei `klientai`
--

CREATE TABLE `klientai` (
  `kliento_nr` int(4) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `slaptazodis` varchar(30) NOT NULL,
  `adresas` varchar(50) NOT NULL,
  `saskaitos_nr` varchar(10) NOT NULL,
  `el_pastas` varchar(30) NOT NULL,
  `statusas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `klientai`
--

INSERT INTO `klientai` (`kliento_nr`, `vardas`, `pavarde`, `slaptazodis`, `adresas`, `saskaitos_nr`, `el_pastas`, `statusas`) VALUES
(1129, 'Nijole', 'Pareigyte', '$2y$10$M0HafQWZaLVsS/Z31lkmZ.C', 'Laisves al. A45, Kaunas', 'LT4566825', 'NijoleP@gmail.com', 'klientas'),
(1146, 'test3', 'test3', '$2y$10$REpXPwKsWHeUYelG0jfjluf', 'test3', 'test3', 'test3@gmail.com', 'klientas'),
(3096, 'test', 'test2', '$2y$10$2q5Q3ht9We4bVqnmqqY0n.v', 'test g., Test', 'test145614', 'test@gmail.com', 'klientas'),
(4856, 'test5', 'test5', '$2y$10$EIesRPSMb2EqBKbdyi83cup', 'test5', 'test5', 'test5@gmail.com', 'klientas'),
(5249, 'test2', 'test1', '$2y$10$03YQDEZB/dKq0tkPx4zcFe7', 'test g., Test', 'test454648', 'test2@gmail.com', 'klientas'),
(7319, 'Mantas', 'Vysniauskas', '$2y$10$IZaiHH41nW/ixM0Bu3YX6.g', 'Studentu g. 69, Kaunas', 'LT3215816', 'vysnius272@gmail.com', 'klientas'),
(7521, 'Tomas', 'Dabrauskas', '$2y$10$XFzfXRzwCDa3Mvo1qSA0Eu9', 'Zirmunu g. 180, Jonava', 'LT21214', 'entuziastas@yahoo.com', 'klientas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientai`
--
ALTER TABLE `klientai`
  ADD PRIMARY KEY (`kliento_nr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
