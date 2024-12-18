-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2022 lúc 08:57 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `teeth`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieukham` --

CREATE TABLE `phieukham` (
  `stt` int(6) NOT NULL,
  `idbn` int(6) NOT NULL,
  `ngaykham` varchar(50) COLLATE utf8_unicode_ci NULL,
  `trieuchung` varchar(50) COLLATE utf8_unicode_ci NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieukham`
--

INSERT INTO `phieukham` (`stt`, `idbn`, `ngaykham`, `trieuchung`, `view`) VALUES
(1, 1, '14/4/2024', 'đau răng', 0 ),
(2, 2, '27/3/2024', 'đau nướu răng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thebn`
--

CREATE TABLE `thebn` (
  `id` int(6) NOT NULL,
  `tenbn` varchar(30) COLLATE utf8_unicode_ci NULL,
  `ngaysinh` varchar(50) COLLATE utf8_unicode_ci NULL,
  `gioitinh` varchar(5) COLLATE utf8_unicode_ci NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thebn`
--

INSERT INTO `thebn` (`id`, `tenbn`, `ngaysinh`, `gioitinh`, `sdt`, `view`) VALUES
(1, 'Micchan', '22/5/1993', 'Nam', '0789643614', 0),
(2, 'Lê Quang Minh', '16/11/2002', 'Nam', '0789643617', 0);

-- --------------------------------------------------------
--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `fk_phieukham_thebn` (`idbn`);
--
-- Chỉ mục cho bảng `thebn`
--
ALTER TABLE `thebn`
  ADD PRIMARY KEY (`id`);
  
--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  MODIFY `stt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thebn`
--
ALTER TABLE `thebn`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phieukham`
--
ALTER TABLE `phieukham`
  ADD CONSTRAINT `fk_phieukham_thebn` FOREIGN KEY (`idbn`) REFERENCES `thebn` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
