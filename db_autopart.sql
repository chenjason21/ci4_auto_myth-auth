-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2023 pada 08.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autopart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(5, '::1', 'testing1@gmail.com', 2, '2023-03-18 10:45:24', 1),
(6, '::1', 'miczhou', NULL, '2023-03-18 10:52:13', 0),
(7, '::1', 'miczhou', NULL, '2023-03-18 10:52:18', 0),
(8, '::1', 'miczhou123', NULL, '2023-03-18 10:52:29', 0),
(9, '::1', 'miczhou123', NULL, '2023-03-18 10:52:34', 0),
(10, '::1', 'miczhou123', NULL, '2023-03-18 10:52:44', 0),
(11, '::1', 'miczhou', NULL, '2023-03-18 10:53:48', 0),
(12, '::1', 'testing2@gmail.com', 3, '2023-03-18 10:53:54', 1),
(13, '::1', 'miczhou', NULL, '2023-03-18 13:53:14', 0),
(14, '::1', 'miczhou', NULL, '2023-03-18 13:53:22', 0),
(15, '::1', 'testing2@gmail.com', 3, '2023-03-18 13:53:31', 1),
(16, '::1', 'testing1@gmail.com', 1, '2023-03-19 05:51:58', 1),
(17, '::1', 'testing1@gmail.com', 1, '2023-03-19 06:29:08', 1),
(18, '::1', 'testingwebsite', NULL, '2023-03-19 06:32:28', 0),
(19, '::1', 'testingwebsite', NULL, '2023-03-19 06:32:53', 0),
(20, '::1', 'testingwebsite', NULL, '2023-03-19 06:33:09', 0),
(21, '::1', 'testingwebsite', NULL, '2023-03-19 06:33:21', 0),
(22, '::1', 'testingwebsite', NULL, '2023-03-19 06:33:36', 0),
(23, '::1', 'testingwebsite', NULL, '2023-03-19 06:33:53', 0),
(24, '::1', 'aaa@gmail.com', 2, '2023-03-19 06:36:43', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1679131391, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` bigint(100) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `merek_mobil` varchar(100) NOT NULL,
  `no_part` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `harga_sales` varchar(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `jenis_mobil`, `merek_mobil`, `no_part`, `jenis_barang`, `nama_barang`, `jumlah_barang`, `nama_sales`, `harga_sales`, `harga_jual`, `slug`) VALUES
(29, 'Daihatsu     ', 'L300', 'MD069782', 'Filter Oli', 'Filter Oli L300', '100', 'Mitshubishi Sales   ', '80000', '120000', ''),
(30, 'Toyota   ', 'Avanza', '15601-BZ010', 'Filter Oli', 'Filter Oli Avanza', '100', 'Hino Part ', '30000', '45000', ''),
(32, 'Suzuki ', 'Futura', '16510-61J00', 'Oli', 'Filter Oli Futuran/APV Injection', '1', 'Toyota Sales ', '30000', '45000', ''),
(33, 'Honda ', 'CRV', '15400-RK9-F01', 'Oli', 'Filter Oli', '1', 'Toyota Sales ', '25000', '45000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` bigint(100) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `no_hp`, `alamat_customer`) VALUES
(1, 'Customer 1', '0912', 'Jakarta'),
(2, 'Customer 2', '0921', 'Jakarta'),
(3, 'Customer 3', '08', 'Jakarta'),
(4, 'Customer 5', '08', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_pembelian`
--

CREATE TABLE `tb_jurnal_pembelian` (
  `id_jurnal_pembelian` bigint(100) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` bigint(100) NOT NULL,
  `harga_satuan` bigint(100) NOT NULL,
  `total_pembelian` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurnal_pembelian`
--

INSERT INTO `tb_jurnal_pembelian` (`id_jurnal_pembelian`, `tanggal_pembelian`, `nama_sales`, `nama_barang`, `jumlah_barang`, `harga_satuan`, `total_pembelian`) VALUES
(14, '2023-03-15', 'Toyota Sales', 'Oli', 2, 100000, 200000),
(16, '2023-03-01', 'Mitshubishi Sales ', 'Oli', 10, 10000, 100000),
(17, '2023-03-02', 'Hino Part ', 'Oli ', 10, 100000, 1000000),
(18, '2023-03-24', 'Ford Sales  ', 'Oli', 3, 199999, 599997),
(19, '2023-03-15', 'Hino Part', '3', 3, 3, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_penjualan`
--

CREATE TABLE `tb_jurnal_penjualan` (
  `id_jurnal_penjualan` bigint(100) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` bigint(100) NOT NULL,
  `harga_satuan` bigint(100) NOT NULL,
  `total_penjualan` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurnal_penjualan`
--

INSERT INTO `tb_jurnal_penjualan` (`id_jurnal_penjualan`, `tanggal_penjualan`, `nama_customer`, `nama_barang`, `jumlah_barang`, `harga_satuan`, `total_penjualan`) VALUES
(5, '2023-03-09', 'Customer 5', 'Filter Oli Avanza', 3, 500000, 1500000),
(6, '2023-03-03', 'Customer 5 ', 'Filter Oli Avanza', 123, 50000, 6150000),
(7, '2023-03-04', 'Customer 1 ', 'Filter Oli Avanza ', 11, 50000, 550000),
(8, '2023-03-17', 'Customer 2  ', 'Filter Oli Suzuki', 3, 50000, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sales`
--

CREATE TABLE `tb_sales` (
  `id_sales` bigint(100) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat_sales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_sales`
--

INSERT INTO `tb_sales` (`id_sales`, `nama_sales`, `no_hp`, `alamat_sales`) VALUES
(1, 'Hino Part', '08', 'Jakarta'),
(17, 'Toyota Sales', '0812', 'Jakarta'),
(18, 'Mitshubishi Sales', '08', 'Jakarta'),
(21, 'Ford Sales', '08', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `nama_customer` (`nama_customer`) USING BTREE;

--
-- Indeks untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  ADD PRIMARY KEY (`id_jurnal_pembelian`),
  ADD KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  ADD PRIMARY KEY (`id_jurnal_penjualan`),
  ADD KEY `nama_customer` (`nama_customer`);

--
-- Indeks untuk tabel `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD UNIQUE KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  MODIFY `id_jurnal_pembelian` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  MODIFY `id_jurnal_penjualan` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `id_sales` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`nama_sales`) REFERENCES `tb_sales` (`nama_sales`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  ADD CONSTRAINT `tb_jurnal_pembelian_ibfk_1` FOREIGN KEY (`nama_sales`) REFERENCES `tb_sales` (`nama_sales`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  ADD CONSTRAINT `tb_jurnal_penjualan_ibfk_1` FOREIGN KEY (`nama_customer`) REFERENCES `tb_customer` (`nama_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
