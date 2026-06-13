-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2026 pada 16.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fityanul_ulum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_guru`
--

CREATE TABLE `absensi_guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kehadiran_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi_guru`
--

INSERT INTO `absensi_guru` (`id`, `tanggal`, `guru_id`, `kehadiran_id`, `created_at`, `updated_at`) VALUES
(1, '2026-06-12', 1, 6, '2026-06-12 14:12:45', '2026-06-12 14:12:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi_siswa`
--

CREATE TABLE `absensi_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `jadwal_id` bigint(20) UNSIGNED NOT NULL,
  `kehadiran_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_card` varchar(10) NOT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `kode` varchar(5) DEFAULT NULL,
  `jk` enum('L','P') NOT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `id_card`, `nip`, `nama_guru`, `mapel_id`, `kode`, `jk`, `telp`, `tmp_lahir`, `tgl_lahir`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '00001', '1', 'Muh Gunawan Hadi', 6, 'B01', 'L', '0811', 'Sekarteja', '1997-05-17', 'uploads/guru/00151616042026_bang gun.png', '2026-04-16 09:15:00', '2026-04-16 09:15:00', NULL),
(2, '00002', '2', 'Izmi Fatimach', 3, 'B02', 'P', '0822', 'Jakarta', '1997-06-13', 'uploads/guru/23171022042020_female.jpg', '2026-04-16 09:19:05', '2026-04-16 09:19:05', NULL),
(3, '00003', '344', 'Ridho Ilham Wijaya', 3, 'B03', 'L', '081100992210', 'Tegal', '2026-05-07', 'uploads/guru/35251431012020_male.jpg', '2026-05-07 10:24:56', '2026-05-07 10:25:39', '2026-05-07 10:25:39'),
(4, '00003', '37645645', 'Ubay', 6, 'B04', 'L', '081100992210', 'Jakarta', '2026-05-07', 'uploads/guru/35251431012020_male.jpg', '2026-05-07 10:36:45', '2026-05-07 10:36:45', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hari` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id`, `nama_hari`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(2, 'Selasa', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(3, 'Rabu', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(4, 'Kamis', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(5, 'Jum\'at', '2026-04-16 09:09:55', '2026-04-16 09:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(30) NOT NULL,
  `color` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `ket`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Hadir', '3C0', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(2, 'Izin', '0CF', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(3, 'Bertugas Keluar', 'F90', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(4, 'Sakit', 'FF0', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(5, 'Terlambat', '7F0', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(6, 'Tanpa Keterangan', 'F00', '2026-04-16 09:09:55', '2026-04-16 09:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `paket_id`, `guru_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'NAHWU SOROF A', 3, 1, '2026-06-13 14:30:40', '2026-06-13 14:30:40', NULL),
