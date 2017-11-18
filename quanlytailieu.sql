-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Novembre 2017 à 06:32
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `quanlytailieu`
--

-- --------------------------------------------------------

--
-- Structure de la table `iso_auth`
--

CREATE TABLE IF NOT EXISTS `iso_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_quyen_quyen1_idx` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=224 ;

--
-- Contenu de la table `iso_auth`
--

INSERT INTO `iso_auth` (`id`, `name`, `action`, `mota`, `parent_id`, `controller`) VALUES
(1, 'Bảng phân công giảng dạy', '', '', NULL, 'bangphanconggiangday'),
(2, 'Xem', 'view', '', 1, 'bangphanconggiangday'),
(3, 'Sửa', 'update', '', 1, 'bangphanconggiangday'),
(4, 'Xóa', 'delete', '', 1, 'bangphanconggiangday'),
(5, 'Bảng theo dõi kết quả học tập', '', '', NULL, 'bangtheodoiketquahoctap'),
(6, 'Download', 'download', '', 1, 'bangphanconggiangday'),
(7, 'Xem', 'view', '', 5, 'bangtheodoiketquahoctap'),
(8, 'Sửa', 'update', '', 5, 'bangtheodoiketquahoctap'),
(9, 'Xóa', 'delete', '', 5, 'bangtheodoiketquahoctap'),
(10, 'Download', 'download', '', 5, 'bangtheodoiketquahoctap'),
(11, 'Bộ môn', '', '', NULL, 'bomon'),
(12, 'Xem', 'view', '', 11, 'bomon'),
(13, 'Sửa', 'update', '', 11, 'bomon'),
(14, 'Xóa', 'delete', '', 11, 'bomon'),
(15, 'Chương trình đào tạo', '', '', NULL, 'chuongtrinhdaotao'),
(16, 'Xem', 'view', '', 15, 'chuongtrinhdaotao'),
(17, 'Sửa', 'update', '', 15, 'chuongtrinhdaotao'),
(18, 'Xóa', 'delete', '', 15, 'chuongtrinhdaotao'),
(19, 'Download', 'download', '', 15, 'chuongtrinhdaotao'),
(20, 'Chuyên ngành', '', '', NULL, 'chuyennganh'),
(21, 'Xem', 'view', '', 20, 'chuyennganh'),
(22, 'Sửa', 'update', '', 20, 'chuyennganh'),
(23, 'Xóa', 'delete', '', 20, 'chuyennganh'),
(24, 'Công tác nghiên cứu khoa học', '', '', NULL, 'congtacnghiencuukh'),
(25, 'Xem', 'view', '', 24, 'congtacnghiencuukh'),
(26, 'Sửa', 'update', '', 24, 'congtacnghiencuukh'),
(27, 'Xóa', 'delete', '', 24, 'congtacnghiencuukh'),
(28, 'Download', 'download', '', 24, 'congtacnghiencuukh'),
(33, 'Đáp án', '', '', NULL, 'dapan'),
(34, 'Xem', 'view', '', 33, 'dapan'),
(35, 'Sửa', 'update', '', 33, 'dapan'),
(36, 'Xóa', 'delete', '', 33, 'dapan'),
(37, 'Download', 'download', '', 33, 'dapan'),
(42, 'Đề bài tập lớn', '', '', NULL, 'debaitaplon'),
(43, 'Xem', 'view', '', 42, 'debaitaplon'),
(44, 'Sửa', 'update', '', 42, 'debaitaplon'),
(45, 'Xóa', 'delete', '', 42, 'debaitaplon'),
(46, 'Download', 'download', '', 42, 'debaitaplon'),
(47, 'Đề cương học phần', '', '', NULL, 'decuonghocphan'),
(48, 'Xem', 'view', '', 47, 'decuonghocphan'),
(49, 'Sửa', 'update', '', 47, 'decuonghocphan'),
(50, 'Xóa', 'delete', '', 47, 'decuonghocphan'),
(51, 'Download', 'download', '', 47, 'decuonghocphan'),
(52, 'Đề cương ôn tập', '', '', NULL, 'decuongontap'),
(53, 'Xem', 'view', '', 52, 'decuongontap'),
(54, 'Sửa', 'update', '', 52, 'decuongontap'),
(55, 'Xóa', 'delete', '', 52, 'decuongontap'),
(56, 'Download', 'download', '', 52, 'decuongontap'),
(57, 'Giảng viên', '', '', NULL, 'giangvien'),
(58, 'Xem', 'view', '', 57, 'giangvien'),
(59, 'Sửa', 'update', '', 57, 'giangvien'),
(60, 'Xóa', 'delete', '', 57, 'giangvien'),
(65, 'Hình thức đào tạo', '', '', NULL, 'hinhthucdaotao'),
(66, 'Xem', 'view', '', 65, 'hinhthucdaotao'),
(67, 'Sửa', 'update', '', 65, 'hinhthucdaotao'),
(68, 'Xóa', 'delete', '', 65, 'hinhthucdaotao'),
(69, 'Học kỳ', '', '', NULL, 'hocky'),
(70, 'Xem', 'view', '', 69, 'hocky'),
(71, 'Sửa', 'update', '', 69, 'hocky'),
(72, 'Xóa', 'delete', '', 69, 'hocky'),
(73, 'Hợp đồng giảng dạy', '', '', NULL, 'hopdonggiangday'),
(74, 'Xem', 'view', '', 73, 'hopdonggiangday'),
(75, 'Sửa', 'update', '', 73, 'hopdonggiangday'),
(76, 'Xóa', 'delete', '', 73, 'hopdonggiangday'),
(77, 'Download', 'download', '', 73, 'hopdonggiangday'),
(78, 'Kết quả đánh giá học phần', '', '', NULL, 'ketquadanhgiahocphan'),
(79, 'Xem', 'view', '', 78, 'ketquadanhgiahocphan'),
(80, 'Sửa', 'update', '', 78, 'ketquadanhgiahocphan'),
(81, 'Xóa', 'delete', '', 78, 'ketquadanhgiahocphan'),
(82, 'Download', 'download', '', 78, 'ketquadanhgiahocphan'),
(83, 'Khen thưởng', '', '', NULL, 'khenthuong'),
(84, 'Xem', 'view', '', 83, 'khenthuong'),
(85, 'Sửa', 'update', '', 83, 'khenthuong'),
(86, 'Xóa', 'delete', '', 83, 'khenthuong'),
(87, 'Download', 'download', '', 83, 'khenthuong'),
(88, 'Khoa', '', '', NULL, 'khoa'),
(89, 'Xem', 'view', '', 88, 'khoa'),
(90, 'Sửa', 'update', '', 88, 'khoa'),
(91, 'Xóa', 'delete', '', 88, 'khoa'),
(92, 'Kỉ luật', '', '', NULL, 'kiluat'),
(93, 'Xem', 'view', '', 92, 'kiluat'),
(94, 'Sửa', 'update', '', 92, 'kiluat'),
(95, 'Xóa', 'delete', '', 92, 'kiluat'),
(96, 'Download', 'download', '', 92, 'kiluat'),
(97, 'Lịch giảng dạy', '', '', NULL, 'lichgiangday'),
(98, 'Xem', 'view', '', 97, 'lichgiangday'),
(99, 'Sửa', 'update', '', 97, 'lichgiangday'),
(100, 'Xóa', 'delete', '', 97, 'lichgiangday'),
(101, 'Download', 'download', '', 97, 'lichgiangday'),
(102, 'Lịch thi', '', '', NULL, 'lichthi'),
(103, 'Xem', 'view', '', 102, 'lichthi'),
(104, 'Sửa', 'update', '', 102, 'lichthi'),
(105, 'Xóa', 'delete', '', 102, 'lichthi'),
(106, 'Download', 'download', '', 102, 'lichthi'),
(107, 'Loại tài liệu', '', '', NULL, 'loaitailieu'),
(108, 'Xem', 'view', '', 107, 'loaitailieu'),
(109, 'Sửa', 'update', '', 107, 'loaitailieu'),
(110, 'Xóa', 'delete', '', 107, 'loaitailieu'),
(111, 'Môn học', '', '', NULL, 'monhoc'),
(112, 'Xem', 'view', '', 111, 'monhoc'),
(113, 'Sửa', 'update', '', 111, 'monhoc'),
(114, 'Xóa', 'delete', '', 111, 'monhoc'),
(115, 'Năm học', '', '', NULL, 'namhoc'),
(116, 'Xem', 'view', '', 115, 'namhoc'),
(117, 'Sửa', 'update', '', 115, 'namhoc'),
(118, 'Xóa', 'delete', '', 115, 'namhoc'),
(119, 'Ngân hàng đề thi', '', '', NULL, 'nganhangdethi'),
(120, 'Xem', 'view', '', 119, 'nganhangdethi'),
(121, 'Sửa', 'update', '', 119, 'nganhangdethi'),
(122, 'Xóa', 'delete', '', 119, 'nganhangdethi'),
(123, 'Download', 'download', '', 119, 'nganhangdethi'),
(124, 'Nhdtda', '', '', NULL, 'nhdtda'),
(125, 'Xem', 'view', '', 124, 'nhdtda'),
(126, 'Sửa', 'update', '', 124, 'nhdtda'),
(127, 'Xóa', 'delete', '', 124, 'nhdtda'),
(128, 'Phân công coi thi', '', '', NULL, 'phancongcoithi'),
(129, 'Xem', 'view', '', 128, 'phancongcoithi'),
(130, 'Sửa', '', '', 128, 'phancongcoithi'),
(131, 'Xóa', 'delete', '', 128, 'phancongcoithi'),
(132, 'Download', 'download', '', 128, 'phancongcoithi'),
(133, 'Quy định quy chế đào tạo', '', '', NULL, 'quydinhquychedaotao'),
(134, 'Xem', 'view', '', 133, 'quydinhquychedaotao'),
(135, 'Sửa', 'update', '', 133, 'quydinhquychedaotao'),
(136, 'Xóa', 'delete', '', 133, 'quydinhquychedaotao'),
(137, 'Download', 'download', '', 133, 'quydinhquychedaotao'),
(138, 'Tài liệu bộ môn', '', '', NULL, 'tailieubomon'),
(139, 'Xem', 'view', '', 138, 'tailieubomon'),
(140, 'Sửa', 'update', '', 138, 'tailieubomon'),
(141, 'Xóa', 'delete', '', 138, 'tailieubomon'),
(142, 'Download', 'download', '', 138, 'tailieubomon'),
(143, 'Tdktkl', '', '', NULL, 'tdktkl'),
(144, 'Xem', 'view', '', 143, 'tdktkl'),
(145, 'Sửa', 'update', '', 143, 'tdktkl'),
(146, 'Xóa', 'delete', '', 143, 'tdktkl'),
(147, 'Thi đua', '', '', NULL, 'thidua'),
(148, 'Xem', 'view', '', 147, 'thidua'),
(149, 'Sửa', 'update', '', 147, 'thidua'),
(150, 'Xóa', 'delete', '', 147, 'thidua'),
(151, 'Download', 'download', '', 147, 'thidua'),
(152, 'Thời khóa biểu', '', '', NULL, 'thoikhoabieu'),
(153, 'Xem', 'view', '', 152, 'thoikhoabieu'),
(154, 'Sửa', 'update', '', 152, 'thoikhoabieu'),
(155, 'Xóa', 'delete', '', 152, 'thoikhoabieu'),
(156, 'Download', 'download', '', 152, 'thoikhoabieu'),
(157, 'Trình độ', '', '', NULL, 'trinhdo'),
(158, 'Xem', 'view', '', 157, 'trinhdo'),
(159, 'Sửa', 'update', '', 157, 'trinhdo'),
(160, 'Xóa', 'delete', '', 157, 'trinhdo'),
(161, 'Tài khoản', '', '', NULL, 'user'),
(162, 'Xem', 'view', '', 161, 'user'),
(163, 'Sửa', 'update', '', 161, 'user'),
(164, 'Xóa', 'delete', '', 161, 'user'),
(165, 'Thêm mới', 'create', '', 1, 'bangphanconggiangday'),
(166, 'Thêm mới', 'create', '', 5, 'bangtheodoiketquahoctap'),
(167, 'Thêm mới', 'create', '', 11, 'bomon'),
(168, 'Thêm mới', 'create', '', 15, 'chuongtrinhdaotao'),
(169, 'Thêm mới', 'create', '', 20, 'chuyennganh'),
(170, 'Thêm mới', 'create', '', 24, 'congtacnghiencuukh'),
(172, 'Thêm mới', 'create', '', 33, 'dapan'),
(174, 'Thêm mới', 'create', '', 42, 'debaitaplon'),
(175, 'Thêm mới', 'create', '', 47, 'decuonghocphan'),
(176, 'Thêm mới', 'create', '', 52, 'decuongontap'),
(177, 'Thêm mới', 'create', '', 57, 'giangvien'),
(179, 'Thêm mới', 'create', '', 65, 'hinhthucdaotao'),
(180, 'Thêm mới', 'create', '', 69, 'hocky'),
(181, 'Thêm mới', 'create', '', 73, 'hopdonggiangday'),
(182, 'Thêm mới', 'create', '', 78, 'ketquadanhgiahocphan'),
(183, 'Thêm mới', 'create', '', 83, 'khenthuong'),
(184, 'Thêm mới', 'create', '', 88, 'khoa'),
(185, 'Thêm mới', 'create', '', 92, 'kiluat'),
(186, 'Thêm mới', 'create', '', 97, 'lichgiangday'),
(187, 'Thêm mới', 'create', '', 97, 'lichgiangday'),
(188, 'Thêm mới', 'create', '', 102, 'lichthi'),
(189, 'Thêm mới', 'create', '', 107, 'loaitailieu'),
(190, 'Thêm mới', 'create', '', 111, 'monhoc'),
(191, 'Thêm mới', 'create', '', 115, 'namhoc'),
(192, 'Thêm mới', 'create', '', 119, 'nganhangdethi'),
(193, 'Thêm mới', 'create', '', 124, 'nhdtda'),
(194, 'Thêm mới', 'create', '', 128, 'phancongcoithi'),
(195, 'Thêm mới', 'create', '', 128, 'phancongcoithi'),
(196, 'Thêm mới', 'create', '', 133, 'quydinhquychedaotao'),
(197, 'Thêm mới', 'create', '', 138, 'tailieubomon'),
(198, 'Thêm mới', 'create', '', 143, 'tdktkl'),
(199, 'Thêm mới', 'create', '', 147, 'thidua'),
(200, 'Thêm mới', 'create', '', 152, 'thoikhoabieu'),
(201, 'Thêm mới', 'create', '', 157, 'trinhdo'),
(202, 'Thêm mới', 'create', '', 161, 'user'),
(203, 'Phân quyền', '', '', NULL, 'authitem'),
(204, 'Thêm mới', 'create', '', 203, 'authitem'),
(205, 'Xem', 'view', '', 203, 'authitem'),
(206, 'Sửa', 'update', '', 203, 'authitem'),
(207, 'Xóa', 'delete', '', 203, 'authitem'),
(214, 'Backup', '', '', NULL, 'backuprestore'),
(215, 'Thêm mới', 'create', '', 214, 'backuprestore'),
(216, 'Clean', 'clean', '', 214, 'backuprestore'),
(217, 'Xóa', 'delete', '', 214, 'backuprestore'),
(218, 'Download', 'download', '', 214, 'backuprestore'),
(219, 'Download', 'download', '', 214, 'backuprestore'),
(220, 'Syncdown', 'syncdown', '', 214, 'backuprestore'),
(221, 'Restore', 'restore', '', 214, 'backuprestore'),
(222, 'Upload', 'upload', '', 214, 'backuprestore'),
(223, 'Tạo administrator', 'createadmin', '', 161, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `iso_auth_item`
--

CREATE TABLE IF NOT EXISTS `iso_auth_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_auth_item_roles1_idx` (`roles_id`),
  KEY `fk_auth_item_auth1_idx` (`auth_id`),
  KEY `fk_iso_auth_item_iso_khoa1_idx` (`khoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1503 ;

--
-- Contenu de la table `iso_auth_item`
--

INSERT INTO `iso_auth_item` (`id`, `roles_id`, `auth_id`, `khoa_id`) VALUES
(912, 2, 12, 2),
(913, 2, 13, 2),
(914, 2, 14, 2),
(915, 2, 16, 2),
(916, 2, 17, 2),
(917, 2, 18, 2),
(918, 2, 19, 2),
(958, 4, 12, 2),
(959, 4, 13, 2),
(960, 4, 14, 2),
(961, 4, 16, 2),
(962, 4, 17, 2),
(963, 4, 18, 2),
(964, 4, 19, 2),
(965, 4, 48, 2),
(966, 4, 49, 2),
(967, 4, 50, 2),
(968, 4, 51, 2),
(969, 4, 53, 2),
(970, 4, 54, 2),
(971, 4, 55, 2),
(972, 4, 56, 2),
(1314, 2, 2, 1),
(1315, 2, 3, 1),
(1316, 2, 4, 1),
(1317, 2, 6, 1),
(1318, 2, 165, 1),
(1319, 2, 7, 1),
(1320, 2, 8, 1),
(1321, 2, 9, 1),
(1322, 2, 10, 1),
(1323, 2, 166, 1),
(1337, 1, 2, NULL),
(1338, 1, 3, NULL),
(1339, 1, 4, NULL),
(1340, 1, 6, NULL),
(1341, 1, 165, NULL),
(1342, 1, 7, NULL),
(1343, 1, 8, NULL),
(1344, 1, 9, NULL),
(1345, 1, 10, NULL),
(1346, 1, 166, NULL),
(1347, 1, 12, NULL),
(1348, 1, 13, NULL),
(1349, 1, 14, NULL),
(1350, 1, 167, NULL),
(1351, 1, 16, NULL),
(1352, 1, 17, NULL),
(1353, 1, 18, NULL),
(1354, 1, 19, NULL),
(1355, 1, 168, NULL),
(1356, 1, 21, NULL),
(1357, 1, 22, NULL),
(1358, 1, 23, NULL),
(1359, 1, 169, NULL),
(1360, 1, 25, NULL),
(1361, 1, 26, NULL),
(1362, 1, 27, NULL),
(1363, 1, 28, NULL),
(1364, 1, 170, NULL),
(1365, 1, 34, NULL),
(1366, 1, 35, NULL),
(1367, 1, 36, NULL),
(1368, 1, 37, NULL),
(1369, 1, 172, NULL),
(1370, 1, 43, NULL),
(1371, 1, 44, NULL),
(1372, 1, 45, NULL),
(1373, 1, 46, NULL),
(1374, 1, 174, NULL),
(1375, 1, 48, NULL),
(1376, 1, 49, NULL),
(1377, 1, 50, NULL),
(1378, 1, 51, NULL),
(1379, 1, 175, NULL),
(1380, 1, 53, NULL),
(1381, 1, 54, NULL),
(1382, 1, 55, NULL),
(1383, 1, 56, NULL),
(1384, 1, 176, NULL),
(1385, 1, 58, NULL),
(1386, 1, 59, NULL),
(1387, 1, 60, NULL),
(1388, 1, 177, NULL),
(1389, 1, 66, NULL),
(1390, 1, 67, NULL),
(1391, 1, 68, NULL),
(1392, 1, 179, NULL),
(1393, 1, 70, NULL),
(1394, 1, 71, NULL),
(1395, 1, 72, NULL),
(1396, 1, 180, NULL),
(1397, 1, 74, NULL),
(1398, 1, 75, NULL),
(1399, 1, 76, NULL),
(1400, 1, 77, NULL),
(1401, 1, 181, NULL),
(1402, 1, 79, NULL),
(1403, 1, 80, NULL),
(1404, 1, 81, NULL),
(1405, 1, 82, NULL),
(1406, 1, 182, NULL),
(1407, 1, 84, NULL),
(1408, 1, 85, NULL),
(1409, 1, 86, NULL),
(1410, 1, 87, NULL),
(1411, 1, 183, NULL),
(1412, 1, 89, NULL),
(1413, 1, 90, NULL),
(1414, 1, 91, NULL),
(1415, 1, 184, NULL),
(1416, 1, 93, NULL),
(1417, 1, 94, NULL),
(1418, 1, 95, NULL),
(1419, 1, 96, NULL),
(1420, 1, 185, NULL),
(1421, 1, 98, NULL),
(1422, 1, 99, NULL),
(1423, 1, 100, NULL),
(1424, 1, 101, NULL),
(1425, 1, 186, NULL),
(1426, 1, 187, NULL),
(1427, 1, 103, NULL),
(1428, 1, 104, NULL),
(1429, 1, 105, NULL),
(1430, 1, 106, NULL),
(1431, 1, 188, NULL),
(1432, 1, 108, NULL),
(1433, 1, 109, NULL),
(1434, 1, 110, NULL),
(1435, 1, 189, NULL),
(1436, 1, 112, NULL),
(1437, 1, 113, NULL),
(1438, 1, 114, NULL),
(1439, 1, 190, NULL),
(1440, 1, 116, NULL),
(1441, 1, 117, NULL),
(1442, 1, 118, NULL),
(1443, 1, 191, NULL),
(1444, 1, 120, NULL),
(1445, 1, 121, NULL),
(1446, 1, 122, NULL),
(1447, 1, 123, NULL),
(1448, 1, 192, NULL),
(1449, 1, 125, NULL),
(1450, 1, 126, NULL),
(1451, 1, 127, NULL),
(1452, 1, 193, NULL),
(1453, 1, 129, NULL),
(1454, 1, 130, NULL),
(1455, 1, 131, NULL),
(1456, 1, 132, NULL),
(1457, 1, 194, NULL),
(1458, 1, 195, NULL),
(1459, 1, 134, NULL),
(1460, 1, 135, NULL),
(1461, 1, 136, NULL),
(1462, 1, 137, NULL),
(1463, 1, 196, NULL),
(1464, 1, 139, NULL),
(1465, 1, 140, NULL),
(1466, 1, 141, NULL),
(1467, 1, 142, NULL),
(1468, 1, 197, NULL),
(1469, 1, 144, NULL),
(1470, 1, 145, NULL),
(1471, 1, 146, NULL),
(1472, 1, 198, NULL),
(1473, 1, 148, NULL),
(1474, 1, 149, NULL),
(1475, 1, 150, NULL),
(1476, 1, 151, NULL),
(1477, 1, 199, NULL),
(1478, 1, 153, NULL),
(1479, 1, 154, NULL),
(1480, 1, 155, NULL),
(1481, 1, 156, NULL),
(1482, 1, 200, NULL),
(1483, 1, 158, NULL),
(1484, 1, 159, NULL),
(1485, 1, 160, NULL),
(1486, 1, 201, NULL),
(1487, 1, 162, NULL),
(1488, 1, 163, NULL),
(1489, 1, 164, NULL),
(1490, 1, 202, NULL),
(1491, 1, 204, NULL),
(1492, 1, 205, NULL),
(1493, 1, 206, NULL),
(1494, 1, 207, NULL),
(1495, 1, 215, NULL),
(1496, 1, 216, NULL),
(1497, 1, 217, NULL),
(1498, 1, 218, NULL),
(1499, 1, 219, NULL),
(1500, 1, 220, NULL),
(1501, 1, 221, NULL),
(1502, 1, 222, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `iso_bangphanconggiangday`
--

CREATE TABLE IF NOT EXISTS `iso_bangphanconggiangday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ngayky` date NOT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_bangphanconggiangday_iso_bomon1_idx` (`bomon_id`),
  KEY `fk_iso_bangphanconggiangday_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_bangphanconggiangday_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_bangphanconggiangday`
--

INSERT INTO `iso_bangphanconggiangday` (`id`, `name`, `created_at`, `updated_at`, `ngayky`, `filedinhkem`, `bomon_id`, `hocky_id`, `namhoc_id`, `HDGD_TKB_BPCGD__id`) VALUES
(1, 'BẢng phân công giảng dạy', '2017-10-08 02:09:46', '2017-10-11 06:51:10', '2017-10-23', '15074285861672913718834668385948541147387786530691724n.jpg', 1, 1, 1, 1),
(2, 'HIHI', '2017-10-11 03:00:32', '2017-10-11 03:01:28', '2017-10-19', '1507690832lets-fight-ghost-kim-so-hyun.png', 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_bangtheodoiketquahoctap`
--

CREATE TABLE IF NOT EXISTS `iso_bangtheodoiketquahoctap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_trinhdo1_idx` (`trinhdo_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_giangvien1_idx` (`giangvien_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_bangtheodoiketquahoctap_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_bangtheodoiketquahoctap`
--

INSERT INTO `iso_bangtheodoiketquahoctap` (`id`, `name`, `created_at`, `updated_at`, `nhomhocphan`, `filedinhkem`, `giangvien_id`, `hinhthucdaotao_id`, `trinhdo_id`, `monhoc_id`, `hocky_id`, `namhoc_id`, `loaitailieu_id`) VALUES
(1, 'Bảng theo dõi kết quả học tập ', '2017-10-07 14:06:13', '2017-10-07 14:08:41', 'N01', '1507385173neonflames.png', 1, 1, 1, 1, 1, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `iso_bomon`
--

CREATE TABLE IF NOT EXISTS `iso_bomon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbomon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenbomon_UNIQUE` (`tenbomon`),
  UNIQUE KEY `mabomon_UNIQUE` (`mabomon`),
  KEY `fk_iso_bomon_iso_khoa_idx` (`khoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_bomon`
--

INSERT INTO `iso_bomon` (`id`, `tenbomon`, `mabomon`, `khoa_id`) VALUES
(1, 'Hệ thống thông tin', 'HTTT', 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_chuongtrinhdaotao`
--

CREATE TABLE IF NOT EXISTS `iso_chuongtrinhdaotao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `CTDT_DCHP_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_chuongtrinhdaotao_iso_trinhdo1_idx` (`trinhdo_id`),
  KEY `fk_iso_chuongtrinhdaotao_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  KEY `fk_iso_chuongtrinhdaotao_iso_khoa1_idx` (`khoa_id`),
  KEY `fk_iso_chuongtrinhdaotao_iso_CTDT_DCHP1_idx` (`CTDT_DCHP_id`),
  KEY `fk_iso_chuongtrinhdaotao_iso_chuyennganh1_idx` (`chuyennganh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_chuongtrinhdaotao`
--

INSERT INTO `iso_chuongtrinhdaotao` (`id`, `name`, `ngaybanhanh`, `cosodaotao`, `quyetdinhso`, `created_at`, `updated_at`, `filedinhkem`, `trinhdo_id`, `hinhthucdaotao_id`, `khoa_id`, `chuyennganh_id`, `CTDT_DCHP_id`) VALUES
(1, 'Chương trình đào tạo', '2017-10-11', 'AVC', '121321', '2017-10-08 01:42:47', '2017-10-11 03:56:23', '15074269671640668918758356726913047487074367668543626n.jpg', 1, 1, 1, 2, 1),
(2, 'Chương trình đào tạo', '1914-05-27', 'AVC', '121321', '2017-10-08 01:42:47', '2017-11-11 08:23:30', '15074270381672913718834668385948541147387786530691724n.jpg', 1, 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_chuyennganh`
--

CREATE TABLE IF NOT EXISTS `iso_chuyennganh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_chuyennganh_iso_khoa1_idx` (`khoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_chuyennganh`
--

INSERT INTO `iso_chuyennganh` (`id`, `ma`, `name`, `khoa_id`) VALUES
(1, 'TTM', 'Truyền thông mạng', 1),
(2, 'KPM', 'Kỹ thuật phần mềm', 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_congtacnghiencuukh`
--

CREATE TABLE IF NOT EXISTS `iso_congtacnghiencuukh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_congtacnghiencuuKH_iso_loaitailieu1_idx` (`loaitailieu_id`),
  KEY `fk_iso_congtacnghiencuuKH_iso_giangvien1_idx` (`giangvien_id`),
  KEY `fk_iso_congtacnghiencuuKH_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_congtacnghiencuuKH_iso_khoa1_idx` (`khoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_congtacnghiencuukh`
--

INSERT INTO `iso_congtacnghiencuukh` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `loaitailieu_id`, `giangvien_id`, `namhoc_id`, `khoa_id`) VALUES
(1, 'Nghiên cứu tai nghe thông minh', '2017-10-08 01:14:02', '2017-10-08 01:14:17', '1507425242gtd-wallpaper.jpg', 11, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_ctdt_dchp`
--

CREATE TABLE IF NOT EXISTS `iso_ctdt_dchp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_CTDT_DCHP_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_ctdt_dchp`
--

INSERT INTO `iso_ctdt_dchp` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Chương trình đào tạo', 2),
(2, 'Đề cương học phần', 2);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `iso_danhsachvaitro`
--
CREATE TABLE IF NOT EXISTS `iso_danhsachvaitro` (
`vaitro` varchar(255)
,`idvaitro` int(11)
,`idkhoa` int(11)
,`khoa` varchar(200)
);
-- --------------------------------------------------------

--
-- Structure de la table `iso_dapan`
--

CREATE TABLE IF NOT EXISTS `iso_dapan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nganhangdethi_id` int(11) NOT NULL,
  `NHDT_DA_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_dapan_iso_nganhangdethi1_idx` (`nganhangdethi_id`),
  KEY `fk_iso_dapan_iso_NHDT_DA1_idx` (`NHDT_DA_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_dapan`
--

INSERT INTO `iso_dapan` (`id`, `name`, `filedinhkem`, `created_at`, `updated_at`, `nganhangdethi_id`, `NHDT_DA_id`) VALUES
(2, 'Đáp án môn ccccccccc', '1507437200001.png', '2017-10-08 04:32:59', '2017-10-08 04:33:20', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `iso_dbtl_dcot_lt_pcct`
--

CREATE TABLE IF NOT EXISTS `iso_dbtl_dcot_lt_pcct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `iso_dbtl_dcot_lt_pcct`
--

INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Đề bài tập lớn', 7),
(2, 'Đề cương ôn tập', 7),
(3, 'Lịch thi', 7),
(4, 'Phân công coi thi', 7);

-- --------------------------------------------------------

--
-- Structure de la table `iso_debaitaplon`
--

CREATE TABLE IF NOT EXISTS `iso_debaitaplon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_debaitaplon_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_debaitaplon_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_debaitaplon_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `iso_debaitaplon`
--

INSERT INTO `iso_debaitaplon` (`id`, `name`, `nhomhocphan`, `created_at`, `updated_at`, `filedinhkem`, `hocky_id`, `namhoc_id`, `monhoc_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Hahahaha', 'N01', '2017-10-08 02:49:58', '2017-10-08 02:50:07', 'nofile.jpg', 1, 1, 1, 1),
(3, 'Đề bài tập lớn môn Lập trình C', 'N02', '2017-10-11 04:18:29', '2017-10-11 04:18:40', '1507695509untitled.jpg', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_decuonghocphan`
--

CREATE TABLE IF NOT EXISTS `iso_decuonghocphan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `CTDT_DCHP_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_decuongmonhoc_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_decuonghocphan_iso_CTDT_DCHP1_idx` (`CTDT_DCHP_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `iso_decuonghocphan`
--

INSERT INTO `iso_decuonghocphan` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `monhoc_id`, `CTDT_DCHP_id`) VALUES
(2, 'Đề cương', '2017-10-08 01:55:35', '2017-10-08 01:55:48', '15074277481672913718834668385948541147387786530691724n.jpg', 1, 2),
(3, 'Siêu đề cương', '2017-10-08 01:56:03', NULL, 'nofile.jpg', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `iso_decuongontap`
--

CREATE TABLE IF NOT EXISTS `iso_decuongontap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_decuongontap_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_decuongontap_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_decuongontap_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_decuongontap`
--

INSERT INTO `iso_decuongontap` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `monhoc_id`, `namhoc_id`, `hocky_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Đề cương ôn tập ABC', '2017-10-08 03:06:47', '2017-10-11 05:45:38', 'nofile.jpg', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `iso_giangvien`
--

CREATE TABLE IF NOT EXISTS `iso_giangvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magiangvien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tengiangvien` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `magiangvien_UNIQUE` (`magiangvien`),
  KEY `fk_iso_giangvien_iso_bomon1_idx` (`bomon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_giangvien`
--

INSERT INTO `iso_giangvien` (`id`, `magiangvien`, `tengiangvien`, `bomon_id`) VALUES
(1, 'GV1', 'Phạm Văn Huy', 1),
(2, 'GV2', 'Nguyễn Thị Trang', 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_hdgd_tkb_bpcgd`
--

CREATE TABLE IF NOT EXISTS `iso_hdgd_tkb_bpcgd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `iso_hdgd_tkb_bpcgd`
--

INSERT INTO `iso_hdgd_tkb_bpcgd` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Bảng phân công giảng dạy', 3),
(2, 'Hợp đồng giảng dạy', 3),
(3, 'Thời khóa biểu', 3);

-- --------------------------------------------------------

--
-- Structure de la table `iso_hinhthucdaotao`
--

CREATE TABLE IF NOT EXISTS `iso_hinhthucdaotao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_hinhthucdaotao`
--

INSERT INTO `iso_hinhthucdaotao` (`id`, `name`) VALUES
(1, 'Chính quy');

-- --------------------------------------------------------

--
-- Structure de la table `iso_hocky`
--

CREATE TABLE IF NOT EXISTS `iso_hocky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `iso_hocky`
--

INSERT INTO `iso_hocky` (`id`, `name`) VALUES
(1, 'Học kỳ IA'),
(2, 'Học kỳ IB'),
(3, 'Học kỳ II');

-- --------------------------------------------------------

--
-- Structure de la table `iso_hopdonggiangday`
--

CREATE TABLE IF NOT EXISTS `iso_hopdonggiangday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_hopdonggiangday_iso_bomon1_idx` (`bomon_id`),
  KEY `fk_iso_hopdonggiangday_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_hopdonggiangday`
--

INSERT INTO `iso_hopdonggiangday` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `bomon_id`, `namhoc_id`, `HDGD_TKB_BPCGD__id`) VALUES
(2, 'àasdfasdfasf', '2017-10-08 02:21:35', '2017-10-08 02:21:56', 'nofile.jpg', 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `iso_ketquadanhgiahocphan`
--

CREATE TABLE IF NOT EXISTS `iso_ketquadanhgiahocphan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_ketquadanhgiahocphan_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_ketquadanhgiahocphan_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_ketquadanhgiahocphan_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_ketquadanhgiahocphan`
--

INSERT INTO `iso_ketquadanhgiahocphan` (`id`, `name`, `created_at`, `updated_at`, `ngaythi`, `canbocoithi`, `canbochamthi`, `nhomhocphan`, `filedinhkem`, `hocky_id`, `namhoc_id`, `monhoc_id`, `loaitailieu_id`) VALUES
(1, 'Kết quả đánh giá học phần', '2017-10-07 14:25:48', '2017-10-11 06:02:13', '2017-10-11', 'Phạm Văn Huy', 'Nguyễn Thị Trang', 'N01', '15073865731506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1, 6);

-- --------------------------------------------------------

--
-- Structure de la table `iso_khenthuong`
--

CREATE TABLE IF NOT EXISTS `iso_khenthuong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_khenthuong_iso_giangvien1_idx` (`giangvien_id`),
  KEY `fk_iso_khenthuong_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_khenthuong_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_khenthuong`
--

INSERT INTO `iso_khenthuong` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `giangvien_id`, `namhoc_id`, `TD_KT_KL_id`) VALUES
(2, 'Khen thưởng', '2017-10-08 03:51:33', '2017-10-08 03:51:39', '15074346931506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `iso_khoa`
--

CREATE TABLE IF NOT EXISTS `iso_khoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `makhoa_UNIQUE` (`makhoa`),
  UNIQUE KEY `tenkhoa_UNIQUE` (`tenkhoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_khoa`
--

INSERT INTO `iso_khoa` (`id`, `makhoa`, `tenkhoa`) VALUES
(1, 'CNT', 'Công nghệ thông tin'),
(2, 'KT', 'Kinh tế');

-- --------------------------------------------------------

--
-- Structure de la table `iso_kiluat`
--

CREATE TABLE IF NOT EXISTS `iso_kiluat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_khenthuong_iso_giangvien1_idx` (`giangvien_id`),
  KEY `fk_iso_khenthuong_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_kiluat_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_kiluat`
--

INSERT INTO `iso_kiluat` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `giangvien_id`, `namhoc_id`, `TD_KT_KL_id`) VALUES
(2, 'Kỉ luật ', '2017-10-08 04:11:00', '2017-10-08 04:11:08', '15074358601506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `iso_lichgiangday`
--

CREATE TABLE IF NOT EXISTS `iso_lichgiangday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhomhocphan` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `giangvien_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_lichgiangday_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_lichgiangday_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_lichgiangday_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_lichgiangday_iso_giangvien1_idx` (`giangvien_id`),
  KEY `fk_iso_lichgiangday_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_lichgiangday`
--

INSERT INTO `iso_lichgiangday` (`id`, `name`, `nhomhocphan`, `filedinhkem`, `created_at`, `updated_at`, `monhoc_id`, `hocky_id`, `namhoc_id`, `giangvien_id`, `loaitailieu_id`) VALUES
(1, 'Lịch giảng dạy môn PTTKHT', 'N01', '1507383829neonflames.png', '2017-10-07 13:43:49', '2017-10-11 14:41:19', 1, 1, 1, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `iso_lichthi`
--

CREATE TABLE IF NOT EXISTS `iso_lichthi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_lichthi_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  KEY `fk_iso_lichthi_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_lichthi_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_lichthi`
--

INSERT INTO `iso_lichthi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `hinhthucdaotao_id`, `hocky_id`, `namhoc_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Lịch thi', '2017-10-08 03:17:13', '2017-10-08 03:17:21', 'nofile.jpg', 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `iso_loaitailieu`
--

CREATE TABLE IF NOT EXISTS `iso_loaitailieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `iso_loaitailieu`
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
-- Structure de la table `iso_monhoc`
--

CREATE TABLE IF NOT EXISTS `iso_monhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmonhoc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `thuchanh` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL,
  `baitaplon` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_monhoc_iso_bomon1_idx` (`bomon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_monhoc`
--

INSERT INTO `iso_monhoc` (`id`, `tenmonhoc`, `mamonhoc`, `sotinchi`, `bomon_id`, `thuchanh`, `baitaplon`) VALUES
(1, 'Phân tích thiết kế hệ thống', 'MH1', 3, 1, 'khong', 'co');

-- --------------------------------------------------------

--
-- Structure de la table `iso_namhoc`
--

CREATE TABLE IF NOT EXISTS `iso_namhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `iso_namhoc`
--

INSERT INTO `iso_namhoc` (`id`, `name`) VALUES
(1, '2017-2018'),
(2, '2018-2019'),
(4, '2019-2020'),
(5, '2020-2021');

-- --------------------------------------------------------

--
-- Structure de la table `iso_nganhangdethi`
--

CREATE TABLE IF NOT EXISTS `iso_nganhangdethi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `monhoc_id` int(11) NOT NULL,
  `NHDT_DA_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_nganhangdethi_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_nganhangdethi_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_nganhangdethi_iso_trinhdo1_idx` (`trinhdo_id`),
  KEY `fk_iso_nganhangdethi_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  KEY `fk_iso_nganhangdethi_iso_monhoc1_idx` (`monhoc_id`),
  KEY `fk_iso_nganhangdethi_iso_NHDT_DA1_idx` (`NHDT_DA_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_nganhangdethi`
--

INSERT INTO `iso_nganhangdethi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `namhoc_id`, `hocky_id`, `trinhdo_id`, `hinhthucdaotao_id`, `monhoc_id`, `NHDT_DA_id`) VALUES
(2, 'Ngân hàng đề thi', '2017-10-08 04:22:16', '2017-10-08 04:22:41', '15074365611506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_nhdt_da`
--

CREATE TABLE IF NOT EXISTS `iso_nhdt_da` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_NHDT_DA_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_nhdt_da`
--

INSERT INTO `iso_nhdt_da` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Ngân hàng đề thi', 9),
(2, 'Đáp án', 9);

-- --------------------------------------------------------

--
-- Structure de la table `iso_phancongcoithi`
--

CREATE TABLE IF NOT EXISTS `iso_phancongcoithi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `DBTL_DCOT_LT_PCCT_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_phancongcoithi_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_phancongcoithi_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_phancongcoithi_iso_bomon1_idx` (`bomon_id`),
  KEY `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_phancongcoithi`
--

INSERT INTO `iso_phancongcoithi` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `hocky_id`, `namhoc_id`, `bomon_id`, `DBTL_DCOT_LT_PCCT_id`) VALUES
(2, 'Phân công coi thi', '2017-10-08 03:28:24', '2017-10-08 03:28:32', 'nofile.jpg', 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `iso_quydinh_quychedaotao`
--

CREATE TABLE IF NOT EXISTS `iso_quydinh_quychedaotao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybanhanh` date DEFAULT NULL,
  `soquyetdinh` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_quydinh_quychedaotao_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_quydinh_quychedaotao_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `iso_quydinh_quychedaotao`
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
-- Structure de la table `iso_roles`
--

CREATE TABLE IF NOT EXISTS `iso_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `iso_roles`
--

INSERT INTO `iso_roles` (`id`, `name`, `mota`) VALUES
(1, 'Administrator', 'Quản trị toàn bộ hệ thống'),
(2, 'Trưởng khoa', 'Quản lý cao nhất mỗi khoa'),
(3, 'Trưởng bộ môn', ''),
(4, 'Giảng viên', '');

-- --------------------------------------------------------

--
-- Structure de la table `iso_tailieubomon`
--

CREATE TABLE IF NOT EXISTS `iso_tailieubomon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_tailieubomon_iso_loaitailieu1_idx` (`loaitailieu_id`),
  KEY `fk_iso_tailieubomon_iso_bomon1_idx` (`bomon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_tailieubomon`
--

INSERT INTO `iso_tailieubomon` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `loaitailieu_id`, `bomon_id`) VALUES
(1, 'Tài liệu bộ môn', '2017-10-08 01:26:00', '2017-10-08 01:26:20', '15074259801626635618743476961734357908896027983326970n.png', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_td_kt_kl`
--

CREATE TABLE IF NOT EXISTS `iso_td_kt_kl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_TD_KT_KL_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `iso_td_kt_kl`
--

INSERT INTO `iso_td_kt_kl` (`id`, `name`, `loaitailieu_id`) VALUES
(1, 'Thi đua', 8),
(2, 'Khen thưởng ', 8),
(3, 'Kỉ luật', 8);

-- --------------------------------------------------------

--
-- Structure de la table `iso_thidua`
--

CREATE TABLE IF NOT EXISTS `iso_thidua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `TD_KT_KL_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_thidua_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_thidua_iso_bomon1_idx` (`bomon_id`),
  KEY `fk_iso_thidua_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_thidua`
--

INSERT INTO `iso_thidua` (`id`, `name`, `created_at`, `updated_at`, `filedinhkem`, `namhoc_id`, `bomon_id`, `TD_KT_KL_id`) VALUES
(2, 'Thi đua', '2017-10-08 03:37:28', '2017-10-08 03:37:34', 'nofile.jpg', 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_thoikhoabieu`
--

CREATE TABLE IF NOT EXISTS `iso_thoikhoabieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `namhoc_id` int(11) NOT NULL,
  `hocky_id` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HDGD_TKB_BPCGD__id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_thoikhoabieu_iso_namhoc1_idx` (`namhoc_id`),
  KEY `fk_iso_thoikhoabieu_iso_hocky1_idx` (`hocky_id`),
  KEY `fk_iso_thoikhoabieu_iso_bomon1_idx` (`bomon_id`),
  KEY `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_thoikhoabieu`
--

INSERT INTO `iso_thoikhoabieu` (`id`, `name`, `namhoc_id`, `hocky_id`, `bomon_id`, `created_at`, `updated_at`, `filedinhkem`, `HDGD_TKB_BPCGD__id`) VALUES
(2, 'Thời khóa biểu ABC', 1, 1, 1, '2017-10-08 02:34:33', '2017-10-11 06:44:08', '1507430085voice6074.aac', 3);

-- --------------------------------------------------------

--
-- Structure de la table `iso_thongbao_quyetdinh`
--

CREATE TABLE IF NOT EXISTS `iso_thongbao_quyetdinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaycohieuluc` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `filedinhkem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthucdaotao_id` int(11) NOT NULL,
  `trinhdo_id` int(11) NOT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_tailieu_iso_hinhthucdaotao1_idx` (`hinhthucdaotao_id`),
  KEY `fk_iso_tailieu_iso_trinhdo1_idx` (`trinhdo_id`),
  KEY `fk_iso_thongbao_quyetdinh_iso_loaitailieu1_idx` (`loaitailieu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `iso_thongbao_quyetdinh`
--

INSERT INTO `iso_thongbao_quyetdinh` (`id`, `name`, `ngaycohieuluc`, `created_at`, `updated_at`, `filedinhkem`, `hinhthucdaotao_id`, `trinhdo_id`, `loaitailieu_id`) VALUES
(1, 'Thông báo về ngày nghỉ lễ', '2017-10-13', '2017-10-07 15:13:42', '2017-10-11 06:50:51', '15073892221506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `iso_trinhdo`
--

CREATE TABLE IF NOT EXISTS `iso_trinhdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iso_trinhdo`
--

INSERT INTO `iso_trinhdo` (`id`, `name`) VALUES
(1, 'Đại học'),
(2, 'Cao đẳng');

-- --------------------------------------------------------

--
-- Structure de la table `iso_user`
--

CREATE TABLE IF NOT EXISTS `iso_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `role` enum('admin','member') COLLATE utf8_unicode_ci DEFAULT 'member',
  `roles_id` int(11) NOT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `fk_iso_user_iso_roles1_idx` (`roles_id`),
  KEY `fk_iso_user_iso_khoa1_idx` (`khoa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `iso_user`
--

INSERT INTO `iso_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`, `roles_id`, `khoa_id`) VALUES
(1, 'admin', 'J3AlvMg8DjLySC_OVgeJ223A_1859max', '$2y$13$7WYRE9dCiW2qG8t33KzCpe2XYxdyyJpVUsjOtaJL.GmLCeLUdoLD2', NULL, 'admin@ku.com', 10, 0, 0, 'admin', 1, NULL),
(8, 'huycodon', 'rqJx0okMoEnK3DudsPXo6fH3D-MjC0pE', '$2y$13$.6ZW0A0c3U4SzvFe5AIn/.i2utCXQaTFemtC/asL5uAZfmJaOWvKm', 'tWPEj1htuM81t94eFWWmDetfy0EkEova_1510304635', 'huycodon@gmail.com', 10, NULL, NULL, 'member', 2, 2),
(10, 'huyhh', 'uHnbJjr_bOKhFyl1ClarEr_FjBxKOWO4', '$2y$13$CQ/mVCDYErGZur8cePQMYe5P/5gH6wd1PkUxFAUJ/qsb9ZKNscJC6', 'lz2eSX9oUwFQ2A17nOfq6OxUJrmZVHlE_1510304884', 'huyhh@gmail.com', 10, NULL, NULL, 'member', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la vue `iso_danhsachvaitro`
--
DROP TABLE IF EXISTS `iso_danhsachvaitro`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `iso_danhsachvaitro` AS select `iso_roles`.`name` AS `vaitro`,`iso_roles`.`id` AS `idvaitro`,`iso_khoa`.`id` AS `idkhoa`,`iso_khoa`.`tenkhoa` AS `khoa` from ((`iso_auth_item` left join `iso_roles` on((`iso_roles`.`id` = `iso_auth_item`.`roles_id`))) left join `iso_khoa` on((`iso_khoa`.`id` = `iso_auth_item`.`khoa_id`))) group by `idkhoa`,`idvaitro`;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `iso_auth`
--
ALTER TABLE `iso_auth`
  ADD CONSTRAINT `fk_quyen_quyen1` FOREIGN KEY (`parent_id`) REFERENCES `iso_auth` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_auth_item`
--
ALTER TABLE `iso_auth_item`
  ADD CONSTRAINT `fk_auth_item_auth1` FOREIGN KEY (`auth_id`) REFERENCES `iso_auth` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_auth_item_roles1` FOREIGN KEY (`roles_id`) REFERENCES `iso_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_auth_item_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_bangphanconggiangday`
--
ALTER TABLE `iso_bangphanconggiangday`
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_bangphanconggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_bangtheodoiketquahoctap`
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
-- Contraintes pour la table `iso_bomon`
--
ALTER TABLE `iso_bomon`
  ADD CONSTRAINT `fk_iso_bomon_iso_khoa` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_chuongtrinhdaotao`
--
ALTER TABLE `iso_chuongtrinhdaotao`
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_chuyennganh1` FOREIGN KEY (`chuyennganh_id`) REFERENCES `iso_chuyennganh` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_chuyennganh`
--
ALTER TABLE `iso_chuyennganh`
  ADD CONSTRAINT `fk_iso_chuyennganh_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_congtacnghiencuukh`
--
ALTER TABLE `iso_congtacnghiencuukh`
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_ctdt_dchp`
--
ALTER TABLE `iso_ctdt_dchp`
  ADD CONSTRAINT `fk_iso_CTDT_DCHP_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_dapan`
--
ALTER TABLE `iso_dapan`
  ADD CONSTRAINT `fk_iso_dapan_iso_nganhangdethi1` FOREIGN KEY (`nganhangdethi_id`) REFERENCES `iso_nganhangdethi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_dapan_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_dbtl_dcot_lt_pcct`
--
ALTER TABLE `iso_dbtl_dcot_lt_pcct`
  ADD CONSTRAINT `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_debaitaplon`
--
ALTER TABLE `iso_debaitaplon`
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_debaitaplon_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_decuonghocphan`
--
ALTER TABLE `iso_decuonghocphan`
  ADD CONSTRAINT `fk_iso_decuonghocphan_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongmonhoc_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_decuongontap`
--
ALTER TABLE `iso_decuongontap`
  ADD CONSTRAINT `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_decuongontap_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_giangvien`
--
ALTER TABLE `iso_giangvien`
  ADD CONSTRAINT `fk_iso_giangvien_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_hdgd_tkb_bpcgd`
--
ALTER TABLE `iso_hdgd_tkb_bpcgd`
  ADD CONSTRAINT `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_hopdonggiangday`
--
ALTER TABLE `iso_hopdonggiangday`
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_hopdonggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_ketquadanhgiahocphan`
--
ALTER TABLE `iso_ketquadanhgiahocphan`
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_khenthuong`
--
ALTER TABLE `iso_khenthuong`
  ADD CONSTRAINT `fk_iso_khenthuong_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_kiluat`
--
ALTER TABLE `iso_kiluat`
  ADD CONSTRAINT `fk_iso_khenthuong_iso_giangvien10` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_khenthuong_iso_namhoc10` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_kiluat_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_lichgiangday`
--
ALTER TABLE `iso_lichgiangday`
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichgiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_lichthi`
--
ALTER TABLE `iso_lichthi`
  ADD CONSTRAINT `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_lichthi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_monhoc`
--
ALTER TABLE `iso_monhoc`
  ADD CONSTRAINT `fk_iso_monhoc_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_nganhangdethi`
--
ALTER TABLE `iso_nganhangdethi`
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_nganhangdethi_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_nhdt_da`
--
ALTER TABLE `iso_nhdt_da`
  ADD CONSTRAINT `fk_iso_NHDT_DA_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_phancongcoithi`
--
ALTER TABLE `iso_phancongcoithi`
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_phancongcoithi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_quydinh_quychedaotao`
--
ALTER TABLE `iso_quydinh_quychedaotao`
  ADD CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_tailieubomon`
--
ALTER TABLE `iso_tailieubomon`
  ADD CONSTRAINT `fk_iso_tailieubomon_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_tailieubomon_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_td_kt_kl`
--
ALTER TABLE `iso_td_kt_kl`
  ADD CONSTRAINT `fk_iso_TD_KT_KL_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_thidua`
--
ALTER TABLE `iso_thidua`
  ADD CONSTRAINT `fk_iso_thidua_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thidua_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thidua_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_thoikhoabieu`
--
ALTER TABLE `iso_thoikhoabieu`
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_thoikhoabieu_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `iso_user`
--
ALTER TABLE `iso_user`
  ADD CONSTRAINT `fk_iso_user_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_iso_user_iso_roles1` FOREIGN KEY (`roles_id`) REFERENCES `iso_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
