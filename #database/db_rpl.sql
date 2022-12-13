-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 10:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `artikel` varchar(9999) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `kategori_id`, `penulis`, `tanggal`, `judul`, `artikel`, `image`) VALUES
(1, 3, 'Dendy', '2020-06-13 11:12:24', 'Hotel di Smkn 1 Ciamis akan segera dibuka', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'img1.jpg'),
(3, 3, 'Admin', '2020-06-14 13:32:49', 'Murid RPL Smkn 1 Ciamis Kunjungan', 'Para murid RPL sangat nakal ketika berada di tempat MMTC hampir semua peralatan di sana akan rusak, bahkan ketika dosen sedang menerangkan sebuah materi tentang MMTC mereka tidak ada yang mendengarkan satupun.\r\n\r\nPara siswa RPL sangat kecewa terhadap tempat yang di kunjungi nya oleh karena itu mereka melakukan tindakan kekerasan terhadap tempat MMTC', 'IMG_9455_result.JPG'),
(4, 3, 'Admin', '2020-06-14 20:48:39', 'Kursi Hotel Smkn 1 Ciamis', 'Kursi di Smkn 1 Ciamis terbuat dari bahan bahan berkualitas buruk sehingga berdampak buruk pada kenyamanan penggunaan wisatawan', 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_crausel`
--

CREATE TABLE `tb_crausel` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_crausel`
--

INSERT INTO `tb_crausel` (`id`, `image`) VALUES
(3, 'homeRpl.JPG'),
(5, 'WhatsApp_Image_2020-06-15_at_09_54_181.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `judul`, `gambar`) VALUES
(3, 'Rakit Komputer', 'WhatsApp_Image_2020-06-15_at_09_54_12.jpeg'),
(4, 'RPL Angkatan Pertama', 'WhatsApp_Image_2020-06-15_at_09_54_18.jpeg'),
(5, 'LKS Duka iraha', 'WhatsApp_Image_2020-06-15_at_09_54_08.jpeg'),
(6, 'Ujikom 1', 'WhatsApp_Image_2020-06-15_at_09_54_16.jpeg'),
(8, 'Pembelajaran di Lab', 'WhatsApp_Image_2020-06-15_at_09_54_58.jpeg'),
(9, 'Ngoding Bareng :v', 'WhatsApp_Image_2020-06-15_at_09_54_04.jpeg'),
(10, 'Niron Bareng', 'WhatsApp_Image_2020-06-15_at_09_54_04_(1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_berita`
--

CREATE TABLE `tb_kategori_berita` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori_berita`
--

INSERT INTO `tb_kategori_berita` (`id`, `nama_kategori`) VALUES
(2, 'Umum'),
(3, 'Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_navbar`
--

CREATE TABLE `tb_navbar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_navbar`
--

INSERT INTO `tb_navbar` (`id`, `nama`, `link`) VALUES
(1, 'beranda', '/'),
(2, 'tentang', 'home/tentang'),
(3, 'akademik', 'home/akademik'),
(4, 'berita', 'home/berita'),
(5, 'Projek & Hasil', 'home/projek'),
(6, 'registrasi', 'http://ppdb.smkn1ciamis.id');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `name`, `username`, `password`, `image`) VALUES
(5, 'Admin', 'admin', '$2y$10$ao.17N62FrtwSXjjwCkfGeN1AH.z8Q3/J2EEx0WHGciTMpcAJI7Ua', 'unnamed1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_projek`
--

CREATE TABLE `tb_projek` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(999) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_projek`
--

INSERT INTO `tb_projek` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(7, 'Edotel Smkn 1 Ciamis', 'aplikasi ini bertujuan untuk memudahkan pemesan untuk memesan kamar.', 'Screenshot_(294)3.png'),
(9, 'LSP Smkn 1 Ciamis', 'Aplikasi untuk  melakukan penilaian uji kompetensi keahlian secara online ', 'Screenshot_(293).png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visimisi`
--

CREATE TABLE `tb_visimisi` (
  `id` int(11) NOT NULL,
  `visi` varchar(999) NOT NULL,
  `misi` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_visimisi`
--

INSERT INTO `tb_visimisi` (`id`, `visi`, `misi`) VALUES
(1, 'Sebagai kompetensi keahlian yang “Menyiapkan Sumber Daya Manusia terbarukan dan berperan aktif dalam pengembangan ilmu pengetahuan dan teknologi di era globalisasi”.', 'Mengembangkan Sumber Daya Manusia yang mempunyai keunggulan dalam bidang teknologi informasi dan komunikasi yang dilandasi keimanan dan ketakwaan\r\n\r\nMenyelenggarakan proses pembelajaran yang memiliki keunggulan dan daya saing di bidang ilmu pengetahuan dan teknologi, untuk pengembangan manusia seutuhnya.\r\n\r\nMenyiapkan peserta didik untuk memasuki dunia kerja, serta mengembangkan sikap profesional\r\n\r\nMenyiapkan peserta didik untuk melanjutkan ke jenjang pendidikan yang lebih tinggi\r\n\r\nMenyiapkan tenaga kerja tingkat menengah untuk mengisi kebutuhan dunia usaha dan dunia industri dalam bidang teknologi informasi dan komunikasi\r\n\r\nMenghasilkan lulusan yang dapat bersaing di dalam dan luar negeri di era globalisasi\r\n\r\nMenyiapkan lulusan agar menjadi warga negara yang produktif, kreatif, dan inovatif\r\n\r\nMenyiapkan lulusan untuk membuka usaha sendiri atau berwiraswasta\r\n\r\nMengembangkan kerjasama yang luas dengan DU/DI dan lembaga lain di dalam dan di luar negeri.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_crausel`
--
ALTER TABLE `tb_crausel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_navbar`
--
ALTER TABLE `tb_navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_projek`
--
ALTER TABLE `tb_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_crausel`
--
ALTER TABLE `tb_crausel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_navbar`
--
ALTER TABLE `tb_navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_projek`
--
ALTER TABLE `tb_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_visimisi`
--
ALTER TABLE `tb_visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
