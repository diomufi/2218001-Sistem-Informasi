-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 12:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthcat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int NOT NULL,
  `owner_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `nama`, `jenis`, `usia`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'Molly', 'Anggora', 3, 12, '2024-05-23 20:14:46', '2024-05-24 18:54:46'),
(3, 'Wafa', 'JLH', 97, 28, '2024-05-23 21:25:19', '2024-05-23 21:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(2, 'G001', 'Tidak Mau makan', NULL, NULL),
(3, 'G002', 'Batuk', NULL, NULL),
(4, 'G003', 'Bulu rontok', NULL, NULL),
(5, 'G004', 'Dehidrasi', NULL, NULL),
(6, 'G005', 'Kurus', NULL, NULL),
(7, 'G006', 'Diare disertai darah', NULL, NULL),
(8, 'G007', 'Gatal-gatal', NULL, NULL),
(9, 'G008', 'Anemia (gusi putih)', NULL, NULL),
(10, 'G009', 'Keluar air liur', NULL, NULL),
(11, 'G010', 'Diare disertai cacing', NULL, NULL),
(12, 'G011', 'Demam', NULL, NULL),
(13, 'G012', 'Dipegang telinga kesakitan', NULL, NULL),
(14, 'G013', 'Flu', NULL, NULL),
(15, 'G014', 'Bersin-bersin', NULL, NULL),
(16, 'G015', 'Jaringan kulit rontok', NULL, NULL),
(17, 'G016', 'Bengkak mata', NULL, NULL),
(18, 'G017', 'Keluar air mata (epifora)', NULL, NULL),
(19, 'G018', 'Kemerahan pada kulit', NULL, NULL),
(20, 'G019', 'Kerusakan selaput lendir mata', NULL, NULL),
(21, 'G020', 'Berbau busuk pada telinga', NULL, NULL),
(22, 'G021', 'Leleran hidung keruh (kental seperti nanah)', NULL, NULL),
(23, 'G022', 'Lemah', NULL, NULL),
(24, 'G023', 'Lesu', NULL, NULL),
(25, 'G024', 'Luka keropeng', NULL, NULL),
(26, 'G025', 'Luka pada mulut', NULL, NULL),
(27, 'G026', 'Luka pada telinga', NULL, NULL),
(28, 'G027', 'Menggelengkan kepala', NULL, NULL),
(29, 'G028', 'Muntah', NULL, NULL),
(30, 'G029', 'Muntah disertai cacing', NULL, NULL),
(31, 'G030', 'Nafas lewat mulut', NULL, NULL),
(32, 'G031', 'Saluran nafas tertutup lendir (ingusan)', NULL, NULL),
(33, 'G032', 'Sesak nafas', NULL, NULL),
(34, 'G033', 'Telinga selalu kotor', NULL, NULL),
(35, 'G034', 'Bau mulut busuk', NULL, NULL),
(38, 'G035', 'Tidak Tenang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_05_23_165407_create_pemiliks_table', 1),
(3, '2024_05_23_184321_create_pemilik_pet_table', 2),
(4, '2024_05_23_184443_create_pemilik_pets_table', 3),
(5, '2024_05_23_191405_create_pemiliks_table', 4),
(6, '2024_05_23_203537_create_owners_table', 5),
(7, '2024_05_23_212313_create_ownercats_table', 6),
(8, '2024_05_23_215315_create_ownercat_table', 7),
(9, '2024_05_23_225558_add_trigger_to_ownercat_table', 8),
(10, '2024_05_23_225905_change_id_to_varchar_in_ownercat_table', 9),
(11, '2024_05_23_230542_change_id_to_varchar_in_ownercat_table', 10),
(12, '2024_05_24_004304_create_cats_table', 11),
(13, '2024_05_24_010336_create_cats_table', 12),
(14, '2024_05_24_024935_create_cats_table', 13),
(15, '2024_05_24_052713_create_penyakit_table', 14),
(16, '2024_05_24_214528_create_gejalas_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ownercat`
--

