-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 10, 2022 lúc 03:32 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MSHH` int(11) NOT NULL,
  `STT` int(11) NOT NULL,
  `NOIDUNG` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MSHH`, `STT`, `NOIDUNG`) VALUES
(37, 1, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(37, 2, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(37, 3, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(37, 4, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(65, 1, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(65, 2, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(69, 1, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(69, 2, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(121, 1, 'sáº£n pháº©m cháº¥t lÆ°á»£ng'),
(121, 2, 'sáº£n pháº©m cháº¥t lÆ°á»£ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `MSKH` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ChucVu` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`MSKH`, `stt`, `NoiDung`, `ChucVu`) VALUES
(1, 1, 'xin chÃ o shop', 'khachhang'),
(1, 2, 'xin chÃ o shop', 'khachhang'),
(5, 1, 'xin chÃ o shop', 'khachhang'),
(5, 2, 'xin chÃ o shop', 'khachhang'),
(8, 1, 'hi', 'khachhang'),
(8, 2, 'hi', 'khachhang'),
(9, 1, 'xin chÃ o shop', 'khachhang'),
(9, 2, 'xin chÃ o shop', 'khachhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` varchar(255) NOT NULL,
  `MSHH` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaDatHang` float NOT NULL,
  `GiamGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` varchar(255) NOT NULL,
  `MSKH` int(11) NOT NULL,
  `MSNV` int(11) NOT NULL,
  `NgayDH` date DEFAULT NULL,
  `NgayGH` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Gia` float NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MaLoaiHang` int(11) NOT NULL,
  `GhiChu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `HinhAnh`, `Gia`, `SoLuongHang`, `MaLoaiHang`, `GhiChu`) VALUES
(37, 'iphone 7', 'iphone-7-plus-red-128gb-400x460.png', 100000, 100, 4, 'rrrrrrr'),
(44, 'Oppo F3 plus', 'oppo-f3-plus-pp-300x300.jpg', 230000, 100, 4, '<p>Ä‘áº¹p</p>'),
(47, 'Sony 9', 'sony-xperia-xzs-400x460.png', 180000, 100, 11, '<p>Äáº¹p</p>'),
(65, 'Phá»¥ Kiá»‡n Bá»™ Combo cÃ¡p + Sáº¡c iphone 4', 'znp1369155325-150x150.jpg', 199900, 100, 2, '<p>Äáº¹p</p>'),
(68, 'Bao da Clear View Galaxy S8 Plus Standing 2017 chÃ­nh hÃ£ng ', 'timthumb (1).jpg', 849000, 100, 4, '<p>Äáº¹p</p>'),
(69, 'Bao da Clear View Galaxy S8 Plus Standing 2017 chÃ­nh hÃ£ng ', 'timthumb (2).jpg', 679000, 100, 4, '<p>Äáº¹p</p>'),
(70, 'Bao da Clear View Galaxy S8 Plus Standing 2017 chÃ­nh hÃ£ng ', 'timthumb.jpg', 779000, 100, 4, '<p>Äáº¹p</p>'),
(74, 'Pin Äiá»‡n Thoáº¡i Lg Blt6', 'image-5763535-574477648cb589dfd49642531b777ca5-product.jpg', 159000, 100, 9, '<p>Äáº¹p</p>'),
(75, 'Pin Äiá»‡n Thoáº¡i Lg Blt6', 'image-6282355-202a86ba4c35ce1b5941fab448818358-product.jpg', 179000, 100, 9, '<p>Äáº¹p</p>'),
(76, 'Pin Äiá»‡n Thoáº¡i Lg Blt6', 'image-7576025-31419a2ed9a0cb8fb604b2f1590a52e7-product.jpg', 189000, 100, 9, '<p>Äáº¹p</p>'),
(77, 'Pin Äiá»‡n Thoáº¡i Lg Blt6', 'image-9776025-284b2d6e9c4f8a725360e92b737582f7-product.jpg', 215000, 100, 9, '<p>Äáº¹p</p>'),
(79, 'Sáº C Dá»° PHÃ’NG GENAI TRáº®NG 10.000MAH', '797-sac-du-phong-genai-trang-10000mah-gia-re.jpg', 1990000, 100, 10, '<p>Äáº¹p</p>'),
(80, 'Sáº C Dá»° PHÃ’NG GENAI TRáº®NG 10.000MAH', 'd8e-pin-sac-xiaomi-10000mah-gen-2-gia-re.jpg', 159000, 100, 10, '<p>Äáº¹p</p>'),
(81, 'Sáº C Dá»° PHÃ’NG GENAI TRáº®NG 10.000MAH', 'd8e-pin-sac-xiaomi-10000mah-gen-2-gia-re.jpg', 1290000, 100, 10, '<p>Äáº¹p</p>'),
(82, 'Bá»™ Sáº¡c T2H5', '5190001_sa (1).jpg', 199000, 100, 13, '<p>Äáº¹p</p>'),
(83, 'Bá»™ Sáº¡c T2H5', '3.jpg', 199000, 100, 13, '<p>Äáº¹p</p>'),
(88, 'iphone 7', 'iphone-7-plus-red-128gb-400x460.png', 100000, 100, 4, 'rrrrrrr'),
(112, 'Cut sáº¡c Samsung', 'bo-sac-samsung-4a.jpg', 80000, 100, 2, 'Ä‘áº¹p'),
(113, 'Sáº¡c nhanh oppo', '7-700x390.jpg', 100000, 110, 2, 'Ä‘áº¹p'),
(114, 'Gáº­y chá»¥p inox', '3112575548_1184480815_200x200.jpg', 45000, 30, 8, 'Ä‘áº¹p'),
(115, 'Gáº­y TS gáº¥p gá»n Ä‘áº§u', 'gay ts gap gon dau 5_200x200.jpg', 60000, 50, 8, 'Ä‘áº¹p'),
(116, 'Gáº­y tá»± sÆ°á»›ng mini', 'gay tu suong mini 2_200x200.jpg', 70000, 30, 8, 'Ä‘áº¹p'),
(117, 'dÃ¡n trong suá»‘t iphone 7', 'Capture3.PNG', 40000, 100, 2, 'Ä‘áº¹p'),
(119, 'DÃ¡n trong suá»‘t iphne6', 'Capture1.PNG', 40000, 20, 11, 'Ä‘áº¹p'),
(120, 'DÃ¡n cÆ°á»ng lá»±c iphone 6', 'Jet.jpg', 50000, 10, 12, 'Ä‘áº¹p'),
(121, 'DÃ¡n cÆ°á»ng lá»±c redmi 8', 'Capture3.PNG', 30000, 30, 12, 'Ä‘áº¹p'),
(122, 'DÃ¡n cÆ°á»ng lá»±c iphone 10', 'Capture4.PNG', 60000, 20, 12, 'Ä‘áº¹p'),
(124, 'Bao da iphone 7', '0a7-sac-du-phong-romoss-polymoss-10000mah-gia-re.jpg', 14000, 40, 14, 'Ä‘áº¹p lam'),
(126, 'bao da redmi note 8', 'Capture6.PNG', 80000, 30, 14, 'Ä‘áº¹p');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `Email`, `MatKhau`, `SoDienThoai`, `DiaChi`) VALUES
(1, 'b1809235', 'haub1809235@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 987654321, 'ha noi'),
(2, 'huyen', 'huyenb1809235@gmail.com', 'd856125d827ac297307baf299a8ee1f1', 987654321, 'an giang'),
(3, 'hoang', 'hoang1809235@gmail.com', 'f82e62d7c3ea69cc12b5cdb8d621dab6', 987654321, 'can tho'),
(4, 'huy', 'huy1809235@gmail.com', '11967d5e9addc5416ea9224eee0e91fc', 987654321, 'can tho'),
(5, 'huan', 'huan1809235@gmail.com', '6e458aa69069e6cace448d8f4532870f', 987654321, 'vietnam'),
(6, 'huynh', 'huynh1809235@gmail.com', '724432de08f74e1fb4dfb69fb4cc7ba8', 1234567890, 'an giang'),
(7, 'tri', 'trib1809235@gmail.com', 'd2cfe69af2d64330670e08efb2c86df7', 987654321, 'hanoi'),
(8, 'anh', 'anhb1809235@gmail.com', '5febda3d0ef90737a60de2fd7c6d7728', 987654321, 'hanoi'),
(9, 'hoangg', 'hoanggb1809235@gmail.com', '97aae0d1274cf188243de5c5d868dccd', 987654321, 'angiang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
(2, 'Cá»§ sáº¡c'),
(4, 'á»p lÆ°ng Iphone'),
(8, 'Gáº­p chá»¥p áº£nh'),
(9, 'Pin Ä‘iá»‡n thoáº¡i'),
(10, 'Sáº¡c dá»± phÃ²ng'),
(11, 'DÃ¡n trong suá»‘t'),
(12, 'DÃ¡n cÆ°á»ng lá»±c'),
(13, 'Bá»™ sáº¡c'),
(14, 'Bao da hÃ£ng'),
(15, 'DÃ¢y sáº¡c,cÃ¡p sáº¡c'),
(16, 'á»p lÆ°ng Samsung'),
(17, 'Loa nghe nháº¡c'),
(18, 'Tai nghe head'),
(19, 'Thiáº¿t bá»‹ an ninh'),
(20, 'Tháº» nhá»› USB'),
(21, 'op lung á»‹phone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ChucVu` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoDienThoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `MatKhau`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
(1, 'hau', 'a23ed18c6f9425dc306fc002e5c2046e', 'banhang', 'can tho', 123456788),
(4, 'Hoa', '9810784ce10b72a1ef2f50bc5fec59ba', 'banhang', 'can tho', 123456789);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MSHH`,`STT`);

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`MSKH`,`stt`);

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `fk_htk_id_san` (`MSHH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `fk_htk_id` (`MSNV`),
  ADD KEY `fk_htk_idD` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `fk_htk_id_sanpham` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_htk_id_sanphamMM` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Các ràng buộc cho bảng `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_tenmmmm` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `fk_htk_id_sa` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`),
  ADD CONSTRAINT `fk_htk_id_san` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `fk_htk_id` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `fk_htk_idD` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_htk_id_sanpham` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
