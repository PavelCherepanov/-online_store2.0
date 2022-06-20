-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 19 2022 г., 16:28
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `d95058y2_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--
-- Создание: Фев 28 2022 г., 11:26
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`categoryId`, `name`) VALUES
(1, 'Телефоны'),
(2, 'Планшеты'),
(3, 'Ноутбуки'),
(4, 'Компьютеры'),
(5, 'Наушники');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--
-- Создание: Фев 28 2022 г., 11:26
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` int(255) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `new` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `img`, `category`, `sale`, `new`) VALUES
(1, 'Apple iPhone X 256 ГБ «серый космос»', 75990, 'Совершенно новый дисплей Super Retina с диагональю 5,8 дюйма, который удобно\r\nлежит в руке и потрясающие выглядит, — это и есть iPhone X.', 'iphone.jpg', 1, NULL, NULL),
(2, 'Apple iMac 27\" Retina 5K Core i5 3.8 ГГц, 8 ГБ, 2 ТБ Fusion Drive, Radeon Pro 580 8 ГБ', 164990, 'Настольный компьютер, который погружает вас в контент. Буквально. Эта идея лежит\r\nв основе современного iMac — и сегодня она актуальна как никогда. Совершенно\r\nновые процессоры, инновационные графические технологии, передовые накопители\r\nи разъёмы с впечатляющей пропускной способностью — всё это новый iMac. А его\r\nдисплей Retina способен оживить любую картинку, ведь по яркости и качеству\r\nцветопередачи ему нет равных среди iMac. Работать на iMac теперь ещё интереснее\r\nи увлекательнее.', 'imac.jpg', 4, NULL, NULL),
(3, 'Apple iPad (2018) Wi-Fi + Cellular 32 ГБ, «серый космос»', 34990, 'Давайте представим, что компьютер изобрели сегодня. Какой он? Очень мощный, чтобы справляться с любыми задачами. Невероятно портативный, чтобы носить его с собой повсюду. А ещё он настолько удобный, что им можно управлять, просто прикасаясь к экрану. Или с помощью клавиатуры. И даже карандашом.1  Другими словами, это не совсем компьютер. Это новый iPad.', 'ipad.jpg', 2, 1, NULL),
(4, 'frfrfrf', 4433, 'rbgtrgtrgtrgtrgtrgrtgtrgtrgtrgtrgrtgrtgtrg', 'macbook.jpg', 3, NULL, 1),
(5, 'Mac-mini', 200000, 'Mac-mini - это пушка.', 'mac-mini.jpg', 4, NULL, 1),
(6, 'Macbook', 199000, 'Macbook - это тоже пушка.', 'macbook.jpg', 3, 1, 1),
(8, 'Еще одна пушка', 20000000, 'Еще одна пушка Еще одна пушка Еще одна пушка Еще одна пушка', 'mac-pro.jpg', 2, 1, NULL),
(9, 'Программист', 0, 'Будет целыми днями играть в консоль на вашем устройстве ', '1.JPG', 4, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
