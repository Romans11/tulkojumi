-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Hosts: localhost
-- Izveidošanas laiks: 10.01.2015 23:20
-- Servera versija: 5.0.51
-- PHP Versija: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

USE secure_login

-- 
-- Datubāze: `secure_login`
-- 

-- --------------------------------------------------------

-- 
-- Tabulas struktūra tabulai `login_attempts`
-- 

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) collate utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dati tabulai `login_attempts`
-- 

INSERT INTO `login_attempts` VALUES (2, '1420923892');
INSERT INTO `login_attempts` VALUES (2, '1420923979');
INSERT INTO `login_attempts` VALUES (2, '1420924031');

-- --------------------------------------------------------

-- 
-- Tabulas struktūra tabulai `members`
-- 

CREATE TABLE `members` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(30) collate utf8_unicode_ci NOT NULL,
  `email` varchar(50) collate utf8_unicode_ci NOT NULL,
  `password` char(128) collate utf8_unicode_ci NOT NULL,
  `salt` char(128) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- Dati tabulai `members`
-- 

INSERT INTO `members` VALUES (1, 'test_user', 'test@example.com', '00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc', 'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef');
INSERT INTO `members` VALUES (2, 'roma', 'romanskolduns@inbox.lv', '19b8e74cc6a9c56188ec85310e4d6c441c0fe742cae587688bf19be9edbe97a57a3646dfddc1c7b670b1dc38fc302726701ded8431ce7111449a1cddccf6f82f', 'f54ee64c16a0e05f1d55b62247109247a9b18125d6838ed5ed36d18786298d0c5a2a6b4f2d6e175ccf57ef0185bb5a3f95643b7a6a4857ee67553cb54d51f331');
INSERT INTO `members` VALUES (3, 'roma1', 'roma1@inbox.lv', '7c5230e64fa1f9f83a59d82083a44a94cfce11a80e43f7e59e89634be44733dc3f5d6c4019658ae9af1d2d4c1b3370c323f0a9e564754ae6019f4383797c84d2', '56c451c68818315a1a66a3dc9741ad36ffcb3a2cf06fd9b03ae259d1f9ce50d44556f13dd7289b24f8369d6d99e0b862d2d6793bdb4301f9942bb7f991deb9d6');
