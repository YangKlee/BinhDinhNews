-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 11, 2025 lúc 01:54 PM
-- Phiên bản máy phục vụ: 9.1.0
-- Phiên bản PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `binhdinhnews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID_Art` int NOT NULL AUTO_INCREMENT,
  `ID_CAT` int DEFAULT NULL,
  `Time_modify` datetime DEFAULT NULL,
  `StaffID` int DEFAULT NULL,
  `ImageTitle` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Title` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `IS_Public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_Art`),
  KEY `ID_CAT` (`ID_CAT`),
  KEY `StaffID` (`StaffID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`ID_Art`, `ID_CAT`, `Time_modify`, `StaffID`, `ImageTitle`, `Title`, `IS_Public`) VALUES
(1, 1, '2025-04-10 15:24:19', NULL, '1.jpeg', 'Đoàn tàu chở lực lượng vào TP Hồ Chí Minh diễu binh, diễu hành được chào đón nồng ấm tại Ga Diêu Trì', 1),
(2, 1, '2025-04-11 15:28:46', NULL, '2.jpg', 'Bí thư Tỉnh ủy làm việc với Ban Thường vụ Đảng ủy UBND tỉnh', 1),
(3, 1, '2025-04-10 16:32:51', NULL, '3.jpg', 'ViruSs công khai mối tình đầu với Trần Thanh Cường, dân mạng xôn xao', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID_CAT` int NOT NULL AUTO_INCREMENT,
  `NAME_CAT` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CAT`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID_CAT`, `NAME_CAT`) VALUES
(1, 'Chính trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commment`
--

DROP TABLE IF EXISTS `commment`;
CREATE TABLE IF NOT EXISTS `commment` (
  `ID_Cmt` int NOT NULL AUTO_INCREMENT,
  `ID_Art` int DEFAULT NULL,
  `UID` int DEFAULT NULL,
  `Time_cmt` datetime DEFAULT NULL,
  `Content` text,
  PRIMARY KEY (`ID_Cmt`),
  KEY `ID_Art` (`ID_Art`),
  KEY `UID` (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffdata`
--

DROP TABLE IF EXISTS `staffdata`;
CREATE TABLE IF NOT EXISTS `staffdata` (
  `UID` int NOT NULL,
  `Alias` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `UID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) DEFAULT NULL,
  `PassWord` varchar(255) DEFAULT NULL,
  `FullName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`UID`),
  KEY `ROLE_ID` (`ROLE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `userdata`
--

INSERT INTO `userdata` (`UID`, `UserName`, `PassWord`, `FullName`, `Email`, `ROLE_ID`) VALUES
(1, 'YangKlee', '1234', 'Nguyen Khanh Duong', 'huynhkhang1407@gmail.com', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `ROLE_ID` varchar(10) NOT NULL,
  `ROLE_DESCRIPTION` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`ROLE_ID`, `ROLE_DESCRIPTION`) VALUES
('0', 'Guest'),
('1', 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `viewartdata`
--

DROP TABLE IF EXISTS `viewartdata`;
CREATE TABLE IF NOT EXISTS `viewartdata` (
  `UID` int DEFAULT NULL,
  `TimeView` datetime DEFAULT NULL,
  `ID_Art` int DEFAULT NULL,
  KEY `UID` (`UID`),
  KEY `ID_Art` (`ID_Art`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
