-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 05, 2025 lúc 08:05 AM
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
  `ArticleID` int NOT NULL AUTO_INCREMENT,
  `Time_modify` datetime DEFAULT NULL,
  `AuthorID` int DEFAULT NULL,
  `AuthorGuestName` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `CategoryID` int DEFAULT NULL,
  `Title` varchar(1000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Tags` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MainImage` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ListImage` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ArticleStatus` int DEFAULT '0',
  PRIMARY KEY (`ArticleID`),
  KEY `CategoryID` (`CategoryID`),
  KEY `AuthorID` (`AuthorID`)
) ENGINE=InnoDB AUTO_INCREMENT=15658 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`ArticleID`, `Time_modify`, `AuthorID`, `AuthorGuestName`, `CategoryID`, `Title`, `Tags`, `MainImage`, `ListImage`, `ArticleStatus`) VALUES
(1, '2025-04-22 15:17:00', NULL, 'NGUYỄN HÂN', 1, 'Gặp mặt nguyên cán bộ, nhân viên Ban Đấu tranh chính trị và Binh vận tỉnh', 'cán bộ| chính trị| binh vận| Ban Đấu tranh chính trị', '360151.jpg', '1_1.jpg| 1_2.jpg| 1_3.jpg', 1),
(2, '2025-04-22 10:27:00', NULL, 'NGUYỄN HÂN', 1, 'Ban Chấp hành Đảng bộ tỉnh họp cho ý kiến về sắp xếp đơn vị hành chính cấp tỉnh và cấp xã', 'Ban Chấp hành Đảng bộ| sắp xếp đơn vị hành chính', '1_BCH_Dang_bo_1_161c9.jpg', '1 BCH Đang bo 1.jpg| 1 BCH Đang bo 2.jpg| 1 BCH Đang bo 3.jpg| 1_BCH_Dang_bo_1_161c9.jpg', 1),
(3, '2025-04-18 16:55:00', NULL, ' Kim Loan', 1, 'DỰ KIẾN 58 ĐƠN VỊ HÀNH CHÍNH CẤP XÃ CỦA TỈNH BÌNH ĐỊNH', 'sáp nhập| đơn vị hành chính| sáp nhập tỉnh', '04_bia.jpg', '04_bia.jpg', 1),
(4, '2025-04-18 15:46:00', NULL, ' Kim Loan', 1, 'Lễ kỷ niệm 53 năm Ngày giải phóng huyện Hoài Ân', 'giải phóng Hoài Ân| kỷ niệm', '1 Hoai An 1(2).jpg', '1 Hoai An 1(2).jpg| 1 Hoai An 3(1).jpg| 20250418_135724.jpg| 1 Hoai An 4(1).jpg', 1),
(5, '2025-04-16 15:14:00', NULL, 'Trang Lê', 1, '\"Hội nghị quán triệt, triển khai thực hiện Nghị quyết Hội nghị lần thứ 11, Ban chấp hành Trung ương Đảng khóa XIII', 'Nghị quyết Hội nghị lần thứ 11| Ban chấp hành Trung ương Đảng khóa XIII', '2hn.jpg', '2hn.jpg| 1 chinh.jpg| 4 hn(1).jpg| 3 To lam.jpg| 1TT HN.jpg', 1),
(6, '2025-04-04 23:29:00', NULL, 'HỒNG PHÚC', 1, 'Đoàn tàu chở lực lượng vào TP Hồ Chí Minh diễu binh, diễu hành được chào đón nồng ấm tại Ga Diêu Trì', 'diễu binh| diễu hành', 'IMG_3325.jpeg', 'IMG_3325.jpeg| IMG_3326.jpeg| IMG_3327.jpeg', 1),
(7, '2025-04-01 15:24:00', NULL, 'Trang Lê', 1, 'Bí thư Tỉnh ủy làm việc với Ban Thường vụ Đảng ủy UBND tỉnh', 'Ban Thường vụ Đảng ủy UBND tỉnh', 'DU4 _1đ.jpg', 'DU4 _1đ.jpg| DU5 _1.jpg| DU1 _1.jpg', 1),
(8, '2025-03-31 17:09:00', NULL, 'Kim Loan', 1, 'Gặp mặt, trao quyết định nghỉ hưu cho Phó Giám đốc Sở Xây dựng Võ Hữu Thiện', 'Phó Giám đốc Sở Xây dựng Võ Hữu Thiện| nghỉ hưu', '2(3).jpg', '2(3).jpg| 4(4).jpg| 3(5).jpg', 1),
(9, '2025-03-30 18:23:00', NULL, 'Trang Lê', 1, 'Gặp mặt Quân – Dân – Chính tiêu biểu tỉnh Bình Định', 'Quân – Dân – Chính| Bình Định', 'z6457122864013_24b3387fe523f6b8a0d484d39b0a824f.jpg', 'z6457122864013_24b3387fe523f6b8a0d484d39b0a824f.jpg| z6457122852396_eb2df9266fbaf03476ae035820d6eb55.jpg| z6457122868809_eab739d637b7a1299f31371c59f8e155.jpg| 3(19).jpg| 1(16).jpg| z6457122879383_3d507cd4724cba8e209929d43668bca4.jpg| 2(26).jpg', 1),
(10, '2025-03-30 22:53:00', NULL, 'DTD', 1, 'Lễ Kỷ niệm 50 năm Ngày giải phóng tỉnh Bình Định', ' Kỷ niệm 50 năm Ngày giải phóng tỉnh Bình Định', 'IMG_3187.jpeg', 'IMG_3187.jpeg| IMG_3177.jpeg| IMG_3176.jpeg| IMG_3185.jpeg|IMG_3181.jpeg', 1),
(11, '2025-04-23 07:03:00', NULL, 'THÀNH NGUYÊN', 2, 'Chung tay bảo vệ hệ sinh thái rừng ngập mặn', 'phát triển KT-XH và môi trường| tuyên truyền bảo vệ', '11.jpg', '11.jpg', 1),
(12, '2025-04-22 21:48:00', NULL, 'T.SỸ', 2, 'Vân Canh cần tập trung hỗ trợ đầu tư phát triển Khu công nghiệp Becamex VSIP Bình Định', 'phát triển KT-XH| UBND huyện Vân Canh| hỗ trợ', '12_1.jpg', '12_1.jpg| 12_2.jpg| 12_3.jpg| 12_4.jpg| 12_5.jpg| 12_6.jpg', 1),
(13, '2025-04-21 22:21:00', NULL, 'T.SỸ', 2, 'Thu hút 36 dự án đầu tư mới, tổng vốn đầu tư trên 13.596 tỷ đồng', 'xúc tiến đầu tư| dự án mới', '', '', 1),
(14, '2025-04-21 09:45:00', NULL, 'Lê Thúy/NLĐO', 2, 'Sẽ tăng mạnh nhập khẩu điện từ Lào', 'nhập khẩu điện từ Lào| nhà máy điện vận hành thương mại| Hiệp định giữa hai Chính phủ', '14.jpg', '14.jpg', 1),
(15, '2025-04-21 06:52:00', NULL, 'T.SỸ', 2, 'Các đơn vị khối huyện giải ngân trên 21% kế hoạch vốn đầu tư công năm 2025', 'giải ngân| vốn đầu tư công', '', '', 1),
(16, '2025-03-26 23:15:00', NULL, 'TRỌNG LỢI', 2, 'Thúc đẩy kinh tế xanh vì một tương lai bền vững', 'khởi nghiệp xanh| bảo vệ và cải thiện môi trường sống| GREENIF', '16.jpg', '16.jpg', 1),
(17, '2025-04-18 19:01:00', NULL, 'Trang Lê', 2, 'Lãnh đạo UBND tỉnh làm việc với Đoàn công tác của Ngân hàng thế giới', 'Bà Yoonhee Kim| ngân hàng thế giới| giải phóng mặt bằng', '17_1.jpg', '17_1.jpg| 17_2.jpg| 17_3.jpg| 17_4.jpg| 17_5.jpg', 1),
(18, '2025-03-23 16:23:00', NULL, 'TIẾN TRUNG/NDO', 2, 'Quy định mức phí duy trì tên miền quốc gia .vn từ 3.5.2025', 'tên miền quốc gia .vn| Nghị định số 82/2023/NĐ-CP', '18.jpg', '18.jpg', 1),
(19, '2025-03-19 21:46:00', NULL, 'THÀNH NGUYÊN', 2, 'Chuyển giao kỹ thuật thâm canh cây dừa theo tiêu chuẩn hữu cơ', 'thâm canh cây dừa theo tiêu chuẩn hữu cơ| Lớp tập huấn', '', '', 1),
(20, '2025-04-22 10:44:00', NULL, 'XUÂN THỨC', 2, 'Ngư dân Nhơn Lý được mùa cá gần bờ', 'Nhơn Lý (TP Quy Nhơn)| đánh bắt trong ngày| Ngư dân', '20.jpg', '20.jpg', 1),
(21, '2025-04-23 22:44:00', NULL, 'DUY KHANG', 7, 'Tiếng thơ tha thiết giữa đời thường', 'Tiếng thơ', '21.jpg', '21.jpg', 1),
(22, '2025-04-23 09:44:00', NULL, 'HUỲNH VỸ', 7, 'Chương trình nghệ thuật “Bài ca thống nhất”', 'Bài ca thống nhất', '22.jpg', '22.jpg', 1),
(23, '2025-04-24 09:44:00', NULL, 'LÊ NGỌC SƠN', 7, 'Chuyện tình của người lính trẻ Bắc Việt', 'người lính trẻ Bắc Việt', '23.jpg', '23.jpg', 1),
(24, '2025-03-21 10:02:00', NULL, 'THÁI NGÂN', 7, 'Lễ đón nhận Bằng xếp hạng di tích cấp tỉnh “Nơi tưởng niệm liệt sĩ thanh niên xung phong tỉnh Bình Định”', 'liệt sĩ thanh niên xung phong', '24.jpg', '24.jpg', 1),
(25, '2025-04-26 09:44:00', NULL, 'PHƯƠNG LAN/TTXVN', 7, 'Tổng Bí thư Tô Lâm dự Chương trình nghệ thuật đặc biệt \"Đảng trong mùa Xuân đại thắng\"', 'Đảng trong mùa Xuân đại thắng', '25.jpg', '25.jpg', 1),
(26, '2025-04-28 18:48:00', NULL, 'ĐỖ THẢO', 7, 'Hội thi Tiếng hát người khuyết tật tỉnh Bình Định lần thứ III', 'Tiếng hát người khuyết tật', '26.jpg', '26.jpg', 1),
(27, '2025-05-01 09:44:00', NULL, 'THANH HIỆP - VĂN TRUNG - BẢO TRÂN/TTO', 7, 'Pháo hoa rợp trời chào mừng 50 năm thống nhất đất nước', ' chào mừng 50 năm thống nhất đất nước', '27.jpg', '27.jpg', 1),
(28, '2025-04-29 09:44:00', NULL, 'DUY KHANG', 7, 'Phát huy tư liệu địa chí Bình Định', 'tư liệu địa chí Bình Định', '28.jpg', '28.jpg', 1),
(29, '2025-04-30 09:44:00', NULL, 'LÊ NGỌC SƠN', 7, 'Rạng rỡ sắc màu Thống nhất', ' Thống nhất', '29.jpg', '29.jpg', 1),
(30, '2025-04-28 09:44:00', NULL, 'DUY KHANG', 7, 'Xá lợi Đức Phật đã đến Việt Nam', 'Xá lợi Đức Phật', '30.jpg', '30.jpg', 1),
(31, '2025-04-24 09:52:00', NULL, 'KIỀU VY', 3, 'Giải việt dã Công đoàn UBND tỉnh năm 2025: Bệnh viện đa khoa tỉnh giành giải nhất toàn đoàn', 'chạy', '31_2.jpg', '31_1.jpg|31_2.jpg|31_3.jpg|31_4.jpg|31_5.jpg', 1),
(32, '2025-04-23 15:25:00', NULL, 'HUỲNH VỸ', 3, 'Bình Định biểu diễn võ cổ truyền tại Chương trình giao lưu Việt Nam - Triều Tiên', 'võ', '32.jpg', '32.jpg', 1),
(33, '2025-04-23 09:39:00', NULL, 'Trọng Đạt', 3, 'Việt Nam đăng cai ba giải đấu lớn cấp châu lục và khu vực của bóng đá nữ trong năm 2025', 'đá bóng| nữ', '33.jpg', '33.jpg', 1),
(34, '2025-04-22 15:28:00', NULL, 'NGUYỄN NGUYỆT', 3, 'Sôi động Giải Bóng chuyền viên chức, lao động TP Quy Nhơn năm 2025', 'bóng chuyền', '34.jpg', '34.jpg', 1),
(35, '2025-04-22 09:20:00', NULL, 'HUỲNH VỸ', 3, 'Giải bóng đá nam học sinh tiểu học TX An Nhơn 2025: Đội Trường Tiểu học số 2 Đập Đá vô địch', 'bóng đá| thiếu nhi| nhi đồng', '35.jpg', '', 1),
(36, '2022-09-21 07:59:00', NULL, 'Hoàng Trọng', 3, 'Cô gái vàng Kickboxing Việt Nam rước đuốc tại Đại hội TDTT tỉnh Bình Định', 'Kick Boxing', '36_1.jpg', '', 1),
(37, '2022-06-03 18:02:00', NULL, 'Hoàng Trọng', 3, 'Các nhà vô địch SEA Games 31 Hằng Nga, Hồng Lệ cảm động khi được tuyên dương', 'Kick Boxing', '37_1.jpg', '37_1.jpg|37_2.jpg|37_3.jpg', 1),
(38, '2025-04-24 11:07:00', NULL, 'KIÊU VY', 3, 'Giải vô địch các CLB võ cổ truyền quốc gia năm 2025: Bình Định nhất toàn đoàn nội dung quyền thuật', 'võ cổ truyền| võ thuật', '38_1.jpg', '38_1.jpg|38_2.jpg|38_3.jpg', 1),
(41, '2025-04-23 11:20:00', NULL, 'MINH NGỌC', 4, 'Tài xế taxi ngăn chặn kịp thời vụ mua bán người', 'mua bán người', 'anhbia41.jpg', '1.jpg| 2.jpg', 1),
(42, '2025-04-23 09:13:00', NULL, 'MINH NGỌC', 4, 'Tuyên truyền phòng chống tội phạm lừa đảo trên không gian mạng cho dân làng Kà Xim', 'phòng chống| lừa đảo| dân làng Kà Xim', 'anhbia42.jpg', '1.42.jpg', 1),
(43, '2025-04-22 18:00:00', NULL, 'NGUYỄN CHƠN', 4, 'Chủ tịch UBND tỉnh yêu cầu xử lý nghiêm các vụ việc nữ sinh bị hành hung', 'hành hung', '1-43.jpg', '1-43.jpg|2-43.jpg|3-43.jpg', 1),
(44, '2025-04-22 16:21:00', NULL, 'Theo Hoàng Minh/VOV)', 4, 'Cảnh báo chiêu trò lừa đảo bán vé máy bay giá rẻ trên mạng', 'lừa đảo| vé máy bay', 'anhbia44.jpg', '1-44.jpg', 1),
(45, '2025-04-22 17:32:00', NULL, 'T.LONG', 4, 'Truy bắt đối tượng cướp tài sản lẩn trốn từ TP Hồ Chí Minh ra Bình Định', 'truy bắt| cướp tài sản', 'anhbia45.jpg', '1-45.jpg', 1),
(46, '2025-04-23 15:47:00', NULL, 'MINH NGỌC', 4, 'Chỉ 1 tuần, 107 tài xế bị tước bằng lái xe', 'tước bằng lái xe', 'anhbia46.jpg', '1-46.jpg', 1),
(47, '2025-04-22 17:25:00', NULL, 'Theo DUY CƯỜNG/SGGP', 4, 'Phá đường dây rửa tiền, đánh bạc xuyên quốc gia hơn 600 tỷ đồng/tháng', 'phá đường dây', 'anhbia47.jpg', '1-47.jpg', 1),
(48, '2025-04-22 17:20:00', NULL, 'MINH NGỌC', 4, 'Quá tải ở bộ phận xử lý vi phạm giao thông qua hình ảnh', 'xử lý vi phạm giao thông', 'anhbia48.jpg', '1-48.jpg', 1),
(49, '2025-04-23 16:40:00', NULL, 'K.ANH', 4, 'Kịp thời dập tắt đám cháy tại nhà dân', 'dập tắt đám cháy', 'anhbia49.jpg', '1-49.jpg| 2-49.jpg', 1),
(50, '2025-04-23 16:43:00', NULL, 'MINH NGỌC', 4, 'Kịp thời cứu nạn thanh niên nhảy cầu Thị Nại', 'nhảy cầu', 'anhbia50.jpg', '1-50.jpg', 1),
(51, '2025-04-20 08:40:00', NULL, 'TRƯỜNG GIANG', 5, 'Bình Định tổ chức Lễ hội Văn hóa Ẩm thực lần II - 2025: Quảng bá tinh hoa ẩm thực và du lịch địa phương', 'ẩm thực| du lịch', 'anhbia51.jpg', '1-anh51.jpg', 1),
(52, '2025-04-20 08:52:00', NULL, 'Đức Hồ', 5, 'Bầu trời Quy Nhơn rợp bóng sinh vật đại dương', 'sinh vật đại dương', 'anhbia52.jpg', '1-anh52.jpg| 2-anh52.jpg', 1),
(53, '2025-04-21 18:52:00', NULL, 'Lê Trân', 5, 'Bình Định tổ chức chương trình tham quan cho đại biểu tham dự Liên hoan Truyền hình toàn quốc lần thứ 42 tại Bình Định', 'sự kiện quốc gia', 'anhbia53.jpg', '1-anh53.jpg| 2-anh53.jpg', 1),
(54, '2025-03-24 16:47:00', NULL, 'Đức Hồ', 5, '“Cháy”… vé máy bay về Bình Định', 'vé máy bay về Bình Định', 'anhbia54.jpg', '1-anh54.jpg', 1),
(55, '2025-03-25 10:47:00', NULL, 'Thu Dịu', 5, 'Vi vu cùng nắng, cát & gió', 'nắng| cát & gió', 'anhbia55.jpg', '1-anh55.jpg| 2-anh55.jpg| 3-anh55.jpg', 1),
(56, '2025-04-20 10:16:00', NULL, 'TRƯỜNG GIANG', 5, 'Vóc dáng mới ở Cát Tiến', 'Cát Tiến', 'anhbia56.jpg', '1-anh56.jpg| 2-anh56.jpg', 1),
(57, '2025-03-12 17:07:00', NULL, ' Lê Trân', 5, 'Nhà thờ Đá Ghềnh Ráng', 'Nhà thờ Đá Ghềnh Ráng', 'anhbia57.jpg', '1-anh57.jpg| 2-anh57.jpg', 1),
(58, '2025-04-01 14:19:00', NULL, 'Thị Trân', 5, 'Khu Du lịch Ghềnh Ráng Tiên Sa', 'Ghềnh Ráng Tiên Sa', 'anhbia58.jpg', '1-anh58.jpg| 2-anh58.jpg', 1),
(59, '2025-03-23 18:20:00', NULL, 'Ngọc Hân', 5, 'Cầu Thị Nại - Top 10 cây cầu nổi tiếng được du khách thích chụp ảnh nhất', 'cầu thị nhại', 'anhbia59.jpg', '1-anh59.jpg| 2-anh59.jpg', 1),
(60, '2025-03-20 18:21:00', NULL, 'Lê Trân', 5, 'Tháp Đôi - vẻ đẹp cổ kính trong lòng thành phố biển', 'tháp đôi', 'anhbia60.jpg', '1-anh60.jpg| 2-anh60.jpg', 1),
(61, '2025-04-21 05:13:00', NULL, 'PHẠM TIẾN SỸ', 6, 'Phát triển hợp tác xã theo chuỗi giá trị', 'phát triển hợp tác xã', 'anhbia61.jpg', '1.jpg', 1),
(62, '2025-03-02 21:49:00', NULL, 'HỒNG HÀ', 6, 'Hướng tới mục tiêu đột phá về chuyển đổi số và đổi mới sáng tạo', 'chuyển đổi số và đổi mới sáng tạo', 'anhbia62.jpg', '1-62.jpg| 2-62.jpg', 1),
(63, '2025-02-17 05:46:00', NULL, 'TRỌNG LỢI', 6, 'Huyện Tuy Phước quyết tâm đạt chuẩn nông thôn mới nâng cao', 'chuẩn nông thôn mới nâng cao', 'anhbia63.jpg', '1-63.jpg ', 1),
(64, '2025-03-24 06:31:00', NULL, 'HẢI YẾN', 6, 'Cơ hội lớn cho năng lượng tái tạo', 'cơ hội| năng lượng tái tạo', 'anhbia64.jpg', '1-64.jpg', 1),
(65, '2025-03-16 22:43:00', NULL, 'HẢI YẾN', 6, 'Hoài Ân đầu tư hạ tầng để tạo đà phát triển bền vững', 'đầu tư hạ tầng| phát triển', 'anhbia65.jpg', '1-65.jpg', 1),
(66, '2025-04-13 22:12:00', NULL, 'ĐINH NGỌC', 6, '25 năm gắn bó với diều khí động học', 'diều khí động học| kỷ lục Guinness Việt Nam năm 2014', 'anhbia66.jpg', '1-66.jpg', 1),
(67, '2025-01-06 06:28:00', NULL, 'HẢI YẾN', 6, 'Doanh nghiệp tiên phong tham gia chuỗi cung ứng xanh', 'doanh nghiệp| chuỗi cung ứng xanh', 'anhbia67.jpg', '1-67.jpg', 1),
(68, '2025-02-24 10:34:00', NULL, 'VĂN LỰC', 6, 'Công tác đo đạc, lập bản đồ địa chính: Góp phần nâng cao hiệu quả quản lý nhà nước về đất đai', 'quản lý nhà nước', 'anhbia68.jpg', '1-68.jpg', 1),
(69, '2025-02-09 23:29:00', NULL, 'HẢI YẾN', 6, 'Công ty CP công nghiệp KAMADO: Nỗ lực đầu tư, đảm bảo sản xuất liên tục', 'đầu tư| sản xuất liên tục', 'anhbia69.jpg', '1-69.jpg', 1),
(70, '2025-04-13 22:19:00', NULL, 'TRỌNG LỢI', 6, 'Dược liệu quý “bén rễ” vùng núi cao An Toàn', 'dược liệu quý| xuất khẩu dược liệu sạch', 'anhbia70.jpg', '1-70.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authordata`
--

DROP TABLE IF EXISTS `authordata`;
CREATE TABLE IF NOT EXISTS `authordata` (
  `AuthorID` int NOT NULL,
  `CCCD` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `FullName` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Phones` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Alias` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Organzation` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NumOfAricle` int DEFAULT '0',
  PRIMARY KEY (`AuthorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CategoryID` int NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Chính trị'),
(2, 'Kinh tế'),
(3, 'Thể thao'),
(4, 'Pháp luật'),
(5, 'Du lịch'),
(6, 'Hội nhập quốc tế'),
(7, 'Văn hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `CommentID` int NOT NULL AUTO_INCREMENT,
  `ArticleID` int DEFAULT NULL,
  `UserID` int DEFAULT NULL,
  `Timer` datetime DEFAULT CURRENT_TIMESTAMP,
  `Content` varchar(1000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `ArticleID` (`ArticleID`),
  KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiemdulich`
--

DROP TABLE IF EXISTS `diadiemdulich`;
CREATE TABLE IF NOT EXISTS `diadiemdulich` (
  `IDDiaDiem` int NOT NULL AUTO_INCREMENT,
  `IDLoaiDiaDiem` int DEFAULT NULL,
  `IDQuanHuyen` int DEFAULT NULL,
  `IDPhuongXa` int DEFAULT NULL,
  `TenDiaDiem` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ShortDecription` text COLLATE utf8mb4_vietnamese_ci,
  `MapIframe` text COLLATE utf8mb4_vietnamese_ci,
  `ListImage` text COLLATE utf8mb4_vietnamese_ci,
  PRIMARY KEY (`IDDiaDiem`),
  KEY `IDQuanHuyen` (`IDQuanHuyen`),
  KEY `IDPhuongXa` (`IDPhuongXa`),
  KEY `IDLoaiDiaDiem` (`IDLoaiDiaDiem`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidiadiemdulich`
--

DROP TABLE IF EXISTS `loaidiadiemdulich`;
CREATE TABLE IF NOT EXISTS `loaidiadiemdulich` (
  `IDLoaiDiaDiem` int NOT NULL AUTO_INCREMENT,
  `TenLoaiDiaDiem` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`IDLoaiDiaDiem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaidiadiemdulich`
--

INSERT INTO `loaidiadiemdulich` (`IDLoaiDiaDiem`, `TenLoaiDiaDiem`) VALUES
(1, 'Danh lam thắng cảnh'),
(2, 'Di tích lịch sử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongxa`
--

DROP TABLE IF EXISTS `phuongxa`;
CREATE TABLE IF NOT EXISTS `phuongxa` (
  `IDQuanHuyen` int DEFAULT NULL,
  `TenPhuongXa` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `IDPhuongXa` int NOT NULL,
  PRIMARY KEY (`IDPhuongXa`),
  KEY `IDQuanHuyen` (`IDQuanHuyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongxa`
--

INSERT INTO `phuongxa` (`IDQuanHuyen`, `TenPhuongXa`, `IDPhuongXa`) VALUES
(540, 'Phường Nhơn Bình', 21550),
(540, 'Phường Nhơn Phú', 21553),
(540, 'Phường Đống Đa', 21556),
(540, 'Phường Trần Quang Diệu', 21559),
(540, 'Phường Hải Cảng', 21562),
(540, 'Phường Quang Trung', 21565),
(540, 'Phường Thị Nại', 21568),
(540, 'Phường Lê Hồng Phong', 21571),
(540, 'Phường Trần Hưng Đạo', 21574),
(540, 'Phường Ngô Mây', 21577),
(540, 'Phường Lý Thường Kiệt', 21580),
(540, 'Phường Lê Lợi', 21583),
(540, 'Phường Trần Phú', 21586),
(540, 'Phường Bùi Thị Xuân', 21589),
(540, 'Phường Nguyễn Văn Cừ', 21592),
(540, 'Phường Ghềnh Ráng', 21595),
(540, 'Xã Nhơn Lý', 21598),
(540, 'Xã Nhơn Hội', 21601),
(540, 'Xã Nhơn Hải', 21604),
(540, 'Xã Nhơn Châu', 21607),
(542, 'Thị trấn An Lão', 21609),
(542, 'Xã An Hưng', 21610),
(542, 'Xã An Trung', 21613),
(542, 'Xã An Dũng', 21616),
(542, 'Xã An Vinh', 21619),
(542, 'Xã An Toàn', 21622),
(542, 'Xã An Tân', 21625),
(542, 'Xã An Hòa', 21628),
(542, 'Xã An Quang', 21631),
(542, 'Xã An Nghĩa', 21634),
(543, 'Thị trấn  Tam Quan', 21637),
(543, 'Thị trấn Bồng Sơn', 21640),
(543, 'Xã Hoài Sơn', 21643),
(543, 'Xã Hoài Châu Bắc', 21646),
(543, 'Xã Hoài Châu', 21649),
(543, 'Xã Hoài Phú', 21652),
(543, 'Xã Tam Quan Bắc', 21655),
(543, 'Xã Tam Quan Nam', 21658),
(543, 'Xã Hoài Hảo', 21661),
(543, 'Xã Hoài Thanh Tây', 21664),
(543, 'Xã Hoài Thanh', 21667),
(543, 'Xã Hoài Hương', 21670),
(543, 'Xã Hoài Tân', 21673),
(543, 'Xã Hoài Hải', 21676),
(543, 'Xã Hoài Xuân', 21679),
(543, 'Xã Hoài Mỹ', 21682),
(543, 'Xã Hoài Đức', 21685),
(544, 'Thị trấn Tăng Bạt Hổ', 21688),
(544, 'Xã Ân Hảo Tây', 21690),
(544, 'Xã Ân Hảo Đông', 21691),
(544, 'Xã Ân Sơn', 21694),
(544, 'Xã Ân Mỹ', 21697),
(544, 'Xã Dak Mang', 21700),
(544, 'Xã Ân Tín', 21703),
(544, 'Xã Ân Thạnh', 21706),
(544, 'Xã Ân Phong', 21709),
(544, 'Xã Ân Đức', 21712),
(544, 'Xã Ân Hữu', 21715),
(544, 'Xã Bok Tới', 21718),
(544, 'Xã Ân Tường Tây', 21721),
(544, 'Xã Ân Tường Đông', 21724),
(544, 'Xã Ân Nghĩa', 21727),
(545, 'Thị trấn Phù Mỹ', 21730),
(545, 'Thị trấn Bình Dương', 21733),
(545, 'Xã Mỹ Đức', 21736),
(545, 'Xã Mỹ Châu', 21739),
(545, 'Xã Mỹ Thắng', 21742),
(545, 'Xã Mỹ Lộc', 21745),
(545, 'Xã Mỹ Lợi', 21748),
(545, 'Xã Mỹ An', 21751),
(545, 'Xã Mỹ Phong', 21754),
(545, 'Xã Mỹ Trinh', 21757),
(545, 'Xã Mỹ Thọ', 21760),
(545, 'Xã Mỹ Hòa', 21763),
(545, 'Xã Mỹ Thành', 21766),
(545, 'Xã Mỹ Chánh', 21769),
(545, 'Xã Mỹ Quang', 21772),
(545, 'Xã Mỹ Hiệp', 21775),
(545, 'Xã Mỹ Tài', 21778),
(545, 'Xã Mỹ Cát', 21781),
(545, 'Xã Mỹ Chánh Tây', 21784),
(546, 'Thị trấn Vĩnh Thạnh', 21786),
(546, 'Xã Vĩnh Sơn', 21787),
(546, 'Xã Vĩnh Kim', 21790),
(546, 'Xã Vĩnh Hiệp', 21796),
(546, 'Xã Vĩnh Hảo', 21799),
(546, 'Xã Vĩnh Hòa', 21801),
(546, 'Xã Vĩnh Thịnh', 21802),
(546, 'Xã Vĩnh Thuận', 21804),
(546, 'Xã Vĩnh Quang', 21805),
(547, 'Thị trấn Phú Phong', 21808),
(547, 'Xã Bình Tân', 21811),
(547, 'Xã Tây Thuận', 21814),
(547, 'Xã Bình Thuận', 21817),
(547, 'Xã Tây Giang', 21820),
(547, 'Xã Bình Thành', 21823),
(547, 'Xã Tây An', 21826),
(547, 'Xã Bình Hòa', 21829),
(547, 'Xã Tây Bình', 21832),
(547, 'Xã Bình Tường', 21835),
(547, 'Xã Tây Vinh', 21838),
(547, 'Xã Vĩnh An', 21841),
(547, 'Xã Tây Xuân', 21844),
(547, 'Xã Bình Nghi', 21847),
(547, 'Xã Tây Phú', 21850),
(548, 'Thị trấn Ngô Mây', 21853),
(548, 'Xã Cát Sơn', 21856),
(548, 'Xã Cát Minh', 21859),
(548, 'Xã Cát Khánh', 21862),
(548, 'Xã Cát Tài', 21865),
(548, 'Xã Cát Lâm', 21868),
(548, 'Xã Cát Hanh', 21871),
(548, 'Xã Cát Thành', 21874),
(548, 'Xã Cát Trinh', 21877),
(548, 'Xã Cát Hải', 21880),
(548, 'Xã Cát Hiệp', 21883),
(548, 'Xã Cát Nhơn', 21886),
(548, 'Xã Cát Hưng', 21889),
(548, 'Xã Cát Tường', 21892),
(548, 'Xã Cát Tân', 21895),
(548, 'Xã Cát Tiến', 21898),
(548, 'Xã Cát Thắng', 21901),
(548, 'Xã Cát Chánh', 21904),
(549, 'Phường Bình Định', 21907),
(549, 'Phường Đập Đá', 21910),
(549, 'Xã Nhơn Mỹ', 21913),
(549, 'Phường Nhơn Thành', 21916),
(549, 'Xã Nhơn Hạnh', 21919),
(549, 'Xã Nhơn Hậu', 21922),
(549, 'Xã Nhơn Phong', 21925),
(549, 'Xã Nhơn An', 21928),
(549, 'Xã Nhơn Phúc', 21931),
(549, 'Phường Nhơn Hưng', 21934),
(549, 'Xã Nhơn Khánh', 21937),
(549, 'Xã Nhơn Lộc', 21940),
(549, 'Phường Nhơn Hoà', 21943),
(549, 'Xã Nhơn Tân', 21946),
(549, 'Xã Nhơn Thọ', 21949),
(550, 'Thị trấn Tuy Phước', 21952),
(550, 'Thị trấn Diêu Trì', 21955),
(550, 'Xã Phước Thắng', 21958),
(550, 'Xã Phước Hưng', 21961),
(550, 'Xã Phước Quang', 21964),
(550, 'Xã Phước Hòa', 21967),
(550, 'Xã Phước Sơn', 21970),
(550, 'Xã Phước Hiệp', 21973),
(550, 'Xã Phước Lộc', 21976),
(550, 'Xã Phước Nghĩa', 21979),
(550, 'Xã Phước Thuận', 21982),
(550, 'Xã Phước An', 21985),
(550, 'Xã Phước Thành', 21988),
(540, 'Xã Phước Mỹ', 21991),
(551, 'Thị trấn Vân Canh', 21994),
(551, 'Xã Canh Liên', 21997),
(551, 'Xã Canh Hiệp', 22000),
(551, 'Xã Canh Vinh', 22003),
(551, 'Xã Canh Hiển', 22006),
(551, 'Xã Canh Thuận', 22009),
(551, 'Xã Canh Hòa', 22012);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanhuyen`
--

DROP TABLE IF EXISTS `quanhuyen`;
CREATE TABLE IF NOT EXISTS `quanhuyen` (
  `TenQuanHuyen` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `IDQuanHuyen` int NOT NULL,
  PRIMARY KEY (`IDQuanHuyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quanhuyen`
--

INSERT INTO `quanhuyen` (`TenQuanHuyen`, `IDQuanHuyen`) VALUES
('Thành phố Qui Nhơn', 540),
('Huyện An Lão', 542),
('Huyện Hoài Nhơn', 543),
('Huyện Hoài Ân', 544),
('Huyện Phù Mỹ', 545),
('Huyện Vĩnh Thạnh', 546),
('Huyện Tây Sơn', 547),
('Huyện Phù Cát', 548),
('Thị xã An Nhơn', 549),
('Huyện Tuy Phước', 550),
('Huyện Vân Canh', 551);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffdata`
--

DROP TABLE IF EXISTS `staffdata`;
CREATE TABLE IF NOT EXISTS `staffdata` (
  `UserID` int NOT NULL,
  `FullName` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Phones` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `PassWord` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ROLE_ID` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  KEY `ROLE_ID` (`ROLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `ROLE_ID` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ROLE_DESCRIPTION` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`AuthorID`) REFERENCES `authordata` (`AuthorID`);

--
-- Các ràng buộc cho bảng `authordata`
--
ALTER TABLE `authordata`
  ADD CONSTRAINT `authordata_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `userdata` (`UserID`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ArticleID`) REFERENCES `article` (`ArticleID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `userdata` (`UserID`);

--
-- Các ràng buộc cho bảng `diadiemdulich`
--
ALTER TABLE `diadiemdulich`
  ADD CONSTRAINT `diadiemdulich_ibfk_1` FOREIGN KEY (`IDQuanHuyen`) REFERENCES `quanhuyen` (`IDQuanHuyen`),
  ADD CONSTRAINT `diadiemdulich_ibfk_2` FOREIGN KEY (`IDPhuongXa`) REFERENCES `phuongxa` (`IDPhuongXa`),
  ADD CONSTRAINT `diadiemdulich_ibfk_3` FOREIGN KEY (`IDLoaiDiaDiem`) REFERENCES `loaidiadiemdulich` (`IDLoaiDiaDiem`);

--
-- Các ràng buộc cho bảng `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD CONSTRAINT `phuongxa_ibfk_1` FOREIGN KEY (`IDQuanHuyen`) REFERENCES `quanhuyen` (`IDQuanHuyen`);

--
-- Các ràng buộc cho bảng `staffdata`
--
ALTER TABLE `staffdata`
  ADD CONSTRAINT `staffdata_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userdata` (`UserID`);

--
-- Các ràng buộc cho bảng `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `userdata_ibfk_1` FOREIGN KEY (`ROLE_ID`) REFERENCES `user_role` (`ROLE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
