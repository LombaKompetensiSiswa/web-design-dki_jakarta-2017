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
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `photoProfile` varchar(50) DEFAULT NULL,
  `biodata` text,
  `level` enum('admin','kurator','member','') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `username`, `password`, `photoProfile`, `biodata`, `level`) VALUES
(1, 'Athalla Rizky', 'admin', 'admin', 'olympics-emotional-moments-slideshow-judo.jpeg', '              Saya adalah admin! Wahahaha    ', 'admin'),
(10, 'Bruce Gilden', 'kurator', 'kurator', 'bruce_gilden.jpg', '    Bruce Gilden diberkahi dengan mata yang tajam untuk mengamati perilaku dan kebiasaan perkotaan. Ia belajar sosiologi, tetapi minatnya dalam fotografi tumbuh ketika ia melihat film karya  Michelangelo Antonioni berjudul Blow-Up, setelah itu ia mulai mengambil kelas malam mengenai fotografi di New York School of Visual Arts.\r\n\r\nKeingintahuan Gilden tentang karakter yang kuat dan keunikan individu, telah hadir sejak awal karirnya. Proyek besarnya yang pertama, di mana dia bekerja sampai tahun 1986, difokuskan pada Coney Island. Selama tahun-tahun awal Gilden juga membuat foto di New Orleans selama festival Mardi Gras yang terkenal. Kemudian, pada tahun 1984, ia mulai bekerja di Haiti, berikut daya tarik dengan tempat voodoo, ritual dan keyakinan disana; bukunya Haiti diterbitkan pada tahun 1996.\r\n\r\nPada bulan Juni 1998 Gilden bergabung dengan Magnum. Ia kembali ke akar dan menangani pendekatan baru untuk ruang perkotaan, khususnya jalan-jalan New York City, di mana dia telah bekerja sejak tahun 1981. Karyanya mencapai puncaknya dalam publikasi Facing New York (1992), dan kemudian A Beautiful Catastrophe (2005); semakin dekat dengan subjek, ia mendirikan sebuah gaya ekspresif dan teatrikal yang menjadikan dunia sebagai komedi sopan santun yang besar.\r\n\r\nProyeknya, After Off, dengan teks oleh penulis Irlandia Dermot Healey, menjelajahi pedesaan Irlandia. Buku berikutnya, Go, menembus sisi gelap Jepang.\r\n\r\nGilden, yang telah melakukan perjalanan dan pameran di seluruh dunia, telah menerima berbagai penghargaan, termasuk penghargaan European Award for Photography, tiga National Endowment untuk beasiswa Seni, dan perkumpulan Japan Foundation.    ', 'kurator'),
(11, 'Carl de Keyzer', 'kurator2', 'kurator', 'carl _de_keyzer.jpg', 'Carl De Keyzer memulai karirnya sebagai fotografer freelance pada tahun 1982, sementara profesi lain sebagai instruktur fotografi di Royal Academy of Fine Arts di Ghent. Pada saat yang sama, minatnya dalam karya fotografer lain menuntunnya untuk membuat Galeri XYZ-Photography. Menjadi calon Magnum pada tahun 1990, ia menjadi anggota penuh pada tahun 1994.\r\n\r\nDe Keyzer, yang telah memamerkan karyanya secara teratur dalam galeri Eropa, adalah penerima sejumlah besar penghargaan termasuk Book Award from Festival Arles, W. Eugene Smith Award (1990) dan Kodak Award (1992).\r\n\r\nDe Keyzer suka menangani proyek-proyek skala besar dan tema umum. Sebuah premis dasar di banyak karyanya adalah bahwa, dalam masyarakat dengan populasi  penduduk di mana-mana, telah terjadi bencana dan prasarana berada di ambang kehancuran. Gayanya tidak tergantung pada gambar yang terisolasi; sebaliknya, ia lebih suka akumulasi gambar yang berinteraksi dengan teks (sering diambil dari buku harian perjalanannya sendiri). Ia telah meliput India, runtuhnya Uni Soviet dan - yang terkini - politik dan listrik modern.', 'kurator'),
(12, 'Alessandra Sanguinetti', 'member', 'member', 'Alessandra Sanguinetti.jpg', '     Alessandra Sanguinetti was born in New York, 1968, brought up in Argentina from 1970 until 2003, and is currently based in San Francisco.\r\n\r\nShe is a recipient of a Guggenheim Foundation fellowship and a Hasselblad Foundation grant. Her photographs are included in public and private collections, such as the Museum of Modern Art (NY), the San Francisco Museum of Modern Art, the Museum of Fine Arts in Houston, Museum of Fine Arts, Boston. Her book, â€œOn the Sixth Dayâ€, was published by Nazraeli Press in January 2006.\r\n\r\nShe has photographed for the The New York Times Magazine, LIFE, Newsweek, and New York Magazine.     ', 'member'),
(13, 'Bill Frakes', 'member2', 'member', 'bill_frakes_selfphoto.jpg', 'Berasal dari Nebraskan, Bill Frakes adalah pendongeng visual dan pendidik yang berbasis di Florida yang telah bekerja di setiap negara bagian AS dan di lebih dari 138 negara untuk berbagai macam klien editorial dan iklan.\r\n\r\nKlien iklan nya termasuk Apple, Nike, Coca Cola, Nikon, Mars, Manfrotto, dan Reebok. Dia juga menjadi pengarah video musik dan iklan televisi.\r\n\r\nIa memenangkan Newspaper Photographer of the Year didambakan dalam kompetisi Pictures of the Year . Dia adalah anggota dari staf Miami Herald yang memenangkan Hadiah Pulitzer untuk liputan mereka mengenai Badai Andrew. Ia dianugerahi Medali Emas oleh World Press Photo. Dia juga mendapat penghormatan oleh Robert F. Kennedy Journalism Awards untuk melaporkan mereka yang kurang beruntung.Dia telah menerima ratusan penghargaan nasional dan internasional untuk karyanya.\r\n\r\nDia telah mengajar di University of Miami, University of Florida dan University of Kansas sebagai profesor dan dosen. Selama lima tahun terakhir, ia telah mengajar di lebih dari 100 universitas membahas multimedia dan foto jurnalistik. Melalui perusahaan produksinya, Straw Hat Visual, dia mempersiapkan konten pendidikan yang disebarkan dalam buku multi touch elektronik di 22 negara di seluruh Amerika Utara dan Selatan.\r\n\r\nPada tahun 2010 dan 2013, ia menjabat sebagai juri World Press Photo.', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
