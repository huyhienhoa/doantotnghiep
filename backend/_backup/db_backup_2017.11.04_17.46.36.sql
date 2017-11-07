-- -------------------------------------------
SET AUTOCOMMIT=0;
START TRANSACTION;
SET SQL_QUOTE_SHOW_CREATE = 1;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- -------------------------------------------
-- -------------------------------------------
-- START BACKUP
-- -------------------------------------------
-- -------------------------------------------
-- TABLE `iso_bangphanconggiangday`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_bangphanconggiangday`;
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
  KEY `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`),
  CONSTRAINT `fk_iso_bangphanconggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangphanconggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangphanconggiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangphanconggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_bangtheodoiketquahoctap`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_bangtheodoiketquahoctap`;
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
  KEY `fk_iso_bangtheodoiketquahoctap_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_bangtheodoiketquahoctap_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_bomon`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_bomon`;
CREATE TABLE IF NOT EXISTS `iso_bomon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbomon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mabomon` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenbomon_UNIQUE` (`tenbomon`),
  UNIQUE KEY `mabomon_UNIQUE` (`mabomon`),
  KEY `fk_iso_bomon_iso_khoa_idx` (`khoa_id`),
  CONSTRAINT `fk_iso_bomon_iso_khoa` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_chuongtrinhdaotao`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_chuongtrinhdaotao`;
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
  KEY `fk_iso_chuongtrinhdaotao_iso_chuyennganh1_idx` (`chuyennganh_id`),
  CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_chuyennganh1` FOREIGN KEY (`chuyennganh_id`) REFERENCES `iso_chuyennganh` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_chuongtrinhdaotao_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_chuyennganh`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_chuyennganh`;
CREATE TABLE IF NOT EXISTS `iso_chuyennganh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `khoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_chuyennganh_iso_khoa1_idx` (`khoa_id`),
  CONSTRAINT `fk_iso_chuyennganh_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_congtacnghiencuukh`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_congtacnghiencuukh`;
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
  KEY `fk_iso_congtacnghiencuuKH_iso_khoa1_idx` (`khoa_id`),
  CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_khoa1` FOREIGN KEY (`khoa_id`) REFERENCES `iso_khoa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_congtacnghiencuuKH_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_ctdt_dchp`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_ctdt_dchp`;
CREATE TABLE IF NOT EXISTS `iso_ctdt_dchp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_CTDT_DCHP_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_CTDT_DCHP_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_dapan`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_dapan`;
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
  KEY `fk_iso_dapan_iso_NHDT_DA1_idx` (`NHDT_DA_id`),
  CONSTRAINT `fk_iso_dapan_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_dapan_iso_nganhangdethi1` FOREIGN KEY (`nganhangdethi_id`) REFERENCES `iso_nganhangdethi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_dbtl_dcot_lt_pcct`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_dbtl_dcot_lt_pcct`;
CREATE TABLE IF NOT EXISTS `iso_dbtl_dcot_lt_pcct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_DBTL_DCOT_LT_PCCT_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_debaitaplon`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_debaitaplon`;
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
  KEY `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`),
  CONSTRAINT `fk_iso_debaitaplon_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_debaitaplon_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_debaitaplon_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_debaitaplon_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_decuonghocphan`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_decuonghocphan`;
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
  KEY `fk_iso_decuonghocphan_iso_CTDT_DCHP1_idx` (`CTDT_DCHP_id`),
  CONSTRAINT `fk_iso_decuonghocphan_iso_CTDT_DCHP1` FOREIGN KEY (`CTDT_DCHP_id`) REFERENCES `iso_ctdt_dchp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_decuongmonhoc_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_decuongontap`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_decuongontap`;
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
  KEY `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`),
  CONSTRAINT `fk_iso_decuongontap_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_decuongontap_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_decuongontap_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_decuongontap_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_giangvien`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_giangvien`;
CREATE TABLE IF NOT EXISTS `iso_giangvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `magiangvien` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tengiangvien` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bomon_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `magiangvien_UNIQUE` (`magiangvien`),
  KEY `fk_iso_giangvien_iso_bomon1_idx` (`bomon_id`),
  CONSTRAINT `fk_iso_giangvien_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_hdgd_tkb_bpcgd`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_hdgd_tkb_bpcgd`;
