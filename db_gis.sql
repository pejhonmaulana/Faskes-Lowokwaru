-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2022 pada 12.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id_faskes` int(100) NOT NULL,
  `nama_faskes` varchar(255) NOT NULL,
  `alamat` tinytext NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id_faskes`, `nama_faskes`, `alamat`, `telepon`, `latitude`, `longitude`) VALUES
(1, 'Puskesmas Dinoyo', 'Jalan Mayjend M.T. Haryono, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341) 581442', '-7.9432881', '112.6090787'),
(2, 'Puskesmas Mojolangu', 'Jl. Sudimoro No.17 A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0341) 482905', '-7.938373', '112.6300364'),
(3, 'Puskesmas Kendalsari', 'Jl. Cengger Ayam I No.8, RW.02, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341) 478215', '-7.9461607', '112.6284464'),
(4, 'RSI Unisma', 'Jalan Mayjen Haryono No.139, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur', '(0341)551356', '-7.9402626', '112.6066467'),
(5, 'Klinik Daqu Sehat New', 'Jl. Sunan Muria No.2, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341)2991199', '-7.954027', '112.6043315'),
(6, 'Klinik CVT', 'JL. M.T. Haryono, No. 139, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '(0341)551356', '-7.942701', '112.6054143'),
(7, 'RS Universitas Brawijaya', 'Jl. Soekarno - Hatta, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341)403000', '-7.9412275', '112.6193476'),
(8, 'Praktek Dr. Rejekining Diah', 'Jalan Mayjend Jl. MT. Haryono No.110, Dinoyo, Lowokwaru, Malang City, East Java 65144', '(0341)7038108', '-7.9418762', '112.6070875'),
(9, 'Poliklinik UMMI Malang', 'Jl. Gajayana No.50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', 'tidak tersedia', '-7.951407', '112.6066133'),
(10, 'Puskesmas Pembantu Merjosari', 'Jl. Mertojoyo, Merjosari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'tidak tersedia', '-7.9514069', '112.6000472'),
(11, 'Klinik UB', 'Jl. MT. Haryono, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65113', '(0341)571197', '7.9506983', '112.6112689'),
(12, 'Poliklinik UM ', 'Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '(0341)551312', '-7.9618403', '112.6146345'),
(13, 'Klinik Panti Rahayu', 'Jl. Simpang Borobudur No.1, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0851)73021670', '-7.9398018', '112.6342523'),
(14, 'Klinik Rawat Inap Amanah Husada', 'Jl. Kalpataru No.20, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '(0341)410850', '-7.9507123', '112.6292872'),
(15, 'Klinik Istana Sehat Abadi', 'Jl. Cengkeh No.23, RW.02, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0812 16073408', '-7.9499587', '112.6064077'),
(16, 'Klinik Widya Husada', 'Jl. Terusan Sudimoro No.16, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0341)4382958', '-7.9507122', '112.6227211'),
(17, 'Klinik Argaraya Medika', 'Jl. Kalpataru No.39, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0858 06445804', '-7.950558', '112.6123785'),
(18, 'Puskesmas Pembantu Jatimulyo', 'Jl. Simbar Menjangan, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'tidak tersedia', '-7.944333', '112.6149313');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id_faskes`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id_faskes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
