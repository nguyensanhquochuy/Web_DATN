-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 06:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ketnoi_giasu_hocvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `buoi`
--

CREATE TABLE `buoi` (
  `MaBuoi` int(11) NOT NULL,
  `TenBuoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buoi`
--

INSERT INTO `buoi` (`MaBuoi`, `TenBuoi`) VALUES
(1, 'Sáng'),
(2, 'Chiều'),
(3, 'Tối');

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `MaCD` int(11) NOT NULL,
  `MaMH` int(11) NOT NULL,
  `TenCD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`MaCD`, `MaMH`, `TenCD`) VALUES
(1, 1, 'Toán cấp 3'),
(2, 1, 'Toán cấp 2'),
(3, 1, 'Toán cấp 1'),
(4, 1, 'Toán ôn thi đại học'),
(5, 1, 'Toán ôn thi THPT'),
(6, 1, 'Toán luyện thi HSG'),
(7, 1, 'Chủ đề khác môn Toán'),
(8, 2, 'Lý cấp 3'),
(9, 2, 'Lý cấp 2'),
(10, 2, 'Lý ôn thi đại học'),
(11, 2, 'Lý ôn thi THPT'),
(12, 2, 'Lý ôn thi HSG'),
(13, 2, 'Chủ đề khác môn Lý'),
(14, 3, 'Hóa cấp 3'),
(15, 3, 'Hóa cấp 2'),
(16, 3, 'Hóa ôn thi đại học'),
(17, 3, 'Hóa ôn thi THPT'),
(18, 3, 'Hóa ôn thi HSG'),
(19, 3, 'Chủ đề khác môn hóa'),
(20, 4, 'Văn cấp 3'),
(21, 4, 'Văn cấp 2'),
(22, 4, 'Văn ôn thi đại học'),
(23, 4, 'Văn ôn thi THPT'),
(24, 4, 'Văn luyện thi HSG'),
(25, 4, 'Chủ đề khác môn Văn'),
(26, 5, 'Tiếng việt cấp 1'),
(27, 5, 'Tiếng việt dành cho người nước ngoài'),
(28, 6, 'Lịch sử cấp 3'),
(29, 6, 'Lịch sử cấp 2'),
(30, 6, 'Lịch sử ôn thi đại học'),
(31, 6, 'Lịch sử ôn thi THPT'),
(41, 6, 'Lịch sử luyện thi HSG'),
(42, 6, 'Chủ đề khác môn Lịch sử'),
(43, 7, 'Địa lý cấp 3'),
(44, 7, 'Địa lý cấp 2'),
(45, 7, 'Địa lý ôn thi đại học'),
(46, 7, 'Địa lý ôn thi THPT'),
(47, 7, 'Địa lý luyện thi HSG'),
(48, 7, 'Chủ đề khác môn Địa lý'),
(49, 8, 'Sinh học cấp 3'),
(50, 8, 'Sinh học cấp 2'),
(51, 8, 'Sinh ôn thi đại học'),
(52, 8, 'Sinh ôn thi THPT'),
(53, 8, 'Sinh luyện thi HSG'),
(54, 8, 'Chủ đề khác môn Sinh'),
(55, 10, 'Tiếng anh giao tiếp cơ bản'),
(56, 10, 'Tiếng anh ngữ pháp cơ bản'),
(57, 10, 'Tiếng anh luyện phát âm'),
(58, 10, 'IELTS'),
(59, 10, 'TOEIC'),
(60, 10, 'TOEFL'),
(61, 10, 'Luyện thi CPE'),
(62, 10, 'Tiếng Anh cho trẻ em'),
(63, 10, 'Tiếng Anh cho người đi làm'),
(64, 10, 'Tiếng Anh chuyên ngành'),
(65, 10, 'Tiếng Anh luyện viết nâng cao'),
(66, 10, 'Dịch thuật tiếng Anh'),
(67, 10, 'Tiếng anh giao tiếp nâng cao'),
(68, 10, 'GRE'),
(69, 10, 'GMAT'),
(70, 10, 'Chủ đề khác môn tiếng Anh'),
(71, 10, 'Tiếng anh cấp 1'),
(72, 10, 'Tiếng anh cấp 2'),
(73, 10, 'Tiếng anh cấp 3'),
(74, 10, 'Luyện thi SAT'),
(75, 11, 'Tiếng Nhật N2'),
(76, 11, 'Tiếng Nhật N3'),
(77, 11, 'Tiếng Nhật N4'),
(78, 11, 'Tiếng Nhật N1'),
(79, 11, 'Tiếng Nhật cho trẻ em'),
(80, 11, 'Tiếng Nhật giao tiếp cơ bản'),
(81, 11, 'Tiếng Nhật ngữ pháp cơ bản'),
(82, 11, 'Tiếng Nhật cho người đi làm'),
(83, 11, 'Tiếng Nhật chuyên ngành'),
(84, 11, 'Tiếng Nhật giao tiếp nâng cao'),
(85, 11, 'Tiếng Nhật luyện viết nâng cao'),
(86, 11, 'Tiếng Nhật dịch thuật nâng cao'),
(87, 11, 'Luyện thi Nat-Test'),
(88, 11, 'Luyện thi Top-J'),
(89, 11, 'Luyện thi BJT'),
(90, 11, 'Chủ đề khác tiếng Nhật'),
(91, 12, 'Luyện thi TOPIK'),
(92, 12, 'Luyện thi KLPT'),
(93, 12, 'Tiếng Hàn cho trẻ em'),
(94, 12, 'Tiếng Hàn giao tiếp cơ bản'),
(95, 12, 'Tiếng Hàn cho người đi làm'),
(96, 12, 'Tiếng Hàn chuyên ngành'),
(97, 12, 'Tiếng Hàn  giao tiếp nâng cao'),
(98, 12, 'Tiếng Hàn luyện viết nâng cao'),
(99, 12, 'Tiếng Hàn dịch thuật nâng cao'),
(100, 12, 'Chủ đề khác môn tiếng Hàn'),
(101, 13, 'Luyện thi DSD1, DSD2'),
(102, 13, 'Tiếng đức B1'),
(103, 13, 'Tiếng đức B2'),
(104, 13, 'Tiếng Đức cho trẻ em'),
(105, 13, 'Tiếng Đức giao tiếp cơ bản'),
(106, 13, 'Tiếng Đức ngữ pháp cơ bản'),
(107, 13, 'Tiếng Đức cho người đi làm'),
(108, 13, 'Tiếng Đức chuyên ngành'),
(109, 13, 'Tiếng Đức giao tiếp nâng cao'),
(110, 13, 'Tiếng Đức luyện viết nâng cao'),
(111, 13, 'Tiếng Đức dịch thuật nâng cao'),
(112, 13, 'Tiếng Đức A1-A2'),
(113, 13, 'Tiếng Đức C1-C2'),
(114, 13, 'Chủ đề khác tiếng Đức'),
(115, 14, 'Luyện thi TCF'),
(116, 14, 'Luyện thi DELF (A1…C2)'),
(117, 14, 'Tiếng Pháp cho trẻ em'),
(118, 14, 'Tiếng Pháp cho người đi làm'),
(119, 14, 'Tiếng Pháp chuyên ngành'),
(120, 14, 'Tiếng Pháp luyện viết nâng cao'),
(121, 14, 'Tiếng Pháp giao tiếp cơ bản'),
(122, 14, 'Tiếng Pháp ngữ pháp cơ bản'),
(123, 14, 'Tiếng Pháp giao tiếp nâng cao'),
(124, 14, 'Tiếng Pháp dịch thuật nâng cao'),
(125, 14, 'Chủ đề khác tiếng Pháp'),
(126, 15, 'Luyện thi TOCFL'),
(127, 15, 'Luyện thi HSK1…HSK6'),
(128, 15, 'Tiếng Trung giao tiếp'),
(129, 15, 'Tiếng Trung cho trẻ em'),
(130, 15, 'Tiếng Trung cho người đi làm'),
(131, 15, 'Tiếng Trung chuyên ngành'),
(132, 15, 'Tiếng Trung giao tiếp nâng cao'),
(133, 15, 'Tiếng Trung luyện viết nâng cao'),
(134, 15, 'Tiếng Trung dịch thuật nâng cao'),
(135, 15, 'Chủ đề khác tiếng Trung'),
(136, 16, 'Tiếng Tây Ban Nha'),
(137, 16, 'Tiếng Bồ Đào Nha'),
(138, 16, 'Tiếng Ả Rập'),
(139, 16, 'Tiếng Nga'),
(140, 16, 'Tiếng Ý'),
(141, 16, 'Tiếng Mã Lai'),
(142, 16, 'Tiếng Hindi'),
(143, 16, 'Tiếng Thái'),
(144, 17, 'Giao tiếp'),
(145, 17, 'Làm việc nhóm'),
(146, 17, 'Lãnh đạo'),
(147, 17, 'Tư duy sáng tạo'),
(148, 17, 'Giải quyết vấn đề & Ra quyết định'),
(149, 17, 'Quản lý thời gian'),
(150, 17, 'Vượt qua khủng hoảng'),
(151, 17, 'Đàm phán'),
(152, 17, 'Thuyết trình'),
(153, 17, 'Tổ chức công việc'),
(154, 18, 'Giai đoạn mang thai'),
(155, 18, 'Dinh dưỡng cho bé'),
(156, 18, 'Giáo dục sớm'),
(157, 18, 'Nuôi dạy con 0 - 6 tuổi'),
(158, 18, 'Nuôi dạy con 7 - 11 tuổi'),
(159, 18, 'Nuôi dạy con 12 - 16 tuổi'),
(160, 19, 'Photoshop'),
(161, 19, 'SEO'),
(162, 19, 'Lập trình ứng dụng di động'),
(163, 19, 'Lập trình web'),
(164, 19, 'Quản trị CSDL'),
(165, 19, 'Quản trị mạng'),
(166, 19, 'Bảo mật hệ thống'),
(167, 19, 'Kiểm thử phần mềm'),
(168, 19, 'Phát triển game'),
(169, 19, 'Quản lý dự án'),
(170, 20, 'Thiết kế đồ họa'),
(171, 20, 'Dựng & Biên tập video'),
(172, 21, 'Digital Marketing'),
(173, 21, 'Content Marketing'),
(174, 21, 'Video Marketing'),
(175, 21, 'PR - Sự kiện'),
(176, 21, 'Brand (Thương hiệu)'),
(177, 21, 'Trade & Modern Marketing'),
(178, 21, 'Khác (Marketing - Truyền thông)'),
(179, 22, 'Nấu ăn'),
(180, 22, 'Làm bánh'),
(181, 22, 'Pha đồ uống'),
(182, 24, 'Clarinet'),
(183, 24, 'Guitar'),
(184, 24, 'Guzheng'),
(185, 24, 'Harp'),
(186, 24, 'Piano'),
(187, 24, 'Sáo'),
(188, 24, 'Saxophone'),
(189, 24, 'Synthsizer'),
(190, 24, 'Thanh nhạc'),
(191, 24, 'Trống'),
(192, 24, 'Trumpet'),
(193, 24, 'Violin'),
(194, 25, 'Hình họa căn bản'),
(195, 25, 'Học vẽ màu nước'),
(196, 25, 'Vẽ chân dung'),
(197, 25, 'Vẽ hội họa cho bé'),
(198, 25, 'Vẽ Manga thiếu nhi'),
(199, 25, 'Luyện thi vẽ khối V, V1'),
(200, 25, 'Luyện thi vẽ khối H, H1'),
(201, 26, 'Zumba'),
(202, 26, 'Sexy Dance'),
(203, 26, 'Pole dance'),
(204, 26, 'Belley dance'),
(205, 26, 'Hiphop'),
(206, 26, 'Khác'),
(207, 27, 'Yoga'),
(208, 27, 'Gyms'),
(209, 27, 'Fitness'),
(210, 28, 'Bơi lội'),
(211, 28, 'Bóng bàn'),
(212, 28, 'Bóng rổ'),
(213, 28, 'Boxing'),
(214, 28, 'Cầu lông'),
(215, 28, 'Tennis'),
(216, 28, 'Golf'),
(217, 28, 'Võ thuật'),
(218, 29, 'Điện ảnh'),
(219, 29, 'Kiến trúc'),
(220, 29, 'Makeup'),
(221, 29, 'May mặc'),
(222, 29, 'Nhiếp ảnh'),
(223, 29, 'Thiết kế');

-- --------------------------------------------------------

--
-- Table structure for table `danhgiags`
--

CREATE TABLE `danhgiags` (
  `MaDG` int(11) NOT NULL,
  `MaHV` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `DiemTot` text NOT NULL,
  `DiemChuaTot` text NOT NULL,
  `DiemDGTB` float NOT NULL,
  `DiemPPDH` float NOT NULL,
  `DiemKNM` float NOT NULL,
  `DiemTT` float NOT NULL,
  `DiemDG` float NOT NULL,
  `DiemNVSP` float NOT NULL,
  `DeXuat` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giasu`
--

CREATE TABLE `giasu` (
  `MaGS` int(11) NOT NULL,
  `HoTen` text NOT NULL,
  `Email` text NOT NULL,
  `DienThoai` text NOT NULL,
  `Tinh_TP` text DEFAULT NULL,
  `DiaChiCT` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `GioiTinh` smallint(6) NOT NULL,
  `HocPhi1H` double NOT NULL,
  `MaLoaiGS` int(11) DEFAULT NULL,
  `MaHT` int(11) DEFAULT NULL,
  `MaMH` int(11) DEFAULT NULL,
  `MaCD` int(11) DEFAULT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `AnhBangCap` text NOT NULL,
  `AnhCMT` text NOT NULL,
  `LuotXem` double NOT NULL,
  `ThoiGianDN` datetime NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `TrangThaiDuyet` bit(1) NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `MaHT` int(11) NOT NULL,
  `TenHT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hinhthuc`
--

INSERT INTO `hinhthuc` (`MaHT`, `TenHT`) VALUES
(1, '(Offline) Gặp mặt'),
(2, '(Online) Trực tuyến');

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `MaHV` int(11) NOT NULL,
  `HoTen` text NOT NULL,
  `Email` text NOT NULL,
  `DienThoai` text NOT NULL,
  `Tinh_TP` text NOT NULL,
  `DiaChiCT` text NOT NULL,
  `MoTa` text NOT NULL,
  `GioiTinh` smallint(6) NOT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ketnoigs_hv`
--

CREATE TABLE `ketnoigs_hv` (
  `MaKetNoi` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `MaTTDeNghi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichday`
--

CREATE TABLE `lichday` (
  `MaLichDay` int(11) NOT NULL,
  `MaThu` int(11) NOT NULL,
  `MaBuoi` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `MaLichHoc` int(11) NOT NULL,
  `MaThu` int(11) NOT NULL,
  `MaBuoi` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaigs`
--

CREATE TABLE `loaigs` (
  `MaLoaiGS` int(11) NOT NULL,
  `TenLoaiGS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaigs`
--

INSERT INTO `loaigs` (`MaLoaiGS`, `TenLoaiGS`) VALUES
(1, 'Sinh viên'),
(2, 'Giáo viên'),
(3, 'Người đi làm'),
(4, 'Chuyên gia'),
(5, 'Người nước ngoài'),
(6, 'Học sinh');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLop` int(11) NOT NULL,
  `TenLop` text NOT NULL,
  `MaMH` int(11) NOT NULL,
  `MaCD` int(11) NOT NULL,
  `MaHV` int(11) NOT NULL,
  `MaHT` int(11) NOT NULL,
  `Tinh_TP` text NOT NULL,
  `HocPhi` double NOT NULL,
  `SoGioHoc1Buoi` float NOT NULL,
  `DienThoai` text NOT NULL,
  `GioiTinhGS` smallint(6) NOT NULL,
  `SoHV` smallint(6) NOT NULL,
  `SoBuoiHoc1Tuan` tinyint(4) NOT NULL,
  `HocPhi1Buoi` double NOT NULL,
  `NoiDung` text NOT NULL,
  `DiaChiCT` text NOT NULL,
  `ThoiGianDang` datetime NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaTTLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` int(11) NOT NULL,
  `TenMH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
(1, 'Toán'),
(2, 'Lý'),
(3, 'Hóa'),
(4, 'Văn'),
(5, 'Tiếng Việt'),
(6, 'Lịch sử'),
(7, 'Địa lý'),
(8, 'Sinh'),
(9, 'Môn phổ thông khác'),
(10, 'Tiếng Anh'),
(11, 'Tiếng Nhật'),
(12, 'Tiếng Hàn'),
(13, 'Tiếng Đức'),
(14, 'Tiếng Pháp'),
(15, 'Tiếng Trung'),
(16, 'Ngoại ngữ khác'),
(17, 'Kỹ năng mềm'),
(18, 'Nuôi dạy trẻ'),
(19, 'Công nghệ thông tin'),
(20, 'Thiết kế - Đồ họa - Video'),
(21, 'Sales - Marketing'),
(22, 'Ẩm thực'),
(23, 'Ngành nghề khác'),
(24, 'Âm nhạc'),
(25, 'Hội họa'),
(26, 'Dance (nhảy)'),
(27, 'Gyms, yoga, fitness'),
(28, 'Thể thao khác'),
(29, 'Nghệ thuật khác');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `HoTen` text NOT NULL,
  `Email` text NOT NULL,
  `DienThoai` text NOT NULL,
  `DiaChiCT` text NOT NULL,
  `GioiTinh` smallint(6) NOT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaPQ` int(11) NOT NULL,
  `TenPQ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `TenDN` text NOT NULL,
  `DienThoai` text NOT NULL,
  `MatKhau` text NOT NULL,
  `MaPQ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thu`
--

CREATE TABLE `thu` (
  `MaThu` int(11) NOT NULL,
  `TenThu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thu`
--

INSERT INTO `thu` (`MaThu`, `TenThu`) VALUES
(1, 'Thứ 2'),
(2, 'Thứ 3'),
(3, 'Thứ 4'),
(4, 'Thứ 5'),
(5, 'Thứ 6'),
(6, 'Thứ 7'),
(7, 'Chủ nhật');

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidenghi`
--

CREATE TABLE `trangthaidenghi` (
  `MaTTDeNghi` int(11) NOT NULL,
  `TenTTDeNghi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trangthailop`
--

CREATE TABLE `trangthailop` (
  `MaTTLop` int(11) NOT NULL,
  `TenTTLop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthailop`
--

INSERT INTO `trangthailop` (`MaTTLop`, `TenTTLop`) VALUES
(1, 'Đang tìm gia sư'),
(2, 'Đã chấp nhận'),
(3, 'Đóng lớp: Đã kết nối'),
(4, 'Đóng lớp: Chưa có kết nối'),
(5, 'Từ chối đăng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buoi`
--
ALTER TABLE `buoi`
  ADD PRIMARY KEY (`MaBuoi`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`MaCD`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Indexes for table `danhgiags`
--
ALTER TABLE `danhgiags`
  ADD PRIMARY KEY (`MaDG`),
  ADD KEY `MaHV` (`MaHV`),
  ADD KEY `MaGS` (`MaGS`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD PRIMARY KEY (`MaGS`),
  ADD KEY `MaLoaiGS` (`MaLoaiGS`),
  ADD KEY `MaHT` (`MaHT`),
  ADD KEY `MaMH` (`MaMH`),
  ADD KEY `MaCD` (`MaCD`),
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`MaHT`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`MaHV`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Indexes for table `ketnoigs_hv`
--
ALTER TABLE `ketnoigs_hv`
  ADD PRIMARY KEY (`MaKetNoi`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaGS` (`MaGS`),
  ADD KEY `MaTTDeNghi` (`MaTTDeNghi`);

--
-- Indexes for table `lichday`
--
ALTER TABLE `lichday`
  ADD PRIMARY KEY (`MaLichDay`),
  ADD KEY `MaThu` (`MaThu`),
  ADD KEY `MaBuoi` (`MaBuoi`),
  ADD KEY `MaGS` (`MaGS`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`MaLichHoc`),
  ADD KEY `MaThu` (`MaThu`),
  ADD KEY `MaBuoi` (`MaBuoi`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Indexes for table `loaigs`
--
ALTER TABLE `loaigs`
  ADD PRIMARY KEY (`MaLoaiGS`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaMH` (`MaMH`),
  ADD KEY `MaCD` (`MaCD`),
  ADD KEY `MaHV` (`MaHV`),
  ADD KEY `MaHT` (`MaHT`),
  ADD KEY `MaTTLop` (`MaTTLop`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaPQ`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD KEY `MaPQ` (`MaPQ`);

--
-- Indexes for table `thu`
--
ALTER TABLE `thu`
  ADD PRIMARY KEY (`MaThu`);

--
-- Indexes for table `trangthaidenghi`
--
ALTER TABLE `trangthaidenghi`
  ADD PRIMARY KEY (`MaTTDeNghi`);

--
-- Indexes for table `trangthailop`
--
ALTER TABLE `trangthailop`
  ADD PRIMARY KEY (`MaTTLop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buoi`
--
ALTER TABLE `buoi`
  MODIFY `MaBuoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `MaCD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `danhgiags`
--
ALTER TABLE `danhgiags`
  MODIFY `MaDG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giasu`
--
ALTER TABLE `giasu`
  MODIFY `MaGS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MaHV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ketnoigs_hv`
--
ALTER TABLE `ketnoigs_hv`
  MODIFY `MaKetNoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lichday`
--
ALTER TABLE `lichday`
  MODIFY `MaLichDay` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lichhoc`
--
ALTER TABLE `lichhoc`
  MODIFY `MaLichHoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaigs`
--
ALTER TABLE `loaigs`
  MODIFY `MaLoaiGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaPQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thu`
--
ALTER TABLE `thu`
  MODIFY `MaThu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trangthaidenghi`
--
ALTER TABLE `trangthaidenghi`
  MODIFY `MaTTDeNghi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trangthailop`
--
ALTER TABLE `trangthailop`
  MODIFY `MaTTLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chude`
--
ALTER TABLE `chude`
  ADD CONSTRAINT `chude_ibfk_1` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

--
-- Constraints for table `danhgiags`
--
ALTER TABLE `danhgiags`
  ADD CONSTRAINT `danhgiags_ibfk_1` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`),
  ADD CONSTRAINT `danhgiags_ibfk_2` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`);

--
-- Constraints for table `giasu`
--
ALTER TABLE `giasu`
  ADD CONSTRAINT `giasu_ibfk_1` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`),
  ADD CONSTRAINT `giasu_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `giasu_ibfk_4` FOREIGN KEY (`MaLoaiGS`) REFERENCES `loaigs` (`MaLoaiGS`),
  ADD CONSTRAINT `giasu_ibfk_5` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `giasu_ibfk_6` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `giasu_ibfk_7` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `hocvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `ketnoigs_hv`
--
ALTER TABLE `ketnoigs_hv`
  ADD CONSTRAINT `ketnoigs_hv_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`),
  ADD CONSTRAINT `ketnoigs_hv_ibfk_2` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`),
  ADD CONSTRAINT `ketnoigs_hv_ibfk_3` FOREIGN KEY (`MaTTDeNghi`) REFERENCES `trangthaidenghi` (`MaTTDeNghi`);

--
-- Constraints for table `lichday`
--
ALTER TABLE `lichday`
  ADD CONSTRAINT `lichday_ibfk_1` FOREIGN KEY (`MaThu`) REFERENCES `thu` (`MaThu`),
  ADD CONSTRAINT `lichday_ibfk_2` FOREIGN KEY (`MaBuoi`) REFERENCES `buoi` (`MaBuoi`),
  ADD CONSTRAINT `lichday_ibfk_3` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`);

--
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `lichhoc_ibfk_1` FOREIGN KEY (`MaThu`) REFERENCES `thu` (`MaThu`),
  ADD CONSTRAINT `lichhoc_ibfk_2` FOREIGN KEY (`MaBuoi`) REFERENCES `buoi` (`MaBuoi`),
  ADD CONSTRAINT `lichhoc_ibfk_3` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`),
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `lophoc_ibfk_3` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`),
  ADD CONSTRAINT `lophoc_ibfk_5` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `lophoc_ibfk_6` FOREIGN KEY (`MaTTLop`) REFERENCES `trangthailop` (`MaTTLop`),
  ADD CONSTRAINT `lophoc_ibfk_7` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaPQ`) REFERENCES `phanquyen` (`MaPQ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