CREATE TABLE IF NOT EXISTS `iso_hdgd_tkb_bpcgd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_HDGD_TKB_BPCGD__iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_hinhthucdaotao`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_hinhthucdaotao`;
CREATE TABLE IF NOT EXISTS `iso_hinhthucdaotao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_hocky`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_hocky`;
CREATE TABLE IF NOT EXISTS `iso_hocky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_hopdonggiangday`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_hopdonggiangday`;
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
  KEY `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`),
  CONSTRAINT `fk_iso_hopdonggiangday_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_hopdonggiangday_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_hopdonggiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_ketquadanhgiahocphan`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_ketquadanhgiahocphan`;
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
  KEY `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_ketquadanhgiahocphan_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_khenthuong`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_khenthuong`;
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
  KEY `fk_iso_khenthuong_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`),
  CONSTRAINT `fk_iso_khenthuong_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_khenthuong_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_khenthuong_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_khoa`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_khoa`;
CREATE TABLE IF NOT EXISTS `iso_khoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makhoa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `makhoa_UNIQUE` (`makhoa`),
  UNIQUE KEY `tenkhoa_UNIQUE` (`tenkhoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_kiluat`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_kiluat`;
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
  KEY `fk_iso_kiluat_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`),
  CONSTRAINT `fk_iso_khenthuong_iso_giangvien10` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_khenthuong_iso_namhoc10` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_kiluat_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_lichgiangday`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_lichgiangday`;
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
  KEY `fk_iso_lichgiangday_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_lichgiangday_iso_giangvien1` FOREIGN KEY (`giangvien_id`) REFERENCES `iso_giangvien` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichgiangday_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichgiangday_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichgiangday_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichgiangday_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_lichthi`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_lichthi`;
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
  KEY `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`),
  CONSTRAINT `fk_iso_lichthi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichthi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichthi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_lichthi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_loaitailieu`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_loaitailieu`;
CREATE TABLE IF NOT EXISTS `iso_loaitailieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_monhoc`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_monhoc`;
CREATE TABLE IF NOT EXISTS `iso_monhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmonhoc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `bomon_id` int(11) NOT NULL,
  `thuchanh` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL,
  `baitaplon` enum('co','khong') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_monhoc_iso_bomon1_idx` (`bomon_id`),
  CONSTRAINT `fk_iso_monhoc_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_namhoc`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_namhoc`;
