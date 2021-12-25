-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 02.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paketwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketbus`
--

CREATE TABLE `paketbus` (
  `Id` varchar(10) NOT NULL,
  `Jenis_Bus` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `lokasi_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketbus`
--

INSERT INTO `paketbus` (`Id`, `Jenis_Bus`, `Harga`, `Keterangan`, `lokasi_foto`) VALUES
('bus001', 'ELF Short', 850000, 'Elf Short dapat menampung sekitar 13-15 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus1.jpg'),
('bus002', 'ELF Long', 1050000, 'Elf Long dapat menampung sekitar 16-19 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus2.jpg'),
('bus003', 'Hiace Commuter', 1100000, 'Hiace Commuter dapat menampung sekitar 15-16 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus3.jpg'),
('bus004', 'Medium Bus', 800000, 'Medium Bus dapat menampung sekitar 25-31 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus4.jpg'),
('bus005', 'Big Bus', 950000, 'Big Bus dapat menampung sekitar 48 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus5.jpg'),
('bus006', 'SHD Bus', 1250000, 'SHD Bus dapat menampung sekitar 45-50 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus6.jpg'),
('bus007', 'Microbus', 790000, 'Microbus dapat menampung sekitar 45-48 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus7.jpg'),
('bus008', 'Minivan', 1000000, 'Minivan dapat menampung sekitar 15-20 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus8.jpg'),
('bus009', 'Toyota HIACE', 1200000, 'Toyota HIACE dapat menampung sekitar 16 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus9.jpg'),
('bus010', 'Isuzu NQR 71', 1300000, 'Isuzu NQR 71 dapat menampung sekitar 25-30 penumpang. Sewa bus sudah termasuk Crew + BBM.', 'uploads/bus10.jpg'),
('bus11', 'Big Bus', 900000, '40 Penumpang', 'uploads/bus6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketmobil`
--

CREATE TABLE `paketmobil` (
  `Id` varchar(10) NOT NULL,
  `Jenis_Mobil` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `lokasi_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketmobil`
--

INSERT INTO `paketmobil` (`Id`, `Jenis_Mobil`, `Harga`, `Keterangan`, `lokasi_foto`) VALUES
('mbl01', 'Alphard', 2200000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil1.jpg'),
('mbl02', 'Innova Reborn', 600000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil2.jpg'),
('mbl03', 'New Avanza', 400000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil3.jpg'),
('mbl04', 'Grand Innova', 500000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil4.jpg'),
('mbl05', 'Camry', 2200000, 'Penumpang 4-5 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil5.jpg'),
('mbl06', 'Fortuner VRZ', 1400000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil6.jpg'),
('mbl07', 'Mobil Sedan', 650000, 'Penumpang 4-5 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil7.jpg'),
('mbl08', 'Isuzu Panther', 1500000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil8.jpg'),
('mbl09', 'Ayla', 550000, 'Penumpang 2-4 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ', 'uploads/mobil9.jpg'),
('mbl10', 'Rush TRD', 900000, 'Penumpang 5-6 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM.', 'uploads/mobil10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketwisata`
--

CREATE TABLE `paketwisata` (
  `Id` int(10) NOT NULL,
  `Jenis_Paket` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `lokasi_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketwisata`
--

INSERT INTO `paketwisata` (`Id`, `Jenis_Paket`, `Harga`, `Keterangan`, `lokasi_foto`) VALUES
(1, 'Wisata 3 Pantai', 500000, 'Pantai Seminyak, Pantai Kuta, Pantai Pandawa', 'uploads/wisata1.jpg'),
(2, 'Wisata 5 Pantai', 1000000, 'Pantai Seminyak, Pantai Kuta, Pantai Pandawa, Pantai Sanur, Pantai Pura Luhur Uluwatu', 'uploads/wisata2.jpg'),
(3, 'Paket Wisata 1', 1500000, 'Museum Bali, Lapangan Puput Badung, Art Center, Margarana Bajra Sandhi', 'uploads/wisata3.jpg'),
(4, 'Paket Wisata 2', 1800000, 'Tanjung Benoa, Pantai Pendawa, Garuda Wisnu Kencana, Uluwatu', 'uploads/wisata4.jpg'),
(5, 'Paket Wisata 3', 2000000, 'Pura Tanah Lot, Tanjung Benoa, Pantai Pendawa, Garuda Wisnu Kencana', 'uploads/wisata5.jpg'),
(6, 'Paket Wisata 4', 900000, 'Museum 3D Art, Pura Tanah Lot, Pura Ulundanu, Danau Bratan', 'uploads/wisata6.jpg'),
(7, 'Paket Wisata 5', 750000, 'Pura Ulundanu, Pantai Kuta, Kintamani, Pura Tanah Lot', 'uploads/wisata7.jpg'),
(8, 'Paket Wisata 6', 1200000, 'Tanjung Benoa, Pantai Pendawa, Pura Tanah Lot, Pantai Jimbaran', 'uploads/wisata8.jpg'),
(9, 'Paket Wisata Gunung', 1700000, 'Gunung Agung, Gunung Batur, Gunung Abang, Gunung BatuKaru', 'uploads/wisata9.jpg'),
(10, 'Paket Pantai dan Gunung', 2500000, 'Pantai Kuta, Pantai Pandawa, Pantai Jimbaran, Gunung Agung, Gunung Batur', 'uploads/wisata10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'Mutiara Rahmanda', 'mutiararizkia18@gmail.com', 'admin', 1),
(2, 'Havenia Ventina', 'haveniaventina119@gmail.com', 'user', 2),
(5, 'Nur Fadhilah', 'nurfadhilah18@gmail.com', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paketbus`
--
ALTER TABLE `paketbus`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `paketmobil`
--
ALTER TABLE `paketmobil`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `paketwisata`
--
ALTER TABLE `paketwisata`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paketwisata`
--
ALTER TABLE `paketwisata`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
