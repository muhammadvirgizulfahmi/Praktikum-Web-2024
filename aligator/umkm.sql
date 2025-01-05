-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 17.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin2@gmail.com|127.0.0.1', 'i:1;', 1720753380),
('admin2@gmail.com|127.0.0.1:timer', 'i:1720753380;', 1720753380),
('ean@gmail.com|127.0.0.1', 'i:1;', 1720413418),
('ean@gmail.com|127.0.0.1:timer', 'i:1720413418;', 1720413418),
('member@gmail.com|127.0.0.1', 'i:1;', 1720795647),
('member@gmail.com|127.0.0.1:timer', 'i:1720795647;', 1720795647),
('virgi@gmail.com|127.0.0.1', 'i:2;', 1720764251),
('virgi@gmail.com|127.0.0.1:timer', 'i:1720764251;', 1720764251);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabkotas`
--

CREATE TABLE `kabkotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kabkotas`
--

INSERT INTO `kabkotas` (`id`, `nama`, `latitude`, `longtitude`, `provinsi_id`, `created_at`, `updated_at`) VALUES
(1, 'Kabupaten Bogor', -6.595038, 106.816635, 1, NULL, NULL),
(2, 'Depok', -6.402905, 106.778419, 1, '2024-07-07 20:59:03', '2024-07-08 02:39:14'),
(5, 'Denpasar', -8.65, 115.216667, 4, '2024-07-08 06:04:37', '2024-07-08 06:04:37'),
(6, 'JayaPura', -2.541279, 140.71373, 6, '2024-07-08 06:05:35', '2024-07-08 06:05:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_umkms`
--

CREATE TABLE `kategori_umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_umkms`
--

