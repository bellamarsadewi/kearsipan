-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2018 pada 00.54
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kearsipan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `nomer_agenda` varchar(225) NOT NULL,
  `nomer_arsip` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desposisi`
--

CREATE TABLE `desposisi` (
  `id_despos` int(11) NOT NULL,
  `pemberi_despos` varchar(200) NOT NULL,
  `untuk` varchar(200) NOT NULL,
  `isi_desposisi` varchar(200) NOT NULL,
  `terusan` varchar(200) NOT NULL,
  `status_despos` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_agenda`
--

CREATE TABLE `kode_agenda` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_agenda`
--

INSERT INTO `kode_agenda` (`id`, `no_agenda`, `keterangan`) VALUES
(1, '331', 'KEPOLISIAN'),
(2, '420', 'PENDIDIKAN'),
(3, '421', 'SEKOLAH'),
(4, '421.5', 'SEKOLAH KEJURUAN'),
(5, '421.6', 'KEGIATAN SEK / PT'),
(6, '800', 'KEPEGAWAIAN'),
(7, '900', 'KEUANGAN'),
(8, '020.08', 'PENUNJUKAN'),
(9, '027.05', 'TIM / PENGADAAN'),
(10, '027.08', 'SPK / KONTRAK'),
(11, '045', 'KEARSIPAN'),
(12, '045.2', 'SURAT PENGANTAR'),
(13, '094', 'SPT ( SPPD )'),
(14, '880', 'PEMBERHENTIAN'),
(15, '979', 'BANTUAN DANA'),
(16, '510.2', 'PELELANGAN'),
(17, '423.7', 'UJIAN / IJAZAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_keluar` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_agenda` varchar(225) NOT NULL,
  `no_surat` varchar(225) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_masuk` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `diterima_tgl` date NOT NULL,
  `kode_agenda` varchar(11) NOT NULL,
  `no_surat` varchar(11) NOT NULL,
  `jenis_surat` varchar(225) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `pengelola` varchar(200) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `pemberi_despos` varchar(225) NOT NULL,
  `untuk` varchar(225) NOT NULL,
  `isi_despos` varchar(225) NOT NULL,
  `terusan` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  `notis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_masuk`, `tgl_surat`, `diterima_tgl`, `kode_agenda`, `no_surat`, `jenis_surat`, `dari`, `perihal`, `pengelola`, `foto`, `pemberi_despos`, `untuk`, `isi_despos`, `terusan`, `status`, `notis`) VALUES
(10, '2017-05-23', '2017-05-25', '027.05', '420/VII/201', 'RESMI', 'kepala desa manegen', 'undangan musyawarah', 'seksi desa', 'contoh_surat_resmi.JPG', 'seksi desa', 'Dilaksanakan', 'undangan musyawarah', 'Lainnya', '0', '1'),
(11, '2013-12-24', '2013-12-26', '421', '421/SMPN1XI', 'RESMI', 'Kepala Sekolah SMP 1 SERANG', 'Undangan', 'Tata Usaha', 'surat_resmi_sekolah.jpg', 'Tata Usaha', 'Dilaksanakan', 'undangan sosialisasi beasiswa', 'KTU', '0', '0'),
(12, '2017-01-08', '2017-01-10', '421', '421/OSIS/MA', 'RESMI', 'OSIS MA AL-FATAH', 'Undangan', 'Ketua OSIS MA AL-FATAH', '', 'PEMBINA OSIS', 'Dilaksanakan', 'Undagan Maulid Nabi Muhammad SAW', 'KTU', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('superadmin','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'superadmin'),
(2, 'tugas', 'tugas', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `desposisi`
--
ALTER TABLE `desposisi`
  ADD PRIMARY KEY (`id_despos`);

--
-- Indexes for table `kode_agenda`
--
ALTER TABLE `kode_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desposisi`
--
ALTER TABLE `desposisi`
  MODIFY `id_despos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kode_agenda`
--
ALTER TABLE `kode_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`id_masuk`) REFERENCES `kode_agenda` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
