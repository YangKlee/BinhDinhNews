-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2025 lúc 03:34 PM
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
  `ArticleID` int(11) NOT NULL,
  `Time_modify` datetime DEFAULT NULL,
  `AuthorID` int(11) DEFAULT NULL,
  `AuthorGuestName` varchar(255) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Title` varchar(1000) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  `MainImage` varchar(100) DEFAULT NULL,
  `ListImage` varchar(255) DEFAULT NULL,
  `ArticleStatus` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
(15, '2025-04-21 06:52:00', NULL, 'T.SỸ', 2, 'CácB10:F16 đơn vị khối huyện giải ngân trên 21% kế hoạch vốn đầu tư công năm 2025', 'giải ngân| vốn đầu tư công', '', '', 1),
(16, '2025-03-26 23:15:00', NULL, 'TRỌNG LỢI', 2, 'Thúc đẩy kinh tế xanh vì một tương lai bền vững', 'khởi nghiệp xanh| bảo vệ và cải thiện môi trường sống| GREENIF', '16.jpg', '16.jpg', 1),
(17, '2025-04-18 19:01:00', NULL, 'Trang Lê', 2, 'Lãnh đạo UBND tỉnh làm việc với Đoàn công tác của Ngân hàng thế giới', 'Bà Yoonhee Kim| ngân hàng thế giới| giải phóng mặt bằng', '17_1.jpg', '17_1.jpg| 17_2.jpg| 17_3.jpg| 17_4.jpg| 17_5.jpg', 1),
(18, '2025-03-23 16:23:00', NULL, 'TIẾN TRUNG/NDO', 2, 'Quy định mức phí duy trì tên miền quốc gia .vn từ 3.5.2025', 'tên miền quốc gia .vn| Nghị định số 82/2023/NĐ-CP', '18.jpg', '18.jpg', 1),
(19, '2025-03-19 21:46:00', NULL, 'THÀNH NGUYÊN', 2, 'Chuyển giao kỹ thuật thâm canh cây dừa theo tiêu chuẩn hữu cơ', 'thâm canh cây dừa theo tiêu chuẩn hữu cơ| Lớp tập huấn', '', '', 1),
(20, '2025-04-22 10:44:00', NULL, 'XUÂN THỨC', 2, 'Ngư dân Nhơn Lý được mùa cá gần bờ', 'Nhơn Lý (TP Quy Nhơn)| đánh bắt trong ngày| Ngư dân', '20.jpg', '20.jpg', 1),
(31, '2025-04-24 09:52:00', NULL, 'KIỀU VY', 3, 'Giải việt dã Công đoàn UBND tỉnh năm 2025: Bệnh viện đa khoa tỉnh giành giải nhất toàn đoàn', 'chạy', '31_2.jpg', '', 1),
(32, '2025-04-23 15:25:00', NULL, 'HUỲNH VỸ', 3, 'Bình Định biểu diễn võ cổ truyền tại Chương trình giao lưu Việt Nam - Triều Tiên', 'võ', '32.jpg', '', 1),
(33, '2025-04-23 09:39:00', NULL, 'Trọng Đạt', 3, 'Việt Nam đăng cai ba giải đấu lớn cấp châu lục và khu vực của bóng đá nữ trong năm 2025', 'đá bóng| nữ', '33.jpg', '', 1),
(34, '2025-04-22 15:28:00', NULL, 'NGUYỄN NGUYỆT', 3, 'Sôi động Giải Bóng chuyền viên chức, lao động TP Quy Nhơn năm 2025', 'bóng chuyền', '34_jpg', '', 1),
(35, '2025-04-22 09:20:00', NULL, 'HUỲNH VỸ', 3, 'Giải bóng đá nam học sinh tiểu học TX An Nhơn 2025: Đội Trường Tiểu học số 2 Đập Đá vô địch', 'bóng đá| thiếu nhi| nhi đồng', '35.jpg', '', 1),
(36, '2022-09-21 07:59:00', NULL, 'Hoàng Trọng', 3, 'Cô gái vàng Kickboxing Việt Nam rước đuốc tại Đại hội TDTT tỉnh Bình Định', 'Kick Boxing', '36_1.jpg', '', 1),
(37, '2022-06-03 18:02:00', NULL, 'Hoàng Trọng', 3, 'Các nhà vô địch SEA Games 31 Hằng Nga, Hồng Lệ cảm động khi được tuyên dương', 'Kick Boxing', '37_1.jpg', '', 1),
(38, '2025-04-24 11:07:00', NULL, 'KIÊU VY', 3, 'Giải vô địch các CLB võ cổ truyền quốc gia năm 2025: Bình Định nhất toàn đoàn nội dung quyền thuật', 'võ cổ truyền| võ thuật', '38_1.jpg', '', 1),
(41, '2025-04-23 11:20:00', NULL, 'MINH NGỌC', 4, 'Tài xế taxi ngăn chặn kịp thời vụ mua bán người', 'mua bán người', 'anhbia41.jpg', '1.jpg| 2.jpg', 1),
(42, '2025-04-23 09:13:00', NULL, 'MINH NGỌC', 4, 'Tuyên truyền phòng chống tội phạm lừa đảo trên không gian mạng cho dân làng Kà Xim', 'phòng chống| lừa đảo| dân làng Kà Xim', 'anhbia42.jpg', '1.42.jpg', 1),
(43, '2025-04-22 18:00:00', NULL, 'NGUYỄN CHƠN', 4, 'Chủ tịch UBND tỉnh yêu cầu xử lý nghiêm các vụ việc nữ sinh bị hành hung', 'hành hung', '', '', 1),
(44, '2025-04-22 16:21:00', NULL, 'Theo Hoàng Minh/VOV)', 4, 'Cảnh báo chiêu trò lừa đảo bán vé máy bay giá rẻ trên mạng', 'lừa đảo| vé máy bay', 'anhbia44.jpg', '1-44.jpg', 1),
(45, '2025-04-22 17:32:00', NULL, 'T.LONG', 4, 'Truy bắt đối tượng cướp tài sản lẩn trốn từ TP Hồ Chí Minh ra Bình Định', 'truy bắt| cướp tài sản', 'anhbia45.jpg', '1-45.jpg', 1),
(46, '2025-04-23 15:47:00', NULL, 'MINH NGỌC', 4, 'Chỉ 1 tuần, 107 tài xế bị tước bằng lái xe', 'tước bằng lái xe', 'anhbia46.jpg', '1-46.jpg', 1),
(47, '2025-04-22 17:25:00', NULL, 'Theo DUY CƯỜNG/SGGP', 4, 'Phá đường dây rửa tiền, đánh bạc xuyên quốc gia hơn 600 tỷ đồng/tháng', 'phá đường dây', 'anhbia47.jpg', '1-47.jpg', 1),
(48, '2025-04-22 17:20:00', NULL, 'MINH NGỌC', 4, 'Quá tải ở bộ phận xử lý vi phạm giao thông qua hình ảnh', 'xử lý vi phạm giao thông', 'anhbia48.jpg', '1-48.jpg', 1),
(49, '2025-04-23 16:40:00', NULL, 'K.ANH', 4, 'Kịp thời dập tắt đám cháy tại nhà dân', 'dập tắt đám cháy', 'anhbia49.jpg', '1-49.jpg| 2-49.jpg', 1),
(50, '2025-04-23 16:43:00', NULL, 'MINH NGỌC', 4, 'Kịp thời cứu nạn thanh niên nhảy cầu Thị Nại', 'nhảy cầu', 'anhbia50.jpg', '1-50.jpg', 1),
(51, '2025-04-20 08:40:00', NULL, 'TRƯỜNG GIANG', 5, 'Bình Định tổ chức Lễ hội Văn hóa Ẩm thực lần II - 2025: Quảng bá tinh hoa ẩm thực và du lịch địa phương', 'ẩm thực| du lịch', 'anhbia51.jpg', '1-anh51.jpg', 1),
(52, '2025-04-20 08:52:00', NULL, 'Đức Hồ', 5, 'Bầu trời Quy Nhơn rợp bóng sinh vật đại dương', 'sinh vật đại dương', 'anhbia52.jpg', '1-anh52.jpg| 2-anh52.jpg', 1),
(53, '2025-04-21 18:52:00', NULL, 'Lê Trân', 5, 'Bình Định tổ chức chương trình tham quan cho đại biểu tham dự Liên hoan Truyền hình toàn quốc lần thứ 42 tại Bình Định', 'sự kiện quốc gia', ' anhbia53.jpg', '1-anh53.jpg| 2-anh53.jpg', 1),
(54, '2025-03-24 16:47:00', NULL, 'Đức Hồ', 5, '“Cháy”… vé máy bay về Bình Định', 'vé máy bay về Bình Định', 'anhbia54.jpg', '1-anh54.jpg', 1),
(55, '2025-03-25 10:47:00', NULL, 'Thu Dịu', 5, 'Vi vu cùng nắng, cát & gió', 'nắng| cát & gió', 'anhbia55.jpg', '1-anh55.jpg| 2-anh55.jpg| 3-anh55.jpg', 1),
(56, '2025-04-20 10:16:00', NULL, 'TRƯỜNG GIANG', 5, 'Vóc dáng mới ở Cát Tiến', 'Cát Tiến', ' anhbia56.jpg', '1-anh56.jpg| 2-anh56.jpg', 1),
(57, '2025-03-12 17:07:00', NULL, ' Lê Trân', 5, 'Nhà thờ Đá Ghềnh Ráng', 'Nhà thờ Đá Ghềnh Ráng', 'anhbia57.jpg', '1-anh57.jpg| 2-anh57.jpg', 1),
(58, '2025-04-01 14:19:00', NULL, 'Thị Trân', 5, 'Khu Du lịch Ghềnh Ráng Tiên Sa', 'Ghềnh Ráng Tiên Sa', ' anhbia58.jpg', '1-anh58.jpg| 2-anh58.jpg', 1),
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

CREATE TABLE `authordata` (
  `AuthorID` int(11) NOT NULL,
  `CCCD` varchar(100) DEFAULT NULL,
  `FullName` varchar(100) NOT NULL,
  `Phones` varchar(10) DEFAULT NULL,
  `Alias` varchar(100) DEFAULT NULL,
  `Organzation` varchar(255) DEFAULT NULL,
  `NumOfAricle` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Chính trị'),
(2, 'Kinh tế'),
(3, 'Thể thao'),
(4, 'Pháp luật'),
(5, 'Du lịch'),
(6, 'Hội nhập quốc tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `ArticleID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Timer` datetime DEFAULT current_timestamp(),
  `Content` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiemdulich`