CREATE TABLE IF NOT EXISTS `iso_namhoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_nganhangdethi`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_nganhangdethi`;
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
  KEY `fk_iso_nganhangdethi_iso_NHDT_DA1_idx` (`NHDT_DA_id`),
  CONSTRAINT `fk_iso_nganhangdethi_iso_NHDT_DA1` FOREIGN KEY (`NHDT_DA_id`) REFERENCES `iso_nhdt_da` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_nganhangdethi_iso_hinhthucdaotao1` FOREIGN KEY (`hinhthucdaotao_id`) REFERENCES `iso_hinhthucdaotao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_nganhangdethi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_nganhangdethi_iso_monhoc1` FOREIGN KEY (`monhoc_id`) REFERENCES `iso_monhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_nganhangdethi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_nganhangdethi_iso_trinhdo1` FOREIGN KEY (`trinhdo_id`) REFERENCES `iso_trinhdo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_nhdt_da`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_nhdt_da`;
CREATE TABLE IF NOT EXISTS `iso_nhdt_da` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_NHDT_DA_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_NHDT_DA_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_phancongcoithi`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_phancongcoithi`;
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
  KEY `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1_idx` (`DBTL_DCOT_LT_PCCT_id`),
  CONSTRAINT `fk_iso_phancongcoithi_iso_DBTL_DCOT_LT_PCCT1` FOREIGN KEY (`DBTL_DCOT_LT_PCCT_id`) REFERENCES `iso_dbtl_dcot_lt_pcct` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_phancongcoithi_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_phancongcoithi_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_phancongcoithi_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_quydinh_quychedaotao`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_quydinh_quychedaotao`;
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
  KEY `fk_iso_quydinh_quychedaotao_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_quydinh_quychedaotao_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_tailieubomon`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_tailieubomon`;
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
  KEY `fk_iso_tailieubomon_iso_bomon1_idx` (`bomon_id`),
  CONSTRAINT `fk_iso_tailieubomon_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_tailieubomon_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_td_kt_kl`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_td_kt_kl`;
CREATE TABLE IF NOT EXISTS `iso_td_kt_kl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaitailieu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iso_TD_KT_KL_iso_loaitailieu1_idx` (`loaitailieu_id`),
  CONSTRAINT `fk_iso_TD_KT_KL_iso_loaitailieu1` FOREIGN KEY (`loaitailieu_id`) REFERENCES `iso_loaitailieu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_thidua`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_thidua`;
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
  KEY `fk_iso_thidua_iso_TD_KT_KL1_idx` (`TD_KT_KL_id`),
  CONSTRAINT `fk_iso_thidua_iso_TD_KT_KL1` FOREIGN KEY (`TD_KT_KL_id`) REFERENCES `iso_td_kt_kl` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_thidua_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_thidua_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_thoikhoabieu`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_thoikhoabieu`;
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
  KEY `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1_idx` (`HDGD_TKB_BPCGD__id`),
  CONSTRAINT `fk_iso_thoikhoabieu_iso_HDGD_TKB_BPCGD_1` FOREIGN KEY (`HDGD_TKB_BPCGD__id`) REFERENCES `iso_hdgd_tkb_bpcgd` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_thoikhoabieu_iso_bomon1` FOREIGN KEY (`bomon_id`) REFERENCES `iso_bomon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_thoikhoabieu_iso_hocky1` FOREIGN KEY (`hocky_id`) REFERENCES `iso_hocky` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_iso_thoikhoabieu_iso_namhoc1` FOREIGN KEY (`namhoc_id`) REFERENCES `iso_namhoc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_thongbao_quyetdinh`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_thongbao_quyetdinh`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_trinhdo`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_trinhdo`;
CREATE TABLE IF NOT EXISTS `iso_trinhdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE `iso_user`
-- -------------------------------------------
DROP TABLE IF EXISTS `iso_user`;
CREATE TABLE IF NOT EXISTS `iso_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','trưởng bộ môn','trưởng khoa','giảng viên') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- -------------------------------------------
-- TABLE DATA iso_bangphanconggiangday
-- -------------------------------------------
INSERT INTO `iso_bangphanconggiangday` (`id`,`name`,`created_at`,`updated_at`,`ngayky`,`filedinhkem`,`bomon_id`,`hocky_id`,`namhoc_id`,`HDGD_TKB_BPCGD__id`) VALUES
('1','BẢng phân công giảng dạy','2017-10-08 09:09:46','2017-10-11 13:51:10','2017-10-23','15074285861672913718834668385948541147387786530691724n.jpg','1','1','1','1');
INSERT INTO `iso_bangphanconggiangday` (`id`,`name`,`created_at`,`updated_at`,`ngayky`,`filedinhkem`,`bomon_id`,`hocky_id`,`namhoc_id`,`HDGD_TKB_BPCGD__id`) VALUES
('2','HIHI','2017-10-11 10:00:32','2017-10-11 10:01:28','2017-10-19','1507690832lets-fight-ghost-kim-so-hyun.png','1','3','2','1');



-- -------------------------------------------
-- TABLE DATA iso_bangtheodoiketquahoctap
-- -------------------------------------------
INSERT INTO `iso_bangtheodoiketquahoctap` (`id`,`name`,`created_at`,`updated_at`,`nhomhocphan`,`filedinhkem`,`giangvien_id`,`hinhthucdaotao_id`,`trinhdo_id`,`monhoc_id`,`hocky_id`,`namhoc_id`,`loaitailieu_id`) VALUES
('1','Bảng theo dõi kết quả học tập ','2017-10-07 21:06:13','2017-10-07 21:08:41','N01','1507385173neonflames.png','1','1','1','1','1','2','5');



-- -------------------------------------------
-- TABLE DATA iso_bomon
-- -------------------------------------------
INSERT INTO `iso_bomon` (`id`,`tenbomon`,`mabomon`,`khoa_id`) VALUES
('1','Hệ thống thông tin','HTTT','1');



-- -------------------------------------------
-- TABLE DATA iso_chuongtrinhdaotao
-- -------------------------------------------
INSERT INTO `iso_chuongtrinhdaotao` (`id`,`name`,`ngaybanhanh`,`cosodaotao`,`quyetdinhso`,`created_at`,`updated_at`,`filedinhkem`,`trinhdo_id`,`hinhthucdaotao_id`,`khoa_id`,`chuyennganh_id`,`CTDT_DCHP_id`) VALUES
('1','Chương trình đào tạo','2017-10-11','AVC','121321','2017-10-08 08:42:47','2017-10-11 10:56:23','15074269671640668918758356726913047487074367668543626n.jpg','1','1','1','2','1');
INSERT INTO `iso_chuongtrinhdaotao` (`id`,`name`,`ngaybanhanh`,`cosodaotao`,`quyetdinhso`,`created_at`,`updated_at`,`filedinhkem`,`trinhdo_id`,`hinhthucdaotao_id`,`khoa_id`,`chuyennganh_id`,`CTDT_DCHP_id`) VALUES
('2','Chương trình đào tạo','1914-05-27','AVC','121321','2017-10-08 08:42:47','2017-10-08 08:43:58','15074270381672913718834668385948541147387786530691724n.jpg','1','1','1','2','1');



-- -------------------------------------------
-- TABLE DATA iso_chuyennganh
-- -------------------------------------------
INSERT INTO `iso_chuyennganh` (`id`,`ma`,`name`,`khoa_id`) VALUES
('1','TTM','Truyền thông mạng','1');
INSERT INTO `iso_chuyennganh` (`id`,`ma`,`name`,`khoa_id`) VALUES
('2','KPM','Kỹ thuật phần mềm','1');



-- -------------------------------------------
-- TABLE DATA iso_congtacnghiencuukh
-- -------------------------------------------
INSERT INTO `iso_congtacnghiencuukh` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`loaitailieu_id`,`giangvien_id`,`namhoc_id`,`khoa_id`) VALUES
('1','Nghiên cứu tai nghe thông minh','2017-10-08 08:14:02','2017-10-08 08:14:17','1507425242gtd-wallpaper.jpg','11','1','1','1');



-- -------------------------------------------
-- TABLE DATA iso_ctdt_dchp
-- -------------------------------------------
INSERT INTO `iso_ctdt_dchp` (`id`,`name`,`loaitailieu_id`) VALUES
('1','Chương trình đào tạo','2');
INSERT INTO `iso_ctdt_dchp` (`id`,`name`,`loaitailieu_id`) VALUES
('2','Đề cương học phần','2');



-- -------------------------------------------
-- TABLE DATA iso_dapan
-- -------------------------------------------
INSERT INTO `iso_dapan` (`id`,`name`,`filedinhkem`,`created_at`,`updated_at`,`nganhangdethi_id`,`NHDT_DA_id`) VALUES
('2','Đáp án môn ccccccccc','1507437200001.png','2017-10-08 11:32:59','2017-10-08 11:33:20','2','2');



-- -------------------------------------------
-- TABLE DATA iso_dbtl_dcot_lt_pcct
-- -------------------------------------------
INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`,`name`,`loaitailieu_id`) VALUES
('1','Đề bài tập lớn','7');
INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`,`name`,`loaitailieu_id`) VALUES
('2','Đề cương ôn tập','7');
INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`,`name`,`loaitailieu_id`) VALUES
('3','Lịch thi','7');
INSERT INTO `iso_dbtl_dcot_lt_pcct` (`id`,`name`,`loaitailieu_id`) VALUES
('4','Phân công coi thi','7');



