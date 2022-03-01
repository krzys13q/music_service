-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Mar 2022, 10:44
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis muzyka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `muzyka`
--

CREATE TABLE `muzyka` (
  `id` int(11) NOT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL,
  `tytul` varchar(50) DEFAULT NULL,
  `rok` int(4) DEFAULT NULL,
  `sciezka_muzyki` varchar(100) DEFAULT NULL,
  `sciezka_okladki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `muzyka`
--

INSERT INTO `muzyka` (`id`, `autor`, `album`, `tytul`, `rok`, `sciezka_muzyki`, `sciezka_okladki`) VALUES
(1, 'Alan Walker', 'World Of Walker', 'Man On The Moon', 2021, './songs/Man On The Moon.mp3', 'cover/walker.jpg'),
(2, 'Alan Walker', 'World Of Walker', 'Not You', 2021, './songs/Not You.mp3', 'cover/walker.jpg'),
(3, 'Ed Sheeran', 'X', 'I See Fire', 2014, './songs/I See Fire.mp3', './cover/X.jpg'),
(4, 'Ekipa', 'Ekipa', 'Chill', 2021, './songs/Chill.mp3', './cover/ekipa.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `password`, `type`) VALUES
(1, 'muzyk', 'muzyk', '123456', 1),
(2, 'muzyk2', 'muzyk', '123456789', 1),
(3, 'login', 'nazwa', 'haslo', 2),
(4, 'daro', 'darek', '1234', 2),
(7, 'eqewqe', 'weqewq', '12345', 2),
(9, 'hbgfn', 'fghhff', '123456', 1),
(10, 'dawid', 'rudy', '1234', 2),
(11, 'rudy123', 'debil', '1234', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `muzyka`
--
ALTER TABLE `muzyka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `muzyka`
--
ALTER TABLE `muzyka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
