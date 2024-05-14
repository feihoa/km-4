-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql-db
-- Время создания: Май 10 2024 г., 19:30
-- Версия сервера: 8.0.37
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `iddo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shopData`
--

CREATE TABLE `shopData` (
  `prm0` varchar(255) NOT NULL,
  `prm1` varchar(255) DEFAULT NULL,
  `prm2` varchar(255) DEFAULT NULL,
  `prm3` varchar(255) DEFAULT NULL,
  `prm4` varchar(255) DEFAULT NULL,
  `prm5` varchar(255) DEFAULT NULL,
  `prm6` varchar(255) DEFAULT NULL,
  `prm7` varchar(255) DEFAULT NULL,
  `prm8` varchar(255) DEFAULT NULL,
  `prm9` varchar(255) DEFAULT NULL,
  `prm10` varchar(255) DEFAULT NULL,
  `prm11` varchar(255) DEFAULT NULL,
  `prm12` varchar(255) DEFAULT NULL,
  `prm13` varchar(255) DEFAULT NULL,
  `prm14` varchar(255) DEFAULT NULL,
  `prm15` varchar(255) DEFAULT NULL,
  `prm16` varchar(255) DEFAULT NULL,
  `prm17` varchar(255) DEFAULT NULL,
  `prm18` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `shopData`
--

INSERT INTO `shopData` (`prm0`, `prm1`, `prm2`, `prm3`, `prm4`, `prm5`, `prm6`, `prm7`, `prm8`, `prm9`, `prm10`, `prm11`, `prm12`, `prm13`, `prm14`, `prm15`, `prm16`, `prm17`, `prm18`) VALUES
('1', 'null', 'null', 'Хлопок', '3', 'null', 'null', '0', '0', '0', 'null', '', 'null', '0', '', '', 'null', 'null', 'null'),
('3', 'Напёрсток', 'Ткань', 'Шёлк', '1', 'null', 'null', '0', '0', '0', 'null', '\\', '2', '3', '', '2024-04-30', 'Аренда швейной машинки', 'null', 'null'),
('888', 'Моток белой нити; Мел; Напёрсток; Набор игл', 'null', 'Хлопок', '3', 'null', 'null', '0', '0', '0', 'null', '', 'null', '0', 'm,mn.mn', '', 'null', 'null', 'null');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shopData`
--
ALTER TABLE `shopData`
  ADD PRIMARY KEY (`prm0`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