-- -------------------------------------------
-- TABLE DATA iso_debaitaplon
-- -------------------------------------------
INSERT INTO `iso_debaitaplon` (`id`,`name`,`nhomhocphan`,`created_at`,`updated_at`,`filedinhkem`,`hocky_id`,`namhoc_id`,`monhoc_id`,`DBTL_DCOT_LT_PCCT_id`) VALUES
('2','Hahahaha','N01','2017-10-08 09:49:58','2017-10-08 09:50:07','nofile.jpg','1','1','1','1');
INSERT INTO `iso_debaitaplon` (`id`,`name`,`nhomhocphan`,`created_at`,`updated_at`,`filedinhkem`,`hocky_id`,`namhoc_id`,`monhoc_id`,`DBTL_DCOT_LT_PCCT_id`) VALUES
('3','Đề bài tập lớn môn Lập trình C','N02','2017-10-11 11:18:29','2017-10-11 11:18:40','1507695509untitled.jpg','2','2','1','1');



-- -------------------------------------------
-- TABLE DATA iso_decuonghocphan
-- -------------------------------------------
INSERT INTO `iso_decuonghocphan` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`monhoc_id`,`CTDT_DCHP_id`) VALUES
('2','Đề cương','2017-10-08 08:55:35','2017-10-08 08:55:48','15074277481672913718834668385948541147387786530691724n.jpg','1','2');
INSERT INTO `iso_decuonghocphan` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`monhoc_id`,`CTDT_DCHP_id`) VALUES
('3','Siêu đề cương','2017-10-08 08:56:03','','nofile.jpg','1','2');



