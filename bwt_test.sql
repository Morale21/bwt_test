-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 11 2019 г., 19:53
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bwt_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Id` int(11) NOT NULL,
  `Имя` text NOT NULL,
  `Email` text NOT NULL,
  `Сообщение` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`Id`, `Имя`, `Email`, `Сообщение`) VALUES
(0, 'admin', 'admin@gmail.com', 'Проверка'),
(1, 'Александр', 'MorozAlexander21@gmail.com', 'Готово'),
(2, 'Александр', 'MorozAlexander21@gmail.com', 'Работа с базой данных завершена'),
(3, 'admin', 'admin@gmail.com', 'Капча добавлена');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Имя` text NOT NULL,
  `Фамилия` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Пол` char(1) NOT NULL,
  `Дата` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `Имя`, `Фамилия`, `Email`, `Password`, `Пол`, `Дата`) VALUES
(0, 'Alex', 'Mor', 'MorAle21@gmail.com', '12345', 'm', '0000-00-00'),
(1, 'Админ', 'Админ', 'admin@gmail.com', 'admin', 'n', '0000-00-00'),
(2, 'Александр', 'Мороз', 'MorozAlexander21@gmail.com', 'Alexander', 'm', '1998-02-06'),
(3, 'name', 'surname', 'example@gmail.com', 'example', 'n', '0000-00-00'),
(4, 'Татьяна', 'Сухова', 'tanya1901m@gmail.com', 'Tanya', 'f', '2001-01-19'),
(5, 'Дмитрий', 'Даценко', 'dimondats@gmail.com', 'Dmitriy', 'm', '2019-01-11'),
(6, 'test', 'test', 'test@test.com', 'test', 'n', '2000-01-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
