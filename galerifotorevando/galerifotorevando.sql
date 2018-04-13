-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 01:57 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galerifotorevando`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `foto`, `user_id`) VALUES
(1, 'Admin', 'admin.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `fotografer`
--

CREATE TABLE `fotografer` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `biodata` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fotografer`
--

INSERT INTO `fotografer` (`id`, `nama`, `foto`, `biodata`, `user_id`) VALUES
(2, 'Bill Frakes', '1488178656.jpg', 'Berasal dari Nebraskan, Bill Frakes adalah pendongeng visual dan pendidik yang berbasis di Florida yang telah bekerja di setiap negara bagian AS dan di lebih dari 138 negara untuk berbagai macam klien editorial dan iklan.\r\n\r\nKlien iklan nya termasuk Apple, Nike, Coca Cola, Nikon, Mars, Manfrotto, dan Reebok. Dia juga menjadi pengarah video musik dan iklan televisi.\r\n\r\nIa memenangkan Newspaper Photographer of the Year didambakan dalam kompetisi Pictures of the Year . Dia adalah anggota dari staf Miami Herald yang memenangkan Hadiah Pulitzer untuk liputan mereka mengenai Badai Andrew. Ia dianugerahi Medali Emas oleh World Press Photo. Dia juga mendapat penghormatan oleh Robert F. Kennedy Journalism Awards untuk melaporkan mereka yang kurang beruntung.Dia telah menerima ratusan penghargaan nasional dan internasional untuk karyanya.\r\n\r\nDia telah mengajar di University of Miami, University of Florida dan University of Kansas sebagai profesor dan dosen. Selama lima tahun terakhir, ia telah mengajar di lebih dari 100 universitas membahas multimedia dan foto jurnalistik. Melalui perusahaan produksinya, Straw Hat Visual, dia mempersiapkan konten pendidikan yang disebarkan dalam buku multi touch elektronik di 22 negara di seluruh Amerika Utara dan Selatan.\r\n\r\nPada tahun 2010 dan 2013, ia menjabat sebagai juri World Press Photo.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `fotografer_id` int(10) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Commercial Photography'),
(2, 'Olahraga'),
(3, 'People');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `isi` text NOT NULL,
  `karya_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul_pesan` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `judul_pesan`, `isi_pesan`) VALUES
(1, 'Revando', 'Spam', 'Jangan dilihat');

-- --------------------------------------------------------

--
-- Table structure for table `kurator`
--

CREATE TABLE `kurator` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `biodata` text NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurator`
--

INSERT INTO `kurator` (`id`, `nama`, `foto`, `biodata`, `user_id`) VALUES
(1, 'Bruce Gilden', '1488170420.jpg', 'Bruce Gilden diberkahi dengan mata yang tajam untuk mengamati perilaku dan kebiasaan perkotaan. Ia belajar sosiologi, tetapi minatnya dalam fotografi tumbuh ketika ia melihat film karya  Michelangelo Antonioni berjudul Blow-Up, setelah itu ia mulai mengambil kelas malam mengenai fotografi di New York School of Visual Arts.\r\n\r\nKeingintahuan Gilden tentang karakter yang kuat dan keunikan individu, telah hadir sejak awal karirnya. Proyek besarnya yang pertama, di mana dia bekerja sampai tahun 1986, difokuskan pada Coney Island. Selama tahun-tahun awal Gilden juga membuat foto di New Orleans selama festival Mardi Gras yang terkenal. Kemudian, pada tahun 1984, ia mulai bekerja di Haiti, berikut daya tarik dengan tempat voodoo, ritual dan keyakinan disana; bukunya Haiti diterbitkan pada tahun 1996.\r\n\r\nPada bulan Juni 1998 Gilden bergabung dengan Magnum. Ia kembali ke akar dan menangani pendekatan baru untuk ruang perkotaan, khususnya jalan-jalan New York City, di mana dia telah bekerja sejak tahun 1981. Karyanya mencapai puncaknya dalam publikasi Facing New York (1992), dan kemudian A Beautiful Catastrophe (2005); semakin dekat dengan subjek, ia mendirikan sebuah gaya ekspresif dan teatrikal yang menjadikan dunia sebagai komedi sopan santun yang besar.\r\n\r\nProyeknya, After Off, dengan teks oleh penulis Irlandia Dermot Healey, menjelajahi pedesaan Irlandia. Buku berikutnya, Go, menembus sisi gelap Jepang.\r\n\r\nGilden, yang telah melakukan perjalanan dan pameran di seluruh dunia, telah menerima berbagai penghargaan, termasuk penghargaan European Award for Photography, tiga National Endowment untuk beasiswa Seni, dan perkumpulan Japan Foundation.', 3),
(2, 'Carl De Keyzer', '1488179918.jpg', 'Carl De Keyzer memulai karirnya sebagai fotografer freelance pada tahun 1982, sementara profesi lain sebagai instruktur fotografi di Royal Academy of Fine Arts di Ghent. Pada saat yang sama, minatnya dalam karya fotografer lain menuntunnya untuk membuat Galeri XYZ-Photography. Menjadi calon Magnum pada tahun 1990, ia menjadi anggota penuh pada tahun 1994.\r\n\r\nDe Keyzer, yang telah memamerkan karyanya secara teratur dalam galeri Eropa, adalah penerima sejumlah besar penghargaan termasuk Book Award from Festival Arles, W. Eugene Smith Award (1990) dan Kodak Award (1992).\r\n\r\nDe Keyzer suka menangani proyek-proyek skala besar dan tema umum. Sebuah premis dasar di banyak karyanya adalah bahwa, dalam masyarakat dengan populasi  penduduk di mana-mana, telah terjadi bencana dan prasarana berada di ambang kehancuran. Gayanya tidak tergantung pada gambar yang terisolasi; sebaliknya, ia lebih suka akumulasi gambar yang berinteraksi dengan teks (sering diambil dari buku harian perjalanannya sendiri). Ia telah meliput India, runtuhnya Uni Soviet dan - yang terkini - politik dan listrik modern.', 4),
(3, 'Kurator 3', '1488284093.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(10) NOT NULL,
  `nilai` int(10) NOT NULL,
  `karya_id` int(10) NOT NULL,
  `kurator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Kurator'),
(3, 'Fotografer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(2, 'bill', 'bill', 3),
(3, 'gilden', 'gilden', 2),
(4, 'carl', 'carl', 2),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(6, 'kurator3', 'ecbc95c5d6d5d4cfec82c966bc018fb6', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `fotografer`
--
ALTER TABLE `fotografer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `fotografer_id` (`fotografer_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karya_id` (`karya_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurator`
--
ALTER TABLE `kurator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karya_id` (`karya_id`),
  ADD KEY `kurator_id` (`kurator_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fotografer`
--
ALTER TABLE `fotografer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kurator`
--
ALTER TABLE `kurator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fotografer`
--
ALTER TABLE `fotografer`
  ADD CONSTRAINT `fotografer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karya`
--
ALTER TABLE `karya`
  ADD CONSTRAINT `karya_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karya_ibfk_2` FOREIGN KEY (`fotografer_id`) REFERENCES `fotografer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`karya_id`) REFERENCES `karya` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kurator`
--
ALTER TABLE `kurator`
  ADD CONSTRAINT `kurator_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`kurator_id`) REFERENCES `kurator` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`karya_id`) REFERENCES `karya` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
