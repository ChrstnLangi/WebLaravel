-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 05:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dents_talk`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutdesks`
--

CREATE TABLE `aboutdesks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutjudul_id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutdesks`
--

INSERT INTO `aboutdesks` (`id`, `aboutjudul_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gabung Sekarang!', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 2, 'Halo teman-teman mahasiswa kedokteran gigi maupun non kedokteran gigi yang ingin mengembangkan minat dan kreativitas kalian, yuk bergabung bersama DENTS.TALK melalui program internship kami yaitu “DentsArmy”. Disini kamu bisa memilih departemen yang sesuai dengan keminatan kamu loh! Yuk disimak departemen apa saja yang bisa kamu pilih.', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 6, 'Lorem ipsum', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe totam commodi velit dolore deserunt neque, asperiores culpa, excepturi exercitationem accusamus eveniet dolorum? Praesentium iusto natus quis dolore illum quas laborum.', '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `aboutgambars`
--

CREATE TABLE `aboutgambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutjudul_id` bigint(20) UNSIGNED NOT NULL,
  `background` tinyint(1) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutreview_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutgambars`
--

INSERT INTO `aboutgambars` (`id`, `aboutjudul_id`, `background`, `img`, `aboutreview_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '/Assets/20220728_193418_0000.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 3, 1, '/Assets/20220728_193418_0001.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 3, 0, '/Assets/dummy_1.png', 1, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 3, 0, '/Assets/dummy_2.png', 2, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(5, 3, 0, '/Assets/dummy_3.png', 3, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(6, 4, 0, '/Assets/20220728_193418_0000.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(7, 5, 0, '/Assets/dummy_1.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(8, 5, 0, '/Assets/dummy_2.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(9, 5, 0, '/Assets/dummy_3.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(10, 5, 0, '/Assets/dummy_4.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(11, 5, 0, '/Assets/dummy_4.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(12, 5, 0, '/Assets/dummy_3.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(13, 5, 0, '/Assets/dummy_2.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(14, 5, 0, '/Assets/dummy_1.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(15, 6, 1, '/Assets/20220728_193418_0002.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(16, 6, 0, '/Assets/dummy_1.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(17, 6, 0, '/Assets/dummy_2.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(18, 6, 0, '/Assets/dummy_3.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(19, 6, 0, '/Assets/dummy_4.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `aboutjuduls`
--

CREATE TABLE `aboutjuduls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `judul` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutjuduls`
--

INSERT INTO `aboutjuduls` (`id`, `about_id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kembangkan Minat dan Kreativitas Kamu bersama DENTS.TALK Internship Program <br>“DentsArmy”!', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 1, 'Salurkan Ketertarikanmu', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 1, 'Dengar Apa Yang Mereka Katakan Saat Menjadi DentsArmy', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 1, 'Magang Dimanapun Kamu Berada Secara Online!', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(5, 1, 'Explore Yourself at DENTS.TALK!', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(6, 1, 'Apa Saja Dapartemen Yang Dapat Kamu Pilih', '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `aboutreviews`
--

CREATE TABLE `aboutreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutreviews`
--

INSERT INTO `aboutreviews` (`id`, `text`, `nama`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 'Lorem ipsum', 'dolor sit', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 'Dolor sit', 'Lorem ipsum', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 'Dolor sit', 'Lorem ipsum', '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Internship Program', 'internship-program', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Company Profile', 'company-profile', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Company Staff', 'company-staff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `desk`, `img1`, `img2`, `published_at`, `created_at`, `updated_at`) VALUES
(1, ' ', ' ', ' ', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` tinyint(1) NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambars`
--

INSERT INTO `gambars` (`id`, `img`, `background`, `page_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'image/AKyolIhHXFHvAOUizwW5a1M5WsW10dVZtsyneCf1.png', 1, 1, NULL, '2022-08-02 11:45:50', '2022-09-30 13:17:05'),
(2, 'image/g93oB2vYHvzW7E781dDt2bGnOuiaGFl90Wpmcibj.png', 0, 1, NULL, '2022-08-02 11:45:50', '2022-09-30 13:21:15'),
(3, 'image/wl1oSfBjDZBQxNVySNGiSZYXpMyJfLAdc4NQfZee.png', 1, 1, NULL, '2022-08-02 11:45:50', '2022-09-30 13:21:15'),
(4, 'image/WJGEEKiJlB4LQLULkePnHWVmqMNjt483PJUQBToc.png', 0, 1, NULL, '2022-08-02 11:45:50', '2022-09-30 13:21:15'),
(5, '/Assets/20220728_194108_0000.png', 1, 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(6, '/Assets/website-market-1.png', 0, 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(7, '/Assets/20220728_193433_0001.png', 1, 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(8, '/Assets/website-market-1.png', 0, 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(9, '/Assets/20220728_193407_0000.png', 1, 3, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `judul`, `desk`, `img`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_1.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_2.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_3.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `hireds`
--

CREATE TABLE `hireds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hireds`
--

INSERT INTO `hireds` (`id`, `name`, `img`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Dents.Talk', 'Assets/13_20220719_015826_0012.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'PDGI', 'Assets/8_20220719_015826_0007.png', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_hitam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_putih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `judul_hitam`, `judul_putih`, `desk`, `button`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Boots Your Knowledge', 'In Dentistry', 'Belajar langsung dari spesialis-spesialis terkemuka di bidangnya bersama DENTS.TALK Indonesia. Jelajahi bidang spesialisis yang manarik perhatian kamu. Hadir untuk mahasiswa dan dokter gigi di seluruh Indonesia', 'Explore Our Programs', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joins`
--

INSERT INTO `joins` (`id`, `judul`, `desk`, `img`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Dolor sit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Amet consectetur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 'Adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(5, 'Quas minus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

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
(4, '2022_07_29_040504_create_hireds_table', 1),
(5, '2022_07_29_040554_create_joins_table', 1),
(6, '2022_07_29_040646_create_programs_table', 1),
(7, '2022_07_29_040839_create_helps_table', 1),
(8, '2022_07_29_040938_create_reviews_table', 1),
(9, '2022_07_29_041012_create_options_table', 1),
(10, '2022_07_30_055539_create_articles_table', 1),
(11, '2022_07_30_085641_create_homepages_table', 1),
(12, '2022_07_30_124756_create_aboutgambars_table', 1),
(13, '2022_07_30_124848_create_aboutjuduls_table', 1),
(14, '2022_07_30_124930_create_aboutdesks_table', 1),
(15, '2022_07_30_125011_create_aboutreviews_table', 1),
(16, '2022_07_30_125024_create_abouts_table', 1),
(17, '2022_08_02_165857_create_webs_table', 1),
(18, '2022_08_02_165959_create_pages_table', 1),
(19, '2022_08_02_170012_create_texts_table', 1),
(20, '2022_08_02_170026_create_gambars_table', 1),
(21, '2022_08_02_170145_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `judul`, `desk`, `img`, `note`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_1.png', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_2.png', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_3.png', ' ', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `our_speakers`
--

CREATE TABLE `our_speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `speaker_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_speakers`
--

INSERT INTO `our_speakers` (`id`, `nama`, `text`, `img`, `speaker_id`, `created_at`, `updated_at`) VALUES
(4, 'new_test', '<div>newasa<br><strong><em>dwafawf<br></em></strong>dawdawd</div>', 'image/7utcO1gkigkbxSeZRa9U8kSNuNatof3Rhxdob7EL.png', 1, '2022-09-30 16:21:27', '2022-09-30 18:46:56'),
(5, '231', '<div><strong>testing<br></strong><em>fafwafawa</em><strong><br></strong><strong><em>fawfawfwa</em></strong></div>', 'image/FieVf2iPdK8jUhTEY1QAR8M9AGPGvKAHhixYyOr1.png', 1, '2022-09-30 16:27:31', '2022-09-30 16:34:57'),
(6, 'alpha', '<div>Alpha<br><strong>Beta</strong><br><em>Charlie</em></div>', 'image/7efSgQh8IfZa8RC0SQ72dPLrCdhLz4EiUfQZMTM9.png', 2, '2022-09-30 16:35:39', '2022-09-30 16:35:51'),
(7, 'Beta', '<div>123<br><em>345</em><br><strong>567</strong></div>', 'image/b1ItwMh51F0RF9geMHINvYPkFzKjp8LmbGuD1ci9.png', 2, '2022-09-30 16:36:19', '2022-09-30 16:36:19'),
(8, 'One', '<div><em>One<br></em>Two<br><strong>Three</strong></div>', 'image/ak91sTRfZGnWwKSTiMZb4XQcqYwBcEt99oxBQcmj.png', 3, '2022-09-30 16:36:57', '2022-09-30 16:36:57'),
(9, 'Two', '<div><em>One</em><br><strong>Two</strong><br><em>Four</em></div>', 'image/Gl7C4frRH3hmzqYMlfgHGZSuMRGRMilodt3Wkfax.png', 3, '2022-09-30 16:38:53', '2022-09-30 16:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `nama`, `role`, `img`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'Nathan', 'Chief Marketing Officer', 'image/nfLuh8EzOeplh6cdgkZP53t6Bp4LpeklgXOKavcl.png', 0, NULL, '2022-09-30 17:14:41'),
(2, 'David Octavian', 'Chief Excecutive Officer', 'image/2D77buKOz8nHC3b9vNRD85KLwm5SLsKkVJ9SZVg8.png', 0, NULL, '2022-09-30 16:47:29'),
(3, 'Grace Maria', 'Chief Operation Officer', 'image/3DwINtQkTwpJAW1TuC9X9FayeNyoNboFaGu4mZJY.png', 0, NULL, '2022-09-30 16:47:46'),
(4, 'Devani', 'Strategic Advisor', 'image/Ohx3s1qcTsjKWoXsTDSSQ1Oy775FqdPwA7Q5D0Iz.png', 0, NULL, '2022-09-30 16:47:59'),
(5, 'Devani', 'Secretary', 'image/jrAgT2NfiOHQr9Z8jR9DXgG3UZMxtuuHvaD15gYN.png', 0, NULL, '2022-09-30 16:56:32'),
(6, 'XXX', 'Secretary Assistant', 'image/yrPnNbVlbRtapEvnHY2ac49tqiMwY5Vjpj0KfHJA.png', 0, NULL, '2022-09-30 16:48:09'),
(7, 'XXX', 'Head of Creative Content', 'image/D5EbiWZHS62lOkpYZ75bDKNmGo4THId05uCkWPcA.png', 1, NULL, '2022-09-30 16:48:26'),
(8, 'XXX', 'Vice Head of Creative Content', 'image/nA28B56Mj6Kd9ZVvpstbuQzHBSxZsbzkdgxpZGi7.png', 1, NULL, '2022-09-30 16:48:39'),
(9, 'XXX', 'Head of Creative Design', 'image/Y9qdCcUpGWJ9bggl1RxRiPwHeLdhZelDvcmubgpJ.png', 2, NULL, '2022-09-30 16:48:48'),
(10, 'XXX', 'Vice Head of Creative Design', 'image/qbDuE7kAD6Wfk5HclEXQzL30jpKhiRDgwoVtcSsI.png', 2, NULL, '2022-09-30 16:48:57'),
(11, 'XXX', 'Head of Public Relation', 'image/ckg0uHyRlGoDaWxD5z4v8noa62bD7kcl77gEkWjK.png', 3, NULL, '2022-09-30 16:49:04'),
(12, 'XXX', 'Vice Head of Public Relation', 'image/h3KHMEFL7r8Cm8j2wMAPHmPdRpkxlZAkbW1r3a36.png', 3, NULL, '2022-09-30 16:49:14'),
(13, 'sfafdwad', 'member2', 'image/jKRVdk4NtK1wDsnIGUYpZcR2onGGDZy9nKhhJJPN.png', 1, '2022-09-30 15:16:44', '2022-09-30 17:06:16'),
(14, 'New', 'member1', 'image/BodOk22JWwmHXDXVe6NrTn7IPMHw3MqvYuW3Kt8v.png', 2, '2022-09-30 17:21:45', '2022-09-30 17:21:45'),
(15, 'test', 'member3', 'image/4At0XiM6Lxs92J0K57uNtyF1WEawV1WLL6pCRQAb.png', 3, '2022-09-30 17:22:00', '2022-09-30 17:22:00'),
(16, 'newtest', 'member', 'image/zjs4kC9wEyHEaS4EFLvLWmT7XkyIvzuFiTLs2ftN.png', 2, '2022-09-30 18:50:34', '2022-09-30 18:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_id` bigint(20) UNSIGNED NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `judul`, `slug`, `web_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'DentsLearn HandsOn', 'dentslearn-handson', 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'DentsLearn Webinar', 'dentslearn-webinar', 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'DentsPractice', 'dentspractice', 2, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 'Internship Program', 'internship-program', 4, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(5, 'Company Profile', 'company-profile', 4, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(6, 'Our Speaker', 'our-speaker', 4, NULL, NULL, NULL),
(7, 'Our Team', 'our-team', 4, NULL, NULL, NULL);

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `judul`, `desk`, `img`, `link`, `mini_link`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'DentsLearn Hands On', 'Merupakan suatu program yang dapat meningkatkan skill keterampilan dokter gigi dalam melakukan tindakan praktik dengan pemberian materi serta praktik langsung yang dibimbing oleh pemateri yang memiliki kompetensi.', 'Assets/Copy of vector-8.png', 'Program/dentslearn-handson', 'mini_program_1', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'DentsLearn Webinar', 'Merupakan seminar mengenai topik kedokteran gigi yang mendatangkan pemateri berkompeten di bidangnya serta bekerja sama dengan PDGI maupun organisasi terkait.', 'Assets/Copy of vector-7.png', 'Program/dentslearn-webinar', 'mini_program_2', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'DentsPractice', '<div\r\nstyle = \"\r\ntext-align: center;\r\npadding: 20% 0;\r\nfont-size: 38.7128px;\r\ntext-transform: uppercase;\r\ncolor: white;\r\nline-height: 45px;\r\n\">\r\nComing soon\r\n</div>', 'Assets/Copy of vector-2.png', 'Program/dentspractice', 'mini_program_3', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `judul`, `desk`, `img`, `role`, `link`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_1.png', 'I', 'Lorem_ipsum_I', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_2.png', 'II', 'Lorem_ipsum_II', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_3.png', 'III', 'Lorem_ipsum_III', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_4.png', 'IV', 'Lorem_ipsum_IV', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(5, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_4.png', 'IV', 'Lorem_ipsum_IV', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(6, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_3.png', 'III', 'Lorem_ipsum_III', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(7, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_2.png', 'II', 'Lorem_ipsum_II', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(8, 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minus facilis corrupti voluptate necessitatibus dicta eum esse nemo laudantium sit quae fuga est, alias aliquam numquam quia ullam neque tempore!.', 'Assets/dummy_1.png', 'I', 'Lorem_ipsum_I', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `nama`) VALUES
(1, 'Creative Content Dapartment'),
(2, 'Nucleus'),
(3, 'DentsArmy Upgrading Class');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `nama`) VALUES
(1, 'Creative Content Dapartment'),
(2, 'Creative Design Dapartment'),
(3, 'Public Relation Dapartment');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `gambar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text`, `page_id`, `gambar_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, '<div>DentsLearn:</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(2, '<div>Hands On</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(3, '<div>Dapatkan ilmu-ilmu baru seputar kedokteran gigi dan kembangkan skill kedokteran gigimu di DentsLearn: Hands On!&nbsp;<br>Hands On juga sudah terverifikasi PDGI! Jadi, kamu akan dapat poin SKP juga.</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(4, '<div>Lihat Hands On Bulan Ini!</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(5, '<div>Webinar Bulan Ini</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(6, '<div>DentsLearn: HandsOn 17<br><strong><em>Operculectomy Using Conventional Technic</em></strong></div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(7, '<div>DentsLearn: Hands On Sebelumnya</div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(8, '<div>DentsLearn: HandsOn 13<br><strong><em>Simple Dental Wire</em></strong></div>', 1, 0, NULL, '2022-08-02 11:45:50', '2022-09-30 18:51:51'),
(9, 'DentsLearn:', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(10, 'Webinar', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(11, 'Ketahui sudut pandang dari narasumber yang berkompeten dalam menunjang karir dan pendidikan di kedokteran gigi.<br>Webinar juga sudah terverifikasi PDGI! Jadi, kamu akan dapat poin SKP juga.', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(12, 'Webinar Bulan Ini', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(13, 'Lihat Hands On Bulan Ini!', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(14, 'DentsLearn: Webinar 17<br>Operculectomy: When We Need That Procedure?', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(15, 'DentsLearn: Webinar Sebelumnya', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(16, 'DentsLearn: Webinar 13<br>Penatalaksanaan Trauma Dentoalveolar pada prakter sehari hari', 2, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(17, 'DentsPractice', 3, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(18, 'COMING SOON!', 3, 0, NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(19, 'Kembangkan Minat dan Kreativitas Kamu bersama DENTS.TALK Internship Program <br>“DentsArmy”!', 4, 0, NULL, NULL, NULL),
(20, 'Gabung Sekarang!', 4, 0, NULL, NULL, NULL),
(21, 'Salurkan Ketertarikanmu', 4, 0, NULL, NULL, NULL),
(22, 'Halo teman-teman mahasiswa kedokteran gigi maupun non kedokteran gigi yang ingin mengembangkan minat dan kreativitas kalian, yuk bergabung bersama DENTS.TALK melalui program internship kami yaitu “DentsArmy”. Disini kamu bisa memilih departemen yang sesuai dengan keminatan kamu loh! Yuk disimak departemen apa saja yang bisa kamu pilih.', 4, 0, NULL, NULL, NULL),
(23, 'Dengar Apa Yang Mereka Katakan Saat Menjadi DentsArmy', 4, 0, NULL, NULL, NULL),
(24, 'Magang Dimanapun Kamu Berada Secara Online!', 4, 0, NULL, NULL, NULL),
(25, 'Explore Yourself at DENTS.TALK!', 4, 0, NULL, NULL, NULL),
(26, 'Apa Saja Dapartemen Yang Dapat Kamu Pilih', 4, 0, NULL, NULL, NULL),
(27, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 4, 12, NULL, NULL, NULL),
(28, 'Lorem ipsum', 4, 12, NULL, NULL, NULL),
(29, 'Dolor sit', 4, 12, NULL, NULL, NULL),
(30, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 4, 13, NULL, NULL, NULL),
(31, 'Dolor sit', 4, 13, NULL, NULL, NULL),
(32, 'Lorem ipsum', 4, 13, NULL, NULL, NULL),
(33, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam vero at reiciendis labore cupiditate quos beatae voluptatem, quae, fugit autem sit eveniet, et placeat a unde obcaecati ipsum ex.', 4, 14, NULL, NULL, NULL),
(34, 'Amet consectetur', 4, 14, NULL, NULL, NULL),
(35, 'Dolor sit', 4, 14, NULL, NULL, NULL),
(36, 'Lorem ipsum.', 4, 19, NULL, NULL, NULL),
(37, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 4, 19, NULL, NULL, NULL),
(38, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo voluptates minima repellat nostrum odit suscipit quibusdam consectetur temporibus. Illum sunt delectus vitae quis, earum laborum placeat nobis vel corporis.', 4, 19, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `NPA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `umur`, `NPA`, `nohp`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 0, '-', '-', 'Admin@gmail.com', NULL, '$2y$10$cSM7OFD2qr69tGfx5XDeQO8dFRglM6XOFCobmLG6yVPSuOtRfiIjO', 'Admin', NULL, '2022-08-02 11:45:50', '2022-08-02 11:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `webs`
--

CREATE TABLE `webs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webs`
--

INSERT INTO `webs` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(2, 'Program', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(3, 'Article', '2022-08-02 11:45:50', '2022-08-02 11:45:50'),
(4, 'About', '2022-08-02 11:45:50', '2022-08-02 11:45:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutdesks`
--
ALTER TABLE `aboutdesks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutgambars`
--
ALTER TABLE `aboutgambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutjuduls`
--
ALTER TABLE `aboutjuduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutreviews`
--
ALTER TABLE `aboutreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_nama_unique` (`nama`),
  ADD UNIQUE KEY `abouts_slug_unique` (`slug`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hireds`
--
ALTER TABLE `hireds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_speakers`
--
ALTER TABLE `our_speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webs`
--
ALTER TABLE `webs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutdesks`
--
ALTER TABLE `aboutdesks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutgambars`
--
ALTER TABLE `aboutgambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `aboutjuduls`
--
ALTER TABLE `aboutjuduls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aboutreviews`
--
ALTER TABLE `aboutreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hireds`
--
ALTER TABLE `hireds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_speakers`
--
ALTER TABLE `our_speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webs`
--
ALTER TABLE `webs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
