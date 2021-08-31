-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-08-28 11:36:06
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `db_techit`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users_follow`
--

CREATE TABLE `users_follow` (
  `user_id` int(11) NOT NULL COMMENT '會員編號',
  `prod_id` int(11) NOT NULL COMMENT '商品編號',
  `prod_name` varchar(100) NOT NULL,
  `prod_thumbnail` varchar(100) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `brand_id` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users_follow`
--

INSERT INTO `users_follow` (`user_id`, `prod_id`, `prod_name`, `prod_thumbnail`, `prod_price`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 301, 'S6石頭掃地機器人 S6 MaxV', '0319.png', 1133, '8857', '2021-08-23 13:01:41', '2021-08-23 16:52:58'),
(1, 302, '石頭掃地機器人二代 S6 Pure\r\n', '0320.png', 3022, '8857', '2021-08-23 13:01:41', '2021-08-23 16:53:06'),
(1, 303, 'A10s 掃地/拖地 雷射兩用機器人\r\n\r\n', '0321.png', 766, '8837', '2021-08-23 13:01:41', '2021-08-23 16:53:11'),
(4, 312, '公子小白', '', 20000, '8807', '2021-08-24 15:10:50', '2021-08-24 15:10:50');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users_follow`
--
ALTER TABLE `users_follow`
  ADD PRIMARY KEY (`user_id`,`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
