-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 04 2019 г., 01:04
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ishop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categorys`
--

INSERT INTO `categorys` (`id`, `name_category`) VALUES
(1, 'monitors'),
(3, 'Клавиатуры'),
(4, 'ear'),
(5, 'Жесткие диски'),
(6, 'notebooks');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `Brand` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(200) NOT NULL DEFAULT 'no_img.jpg',
  `dateadd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `Brand`, `price`, `img`, `dateadd`) VALUES
(0, 4, 'Defender OutFit B720', 'Defende', 1000, '..\\img\\951009.jpg', '2019-10-01'),
(2, 4, 'Defender OutFit W765', 'Defender', 2000, '..\\img\\1.jpg', '2019-10-02'),
(3, 4, 'SmartBuy Fit', 'JBL', 1000, '..\\img\\2.jpg', '2019-10-03'),
(4, 4, 'Wirless JBL', 'JBL', 1500, '..\\img\\3.jpg', '2019-10-04'),
(5, 4, 'Беспроводные Samsung', 'Samsung', 3000, '..\\img\\4.jpg', '2019-10-05'),
(6, 4, 'Panasonic 32122(цветные)', 'Panasonic ', 790, '..\\img\\5.jpg', '2019-10-12'),
(7, 4, 'Airpods JBL2000', 'JBL', 12000, '..\\img\\6.jpg', '2019-10-08'),
(8, 4, 'Redmi true(ear-300)', 'Redmi', 2230, '..\\img\\7.jpg', '2019-10-16'),
(9, 4, 'Xiaomi Mi In-Ear Headphones', 'Redmi', 20200, '..\\img\\8.jpg', '2019-10-16'),
(10, 4, 'Defender CX 300 II', 'Defender ', 2000, '..\\img\\9.jpg', '2019-10-17'),
(11, 1, 'Predator2000', 'Acer', 14000, '..\\img\\11.jpg', '2019-10-17'),
(12, 1, 'SamsebeRejeser', 'Samsung', 133223, '..\\img\\12.jpg', '2019-10-09'),
(61, 6, 'Lenovo-a232-white', 'Lenovo', 25000, '..\\img\\61.jpg', '2019-10-09'),
(111, 1, 'Predator2321(game)', 'Acer', 14000, '..\\img\\11.jpg', '2019-10-09'),
(1111, 1, 'Predator20001', 'Acer', 14000, '..\\img\\11.jpg', '2019-10-09'),
(1112, 1, 'Predprenimatel00', 'JBL', 12300, '..\\img\\12.jpg', '2019-10-09'),
(1113, 1, 'samsebe232', 'Samsung', 12000, '..\\img\\13.jpg', '2019-10-10'),
(1114, 1, 'Nesumsung2312(asdasd0)', 'Redmi', 4000, '..\\img\\14.jpg', '2019-10-10'),
(1115, 1, 'PochtiLG', 'Samsung', 7300, '..\\img\\15.jpg', '2019-10-14'),
(1116, 1, 'VASS', 'Defender', 1999, '..\\img\\16.jpg', '2019-10-10'),
(1117, 1, 'Preeqs', 'Redmi', 5640, '..\\img\\17.jpg', '2019-10-18'),
(1118, 1, 'Dollar', 'Philips', 7800, '..\\img\\18.jpg', '2019-10-17'),
(1119, 1, 'Nichego', 'Redmi', 22000, '..\\img\\19.jpg', '2019-10-01'),
(1120, 6, 'Lenovo ideapad2000', 'Lenovo', 25000, '..\\img\\61.jpg', '2019-10-15'),
(1121, 6, 'Lenovo po motivam acer', 'Lenovo ', 25000, '..\\img\\61.jpg', '2019-10-02'),
(1122, 6, 'Asus ne len', 'Asus ', 13999, '..\\img\\62.jpg', '2019-10-02'),
(1123, 6, 'Samsung a24-idea-game', 'Samsung ', 30000, '..\\img\\63.jpg', '2019-10-10'),
(1124, 6, 'LG a00123-kilpixel', 'LG', 22399, '..\\img\\64.jpg', '2019-10-10'),
(1125, 6, 'Redmi-23-23', 'Redmi', 11999, '..\\img\\65.jpg', '2019-10-05'),
(1126, 6, 'Alcapone', '', 32123, '..\\img\\66.jpg', '0000-00-00'),
(1127, 6, 'Levis', '', 11122, '..\\img\\67.jpg', '0000-00-00'),
(1128, 6, 'H&M', '', 42000, '..\\img\\68.jpg', '0000-00-00'),
(1129, 6, 'Bershka', '', 11500, '..\\img\\69.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`) VALUES
(1, 'privet'),
(2, 'poka'),
(3, 'privet'),
(4, 'poka'),
(6, ' '),
(7, ' '),
(8, ' '),
(9, ' '),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, 'asdsad'),
(15, ' valik'),
(16, ' valik'),
(17, ' valik'),
(18, ' valik'),
(19, ' valik'),
(20, ' valik'),
(21, ' valik'),
(22, ' valik'),
(23, ' valik'),
(24, ' valik'),
(25, ' valik'),
(26, ' privet'),
(27, ' valik'),
(28, ' loller'),
(29, ' loller');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `Lastname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `Lastname`) VALUES
(24, 'valentin', 'valik', 'valik@valik.com', '12345678', 'sinyavtsev'),
(25, 'Валентин', 'valik1', 'valik@asd.com', 'valik123', 'фывыфвфы'),
(26, 'имя', 'Валик', 'valik@asd.com', 'sadasdas', 'синявцев');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1130;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
