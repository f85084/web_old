-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jul 24, 2015, 10:06 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES (25, 'a123', '123123', '國際tw', '0977777777', '台北', '200x100_6.jpg', '2015-06-10 16:59:41');
INSERT INTO `member` VALUES (24, 'a1123', '1232', '國際tw', '00998', '台北', '200x100_2.jpg', '2015-06-10 14:19:03');
INSERT INTO `member` VALUES (29, 'root', 'root', 'root', 'r0974', 'rrr', '526_tch_uvtotal_200x', '2015-06-24 10:53:34');
INSERT INTO `member` VALUES (27, 'a456', '456', '台灣TW', '1212', '台北', '美白季kv240x160.jpg', '2015-06-22 10:35:12');
INSERT INTO `member` VALUES (28, 'a789', '789', '台灣TW', '789', '台北', '240x160.jpg', '2015-06-22 10:49:10');
INSERT INTO `member` VALUES (30, '', '', '', '', '', '', '2015-07-02 11:26:21');
INSERT INTO `member` VALUES (31, 'A767', '787', '台灣TW', '1213', '1515', '貼紙_免運.gif', '2015-07-24 00:57:16');

-- --------------------------------------------------------

-- 
-- 資料表格式： `message`
-- 

CREATE TABLE `message` (
  `message_no` int(11) NOT NULL auto_increment,
  `message_name` varchar(20) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_content` varchar(200) NOT NULL,
  `message_date` datetime NOT NULL,
  PRIMARY KEY  (`message_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- 列出以下資料庫的數據： `message`
-- 

INSERT INTO `message` VALUES (1, '25', 'anna@acaciaco.com', '123', '2015-06-22 10:01:05');
INSERT INTO `message` VALUES (2, '25', 'anna@acaciaco.com', '123', '2015-06-22 10:08:09');
INSERT INTO `message` VALUES (3, '25', 'anna@acaciaco.com', '123', '2015-06-22 10:08:21');
INSERT INTO `message` VALUES (4, '25', 'anna@acaciaco.com', '123', '2015-06-22 10:09:38');
INSERT INTO `message` VALUES (5, '25', 'anna@acaciaco.com', '99844', '2015-06-22 10:24:01');
INSERT INTO `message` VALUES (6, '27', '456@acaciaco.com', '456456HHIHI', '2015-06-23 15:21:28');
INSERT INTO `message` VALUES (7, '台灣TW', '456@acaciaco.com', 'www', '2015-06-23 15:42:52');
INSERT INTO `message` VALUES (9, '國際tw', '123@acaciaco.com', '123', '2015-06-24 11:38:43');
INSERT INTO `message` VALUES (10, '國際tw', '123@acaciaco.com', '123123', '2015-06-26 15:08:53');
INSERT INTO `message` VALUES (11, '國際tw', '123@gmail.com', 'qqqq', '2015-06-26 15:09:47');
INSERT INTO `message` VALUES (12, '國際tw', '123@gmail.com', 'qqqq123', '2015-06-26 15:10:00');
INSERT INTO `message` VALUES (13, '國際tw', '123@gmail.com', 'qwed', '2015-06-26 15:15:47');
INSERT INTO `message` VALUES (14, '國際tw', '123@gmail.com', 'qwed233', '2015-06-26 15:17:53');
INSERT INTO `message` VALUES (15, '國際tw', '123@gmail.com', 'qwed233', '2015-06-26 15:19:48');
INSERT INTO `message` VALUES (16, '國際tw', '123@gmail.com', 'qwed233', '2015-06-26 15:19:58');
INSERT INTO `message` VALUES (17, '國際tw', '123@gmail.com', 'qwed233', '2015-06-26 15:20:27');
INSERT INTO `message` VALUES (18, '國際tw', '123@gmail.com', 'qwed233', '2015-06-26 15:21:20');
INSERT INTO `message` VALUES (19, '國際tw', '123@acaciaco.com', '45512', '2015-06-26 15:40:14');
INSERT INTO `message` VALUES (20, '國際tw', '', '', '2015-06-26 16:33:12');
INSERT INTO `message` VALUES (21, '國際tw', '', '', '2015-06-26 17:37:49');
INSERT INTO `message` VALUES (22, '國際tw', '', '', '2015-06-26 17:37:52');
INSERT INTO `message` VALUES (23, '台灣TW', '1767@acaciaco.com', '767', '2015-07-24 00:58:21');
