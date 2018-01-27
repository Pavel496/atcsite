-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2018 г., 11:15
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aucsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content_categories`
--

CREATE TABLE `content_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `content_category_content_page`
--

CREATE TABLE `content_category_content_page` (
  `content_category_id` int(10) UNSIGNED DEFAULT NULL,
  `content_page_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `content_pages`
--

CREATE TABLE `content_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_unicode_ci,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_pages`
--

INSERT INTO `content_pages` (`id`, `title`, `page_text`, `excerpt`, `featured_image`, `created_at`, `updated_at`) VALUES
(1, 'Credibly Disintermediate Client Applications With Quality Processes', '<p>Quickly conceptualize plug-and-play information through resource-leveling solutions. Interactively grow cross-media customer service through B2C paradigms. Continually monetize magnetic sources rather than leveraged outsourcing. Proactively transition just in time solutions whereas backend portals. Proactively target extensible results whereas transparent innovation. Professionally incubate extensible potentialities before end-to-end vortals. Professionally architect standards compliant resources vis-a-vis intuitive growth strategies. Distinctively procrastinate premier testing procedures...</p>\r\n', 'Sample excerpt', '1516626248-balloon.jpg', '2018-01-20 12:35:03', '2018-01-22 10:04:09'),
(2, 'Objectively Disseminate Customer Directed E-commerce', '<p>Globally orchestrate high-payoff vortals whereas an expanded array of schemas. Distinctively actualize visionary niche markets via covalent human capital. Proactively reinvent team building customer service with ethical e-markets. Professionally utilize mission-critical technology whereas competitive solutions. Completely underwhelm go forward leadership without maintainable initiatives. Objectively disseminate customer directed e-commerce with prospective partnerships. Collaboratively actualize revolutionary total linkage before orthogonal catalysts for change. Appropriately facilitate optimal meta-services whereas end-to-end solutions...</p>\r\n\r\n<p>Holisticly synthesize adaptive expertise before distinctive core competencies. Intrinsicly leverage other&#39;s compelling customer service after impactful manufactured products. Compellingly disintermediate impactful vortals without scalable networks. Conveniently monetize interdependent infrastructures through frictionless data. Energistically visualize best-of-breed niche markets before visionary synergy.</p>\r\n\r\n<p>Phosfluorescently streamline enabled architectures without enterprise-wide alignments. Appropriately synergize parallel schemas without installed base value. Energistically embrace maintainable e-tailers whereas unique processes. Uniquely foster accurate e-markets via synergistic e-business. Dynamically communicate enterprise action items before ubiquitous customer service.</p>\r\n\r\n<blockquote>\r\n<p>Professionally revolutionize business channels and interactive imperatives. Competently visualize virtual collaboration and idea-sharing after bleeding-edge testing procedures. Monotonectally implement synergistic schemas vis-a-vis fully tested metrics.</p>\r\n</blockquote>\r\n\r\n<p>Dramatically communicate goal-oriented niche markets vis-a-vis adaptive users. Objectively leverage other&#39;s dynamic methodologies whereas worldwide human capital. Uniquely leverage existing distributed mindshare and fully tested sources. Enthusiastically cultivate exceptional experiences for 2.0 systems. Intrinsicly embrace diverse channels via innovative synergy. Proactively scale multimedia based functionalities for worldwide niche markets. Proactively network alternative vortals and proactive solutions. Competently disseminate adaptive strategic theme areas vis-a-vis exceptional solutions. Authoritatively revolutionize frictionless synergy with robust intellectual capital. Dynamically actualize high-payoff users and magnetic expertise. Energistically plagiarize fully researched alignments and scalable relationships. Interactively predominate seamless infomediaries vis-a-vis pandemic results. Seamlessly deploy viral products without an expanded array of experiences. Phosfluorescently morph revolutionary partnerships after superior services. Quickly embrace front-end benefits with excellent internal or &quot;organic&quot; sources.</p>\r\n\r\n<p>Globally generate pandemic e-services after frictionless content. Rapidiously evolve dynamic strategic theme areas whereas backward-compatible networks. Synergistically communicate best-of-breed partnerships before cross functional partnerships. Seamlessly evisculate corporate architectures and cost effective web services. Enthusiastically maintain B2C customer service after progressive models. Synergistically procrastinate magnetic infomediaries through granular services.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '1516623301-buildings.jpg', '2018-01-22 09:11:01', '2018-01-22 09:15:01');

-- --------------------------------------------------------

--
-- Структура таблицы `content_page_content_tag`
--

CREATE TABLE `content_page_content_tag` (
  `content_page_id` int(10) UNSIGNED DEFAULT NULL,
  `content_tag_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `content_tags`
--

CREATE TABLE `content_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_01_20_172840_create_1516291045_permissions_table', 1),
(2, '2018_01_20_172840_create_1516291048_roles_table', 1),
(3, '2018_01_20_172840_create_1516291054_users_table', 1),
(4, '2018_01_20_172840_create_1516291179_content_categories_table', 1),
(5, '2018_01_20_172840_create_1516291183_content_tags_table', 1),
(6, '2018_01_20_172840_create_1516291187_content_pages_table', 1),
(7, '2018_01_20_172840_create_1516462012_pdfs_table', 1),
(8, '2018_01_21_050420_add_5a636028c369b_relationships_to_pdf_table', 1),
(9, '2018_01_21_050420_create_5a636028dd7b8_permission_role_table', 1),
(10, '2018_01_21_050420_create_5a636028e3788_role_user_table', 1),
(11, '2018_01_21_050420_create_5a636028f2dbb_content_category_content_page_table', 1),
(12, '2018_01_21_050421_create_5a636028f3a27_content_page_content_tag_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pdfs`
--

CREATE TABLE `pdfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pdfs`
--

INSERT INTO `pdfs` (`id`, `name`, `information`, `file`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(14, 'lms.pdf', '', '1516520224-lms.pdf', '2018-01-21 04:37:04', '2018-01-21 04:43:13', NULL, 1),
(15, 'NUEVO BROCHURE VDC-1.pdf', '', '1516613748-NUEVO BROCHURE VDC-1.pdf', '2018-01-22 06:35:48', '2018-01-22 06:35:48', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user_management_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(2, 'user_management_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(3, 'user_management_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(4, 'user_management_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(5, 'user_management_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(6, 'permission_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(7, 'permission_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(8, 'permission_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(9, 'permission_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(10, 'permission_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(11, 'role_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(12, 'role_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(13, 'role_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(14, 'role_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(15, 'role_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(16, 'user_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(17, 'user_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(18, 'user_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(19, 'user_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(20, 'user_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(21, 'content_management_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(22, 'content_management_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(23, 'content_management_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(24, 'content_management_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(25, 'content_management_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(26, 'content_category_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(27, 'content_category_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(28, 'content_category_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(29, 'content_category_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(30, 'content_category_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(31, 'content_tag_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(32, 'content_tag_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(33, 'content_tag_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(34, 'content_tag_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(35, 'content_tag_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(36, 'content_page_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(37, 'content_page_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(38, 'content_page_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(39, 'content_page_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(40, 'content_page_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(46, 'pdf_access', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(47, 'pdf_create', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(48, 'pdf_edit', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(49, 'pdf_view', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(50, 'pdf_delete', '2018-01-20 12:35:03', '2018-01-20 12:35:03');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(46, 2),
(49, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator (can create other users)', '2018-01-20 12:35:03', '2018-01-20 12:35:03'),
(2, 'Simple user', '2018-01-20 12:35:03', '2018-01-20 12:35:03');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `approved`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$gHxt.wGgeVer.JvI9qUeseXzJOecCdrcBxKncjEcFsAN0ysC2ZR.C', 'LYJbzRdDKDGxzCMrIC1aBF2XgUUQ0MbsXzAXbr51R16NZzp5QYThfEbD181I', 1, '2018-01-20 12:35:03', '2018-01-20 12:35:03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content_categories`
--
ALTER TABLE `content_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content_category_content_page`
--
ALTER TABLE `content_category_content_page`
  ADD KEY `fk_p_108814_108816_conten_5a636028f2ed6` (`content_category_id`),
  ADD KEY `fk_p_108816_108814_conten_5a636028f2f75` (`content_page_id`);

--
-- Индексы таблицы `content_pages`
--
ALTER TABLE `content_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content_page_content_tag`
--
ALTER TABLE `content_page_content_tag`
  ADD KEY `fk_p_108816_108815_conten_5a636028f3b1a` (`content_page_id`),
  ADD KEY `fk_p_108815_108816_conten_5a636028f3ba2` (`content_tag_id`);

--
-- Индексы таблицы `content_tags`
--
ALTER TABLE `content_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdfs_deleted_at_index` (`deleted_at`),
  ADD KEY `109583_5a635fbea13cf` (`created_by_id`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `fk_p_108810_108811_role_p_5a636028dd8e3` (`permission_id`),
  ADD KEY `fk_p_108811_108810_permis_5a636028dd981` (`role_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `fk_p_108811_108812_user_r_5a636028e385f` (`role_id`),
  ADD KEY `fk_p_108812_108811_role_u_5a636028e38db` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content_categories`
--
ALTER TABLE `content_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `content_pages`
--
ALTER TABLE `content_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `content_tags`
--
ALTER TABLE `content_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `content_category_content_page`
--
ALTER TABLE `content_category_content_page`
  ADD CONSTRAINT `fk_p_108814_108816_conten_5a636028f2ed6` FOREIGN KEY (`content_category_id`) REFERENCES `content_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_108816_108814_conten_5a636028f2f75` FOREIGN KEY (`content_page_id`) REFERENCES `content_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `content_page_content_tag`
--
ALTER TABLE `content_page_content_tag`
  ADD CONSTRAINT `fk_p_108815_108816_conten_5a636028f3ba2` FOREIGN KEY (`content_tag_id`) REFERENCES `content_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_108816_108815_conten_5a636028f3b1a` FOREIGN KEY (`content_page_id`) REFERENCES `content_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `pdfs`
--
ALTER TABLE `pdfs`
  ADD CONSTRAINT `109583_5a635fbea13cf` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `fk_p_108810_108811_role_p_5a636028dd8e3` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_108811_108810_permis_5a636028dd981` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_p_108811_108812_user_r_5a636028e385f` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_108812_108811_role_u_5a636028e38db` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
