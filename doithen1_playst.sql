-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 15, 2024 lúc 02:20 PM
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
(383, 'gacon05', 'Gacon05', '$SHA$ce9dd23dc761c2fc$d62dc2bc442c24f320a21e9216ddc46cc08409f9a3c2e27f1ab77485ae990ca9', '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duyquang6991@gmail.com', 0, 0, NULL),
(384, 'ngkimcanh', 'NgKimCanh', '$SHA$6f776d9fb69a62f0$0ba4156f3285f43d515af028bf763c39fe4c661ed27d6bf95cf0e5f796bd7460', '2402:800:6131:9275:bd5e:4ca:5ec2:88', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'canhdaur@gmail.com', 0, 0, NULL),
(385, 'towsrucs', 'TowsRucs', '$SHA$b7b71e163610b9d2$9668174d5c8cc7738f83650269b5e994c00daa77022789d4645b3801e2ade054', '27.78.222.252', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'dqb@gmail.com', 0, 0, NULL),
(386, 'hieugamer2k8', 'Hieugamer2k8', '$SHA$88345f5230dd5103$5733f049f0e473ecc74f1fee6ee545454586ea454556abacb162f56d0e355358', '27.78.222.252', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'dqb1@gmail.com', 0, 0, NULL),
(387, 'dcbisme', 'DCBIsMe', '$SHA$15464ff6fe65ce6b$543d9626bcd8c903efcb8a90cdacf76fcd30adc0b6a751f775d091896dc14d3a', '27.78.222.252', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'dqb2@gmail.com', 0, 0, NULL),
(388, 'duikenn', 'Duikenn', '$SHA$a7c5894a61f717ab$22d93086cd5a664470c69e79b8cc2d2d4e7f1ff91b17ca20b458de2bdf0f616b', '27.78.222.252', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'dqb234@gmail.com', 0, 0, NULL),
(389, 'nguyen', 'Nguyen', '$SHA$0a912017370131ae$c871be1056982431c2f79d424d24018aa30389e86c33f257da0d22c018cb8797', '2a09:bac5:d46f:18c8::278:cd', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duongquocbao0902@gmail.com', 0, 0, NULL),
(390, 'muxau', 'muxau', '$SHA$aae2e05d28ee0888$6555e0b339707cc3cd8dc50a5681761587ab9df1d28ef89f2bd2553f6a39386c', '2a09:bac5:d46f:18c8::278:cd', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'Dqbb@gmail.com', 0, 0, NULL),
(391, 'dcb_is_me', 'DCB_Is_Me', '$SHA$2cb5c1e33a0ec96b$e4330c9da3cf501c6b68fd9305c265a11e39dcee1798de5a3564297d7a5948ff', '2a09:bac5:d46f:18c8::278:cd', NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duongquocbao060920080@gmail.com', 0, 0, NULL);

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
(11, 116, 3, 2, 23),
(12, 376, 0, 0, 0),
(13, 377, 0, 0, 0),
(14, 379, 0, 0, 0),
(17, 382, 0, 0, 0),
(19, 384, 1, 0, 1),
(20, 374, 0, 0, 0),
(21, 373, 0, 0, 0),
(22, 385, 0, 0, 0),
(23, 383, 0, 0, 0);

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
(35, 380, 'a59e4f0db186beee63b0ee0b14a1121a', 0, '13/07/2024'),
(36, 384, 'cb6332dede57238a15b4a24e6f2bb4f0', 1, '13/07/2024'),
(37, 384, '32716d18caad168d17c6a4865a12f1d7', 0, '13/07/2024'),
(38, 116, 'b125de27518a80bcf9938f37d4e6aa20', 1, '14/07/2024'),
(39, 116, '86ee3fd34a3e7c4923a15252a4c21e7e', 1, '14/07/2024'),
(40, 116, '4d9c1c972bb50c04ed422ddac568d706', 1, '14/07/2024'),
(41, 116, '84df92d3379329b0839a438f5facbf1b', 1, '14/07/2024'),
(42, 116, '9fb7a92a404d798b757c1aa054120cd0', 1, '14/07/2024'),
(43, 116, 'a7382376bd17dbaeb9977450d11bb559', 1, '14/07/2024'),
(44, 116, '39dc19b5bb5cacb01522a11f1e03f11f', 1, '14/07/2024'),
(45, 116, '05083672860165e3fa9aabc9b4b22daa', 0, '14/07/2024'),
(46, 383, 'f04c563cbcd66b363c6fc6b9dda188c1', 0, '14/07/2024'),
(47, 116, 'd5160b33c6880a688a98f8d7c36238c8', 0, '15/07/2024');

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
(255, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '14:38 13/07/2024'),
(256, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '16:39 13/07/2024'),
(257, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '17:07 13/07/2024'),
(258, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '17:07 13/07/2024'),
(259, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '17:53 13/07/2024'),
(260, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '17:54 13/07/2024'),
(261, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '17:56 13/07/2024'),
(262, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '18:12 13/07/2024'),
(263, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '18:17 13/07/2024'),
(264, 383, '2001:ee0:4d8f:3230:cc4f:5227:3b8e:441e', 'VN', 'Website', '18:23 13/07/2024'),
(265, 384, '2402:800:6131:9275:bd5e:4ca:5ec2:88', 'VN', 'Website', '19:22 13/07/2024'),
(266, 383, '113.185.104.231', 'VN', 'Website', '19:30 13/07/2024'),
(267, 116, '2402:800:61c5:f912:2d85:9d0b:5d0e:4f64', 'VN', 'Website', '08:32 14/07/2024'),
(268, 116, '2402:800:61c5:f912:2d85:9d0b:5d0e:4f64', 'VN', 'Website', '11:35 14/07/2024'),
(269, 374, '27.78.222.252', 'VN', 'Website', '12:41 14/07/2024'),
(270, 374, '27.78.222.252', 'VN', 'Website', '12:41 14/07/2024'),
(271, 373, '27.78.222.252', 'VN', 'Website', '12:42 14/07/2024'),
(272, 385, '27.78.222.252', 'VN', 'Website', '12:44 14/07/2024'),
(273, 385, '27.78.222.252', 'VN', 'Website', '12:44 14/07/2024'),
(274, 383, '2001:ee0:4d8f:3230:1def:6023:8e2e:adb5', 'VN', 'Website', '12:53 14/07/2024'),
(275, 383, '113.185.111.234', 'VN', 'Website', '20:27 14/07/2024'),
(276, 383, '2a09:bac1:7aa0:10::246:35', 'VN', 'Website', '22:16 14/07/2024'),
(277, 116, '2402:800:61c5:f912:603e:93ea:81a7:f4ad', 'VN', 'Website', '09:22 15/07/2024'),
(278, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:39 15/07/2024'),
(279, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:41 15/07/2024'),
(280, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:43 15/07/2024'),
(281, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:44 15/07/2024'),
(282, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '11:45 15/07/2024'),
(283, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '11:45 15/07/2024'),
(284, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '11:45 15/07/2024'),
(285, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:48 15/07/2024'),
(286, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:52 15/07/2024'),
(287, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:53 15/07/2024'),
(288, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '11:57 15/07/2024'),
(289, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:06 15/07/2024'),
(290, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:08 15/07/2024'),
(291, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:09 15/07/2024'),
(292, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:34 15/07/2024'),
(293, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:51 15/07/2024'),
(294, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:55 15/07/2024'),
(295, 383, '2001:ee0:4d8f:3230:e919:863e:8600:86f9', 'VN', 'Website', '12:56 15/07/2024'),
(296, 377, '2001:ee0:4d8f:3230:3c65:cd1d:c588:8ac0', 'VN', 'Website', '13:55 15/07/2024'),
(297, 383, '2001:ee0:4d8f:3230:3c65:cd1d:c588:8ac0', 'VN', 'Website', '13:56 15/07/2024'),
(298, 383, '2001:ee0:4d8f:3230:3c65:cd1d:c588:8ac0', 'VN', 'Website', '14:11 15/07/2024'),
(299, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '14:12 15/07/2024'),
(300, 383, '2001:ee0:4d8f:3230:e5d5:1d3c:2acd:92fd', 'VN', 'Website', '14:17 15/07/2024');

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
-- Cấu trúc bảng cho bảng `tong_nap`
--

CREATE TABLE `tong_nap` (
  `user_id` int(11) NOT NULL,
  `tongnap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tong_nap`
--

INSERT INTO `tong_nap` (`user_id`, `tongnap`) VALUES
(377, '0'),
(383, '0');

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
-- Chỉ mục cho bảng `tong_nap`
--
ALTER TABLE `tong_nap`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT cho bảng `freegems_info`
--
ALTER TABLE `freegems_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `link_logs`
--
ALTER TABLE `link_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT cho bảng `recharge_logs`
--
ALTER TABLE `recharge_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
