/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : artistdb

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 14/01/2023 00:40:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for iusers
-- ----------------------------
DROP TABLE IF EXISTS `iusers`;
CREATE TABLE `iusers`  (
  `userID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `userType` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of iusers
-- ----------------------------
INSERT INTO `iusers` VALUES (1, 'superadmin@demo.com', '$2y$10$7iBFL83eaXM8B8Qma67zl.F5oTNDgGZUK4YIEgAh/wYa8EOugTT/q', NULL, 0, '2023-01-13 14:06:39', '2023-01-13 14:06:39');
INSERT INTO `iusers` VALUES (2, 'host@demo.com', '$2y$10$dcJMHZppUhJN7nOnoVgBN.qrK4e9WsIl8fKSY2Wp1YN00Go/Mdhp6', '09269440075', 2, '2023-01-13 16:07:00', '2023-01-13 16:07:00');
INSERT INTO `iusers` VALUES (3, 'artist@demo.com', '$2y$10$2E5eIUV.zBP2OEKXzaMsTOuWYBCFTDQCIYUUACOR7r/MS/xoYAiCy', '09090464399', 3, '2023-01-13 16:08:24', '2023-01-13 16:08:24');

SET FOREIGN_KEY_CHECKS = 1;
