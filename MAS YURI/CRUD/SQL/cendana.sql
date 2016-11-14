<<<<<<< HEAD
/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : cendana

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-10-24 21:05:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kelamin
-- ----------------------------
DROP TABLE IF EXISTS `kelamin`;
CREATE TABLE `kelamin` (
  `id_kelamin` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kelamin
-- ----------------------------
INSERT INTO `kelamin` VALUES ('1', 'Male');
INSERT INTO `kelamin` VALUES ('2', 'Female');
INSERT INTO `kelamin` VALUES ('3', 'Shemale');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES ('1', 'Blitar');
INSERT INTO `kota` VALUES ('2', 'Malang');
INSERT INTO `kota` VALUES ('3', 'Nganjuk');
INSERT INTO `kota` VALUES ('4', 'Tulungagung');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `kota_asal` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `Id_posisi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('1', 'Dody Ahmad Kusuma Jaya', '083854520015', '2', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('2', 'Tholkha', '081233072122', '2', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('3', 'Samsul Huda', '085234640114', '3', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('5', 'Choirul Ikhsan', '085749535400', '1', '1', 'p2', null);
INSERT INTO `pegawai` VALUES ('6', 'Wawan Dwi', '085745966707', '4', '1', 'p2', null);
INSERT INTO `pegawai` VALUES ('7', 'Chadil', '08984119934', '2', '1', 'p3', null);
INSERT INTO `pegawai` VALUES ('11', 'Rizal', '087777284179', '2', '1', 'p5', null);

-- ----------------------------
-- Table structure for posisi
-- ----------------------------
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE `posisi` (
  `id_posisi` varchar(50) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posisi
-- ----------------------------
INSERT INTO `posisi` VALUES ('p2', 'Management');
INSERT INTO `posisi` VALUES ('p4', 'IT');
INSERT INTO `posisi` VALUES ('p5', 'HRD');
INSERT INTO `posisi` VALUES ('p3', 'Keuangan');
INSERT INTO `posisi` VALUES ('p1', 'Produk');
SET FOREIGN_KEY_CHECKS=1;
=======
/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : cendana

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-10-24 21:05:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kelamin
-- ----------------------------
DROP TABLE IF EXISTS `kelamin`;
CREATE TABLE `kelamin` (
  `id_kelamin` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kelamin
-- ----------------------------
INSERT INTO `kelamin` VALUES ('1', 'Male');
INSERT INTO `kelamin` VALUES ('2', 'Female');
INSERT INTO `kelamin` VALUES ('3', 'Shemale');

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES ('1', 'Blitar');
INSERT INTO `kota` VALUES ('2', 'Malang');
INSERT INTO `kota` VALUES ('3', 'Nganjuk');
INSERT INTO `kota` VALUES ('4', 'Tulungagung');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `kota_asal` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `Id_posisi` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
INSERT INTO `pegawai` VALUES ('1', 'Dody Ahmad Kusuma Jaya', '083854520015', '2', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('2', 'Tholkha', '081233072122', '2', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('3', 'Samsul Huda', '085234640114', '3', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('5', 'Choirul Ikhsan', '085749535400', '1', '1', 'p2', null);
INSERT INTO `pegawai` VALUES ('6', 'Wawan Dwi', '085745966707', '4', '1', 'p2', null);
INSERT INTO `pegawai` VALUES ('7', 'Chadil', '08984119934', '2', '1', 'p3', null);
INSERT INTO `pegawai` VALUES ('11', 'Rizal', '087777284179', '2', '1', 'p5', null);

-- ----------------------------
-- Table structure for posisi
-- ----------------------------
DROP TABLE IF EXISTS `posisi`;
CREATE TABLE `posisi` (
  `id_posisi` varchar(50) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posisi
-- ----------------------------
INSERT INTO `posisi` VALUES ('p2', 'Management');
INSERT INTO `posisi` VALUES ('p4', 'IT');
INSERT INTO `posisi` VALUES ('p5', 'HRD');
INSERT INTO `posisi` VALUES ('p3', 'Keuangan');
INSERT INTO `posisi` VALUES ('p1', 'Produk');
SET FOREIGN_KEY_CHECKS=1;
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
