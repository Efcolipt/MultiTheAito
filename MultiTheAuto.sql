-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 25 2019 г., 18:15
-- Версия сервера: 5.6.38
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
-- База данных: `MultiTheAuto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `login`, `phone`, `email`, `photo`) VALUES
(1, 'Стас', 'admin', '79913763123', 'stas@mail.ru', 'avatar'),
(5, 'Иван', 'Ivanchick', '79762321231', 'ivanchick@mail.ru', 'avatar2'),
(8, 'Максим', 'Maksim', '79321632726', 'maksimka@mail.ru', 'avatar3');

-- --------------------------------------------------------

--
-- Структура таблицы `Donat`
--

CREATE TABLE `Donat` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `Money` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Donat`
--

INSERT INTO `Donat` (`id`, `login`, `Money`, `time`) VALUES
(1, '', '', '2018-06-25 22:29:17'),
(2, '', '', '2018-06-25 22:29:33'),
(3, '', '', '2018-06-25 22:31:45'),
(4, '', '', '2018-06-25 22:31:59'),
(5, '', '', '2018-06-25 22:32:30'),
(6, '', '', '2018-06-25 22:32:44'),
(7, '', '', '2018-06-25 22:33:56'),
(8, '', '', '2018-06-25 22:34:28'),
(9, '', '', '2018-06-25 22:35:03'),
(10, '', '', '2018-06-25 22:43:59'),
(11, '', '', '2018-06-25 22:44:29');

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE `News` (
  `id` int(11) NOT NULL,
  `header` varchar(25) NOT NULL,
  `Author` varchar(25) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`id`, `header`, `Author`, `content`, `date`, `photo`) VALUES
