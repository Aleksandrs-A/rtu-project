-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2019 г., 16:23
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `trening`
--

-- --------------------------------------------------------

--
-- Структура таблицы `breakfast`
--

CREATE TABLE `breakfast` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `breakfast`
--

INSERT INTO `breakfast` (`ID`, `Name`, `Type`, `Color`) VALUES(1, 'Hleb s caem', 'Tip', 200);
INSERT INTO `breakfast` (`ID`, `Name`, `Type`, `Color`) VALUES(2, 'Suska', 'Tip', 300);
INSERT INTO `breakfast` (`ID`, `Name`, `Type`, `Color`) VALUES(3, 'Hleb', 'Tip', 150);
INSERT INTO `breakfast` (`ID`, `Name`, `Type`, `Color`) VALUES(4, 'Ogurec', 'Tip', 350);

-- --------------------------------------------------------

--
-- Структура таблицы `dinner`
--

CREATE TABLE `dinner` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dinner`
--

INSERT INTO `dinner` (`ID`, `Name`, `Type`, `Color`) VALUES(1, 'Tort', 'U', 600);
INSERT INTO `dinner` (`ID`, `Name`, `Type`, `Color`) VALUES(2, 'Kilka', 'U', 600);
INSERT INTO `dinner` (`ID`, `Name`, `Type`, `Color`) VALUES(3, 'Lipovij cai s mango', 'U', 150);
INSERT INTO `dinner` (`ID`, `Name`, `Type`, `Color`) VALUES(4, 'Makaroni s jaicom', 'U', 350);

-- --------------------------------------------------------

--
-- Структура таблицы `feat`
--

CREATE TABLE `feat` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feat`
--

INSERT INTO `feat` (`ID`, `Name`, `Type`, `Color`) VALUES(1, 'Mokoronki s sirom', 'First', 300);
INSERT INTO `feat` (`ID`, `Name`, `Type`, `Color`) VALUES(2, 'Mokoronki s Katletkoi', 'First', 500);
INSERT INTO `feat` (`ID`, `Name`, `Type`, `Color`) VALUES(3, 'Mokoronki s riboi', 'First', 350);
INSERT INTO `feat` (`ID`, `Name`, `Type`, `Color`) VALUES(4, 'Kartoska s pureskoi', 'First', 320);
INSERT INTO `feat` (`ID`, `Name`, `Type`, `Color`) VALUES(5, 'Sasiski s pureskoi', 'nan', 350);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `feat`
--
ALTER TABLE `feat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dinner`
--
ALTER TABLE `dinner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `feat`
--
ALTER TABLE `feat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
