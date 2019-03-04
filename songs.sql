-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 25 2019 г., 08:52
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sontify`
--

-- --------------------------------------------------------

--
-- Структура таблицы `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(1, 'Acoustic Breeze', 1, 1, 8, '2:37', 'assets/music/bensound-acousticbreeze.mp3', 1, 0),
(2, 'A new beginning', 1, 5, 1, '2:34', 'assets/music/bensound-anewbeginning.mp3', 2, 0),
(3, 'Better Days', 1, 5, 2, '2:33', 'assets/music/bensound-anewbeginning.mp3', 3, 0),
(4, 'Buddy', 1, 5, 3, '2:02', 'assets/music/bensound-buddy.mp3', 4, 0),
(5, 'Clear Day', 1, 5, 4, '1:29', 'assets/music/bensound-clearday.mp3', 5, 0),
(6, 'Going Higher', 2, 1, 1, '4:04', 'assets/music/bensound-goinghigher.mp3', 1, 0),
(7, 'Funny Song', 2, 4, 2, '3:07', 'assets/music/bensound-funnysong.mp3', 2, 0),
(8, 'Funky Element', 2, 1, 3, '3:09', 'assets/music/bensound-funkyelement.mp3', 2, 0),
(9, 'Extreme Action', 2, 1, 4, '8:03', 'assets/music/bensound-extremeaction.mp3', 3, 0),
(10, 'Epic', 2, 4, 5, '2:58', 'assets/music/bensound-epic.mp3', 3, 0),
(11, 'Energy', 2, 1, 6, '2:59', 'assets/music/bensound-energy.mp3', 4, 0),
(12, 'Dubstep', 2, 1, 7, '2:03', 'assets/music/bensound-dubstep.mp3', 5, 0),
(13, 'Happines', 3, 6, 8, '4:21', 'assets/music/bensound-happiness.mp3', 5, 0),
(14, 'Happy Rock', 3, 6, 9, '1:45', 'assets/music/bensound-happyrock.mp3', 2, 0),
(15, 'Jazzy Frenchy', 3, 6, 10, '1:44', 'assets/music/bensound-jazzyfrenchy.mp3', 3, 0),
(16, 'Litle Idea', 3, 6, 1, '2:49', 'assets/music/bensound-littleidea.mp3', 2, 0),
(17, 'Memories', 3, 6, 2, '3:50', 'assets/music/bensound-memories.mp3', 1, 0),
(18, 'Mooose', 4, 7, 1, '2:43', 'assets/music/bensound-moose.mp3', 5, 0),
(19, 'Novembe', 4, 7, 2, '3:32', 'assets/music/bensound-november.mp3', 4, 0),
(20, 'Ol Elias Dream', 4, 7, 3, '4:58', 'assets/music/bensound-ofeliasdream.mp3', 3, 0),
(21, 'Pop Dance', 4, 7, 2, '2:42', 'assets/music/bensound-popdance.mp3', 2, 0),
(22, 'Retro Soul', 4, 7, 5, '', 'assets/music/bensound-retrosoul.mp3', 1, 0),
(23, 'Sad Day', 5, 2, 1, '2:28', 'assets/music/bensound-sadday.mp3', 1, 0),
(24, 'Sci-ti', 5, 2, 2, '4:44', 'assets/music/bensound-sadday.mp3', 2, 0),
(25, 'Sow Motion', 5, 2, 3, '3:26', 'assets/music/bensound-slowmotion.mp3', 3, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
