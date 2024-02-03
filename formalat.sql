-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2024 at 09:33 AM
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer` text COLLATE utf8mb4_unicode_ci,
  `qrcode` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `jenis`, `brand`, `serial_number`, `nameplate`, `tahun_pembuatan`, `tahun_installasi`, `kapasitas`, `area`, `status`, `form1_status`, `form2_status`, `form3_status`, `user_id`, `foto`, `created_at`, `updated_at`, `customer`, `qrcode`) VALUES
(1, '1', 'Samsung', 'S123', 'SS123', '2001', '2001', '1000', 'Bogor', NULL, NULL, NULL, NULL, NULL, '1703510500_halal-200x200-1.png', '2023-12-25 06:21:40', '2023-12-25 06:21:40', NULL, NULL),
(2, '1', 'Samsung', '112211', 'ada', '2021', '2024', '1000', 'Bogor', NULL, NULL, NULL, NULL, NULL, '1706525492_download.jpg', '2024-01-29 03:51:32', '2024-01-29 03:51:32', 'DKR', NULL),
(3, '1', 'Samsung', '11221122', 'ada', '2024', '2026', '1000', 'Bogor', NULL, NULL, NULL, NULL, NULL, '1706686176_download.jpg', '2024-01-31 00:29:36', '2024-01-31 00:29:36', 'DKR', '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><rect x=\"0\" y=\"0\" width=\"100\" height=\"100\" fill=\"#ffffff\"/><g transform=\"scale(3.448)\"><g transform=\"translate(0,0)\"><path fill-rule=\"evenodd\" d=\"M10 0L10 1L9 1L9 2L8 2L8 3L9 3L9 5L10 5L10 7L11 7L11 8L12 8L12 9L11 9L11 10L10 10L10 9L9 9L9 6L8 6L8 8L4 8L4 9L3 9L3 8L0 8L0 10L2 10L2 11L1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 14L0 14L0 15L2 15L2 14L3 14L3 16L1 16L1 18L0 18L0 19L1 19L1 20L0 20L0 21L1 21L1 20L2 20L2 21L7 21L7 20L8 20L8 19L7 19L7 18L6 18L6 19L7 19L7 20L2 20L2 19L4 19L4 18L2 18L2 17L3 17L3 16L4 16L4 17L5 17L5 16L4 16L4 15L7 15L7 16L6 16L6 17L9 17L9 18L11 18L11 19L9 19L9 20L10 20L10 22L12 22L12 20L14 20L14 22L13 22L13 23L14 23L14 22L15 22L15 21L18 21L18 19L19 19L19 21L20 21L20 22L19 22L19 23L17 23L17 22L16 22L16 23L15 23L15 24L17 24L17 25L16 25L16 28L15 28L15 26L14 26L14 25L13 25L13 24L12 24L12 23L11 23L11 24L12 24L12 25L11 25L11 27L12 27L12 28L11 28L11 29L12 29L12 28L14 28L14 29L18 29L18 28L19 28L19 27L17 27L17 26L18 26L18 24L20 24L20 25L19 25L19 26L21 26L21 27L20 27L20 29L21 29L21 27L22 27L22 26L21 26L21 25L23 25L23 27L24 27L24 28L22 28L22 29L24 29L24 28L25 28L25 23L26 23L26 22L27 22L27 23L29 23L29 21L26 21L26 22L25 22L25 20L26 20L26 18L27 18L27 20L28 20L28 19L29 19L29 16L28 16L28 15L29 15L29 12L28 12L28 11L29 11L29 9L28 9L28 10L26 10L26 9L27 9L27 8L26 8L26 9L25 9L25 10L24 10L24 12L25 12L25 14L23 14L23 12L22 12L22 11L21 11L21 10L23 10L23 8L21 8L21 10L20 10L20 11L17 11L17 10L19 10L19 9L18 9L18 8L20 8L20 7L21 7L21 6L20 6L20 5L21 5L21 4L19 4L19 3L20 3L20 2L21 2L21 1L20 1L20 0L18 0L18 1L17 1L17 2L19 2L19 3L18 3L18 4L19 4L19 6L18 6L18 5L17 5L17 3L16 3L16 2L15 2L15 3L16 3L16 5L14 5L14 3L12 3L12 2L11 2L11 3L12 3L12 5L10 5L10 3L9 3L9 2L10 2L10 1L11 1L11 0ZM14 0L14 1L13 1L13 2L14 2L14 1L15 1L15 0ZM13 5L13 7L12 7L12 6L11 6L11 7L12 7L12 8L13 8L13 9L14 9L14 10L13 10L13 11L14 11L14 10L15 10L15 9L16 9L16 8L17 8L17 7L18 7L18 6L17 6L17 7L16 7L16 6L15 6L15 7L14 7L14 5ZM19 6L19 7L20 7L20 6ZM15 7L15 8L16 8L16 7ZM4 9L4 10L3 10L3 11L2 11L2 12L3 12L3 14L4 14L4 13L5 13L5 10L7 10L7 9ZM8 9L8 10L9 10L9 11L8 11L8 13L6 13L6 14L8 14L8 13L10 13L10 12L9 12L9 11L10 11L10 10L9 10L9 9ZM25 10L25 11L26 11L26 13L27 13L27 14L25 14L25 15L24 15L24 16L23 16L23 18L24 18L24 20L25 20L25 18L26 18L26 17L27 17L27 18L28 18L28 17L27 17L27 14L28 14L28 13L27 13L27 11L26 11L26 10ZM6 11L6 12L7 12L7 11ZM11 11L11 12L12 12L12 14L11 14L11 15L10 15L10 16L9 16L9 15L8 15L8 16L9 16L9 17L10 17L10 16L11 16L11 17L12 17L12 16L13 16L13 17L14 17L14 18L13 18L13 19L14 19L14 18L15 18L15 20L16 20L16 19L18 19L18 18L17 18L17 15L18 15L18 14L19 14L19 15L20 15L20 16L18 16L18 17L19 17L19 19L20 19L20 20L22 20L22 17L21 17L21 16L22 16L22 15L23 15L23 14L22 14L22 15L20 15L20 14L21 14L21 11L20 11L20 12L18 12L18 13L16 13L16 14L14 14L14 12L12 12L12 11ZM15 11L15 12L16 12L16 11ZM13 14L13 15L14 15L14 14ZM11 15L11 16L12 16L12 15ZM25 15L25 16L26 16L26 15ZM1 18L1 19L2 19L2 18ZM20 18L20 19L21 19L21 18ZM11 19L11 20L12 20L12 19ZM8 21L8 25L9 25L9 21ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM28 24L28 25L26 25L26 27L27 27L27 29L29 29L29 28L28 28L28 27L29 27L29 24ZM8 26L8 29L9 29L9 28L10 28L10 27L9 27L9 26ZM13 26L13 27L14 27L14 26ZM27 26L27 27L28 27L28 26ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z\" fill=\"#000000\"/></g></g></svg>\n'),
(4, '5', 'Samsung', 'S123', 'ada', '2022', '2024', '1000', 'Bogor', NULL, NULL, NULL, NULL, NULL, '1706693273_download.jpg', '2024-01-31 02:27:54', '2024-01-31 02:27:55', 'DKR', '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><rect x=\"0\" y=\"0\" width=\"100\" height=\"100\" fill=\"#ffffff\"/><g transform=\"scale(3.448)\"><g transform=\"translate(0,0)\"><path fill-rule=\"evenodd\" d=\"M10 0L10 1L9 1L9 2L8 2L8 3L9 3L9 5L10 5L10 7L11 7L11 8L12 8L12 9L11 9L11 10L10 10L10 9L9 9L9 6L8 6L8 8L4 8L4 9L3 9L3 8L0 8L0 11L1 11L1 12L2 12L2 13L3 13L3 12L5 12L5 13L7 13L7 14L4 14L4 15L2 15L2 14L1 14L1 15L2 15L2 16L0 16L0 17L1 17L1 18L0 18L0 19L1 19L1 20L0 20L0 21L1 21L1 20L3 20L3 21L5 21L5 20L6 20L6 21L8 21L8 25L9 25L9 26L8 26L8 29L9 29L9 26L10 26L10 29L12 29L12 28L14 28L14 29L18 29L18 28L19 28L19 27L17 27L17 26L18 26L18 24L20 24L20 25L19 25L19 26L21 26L21 27L20 27L20 29L21 29L21 27L22 27L22 26L21 26L21 25L23 25L23 27L24 27L24 28L22 28L22 29L24 29L24 28L25 28L25 23L26 23L26 22L27 22L27 23L29 23L29 21L26 21L26 22L25 22L25 20L26 20L26 18L27 18L27 20L28 20L28 19L29 19L29 16L28 16L28 15L29 15L29 12L28 12L28 11L29 11L29 9L28 9L28 10L26 10L26 9L27 9L27 8L26 8L26 9L25 9L25 10L24 10L24 12L25 12L25 14L23 14L23 12L22 12L22 11L21 11L21 10L23 10L23 8L21 8L21 10L20 10L20 11L17 11L17 10L19 10L19 9L18 9L18 8L20 8L20 7L21 7L21 6L20 6L20 5L21 5L21 4L19 4L19 3L20 3L20 2L21 2L21 1L20 1L20 0L18 0L18 1L17 1L17 2L19 2L19 3L18 3L18 4L19 4L19 6L18 6L18 5L17 5L17 3L16 3L16 2L15 2L15 3L16 3L16 5L14 5L14 3L12 3L12 2L11 2L11 3L12 3L12 5L10 5L10 3L9 3L9 2L10 2L10 1L11 1L11 0ZM14 0L14 1L13 1L13 2L14 2L14 1L15 1L15 0ZM13 5L13 7L12 7L12 6L11 6L11 7L12 7L12 8L13 8L13 9L14 9L14 10L13 10L13 11L14 11L14 10L15 10L15 9L16 9L16 8L17 8L17 7L18 7L18 6L17 6L17 7L16 7L16 6L15 6L15 7L14 7L14 5ZM19 6L19 7L20 7L20 6ZM15 7L15 8L16 8L16 7ZM1 9L1 10L2 10L2 11L4 11L4 10L3 10L3 9ZM5 9L5 10L7 10L7 9ZM8 9L8 11L10 11L10 10L9 10L9 9ZM25 10L25 11L26 11L26 13L27 13L27 14L25 14L25 15L24 15L24 16L23 16L23 18L24 18L24 20L25 20L25 18L26 18L26 17L27 17L27 18L28 18L28 17L27 17L27 14L28 14L28 13L27 13L27 11L26 11L26 10ZM5 11L5 12L7 12L7 11ZM11 11L11 12L12 12L12 14L11 14L11 15L10 15L10 14L9 14L9 15L8 15L8 16L9 16L9 17L6 17L6 16L7 16L7 15L4 15L4 17L6 17L6 18L7 18L7 19L6 19L6 20L8 20L8 21L9 21L9 20L12 20L12 22L11 22L11 21L10 21L10 23L12 23L12 24L10 24L10 25L12 25L12 24L13 24L13 25L14 25L14 26L13 26L13 27L14 27L14 26L15 26L15 28L16 28L16 25L17 25L17 24L15 24L15 23L16 23L16 22L17 22L17 23L19 23L19 22L20 22L20 21L19 21L19 19L20 19L20 20L22 20L22 17L21 17L21 16L22 16L22 15L23 15L23 14L22 14L22 15L20 15L20 14L21 14L21 11L20 11L20 12L18 12L18 13L16 13L16 14L14 14L14 12L12 12L12 11ZM15 11L15 12L16 12L16 11ZM9 12L9 13L10 13L10 12ZM13 14L13 15L14 15L14 14ZM16 14L16 15L15 15L15 16L17 16L17 18L18 18L18 19L16 19L16 20L15 20L15 18L14 18L14 17L13 17L13 16L12 16L12 15L11 15L11 16L12 16L12 17L11 17L11 19L12 19L12 20L14 20L14 22L13 22L13 23L14 23L14 22L15 22L15 21L18 21L18 19L19 19L19 17L18 17L18 16L20 16L20 15L19 15L19 14L18 14L18 15L17 15L17 14ZM25 15L25 16L26 16L26 15ZM2 16L2 18L1 18L1 19L5 19L5 18L3 18L3 16ZM9 17L9 18L8 18L8 20L9 20L9 18L10 18L10 17ZM13 18L13 19L14 19L14 18ZM20 18L20 19L21 19L21 18ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM28 24L28 25L26 25L26 27L27 27L27 29L29 29L29 28L28 28L28 27L29 27L29 24ZM27 26L27 27L28 27L28 26ZM11 27L11 28L12 28L12 27ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z\" fill=\"#000000\"/></g></g></svg>\n');

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
(26, 'DKR', 'Test', 'Test', 'Test', '2024-01-29', '1', '1', '1', '1', '1', '1', '1', NULL, NULL, 'Test', 'Test', 'Test', 'ada', '2024', '2024-01-29', 'Test', 'Test', 'Test', 'Test', NULL, NULL, '2024-01-29 04:07:56', '2024-01-29 04:07:56', '2'),
(27, 'DKR', 'Test', 'Test', 'Test', '2024-01-31', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, 'Test', 'Test', 'Test', 'ada', 'Test', '2024-01-23', 'Test', 'Test', 'Test', 'Test', NULL, NULL, '2024-01-31 01:04:58', '2024-01-31 01:04:58', '3'),
(28, 'DKR', 'DKR', 'DKR', 'DKR', '2024-01-31', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, 'DKR', 'DKR', 'DKR', 'ada', 'DKR', '2024-01-31', 'DKR', 'DKR', 'DKR', 'DKR', NULL, NULL, '2024-01-31 02:27:01', '2024-01-31 02:27:01', '3');

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

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `type`, `id_act`, `id_equipment`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'Survei', '26', '2', '1', '2024-01-29 04:07:56', '2024-01-29 04:07:56'),
(3, 'Survei', '27', '3', '1', '2024-01-31 01:04:58', '2024-01-31 01:04:58'),
(4, 'Survei', '28', '3', '1', '2024-01-31 02:27:01', '2024-01-31 02:27:01');

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
(7, 'AAA', '123', '3', '123', '2023-12-01 01:04:40', '2023-12-01 01:04:40', 1, ''),
(8, 'Test', 'Test', '1', 'Test', '2024-01-29 04:05:28', '2024-01-29 04:05:28', 24, 'FormBeritaAcara'),
(9, 'Test', 'Test', '1', 'Test', '2024-01-29 04:05:55', '2024-01-29 04:05:55', 25, 'FormBeritaAcara'),
(10, 'Test', 'Test', '1', 'Test', '2024-01-29 04:07:56', '2024-01-29 04:07:56', 26, 'FormBeritaAcara'),
(11, 'Test', 'Test', '1', 'Test', '2024-01-31 01:04:58', '2024-01-31 01:04:58', 27, 'FormBeritaAcara'),
(12, 'DKR', 'DKR', '1', 'DKR', '2024-01-31 02:27:01', '2024-01-31 02:27:01', 28, 'FormBeritaAcara');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formberitaacara`
--
ALTER TABLE `formberitaacara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kapasitass`
--
ALTER TABLE `kapasitass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `listkebutuhanberitaacara`
--
ALTER TABLE `listkebutuhanberitaacara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
