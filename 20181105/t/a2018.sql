-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-11-05 03:25:12
-- 伺服器版本: 10.1.36-MariaDB
-- PHP 版本： 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `a2018`
--

-- --------------------------------------------------------

--
-- 資料表結構 `my_pic`
--

CREATE TABLE `my_pic` (
  `m_p_seq` int(10) UNSIGNED NOT NULL,
  `m_p_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_p_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_p_del` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `my_pic`
--

INSERT INTO `my_pic` (`m_p_seq`, `m_p_name`, `m_p_url`, `m_p_del`) VALUES
(1, 'aaa', '20181029161505.png', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE `player` (
  `p_seq` int(10) UNSIGNED NOT NULL,
  `p_id` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `p_pw` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `p_name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `player`
--

INSERT INTO `player` (`p_seq`, `p_id`, `p_pw`, `p_name`) VALUES
(2, 'b02', 'bbb', '逼逼'),
(14, 'd04', 'dd', '滴滴');

-- --------------------------------------------------------

--
-- 資料表結構 `web_stop`
--

CREATE TABLE `web_stop` (
  `w_s_seq` int(10) UNSIGNED NOT NULL,
  `w_s_day` date NOT NULL COMMENT '日期',
  `w_s_week` int(1) NOT NULL COMMENT '星期',
  `w_s_start` time NOT NULL COMMENT '開始時間',
  `w_s_stop` time NOT NULL COMMENT '結束時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `web_stop`
--

INSERT INTO `web_stop` (`w_s_seq`, `w_s_day`, `w_s_week`, `w_s_start`, `w_s_stop`) VALUES
(1, '2018-10-29', 0, '14:00:00', '15:20:00');

-- --------------------------------------------------------

--
-- 資料表結構 `zoo`
--

CREATE TABLE `zoo` (
  `z_seq` int(10) UNSIGNED NOT NULL,
  `z_name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '動物名稱',
  `z_type` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '動物種類',
  `z_weigh` int(10) NOT NULL COMMENT '體重',
  `z_int` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡介',
  `z_food` int(10) NOT NULL COMMENT '動物食物'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `zoo`
--

INSERT INTO `zoo` (`z_seq`, `z_name`, `z_type`, `z_weigh`, `z_int`, `z_food`) VALUES
(4, '老鼠', '老鼠', 1, '', 3),
(5, '貓', '貓', 2, '', 4),
(7, '小強', '蟑螂', 0, '', 3),
(8, '小白', '鯊魚', 200, '', 2),
(10, '和平', '鴿子', 1, '', 4),
(11, '猴子', '黑猩猩', 50, '黑色的星星', 3),
(12, '小黑', '企鵝', 1, '', 3),
(13, '烏龍麵', '蛇', 1, '', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `zoo_food`
--

CREATE TABLE `zoo_food` (
  `z_f_seq` int(10) UNSIGNED NOT NULL,
  `z_f_food` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `zoo_food`
--

INSERT INTO `zoo_food` (`z_f_seq`, `z_f_food`) VALUES
(1, '竹子'),
(2, '老鼠'),
(3, '香蕉'),
(4, '蘋果');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `my_pic`
--
ALTER TABLE `my_pic`
  ADD PRIMARY KEY (`m_p_seq`);

--
-- 資料表索引 `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`p_seq`);

--
-- 資料表索引 `web_stop`
--
ALTER TABLE `web_stop`
  ADD PRIMARY KEY (`w_s_seq`);

--
-- 資料表索引 `zoo`
--
ALTER TABLE `zoo`
  ADD PRIMARY KEY (`z_seq`);

--
-- 資料表索引 `zoo_food`
--
ALTER TABLE `zoo_food`
  ADD PRIMARY KEY (`z_f_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `my_pic`
--
ALTER TABLE `my_pic`
  MODIFY `m_p_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `player`
--
ALTER TABLE `player`
  MODIFY `p_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表 AUTO_INCREMENT `web_stop`
--
ALTER TABLE `web_stop`
  MODIFY `w_s_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `zoo`
--
ALTER TABLE `zoo`
  MODIFY `z_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表 AUTO_INCREMENT `zoo_food`
--
ALTER TABLE `zoo_food`
  MODIFY `z_f_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