CREATE TABLE `ownercat` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ownercat`
--

INSERT INTO `ownercat` (`id`, `nama`, `alamat`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
(10, 'Budi Baguss', 'Jl. Cendrawasih No. 25, Surabaya', 'budi@example.com', '082345678901', NULL, '2024-05-23 20:00:15'),
(11, 'Citra Winata', 'Jl. Pahlawan No. 8, Bandung', 'citra@example.com', '083456789012', NULL, '2024-05-23 19:38:18'),
(12, 'Darma Putra', 'Jl. Diponegoro No. 15, Yogyakarta', 'darma@example.com', '084567890123', NULL, NULL),
(13, 'Eka Sari', 'Jl. Sudirman No. 20, Semarang', 'eka@example.com', '085678901234', NULL, NULL),
(14, 'Firman Wijaya', 'Jl. A. Yani No. 30, Medan', 'firman@example.com', '086789012345', NULL, NULL),
(15, 'Gita Pratiwi', 'Jl. Gajah Mada No. 5, Surabaya', 'gita@example.com', '087890123456', NULL, NULL),
(16, 'Hendra Wijaya', 'Jl. Jenderal Sudirman No. 12, Jakarta', 'hendra@example.com', '088901234567', NULL, NULL),
(17, 'Indra Saputra', 'Jl. K.H. Hasyim Ashari No. 18, Bandung', 'indra@example.com', '089012345678', NULL, NULL),
(18, 'Joko Susanto', 'Jl. Diponegoro No. 25, Surabaya', 'joko@example.com', '090123456789', NULL, NULL),
(19, 'Kartika Sari', 'Jl. Gatot Subroto No. 28, Yogyakarta', 'kartika@example.com', '091234567890', NULL, NULL),
(20, 'Lia Puspita', 'Jl. A. Yani No. 10, Semarang', 'lia@example.com', '092345678901', NULL, NULL),
(21, 'Mulyadi Surya', 'Jl. Surya Kencana No. 15, Medan', 'mulyadi@example.com', '093456789012', NULL, NULL),
(22, 'Nadia Putri', 'Jl. Jenderal Sudirman No. 20, Jakarta', 'nadia@example.com', '094567890123', NULL, NULL),
(23, 'Oky Darmawan', 'Jl. Pemuda No. 25, Bandung', 'oky@example.com', '095678901234', NULL, NULL),
(24, 'Putra Wijaya', 'Jl. Veteran No. 8, Surabaya', 'putra@example.com', '096789012345', NULL, NULL),
(25, 'Qori Mulyadi', 'Jl. Merdeka No. 18, Yogyakarta', 'qori@example.com', '097890123456', NULL, NULL),
(26, 'Rina Setiawati', 'Jl. Asia Afrika No. 30, Semarang', 'rina@example.com', '098901234567', NULL, NULL),
(27, 'Santi Susanti', 'Jl. Pahlawan No. 12, Medan', 'santi@example.com', '099012345678', NULL, NULL),
(28, 'Tono Wibowo', 'Jl. Sudirman No. 28, Jakarta', 'tono@example.com', '100123456789', NULL, NULL),
(29, 'Uci Wijaya', 'Jl. Cendrawasih No. 10, Bandung', 'uci@example.com', '101234567890', NULL, NULL),
(30, 'Vina Kusuma', 'Jl. Diponegoro No. 5, Surabaya', 'vina@example.com', '102345678901', NULL, NULL),
(31, 'Wahyu Santoso', 'Jl. A. Yani No. 20, Yogyakarta', 'wahyu@example.com', '103456789012', NULL, NULL),
(32, 'Xavier Wibowo', 'Jl. Gajah Mada No. 25, Semarang', 'xavier@example.com', '104567890123', NULL, NULL),
(33, 'Yani Putri', 'Jl. Jenderal Sudirman No. 18, Medan', 'yani@example.com', '105678901234', NULL, NULL),
(34, 'Zainal Abidin', 'Jl. Asia Afrika No. 12, Jakarta', 'zainal@example.com', '106789012345', NULL, NULL),
(35, 'Abdul Rahman', 'Jl. Merdeka No. 30, Bandung', 'abdul@example.com', '107890123456', NULL, NULL),
(36, 'Bunga Sari', 'Jl. Pemuda No. 8, Surabaya', 'bunga@example.com', '108901234567', NULL, NULL),
(37, 'Candra Wijaya', 'Jl. Sudirman No. 18, Yogyakarta', 'candra@example.com', '109012345678', NULL, NULL),
(38, 'Dewi Rahayu', 'Jl. Cendrawasih No. 12, Semarang', 'dewi@example.com', '110123456789', NULL, NULL),
(39, 'Eko Pratama', 'Jl. A. Yani No. 5, Medan', 'eko@example.com', '111234567890', NULL, NULL),
(40, 'Fitriani Susanti', 'Jl. Gajah Mada No. 20, Jakarta', 'fitriani@example.com', '112345678901', NULL, NULL),
(41, 'Gatot Wibowo', 'Jl. Asia Afrika No. 25, Bandung', 'gatot@example.com', '113456789012', NULL, NULL),
(42, 'Hani Permata', 'Jl. Pahlawan No. 30, Surabaya', 'hani@example.com', '114567890123', NULL, NULL),
(43, 'Irfan Wijaya', 'Jl. Diponegoro No. 8, Yogyakarta', 'irfan@example.com', '115678901234', NULL, NULL),
(44, 'Jaka Susanto', 'Jl. Sudirman No. 12, Semarang', 'jaka@example.com', '116789012345', NULL, NULL),
(45, 'Kurnia Sari', 'Jl. A. Yani No. 18, Medan', 'kurnia@example.com', '117890123456', NULL, NULL),
(46, 'Lukman Santoso', 'Jl. Gajah Mada No. 10, Jakarta', 'lukman@example.com', '118901234567', NULL, NULL),
(47, 'Mira Wijaya', 'Jl. Asia Afrika No. 5, Bandung', 'mira@example.com', '119012345678', NULL, NULL),
(48, 'Althof Ali Wafa Muhammad Bagus', 'Jl. Merdeka No. 20, Surabaya', 'nina@example.com', '120123456789', NULL, '2024-05-24 15:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemiliks`
--

