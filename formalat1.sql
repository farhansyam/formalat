-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2024 at 06:50 AM
-- Server version: 5.7.33
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formalat`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `site`, `created_at`, `updated_at`) VALUES
(1, 'Bogor', 'Ciomas', '2023-12-25 03:44:56', '2023-12-25 03:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'DKR', '2023-12-24 02:59:23', '2023-12-24 03:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameplate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_installasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `form1_status` text COLLATE utf8mb4_unicode_ci,
  `form2_status` text COLLATE utf8mb4_unicode_ci,
  `form3_status` text COLLATE utf8mb4_unicode_ci,
  `user_id` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `jenis`, `brand`, `serial_number`, `nameplate`, `tahun_pembuatan`, `tahun_installasi`, `kapasitas`, `area`, `status`, `form1_status`, `form2_status`, `form3_status`, `user_id`, `foto`, `created_at`, `updated_at`) VALUES
(1, '1', 'Samsung', 'S123', 'SS123', '2001', '2001', '1000', 'Bogor', NULL, NULL, NULL, NULL, NULL, '1703510500_halal-200x200-1.png', '2023-12-25 06:21:40', '2023-12-25 06:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formberitaacara`
--

CREATE TABLE `formberitaacara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kontak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engineer_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_survey` date NOT NULL,
  `c1` text COLLATE utf8mb4_unicode_ci,
  `c2` text COLLATE utf8mb4_unicode_ci,
  `c3` text COLLATE utf8mb4_unicode_ci,
  `c4` text COLLATE utf8mb4_unicode_ci,
  `c5` text COLLATE utf8mb4_unicode_ci,
  `c6` text COLLATE utf8mb4_unicode_ci,
  `c7` text COLLATE utf8mb4_unicode_ci,
  `c8` text COLLATE utf8mb4_unicode_ci,
  `jenis_survey` text COLLATE utf8mb4_unicode_ci,
  `jenis_equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_plate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_install` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `analisa_awal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_teknisi_lapangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_kantor` text COLLATE utf8mb4_unicode_ci,
  `approval_customer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_equipment` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formberitaacara`
--

INSERT INTO `formberitaacara` (`id`, `customer`, `no_kontak`, `alamat`, `engineer_list`, `tanggal_survey`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `jenis_survey`, `jenis_equipment`, `brand`, `serial`, `name_plate`, `tahun_pembuatan`, `tahun_install`, `deskripsi`, `analisa_awal`, `tindakan`, `rekomendasi_teknisi_lapangan`, `approval_kantor`, `approval_customer`, `created_at`, `updated_at`, `id_equipment`) VALUES
(23, 'Test Customer', '081237', 'Ciomas', 'Farhan', '2023-11-08', '1', '1', '1', '1', NULL, NULL, NULL, NULL, 'new', 'TA', 'TA11', '123123', 'ada', '2018', '2023-11-08', 'Test 1', 'Test 2', 'Test 3', 'Test 4', NULL, NULL, '2023-11-08 01:07:02', '2023-11-08 01:07:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` int(11) NOT NULL,
  `id_sumber` text NOT NULL,
  `type` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_act` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kapasitass`
--

CREATE TABLE `kapasitass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kapasitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapasitass`
--

