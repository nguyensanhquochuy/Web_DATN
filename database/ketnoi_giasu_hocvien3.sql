-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 05:18 PM
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
(32, 6, 'Lịch sử luyện thi HSG'),
(33, 6, 'Chủ đề khác môn Lịch sử'),
(34, 7, 'Địa lý cấp 3'),
(35, 7, 'Địa lý cấp 2'),
(36, 7, 'Địa lý ôn thi đại học'),
(37, 7, 'Địa lý ôn thi THPT'),
(38, 7, 'Địa lý luyện thi HSG'),
(39, 7, 'Chủ đề khác môn Địa lý'),
(40, 8, 'Sinh học cấp 3'),
(41, 8, 'Sinh học cấp 2'),
(42, 8, 'Sinh ôn thi đại học'),
(43, 8, 'Sinh ôn thi THPT'),
(44, 8, 'Sinh luyện thi HSG'),
(45, 8, 'Chủ đề khác môn Sinh'),
(46, 10, 'Tiếng anh giao tiếp cơ bản'),
(47, 10, 'Tiếng anh ngữ pháp cơ bản'),
(48, 10, 'Tiếng anh luyện phát âm'),
(49, 10, 'IELTS'),
(50, 10, 'TOEIC'),
(51, 10, 'TOEFL'),
(52, 10, 'Luyện thi CPE'),
(53, 10, 'Tiếng Anh cho trẻ em'),
(54, 10, 'Tiếng Anh cho người đi làm'),
(55, 10, 'Tiếng Anh chuyên ngành'),
(56, 10, 'Tiếng Anh luyện viết nâng cao'),
(57, 10, 'Dịch thuật tiếng Anh'),
(58, 10, 'Tiếng anh giao tiếp nâng cao'),
(59, 10, 'GRE'),
(60, 10, 'GMAT'),
(61, 10, 'Chủ đề khác môn tiếng Anh'),
(62, 10, 'Tiếng anh cấp 1'),
(63, 10, 'Tiếng anh cấp 2'),
(64, 10, 'Tiếng anh cấp 3'),
(65, 10, 'Luyện thi SAT'),
(66, 11, 'Tiếng Nhật N2'),
(67, 11, 'Tiếng Nhật N3'),
(68, 11, 'Tiếng Nhật N4'),
(69, 11, 'Tiếng Nhật N1'),
(70, 11, 'Tiếng Nhật cho trẻ em'),
(71, 11, 'Tiếng Nhật giao tiếp cơ bản'),
(72, 11, 'Tiếng Nhật ngữ pháp cơ bản'),
(73, 11, 'Tiếng Nhật cho người đi làm'),
(74, 11, 'Tiếng Nhật chuyên ngành'),
(75, 11, 'Tiếng Nhật giao tiếp nâng cao'),
(76, 11, 'Tiếng Nhật luyện viết nâng cao'),
(77, 11, 'Tiếng Nhật dịch thuật nâng cao'),
(78, 11, 'Luyện thi Nat-Test'),
(79, 11, 'Luyện thi Top-J'),
(80, 11, 'Luyện thi BJT'),
(81, 11, 'Chủ đề khác tiếng Nhật'),
(82, 12, 'Luyện thi TOPIK'),
(83, 12, 'Luyện thi KLPT'),
(84, 12, 'Tiếng Hàn cho trẻ em'),
(85, 12, 'Tiếng Hàn giao tiếp cơ bản'),
(86, 12, 'Tiếng Hàn cho người đi làm'),
(87, 12, 'Tiếng Hàn chuyên ngành'),
(88, 12, 'Tiếng Hàn  giao tiếp nâng cao'),
(89, 12, 'Tiếng Hàn luyện viết nâng cao'),
(90, 12, 'Tiếng Hàn dịch thuật nâng cao'),
(91, 12, 'Chủ đề khác môn tiếng Hàn'),
(92, 13, 'Luyện thi DSD1, DSD2'),
(93, 13, 'Tiếng đức B1'),
(94, 13, 'Tiếng đức B2'),
(95, 13, 'Tiếng Đức cho trẻ em'),
(96, 13, 'Tiếng Đức giao tiếp cơ bản'),
(97, 13, 'Tiếng Đức ngữ pháp cơ bản'),
(98, 13, 'Tiếng Đức cho người đi làm'),
(99, 13, 'Tiếng Đức chuyên ngành'),
(100, 13, 'Tiếng Đức giao tiếp nâng cao'),
(101, 13, 'Tiếng Đức luyện viết nâng cao'),
(102, 13, 'Tiếng Đức dịch thuật nâng cao'),
(103, 13, 'Tiếng Đức A1-A2'),
(104, 13, 'Tiếng Đức C1-C2'),
(105, 13, 'Chủ đề khác tiếng Đức'),
(106, 14, 'Luyện thi TCF'),
(107, 14, 'Luyện thi DELF (A1…C2)'),
(108, 14, 'Tiếng Pháp cho trẻ em'),
(109, 14, 'Tiếng Pháp cho người đi làm'),
(110, 14, 'Tiếng Pháp chuyên ngành'),
(111, 14, 'Tiếng Pháp luyện viết nâng cao'),
(112, 14, 'Tiếng Pháp giao tiếp cơ bản'),
(113, 14, 'Tiếng Pháp ngữ pháp cơ bản'),
(114, 14, 'Tiếng Pháp giao tiếp nâng cao'),
(115, 14, 'Tiếng Pháp dịch thuật nâng cao'),
(116, 14, 'Chủ đề khác tiếng Pháp'),
(117, 15, 'Luyện thi TOCFL'),
(118, 15, 'Luyện thi HSK1…HSK6'),
(119, 15, 'Tiếng Trung giao tiếp'),
(120, 15, 'Tiếng Trung cho trẻ em'),
(121, 15, 'Tiếng Trung cho người đi làm'),
(122, 15, 'Tiếng Trung chuyên ngành'),
(123, 15, 'Tiếng Trung giao tiếp nâng cao'),
(124, 15, 'Tiếng Trung luyện viết nâng cao'),
(125, 15, 'Tiếng Trung dịch thuật nâng cao'),
(126, 15, 'Chủ đề khác tiếng Trung'),
(127, 16, 'Tiếng Tây Ban Nha'),
(128, 16, 'Tiếng Bồ Đào Nha'),
(129, 16, 'Tiếng Ả Rập'),
(130, 16, 'Tiếng Nga'),
(131, 16, 'Tiếng Ý'),
(132, 16, 'Tiếng Mã Lai'),
(133, 16, 'Tiếng Hindi'),
(134, 16, 'Tiếng Thái'),
(135, 17, 'Giao tiếp'),
(136, 17, 'Làm việc nhóm'),
(137, 17, 'Lãnh đạo'),
(138, 17, 'Tư duy sáng tạo'),
(139, 17, 'Giải quyết vấn đề & Ra quyết định'),
(140, 17, 'Quản lý thời gian'),
(141, 17, 'Vượt qua khủng hoảng'),
(142, 17, 'Đàm phán'),
(143, 17, 'Thuyết trình'),
(144, 17, 'Tổ chức công việc'),
(145, 18, 'Giai đoạn mang thai'),
(146, 18, 'Dinh dưỡng cho bé'),
(147, 18, 'Giáo dục sớm'),
(148, 18, 'Nuôi dạy con 0 - 6 tuổi'),
(149, 18, 'Nuôi dạy con 7 - 11 tuổi'),
(150, 18, 'Nuôi dạy con 12 - 16 tuổi'),
(151, 19, 'Photoshop'),
(152, 19, 'SEO'),
(153, 19, 'Lập trình ứng dụng di động'),
(154, 19, 'Lập trình web'),
(155, 19, 'Quản trị CSDL'),
(156, 19, 'Quản trị mạng'),
(157, 19, 'Bảo mật hệ thống'),
(158, 19, 'Kiểm thử phần mềm'),
(159, 19, 'Phát triển game'),
(160, 19, 'Quản lý dự án'),
(161, 20, 'Thiết kế đồ họa'),
(162, 20, 'Dựng & Biên tập video'),
(163, 21, 'Digital Marketing'),
(164, 21, 'Content Marketing'),
(165, 21, 'Video Marketing'),
(166, 21, 'PR - Sự kiện'),
(167, 21, 'Brand (Thương hiệu)'),
(168, 21, 'Trade & Modern Marketing'),
(169, 21, 'Khác (Marketing - Truyền thông)'),
(170, 22, 'Nấu ăn'),
(171, 22, 'Làm bánh'),
(172, 22, 'Pha đồ uống'),
(173, 24, 'Clarinet'),
(174, 24, 'Guitar'),
(175, 24, 'Guzheng'),
(176, 24, 'Harp'),
(177, 24, 'Piano'),
(178, 24, 'Sáo'),
(179, 24, 'Saxophone'),
(180, 24, 'Synthsizer'),
(181, 24, 'Thanh nhạc'),
(182, 24, 'Trống'),
(183, 24, 'Trumpet'),
(184, 24, 'Violin'),
(185, 25, 'Hình họa căn bản'),
(186, 25, 'Học vẽ màu nước'),
(187, 25, 'Vẽ chân dung'),
(188, 25, 'Vẽ hội họa cho bé'),
(189, 25, 'Vẽ Manga thiếu nhi'),
(190, 25, 'Luyện thi vẽ khối V, V1'),
(191, 25, 'Luyện thi vẽ khối H, H1'),
(192, 26, 'Zumba'),
(193, 26, 'Sexy Dance'),
(194, 26, 'Pole dance'),
(195, 26, 'Belley dance'),
(196, 26, 'Hiphop'),
(197, 26, 'Khác'),
(198, 27, 'Yoga'),
(199, 27, 'Gyms'),
(200, 27, 'Fitness'),
(201, 28, 'Bơi lội'),
(202, 28, 'Bóng bàn'),
(203, 28, 'Bóng rổ'),
(204, 28, 'Boxing'),
(205, 28, 'Cầu lông'),
(206, 28, 'Tennis'),
(207, 28, 'Golf'),
(208, 28, 'Võ thuật'),
(209, 29, 'Điện ảnh'),
(210, 29, 'Kiến trúc'),
(211, 29, 'Makeup'),
(212, 29, 'May mặc'),
(213, 29, 'Nhiếp ảnh'),
(214, 29, 'Thiết kế');

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
  `Tinh_TP` text NOT NULL,
  `DiaChiCT` text NOT NULL,
  `MoTa` text DEFAULT NULL,
  `GioiTinh` smallint(6) DEFAULT NULL,
  `HocPhi1H` double DEFAULT NULL,
  `MaLoaiGS` int(11) DEFAULT NULL,
  `MaHT` int(11) DEFAULT NULL,
  `MaMH` int(11) DEFAULT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `AnhBangCap` text NOT NULL,
  `LuotXem` double NOT NULL,
  `ThoiGianDN` datetime NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `TrangThaiDuyet` bit(1) NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giasu_chude`
--

CREATE TABLE `giasu_chude` (
  `MaGS_CD` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `MaCD` int(11) NOT NULL
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
(2, '(Online) Trực tuyến'),
(3, 'Gặp mặt và trực tuyến');

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
  `MoTa` text DEFAULT NULL,
  `GioiTinh` smallint(6) DEFAULT NULL,
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
-- Table structure for table `lophoc_chude`
--

CREATE TABLE `lophoc_chude` (
  `MaLop_CD` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `MaCD` int(11) NOT NULL
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

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaPQ`, `TenPQ`) VALUES
(1, 'Admin'),
(2, 'Gia sư'),
(3, 'Học viên'),
(4, 'Nhân viên');

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
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  ADD PRIMARY KEY (`MaGS_CD`),
  ADD KEY `MaGS` (`MaGS`),
  ADD KEY `MaCD` (`MaCD`);

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
  ADD KEY `MaHV` (`MaHV`),
  ADD KEY `MaHT` (`MaHT`),
  ADD KEY `MaTTLop` (`MaTTLop`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `lophoc_chude`
--
ALTER TABLE `lophoc_chude`
  ADD PRIMARY KEY (`MaLop_CD`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaCD` (`MaCD`);

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
  MODIFY `MaGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  MODIFY `MaGS_CD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MaHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `lophoc_chude`
--
ALTER TABLE `lophoc_chude`
  MODIFY `MaLop_CD` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `MaPQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `giasu_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `giasu_ibfk_4` FOREIGN KEY (`MaLoaiGS`) REFERENCES `loaigs` (`MaLoaiGS`),
  ADD CONSTRAINT `giasu_ibfk_5` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `giasu_ibfk_6` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `giasu_ibfk_7` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  ADD CONSTRAINT `giasu_chude_ibfk_1` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`),
  ADD CONSTRAINT `giasu_chude_ibfk_2` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`);

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
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `lophoc_ibfk_3` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`),
  ADD CONSTRAINT `lophoc_ibfk_5` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `lophoc_ibfk_6` FOREIGN KEY (`MaTTLop`) REFERENCES `trangthailop` (`MaTTLop`),
  ADD CONSTRAINT `lophoc_ibfk_7` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `lophoc_chude`
--
ALTER TABLE `lophoc_chude`
  ADD CONSTRAINT `lophoc_chude_ibfk_1` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`),
  ADD CONSTRAINT `lophoc_chude_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

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