CREATE TABLE `pemiliks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_latin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `nama_latin`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'P001', 'Cacingan', 'Helminthiasis', 'Cacingan (helminthiasis) pada kucing adalah infeksi parasit yang disebabkan oleh cacing seperti cacing gelang, cacing pita, cacing tambang, dan cacing paru-paru. Penyakit ini sering kali ditandai dengan gejala-gejala seperti perut buncit, muntah, diare, penurunan berat badan, bulu kusam, dan dalam kasus yang parah, cacing dapat terlihat di tinja atau muntah kucing. Anemia, lesu, dan kehilangan nafsu makan juga umum terjadi, terutama pada infeksi cacing tambang yang menghisap darah kucing. Cacing paru-paru bisa menyebabkan batuk dan kesulitan bernapas. Penularan cacing dapat terjadi melalui konsumsi telur atau larva cacing dari lingkungan yang terkontaminasi, inang perantara seperti kutu dan siput, atau melalui susu induk yang terinfeksi. Infeksi cacing dapat menimbulkan komplikasi serius jika tidak diobati, sehingga penting bagi pemilik kucing untuk melakukan pencegahan dan pengobatan yang tepat.', '2024-05-24 12:02:41', '2024-05-24 12:02:41'),
(6, 'P002', 'Kudis', 'Skabies', 'Skabies pada kucing adalah penyakit kulit yang disebabkan oleh infestasi tungau Sarcoptes scabiei. Penyakit ini sangat menular dan dapat menyebabkan ketidaknyamanan yang signifikan pada kucing yang terinfeksi. Gejala utama skabies pada kucing meliputi gatal hebat, kemerahan, pembentukan kerak dan koreng pada kulit, serta kerontokan bulu di area yang terinfeksi. Kucing yang terinfeksi sering kali menggaruk atau menggigit kulitnya secara berlebihan, yang dapat menyebabkan luka terbuka dan infeksi sekunder. Lesi kulit biasanya ditemukan di area wajah, telinga, leher, dan kaki, namun bisa menyebar ke seluruh tubuh jika tidak diobati. Skabies sangat menular antar kucing dan juga dapat menular ke manusia, meskipun infestasi pada manusia biasanya bersifat sementara. Pengobatan skabies melibatkan penggunaan obat antiparasit, baik topikal maupun sistemik, serta perawatan lingkungan untuk menghilangkan tungau dari tempat tidur dan area bermain kucing. Diagnosis dan pengobatan dini sangat penting untuk mengurangi ketidaknyamanan pada kucing dan mencegah penyebaran penyakit.', '2024-05-24 12:04:00', '2024-05-24 12:04:00'),
(7, 'P003', 'Pijal, kutu, caplak', 'Ektoparasit', 'Ektoparasit pada kucing adalah parasit yang hidup di luar tubuh inangnya, seperti kutu, tungau, dan caplak. Infestasi ektoparasit dapat menyebabkan berbagai masalah kesehatan pada kucing, mulai dari iritasi kulit hingga penyakit serius. Gejala umum infestasi ektoparasit meliputi gatal-gatal, kemerahan, pembentukan kerak atau koreng, kerontokan bulu, dan luka akibat garukan yang berlebihan. Kutu, seperti Ctenocephalides felis, adalah salah satu ektoparasit paling umum pada kucing dan dapat menyebabkan dermatitis alergi akibat gigitan kutu. Tungau, seperti Sarcoptes scabiei yang menyebabkan skabies, atau Otodectes cynotis yang menyebabkan infeksi telinga, dapat menimbulkan gatal hebat dan infeksi sekunder. Caplak, yang termasuk dalam genus Ixodes atau Rhipicephalus, dapat menularkan penyakit berbahaya seperti penyakit Lyme dan babesiosis. Pencegahan dan pengobatan infestasi ektoparasit melibatkan penggunaan produk antiparasit seperti spot-on, shampo, atau tablet yang direkomendasikan oleh dokter hewan, serta menjaga kebersihan lingkungan kucing. Pengobatan yang tepat sangat penting untuk menghindari komplikasi serius dan memastikan kesehatan serta kenyamanan kucing.', '2024-05-24 12:05:30', '2024-05-24 12:05:30'),
(8, 'P004', 'Koksidiosis', 'Koksidiosis', 'Koksidiosis pada kucing adalah infeksi parasit yang disebabkan oleh protozoa dari genus Cystoisospora (sebelumnya dikenal sebagai Isospora). Parasit ini menyerang saluran pencernaan kucing, terutama usus. Kucing yang terinfeksi koksidiosis sering menunjukkan gejala seperti diare yang bisa bercampur darah atau lendir, dehidrasi, kehilangan nafsu makan, penurunan berat badan, dan lesu. Pada anak kucing atau kucing dengan sistem kekebalan tubuh yang lemah, gejala dapat menjadi lebih parah dan berpotensi fatal jika tidak diobati.', '2024-05-24 13:07:30', '2024-05-24 13:07:30'),
(9, 'P005', 'Radang Tenggorokan', 'Feline Viral Rhinotracheitis', 'Radang tenggorokan pada kucing, atau dikenal sebagai faringitis, adalah peradangan pada faring (bagian belakang tenggorokan). Kondisi ini bisa disebabkan oleh berbagai faktor, termasuk infeksi bakteri, virus, jamur, atau iritasi akibat benda asing, asap, atau bahan kimia. Gejala radang tenggorokan pada kucing meliputi batuk, kesulitan menelan, suara serak atau hilang, peningkatan air liur, nafsu makan menurun, dan terkadang demam. Kucing yang menderita faringitis mungkin juga menunjukkan tanda-tanda ketidaknyamanan atau nyeri saat menelan, seperti menggosok-gosokkan mulut atau tenggorokan dengan kaki mereka.', '2024-05-24 13:08:59', '2024-05-24 13:08:59'),
(10, 'P006', 'Pernafasan', 'Feline Caliviral disease', 'Gangguan pernapasan pada kucing, atau dikenal sebagai distres pernapasan, adalah kondisi di mana kucing mengalami kesulitan bernapas. Penyebab gangguan pernapasan pada kucing bisa sangat bervariasi, termasuk infeksi saluran pernapasan atas, asma, pneumonia, edema paru, penyakit jantung, dan adanya benda asing di saluran pernapasan.', '2024-05-24 13:10:29', '2024-05-24 13:10:29'),
(11, 'P007', 'Kucing jahat', 'Felice Panleukopenia', 'Feline Panleukopenia (juga dikenal sebagai feline distemper atau feline infectious enteritis) adalah penyakit virus yang sangat menular yang disebabkan oleh feline parvovirus. Penyakit ini terutama menyerang anak kucing dan kucing muda, meskipun kucing dari segala usia bisa terinfeksi.', '2024-05-24 13:12:42', '2024-05-24 13:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cats_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gejalas_kode_gejala_unique` (`kode_gejala`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownercat`
--
ALTER TABLE `ownercat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ownercat_email_unique` (`email`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owners_email_unique` (`email`);

--
-- Indexes for table `pemiliks`
--
ALTER TABLE `pemiliks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemiliks_email_unique` (`email`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penyakit_kode_penyakit_unique` (`kode_penyakit`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ownercat`
--
ALTER TABLE `ownercat`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemiliks`
--
ALTER TABLE `pemiliks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cats`
--
ALTER TABLE `cats`
  ADD CONSTRAINT `cats_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `ownercat` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
