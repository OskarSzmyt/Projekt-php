-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Kwi 2021, 11:29
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `agencjacelna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `carsinfo`
--

CREATE TABLE `carsinfo` (
  `IDpojazd` int(11) NOT NULL,
  `Marka` text NOT NULL COMMENT 'Marka pojazdu',
  `Model` text NOT NULL COMMENT 'Model pojazdu',
  `Rocznik` int(11) NOT NULL COMMENT 'data produkcji pojazdu',
  `Przebieg` int(11) NOT NULL COMMENT 'w km',
  `Nr_rej` text NOT NULL COMMENT 'Numer rejestracyjny',
  `Status` text NOT NULL COMMENT 'Dostępny/Zajęty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `carsinfo`
--

INSERT INTO `carsinfo` (`IDpojazd`, `Marka`, `Model`, `Rocznik`, `Przebieg`, `Nr_rej`, `Status`) VALUES
(0, 'MAN', 'TGS', 2021, 104300, 'PZ211K4', 'DOSTEPNY'),
(2, 'MAN', 'HGK', 2010, 1500000, 'PO12345', 'DOSTEPNY'),
(11, 'MAN', 'TGX', 2021, 10000, 'PZ786k2', 'DOSTEPNY'),
(24, 'MAN', 'TGH', 2019, 263123, 'PZ123GH', 'NIEDOSTEPNY');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `login` varchar(100) NOT NULL,
  `haslo` text NOT NULL,
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Baza danych uzytkownikow';

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`login`, `haslo`, `Imie`, `Nazwisko`, `email`) VALUES
('adnin', '123', 'root', 'toor', 'oskar.szmyt@uczen.zsk.poznan.pl'),
('adnin1', '1234', 'test', 'test', '123@wp,pl'),
('jk', '1234', 'Grażyna', 'ZSK', 'test@wp.pl'),
('kozak', 'qwerty', 'Oskar', 'Tymzs', 'oskarszmyt2001@icloud.com'),
('lekcja', '1234', 'Janusz', 'Kowalski', 'przykład@wp.pl'),
('tester', '123', 'Oskar', 'Szmyt', 'oskarszmyt2001@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia`
--

CREATE TABLE `zlecenia` (
  `IDzlecenia` int(11) NOT NULL,
  `Miejsce_nad` text NOT NULL COMMENT 'miejsce nadania',
  `Miejsce_doc` text NOT NULL COMMENT ',iejsce docelowe',
  `dl` int(11) NOT NULL COMMENT 'dlugosc',
  `szer` int(11) NOT NULL COMMENT 'szerokosc',
  `wys` int(11) NOT NULL COMMENT 'wysokosc ',
  `waga` int(11) NOT NULL COMMENT 'Waga towaru',
  `status` text NOT NULL COMMENT 'w trasie/oczekujacy/zakonczony',
  `pojazd_ID` int(11) NOT NULL COMMENT 'Id pojazdu',
  `UserLogin` text NOT NULL COMMENT 'zleceniodawca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zlecenia`
--

INSERT INTO `zlecenia` (`IDzlecenia`, `Miejsce_nad`, `Miejsce_doc`, `dl`, `szer`, `wys`, `waga`, `status`, `pojazd_ID`, `UserLogin`) VALUES
(12, 'Wroclaw', 'Poznan', 100, 123, 23, 34, 'W trasie', 2, 'adnin'),
(13, 'Wroclaw', 'Poznan', 134, 20, 23, 34, 'Oczekujący', 2, 'kozak'),
(14, 'Poznan', 'Warszawa', 10, 123, 13, 13, 'Dostarczony', 0, 'tester'),
(15, 'Łódź', 'Gdańsk', 12, 123, 123, 4, 'Oczekujący', 11, 'adnin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `carsinfo`
--
ALTER TABLE `carsinfo`
  ADD PRIMARY KEY (`IDpojazd`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indeksy dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD PRIMARY KEY (`IDzlecenia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  MODIFY `IDzlecenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
