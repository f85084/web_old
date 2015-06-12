-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Jun 12, 2015, 02:29 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- 
-- 列出以下資料庫的數據： `member`
-- 

INSERT INTO `member` VALUES (25, 'a123', '123123', '國際tw', '0977777777', '台北', '200x100_6.jpg', '2015-06-10 16:59:41');
INSERT INTO `member` VALUES (24, 'a1123', '1232', '國際tw', '00998', '台北', '200x100_2.jpg', '2015-06-10 14:19:03');
INSERT INTO `member` VALUES (23, '', '', '', '', '', '', '2015-06-10 14:18:20');

-- --------------------------------------------------------

-- 
-- 資料表格式： `message`
-- 

CREATE TABLE `message` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Content` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- 列出以下資料庫的數據： `message`
-- 

