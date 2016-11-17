/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : cendana

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-11-16 18:08:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for handphone
-- ----------------------------
DROP TABLE IF EXISTS `handphone`;
CREATE TABLE `handphone` (
  `id_handphone` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jml` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of handphone
-- ----------------------------
INSERT INTO `handphone` VALUES ('1', 'Oppa', '3');
INSERT INTO `handphone` VALUES ('2', 'Samsul', '2');
INSERT INTO `handphone` VALUES ('3', 'Esso', '3');
INSERT INTO `handphone` VALUES ('4', 'Lennovu', '2');
INSERT INTO `handphone` VALUES ('5', 'Asso', '1');
INSERT INTO `handphone` VALUES ('7', 'Nokua', '4');
INSERT INTO `handphone` VALUES ('eac93215aafa33a0eb5162783de989b7', 'SIIIIPPPP', '8');

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
INSERT INTO `pegawai` VALUES ('c6b534e07198b530d7486880e2890152', 'Dody Ahmad Kusuma Jaya', '083854520015', null, null, null, null);
INSERT INTO `pegawai` VALUES ('2', 'Tholkha', '081233072122', '2', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('3', 'Samsul Huda', '085234640114', '3', '1', 'p1', null);
INSERT INTO `pegawai` VALUES ('5', 'Choirul Ikhsan', '085749535400', '1', '1', 'p2', null);
INSERT INTO `pegawai` VALUES ('7', 'Chadil', '08984119934', '2', '1', 'p3', null);
INSERT INTO `pegawai` VALUES ('11', 'Rizal', '087777284179', '2', '1', 'p5', null);
INSERT INTO `pegawai` VALUES ('6de87c7474e9e6732c5c62b4c6c283b1', 'ZZZZZZZZZZZZZAAAA', '-82938923', null, null, null, null);
INSERT INTO `pegawai` VALUES ('b35051985cc89ba1ac40458339373121', 'daskdjkak', '', null, null, null, null);
INSERT INTO `pegawai` VALUES ('423a03ca87e80fd1870f2bf90944bca6', 'ASHOLEEE', '0927409720124', null, null, null, null);
INSERT INTO `pegawai` VALUES ('3cb079ae4f40ca3768a80c91aab75c90', 'SIIIPPP', '097907907', null, null, null, null);

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

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id_product` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `Jml` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', 'Thosibu', '5');
INSERT INTO `product` VALUES ('3', 'Axiiu', '3');
INSERT INTO `product` VALUES ('4', 'Lenovu', '5');
INSERT INTO `product` VALUES ('5', 'Usus', '6');
INSERT INTO `product` VALUES ('6', 'Ancuurr', '3');
INSERT INTO `product` VALUES ('7', 'GaK Qompact', '2');
INSERT INTO `product` VALUES ('c17535af0c5629e77a4f92a38145f2c6', 'HAHAHAHAHAHAPEPEPEPE', '0');
SET FOREIGN_KEY_CHECKS=1;
