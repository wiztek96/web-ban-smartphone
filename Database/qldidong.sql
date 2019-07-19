-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2018 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldidong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('root', 'toor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `anh` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `anh`) VALUES
(1, 'Banner_smart_mobi.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chu`
--

CREATE TABLE `chu` (
  `id` int(11) NOT NULL,
  `text` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chu`
--

INSERT INTO `chu` (`id`, `text`) VALUES
(1, 'Chào mừng bạn đến với Công ty điện tử ITPlus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `tencty` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL,
  `web` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `tencty`, `diachi`, `web`, `email`) VALUES
(1, 'CÔNG TY ĐIỆN TỬ ITPLUS', 'No1, Floor 2, Hoàng Đạo Thúy - Thanh Xuân - Hà Nội', 'No1, Floor 2, Hoàng Đạo Thúy - Thanh Xuân - Hà Nội', 'smartitplus@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `gt` varchar(230) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `gt`) VALUES
(1, 'Bằng trải nghiệm về thị trường điện thoại di động từ đầu những năm 1990, cùng với việc nghiên cứu kỹ tập quán mua hàng của khách hàng Việt Nam, ITPLUS đã xây dựng một phương thức kinh doanh chưa từng có ở Việt Nam trước đây.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangdt`
--

CREATE TABLE `hangdt` (
  `idhang` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `tenhang` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `dienthoai` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hangdt`
--

INSERT INTO `hangdt` (`idhang`, `tenhang`, `diachi`, `dienthoai`, `email`) VALUES
('1', 'Samsung', '', '', ''),
('2', 'Iphone', '', '', ''),
('3', 'Nokia', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `hoten` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_vietnamese_ci NOT NULL,
  `dienthoai` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL,
  `thongtinlh` varchar(38) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `tensanpham` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `chitiet` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `idhang` varchar(60) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `gia`, `chitiet`, `idhang`) VALUES
('2', 'Iphone 3', '2.000.000', '', 'iphone3.jpeg'),
('2', 'Iphone4', '3.500.000', '', 'iphone4.jpg'),
('2', 'Iphone 5', '4.000.000', '', 'iphone5.jpg'),
('3', 'Nokia Lumia', '2.000.000', '', 'Nk1.jpg'),
('3', 'Nokia 3276 ', '900.000', '', 'Nokia2.jpg'),
('3', 'Nokia Touch', '3.000.000', '', 'Nokia3.jpg'),
('1', 'Samsung Galaxy Y', '3.500.000', '', 'Samsung1.jpg'),
('1', 'Samsung Galaxy J3', '3.600.000', '', 'samsung4.jpeg'),
('1', 'Samsung Galaxy A3', '1.500.000', '', 'SamsungV.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chu`
--
ALTER TABLE `chu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hangdt`
--
ALTER TABLE `hangdt`
  ADD PRIMARY KEY (`idhang`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`hoten`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idhang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
