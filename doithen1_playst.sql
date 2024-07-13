-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 13, 2024 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doithen1_playst`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authme`
--

CREATE TABLE `authme` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `x` double NOT NULL DEFAULT 0,
  `y` double NOT NULL DEFAULT 0,
  `z` double NOT NULL DEFAULT 0,
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `regdate` bigint(20) NOT NULL DEFAULT 0,
  `regip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `yaw` float DEFAULT NULL,
  `pitch` float DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isLogged` smallint(6) NOT NULL DEFAULT 0,
  `hasSession` smallint(6) NOT NULL DEFAULT 0,
  `totp` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `authme`
--

INSERT INTO `authme` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`) VALUES
(116, '113nguyen', '113nguyen', '$SHA$a57bb4fb4350271c$92accde5fdac33984f9176d3d38ec0967e4f0778399d57d50416b5cebe5b311c', '2402:800:61c5:f912:c19b:f417:9353:9592', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'nguyenngoc25082007@gmail.com', 0, 0, NULL),
(372, 'phantatdung', 'phantatdung', '$SHA$a48eab50ffa75e0d$845ca093f01c264f402dccd5679f7594a408814e3554136d89eff2c50a528210', '2001:ee0:53e1:51f0:587a:ddc0:2eb1:93fd', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'phantatdung233@gmail.com', 0, 0, NULL),
(373, 'baoduongdeptrai', 'baoduongdeptrai', '$SHA$5b6c35f8ecf53723$975bd5ae71990f6daba9ea015f1610fe97d064f205d792a75de85c4a8c0a79d2', '2401:d800:5b7d:85f:b1c2:b6c9:2f01:8c79', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duongquocbao06092008@gmail.com', 0, 0, NULL),
(374, 'dutrinh1508', 'dutrinh1508', '$SHA$6cb60cbfaf91c61a$2aa60b01625aadf23dd9654ea336e5ce951f7f0d4ff00ebce9bc26cb96b88a3d', '2401:d800:5b7d:85f:b1c2:b6c9:2f01:8c79', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duongquocbao124@gmail.com', 0, 0, NULL),
(376, 'triet2011', 'Triet2011', '$SHA$d5ba4868c8f4642c$441553f5ead44b54aa3ba190510c380666e9a3779c7b67d8931129166fb39ec2', '2402:800:61c5:75db:2d38:4a8b:5f99:ad65', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'trietaha@gmail.com', 0, 0, NULL),
(377, 'cmalucky', 'cmalucky', '$SHA$2388f3ce2fcabd84$609f7242b0bbbfcd48afcca54d25955d94b883ab658df59c1c46332e6d2df007', '14.191.11.180', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'cmanghia1001@gmail.com', 0, 0, NULL),
(378, 'shero41', 'Shero41', '$SHA$6e2badf4f2756d13$6368e4691eb0c92b85d2a8df1723e66d0b31e5ad2fbf31d40de0551454608c38', '14.172.1.140', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'huynhvominhdoan01012001@gmail.com', 0, 0, NULL),
(379, 'tienkg123', 'Tienkg123', '$SHA$ac6ceda0f23df3bb$9af353faf366bb424d989d8a81b31b7430e93c722e66f044fe8f803e03777b93', '2402:800:63e4:c1db:4dab:e416:9d27:c1ce', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tutikg590@gmail.com', 0, 0, NULL),
(383, 'gacon05', 'Gacon05', '$SHA$e91abba508e83e38$0b6b11d18126535996aef42e5704c1c5934042709006c45e516956d033b2809f', '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duyquang6991@gmail.com', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `freegems_info`
--

CREATE TABLE `freegems_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `turns` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `freegems_info`
--

INSERT INTO `freegems_info` (`id`, `user_id`, `count`, `turns`, `total`) VALUES
(10, 372, 0, 0, 0),
(11, 116, 6, 1, 16),
(12, 376, 0, 0, 0),
(13, 377, 0, 0, 0),
(14, 379, 0, 0, 0),
(17, 382, 0, 0, 0),
(18, 383, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_logs`
--

CREATE TABLE `link_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `used` tinyint(1) DEFAULT 0,
  `create_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `link_logs`
--

INSERT INTO `link_logs` (`id`, `user_id`, `token`, `used`, `create_time`) VALUES
(31, 371, '84494b10490affcc2eb25082d527595c', 0, '12/07/2024'),
(32, 116, '7625177dfce3e9a1da6e4bd6791ea320', 0, '12/07/2024'),
(33, 375, '8bb3e1c5e265770fb84fe0526ce392d7', 0, '12/07/2024'),
(34, 116, '4e6c4d9555ebf2ed4ff0d248a2a6cf58', 0, '13/07/2024'),
(35, 380, 'a59e4f0db186beee63b0ee0b14a1121a', 0, '13/07/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `nation` text NOT NULL,
  `source` text NOT NULL,
  `create_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `ip`, `nation`, `source`, `create_time`) VALUES
