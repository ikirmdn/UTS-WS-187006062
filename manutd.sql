-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 15.58
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manutd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menplayers`
--

CREATE TABLE `menplayers` (
  `id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `age` int(30) NOT NULL,
  `country` varchar(100) NOT NULL,
  `statistic` varchar(200) NOT NULL,
  `release_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menplayers`
--

INSERT INTO `menplayers` (`id`, `fullname`, `level`, `age`, `country`, `statistic`, `release_at`) VALUES
(1, 'David De Gea', 'Goalkeepers', 30, 'Spain', 'Appearances : 436 Clean Sheets : 155', '2021-04-25 10:43:33'),
(2, 'Lee Grant', 'Goalkeepers', 38, 'England', 'Appearances : 2', '2021-04-23 10:03:39'),
(3, 'Sergio Romero', 'Goalkeepers', 34, 'Argentina', 'Appearances : 61 \r\nClean Sheets : 39', '2021-04-23 10:03:25'),
(4, 'Dean Henderson', 'Goalkeepers', 24, 'England', 'Appearances : 22\r\nClean Sheets : 11', '2021-04-23 10:03:15'),
(5, 'Joel Pereira', 'Goalkeepers', 24, 'Portugal', 'Appearances : 3 \r\nClean Sheet : 3', '2021-04-23 09:58:42'),
(6, 'Ficry Cahya Ramdani', 'Forwards', 21, 'Indonesia', 'Appearances : 61', '2021-04-24 06:18:52'),
(7, 'Edinson Cavani', 'Forwards', 34, 'Uruguayan', 'Appearances : 31 Goals : 10', '2021-04-24 13:37:35'),
(8, 'Bah Siman', 'Goalkeepers', 29, 'Indonesia', 'Appearances : 2', '2021-04-25 10:44:13'),
(12, 'putra', 'Defenders', 19, 'Indonesia', 'Goal : 1', '2021-04-25 12:26:02'),
(13, 'putra', 'Defenders', 19, 'Indonesia', 'Goal : 1', '2021-04-25 12:26:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menplayers`
--
ALTER TABLE `menplayers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menplayers`
--
ALTER TABLE `menplayers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
