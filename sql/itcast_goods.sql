/*
 Navicat MySQL Data Transfer

 Source Server         : t2
 Source Server Type    : MySQL
 Source Server Version : 100208
 Source Host           : localhost:3306
 Source Schema         : web

 Target Server Type    : MySQL
 Target Server Version : 100208
 File Encoding         : 65001

 Date: 05/05/2018 14:50:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for itcast_goods
-- ----------------------------
DROP TABLE IF EXISTS `itcast_goods`;
CREATE TABLE `itcast_goods`  (
  `gid` int(10) UNSIGNED NOT NULL COMMENT '主键ID，自动增长',
  `gname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `price` int(10) UNSIGNED NOT NULL COMMENT '商品价格',
  `thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品上传图片',
  `status` enum('no','yes') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '是否上下架，上架为yes，否则为no',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '商品描述',
  `stock` int(255) UNSIGNED NULL DEFAULT NULL COMMENT '商品库存',
  `identifier` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品编号',
  `recycle` enum('no','yes') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '是否放入回收站，放入回收站为yes，否则为no',
  `cid` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '商品分类ID',
  `is_best` enum('no','yes') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '是否热销，热销为yes，否则为no',
  PRIMARY KEY (`gid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itcast_goods
-- ----------------------------
INSERT INTO `itcast_goods` VALUES (1, 'java web程序开发', 45, '../image/preview.jpg', 'yes', 'Java', 100, '0', 'no', 0, 'yes');
INSERT INTO `itcast_goods` VALUES (2, 'php程序设计进程教程', 40, '../image/preview.jpg', 'yes', 'php', 100, '1', 'no', 1, 'yes');
INSERT INTO `itcast_goods` VALUES (3, 'mysql数据库入门', 40, '../image/preview.jpg', 'yes', 'MySQL', 100, '2', 'no', 2, 'yes');
INSERT INTO `itcast_goods` VALUES (4, '网页统计与制作', 40, '../image/preview.jpg', 'yes', '网页', 100, '3', 'no', 3, 'yes');

SET FOREIGN_KEY_CHECKS = 1;
