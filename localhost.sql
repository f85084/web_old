-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jan 15, 2016, 03:49 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES (1, 'a1123', '1232', '國際tw', '00998', '台北', '200x100_2.jpg', '2015-06-10 14:19:03');
INSERT INTO `member` VALUES (2, 'a123', '123123', '際國123tw', '0912123123', '國際123tw', '200x100_6.jpg', '2015-06-10 16:59:41');
INSERT INTO `member` VALUES (3, 'a456', '456', '', '', '', '美白季kv240x160.jpg', '2015-06-22 10:35:12');
INSERT INTO `member` VALUES (6, 'A767', '787', '台灣TW', '1213', '1515', '貼紙_免運.gif', '2015-07-24 00:57:16');
INSERT INTO `member` VALUES (4, 'a789', '789', '', '', '', '240x160.jpg', '2015-06-22 10:49:10');
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

-- 
-- 列出以下資料庫的數據： `message`
-- 

INSERT INTO `message` VALUES (3, 'a789', '台灣TW', '789@gmail.com', '789', '2015-08-06 22:43:15');
INSERT INTO `message` VALUES (2, 'a456', '台灣TW', '456@acaciaco.com', 'hi\r\n\r\n\r\n456', '2015-08-06 22:42:38');
INSERT INTO `message` VALUES (1, 'a123', '國際tw', '123@gmail.com', 'hi\r\n1111\r\n123\r\n123', '2015-08-06 22:42:03');
INSERT INTO `message` VALUES (4, 'a456', '台灣TW', '456@acaciaco.com', '456\r\n520', '2015-08-06 22:49:25');
INSERT INTO `message` VALUES (31, 'a123', '國際tw', '123@gmail.com', '123!!!', '2015-08-10 12:06:55');
INSERT INTO `message` VALUES (32, 'a123', '國際tw', '123@gmail.com', '123@@1', '2015-08-10 12:13:31');
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
INSERT INTO `message` VALUES (45, 'a123', '國際tw', '123456@gmail.com', '123456', '2015-09-07 16:22:48');
INSERT INTO `message` VALUES (46, '', '', '', '', '2015-11-30 16:31:29');
INSERT INTO `message` VALUES (47, 'a123', '際國123tw', '123@gmail.com', '4561231', '2016-01-07 12:05:07');
INSERT INTO `message` VALUES (48, 'a123', '際國123tw', '123@gmail.com', '123', '2016-01-07 12:05:40');

-- --------------------------------------------------------

-- 
-- 資料表格式： `product`
-- 

CREATE TABLE `product` (
  `product_number` int(11) NOT NULL auto_increment,
  `product_class` varchar(20) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_sale_price` varchar(20) NOT NULL,
  `product_text` varchar(20) NOT NULL,
  `product_pic1` varchar(20) NOT NULL,
  `product_pic2` varchar(20) NOT NULL,
  `product_pic3` varchar(20) NOT NULL,
  `product_display` varchar(20) NOT NULL,
  `product_date` datetime NOT NULL,
  PRIMARY KEY  (`product_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 列出以下資料庫的數據： `product`
-- 

INSERT INTO `product` VALUES (1, '韓國', '首爾', '1299', '999', '韓國-首爾 來回', '44x44_3支入.jpg', '85x100.jpg', '100x100.jpg', 'Y', '2016-01-13 16:30:17');
INSERT INTO `product` VALUES (2, '韓國', '濟州島', '999', '888', '韓國-濟州島', '44x44_3支入.jpg', '65X110_3支入.jpg', '100x100.jpg', 'N', '2016-01-13 18:14:34');
INSERT INTO `product` VALUES (3, '韓國', '釜山', '888', '777', '韓國-釜山', '0114_ny_1.jpg', '0114_ny_2.jpg', '0114_ny_3.jpg', 'Y', '2016-01-14 10:12:26');
INSERT INTO `product` VALUES (4, '首爾', '雪嶽山', '999', '666', '雪嶽山', '1217_final_1.jpg', '1217_final_2.jpg', '1217_final_3.jpg', 'y', '2016-01-14 10:21:32');
INSERT INTO `product` VALUES (5, '日本', '北海道', '39999', '25000', '北海道', '03.jpg', '04.jpg', '04-2.jpg', 'N', '2016-01-14 10:30:16');
