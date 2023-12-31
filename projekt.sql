-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 04:56 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obiekty`
--

CREATE TABLE `obiekty` (
  `id` int(11) NOT NULL,
  `uzytkownik_id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `typ` varchar(100) DEFAULT NULL,
  `odleglosc` double NOT NULL,
  `obraz` text DEFAULT NULL,
  `data_stworzenia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obiekty`
--

INSERT INTO `obiekty` (`id`, `uzytkownik_id`, `nazwa`, `typ`, `odleglosc`, `obraz`, `data_stworzenia`) VALUES
(2, 205, 'Ziemia', 'planeta', 0, NULL, '2023-12-13 18:13:46'),
(3, 205, 'Słońce', 'star', 3, NULL, '2023-12-13 18:13:57'),
(4, 205, 'dsa', 'Ksiezyc', 2, NULL, '2023-12-13 18:14:01'),
(5, 205, 'dsaf', 'idk', 1, NULL, '2023-12-13 18:14:04'),
(6, 205, 'NiggerPlanet', 'Asteroida', 19, NULL, '2023-12-13 18:15:39'),
(7, 205, 'fsgsdgsdgds', 'Czerwony gigant', 8, NULL, '2023-12-13 18:16:50'),
(8, 205, 'dsaafa', 'Kometa', 5, NULL, '2023-12-13 18:16:55'),
(9, 206, 'NEGRUSUS NEGRUS', 'Czarna dziura', 13, NULL, '2023-12-13 18:31:20'),
(10, 205, 'dsadsa', 'Księżyc', 13, NULL, '2023-12-13 18:35:48'),
(11, 205, 'dsads', 'Nie wiem', 6, NULL, '2023-12-14 15:43:38'),
(12, 207, 'dsd', 'Czarna dziura', 7, NULL, '2023-12-29 21:10:13'),
(13, 207, 'dsad', 'Czarna dziura', 7, '', '2023-12-30 12:45:30'),
(14, 207, 'kolejka', 'Księżyc', 7, '', '2023-12-30 12:54:11'),
(21, 207, 'Planeta1', 'Gwiazda', 7, '', '2023-12-30 13:10:04'),
(22, 207, 'PLANETA 2', 'Czarna dziura', 10, 'Profil.png', '2023-12-30 13:10:15'),
(23, 207, 'Merkury', 'Planeta', 8, 's1703938481_Merkurypng', '2023-12-30 13:14:41'),
(24, 207, 'Wenus', 'Planeta', 7, 's_Wenus.', '2023-12-30 13:17:10'),
(25, 207, 'Wenus', 'Czarna dziura', 7, 's1703938679_Wenus.jpg', '2023-12-30 13:17:59'),
(26, 207, 'Wenuses', 'Planeta', 7, 's1703938719_Wenuses.jpg', '2023-12-30 13:18:39'),
(27, 207, 'WENUS', 'Gwiazda', 7, 's1703938906_WENUS.jpg', '2023-12-30 13:21:46');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `data_stworzenia` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `data_stworzenia`) VALUES
(205, 'nigger', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-12-31 15:18:43'),
(206, 'nick', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-12-31 15:18:43'),
(207, 's', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-12-31 15:18:43'),
(208, 'nick', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-12-31 15:18:43'),
(209, 'barmc', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', '2023-12-31 15:18:43');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `obiekty`
--
ALTER TABLE `obiekty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obiekty`
--
ALTER TABLE `obiekty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
