-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 05:52 PM
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
  `DiemTot` text DEFAULT NULL,
  `DiemChuaTot` text DEFAULT NULL,
  `DiemDGTB` float NOT NULL,
  `DiemPPDH` float NOT NULL,
  `DiemKNM` float NOT NULL,
  `DiemTT` float NOT NULL,
  `DiemDG` float NOT NULL,
  `DiemNVSP` float NOT NULL,
  `DeXuat` bit(1) NOT NULL,
  `ThoiGianNX` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgiags`
--

INSERT INTO `danhgiags` (`MaDG`, `MaHV`, `MaGS`, `TieuDe`, `DiemTot`, `DiemChuaTot`, `DiemDGTB`, `DiemPPDH`, `DiemKNM`, `DiemTT`, `DiemDG`, `DiemNVSP`, `DeXuat`, `ThoiGianNX`) VALUES
(1, 2, 11, 'Học tốt', 'Dạy tận tình chu đáo', '', 8.8, 9, 8.3, 8.6, 8.7, 9.3, b'0', '2024-05-04 01:13:45'),
(2, 3, 11, 'Mình thấy cũng ổn', 'nhiệt tình, làm việc nghiêm túc', 'tham công tiếc việc, yêu cầu quá cao', 8.6, 9, 8, 8, 8.7, 9.3, b'0', '2024-05-04 01:13:45');

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
(10, 'Hảo', 'hao@gmail.com', '123456789', 'An Giang', 'Ninh Hòa', 'Sinh viên IT', 1, 100000, 2, 3, 'img_cover_1.jpg', 'ava_tutor_8.jpg', 'degree_tutor_1.png', 0, '2024-03-26 23:21:09', 2, b'1', 18),
(11, 'Phạm Minh Khuê', 'khue@gmail.com', '0854777889', 'Hải Phòng', 'Chợ Đầm Triệu', 'Em là sinh viên năm nhất ngành ngôn ngữ và văn hóa Đức trường Đại học Ngoại Ngữ', 0, 200000, 1, 2, 'img_cover_3.jpg', 'ava_tutor_1.jpg', 'degree_tutor_1.png', 0, '2024-03-26 23:22:43', NULL, b'1', 19),
(12, 'Trần Hà', 'ha@gmail.com', '0956564728', 'Nghệ An', '', 'Điểm tổng kết lí 9,4\r\nĐiểm tổng kết toán 9,0', 0, NULL, NULL, NULL, 'img_cover_4.jpg', 'ava_tutor_3.jpg', '', 0, '2024-03-26 23:23:42', NULL, b'0', 20),
(13, 'Nguyễn Quang Hải', 'hai@gmail.com', '0354647289', 'Ninh Thuận', '', 'Tôi có chứng chỉ IELTS 6.5, học chuyên ngành sư phạm tiếng Anh và đã có kinh nghiệm.', 1, NULL, NULL, NULL, '', 'ava_tutor_2.jpg', '', 0, '2024-03-26 23:24:27', 5, b'1', 21),
(14, 'Nguyễn Thị Thu Hường', 'huong@gmail.com', '0945637892', 'Bình Định', '', 'Tôi hi vọng chúng ta sẽ cùng nhau gặt hái thành tựu. Tôi là người có trách nhiệm.', NULL, NULL, NULL, NULL, '', 'ava_tutor_4.jpg', '', 0, '2024-03-26 23:25:15', 4, b'1', 22),
(15, 'Lê Anh Văn', 'van@gmail.com', '0672864785', 'Bình Định', '', 'Là 1 người năng động vui vẻ. Đạt nhiều thành tích cao trong học tập.', NULL, 150000, NULL, NULL, '', 'ava_tutor_5.jpg', '', 0, '2024-03-26 23:27:02', 2, b'1', 23),
(16, 'Nguyễn Trọng Nghĩa', 'nghia@gmail.com', '0932647589', 'Bình Định', '', 'Tốt nghiệp đại học Bách Khoa, đã đi làm. Có chứng chỉ tiếng anh A, B, C ', NULL, NULL, NULL, NULL, '', 'ava_tutor_6.jpg', '', 0, '2024-03-26 23:27:39', NULL, b'0', 24),
(18, 'Thảo Hiền', 'hien@gmail.com', '0935264728', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 0, '2024-03-27 11:43:32', NULL, b'0', 28),
(19, 'Phan Chính Quốc', 'chinhquoc@gmail.com', '0931606581', 'Hồ Chí Minh', 'Chợ Đầm Triệu', 'Mình hiện đang là sinh viên năm 2 đại học Bách Khoa HN, ngành Kĩ thuật máy tính. Hiện đã có 1 năm kinh nghiệm gia sư toán, lý, hoá cho các bạn học phổ thông, rất mong có thể giúp đỡ nhiều bạn hơn nữa.', 1, 100000, 1, 3, 'img_cover_5.jpg', 'default_user.png', 'degree_tutor_1.png', 0, '2024-04-23 16:00:41', 6, b'1', 39),
(20, 'Nguyễn Văn Thành', 'thanh@gmail.com', '0934304349', '', '', NULL, NULL, NULL, NULL, NULL, 'img_cover_6.jpg', 'default_user.png', 'cert.png', 0, '2024-06-04 23:42:01', 4, b'1', 47),
(21, 'Nguyễn Phương Phương', 'phuong@gmail.com', '0905364738', 'Bình Dương', 'Khu phố Bình Phước B, Đường tỉnh 743, Bình Chuẩn, Thuận An, Bình Dương, Việt Nam', 'Tiếng Anh tốt, hoàn thiện 4 kỹ năng nghe, nói, đọc, viết.\r\nGiáo viên Anh Văn Hội Việt Mỹ - VUS, kinh nghiệm 2 năm.\r\nBằng Cử nhân Đại Học loại giỏi.\r\nIELts 7.0\r\nTham gia IELTS Workshop do Cambridge tổ chức tại VUS.', 0, 150000, 2, 3, 'img_cover_1.jpg', 'ava_tutor_21.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 09:27:05', 5, b'1', 48),
(22, 'Phan Thị Thanh Hà', 'thanhha@gmail.com', '0906340540', 'Hà Nội', 'Vũ Phạm Hàm, Cầu Giấy, Hanoi, Vietnam', 'Từng là học sinh Chuyên Anh THPT Chuyên Hà Tĩnh, hiện đang là sinh viên năm nhất khoa Kinh tế đối ngoại, ĐH Ngoại Thương. Đạt 10 điểm môn Tiếng Anh vào kì thi Đại Học. IELTS 8.0 với Listening và Reading đạt 9.0. SAT 1480/1600 và nhận được học bổng ~268000$ từ Bryn Mawr College (Mỹ). Có kinh nghiệm gia sư ôn thi Đại học, IELTS và SAT.', 0, 59997, 1, 2, 'img_cover_5.jpg', 'ava_tutor_22.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 10:29:27', 4, b'1', 49),
(23, 'Nguyễn Bích Huệ', 'hue@gmail.com', '0945340340', 'Hà Nội', 'số 9 Q24 ngõ 136 phố Nguyễn An Ninh, Hoàng Mai, Hà Nội', 'Tôi là Bích Huệ, hiện đang công tác tại Công ty Language Link Việt Nam. Trước đó tôi đã có 7 năm liên tục là giáo viên tiếng Anh dạy giỏi tại trường Quốc Tế Maple Bear. Tôi có kinh nghiệm nhiều năm làm giáo viên, gia sư, am hiểu các bài test. của các trường PT. Cách truyền đạt của tôi ngắn gon, súc tích, dễ hiểu. Tôi luôn giảng dạy với sự tận tâm, lòng yêu nghề. Đặc biệt, tôi rất đam mê giảng dạy và tương tác nhiệt tình với học sinh. Nhiều bạn học sinh của tôi đã đỗ điểm cao vào các trường chuyên Ngữ, đại học. Các con không chỉ được rèn Ngữ pháp sâu, mà các kĩ năng nghe, nói...rất nhuần nhuyễn. Các con thật sự tự tin với khả năng tiếng Anh của mình.', 0, 70000, 4, 1, 'img_cover_6.jpg', 'ava_tutor_23.jpg', 'degree_tutor_1.png', 0, '2024-06-08 10:32:46', 4, b'1', 50),
(24, 'Nguyễn Hải Minh', 'minh@gmail.com', '0904356374', 'Hà Nội', '91 Chùa Láng, Láng Thượng, Đống Đa, Hà Nội, Việt Nam', 'Học sinh chuyên Toán THPT Chuyên Hoàng Văn Thụ.\r\nGiải khuyến khích kì thi học sinh giỏi môn Toán cấp thành phố năm 2014.\r\nGiải khuyến khích kì thi giải toán trên máy tính cầm tay casio cấp thành phố 2014.\r\nGiải ba kì thi Toán-Tiếng anh Hà Nội mở rộng HOMC 2013', 1, 80000, 1, 1, 'img_cover_3.jpg', 'ava_tutor_24.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 10:35:56', 4, b'1', 51),
(25, 'Phạm Hằng', 'hang@gmail.com', '0956348594', 'Hà Nội', 'Bạch Mai, quận Hai Bà Trưng', ' Em là sv sp mới tốt nghiệp, chuyên ngành Toán, em có thể dạy tiểu học, toán cấp 2, cấp 3. Các anh chị có nhu cầu tìm gia sư cho con thì alo cho em nhé. Khu vực quận Hoàng Mai, Hai Bà Trưng thì tốt ạ. Sđt em: 01698747651. Em cảm ơn a! - Em là sinh viên Trường Đại học Sư phạm, chuyên ngành Toán mới tốt nghiệp được 1 năm. Em có thể dạy các em học sinh trong khu vực quận Hoàng Mai, quận Hai Bà Trưng, Hà Nội.', 0, 60000, 1, 3, 'cover_tutor_25.jpg', 'ava_tutor_25.jpg', 'degree_tutor_1.png', 0, '2024-06-08 10:41:04', NULL, b'0', 52),
(26, 'Trần Thanh Phương', 'thanhphuong@gmail.com', '0934567489', 'Hồ Chí Minh', 'Quận 10, Hồ Chí Minh, Việt Nam', '- Tốt nghiệp loại Giỏi hệ Chính Quy, chuyên ngành Sư phạm Vật lý tại trường Đại học Sư phạm TPHCM.\r\n- Có 2 năm kinh nghiệm dạy gia sư, luyện thi THPT QG.\r\n- Kỹ lưỡng, tận tâm, yêu nghề.', 1, 100000, 2, 3, 'img_cover_4.jpg', 'ava_tutor_26.jpg', 'degree_tutor_1.png', 0, '2024-06-08 10:47:53', NULL, b'0', 53),
(27, 'Nguyễn Thị Thu Huyền', 'huyen@gmail.com', '0945567485', 'Hà Nội', 'Đồng Tâm, Hai Bà Trưng, Hà Nội, Việt Nam', 'Chuyên lý trường thpt chuyên lương văn tụy- ninh bình Huy chương bạc violympic vật lý cấp quốc gia Giải 3 kì thi học sinh giỏi vật lý cấp tỉnh lớp 11, 12 Giải nhì kì thi học sinh giỏi vật lý cấp thành phố lớp 8', 0, 150000, 1, 3, 'img_cover_4.jpg', 'ava_tutor_27.jpg', 'degree_tutor_22.jpg', 0, '2024-06-08 10:53:06', 4, b'1', 54),
(28, 'Bùi Thị Hiền', 'bthien@gmail.com', '0954345345', 'Hà Nội', '134 Trương Định - Hoàng Mai', 'Là sinh viên nghành Kinh tế Quốc tế của Đại học Kinh tế quốc dân, thi đại học khối A với điểm số 27. Được giải nhì cấp huyện môn Lý lớp 8, giải 3 cấp huyện môn Lý, Hóa lớp 9.', 0, 50000, 1, 3, 'img_cover_2.jpg', 'ava_tutor_28.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 10:56:18', 4, b'1', 55),
(29, 'Đinh Thị Thanh Tuyền', 'tuyen@gmail.com', '0956456756', 'Phú Thọ', 'Khu Tân Hương, Hương Cần, Thanh Sơn, Phú Thọ', 'Tốt nghiệp ĐHSP Hà Nội loại Giỏi. Kinh nghiệm 10 năm giảng dạy môn Ngữ Văn THPT, kinh nghiệm bồi dưỡng HSG và Luyện thi THPT quốc Gia.', 0, 110000, 2, 3, 'img_cover_1.jpg', 'ava_tutor_29.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 10:59:45', 4, b'1', 56),
(30, 'Nguyễn Thị Kim Chi', 'chi@gmail.com', '0904453959', 'Hồ Chí Minh', '91 Đường số 34A, Bình Tân, Hồ Chí Minh, Việt Nam', 'Mình tên là Nguyễn Thị Kim Chi\r\nHiện đang là sinh viên năm ba khoa Tiếng Anh quốc tế của ĐH Bách khoa Hà Nội, mới đây chuyển tiếp vào Hồ Chí Minh.\r\n12 năm liền học sinh giỏi, điểm tổng đầu vào ĐH của mình 26.25, trong đó điểm tiếng anh là 9.2, văn là 8.5. Mình đã có kinh nghiệm gia sư môn văn, toán và tiếng anh cho nhiều học sinh ở các lứa tuổi từ tiểu học cho đến thpt trong 3 năm liền.', 0, 120000, 1, 3, 'img_cover_6.jpg', 'ava_tutor_30.jpg', 'degree_tutor_1.png', 0, '2024-06-08 11:05:23', 5, b'1', 57),
(31, 'Nguyễn Thị Yến', 'yen@gmail.com', '0934345903', 'Hà Nội', 'Mỹ Đình 1, Từ Liêm, Hà Nội, Việt Nam', '- Tốt nghiệp Đại học Giáo dục- ĐHQG Hà Nội, chuyên ngành Sư phạm Ngữ Văn loại giỏi.\r\n- Đã có một năm kinh nghiệm làm GV tại trường PTLC Olympia\r\n- Đang học cao học tại Trường ĐH Khoa học Xã hội và Nhân văn Hà Nội.', 0, 90000, 2, 3, 'img_cover_6.jpg', 'ava_tutor_31.jpg', 'degree_tutor_1.png', 0, '2024-06-08 11:09:25', NULL, b'0', 58),
(32, 'Vũ Trung Hiếu', 'hieu@gmail.com', '0904574859', 'Hà Nội', 'B13 tập thể Kim Liên - Đống Đa', 'Em hiện đang là sinh viên trường đại học sư phạm Hà Nội. Chuyên ngành học tập của em là Sư Phạm Sinh Học - Tiếng Anh . Hiện em đã có kinh nghiệm làm gia sư môn Sinh và tiếng Anh cho học sinh lứa tuổi THCS.', 1, 50000, 1, 1, 'img_cover_6.jpg', 'ava_tutor_32.jpg', 'degree_tutor_22.jpg', 0, '2024-06-08 11:13:52', 4, b'1', 59),
(33, 'Phan Đặng Hồng Nhung', 'nhung@gmail.com', '0933475843', 'Bình Định', 'Qui Nhơn, Bình Định, Việt Nam', 'Mình vừa tốt nghiệp loại giỏi chuyên ngành sp Hóa trường Đại học Quy Nhơn. Hiện tại đang theo học thạc sĩ ngành Hóa lý. Bản thân đã có kinh nghiệm dạy kèm 4 năm môn Hóa từ lớp 8 đến 12.', 0, 90000, 2, 3, 'img_cover_2.jpg', 'ava_tutor_33.jpg', 'degree_tutor_21.jpg', 0, '2024-06-08 11:30:48', NULL, b'0', 60);

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
(14, 11, 2),
(15, 11, 4),
(16, 11, 22),
(17, 11, 24),
(18, 19, 4),
(19, 19, 5),
(20, 19, 10),
(21, 19, 11),
(22, 19, 16),
(23, 19, 17),
(24, 10, 3),
(25, 10, 10),
(26, 10, 151),
(27, 10, 153),
(28, 10, 160),
(29, 21, 46),
(30, 21, 47),
(31, 21, 48),
(32, 21, 49),
(33, 21, 50),
(34, 21, 54),
(35, 22, 46),
(36, 22, 47),
(37, 22, 48),
(38, 22, 54),
(39, 22, 1),
(40, 23, 46),
(41, 23, 47),
(42, 23, 49),
(43, 23, 50),
(44, 24, 1),
(45, 24, 2),
(46, 24, 3),
(47, 24, 46),
(48, 24, 47),
(49, 24, 48),
(50, 25, 1),
(51, 25, 2),
(52, 25, 3),
(53, 26, 8),
(54, 26, 9),
(55, 26, 10),
(56, 26, 11),
(57, 26, 12),
(58, 28, 1),
(59, 28, 2),
(60, 28, 4),
(61, 28, 8),
(62, 28, 9),
(63, 28, 10),
(64, 29, 20),
(65, 29, 21),
(66, 29, 22),
(67, 30, 26),
(68, 30, 27),
(69, 30, 20),
(70, 30, 21),
(71, 30, 22),
(72, 30, 23),
(73, 31, 20),
(74, 31, 21),
(75, 31, 22),
(76, 32, 40),
(77, 32, 41),
(78, 32, 42),
(79, 33, 14),
(80, 33, 15),
(81, 33, 40),
(82, 33, 41),
(83, 27, 8),
(84, 27, 9),
(85, 27, 10);

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
(9, 11, 1),
(10, 11, 4),
(11, 19, 1),
(12, 19, 2),
(13, 19, 3),
(14, 10, 1),
(15, 10, 2),
(16, 10, 19),
(17, 21, 10),
(18, 22, 1),
(19, 22, 10),
(20, 23, 10),
(21, 24, 1),
(22, 24, 10),
(23, 25, 1),
(24, 26, 2),
(25, 28, 1),
(26, 28, 2),
(27, 29, 4),
(28, 30, 4),
(29, 30, 5),
(30, 31, 4),
(31, 32, 8),
(32, 33, 3),
(33, 33, 8),
(34, 27, 2);

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
(2, 'Lê Thành Danh', 'danh@gmail.com', '0934904905', 'Khánh Hòa', 'Ninh Hòa', 'Có bằng chuyên ngành toán', 1, 'img_cover_5.jpg', 'ava_student_1.jpg', 26),
(3, 'Nguyễn Thảo Trang', 'thao@gmail.com', '0356785939', 'Hà Tĩnh', '', 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 0, 'img_cover_6.jpg', 'default_user.png', 27),
(4, 'Khang', 'khang@gmail.com', '0931606586', '', '', NULL, NULL, 'img_cover_1.jpg', 'default_user.png', 33),
(5, 'Nguyễn Chiến Thắng', 'thang@gmail.com', '0904450659', 'Bình Định', ' 06 Trần Phú, thành phố Quy Nhơn, tỉnh Bình Định', 'Tôi muốn học để có thêm kiến thức.', 1, 'img_cover_3.jpg', 'default_user.png', 61),
(6, 'Nguyễn Thị Thu Thủy', 'thuy@gmail.com', '0934343847', 'Hải Phòng', 'Nguyễn Thiện Thuật', 'Sinh viên cần học thêm', 0, 'img_cover_5.jpg', 'default_user.png', 62);

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
(17, 3, 11, 'Đề nghị đã bị từ chối'),
(18, 8, 10, 'Đề nghị đã hủy'),
(19, 9, 10, 'Đề nghị đã hủy'),
(22, 10, 10, 'Đề nghị đã hủy'),
(25, 11, 10, 'Đề nghị đã bị từ chối'),
(26, 14, 10, 'Đã mời'),
(27, 15, 10, 'Đã mời'),
(28, 10, 11, 'Đã mời'),
(29, 22, 10, 'Đề nghị dạy đã chấp nhận'),
(30, 5, 21, 'Đang đề nghị dạy'),
(31, 6, 21, 'Đang đề nghị dạy'),
(32, 9, 32, 'Đã mời'),
(33, 10, 32, 'Đã mời');

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
(38, 'Chủ nhật', 'Tối', 11),
(39, 'Thứ 2', 'Sáng', 19),
(40, 'Thứ 3', 'Sáng', 19),
(41, 'Thứ 3', 'Chiều', 19),
(42, 'Thứ 4', 'Chiều', 19),
(43, 'Thứ 5', 'Sáng', 19),
(44, 'Thứ 5', 'Chiều', 19),
(45, 'Thứ 6', 'Chiều', 19),
(46, 'Thứ 7', 'Sáng', 19),
(47, 'Thứ 7', 'Chiều', 19),
(48, 'Chủ nhật', 'Tối', 19),
(49, 'Thứ 2', 'Sáng', 10),
(50, 'Thứ 4', 'Chiều', 10),
(51, 'Thứ 5', 'Chiều', 10),
(52, 'Thứ 6', 'Chiều', 10),
(53, 'Thứ 6', 'Tối', 10),
(54, 'Chủ nhật', 'Chiều', 10),
(55, 'Thứ 2', 'Sáng', 21),
(56, 'Thứ 2', 'Chiều', 21),
(57, 'Thứ 3', 'Sáng', 21),
(58, 'Thứ 3', 'Chiều', 21),
(59, 'Thứ 4', 'Sáng', 21),
(60, 'Thứ 4', 'Chiều', 21),
(61, 'Thứ 5', 'Sáng', 21),
(62, 'Thứ 5', 'Chiều', 21),
(63, 'Thứ 6', 'Sáng', 21),
(64, 'Thứ 6', 'Chiều', 21),
(65, 'Chủ nhật', 'Tối', 21),
(66, 'Thứ 2', 'Sáng', 22),
(67, 'Thứ 2', 'Chiều', 22),
(68, 'Thứ 2', 'Tối', 22),
(69, 'Thứ 3', 'Sáng', 22),
(70, 'Thứ 3', 'Chiều', 22),
(71, 'Thứ 4', 'Sáng', 22),
(72, 'Thứ 4', 'Chiều', 22),
(73, 'Thứ 5', 'Sáng', 22),
(74, 'Thứ 5', 'Chiều', 22),
(75, 'Thứ 6', 'Chiều', 22),
(76, 'Thứ 7', 'Tối', 22),
(77, 'Chủ nhật', 'Tối', 22),
(78, 'Thứ 3', 'Tối', 23),
(79, 'Thứ 5', 'Tối', 23),
(80, 'Thứ 7', 'Chiều', 23),
(81, 'Chủ nhật', 'Sáng', 23),
(82, 'Thứ 2', 'Sáng', 24),
(83, 'Thứ 3', 'Sáng', 24),
(84, 'Thứ 4', 'Chiều', 24),
(85, 'Thứ 5', 'Chiều', 24),
(86, 'Thứ 6', 'Sáng', 24),
(87, 'Thứ 7', 'Chiều', 24),
(88, 'Chủ nhật', 'Sáng', 24),
(89, 'Thứ 4', 'Chiều', 25),
(90, 'Thứ 4', 'Tối', 25),
(91, 'Thứ 5', 'Chiều', 25),
(92, 'Thứ 5', 'Tối', 25),
(93, 'Thứ 6', 'Chiều', 25),
(94, 'Thứ 6', 'Tối', 25),
(95, 'Thứ 7', 'Chiều', 25),
(96, 'Thứ 7', 'Tối', 25),
(97, 'Chủ nhật', 'Chiều', 25),
(98, 'Chủ nhật', 'Tối', 25),
(99, 'Thứ 2', 'Sáng', 26),
(100, 'Thứ 3', 'Sáng', 26),
(101, 'Thứ 4', 'Tối', 26),
(102, 'Thứ 5', 'Tối', 26),
(103, 'Thứ 6', 'Tối', 26),
(104, 'Thứ 7', 'Tối', 26),
(105, 'Chủ nhật', 'Sáng', 26),
(115, 'Thứ 3', 'Sáng', 28),
(116, 'Thứ 4', 'Sáng', 28),
(117, 'Thứ 5', 'Sáng', 28),
(118, 'Thứ 7', 'Sáng', 28),
(119, 'Thứ 7', 'Chiều', 28),
(120, 'Thứ 7', 'Tối', 28),
(121, 'Chủ nhật', 'Sáng', 28),
(122, 'Chủ nhật', 'Chiều', 28),
(123, 'Chủ nhật', 'Tối', 28),
(124, 'Thứ 2', 'Sáng', 29),
(125, 'Thứ 3', 'Sáng', 29),
(126, 'Thứ 4', 'Chiều', 29),
(127, 'Thứ 5', 'Chiều', 29),
(128, 'Thứ 6', 'Chiều', 29),
(129, 'Thứ 7', 'Tối', 29),
(130, 'Chủ nhật', 'Tối', 29),
(131, 'Thứ 2', 'Sáng', 30),
(132, 'Thứ 3', 'Sáng', 30),
(133, 'Thứ 3', 'Chiều', 30),
(134, 'Thứ 4', 'Chiều', 30),
(135, 'Thứ 5', 'Sáng', 30),
(136, 'Thứ 5', 'Chiều', 30),
(137, 'Thứ 6', 'Chiều', 30),
(138, 'Thứ 7', 'Chiều', 30),
(139, 'Chủ nhật', 'Tối', 30),
(140, 'Thứ 3', 'Sáng', 31),
(141, 'Thứ 3', 'Chiều', 31),
(142, 'Thứ 5', 'Sáng', 31),
(143, 'Thứ 5', 'Chiều', 31),
(144, 'Thứ 6', 'Chiều', 31),
(145, 'Thứ 7', 'Sáng', 31),
(146, 'Thứ 7', 'Chiều', 31),
(147, 'Chủ nhật', 'Chiều', 31),
(148, 'Thứ 2', 'Sáng', 32),
(149, 'Thứ 3', 'Sáng', 32),
(150, 'Thứ 4', 'Chiều', 32),
(151, 'Thứ 5', 'Sáng', 32),
(152, 'Thứ 5', 'Chiều', 32),
(153, 'Thứ 6', 'Chiều', 32),
(154, 'Thứ 7', 'Chiều', 32),
(155, 'Chủ nhật', 'Tối', 32),
(156, 'Thứ 2', 'Sáng', 33),
(157, 'Thứ 3', 'Chiều', 33),
(158, 'Thứ 4', 'Chiều', 33),
(159, 'Thứ 5', 'Sáng', 33),
(160, 'Thứ 6', 'Chiều', 33),
(161, 'Thứ 7', 'Sáng', 33),
(162, 'Chủ nhật', 'Chiều', 33),
(163, 'Thứ 2', 'Sáng', 27),
(164, 'Thứ 3', 'Sáng', 27),
(165, 'Thứ 3', 'Chiều', 27),
(166, 'Thứ 4', 'Chiều', 27),
(167, 'Thứ 5', 'Sáng', 27),
(168, 'Thứ 5', 'Chiều', 27),
(169, 'Thứ 6', 'Chiều', 27),
(170, 'Thứ 7', 'Sáng', 27),
(171, 'Chủ nhật', 'Chiều', 27);

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
(44, 'Chủ nhật', 'Tối', 7),
(45, 'Thứ 2', 'Sáng', 8),
(46, 'Thứ 3', 'Chiều', 8),
(47, 'Thứ 4', 'Sáng', 8),
(48, 'Thứ 5', 'Chiều', 8),
(49, 'Thứ 6', 'Sáng', 8),
(50, 'Thứ 7', 'Chiều', 8),
(51, 'Chủ nhật', 'Sáng', 8),
(59, 'Thứ 2', 'Sáng', 10),
(60, 'Thứ 3', 'Chiều', 10),
(61, 'Thứ 4', 'Tối', 10),
(62, 'Thứ 5', 'Tối', 10),
(63, 'Thứ 6', 'Chiều', 10),
(64, 'Thứ 7', 'Sáng', 10),
(65, 'Chủ nhật', 'Sáng', 10),
(66, 'Thứ 2', 'Sáng', 11),
(67, 'Thứ 3', 'Chiều', 11),
(68, 'Thứ 4', 'Tối', 11),
(69, 'Thứ 2', 'Sáng', 12),
(70, 'Thứ 3', 'Chiều', 12),
(71, 'Thứ 4', 'Tối', 12),
(72, 'Thứ 2', 'Sáng', 13),
(73, 'Thứ 3', 'Chiều', 13),
(74, 'Thứ 4', 'Chiều', 13),
(75, 'Thứ 5', 'Chiều', 13),
(76, 'Thứ 2', 'Sáng', 9),
(77, 'Thứ 3', 'Chiều', 9),
(78, 'Thứ 4', 'Sáng', 9),
(79, 'Thứ 4', 'Chiều', 9),
(80, 'Thứ 5', 'Chiều', 9),
(81, 'Thứ 6', 'Chiều', 9),
(82, 'Thứ 7', 'Chiều', 9),
(83, 'Chủ nhật', 'Sáng', 9),
(84, 'Thứ 2', 'Sáng', 14),
(85, 'Thứ 3', 'Sáng', 14),
(86, 'Thứ 4', 'Sáng', 14),
(87, 'Thứ 5', 'Sáng', 14),
(88, 'Thứ 6', 'Sáng', 14),
(89, 'Thứ 2', 'Sáng', 15),
(90, 'Thứ 3', 'Sáng', 15),
(91, 'Thứ 4', 'Sáng', 15),
(92, 'Thứ 5', 'Sáng', 15),
(93, 'Thứ 6', 'Sáng', 15),
(94, 'Thứ 2', 'Sáng', 16),
(95, 'Thứ 3', 'Chiều', 16),
(96, 'Thứ 4', 'Chiều', 16),
(97, 'Thứ 5', 'Chiều', 16),
(98, 'Thứ 2', 'Sáng', 17),
(99, 'Thứ 3', 'Chiều', 17),
(100, 'Thứ 4', 'Chiều', 17),
(101, 'Thứ 5', 'Chiều', 17),
(102, 'Thứ 2', 'Sáng', 18),
(103, 'Thứ 3', 'Chiều', 18),
(104, 'Thứ 4', 'Chiều', 18),
(105, 'Thứ 5', 'Chiều', 18),
(106, 'Thứ 2', 'Sáng', 19),
(107, 'Thứ 3', 'Chiều', 19),
(108, 'Thứ 4', 'Chiều', 19),
(109, 'Thứ 5', 'Chiều', 19),
(110, 'Thứ 2', 'Sáng', 20),
(111, 'Thứ 3', 'Chiều', 20),
(112, 'Thứ 4', 'Chiều', 20),
(113, 'Thứ 5', 'Chiều', 20),
(114, 'Thứ 2', 'Sáng', 21),
(115, 'Thứ 3', 'Chiều', 21),
(116, 'Thứ 4', 'Chiều', 21),
(117, 'Thứ 5', 'Chiều', 21),
(118, 'Thứ 2', 'Sáng', 22),
(119, 'Thứ 3', 'Chiều', 22),
(120, 'Thứ 4', 'Chiều', 22),
(121, 'Thứ 5', 'Chiều', 22),
(122, 'Thứ 2', 'Sáng', 23),
(123, 'Thứ 3', 'Chiều', 23),
(124, 'Thứ 4', 'Sáng', 23),
(125, 'Thứ 5', 'Chiều', 23),
(126, 'Thứ 6', 'Sáng', 23),
(127, 'Thứ 7', 'Chiều', 23),
(128, 'Chủ nhật', 'Sáng', 23),
(129, 'Thứ 2', 'Sáng', 24),
(130, 'Thứ 3', 'Sáng', 24),
(131, 'Thứ 4', 'Chiều', 24),
(132, 'Thứ 5', 'Chiều', 24),
(133, 'Thứ 6', 'Sáng', 24),
(134, 'Thứ 7', 'Chiều', 24),
(135, 'Thứ 2', 'Sáng', 25),
(136, 'Thứ 3', 'Chiều', 25),
(137, 'Thứ 4', 'Sáng', 25),
(138, 'Thứ 5', 'Chiều', 25),
(139, 'Thứ 6', 'Sáng', 25),
(140, 'Thứ 7', 'Chiều', 25),
(141, 'Chủ nhật', 'Sáng', 25),
(142, 'Chủ nhật', 'Chiều', 25);

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
(2, 'Tìm gia sư photoshop', 19, 3, 1, 'Bến Tre', 'Châu Thành', 'An Hóa', 1, '123456789', 1, 1, 2, 200000, 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 'Nguyễn Thiện Thuật', '2024-04-18', '2024-04-11 17:15:20', 6, 'Chưa duyệt'),
(3, 'Tìm gia sư toán', 1, 2, 3, 'Bắc Giang', 'Tân Yên', 'Hợp Đức', 2, '0922465789', 1, 1, 2, 100000, 'Là 1 người ham học hỏi các kiến mức mới. Tôi muốn tìm kiếm gia sư phù hợp với bản thân.', 'Nguyễn Thiện Thuật', '2024-04-13', '2024-04-11 17:27:10', NULL, 'Đã chấp nhận'),
(4, 'Tìm gia sư ôn Văn thi đại học', 4, 3, 2, NULL, NULL, NULL, 2, '0945384758', 2, 1, 2, 200000, 'Về bản thân em:\r\nEm sinh năm 2006.\r\nEm thi đại học năm 2024.\r\nĐiểm tổng kết văn năm lớp 10: 8.6\r\nlớp 11: 8.0\r\nEm chưa từng học thêm Văn và thi học sinh giỏi môn Văn.\r\nEm không học trường chuyên.\r\nMục tiêu điểm thi đại học Văn của em là 8+\r\n\r\nĐiều em mong muốn ở gia sư:\r\nTrả lời tin nhắn sớm khi em cần trợ giúp với bài tập\r\nCó thể đổi lịch học linh hoạt\r\nDạy em thật nhiều lí thuyết trong giờ học', '', '2024-04-26', '2024-04-11 23:55:17', NULL, 'Đang tìm gia sư'),
(5, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:00:49', 6, 'Đang tìm gia sư'),
(6, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:05:27', 6, 'Đang tìm gia sư'),
(7, 'Tìm gia sư tiếng anh', 10, 3, 1, 'Cần Thơ', NULL, NULL, 1, '0948574899', 0, 1, 1, 250000, 'Cần bổ sung kiến thức về tiếng anh.', 'Nguyễn Thiện Thuật', '2024-04-24', '2024-04-12 00:07:29', 6, 'Chưa duyệt'),
(8, 'Tìm gia sư môn toán', 1, 2, 1, 'Hải Phòng', 'Kiến An', 'Lãm Hà', 1, '0922465789', 2, 1, 2, 200000, 'Có bằng chuyên ngành toán', 'Ninh Hòa', '2024-04-24', '2024-04-20 16:54:32', NULL, 'Đã chấp nhận'),
(9, 'Tìm gia sư môn Lý 12', 2, 2, 1, 'Hà Nội', 'Hà Đông', 'Biên Giang', 1, '0934904905', 2, 1, 2, 100000, 'Tôi muốn tìm kiếm 1 gia sư phù hợp ', 'Ninh Hòa', '2024-05-05', '2024-04-28 21:56:54', 6, 'Đang tìm gia sư'),
(10, 'Tìm gia sư môn Lý 12', 2, 2, 1, 'Hà Nội', 'Hà Đông', 'Biên Giang', 1, '0934904905', 2, 1, 2, 100000, 'Tôi muốn tìm kiếm 1 gia sư phù hợp ', 'Ninh Hòa', '2024-05-01', '2024-04-28 22:09:35', 2, 'Đang tìm gia sư'),
(11, 'Tìm gia sư môn Lý', 2, 2, 1, 'Cần Thơ', 'Bình Thuỷ', 'Trà Nóc', 1, '0934904905', 0, 1, 2, 1000000, 'Học thêm', 'Ninh Hòa', '2024-04-30', '2024-04-28 22:27:09', NULL, 'Đang tìm gia sư'),
(12, 'Tìm gia sư môn Lý', 2, 2, 1, 'Khánh Hòa', 'Ninh Hòa', 'Ninh Sơn', 1, '0934904905', 0, 1, 2, 1000000, 'Học thêm', 'Ninh Hòa', '2024-04-30', '2024-04-28 22:33:09', NULL, 'Đóng lớp: Chưa có kết nối'),
(13, 'Tìm gia sư môn Hóa cấp 2', 3, 2, 2, NULL, NULL, NULL, 1.5, '0934904905', 2, 1, 1, 1500000, 'Học thêm', NULL, '2024-05-01', '2024-04-28 22:35:36', NULL, 'Đóng lớp: Chưa có kết nối'),
(14, 'Tìm gia sư piano', 24, 2, 2, NULL, NULL, NULL, 1.5, '0934904905', 0, 1, 2, 199998, 'Học thêm', 'Ninh Hòa', '2024-05-22', '2024-05-08 10:01:00', NULL, 'Chưa duyệt'),
(15, 'Tìm gia sư piano', 24, 2, 2, NULL, NULL, NULL, 1.5, '0934904905', 0, 1, 2, 199998, 'Học thêm', 'Ninh Hòa', '2024-05-22', '2024-05-08 10:03:45', 6, 'Đang tìm gia sư'),
(16, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1.5, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-12', '2024-06-03 09:08:11', NULL, 'Chưa duyệt'),
(17, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1.5, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:08:58', NULL, 'Chưa duyệt'),
(18, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1.5, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:13:41', NULL, 'Chưa duyệt'),
(19, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1.5, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:14:33', NULL, 'Chưa duyệt'),
(20, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:15:07', NULL, 'Chưa duyệt'),
(21, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:18:14', NULL, 'Chưa duyệt'),
(22, 'Tìm gia sư Flutter', 19, 2, 3, 'An Giang', 'Châu Đốc', 'Châu Phú A', 1, '0934904905', 2, 1, 2, 150000, 'Học thêm ứng dụng', 'Ninh Hòa', '2024-06-13', '2024-06-03 09:21:11', 5, 'Đã chấp nhận'),
(23, 'Tìm gia sư môn Sinh', 8, 5, 3, 'Bình Định', 'Quy Nhơn', 'Trần Phú', 1.5, '0904450659', 2, 1, 2, 100000, 'Học thêm Sinh', ' 06 Trần Phú, thành phố Quy Nhơn, tỉnh Bình Định', '2024-06-18', '2024-06-08 13:33:43', 6, 'Đang tìm gia sư'),
(24, 'aaaaaaaaa', 2, 5, 3, 'Bắc Ninh', 'Yên Phong', 'Yên Phụ', 1, '0904450659', 2, 12, 2, 100000, 'Hojc them22', ' 06 Trần Phú, thành phố Quy Nhơn, tỉnh Bình Định', '2024-06-09', '2024-06-08 15:05:51', NULL, 'Đóng lớp: Chưa có kết nối'),
(25, 'Tìm gia sư ôn văn đại học', 4, 6, 3, 'Hải Phòng', 'Lê Chân', 'Lam Sơn', 1, '0934343847', 2, 1, 2, 100000, 'Học thêm môn văn', 'Nguyễn Thiện Thuật', '2024-06-19', '2024-06-09 01:53:50', 6, 'Đang tìm gia sư');

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
(1, 2, 151),
(2, 2, 152),
(3, 3, 1),
(4, 3, 2),
(5, 3, 3),
(6, 4, 22),
(7, 5, 47),
(8, 5, 48),
(9, 6, 47),
(10, 6, 48),
(11, 7, 47),
(12, 7, 48),
(13, 8, 1),
(14, 8, 2),
(15, 8, 3),
(18, 10, 8),
(19, 10, 10),
(20, 11, 8),
(21, 11, 9),
(22, 12, 8),
(23, 12, 9),
(24, 13, 15),
(25, 9, 8),
(26, 9, 10),
(27, 14, 177),
(28, 15, 177),
(29, 16, 153),
(30, 17, 153),
(31, 18, 153),
(32, 19, 153),
(33, 20, 153),
(34, 21, 153),
(35, 22, 153),
(36, 23, 40),
(37, 23, 41),
(38, 23, 42),
(39, 23, 43),
(40, 24, 8),
(41, 24, 9),
(42, 24, 10),
(43, 25, 20),
(44, 25, 22),
(45, 25, 23);

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

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `Email`, `DienThoai`, `DiaChiCT`, `GioiTinh`, `AnhBia`, `AnhDaiDien`, `MaTK`) VALUES
(1, 'Nguyễn Giang', 'giang@gmail.com', '0905738483', 'Hà Giang', 1, '', 'default_user.png', 41),
(2, 'Nguyễn Chí Thiên', 'thien@gmail.com', '0904563728', 'Nghệ An', 1, '', 'default_user.png', 42),
(4, 'Nguyễn Thị Thảo', 'thaotn@gmail.com', '0923458694', 'Hà Nội', 0, '', 'default_user.png', 44),
(5, 'Nguyễn Huy', 'huy@gmail.com', '0905430488', 'Khánh Hòa', 1, '', 'default_user.png', 45),
(6, 'Nguyễn Khả Ái', 'aink@gmail.com', '0904453657', 'Hà Nội', 0, '', 'default_user.png', 46);

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
(28, 'hien@gmail.com', '0935264728', '$2y$12$2dgRiNQLCLk1L04gkVHjwex0ynpOX0Fc5y5EVy2XuWv57orqM4omK', 2),
(33, 'khang@gmail.com', '0931606586', '$2y$12$1GP2OL/51az9Lsc8VHZAnOSimX1vEBcWnjoux7x6zBK6Io21UErKK', 3),
(39, 'chinhquoc@gmail.com', '0931606581', '$2y$12$9e8r6LVmvJkXu2TmPWVQyuy3vWHXTLokaS79SCtYIIs9aMxCMWI8a', 2),
(41, 'giang@gmail.com', '0905738483', '$2y$12$iY6AWAl5AcP/.MBlSi2WreOd6cHchPd62UZPMVTW4ZO7DfjjKDMKS', 4),
(42, 'thien@gmail.com', '0904563728', '$2y$12$rYEf.WLBvq7I3h4SrAgcFevd8dbXCYkSV80vAbtsZ73.oWmMvgW3y', 4),
(44, 'thaotn@gmail.com', '0923458694', '$2y$12$Tl7sv1jIc0.vA7djJQw5/uV7BizUpUYnEqBaqfQklovRj03FDSsTK', 4),
(45, 'huy@gmail.com', '0905430488', '$2y$12$gumjoUbVr9Wiur9GDp7ZGeAaGZjMRIHfdIGj/KeH7/HKktGtRkaDW', 1),
(46, 'aink@gmail.com', '0904453657', '$2y$12$JvdMM2QjbxdofLQ9Qshg6uIPq5jT.gKPiUdOodLPHXnt0mfHxF6Ra', 4),
(47, 'thanh@gmail.com', '0934304349', '$2y$12$IBHNQAd55iI1QUiNGMKx3.n9y0.JqKAz8UG9jE.lrjy7S0xdKkFfu', 2),
(48, 'phuong@gmail.com', '0905364738', '$2y$12$CToGx5UbqwJfI0XpNgJ21enPMAa1YTCx1pHl.vUe0tEXxtg5Zum1m', 2),
(49, 'thanhha@gmail.com', '0906340540', '$2y$12$oXXPXwPX77ki8BfLjQHX9OD082cxnOCJGDfYb1fvMCCAiSXyEcF5i', 2),
(50, 'hue@gmail.com', '0945340340', '$2y$12$qUT3wd2GVfJTw3eKCLG8Mu3g/IYggyWFAjHdBx8/bSJhgbJP5b//K', 2),
(51, 'minh@gmail.com', '0904356374', '$2y$12$BPSbyEzA9utmcZW6sS/dSu8Gq4.fGmW4jLzc9rWfdH6VUJDiay4Fe', 2),
(52, 'hang@gmail.com', '0956348594', '$2y$12$M84XVDZQ5NPJnQh9ZmLVke.bSiyBTqpi5VxM5o6kPLxQQ4f3370oG', 2),
(53, 'thanhphuong@gmail.com', '0934567489', '$2y$12$N2OuVY8y1FEei.zPp1ZNl.c36oGed4oSqWfEyF8XEcra3g6aIvSBO', 2),
(54, 'huyen@gmail.com', '0945567485', '$2y$12$XW/W8V6QBj7VwgmJW9kUH.qSVUfI50BVtJd.ZKRdBHN4YqWWHxSda', 2),
(55, 'bthien@gmail.com', '0954345345', '$2y$12$OjIXywQQejulzc/EtS7dpur59CgDNusmcI4ClNLTPgLbtUNZOa1YW', 2),
(56, 'tuyen@gmail.com', '0956456756', '$2y$12$x3kjVpUEqQBmSaOSR3xZYuR0G4yR626SAj..Qc9ShX5.sJdARZnwa', 2),
(57, 'chi@gmail.com', '0904453959', '$2y$12$kJeS8XwSUJGJ34SXK2ciL.eNh2LQ7cQDc7J3GaiRILHFxYEflOYJG', 2),
(58, 'yen@gmail.com', '0934345903', '$2y$12$ANbjAa93oSswfJCjzG61c.nlKsBgHnBuoqa1lQIkyiRpDdJnARv5a', 2),
(59, 'hieu@gmail.com', '0904574859', '$2y$12$qcsF0qK34QNBfELLAB9e8eovOZSA1hG/UZy4CIyMhtQxCS/SxqPOa', 2),
(60, 'nhung@gmail.com', '0933475843', '$2y$12$Epl.uWtAhpH./LzEwgUtbuyhRtRlcm8J2l2PsK.QCTE6idrU8/7Ra', 2),
(61, 'thang@gmail.com', '0904450659', '$2y$12$OXjbyU/7OTPdK.tk738EW.JOKCKGZDDKpwuoJK0nAp38obKhOVcDq', 3),
(62, 'thuy@gmail.com', '0934343847', '$2y$12$u1UEhu.KkHXUIU4XiZj1IOLidFAOg/t6Ci1fpHnGlY0UAPDMf5vwa', 3);

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
  MODIFY `MaCD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `danhgiags`
--
ALTER TABLE `danhgiags`
  MODIFY `MaDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giasu`
--
ALTER TABLE `giasu`
  MODIFY `MaGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `giasu_chude`
--
ALTER TABLE `giasu_chude`
  MODIFY `MaGS_CD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `giasu_monhoc`
--
ALTER TABLE `giasu_monhoc`
  MODIFY `MaGS_MH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hocvien`
--
ALTER TABLE `hocvien`
  MODIFY `MaHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ketnoigs_hv`
--
ALTER TABLE `ketnoigs_hv`
  MODIFY `MaKetNoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lichday`
--
ALTER TABLE `lichday`
  MODIFY `MaLichDay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `lichhoc`
--
ALTER TABLE `lichhoc`
  MODIFY `MaLichHoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `loaigs`
--
ALTER TABLE `loaigs`
  MODIFY `MaLoaiGS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lophoc_chude`
--
ALTER TABLE `lophoc_chude`
  MODIFY `MaLop_CD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaPQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
