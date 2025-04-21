-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2025 lúc 09:10 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

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

CREATE TABLE `article` (
  `ID_Art` int(11) NOT NULL,
  `ID_CAT` int(11) DEFAULT NULL,
  `Time_modify` datetime DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  `ImageTitle` varchar(100) NOT NULL,
  `Title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `IS_Public` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`ID_Art`, `ID_CAT`, `Time_modify`, `StaffID`, `ImageTitle`, `Title`, `IS_Public`) VALUES
(1, 1, '2025-04-10 15:24:19', NULL, '1.jpeg', 'Đoàn tàu chở lực lượng vào TP Hồ Chí Minh diễu binh, diễu hành được chào đón nồng ấm tại Ga Diêu Trì', 1),
(2, 1, '2025-04-11 15:28:46', NULL, '2.jpg', 'Bí thư Tỉnh ủy làm việc với Ban Thường vụ Đảng ủy UBND tỉnh', 1),
(3, 1, '2025-04-10 16:32:51', NULL, '1 thong tin sap nhap 1 (1).jpg', 'Thông tin kết quả lấy ý kiến cử tri đối với Đề án sắp xếp đơn vị hành chính các cấp', 1),
(4, 1, '2025-04-21 14:04:22', NULL, 'sasa.jpg', 'Chủ tịch UBND tỉnh Phạm Anh Tuấn tiếp và đối thoại với công dân', 1),
(5, 1, '2025-04-21 14:08:04', NULL, '10(22).jpg', 'Huyện Tây Sơn nhận Cờ thi đua của Chính phủ trong Lễ kỷ niệm 50 năm Ngày giải phóng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID_CAT` int(11) NOT NULL,
  `NAME_CAT` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID_CAT`, `NAME_CAT`) VALUES
(1, 'Chính trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffdata`
--

CREATE TABLE `staffdata` (
  `UID` int(11) NOT NULL,
  `Alias` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userdata`
--

CREATE TABLE `userdata` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `PassWord` varchar(255) DEFAULT NULL,
  `FullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `userdata`
--

INSERT INTO `userdata` (`UID`, `UserName`, `PassWord`, `FullName`, `Email`, `ROLE_ID`) VALUES
(1, 'YangKlee', '1234', 'Nguyen Khanh Duong', 'huynhkhang1407@gmail.com', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `ROLE_ID` varchar(10) NOT NULL,
  `ROLE_DESCRIPTION` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `viewartdata` (
  `UID` int(11) DEFAULT NULL,
  `TimeView` datetime DEFAULT NULL,
  `ID_Art` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_Art`),
  ADD KEY `ID_CAT` (`ID_CAT`),
  ADD KEY `StaffID` (`StaffID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Chỉ mục cho bảng `staffdata`
--
ALTER TABLE `staffdata`
  ADD PRIMARY KEY (`UID`);

--
-- Chỉ mục cho bảng `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `ROLE_ID` (`ROLE_ID`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Chỉ mục cho bảng `viewartdata`
--
ALTER TABLE `viewartdata`
  ADD KEY `UID` (`UID`),
  ADD KEY `ID_Art` (`ID_Art`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `ID_Art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`ID_CAT`) REFERENCES `category` (`ID_CAT`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`StaffID`) REFERENCES `userdata` (`UID`);

--
-- Các ràng buộc cho bảng `staffdata`
--
ALTER TABLE `staffdata`
  ADD CONSTRAINT `staffdata_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `userdata` (`UID`);

--
-- Các ràng buộc cho bảng `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `userdata_ibfk_1` FOREIGN KEY (`ROLE_ID`) REFERENCES `user_role` (`ROLE_ID`);

--
-- Các ràng buộc cho bảng `viewartdata`
--
ALTER TABLE `viewartdata`
  ADD CONSTRAINT `viewartdata_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `userdata` (`UID`),
  ADD CONSTRAINT `viewartdata_ibfk_2` FOREIGN KEY (`ID_Art`) REFERENCES `article` (`ID_Art`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
