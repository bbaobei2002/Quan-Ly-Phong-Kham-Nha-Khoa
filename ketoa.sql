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
-- Cơ sở dữ liệu: `teeth2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketoa` --

CREATE TABLE `ketoa` (
  `sttpk` int(6) NOT NULL,
  `idbn` int(6) NOT NULL,
  `chuandoan` varchar(50) COLLATE utf8_unicode_ci NULL,
  `thuocdieutri` varchar(50) COLLATE utf8_unicode_ci NULL,
  `soluong` varchar(50) COLLATE utf8_unicode_ci NULL,
  `lieudung` varchar(50) COLLATE utf8_unicode_ci NULL,
  `ngaytaikham` varchar(50) COLLATE utf8_unicode_ci NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketoa`
--

INSERT INTO `ketoa` (`sttpk`, `idbn`, `chuandoan`, `thuocdieutri`, `soluong`, `lieudung`, `ngaytaikham`, `view`) VALUES
(1, 1, 'sâu răng', 'thuốc giảm đau', '5 viên', '1 viên/ngày', 'sau 1 tuần', 0 ),
(2, 2, 'viêm nướu', 'thuốc giảm sưng', '5 viên', '1 viên/ngày', 'sau 1 tuần', 0);

-- --------------------------------------------------------
--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ketoa`
--
ALTER TABLE `ketoa`
  ADD KEY `fk_ketoa_phieukham_thebn` (`sttpk`, `idbn`);

  
--
-- AUTO_INCREMENT cho các bảng đã đổ
--


--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ketoa`
--
ALTER TABLE `ketoa`
  ADD CONSTRAINT `fk_ketoa_phieukham_thebn` FOREIGN KEY (`sttpk`, `idbn`) REFERENCES `phieukham` (`stt`), `thebn` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
