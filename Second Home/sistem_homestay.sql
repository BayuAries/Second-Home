-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 04:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pembooking` int(12) DEFAULT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama_homestay`, `id_pembooking`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(9, 'Tri house', 15, '2019-12-11', '2019-12-13', '2019-12-10 22:33:10', '2019-12-10 22:33:10'),
(10, 'Damai room', 15, '2019-12-25', '2019-12-27', '2019-12-10 22:39:26', '2019-12-10 22:39:26'),
(11, 'Road Room', 21, '2019-12-24', '2019-12-25', '2019-12-10 23:39:50', '2019-12-10 23:39:50'),
(17, 'Tri house', 21, '2019-12-18', '2019-12-20', '2019-12-13 09:46:35', '2019-12-13 09:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `nama_homestay`, `path`, `size`, `created_at`, `updated_at`) VALUES
(12, 'asah room', 'image/568020_14082019160021397557.jpg', '70940', '2019-12-08 03:12:06', '2019-12-08 03:12:06'),
(13, 'Jarak rooms', 'image/568020_15071022190032082077.jpg', '166786', '2019-12-08 03:12:50', '2019-12-08 03:12:50'),
(14, 'Green view', 'image/568020_15071022190032082078.jpg', '97802', '2019-12-08 03:13:42', '2019-12-08 03:13:42'),
(15, 'Damai room', 'image/159175536.jpg', '120703', '2019-12-08 03:15:08', '2019-12-08 03:15:08'),
(16, 'Root door', 'image/1551370191-876.jpg', '41623', '2019-12-08 03:16:17', '2019-12-08 03:16:17'),
(17, 'Great House', 'image/baaru.jfif', '12581', '2019-12-08 03:18:15', '2019-12-08 03:18:15'),
(18, 'Tri house', 'image/new.jfif', '15369', '2019-12-08 03:19:52', '2019-12-08 03:19:52'),
(19, 'Road Room', 'image/road.jpg', '139079', '2019-12-10 00:29:17', '2019-12-10 00:29:17'),
(20, 'homestay baru', 'image/homestaybaru.jpg', '56417', '2019-12-11 00:48:58', '2019-12-11 00:48:58'),
(22, 'new', 'image/homestaybaru.jpg', '56417', '2019-12-13 10:25:56', '2019-12-13 10:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `id` int(20) UNSIGNED NOT NULL,
  `id_pemilik` int(12) DEFAULT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kamar` int(12) DEFAULT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`id`, `id_pemilik`, `nama_pemilik`, `nama_homestay`, `no_hp`, `alamat`, `email`, `harga`, `kamar`, `kabupaten`, `keterangan`, `created_at`, `updated_at`) VALUES
(20, 3, 'sasa', 'asah room', '123456789012', 'jalan kaliurang', 'asah@gmail.com', 'Rp.150.000', 4, 'Kota Yogyakarta', 'Asah room homestay bernuansa kekinian dengan bed tingkat', '2019-12-08 03:12:06', '2019-12-08 03:12:06'),
(21, 3, 'sasa', 'Jarak rooms', '123456789012', 'jalan ringroad', 'jarak@gmail.com', 'Rp.300.000', 3, 'Bantul', 'Jarak Rooms menyediakan homestaay dengan nuansa inda pemandangan', '2019-12-08 03:12:50', '2019-12-08 03:12:50'),
(22, 3, 'sasa', 'Green view', '123456789012', 'jalan pathuk', 'Green@gmail.com', 'Rp.230.000', 4, 'Kota Yogyakarta', 'Homestay mini dengan ranjang tingkat cocok bagi anak muda', '2019-12-08 03:13:42', '2019-12-10 00:26:40'),
(23, 20, 'bayua', 'Damai room', '123456789012', 'Jalan damai', 'damai@gmail.com', 'Rp.330.000', 3, 'Kulon Progo', 'Damai room Homestay tingkat 2 dengan pemandangan pedesaan yang indah', '2019-12-08 03:15:08', '2019-12-08 03:15:08'),
(24, 20, 'bayua', 'Root door', '082154073546', 'jalan palagan', 'root@gmail.com', 'Rp.360.000', 3, 'Gunungkidul', 'Root door homestay asik di sekitar jogja', '2019-12-08 03:16:17', '2019-12-15 08:29:28'),
(25, 20, 'bayua', 'Great House', '123456789012', 'jalan timur', 'great@gmail.com', 'Rp.150.000', 2, 'Bantul', 'Great House Homestay bergaya klasik dengan sentukan artistik dan bagus', '2019-12-08 03:18:15', '2019-12-13 10:15:12'),
(26, 20, 'bayua', 'Tri house', '123456789012', 'Jalan Kalimantan', 'tri@gmail.com', 'Rp.400.000', 3, 'Sleman', 'Tri House Homestay bergaya hoobit dengan bentuk yang menarik serta asik', '2019-12-08 03:19:52', '2019-12-13 10:19:21'),
(30, 3, 'sasa', 'Road Room', '082152849211', 'Jalan Damai', 'Road@gmail.com', 'Rp.250.000', 2, 'Bantul', 'Road Room Homestay bergaya kekinian yang indah', '2019-12-10 00:29:17', '2019-12-10 23:44:51'),
(33, 20, 'bayua', 'new', '081234754828', 'jalan mulia', 'New@gmail.com', 'Rp.350.000', 3, 'Sleman', 'hunian nyaman', '2019-12-13 10:26:18', '2019-12-13 10:26:18');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_11_26_141332_create_homestay_table', 2),
(21, '2019_12_08_061914_create_foto_table', 3),
(22, '2019_12_08_061948_create_booking_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `gender`, `no_hp`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'sasa', 'owner', 'Perempuan', '082154876483', 'sasa@gmail.com', NULL, '$2y$10$NiHBxZhEjYUGX9RtKsQD9.Pqb9DCi1E4wzr1ajnD53tBWqYlIuF5y', 'dX3Pqd0aNbWDZsBqe7C9NEAekpqHunUx0zX4R9SwSoS7tESDZwgiTG97Bn8M', '2019-11-25 18:31:42', '2019-11-25 18:31:42'),
(4, 'bayu aries', 'admin', 'Laki-Laki', '081275839200', 'bayu@gmail.com', NULL, '$2y$10$NPjBc9bFXBzyvHLa406f9uxUKqeO/8j2IqbaQHNAQ17y9lqP.NPde', NULL, '2019-11-25 18:32:07', '2019-11-25 18:32:07'),
(5, 'aman', 'admin', 'Laki-Laki', '081213172813', 'aman@gmail.co', NULL, '$2y$10$kkk6gChq0ZiMvJD8oS08OeKqg5e/RCr87O7lPqGSjZz/LjhCBUfy.', NULL, '2019-11-26 22:49:38', '2019-11-26 22:49:38'),
(6, 'tb daffa', 'admin', 'Laki-Laki', '081346859266', 'daffa@gmail.com', NULL, '$2y$10$Bd4Loc/0lhyCsC222SMPaOBsfO6DUzCs3bkn33slGpBsULWqG3pWO', NULL, '2019-11-26 22:55:27', '2019-11-26 22:55:27'),
(10, 'aman syuhada', 'owner', 'Laki-Laki', '085674839253', 'aman1@gmail.com', NULL, '$2y$10$s0AAxoBlVGhaLURdGqX2ee6jnBRaHZLCVtnmN8tYMTFcsRg8qznVi', NULL, '2019-11-27 00:07:58', '2019-11-27 00:07:58'),
(15, 'bayu', 'user', 'Laki-Laki', '082154079595', 'bayu1@gmail.com', NULL, '$2y$10$edMJoNT53VQGW0sWdFDPHeYBGaSzrARAOebN/F0hlW5YBdUDKOG9e', NULL, '2019-12-09 09:22:25', '2019-12-09 09:22:25'),
(20, 'bayua', 'owner', 'Laki-Laki', '081264728445', 'bayu2@gmail.com', NULL, '$2y$10$J5KfzbE1p/sk5oaKD3pKdenr5C5fNF3.lPj9ANiSbSlL6wBkhCJvy', NULL, '2019-12-08 03:14:10', '2019-12-08 03:14:10'),
(21, 'Daffa', 'user', 'Laki-Laki', '081264892365', 'tbdaffa@gmail.com', NULL, '$2y$10$.eNrmPagcfGvsrD5b8Ih5.RimBA.0DbEzxMa00B971.bHOWg81z16', NULL, '2019-12-10 20:44:30', '2019-12-10 20:44:30'),
(22, 'Aman', 'user', 'Laki-Laki', '081265784365', 'amans@gmail.com', NULL, '$2y$10$UaOoLS4nlikNiTUYWVZLpuyi/aRyEqPkZUimwJJn0wlESQUJ/cDsq', NULL, '2019-12-10 23:43:06', '2019-12-10 23:43:06'),
(23, 'sayang', 'user', 'Perempuan', '088988988', 'kucing@123.con', NULL, '$2y$10$VRIYDcrKPCmIwA.yeJxoWOnfS78UZsEHtzrZrqb3RyM69uuJ7zIX.', NULL, '2019-12-11 00:27:26', '2019-12-11 00:27:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