-- -------------------------------------------
-- TABLE DATA iso_decuongontap
-- -------------------------------------------
INSERT INTO `iso_decuongontap` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`monhoc_id`,`namhoc_id`,`hocky_id`,`DBTL_DCOT_LT_PCCT_id`) VALUES
('2','Đề cương ôn tập ABC','2017-10-08 10:06:47','2017-10-11 12:45:38','nofile.jpg','1','1','1','2');



-- -------------------------------------------
-- TABLE DATA iso_giangvien
-- -------------------------------------------
INSERT INTO `iso_giangvien` (`id`,`magiangvien`,`tengiangvien`,`bomon_id`) VALUES
('1','GV1','Phạm Văn Huy','1');
INSERT INTO `iso_giangvien` (`id`,`magiangvien`,`tengiangvien`,`bomon_id`) VALUES
('2','GV2','Nguyễn Thị Trang','1');



-- -------------------------------------------
-- TABLE DATA iso_hdgd_tkb_bpcgd
-- -------------------------------------------
INSERT INTO `iso_hdgd_tkb_bpcgd` (`id`,`name`,`loaitailieu_id`) VALUES
('1','Bảng phân công giảng dạy','3');
INSERT INTO `iso_hdgd_tkb_bpcgd` (`id`,`name`,`loaitailieu_id`) VALUES
('2','Hợp đồng giảng dạy','3');
INSERT INTO `iso_hdgd_tkb_bpcgd` (`id`,`name`,`loaitailieu_id`) VALUES
('3','Thời khóa biểu','3');



-- -------------------------------------------
-- TABLE DATA iso_hinhthucdaotao
-- -------------------------------------------
INSERT INTO `iso_hinhthucdaotao` (`id`,`name`) VALUES
('1','Chính quy');



-- -------------------------------------------
-- TABLE DATA iso_hocky
-- -------------------------------------------
INSERT INTO `iso_hocky` (`id`,`name`) VALUES
('1','Học kỳ IA');
INSERT INTO `iso_hocky` (`id`,`name`) VALUES
('2','Học kỳ IB');
INSERT INTO `iso_hocky` (`id`,`name`) VALUES
('3','Học kỳ II');



-- -------------------------------------------
-- TABLE DATA iso_hopdonggiangday
-- -------------------------------------------
INSERT INTO `iso_hopdonggiangday` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`bomon_id`,`namhoc_id`,`HDGD_TKB_BPCGD__id`) VALUES
('2','àasdfasdfasf','2017-10-08 09:21:35','2017-10-08 09:21:56','nofile.jpg','1','1','2');



-- -------------------------------------------
-- TABLE DATA iso_ketquadanhgiahocphan
-- -------------------------------------------
INSERT INTO `iso_ketquadanhgiahocphan` (`id`,`name`,`created_at`,`updated_at`,`ngaythi`,`canbocoithi`,`canbochamthi`,`nhomhocphan`,`filedinhkem`,`hocky_id`,`namhoc_id`,`monhoc_id`,`loaitailieu_id`) VALUES
('1','Kết quả đánh giá học phần','2017-10-07 21:25:48','2017-10-11 13:02:13','2017-10-11','Phạm Văn Huy','Nguyễn Thị Trang','N01','15073865731506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','1','1','1','6');



