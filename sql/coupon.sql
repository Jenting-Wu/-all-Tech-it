-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-08-28 11:36:38
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
-- 資料表結構 `coupon`
--

CREATE TABLE `coupon` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'E-mail',
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'coupon代碼',
  `isUsed` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否被使用(0:無;1:有)',
  `percentage` float NOT NULL DEFAULT 0.95 COMMENT '原價百分比',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '新增時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='優惠券';

--
-- 傾印資料表的資料 `coupon`
--

INSERT INTO `coupon` (`email`, `code`, `isUsed`, `percentage`, `created_at`, `updated_at`) VALUES
('a22@aa.aa', '200d78d7228e1aaa209cc1352082f209', 0, 0.8, '2021-08-28 15:21:48', '2021-08-28 15:21:48'),
('a22@aa.aa', '2e32a0e21efb4202006b4c0feaca594d', 0, 0.8, '2021-08-28 15:22:29', '2021-08-28 15:22:29'),
('a22@aa.aa', '32786219e2321ba7d35509239a8c3559', 0, 0.8, '2021-08-28 15:30:13', '2021-08-28 15:30:13'),
('a22@aa.aa', '8b60dd87f5b15128d3e5cfba82a413a1', 0, 0.8, '2021-08-28 14:33:55', '2021-08-28 14:33:55'),
('a22@aa.aa', '9117fb2cde18eadb0bdbb18974df4f44', 0, 0.8, '2021-08-28 15:21:32', '2021-08-28 15:21:32'),
('a22@aa.aa', 'd7868e2b7bb3a074e1cc1e82b905f13e', 0, 0.8, '2021-08-28 15:21:13', '2021-08-28 15:21:13'),
('cy820212@yahoo.com.tw', '0d354cbd5e689f097aff90903b22ce8d', 0, 0.8, '2021-08-28 14:23:05', '2021-08-28 14:23:05'),
('cy820212@yahoo.com.tw', '5a1e153f362d8ed3ae843873ad368c3b', 0, 0.8, '2021-08-28 15:31:46', '2021-08-28 15:31:46'),
('iamsophia0903@gmail.com', '10138bb6d6e6ee530129a9529101fafc', 0, 0.8, '2021-08-27 14:41:22', '2021-08-27 14:41:22'),
('shinnosuke@gmail.com', '57a229a35623cd5d0a99408ec2357100', 0, 0.8, '2021-08-26 17:39:53', '2021-08-26 17:39:53');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`email`,`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
