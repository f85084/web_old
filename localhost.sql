-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jun 23, 2015, 10:37 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES (25, 'a123', '123123', '國際tw', '0977777777', '台北', '200x100_6.jpg', '2015-06-10 16:59:41');
INSERT INTO `member` VALUES (24, 'a1123', '1232', '國際tw', '00998', '台北', '200x100_2.jpg', '2015-06-10 14:19:03');
INSERT INTO `member` VALUES (27, 'a456', '456', '台灣TW', '1212', '台北', '美白季kv240x160.jpg', '2015-06-22 10:35:12');
INSERT INTO `member` VALUES (28, 'a789', '789', '台灣TW', '789', '台北', '240x160.jpg', '2015-06-22 10:49:10');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
