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

 Date: 14/01/2023 08:39:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for band_profiles
-- ----------------------------
DROP TABLE IF EXISTS `band_profiles`;
CREATE TABLE `band_profiles`  (
  `profileID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `bandSize` int NOT NULL,
  `reper` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `artistType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandPic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`profileID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of band_profiles
-- ----------------------------
INSERT INTO `band_profiles` VALUES (1, 3, 5, 'Cover', 'Valencia City', 'Cueshe', 'Cueshe Yarn', 'Band', 'Reggae,Sample', '1-2 years', 'https://youtube.com', '323011304.jpg', '2023-01-13 16:09:07', '2023-01-13 16:09:07');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events`  (
  `eventID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `artistID` int NOT NULL,
  `eventname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventdate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `addinfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromTime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toTime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES (1, 2, 1, 'Kaamulan', '2023-01-14', 'ddd', 'Valencia City', '10:01', '20:01', '1', 5, '2023-01-13 16:42:55', '2023-01-13 16:42:55');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of iusers
-- ----------------------------
INSERT INTO `iusers` VALUES (1, 'superadmin@demo.com', '$2y$10$7iBFL83eaXM8B8Qma67zl.F5oTNDgGZUK4YIEgAh/wYa8EOugTT/q', NULL, 0, '2023-01-13 14:06:39', '2023-01-13 14:06:39');
INSERT INTO `iusers` VALUES (2, 'host@demo.com', '$2y$10$dcJMHZppUhJN7nOnoVgBN.qrK4e9WsIl8fKSY2Wp1YN00Go/Mdhp6', '09269440075', 2, '2023-01-13 16:07:00', '2023-01-13 16:07:00');
INSERT INTO `iusers` VALUES (3, 'artist@demo.com', '$2y$10$2E5eIUV.zBP2OEKXzaMsTOuWYBCFTDQCIYUUACOR7r/MS/xoYAiCy', '09090464399', 3, '2023-01-13 16:08:24', '2023-01-13 16:08:24');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_11_13_014912_create_iusers_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_11_28_170740_create_profiles_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_11_28_192237_create_payment_methods_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_01_07_100643_create_band_profiles_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_01_07_151218_create_services_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_01_12_214546_create_events_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payment_methods
-- ----------------------------
DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE `payment_methods`  (
  `paymentID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountnumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paymentID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of payment_methods
-- ----------------------------
INSERT INTO `payment_methods` VALUES (1, 2, 'gcash', '09269440075', 'Kennen C. Borbon', NULL, '2023-01-13 16:07:42', '2023-01-13 16:07:42');
INSERT INTO `payment_methods` VALUES (2, 3, 'cash', '09090464399', 'Kennen C. Borbon', NULL, '2023-01-13 16:09:55', '2023-01-13 16:09:55');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles`  (
  `profileID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`profileID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES (1, 2, 'Event Planner', 'TS Mix', 'Sample', 'Valencia City', '2230113.jpg', '2023-01-13 16:07:18', '2023-01-13 16:07:18');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `serviceID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `serviceName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`serviceID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 3, 'Gig', 'Complete Set With Drummers', 2589.00, '2023-01-13 16:09:38', '2023-01-13 16:09:38');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- View structure for vwallbandnames
-- ----------------------------
DROP VIEW IF EXISTS `vwallbandnames`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwallbandnames` AS select `band_profiles`.`bandName` AS `bandName` from `band_profiles`;

-- ----------------------------
-- View structure for vwallevents
-- ----------------------------
DROP VIEW IF EXISTS `vwallevents`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwallevents` AS select `events`.`eventID` AS `eventID`,`band_profiles`.`bandName` AS `bandName`,`band_profiles`.`bandPic` AS `bandPic`,`events`.`eventdate` AS `eventdate`,`events`.`addinfo` AS `addinfo`,`events`.`location` AS `location`,`events`.`fromTime` AS `fromTime`,`events`.`toTime` AS `toTime`,`events`.`eventname` AS `eventname` from (`events` join `band_profiles` on((`events`.`artistID` = `band_profiles`.`profileID`)));

-- ----------------------------
-- View structure for vwalleventsforbands
-- ----------------------------
DROP VIEW IF EXISTS `vwalleventsforbands`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwalleventsforbands` AS select `events`.`eventID` AS `eventID`,`events`.`eventdate` AS `eventdate`,`events`.`addinfo` AS `addinfo`,`band_profiles`.`bandName` AS `bandName`,`events`.`location` AS `location`,`events`.`fromTime` AS `fromTime`,`events`.`toTime` AS `toTime`,`events`.`services` AS `services`,`events`.`eventname` AS `eventname`,`events`.`status` AS `status`,`band_profiles`.`profileID` AS `profileID`,`band_profiles`.`userID` AS `bandUserID`,`payment_methods`.`type` AS `type`,`iusers`.`userID` AS `hostUserID` from (((`events` join `band_profiles` on((`events`.`artistID` = `band_profiles`.`profileID`))) join `payment_methods` on((`band_profiles`.`userID` = `payment_methods`.`userID`))) join `iusers` on((`events`.`userID` = `iusers`.`userID`)));

-- ----------------------------
-- View structure for vwalleventsforhost
-- ----------------------------
DROP VIEW IF EXISTS `vwalleventsforhost`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwalleventsforhost` AS select `events`.`eventID` AS `eventID`,`band_profiles`.`bandName` AS `bandName`,`band_profiles`.`bandPic` AS `bandPic`,`events`.`eventdate` AS `eventdate`,`events`.`addinfo` AS `addinfo`,`events`.`location` AS `location`,`events`.`fromTime` AS `fromTime`,`events`.`toTime` AS `toTime`,`events`.`eventname` AS `eventname`,`events`.`services` AS `services`,`payment_methods`.`type` AS `type`,`events`.`status` AS `status`,`events`.`userID` AS `userID` from ((`events` join `band_profiles` on((`events`.`artistID` = `band_profiles`.`profileID`))) join `payment_methods` on((`band_profiles`.`userID` = `payment_methods`.`userID`)));

SET FOREIGN_KEY_CHECKS = 1;
