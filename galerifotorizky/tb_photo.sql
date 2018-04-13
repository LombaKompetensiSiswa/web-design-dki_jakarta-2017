-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2017 pada 05.42
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotografi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_photo`
--

CREATE TABLE `tb_photo` (
  `id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `category` enum('product','people','sport','') DEFAULT NULL,
  `date` date NOT NULL,
  `descPhoto` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `ratings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_photo`
--

INSERT INTO `tb_photo` (`id`, `title`, `photo`, `category`, `date`, `descPhoto`, `id_user`, `ratings`) VALUES
(6, 'Product Mahal', 'Guitar_11.jpg', 'product', '2017-02-27', '  ini adalah sebuah product mahal  ', 12, 74),
(7, 'Orang-orang', 'folkloric-festival-peru.jpg', 'people', '2017-02-27', '     ini banyak orang     ', 12, 75),
(8, 'Produk Bikin Kenyang', 'hidangan_restoran.jpg', 'product', '2017-02-27', ' nyam-nyam, saya sangat kenyang! ', 12, 78),
(9, 'Produk Buat Razia Rambut', 'barber-shears.jpg', 'product', '2017-02-27', '  Ini adalah alat yang digunakan untuk merazia rambut siswa! hehehe :D  ', 12, 75),
(10, 'Hap-Hap Lompat-Lompat', 'poland-summer-hay-jumping.jpg', 'people', '2017-02-27', ' Yok kita lompaaaaaaaaat :D  ', 12, 83),
(11, 'Main bola sore-sore', 'sunset-soccer-brazil-silhouette_84062_990x742.jpg', 'people', '2017-02-27', ' Paling asik main bola sore-sore bareng temen! :D hehehe ', 12, 88),
(12, 'Touch Down!', '06-full.jpg', 'sport', '2017-02-27', 'TouchDown! Yeaaaah!', 12, 79),
(13, 'Fokus! Tembak!', 'olympics-archery.jpeg', 'sport', '2017-02-27', ' Saya lagi fokus memanah nih!!! ', 12, 89),
(14, 'Saya Menaaang!', 'olympics-emotional-moments-slideshow-cycling.jpeg', 'sport', '2017-02-27', ' Horeeeeeeeeeeeee! Saya menang! ', 12, 96),
(15, 'Motor Mahal', 'triumps_chopper_motobile.jpg', 'product', '2017-02-28', ' Motor tua ini sangat mahal lho! ', 13, 100),
(16, 'Pulpen Emas', 'Waterman-Fountain-Pen.jpg', 'product', '2017-02-28', ' Pulpen ini terbuat dari emas asli ', 13, 75),
(17, 'Sepatu Boot', 'shoes-hiking-boots.jpg', 'product', '2017-02-28', ' Sepatu boot hilang ', 13, 100),
(18, 'Jalanan Macet', 'traffic-transportation-lagos-nigeria.jpg', 'people', '2017-02-28', ' Waduuh, sangat macet jalanan ini ', 13, 75),
(19, 'Berlayar', 'varanasi-boat-ngpc2015.jpg', 'people', '2017-02-28', ' Berlayar di lautan!!! ', 13, 100),
(20, 'Lukisan Keren', 'street-painting-florence_91837_990x742.jpg', 'people', '2017-02-28', ' Lukisan ini keren sekali lhooo! ', 13, 100),
(21, 'Balapan Motor', 'motorcross_australia.jpg', 'sport', '2017-02-28', ' Ngeeeeeng..ngeeeng... ', 13, 100),
(23, 'Saya Menaang!', 'usain_bolt_track_olympics.jpg', 'sport', '2017-02-28', ' Saya menang main bola! ', 13, 75),
(24, 'Hockey', 'syracuse_cornell_lacrosse.jpg', 'sport', '2017-02-28', ' Lompaaaaat! ', 13, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_photo`
--
ALTER TABLE `tb_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD CONSTRAINT `tb_photo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
