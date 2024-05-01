-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 09:44 AM
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
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `AnhBangCap` text NOT NULL,
  `LuotXem` double NOT NULL,
  `ThoiGianDN` datetime NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `TrangThaiDuyet` bit(1) NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giasu`
--

INSERT INTO `giasu` (`MaGS`, `HoTen`, `Email`, `DienThoai`, `Tinh_TP`, `DiaChiCT`, `MoTa`, `GioiTinh`, `HocPhi1H`, `MaLoaiGS`, `MaHT`, `AnhBia`, `AnhDaiDien`, `AnhBangCap`, `LuotXem`, `ThoiGianDN`, `MaNV`, `TrangThaiDuyet`, `MaTK`) VALUES
(10, 'Hảo', 'hao@gmail.com', '123456789', 'An Giang', 'Ninh Hòa', 'Sinh viên IT', 1, 100000, 2, 3, '', 'ava_tutor_8.jpg', 'degree_tutor_1.png', 0, '2024-03-26 23:21:09', NULL, b'1', 18),
(11, 'Phạm Minh Khuê', 'khue@gmail.com', '0854777889', 'Hải Phòng', 'Chợ Đầm Triệut', 'Em là sinh viên năm nhất ngành ngôn ngữ và văn hóa Đức trường Đại học Ngoại Ngữ', 1, 200000, 1, 2, '', 'ava_tutor_1.jpg', 'degree_tutor_1.png', 0, '2024-03-26 23:22:43', NULL, b'0', 19),
(12, 'Trần Hà', 'ha@gmail.com', '0956564728', 'Nghệ An', '', 'Điểm tổng kết lí 9,4\r\nĐiểm tổng kết toán 9,0', NULL, NULL, NULL, NULL, '', 'ava_tutor_3.jpg', '', 0, '2024-03-26 23:23:42', NULL, b'0', 20),
(13, 'Nguyễn Quang Hải', 'hai@gmail.com', '0354647289', 'Ninh Thuận', '', 'Tôi có chứng chỉ IELTS 6.5, học chuyên ngành sư phạm tiếng Anh và đã có kinh nghiệm.', NULL, NULL, NULL, NULL, '', 'ava_tutor_2.jpg', '', 0, '2024-03-26 23:24:27', NULL, b'0', 21),
(14, 'Nguyễn Thị Thu Hường', 'huong@gmail.com', '0945637892', 'Bình Định', '', 'Tôi hi vọng chúng ta sẽ cùng nhau gặt hái thành tựu. Tôi là người có trách nhiệm.', NULL, NULL, NULL, NULL, '', 'ava_tutor_4.jpg', '', 0, '2024-03-26 23:25:15', NULL, b'0', 22),
(15, 'Lê Anh Văn', 'van@gmail.com', '0672864785', '', '', 'Là 1 người năng động vui vẻ. Đạt nhiều thành tích cao trong học tập.', NULL, NULL, NULL, NULL, '', 'ava_tutor_5.jpg', '', 0, '2024-03-26 23:27:02', NULL, b'0', 23),
(16, 'Nguyễn Trọng Nghĩa', 'nghia@gmail.com', '0932647589', '', '', 'Tốt nghiệp đại học Bách Khoa, đã đi làm. Có chứng chỉ tiếng anh A, B, C ', NULL, NULL, NULL, NULL, '', 'ava_tutor_6.jpg', '', 0, '2024-03-26 23:27:39', NULL, b'0', 24),
(17, 'Nguyễn Thị Thư Hòa', 'hoa@gmail.com', '0936758939', '', '', NULL, NULL, NULL, NULL, NULL, '', 'ava_tutor_7.jpg', '', 0, '2024-03-26 23:28:20', NULL, b'0', 25),
(18, 'Thảo Hiền', 'hien@gmail.com', '0935264728', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, '2024-03-27 11:43:32', NULL, b'0', 28);

-- --------------------------------------------------------

--
-- Table structure for table `giasu_chude`
--

CREATE TABLE `giasu_chude` (
  `MaGS_CD` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `MaCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giasu_chude`
--

INSERT INTO `giasu_chude` (`MaGS_CD`, `MaGS`, `MaCD`) VALUES
(8, 10, 153),
(9, 10, 160),
(10, 10, 136),
(11, 10, 137),
(12, 10, 3),
(13, 10, 10),
(14, 11, 2),
(15, 11, 4),
(16, 11, 22),
(17, 11, 24);

-- --------------------------------------------------------

--
-- Table structure for table `giasu_monhoc`
--

CREATE TABLE `giasu_monhoc` (
  `MaGS_MH` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `MaMH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giasu_monhoc`
--

INSERT INTO `giasu_monhoc` (`MaGS_MH`, `MaGS`, `MaMH`) VALUES
(5, 10, 1),
(6, 10, 2),
(7, 10, 17),
(8, 10, 19),
(9, 11, 1),
(10, 11, 4);

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
  `DiaChiCT` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `GioiTinh` smallint(6) DEFAULT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `MaTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocvien`
--

INSERT INTO `hocvien` (`MaHV`, `HoTen`, `Email`, `DienThoai`, `Tinh_TP`, `DiaChiCT`, `MoTa`, `GioiTinh`, `AnhBia`, `AnhDaiDien`, `MaTK`) VALUES
(2, 'Lê Thành Danh', 'danh@gmail.com', '0934904905', 'Khánh Hòa', 'Ninh Hòa', 'Có bằng chuyên ngành toán', 1, '', 'ava_student_1.jpg', 26),
(3, 'Nguyễn Thảo Trang', 'thao@gmail.com', '0356785939', 'Hà Tĩnh', '', 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 0, '', '', 27);

-- --------------------------------------------------------

--
-- Table structure for table `ketnoigs_hv`
--

CREATE TABLE `ketnoigs_hv` (
  `MaKetNoi` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `MaGS` int(11) NOT NULL,
  `TenTTDeNghi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ketnoigs_hv`
--

INSERT INTO `ketnoigs_hv` (`MaKetNoi`, `MaLop`, `MaGS`, `TenTTDeNghi`) VALUES
(12, 3, 10, 'Đề nghị dạy đã chấp nhận'),
(17, 3, 11, 'Đề nghị đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `lichday`
--

CREATE TABLE `lichday` (
  `MaLichDay` int(11) NOT NULL,
  `TenThu` text NOT NULL,
  `TenBuoi` text NOT NULL,
  `MaGS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lichday`
--

INSERT INTO `lichday` (`MaLichDay`, `TenThu`, `TenBuoi`, `MaGS`) VALUES
(20, 'Thứ 2', 'Sáng', 10),
(21, 'Thứ 4', 'Chiều', 10),
(22, 'Thứ 5', 'Chiều', 10),
(23, 'Thứ 6', 'Chiều', 10),
(24, 'Thứ 6', 'Tối', 10),
(25, 'Chủ nhật', 'Chiều', 10),
(26, 'Thứ 2', 'Chiều', 11),
(27, 'Thứ 3', 'Sáng', 11),
(28, 'Thứ 3', 'Chiều', 11),
(29, 'Thứ 4', 'Chiều', 11),
(30, 'Thứ 5', 'Sáng', 11),
(31, 'Thứ 5', 'Chiều', 11),
(32, 'Thứ 6', 'Chiều', 11),
(33, 'Thứ 6', 'Tối', 11),
(34, 'Thứ 7', 'Chiều', 11),
(35, 'Thứ 7', 'Tối', 11),
(36, 'Chủ nhật', 'Sáng', 11),
(37, 'Chủ nhật', 'Chiều', 11),
(38, 'Chủ nhật', 'Tối', 11);

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `MaLichHoc` int(11) NOT NULL,
  `TenThu` text NOT NULL,
  `TenBuoi` text NOT NULL,
  `MaLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lichhoc`
--

INSERT INTO `lichhoc` (`MaLichHoc`, `TenThu`, `TenBuoi`, `MaLop`) VALUES
(1, 'Thứ 2', 'Sáng', 2),
(2, 'Thứ 3', 'Chiều', 2),
(3, 'Thứ 4', 'Tối', 2),
(4, 'Thứ 5', 'Chiều', 2),
(5, 'Thứ 7', 'Chiều', 2),
(6, 'Thứ 2', 'Sáng', 3),
(7, 'Thứ 3', 'Chiều', 3),
(8, 'Thứ 4', 'Tối', 3),
(9, 'Thứ 5', 'Tối', 3),
(10, 'Thứ 6', 'Sáng', 3),
(11, 'Thứ 6', 'Chiều', 3),
(12, 'Thứ 7', 'Sáng', 3),
(13, 'Chủ nhật', 'Chiều', 3),
(14, 'Thứ 2', 'Sáng', 4),
(15, 'Thứ 2', 'Chiều', 4),
(16, 'Thứ 3', 'Sáng', 4),
(17, 'Thứ 3', 'Chiều', 4),
(18, 'Thứ 4', 'Chiều', 4),
(19, 'Thứ 5', 'Chiều', 4),
(20, 'Thứ 6', 'Sáng', 4),
(21, 'Thứ 6', 'Chiều', 4),
(22, 'Thứ 7', 'Chiều', 4),
(23, 'Chủ nhật', 'Chiều', 4),
(24, 'Thứ 2', 'Sáng', 5),
(25, 'Thứ 3', 'Chiều', 5),
(26, 'Thứ 4', 'Chiều', 5),
(27, 'Thứ 5', 'Chiều', 5),
(28, 'Thứ 6', 'Chiều', 5),
(29, 'Thứ 7', 'Tối', 5),
(30, 'Chủ nhật', 'Tối', 5),
(31, 'Thứ 2', 'Sáng', 6),
(32, 'Thứ 3', 'Chiều', 6),
(33, 'Thứ 4', 'Chiều', 6),
(34, 'Thứ 5', 'Chiều', 6),
(35, 'Thứ 6', 'Chiều', 6),
(36, 'Thứ 7', 'Tối', 6),
(37, 'Chủ nhật', 'Tối', 6),
(38, 'Thứ 2', 'Sáng', 7),
(39, 'Thứ 3', 'Chiều', 7),
(40, 'Thứ 4', 'Chiều', 7),
(41, 'Thứ 5', 'Chiều', 7),
(42, 'Thứ 6', 'Chiều', 7),
(43, 'Thứ 7', 'Tối', 7),
(44, 'Chủ nhật', 'Tối', 7);

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
  `Tinh_TP` text DEFAULT NULL,
  `Quan_Huyen` text DEFAULT NULL,
  `Xa_Phuong` text DEFAULT NULL,
  `SoGioHoc1Buoi` float NOT NULL,
  `DienThoai` text NOT NULL,
  `GioiTinhGS` smallint(6) NOT NULL,
  `SoHV` smallint(6) NOT NULL,
  `SoBuoiHoc1Tuan` tinyint(4) NOT NULL,
  `HocPhi1Buoi` double NOT NULL,
  `NoiDung` text NOT NULL,
  `DiaChiCT` text DEFAULT NULL,
  `NgayBD` date NOT NULL,
  `ThoiGianDang` datetime NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `TenTTLop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `MaMH`, `MaHV`, `MaHT`, `Tinh_TP`, `Quan_Huyen`, `Xa_Phuong`, `SoGioHoc1Buoi`, `DienThoai`, `GioiTinhGS`, `SoHV`, `SoBuoiHoc1Tuan`, `HocPhi1Buoi`, `NoiDung`, `DiaChiCT`, `NgayBD`, `ThoiGianDang`, `MaNV`, `TenTTLop`) VALUES
