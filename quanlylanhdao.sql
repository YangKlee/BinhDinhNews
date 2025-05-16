-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2025 lúc 10:31 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlylanhdao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coquanchuyenmon`
--

CREATE TABLE `coquanchuyenmon` (
  `id` int(11) NOT NULL,
  `tencoquan` varchar(255) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `chucvu` varchar(150) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `capbac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coquanchuyenmon`
--

INSERT INTO `coquanchuyenmon` (`id`, `tencoquan`, `hoten`, `chucvu`, `hinhanh`, `capbac`) VALUES
(1, 'Văn phòng UBND', 'LÊ NGỌC AN', 'Chánh Văn phòng', 'lengocan.jpg', 1),
(2, 'Văn phòng UBND', 'TRẦN TRỌNG TRIÊM', 'Phó Chánh Văn phòng', 'trantrongtriem.jpg', 2),
(3, 'Văn phòng UBND', 'VÕ GIA NGHĨA', 'Phó Chánh Văn phòng', 'vogianghia.jpg', 2),
(4, 'Văn phòng UBND', 'PHAN ĐÌNH HẢI', 'Phó Chánh Văn phòng', 'phandinhhai.jpg', 2),
(5, 'Văn phòng UBND', 'LÊ HUY VŨ', 'Phó Chánh Văn phòng', 'lehuyvu.jpg', 2),
(6, 'Sơ nội vụ', 'LÊ MINH TUẤN', 'Giám đốc', 'leminhtuan.jpg', 1),
(7, 'Sở nội vụ', 'BÙI HOÀNG LINH', 'Phó Giám đốc', 'buihoanglinh.jpg', 2),
(8, 'Sở nội vụ', 'NGUYỄN THANH VŨ', 'Phó Giám đốc', 'nguyenthanhvu.jpg', 2),
(9, 'Sở nội vụ', 'TRẦN TRUNG ĐỊNH', 'Phó Giám đốc', 'trantrungdinh.jpg', 2),
(10, 'Sở nội vụ', 'PHAN ĐÌNH HÒA', 'Phó Giám đốc', 'phandinhhoa.jpg', 2),
(11, 'Sở tài chính', 'NGUYỄN THÀNH HẢI', 'Giám đốc', 'nguyenthanhhai.jpg', 1),
(12, 'Sở tài chính', 'ĐẶNG THU HƯƠNG', 'Phó Giám đốc', 'dangthuhuong.jpg', 2),
(13, 'Sở tài chính', 'TRẦN VŨ THANH HÙNG', 'Phó Giám đốc', 'tranvuthanhhung.jpg', 2),
(14, 'Sở tài chính', 'NGUYỄN VĂN CHÂU', 'Phó Giám đốc', 'nguyenvanchau.jpg', 2),
(15, 'Sở tài chính', 'PHẠM VĂN THÀNH', 'Phó Giám đốc', 'phamvanthanh.jpg', 2),
(16, 'Sở tài chính', 'NGUYỄN QUANG MINH', 'Phó Giám đốc', 'nguyenquangminh.jpg', 3),
(17, 'Sở xây dựng', 'TRẦN VIẾT BẢO', 'Giám đốc', 'tranvietbao.jpg', 1),
(18, 'Sở xây dựng', 'LÊ ANH SƠN', 'Phó Giám đốc', 'leanhson.jpg', 2),
(19, 'Sở xây dựng', 'HUỲNH NGỌC HOÀNG', 'Phó Giám đốc', 'huynhngochoang.jpg', 2),
(20, 'Sở xây dựng', 'TRƯƠNG KHOA', 'Phó Giám đốc', 'truongkhoa.jpg', 2),
(21, 'Sở xây dựng', 'LÊ ANH TUẤN', 'Phó Giám đốc', 'leanhtuan.jpg', 2),
(22, 'Sở xây dựng', 'VÕ VĂN TRỊNH', 'Phó Giám đốc', 'vovantrinh.jpg', 3),
(23, 'Sở công thương', 'TRẦN THANH DŨNG', 'Giám đốc', 'tranthanhdung.jpg', 1),
(24, 'Sở công thương', 'TRẦN THÚC KHAM', 'Phó Giám đốc', 'tranthuckham.jpg', 2),
(25, 'Sở công thương', 'VÕ MAI HƯNG', 'Phó Giám đốc', 'vomaihung.jpg', 2),
(26, 'Sở công thương', 'NGUYỄN ĐÌNH KHA', 'Phó Giám đốc', 'nguyendinhkha.jpg', 2),
(27, 'Sở nông nghiệp và môi trường', 'CAO THANH THƯƠNG', 'Giám đốc', 'caothanhthuong.jpg', 1),
(28, 'Sở nông nghiệp và môi trường', 'NGUYỄN THỊ TỐ TRÂN', ' Phó Giám đốc', 'nguyenthitotran.jpg', 2),
(29, 'Sở nông nghiệp và môi trường', 'HỒ ĐẮC CHƯƠNG', ' Phó Giám đốc', 'hodacchuong.jpg', 2),
(30, 'Sở nông nghiệp và môi trường', 'BÙI TẤN THÀNH', ' Phó Giám đốc', 'buitanthanh.jpg', 2),
(31, 'Sở nông nghiệp và môi trường', 'TRẦN KỲ QUANG', ' Phó Giám đốc', 'trankyquang.jpg', 2),
(32, 'Sở nông nghiệp và môi trường', 'TRẦN ĐÌNH CHƯƠNG', ' Phó Giám đốc', 'trandinhchuong.jpg', 3),
(33, 'Sở nông nghiệp và môi trường', 'HÀ THỊ THANH HƯƠNG', ' Phó Giám đốc', 'hathithanhhuong.jpg', 3),
(34, 'Sở nông nghiệp và môi trường', 'NGUYỄN THỊ THẾ VY', ' Phó Giám đốc', 'nguyenthithevy.jpg', 3),
(35, 'Sở khoa học và công nghệ', 'TRẦN KIM KHA', 'Giám đốc', 'trankimkha.jpg', 1),
(36, 'Sở khoa học và công nghệ', 'HUỲNH HỒ HOÀI NAM', ' Phó Giám đốc', 'huynhhohoainam.jpg', 2),
(37, 'Sở khoa học và công nghệ', 'NGUYỄN MINH THẢO', 'Phó Giám đốc', 'nguyenminhthao.jpg', 2),
(38, 'Sở khoa học và công nghệ', 'NGUYỄN HỮU HÀ', 'Phó Giám đốc', 'nguyenhuuha.jpg', 2),
(39, 'Sở khoa học và công nghệ', 'VÕ CAO THỊ MỘNG HOÀI', 'Phó Giám đốc', 'vocaothimonghoai.jpg', 2),
(40, 'Sở khoa học và công nghệ', 'TRƯƠNG QUANG PHONG', 'Phó Giám đốc', 'truongquangphong.jpg', 3),
(41, 'Sở giáo dục và đào tạo', 'NGUYỄN ĐÌNH HÙNG', 'Phó Giám đốc', 'nguyendinhhung.jpg', 1),
(42, 'Sở giáo dục và đào tạo', 'VÕ NGỌC SỸ', 'Phó Giám đốc', 'vongocsy.jpg', 1),
(43, 'Sở giáo dục và đào tạo', 'ĐẶNG VĂN PHỤNG', 'Phó Giám đốc', 'dangvanphung.jpg', 1),
(44, 'Sở văn hóa-thể thao và du lịch', 'ĐỖ THỊ DIỆU HẠNH', 'Giám đốc', 'dothidieuhanh.jpg', 1),
(45, 'Sở văn hóa-thể thao và du lịch', 'BÙI TRUNG HIẾU', 'Phó Giám đốc', 'buitrunghieu.jpg', 2),
(46, 'Sở văn hóa-thể thao và du lịch', 'HUỲNH VĂN LỢI', 'Phó Giám đốc', 'huynhvanloi.jpg', 2),
(47, 'Sở văn hóa-thể thao và du lịch', 'NGUYỄN THỊ KIM CHUNG', 'Phó Giám đốc', 'nguyenthikimchung.jpg', 2),
(48, 'Sở văn hóa-thể thao và du lịch', 'PHẠM NGỌC THÁI', 'Phó Giám đốc', 'phamngocthai.jpg', 2),
(49, 'Sở văn hóa-thể thao và du lịch', 'HUỲNH THỊ ANH THẢO', 'Phó Giám đốc', 'huynhthianhthao.jpg', 3),
(50, 'Sở y tế', 'LÊ QUANG HÙNG', 'Giám đốc', 'lequanghung.jpg', 1),
(51, 'Sở y tế', 'TRẦN VĂN TRƯƠNG', 'Phó Giám đốc', 'tranvantruong.jpg', 2),
(52, 'Sở y tế', 'NGUYỄN THỊ TUYẾT NHUNG', 'Phó Giám đốc', 'nguyenthituyetnhung.jpg', 2),
(53, 'Sở tư pháp', 'TRẦN VĂN SANG', 'Giám đốc', 'tranvansang.jpg', 1),
(54, 'Sở tư pháp', 'PHẠM DÂN', 'Phó Giám đốc', 'phamdan.jpg', 2),
(55, 'Sở tư pháp', 'CHÂU THỊ HƯƠNG LAN', 'Phó Giám đốc', 'chauthihuonglan.jpg', 2),
(56, 'Sở tư pháp', 'TRẦN MINH HỒNG', 'Phó Giám đốc', 'tranminhhong.jpg', 2),
(57, 'Sở ngoại vụ', 'NGUYỄN THÁI BÌNH', 'Giám đốc', 'nguyenthaibinh.jpg', 1),
(58, 'Sở ngoại vụ', 'VÕ ĐÌNH KHA', 'Phó Giám đốc', 'vodinhkha.jpg', 2),
(59, 'Sở ngoại vụ', 'VÕ THỊ NHƯ HIỀN', 'Phó Giám đốc', 'vothinhuhien.jpg', 2),
(60, 'Ban quản lý KKT', 'NGUYỄN TỰ CÔNG HOÀNG', 'Phó Chủ tịch UBND tỉnh, Kiêm Trưởng Ban', 'nguyentuconghoang.jpg', 1),
(61, 'Ban quản lý KKT', 'LÊ HOÀNG NGHI', 'Phó Trưởng ban', 'lehoangnghi.jpg', 2),
(62, 'Ban quản lý KKT', 'PHAN VIẾT HÙNG', 'Phó Trưởng ban', 'phanviethung.jpg', 2),
(63, 'Ban quản lý KKT', 'NGUYỄN THANH NGUYÊN', 'Phó trưởng ban', 'nguyenthanhnguyen.jpg', 2),
(64, 'Thanh tra tỉnh', 'NGUYỄN VĂN THƠM', 'Chánh Thanh tra tỉnh', 'nguyenvanthom.jpg', 1),
(65, 'Thanh tra tỉnh', 'NGUYỄN THANH HẢI', 'Phó Chánh Thanh tra tỉnh', 'nguyenthanhhai.jpg', 2),
(66, 'Thanh tra tỉnh', 'NGUYỄN XUÂN SƠN', 'Phó Chánh Thanh tra tỉnh', 'nguyenxuanson.jpg', 2),
(67, 'Sở dân tộc và tôn giáo', 'LƯƠNG ĐÌNH TIÊN', 'Giám đốc', 'luongdinhtien.jpg', 1),
(68, 'Sở dân tộc và tôn giáo', 'TRẦN VĂN THANH', 'Phó Giám đốc', 'tranvanthanh.jpg', 2),
(69, 'Sở dân tộc và tôn giáo', 'PHAN ĐỖ MINH THANH ANH', 'Giám đốc', 'phandominhthanhanh.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvihiepquan`
--

