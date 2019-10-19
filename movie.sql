-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 05:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `movie_id`, `content`, `created_at`, `updated_at`) VALUES
(15, 9, 'nice', '2019-10-19 03:14:18', '2019-10-19 03:14:18'),
(16, 9, 'good', '2019-10-19 03:15:58', '2019-10-19 03:15:58'),
(17, 9, 'asd', '2019-10-19 03:18:13', '2019-10-19 03:18:13'),
(18, 9, 'asdasdas', '2019-10-19 03:19:34', '2019-10-19 03:19:34'),
(19, 9, 'nice vi', '2019-10-19 03:22:48', '2019-10-19 03:22:48'),
(20, 9, 'nice film', '2019-10-19 03:23:19', '2019-10-19 03:23:19'),
(21, 9, 'nice film', '2019-10-19 03:23:55', '2019-10-19 03:23:55'),
(22, 9, 'asd', '2019-10-19 03:24:35', '2019-10-19 03:24:35'),
(23, 9, 'asd', '2019-10-19 03:25:22', '2019-10-19 03:25:22'),
(24, 9, 'asdasd', '2019-10-19 03:27:24', '2019-10-19 03:27:24'),
(25, 9, 'asdasdasd', '2019-10-19 03:27:35', '2019-10-19 03:27:35'),
(26, 9, 'asdasdasdasdas', '2019-10-19 03:27:43', '2019-10-19 03:27:43'),
(27, 9, 'asdfasd', '2019-10-19 03:28:37', '2019-10-19 03:28:37'),
(28, 9, 'asdf', '2019-10-19 03:28:44', '2019-10-19 03:28:44'),
(30, 1, 'good', '2019-10-19 05:57:37', '2019-10-19 05:57:37'),
(31, 1, 'nice', '2019-10-19 05:58:45', '2019-10-19 05:58:45'),
(32, 2, 'bad film', '2019-10-19 06:00:21', '2019-10-19 06:00:21');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2019_10_18_163204_create_movie_table', 1),
(18, '2019_10_18_163225_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `synopsis`, `release`, `rating`, `image`, `genre`, `director`, `created_at`, `updated_at`) VALUES
(1, 'Iure quis sit quibusdam ex molestiae iusto.', 'Est ut minus dolorem sit. Deleniti alias quis nam dolore eaque culpa. Esse ut sint tenetur.', '1997-01-11', '4', '/image/1571468535_7.jpg', 'fantasy', 'Francesco Hahn', '2019-10-18 23:32:42', '2019-10-19 05:58:46'),
(2, 'Assumenda sit facere et odio omnis at.', 'Enim quia veritatis libero eum incidunt eaque. Facilis vero odit quod quod et reiciendis aliquid. Asperiores qui eum ducimus.', '2008-02-14', '2', '/image/1571468454_1.jpg', 'comedy', 'Godfrey Hayes', '2019-10-18 23:32:42', '2019-10-19 06:00:21'),
(3, 'Beatae perferendis cum voluptate.', 'Minus iusto illo eos eligendi. Illum ut ea aliquid et. Iste est repudiandae et veniam excepturi autem.', '2012-08-16', '0', '/image/1571468469_2.jpg', 'adventure', 'Lelah Olson', '2019-10-18 23:32:42', '2019-10-19 03:35:26'),
(5, 'Cupiditate vitae quos et non.', 'Nobis alias error accusantium vel. Voluptatum aut nesciunt nostrum. Iusto accusamus voluptatem dolorem odio voluptatem incidunt quos. Et incidunt maiores et.', '2005-01-23', '0', '/image/1571468521_5.jpg', 'comedy', 'Vernice Greenfelder', '2019-10-18 23:32:42', '2019-10-19 00:02:01'),
(6, 'Consequatur nobis hic est impedit quis dolor quam.', 'Illum debitis culpa placeat voluptatibus iusto et sunt. Enim voluptatem nisi adipisci totam consequatur eos. Veritatis est consequuntur neque nihil velit nobis.', '1992-08-24', '0', '/image/1571468494_4.jpg', 'science fiction', 'Macey Muller', '2019-10-18 23:32:42', '2019-10-19 00:01:34'),
(7, 'Optio a quae aliquam enim veniam non sed.', 'Molestiae dolorem ut est et velit tenetur voluptas. Enim et facilis veritatis et. Doloribus aut esse ipsa in sint assumenda quos.', '1971-10-17', '0', '/image/1571468552_American-Apparel-Kids-Baby-Rib-Long-Sleeve-TShirt-Female-Blue.jpeg', 'animation', 'Dr. Coty Tremblay', '2019-10-18 23:32:42', '2019-10-19 00:02:33'),
(8, 'Mollitia mollitia autem vel voluptates.', 'Minus facilis dolores voluptatem provident. Magnam quo eos nulla vitae architecto illo. Dolor fugit id voluptatum atque. Officiis reprehenderit at adipisci laboriosam fugit nisi et.', '1984-02-01', '0', '/image/1571468542_9.jpg', 'science fiction', 'Jacklyn Skiles I', '2019-10-18 23:32:42', '2019-10-19 00:02:22'),
(9, 'Delectus eos quisquam aperiam nisi qui nihil aut voluptas.', 'Esse est id natus in. Perferendis ipsum earum sed maiores aspernatur exercitationem. Deserunt non vitae non quis adipisci ea explicabo.', '2015-05-25', '4.1793212890625', '/image/1571468529_6.jpg', 'adventure', 'Mr. Kennedi Jacobi', '2019-10-18 23:32:42', '2019-10-19 03:28:44'),
(10, 'Consequatur dolorem qui aut aut accusantium autem.', 'Quis maiores eum ut similique itaque assumenda. Sunt ipsa dignissimos voluptatem sapiente. Illo sit dignissimos saepe nesciunt nisi.', '1978-04-19', '0', '/image/1571468480_3.jpg', 'fantasy', 'Dr. Sadie Toy Jr.', '2019-10-18 23:32:42', '2019-10-19 00:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$3zdUp2Z5eWPaZ0Rm1SH2Cu9HfudRP9PcQGSgy5vTPPWqvDMZDSe2a', 'JPk5T6HEabNYRjCzu3MEYRZtUY5UKDocsmpeRe2lNsqgd3gp982VTrbU82Wc', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
