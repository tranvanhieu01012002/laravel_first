-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 05:08 AM
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
(1, 'Facere fuga et quis doloremque quibusdam numquam. Et est neque ea temporibus. Totam quidem molestiae reiciendis quis.', 'Orval Ankunding', 9, '0.jpg'),
(2, 'Assumenda voluptas error voluptatum totam expedita libero voluptatem vel. Voluptatem totam similique quo accusantium non eligendi. Excepturi libero maiores exercitationem nesciunt repellat.', 'Ms. Maudie Oberbrunner', 2, '4.jpg'),
(3, 'Sit fuga non reiciendis architecto aspernatur a accusantium. Veniam temporibus animi officia ut. Sapiente est qui ex quia excepturi tempore.', 'Mr. Carson Schumm', 4, '4.jpg'),
(4, 'Et deleniti reiciendis necessitatibus dicta blanditiis soluta quas amet. In inventore quae amet corporis. Voluptatibus fuga sed officiis et eum suscipit quo. Dolorem sit repellendus et et deserunt odio.', 'Josefa Murphy', 1, '2.jpg'),
(5, 'Et ut consectetur consequatur cumque fugiat illum odit. Atque ea impedit voluptates ipsum. Et nostrum distinctio sed voluptatibus quo.', 'Mustafa Reichert III', 7, '4.jpg'),
(6, 'Eaque ipsum sunt quia molestias minus. In id sunt sunt. Dicta aut omnis voluptas voluptatem non temporibus rem.', 'Yessenia Beahan Jr.', 8, '0.jpg'),
(7, 'Quo occaecati qui non repellat sit. Autem similique est est perspiciatis. Aperiam et minus voluptates adipisci aut et quos.', 'Hershel Welch', 7, '2.jpg'),
(8, 'Magni nobis similique culpa natus non accusantium. Et sit alias et sunt animi excepturi. Eaque voluptates nisi doloremque et aut repudiandae et.', 'Emmet Mitchell', 8, '3.jpg'),
(9, 'Aperiam molestias ut doloribus dignissimos. Optio aperiam esse quis voluptatem. Voluptas autem perspiciatis non ex aut. Temporibus non nulla repellendus mollitia. Est tempore dolores dolore dicta repellat enim aperiam.', 'Dusty Weber PhD', 4, '0.jpg'),
(10, 'Qui deserunt error doloribus qui et sed. Nobis vero et aut et. Illo dolore non et iusto id iusto. Quidem est iure atque voluptatum ut id quis.', 'Kira Schimmel', 2, '1.jpg'),
(11, 'Ducimus molestiae a accusamus exercitationem. Pariatur ea dignissimos veritatis ut dolor cupiditate aliquam. Alias quia alias ipsum quod omnis et.', 'Kaden Wiegand', 5, '2.jpg'),
(12, 'Quia iste velit ad quos nemo dolor qui qui. Beatae debitis expedita aspernatur aspernatur aut. Blanditiis dolor corporis debitis aut doloribus et. Voluptatem ipsum atque repellendus et.', 'Presley Nikolaus', 1, '3.jpg'),
(13, 'Eligendi aut quis nostrum quis eaque a. Quisquam ullam id quia eligendi veritatis magni accusantium. Soluta autem est aut necessitatibus dolor aperiam et.', 'Trevor Doyle', 5, '3.jpg'),
(14, 'Inventore officia reprehenderit molestias est officia cumque qui. Sint optio nesciunt voluptate dolor. Vel fuga soluta ut consequuntur.', 'Prof. Jeffery Mraz', 4, '2.jpg'),
(15, 'Esse facilis officia possimus ut optio. Ipsa voluptas quo ut voluptas fuga facilis. Sequi molestiae libero ut nisi consequatur aut. Similique ex est cupiditate quaerat sed perferendis quae.', 'Ms. Arlene Bailey', 10, '0.jpg'),
(16, 'Molestiae et ipsum error officia. Laborum aut autem omnis et dolor. Voluptatem perferendis qui et voluptates beatae voluptas dolore.', 'Izabella Osinski', 6, '1.jpg'),
(17, 'Exercitationem veritatis perspiciatis ut ipsam eos error dolores. Assumenda eius at officiis eos mollitia id. Voluptatem nemo veniam atque consequatur tempora vel ratione. Et laudantium rerum repellendus nihil non.', 'Mr. Khalil Moen', 9, '4.jpg'),
(18, 'Veniam repellat suscipit iste sed ullam quasi. Ea cum maiores temporibus illo maiores quaerat blanditiis. Dolorum eligendi suscipit nostrum quidem ipsam.', 'Frederick Wyman', 9, '0.jpg'),
(19, 'Et doloremque dolore nesciunt et perspiciatis vero est. Aut qui inventore et. Ut dolorum excepturi dignissimos et voluptatem quia possimus. Quis reprehenderit blanditiis commodi. Quo non rerum rerum et magni.', 'Dr. Lucie Haag', 7, '0.jpg'),
(20, 'Laborum ipsum ipsa non deserunt. Et sint dicta voluptatum quis a voluptatum eum. Et et quod itaque perspiciatis voluptas asperiores cum. Laudantium quam accusantium qui et.', 'Meda Koelpin', 2, '2.jpg'),
(21, '4444444', 'alo alo', 4, '1656486230_bo-anh-girl-xinh-cap-2.jpg'),
(22, '4444444', 'alo alo', 4, '1656486243_bo-anh-girl-xinh-cap-2.jpg');

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
(19, '1_2022_06_23_100757_create_producers_table', 1),
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2022_06_06_025412_create_cars_table', 1),
(25, '2022_06_22_024211_create_posts_table', 1);

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
(1, 'Nolan-Shields', 'Voluptatibus qui neque ea nam. Temporibus quisquam qui eos perferendis. Ut hic ipsam atque et illum quia nisi.'),
(2, 'Little LLC', 'Dolorum quibusdam qui qui delectus reiciendis. Libero et in explicabo reiciendis eaque. Minus molestias dolores commodi repudiandae quisquam fugiat.'),
(3, 'Nader and Sons', 'Aut quo est voluptas excepturi. Molestiae quo qui ea qui. Voluptas tempora minima quod hic consequatur. Maxime omnis impedit qui tenetur voluptates consectetur.'),
(4, 'Leuschke, Balistreri and Larson', 'Quae veniam tempore assumenda excepturi. Perferendis cumque magnam asperiores nam veniam quia temporibus et. Earum blanditiis dolores qui ut eveniet ipsum. Culpa voluptate at voluptates aperiam maiores et provident.'),
(5, 'Beatty-Gulgowski', 'Amet consequuntur deserunt hic et. Qui ab tempora perspiciatis dolore. Nemo quam dolorem nulla esse asperiores. Quia voluptatum est ab assumenda inventore aut accusantium.'),
(6, 'Haley Inc', 'Ea numquam quis odit eos id velit. Sint eum magnam ad eos rem voluptas id asperiores. Debitis eos perspiciatis doloremque tempora necessitatibus. Impedit illo quidem illum exercitationem natus animi in.'),
(7, 'Robel Ltd', 'Similique nulla consectetur doloremque. Molestiae culpa similique ut enim. Eligendi omnis veniam qui mollitia doloribus. Quibusdam id et voluptate est ipsum.'),
(8, 'Koepp Group', 'Dolorem ipsum consequatur fugiat rerum. At enim sunt vel quisquam velit. Architecto omnis doloremque eos rerum.'),
(9, 'Beer-Bradtke', 'Inventore modi modi sit minima. Odit molestias est porro molestiae. Iusto in animi quis debitis quibusdam vel. Distinctio corporis quam dicta optio ea quam.'),
(10, 'Keebler, Cremin and Von', 'Tempore at optio nostrum incidunt repudiandae nesciunt non. Rerum qui fuga sed vero hic occaecati. Beatae assumenda ipsum laudantium est maxime. Reprehenderit cum nobis aliquid molestiae aut ut quae.');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
