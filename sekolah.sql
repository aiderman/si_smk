-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:05 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `alamat_admin` text NOT NULL,
  `hp_admin` varchar(20) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(30) NOT NULL,
  `nip_guru` int(25) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `alamat_guru` text NOT NULL,
  `hp_guru` varchar(20) NOT NULL,
  `email_guru` varchar(30) NOT NULL,
  `tahunmasuk_guru` int(4) NOT NULL,
  `password_guru` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip_guru`, `nama_guru`, `alamat_guru`, `hp_guru`, `email_guru`, `tahunmasuk_guru`, `password_guru`) VALUES
(2, 111, 'khen ru', 'Alamat', 'HP', 'admin@gmail.com', 2020, '123a'),
(3, 12345, 'aider', 'wonasa', '0812', 'aiderman347@gmail.com', 2002, '1234'),
(4, 15013020, 'HARUN', 'ADSF', '2342', 'DSDF', 2019, 'AAA'),
(5, 123123, 'ANUNG', 'AFDSF', '432342', 'DSFS', 2018, 'SFDF');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(10) NOT NULL,
  `idp_matapelajaran` int(10) NOT NULL,
  `idp_ta` int(10) NOT NULL,
  `idp_guru` int(10) NOT NULL,
  `idp_kls` int(10) NOT NULL,
  `idp_jurusan` int(10) NOT NULL,
  `hari_jadwal` enum('SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU','') NOT NULL,
  `jam_jadwal` time NOT NULL,
  `semester_jadwal` enum('1','2') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal`, `idp_matapelajaran`, `idp_ta`, `idp_guru`, `idp_kls`, `idp_jurusan`, `hari_jadwal`, `jam_jadwal`, `semester_jadwal`) VALUES
