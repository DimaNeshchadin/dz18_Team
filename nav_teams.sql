-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Фев 22 2020 г., 22:16
-- Версия сервера: 5.7.28
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sandbox`
--

-- --------------------------------------------------------

--
-- Структура таблицы `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `navigations`
--

INSERT INTO `navigations` (`id`, `href`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, '/', 'home', 'Home', '2020-02-22 14:17:34', '2020-02-22 14:17:34'),
(2, '/blog', 'blog', 'Blog', '2020-02-22 14:17:34', '2020-02-22 14:17:34'),
(3, '/services', 'services', 'Services', '2020-02-22 14:17:34', '2020-02-22 14:17:34'),
(4, '/team', 'team', 'Team', '2020-02-22 14:17:34', '2020-02-22 14:17:34'),
(5, '/contact-us', 'contacts', 'Contacts', '2020-02-22 14:17:34', '2020-02-22 14:17:34');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `img`, `position`, `name`, `title`, `facebook`, `twitter`, `google`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'images/team/01.jpg', 'director', 'Theresa Green', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01'),
(2, 'images/team/02.jpg', 'CAT GROOMER', 'Rosie White', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01'),
(3, 'images/team/03.jpg', 'DOG GROOMER', 'Estelle Marsh', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01'),
(4, 'images/team/04.jpg', 'RABBIT GROOMER', 'Alberta Rogers', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01'),
(5, 'images/team/05.jpg', 'CAT GROOMER', 'Bernard Lambert', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01'),
(6, 'images/team/06.jpg', 'RABBIT GROOMER', 'Frank Stephens', 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.google.com', NULL, '2020-02-22 14:42:01', '2020-02-22 14:42:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
