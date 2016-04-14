-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-04-14 06:20:59
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `login`
--

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `account` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `counter` int(10) NOT NULL,
  `lasttime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `login`
--

INSERT INTO `login` (`account`, `pwd`, `email`, `phone`, `counter`, `lasttime`) VALUES
('1', '2', 'jay820130@gmail.com', '12', 0, '(Yå¹´mæœˆdæ—¥)'),
('123213', '213', 'jay820130@gmail.com', '123', 0, '0000-00-00'),
('12345', '123', 'jay820130@gmail.com', '213', 0, '0000-00-00'),
('123452', '2', 'jay820130@gmail.com', '22', 0, '2016-04-11'),
('123456', '456', 'jay820130@gmail.com', '789', 0, '0000-00-00'),
('1234567', '8', 'jay820130@gmail.com', '8', 0, '0000-00-00'),
('453', '453', 'jay820130@gmail.com', '543', 0, '0000-00-00');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
