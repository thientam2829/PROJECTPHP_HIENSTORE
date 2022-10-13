-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 13, 2022 lúc 08:36 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hienstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int NOT NULL,
  `soluongmua` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '6673', 11, 1),
(2, '774', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chinhanh`
--

CREATE TABLE `tbl_chinhanh` (
  `id_chinhanh` int NOT NULL,
  `chinhanh` varchar(255) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chinhanh`
--

INSERT INTO `tbl_chinhanh` (`id_chinhanh`, `chinhanh`, `thutu`) VALUES
(2, 'Hiên FLAGSHIP STORE: 184 LÊ ĐẠI HÀNH , PHƯỜNG 15 , QUẬN 11 , TPHCM ', 1),
(3, 'Store 2: 47 PHẠM ĐÔN , PHƯỜNG 10 , QUẬN 5 , TPHCM', 2),
(4, 'Store 3: ẤP BÌNH TIỀN 1, ĐỨC HOÀ HẠ , ĐỨC HOÀ , LONG AN', 3),
(5, 'Store 4: 2 THÔNG THIÊN HỌC , PHƯỜNG 2 , TP ĐÀ LẠT , LÂM ĐỒNG', 4),
(6, 'Store 5: 116 HÙNG VƯƠNG , PHƯƠNG 11 , TP ĐÀ LẠT , LÂM ĐỒNG', 5),
(7, 'Store 6: 36 KHU HOÀ BÌNH , PHƯỜNG 1 , TP ĐÀ LẠT , LÂM ĐỒNG', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chinhsach`
--

CREATE TABLE `tbl_chinhsach` (
  `id_chinhsach` int NOT NULL,
  `tenchinhsach` varchar(255) NOT NULL,
  `noidung` longtext NOT NULL,
  `tinhtrang` int NOT NULL,
  `id_tenchinhsach` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chinhsach`
--

INSERT INTO `tbl_chinhsach` (`id_chinhsach`, `tenchinhsach`, `noidung`, `tinhtrang`, `id_tenchinhsach`) VALUES
(5, 'Chính sách sử dụng website', '', 1, 1),
(6, 'Thông tin về phương thức thanh toán', '', 1, 4),
(7, 'Chính sách đổi trả', '', 1, 5),
(8, 'CHÍNH SÁCH GIAO NHẬN – VẬN CHUYỂN', '', 1, 6),
(9, 'ĐIỀU KHOẢN DỊCH VỤ', '', 1, 7),
(10, 'HƯỚNG DẪN MUA HÀNG', '<', 1, 8),
(11, 'CHÍNH SÁCH BẢO MẬT', '', 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(15, 'Quần', 3),
(18, 'Áo', 2),
(27, 'Phụ kiện', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_giohang` int NOT NULL,
  `id_khachhang` int NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int NOT NULL,
  `stime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_giohang`, `id_khachhang`, `code_cart`, `cart_status`, `stime`) VALUES
(1, 13, '6673', 1, '2022-10-10 09:29:40'),
(2, 14, '774', 1, '2022-10-10 09:33:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khackhang`
--

CREATE TABLE `tbl_khackhang` (
  `id_khachhang` int NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khackhang`
--

INSERT INTO `tbl_khackhang` (`id_khachhang`, `tenkhachhang`, `diachi`, `dienthoai`, `email`, `matkhau`, `role_id`) VALUES
(9, '', '', '', '0906136164', 'd41d8cd98f00b204e9800998ecf8427e', 4),
(10, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 4),
(11, '', '', '', 'thintsm', 'd41d8cd98f00b204e9800998ecf8427e', 4),
(12, '', '', '', 'thintsm', 'd41d8cd98f00b204e9800998ecf8427e', 4),
(13, 'THIỆN TÂM', '288 NGUYỄN TRI PHƯƠNG', '0343344658', 'thientam2829@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4),
(14, 'THIỆN TÂM', '288 NGUYỄN TRI PHƯƠNG', '0343344658', 'thientam2829@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int NOT NULL,
  `lienhe` varchar(255) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `lienhe`, `thutu`) VALUES
(1, 'CÔNG TY TNHH HIÊN . Địa chỉ: 184 LÊ ĐẠI HÀNH , PHƯỜNG 15 , QUẬN 11 , TPHCM	', 1),
(5, 'Tuyển dụng: hr@hien.vn', 2),
(6, 'Website: hienstore.vn', 3),
(7, 'Liên hệ CSKH: support@hien.vn', 4),
(8, 'For business: contact@hien.vn', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` int NOT NULL,
  `km` int NOT NULL,
  `giagockm` int NOT NULL,
  `soluong` int NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tinhtrang` int NOT NULL,
  `id_danhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `km`, `giagockm`, `soluong`, `hinhanh`, `tomtat`, `tinhtrang`, `id_danhmuc`) VALUES
(1, 'Quần Tây tối giản HG17', 'HG17', 499000, 0, 400000, 25, 'quan2.jpg', 'Chất liệu: Vải Quần Tây ', 1, 15),
(2, 'Quần Jean SlimFit Đơn giản B19', 'B19', 529000, 0, 500000, 50, 'quan1.jpg', 'Chất liệu: Jean Cotton\r\n <p>Thành phần: 98% cotton 2% spandex</p>\r\n<p>Độ bền cao Mặc mát, rất thoải mái.</p>', 1, 15),
(3, 'Quần Dài Vải Đơn Giản Y Nguyên Bản Ver14', 'V14', 359000, 10, 159000, 20, 'quan3.jpg', 'Chất liệu: Vải Kaki Họa tiết gắn logo #Y2010', 1, 15),
(4, 'Quần Jogger Đơn Giản Y Nguyên Bản Ver9', 'V9', 329000, 0, 300000, 52, 'quan4.jpg', 'Chất liệu: COTTON DOUBLE FACE \r\n<p> Vải sợi Cotton được dệt theo \"DOUBLE-FACE\" có cấu trúc 2 bề mặt giống nhau, có thể sử dụng được cả 2 mặt vải . </p>', 1, 15),
(5, 'Áo Thun Cổ Tròn Nguyên Bản 18-Ver80', 'V80', 299000, 1, 200000, 20, 'aothun2.jpg', 'Chất liệu: Cotton Compact 2C \r\n<p> Thành phần: 100% Cotton</p>', 1, 18),
(6, 'Áo Thun Cổ Tròn Đơn Giản Thần Cổ Đại Valknut Ver3', 'VV3', 199000, 7, 99000, 25, 'aothun3.jpg', 'Chất liệu: Cotton Compact\r\n<p> Thành phần: 100% Cotton </p>', 1, 18),
(7, 'Áo Thun Cổ Tròn Thiên Nhiên Kì Vĩ M6', 'M6', 199000, 10, 100000, 10, 'aothun4.jpg', 'Chất liệu: Cotton Compact \r\n<p>Thành phần: 100% Cotton</p>', 1, 18),
(8, 'Áo Thun Vạn Xuân Kiến Quốc Ver9', 'V9', 259000, 0, 200000, 3, 'aothun5.jpg', 'Chất liệu: Cotton Compact \r\n<p> Thành phần: 100% Cotton </p>', 1, 18),
(9, 'Áo Sơ Mi Tay Dài Sợi Cà Phê Đơn Giản M28', 'M28', 329000, 5, 250000, 20, 'aosomi.jpg', 'Chất liệu: Vải cà phê \r\n<p> Thành phần: 50% coffee , 50% poly </p>', 1, 18),
(10, 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M01', 'M01', 359000, 10, 300000, 20, 'aosomi2.jpg', 'Chất liệu: Kate \r\n<p> Thành phần: 88% superfine ,12% modal </p>', 1, 18),
(11, 'Áo Sơ Mi Tay Ngắn Nguyên Bản Ver29', 'V29', 399000, 5, 300000, 20, 'aosomi3.jpg', 'Chất liệu: Vải Linen Gân \r\n<p>Thành phần: 49% Rayon ,17% Nylon ,34% Polyester</p>', 1, 18),
(12, 'Áo Sơ Mi Tay Dài Đơn Giản Y Nguyên Bản Ver26', 'V26', 389000, 5, 320000, 20, 'aosomi4.jpg', 'Chất liệu : Nhung \r\n<p>Thành phần: 100% Polyester </p>\r\n<p>Họa tiết may logo kim loại </p>', 1, 18),
(13, 'PKTT Nón Thần Cổ Đại Anubis Ver3', 'Ver3', 190000, 2, 100000, 10, 'non1.jpg', 'Thành phần: 100% cotton\r\n<p> Họa tiết in dẻo </p>', 1, 27),
(14, 'PKTT Nón 12VAHDT Văn Hiến Chi Bang Ver4', 'Ver4', 189000, 2, 99000, 22, 'non2.jpg', 'Chất liệu : Kaki \r\n<p>Thành phần: 100% cotton</p>\r\n<p> Logo Văn Hiến Chi Bang thêu 3D </p>', 1, 27),
(15, 'Quần Lót Low Rise Trunk Y2010 Cotton M4 Combo 3', 'M4', 200000, 5, 160000, 22, 'underwear.jpg', 'Chất liệu: Vải Cotton Compact\r\n<p>Thành phần: 92% cotton ,8% spandex </p>', 1, 27),
(16, 'PKTT Vớ Nguyên Bản COMBO 7', 'CB7', 170000, 0, 170000, 10, 'vo.jpg', 'Thành phần: 90% Cotton 10% Spandex\r\n<p> - Mềm mại, bó sát cổ chân </p>\r\n<p> - Thoáng khí </p>\r\n<p> - Co giãn, đàn hồi cao </p>\r\n<p> - Khử mùi </p>', 1, 27);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_chinhanh`
--
ALTER TABLE `tbl_chinhanh`
  ADD PRIMARY KEY (`id_chinhanh`);

--
-- Chỉ mục cho bảng `tbl_chinhsach`
--
ALTER TABLE `tbl_chinhsach`
  ADD PRIMARY KEY (`id_chinhsach`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `tbl_khackhang`
--
ALTER TABLE `tbl_khackhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_chinhanh`
--
ALTER TABLE `tbl_chinhanh`
  MODIFY `id_chinhanh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_chinhsach`
--
ALTER TABLE `tbl_chinhsach`
  MODIFY `id_chinhsach` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_giohang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khackhang`
--
ALTER TABLE `tbl_khackhang`
  MODIFY `id_khachhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