(2, 'Tìm gia sư photoshop', 3, 3, 1, 'Bến Tre', 'Châu Thành', 'An Hóa', 1, '123456789', 0, 1, 2, 200000, 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 'Nguyễn Thiện Thuật', '2024-04-18', '2024-04-11 17:15:20', NULL, 'Đang tìm gia sư'),
(3, 'Tìm gia sư toán', 1, 2, 3, 'Bắc Giang', 'Tân Yên', 'Hợp Đức', 2, '0922465789', 2, 1, 2, 100000, 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 'Nguyễn Thiện Thuật', '2024-04-13', '2024-04-11 17:27:10', NULL, 'Đang tìm gia sư'),
(4, 'Tìm gia sư ôn Văn thi đại học', 4, 3, 2, NULL, NULL, NULL, 2, '0945384758', 2, 1, 2, 200000, 'Về bản thân em:\r\nEm sinh năm 2006.\r\nEm thi đại học năm 2024.\r\nĐiểm tổng kết văn năm lớp 10: 8.6\r\nlớp 11: 8.0\r\nEm chưa từng học thêm Văn và thi học sinh giỏi môn Văn.\r\nEm không học trường chuyên.\r\nMục tiêu điểm thi đại học Văn của em là 8+\r\n\r\nĐiều em mong muốn ở gia sư:\r\nTrả lời tin nhắn sớm khi em cần trợ giúp với bài tập\r\nCó thể đổi lịch học linh hoạt\r\nDạy em thật nhiều lí thuyết trong giờ học', '', '2024-04-26', '2024-04-11 23:55:17', NULL, 'Đang tìm gia sư'),
(5, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:00:49', NULL, 'Chưa duyệt'),
(6, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:05:27', NULL, 'Chưa duyệt'),
(7, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:07:29', NULL, 'Chưa duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc_chude`
--

CREATE TABLE `lophoc_chude` (
  `MaLop_CD` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL,
  `MaCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lophoc_chude`
--

INSERT INTO `lophoc_chude` (`MaLop_CD`, `MaLop`, `MaCD`) VALUES
(1, 2, 14),
(2, 2, 15),
(3, 3, 1),
(4, 3, 2),
(5, 3, 3),
(6, 4, 22),
(7, 5, 47),
(8, 5, 48),
(9, 6, 47),
(10, 6, 48),
(11, 7, 47),
(12, 7, 48);

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

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenDN`, `DienThoai`, `MatKhau`, `MaPQ`) VALUES
(18, 'hao@gmail.com', '123456789', '$2y$12$dU8tuylEUuwb08u/MWoyEuTLSjlxsel1J0SmM.BYWkMaKEuxz8g3G', 2),
(19, 'khue@gmail.com', '0854777888', '$2y$12$ppUVk7S8NvWSeI4QTciujuytaGNuYxz4l7FeFJZS7QXuJWCNfQRUm', 2),
(20, 'ha@gmail.com', '0956564728', '$2y$12$Bqz7Nv2faTemNlOMPJhrC.bxxcVi9c339dN49wPhrp.nBckmIYsi2', 2),
(21, 'hai@gmail.com', '0354647289', '$2y$12$RMLj3wna7irnVqcCGJe4XOpvWtiXbCJqdcknD0mx27dlm1oZJAsBy', 2),
(22, 'huong@gmail.com', '0945637892', '$2y$12$lXF9K/Ul/4b15T8RF1mwV.6hBVRM.HF6PDPdcW2mVCzFhKMPo/VFW', 2),
(23, 'van@gmail.com', '0672864785', '$2y$12$nThK6GfmbWslURpW8VQmHu1jGFIoggshzjdMutfs1xVLJtnGC.Pem', 2),
(24, 'nghia@gmail.com', '0932647589', '$2y$12$D1N4Vk31EX/sqcvlF3.yzeLcagPuiiTxo3dQjXq0ZWpI7RhYCXhmC', 2),
(25, 'hoa@gmail.com', '0936758939', '$2y$12$6srElDjax/M8uB6mYzV5q.Jk534fC/t0.Xbg.vb2wwUxKz0mCD46W', 2),
(26, 'danh@gmail.com', '0934904905', '$2y$12$sLhTMmrAtwDfSqO2dlIsxOwUU9J6KXm0OiXJ.Tw0Ttmos1.wWDlru', 3),
(27, 'thao@gmail.com', '0356785938', '$2y$12$a.ZlEJP2.eGlfV0XFoHDoeaWRmNLG0CJwtnVXJgCMVIQxQalz/Tf6', 3),
(28, 'hien@gmail.com', '0935264728', '$2y$12$2dgRiNQLCLk1L04gkVHjwex0ynpOX0Fc5y5EVy2XuWv57orqM4omK', 2);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `giasu_monhoc`
--
ALTER TABLE `giasu_monhoc`
  ADD PRIMARY KEY (`MaGS_MH`),
  ADD KEY `MaGS` (`MaGS`),
  ADD KEY `MaMH` (`MaMH`);

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
  ADD KEY `MaTTDeNghi` (`TenTTDeNghi`(768));

--
-- Indexes for table `lichday`
--
ALTER TABLE `lichday`
  ADD PRIMARY KEY (`MaLichDay`),
  ADD KEY `MaThu` (`TenThu`(768)),
  ADD KEY `MaBuoi` (`TenBuoi`(768)),
  ADD KEY `MaGS` (`MaGS`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`MaLichHoc`),
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
  ADD KEY `MaTTLop` (`TenTTLop`(768)),
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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `MaGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  MODIFY `MaGS_CD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `giasu_monhoc`
--
ALTER TABLE `giasu_monhoc`
  MODIFY `MaGS_MH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MaHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketnoigs_hv`
--
ALTER TABLE `ketnoigs_hv`
  MODIFY `MaKetNoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lichday`
--
ALTER TABLE `lichday`
  MODIFY `MaLichDay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `lichhoc`
--
ALTER TABLE `lichhoc`
  MODIFY `MaLichHoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `loaigs`
--
ALTER TABLE `loaigs`
  MODIFY `MaLoaiGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lophoc_chude`
--
ALTER TABLE `lophoc_chude`
  MODIFY `MaLop_CD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  ADD CONSTRAINT `giasu_ibfk_6` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `giasu_ibfk_7` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  ADD CONSTRAINT `giasu_chude_ibfk_1` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`),
  ADD CONSTRAINT `giasu_chude_ibfk_2` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`);

--
-- Constraints for table `giasu_monhoc`
--
ALTER TABLE `giasu_monhoc`
  ADD CONSTRAINT `giasu_monhoc_ibfk_1` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`),
  ADD CONSTRAINT `giasu_monhoc_ibfk_2` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

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
  ADD CONSTRAINT `ketnoigs_hv_ibfk_2` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`);

--
-- Constraints for table `lichday`
--
ALTER TABLE `lichday`
  ADD CONSTRAINT `lichday_ibfk_3` FOREIGN KEY (`MaGS`) REFERENCES `giasu` (`MaGS`);

--
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `lichhoc_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `lophoc_ibfk_3` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`),
  ADD CONSTRAINT `lophoc_ibfk_5` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
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
