-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 10 2022 г., 00:39
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wdl5_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int(255) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(19) NOT NULL,
  `attached_file` varchar(100) NOT NULL,
  `user_agent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `sender_name`, `email`, `message`, `ip`, `attached_file`, `user_agent`) VALUES
(1, 'Jack', 'jack@dumb.com', 'i\'am geniuos', '::1', 'Screenshot (1).jpg', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebK'),
(2, 'Alice', 'Alice555@r1.com', 'hello', '::1', 'readme.txt', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebK'),
(3, 'Mike', 'mike34@gmail.com', 'akuna matata', '::1', '85789c2026e9c81b.txt', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebK'),
(4, 'Tom', 'Tom@r1.com', 'hi everyone', '::1', 'winhlp32.exe', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