-- -------------------------------------------
-- TABLE DATA iso_khenthuong
-- -------------------------------------------
INSERT INTO `iso_khenthuong` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`giangvien_id`,`namhoc_id`,`TD_KT_KL_id`) VALUES
('2','Khen thưởng','2017-10-08 10:51:33','2017-10-08 10:51:39','15074346931506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','2','1','2');



-- -------------------------------------------
-- TABLE DATA iso_khoa
-- -------------------------------------------
INSERT INTO `iso_khoa` (`id`,`makhoa`,`tenkhoa`) VALUES
('1','CNT','Công nghệ thông tin');
INSERT INTO `iso_khoa` (`id`,`makhoa`,`tenkhoa`) VALUES
('2','KT','Kinh tế');



-- -------------------------------------------
-- TABLE DATA iso_kiluat
-- -------------------------------------------
INSERT INTO `iso_kiluat` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`giangvien_id`,`namhoc_id`,`TD_KT_KL_id`) VALUES
('2','Kỉ luật ','2017-10-08 11:11:00','2017-10-08 11:11:08','15074358601506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','1','4','3');



-- -------------------------------------------
-- TABLE DATA iso_lichgiangday
-- -------------------------------------------
INSERT INTO `iso_lichgiangday` (`id`,`name`,`nhomhocphan`,`filedinhkem`,`created_at`,`updated_at`,`monhoc_id`,`hocky_id`,`namhoc_id`,`giangvien_id`,`loaitailieu_id`) VALUES
('1','Lịch giảng dạy môn PTTKHT','N01','1507383829neonflames.png','2017-10-07 20:43:49','2017-10-07 20:46:57','1','1','1','2','4');



-- -------------------------------------------
-- TABLE DATA iso_lichthi
-- -------------------------------------------
INSERT INTO `iso_lichthi` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`hinhthucdaotao_id`,`hocky_id`,`namhoc_id`,`DBTL_DCOT_LT_PCCT_id`) VALUES
('2','Lịch thi','2017-10-08 10:17:13','2017-10-08 10:17:21','nofile.jpg','1','1','1','3');



-- -------------------------------------------
-- TABLE DATA iso_loaitailieu
-- -------------------------------------------
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('1','HTTT.01.01.01','QUY ĐỊNH, QUY CHẾ ĐÀO TẠO');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('2','HTTT.01.01.02','CHƯƠNG TRÌNH ĐÀO TẠO, ĐỀ CƯƠNG HỌC PHẦN');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('3','HTTT.01.01.03','HỢP ĐỒNG GIẢNG DẠY, THỜI KHÓA BIỂU, BẢNG PHÂN CÔNG GIẢNG DẠY');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('4','HTTT.01.01.04','LỊCH GIẢNG DẠY');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('5','HTTT.01.01.05','BẢNG THEO DÕI KẾT QUẢ HỌC TẬP');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('6','HTTT.01.01.06','KẾT QUẢ ĐÁNH GIÁ HỌC PHẦN');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('7','HTTT.01.01.07','ĐỀ BÀI TẬP LỚN, ĐỀ CƯƠNG ÔN TẬP, LỊCH THI, PHÂN CÔNG COI THI');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('8','HTTT.01.01.08','THI ĐUA, KHEN THƯỞNG, KỈ LUẬT');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('9','HTTT.01.01.09','NGÂN HÀNG ĐỀ THI, ĐÁP ÁN');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('10','HTTT.01.01.10','THÔNG BÁO,QUYẾT ĐỊNH');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('11','HTTT.01.01.11','CÔNG TÁC NGHIÊN CỨU KHOA HỌC');
INSERT INTO `iso_loaitailieu` (`id`,`ma`,`name`) VALUES
('13','HTTT.01.01.11','TÀI LIỆU BỘ MÔN');



-- -------------------------------------------
-- TABLE DATA iso_monhoc
-- -------------------------------------------
INSERT INTO `iso_monhoc` (`id`,`tenmonhoc`,`mamonhoc`,`sotinchi`,`bomon_id`,`thuchanh`,`baitaplon`) VALUES
('1','Phân tích thiết kế hệ thống','MH1','3','1','khong','co');



