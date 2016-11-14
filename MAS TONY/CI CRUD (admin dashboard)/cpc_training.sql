/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : cpc_training

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-11-13 18:29:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES ('1', 'Jokowow');
INSERT INTO `guru` VALUES ('2', 'Hariyati');
INSERT INTO `guru` VALUES ('3', 'Sisi');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES ('1', 'Kelas A');
INSERT INTO `kelas` VALUES ('2', 'Kelas B');
INSERT INTO `kelas` VALUES ('3', 'Kelas C');

-- ----------------------------
-- Table structure for mapel
-- ----------------------------
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES ('1', 'Matematika', '1');
INSERT INTO `mapel` VALUES ('2', 'Bhs. Indonesia', '2');
INSERT INTO `mapel` VALUES ('3', 'Ilmu Pengetahuan Alam', '3');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` int(255) NOT NULL AUTO_INCREMENT,
  `id_mapel` int(255) DEFAULT NULL,
  `id_siswa` int(255) DEFAULT NULL,
  `total_nilai` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES ('1', '1', '1', '100');
INSERT INTO `nilai` VALUES ('2', '1', '2', '80');
INSERT INTO `nilai` VALUES ('3', '2', '2', '100');
INSERT INTO `nilai` VALUES ('4', '2', '3', '90');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('1', 'Dody Ahmad Kusuma', 'malang', '2');
INSERT INTO `siswa` VALUES ('2', 'Tholkha', 'malang', '1');
INSERT INTO `siswa` VALUES ('3', 'Samsul Huda', 'malang', '2');
INSERT INTO `siswa` VALUES ('4', 'Choirul Ikhsan', 'malang', '2');
INSERT INTO `siswa` VALUES ('5', 'Chadil', 'malang', '3');
INSERT INTO `siswa` VALUES ('6', 'Rizal', 'malang', '3');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'Dody Ahmad Kusuma');
INSERT INTO `user` VALUES ('2', 'user', 'user', 'ROCKY');
SET FOREIGN_KEY_CHECKS=1;
