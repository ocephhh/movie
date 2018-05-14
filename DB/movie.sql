-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2018 pada 05.04
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
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` int(11) NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `telepon`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'nyam nyam', 'nyam@bal.com', 21584658, 'dwafawfwa awfaafa', '2018-04-26 07:50:15', '2018-04-26 07:50:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Horror', '2018-04-26 07:02:58', '2018-04-26 07:07:44'),
(2, 'Action', '2018-04-26 19:23:22', '2018-04-26 19:23:22'),
(3, 'Comedy', '2018-04-26 19:23:34', '2018-04-26 19:23:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(2, 'Dewasa 17+', '2018-04-26 08:03:08', '2018-04-26 08:03:08'),
(3, 'Bocah', '2018-04-26 19:23:05', '2018-04-26 19:23:05'),
(4, 'Remaja', '2018-04-26 19:23:13', '2018-04-26 19:23:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_04_26_061635_create_movie_table', 2),
(5, '2018_04_26_132823_create_kategori_table', 3),
(6, '2018_04_26_135338_create_genre_table', 4),
(7, '2018_04_26_141245_create_series_table', 5),
(8, '2018_04_26_142940_create_contact_table', 6),
(9, '2018_04_27_023547_create_relasi_genre_movie_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinopsis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rilis` date NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `movie`
--

INSERT INTO `movie` (`id`, `judul`, `film`, `gambar`, `sinopsis`, `rilis`, `genre`, `kategori`, `rating`, `created_at`, `updated_at`) VALUES
(8, 'jajajajajh', 'jajajajah', 'public/gambars/xYRW0AFw4y942o5nesjzADFNJScWZdUhQpllK6mk.png', 'efergr grgdrgdrgd gdrgdgdrgdr', '2018-04-27', NULL, '2', 6, '2018-04-26 20:24:00', '2018-04-26 20:24:00'),
(9, 'cemilan cabeloh', 'https://www.youtube.com/watch?v=Ph54wQG8ynk&start_radio=1&list=RDGMEMQ1dJ7wXfLlqCjwV0xfSNbAVMPh54wQG8ynk', 'public/gambars/6UK9jTnhnfIJDxn9AjTxtYxkybUaFPJRyt6cWeSV.jpeg', 'Di GOOOYEEENGGGG Di GOOOYAAAANNGG VEEEDDDDAAAAASSS', '2018-04-27', '1', '2', 5, '2018-04-27 01:19:37', '2018-05-07 00:14:10'),
(10, 'tester123', 'asdsfrrgdr', 'public/gambars/0xEiS1JZapFnqAGmDuNBePGZBNktrJMzYTw04djM.png', 're re re re re re re re re re', '2018-05-07', NULL, '2', 5, '2018-05-07 00:22:30', '2018-05-07 00:38:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_genre_movie`
--

CREATE TABLE `relasi_genre_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` int(11) NOT NULL,
  `film` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `relasi_genre_movie`
--

INSERT INTO `relasi_genre_movie` (`id`, `genre`, `film`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2018-04-26 20:24:00', '2018-04-26 20:24:00'),
(2, 3, 8, '2018-04-26 20:24:00', '2018-04-26 20:24:00'),
(3, 1, 9, '2018-04-27 01:19:37', '2018-04-27 01:19:37'),
(4, 2, 9, '2018-04-27 01:19:37', '2018-04-27 01:19:37'),
(5, 3, 9, '2018-04-27 01:19:37', '2018-04-27 01:19:37'),
(6, 1, 10, '2018-05-07 00:22:30', '2018-05-07 00:22:30'),
(7, 2, 10, '2018-05-07 00:22:31', '2018-05-07 00:22:31'),
(8, 3, 10, '2018-05-07 00:22:31', '2018-05-07 00:22:31'),
(9, 1, 10, '2018-05-07 00:38:33', '2018-05-07 00:38:33'),
(10, 3, 10, '2018-05-07 00:38:33', '2018-05-07 00:38:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinopsis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rilis` date NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `series`
--

INSERT INTO `series` (`id`, `judul`, `film`, `gambar`, `sinopsis`, `rilis`, `genre`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'park jing ho', 'dawdawdawdawdadwa', 'public/gambars/hJ8ipkNIMEhvbfa3QiNadYBMfWNwqzq8WjO2Tl8q.png', 'sfesgfs sfsgsdrgdr sfsefsfse', '2018-04-26', 'horror', 9, '2018-04-26 07:27:22', '2018-04-26 07:28:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ceceph', 'yosep@gmail.com', '$2y$10$uc6HxsUK38FeJI1jElSSBuMKdRD3woZJvzMtmXO7pZ/xQ/qDWFq0W', 'PJLgZX50EfPGpriHRHxGsAYXAOJ2dkwNMksg6NM9Sl7ptXlv1ateYfkoribj', '2018-04-22 22:38:53', '2018-04-22 22:38:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relasi_genre_movie`
--
ALTER TABLE `relasi_genre_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `relasi_genre_movie`
--
ALTER TABLE `relasi_genre_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
