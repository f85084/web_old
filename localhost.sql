-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Sep 14, 2015, 01:47 PM
-- 伺服器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `web`
-- 
CREATE DATABASE `web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `member`
-- 

CREATE TABLE `member` (
  `number` int(11) NOT NULL auto_increment,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gif` varchar(20) NOT NULL,
  `memberdate` datetime NOT NULL,
  PRIMARY KEY  (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES (1, 'a1123', '1232', '國際tw', '00998', '台北', '200x100_2.jpg', '2015-06-10 14:19:03');
INSERT INTO `member` VALUES (2, 'a123', '123123', '國際tw', '0977777777', '台北', '200x100_6.jpg', '2015-06-10 16:59:41');
INSERT INTO `member` VALUES (3, 'a456', '456', '台灣TW', '1212', '台北', '美白季kv240x160.jpg', '2015-06-22 10:35:12');
INSERT INTO `member` VALUES (6, 'A767', '787', '台灣TW', '1213', '1515', '貼紙_免運.gif', '2015-07-24 00:57:16');
INSERT INTO `member` VALUES (4, 'a789', '789', '台灣TW', '789', '台北', '240x160.jpg', '2015-06-22 10:49:10');
INSERT INTO `member` VALUES (5, 'root', 'root', 'root', 'r0974', 'rrr', '526_tch_uvtotal_200x', '2015-06-24 10:53:34');

-- --------------------------------------------------------

-- 
-- 資料表格式： `message`
-- 

CREATE TABLE `message` (
  `message_no` int(11) NOT NULL auto_increment,
  `message_id` varchar(20) NOT NULL,
  `message_name` varchar(20) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_content` varchar(200) NOT NULL,
  `message_date` datetime NOT NULL,
  PRIMARY KEY  (`message_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

-- 
-- 列出以下資料庫的數據： `message`
-- 

INSERT INTO `message` VALUES (3, 'a789', '台灣TW', '789@gmail.com', '789', '2015-08-06 22:43:15');
INSERT INTO `message` VALUES (2, 'a456', '台灣TW', '456@acaciaco.com', 'hi\r\n\r\n\r\n456', '2015-08-06 22:42:38');
INSERT INTO `message` VALUES (1, 'a123', '國際tw', '123@gmail.com', 'hi\r\n\r\n123\r\n123', '2015-08-06 22:42:03');
INSERT INTO `message` VALUES (4, 'a456', '台灣TW', '456@acaciaco.com', '456\r\n520', '2015-08-06 22:49:25');
INSERT INTO `message` VALUES (31, 'a123', '國際tw', '123@gmail.com', '123!!!', '2015-08-10 12:06:55');
INSERT INTO `message` VALUES (32, 'a123', '國際tw', '123@gmail.com', '@@', '2015-08-10 12:13:31');
INSERT INTO `message` VALUES (33, 'a123', '國際tw', '123@gmail.com', '!!%%%', '2015-08-10 12:27:30');
INSERT INTO `message` VALUES (34, 'a123', '國際tw', '123@gmail.com', '#$$%^^&*', '2015-08-10 13:50:25');
INSERT INTO `message` VALUES (35, 'a123', '國際tw', '123@gmail.com', '@$$!!&^^(()()$', '2015-08-10 13:50:58');
INSERT INTO `message` VALUES (36, 'a123', '國際tw', '123@gmail.com', '123!!@@', '2015-08-10 13:52:09');
INSERT INTO `message` VALUES (37, 'a123', '國際tw', '123@gmail.com', 'wwww', '2015-08-13 14:10:53');
INSERT INTO `message` VALUES (38, 'a123', '國際tw', '123@gmail.com', 'kkkk', '2015-08-13 15:57:31');
INSERT INTO `message` VALUES (39, 'a123', '國際tw', '123@gmail.com', 'ss', '2015-08-13 16:00:34');
INSERT INTO `message` VALUES (40, 'a789', '台灣TW', '789@gmail.com', '!!@#!@#!#!#', '2015-08-21 15:47:06');
INSERT INTO `message` VALUES (41, 'a789', '台灣TW', '789@gmail.com', '12312!@#!3', '2015-08-21 15:49:36');
INSERT INTO `message` VALUES (42, 'a789', '台灣TW', '789@gmail.com', '1ssawe', '2015-08-21 16:00:49');
INSERT INTO `message` VALUES (43, 'a789', '台灣TW', '789@gmail.com', 'sdafadffad', '2015-08-21 16:43:55');
INSERT INTO `message` VALUES (44, 'a123', '國際tw', '123@gmail.com', 'qqq', '2015-09-07 11:51:29');
INSERT INTO `message` VALUES (45, 'a123', '國際tw', '', '', '2015-09-07 16:22:48');