(1, 2, 6, 111, 2, 1, 'SENIN', '12:59:00', '1'),
(2, 4, 2, 111, 2, 1, 'SELASA', '10:06:04', '1'),
(3, 2, 2, 3, 2, 1, 'RABU', '10:06:04', ''),
(4, 7, 7, 5, 3, 4, 'SELASA', '10:28:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_siswa`
--

CREATE TABLE `jadwal_siswa` (
  `id_js` int(10) NOT NULL,
  `idp_siswa` int(30) NOT NULL,
  `idp_jadwal` int(10) NOT NULL,
  `idp_matapelajaran` int(11) NOT NULL,
  `nilai_js` int(20) NOT NULL,
  `keterangan_js` text DEFAULT NULL,
  `idp_kls` int(11) NOT NULL,
  `idp_jurusan` int(11) NOT NULL,
  `nis_siswa` int(22) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_siswa`
--

INSERT INTO `jadwal_siswa` (`id_js`, `idp_siswa`, `idp_jadwal`, `idp_matapelajaran`, `nilai_js`, `keterangan_js`, `idp_kls`, `idp_jurusan`, `nis_siswa`) VALUES
(1, 11, 2, 2, 33, 'dasda', 3, 3, 11),
(2, 11, 2, 7, 12, 'sads', 2, 4, 22),
(3, 3, 2, 4, 78, 'fh', 3, 3, NULL),
(4, 5, 4, 5, 87, 'rtyt', 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA'),
(3, 'TEKNIK INFORMATIKA\r\n'),
(4, 'KELAUTAN');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(50) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `hari` date NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `hari`, `penjelasan`) VALUES
(1, 'kerja bakti', '2021-11-11', 'kegiatan ini dibuat untuk meningkatkan tingkat kepedulian rakyat terhadap lingkungan'),
(2, 'pramuka', '2021-11-26', 'kegiata ini merupakan sebuah kegiatan wajib yang di adakan oleh sekolah untuk melatih para siswa menjadi lebih mandiri'),
(5, 'Gerak Jalan', '2017-09-23', 'Kegiatan yang sangat penting untuk memperingati hari kemerdekaan Indonesia'),
(6, 'bekti sosial', '2021-11-26', 'kerja ini untuk lalala'),
(7, 'a', '2021-11-23', 's'),
(8, 'ss', '2021-11-24', 'ssssss'),
(9, 'xx', '2021-11-24', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kls` int(10) NOT NULL,
  `nama_kls` enum('Kelas 1','Kelas 2','Kelas 3','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kls`, `nama_kls`) VALUES
(2, 'Kelas 1'),
(3, 'Kelas 2'),
(4, 'Kelas 3');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_matapelajaran` int(10) NOT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL,
  `tipe_matapelajaran` enum('UMUM','JURUSAN','PENGEMBANGAN DIRI') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_matapelajaran`, `nama_matapelajaran`, `tipe_matapelajaran`) VALUES
(2, 'Matematika', 'UMUM'),
(3, 'TEKNIK INFORMAS', 'JURUSAN'),
(4, 'GAME DEVELOPMENT', 'JURUSAN'),
(5, 'AGAMA', 'UMUM'),
(6, 'PELAYARAN', 'JURUSAN'),
(7, 'BAHASA INGRIS', 'UMUM'),
(8, 'PANCASILA', 'UMUM'),
(9, 'JARINGAN KOMPUTER', 'JURUSAN'),
(10, 'TATA BOGA', 'PENGEMBANGAN DIRI'),
(11, 'TATA RIAS', 'PENGEMBANGAN DIRI'),
(12, 'BELA DIRI', 'PENGEMBANGAN DIRI');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(5) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `foto` text DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `fullname`, `foto`, `username`, `password`, `status`, `last_login`, `date_update`) VALUES
(1, 'Ferdinand Nelwan', 'isa.jpg', 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1', NULL, NULL),
(2, 'admin', 'default.jpg', 'admin', '1620591caea1848e84f1a984daa2f7ebbffa6959458590a700a989cebadd1301', '1', NULL, '2021-09-20 12:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `kepala_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `telp_sekolah` varchar(30) NOT NULL,
  `keterangan_sekolah` varchar(100) NOT NULL,
  `email_sekolah` varchar(50) NOT NULL,
  `website_sekolah` varchar(100) NOT NULL,
  `sejarah_sekolah` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama_sekolah`, `kepala_sekolah`, `alamat_sekolah`, `telp_sekolah`, `keterangan_sekolah`, `email_sekolah`, `website_sekolah`, `sejarah_sekolah`) VALUES
(1, 'SMK MARITIM POLARIS BITUNG ', '__', '', '0000', 'peringkat “B”', '', 'http://localhost/si_smk/C_master/kontak', 'SMK Maritim Polaris Bitung didirikan pada tanggal 15 November 1999 dibawah naungan Yayasan Tunas Bar');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(20) NOT NULL,
  `idp_kls` int(10) NOT NULL,
  `idp_jurusan` int(10) NOT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `hp_siswa` varchar(15) NOT NULL,
  `email_siswa` varchar(30) NOT NULL,
  `tahunmasuk_siswa` int(4) NOT NULL,
  `password_siswa` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `idp_kls`, `idp_jurusan`, `nis_siswa`, `nama_siswa`, `alamat_siswa`, `hp_siswa`, `email_siswa`, `tahunmasuk_siswa`, `password_siswa`) VALUES
(11, 2, 1, '11', 'alo', 'mokupa', '11111', 'issa.cyber@gmail.com', 1111, '12345678'),
(22, 2, 2, '22', 'ungke', 'kembes', '08346278342', 'admin@gmail.com', 1111, '12345678'),
(32, 2, 1, '32', 'mince', 'winagun', '08346278342', 'admin@gmail.com', 2222, '12345678'),
(4, 3, 3, '5', 'arul maengket', 'wonasa', '234324324', 'wdsdsdfsdf', 2015, '12345678'),
(5, 3, 4, '112', 'sardo', 'kombos', 'werwe', 'ss@gmail.com', 2013, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_ta` int(10) NOT NULL,
  `tahun_ta` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_ta`, `tahun_ta`) VALUES
(2, '2121'),
(3, '2022'),
(4, '2015'),
(5, '2014'),
(6, '2013'),
(7, '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jadwal_siswa`
--
ALTER TABLE `jadwal_siswa`
  ADD PRIMARY KEY (`id_js`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kls`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_ta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_siswa`
--
ALTER TABLE `jadwal_siswa`
  MODIFY `id_js` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kls` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_matapelajaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_ta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