CREATE TABLE `donvihiepquan` (
  `id` int(11) NOT NULL,
  `tencoquan` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `capbac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvihiepquan`
--

INSERT INTO `donvihiepquan` (`id`, `tencoquan`, `hoten`, `chucvu`, `hinhanh`, `capbac`) VALUES
(1, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Đại tá NGUYỄN VĂN LĨNH', 'Chỉ huy trưởng', 'nguyenvanlinh.jpg', 1),
(2, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Đại tá PHAN TRƯỜNG SƠN', 'Chính ủy', 'phantruongson.jpg', 2),
(3, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Thượng tá NGUYỄN THÀNH CÔNG', 'Phó Chỉ huy trưởng, kiêm Tham mưu trưởng', 'nguyenthanhcong.jpg', 2),
(4, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Đại tá NGUYỄN BÁ BÌNH', 'Phó Chính ủy', 'nguyenbabinh.jpg', 2),
(5, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Đại tá TRẦN VĂN DŨNG', 'Phó Chỉ huy trưởng nghiệp vụ', 'tranvandung.jpg', 2),
(6, 'Bộ chỉ huy Bộ đội biên phòng tỉnh', 'Đại tá NGUYỄN TRUNG HÀ', 'Phó Chỉ huy trưởng', 'nguyentrungha.jpg', 2),
(7, 'Bộ chỉ huy Quân sự tỉnh', 'Đại tá ĐỖ XUÂN HÙNG', 'Chỉ huy trưởng', 'doxuanhung.jpg', 1),
(8, 'Bộ chỉ huy Quân sự tỉnh', 'Đại tá NGUYỄN XUÂN SƠN', 'Chính ủy', 'nguyenxuanson.jpg', 2),
(9, 'Bộ chỉ huy Quân sự tỉnh', 'Thượng tá LÊ ANH TUẤN', 'Phó Chỉ huy trưởng, kiêm Tham mưu trưởng', 'leanhtuan.jpg', 2),
(10, 'Bộ chỉ huy Quân sự tỉnh', 'Đại tá THÂN TRỌNG MINH', 'Phó Chính ủy', 'thantrongminh.jpg', 2),
(11, 'Bộ chỉ huy Quân sự tỉnh', 'Đại tá NGUYỄN VĂN DƯ', 'Phó Chỉ huy trưởng', 'nguyenvandu.jpg', 2),
(12, 'Công an tỉnh', 'VÕ ĐỨC NGUYỆN', 'Giám đốc', 'voducnguyen.jpg', 1),
(13, 'Công an tỉnh', 'NGÔ CỰ VINH', 'Phó Giám đốc', 'ngocuvinh.jpg', 2),
(14, 'Công an tỉnh', 'HUỲNH BẢO NGUYÊN', 'Phó Giám đốc', 'huynhbaonguyen.jpg', 2),
(15, 'Công an tỉnh', 'LÊ HỒNG THÁI', 'Phó Giám đốc', 'lehongthai.jpg', 2),
(16, 'Công an tỉnh', 'NGUYỄN CHÍ LINH', 'Phó Giám đốc', 'nguyenchilinh.jpg', 2),
(17, 'Chi cục thống kê tỉnh Bình Định', 'ĐỖ MINH DƯỠNG', 'Phó Chi Cục Trưởng Phụ trách', 'dominhduong.jpg', 1),
(18, 'Chi cục thống kê tỉnh Bình Định', 'NGUYỄN CÔNG LUẬN', 'Phó Chi Cục Trưởng', 'nguyencongluan.jpg', 1),
(19, 'Tòa án nhân dân tỉnh Bình Định', 'MAI ANH TÀI', 'Chánh án', 'maianhtai.jpg', 1),
(20, 'Tòa án nhân dân tỉnh Bình Định', 'NGUYỄN THÚY LIÊN', 'Phó Chánh án', 'nguyenthuylien.jpg', 2),
(21, 'Tòa án nhân dân tỉnh Bình Định', 'VĂN THANH GIA', 'Phó Chánh án', 'vanthanhgia.jpg', 2),
(22, 'Tòa án nhân dân tỉnh Bình Định', 'NGUYỄN VĂN THANH', 'Phó Chánh án', 'nguyenvanthanh.jpg', 2),
(23, 'Viện kiểm sát nhân dân tỉnh', 'LÊ TRUNG HƯNG', 'Viện trưởng', 'letrunghung.jpg', 1),
(24, 'Viện kiểm sát nhân dân tỉnh', 'NGUYỄN THÀNH QUÁT', 'Phó Viện trưởng', 'nguyenthanhquat.jpg', 2),
(25, 'Viện kiểm sát nhân dân tỉnh', 'TRẦN MINH QUỐC', 'Phó Viện trưởng', 'tranminhquoc.jpg', 2),
(26, 'Bảo hiểm xã hội khu vực XXIII', 'VÕ NĂM', 'Giám đốc', 'vonam.jpg', 1),
(27, 'Bảo hiểm xã hội khu vực XXIII', 'TRƯƠNG ĐỀ', 'Phó Giám đốc', 'truongde.jpg', 2),
(28, 'Bảo hiểm xã hội khu vực XXIII', 'ĐẶNG VĂN LÝ', 'Phó Giám đốc', 'dangvanly.jpg', 2),
(29, 'Bảo hiểm xã hội khu vực XXIII', 'NGUYỄN VĂN THIÊN', 'Phó Giám đốc', 'nguyenvanthien.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvisunghiep`
--

CREATE TABLE `donvisunghiep` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `chucvu` varchar(100) DEFAULT NULL,
  `capbac` int(11) DEFAULT NULL,
  `sunghiep` varchar(100) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donvisunghiep`
--

INSERT INTO `donvisunghiep` (`id`, `ten`, `chucvu`, `capbac`, `sunghiep`, `anh`) VALUES
(1, 'LƯU NHẤT PHONG', 'Giám đốc', 1, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'luunhatphong.jpg'),
(2, 'PHẠM MINH QUỐC', 'Phó Giám đốc', 2, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'phamminhquoc.jpg'),
(3, 'NGÔ ANH TUẤN', 'Phó Giám đốc', 2, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'ngoanhtuan.jpg'),
(4, 'ĐINH CÔNG HOÀNG', 'Phó Giám đốc', 2, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'dinhconghoang.jpg'),
(5, 'HỒ QUANG TRUNG', 'Phó Giám đốc', 2, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'hoquangtrung.jpg'),
(6, 'PHẠM BÁC ÁI', 'Phó Giám đốc', 2, 'Ban quản lý dự án các công trình giao thông và dân dụng', 'phambacai.jpg'),
(7, 'NGÔ TÙNG SƠN', 'Giám đốc', 1, 'Trung tâm Phát triển quỹ đất tỉnh', 'ngotungson.jpg'),
(8, 'ĐẶNG VĂN VIỆT', 'Phó Trưởng ban', 2, 'Trung tâm Phát triển quỹ đất tỉnh', 'dangvanviet.jpg'),
(9, 'LÊ CÔNG BÌNH', 'Phó Giám đốc', 2, 'Trung tâm Phát triển quỹ đất tỉnh', 'lecongbinh.jpg'),
(10, 'TÔ TẤN THI', 'Giám đốc', 1, 'Ban quản lý dự án Nông nghiệp và phát triển nông thôn', 'totanthi.jpg'),
(11, 'NGUYỄN HỮU THẠNH', 'Phó Giám đốc', 2, 'Ban quản lý dự án Nông nghiệp và phát triển nông thôn', 'nguyenhuuthanh.jpg'),
(12, 'HỒ NGUYÊN SĨ', 'Phó Giám đốc', 2, 'Ban quản lý dự án Nông nghiệp và phát triển nông thôn', 'honguyensi.jpg'),
(13, 'NGUYỄN CÔNG SƠN', 'Giám đốc', 1, 'Đài phát thanh và truyền hình Bình Định', 'nguyencongson.jpg'),
(14, 'NGUYỄN MINH PHƯƠNG', 'Phó Giám đốc', 2, 'Đài phát thanh và truyền hình Bình Định', 'nguyenminhphuong.jpg'),
(15, 'VŨ THỊ NGA', 'Phó Giám đốc', 2, 'Đài phát thanh và truyền hình Bình Định', 'vuthinga.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdnd`
--

CREATE TABLE `hdnd` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `capbac` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hdnd`
--

INSERT INTO `hdnd` (`id`, `ten`, `chucvu`, `anh`, `capbac`) VALUES
(1, 'HỒ QUỐC DŨNG', 'Ủy viên Trung ương Đảng Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh', 'hoquocdung.jpg', 1),
(2, 'ĐOÀN VĂN PHI', 'Ủy viên Ban Thường vụ tỉnh ủy Phó Chủ tịch Thường trực HĐND tỉnh', 'doanvanphi.jpg', 2),
(3, 'HUỲNH THÚY VÂN', 'Ủy viên Ban chấp hành Đảng bộ tỉnh ủy Phó Chủ tịch HĐND tỉnh', 'huynhthuyvan.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lanhdao`
--

CREATE TABLE `lanhdao` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `capbac` int(11) DEFAULT NULL,
  `donvi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lanhdao`
--

INSERT INTO `lanhdao` (`id`, `ten`, `chucvu`, `anh`, `capbac`, `donvi`) VALUES
(1, 'HỒ QUỐC DŨNG', 'ỦY VIÊN BCH TW ĐẢNG<br>Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh', 'hoquocdung.jpg', 1, 'Lãnh đạo Tỉnh ủy'),
(2, 'LÊ KIM TOÀN', 'PHÓ BÍ THƯ TT TỈNH ỦY<br>Trưởng đoàn ĐBQH hội tỉnh', 'lekimtoan.jpg', 2, 'Lãnh đạo Tỉnh ủy'),
(3, 'PHẠM ANH TUẤN', 'PHÓ BÍ THƯ TỈNH ỦY<br>Chủ tịch UBND tỉnh', 'phamanhtuan.jpg', 2, 'Lãnh đạo Tỉnh ủy'),
(18, 'HỒ QUỐC DŨNG', 'ỦY VIÊN BCH TW ĐẢNG<br> Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh', 'hoquocdung.jpg', 1, 'Ban thường vụ Tỉnh ủy'),
(19, 'LÊ KIM TOÀN', 'PHÓ BÍ THƯ THƯỜNG TRỰC TỈNH ỦY <br> Trưởng đoàn ĐBQH hội tỉnh', 'lekimtoan.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(20, 'PHẠM ANH TUẤN', 'PHÓ BÍ THƯ TỈNH ỦY<br> Chủ tịch UBND tỉnh', 'phamanhtuan.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(21, 'NGUYỄN GIỜ', 'ỦY VIÊN BTV TỈNH ỦY', 'nguyengio.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(22, 'ĐẶNG VĨNH SƠN', 'ỦY VIÊN BTV TỈNH ỦY<br> Trưởng Ban Nội chính Tỉnh ủy', 'dangvinhson.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(23, 'TRẦN CANG', 'ỦY VIÊN BTV TỈNH ỦY <br> Chủ nhiệm Ủy ban kiểm tra Tỉnh ủy', 'trancang.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(24, 'NGUYỄN THỊ PHONG VŨ', 'ỦY VIÊN BTV TỈNH ỦY<br> Trưởng Ban Tuyên giáo và Dân vận Tỉnh ủy', 'nguyenthiphongvu.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(25, 'NGUYỄN TUẤN THANH', 'ỦY VIÊN BTV TỈNH ỦY<br> Phó Chủ tịch TT UBND tỉnh', 'nguyentuanthanh.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(26, 'ĐOÀN VĂN PHI', 'ỦY VIÊN BTV TỈNH ỦY<br> Phó Chủ tịch TT HĐND tỉnh', 'doanvanphi.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(27, 'VÕ ĐỨC NGUYỆN', 'ỦY VIÊN BTV TỈNH ỦY<br> Giám đốc Công an tỉnh', 'voducnguyen.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(28, 'ĐỖ XUÂN HÙNG', 'ỦY VIÊN BTV TỈNH ỦY<br> Chỉ huy trưởng BCH quân sự tỉnh', 'doxuanhung.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(29, 'MAI VIỆT TRUNG', 'ỦY VIÊN BTV TỈNH ỦY<br> Trưởng Ban Tổ chức Tỉnh ủy', 'maiviettrung.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(30, 'NGUYỄN VĂN DŨNG', 'ỦY VIÊN BTV TỈNH ỦY<br> Bí thư Thành ủy Quy Nhơn', 'nguyenvandung.jpg', 2, 'Ban thường vụ Tỉnh ủy'),
(31, 'NGUYỄN TỰ CÔNG HOÀNG', 'ỦY VIÊN BTV TỈNH ỦY<br> Phó Chủ tịch UBND tỉnh Trưởng Ban Quản lý KKT tỉnh', 'nguyentuconghoang.jpg', 2, 'Ban thường vụ Tỉnh ủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ubmttqvn`
--

CREATE TABLE `ubmttqvn` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `chucvu` varchar(150) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `capbac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ubmttqvn`
--

INSERT INTO `ubmttqvn` (`id`, `hoten`, `chucvu`, `hinhanh`, `capbac`) VALUES
(1, 'LÊ BÌNH THANH', 'Chủ tịch', 'lebinhthanh.jpg', 1),
(2, 'ĐINH VĂN LUNG', 'Phó Chủ tịch', 'dinhvanlung.jpg', 2),
(3, 'HUỲNH CAO NHẤT', 'Phó Chủ tịch', 'huynhcaonhat.jpg', 2),
(4, 'HỒ THỊ KIM THU', 'Phó Chủ tịch', 'hothikimthu.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ubnd`
--

CREATE TABLE `ubnd` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `capbac` int(11) NOT NULL,
  `diaphuong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ubnd`
--

INSERT INTO `ubnd` (`id`, `ten`, `chucvu`, `anh`, `capbac`, `diaphuong`) VALUES
(1, 'NGUYỄN HỮU KHÚC', 'Chủ tịch', 'nguyenhuukhuc.jpg', 1, 'TP Quy Nhơn'),
(2, 'NGUYỄN CÔNG VỊNH', 'Phó Chủ tịch Thường trực', 'nguyencongvinh.jpg', 2, 'TP Quy Nhơn'),
(3, 'NGUYỄN ĐỨC TOÀN', 'Phó Chủ tịch', 'nguyenductoan.jpg', 2, 'TP Quy Nhơn'),
(4, 'NGUYỄN PHƯƠNG NAM', 'Phó Chủ tịch', 'nguyenphuongnam.jpg', 2, 'TP Quy Nhơn'),
(5, 'LÊ THANH TÙNG', 'Chủ tịch', 'lethanhtung.jpg', 1, 'TX An Nhơn'),
(6, 'BÙI VĂN CƯ', 'Phó Chủ tịch Thường trực', 'buivancu.jpg', 2, 'TX An Nhơn'),
(7, 'MAI XUÂN TIẾN', 'Phó Chủ tịch', 'maixuantien.jpg', 2, 'TX An Nhơn'),
(8, 'LÊ ĐĂNG TUẤN', 'Chủ tịch', 'ledangtuan.jpg', 1, 'TX Hoài Nhơn'),
(9, 'PHẠM VĂN CHUNG', 'Phó Chủ tịch Thường trực', 'phamvanchung.jpg', 2, 'TX Hoài Nhơn'),
(10, 'NGUYỄN CHÍ CÔNG', 'Phó Chủ tịch', 'nguyenchicong.jpg', 2, 'TX Hoài Nhơn'),
(11, 'LÊ MINH ĐỨC', 'Phó Chủ tịch', 'leminhduc.jpg', 2, 'TX Hoài Nhơn'),
(12, 'LÊ VĂN LỊCH', 'Chủ tịch', 'levanlich.jpg', 1, 'huyện Phù Mỹ'),
(13, 'PHAN HỮU DUY', 'Phó Chủ tịch Thường trực', 'phanhuuduy.jpg', 2, 'huyện Phù Mỹ'),
(14, 'TRẦN QUỐC VINH', 'Phó Chủ tịch', 'tranquocvinh.jpg', 2, 'huyện Phù Mỹ'),
(15, 'HỒ NGỌC CHÁNH', 'Phó Chủ tịch', 'hongocchanh.jpg', 2, 'huyện Phù Mỹ'),
(16, 'TÔ HIẾU TRUNG', 'Chủ tịch', 'tohieutrung.jpg', 1, 'huyện Vĩnh Thạnh'),
(17, 'HUỲNH ĐỨC BẢO', 'Phó Chủ tịch Thường trực', 'huynhducbao.jpg', 2, 'huyện Vĩnh Thạnh'),
(18, 'LÊ MINH THÔNG', 'Phó Chủ tịch', 'leminhthong.jpg', 2, 'huyện Vĩnh Thạnh'),
(19, 'NGUYỄN VĂN HOÀ', 'Chủ tịch', 'nguyenvanhoa.jpg', 1, 'huyện Hoài Ân'),
(20, 'NGUYỄN XUÂN PHONG', 'Phó Chủ tịch Thường trực', 'nguyenxuanphong.jpg', 2, 'huyện Hoài Ân'),
(21, 'TRẦN VĂN THƠM', 'Phó Chủ tịch', 'tranvanthom.jpg', 2, 'huyện Hoài Ân'),
(22, 'DƯƠNG HIỆP HÒA', 'Chủ tịch', 'duonghiephoa.jpg', 1, 'huyện Vân Canh'),
(23, 'NGUYỄN XUÂN VIỆT', 'Phó Chủ tịch Thường trực', 'nguyenxuanviet.jpg', 2, 'huyện Vân Canh'),
(24, 'PHAN VĂN CƯỜNG', 'Phó Chủ tịch', 'phanvancuong.jpg', 2, 'huyện Vân Canh'),
(25, 'NGUYỄN VĂN HƯNG', 'Chủ tịch', 'nguyenvanhung.jpg', 1, 'huyện Phù Cát'),
(26, 'ĐỖ XUÂN THẮNG', 'Phó Chủ tịch Thường trực', 'doxuanthang.jpg', 2, 'huyện Phù Cát'),
(27, 'PHẠM DŨNG LUẬN', 'Phó Chủ tịch', 'phamdungluan.jpg', 2, 'huyện Phù Cát'),
(28, 'BÙI QUỐC NGHỊ', 'Phó Chủ tịch', 'buiquocnghi.jpg', 2, 'huyện Phù Cát'),
(29, 'TRỊNH XUÂN LONG', 'Chủ tịch', 'trinhxuanlong.jpg', 1, 'huyện An Lão'),
(30, 'ĐỖ TÙNG LÂM', 'Phó Chủ tịch Thường trực', 'dotunglam.jpg', 2, 'huyện An Lão'),
(31, 'ĐINH VĂN PHÚ', 'Phó Chủ tịch', 'dinhvanphu.jpg', 2, 'huyện An Lão'),
(32, 'HUỲNH NAM', 'Chủ tịch', 'huynhnam.jpg', 1, 'huyện Tuy Phước'),
(33, 'NGUYỄN NGỌC XUÂN', 'Phó Chủ tịch Thường trực', 'nguyenngocxuan.jpg', 2, 'huyện Tuy Phước'),
(34, 'NGUYỄN HÙNG TÂN', 'Phó Chủ tịch', 'nguyenhungtan.jpg', 2, 'huyện Tuy Phước'),
(35, 'NGUYỄN VĂN KHÁNH', 'Chủ tịch', 'nguyenvankhanh.jpg', 1, 'huyện Tây Sơn'),
(36, 'BÙI VĂN MỸ', 'Phó Chủ tịch Thường trực', 'buivanmy.jpg', 2, 'huyện Tây Sơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ubnd_tinh`
--

CREATE TABLE `ubnd_tinh` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `chucvu` varchar(150) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `capbac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ubnd_tinh`
--

INSERT INTO `ubnd_tinh` (`id`, `hoten`, `chucvu`, `hinhanh`, `capbac`) VALUES
(1, 'PHẠM ANH TUẤN', 'Chủ tịch Ủy ban nhân dân tỉnh', 'phamanhtuan.jpg', 1),
(2, 'LÂM HẢI GIANG', 'Phó Chủ tịch Ủy ban nhân dân tỉnh', 'lamhaigiang.jpg', 2),
(3, 'NGUYỄN TUẤN THANH', 'Phó Chủ tịch Thường trực Ủy ban nhân dân tỉnh', 'nguyentuanthanh.jpg', 2),
(4, 'NGUYỄN TỰ CÔNG HOÀNG', 'Phó Chủ tịch Ủy ban nhân dân tỉnh', 'nguyentuconghoang.jpg', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `coquanchuyenmon`
--
ALTER TABLE `coquanchuyenmon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donvihiepquan`
--
ALTER TABLE `donvihiepquan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donvisunghiep`
--
ALTER TABLE `donvisunghiep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hdnd`
--
ALTER TABLE `hdnd`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lanhdao`
--
ALTER TABLE `lanhdao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ubmttqvn`
--
ALTER TABLE `ubmttqvn`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ubnd`
--
ALTER TABLE `ubnd`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ubnd_tinh`
--
ALTER TABLE `ubnd_tinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `coquanchuyenmon`
--
ALTER TABLE `coquanchuyenmon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `donvihiepquan`
--
ALTER TABLE `donvihiepquan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `donvisunghiep`
--
ALTER TABLE `donvisunghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `hdnd`
--
ALTER TABLE `hdnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lanhdao`
--
ALTER TABLE `lanhdao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `ubmttqvn`
--
ALTER TABLE `ubmttqvn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ubnd`
--
ALTER TABLE `ubnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `ubnd_tinh`
--
ALTER TABLE `ubnd_tinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
