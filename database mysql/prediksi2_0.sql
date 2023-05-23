-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 02.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediksi2.0`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'muhammad dhaiful imam', 'admin', '$2y$10$dEw.JMO2Bbvuy6vn5qUA0ezK7iub7Fl4gMjJZyElGSqOK/0tTYWLu'),
(3, 'imam', 'imam', '$2y$10$Rd0kNjbxNikglscINWW5wO/1/.bZ15rXfPu2oYzPE3ldZXHH2p4e2'),
(4, 'adm', 'adm', '$2y$10$je04bThcjWpUZCPbL1QE5uJOd/fCxN3rkd2t40kTPZxMk0pcjLU7m');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jagung`
--

CREATE TABLE `jagung` (
  `id_jagung` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jagung`
--

INSERT INTO `jagung` (`id_jagung`, `tahun`, `produksi`, `LuasPanen`) VALUES
(2, 2002, 12424, 4169),
(3, 2003, 9209, 3254),
(4, 2004, 9164, 3182),
(5, 2005, 13331, 4581),
(6, 2006, 9408, 3233),
(7, 2007, 10082, 3441),
(8, 2008, 12637, 3590),
(9, 2009, 19561, 5510),
(10, 2010, 8690, 2871),
(11, 2011, 3346, 1119),
(12, 2012, 3403, 1057),
(13, 2013, 1962, 545),
(14, 2014, 2295, 724),
(15, 2015, 2083, 534),
(16, 2016, 4325, 1232),
(17, 2017, 3341, 933),
(18, 2018, 8456, 1582),
(19, 2019, 8198, 1938),
(20, 2020, 6208, 1227),
(21, 2021, 6734, 1647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kacang_hijau`
--

CREATE TABLE `kacang_hijau` (
  `id_kacangH` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kacang_hijau`
--

INSERT INTO `kacang_hijau` (`id_kacangH`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 1126, 804),
(2, 2003, 609, 580),
(3, 2004, 920, 876),
(4, 2005, 797, 759),
(5, 2006, 892, 826),
(6, 2007, 1087, 1016),
(7, 2008, 827, 870),
(8, 2009, 579, 609),
(9, 2010, 876, 730),
(10, 2011, 260, 325),
(11, 2012, 201, 231),
(12, 2013, 201, 246),
(13, 2014, 195, 236),
(14, 2015, 189, 195),
(15, 2016, 112, 138),
(16, 2017, 112, 138),
(17, 2018, 34, 41),
(18, 2019, 26, 31),
(19, 2020, 19, 26),
(20, 2021, 19, 72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kacang_tanah`
--

CREATE TABLE `kacang_tanah` (
  `id_kacangT` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `produksi` int(11) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kacang_tanah`
--

INSERT INTO `kacang_tanah` (`id_kacangT`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 37241, 11018),
(2, 2003, 10993, 9994),
(3, 2004, 10080, 8920),
(4, 2005, 13865, 8831),
(5, 2006, 13868, 8833),
(6, 2007, 15925, 10016),
(7, 2008, 10546, 7642),
(8, 2009, 8649, 6178),
(9, 2010, 9074, 5636),
(10, 2011, 4698, 3851),
(11, 2012, 4417, 3712),
(12, 2013, 4721, 3442),
(13, 2014, 4123, 3126),
(14, 2015, 3413, 2436),
(15, 2016, 2154, 2019),
(16, 2017, 677, 627),
(17, 2018, 987, 842),
(18, 2019, 947, 821),
(19, 2020, 1429, 1225),
(20, 2021, 1395, 1169);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedelai`
--

CREATE TABLE `kedelai` (
  `id_kedelai` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kedelai`
--

INSERT INTO `kedelai` (`id_kedelai`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 44, 44),
(2, 2003, 44, 46),
(3, 2004, 1209, 1399),
(4, 2005, 32, 28),
(5, 2006, 260, 23),
(6, 2007, 14, 16),
(7, 2008, 50, 42),
(8, 2009, 329, 274),
(9, 2010, 467, 497),
(10, 2011, 375, 278),
(11, 2012, 688, 449),
(12, 2013, 188, 145),
(13, 2014, 2010, 1509),
(14, 2015, 693, 467),
(15, 2016, 621, 415),
(16, 2017, 149, 133),
(17, 2018, 601, 665),
(18, 2019, 329, 481),
(19, 2020, 181, 118),
(20, 2021, 8, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `padi`
--

CREATE TABLE `padi` (
  `id_padi` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `padi`
--

INSERT INTO `padi` (`id_padi`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 355366, '82836'),
(2, 2003, 404665, '81258'),
(3, 2004, 445427, '85824'),
(4, 2005, 475770, '90279'),
(5, 2006, 457952, '87229'),
(6, 2007, 462306, '87244'),
(7, 2008, 478418, '89424'),
(8, 2009, 394177, '72326'),
(9, 2010, 438285, '81224'),
(10, 2011, 419422, '76761'),
(11, 2012, 434230, '79239'),
(12, 2013, 424368, '77132'),
(13, 2014, 455585, '83979'),
(14, 2015, 508954, '88069'),
(15, 2016, 531806, '92186'),
(16, 2017, 505745, '88895'),
(17, 2018, 419228, '79459'),
(18, 2019, 345163, '72560'),
(19, 2020, 391973, '82397'),
(20, 2021, 383353, '78827');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prediksi`
--

CREATE TABLE `tb_prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `produksiX` int(200) NOT NULL,
  `a` int(200) NOT NULL,
  `b` int(200) NOT NULL,
  `HasilY` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ubijalar`
--

CREATE TABLE `ubijalar` (
  `id_ubijalar` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ubijalar`
--

INSERT INTO `ubijalar` (`id_ubijalar`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 10176, 1394),
(2, 2003, 7575, 1010),
(3, 2004, 30552, 4020),
(4, 2005, 9551, 1255),
(5, 2006, 9094, 1195),
(6, 2007, 10740, 1356),
(7, 2008, 12920, 1360),
(8, 2009, 11539, 1202),
(9, 2010, 8958, 1049),
(10, 2011, 8395, 699),
(11, 2012, 14939, 844),
(12, 2013, 9238, 516),
(13, 2014, 7008, 420),
(14, 2015, 3901, 293),
(15, 2016, 5921, 374),
(16, 2017, 5374, 321),
(17, 2018, 2842, 192),
(18, 2019, 2298, 162),
(19, 2020, 2130, 132),
(20, 2021, 2328, 141);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ubikayu`
--

CREATE TABLE `ubikayu` (
  `id_ubikayu` int(11) NOT NULL,
  `tahun` int(50) NOT NULL,
  `produksi` int(200) NOT NULL,
  `LuasPanen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ubikayu`
--

INSERT INTO `ubikayu` (`id_ubikayu`, `tahun`, `produksi`, `LuasPanen`) VALUES
(1, 2002, 40827, 3892),
(2, 2003, 35365, 3299),
(3, 2004, 13066, 1220),
(4, 2005, 46769, 3343),
(5, 2006, 46704, 3360),
(6, 2007, 48283, 3740),
(7, 2008, 56776, 3755),
(8, 2009, 45177, 2738),
(9, 2010, 33937, 2678),
(10, 2011, 39509, 2721),
(11, 2012, 31742, 1702),
(12, 2013, 23707, 1551),
(13, 2014, 23324, 1538),
(14, 2015, 15901, 891),
(15, 2016, 25697, 1268),
(16, 2017, 17824, 874),
(17, 2018, 16038, 620),
(18, 2019, 12449, 521),
(19, 2020, 10167, 430),
(20, 2021, 12610, 573);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jagung`
--
ALTER TABLE `jagung`
  ADD PRIMARY KEY (`id_jagung`);

--
-- Indeks untuk tabel `kacang_hijau`
--
ALTER TABLE `kacang_hijau`
  ADD PRIMARY KEY (`id_kacangH`);

--
-- Indeks untuk tabel `kacang_tanah`
--
ALTER TABLE `kacang_tanah`
  ADD PRIMARY KEY (`id_kacangT`);

--
-- Indeks untuk tabel `kedelai`
--
ALTER TABLE `kedelai`
  ADD PRIMARY KEY (`id_kedelai`);

--
-- Indeks untuk tabel `padi`
--
ALTER TABLE `padi`
  ADD PRIMARY KEY (`id_padi`);

--
-- Indeks untuk tabel `tb_prediksi`
--
ALTER TABLE `tb_prediksi`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indeks untuk tabel `ubijalar`
--
ALTER TABLE `ubijalar`
  ADD PRIMARY KEY (`id_ubijalar`);

--
-- Indeks untuk tabel `ubikayu`
--
ALTER TABLE `ubikayu`
  ADD PRIMARY KEY (`id_ubikayu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jagung`
--
ALTER TABLE `jagung`
  MODIFY `id_jagung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kacang_hijau`
--
ALTER TABLE `kacang_hijau`
  MODIFY `id_kacangH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kacang_tanah`
--
ALTER TABLE `kacang_tanah`
  MODIFY `id_kacangT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kedelai`
--
ALTER TABLE `kedelai`
  MODIFY `id_kedelai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `padi`
--
ALTER TABLE `padi`
  MODIFY `id_padi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_prediksi`
--
ALTER TABLE `tb_prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ubijalar`
--
ALTER TABLE `ubijalar`
  MODIFY `id_ubijalar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ubikayu`
--
ALTER TABLE `ubikayu`
  MODIFY `id_ubikayu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
