-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 06:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bop`
--

CREATE TABLE `bop` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `item_bop` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bop`
--

INSERT INTO `bop` (`created_at`, `updated_at`, `tanggal`, `item_bop`, `nominal`, `total`) VALUES
('2023-11-27 19:10:46', '2023-11-27 19:10:46', '2023-11-17', 'mobil', 2000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laba_bulanan`
--

CREATE TABLE `laba_bulanan` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_harian_panen`
--

CREATE TABLE `laporan_harian_panen` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `produk` varchar(255) NOT NULL,
  `lokasi_panen` text NOT NULL,
  `pegawai_panen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_harian_panen`
--

INSERT INTO `laporan_harian_panen` (`created_at`, `updated_at`, `tanggal`, `produk`, `lokasi_panen`, `pegawai_panen`) VALUES
('2023-11-27 18:36:37', '2023-11-27 18:36:37', '2023-11-23', 'lele', 'rancajawat', 'kasman'),
('2023-11-28 23:37:54', '2023-11-28 23:37:54', '2023-12-04', 'p', 'lajer', 'kuli'),
('2023-11-28 23:39:35', '2023-11-28 23:39:35', '2023-11-30', 'betik', 'kerticala', 'kasman'),
('2023-11-29 20:23:50', '2023-11-29 20:24:06', '2023-12-30', 'mujaer', 'rancajawat', 'kuli');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_laba_rugi_harian`
--

CREATE TABLE `laporan_laba_rugi_harian` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nota` int(11) NOT NULL,
  `nominal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Nim` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kelas` varchar(255) NOT NULL,
  `Jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`created_at`, `updated_at`, `Nim`, `Nama`, `Kelas`, `Jurusan`) VALUES
('2023-11-20 19:11:12', NULL, 220809637, 'lele', 'Rancajawat', 'jeno');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2023_11_21_015247_mahasiswa', 3),
(12, '2014_10_12_000000_create_users_table', 4),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(14, '2019_08_19_000000_create_failed_jobs_table', 4),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(16, '2023_11_18_064343_create_laporan_harian_panen_table', 4),
(17, '2023_11_23_151823_nota_pembelian', 4),
(18, '2023_11_24_132316_nota_penjualan', 4),
(19, '2023_11_24_134751_b_o_p', 4),
(20, '2023_11_24_142552_laporan_laba_rugi_harian', 4),
(21, '2023_11_24_153410_laba_bulanan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nota_pembelian`
--

CREATE TABLE `nota_pembelian` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nama_petani` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `jumlah_ikan` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nota_pembelian`
--

INSERT INTO `nota_pembelian` (`created_at`, `updated_at`, `tanggal`, `nama_petani`, `lokasi`, `jumlah_ikan`, `harga`, `total`) VALUES
('2023-11-27 18:35:55', '2023-11-27 18:35:55', '2023-11-16', 'Kemal', 'Rancajawat', 5, '1000000', 5000000),
('2023-11-29 20:29:29', '2023-11-29 20:29:29', '2023-11-17', 'Kemal', 'Rancajawat', 5, '5900000', 50);

-- --------------------------------------------------------

--
-- Table structure for table `nota_penjualan`
--

CREATE TABLE `nota_penjualan` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pembeli` varchar(255) NOT NULL,
  `lokasi_penjualan` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nota_penjualan`
--

INSERT INTO `nota_penjualan` (`created_at`, `updated_at`, `tanggal`, `pembeli`, `lokasi_penjualan`, `jenis`, `jumlah`, `harga`, `total`) VALUES
('2023-11-27 18:32:23', '2023-11-27 18:33:00', '2023-12-08', 'jeno', 'Rancajawat', 'lele', 500, 2000000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
