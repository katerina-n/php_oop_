-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 18 2017 г., 15:07
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fraction`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fraction`
--

CREATE TABLE `fraction` (
  `numeric_one` int(11) NOT NULL,
  `denom_one` int(11) NOT NULL,
  `sign` text NOT NULL,
  `numeric_two` int(11) NOT NULL,
  `denom_two` int(11) NOT NULL,
  `id` smallint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fraction`
--

INSERT INTO `fraction` (`numeric_one`, `denom_one`, `sign`, `numeric_two`, `denom_two`, `id`) VALUES
(4, 5, '0', 3, 5, 1),
(4, 5, '-', 3, 5, 2),
(4, 5, '+', 3, 5, 3),
(4, 5, '+', 3, 5, 4),
(4, 5, '-', 3, 5, 5),
(4, 5, '-', 3, 5, 6),
(4, 5, '-', 3, 5, 7),
(4, 5, '-', 3, 5, 8),
(4, 5, '-', 3, 5, 9),
(4, 5, '-', 3, 5, 10),
(4, 5, '-', 3, 5, 11),
(4, 5, '-', 3, 5, 12),
(4, 5, '-', 3, 5, 13),
(4, 5, '-', 3, 5, 14),
(4, 5, '-', 3, 5, 15),
(4, 5, '-', 3, 5, 16),
(4, 5, '-', 3, 5, 17),
(4, 5, '-', 3, 5, 18),
(4, 5, '-', 3, 5, 19),
(4, 5, '-', 3, 5, 20),
(4, 5, '-', 3, 5, 21),
(4, 5, '-', 3, 5, 22),
(4, 5, '-', 3, 5, 23),
(4, 5, '*', 3, 5, 24),
(4, 5, '*', 3, 5, 25),
(4, 5, '*', 3, 5, 26),
(4, 5, '*', 3, 5, 27),
(4, 5, '*', 3, 5, 28),
(4, 5, '*', 3, 5, 29),
(4, 5, '-', 3, 5, 30),
(4, 5, '*', 3, 5, 31),
(4, 5, '*', 3, 5, 32),
(4, 5, '*', 3, 5, 33),
(4, 5, '*', 3, 5, 34),
(4, 5, '*', 3, 5, 35),
(4, 5, '+', 3, 5, 36),
(4, 5, '+', 3, 5, 37),
(4, 5, '-', 3, 5, 38),
(4, 5, '*', 3, 5, 39),
(4, 5, '/', 3, 5, 40),
(4, 5, '/', 3, 5, 41),
(4, 5, '+', 3, 5, 42),
(4, 5, '+', 3, 5, 43),
(4, 5, '+', 3, 5, 44),
(4, 5, '+', 3, 5, 45),
(4, 5, '+', 3, 5, 46),
(4, 5, '+', 3, 5, 47),
(4, 5, '/', 3, 5, 48),
(4, 5, '/', 3, 10, 49),
(7, 19, '/', 3, 2, 50);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fraction`
--
ALTER TABLE `fraction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fraction`
--
ALTER TABLE `fraction`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