-- -------------------------------------------
-- TABLE DATA iso_namhoc
-- -------------------------------------------
INSERT INTO `iso_namhoc` (`id`,`name`) VALUES
('1','2017-2018');
INSERT INTO `iso_namhoc` (`id`,`name`) VALUES
('2','2018-2019');
INSERT INTO `iso_namhoc` (`id`,`name`) VALUES
('4','2019-2020');
INSERT INTO `iso_namhoc` (`id`,`name`) VALUES
('5','2020-2021');



-- -------------------------------------------
-- TABLE DATA iso_nganhangdethi
-- -------------------------------------------
INSERT INTO `iso_nganhangdethi` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`hocky_id`,`trinhdo_id`,`hinhthucdaotao_id`,`monhoc_id`,`NHDT_DA_id`) VALUES
('2','Ngân hàng đề thi','2017-10-08 11:22:16','2017-10-08 11:22:41','15074365611506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','1','1','1','1','1','1');



-- -------------------------------------------
-- TABLE DATA iso_nhdt_da
-- -------------------------------------------
INSERT INTO `iso_nhdt_da` (`id`,`name`,`loaitailieu_id`) VALUES
('1','Ngân hàng đề thi','9');
INSERT INTO `iso_nhdt_da` (`id`,`name`,`loaitailieu_id`) VALUES
('2','Đáp án','9');



-- -------------------------------------------
-- TABLE DATA iso_phancongcoithi
-- -------------------------------------------
INSERT INTO `iso_phancongcoithi` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`hocky_id`,`namhoc_id`,`bomon_id`,`DBTL_DCOT_LT_PCCT_id`) VALUES
('2','Phân công coi thi','2017-10-08 10:28:24','2017-10-08 10:28:32','nofile.jpg','1','1','1','4');