INSERT INTO `kapasitass` (`id`, `kapasitas`, `satuan`, `created_at`, `updated_at`) VALUES
(1, '1000', 'pkk', '2023-12-24 03:10:48', '2023-12-24 03:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `listkebutuhanberitaacara`
--

CREATE TABLE `listkebutuhanberitaacara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsilist` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelpart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_beritaacara` int(11) NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listkebutuhanberitaacara`
--

INSERT INTO `listkebutuhanberitaacara` (`id`, `deskripsilist`, `modelpart`, `qty`, `keterangan`, `created_at`, `updated_at`, `id_beritaacara`, `type`) VALUES
(4, 'test', '123', '1', 'asd', '2023-11-08 00:59:04', '2023-11-08 00:59:04', 22, 'FormBeritaAcara'),
(5, 'test', '123', '2', 'asd', '2023-11-08 01:07:02', '2023-11-08 01:07:02', 23, 'FormBeritaAcara'),
(6, 'Obeng', '123', '2', '123', '2023-12-01 01:04:40', '2023-12-01 01:04:40', 1, ''),
(7, 'AAA', '123', '3', '123', '2023-12-01 01:04:40', '2023-12-01 01:04:40', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_08_060729_create_formberitaacara_table', 1),
(6, '2023_11_08_060926_create_listkebutuhanberitaacara_table', 2),
(7, '2023_12_21_022306_create_customers_table', 3),
(8, '2023_12_21_022727_create_kapasitass_table', 4),
(9, '2023_12_21_022852_create_sites_table', 5),
(10, '2023_12_21_022924_create_area_table', 5),
(11, '2023_12_21_023038_create_equipments_table', 6),
(12, '2023_12_21_041522_create_notifs_table', 7),
(13, '2024_01_10_064015_create_history_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE `notifs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` text COLLATE utf8mb4_unicode_ci,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_report`
--

CREATE TABLE `service_report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kontak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `engineer_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_survey` date NOT NULL,
  `c1` text COLLATE utf8mb4_unicode_ci,
  `c2` text COLLATE utf8mb4_unicode_ci,
  `c3` text COLLATE utf8mb4_unicode_ci,
  `c4` text COLLATE utf8mb4_unicode_ci,
  `c5` text COLLATE utf8mb4_unicode_ci,
  `c6` text COLLATE utf8mb4_unicode_ci,
  `c7` text COLLATE utf8mb4_unicode_ci,
  `c8` text COLLATE utf8mb4_unicode_ci,
  `jenis_equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_plate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembuatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_install` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindakan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_teknisi_lapangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_kantor` text COLLATE utf8mb4_unicode_ci,
  `approval_customer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `defect_level` text COLLATE utf8mb4_unicode_ci,
  `defect_type` text COLLATE utf8mb4_unicode_ci,
  `approval_engineer` text COLLATE utf8mb4_unicode_ci,
  `tindak_lanjut` text COLLATE utf8mb4_unicode_ci,
  `other_defect_type` text COLLATE utf8mb4_unicode_ci,
  `other_jenis_survey` text COLLATE utf8mb4_unicode_ci,
  `jenis_survey` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_report`
--

INSERT INTO `service_report` (`id`, `customer`, `no_kontak`, `alamat`, `engineer_list`, `tanggal_survey`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `jenis_equipment`, `brand`, `serial`, `name_plate`, `tahun_pembuatan`, `tahun_install`, `deskripsi`, `tindakan`, `rekomendasi_teknisi_lapangan`, `approval_kantor`, `approval_customer`, `created_at`, `updated_at`, `defect_level`, `defect_type`, `approval_engineer`, `tindak_lanjut`, `other_defect_type`, `other_jenis_survey`, `jenis_survey`) VALUES
(1, 'Farhan', '12332123', 'Ciomas', 'GGGG', '2023-12-15', '1', '1', '1', '1', '1', '1', '1', '1', 'AC', 'Fujiac', '123123', 'ada', '2022', '2023-12-29', 'DES', 'ACT', 'Rec', NULL, NULL, '2023-12-01 01:04:40', '2023-12-01 01:04:40', 'High', 'Minor', NULL, NULL, NULL, NULL, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formberitaacara`
--
ALTER TABLE `formberitaacara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapasitass`
--
ALTER TABLE `kapasitass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listkebutuhanberitaacara`
--
ALTER TABLE `listkebutuhanberitaacara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifs`
--
ALTER TABLE `notifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `service_report`
--
ALTER TABLE `service_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formberitaacara`
--
ALTER TABLE `formberitaacara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapasitass`
--
ALTER TABLE `kapasitass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `listkebutuhanberitaacara`
--
ALTER TABLE `listkebutuhanberitaacara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifs`
--
ALTER TABLE `notifs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_report`
--
ALTER TABLE `service_report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
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
