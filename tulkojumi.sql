-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Hosts: localhost
-- Izveidošanas laiks: 09.01.2015 21:33
-- Servera versija: 5.0.51
-- PHP Versija: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Datubāze: `tulkojumi`
-- 

USE tulkojumi

-- --------------------------------------------------------

-- 
-- Tabulas struktūra tabulai `vardi`
-- 

CREATE TABLE `vardi` (
  `id` int(5) NOT NULL auto_increment,
  `lv` text collate utf8_unicode_ci NOT NULL,
  `en` text collate utf8_unicode_ci NOT NULL,
  `ru` text collate utf8_unicode_ci NOT NULL,
  `kat` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

-- 
-- Dati tabulai `vardi`
-- 

INSERT INTO `vardi` VALUES (1, 'Sveiki!', 'Hello!', 'Привет!', '.i');
INSERT INTO `vardi` VALUES (2, 'Prieks jūs redzēt.', 'Nice to meet you.', 'Приятно вас видеть.', '.o');
INSERT INTO `vardi` VALUES (3, 'Kā jūs jūtaties?', 'How are you (how do you feel)?', 'Как вы себя чувствуете?', '.o?j');
INSERT INTO `vardi` VALUES (4, 'Kā jums klājas?', 'How are you?', 'Как ваши дела?', '.o?j');
INSERT INTO `vardi` VALUES (5, 'Cik jums gadu?', 'How old are you?', 'Сколько вам лет?', '.o?j');
INSERT INTO `vardi` VALUES (6, 'Labdien!', 'Good afternoon!', 'Добрый день!', '.o');
INSERT INTO `vardi` VALUES (7, 'uzredzēšanos!', 'good bye!', 'до свидания!', '.o');
INSERT INTO `vardi` VALUES (8, 'Labvakar!', 'Good evening!', 'Добрый вечер!', '.o');
INSERT INTO `vardi` VALUES (9, 'Labrīt!', 'Good morning!', 'Доброе утро!', '.o');
INSERT INTO `vardi` VALUES (10, 'Vēlu veiksmi!', 'Have a success!', 'Успехов!', '.o');
INSERT INTO `vardi` VALUES (11, 'viens', 'one', 'один', '-s');
INSERT INTO `vardi` VALUES (12, 'divi', 'two', 'два', '-s');
INSERT INTO `vardi` VALUES (13, 'trīs', 'three', 'три', '-s');
INSERT INTO `vardi` VALUES (14, 'četri', 'four', 'четыре', '-s');
INSERT INTO `vardi` VALUES (15, 'pieci', 'five', 'пять', '-s');
INSERT INTO `vardi` VALUES (16, 'seši', 'six', 'шесть', '-s');
INSERT INTO `vardi` VALUES (17, 'septiņi', 'seven', 'семь', '-s');
INSERT INTO `vardi` VALUES (18, 'astoņi', 'eight', 'восемь', '-s');
INSERT INTO `vardi` VALUES (19, 'deviņi', 'nine', 'девять', '-s');
INSERT INTO `vardi` VALUES (20, 'desmit', 'ten', 'десять', '-s');
INSERT INTO `vardi` VALUES (21, 'vienpadsmit', 'eleven', 'одиннадцать', '-s');
INSERT INTO `vardi` VALUES (22, 'divpadsmit', 'twelve', 'двенадцать', '-s');
INSERT INTO `vardi` VALUES (23, 'Uz veselību!', 'Bless you (when szeezing)', 'Будьте здоровы!', '.i');
INSERT INTO `vardi` VALUES (24, 'atvainojiet!', 'excuse me!', 'извините!', '.o');
INSERT INTO `vardi` VALUES (25, 'Ko tas nozīmē?', 'What does it mean?', 'Что это значит?', '.o?j');
INSERT INTO `vardi` VALUES (26, 'piektdien', 'on Friday', 'в пятницу', '-a');
INSERT INTO `vardi` VALUES (27, 'pirmdien', 'on Monday', 'в понедельник', '-a');
INSERT INTO `vardi` VALUES (28, 'sestdien', 'on Saturday', 'в субботу', '-a');
INSERT INTO `vardi` VALUES (29, 'svētdien', 'on Sunday', 'в воскресенье', '-a');
INSERT INTO `vardi` VALUES (30, 'ceturtdien', 'on Thursday', 'в четверг', '-a');
INSERT INTO `vardi` VALUES (31, 'otrdien', 'on Tuesday', 'во вторник', '-a');
INSERT INTO `vardi` VALUES (32, 'trešdien', 'on Wednesday', 'в среду', '-a');
INSERT INTO `vardi` VALUES (33, 'Kāda ir jūsu dzimtā valoda?', 'What is your native language?', 'Каков ваш родной язык?', '?j');
INSERT INTO `vardi` VALUES (34, 'Cik pulkstens?', 'What time is it?', 'Сколько сейчас времени?', '?j.i');
INSERT INTO `vardi` VALUES (35, 'jā', 'yes', 'да', '-a');
INSERT INTO `vardi` VALUES (36, 'nē', 'no', 'нет', '-a');
INSERT INTO `vardi` VALUES (37, 'labi', 'good ; ok', 'хорошо', '-a');
