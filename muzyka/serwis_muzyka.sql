-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2022, 11:02
-- Wersja serwera: 10.1.8-MariaDB
-- Wersja PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis_muzyka`
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
  `sciezka_okladki` varchar(100) NOT NULL,
  `gatunek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `muzyka`
--

INSERT INTO `muzyka` (`id`, `autor`, `album`, `tytul`, `rok`, `sciezka_muzyki`, `sciezka_okladki`, `gatunek`) VALUES
(1, 'Alan Walker', 'World Of Walker', 'Man On The Moon', 2021, './songs/Man On The Moon.mp3', 'cover/walker.jpg', 'Pop'),
(2, 'Alan Walker', 'World Of Walker', 'Not You', 2021, './songs/Not You.mp3', 'cover/walker.jpg', 'Pop'),
(3, 'Ed Sheeran', 'X', 'I See Fire', 2014, './songs/I See Fire.mp3', './cover/X.jpg', 'Pop'),
(4, 'Ekipa', 'Sezon 3', 'Chill', 2021, './songs/Chill.mp3', './cover/ekipa.jpg', 'Pop'),
(12, 'Ekipa', 'Sezon 3', 'Selfmade', 2021, './songs/EKIPA - SELFMADE.mp3', './cover/ekipa.jpg', 'Hip-Hop'),
(41, 'Ekipa', 'Sezon 3', 'Napad Na Bank', 2021, './songs/EKIPA - NAPAD NA BANK (ft. Roxie).mp3', './cover/ekipa.jpg', 'Pop'),
(42, 'Avici', 'Stories', 'Waiting For Love', 2015, './songs/Avicii - Waiting For Love.mp3', './cover/Avicii-Stories-2015-1200x1200.png', 'Pop'),
(43, 'Gawryle', 'Harnaś', 'Harnaś Ice Tea', 2021, './songs/harnas-ice-tea-prod-dutchrevz.mp3', './cover/harnas.jpg', 'Pop'),
(44, 'Ed Sheeran', 'X', 'Photograph', 2014, './songs/Ed Sheeran - Photograph -  LYRICS .mp3', './cover/X.jpg', 'Pop'),
(45, 'AC/DC', 'Highway to Hell', 'Highway to Hell', 1979, './songs/ACDC - Highway To Hell.mp3', './cover/highway_to_hell.jpg', 'Rock'),
(46, 'Ekipa', 'Sezon 3', 'Szlafroki (feat Janusz Walczuk))', 2021, './songs/szlafroki-feat-janusz-walczuk.mp3', './cover/ekipa.jpg', 'Hip-Hop'),
(47, 'Bob Marley', 'Kaya', 'Is this love ', 1978, './songs/Is this love.mp3', './cover/bob.jpg', 'Reggae'),
(48, 'Chet Baker', 'Chet Baker', 'My Funny Valentine', 2001, './songs/my funny valentine.mp3', './cover/Chet.jpg', 'Jazz');

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
(11, 'rudy123', 'debil', '1234', 2),
(12, 'admin', 'administrator', 'admin', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `muzyka`
--
ALTER TABLE `muzyka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
