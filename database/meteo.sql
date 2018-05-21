-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2018 г., 15:33
-- Версия сервера: 5.7.20
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
-- База данных: `meteo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Hidromet`
--

CREATE TABLE `Hidromet` (
  `No` int(10) NOT NULL,
  `Time` time NOT NULL,
  `mm` float DEFAULT NULL,
  `deg` float NOT NULL,
  `msdo` float NOT NULL,
  `Cdo` float NOT NULL,
  `Prdo` float NOT NULL,
  `hPado` float NOT NULL,
  `mmcharp` float NOT NULL,
  `WmI` float NOT NULL,
  `HKBat` float NOT NULL,
  `HKTemp` float NOT NULL,
  `HLrH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Hidromet`
--

INSERT INTO `Hidromet` (`No`, `Time`, `mm`, `deg`, `msdo`, `Cdo`, `Prdo`, `hPado`, `mmcharp`, `WmI`, `HKBat`, `HKTemp`, `HLrH`) VALUES
(1, '00:00:00', 0.93, 0.5, 0.72, 0.07, 0.35, 0.06, 0.05, 0.83, 0.26, 0.11, 0.21),
(2, '00:00:10', 0.33, 0.42, 0.41, 0.83, 0.76, 0.38, 0.95, 0.85, 0.57, 0.86, 0.85),
(3, '00:00:20', 0.97, 0.87, 0.35, 0.62, 0.3, 0.11, 0.64, 0.73, 0.61, 0.51, 0.65),
(4, '00:00:30', 0.57, 0.81, 0.39, 0.33, 0, 0.19, 0.8, 0.61, 0.77, 0.03, 0.24),
(5, '00:00:40', 0.72, 0.67, 0.6, 0.03, 0.49, 0.56, 0.77, 0.42, 0.61, 0.23, 0.01),
(6, '00:00:50', 0.87, 0.49, 0.47, 0.82, 0.22, 0.66, 0.33, 0.57, 0.27, 0.2, 0.96),
(7, '00:01:00', 0.58, 0.42, 0.8, 0.71, 0.07, 0.55, 0.81, 0.15, 0.62, 0.91, 0.45),
(8, '00:01:10', 0.6, 0.42, 0.85, 0.06, 0.11, 0.49, 0.4, 0.89, 0.59, 0.27, 0.89),
(9, '00:01:20', 0.05, 0.81, 0.6, 0.76, 0.21, 0.95, 0.2, 0.91, 0.87, 0.07, 0.37),
(10, '00:01:30', 0.88, 0.73, 0.72, 0.84, 0.28, 0.82, 0.2, 0.16, 0.52, 0.58, 0.9),
(11, '00:01:40', 0.13, 0.36, 0.03, 0.4, 0.58, 0.91, 0.97, 0.5, 0.77, 0.02, 0.91),
(11, '00:01:41', 4, 5, 1, 2, 3, 4, 5, 7, 5, 1, 2),
(12, '00:01:45', 4, 7, 4, 2, 5, 8, 2, 6, 2, 1, 12),
(13, '01:01:50', 0.14, 0.36, 0.03, 0.4, 0.58, 0.91, 0.97, 0.5, 0.77, 0.02, 0.91);

-- --------------------------------------------------------

--
-- Структура таблицы `Lisemetric`
--

CREATE TABLE `Lisemetric` (
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Tens30.1` float NOT NULL,
  `Tens30.1max` float NOT NULL,
  `Tens30.1min` float NOT NULL,
  `Tens30.2` float NOT NULL,
  `Tens30.2max` float NOT NULL,
  `Tens30.2min` float NOT NULL,
  `Vacuum30` float NOT NULL,
  `Vacuum30max` float NOT NULL,
  `Vacuum30min` float NOT NULL,
  `Tens50.1` float NOT NULL,
  `Tens50.1max` float NOT NULL,
  `Tens50.1min` float NOT NULL,
  `Tens50.2` float NOT NULL,
  `Tens50.2max` float NOT NULL,
  `Tens50.2min` float NOT NULL,
  `Vacuum50` float NOT NULL,
  `Vacuum50max` float NOT NULL,
  `Vacuum50min` float NOT NULL,
  `Tens120.1` float NOT NULL,
  `Tens120.1max` float NOT NULL,
  `Tens120.1min` float NOT NULL,
  `Tens120.2` float NOT NULL,
  `Tens120.2max` float NOT NULL,
  `Tens120.2min` float NOT NULL,
  `Vacuum120` float NOT NULL,
  `Vacuum120max` float NOT NULL,
  `Vacuum120min` float NOT NULL,
  `Accu` float NOT NULL,
  `Accumax` float NOT NULL,
  `Accumin` float NOT NULL,
  `UMP30.1` float NOT NULL,
  `UMP30.2` float NOT NULL,
  `UMP50.1` float NOT NULL,
  `UMP50.2` float NOT NULL,
  `UMP120.1` float NOT NULL,
  `UMP120.2` float NOT NULL,
  `EC30.1` float NOT NULL,
  `EC30.2` float NOT NULL,
  `EC50.1` float NOT NULL,
  `EC50.2` float NOT NULL,
  `EC120.1` float NOT NULL,
  `EC120.2` float NOT NULL,
  `Temp30.1` float NOT NULL,
  `Temp30.2` float NOT NULL,
  `Temp50.1` float NOT NULL,
  `Temp50.2` float NOT NULL,
  `Temp120.1` float NOT NULL,
  `Temp120.2` float NOT NULL,
  `Weight1` float NOT NULL,
  `Weight2` float NOT NULL,
  `Drain1` float NOT NULL,
  `Drain1max` float NOT NULL,
  `Drain1min` float NOT NULL,
  `Drain2` float NOT NULL,
  `Drain2max` float NOT NULL,
  `Drain2min` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Lisemetric`
--

INSERT INTO `Lisemetric` (`Date`, `Time`, `Tens30.1`, `Tens30.1max`, `Tens30.1min`, `Tens30.2`, `Tens30.2max`, `Tens30.2min`, `Vacuum30`, `Vacuum30max`, `Vacuum30min`, `Tens50.1`, `Tens50.1max`, `Tens50.1min`, `Tens50.2`, `Tens50.2max`, `Tens50.2min`, `Vacuum50`, `Vacuum50max`, `Vacuum50min`, `Tens120.1`, `Tens120.1max`, `Tens120.1min`, `Tens120.2`, `Tens120.2max`, `Tens120.2min`, `Vacuum120`, `Vacuum120max`, `Vacuum120min`, `Accu`, `Accumax`, `Accumin`, `UMP30.1`, `UMP30.2`, `UMP50.1`, `UMP50.2`, `UMP120.1`, `UMP120.2`, `EC30.1`, `EC30.2`, `EC50.1`, `EC50.2`, `EC120.1`, `EC120.2`, `Temp30.1`, `Temp30.2`, `Temp50.1`, `Temp50.2`, `Temp120.1`, `Temp120.2`, `Weight1`, `Weight2`, `Drain1`, `Drain1max`, `Drain1min`, `Drain2`, `Drain2max`, `Drain2min`) VALUES
('2020-03-20', '00:00:00', 0.83, 0.02, 0.14, 0.35, 0.07, 0.45, 0.22, 0.98, 0.1, 0.01, 0.29, 0.15, 0.84, 0.97, 0.12, 0.31, 0.02, 0.37, 0.33, 0.99, 0.21, 0.72, 0.73, 0.25, 0.15, 0.43, 0.6, 0.53, 0.41, 0.49, 0.73, 0.69, 0.26, 0.56, 0.57, 0.21, 0.76, 0.43, 0.44, 0.28, 0.77, 0.77, 0.1, 0.93, 0.62, 0.7, 0.53, 0.24, 0.85, 0.72, 0.65, 0.34, 0.38, 0.89, 0.44, 0.01),
('2020-03-20', '01:00:00', 0.45, 0.15, 0.71, 0.08, 0.37, 0.18, 0.83, 0.79, 0.82, 0.84, 0.04, 0.06, 0.7, 0.45, 0.6, 0.29, 0.6, 0.4, 0.98, 0.18, 0.56, 0.53, 0.91, 0.73, 0.34, 0.26, 0.12, 0.99, 0.34, 0.76, 0.8, 0.63, 0.53, 0.26, 0.78, 0.97, 0.02, 0.73, 0.14, 0, 0.19, 0.99, 0.12, 0.12, 0.88, 0.12, 0.49, 0.14, 0.33, 0.51, 0.94, 0.54, 0.03, 0.37, 0.74, 0.13),
('2020-03-20', '02:00:00', 0.01, 0.98, 0.73, 0.49, 0, 0.53, 0.3, 0.7, 0.06, 0.81, 0.2, 0.91, 0.96, 0.59, 0.82, 0.69, 0.66, 0.59, 0.14, 0.28, 0.35, 0.04, 0.37, 0.66, 0.16, 0.28, 0.9, 0.61, 0.28, 0.39, 0.58, 0.76, 0.37, 0.35, 0.84, 0.56, 0.57, 0.65, 0.29, 0.83, 0.93, 0.33, 0.23, 0.06, 0.32, 0.8, 0, 0.48, 0.63, 0, 0.29, 0.09, 0.95, 0.24, 0.21, 0.45),
('2020-03-20', '03:00:00', 0.7, 0.62, 0.43, 0.25, 0.09, 0.77, 0.5, 0.83, 0.49, 0.45, 0.8, 0.72, 0.88, 0.49, 0.02, 0.1, 0.36, 0.79, 0.66, 0.16, 0.61, 0.23, 0.25, 0.06, 0.92, 0.31, 0.72, 0.52, 0.13, 0.9, 0.74, 0.04, 0.07, 0.24, 0.01, 0.79, 0.71, 0.75, 0.68, 0.78, 0.05, 0.91, 0.24, 0.18, 0.23, 0.51, 0.57, 0.37, 0.67, 0.93, 0.21, 0.37, 0.48, 0.39, 0.72, 0.45),
('2020-03-20', '04:00:00', 0.6, 0, 0.33, 0.74, 0.01, 0.41, 0.23, 0.69, 0.72, 0.96, 0.25, 0.5, 0.36, 0.72, 0.36, 0.43, 0.22, 0.36, 0.56, 0.24, 0.32, 0.04, 0.95, 0.47, 0.62, 0.82, 0.61, 0.27, 0.89, 0.74, 0.92, 0.37, 0.28, 0.96, 0.48, 0.35, 0.58, 0.49, 0.84, 0.47, 0.86, 0.11, 0.37, 0.8, 0.49, 0.21, 0.16, 0.06, 0.99, 0.69, 0.19, 0.97, 0.62, 0.68, 0.99, 0.27),
('2020-03-20', '05:00:00', 0.29, 0.02, 0.36, 0.88, 0.45, 0.62, 0.78, 0.51, 0.42, 0.72, 0.76, 0.32, 0.09, 0.61, 0.84, 0.42, 0.1, 0.49, 0.47, 0.37, 0.81, 0.86, 0.25, 0.46, 0.68, 0.22, 0.71, 0.84, 0.88, 0.78, 0.5, 0.17, 0.79, 0.82, 0.57, 0.61, 0.31, 0.47, 0.49, 0.84, 0.75, 0.58, 0.41, 0.91, 0.59, 0.61, 0.07, 0.78, 0.42, 0.97, 0.7, 0.1, 0.82, 0.2, 0.6, 0.68),
('2020-03-20', '06:00:00', 0.27, 0.05, 0.58, 0.96, 0.29, 0.25, 0.95, 0.23, 0.22, 0.59, 0.07, 0.61, 0.61, 0.37, 0.43, 0.68, 0.99, 0.49, 0.78, 0.29, 0.23, 0.61, 0.47, 0.83, 0.77, 0.4, 0.27, 0.04, 0.11, 0.97, 0.63, 0.73, 0.11, 0.18, 0.12, 0.65, 0.95, 0.14, 0.96, 0.56, 0.06, 0.96, 0.11, 0.93, 0.27, 0.83, 0.22, 0.2, 0.23, 0.89, 0.37, 0.86, 0.33, 0.65, 0.44, 0.76),
('2020-03-20', '07:00:00', 0.45, 0.64, 0.27, 0.79, 0.41, 0.47, 0.07, 0.27, 1, 0.97, 0.43, 0.11, 0.27, 0.07, 0.39, 0.46, 0.21, 0.15, 0.66, 0.75, 0.34, 0.3, 0.2, 0.69, 0.69, 0.63, 0.77, 0.86, 0.45, 0.92, 0.62, 0.73, 0.11, 0.09, 0.94, 0.31, 0.24, 0.12, 0.89, 0.03, 0.33, 0.83, 0.38, 0.39, 0.38, 0.89, 0.08, 0.41, 0.44, 0.31, 0.95, 0.67, 0.15, 0.89, 0.52, 0.26),
('2020-03-20', '08:00:00', 0.53, 0.4, 0.06, 0.99, 0.64, 0.86, 0.4, 0.4, 0.96, 0.1, 0.93, 0.99, 0.16, 0.66, 0.35, 0.83, 0.13, 0.4, 0.28, 0.08, 0.82, 0.19, 0.74, 0.79, 0.83, 0.53, 0.78, 0.08, 0.1, 0.58, 0.77, 0.81, 0.15, 0.87, 0.08, 0.32, 0.77, 0.25, 0.45, 0.17, 0.22, 0.55, 0.24, 0.17, 0.2, 0.12, 0.69, 0.84, 0.5, 0.49, 0.1, 0.1, 0.77, 0.79, 0.05, 0.67),
('2020-03-20', '08:00:11', 1, 2, 3, 4, 5, 6, 4, 7, 8, 9, 4, 5, 6, 1, 2, 3, 4, 5, 6, 7, 8, 9, 4, 5, 6, 4, 5, 1, 2, 3, 4, 5, 6, 8, 7, 8, 7, 5, 2, 1, 5, 4, 6, 5, 1, 2, 3, 1, 2, 5, 4, 5, 6, 5, 4, 1),
('2020-03-20', '09:00:00', 0.67, 0.7, 0.09, 0.85, 0.63, 0.11, 0.06, 1, 0.92, 0.6, 0.09, 0.24, 0.74, 0.71, 0.63, 0.59, 0.3, 0.97, 0.59, 0.75, 0.27, 0.57, 0.06, 0.93, 0.09, 0.61, 0.38, 0.98, 0.26, 0.46, 0.31, 0.72, 0.47, 0.69, 0.77, 0.27, 0.54, 0.04, 0.03, 0.62, 0.96, 0.24, 0.83, 0.65, 0.08, 0.65, 0.04, 0.62, 0.77, 0.35, 0.2, 0.14, 0.65, 0.89, 0.34, 0.23);

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE `session` (
  `id_user` int(5) NOT NULL,
  `code_sess` varchar(15) NOT NULL,
  `user_agent_sess` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`id_user`, `code_sess`, `user_agent_sess`) VALUES
(1, 'bVNjfn4b0TlYVtK', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.0) Gecko/20100101 Firefox/60.0'),
(2, 'tyEqBHX2AJXDXdc', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.0) Gecko/20100101 Firefox/60.0'),
(3, 'vlvGe8BSG2tD4fw', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.99');

-- --------------------------------------------------------

--
-- Структура таблицы `Stational`
--

CREATE TABLE `Stational` (
  `Time` time NOT NULL,
  `CThirdty` float NOT NULL,
  `procdoThirdty` float NOT NULL,
  `SmdoThirdty` float NOT NULL,
  `CThirdtyF` float NOT NULL,
  `pFdoThirdty` float NOT NULL,
  `CSixty` float NOT NULL,
  `procdoSixty` float NOT NULL,
  `SmdoSixty` float NOT NULL,
  `CSixtyF` float NOT NULL,
  `pFdoSixty` float NOT NULL,
  `CHThirdty` float NOT NULL,
  `doHThirdty` float NOT NULL,
  `SmdoHThirdty` float NOT NULL,
  `CHThirdtyF` float NOT NULL,
  `pFdoHThirdty` float NOT NULL,
  `HKBatV` float NOT NULL,
  `HKTempC` float NOT NULL,
  `HKrH` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Stational`
--

INSERT INTO `Stational` (`Time`, `CThirdty`, `procdoThirdty`, `SmdoThirdty`, `CThirdtyF`, `pFdoThirdty`, `CSixty`, `procdoSixty`, `SmdoSixty`, `CSixtyF`, `pFdoSixty`, `CHThirdty`, `doHThirdty`, `SmdoHThirdty`, `CHThirdtyF`, `pFdoHThirdty`, `HKBatV`, `HKTempC`, `HKrH`) VALUES
('00:00:00', 0.79, 0.87, 0.8, 0.72, 0.92, 0.46, 0.28, 1, 0.65, 0.75, 0.54, 0.64, 0.73, 0.03, 0.03, 0.63, 0.71, 0.22),
('00:00:01', 0.45, 0.24, 0.34, 0.33, 0.82, 0.48, 0.45, 0.64, 0.02, 0.58, 0.06, 0.51, 0.07, 0.9, 0.41, 0.65, 0.31, 0.48),
('00:00:02', 0.52, 0.72, 0.08, 0.42, 0.25, 0.52, 0.13, 0, 0.2, 0.63, 0.79, 0.79, 0.22, 0.43, 0.7, 0.27, 0.91, 0.06),
('00:00:03', 0.03, 0.75, 0.34, 0.96, 0.1, 0.15, 0.97, 0.61, 0.76, 0.17, 0.69, 0.27, 0.66, 0.13, 0.17, 0.2, 0.9, 0.35),
('00:00:04', 0.55, 0.13, 0.33, 0.08, 0.57, 0.58, 0.06, 0.64, 0.27, 0.83, 0.57, 0.15, 0.25, 0.18, 0.72, 0.53, 0.17, 0.51),
('00:00:05', 0.77, 0.8, 0.22, 0.48, 0.21, 0.28, 0.01, 0.94, 0.27, 0.57, 0.86, 0.47, 0.11, 0.89, 0.15, 0.16, 0.17, 0.98),
('00:00:06', 0.14, 0.36, 0.47, 0.57, 0.14, 0.88, 0.77, 0.4, 0.36, 0.41, 0.65, 0.46, 0.32, 0.69, 0.03, 0.92, 0.19, 0.81),
('00:00:07', 0.86, 0.95, 0.2, 0.92, 0.9, 0.99, 0.73, 0.2, 0.02, 0.8, 0.93, 0.57, 0.44, 0.51, 0.92, 0.9, 0.94, 0.15),
('00:00:08', 0.74, 0.97, 0.76, 0.03, 0.01, 0.21, 0.51, 1, 0.03, 0.9, 0.89, 0.65, 0.71, 0.63, 0.36, 0.74, 0.87, 0.55),
('00:00:09', 0.88, 0.05, 0.18, 0.4, 0.73, 0.71, 0.11, 0.95, 0.6, 0.23, 0.78, 0.99, 0.05, 0.22, 0.54, 0.28, 0.21, 0.32),
('00:01:40', 1, 2, 3, 4, 1, 6, 7, 8, 9, 1, 2, 3, 4, 5, 6, 7, 8, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `login_user` varchar(60) NOT NULL,
  `passwd_user` varchar(255) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login_user`, `passwd_user`, `mail_user`, `admin`) VALUES
(1, 'admin', 'a796e80ac3e27000bc1c8d4b56989af6', 'ww@mal.rt', 1),
(2, 'user', '522cfe01fb53177027a4d76c4842d4a7', 'kek@kek.ry', 0),
(3, 'reader', 'a796e80ac3e27000bc1c8d4b56989af6', 'kek@k.r', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Hidromet`
--
ALTER TABLE `Hidromet`
  ADD PRIMARY KEY (`Time`);

--
-- Индексы таблицы `Lisemetric`
--
ALTER TABLE `Lisemetric`
  ADD PRIMARY KEY (`Date`,`Time`);

--
-- Индексы таблицы `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `Stational`
--
ALTER TABLE `Stational`
  ADD PRIMARY KEY (`Time`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