--

CREATE TABLE `diadiemdulich` (
  `IDDiaDiem` int(11) NOT NULL,
  `IDLoaiDiaDiem` int(11) DEFAULT NULL,
  `IDQuanHuyen` int(11) DEFAULT NULL,
  `IDPhuongXa` int(11) DEFAULT NULL,
  `TenDiaDiem` varchar(255) DEFAULT NULL,
  `ShortDecription` text DEFAULT NULL,
  `MapIframe` text DEFAULT NULL,
  `ListImage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiemdulich`
--

INSERT INTO `diadiemdulich` (`IDDiaDiem`, `IDLoaiDiaDiem`, `IDQuanHuyen`, `IDPhuongXa`, `TenDiaDiem`, `ShortDecription`, `MapIframe`, `ListImage`) VALUES
(1, 1, 9, 127, 'Khu sinh thái Cồn Chim', 'Nằm cách Tp. Quy Nhơn khoảng 15km, thuộc xã Phước Sơn, Phước Hòa, Phước Thuận - huyện Tuy Phước. Khu sinh thái Cồn Chim như một “ốc đảo” lọt thỏm giữa bốn bề xanh ngắt - xanh nước, xanh trời và xanh rừng ngập mặn. Những ngày gió lặng biển êm, có dịp xuôi thuyền trên đầm Thị Nại, du khách sẽ được hòa mình vào bầu không khí trong lành cùng với cảnh sắc thiên nhiên đẹp hữu tình và quyến rũ, “lá phổi xanh” của thành phố Quy Nhơn, cái tên khá quen thuộc và hấp dẫn du khách khi đến Bình Định.  \r\nKhu sinh thái Cồn Chim rộng 480 ha, nằm giữa một vùng đầm phá mênh mông giữa rừng ngập mặn. Bên dưới mặt nước là nguồn lợi thủy sản đa dạng, phong phú, với các loài thủy sản có giá trị cao như: tôm, cua, cá mu, cá hồng, cá dìa, cá đối, các loài nhuyễn thể.. Cùng hệ sinh thái thảm cỏ biển ngày càng được phục hồi và phát triển. Bên trên tán rừng ngập mặn là nơi trú ngụ của quần thể các loài chim, cò đặc hữu và các loài chim di trú theo mùa... Vào những buổi chiều tà, từng đàn cò bay về rợp trời, những tối trăng tròn chìm ngập trong rừng ngập mặn xanh tươi, Cồn Chim huyền ảo như chốn thần tiên.  \r\nTừ khu sinh thái Cồn Chim du khách có thể dễ dàng di chuyển đến các điểm đến du lịch khác ở khu vực lân cận, như Tiểu chủng viện Làng Sông, chùa Linh Phong, đảo Hòn Khô... Từ thành phố Quy Nhơn, chưa đến một giờ đi thuyến, hoặc chỉ khoảng 30 phút đi xe và qua một chuyến đò ngang là du khách đã đến Khu sinh thái Cồn Chim. Nơi đây sẽ mang lại cho du khách những khoảnh khắc sống cùng thiên nhiên hay những trải nghiệm thú vị về các nghề truyền thống của ngư dân vùng đầm phá.\r\n\r\n ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4635.123059421629!2d109.232373!3d13.867192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6be57ef06df1%3A0x15ef7d782663df1d!2zS2h1IER1IEzhu4tjaCBTaW5oIFRow6FpIEPhu5NuIENoaW0gxJDhuqdtIFRo4buLIE7huqFp!5e1!3m2!1svi!2s!4v1746354472511!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '330ab494ab9319cd4082_89683.jpg;669d481a571de543bc0c_50e7d.jpg;6b63dae5c5e277bc2ef3_c59c6.jpg;682bd0b6cfb17def24a0_def4b.jpg'),
(2, 1, 1, 8, 'Tổ hợp không gian khoa học', 'Tổ hợp Không gian khoa học là dự án nằm trong ý tưởng xây dựng một khu đô thị khoa học giáo dục đầu tiên của Việt Nam tại Bình Định do Hội Khoa học Gặp gỡ Việt Nam đề xuất. Tổ hợp sẽ là không gian khám phá khoa học cho trẻ em và công chúng, tăng cường đưa khoa học đến với đại chúng và khơi gợi niềm đam mê khoa học, sáng tạo của tuổi trẻ. Tổ hợp là bước đi đầu tiên nhằm hướng đến hình thành một Khu đô thị Khoa học và Giáo dục Quy Hòa trong tương lai.\r\n\r\nTheo thiết kế, tổ hợp không gian khoa học bao gồm 3 hạng mục chính: nhà mô hình vũ trụ, bảo tàng khoa học và đài quan sát thiên văn. Công trình được xây dựng trên diện tích 12,6 ha tại phường Ghềnh Ráng, TP Quy Nhơn với tổng vốn hơn 171 tỷ đồng.\r\n\r\nTrong đó, Nhà mô hình vũ trụ bao gồm các phần chính: Phòng chiếu và quan sát; Phòng kỹ thuật điều khiển; Hệ thống âm thanh, máy tính, chương trình điều khiển, chương trình giáo khoa trình chiếu. Nhà mô hình vũ trụ giúp người xem khám phá những hình ảnh tuyệt đẹp của vũ trụ, giải thích các vấn đề liên quan đến thiên văn học với minh họa trực quan bằng hình ảnh sống động.\r\n\r\nBảo tàng khoa học có nhiều gian hàng triển lãm các thí nghiệm khoa học xoay quanh các chủ đề: vật lý, hóa học, kỹ thuật, khoa học sự sống, khoa học môi trường...\r\n\r\nVới Đài quan sát thiên văn, 10 kính thiên văn phổ thông được bố trí với điều kiện quan sát tốt nhất, dễ tiếp cận.\r\n\r\nNgoài ra, tại Tổ hợp Không gian khoa học cũng có một không gian rộng và thân thiện với quán cà phê, góc đọc sách, thư viện khoa học cộng đồng và bán hàng lưu niệm đành cho khách tham quan...', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4638.091001300555!2d109.21047327576355!3d13.717791098078719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f6d6aba52bdc5%3A0xcfb8527a3602f525!2zVHJ1bmcgdMOibSBLSMOBTSBQSMOBIEtIT0EgSOG7jEMgUXV5IE5oxqFuIC0gRXhwbG9yYVNjaWVuY2UgUXV5IE5oxqFu!5e1!3m2!1svi!2s!4v1746355295568!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '330ab494ab9319cd4082_89683.jpg;083a831d7f7f1f1eadd8831845772c19anh_11_gui_zing_636924763944693704.jpg;e33d6709dd5821fa3661413e5ee87eecanh_khoa_hoc_9_gui_zing_636924763941618274.jpg;a64226cd51840201f90b352ea3f494e0anh_khoa_hoc_7_gui_zing_636924763944263703.jpg;4041612d11b8eb3a24472143d2a25d4aanh_khoa_hoc_den_gui_zing_2_636924763942078360.jpg'),
(3, 1, 3, 45, 'La Vuông Hoài Nhơn', 'Ở độ cao 700 m so với mực nước biển, La Vuông (xã Hoài Sơn, huyện Hoài Nhơn) có khí hậu mát mẻ, phù hợp cho phát triển du lịch sinh thái kết hợp trải nghiệm núi rừng.\r\nLa Vuông còn hoang sơ, điểm hấp dẫn chính là thiên nhiên, là khí hậu mát lạnh. Rừng La Vuông có khá nhiều cẩm tú cầu, mùa này đang nở rộ. Trên La Vuông không có điểm lưu trú, cũng không có nhà dân.\r\n\r\nVới những người yêu thích thiên nhiên, lên La Vuông chính là tìm về với rừng núi hoang sơ. Khi chúng tôi lên tới La Vuông, trời đã ngả về chiều, gió núi rung rinh những khóm hoa mua, sim tím, có lẽ nhiều người cũng sẽ như tôi, thấy một trời ký ức tuổi thơ ùa về. Đó là những ngày lang thang, chạy dọc những triền đồi, triền dốc quê mình, tìm những quả sim chín mọng núp dưới cành lá; đó là những ngày lùa trâu lên núi, thả hồn dưới bóng mát cây rừng, ngắm mây bay ngang trời.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16011.509150079557!2d108.98939836319248!3d14.64760201426743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3168e7d334fc228d%3A0x6f8f9e33606a171e!2zSOG7kyBMYSBWdcO0bmcgKEjhu5MgQ-G6qW4gSOG6rXUp!5e1!3m2!1svi!2s!4v1746355481445!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '8d8c105f3d6853570a9de75166391d612_795803984.jpg;17239549f43e40efd8d9e7773ec06ff81_975137242.jpg;ad6d34aee15b9e955df8efddf18818603_297454971.jpg;249f58c70a3616deb0dbc1b622763c2c5_218801775.jpg'),
(4, 1, 1, 15, 'Biển Kỳ Co', 'Bình Định\r\n \r\n\r\nNằm cách thành phố Quy Nhơn gần 25 km, thuộc xã Nhơn Lý, thành phố Quy Nhơn, tỉnh Bình Định, Kỳ Co mang một vẻ đẹp nguyên sơ quyến rũ với biển xanh, cát trắng, nắng vàng đẹp tựa một bức tranh vừa nên thơ vừa hùng vĩ, Kỳ Co còn được mệnh danh là chỉ cách thiên đường một bước chân.\r\n\r\nNơi đây hấp dẫn du khách, đặc biệt là những người ưa du lịch khám phá, bởi không chỉ có cảnh đẹp làm say lòng người mà còn biết bao điều thú vị. Tại đây du khách có thể hòa mình vào dòng nước trong sạch hiếm có và đùa nghịch trên bãi cát trắng xoá. Bãi Kỳ Co rất thích hợp cho những chuyến đi của gia đình, đặc biệt nếu có trẻ nhỏ, các bé sẽ vô cùng thích thú khi được ngâm mình trong một hồ bơi tự nhiên, cùng bắt sò, bắt ốc và chơi đùa với những con cá nhỏ bị sóng đánh vào bờ.Thiên nhiên đã ưu đãi cho Kỳ Co một không gian đầy sáng tạo tuyệt vời.\r\n\r\n ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74813.02460269514!2d109.25061025819096!3d13.850219644169362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f69f3b44b2e29%3A0x75e9afabce0602c7!2sKy%20Co%20Beach!5e1!3m2!1svi!2s!4v1746355908124!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '1c49e49f1ce8926d6617aca304da2da7kyco03_637050223950657402.jpg;4c95ca1b4de27321f09e67fa5692d32ekyco_2_20200715_422052506.jpg;0a5e8aae6370b0681d09157ed4212754kyco02_637050223950207484.jpg;904a5e3ac2244437f0a48030823e3888kyco07_637050224202689974.jpg;df3da7cb2899e825bd1506b8efa70c56kyco04_637050224124696188.jpg'),
(5, 1, 6, 81, 'Biển Trung Lương – Cát Tiến\r\n', 'Trung Lương là một trong những bãi biển khá quen thuộc và nổi tiếng với khách du lịch Bình Định. Bãi biển nằm ở xã Cát Tiến, huyện Phù Cát, cách trung tâm thành phố Quy Nhơn chừng 30 km. Nước biển xanh trong hoang sơ, sóng vỗ bờ nhẹ nhàng, bờ biển trải dài ngút mắt với bãi cát trắng mịn cùng với cung đường tuyệt đẹp uốn lượn bao quanh dãy núi Bà, các phiến đá với nhiều hình thù kỳ lạ đẹp mắt, nhấp nhô xếp chồng lên nhau tạo nên bức tranh biển cả nên thơ và nhẹ nhàng, đọng lại nhiều cung bậc cảm xúc cho du khách phương xa. Du khách có thể di chuyển bằng nhiều phương tiện khác nhau từ phượt xe máy, đi ô tô, tàu hỏa đến máy bay để về với Bình Định và thực hiện hành trình khám phá Trung Lương. Từ Quy Nhơn, du khách có thể di chuyển qua cầu Nhơn Hội và theo tỉnh lộ 640 để đến với một trong những bãi biển đẹp nhất “vùng đất võ trời văn” hoặc cũng có thể đi từ sân bay phù cát theo tỉnh lộ 635 đến tỉnh lộ 640. Đến đây, du khách có thể thong thả dạo biển, chụp hình cưới, thưởng thức hải sản hay đơn giản là hòa mình vào dòng nước trong mát Trung Lương. Ngoài ra khi đến với biển Trung Lương, du khách đừng quên viếng thăm Quần thể du lịch lịch sử, sinh thái và tâm linh Linh Phong, Khu di tích chiến thắng Núi Bà và Khu dã ngoại Trung Lương Cát Tiến... Chắc chắn các điểm du lịch này sẽ mang đến cho du khách những trải nghiệm thú vị mà không nơi nào có được.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74780.22854863577!2d109.20077065848535!3d13.95172738442257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f412f3152e6b1%3A0x6dd8f264a63a3a69!2zQsOjaSB04bqvbSBUcnVuZyBMxrDGoW5n!5e1!3m2!1svi!2s!4v1746356231631!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '317d87c43e445667a2583a74106fc130trung_luong_nguyen_an_khanh_304608393.jpg;a2b1094ca20344be55e06f06be0b3e65bien_cat_tien_dang_thanh_phuong_248967639.jpg'),
(6, 2, 9, 128, 'Tháp Bình Lâm', 'Tháp Bình Lâm là một ngôi tháp Chămpa cổ tại thôn Bình Lâm, xã Phước Hòa, huyện Tuy Phước, cách Tp.Quy Nhơn 22km. Đây là một ngôi tháp tương đối đặc biệt ở Bình Định, vì khác với các tháp khác nằm trên đồi thì tháp Bình Lâm nằm ngay trên đồng bằng và như hòa mình vào thiên nhiên và khu dân cư bao quanh. Tháp có bình đồ vuông, mỗi cạnh khoảng 10m, cao khoảng 20m chia làm 3 tầng, trang trí hoa văn tinh tế, kiến trúc hài hòa với những đường nét vừa tinh tú vừa khỏe khoắn. Tháp được xếp hạng là di tích Kiến trúc Nghệ thuật vào năm 1993.\r\n\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4629.616412709987!2d109.18287457581921!3d13.890381086516083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f3ff7aec8083d%3A0xbf39cae75b2cd723!2zVGjDoXAgQsOsbmggTMOibQ!5e1!3m2!1svi!2s!4v1746356778393!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2e47ac648e2d0a92e24c2c3edb8d219bthapbinhlam107_637050246633138235.jpg;235c322aa2a0785e2261f1e416eb74cethapbinhlam102_637050246476093455.jpg;71d01ee9011b1abc97773a62fd09a67fthapbinhlam_01_20200715_135397747.jpg;078edefa1684108ce7da5036d94302f7thapbinhlam_03_20200715_785513063.jpg;6976379ebbc8d4ad1ca90baf517f7b3dthapbinhlam00_637045086349462438.jpg'),
(7, 2, 3, 47, 'Di tích nơi cập bến tàu không số Lộ Diêu', 'Tàu không số cập bến Lộ Diêu là tàu không số vận chuyển vũ khí đầu tiên cho Quân khu V và là chuyến tàu không số duy nhất cập bến vùng biển Bình Định. Anh hùng Lực lượng vũ trang nhân dân, Trung tá Hồ Đắc Thạnh, nguyên Thuyền trưởng tàu không số là người tham gia vận chuyển 3 chuyến vũ khí vào tỉnh Phú Yên nói riêng và 12 chuyến vào miền Nam nói chung.\r\nNhững vũ khí do những con tàu không số mang vào đã góp phần tạo nên chiến thắng An Lão, Đèo Nhông-Dương Liễu, góp phần thay đổi cục diện chiến trường miền Nam để đi đến thống nhất đất nước.\r\nDi tích Bến tàu không số Lộ Diêu được đầu tư 15,8 tỷ đồng, xây dựng trên diện tích 15.000m2. Điểm nhấn của di tích là một phần con tàu được làm bằng đá, mô phỏng con tàu không số năm xưa. Đây là nơi ghi nhớ công ơn của những chiến sỹ “tàu không số 401” và là địa điểm giáo dục truyền thống cách mạng đối với người dân huyện Hoài Nhơn.\r\n\r\n ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4618.703547273862!2d109.1122454758275!3d14.42638308603952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3168c7cf99d7e557%3A0xd86b8ce2a11faed3!2zQuG6v24gTOG7mSBEacOqdSAtIFTDoHUgS2jDtG5nIFPhu5E!5e1!3m2!1svi!2s!4v1746356933166!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Lo_dieu_7_452cc.jpg;Lo_Dieu_1_98414.png'),
(8, 2, 9, 122, 'Mộ Đào Tấn', 'Đào Tấn (Đào Đăng Tiến, Đào Tiến), tự Chỉ Thúc, hiệu Mộng Mai, Mai Tăng, sinh năm Ất Tỵ (năm 1845). Ông quê làng Vinh Thạnh, phủ Tuy Phước, nay thuộc thôn Vinh Thạnh, xã Phước Lộc, huyện Tuy Phước, tỉnh Bình Định\r\n\r\nÔng đậu cử nhân năm Đinh Mùi (năm 1867), 4 năm sau, vua Tự Đức mời ông vào Hiệu Thư triều đình Huế, chuyên soạn các vở tuồng theo lệnh nhà vua. Năm Giáp Thìn (năm 1904), ông về hưu sau khi giữ chức Thượng Thư Bộ Công. Ông là người yêu nước nổi tiếng thanh liêm, đồng thời là nhà thơ, nhà biên soạn và đạo diễn tuồng xuất sắc của Việt Nam cuối thế kỷ XIX, đầu thế kỷ XX. Với những đóng góp to lớn, Đào Tấn được suy tôn là “Hậu Tổ” của nghệ thuật tuồng Việt Nam.\r\n\r\nMộ Đào Tấn được khởi dựng sau khi ông qua đời tại quê nhà ngày 15.7.1907 (năm Thành Thái thứ 19) theo nghi lễ Quốc Triều. Mộ của ông toạ lạc trên núi Huỳnh Mai (Hoàng Mai) thuộc thôn Huỳnh Mai, xã Phước Nghĩa, huyện Tuy Phước, cách thành phố quy Nhơn 15 km. Mộ nhìn về hướng nam, hướng về ngôi làng nơi ông từng sinh sống.\r\n\r\nMộ Đào Tấn dài 3 mét, rộng 2 mét, trước mộ có bia ghi thời điểm lập mộ và bình phong che chắn. Xung quanh mộ là khuôn viên hình chữ nhật được bo tròn, trước có trụ cổng, lưng có bình phong mang hình cuốn thư. Trước và sau ngôi mộ có 4 con sư tử đứng chầu, đuôi vểnh lên trên, mặt nhìn ra hướng chính diện. Di tích này đã được Bộ Văn hoá – thông tin xếp hạng ngày 24.1.1998.\r\n\r\nNăm 1994, Sở Văn hoá – Thông tin Bình Định phối hợp với UBND huyện Tuy Phước cùng với xã Phước Nghĩa tiến hành gia cố, trùng tu mộ Đào Tấn dựa trên nguyên bản. Ngày nay, di tích mộ Đào Tấn là địa diểm tham quan của du khách gần xa mếm mộ người nghệ sĩ đã có nhiều cống hiến cho nghệ thuật, nơi dâng hương tưởng nhớ danh nhân tài hoa của đất nước do ngành Văn hoá – Thông tin tỉnh và UBND huyện Tuy Phước tổ chức ngày 15.7 âm lịch hàng năm.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4630.586973922751!2d109.17798757581855!3d13.841725986559528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316f152e5df650fb%3A0x3ba9f8e00f979ca1!2zTeG7mSDEkMOgbyBU4bqlbg!5e1!3m2!1svi!2s!4v1746357117158!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'MODaoTanChinhThuc11_52cd5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidiadiemdulich`
--

CREATE TABLE `loaidiadiemdulich` (
  `IDLoaiDiaDiem` int(11) NOT NULL,
  `TenLoaiDiaDiem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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

CREATE TABLE `phuongxa` (
  `IDPhuongXa` int(11) NOT NULL,
  `TenPhuongXa` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IDQuanHuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongxa`
--

INSERT INTO `phuongxa` (`IDPhuongXa`, `TenPhuongXa`, `IDQuanHuyen`) VALUES
(1, 'Hải Cảng', 1),
(2, 'Thị Nại', 1),
(3, 'Trần Phú', 1),
(4, 'Đống Đa', 1),
(5, 'Ngô Mây', 1),
(6, 'Nguyễn Văn Cừ', 1),
(7, 'Quang Trung', 1),
(8, 'Ghềnh Ráng', 1),
(9, 'Trần Quang Diệu', 1),
(10, 'Nhơn Phú', 1),
(11, 'Bùi Thị Xuân', 1),
(12, 'Nhơn Bình', 1),
(13, 'Phước Mỹ', 1),
(14, 'Nhơn Hội', 1),
(15, 'Nhơn Lý', 1),
(16, 'Nhơn Hải', 1),
(17, 'Nhơn Châu', 1),
(18, 'Bình Định', 2),
(19, 'Đập Đá', 2),
(20, 'Nhơn Hưng', 2),
(21, 'Nhơn Hòa', 2),
(22, 'Nhơn Thành', 2),
(23, 'Nhơn Mỹ', 2),
(24, 'Nhơn Hậu', 2),
(25, 'Nhơn An', 2),
(26, 'Nhơn Phong', 2),
(27, 'Nhơn Hạnh', 2),
(28, 'Nhơn Khánh', 2),
(29, 'Nhơn Phúc', 2),
(30, 'Nhơn Lộc', 2),
(31, 'Nhơn Tân', 2),
(32, 'Nhơn Thọ', 2),
(33, 'Bồng Sơn', 3),
(34, 'Hoài Đức', 3),
(35, 'Tam Quan', 3),
(36, 'Tam Quan Bắc', 3),
(37, 'Tam Quan Nam', 3),
(38, 'Hoài Hương', 3),
(39, 'Hoài Thanh', 3),
(40, 'Hoài Thanh Tây', 3),
(41, 'Hoài Tân', 3),
(42, 'Hoài Xuân', 3),
(43, 'Hoài Hảo', 3),
(44, 'Hoài Châu', 3),
(45, 'Hoài Châu Bắc', 3),
(46, 'Hoài Hải', 3),
(47, 'Hoài Mỹ', 3),
(48, 'Hoài Phú', 3),
(49, 'Hoài Sơn', 3),
(50, 'Phú Phong', 4),
(51, 'Tây Xuân', 4),
(52, 'Bình Nghi', 4),
(53, 'Tây Giang', 4),
(54, 'Tây Thuận', 4),
(55, 'Vĩnh An', 4),
(56, 'Bình Tường', 4),
(57, 'Tây Phú', 4),
(58, 'Bình Thuận', 4),
(59, 'Bình Tân', 4),
(60, 'Tây An', 4),
(61, 'Tây Vinh', 4),
(62, 'Tây Bình', 4),
(63, 'Bình Hòa', 4),
(64, 'Bình Thành', 4),
(65, 'Tăng Bạt Hổ', 5),
(66, 'Ân Phong', 5),
(67, 'Ân Đức', 5),
(68, 'Ân Tường Đông', 5),
(69, 'Ân Tường Tây', 5),
(70, 'Ân Hữu', 5),
(71, 'Đak Mang', 5),
(72, 'Ân Nghĩa', 5),
(73, 'Bok Tới', 5),
(74, 'Ân Sơn', 5),
(75, 'Ân Tín', 5),
(76, 'Ân Thạnh', 5),
(77, 'Ân Hảo Tây', 5),
(78, 'Ân Hảo Đông', 5),
(79, 'Ân Mỹ', 5),
(80, 'Ngô Mây', 6),
(81, 'Cát Tiến', 6),
(82, 'Cát Khánh', 6),
(83, 'Cát Trinh', 6),
(84, 'Cát Tân', 6),
(85, 'Cát Nhơn', 6),
(86, 'Cát Tường', 6),
(87, 'Cát Hưng', 6),
(88, 'Cát Thắng', 6),
(89, 'Cát Chánh', 6),
(90, 'Cát Thành', 6),
(91, 'Cát Hải', 6),
(92, 'Cát Minh', 6),
(93, 'Cát Tài', 6),
(94, 'Cát Hanh', 6),
(95, 'Cát Hiệp', 6),
(96, 'Cát Lâm', 6),
(97, 'Cát Sơn', 6),
(98, 'Phù Mỹ', 7),
(99, 'Bình Dương', 7),
(100, 'Mỹ Quang', 7),
(101, 'Mỹ Hiệp', 7),
(102, 'Mỹ Trinh', 7),
(103, 'Mỹ Hòa', 7),
(104, 'Mỹ Tài', 7),
(105, 'Mỹ Chánh Tây', 7),
(106, 'Mỹ Chánh', 7),
(107, 'Mỹ Thành', 7),
(108, 'Mỹ Cát', 7),
(109, 'Mỹ An', 7),
(110, 'Mỹ Thọ', 7),
(111, 'Mỹ Thắng', 7),
(112, 'Mỹ Lợi', 7),
(113, 'Mỹ Phong', 7),
(114, 'Mỹ Đức', 7),
(115, 'Mỹ Châu', 7),
(116, 'Mỹ Lộc', 7),
(117, 'Tuy Phước', 8),
(118, 'Diêu Trì', 8),
(119, 'Phước An', 8),
(120, 'Phước Thành', 8),
(121, 'Phước Thuận', 8),
(122, 'Phước Nghĩa', 8),
(123, 'Phước Lộc', 8),
(124, 'Phước Hiệp', 8),
(125, 'Phước Hưng', 8),
(126, 'Phước Quang', 8),
(127, 'Phước Sơn', 8),
(128, 'Phước Hòa', 8),
(129, 'Phước Thắng', 8),
(130, 'Vĩnh Thạnh', 9),
(131, 'Vĩnh Hiệp', 9),
(132, 'Vĩnh Thịnh', 9),
(133, 'Vĩnh Thuận', 9),
(134, 'Vĩnh Hòa', 9),
(135, 'Vĩnh Quang', 9),
(136, 'Vĩnh Kim', 9),
(137, 'Vĩnh Sơn', 9),
(138, 'Vân Canh', 10),
(139, 'Canh Thuận', 10),
(140, 'Canh Hòa', 10),
(141, 'Canh Vinh', 10),
(142, 'Canh Hiển', 10),
(143, 'Canh Hiệp', 10),
(144, 'Canh Liên', 10),
(145, 'An Lão', 11),
(146, 'An Hưng', 11),
(147, 'An Trung', 11),
(148, 'An Dũng', 11),
(149, 'An Vinh', 11),
(150, 'An Toàn', 11),
(151, 'An Tân', 11),
(152, 'An Quang', 11),
(153, 'An Nghĩa', 11),
(154, 'An Hòa', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `IDQuanHuyen` int(11) NOT NULL,
  `TenQuanHuyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quanhuyen`
--

INSERT INTO `quanhuyen` (`IDQuanHuyen`, `TenQuanHuyen`) VALUES
(1, 'Thành phố Quy Nhơn'),
(2, 'Thị xã An Nhơn'),
(3, 'Thị xã Hoài Nhơn'),
(4, 'Huyện An Lão'),
(5, 'Huyện Hoài Ân'),
(6, 'Huyện Phù Cát'),
(7, 'Huyện Phù Mỹ'),
(8, 'Huyện Tây Sơn'),
(9, 'Huyện Tuy Phước'),
(10, 'Huyện Vân Canh'),
(11, 'Huyện Vĩnh Thạnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffdata`
--

CREATE TABLE `staffdata` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Phones` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userdata`
--

CREATE TABLE `userdata` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `PassWord` varchar(255) DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `ROLE_ID` varchar(10) NOT NULL,
  `ROLE_DESCRIPTION` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ArticleID`),
  ADD KEY `CategoryID` (`CategoryID`),
  ADD KEY `AuthorID` (`AuthorID`);

--
-- Chỉ mục cho bảng `authordata`
--
ALTER TABLE `authordata`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `ArticleID` (`ArticleID`),
  ADD KEY `UserID` (`UserID`);

--
-- Chỉ mục cho bảng `diadiemdulich`
--
ALTER TABLE `diadiemdulich`
  ADD PRIMARY KEY (`IDDiaDiem`),
  ADD KEY `IDQuanHuyen` (`IDQuanHuyen`),
  ADD KEY `IDPhuongXa` (`IDPhuongXa`),
  ADD KEY `IDLoaiDiaDiem` (`IDLoaiDiaDiem`);

--
-- Chỉ mục cho bảng `loaidiadiemdulich`
--
ALTER TABLE `loaidiadiemdulich`
  ADD PRIMARY KEY (`IDLoaiDiaDiem`);

--
-- Chỉ mục cho bảng `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD PRIMARY KEY (`IDPhuongXa`),
  ADD KEY `IDQuanHuyen` (`IDQuanHuyen`);

--
-- Chỉ mục cho bảng `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`IDQuanHuyen`);

--
-- Chỉ mục cho bảng `staffdata`
--
ALTER TABLE `staffdata`
  ADD PRIMARY KEY (`UserID`);

--
-- Chỉ mục cho bảng `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `ROLE_ID` (`ROLE_ID`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15658;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `diadiemdulich`
--
ALTER TABLE `diadiemdulich`
  MODIFY `IDDiaDiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loaidiadiemdulich`
--
ALTER TABLE `loaidiadiemdulich`
  MODIFY `IDLoaiDiaDiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `userdata`
--
ALTER TABLE `userdata`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

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
