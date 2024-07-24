-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2024 at 02:37 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `org_landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `filosofi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `booklet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_cover` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_visi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'visi.webp',
  `img_misi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'misi.webp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `id_landing`, `visi`, `misi`, `filosofi`, `booklet`, `img_cover`, `img_visi`, `img_misi`) VALUES
(1, '66a05c3fa59b52.77852036', '<b> Selaras Karya </b>  Bangkitkan Asa untuk  <b> Gelora Cita </b> Teknik Elektro UNWIKU dan Indonesia.', 'Mengadirkan wadah pengembangan softskill dan hardskill mahasiswa guna menciptakan potensi bakat dan prestasi bagi mahasiswa Teknik Elektro UNWIKU.\r\nMenabur kebermanfaatan melalui kontribusi aktif Mahasiswa Teknik Elektro melalui pemberdayaan mahasiswa dengan pengabdian masyarakat secara konsisten, tepat sasaran dan berkelanjutan.\r\nMendayagunakan wadah advokasi mahasiswa serta pelayanan kemahasiswaan yang responsif untuk mewujudkan sebesar-besarnya kemakmuran mahasiswa.\r\nReformasi sistem tata kelola melalui prinsip akuntabel dan transparan guna menciptakan pengelolaan sumber daya secara efektif dan efisien.', '', 'Booklet-Sinergi_Aksi.pdf', 'Sinergi_Aksi-cover.webp', 'visi.webp', 'misi.webp');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint NOT NULL,
  `id_kategori` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `gambar` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan_gambar` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `draft` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filosofi_logo`
--

CREATE TABLE `filosofi_logo` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_element` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `makna_element` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fokus_isu`
--

CREATE TABLE `fokus_isu` (
  `id` bigint NOT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lingkup` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `poin_fokus` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` bigint NOT NULL,
  `nama_website` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `keyword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `sosmed` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `favicon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nama_website`, `email`, `address`, `url`, `maps`, `keyword`, `description`, `sosmed`, `no_telp`, `favicon`) VALUES
(1, 'HIMA-TE UNWIKU', 'himateunwiku@gmail.com', 'Jl. Raya Beji Karangsalam No.25 Kec. Kedungbanteng, Kab. Banyumas, Jawa Tengah 53152', 'https://himate-unwiku.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.1472447212969!2d109.21664152922726!3d-7.399865369730905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fe7b8e7d637%3A0x4b46e16c75652b78!2sSekretariat%20BEM%20UNWIKU%20Purwokwerto!5e0!3m2!1sid!2sid!4v1672148845997!5m2!1sid!2sid', 'HIMA-TE Unwiku, himate unwiku, hima-te unwiku com, website himate unwiku, landing page himate unwiku, blog himate unwiku, company profile himate unwiku, unwiku indonesia, teknik elektro unwiku', 'HIMA-TE Unwiku merupakan Lembaga Tinggi dalam kepemerintahan mahasiswa dilingkungan Prodi Teknik Elektro Universitas Wijayakusuma Purwokerto. HIMA-TE Unwiku hadir untuk mewujudkan citacita Prodi Teknik Elektro Wijayakusuma yang ingin berperan secara aktif melaksanakan Pembangunan Nasional.\r\n\r\nDalam implementasi upaya perwujudan tersebut, HIMA-TE Unwiku dinahkodai oleh Kahim sebagai pimpinan BEM Unwiku dan  diampingi oleh Wakahim serta dibantu oleh para Kepala departemen dan Divisi-divisinya.', 'https://www.instagram.com/himateunwiku, https://www.tiktok.com/, https://www.youtube.com/channel/, https://twitter.com/, https://www.facebook.com/', '08998096556', '27_9_2022_20_08_55.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'true',
  `sidebar` int NOT NULL,
  `gambar_utama` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `kategori_seo`, `status`, `sidebar`, `gambar_utama`) VALUES
