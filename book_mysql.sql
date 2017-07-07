-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 03 月 18 日 14:23
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `book`
--
CREATE DATABASE `book` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `book`;

-- --------------------------------------------------------

--
-- 表的结构 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `user` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  KEY `time` (`time`),
  KEY `time_2` (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `board`
--


-- --------------------------------------------------------

--
-- 表的结构 `book_message`
--

CREATE TABLE IF NOT EXISTS `book_message` (
  `sy` int(15) NOT NULL DEFAULT '0',
  `book_title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `add_time` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `num` int(10) NOT NULL,
  PRIMARY KEY (`num`),
  KEY `num` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book_message`
--

INSERT INTO `book_message` (`sy`, `book_title`, `author`, `add_time`, `type`, `money`, `number`, `num`) VALUES
(1, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 36, 4, 1),
(1, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机',  49, 5, 2),
(2, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机',  25, 10, 3),
(0, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 0, 30, 4),
(0, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 0, 20, 5),
(1, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 39, 15, 6),
(1, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 39, 5, 7),
(0, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 39.8, 18, 8),
(2, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 34.8, 1, 9),
(0, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 59.9, 14, 10),
(0, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 89, 5, 11),
(1, '数据库原理', '小明', '2015-02-13 09:21:14pm', '计算机', 35, 15, 12);

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE IF NOT EXISTS `borrow` (
  `user` varchar(20) NOT NULL,
  `book_id` int(15) DEFAULT NULL,
  `time` varchar(30) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `borrow`
--

INSERT INTO `borrow` (`user`, `book_id`, `time`) VALUES
('cpc', 1, '2015-02-13 09:54:32pm'),
('cpc', 6, '2015-02-13 09:54:34pm'),
('cpc', 12, '2015-02-13 09:54:38pm'),
('cpc', 9, '2015-02-13 09:54:41pm'),
('cpc', 3, '2015-02-13 09:54:56pm'),
('ceit', 3, '2015-02-13 09:55:10pm'),
('ceit', 2, '2015-02-13 09:55:12pm'),
('ceit', 7, '2015-02-13 09:55:14pm'),
('ceit', 9, '2015-02-13 09:55:17pm');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `account` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `class` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `jibie` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT 'c',
  PRIMARY KEY (`account`,`password`,`nickname`,`class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`account`, `password`, `nickname`, `class`,`jibie`) VALUES
('ying', 'ying', '李迎港', '0','c'),
('guo', 'guo', '郭兴远', '0','b'),
('super', 'super', 'admin', '1','a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
