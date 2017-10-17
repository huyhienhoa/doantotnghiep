-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 10:20 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlydulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `diadiem`
--

CREATE TABLE `diadiem` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `tongtien` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `khachhang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `tour_id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` double DEFAULT NULL,
  `giamgia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tinweb_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `huongdanvien`
--

CREATE TABLE `huongdanvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taikhoan` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` enum('nam','nu','khac') COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `id` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `tenlichtrinh` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaitour`
--

CREATE TABLE `loaitour` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinweb`
--

CREATE TABLE `tinweb` (
  `id` int(11) NOT NULL,
  `tieude` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date DEFAULT NULL,
  `ngaycapnhat` date DEFAULT NULL,
  `loaitin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `ten` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `motangangon` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8_unicode_ci,
  `gia` double NOT NULL,
  `songuoi` int(11) DEFAULT NULL,
  `loaitour_id` int(11) NOT NULL,
  `diadiem_id` int(11) NOT NULL,
  `lichtrinh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_huongdanvien`
--

CREATE TABLE `tour_huongdanvien` (
  `huongdanvien_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang_khachhang1_idx` (`khachhang_id`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`donhang_id`,`tour_id`),
  ADD KEY `fk_donhangchitiet_tour1_idx` (`tour_id`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hinhanh_tinweb1_idx` (`tinweb_id`),
  ADD KEY `fk_hinhanh_tour1_idx` (`tour_id`);

--
-- Indexes for table `huongdanvien`
--
ALTER TABLE `huongdanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinweb`
--
ALTER TABLE `tinweb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tinweb_loaitin_idx` (`loaitin_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tour_loaitour1_idx` (`loaitour_id`),
  ADD KEY `fk_tour_diadiem1_idx` (`diadiem_id`),
  ADD KEY `fk_tour_lichtrinh1_idx` (`lichtrinh_id`);

--
-- Indexes for table `tour_huongdanvien`
--
ALTER TABLE `tour_huongdanvien`
  ADD PRIMARY KEY (`huongdanvien_id`,`tour_id`),
  ADD KEY `fk_tour_huongdanvien_huongdanvien1_idx` (`huongdanvien_id`),
  ADD KEY `fk_tour_huongdanvien_tour1_idx` (`tour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `huongdanvien`
--
ALTER TABLE `huongdanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaitour`
--
ALTER TABLE `loaitour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tinweb`
--
ALTER TABLE `tinweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_khachhang1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_donhangchitiet_donhang1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_donhangchitiet_tour1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_hinhanh_tinweb1` FOREIGN KEY (`tinweb_id`) REFERENCES `tinweb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hinhanh_tour1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tinweb`
--
ALTER TABLE `tinweb`
  ADD CONSTRAINT `fk_tinweb_loaitin` FOREIGN KEY (`loaitin_id`) REFERENCES `loaitin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_tour_diadiem1` FOREIGN KEY (`diadiem_id`) REFERENCES `diadiem` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tour_lichtrinh1` FOREIGN KEY (`lichtrinh_id`) REFERENCES `lichtrinh` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tour_loaitour1` FOREIGN KEY (`loaitour_id`) REFERENCES `loaitour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tour_huongdanvien`
--
ALTER TABLE `tour_huongdanvien`
  ADD CONSTRAINT `fk_tour_huongdanvien_huongdanvien1` FOREIGN KEY (`huongdanvien_id`) REFERENCES `huongdanvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tour_huongdanvien_tour1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