-- -------------------------------------------
-- TABLE DATA iso_quydinh_quychedaotao
-- -------------------------------------------
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('1','dfgdfg','2017-10-28','453','','2017-10-11 13:35:07','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('2','ok','1915-06-08','fg','','2017-09-30 15:20:37','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('3','Xịn','2017-09-07','1111','2017-09-30 15:57:41','2017-09-30 16:03:24','1506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','2','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('4','ngon','2017-09-05','433','2017-09-30 16:08:55','','1506762535nofile-2.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('5','hay vãi','2017-09-21','65','2017-09-30 16:09:17','','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('6','ok','2017-09-30','xịn','2017-09-30 18:57:13','','1506772633ghen---khac-hung-erik-min.mp3','2','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('7','ok','2017-09-20','66','2017-09-30 19:02:53','2017-10-01 14:02:10','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('8','ngon','2017-09-07','ok','2017-09-30 19:03:16','','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('9','hege','2017-09-12','433','2017-09-30 19:03:32','','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('10','fcv','2017-09-26','sd','2017-09-30 19:03:49','','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('11','ih','2017-09-26','4545','2017-09-30 19:04:13','','nofile.jpg','2','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('12','abc','2017-10-03','865','2017-10-01 14:08:34','','1506841714quanlydulich.sql','2','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('13','JHKJHB','2017-10-19','333','2017-10-01 14:26:49','','nofile.jpg','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('14','ok','2001-05-11','003','','','abc','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('15','huy hienh oa','2017-10-19','11','2017-10-06 23:06:53','','1507306013001.png','1','1');
INSERT INTO `iso_quydinh_quychedaotao` (`id`,`name`,`ngaybanhanh`,`soquyetdinh`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`loaitailieu_id`) VALUES
('16','okkkkk','2017-10-18','4545','2017-10-06 23:07:18','','1507306038001.png','2','1');



-- -------------------------------------------
-- TABLE DATA iso_tailieubomon
-- -------------------------------------------
INSERT INTO `iso_tailieubomon` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`loaitailieu_id`,`bomon_id`) VALUES
('1','Tài liệu bộ môn','2017-10-08 08:26:00','2017-10-08 08:26:20','15074259801626635618743476961734357908896027983326970n.png','1','1');



-- -------------------------------------------
-- TABLE DATA iso_td_kt_kl
-- -------------------------------------------
INSERT INTO `iso_td_kt_kl` (`id`,`name`,`loaitailieu_id`) VALUES
('1','Thi đua','8');
INSERT INTO `iso_td_kt_kl` (`id`,`name`,`loaitailieu_id`) VALUES
('2','Khen thưởng ','8');
INSERT INTO `iso_td_kt_kl` (`id`,`name`,`loaitailieu_id`) VALUES
('3','Kỉ luật','8');



-- -------------------------------------------
-- TABLE DATA iso_thidua
-- -------------------------------------------
INSERT INTO `iso_thidua` (`id`,`name`,`created_at`,`updated_at`,`filedinhkem`,`namhoc_id`,`bomon_id`,`TD_KT_KL_id`) VALUES
('2','Thi đua','2017-10-08 10:37:28','2017-10-08 10:37:34','nofile.jpg','2','1','1');



-- -------------------------------------------
-- TABLE DATA iso_thoikhoabieu
-- -------------------------------------------
INSERT INTO `iso_thoikhoabieu` (`id`,`name`,`namhoc_id`,`hocky_id`,`bomon_id`,`created_at`,`updated_at`,`filedinhkem`,`HDGD_TKB_BPCGD__id`) VALUES
('2','Thời khóa biểu ABC','1','1','1','2017-10-08 09:34:33','2017-10-11 13:44:08','1507430085voice6074.aac','3');



-- -------------------------------------------
-- TABLE DATA iso_thongbao_quyetdinh
-- -------------------------------------------
INSERT INTO `iso_thongbao_quyetdinh` (`id`,`name`,`ngaycohieuluc`,`created_at`,`updated_at`,`filedinhkem`,`hinhthucdaotao_id`,`trinhdo_id`,`loaitailieu_id`) VALUES
('1','Thông báo về ngày nghỉ lễ','2017-10-13','2017-10-07 22:13:42','2017-10-11 13:50:51','15073892221506761882danh-sach-hoi-dong-cham-thuc-tap-tn-k54.docx','1','1','1');



-- -------------------------------------------
-- TABLE DATA iso_trinhdo
-- -------------------------------------------
INSERT INTO `iso_trinhdo` (`id`,`name`) VALUES
('1','Đại học');
INSERT INTO `iso_trinhdo` (`id`,`name`) VALUES
('2','Cao đẳng');



-- -------------------------------------------
-- TABLE DATA iso_user
-- -------------------------------------------
INSERT INTO `iso_user` (`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`role`) VALUES
('2','admin','8kA3UieyX_Z9lfDGtMZFZBKSRX1H-_Jn','$2y$13$ChMbyWfrocZFRITukp1Tye9tHy/K5izFNIpj50dzY3F/5UnYe79BC','','huyhienhoacnt@gmail.com','10','2017-10-14 00:00:00','2017-10-17 12:34:34','admin');
INSERT INTO `iso_user` (`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`role`) VALUES
('3','huypham','SU8F4vrpZ941dg-XX9VM2ABMpAOmNjlD','$2y$13$.dQgrYrzxKV5wGB/ss42Qe6nVndnjn109xedAuostuFhTP.Y5sdEK','','huy@gmail..com','10','2017-10-14 11:02:16','2017-10-15 09:17:34','trưởng khoa');
INSERT INTO `iso_user` (`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`role`) VALUES
('4','trangnguyen','qilAbQiNgCicDqUxKzovAlZ6LaYCyTxB','$2y$13$sdhjlwYXejYk/8LKxBQ7qOE2VIGdHbWmbJtrb5PBwMZf7tEOVHSK2','','trang@gmail.com','10','2017-10-15 09:18:12','2017-10-15 09:18:30','trưởng bộ môn');
INSERT INTO `iso_user` (`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`status`,`created_at`,`updated_at`,`role`) VALUES
('5','tung','pxfZVJ6z_Q_I6Q4ITfZmRQ9w3G1G5BC6','$2y$13$JToeN2.iBmx9lbjQ4FhF..FRMxQs43AIQ26Z2niK/ToPUMg5XTZBy','','tung@gmail.com','10','2017-10-15 09:18:59','','giảng viên');



-- -------------------------------------------
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
COMMIT;
-- -------------------------------------------
-- -------------------------------------------
-- END BACKUP
-- -------------------------------------------