(209, 371, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '19:25 12/07/2024'),
(210, 371, '113.185.108.128', 'VN', 'Website', '19:57 12/07/2024'),
(211, 371, '113.185.108.128', 'VN', 'Website', '20:07 12/07/2024'),
(212, 371, '113.185.108.128', 'VN', 'Website', '20:10 12/07/2024'),
(213, 371, '113.185.108.128', 'VN', 'Website', '20:10 12/07/2024'),
(214, 371, '113.185.108.128', 'VN', 'Website', '20:11 12/07/2024'),
(215, 372, '2001:ee0:53e1:51f0:587a:ddc0:2eb1:93fd', 'VN', 'Website', '20:13 12/07/2024'),
(216, 371, '113.185.108.128', 'VN', 'Website', '20:42 12/07/2024'),
(217, 372, '2001:ee0:53e1:51f0:587a:ddc0:2eb1:93fd', 'VN', 'Website', '20:51 12/07/2024'),
(218, 371, '113.185.108.128', 'VN', 'Website', '20:53 12/07/2024'),
(219, 371, '113.185.108.128', 'VN', 'Website', '21:07 12/07/2024'),
(220, 372, '2001:ee0:53e1:51f0:587a:ddc0:2eb1:93fd', 'VN', 'Website', '21:11 12/07/2024'),
(221, 372, '2001:ee0:53e1:51f0:587a:ddc0:2eb1:93fd', 'VN', 'Website', '21:16 12/07/2024'),
(222, 371, '113.185.108.128', 'VN', 'Website', '21:19 12/07/2024'),
(223, 371, '113.185.108.128', 'VN', 'Website', '21:21 12/07/2024'),
(224, 371, '113.185.108.128', 'VN', 'Website', '21:24 12/07/2024'),
(225, 371, '113.185.108.128', 'VN', 'Website', '21:44 12/07/2024'),
(226, 371, '113.185.108.128', 'VN', 'Website', '21:48 12/07/2024'),
(227, 371, '113.185.108.128', 'VN', 'Website', '22:04 12/07/2024'),
(228, 375, '2402:800:61c5:f912:c19b:f417:9353:9592', 'VN', 'Website', '22:12 12/07/2024'),
(229, 376, '2402:800:61c5:75db:2d38:4a8b:5f99:ad65', 'VN', 'Website', '22:12 12/07/2024'),
(230, 377, '14.191.11.180', 'VN', 'Website', '22:13 12/07/2024'),
(231, 377, '14.191.11.180', 'VN', 'Website', '22:14 12/07/2024'),
(232, 377, '14.191.11.180', 'VN', 'Website', '22:14 12/07/2024'),
(233, 371, '113.185.108.128', 'VN', 'Website', '22:17 12/07/2024'),
(234, 377, '14.191.11.180', 'VN', 'Website', '22:18 12/07/2024'),
(235, 371, '113.185.108.128', 'VN', 'Website', '22:21 12/07/2024'),
(236, 371, '113.185.108.128', 'VN', 'Website', '22:33 12/07/2024'),
(237, 375, '2402:800:61c5:f912:c19b:f417:9353:9592', 'VN', 'Website', '22:35 12/07/2024'),
(238, 116, '2402:800:61c5:f912:c19b:f417:9353:9592', 'VN', 'Website', '22:41 12/07/2024'),
(239, 371, '113.185.108.128', 'VN', 'Website', '00:29 13/07/2024'),
(240, 371, '113.185.108.128', 'VN', 'Website', '00:29 13/07/2024'),
(241, 379, '2402:800:63e4:c1db:4dab:e416:9d27:c1ce', 'VN', 'Website', '09:13 13/07/2024'),
(242, 380, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '13:26 13/07/2024'),
(243, 380, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '13:33 13/07/2024'),
(244, 381, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '13:36 13/07/2024'),
(245, 382, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '13:40 13/07/2024'),
(246, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '13:46 13/07/2024'),
(247, 383, '14.191.11.180', 'VN', 'Website', '13:53 13/07/2024'),
(248, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '14:06 13/07/2024'),
(249, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:07 13/07/2024'),
(250, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:18 13/07/2024'),
(251, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:24 13/07/2024'),
(252, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:25 13/07/2024'),
(253, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:25 13/07/2024'),
(254, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '14:36 13/07/2024'),
(255, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '14:38 13/07/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recharge_logs`
--

CREATE TABLE `recharge_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trans_id` text NOT NULL,
  `amount` text NOT NULL,
  `amount2` text NOT NULL,
  `gems` text NOT NULL,
  `method` text NOT NULL,
  `status` text NOT NULL,
  `create_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` mediumint(8) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'host_rcon', '157.66.219.152'),
(2, 'port_rcon', '26624'),
(3, 'pass_rcon', 'PlayST@2024'),
(4, 'timeout_rcon', '3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vong_quay`
--

CREATE TABLE `vong_quay` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `percent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `vong_quay`
--

INSERT INTO `vong_quay` (`id`, `name`, `percent`) VALUES
(1, 'May mắn lần sau', 50),
(2, '1 Gems', 20),
(3, '2 Gems', 15),
(7, '5 Gems', 8),
(8, '10 Gems', 6),
(9, '50 Gems', 3),
(10, '100 Gems', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authme`
--
ALTER TABLE `authme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `freegems_info`
--
ALTER TABLE `freegems_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_logs`
--
ALTER TABLE `link_logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recharge_logs`
--
ALTER TABLE `recharge_logs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vong_quay`
--
ALTER TABLE `vong_quay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authme`
--
ALTER TABLE `authme`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT cho bảng `freegems_info`
--
ALTER TABLE `freegems_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `link_logs`
--
ALTER TABLE `link_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT cho bảng `recharge_logs`
--
ALTER TABLE `recharge_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
