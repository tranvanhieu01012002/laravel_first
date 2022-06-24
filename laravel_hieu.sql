-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 06:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_hieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `description`, `model`, `producer_id`, `image`) VALUES
(1, 'select Nolan', 'Rahsaan Heidenreich', 1, '3.jpg'),
(2, 'Quos excepturi error molestiae rerum a sint sint. Quod dolorum fuga architecto. Ut odit quibusdam repellat natus qui soluta ut.', 'Kamron Purdy', 6, '1.jpg'),
(3, 'Odit inventore et error sequi perspiciatis impedit. Ex eum earum id et iusto. Optio quia blanditiis deserunt quo consequatur corporis omnis.', 'Broderick Eichmann', 5, '1.jpg'),
(4, 'Qui pariatur fuga animi sed eum. Magni eius est dolorem architecto ipsum aut et. Quaerat rerum minima amet ut maiores sit aut possimus.', 'Jordon Rodriguez', 3, '3.jpg'),
(5, 'Deleniti rerum mollitia labore consequatur delectus. Molestiae eum nobis consequatur hic recusandae dolore. Voluptatem inventore quo blanditiis consequatur fugit. Quod tempore quidem sequi ipsam dolorem dolorem et.', 'Ms. Elsa McCullough PhD', 9, '4.jpg'),
(6, 'Magnam eum commodi molestiae quisquam ipsa repellendus. Mollitia id autem voluptatem accusantium est quibusdam officiis. Modi et blanditiis omnis at beatae qui. Quo in sint qui.', 'Kaia Brekke Jr.', 7, '3.jpg'),
(7, 'Et id explicabo ex temporibus ut. Aut vitae quo minus vel. Corporis qui est aliquid repellat.', 'Ms. Natalia Wehner I', 4, '3.jpg'),
(8, 'Incidunt rerum consequuntur impedit voluptatem ut maiores. Accusamus aperiam omnis aut accusamus sint ab. Non debitis assumenda enim incidunt molestias aut. Quibusdam minus ut ipsum et.', 'Gustave Rogahn', 3, '4.jpg'),
(9, 'Ipsam harum ut sed necessitatibus est ea. Aut ratione reprehenderit sapiente architecto consequatur. Neque et et nesciunt magni. Laudantium unde laborum id non et fugit distinctio.', 'Miss Kristy Dickinson DVM', 5, '2.jpg'),
(10, 'In ut rerum et minus non consequatur. Nihil illo eos blanditiis quaerat dolores nemo sit. Dolorum itaque eaque est cum voluptatem impedit dolorem.', 'Loyal Koelpin', 10, '1656043048_anh-gai-xinh-1.jpg'),
(11, 'Repellat et consequatur reprehenderit. Et dolorem eaque cumque eum est praesentium. Unde corporis rerum quia tempore. Voluptatibus rem officia aliquam et aperiam repellendus voluptatem.', 'Prof. Walker Christiansen II', 3, '3.jpg'),
(12, 'Distinctio ipsam dolor tempore distinctio sit eum. Repellat suscipit sit architecto occaecati aspernatur laudantium recusandae. Quia a possimus repellat voluptatem ipsam vitae voluptas officiis. Sequi error aliquam omnis voluptas rerum.', 'Prof. Paris Rau', 5, '1.jpg'),
(13, 'Fugiat aliquid voluptas aut praesentium sint est est aspernatur. Nihil temporibus et eos qui. Commodi cumque saepe hic quos.', 'Prof. Brannon Keebler Sr.', 1, '0.jpg'),
(14, 'Nihil id consequatur quam minus incidunt vel ab. Sint ipsum debitis earum repellendus perferendis nihil. Doloribus et eveniet qui aut modi laboriosam hic. Quis quia dignissimos incidunt sed qui labore.', 'Dr. Pattie Reynolds', 8, '4.jpg'),
(15, 'Est excepturi voluptas quibusdam. Fugiat eos commodi hic facilis. Totam temporibus voluptatem dolorem ut iste modi repellat delectus.', 'Destiney Nolan', 7, '4.jpg'),
(16, 'Est quia quidem a ut quod error suscipit. Facere ut ut neque eveniet. Quasi aut adipisci architecto doloribus similique ullam occaecati.', 'Presley West', 3, '2.jpg'),
(17, 'Aut incidunt consequuntur ut est consectetur laboriosam. Voluptas aut hic est omnis enim minima architecto. Consequatur quis quas non est voluptatem quas. Deleniti suscipit consequatur quasi error.', 'Julien Parker', 9, '2.jpg'),
(18, 'Placeat sit suscipit provident aperiam itaque. Quam amet ipsa qui. Voluptas totam sed possimus voluptas magni. Inventore et asperiores qui ipsa.', 'Vern Schinner', 3, '1.jpg'),
(19, 'Consequatur consequatur perspiciatis ut rerum facere deleniti. Corporis aut officia assumenda qui. Iste et esse nesciunt vel. Consequatur ut labore et est eum omnis reiciendis.', 'Alene D\'Amore DDS', 3, '1.jpg'),
(20, 'Dolorum ea dignissimos alias atque doloremque ipsa. Et magnam facere dolores accusantium aspernatur sed. Eum autem nemo debitis aut odit.', 'Donnell Borer', 6, '1.jpg'),
(21, 'berg', 'fdsfs', 8, '1656041290_download.jpg'),
(22, 'hôm nay là thứ 5', 'model vippp', 10, '1656044169_download.jpg'),
(23, 'Murrrrr', 'xe moi ne1', 2, '1656044376_anh-gai-xinh-1.jpg');

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
(6, '2022_06_22_024211_create_posts_table', 1),
(8, '2022_06_23_100757_create_producers_table', 2),
(9, '2022_06_06_025412_create_cars_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `description`) VALUES
(1, 'Nolan, Bergstrom and Barrows', 'Tenetur natus asperiores asperiores voluptatum. Deleniti natus aperiam et velit.'),
(2, 'Murazik, Borer and Hane', 'Repellat nobis quia nesciunt atque nisi. Consequatur distinctio inventore atque et quia. Excepturi quo eum qui quisquam vel aliquid. Qui enim nihil eos et saepe ab cumque.'),
(3, 'Mayert-Ondricka', 'Cum commodi quibusdam odit ut rem. Rerum qui sint nulla reiciendis. Illum facilis impedit voluptatem omnis ut blanditiis dolorum. Id consequatur atque atque aspernatur. Esse enim quibusdam aut.'),
(4, 'Reichert, Ortiz and Cronin', 'Placeat natus in officiis dolore quia quia aut. In ipsa placeat odit perspiciatis est. Architecto voluptatem dolore a et est quae. Fugit non eaque minima.'),
(5, 'McCullough PLC', 'Aut omnis et sit aut pariatur dignissimos et. Laudantium in eos quia minus animi alias nulla.'),
(6, 'Rohan and Sons', 'Enim officiis quae dolores laboriosam dolorem qui. Facilis quam quo laudantium iste at. Recusandae praesentium assumenda qui et et modi molestias.'),
(7, 'McKenzie-Bergstrom', 'Consequatur eligendi tempore totam aut aut amet nobis. Voluptatem nulla enim aut et id. Repudiandae quisquam voluptas necessitatibus vitae quam.'),
(8, 'Kutch Inc', 'Quod quos a quas voluptatem. Eligendi eos illo quo et eum aperiam. Rerum nesciunt omnis autem id soluta molestias placeat.'),
(9, 'Hahn, Harris and Goyette', 'Doloribus expedita aperiam repellendus id quibusdam. Voluptatem iusto labore natus modi vel est. Deleniti facere natus incidunt sit hic soluta accusamus exercitationem.'),
(10, 'Gutmann Group', 'Repudiandae et velit mollitia dolores voluptatum rerum quia. Aut autem suscipit possimus sed sit dolorem. In laudantium aut quasi laboriosam enim cupiditate. Et eos molestiae incidunt eveniet qui dignissimos molestiae.'),
(11, 'Collier Ltd', 'Ea maiores officiis quos fuga soluta doloremque quisquam. Assumenda voluptatem nobis laboriosam fugiat aliquid. Maiores consequatur quo quia ipsa.'),
(12, 'Casper-Satterfield', 'Rem nobis nemo earum maxime qui et. Dolores cumque voluptatem pariatur ducimus voluptates sit. Ea maxime possimus adipisci dignissimos. Hic qui repellat possimus aliquam voluptas ut.'),
(13, 'Stiedemann-Homenick', 'Assumenda hic ut nam at vitae voluptatem. Porro amet est unde est error illo iusto. Similique voluptas repudiandae at sapiente.'),
(14, 'Bosco, Hayes and Bosco', 'Et laborum deleniti corporis. Cum officia totam voluptate eligendi occaecati. Autem numquam dolorum dolorem ea modi eius et. Sapiente et sequi soluta et exercitationem. Quia id aliquid culpa animi.');

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
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_producer_id_foreign` (`producer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `producers_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