(1, 'Ivan', 'Ivan4ic', 'ivamn', '2018-06-16 14:52:46', '5b25243eb6d824.25419748.jpg'),
(2, 'Ivan@#@', 'Ivan4ic', '123', '2018-06-16 14:53:20', '5b252460272aa6.65120469.jpg'),
(3, 'asd', 'asd', 'asd', '2018-06-16 15:05:26', '5b25273629e1d8.17335017.jpg'),
(4, 'asd', 'asd', 'asd', '2018-06-16 21:05:34', '5b257b9e9baa12.97580035.jpg'),
(5, 'asd', 'asd', 'asd', '2018-06-16 21:09:27', '5b257c87c94b82.39770086.jpg'),
(6, 'asd', 'asd', 'asd', '2018-06-16 21:10:02', '5b257caa98eb70.07562816.jpg'),
(7, 'asd', 'asd', 'asd', '2018-06-16 21:10:07', '5b257cafde9770.95319451.jpg'),
(8, 'фыв', 'фыв', 'фыв', '2018-06-16 21:22:25', '5b257f912bde26.77051832.jpg'),
(9, 'asd', '', 'asd', '2018-06-16 21:24:08', '5b257ff855b447.43648558.jpg'),
(10, 'asd', '', 'asd', '2018-06-16 21:25:42', '5b2580568c0973.67413791.jpg'),
(11, 'asd', 'asd', 'asd', '2018-06-16 21:25:46', '5b25805a3a4440.81546688.jpg'),
(12, 'asd', 'asd', 'asd', '2018-06-16 21:26:57', '5b2580a190cbf5.35667007.jpg'),
(13, 'asd', 'asd', 'asd', '2018-06-16 21:27:02', '5b2580a6001314.81347808.jpg'),
(14, 'asd', 'asd', 'asd', '2018-06-16 21:27:04', '5b2580a803c072.41530418.jpg'),
(15, 'asd', 'asd', 'asd', '2018-06-16 21:27:05', '5b2580a9a3d656.98306396.jpg'),
(16, 'asd', 'asd', 'asd', '2018-06-16 21:27:07', '5b2580ab448b33.59145785.jpg'),
(17, 'asdaas', 'фыв', 'фыв', '2018-06-18 13:16:40', '5b27b0b8620886.47143832.jpg'),
(18, 'asdaas', 'фыв', 'фыв', '2018-06-18 13:16:48', '5b27b0c08186d4.37988632.jpg'),
(19, 'sd', 'asda', 'asd', '2018-06-18 13:19:59', '5b27b17f302985.54916210.jpg'),
(20, 'asd', 'asd', 'asd', '2018-06-18 13:24:06', '5b27b27684bd18.62868606.jpg'),
(21, 'asdaassd', 'asdasd', 'asdasd', '2018-06-18 13:29:40', '5b27b3c4dc5176.12392333.jpg'),
(22, 'фыв', 'фыв', 'фыв', '2018-06-18 14:24:29', '5b27c09d766c72.33175700.jpg'),
(23, 'фыв', 'фыв', 'фыв', '2018-06-18 14:26:00', '5b27c0f8143a55.71922054.jpg'),
(24, 'asdaas', 'asd', 'asd', '2018-06-18 14:29:15', '5b27c1bb3e33f3.58866293.jpg'),
(25, 'asdaas', 'asdasd', 'asdas', '2018-06-18 14:34:35', '5b27c2fb6bbf62.42183788.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `User_name` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cookie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `User_name`, `login`, `password`, `email`, `register_date`, `cookie`) VALUES
(39, 'Алена', 'liska', '$2y$10$Nqlugnf.tIRVG4Clchk5keqqJs/VWYSUu7L8tgdDEHEicXmxDaQtC', 'liska@mail.ru', '2018-06-19 15:07:04', 'vfR2vBlJpn'),
(40, 'Иван', 'Ivanchick', '$2y$10$vqY6Dc5zsg1Nt.D28g0mj.rpFYBb3miYUQ4gvj7q2d9VC28mR3wOG', 'ivanchick@mail.ru', '2018-06-19 15:22:23', ''),
(41, 'asd', 'asdasd2', '$2y$10$T2Mund1T5baFfuMFOXYFh.wGNJbhGFK8aPankXj2xjTrpQRDGt33.', 'asdasd@dasd.rw', '2018-06-19 15:26:18', ''),
(42, 'asdasdasd', 'asdasdasdas', '$2y$10$M0bClGVS6l/Zt9Bezg0MoOzHiUUgBn.t1KDZzcy2bjQDGfiEtQ3JS', 'asdad@dasdas.as', '2018-06-19 15:35:56', ''),
(43, 'Лиза', 'ivanssw', '$2y$10$Q0CGtS/1miyoEVEb03BrYOBXVbOjwCk9NwGfKoBPe0MLfVsueoI2u', 'Ivanss@mail.ru', '2018-06-19 15:57:23', ''),
(44, 'Лизавыф', 'ivansswasd', '$2y$10$s.ctDSA1gskqlm2R.RfIp.b1zgH8FbXJP27UDhd/r.cG8z30j6aP2', 'Ivansss@mail.ru', '2018-06-19 15:57:58', ''),
(45, 'иван', 'nsda', '$2y$10$ZQBpYwQXS34HA/SoQycgfuwoDclCQTygbLnwXz7yZTp/4V/Z89fiq', 'asd@ml.ru', '2018-06-19 15:58:58', ''),
(46, 'Лиза ', 'Kalsta', '$2y$10$N0Ble.nWGFM.AEtMlfhaDOGTdyxAiNrcBj1mshlEpVxZbVpJwIVW6', 'join@mail.ru', '2018-06-19 16:00:24', ''),
(47, '', 'Roman228', '$2y$10$P8SPe1yAfiSGBOhutdLcKuc/g.u8qhw28I0qkC8TK1fU9wPs7w1xO', 'ivanssssasdasds@mail.ru', '2018-06-20 15:23:06', ''),
(48, '', 'sdas', '$2y$10$iC.PInc9.VhbAjO6g1DGxuxc3UvHwCSgI1vrog7PS3tbDJ.wxFO.e', 'fasdasda@mail.ru', '2018-06-20 15:23:29', ''),
(49, '', 'asdasdasd', '$2y$10$Limqdgq1bUkwJUH9PVyBX.VS/c1tHbX5nsvRRA320kRCDbtt8GGP6', 'asdasdasd@asdasd', '2018-06-20 15:23:46', ''),
(50, '', 'asdasdasdasd', '$2y$10$pidUl1z6Ih4xbxByRKYdTOdBSrjXDLwST2h4SageKIh4zj9dxM3Tq', 'asdasdasd@asdasd.wq', '2018-06-20 15:23:59', ''),
(51, '', 'alena', '$2y$10$rJR.FaqY7oNlbvY8xJQeuuc.dNhqlOXZ9pTgWiz8Cj0QqrOG.edcy', 'alenadast@mail.ru', '2018-06-20 15:27:38', ''),
(52, '', 'asdasdasdsad', '$2y$10$FTjfNIlzwOEsLB6l1Ta0C.vF8RlJdIUxJewh8mcbfCWHiA7rUva1W', 'asdasd@aasd', '2018-06-20 15:34:12', ''),
(53, '', 'sadasd', '$2y$10$4ohKVDhTt3RowJlX6JJmquQjQ72cOLIoYHTMpdIFu9nZ3y7TdGuTq', 'asd@asd', '2018-06-20 15:37:02', ''),
(54, '', 'asdasdasda', '$2y$10$gshTRFvllNSODCQ.fJu20uBaq85p4jxJIOXI0Ylkq0qNtRbuhG/Ti', 'asdasdasdasd@as.asd', '2018-06-20 20:24:14', ''),
(55, '', 'asdasdasdaas2', '$2y$10$XruEVzWM2R4tRnJW.LYp7u.0JchIYeiC0VC8sDiytye.FzGe5TuZ.', 'asdasdaasd@as.asd', '2018-06-20 20:30:07', ''),
(56, '', 'Maxim', '$2y$10$UCFNw6EzQm05cWp8XwgGEemdwX5fBSGBfA.W9SVATnW5vBBTHmWtW', 'ivankics@mail.ru', '2018-06-20 20:37:23', ''),
(57, '', 'Maximasd', '$2y$10$B3SSyHls/biepQLqMZDrFuWGw0qXH0BynOszf7sJ3iq2UN7PJkmxq', 'asdasd@asddwqsa', '2018-06-20 20:39:20', ''),
(58, '', '132asd', '$2y$10$JYLO0ZXpM7j06EGtbadHruKVDSHGfB5lnDbVHn.myS.JGa9THryK.', 'asdasd@asda.sad', '2018-06-20 20:40:54', ''),
(59, '', '132asdasd', '$2y$10$xTk4b/qLPopwWdHQzr4SOuVmgo4V32.9S/vgIyJ6oXvQRAkZD9PXW', 'asdasd@assda.sad', '2018-06-20 20:43:25', ''),
(60, '', '132asdasds', '$2y$10$h0vw2k9fEvCdvbZv2OMQ.uyyw2SxsZDlwCWEpdkLPSwkzRcPf4DVG', 'asdasd@assdda.sad', '2018-06-20 20:43:50', ''),
(61, '', 'asd33qwasd', '$2y$10$6ABkWMT.b0p5X.taB6GXuuzTkRh7yXORcAh7xeDY0fAH6njgPuDaW', 'asd32dwas@asd', '2018-06-20 20:48:45', ''),
(62, '', 'asdasdasd2asd', '$2y$10$50fpcYvF6L4JXm3w1hR3EOly3jSy5OhzIGIvOp0SHyqzeCbVHKpFK', 'asdasd@asdasd', '2018-06-20 20:51:43', ''),
(63, '', 'asdasdasd2asds', '$2y$10$aozjmQAP3T.0yMTOSrUY.OsM70QqvhjO7orxVO1E4u/SzFy5SzWNm', 'asdasd@asdasd21sad', '2018-06-20 20:53:09', ''),
(64, '', 'asdasdasd2asdsd', '$2y$10$NdfH2DuUwZZHWsToNn1NTevP/Zvt4pl2105WrIiDE6wJBmDrDXWI2', 'asdasd@asdasd21sads', '2018-06-20 20:54:46', ''),
(65, '', 'фывфывф', '$2y$10$DVcjtmL09RwBxazW98x.JOi/oplzXLeOGsrX89LPt.QIcCduwQQIS', 'asdasd@asdasddws', '2018-06-20 20:56:25', ''),
(66, '', 'asdasdasd2asdsds', '$2y$10$UnsgE.GN2qx0bLbx8283/OsDtbCHiTqeWMznge.kUvxNOmCNYUjG2', 'asdasd@asddsawds', '2018-06-20 21:00:26', ''),
(67, '', 'asdasd2asd', '$2y$10$UBbGgFG.f7/lzx5Qq0JA0.qQM.CguXK96QWJDd3AzTX3XqlzEpQae', 'asdasd@asd2ws', '2018-06-20 21:02:40', ''),
(68, '', 'asdwsx', '$2y$10$aBsFe4XvNJtzQ.9P.SxbKeDiwmB/msql.KCwynyFCmpbRPx72kuQG', 'xdase@sxas', '2018-06-21 11:05:51', ''),
(69, '', 'asdasd2saxsaxsadxasdx', '$2y$10$pX1.oND1iu8VYMEsfl4rbeGBEswqWbwedDqNCiWNyqZdlYQS7jTxi', 'xasdx12xes@dxasd', '2018-06-21 11:11:27', ''),
(70, 'asdasdds', 'dasdasdws', '$2y$10$YX7llADcwVWHUuNhoeUhTuUsIxRfq/WUd7DAafJhWU5zNAwgruhMu', 'dasdwas@sdxwas', '2018-06-21 11:12:58', ''),
(71, 'stas', 'stasik', '$2y$10$r0H5pWL2ZZ2vXSVqEy7K6uQnDWay9CwtCNcAzKT4QwZlWA/f7Ibkm', 'stas@msadw.s', '2018-06-21 12:07:44', ''),
(72, 'Дщфы', 'login', '$2y$10$/y3GREbCFL38qjbKUezqa.8i69swRijBsUjSsghAY1Jfo8laHU1Yq', 'email@s.s', '2018-06-21 12:09:14', ''),
(73, 'asdwqsa', 'ascwq', '$2y$10$1zISjL8efabyiS7cgtXKVO8l3kpu.Lc/KECHNi1RhXKpioPNrR2pm', 'aadw@dasd.wqd', '2018-06-21 12:11:03', ''),
(74, 'Рома', 'lokmain', '$2y$10$DxHI2KBmCYH4rzUc/zf4IO2sdkb6euqClzqaUEU6BVZcaQV4WiVqG', 'romanW@mail.ru', '2018-06-21 12:13:42', ''),
(75, 'ddd', 'ddd', '$2y$10$wvYKcNZBZLKpBxRAZ9iUYOT/ACKAc95U0kLbp2dF64V78Ty7Za6U6', 'ddd@ddd.ddd', '2018-06-21 13:01:03', 'gcBW2fbvUZ'),
(76, 'Иван', 'limonad', '$2y$10$BgDFHAv3tlS/ftZP3GZA6.Chw1saPp/iWApc4rFLSxRBjcSCfgLaa', 'van@mail.ru', '2018-06-21 13:16:28', 'U130fOC1af'),
(77, 'asdasd', 'asd', '$2y$10$yvyfgmJxybzl4Av70N8pm.6OyjXEmAuTAA10MNLldnLVS.TQkUfPW', 'ASDIKFIEF@SADF', '2018-09-03 16:39:06', ''),
(78, 'Иван', 'johns', '$2y$10$ba08WGVQ0A/ppHRa.WzRFu1im1t/uXnPOolIix7Ru.QdShySLd1zG', 'john@email.ru', '2018-09-03 16:46:03', '69oLHcc2ST'),
(79, 'Иван', 'efcolipt', '$2y$10$Gi8NuUaTblAyM9v.zXniROJhGrNpTEoJms.a3.CeCk2Iat4h5xopS', 'efcolipt@gmail.com', '2018-10-31 13:55:24', 'cAK25oCOXi'),
(80, 'sasa', 'asdasdsad', '$2y$10$Y/2W1KdPZMKKDkam/uLvDubwuS8Bay06PPfYAUWY5CFphE.5QLJVi', 'asdasd@asd', '2019-06-22 22:43:34', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Donat`
--
ALTER TABLE `Donat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `Donat`
--
ALTER TABLE `Donat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
