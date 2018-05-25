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

 Date: 05/05/2018 14:49:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for itcast_category
-- ----------------------------
DROP TABLE IF EXISTS `itcast_category`;
CREATE TABLE `itcast_category`  (
  `cid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID，自动增长',
  `cname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品分类名称',
  `pid` int(11) NULL DEFAULT NULL COMMENT '父类ID',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itcast_category
-- ----------------------------
INSERT INTO `itcast_category` VALUES (1, '图书', 11);
INSERT INTO `itcast_category` VALUES (2, '家具', 33);
INSERT INTO `itcast_category` VALUES (3, '手机', 3);
INSERT INTO `itcast_category` VALUES (4, '服装', 7);
INSERT INTO `itcast_category` VALUES (5, '家用电器', 5);
INSERT INTO `itcast_category` VALUES (6, '电脑、办公', 6);
INSERT INTO `itcast_category` VALUES (7, '运动、户外', 4);
INSERT INTO `itcast_category` VALUES (8, '家具、厨具', 9);
INSERT INTO `itcast_category` VALUES (9, '虚拟物品', 5);

SET FOREIGN_KEY_CHECKS = 1;
