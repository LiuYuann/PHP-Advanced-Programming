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

 Date: 05/05/2018 14:50:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for itcast_shopcart
-- ----------------------------
DROP TABLE IF EXISTS `itcast_shopcart`;
CREATE TABLE `itcast_shopcart`  (
  `scid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID，自动增长',
  `mid` int(10) UNSIGNED NOT NULL COMMENT '购买者ID即会员ID',
  `addTime` timestamp(0) NULL DEFAULT NULL COMMENT '加入购物车时间',
  `gid` int(10) UNSIGNED NULL DEFAULT NULL COMMENT '购买商品ID',
  `num` tinyint(3) NULL DEFAULT NULL COMMENT '购买商品数量',
  PRIMARY KEY (`scid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of itcast_shopcart
-- ----------------------------
INSERT INTO `itcast_shopcart` VALUES (2, 1, '2018-03-29 23:42:42', 1, 1);
INSERT INTO `itcast_shopcart` VALUES (3, 0, '2018-04-17 11:03:18', 3, 4);

SET FOREIGN_KEY_CHECKS = 1;
