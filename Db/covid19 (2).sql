-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 12:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `classesses`
--

CREATE TABLE `classesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indexs` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classesses`
--

INSERT INTO `classesses` (`id`, `id_kelas`, `kelas`, `indexs`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 1001, '10', 'A', 'Green', '2021-01-22 17:51:51', '2021-06-19 09:16:49'),
(2, 1002, '10', 'B', 'Blue', '2021-06-13 03:32:20', '2021-06-13 03:32:20'),
(13, 1003, '10', 'C', 'Violet', '2021-06-18 09:02:32', '2021-06-18 09:02:32'),
(14, 1101, '11', 'A', 'Blue Sky', '2021-06-18 09:03:14', '2021-06-18 09:03:14'),
(15, 1004, '10', 'D', 'Yellow', '2021-06-19 09:22:29', '2021-06-19 09:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkm` int(11) NOT NULL,
  `classess_id_kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id`, `id_mapel`, `nama_mapel`, `kkm`, `classess_id_kelas`, `created_at`, `updated_at`) VALUES
(1, '1001', 'B indonesia', 79, 10, '2021-01-22 17:52:28', '2021-06-19 04:58:08'),
(2, '1002', 'Matematika', 80, 10, '2021-06-19 05:12:12', '2021-06-19 05:12:12'),
(3, '1003', 'Kimia', 80, 10, '2021-06-23 02:25:40', '2021-06-23 02:25:40'),
(4, '1004', 'Biologi', 80, 10, '2021-06-23 02:54:15', '2021-06-23 02:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_vaksin` enum('Sinovac','Astra Zaneca','Moderna','Sinopharm','Lainnya') NOT NULL,
  `jadwal1` datetime DEFAULT NULL,
  `jadwal2` datetime DEFAULT NULL,
  `tempat` varchar(100) NOT NULL,
  `status` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_nisn` bigint(20) UNSIGNED DEFAULT NULL,
  `mapel_id_mapel` bigint(20) UNSIGNED DEFAULT NULL,
  `mapels_nama_mapel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_tugas` int(11) DEFAULT NULL,
  `nilai_uts` int(11) DEFAULT NULL,
  `nilai_uas` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `id_score`, `student_nisn`, `mapel_id_mapel`, `mapels_nama_mapel`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(1, '00446393381001', 44639338, 1001, 'B indonesia', 80, 80, 80, '2021-06-19 03:17:35', '2021-06-19 03:17:35'),
(5, '00446393381002', 44639338, 1002, 'Matematika', NULL, NULL, NULL, '2021-06-19 12:14:50', '2021-06-19 12:14:50'),
(8, '00446393351001', 44639335, 1001, 'B indonesia', NULL, NULL, NULL, '2021-06-19 12:18:29', '2021-06-19 12:18:29'),
(9, '00446393351003', 44639335, 1003, 'Kimia', 80, 78, 78, '2021-06-23 04:49:30', '2021-06-23 04:49:30'),
(10, '00446393381003', 44639338, 1003, 'Kimia', 86, 90, 90, '2021-06-23 04:50:54', '2021-06-23 04:50:54'),
(11, '00446393381004', 44639338, 1004, 'Biologi', NULL, NULL, NULL, '2021-06-23 04:14:56', '2021-06-23 04:14:56'),
(12, '00446393351002', 44639335, 1002, 'Matematika', NULL, NULL, NULL, '2021-06-23 04:16:48', '2021-06-23 04:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotopath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classess_id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nisn`, `nis`, `fotopath`, `classess_id_kelas`, `user_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `nama_ibu`, `no_tlp`, `status`, `created_at`, `updated_at`) VALUES
(10, '0044639335', '1234', 'Foto dari Nurgi.png', 1001, NULL, 'Moh. Ainur Rofik', 'jakarta', '2021-01-13', 'Laki-laki', 'Islam', 'SImo', 'Mar', '0988', 'Aktif', '2021-01-26 18:08:23', '2021-06-18 10:33:28'),
(0, '0044639338', '4172', 'William_Dharmawan.png', 1002, 28, 'William Dharmawan', 'jombang timur', '2021-06-11', 'Laki-laki', 'Budha', 'Simo Gunung Kramat Timur 7/16E', 'Mar', '+6283115759401', 'Aktif', '2021-06-10 21:50:39', '2021-06-16 18:15:43'),
(0, '14042000', '9988', 'sembarang.png', 1101, 38, 'sembarang wees', 'jombang ', '2021-06-23', 'Laki-laki', 'Islam', 'soim', 'lik', '+6283115759401', 'Aktif', '2021-06-23 02:55:41', '2021-06-23 02:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotopath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classess_id_kelas` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ahli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `nip`, `fotopath`, `classess_id_kelas`, `nama`, `ahli`, `user_id`, `email`, `jenis_kelamin`, `pendidikan`, `alamat`, `no_tlp`, `status`, `created_at`, `updated_at`) VALUES
(8, '00987654', 'Bukan_Guru_Biasa.png', 1001, 'Bukan Guru Biasa', 'Kimia', 37, 'asasasa@sasas.com', 'Laki-laki', 'SMA', 'sasa', '+6283115759401', 'Aktif', '2021-06-12 20:49:22', '2021-06-12 20:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `level` int(5) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `pass`, `level`, `status`) VALUES
(8, 'anon anony', '18081010073.b@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$ZkZkb0VqOVdpbTRHa3A4SA$wvr0EguvgL7xWIZJR8vj0Q6QdpVLEL0W7byvmVd88Bk', 1, 0),
(9, 'fiq', 'ainurrofik989@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$N1BvOVQ3NkNSTEhqWE9seg$e9ja/S0C/4il83cQiJUma5a6pe+duLFNhP6rDX8pwu8', 2, 0),
(10, 'ainur', 'mohamatainur@gmail.com', '$argon2i$v=19$m=1024,t=2,p=2$Z1FlY0sybk5vcW1QeUNmUA$n3d0gtBcXgug9mPWf+bvLlxGwofn+mnljqSme+KPmj0', 3, 0),
(28, 'William Dharmawan', 'student4172@schoolemail.com', '$argon2i$v=19$m=1024,t=2,p=2$Q0REWHNqSlQ2cERmSXY1NA$fyvg7xlZp8P5J/9/inLOuLX2dfxA3+O6YGLPFiSLwds', 3, 0),
(37, 'Bukan Guru Biasa', 'teacher00987654@schoolemail.com', '$argon2i$v=19$m=1024,t=2,p=2$a0xCUkNyQnp4dU5hOEdZeA$MUjXDClYmXHKMKc2G4YMH2zImbwjGUwJ6rVjOtxTfxg', 2, 1),
(38, 'sembarang wees', 'student9988@schoolemail.com', '$argon2i$v=19$m=1024,t=2,p=2$bVl2aXd4YWJBQnguazkuNg$W9QlVxozom1tNrmRwsBLshVl6Fzha7mNpF6eFPQJOA4', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classesses`
--
ALTER TABLE `classesses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mapels_id_mapel_unique` (`id_mapel`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_nip_unique` (`nip`),
  ADD UNIQUE KEY `teachers_fotopath_unique` (`fotopath`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classesses`
--
ALTER TABLE `classesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
