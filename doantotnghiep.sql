-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2017 lúc 06:31 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doantotnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_bangphanconggiangday`
--

CREATE TABLE `iso_bangphanconggiangday` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ngayky` date NOT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_bangphanconggiangday`
--

INSERT INTO `iso_bangphanconggiangday` (`id`, `name`, `created_at`, `updated_at`, `ngayky`, `filedinhkem`, `bomon_id`, `hocky_id`, `namhoc_id`, `HDGD_TKB_BPCGD__id`) VALUES
(1, 'BẢng phân công giảng dạy', '2017-10-08 02:09:46', '2017-10-11 06:51:10', '2017-10-23', '15074285861672913718834668385948541147387786530691724n.jpg', 1, 1, 1, 1),
(2, 'HIHI', '2017-10-11 03:00:32', '2017-10-11 03:01:28', '2017-10-19', '1507690832lets-fight-ghost-kim-so-hyun.png', 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_bangtheodoiketquahoctap`
--

CREATE TABLE `iso_bangtheodoiketquahoctap` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_bangtheodoiketquahoctap`
--

INSERT INTO `iso_bangtheodoiketquahoctap` (`id`, `name`, `created_at`, `updated_at`, `nhomhocphan`, `filedinhkem`, `giangvien_id`, `hinhthucdaotao_id`, `trinhdo_id`, `monhoc_id`, `hocky_id`, `namhoc_id`, `loaitailieu_id`) VALUES
(1, 'Bảng theo dõi kết quả học tập ', '2017-10-07 14:06:13', '2017-10-07 14:08:41', 'N01', '1507385173neonflames.png', 1, 1, 1, 1, 1, 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_bomon`
--

