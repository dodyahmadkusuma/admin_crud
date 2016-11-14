<<<<<<< HEAD
/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-10-24 18:06:11
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
  `id` int(11) DEFAULT NULL,
  `judul_content` varchar(255) DEFAULT NULL,
  `tgl_content` date DEFAULT NULL,
  `isi_content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', 'Judul 1', '2016-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');
INSERT INTO `content` VALUES ('2', 'Judul 2', '2016-10-13', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');
INSERT INTO `content` VALUES ('3', 'ajshkd', '2016-10-14', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');

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
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('admin', 'admin');
SET FOREIGN_KEY_CHECKS=1;
=======
/*
Navicat MySQL Data Transfer

Source Server         : blog
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : www

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2016-10-24 18:06:11
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
  `id` int(11) DEFAULT NULL,
  `judul_content` varchar(255) DEFAULT NULL,
  `tgl_content` date DEFAULT NULL,
  `isi_content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('1', 'Judul 1', '2016-10-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');
INSERT INTO `content` VALUES ('2', 'Judul 2', '2016-10-13', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');
INSERT INTO `content` VALUES ('3', 'ajshkd', '2016-10-14', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!');

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
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('admin', 'admin');
SET FOREIGN_KEY_CHECKS=1;
>>>>>>> fac416ddeaafeb63a6c9be7da51eb0e509d06404