(9, 'NAHWU SOROF B', 3, 4, '2026-06-13 14:31:18', '2026-06-13 14:31:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `kelompok` enum('A','B','C') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `paket_id`, `kelompok`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bahasa Indonesia', 9, 'A', '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(2, 'Bahasa Inggris', 9, 'A', '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(3, 'Matematika', 9, 'A', '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(4, 'Pendidikan Agama dan Budi Pekerti', 9, 'A', '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(5, 'Pendidikan Pancasila dan Kewarganegaraan', 9, 'A', '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(6, 'Nahwu Sorof', 9, 'A', '2026-04-16 09:12:29', '2026-06-12 13:57:45', NULL),
(7, 'BTQ', 9, 'A', '2026-06-11 05:18:35', '2026-06-11 05:18:35', NULL),
(8, 'Tajwid & Bahasa Arab', 9, 'A', '2026-06-12 13:59:42', '2026-06-12 13:59:42', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_12_092809_create_hari_table', 1),
(5, '2020_03_12_092854_create_guru_table', 1),
(6, '2020_03_12_092926_create_absensi_guru_table', 1),
(7, '2020_03_12_092941_create_jadwal_table', 1),
(8, '2020_03_12_092953_create_kehadiran_table', 1),
(9, '2020_03_12_093010_create_kelas_table', 1),
(10, '2020_03_12_093018_create_mapel_table', 1),
(11, '2020_03_12_093027_create_nilai_table', 1),
(12, '2020_03_12_093036_create_paket_table', 1),
(13, '2020_03_12_093050_create_pengumuman_table', 1),
(14, '2020_03_12_093102_create_rapot_table', 1),
(15, '2020_03_12_093117_create_ruang_table', 1),
(16, '2020_03_12_093130_create_siswa_table', 1),
(17, '2020_03_16_102220_create_ulangan_table', 1),
(18, '2020_04_07_094355_create_sikap_table', 1),
(19, '2026_06_11_000000_create_absensi_siswa_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kkm` int(11) NOT NULL DEFAULT 70,
  `deskripsi_a` text DEFAULT NULL,
  `deskripsi_b` text DEFAULT NULL,
  `deskripsi_c` text DEFAULT NULL,
  `deskripsi_d` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `guru_id`, `kkm`, `deskripsi_a`, `deskripsi_b`, `deskripsi_c`, `deskripsi_d`, `created_at`, `updated_at`) VALUES
(1, 1, 70, '85', '80', '70', '69', '2026-04-16 09:15:00', '2026-06-13 13:35:41'),
(2, 2, 70, NULL, NULL, NULL, NULL, '2026-04-16 09:19:05', '2026-04-16 09:19:05'),
(3, 3, 70, NULL, NULL, NULL, NULL, '2026-05-07 10:24:56', '2026-05-07 10:24:56'),
(4, 4, 70, NULL, NULL, NULL, NULL, '2026-05-07 10:36:45', '2026-05-07 10:36:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Ilmu Syariah', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(2, 'Ilmu Bahasa', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(3, 'Ilmu Al Qur\'an', '2026-04-16 09:09:55', '2026-04-16 09:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opsi` varchar(32) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `opsi`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'pengumuman', 'pengumuman', '2026-04-16 09:09:55', '2026-04-16 09:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapot`
--

CREATE TABLE `rapot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `p_nilai` varchar(5) NOT NULL,
  `p_predikat` varchar(5) NOT NULL,
  `p_deskripsi` text NOT NULL,
  `k_nilai` varchar(5) DEFAULT NULL,
  `k_predikat` varchar(5) DEFAULT NULL,
  `k_deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruang` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`, `created_at`, `updated_at`) VALUES
(1, 'Ruang 01', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(2, 'Ruang 02', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(3, 'Ruang 03', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(4, 'Ruang 04', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(5, 'Ruang 05', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(6, 'Ruang 06', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(7, 'Ruang 07', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(8, 'Ruang 08', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(9, 'Ruang 09', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(10, 'Ruang 10', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(11, 'Ruang 11', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(12, 'Ruang 12', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(13, 'Ruang 13', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(14, 'Ruang 14', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(15, 'Ruang 15', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(16, 'Ruang 16', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(17, 'Ruang 17', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(18, 'Ruang 18', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(19, 'Ruang 19', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(20, 'Ruang 20', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(21, 'Ruang 21', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(22, 'Ruang 22', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(23, 'Ruang 23', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(24, 'Ruang 24', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(25, 'Ruang 25', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(26, 'Ruang 26', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(27, 'Ruang 27', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(28, 'Ruang 28', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(29, 'Ruang 29', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(30, 'Ruang 30', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(31, 'Ruang 31', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(32, 'Ruang 32', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(33, 'Ruang 33', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(34, 'Ruang 34', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(35, 'Ruang 35', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(36, 'Ruang 36', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(37, 'Ruang 37', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(38, 'Ruang 38', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(39, 'Ruang 39', '2026-04-16 09:09:55', '2026-04-16 09:09:55'),
(40, 'Ruang 40', '2026-04-16 09:09:55', '2026-04-16 09:09:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sikap`
--

CREATE TABLE `sikap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `sikap_1` varchar(5) DEFAULT NULL,
  `sikap_2` varchar(5) DEFAULT NULL,
  `sikap_3` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `no_induk`, `nis`, `nama_siswa`, `jk`, `telp`, `tmp_lahir`, `tgl_lahir`, `foto`, `kelas_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '1', '1', 'Bayu Prayoga', 'L', '081111', 'Tegal', '2004-02-06', 'uploads/siswa/52471919042020_male.jpg', 8, '2026-06-13 14:39:23', '2026-06-13 14:39:23', NULL),
(7, '1234567891', '1234567891', 'Baharudin', 'L', '081100992233', 'Jogjakarta', '2026-06-13', 'uploads/siswa/52471919042020_male.jpg', 8, '2026-06-13 14:39:51', '2026-06-13 14:39:51', NULL),
(8, '1234567892', '1234567892', 'Kayla Abigail', 'P', '081100992299', 'Semarang', '2010-02-06', 'uploads/siswa/50271431012020_female.jpg', 9, '2026-06-13 14:52:42', '2026-06-13 14:52:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulangan`
--

CREATE TABLE `ulangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `ulha_1` varchar(5) DEFAULT NULL,
  `ulha_2` varchar(5) DEFAULT NULL,
  `uts` varchar(5) DEFAULT NULL,
  `ulha_3` varchar(5) DEFAULT NULL,
  `uas` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` enum('Admin','Guru','Siswa','Operator') NOT NULL,
  `no_induk` varchar(255) DEFAULT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `no_induk`, `id_card`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$g5l3pyJ.Q.my0wJepX3fTu7bFgdSjCAVWdmb9vcan8t4/J6hnTbae', 'Admin', NULL, NULL, NULL, '2026-04-16 09:09:55', '2026-04-16 09:09:55', NULL),
(2, 'bayu prayoga', 'bayu@gmail.com', NULL, '$2y$10$Jasw8DnA4as0K12mt5c0XeGG53hWkfTWY2sanS3Mnvr4RYx/lx0Su', 'Siswa', '1', NULL, NULL, '2026-04-16 09:25:03', '2026-04-16 09:25:03', NULL),
(3, 'Muh Gunawan Hadi', 'muhgunawan@gmail.com', NULL, '$2y$10$uIaJgnQ5EH9pgNbYcZJvwOLz9aZKuHeTd8r6R6lTYVbWyaiPHdtdu', 'Guru', NULL, '00001', NULL, '2026-04-16 09:26:04', '2026-04-16 09:26:04', NULL),
(4, 'Izmi Fatimach', 'izmi@gmail.com', NULL, '$2y$10$YHixASkJQs2PmuoATPjT7uoLKo1Ackx8fnMjSaIDA/uGrWEXqVE/K', 'Guru', NULL, '00002', NULL, '2026-04-16 09:26:57', '2026-04-16 09:26:57', NULL),
(5, 'operator', 'operator@gmail.com', NULL, '$2y$10$YXuAr17eLHlO4WGfrUomuO6JgtqTKnI1R0Dlvj3i2yfMLNrnAnKNi', 'Operator', NULL, NULL, NULL, '2026-04-16 09:29:02', '2026-06-11 05:01:43', '2026-06-11 05:01:43'),
(6, 'baharudin', 'baharudin@gmail.com', NULL, '$2y$10$QsP7Haf3N0STRrfdkYaXxu7hrIk72HYZIj7Wteulo7pu6k2reYQlC', 'Siswa', '1234567891', NULL, NULL, '2026-06-12 13:34:05', '2026-06-12 13:34:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi_guru`
--
ALTER TABLE `absensi_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_siswa_siswa_id_foreign` (`siswa_id`),
  ADD KEY `absensi_siswa_jadwal_id_foreign` (`jadwal_id`),
  ADD KEY `absensi_siswa_kehadiran_id_foreign` (`kehadiran_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rapot`
--
ALTER TABLE `rapot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sikap`
--
ALTER TABLE `sikap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulangan`
--
ALTER TABLE `ulangan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `absensi_guru`
--
ALTER TABLE `absensi_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hari`
--
ALTER TABLE `hari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rapot`
--
ALTER TABLE `rapot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `sikap`
--
ALTER TABLE `sikap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ulangan`
--
ALTER TABLE `ulangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD CONSTRAINT `absensi_siswa_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensi_siswa_kehadiran_id_foreign` FOREIGN KEY (`kehadiran_id`) REFERENCES `kehadiran` (`id`),
  ADD CONSTRAINT `absensi_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
