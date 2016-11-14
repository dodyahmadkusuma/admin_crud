/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-11-14 11:40:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for author
-- ----------------------------
DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `id` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of author
-- ----------------------------
INSERT INTO `author` VALUES ('1', 'Dody Ahmad');
INSERT INTO `author` VALUES ('2', 'rocky');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` varchar(11) DEFAULT NULL,
  `judul_content` varchar(255) DEFAULT NULL,
  `tgl_content` date DEFAULT NULL,
  `isi_content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('2', 'Coba Edit', '2016-10-13', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!  Lorem ip');
INSERT INTO `content` VALUES ('1a23e13da31', 'Test Edit', '2016-09-12', ' \r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aut');
INSERT INTO `content` VALUES ('4', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('5', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('8', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('6', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('7', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('9', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('124', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('924d80aa4f4', 'Judul 3', '2016-11-09', 'asidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiua');
INSERT INTO `content` VALUES ('648aec65ed7', 'Judul 3', '2016-11-09', 'asidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiua');
INSERT INTO `content` VALUES ('d74eeca202b', 'hiauhsdiuaiusdh', '2016-11-09', 'asidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiuashdiasybduasuidybasuiybdiuaysiduyasidybaisuhdiua');
INSERT INTO `content` VALUES ('823749234', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('3q', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('234234', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('2342', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('45', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');
INSERT INTO `content` VALUES ('213', 'Judul 3', '2016-09-12', '\r\n  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n  consequat. Duis aute');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'uncategory');
INSERT INTO `kategori` VALUES ('2', 'free');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name_user` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'admin', 'admin', 'Dody Ahmad Kusuma', 'Malang', '083854520015');
INSERT INTO `login` VALUES ('2', 'user', 'user', 'ROCKY', 'Singosari', '08383xxxxxxx');
SET FOREIGN_KEY_CHECKS=1;
