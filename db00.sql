-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-07-22 16:45:07
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db00`
--

-- --------------------------------------------------------

--
-- 資料表結構 `home`
--

CREATE TABLE `home` (
  `id` int(100) UNSIGNED NOT NULL,
  `allsite` int(12) NOT NULL,
  `stationsite` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `home`
--

INSERT INTO `home` (`id`, `allsite`, `stationsite`) VALUES
(1, 9619, 446);

-- --------------------------------------------------------

--
-- 資料表結構 `percentage`
--

CREATE TABLE `percentage` (
  `id` int(10) UNSIGNED NOT NULL,
  `Taipei` int(11) NOT NULL,
  `Keelung` int(11) NOT NULL,
  `Newtaipei` int(11) NOT NULL,
  `Yilan` int(11) NOT NULL,
  `Hsinchucity` int(11) NOT NULL,
  `Hsinchucounty` int(11) NOT NULL,
  `Taoyuan` int(11) NOT NULL,
  `Miaoli` int(11) NOT NULL,
  `Taichung` int(11) NOT NULL,
  `Changhua` int(11) NOT NULL,
  `Nantou` int(11) NOT NULL,
  `Chiayicity` int(11) NOT NULL,
  `Chiayicounty` int(11) NOT NULL,
  `Yunlin` int(11) NOT NULL,
  `Tainan` int(11) NOT NULL,
  `Kaohsiung` int(11) NOT NULL,
  `Pingtung` int(11) NOT NULL,
  `Taitung` int(11) NOT NULL,
  `Hualien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `percentagetw`
--

CREATE TABLE `percentagetw` (
  `id` int(10) UNSIGNED NOT NULL,
  `臺北市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `基隆市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `新北市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `宜蘭縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `新竹市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `新竹縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `桃園縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `苗栗縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `臺中市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `彰化縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `南投縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `嘉義市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `嘉義縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `雲林縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `臺南市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `高雄市` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `屏東縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `臺東縣` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `花蓮縣` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `percentagetw`
--

INSERT INTO `percentagetw` (`id`, `臺北市`, `基隆市`, `新北市`, `宜蘭縣`, `新竹市`, `新竹縣`, `桃園縣`, `苗栗縣`, `臺中市`, `彰化縣`, `南投縣`, `嘉義市`, `嘉義縣`, `雲林縣`, `臺南市`, `高雄市`, `屏東縣`, `臺東縣`, `花蓮縣`) VALUES
(1, '10.31', '4.04', '9.42', '7.62', '2.91', '3.81', '4.26', '5.16', '10.31', '6.05', '0.90', '2.02', '1.12', '2.47', '7.40', '5.83', '5.83', '2.91', '7.62'),
(2, '46', '18', '42', '34', '13', '17', '19', '23', '46', '27', '4', '9', '5', '11', '33', '26', '26', '13', '34');

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, '14');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mess` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`, `mail`, `file`, `fname`, `lname`, `addr`, `city`, `country`, `pos`, `mess`) VALUES
(1, 'admin', 'ad1234', 'admin@admin.com', 'dio.jpg', '', '', '', '', '', '', ''),
(2, 'test01', 'test01', 'test01@test.com', 'photo_12.jpg', 'Brando', 'Dio', 'MudaMudaMuda', 'NY', 'KD', '54', 'WRYYYY123'),
(3, 'test02', 'test02', 'test02@test.com', 'marc.jpg', '', '', '', '', '', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `percentage`
--
ALTER TABLE `percentage`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `percentagetw`
--
ALTER TABLE `percentagetw`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `home`
--
ALTER TABLE `home`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `percentage`
--
ALTER TABLE `percentage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `percentagetw`
--
ALTER TABLE `percentagetw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