(1, 'Kajian', 'kajian', 'true', 1, 'cover-kajiann.jpg'),
(2, 'Teknologi', 'teknologi', 'true', 3, 'cover-Kegiatan.jpg'),
(12, 'Press Release', 'press-release', 'true', 2, 'cover-Politik.jpg'),
(13, 'Tips & Trick', 'tips-&-trick', 'true', 4, ''),
(14, 'Best Apreciation', 'best-apreciation', 'true', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `ip` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int NOT NULL DEFAULT '1',
  `online` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2023-12-30', 38, '1703980243'),
('192.168.0.16', '2023-12-30', 4, '1703922626'),
('192.168.0.16', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.3', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-28', 1, ''),
('192.168.0.6', '2023-12-28', 1, ''),
('192.168.0.1', '2023-12-26', 1, ''),
('192.168.0.16', '2023-12-27', 1, ''),
('192.168.0.3', '2023-12-27', 1, ''),
('192.168.0.13', '2023-12-27', 1, ''),
('192.168.0.33', '2023-12-27', 1, ''),
('192.168.0.36', '2023-12-27', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.3', '2023-12-29', 1, ''),
('192.168.0.4', '2023-12-29', 1, ''),
('192.168.0.1', '2023-12-29', 1, ''),
('192.168.0.16', '2023-12-29', 1, ''),
('192.168.0.12', '2023-12-29', 1, ''),
('192.168.0.14', '2023-12-29', 1, ''),
('192.168.0.51', '2023-12-29', 1, ''),
('192.168.0.52', '2023-12-29', 1, ''),
('192.168.0.53', '2023-12-29', 1, ''),
('192.168.0.54', '2023-12-29', 1, ''),
('192.168.0.55', '2023-12-29', 1, ''),
('192.168.0.56', '2023-12-29', 1, ''),
('192.168.0.4', '2023-12-30', 5, '1703980390'),
('192.168.0.1', '2023-12-25', 1, ''),
('192.168.0.2', '2023-12-25', 1, ''),
('192.168.0.3', '2023-12-25', 1, ''),
('192.168.0.4', '2023-12-25', 1, ''),
('192.168.0.5', '2023-12-25', 1, ''),
('192.168.0.6', '2023-12-25', 1, ''),
('192.168.0.7', '2023-12-25', 1, ''),
('192.168.0.8', '2023-12-25', 1, ''),
('192.168.0.9', '2023-12-25', 1, ''),
('192.168.0.10', '2023-12-25', 1, ''),
('192.168.0.11', '2023-12-25', 1, ''),
('192.168.0.12', '2023-12-25', 1, ''),
('192.168.0.13', '2023-12-25', 1, ''),
('192.168.0.14', '2023-12-25', 1, ''),
('192.168.0.15', '2023-12-25', 1, ''),
('192.168.0.16', '2023-12-25', 1, ''),
('192.168.0.17', '2023-12-25', 1, ''),
('192.168.0.18', '2023-12-25', 1, ''),
('192.168.0.19', '2023-12-25', 1, ''),
('192.168.0.20', '2023-12-25', 1, ''),
('192.168.0.1', '2023-12-24', 1, ''),
('192.168.0.2', '2023-12-24', 1, ''),
('192.168.0.3', '2023-12-24', 1, ''),
('192.168.0.4', '2023-12-24', 1, ''),
('192.168.0.5', '2023-12-24', 1, ''),
('192.168.0.6', '2023-12-24', 1, ''),
('192.168.0.7', '2023-12-24', 1, ''),
('192.168.0.8', '2023-12-24', 1, ''),
('192.168.0.9', '2023-12-24', 1, ''),
('192.168.0.10', '2023-12-24', 1, ''),
('192.168.0.11', '2023-12-24', 1, ''),
('192.168.0.12', '2023-12-24', 1, ''),
('192.168.0.13', '2023-12-24', 1, ''),
('192.168.0.14', '2023-12-24', 1, ''),
('192.168.0.15', '2023-12-24', 1, ''),
('192.168.0.16', '2023-12-24', 1, ''),
('192.168.0.1', '2023-12-23', 1, ''),
('192.168.0.2', '2023-12-23', 1, ''),
('192.168.0.3', '2023-12-23', 1, ''),
('192.168.0.4', '2023-12-23', 1, ''),
('192.168.0.5', '2023-12-23', 1, ''),
('192.168.0.6', '2023-12-23', 1, ''),
('192.168.0.7', '2023-12-23', 1, ''),
('192.168.0.8', '2023-12-23', 1, ''),
('192.168.0.9', '2023-12-23', 1, ''),
('192.168.0.10', '2023-12-23', 1, ''),
('192.168.0.11', '2023-12-23', 1, ''),
('192.168.0.1', '2023-12-23', 1, ''),
('192.168.0.2', '2023-12-23', 1, ''),
('192.168.0.3', '2023-12-23', 1, ''),
('192.168.0.1', '2023-12-22', 1, ''),
('192.168.0.2', '2023-12-22', 1, ''),
('192.168.0.3', '2023-12-22', 1, ''),
('192.168.0.1', '2023-12-22', 1, ''),
('192.168.0.2', '2023-12-22', 1, ''),
('192.168.0.3', '2023-12-22', 1, ''),
('192.168.0.4', '2023-12-22', 1, ''),
('192.168.0.5', '2023-12-22', 1, ''),
('192.168.0.6', '2023-12-22', 1, ''),
('192.168.0.7', '2023-12-22', 1, ''),
('192.168.0.8', '2023-12-22', 1, ''),
('192.168.0.9', '2023-12-22', 1, ''),
('192.168.0.1', '2023-12-21', 1, ''),
('192.168.0.2', '2023-12-21', 1, ''),
('192.168.0.3', '2023-12-21', 1, ''),
('192.168.0.4', '2023-12-21', 1, ''),
('192.168.0.5', '2023-12-21', 1, ''),
('192.168.0.6', '2023-12-21', 1, ''),
('192.168.0.7', '2023-12-21', 1, ''),
('192.168.0.8', '2023-12-21', 1, ''),
('192.168.0.9', '2023-12-21', 1, ''),
('192.168.0.1', '2023-12-21', 1, ''),
('192.168.0.2', '2023-12-21', 1, ''),
('192.168.0.3', '2023-12-21', 1, ''),
('192.168.0.4', '2023-12-21', 1, ''),
('192.168.0.5', '2023-12-21', 1, ''),
('192.168.0.6', '2023-12-21', 1, ''),
('192.168.0.7', '2023-12-21', 1, ''),
('192.168.0.8', '2023-12-21', 1, ''),
('192.168.0.9', '2023-12-21', 1, ''),
('192.168.0.10', '2023-12-21', 1, ''),
('192.168.0.11', '2023-12-21', 1, ''),
('192.168.0.12', '2023-12-21', 1, ''),
('192.168.0.13', '2023-12-21', 1, ''),
('192.168.0.14', '2023-12-21', 1, ''),
('192.168.0.15', '2023-12-21', 1, ''),
('192.168.0.16', '2023-12-21', 1, ''),
('192.168.0.17', '2023-12-21', 1, ''),
('192.168.0.18', '2023-12-21', 1, ''),
('192.168.0.19', '2023-12-21', 1, ''),
('192.168.0.20', '2023-12-21', 1, ''),
('192.168.0.101', '2023-12-21', 1, ''),
('192.168.0.111', '2023-12-21', 1, ''),
('192.168.0.121', '2023-12-21', 1, ''),
('192.168.0.131', '2023-12-21', 1, ''),
('192.168.0.141', '2023-12-21', 1, ''),
('192.168.0.151', '2023-12-21', 1, ''),
('192.168.0.161', '2023-12-21', 1, ''),
('192.168.0.171', '2023-12-21', 1, ''),
('192.168.0.181', '2023-12-21', 1, ''),
('192.168.0.191', '2023-12-21', 1, ''),
('192.168.0.201', '2023-12-21', 1, ''),
('192.168.0.1', '2023-12-20', 1, ''),
('192.168.0.2', '2023-12-20', 1, ''),
('192.168.0.3', '2023-12-20', 1, ''),
('192.168.0.4', '2023-12-20', 1, ''),
('192.168.0.5', '2023-12-20', 1, ''),
('::1', '2023-12-31', 7, '1704042641'),
('127.0.0.1', '2024-01-04', 1, '1704350577'),
('::1', '2024-01-06', 1, '1704528739'),
('::1', '2024-01-07', 49, '1704651342'),
('::1', '2024-01-08', 23, '1704755810'),
('192.168.0.16', '2024-01-08', 1, '1704711483'),
('::1', '2024-01-09', 5, '1704819020'),
('::1', '2024-01-10', 4, '1704848413'),
('::1', '2024-01-11', 283, '1704988855'),
('::1', '2024-01-12', 230, '1705084167'),
('::1', '2024-01-13', 266, '1705148802'),
('::1', '2024-01-14', 191, '1705255947'),
('::1', '2024-01-14', 191, '1705255947'),
('::1', '2024-01-15', 31, '1705320899'),
('::1', '2024-01-17', 60, '1705517573'),
('::1', '2024-01-18', 40, '1705592663'),
('::1', '2024-01-20', 45, '1705774192'),
('::1', '2024-01-21', 5, '1705861337'),
('36.73.33.120', '2024-01-22', 32, '1705895645'),
('202.43.172.4', '2024-01-22', 1, '1705894359'),
('103.26.211.5', '2024-01-22', 1, '1705894366'),
('103.175.82.68', '2024-01-22', 1, '1705894697'),
('103.184.52.52', '2024-01-22', 6, '1705895780'),
('110.50.81.202', '2024-01-22', 1, '1705895664'),
('103.189.123.6', '2024-01-22', 1, '1705895666'),
('140.213.161.13', '2024-01-22', 5, '1705895958'),
('140.213.173.107', '2024-01-22', 4, '1705906714'),
('115.178.239.190', '2024-01-22', 3, '1705895922'),
('103.144.90.30', '2024-01-22', 1, '1705895858'),
('103.160.201.80', '2024-01-22', 1, '1705895863'),
('140.213.171.108', '2024-01-22', 2, '1705897375'),
('115.178.238.11', '2024-01-22', 1, '1705895878'),
('103.217.224.81', '2024-01-22', 1, '1705895883'),
('27.124.83.163', '2024-01-22', 4, '1705905221'),
('103.144.170.186', '2024-01-22', 2, '1705895949'),
('114.142.170.54', '2024-01-22', 3, '1705896050'),
('112.78.156.165', '2024-01-22', 3, '1705901183'),
('110.138.151.227', '2024-01-22', 10, '1705912953'),
('114.10.18.171', '2024-01-22', 4, '1705897199'),
('115.178.238.6', '2024-01-22', 1, '1705896247'),
('140.213.173.138', '2024-01-22', 1, '1705896258'),
('122.248.46.58', '2024-01-22', 1, '1705896333'),
('114.142.170.51', '2024-01-22', 3, '1705896560'),
('103.144.170.162', '2024-01-22', 2, '1705896638'),
('114.10.127.46', '2024-01-22', 9, '1705904542'),
('114.10.122.238', '2024-01-22', 6, '1705896999'),
('140.213.139.119', '2024-01-22', 2, '1705896941'),
('103.130.128.247', '2024-01-22', 4, '1705896983'),
('140.213.141.206', '2024-01-22', 1, '1705897047'),
('114.79.51.15', '2024-01-22', 1, '1705897257'),
('115.178.237.22', '2024-01-22', 2, '1705897322'),
('182.2.45.142', '2024-01-22', 2, '1705897385'),
('103.144.170.140', '2024-01-22', 4, '1705897584'),
('112.215.165.248', '2024-01-22', 1, '1705897585'),
('114.79.46.15', '2024-01-22', 4, '1705898385'),
('115.178.239.230', '2024-01-22', 1, '1705898510'),
('114.142.168.62', '2024-01-22', 1, '1705899894'),
('103.199.117.107', '2024-01-22', 3, '1705900800'),
('43.128.68.127', '2024-01-22', 2, '1705922065'),
('36.73.33.97', '2024-01-22', 1, '1705901769'),
('114.142.168.28', '2024-01-22', 1, '1705904352'),
('115.178.239.178', '2024-01-22', 1, '1705904364'),
('103.144.170.26', '2024-01-22', 1, '1705905094'),
('112.78.156.166', '2024-01-22', 2, '1705920713'),
('140.213.5.51', '2024-01-22', 1, '1705908439'),
('140.213.35.60', '2024-01-22', 1, '1705908462'),
('193.233.233.29', '2024-01-22', 1, '1705914945'),
('198.235.24.36', '2024-01-22', 1, '1705914955'),
('146.75.160.29', '2024-01-22', 4, '1705926494'),
('112.215.133.73', '2024-01-22', 3, '1705923744'),
('140.213.171.81', '2024-01-22', 1, '1705926088'),
('140.213.163.70', '2024-01-22', 1, '1705929445'),
('43.157.66.187', '2024-01-22', 1, '1705937007'),
('140.213.167.2', '2024-01-22', 2, '1705938530'),
('140.213.175.57', '2024-01-22', 3, '1705938646'),
('114.79.32.65', '2024-01-22', 1, '1705943122'),
('43.135.149.154', '2024-01-22', 1, '1705947172'),
('23.22.35.162', '2024-01-22', 1, '1705958877'),
('3.224.220.101', '2024-01-22', 2, '1705966042'),
('43.159.141.180', '2024-01-23', 1, '1705969104'),
('52.70.240.171', '2024-01-23', 3, '1705969946'),
('23.22.35.162', '2024-01-23', 2, '1705973882'),
('3.224.220.101', '2024-01-23', 2, '1705969938'),
('193.233.233.29', '2024-01-23', 1, '1705970197'),
('43.130.39.101', '2024-01-23', 1, '1705976036'),
('103.125.50.22', '2024-01-23', 2, '1705976671'),
('114.79.46.131', '2024-01-23', 1, '1705980759'),
('36.73.33.120', '2024-01-23', 40, '1705988723'),
('92.223.85.198', '2024-01-23', 1, '1705986398'),
('23.129.64.211', '2024-01-23', 1, '1705993690'),
('43.131.243.208', '2024-01-23', 1, '1705996852'),
('92.223.85.252', '2024-01-23', 1, '1706009630'),
('140.213.175.191', '2024-01-23', 2, '1706019956'),
('43.130.62.164', '2024-01-23', 1, '1706022850'),
('199.45.155.33', '2024-01-23', 1, '1706026468'),
('39.48.186.194', '2024-01-23', 1, '1706027809'),
('199.45.154.49', '2024-01-23', 1, '1706029388'),
('146.190.127.149', '2024-01-23', 1, '1706033919'),
('43.135.149.154', '2024-01-23', 1, '1706033991'),
('156.146.35.180', '2024-01-23', 2, '1706040001'),
('178.254.24.91', '2024-01-23', 1, '1706042555'),
('138.199.60.178', '2024-01-23', 1, '1706042907'),
('150.109.16.20', '2024-01-23', 1, '1706044331'),
('146.70.137.106', '2024-01-23', 1, '1706044838'),
('43.133.38.182', '2024-01-24', 1, '1706055503'),
('205.210.31.54', '2024-01-24', 1, '1706056095'),
('43.131.48.214', '2024-01-24', 2, '1706109207'),
('86.106.74.251', '2024-01-24', 2, '1706067358'),
('128.199.101.128', '2024-01-24', 2, '1706077715'),
('34.106.182.30', '2024-01-24', 2, '1706083095'),
('67.220.86.160', '2024-01-24', 1, '1706090818'),
('138.199.22.229', '2024-01-24', 1, '1706095537'),
('186.179.33.40', '2024-01-24', 1, '1706096382'),
('124.156.193.7', '2024-01-24', 1, '1706102623'),
('45.88.97.14', '2024-01-24', 2, '1706110518'),
('43.159.128.149', '2024-01-24', 1, '1706120044'),
('18.197.97.14', '2024-01-24', 1, '1706134925'),
('136.243.220.210', '2024-01-24', 10, '1706138477'),
('43.159.128.172', '2024-01-25', 1, '1706142089'),
('138.199.60.171', '2024-01-25', 3, '1706216298'),
('156.146.35.167', '2024-01-25', 2, '1706148533'),
('43.131.62.4', '2024-01-25', 1, '1706149487'),
('34.106.44.166', '2024-01-25', 1, '1706151339'),
('35.187.98.121', '2024-01-25', 1, '1706179806'),
('194.38.22.71', '2024-01-25', 1, '1706182789'),
('128.90.165.133', '2024-01-25', 1, '1706183387'),
('129.226.147.7', '2024-01-25', 1, '1706189112'),
('129.226.158.26', '2024-01-25', 1, '1706195955'),
('167.99.52.248', '2024-01-25', 1, '1706199531'),
('66.249.74.109', '2024-01-25', 1, '1706202372'),
('138.199.22.234', '2024-01-25', 2, '1706204160'),
('43.153.110.177', '2024-01-25', 1, '1706206702'),
('142.93.231.225', '2024-01-25', 1, '1706209620'),
('192.71.10.105', '2024-01-25', 1, '1706215302'),
('3.17.152.91', '2024-01-25', 1, '1706219064'),
('129.226.146.179', '2024-01-26', 1, '1706228312'),
('66.249.73.101', '2024-01-26', 2, '1706234632'),
('43.134.66.205', '2024-01-26', 1, '1706233334'),
('66.249.73.102', '2024-01-26', 1, '1706234613'),
('43.133.38.182', '2024-01-26', 1, '1706234929'),
('34.174.233.8', '2024-01-26', 2, '1706239259'),
('34.174.188.99', '2024-01-26', 1, '1706256388'),
('34.174.206.62', '2024-01-26', 1, '1706276131'),
('43.135.166.178', '2024-01-26', 1, '1706282130'),
('170.106.82.193', '2024-01-26', 1, '1706293216'),
('43.133.77.208', '2024-01-27', 1, '1706315103'),
('43.133.38.182', '2024-01-27', 1, '1706321449'),
('66.249.73.101', '2024-01-27', 1, '1706324104'),
('65.154.226.171', '2024-01-27', 2, '1706331996'),
('138.199.60.171', '2024-01-27', 1, '1706356286'),
('206.189.34.67', '2024-01-27', 1, '1706363194'),
('50.114.105.89', '2024-01-27', 1, '1706376677'),
('43.153.110.177', '2024-01-27', 1, '1706379580'),
('161.35.166.180', '2024-01-27', 1, '1706382724'),
('170.106.159.160', '2024-01-28', 1, '1706408395'),
('37.27.13.54', '2024-01-28', 1, '1706411271'),
('43.163.1.85', '2024-01-28', 1, '1706426575'),
('208.80.194.41', '2024-01-28', 1, '1706452386'),
('43.159.128.68', '2024-01-28', 1, '1706455061'),
('36.73.35.34', '2024-01-28', 45, '1706461873'),
('93.158.91.24', '2024-01-28', 1, '1706465643'),
('129.226.158.26', '2024-01-28', 1, '1706465781'),
('43.155.136.16', '2024-01-28', 1, '1706477936'),
('43.131.44.218', '2024-01-29', 1, '1706488462'),
('43.131.248.209', '2024-01-29', 1, '1706494455'),
('138.199.60.187', '2024-01-29', 1, '1706496833'),
('36.73.35.34', '2024-01-29', 13, '1706571995'),
('20.52.98.38', '2024-01-29', 1, '1706504798'),
('114.142.171.33', '2024-01-29', 1, '1706514167'),
('54.167.36.155', '2024-01-29', 1, '1706523960'),
('89.187.163.213', '2024-01-29', 1, '1706534535'),
('43.135.149.154', '2024-01-29', 1, '1706541454'),
('43.134.89.111', '2024-01-29', 1, '1706552142'),
('46.101.90.32', '2024-01-29', 1, '1706554700'),
('173.239.254.16', '2024-01-29', 1, '1706564670'),
('::1', '2024-01-29', 1, '1706572674'),
('::1', '2024-01-30', 286, '1706635458'),
('::1', '2024-01-31', 229, '1706709299'),
('192.168.0.16', '2024-02-01', 12, '1706749410'),
('::1', '2024-02-01', 351, '1706815827'),
('::1', '2024-02-02', 159, '1706901139'),
('::1', '2024-02-03', 9, '1706980615'),
('::1', '2024-07-24', 22, '1721788577');

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `organisasi` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `universitas` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kabinet` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_periode` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `logo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `organisasi`, `universitas`, `kabinet`, `tahun_periode`, `about`, `logo`, `slug`, `status`) VALUES
('66a05c3fa59b52.77852036', 'Himpunan Mahasiswa Teknik Elektro', 'Universitas Wijayakusuma Purwokerto', 'Sinergi Aksi', '2023', 'Organisasi ini bernama Himpunan Mahasiswa Teknik Elektro Universitas Wijayakusuma Purwokerto dengan Akronim HIMA-TE UNWIKU. HIMA-TE UNWIKU telah tergabung dalam Forum Nasional yaitu Forum Komunikasi Mahasiswa Elektro Indonesia (FKHMEI) Wilayah VIII Se - Jawa Tengah.', 'Sinergi_Aksi-logo.png', '2023', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` bigint NOT NULL,
  `id_ref` bigint DEFAULT NULL,
  `id_landing` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `prodi` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `angkatan` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ig` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiktok` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twiter` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `id_ref`, `id_landing`, `level`, `nama`, `jabatan`, `about`, `prodi`, `angkatan`, `foto`, `ig`, `tiktok`, `fb`, `twiter`) VALUES
(1, NULL, '66a05c3fa59b52.77852036', '1', 'Faizal Adi Purnomo', 'Ketua Himpunan', NULL, 'Teknik Elektro', '2021', 'Sinergi_Aksi-Faizal_Adi_Purnomo.png', '', '', '', ''),
(2, NULL, '66a05c3fa59b52.77852036', '1', 'Arif Nur Rizqi', 'Wakil Ketua Himpunan', NULL, 'Teknik Elektro', '2021', 'Sinergi_Aksi-Arif_Nur_Rizqi.webp', 'arifnur.rizqi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `id_landing` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id_template` bigint NOT NULL,
  `nama_template` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `folder` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('true','false') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id_template`, `nama_template`, `author`, `folder`, `status`) VALUES
(1, 'Simple', 'Arnur ', 'simple', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `password_updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `password_updated_at`, `last_login`) VALUES
('6118b2a943acc2.78631959', 'Adminn', 'admin@gmail.com', 'admin', '$2y$10$7MzYsU1xl/ucMorLkY1bgOPTInJ3Zqw86jdKR5JqDQyknDuVFj4s.', NULL, '2021-08-14 23:22:33', '2024-02-02 12:23:54', '2024-07-23 19:25:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filosofi_logo`
--
ALTER TABLE `filosofi_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fokus_isu`
--
ALTER TABLE `fokus_isu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_template`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filosofi_logo`
--
ALTER TABLE `filosofi_logo`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fokus_isu`
--
ALTER TABLE `fokus_isu`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_template` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
