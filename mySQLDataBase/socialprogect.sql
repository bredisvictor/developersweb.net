-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Дек 21 2016 г., 01:30
-- Версия сервера: 5.5.52-cll-lve
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `socialprogect`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `count` int(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`count`) VALUES
(662);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `secondname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `html` int(11) NOT NULL DEFAULT '0',
  `js` int(11) DEFAULT '0',
  `php` int(10) NOT NULL DEFAULT '0',
  `angular` int(10) NOT NULL DEFAULT '0',
  `abouttext` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `avatardest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatarstatus` int(11) NOT NULL DEFAULT '0',
  `backgrounddest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `backgroundstatus` int(11) NOT NULL DEFAULT '0',
  `prog1status` int(11) NOT NULL DEFAULT '0',
  `prog1imgdest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog2status` int(11) NOT NULL DEFAULT '0',
  `prog2imgdest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog3status` int(11) NOT NULL DEFAULT '0',
  `prog3imgdest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog4status` int(11) NOT NULL DEFAULT '0',
  `prog4imgdest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `changedpass` int(1) NOT NULL,
  `progectname1` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PROJECT',
  `progectname2` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PROJECT',
  `progectname3` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PROJECT',
  `progectname4` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PROJECT',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `secondname`, `email`, `password`, `prog1`, `prog2`, `prog3`, `prog4`, `html`, `js`, `php`, `angular`, `abouttext`, `avatardest`, `avatarstatus`, `backgrounddest`, `backgroundstatus`, `prog1status`, `prog1imgdest`, `prog2status`, `prog2imgdest`, `prog3status`, `prog3imgdest`, `prog4status`, `prog4imgdest`, `phone`, `city`, `changedpass`, `progectname1`, `progectname2`, `progectname3`, `progectname4`) VALUES
(1, 'Vcitor', 'Bredis', 'thevictor85@gmail.com', 'cb84bc74f32b5d18f8ae59585d752a5f', '', '', '', '', 95, 86, 71, 13, 'I am web developer just started may lond way, but iam already walking with big and confident steps. I am very hard-working and purposeful, and my achievements will soon make themselves felt', 'pesonlImage/me.jpg', 1, 'backgroundImage/mainbackground.jpg', 1, 0, '', 0, '', 0, '', 0, '', '05431372131', 'Israel/Haifa', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(3, 'Alex', 'Shultz', 'alexsh81@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 91, 84, 96, 78, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/4-ryan_gosling_0.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(4, 'Shlomo', 'Choen', 'shco@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 98, 95, 90, 98, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/EthanAbensohn.JPG', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Tel-Aviv', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(5, 'Maher', 'Diab', 'md68@yahoo.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 84, 78, 98, 98, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/a_flashback_williams_1.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(6, 'Nir', 'Asraf', 'asrafnir82@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 89, 94, 67, 0, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/F150128YS23.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(7, 'David', 'Dukman', 'dukdav@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 99, 99, 97, 99, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/8MHeqn5z.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(8, 'Mor', 'Rivman', 'rivmannir@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 74, 98, 0, 68, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/56211b099d3f5.image.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(9, 'Sofi', 'Levi', 'soflev@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 100, 100, 100, 100, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/o-WOMAN-IN-BUSI.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(10, 'Ben', 'Soifer', 'beniben@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 78, 54, 87, 98, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/ertt.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(11, 'Alan', 'Shaulov', 'alanbalan@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 99, 100, 100, 98, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/man-059.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(12, 'Denis', 'Matrosov', 'matros@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 42, 54, 4, 4, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/imageserw.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(13, 'Riki', 'Ilizara', 'rikitiki@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 98, 57, 69, 89, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/we.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(14, 'Rami', 'Tramp', 'ramtram@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 98, 99, 100, 100, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/965-abdalla-arab-spring.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(15, 'Niki', 'Tailer', 'tailernik@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 91, 76, 58, 65, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/man-057.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(16, 'Chong', 'Yong', 'cheyoyo@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 100, 100, 100, 100, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/chi-man-choi-v2.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(17, 'Eddy', 'Fishman', 'fishedd@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 74, 56, 98, 95, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/Deep_Fried_Man_portra.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(18, 'Donald', 'Buharshki', 'buhtrah@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 97, 65, 98, 0, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/Portrait-as-an-artist-as-a-young-man.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(19, 'Ivan', 'Prostoy', 'prostovania@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 76, 65, 85, 96, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/Young_man_with_dimples.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(20, 'Monika', 'Lavichi', 'monispir@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 100, 100, 100, 100, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/ahort-curly-hairstyle4.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(21, 'Said', 'Isakov', 'isak@gamil.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 65, 96, 96, 54, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/9032866-large.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(22, 'lev', 'Nazarov', 'nazarlev@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 99, 98, 79, 76, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/whiteguy.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(23, 'Mohammad', 'Nader', 'mooha@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 92, 96, 84, 20, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/erww.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(24, 'Kevin', 'Makalkin', 'kevinm@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 68, 98, 65, 78, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/images.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT'),
(25, 'Ron', 'Mor', 'ronmor@gmail.com', '4297f44b13955235245b2497399d7a93', '', '', '', '', 78, 64, 15, 0, 'A full stack developer is capable of performing tasks at any level of the technical stack in which they reside. It means:\r\n            Working with systems infrastructure (knowing what hardware to ask for , what OS to install, how to prepare the system and dependencies for all software)\r\n            Understanding, creating, manipulating, and querying databases\r\n            API / back-end code in one or more languages, e.g. Ruby, Java, Python, etc.\r\n            Front-end code in one or more languages, e.g. HTML, JavaScript, Java, etc.', 'pesonlImage/Young_man.jpg', 1, '', 0, 0, '', 0, '', 0, '', 0, '', '0500000000', 'Unknow', 0, 'PROJECT', 'PROJECT', 'PROJECT', 'PROJECT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