CREATE TABLE `iso_bomon` (
  `id` int(11) NOT NULL,
  `tenbomon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_bomon`
--

INSERT INTO `iso_bomon` (`id`, `tenbomon`, `mabomon`, `khoa_id`) VALUES
(1, 'Hệ thống thông tin', 'HTTT', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_chuongtrinhdaotao`
--

CREATE TABLE `iso_chuongtrinhdaotao` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybanhanh` date DEFAULT NULL,
  `cosodaotao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyetdinhso` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `khoa_id` int(11) NOT NULL,
  `chuyennganh_id` int(11) NOT NULL,
  `CTDT_DCHP_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_chuongtrinhdaotao`
--

INSERT INTO `iso_chuongtrinhdaotao` (`id`, `name`, `ngaybanhanh`, `cosodaotao`, `quyetdinhso`, `created_at`, `updated_at`, `filedinhkem`, `trinhdo_id`, `hinhthucdaotao_id`, `khoa_id`, `chuyennganh_id`, `CTDT_DCHP_id`) VALUES
(1, 'Chương trình đào tạo', '2017-10-11', 'AVC', '121321', '2017-10-08 01:42:47', '2017-10-11 03:56:23', '15074269671640668918758356726913047487074367668543626n.jpg', 1, 1, 1, 2, 1),
(2, 'Chương trình đào tạo', '1914-05-27', 'AVC', '121321', '2017-10-08 01:42:47', '2017-10-08 01:43:58', '15074270381672913718834668385948541147387786530691724n.jpg', 1, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_chuyennganh`
--

CREATE TABLE `iso_chuyennganh` (
  `id` int(11) NOT NULL,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_chuyennganh`
--

INSERT INTO `iso_chuyennganh` (`id`, `ma`, `name`, `khoa_id`) VALUES
(1, 'TTM', 'Truyền thông mạng', 1),
(2, 'KPM', 'Kỹ thuật phần mềm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_congtacnghiencuukh`
--

CREATE TABLE `iso_congtacnghiencuukh` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `khoa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_congtacnghiencuukh`
--

INSERT INTO `iso_congtacnghiencuukh` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `loaitailieu_id`, `giangvien_id`, `namhoc_id`, `khoa_id`) VALUES
(1, 'Nghiên cứu tai nghe thông minh', '2017-10-08 01:14:02', '2017-10-08 01:14:17', '1507425242gtd-wallpaper.jpg', 11, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_ctdt_dchp`
--

CREATE TABLE `iso_ctdt_dchp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_ctdt_dchp`
--

INSERT INTO `iso_ctdt_dchp` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Chương trình đào tạo', 2),
(2, 'Đề cương học phần', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_dapan`
--

CREATE TABLE `iso_dapan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nganhangdethi_id` int(11) NOT NULL,
  `NHDT_DA_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_dapan`
--

INSERT INTO `iso_dapan` (`id`, `name`, `filedinhkem`, `created_at`, `updated_at`, `nganhangdethi_id`, `NHDT_DA_id`) VALUES
(2, 'Đáp án môn ccccccccc', '1507437200001.png', '2017-10-08 04:32:59', '2017-10-08 04:33:20', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_dbtl_dcot_lt_pcct`
--

CREATE TABLE `iso_dbtl_dcot_lt_pcct` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_dbtl_dcot_lt_pcct`
--

INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Đề bài tập lớn', 7),
(2, 'Đề cương ôn tập', 7),
(3, 'Lịch thi', 7),
(4, 'Phân công coi thi', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_debaitaplon`
--

CREATE TABLE `iso_debaitaplon` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_debaitaplon`
--

INSERT INTO `iso_debaitaplon` (`id`, `name`, `nhomhocphan`, `created_at`, `updated_at`, `filedinhkem`, `hocky_id`, `namhoc_id`, `monhoc_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Hahahaha', 'N01', '2017-10-08 02:49:58', '2017-10-08 02:50:07', 'nofile.jpg', 1, 1, 1, 1),
(3, 'Đề bài tập lớn môn Lập trình C', 'N02', '2017-10-11 04:18:29', '2017-10-11 04:18:40', '1507695509untitled.jpg', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_decuonghocphan`
--

CREATE TABLE `iso_decuonghocphan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `CTDT_DCHP_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_decuonghocphan`
--

INSERT INTO `iso_decuonghocphan` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `monhoc_id`, `CTDT_DCHP_id`) VALUES
(2, 'Đề cương', '2017-10-08 01:55:35', '2017-10-08 01:55:48', '15074277481672913718834668385948541147387786530691724n.jpg', 1, 2),
(3, 'Siêu đề cương', '2017-10-08 01:56:03', NULL, 'nofile.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_decuongontap`
--

CREATE TABLE `iso_decuongontap` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_decuongontap`
--

INSERT INTO `iso_decuongontap` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `monhoc_id`, `namhoc_id`, `hocky_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Đề cương ôn tập ABC', '2017-10-08 03:06:47', '2017-10-11 05:45:38', 'nofile.jpg', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_giangvien`
--

CREATE TABLE `iso_giangvien` (
  `id` int(11) NOT NULL,
  `magiangvien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tengiangvien` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_giangvien`
--

INSERT INTO `iso_giangvien` (`id`, `magiangvien`, `tengiangvien`, `bomon_id`) VALUES
(1, 'GV1', 'Phạm Văn Huy', 1),
(2, 'GV2', 'Nguyễn Thị Trang', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_hdgd_tkb_bpcgd`
--

CREATE TABLE `iso_hdgd_tkb_bpcgd` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_hdgd_tkb_bpcgd`
--

INSERT INTO `iso_hdgd_tkb_bpcgd` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Bảng phân công giảng dạy', 3),
(2, 'Hợp đồng giảng dạy', 3),
(3, 'Thời khóa biểu', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_hinhthucdaotao`
--

CREATE TABLE `iso_hinhthucdaotao` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_hinhthucdaotao`
--

INSERT INTO `iso_hinhthucdaotao` (`id`, `name`) VALUES
(1, 'Chính quy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_hocky`
--

CREATE TABLE `iso_hocky` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_hocky`
--

INSERT INTO `iso_hocky` (`id`, `name`) VALUES
(1, 'Học kỳ IA'),
(2, 'Học kỳ IB'),
(3, 'Học kỳ II');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_hopdonggiangday`
--

CREATE TABLE `iso_hopdonggiangday` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_hopdonggiangday`
--

INSERT INTO `iso_hopdonggiangday` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `bomon_id`, `namhoc_id`, `HDGD_TKB_BPCGD__id`) VALUES
(2, 'àasdfasdfasf', '2017-10-08 02:21:35', '2017-10-08 02:21:56', 'nofile.jpg', 1, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_ketquadanhgiahocphan`
--

CREATE TABLE `iso_ketquadanhgiahocphan` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ngaythi` date DEFAULT NULL,
  `canbocoithi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `canbochamthi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_ketquadanhgiahocphan`
--

INSERT INTO `iso_ketquadanhgiahocphan` (`id`, `name`, `created_at`, `updated_at`, `ngaythi`, `canbocoithi`, `canbochamthi`, `nhomhocphan`, `filedinhkem`, `hocky_id`, `namhoc_id`, `monhoc_id`, `loaitailieu_id`) VALUES
(1, 'Kết quả đánh giá học phần', '2017-10-07 14:25:48', '2017-10-11 06:02:13', '2017-10-11', 'Phạm Văn Huy', 'Nguyễn Thị Trang', 'N01', '15073865731506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_khenthuong`
--

CREATE TABLE `iso_khenthuong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_khenthuong`
--

INSERT INTO `iso_khenthuong` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `giangvien_id`, `namhoc_id`, `TD_KT_KL_id`) VALUES
(2, 'Khen thưởng', '2017-10-08 03:51:33', '2017-10-08 03:51:39', '15074346931506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 2, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_khoa`
--

CREATE TABLE `iso_khoa` (
  `id` int(11) NOT NULL,
  `makhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_khoa`
--

INSERT INTO `iso_khoa` (`id`, `makhoa`, `tenkhoa`) VALUES
(1, 'CNT', 'Công nghệ thông tin'),
(2, 'KT', 'Kinh tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_kiluat`
--

CREATE TABLE `iso_kiluat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_kiluat`
--

INSERT INTO `iso_kiluat` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `giangvien_id`, `namhoc_id`, `TD_KT_KL_id`) VALUES
(2, 'Kỉ luật ', '2017-10-08 04:11:00', '2017-10-08 04:11:08', '15074358601506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_lichgiangday`
--

CREATE TABLE `iso_lichgiangday` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_lichgiangday`
--

INSERT INTO `iso_lichgiangday` (`id`, `name`, `nhomhocphan`, `filedinhkem`, `created_at`, `updated_at`, `monhoc_id`, `hocky_id`, `namhoc_id`, `giangvien_id`, `loaitailieu_id`) VALUES
(1, 'Lịch giảng dạy môn PTTKHT', 'N01', '1507383829neonflames.png', '2017-10-07 13:43:49', '2017-10-07 13:46:57', 1, 1, 1, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_lichthi`
--

CREATE TABLE `iso_lichthi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_lichthi`
--

INSERT INTO `iso_lichthi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `hinhthucdaotao_id`, `hocky_id`, `namhoc_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Lịch thi', '2017-10-08 03:17:13', '2017-10-08 03:17:21', 'nofile.jpg', 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_loaitailieu`
--

CREATE TABLE `iso_loaitailieu` (
  `id` int(11) NOT NULL,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_loaitailieu`
--

INSERT INTO `iso_loaitailieu` (`id`, `ma`, `name`) VALUES
(1, 'HTTT.01.01.01', 'QUY ĐỊNH, QUY CHẾ ĐÀO TẠO'),
(2, 'HTTT.01.01.02', 'CHƯƠNG TRÌNH ĐÀO TẠO, ĐỀ CƯƠNG HỌC PHẦN'),
(3, 'HTTT.01.01.03', 'HỢP ĐỒNG GIẢNG DẠY, THỜI KHÓA BIỂU, BẢNG PHÂN CÔNG GIẢNG DẠY'),
(4, 'HTTT.01.01.04', 'LỊCH GIẢNG DẠY'),
(5, 'HTTT.01.01.05', 'BẢNG THEO DÕI KẾT QUẢ HỌC TẬP'),
(6, 'HTTT.01.01.06', 'KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN'),
(7, 'HTTT.01.01.07', 'ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI'),
(8, 'HTTT.01.01.08', 'THI ĐUA, KHEN THƯỞNG, KỈ LUẬT'),
(9, 'HTTT.01.01.09', 'NGÂN HÀNG ĐỀ THI, ĐÁP ÁN'),
(10, 'HTTT.01.01.10', 'THÔNG BÁO,QUYẾT ĐỊNH'),
(11, 'HTTT.01.01.11', 'CÔNG TÁC NGHIÊN CỨU KHOA HỌC'),
(13, 'HTTT.01.01.11', 'TÀI LIỆU BỘ MÔN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_monhoc`
--

CREATE TABLE `iso_monhoc` (
  `id` int(11) NOT NULL,
  `tenmonhoc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `thuchanh` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL,
  `baitaplon` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_monhoc`
--

INSERT INTO `iso_monhoc` (`id`, `tenmonhoc`, `mamonhoc`, `sotinchi`, `bomon_id`, `thuchanh`, `baitaplon`) VALUES
(1, 'Phân tích thiết kế hệ thống', 'MH1', 3, 1, 'khong', 'co');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_namhoc`
--

CREATE TABLE `iso_namhoc` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_namhoc`
--

INSERT INTO `iso_namhoc` (`id`, `name`) VALUES
(1, '2017-2018'),
(2, '2018-2019'),
(4, '2019-2020'),
(5, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_nganhangdethi`
--

CREATE TABLE `iso_nganhangdethi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `NHDT_DA_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_nganhangdethi`
--

INSERT INTO `iso_nganhangdethi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `namhoc_id`, `hocky_id`, `trinhdo_id`, `hinhthucdaotao_id`, `monhoc_id`, `NHDT_DA_id`) VALUES
(2, 'Ngân hàng đề thi', '2017-10-08 04:22:16', '2017-10-08 04:22:41', '15074365611506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_nhdt_da`
--

CREATE TABLE `iso_nhdt_da` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_nhdt_da`
--

INSERT INTO `iso_nhdt_da` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Ngân hàng đề thi', 9),
(2, 'Đáp án', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_phancongcoithi`
--

CREATE TABLE `iso_phancongcoithi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_phancongcoithi`
--

INSERT INTO `iso_phancongcoithi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `hocky_id`, `namhoc_id`, `bomon_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Phân công coi thi', '2017-10-08 03:28:24', '2017-10-08 03:28:32', 'nofile.jpg', 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_quydinh_quychedaotao`
--

CREATE TABLE `iso_quydinh_quychedaotao` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybanhanh` date DEFAULT NULL,
  `soquyetdinh` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_quydinh_quychedaotao`
--

INSERT INTO `iso_quydinh_quychedaotao` (`id`, `name`, `ngaybanhanh`, `soquyetdinh`, `created_at`, `updated_at`, `filedinhkem`, `namhoc_id`, `loaitailieu_id`) VALUES
(1, 'dfgdfg', '2017-10-28', '453', NULL, '2017-10-11 13:35:07', 'nofile.jpg', 1, 1),
(2, 'ok', '1915-06-08', 'fg', NULL, '2017-09-30 15:20:37', 'nofile.jpg', 1, 1),
(3, 'Xịn', '2017-09-07', '1111', '2017-09-30 15:57:41', '2017-09-30 16:03:24', '1506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 2, 1),
(4, 'ngon', '2017-09-05', '433', '2017-09-30 16:08:55', NULL, '1506762535nofile-2.jpg', 1, 1),
(5, 'hay vãi', '2017-09-21', '65', '2017-09-30 16:09:17', NULL, 'nofile.jpg', 1, 1),
(6, 'ok', '2017-09-30', 'xịn', '2017-09-30 18:57:13', NULL, '1506772633ghen---khac-hung-erik-min.mp3', 2, 1),
(7, 'ok', '2017-09-20', '66', '2017-09-30 19:02:53', '2017-10-01 14:02:10', 'nofile.jpg', 1, 1),
(8, 'ngon', '2017-09-07', 'ok', '2017-09-30 19:03:16', NULL, 'nofile.jpg', 1, 1),
(9, 'hege', '2017-09-12', '433', '2017-09-30 19:03:32', NULL, 'nofile.jpg', 1, 1),
(10, 'fcv', '2017-09-26', 'sd', '2017-09-30 19:03:49', NULL, 'nofile.jpg', 1, 1),
(11, 'ih', '2017-09-26', '4545', '2017-09-30 19:04:13', NULL, 'nofile.jpg', 2, 1),
(12, 'abc', '2017-10-03', '865', '2017-10-01 14:08:34', NULL, '1506841714quanlydulich.sql', 2, 1),
(13, 'JHKJHB', '2017-10-19', '333', '2017-10-01 14:26:49', NULL, 'nofile.jpg', 1, 1),
(14, 'ok', '2001-05-11', '003', NULL, NULL, 'abc', 1, 1),
(15, 'huy hienh oa', '2017-10-19', '11', '2017-10-06 23:06:53', NULL, '1507306013001.png', 1, 1),
(16, 'okkkkk', '2017-10-18', '4545', '2017-10-06 23:07:18', NULL, '1507306038001.png', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_tailieubomon`
--

CREATE TABLE `iso_tailieubomon` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_tailieubomon`
--

INSERT INTO `iso_tailieubomon` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `loaitailieu_id`, `bomon_id`) VALUES
(1, 'Tài liệu bộ môn', '2017-10-08 01:26:00', '2017-10-08 01:26:20', '15074259801626635618743476961734357908896027983326970n.png', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_td_kt_kl`
--

CREATE TABLE `iso_td_kt_kl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_td_kt_kl`
--

INSERT INTO `iso_td_kt_kl` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Thi đua', 8),
(2, 'Khen thưởng ', 8),
(3, 'Kỉ luật', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_thidua`
--

CREATE TABLE `iso_thidua` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_thidua`
--

INSERT INTO `iso_thidua` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `namhoc_id`, `bomon_id`, `TD_KT_KL_id`) VALUES
(2, 'Thi đua', '2017-10-08 03:37:28', '2017-10-08 03:37:34', 'nofile.jpg', 2, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_thoikhoabieu`
--

CREATE TABLE `iso_thoikhoabieu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_thoikhoabieu`
--

INSERT INTO `iso_thoikhoabieu` (`id`, `name`, `namhoc_id`, `hocky_id`, `bomon_id`, `created_at`, `updated_at`, `filedinhkem`, `HDGD_TKB_BPCGD__id`) VALUES
(2, 'Thời khóa biểu ABC', 1, 1, 1, '2017-10-08 02:34:33', '2017-10-11 06:44:08', '1507430085voice6074.aac', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_thongbao_quyetdinh`
--

CREATE TABLE `iso_thongbao_quyetdinh` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaycohieuluc` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_thongbao_quyetdinh`
--

INSERT INTO `iso_thongbao_quyetdinh` (`id`, `name`, `ngaycohieuluc`, `created_at`, `updated_at`, `filedinhkem`, `hinhthucdaotao_id`, `trinhdo_id`, `loaitailieu_id`) VALUES
(1, 'Thông báo về ngày nghỉ lễ', '2017-10-13', '2017-10-07 15:13:42', '2017-10-11 06:50:51', '15073892221506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_trinhdo`
--

CREATE TABLE `iso_trinhdo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_trinhdo`
--

INSERT INTO `iso_trinhdo` (`id`, `name`) VALUES
(1, 'Đại học'),
(2, 'Cao đẳng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `iso_user`
--

CREATE TABLE `iso_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','trưởng bộ môn','trưởng khoa','giảng viên') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `iso_user`
--

INSERT INTO `iso_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(2, 'admin', '8kA3UieyX_Z9lfDGtMZFZBKSRX1H-_Jn', '$2y$13$ChMbyWfrocZFRITukp1Tye9tHy/K5izFNIpj50dzY3F/5UnYe79BC', NULL, 'huyhienhoacnt@gmail.com', 10, '2017-10-13 17:00:00', '2017-10-17 05:34:34', 'admin'),
(3, 'huypham', 'SU8F4vrpZ941dg-XX9VM2ABMpAOmNjlD', '$2y$13$.dQgrYrzxKV5wGB/ss42Qe6nVndnjn109xedAuostuFhTP.Y5sdEK', NULL, 'huy@gmail..com', 10, '2017-10-14 04:02:16', '2017-10-15 02:17:34', 'trưởng khoa'),
(4, 'trangnguyen', 'qilAbQiNgCicDqUxKzovAlZ6LaYCyTxB', '$2y$13$sdhjlwYXejYk/8LKxBQ7qOE2VIGdHbWmbJtrb5PBwMZf7tEOVHSK2', NULL, 'trang@gmail.com', 10, '2017-10-15 02:18:12', '2017-10-15 02:18:30', 'trưởng bộ môn'),
(5, 'tung', 'pxfZVJ6z_Q_I6Q4ITfZmRQ9w3G1G5BC6', '$2y$13$JToeN2.iBmx9lbjQ4FhF..FRMxQs43AIQ26Z2niK/ToPUMg5XTZBy', NULL, 'tung@gmail.com', 10, '2017-10-15 02:18:59', NULL, 'giảng viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `iso_bangphanconggiangday`
--
ALTER TABLE `iso_bangphanconggiangday`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_bangphanconggiangday_iso_bomon1_idx` (`bomon_id`),
  ADD KEY `fk_iso_bangphanconggiangday_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_bangphanconggiangday_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`);

--
-- Chỉ mục cho bảng `iso_bangtheodoiketquahoctap`
--
ALTER TABLE `iso_bangtheodoiketquahoctap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_trinhdo1_idx` (`trinhdo_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_giangvien1_idx` (`giangvien_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_bangtheodoiketquahoctap_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_bomon`
--
ALTER TABLE `iso_bomon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenbomon_UNIQUE` (`tenbomon`),
  ADD UNIQUE KEY `mabomon_UNIQUE` (`mabomon`),
  ADD KEY `fk_iso_bomon_iso_khoa_idx` (`khoa_id`);

--
-- Chỉ mục cho bảng `iso_chuongtrinhdaotao`
--
ALTER TABLE `iso_chuongtrinhdaotao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_chuongtrinhdaotao_iso_trinhdo1_idx` (`trinhdo_id`),
  ADD KEY `fk_iso_chuongtrinhdaotao_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  ADD KEY `fk_iso_chuongtrinhdaotao_iso_khoa1_idx` (`khoa_id`),
  ADD KEY `fk_iso_chuongtrinhdaotao_iso_CTDT_DCHP1_idx` (`CTDT_DCHP_id`),
  ADD KEY `fk_iso_chuongtrinhdaotao_iso_chuyennganh1_idx` (`chuyennganh_id`);

--
-- Chỉ mục cho bảng `iso_chuyennganh`
--
ALTER TABLE `iso_chuyennganh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_chuyennganh_iso_khoa1_idx` (`khoa_id`);

--
-- Chỉ mục cho bảng `iso_congtacnghiencuukh`
--
ALTER TABLE `iso_congtacnghiencuukh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_congtacnghiencuuKH_iso_loaitailieu1_idx` (`loaitailieu_id`),
  ADD KEY `fk_iso_congtacnghiencuuKH_iso_giangvien1_idx` (`giangvien_id`),
  ADD KEY `fk_iso_congtacnghiencuuKH_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_congtacnghiencuuKH_iso_khoa1_idx` (`khoa_id`);

--
-- Chỉ mục cho bảng `iso_ctdt_dchp`
--
ALTER TABLE `iso_ctdt_dchp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_CTDT_DCHP_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_dapan`
--
ALTER TABLE `iso_dapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_dapan_iso_nganhangdethi1_idx` (`nganhangdethi_id`),
  ADD KEY `fk_iso_dapan_iso_NHDT_DA1_idx` (`NHDT_DA_id`);

--
-- Chỉ mục cho bảng `iso_dbtl_dcot_lt_pcct`
--
ALTER TABLE `iso_dbtl_dcot_lt_pcct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_debaitaplon`
--
ALTER TABLE `iso_debaitaplon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_debaitaplon_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_debaitaplon_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_debaitaplon_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`);

--
-- Chỉ mục cho bảng `iso_decuonghocphan`
--
ALTER TABLE `iso_decuonghocphan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_decuongmonhoc_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_decuonghocphan_iso_CTDT_DCHP1_idx` (`CTDT_DCHP_id`);

--
-- Chỉ mục cho bảng `iso_decuongontap`
--
ALTER TABLE `iso_decuongontap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_decuongontap_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_decuongontap_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_decuongontap_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`);

--
-- Chỉ mục cho bảng `iso_giangvien`
--
ALTER TABLE `iso_giangvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `magiangvien_UNIQUE` (`magiangvien`),
  ADD KEY `fk_iso_giangvien_iso_bomon1_idx` (`bomon_id`);

--
-- Chỉ mục cho bảng `iso_hdgd_tkb_bpcgd`
--
ALTER TABLE `iso_hdgd_tkb_bpcgd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_hinhthucdaotao`
--
ALTER TABLE `iso_hinhthucdaotao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iso_hocky`
--
ALTER TABLE `iso_hocky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iso_hopdonggiangday`
--
ALTER TABLE `iso_hopdonggiangday`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_hopdonggiangday_iso_bomon1_idx` (`bomon_id`),
  ADD KEY `fk_iso_hopdonggiangday_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`);

--
-- Chỉ mục cho bảng `iso_ketquadanhgiahocphan`
--
ALTER TABLE `iso_ketquadanhgiahocphan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_ketquadanhgiahocphan_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_ketquadanhgiahocphan_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_ketquadanhgiahocphan_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_khenthuong`
--
ALTER TABLE `iso_khenthuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_khenthuong_iso_giangvien1_idx` (`giangvien_id`),
  ADD KEY `fk_iso_khenthuong_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_khenthuong_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`);

--
-- Chỉ mục cho bảng `iso_khoa`
--
ALTER TABLE `iso_khoa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `makhoa_UNIQUE` (`makhoa`),
  ADD UNIQUE KEY `tenkhoa_UNIQUE` (`tenkhoa`);

--
-- Chỉ mục cho bảng `iso_kiluat`
--
ALTER TABLE `iso_kiluat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_khenthuong_iso_giangvien1_idx` (`giangvien_id`),
  ADD KEY `fk_iso_khenthuong_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_kiluat_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`);

--
-- Chỉ mục cho bảng `iso_lichgiangday`
--
ALTER TABLE `iso_lichgiangday`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_lichgiangday_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_lichgiangday_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_lichgiangday_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_lichgiangday_iso_giangvien1_idx` (`giangvien_id`),
  ADD KEY `fk_iso_lichgiangday_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_lichthi`
--
ALTER TABLE `iso_lichthi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_lichthi_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  ADD KEY `fk_iso_lichthi_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_lichthi_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`);

--
-- Chỉ mục cho bảng `iso_loaitailieu`
--
ALTER TABLE `iso_loaitailieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iso_monhoc`
--
ALTER TABLE `iso_monhoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_monhoc_iso_bomon1_idx` (`bomon_id`);

--
-- Chỉ mục cho bảng `iso_namhoc`
--
ALTER TABLE `iso_namhoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iso_nganhangdethi`
--
ALTER TABLE `iso_nganhangdethi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_nganhangdethi_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_nganhangdethi_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_nganhangdethi_iso_trinhdo1_idx` (`trinhdo_id`),
  ADD KEY `fk_iso_nganhangdethi_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  ADD KEY `fk_iso_nganhangdethi_iso_monhoc1_idx` (`monhoc_id`),
  ADD KEY `fk_iso_nganhangdethi_iso_NHDT_DA1_idx` (`NHDT_DA_id`);

--
-- Chỉ mục cho bảng `iso_nhdt_da`
--
ALTER TABLE `iso_nhdt_da`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_NHDT_DA_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_phancongcoithi`
--
ALTER TABLE `iso_phancongcoithi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_phancongcoithi_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_phancongcoithi_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_phancongcoithi_iso_bomon1_idx` (`bomon_id`),
  ADD KEY `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`);

--
-- Chỉ mục cho bảng `iso_quydinh_quychedaotao`
--
ALTER TABLE `iso_quydinh_quychedaotao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_quydinh_quychedaotao_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_quydinh_quychedaotao_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_tailieubomon`
--
ALTER TABLE `iso_tailieubomon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_tailieubomon_iso_loaitailieu1_idx` (`loaitailieu_id`),
  ADD KEY `fk_iso_tailieubomon_iso_bomon1_idx` (`bomon_id`);

--
-- Chỉ mục cho bảng `iso_td_kt_kl`
--
ALTER TABLE `iso_td_kt_kl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_TD_KT_KL_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_thidua`
--
ALTER TABLE `iso_thidua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_thidua_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_thidua_iso_bomon1_idx` (`bomon_id`),
  ADD KEY `fk_iso_thidua_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`);

--
-- Chỉ mục cho bảng `iso_thoikhoabieu`
--
ALTER TABLE `iso_thoikhoabieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_thoikhoabieu_iso_namhoc1_idx` (`namhoc_id`),
  ADD KEY `fk_iso_thoikhoabieu_iso_hocky1_idx` (`hocky_id`),
  ADD KEY `fk_iso_thoikhoabieu_iso_bomon1_idx` (`bomon_id`),
  ADD KEY `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`);

--
-- Chỉ mục cho bảng `iso_thongbao_quyetdinh`
--
ALTER TABLE `iso_thongbao_quyetdinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_iso_tailieu_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  ADD KEY `fk_iso_tailieu_iso_trinhdo1_idx` (`trinhdo_id`),
  ADD KEY `fk_iso_thongbao_quyetdinh_iso_loaitailieu1_idx` (`loaitailieu_id`);

--
-- Chỉ mục cho bảng `iso_trinhdo`
--
ALTER TABLE `iso_trinhdo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `iso_user`
--
ALTER TABLE `iso_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `iso_bangphanconggiangday`
--
ALTER TABLE `iso_bangphanconggiangday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_bangtheodoiketquahoctap`
--
ALTER TABLE `iso_bangtheodoiketquahoctap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_bomon`
--
ALTER TABLE `iso_bomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_chuongtrinhdaotao`
--
ALTER TABLE `iso_chuongtrinhdaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_chuyennganh`
--
ALTER TABLE `iso_chuyennganh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_congtacnghiencuukh`
--
ALTER TABLE `iso_congtacnghiencuukh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_ctdt_dchp`
--
ALTER TABLE `iso_ctdt_dchp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_dapan`
--
ALTER TABLE `iso_dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_dbtl_dcot_lt_pcct`
--
ALTER TABLE `iso_dbtl_dcot_lt_pcct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `iso_debaitaplon`
--
ALTER TABLE `iso_debaitaplon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `iso_decuonghocphan`
--
ALTER TABLE `iso_decuonghocphan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `iso_decuongontap`
--
ALTER TABLE `iso_decuongontap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_giangvien`
--
ALTER TABLE `iso_giangvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_hdgd_tkb_bpcgd`
--
ALTER TABLE `iso_hdgd_tkb_bpcgd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `iso_hinhthucdaotao`
--
ALTER TABLE `iso_hinhthucdaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_hocky`
--
ALTER TABLE `iso_hocky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `iso_hopdonggiangday`
--
ALTER TABLE `iso_hopdonggiangday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_ketquadanhgiahocphan`
--
ALTER TABLE `iso_ketquadanhgiahocphan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_khenthuong`
--
ALTER TABLE `iso_khenthuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_khoa`
--
ALTER TABLE `iso_khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_kiluat`
--
ALTER TABLE `iso_kiluat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_lichgiangday`
--
ALTER TABLE `iso_lichgiangday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_lichthi`
--
ALTER TABLE `iso_lichthi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_loaitailieu`
--
ALTER TABLE `iso_loaitailieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `iso_monhoc`
--
ALTER TABLE `iso_monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_namhoc`
--
ALTER TABLE `iso_namhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `iso_nganhangdethi`
--
ALTER TABLE `iso_nganhangdethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_nhdt_da`
--
ALTER TABLE `iso_nhdt_da`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_phancongcoithi`
--
ALTER TABLE `iso_phancongcoithi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_quydinh_quychedaotao`
--
ALTER TABLE `iso_quydinh_quychedaotao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `iso_tailieubomon`
--
ALTER TABLE `iso_tailieubomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_td_kt_kl`
--
ALTER TABLE `iso_td_kt_kl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `iso_thidua`
--
ALTER TABLE `iso_thidua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_thoikhoabieu`
--
ALTER TABLE `iso_thoikhoabieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_thongbao_quyetdinh`
--
ALTER TABLE `iso_thongbao_quyetdinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `iso_trinhdo`
--
ALTER TABLE `iso_trinhdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `iso_user`
--
ALTER TABLE `iso_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `iso_bangphanconggiangday`
--
ALTER TABLE `iso_bangphanconggiangday`
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_bangtheodoiketquahoctap`
--
ALTER TABLE `iso_bangtheodoiketquahoctap`
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_bomon`
--
ALTER TABLE `iso_bomon`
  ADD CONSTRAINT `fk_iso_bomon_iso_khoa` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_chuongtrinhdaotao`
--
ALTER TABLE `iso_chuongtrinhdaotao`
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_chuyennganh1` FOREIGN KEY (`chuyennganh_id`) REFERENCES `iso_chuyennganh` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_chuyennganh`
--
ALTER TABLE `iso_chuyennganh`
  ADD CONSTRAINT `fk_iso_chuyennganh_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_congtacnghiencuukh`
--
ALTER TABLE `iso_congtacnghiencuukh`
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_ctdt_dchp`
--
ALTER TABLE `iso_ctdt_dchp`
  ADD CONSTRAINT `fk_iso_CTDT_DCHP_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_dapan`
--
ALTER TABLE `iso_dapan`
  ADD CONSTRAINT `fk_iso_dapan_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_dapan_iso_nganhangdethi1` FOREIGN KEY (`nganhangdethi_id`) REFERENCES `iso_nganhangdethi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_dbtl_dcot_lt_pcct`
--
ALTER TABLE `iso_dbtl_dcot_lt_pcct`
  ADD CONSTRAINT `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_debaitaplon`
--
ALTER TABLE `iso_debaitaplon`
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_decuonghocphan`
--
ALTER TABLE `iso_decuonghocphan`
  ADD CONSTRAINT `fk_iso_decuonghocphan_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongmonhoc_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_decuongontap`
--
ALTER TABLE `iso_decuongontap`
  ADD CONSTRAINT `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_giangvien`
--
ALTER TABLE `iso_giangvien`
  ADD CONSTRAINT `fk_iso_giangvien_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_hdgd_tkb_bpcgd`
--
ALTER TABLE `iso_hdgd_tkb_bpcgd`
  ADD CONSTRAINT `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_hopdonggiangday`
--
ALTER TABLE `iso_hopdonggiangday`
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_ketquadanhgiahocphan`
--
ALTER TABLE `iso_ketquadanhgiahocphan`
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_khenthuong`
--
ALTER TABLE `iso_khenthuong`
  ADD CONSTRAINT `fk_iso_khenthuong_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_kiluat`
--
ALTER TABLE `iso_kiluat`
  ADD CONSTRAINT `fk_iso_khenthuong_iso_giangvien10` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_namhoc10` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_kiluat_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_lichgiangday`
--
ALTER TABLE `iso_lichgiangday`
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_lichthi`
--
ALTER TABLE `iso_lichthi`
  ADD CONSTRAINT `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_monhoc`
--
ALTER TABLE `iso_monhoc`
  ADD CONSTRAINT `fk_iso_monhoc_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_nganhangdethi`
--
ALTER TABLE `iso_nganhangdethi`
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_nhdt_da`
--
ALTER TABLE `iso_nhdt_da`
  ADD CONSTRAINT `fk_iso_NHDT_DA_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_phancongcoithi`
--
ALTER TABLE `iso_phancongcoithi`
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_quydinh_quychedaotao`
--
ALTER TABLE `iso_quydinh_quychedaotao`
  ADD CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_tailieubomon`
--
ALTER TABLE `iso_tailieubomon`
  ADD CONSTRAINT `fk_iso_tailieubomon_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_tailieubomon_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_td_kt_kl`
--
ALTER TABLE `iso_td_kt_kl`
  ADD CONSTRAINT `fk_iso_TD_KT_KL_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_thidua`
--
ALTER TABLE `iso_thidua`
  ADD CONSTRAINT `fk_iso_thidua_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thidua_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thidua_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `iso_thoikhoabieu`
--
ALTER TABLE `iso_thoikhoabieu`
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
