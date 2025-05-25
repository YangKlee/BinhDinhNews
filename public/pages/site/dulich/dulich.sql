-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 11:33 AM
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
-- Database: `dulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `image`, `location`) VALUES
(1, 'Kỳ Co', 'Bãi biển Kỳ Co trải dài uốn cong hình lưỡi liềm như vầng trăng khuyết với ba mặt giáp núi và một mặt giáp biển, có vị trí tách biệt, ngăn cách với khu vực đất liền phía trong.', 'kyco.jpg', 'Bình Định'),
(2, 'Eo Gió', 'Cái tên Eo Gió đã được người dân nơi đây đặt từ khá lâu xuất phát từ vị trí địa lý của nó.', 'eogio.jpg', 'Bình Định'),
(3, 'Hầm Hô', 'Cách trung tâm thành phố Quy Nhơn 50km về hướng Tây Bắc.', 'hamho.jpg', 'Bình Định'),
(4, 'Bảo tàng Quang Trung', 'Bảo tàng Quang Trung là một bảo tàng nằm đối diện sông Côn, bao quanh bởi đường tỉnh lộ 636, Quốc lộ 19B, đường Ngọc Hân Công chúa, đường Nguyễn Nhạc, đường Đống Đa.', 'baotang.jpg', 'Bình Định');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
