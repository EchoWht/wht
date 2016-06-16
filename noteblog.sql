-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 08 日 13:54
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `noteblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `nb_blog`
--

CREATE TABLE IF NOT EXISTS `nb_blog` (
  `artid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `artorder` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `arttitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `artdate` datetime NOT NULL,
  `artcontent` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `artremark1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `artremark2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`artid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=177 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_note`
--

CREATE TABLE IF NOT EXISTS `nb_note` (
  `noteid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `noteclick` int(50) NOT NULL,
  `notetitle` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notedate` datetime NOT NULL,
  `notecontent` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `noteurl` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `noteremark1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `noteremark2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`noteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- 表的结构 `nb_user`
--

CREATE TABLE IF NOT EXISTS `nb_user` (
  `username` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passwd` char(40) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `nickname` varchar(16) DEFAULT NULL,
  `permission` int(4) NOT NULL,
  `registertime` datetime NOT NULL,
  `lastlogintime` datetime NOT NULL,
  `useronline` int(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nb_user`
--

INSERT INTO `nb_user` (`username`, `passwd`, `email`, `nickname`, `permission`, `registertime`, `lastlogintime`, `useronline`) VALUES
('Wang', '', 'echowht@qq.com', '王昊天', 1, '2016-03-01 00:00:00', '2016-03-02 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
