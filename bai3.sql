-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 02:15 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `ChucVuId` int(11) NOT NULL,
  `TenChucVu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`ChucVuId`, `TenChucVu`) VALUES
(0, 'Chủ tịch'),
(2, 'Nhập liệu'),
(4, 'Trưởng Phòng'),
(5, 'Lao Công'),
(6, 'Thư ký');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `HDLDId` int(11) NOT NULL,
  `BatDau` date NOT NULL,
  `KetThuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`HDLDId`, `BatDau`, `KetThuc`) VALUES
(0, '2011-07-06', '2092-11-07'),
(11, '2020-06-28', '2020-07-05'),
(12, '2020-06-30', '2020-07-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Id` varchar(5) NOT NULL,
  `Ho` varchar(20) DEFAULT NULL,
  `Ten` varchar(10) DEFAULT NULL,
  `NgaySinh` date DEFAULT current_timestamp(),
  `DiaChi` varchar(100) DEFAULT NULL,
  `GioiTinh` int(11) DEFAULT 1,
  `SoDienThoai` varchar(12) DEFAULT NULL,
  `ChucVuId` int(11) DEFAULT NULL,
  `PhongBanId` int(11) DEFAULT NULL,
  `HDLDId` int(11) DEFAULT NULL,
  `Password` varchar(16) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Id`, `Ho`, `Ten`, `NgaySinh`, `DiaChi`, `GioiTinh`, `SoDienThoai`, `ChucVuId`, `PhongBanId`, `HDLDId`, `Password`, `Status`) VALUES
('22012', 'Vũ', 'Chí', '2020-07-06', '112 Dương Nội, Hà Đông, Hà Nội', 1, '325165165', 2, 2, 12, '2', 1),
('41011', 'Bùi Văn', 'Điều', '2020-07-07', '29 An Thọ, An Khánh, Hoài Đức, Hà Nội', 1, '2', 4, 1, 11, '2', 1),
('td99', 'Triệu Tiến', 'Đức', '1970-01-01', '293 La Dương, Dương Nội, Hà Đông, Hà Nội', 1, '0362229626', 0, 0, 0, '1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `PhongBanId` int(11) NOT NULL,
  `TenPB` varchar(50) DEFAULT NULL,
  `SDT` varchar(12) DEFAULT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`PhongBanId`, `TenPB`, `SDT`, `DiaChi`) VALUES
(0, 'Quản trị', '0362229626', 'Hà Đông'),
(1, 'Phòng Sale', '0462229626', 'Hà Đông'),
(2, 'Phòng IT', '0562229626', 'Hà Đông'),
(3, 'Phòng Tạp vụ', '0662229626', 'Hà Đông');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`ChucVuId`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`HDLDId`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`PhongBanId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `ChucVuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `HDLDId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `PhongBanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
