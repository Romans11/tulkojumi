-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Hosts: localhost
-- Izveidošanas laiks: 07.01.2015 21:08
-- Servera versija: 5.0.51
-- PHP Versija: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Datubāze: `tulkojumi`
-- 

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- 
-- Dati tabulai `vardi`
-- 

INSERT INTO `vardi` VALUES (1, 'Sveiki!', 'Hello!', 'Привет!', 'l');
INSERT INTO `vardi` VALUES (2, 'Prieks jūs redzēt.', 'Nice to meet you.', 'Приятно вас видеть.', '.o');
INSERT INTO `vardi` VALUES (3, 'Kā jūs jūtaties?', 'How are you (how do you feel)?', 'Как вы себя чувствуете?', '.o');
INSERT INTO `vardi` VALUES (4, 'Kā jums klājas?', 'How are you?', 'Как ваши дела?', '.o');
INSERT INTO `vardi` VALUES (5, 'Cik jums gadu?', 'How old are you?', 'Сколько вам лет?', '.o');
INSERT INTO `vardi` VALUES (6, 'Labdien!', 'Good afternoon!', 'Добрый день!', '.o');
INSERT INTO `vardi` VALUES (7, 'uzredzēšanos!', 'good bye!', 'до свидания!', '.o');
INSERT INTO `vardi` VALUES (8, 'Labvakar!', 'Good evening!', 'Добрый вечер!', '.o');
INSERT INTO `vardi` VALUES (9, 'Labrīt!', 'Good morning!', 'Доброе утро!', '.o');
