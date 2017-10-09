/*
Navicat MySQL Data Transfer

Source Server         : work-weiyuyan
Source Server Version : 80000
Source Host           : localhost:3306
Source Database       : huyunshuhai

Target Server Type    : MYSQL
Target Server Version : 80000
File Encoding         : 65001

Date: 2017-08-30 16:31:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_user
-- ----------------------------
DROP TABLE IF EXISTS `data_user`;
CREATE TABLE `data_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_admin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户管理员 0 不是 1是',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SET FOREIGN_KEY_CHECKS=1;