INSERT INTO `kategori_umkms` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pertanian', NULL, '2024-07-08 07:50:22'),
(2, 'Industri', NULL, '2024-07-11 20:03:38'),
(3, 'Jasa', NULL, NULL),
(4, 'Kreatif', '2024-07-08 07:50:32', '2024-07-11 20:03:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_07_160539_create_provinsis_table', 1),
(5, '2024_07_07_160544_create_kategori_umkms_table', 1),
(6, '2024_07_07_160549_create_pembinas_table', 1),
(7, '2024_07_07_160710_create_kabkotas_table', 1),
(8, '2024_07_07_160759_create_umkms_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembinas`
--

CREATE TABLE `pembinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembinas`
--

INSERT INTO `pembinas` (`id`, `nama`, `gender`, `tgl_lahir`, `tmp_lahir`, `keahlian`, `created_at`, `updated_at`) VALUES
(1, 'Asep Suherman', 'L', '2004-07-01', 'Jakarta', 'Manajemen Pertanian', NULL, '2024-07-11 20:39:16'),
(2, 'Dudung Sududung', 'L', '2001-07-20', 'Depok', 'Manajemen Industri', NULL, '2024-07-11 20:39:37'),
(3, 'Siti Nurlela', 'P', '2005-07-07', 'Bogor', 'Management Jasa', NULL, '2024-07-08 07:40:27'),
(4, 'Virgi', 'L', '2024-07-08', 'Jakarta', 'Manajemen Kreatif', '2024-07-08 07:29:41', '2024-07-11 20:39:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ibukota` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `nama`, `ibukota`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', 'Bandung', -6.943097, 107.633545, NULL, NULL),
(3, 'Jawa Tengah', 'Semarang', -6.995016, 110.418427, '2024-07-07 11:00:46', '2024-07-07 11:00:46'),
(4, 'Bali', 'Denpasar', -8.330497699781604, 115.09064009999997, '2024-07-08 00:33:04', '2024-07-08 00:33:04'),
(5, 'Jawa Timur', 'Surabaya', -7.536064, 110.418427, '2024-07-08 00:34:46', '2024-07-08 00:34:46'),
(6, 'Papua', 'Jayapura', -4.269928, 138.0803529, '2024-07-08 00:36:02', '2024-07-08 00:36:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('D7kGAVIDQbf1ivkZGVaBvmvvuAV3DSEpIxiwMe3p', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYlM5SEt5ZW5LaGdmVThFdjNoRExuUmZCeTh1eXJicHNGOThpUk1DYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvdW1rbS9jcmVhdGUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1720797341);

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkms`
--

CREATE TABLE `umkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `modal` int(255) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `kabkota_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_umkm_id` bigint(20) UNSIGNED NOT NULL,
  `pembina_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `umkms`
--

INSERT INTO `umkms` (`id`, `nama`, `modal`, `pemilik`, `alamat`, `website`, `email`, `rating`, `kabkota_id`, `kategori_umkm_id`, `pembina_id`, `created_at`, `updated_at`) VALUES
(1, 'Ikan Siper', 1000000, 'Hermawan', 'Duren Baru', 'www.ikan.com', 'budi@gmail.com', 8, 2, 1, 1, NULL, NULL),
(2, 'Seblak Sehak', 2000000, 'iis mahendra', 'Bojonggede', 'www.seblak.com', 'iis@gmail.com', 9, 1, 2, 2, NULL, NULL),
(3, 'Sumanto Barbershop', 6000000, 'Sumanto ', 'Babakanmadang', 'www.sumanto.com', 'sumanto@gmail.com', 9, 1, 3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'umkm',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'raihan@gmail.com', NULL, '$2y$12$bBfbUI4T6WaEBJ1B42TS/.x1Nf6UB0tOm18ly/ycJXKHXPHxhfP4G', 'administrator', NULL, '2024-07-07 09:27:27', '2024-07-07 09:27:27'),
(2, 'tester', 'ean123@gmail.com', NULL, '$2y$12$aomdPKR7hsR9d6qoYLYVOOLkcz1bMByHANEubaU6A81hORl8evzbm', 'umkm', NULL, '2024-07-07 21:33:16', '2024-07-07 21:33:16'),
(3, 'admin2', 'admin@gmail.com', NULL, '$2y$12$xPEDvG4iJV10rxEU.xZ1aelA8PtJTt.QWIMsGIvcyRwk5a/zg0iZ2', 'administrator', NULL, '2024-07-08 07:02:16', '2024-07-08 07:02:16'),
(4, 'member2', 'umkm@gmail.com', NULL, '$2y$12$3G0ocYHsdmVh4HPghrWTTOMklUHccwnTrca2Ergp4g.DngFyJ4xLi', 'umkm', NULL, '2024-07-10 00:05:53', '2024-07-10 00:05:53'),
(5, 'MemberUMKM', 'member1@gmail.com', NULL, '$2y$12$j8KPZeKwp7DbucEnYFhOZerJ3VJ3CWLr/90z.1ABM/Xh75kZRtv76', 'umkm', NULL, '2024-07-12 07:50:21', '2024-07-12 07:50:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabkotas_provinsi_id_foreign` (`provinsi_id`);

--
-- Indeks untuk tabel `kategori_umkms`
--
ALTER TABLE `kategori_umkms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembinas`
--
ALTER TABLE `pembinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `umkms`
--
ALTER TABLE `umkms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `umkms_kabkota_id_foreign` (`kabkota_id`),
  ADD KEY `umkms_kategori_umkm_id_foreign` (`kategori_umkm_id`),
  ADD KEY `umkms_pembina_id_foreign` (`pembina_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_umkms`
--
ALTER TABLE `kategori_umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembinas`
--
ALTER TABLE `pembinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `umkms`
--
ALTER TABLE `umkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD CONSTRAINT `kabkotas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`);

--
-- Ketidakleluasaan untuk tabel `umkms`
--
ALTER TABLE `umkms`
  ADD CONSTRAINT `umkms_kabkota_id_foreign` FOREIGN KEY (`kabkota_id`) REFERENCES `kabkotas` (`id`),
  ADD CONSTRAINT `umkms_kategori_umkm_id_foreign` FOREIGN KEY (`kategori_umkm_id`) REFERENCES `kategori_umkms` (`id`),
  ADD CONSTRAINT `umkms_pembina_id_foreign` FOREIGN KEY (`pembina_id`) REFERENCES `pembinas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
