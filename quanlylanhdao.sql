-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 10:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlylanhdao`
--

-- --------------------------------------------------------

--
-- Table structure for table `donvisunghiep`
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
-- Dumping data for table `donvisunghiep`
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
-- Table structure for table `hdnd`
--

CREATE TABLE `hdnd` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `capbac` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hdnd`
--

INSERT INTO `hdnd` (`id`, `ten`, `chucvu`, `anh`, `capbac`) VALUES
(1, 'HỒ QUỐC DŨNG', 'Ủy viên Trung ương Đảng Bí thư Tỉnh ủy, Chủ tịch HĐND tỉnh', 'hoquocdung.jpg', 1),
(2, 'ĐOÀN VĂN PHI', 'Ủy viên Ban Thường vụ tỉnh ủy Phó Chủ tịch Thường trực HĐND tỉnh', 'doanvanphi.jpg', 2),
(3, 'HUỲNH THÚY VÂN', 'Ủy viên Ban chấp hành Đảng bộ tỉnh ủy Phó Chủ tịch HĐND tỉnh', 'huynhthuyvan.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lanhdao`
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
-- Dumping data for table `lanhdao`
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
-- Table structure for table `ubnd`
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
-- Dumping data for table `ubnd`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donvisunghiep`
--
ALTER TABLE `donvisunghiep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hdnd`
--
ALTER TABLE `hdnd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lanhdao`
--
ALTER TABLE `lanhdao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ubnd`
--
ALTER TABLE `ubnd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donvisunghiep`
--
ALTER TABLE `donvisunghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hdnd`
--
ALTER TABLE `hdnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lanhdao`
--
ALTER TABLE `lanhdao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ubnd`
--
ALTER TABLE `ubnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
