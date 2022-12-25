-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 04:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkhasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'deni admin1', 'deniadmin1@gmail.com', 'password', 'admin', NULL, NULL),
(2, 'Hendrison', 'hendrison123@gmail.com', 'password', 'guru', NULL, NULL),
(3, 'Dian Oktovianus Maniani', 'dian123@gmail.com', 'password', 'siswa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `file_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `user_id`, `kategori_id`, `file_upload`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Ducimus praesentium.', 2, 1, '', 'Harum officia in autem praesentium praesentium ut sit. Sit quos quisquam sit mollitia voluptatem unde quae. Non adipisci corrupti placeat delectus cumque iure.', 'Qui aut temporibus necessitatibus et voluptatem praesentium. Commodi sequi doloremque voluptas aut quae. Doloribus et et itaque eum omnis. Neque laudantium quidem id voluptatem dicta earum voluptatem minima. Autem rerum quo quisquam rerum ratione in sint. Placeat quo cum optio quae. Est quia qui ut a repellat aperiam et. Voluptas rerum reiciendis nam sed assumenda. Reiciendis modi eum ut voluptatum est enim qui. Sequi dolore totam eum quia accusamus et. Ut voluptates dolorem sed optio suscipit doloribus recusandae. Reiciendis beatae sunt nam dolor blanditiis molestiae earum.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(2, 'Nihil natus numquam placeat recusandae.', 3, 2, '', 'Voluptas eos rerum veniam. At eos voluptatibus porro alias corporis. Aut perspiciatis expedita nihil.', 'Esse ratione non earum et voluptatem sunt. Rerum voluptas incidunt labore dolores temporibus in. Ipsum omnis id quas quo ad in et. Labore eius temporibus temporibus facere sapiente. Ex atque beatae et omnis dignissimos nam enim. Aliquid sunt alias facere rerum dolor aspernatur voluptatibus.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(3, 'Ratione repellendus.', 5, 1, '', 'Vitae optio sapiente possimus quas sit. Ad ut aperiam facilis ut repudiandae saepe. Et explicabo iusto et sint.', 'Impedit tempore culpa autem deleniti ea. Hic pariatur omnis ut. Voluptatem omnis rem ut qui. Officiis voluptatum quidem quaerat eum architecto aspernatur. Cupiditate dolores voluptatem beatae error fugiat ipsa commodi. Et eum consectetur aliquid dolorum asperiores ex expedita. Quia optio consequatur qui est est molestias. Iure corporis quo ut voluptas vel veniam.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(4, 'Perferendis reiciendis quas dolor dignissimos.', 1, 1, '', 'Ut rem minima ut officia et explicabo maxime. Amet enim dignissimos velit neque. Optio velit ad eveniet amet recusandae.', 'Provident eos exercitationem eius nesciunt. Harum nisi perspiciatis et consequatur mollitia ex alias. Nam eos et a et et excepturi quidem. Officiis explicabo non laborum quas ullam. Illo nemo quod nihil quia et expedita. Error animi suscipit quod dolor aut esse quas in.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(5, 'Ex veritatis voluptatibus.', 1, 1, '', 'Nam et aliquam iusto consequuntur unde ipsam. Ipsum laboriosam recusandae ratione inventore. Ab et eos deleniti atque ut ipsam et.', 'Saepe eos ullam quasi a. Voluptas corporis architecto et neque ullam quia est. Similique reiciendis est excepturi voluptatem. Sequi soluta vitae ad eum nulla asperiores. Minus qui placeat ipsa molestias recusandae quis ut.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(6, 'Magnam quos ea.', 5, 1, '', 'Eveniet aut perspiciatis facere at asperiores. Adipisci quas dolores qui labore culpa. Assumenda consequatur sit ea nam voluptatem incidunt.', 'Reprehenderit omnis vero voluptate deserunt dignissimos ducimus dolores. Tempore iure dolore et ducimus error natus laborum. Non ut et harum atque adipisci. Odio omnis maiores eum voluptate consequatur nostrum qui. Dicta recusandae quod nihil qui iusto maiores. Repudiandae quis labore suscipit suscipit consequatur.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(7, 'Architecto nulla perferendis.', 5, 1, '', 'Et odio blanditiis hic ipsa error at laudantium. Similique dolor recusandae eum vel provident. Sint alias architecto minus voluptas. Beatae veritatis accusantium consequuntur commodi libero dolores dolor.', 'Nisi iusto totam similique eveniet odio voluptate. Sed a molestiae rerum quidem nulla vel ipsa. Illo placeat ut dolor dolores. Libero modi aut dolor. Laudantium deleniti et quis possimus error vel cupiditate. Rerum ea consequuntur sint fuga. Aut et error rem amet earum.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(8, 'Iste aperiam doloremque est iusto.', 5, 2, '', 'Perferendis molestiae quis qui consequatur ut. Eius et tempore officiis soluta. Veritatis id beatae explicabo pariatur dolorum qui asperiores. Et nobis ad ut omnis aperiam.', 'Officia nihil maiores officiis velit nemo. Ab commodi deserunt autem velit placeat. Occaecati eum voluptatem rem eius eum. Ut corporis eaque eos et officia et et. Maiores cumque voluptas tenetur eius ut. Sint saepe magni commodi. Delectus quo et esse molestias quia.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(9, 'Aliquam cupiditate veniam ut voluptatum.', 4, 2, '', 'In dolore aliquid quis illo quo earum architecto. Molestiae sint et ipsa facilis vitae doloremque et vitae. Est exercitationem quia aut sequi ut animi sunt. Tenetur distinctio itaque ab ut cum atque. Id amet aut reprehenderit tenetur et.', 'Nemo recusandae repellat magni id voluptatem. Est autem aut fuga ut eaque quos cum. Perspiciatis sed maxime quia velit ipsa. Enim vel occaecati nesciunt aliquam. Voluptas molestiae perspiciatis nostrum enim quod. Pariatur distinctio porro laboriosam exercitationem provident rerum esse voluptas. Recusandae commodi quis dolor molestiae sed. Vero quos veritatis vero modi est quasi cumque. Cum quia aut et enim eos. Alias nihil laudantium accusantium sunt voluptate sint voluptatum. Et ipsam repudiandae ea possimus et aut. Dignissimos tempora dolor molestiae qui sapiente.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(10, 'Porro sequi doloremque eos provident dolores.', 3, 2, '', 'Quaerat quam necessitatibus minus maxime porro iste. Nobis consequatur sint ea pariatur voluptas. Ut sequi aut eum fugit error sunt.', 'Officiis aut esse quasi voluptatibus deleniti. Ut nesciunt eum mollitia nesciunt non omnis. Et dignissimos illo a est animi. Quae voluptas minus in ea libero. Voluptatum qui modi corporis ut veritatis inventore. Optio eum ea illum nostrum eveniet tenetur et asperiores.', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(11, 'Asuu 2', 1, 1, 'img_1658323458_1.PNG', 'shuagdusahdisajd', 'shuagdusahdisajd', '2022-07-13 20:52:06', '2022-07-20 06:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosens`
--

INSERT INTO `dosens` (`id`, `nip`, `nama`, `jurusan_id`, `email`, `tlp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '194605107302408002', 'Jayme Hauck Anjas 3', 1, 'adan44@example.com', '(413) 656-3868', '7940 Elisa Lodge\r\nRaymundofort, MD 63155', '2022-07-03 21:41:20', '2022-07-12 07:04:01'),
(2, '455148178678463253', 'Gabriel Romaguera', 2, 'daniel.maria@example.net', '+1-936-628-5725', '714 Ward Trace\nNikolaustown, VA 09081-3013', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(3, '904226808865367836', 'Antoinette Lueilwitz Jr.', 1, 'brigitte.schmeler@example.com', '1-540-341-7439', '84995 Olson Meadows\nKohlerland, WV 10320', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(4, '176596949973903912', 'Tracey Schamberger', 1, 'windler.gladys@example.net', '229-502-7547', '97284 Derek Roads\nGiamouth, NY 75479-6075', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(5, '441353545856646940', 'Prof. Carmella Rempel', 1, 'caroline.skiles@example.com', '+18505144487', '3364 Reece Summit Suite 667\nEast Loren, LA 86665-1143', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(6, '574347265776871296', 'Lavon Conn MD', 2, 'hernser@example.com', '+1-458-976-7590', '922 Gorczany Underpass Apt. 836\nAydenport, NY 15251', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(7, '379558066531754987', 'Maegan Christiansen', 2, 'dwight.jacobi@example.com', '1-678-568-3605', '758 Wisoky Loop\nCeliaside, CA 24922-6583', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(8, '411821455763068807', 'Earnestine Harvey Jr.', 1, 'brakus.billie@example.com', '+1-320-796-9563', '6339 Sylvester Circles Suite 738\nNorth Sasha, WA 32815-9789', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(9, '288146222832307906', 'Dr. Javier Trantow', 1, 'dickinson.jayce@example.com', '1-347-364-7825', '9670 Kilback Summit Suite 854\nMacymouth, ID 36332', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(10, '155163800577468908', 'Alexandrea Wiegand III', 2, 'imani.tremblay@example.org', '1-541-976-7959', '8933 Bradley Neck Suite 676\nNorth Sigurd, MS 84127', '2022-07-03 21:41:20', '2022-07-03 21:41:20');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `nip`, `nama_guru`, `no_tlp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '123456789201', 'Hendrison hhh', '082324252627', 'jl.Merpati', NULL, '2022-12-24 23:14:34'),
(2, '123456789101', 'Heni Stoberi', '089091929394', 'jl.Siak', NULL, NULL),
(4, '123456789107', 'Jamal', '09876455', 'ewwe', '2022-12-25 05:04:05', '2022-12-25 05:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(2, 'Akuntansi', '2022-07-03 21:41:20', '2022-07-03 21:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Web Programing', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(2, 'Networking', '2022-07-03 21:41:20', '2022-07-03 21:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `jenis_kelamin`, `jurusan_id`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '1921766216', 'Prof. Stacey Corwin', 'P', 2, '738 Coty Fords\nNyasiahaven, MI 57504-0298', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(2, '5388944729', 'Skyla Parisian', 'L', 1, '9346 Cremin Pines\nSpinkahaven, NH 20231', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(3, '9291492804', 'Carrie Konopelski', 'L', 1, '8959 Sauer Flats\nNorth Donna, OH 38911', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(4, '4359727591', 'Mr. Newton Ondricka Sr.', 'P', 1, '55839 Cormier Harbors Suite 182\nNew Beaulah, IN 09840', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(5, '2312812281', 'Dr. Brigitte Muller', 'P', 2, '7448 Maynard Lock\nRuntemouth, MA 60000', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(6, '0835572714', 'Esta Gulgowski', 'L', 1, '70842 Schmeler Valleys Suite 571\nFriesenland, TX 45303-9888', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(7, '9356712314', 'Miss Caterina Champlin Jr.', 'P', 2, '882 Barrows Pike\nNew Roxane, WV 21690-4476', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(8, '1595064407', 'Enola Berge', 'L', 2, '299 Hauck Mountain Suite 379\nEast Coleman, MT 84024', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(9, '7163540163', 'Dr. Velda Orn I', 'L', 1, '9839 Watson Hollow Suite 427\nCamrontown, OH 81717-3007', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(10, '0978889420', 'Miss Fabiola Wolf IV', 'L', 2, '661 Hane Summit\nHaagtown, WA 29198-2921', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(11, '211020', 'doen', 'P', 1, 'solok', '2022-07-12 06:29:46', '2022-07-12 06:29:46');

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
(5, '2022_06_03_034111_create_mahasiswas_table', 1),
(6, '2022_06_03_034133_create_jurusans_table', 1),
(7, '2022_06_03_070332_create_dosens_table', 1),
(8, '2022_06_29_133554_create_beritas_table', 1),
(9, '2022_06_29_133935_create_kategoris_table', 1),
(10, '2022_12_23_110641_create_siswas_table', 2),
(11, '2022_12_23_110949_create_gurus_table', 3),
(12, '2022_12_23_111726_create_gurus_table', 4),
(13, '2022_12_24_065519_create_admins_table', 5);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nisn` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nisn`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `kelas`, `alamat`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(1, '12345678', 'sharul ramadhan', 'laki-laki', '2009-02-23', '11 IPA 1', 'jl.Haru', '89', '2022-12-23 06:54:37', '2022-12-23 06:58:40'),
(2, '12345679', 'Dian Oktovianus maniani', 'Perempuan', '2009-07-15', '11 IPA 3', 'Jl.Adipati Dolken', '87', NULL, NULL),
(3, '12345677', 'Dafa Tukimin', 'Laki-Laki', '2008-12-19', '12 IPA 1', 'Pauh', '78', NULL, NULL),
(4, '12345671', 'dama rembo', 'laki-laki', '2009-03-04', '11 IPA 1', 'jl.Lingkar lingkar', '78', '2022-12-25 05:58:54', '2022-12-25 05:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Helga VonRueden', 'corbin43@example.org', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jmW9cTKuRNLxMpS1TWEWM6EgnDCkvH1uJT5xo0WJobvaovmtQNQQqIhJf5ZX', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(2, 'guru', 'Hendrison', 'guru1@example.net', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7CFmZVmD791hIHt113GKVsP7M9bOLDFup2lS5la5onHRdjeeqQTpexNM3N20', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(3, 'siswa', 'jamal', 'siswa1@example.net', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nNkKwBfn9Tw5CyDfEWlshn6GYtVn1q4x5s6JHyO2PU3f5A1pQ7kn6YSLP6jJ', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(4, NULL, 'Kylee Gerlach', 'herzog.sammy@example.net', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sQhYGHzmcV', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(5, NULL, 'Amalia Christiansen', 'arely.lehner@example.com', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mUjgdWgGAg', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(6, NULL, 'Zachary Herman', 'art.christiansen@example.org', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Bds3ZduVQm', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(7, NULL, 'Janis Jaskolski', 'isabell29@example.com', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ytvmRlKwgU', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(8, NULL, 'Madie Howe', 'ryan.bart@example.com', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zbzElo8ODk', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(9, NULL, 'Ellen Quitzon', 'aliza87@example.org', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9ap6XBFELW', '2022-07-03 21:41:20', '2022-07-03 21:41:20'),
(10, NULL, 'Jarrod Greenfelder', 'xmedhurst@example.com', '2022-07-03 21:41:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ksHYumKRs8', '2022-07-03 21:41:20', '2022-07-03 21:41:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_nip_unique` (`nip`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_nip_unique` (`nip`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurusans_nama_unique` (`nama`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
