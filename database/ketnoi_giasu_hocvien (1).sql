-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 05:00 PM
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
  `MaLich` int(11) DEFAULT NULL,
  `AnhBia` text NOT NULL,
  `AnhDaiDien` text NOT NULL,
  `AnhBangCap` text NOT NULL,
  `AnhCMT` text NOT NULL,
  `LuotXem` double NOT NULL,
  `ThoiGianDN` datetime NOT NULL,
  `MaNV` int(11) NOT NULL,
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
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `MaLich` int(11) NOT NULL,
  `MaThu` int(11) NOT NULL,
  `MaBuoi` int(11) NOT NULL
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
  `MaLich` int(11) NOT NULL,
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
  ADD KEY `MaLich` (`MaLich`),
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
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`MaLich`),
  ADD KEY `MaThu` (`MaThu`),
  ADD KEY `MaBuoi` (`MaBuoi`);

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
  ADD KEY `MaLich` (`MaLich`),
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
  MODIFY `MaCD` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `lichhoc`
--
ALTER TABLE `lichhoc`
  MODIFY `MaLich` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `MaMH` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `giasu_ibfk_3` FOREIGN KEY (`MaLich`) REFERENCES `lichhoc` (`MaLich`),
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
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `lichhoc_ibfk_1` FOREIGN KEY (`MaThu`) REFERENCES `thu` (`MaThu`),
  ADD CONSTRAINT `lichhoc_ibfk_2` FOREIGN KEY (`MaBuoi`) REFERENCES `buoi` (`MaBuoi`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`MaCD`) REFERENCES `chude` (`MaCD`),
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`),
  ADD CONSTRAINT `lophoc_ibfk_3` FOREIGN KEY (`MaHV`) REFERENCES `hocvien` (`MaHV`),
  ADD CONSTRAINT `lophoc_ibfk_4` FOREIGN KEY (`MaLich`) REFERENCES `lichhoc` (`MaLich`),
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
