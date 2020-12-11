-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2020 lúc 02:13 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `SoDienThoai` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `ngaydangnhap` date DEFAULT NULL,
  `tendangnhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `SoDienThoai`, `Email`, `DiaChi`, `ngaydangnhap`, `tendangnhap`, `MatKhau`) VALUES
(1, 'Đinh Công Nam', 45123789, 'namdinhcong@gmail.com', 'Thái Bình', '2020-11-12', 'nam', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghichu`
--

CREATE TABLE `ghichu` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Soluong` int(100) NOT NULL,
  `gia` int(100) NOT NULL,
  `ngaydat` timestamp NULL DEFAULT NULL,
  `ngaygiao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(100) NOT NULL,
  `ma_hd` int(100) NOT NULL,
  `name` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` int(100) NOT NULL,
  `diachi` int(100) NOT NULL,
  `ngay` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `SoDienThoai` int(100) NOT NULL,
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `SoDienThoai`, `tendangnhap`, `matkhau`, `DiaChi`) VALUES
(1, 'sinh', 5462, 'sinh', '123', 'ha noi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_sanphamgi` int(10) NOT NULL,
  `gtri_km` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(100) NOT NULL,
  `id_nh` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `ngaysx` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `id_nh`, `tensp`, `ngaysx`) VALUES
(1, 2, 'Đồng hồ Gucci', '2020-11-11 10:48:46.000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ngaysx` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `name`, `ngaysx`) VALUES
(1, 'Đồng hồ Rolex\r\n', '2020-11-11 10:48:46'),
(2, 'Đồng hồ Omega', '2020-11-14 14:48:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_sanphamgi`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_nh` (`id_nh`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_sanphamgi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghichu`
--
ALTER TABLE `ghichu`
  ADD CONSTRAINT `ghichu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hoadon` (`id_hd`),
  ADD CONSTRAINT `ghichu_ibfk_2` FOREIGN KEY (`id`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_hd`) REFERENCES `tbl_sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_nh`) REFERENCES `thuonghieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
