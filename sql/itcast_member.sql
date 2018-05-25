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

 Date: 05/05/2018 14:50:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for itcast_member
-- ----------------------------
DROP TABLE IF EXISTS `itcast_member`;
CREATE TABLE `itcast_member`  (
  `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID，自动增长',
  `user` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '会员名称',
  `phone` char(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '联系电话',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '电子邮件地址',
  `pwd` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '会员登陆密码',
  `salt` char(6) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '加密salt',
  `reg_time` timestamp(0) NULL DEFAULT NULL COMMENT '会员注册时间',
  `consignee` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '收件人',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '收货地址',
  PRIMARY KEY (`mid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of itcast_member
-- ----------------------------
INSERT INTO `itcast_member` VALUES (0, 'liuyuan', '12345678901', '1111111111@qq.com', '123456', '0', '2018-03-13 17:15:36', '2222222222@qq.com', '江西师范大学瑶湖校区');
INSERT INTO `itcast_member` VALUES (1, 'marcus', '77766681193', '9999999999@qq.com', '123456', '0', '2018-03-07 23:44:21', '44444444444@qq.com', '江西师范大学瑶湖校区');

SET FOREIGN_KEY_CHECKS = 1;
