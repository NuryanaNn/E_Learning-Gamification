-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 18.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newelearning666`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_absen`
--

CREATE TABLE `el_absen` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `pengajar_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_absen`
--

INSERT INTO `el_absen` (`id`, `kelas_id`, `mapel_id`, `pengajar_id`, `tanggal`, `jam_mulai`, `jam_selesai`) VALUES
(3, 2, 2, 2, '2020-05-04', '11:00:00', '13:00:00'),
(4, 7, 2, 2, '2020-05-02', '12:15:00', '02:16:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_absen_siswa`
--

CREATE TABLE `el_absen_siswa` (
  `id` int(11) NOT NULL,
  `absen_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0 = alpha, 1 = masuk, 2 = izin,3 = sakit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_absen_siswa`
--

INSERT INTO `el_absen_siswa` (`id`, `absen_id`, `siswa_id`, `status`) VALUES
(1, 3, 11, 1),
(2, 4, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_field_tambahan`
--

CREATE TABLE `el_field_tambahan` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_field_tambahan`
--

INSERT INTO `el_field_tambahan` (`id`, `nama`, `value`) VALUES
('check-urgent-info', 'Check Urgent Info', '{\"info\":\"\",\"last_check\":\"2020-04-30 00:45:10\"}'),
('history-mengerjakan-3-2', 'History pengerjaan tugas', '{\"mulai\":\"2019-12-20 13:33:38\",\"selesai\":\"2019-12-20 14:03:38\",\"uri_string\":\"tugas\\/kerjakan\\/2\",\"valid_route\":[\"\\/tugas\\/kerjakan\",\"\\/tugas\\/finish\",\"\\/tugas\\/submit_essay\",\"\\/tugas\\/submit_upload\"],\"tugas\":{\"id\":\"2\",\"mapel_id\":\"6\",\"pengajar_id\":\"2\",\"type_id\":\"3\",\"judul\":\"SISTEM GERAK PADA MANUSIA\",\"durasi\":\"30\",\"info\":\"<p>KERJAKAN SOAL DENGAN BAIK DAN BENAR<\\/p>\\r\\n\",\"aktif\":\"1\",\"tgl_buat\":\"2019-12-20 13:30:29\",\"tampil_siswa\":\"1\"},\"unix_id\":\"bfb0f813ef2c997245f7651a0cd45fba701601\",\"ip\":\"::1\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"pertanyaan_id\":[\"2\"],\"jawaban\":{\"2\":\"7\"},\"nilai\":100,\"jml_benar\":1,\"jml_salah\":0,\"tgl_submit\":\"2019-12-20 13:41:15\",\"total_waktu\":\"7 menit 37 detik\"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_jawaban`
--

CREATE TABLE `el_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `nilai_pg` int(11) NOT NULL,
  `nilai_essay` int(11) DEFAULT NULL,
  `nilai_total` double DEFAULT NULL,
  `jumlah_soal` int(11) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_jawaban`
--

INSERT INTO `el_jawaban` (`id_jawaban`, `id_ujian`, `id_siswa`, `jawaban`, `nilai_pg`, `nilai_essay`, `nilai_total`, `jumlah_soal`, `tgl`) VALUES
(2, 1, 2, '1:C,3:aaa', 1, 2, 83.333333333333, 2, '0000-00-00 00:00:00'),
(3, 1, 2, '1:C,3:asdsdasdsa', 3, 3, 100, 2, '0000-00-00 00:00:00'),
(4, 3, 2, '1:C,3:adasd,5:B,6:adasdas', 3, 5, 66.666666666667, 4, '2020-05-02 05:04:00'),
(5, 4, 14, '7:', 0, 100, 3333.3333333333, 1, '2021-04-23 20:04:00'),
(6, 4, 14, '7:', 0, NULL, 0, 1, '2021-04-23 20:04:00'),
(7, 5, 14, '8:', 0, 100, 3333.3333333333, 1, '2021-04-24 01:58:00'),
(8, 5, 14, '8:Ya ini', 0, 100, 3333.3333333333, 1, '2021-04-24 01:59:00'),
(9, 5, 14, '8:iya untuk essay,9:hyper text markup language', 0, 100, 1666.6666666667, 2, '2021-04-24 02:03:00'),
(10, 6, 14, '10:', 0, NULL, 0, 1, '2021-05-13 17:54:00'),
(11, 6, 14, '10:,11:', 0, 100, 1666.6666666667, 2, '2021-05-13 17:56:00'),
(12, 7, 14, '12:', 0, NULL, 0, 1, '2021-05-13 17:59:00'),
(13, 7, 14, '12:Singa,13:', 0, 100, 1666.6666666667, 2, '2021-05-13 18:06:00'),
(14, 7, 14, '14:,15:,16:', 0, NULL, 0, 3, '2021-05-13 22:44:00'),
(15, 9, 15, '18:', 0, 100, 3333.3333333333, 1, '2021-06-28 16:01:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_kelas`
--

CREATE TABLE `el_kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `urutan` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=aktif 0=tidak'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_kelas`
--

INSERT INTO `el_kelas` (`id`, `nama`, `parent_id`, `urutan`, `aktif`) VALUES
(1, 'KELAS VII', NULL, 1, 1),
(2, 'KELAS VII - A', 1, 2, 1),
(3, 'KELAS VII - B', 1, 3, 1),
(4, 'KELAS VII - C', 1, 4, 1),
(5, 'KELAS VII - D', 1, 5, 1),
(6, 'KELAS VIII', NULL, 6, 1),
(7, 'KELAS VIII - A', 6, 7, 1),
(8, 'KELAS VIII - B', 6, 8, 1),
(9, 'KELAS VIII - C', 6, 9, 1),
(10, 'KELAS VIII - D', 6, 10, 1),
(11, 'KELAS IX', NULL, 11, 1),
(12, 'KELAS IX - A', 11, 12, 1),
(13, 'KELAS IX - B', 11, 13, 1),
(14, 'KELAS IX - C', 11, 14, 1),
(15, 'KELAS IX - D', 11, 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_kelas_siswa`
--

CREATE TABLE `el_kelas_siswa` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL COMMENT '0 jika bukan, 1 jika ya'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_kelas_siswa`
--

INSERT INTO `el_kelas_siswa` (`id`, `kelas_id`, `siswa_id`, `aktif`) VALUES
(1, 3, 1, 0),
(2, 2, 1, 0),
(3, 7, 2, 1),
(4, 7, 3, 0),
(5, 12, 4, 1),
(6, 8, 3, 1),
(7, 2, 11, 1),
(9, 4, 1, 1),
(10, 2, 13, 1),
(11, 3, 14, 1),
(12, 3, 12, 1),
(13, 3, 15, 0),
(14, 2, 15, 0),
(15, 1, 16, 1),
(16, 4, 17, 1),
(17, 1, 18, 0),
(18, 3, 18, 1),
(19, 1, 24, 1),
(20, 1, 25, 1),
(21, 1, 26, 1),
(22, 4, 15, 0),
(23, 2, 15, 0),
(24, 2, 15, 0),
(25, 3, 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_komentar`
--

CREATE TABLE `el_komentar` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `tampil` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=tidak,1=tampil',
  `konten` text DEFAULT NULL,
  `tgl_posting` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_leaderboard`
--

CREATE TABLE `el_leaderboard` (
  `id` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `badge` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_login`
--

CREATE TABLE `el_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `pengajar_id` int(11) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL COMMENT '0=tidak,1=ya',
  `reset_kode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_login`
--

INSERT INTO `el_login` (`id`, `username`, `password`, `siswa_id`, `pengajar_id`, `is_admin`, `reset_kode`) VALUES
(1, 'tepi_randi@gmail.com', '9a11a67488226f12b7da565c41943cd9', NULL, 1, 1, NULL),
(2, 'amar@gmail.com', '9a11a67488226f12b7da565c41943cd9', 1, NULL, 0, 'beb1acbe586a732b71fe5fbf81779740'),
(3, 'guru@gmail.com', '77e69c137812518e359196bb2f5e9bb9', NULL, 2, 0, NULL),
(4, 'tara@gmail.com', '2c842d72963554e4ca6286bb120777f6', 2, NULL, 0, NULL),
(5, 'apipah@gmail.com', '8676c097eff8f3e00af8e492b5877b31', 3, NULL, 0, NULL),
(6, 'alvinodicky548@gmail.com', 'ee0b6db238b075d0da86340048fb147a', 4, NULL, 0, NULL),
(12, 'faizazharr@gmail.com', '8bfce85e50de44cc1efc18e5bc4f8775', NULL, 4, 0, NULL),
(13, 'aliya@gmail.com', 'e3cb970693574ea75d091a6049f8a3ff', 11, NULL, 0, NULL),
(15, 'nuryana1@gmail.com', '8bfce85e50de44cc1efc18e5bc4f8775', 12, NULL, 1, NULL),
(22, 'rohendi@gmail.com', 'b1f4b15d26a7feaa46d33251e1f895e2', NULL, 10, 1, NULL),
(17, 'nuryana@gmail.com', '8bfce85e50de44cc1efc18e5bc4f8775', 13, NULL, 0, NULL),
(18, 'refsi@gmail.com', 'cb97a2e21156bf6d97088f0ec38965ef', 14, NULL, 0, NULL),
(19, 'nuryana146@gmail.com', '8bfce85e50de44cc1efc18e5bc4f8775', NULL, 7, NULL, NULL),
(21, 'NadaA@gmail.com', 'a77b4f006a4994d245a12247b8e4082c', 15, NULL, 0, NULL),
(23, 'dicky@gmail.com', 'ee0b6db238b075d0da86340048fb147a', 16, NULL, 0, NULL),
(24, 'rohendi@gmail.com', 'b1f4b15d26a7feaa46d33251e1f895e2', NULL, 11, NULL, NULL),
(25, '3432@gmail.com', '8bfce85e50de44cc1efc18e5bc4f8775', NULL, 12, NULL, NULL),
(26, 'rohendi@gmail.com', 'b1f4b15d26a7feaa46d33251e1f895e2', NULL, 13, NULL, NULL),
(27, 'Maman@gmail.com', '6ffee7d3af984c95d72d813efda2d919', NULL, 14, NULL, NULL),
(28, 'indah@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', 17, NULL, 0, NULL),
(29, 'asyi@gmail.com', '7430eee4e7943465bd9f74afa2ab6967', 18, NULL, 0, NULL),
(30, 'maman@gmail.com', '6ffee7d3af984c95d72d813efda2d919', NULL, 15, NULL, NULL),
(31, 'deni@gmail.com', '43f41d127a81c54d4c8f5f93daeb7118', 24, NULL, 0, NULL),
(32, 'deni@gmail.com', '43f41d127a81c54d4c8f5f93daeb7118', 25, NULL, 0, NULL),
(33, 'agus@gmail.com', '9a11a67488226f12b7da565c41943cd9', 26, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_login_log`
--

CREATE TABLE `el_login_log` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `lasttime` datetime NOT NULL,
  `agent` text NOT NULL,
  `last_activity` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_login_log`
--

INSERT INTO `el_login_log` (`id`, `login_id`, `lasttime`, `agent`, `last_activity`) VALUES
(1, 1, '2019-12-14 00:05:18', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576256924),
(2, 2, '2019-12-14 00:24:52', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576257844),
(3, 1, '2019-12-14 00:26:23', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576257967),
(4, 3, '2019-12-14 00:28:23', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576260424),
(5, 1, '2019-12-14 00:40:18', '{\"is_mobile\":0,\"browser\":\"Chrome 78.0.3904.108\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/78.0.3904.108 Safari\\/537.36\",\"ip\":\"::1\"}', 1576259433),
(6, 1, '2019-12-14 00:53:02', '{\"is_mobile\":0,\"browser\":\"Chrome 78.0.3904.108\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/78.0.3904.108 Safari\\/537.36\",\"ip\":\"::1\"}', 1576259641),
(7, 1, '2019-12-14 00:58:43', '{\"is_mobile\":0,\"browser\":\"Chrome 78.0.3904.108\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/78.0.3904.108 Safari\\/537.36\",\"ip\":\"::1\"}', 1576260072),
(8, 1, '2019-12-14 01:05:59', '{\"is_mobile\":0,\"browser\":\"Chrome 78.0.3904.108\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/78.0.3904.108 Safari\\/537.36\",\"ip\":\"::1\"}', 1576260409),
(9, 1, '2019-12-14 01:32:20', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576261830),
(10, 2, '2019-12-14 01:32:50', '{\"is_mobile\":0,\"browser\":\"Chrome 70.0.3538.102\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/70.0.3538.102 Safari\\/537.36 Edge\\/18.18362\",\"ip\":\"::1\"}', 1576261880),
(11, 1, '2019-12-14 01:34:00', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576261954),
(12, 2, '2019-12-14 01:34:52', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262031),
(13, 1, '2019-12-14 01:36:13', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262248),
(14, 1, '2019-12-14 01:40:12', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262408),
(15, 3, '2019-12-14 01:42:39', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262709),
(16, 2, '2019-12-14 01:47:27', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262792),
(17, 1, '2019-12-14 01:48:47', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576262868),
(18, 1, '2019-12-14 18:42:00', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576323947),
(19, 1, '2019-12-14 18:52:48', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576325407),
(20, 1, '2019-12-14 19:27:29', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576326435),
(21, 2, '2019-12-14 19:29:32', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576326543),
(22, 1, '2019-12-14 19:31:19', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576326603),
(23, 2, '2019-12-14 19:32:22', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576326828),
(24, 1, '2019-12-14 19:36:03', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576327415),
(25, 1, '2019-12-18 03:40:38', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576615488),
(26, 1, '2019-12-18 03:53:17', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576616158),
(27, 1, '2019-12-18 03:56:56', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576616218),
(28, 1, '2019-12-18 03:57:45', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576616267),
(29, 1, '2019-12-18 04:01:14', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576616617),
(30, 1, '2019-12-18 04:04:42', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576617133),
(31, 1, '2019-12-20 10:13:59', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.79\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.79 Safari\\/537.36\",\"ip\":\"::1\"}', 1576812841),
(32, 1, '2019-12-20 11:49:12', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576820379),
(33, 1, '2019-12-20 12:42:23', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576820456),
(34, 1, '2019-12-20 13:10:57', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823044),
(35, 5, '2019-12-20 13:26:20', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823085),
(36, 1, '2019-12-20 13:27:03', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823134),
(37, 1, '2019-12-20 13:28:29', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823243),
(38, 3, '2019-12-20 13:29:43', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823454),
(39, 5, '2019-12-20 13:33:28', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1576823972),
(40, 1, '2019-12-23 15:16:39', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1577088930),
(41, 5, '2019-12-23 15:17:47', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1577089249),
(42, 1, '2019-12-28 19:11:44', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1577535120),
(43, 1, '2020-01-01 21:52:00', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1577890379),
(44, 1, '2020-01-03 20:04:32', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578056697),
(45, 1, '2020-01-04 01:54:09', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578077878),
(46, 1, '2020-01-04 02:08:50', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578078774),
(47, 1, '2020-01-06 10:49:53', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578282656),
(48, 1, '2020-01-06 10:52:34', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578282662),
(49, 1, '2020-01-06 10:53:34', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578282720),
(50, 4, '2020-01-06 10:54:10', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.88\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.88 Safari\\/537.36\",\"ip\":\"::1\"}', 1578283968),
(51, 1, '2020-01-19 18:54:48', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.130\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.130 Safari\\/537.36\",\"ip\":\"::1\"}', 1579434841),
(52, 1, '2020-01-19 18:56:12', '{\"is_mobile\":0,\"browser\":\"Chrome 79.0.3945.130\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/79.0.3945.130 Safari\\/537.36\",\"ip\":\"::1\"}', 1579435070),
(53, 1, '2020-02-11 21:10:32', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581430464),
(54, 1, '2020-02-11 21:16:39', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581430612),
(55, 1, '2020-02-11 21:19:05', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581430668),
(56, 3, '2020-02-11 21:20:03', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581431017),
(57, 1, '2020-02-11 21:25:48', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581431115),
(58, 5, '2020-02-11 21:27:25', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581431236),
(59, 1, '2020-02-11 21:29:49', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581431290),
(60, 1, '2020-02-11 21:30:43', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581431343),
(61, 3, '2020-02-11 21:31:12', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581432654),
(62, 1, '2020-02-11 21:53:04', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581437682),
(63, 1, '2020-02-12 20:44:05', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581515023),
(64, 3, '2020-02-12 20:46:13', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.87\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.87 Safari\\/537.36\",\"ip\":\"::1\"}', 1581515214),
(65, 3, '2020-02-12 20:57:17', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581516744),
(66, 3, '2020-02-12 21:19:10', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581517429),
(67, 3, '2020-02-12 21:26:02', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581517685),
(68, 1, '2020-02-12 21:42:13', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581518498),
(69, 1, '2020-02-12 21:46:00', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581518745),
(70, 3, '2020-02-12 21:48:00', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581520422),
(71, 1, '2020-02-12 22:15:55', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581520769),
(72, 3, '2020-02-12 22:24:57', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581524667),
(73, 3, '2020-02-12 23:25:51', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525372),
(74, 3, '2020-02-12 23:38:26', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525436),
(75, 3, '2020-02-12 23:39:40', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525500),
(76, 3, '2020-02-12 23:40:30', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525739),
(77, 1, '2020-02-12 23:44:29', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525805),
(78, 1, '2020-02-12 23:46:22', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581525886),
(79, 2, '2020-02-12 23:47:00', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581526569),
(80, 3, '2020-02-13 15:14:08', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581582147),
(81, 1, '2020-02-13 15:24:40', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581582305),
(82, 2, '2020-02-13 15:27:17', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581582328),
(83, 3, '2020-02-13 15:27:42', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581587630),
(84, 3, '2020-02-14 06:53:02', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.100\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.100 Safari\\/537.36\",\"ip\":\"::1\"}', 1581639068),
(85, 3, '2020-02-19 17:04:54', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.106\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.106 Safari\\/537.36\",\"ip\":\"::1\"}', 1582106756),
(86, 1, '2020-03-17 21:32:29', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584455632),
(87, 5, '2020-03-17 21:36:06', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584455693),
(88, 3, '2020-03-17 21:37:03', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584456085),
(89, 5, '2020-03-17 21:43:40', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584456218),
(90, 1, '2020-03-17 21:45:50', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584456819),
(91, 1, '2020-03-18 22:12:28', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584544948),
(92, 5, '2020-03-18 22:24:40', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584634524),
(93, 1, '2020-03-20 00:41:44', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584662465),
(94, 5, '2020-03-20 10:27:10', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.132\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.132 Safari\\/537.36\",\"ip\":\"::1\"}', 1584686722),
(95, 1, '2020-03-23 20:15:13', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"::1\"}', 1584969544),
(96, 5, '2020-03-23 20:21:08', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Unknown Windows OS\",\"agent_string\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"::1\"}', 1584983830),
(97, 1, '2020-04-02 00:18:26', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"192.168.64.3\"}', 1585768800),
(98, 1, '2020-04-02 02:30:31', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"192.168.64.3\"}', 1585772472),
(99, 3, '2020-04-02 03:23:20', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"192.168.64.3\"}', 1585772840),
(100, 3, '2020-04-02 14:48:50', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1585813772),
(101, 2, '2020-04-02 14:51:41', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1585813818),
(102, 3, '2020-04-02 14:52:25', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1585820538),
(103, 3, '2020-04-02 16:42:34', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1585830681),
(104, 2, '2020-04-02 19:31:35', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.149\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.149 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1585846552),
(105, 2, '2020-04-09 23:22:46', '{\"is_mobile\":0,\"browser\":\"Chrome 80.0.3987.163\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/80.0.3987.163 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1586461954),
(106, 2, '2020-04-25 12:43:36', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1587799345),
(107, 1, '2020-04-25 14:22:48', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1587799268),
(108, 2, '2020-04-25 14:23:41', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1587801740),
(109, 1, '2020-04-25 15:04:32', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1587802159),
(110, 1, '2020-04-28 10:31:02', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1588064587),
(111, 1, '2020-04-28 22:03:55', '{\"is_mobile\":0,\"browser\":\"Safari 605.1.15\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/12.0 Safari\\/605.1.15\",\"ip\":\"127.0.0.1\"}', 1588099308),
(112, 1, '2020-04-30 00:45:09', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1588187992),
(113, 3, '2020-04-30 02:22:00', '{\"is_mobile\":0,\"browser\":\"Chrome 81.0.4044.122\",\"platform\":\"Mac OS X\",\"agent_string\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.122 Safari\\/537.36\",\"ip\":\"127.0.0.1\"}', 1588189086);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_mapel`
--

CREATE TABLE `el_mapel` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `info` text DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = ya, 0 = tidak'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_mapel`
--

INSERT INTO `el_mapel` (`id`, `nama`, `info`, `aktif`) VALUES
(1, 'Bahasa Indonesia', '', 1),
(2, 'Bahasa Inggris', NULL, 1),
(3, 'Matematika', NULL, 1),
(4, 'Seni Budaya', '', 1),
(5, 'Ilmu Pengetahuan Sosial', '', 1),
(6, 'Pendidikan Kewarganegaraan', '', 1),
(7, 'Penjas', NULL, 1),
(8, 'Pendidikan Agama Islam', '', 1),
(9, 'Ilmu Pengertahuan Alam', '', 1),
(10, 'Kimia', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_mapel_ajar`
--

CREATE TABLE `el_mapel_ajar` (
  `id` int(11) NOT NULL,
  `hari_id` tinyint(1) NOT NULL COMMENT '1=senin,2=selasa,3=rabu,4=kamis,5=jum''at,6=sabtu,7=minggu',
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `pengajar_id` int(11) NOT NULL,
  `mapel_kelas_id` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = aktif 0 = tidak'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_mapel_ajar`
--

INSERT INTO `el_mapel_ajar` (`id`, `hari_id`, `jam_mulai`, `jam_selesai`, `pengajar_id`, `mapel_kelas_id`, `aktif`) VALUES
(1, 1, '08:00:00', '10:30:00', 2, 11, 1),
(2, 3, '11:00:00', '13:00:00', 2, 11, 1),
(3, 1, '12:33:00', '01:36:00', 3, 3, 1),
(4, 2, '10:00:00', '12:00:00', 8, 20, 1),
(5, 3, '07:00:00', '09:00:00', 7, 21, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_mapel_kelas`
--

CREATE TABLE `el_mapel_kelas` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_mapel_kelas`
--

INSERT INTO `el_mapel_kelas` (`id`, `kelas_id`, `mapel_id`, `aktif`) VALUES
(1, 2, 1, 1),
(2, 2, 2, 1),
(3, 2, 3, 1),
(4, 2, 4, 1),
(5, 2, 5, 1),
(6, 2, 6, 1),
(7, 2, 7, 1),
(8, 2, 8, 1),
(9, 2, 9, 1),
(10, 2, 10, 1),
(11, 7, 6, 1),
(12, 1, 1, 0),
(13, 1, 2, 0),
(16, 7, 2, 1),
(17, 7, 3, 1),
(18, 7, 4, 1),
(19, 3, 1, 1),
(20, 3, 3, 1),
(21, 3, 2, 1),
(22, 3, 7, 1),
(23, 3, 10, 0),
(24, 3, 8, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_materi`
--

CREATE TABLE `el_materi` (
  `id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `pengajar_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `tgl_posting` datetime NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_materi`
--

INSERT INTO `el_materi` (`id`, `mapel_id`, `pengajar_id`, `siswa_id`, `judul`, `konten`, `file`, `tgl_posting`, `publish`, `views`) VALUES
(1, 1, 2, NULL, 'skuy living', NULL, 'skuy_living_1581519810.docx', '2020-02-12 22:03:30', 1, 1),
(4, 2, 2, NULL, 'opening', 'data fill', 'catatan7.txt', '2020-05-01 06:52:13', 1, 1),
(5, 1, 1, NULL, 'Judul', 'ayo kerjakan', '37-80-3-PB.pdf', '2021-04-22 19:21:15', 1, 1),
(6, 2, 7, NULL, 'Materi Ke 2', 'Pelajari Ya', 'n.png', '2021-04-28 18:15:57', 1, 1),
(8, 1, 7, NULL, 'Materi Ke 2 Bahasa Indonesia', 'Harap Di Baca', '1371-2778-1-SM.pdf', '2021-06-26 09:44:26', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_materi_kelas`
--

CREATE TABLE `el_materi_kelas` (
  `id` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_materi_kelas`
--

INSERT INTO `el_materi_kelas` (`id`, `materi_id`, `kelas_id`) VALUES
(1, 1, 11),
(2, 4, 2),
(3, 5, 2),
(4, 6, 2),
(6, 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_messages`
--

CREATE TABLE `el_messages` (
  `id` int(11) NOT NULL,
  `type_id` tinyint(1) NOT NULL COMMENT '1=inbox,2=outbox',
  `content` text NOT NULL,
  `owner_id` int(11) NOT NULL,
  `sender_receiver_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=belum,1=sudah'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_messages`
--

INSERT INTO `el_messages` (`id`, `type_id`, `content`, `owner_id`, `sender_receiver_id`, `date`, `opened`) VALUES
(1, 2, '<p>saya sangat senang belajar e-learning</p>\r\n', 2, 1, '2019-12-14 19:30:49', 1),
(8, 1, '<p>cgcgcgcgcg</p>\r\n', 5, 1, '2020-01-04 02:11:39', 1),
(5, 2, '<p>ok bos&nbsp;</p>\r\n', 2, 1, '2019-12-14 19:32:37', 1),
(16, 1, 'opo le', 3, 2, '2020-04-02 19:30:44', 0),
(20, 1, 'Nuhun euy!', 1, 2, '2020-04-29 19:43:15', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_nilai_tugas`
--

CREATE TABLE `el_nilai_tugas` (
  `id` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_nilai_tugas`
--

INSERT INTO `el_nilai_tugas` (`id`, `nilai`, `tugas_id`, `siswa_id`) VALUES
(2, 100, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_pengajar`
--

CREATE TABLE `el_pengajar` (
  `id` int(11) NOT NULL,
  `nip` varchar(45) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` text DEFAULT NULL,
  `status_id` tinyint(1) NOT NULL COMMENT '0=pending, 1=aktif, 2=blok',
  `id_mapel` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_pengajar`
--

INSERT INTO `el_pengajar` (`id`, `nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `foto`, `status_id`, `id_mapel`) VALUES
(1, '150212045', 'Tepi Randi,.M.Pd', 'Laki-laki', 'Sumedang', '1990-02-14', 'Wado', 'ok-cak-lontong31.jpg', 1, '1'),
(10, '123456', 'Rohendi.,M.,PD', 'Laki-laki', 'Sumedang', '1982-05-12', 'Cilengkrang', 'n2.png', 1, NULL),
(7, 'A2.1700082', 'Nuryana N', 'Laki-laki', 'Sumedang', '1998-01-27', 'Cilengkrang', 'n.png', 1, '1'),
(15, '12343', 'Mamane', 'Laki-laki', 'Sumedang', '2021-05-14', 'Cilengkrang', NULL, 1, NULL),
(14, '1238745', 'Maman Sutisna M.,Kom', 'Laki-laki', 'Sumedang', '2021-05-09', 'Sumedang', NULL, 1, '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_pengaturan`
--

CREATE TABLE `el_pengaturan` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_pengaturan`
--

INSERT INTO `el_pengaturan` (`id`, `nama`, `value`) VALUES
('email-server', 'Email server', 'dicky@domain.com'),
('email-template-approve-pengajar', 'Approve pengajar (email pengajar)', '{\"subject\":\"Pengaktifan Akun\",\"body\":\"<p>Hai {$nama},<\\/p>\\n<p>Anda telah diterima sebagai pengajar pada {$nama_sekolah}, berikut informasi data diri anda:<\\/p>\\n<p>{$tabel_profil}<\\/p>\\n<p>Anda dapat login ke sistem E-Learning menggunakan username dan password yang telah anda buat saat pendaftaran, login pada url berikut : {$url_login}<\\/p>\"}'),
('email-template-approve-siswa', 'Approve siswa (email siswa)', '{\"subject\":\"Pengaktifan Akun\",\"body\":\"<p>Hai {$nama},<\\/p>\\n<p>Anda telah diterima sebagai siswa pada {$nama_sekolah}, berikut informasi data diri anda:<\\/p>\\n<p>{$tabel_profil}<\\/p>\\n<p>Anda dapat login ke sistem E-Learning menggunakan username dan password yang telah anda buat saat pendaftaran, login pada url berikut : {$url_login}<\\/p>\"}'),
('email-template-link-reset', 'Link Reset Password', '{\"subject\":\"Reset Password\",\"body\":\"<p>Hai,<\\/p>\\n<p>Anda mengirimkan permintaan untuk reset password anda, klik link berikut untuk memulai reset password : {$link_reset}<\\/p>\"}'),
('email-template-register-pengajar', 'Register pengajar (email pengajar)', '{\"subject\":\"Registrasi Berhasil\",\"body\":\"<p>Hai {$nama},<\\/p>\\n<p>Terimakasih telah melakukan pendaftaran sebagai pengajar di E-Learning {$nama_sekolah}. Akun anda akan segera diaktifkan oleh admin.<\\/p>\"}'),
('email-template-register-siswa', 'Register siswa (email siswa)', '{\"subject\":\"Registrasi Berhasil\",\"body\":\"<p>Hai {$nama},<\\/p>\\n<p>Terimakasih telah melakukan pendaftaran sebagai siswa di E-Learning {$nama_sekolah}. Akun anda akan segera diaktifkan oleh admin.<\\/p>\"}'),
('info-registrasi', 'Info Registrasi', '<p>Silakan mendaftar sebagai siswa atau pengajar (jika anda sebagai pengajar) dengan memilih sesuai tab berikut :</p>\r\n'),
('peraturan-elearning', 'Peraturan E-learning', ''),
('registrasi-pengajar', 'Registrasi Pengajar', '1'),
('registrasi-siswa', 'Registrasi Siswa', '1'),
('versi', 'Versi', '2.0'),
('jenjang', 'jenjang', 'SMA'),
('nama-sekolah', 'nama-sekolah', 'SMA SINT CAROLUS BENGKULU'),
('alamat', 'alamat', 'Jalan Kapuas Raya no.22'),
('telp', 'telp', '081367783246'),
('install-success', 'install-success', '1'),
('status-registrasi-siswa', 'status-registrasi-siswa', '0'),
('status-registrasi-pengajar', 'status-registrasi-pengajar', '0'),
('smtp-host', 'smtp-host', ''),
('smtp-username', 'smtp-username', ''),
('smtp-pass', 'smtp-pass', ''),
('smtp-port', 'smtp-port', ''),
('edit-username-siswa', 'edit-username-siswa', '1'),
('edit-foto-siswa', 'edit-foto-siswa', '1'),
('info-slide-1', 'info-slide-1', ''),
('info-slide-2', 'info-slide-2', ''),
('info-slide-3', 'info-slide-3', ''),
('info-slide-4', 'info-slide-4', ''),
('logo-sekolah', 'logo-sekolah', 'logo-sekolah.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_pengumuman`
--

CREATE TABLE `el_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tgl_tampil` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `tampil_siswa` tinyint(1) NOT NULL DEFAULT 1,
  `tampil_pengajar` tinyint(1) NOT NULL DEFAULT 1,
  `pengajar_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_pengumuman`
--

INSERT INTO `el_pengumuman` (`id`, `judul`, `konten`, `tgl_tampil`, `tgl_tutup`, `tampil_siswa`, `tampil_pengajar`, `pengajar_id`) VALUES
(1, 'pkn', '<p>haaiiii sekarang kita ada pengumuman yaaa</p>\r\n', '2020-02-13', '2020-03-10', 1, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_pilihan`
--

CREATE TABLE `el_pilihan` (
  `id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `konten` text NOT NULL,
  `kunci` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=tidak',
  `urutan` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_pilihan`
--

INSERT INTO `el_pilihan` (`id`, `pertanyaan_id`, `konten`, `kunci`, `urutan`, `aktif`) VALUES
(1, 1, '<p>otot</p>\r\n', 1, 1, 1),
(2, 1, '<p>rangka</p>\r\n', 0, 2, 1),
(3, 1, '<p>saraf</p>\r\n', 0, 3, 1),
(4, 1, '<p>pencernaan</p>\r\n', 0, 4, 1),
(5, 1, '<p>anjai</p>\r\n', 0, 5, 0),
(6, 2, '<p>rangka</p>\r\n', 0, 4, 1),
(7, 2, '<p>otot</p>\r\n', 1, 1, 1),
(8, 2, '<p>saraf</p>\r\n', 0, 2, 1),
(9, 2, '<p>pencernaan</p>\r\n', 0, 3, 1),
(10, 3, '<p>sapanich</p>\n', 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_siswa`
--

CREATE TABLE `el_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(45) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL COMMENT 'Laki-laki dan Perempuan',
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` char(7) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `foto` text DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `badge1` varchar(255) NOT NULL,
  `badge2` varchar(50) NOT NULL,
  `badge3` varchar(50) NOT NULL,
  `badge4` varchar(50) NOT NULL,
  `badge5` varchar(50) NOT NULL,
  `badge6` varchar(50) NOT NULL,
  `badge7` varchar(50) NOT NULL,
  `badge8` varchar(50) NOT NULL,
  `badge9` varchar(50) NOT NULL,
  `badge10` varchar(50) NOT NULL,
  `badge11` varchar(50) NOT NULL,
  `badge12` varchar(50) NOT NULL,
  `badge13` varchar(50) NOT NULL,
  `badge14` varchar(50) NOT NULL,
  `badge15` varchar(50) NOT NULL,
  `badge16` varchar(50) NOT NULL,
  `badge17` varchar(50) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `exp` int(11) NOT NULL,
  `status_id` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=aktif, 2=blok, 3=alumni, 4=deleted'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_siswa`
--

INSERT INTO `el_siswa` (`id`, `nis`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `tahun_masuk`, `foto`, `level`, `badge`, `badge1`, `badge2`, `badge3`, `badge4`, `badge5`, `badge6`, `badge7`, `badge8`, `badge9`, `badge10`, `badge11`, `badge12`, `badge13`, `badge14`, `badge15`, `badge16`, `badge17`, `score`, `exp`, `status_id`) VALUES
(1, '1151', 'Amar', 'Laki-laki', 'Sumedang', '2005-04-21', 'ISLAM', 'Desa Cimedang', 2018, 'ok-cak-lontong3.jpg', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 100, 0, 1),
(17, '632573', 'Indah Khoerunisa', 'Perempuan', 'Sumedang', '2021-05-11', 'ISLAM', 'Cilengkrang', 2018, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(2, '1157', 'Tara', 'Perempuan', 'Cikareo Selatan', '2002-03-08', 'ISLAM', 'Desa Cikareo', 2018, NULL, 1, '1.png', 'geek.png', '2.png', '1.png', 'certificate.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 1),
(3, '1152', 'APIPAH PUTRI', 'Perempuan', 'Sumedang', '2008-11-12', 'ISLAM', 'Desa Cimedang', 2018, 'siswa-fitria-sukma-11521.jpg', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(11, '1110987', 'Aliya ', 'Perempuan', 'Sumedang', '2007-05-09', 'ISLAM', 'Desa Galemo', 2018, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(12, '123423', 'Nuryana', 'Laki-laki', 'Sumedang', NULL, NULL, 'Wado', 2020, 'n.png', NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 0),
(13, '152436', 'Yan', 'Laki-laki', 'Sumedang', '2021-04-06', 'ISLAM', 'Wado', 2019, 'n.png', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2000, 0, 1),
(14, '21534126', 'Delia', 'Perempuan', 'Sumedang', '2021-05-04', 'ISLAM', 'Cilengkrang', 2018, 'girl5.png', 5, '3.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 400, 0, 1),
(15, '1234567', 'Nada Azizah', '', 'Sumedang', '2021-06-01', 'ISLAM', 'Cilengkrang', 2018, 'girl21.png', 2, '1.png', 'diamond.png', 'geek.png', 'good.png', 'king.png', 'queen.png', '', '', '', '', '', '', '', '', '', '', '', '', 90, 30, 1),
(18, '23421', 'Aysi', 'Perempuan', 'Sumedang', '2021-05-20', 'ISLAM', 'Cikareo Selatan', 2019, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(24, '12345', 'Deni', 'Laki-laki', 'Sumedang', '2021-06-25', 'ISLAM', 'Cilengkrang', 2020, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(25, '123456', 'Deri', 'Laki-laki', 'Sumedang', '2021-06-26', 'ISLAM', 'Cilengkrang', 2020, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1),
(26, '123456', 'Agus', 'Laki-laki', 'Sumedang', '2021-06-26', 'ISLAM', 'Cilengkrang', 2021, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_soal`
--

CREATE TABLE `el_soal` (
  `id_soal` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `pg_a` text DEFAULT NULL,
  `pg_b` text DEFAULT NULL,
  `pg_c` text DEFAULT NULL,
  `jawaban_pg` varchar(32) DEFAULT NULL,
  `tipe` int(11) NOT NULL COMMENT '1=pg,2=essay',
  `pengajar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_soal`
--

INSERT INTO `el_soal` (`id_soal`, `pertanyaan`, `pg_a`, `pg_b`, `pg_c`, `jawaban_pg`, `tipe`, `pengajar_id`) VALUES
(1, '1+1=0 ?', 'A.Ya', 'B.Tidak', 'C.Pertanyaan macam apa ini', 'C', 1, 2),
(3, 'Jelaskan menurut anda bumi bulat atau datar?', NULL, NULL, NULL, NULL, 2, 2),
(5, 'aasdasd', 'A.a', 'B.d', 'C.s', 'C', 1, 2),
(6, 'dasdasdasd??', NULL, NULL, NULL, NULL, 2, 2),
(17, 'Apa Arti dari Lion', 'A.Singa', 'B.Harimau', 'C.Serigala', 'A', 1, 7),
(18, 'Apa Ari Dari Lion.?', 'A.Singa', 'B.harimau', 'C.Serigala', 'A', 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_tugas`
--

CREATE TABLE `el_tugas` (
  `id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `pengajar_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `info` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `tgl_buat` datetime DEFAULT NULL,
  `durasi` datetime DEFAULT NULL COMMENT 'lama pengerjaan dalam menit',
  `aktif` tinyint(1) NOT NULL DEFAULT 0,
  `tampil_siswa` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=tidak tampil di siswa, 1=tampil siswa'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_tugas`
--

INSERT INTO `el_tugas` (`id`, `mapel_id`, `pengajar_id`, `judul`, `info`, `file`, `tgl_buat`, `durasi`, `aktif`, `tampil_siswa`) VALUES
(4, 2, 2, 'Tugas WFH', 'COBA kerjakan selama korona', 'catatan9.txt', '2020-05-01 09:39:19', '2020-05-14 13:00:00', 1, 1),
(5, 2, 2, 'tugas wfh', 'kerjain sampai korona', 'catatan10.txt', '2020-05-01 09:48:50', '2020-05-04 07:48:00', 1, 1),
(7, 3, 4, 'Ayo Kerjakan Soal Matematikanya', 'Coba Kalian Latihan Dulu', 'default.jpg', '2021-04-23 09:31:50', '2021-01-22 00:00:00', 1, 1),
(8, 3, 8, 'Matematika', 'Ayo Isi', 'default1.jpg', '2021-04-23 10:14:18', '2021-10-10 00:00:00', 1, 1),
(9, 3, 8, 'Tugas Untuk Kelas B', 'Mohon Untuk Dikerjakan Karena Ini Berhadiah Badge Keistimewaan', 'n.png', '2021-04-23 15:07:51', '1970-01-01 01:00:00', 1, 1),
(10, 2, 7, 'Tugas Untuk Kelas B Bahasa Inggris', 'Yang mengerjakan akan mendapatkan badge ', 'n1.png', '2021-04-24 09:42:40', '2021-04-25 00:00:00', 1, 1),
(11, 1, 7, 'Kerjakan Tugas nya Anak2', 'Yang mendapat nilai lebih dari 75 akan mendapatkan badge ', '41-1310-1-PB.pdf', '2021-05-09 05:16:11', '2021-05-10 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_tugas_kelas`
--

CREATE TABLE `el_tugas_kelas` (
  `id` int(11) NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_tugas_kelas`
--

INSERT INTO `el_tugas_kelas` (`id`, `tugas_id`, `kelas_id`) VALUES
(5, 5, 7),
(4, 4, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 3),
(10, 10, 3),
(11, 11, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_tugas_kumpul`
--

CREATE TABLE `el_tugas_kumpul` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `tugas_id` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `nilai` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_tugas_kumpul`
--

INSERT INTO `el_tugas_kumpul` (`id`, `kelas_id`, `siswa_id`, `tugas_id`, `file`, `nilai`) VALUES
(2, 7, 2, 5, 'catatan12.txt', '22'),
(3, 2, 13, 6, 'girl3.png', '100'),
(4, 2, 13, 7, 'girl31.png', '90'),
(5, 3, 14, 9, 'girl32.png', '90'),
(6, 3, 15, 10, 'girl33.png', '100'),
(7, 3, 14, 10, 'n2.png', '100'),
(8, 2, 15, 11, 'Portfolio(1).png', '90'),
(9, 2, 15, 11, '1371-2778-1-SM1.pdf', '0'),
(10, 2, 15, 11, '1298-2773-1-SM.pdf', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_tugas_pertanyaan`
--

CREATE TABLE `el_tugas_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `urutan` int(11) NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `el_tugas_pertanyaan`
--

INSERT INTO `el_tugas_pertanyaan` (`id`, `pertanyaan`, `urutan`, `tugas_id`, `aktif`) VALUES
(1, '<p>sistem tubuh yang berfungsi sebagai penyangga, pemberi bentuk tubuh, dan alat gerak pasif adalah &hellip;</p>\r\n', 1, 1, 1),
(2, '<p>sistem tubuh yang berfungsi sebagai penyangga, pemberi bentuk tubuh, dan alat gerak pasif adalah &hellip;</p>\r\n', 1, 2, 1),
(3, '<p>Siapa nama Bapak Saya?</p>\n', 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_ujian`
--

CREATE TABLE `el_ujian` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `tgl_expired` date NOT NULL,
  `waktu` int(11) NOT NULL,
  `mapel_kelas_id` int(11) NOT NULL,
  `pengajar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_ujian`
--

INSERT INTO `el_ujian` (`id`, `judul`, `tgl_dibuat`, `tgl_expired`, `waktu`, `mapel_kelas_id`, `pengajar_id`) VALUES
(1, 'Testingg', '2020-04-30', '2020-05-02', 30, 11, 2),
(3, 'asdasdasd', '2020-05-01', '2020-05-04', 10, 11, 2),
(4, 'Challennge Level 1', '2021-04-23', '2021-04-24', 100, 20, 8),
(9, 'Challenge untuk bahasa Inggris', '2021-06-28', '2021-06-28', 11, 21, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `el_ujian_soal`
--

CREATE TABLE `el_ujian_soal` (
  `id_ujian_soal` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `aktif` int(11) NOT NULL COMMENT '1=aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `el_ujian_soal`
--

INSERT INTO `el_ujian_soal` (`id_ujian_soal`, `id_ujian`, `id_soal`, `aktif`) VALUES
(1, 2, 1, 1),
(2, 2, 3, 0),
(3, 1, 1, 1),
(5, 1, 3, 1),
(6, 3, 1, 1),
(7, 3, 3, 1),
(8, 3, 5, 1),
(9, 3, 6, 1),
(10, 4, 7, 1),
(11, 5, 8, 1),
(12, 5, 9, 1),
(13, 6, 10, 1),
(14, 6, 11, 1),
(15, 7, 12, 1),
(16, 7, 13, 0),
(17, 7, 14, 1),
(18, 7, 15, 1),
(19, 7, 16, 1),
(20, 8, 17, 1),
(21, 9, 18, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `el_absen`
--
ALTER TABLE `el_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_absen_siswa`
--
ALTER TABLE `el_absen_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_field_tambahan`
--
ALTER TABLE `el_field_tambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_jawaban`
--
ALTER TABLE `el_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `el_kelas`
--
ALTER TABLE `el_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `parent_id_2` (`parent_id`);

--
-- Indeks untuk tabel `el_kelas_siswa`
--
ALTER TABLE `el_kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`,`siswa_id`),
  ADD KEY `kelas_id_2` (`kelas_id`,`siswa_id`);

--
-- Indeks untuk tabel `el_komentar`
--
ALTER TABLE `el_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`,`materi_id`),
  ADD KEY `login_id_2` (`login_id`,`materi_id`),
  ADD KEY `login_id_3` (`login_id`,`materi_id`);

--
-- Indeks untuk tabel `el_leaderboard`
--
ALTER TABLE `el_leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_login`
--
ALTER TABLE `el_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`siswa_id`,`pengajar_id`),
  ADD KEY `username_2` (`username`,`siswa_id`,`pengajar_id`);

--
-- Indeks untuk tabel `el_login_log`
--
ALTER TABLE `el_login_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `login_id_2` (`login_id`),
  ADD KEY `login_id_3` (`login_id`);

--
-- Indeks untuk tabel `el_mapel`
--
ALTER TABLE `el_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_mapel_ajar`
--
ALTER TABLE `el_mapel_ajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hari_id` (`hari_id`,`pengajar_id`,`mapel_kelas_id`),
  ADD KEY `hari_id_2` (`hari_id`,`pengajar_id`,`mapel_kelas_id`);

--
-- Indeks untuk tabel `el_mapel_kelas`
--
ALTER TABLE `el_mapel_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`,`mapel_id`),
  ADD KEY `kelas_id_2` (`kelas_id`,`mapel_id`);

--
-- Indeks untuk tabel `el_materi`
--
ALTER TABLE `el_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`,`pengajar_id`,`siswa_id`),
  ADD KEY `mapel_id_2` (`mapel_id`,`pengajar_id`,`siswa_id`);

--
-- Indeks untuk tabel `el_materi_kelas`
--
ALTER TABLE `el_materi_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materi_id` (`materi_id`,`kelas_id`),
  ADD KEY `materi_id_2` (`materi_id`,`kelas_id`);

--
-- Indeks untuk tabel `el_messages`
--
ALTER TABLE `el_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`,`owner_id`,`sender_receiver_id`),
  ADD KEY `type_id_2` (`type_id`,`owner_id`,`sender_receiver_id`);

--
-- Indeks untuk tabel `el_nilai_tugas`
--
ALTER TABLE `el_nilai_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_id` (`tugas_id`,`siswa_id`),
  ADD KEY `tugas_id_2` (`tugas_id`,`siswa_id`);

--
-- Indeks untuk tabel `el_pengajar`
--
ALTER TABLE `el_pengajar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indeks untuk tabel `el_pengaturan`
--
ALTER TABLE `el_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_pengumuman`
--
ALTER TABLE `el_pengumuman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajar_id` (`pengajar_id`),
  ADD KEY `pengajar_id_2` (`pengajar_id`),
  ADD KEY `pengajar_id_3` (`pengajar_id`);

--
-- Indeks untuk tabel `el_pilihan`
--
ALTER TABLE `el_pilihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `pertanyaan_id_2` (`pertanyaan_id`,`kunci`);

--
-- Indeks untuk tabel `el_siswa`
--
ALTER TABLE `el_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`,`nama`,`status_id`),
  ADD KEY `nis_2` (`nis`,`nama`,`status_id`);

--
-- Indeks untuk tabel `el_soal`
--
ALTER TABLE `el_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `el_tugas`
--
ALTER TABLE `el_tugas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`,`pengajar_id`),
  ADD KEY `mapel_id_2` (`mapel_id`,`pengajar_id`);

--
-- Indeks untuk tabel `el_tugas_kelas`
--
ALTER TABLE `el_tugas_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_id` (`tugas_id`,`kelas_id`),
  ADD KEY `tugas_id_2` (`tugas_id`,`kelas_id`);

--
-- Indeks untuk tabel `el_tugas_kumpul`
--
ALTER TABLE `el_tugas_kumpul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_tugas_pertanyaan`
--
ALTER TABLE `el_tugas_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tugas_id` (`tugas_id`),
  ADD KEY `tugas_id_2` (`tugas_id`);

--
-- Indeks untuk tabel `el_ujian`
--
ALTER TABLE `el_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `el_ujian_soal`
--
ALTER TABLE `el_ujian_soal`
  ADD PRIMARY KEY (`id_ujian_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `el_absen`
--
ALTER TABLE `el_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `el_absen_siswa`
--
ALTER TABLE `el_absen_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `el_jawaban`
--
ALTER TABLE `el_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `el_kelas`
--
ALTER TABLE `el_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `el_kelas_siswa`
--
ALTER TABLE `el_kelas_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `el_komentar`
--
ALTER TABLE `el_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `el_leaderboard`
--
ALTER TABLE `el_leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `el_login`
--
ALTER TABLE `el_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `el_login_log`
--
ALTER TABLE `el_login_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `el_mapel`
--
ALTER TABLE `el_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `el_mapel_ajar`
--
ALTER TABLE `el_mapel_ajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `el_mapel_kelas`
--
ALTER TABLE `el_mapel_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `el_materi`
--
ALTER TABLE `el_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `el_materi_kelas`
--
ALTER TABLE `el_materi_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `el_messages`
--
ALTER TABLE `el_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `el_nilai_tugas`
--
ALTER TABLE `el_nilai_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `el_pengajar`
--
ALTER TABLE `el_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `el_pengumuman`
--
ALTER TABLE `el_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `el_pilihan`
--
ALTER TABLE `el_pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `el_siswa`
--
ALTER TABLE `el_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `el_soal`
--
ALTER TABLE `el_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `el_tugas`
--
ALTER TABLE `el_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `el_tugas_kelas`
--
ALTER TABLE `el_tugas_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `el_tugas_kumpul`
--
ALTER TABLE `el_tugas_kumpul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `el_tugas_pertanyaan`
--
ALTER TABLE `el_tugas_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `el_ujian`
--
ALTER TABLE `el_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `el_ujian_soal`
--
ALTER TABLE `el_ujian_soal`
  MODIFY `id_ujian_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
