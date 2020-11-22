-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2020 pada 15.49
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `nama_barang`, `harga`) VALUES
(16, 1, 'Snail Truuecica', 180000),
(17, 2, '', 169000),
(18, 2, '', 169000),
(19, 2, 'Yuja Miacin', 169000),
(20, 1, 'Yuja Miacin', 169000),
(21, 1, 'MIRACLE TONNER', 108000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` bigint(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_hp`, `password`) VALUES
(1, 'Ria Rahmawati', 'riarahmawati59@gmail.com', 0, '$2y$10$dFfOJr2xt9UjtJGPqBOYr.xLny14aTCif6wQlZJ2wI0poEw4XIllG'),
(2, 'ali', 'ali@gmail.com', 11111, '$2y$10$sv0FbZhTWtpXi0s6LYQyj.KxSmLu7PVMDxAarred.HgmIsyYb16Ue'),
(3, 'Arsen', 'arsen1@gmail.com', 1234633, '$2y$10$zO3j733X6MiML2doM/sP7eFA2SOHTB3ZVh3.EbwEg9o1dehtSorXq'),
(4, 'qq', 'qq@gmail.com', 12344, '$2y$10$5qPLcfYDe1oQP22vyLOKYO59fMDxzMJ4UMEO7NjLwkTf0aRc4cQOW'),
(5, 'qaqa', 'qaqa@gmail.com', 124546, '$2y$10$85/yvnqdFdZOkceklizkh.9A.3300zy6M608focSOJC3WR1Kx0bEi'),
(6, 'wewe', 'wewe@gmail.com', 445556, '$2y$10$CEIE0emBHSBBQg2giQsmcOLv6d1XuSW5AtFJHW4TjTTep/mE44u..'),
(7, 'aan', 'aan@gmail.com', 899999, '$2y$10$BOTmJS1nYboPJtvhds5nOevTqGDCIRY1hyMAVtjlpdPjDu1dex5Gu'),
(8, 'aq', 'aqu@gmail.com', 123333, '$2y$10$9rjfNf4KsDX.sHkavNzGxOxiHbUwFRrBLXy5990ltozZt2BXy6gtK'),
(9, 'tio', 'tio@gmail.com', 1229389, '$2y$10$69cCo6N6NnR1rkbCIrAbXu8HefsIrRyscFlp7iiSizf9Wd2TMBPYi'),
(10, 'asa', 'asa@gmail.com', 985453, '$2y$10$3Mi.zP1IbrU4yd3LhEOUyO0cfdgVDmtb2oBLWzdDFcOsOybI0Dld6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
