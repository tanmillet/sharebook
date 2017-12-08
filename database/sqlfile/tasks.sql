/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : sharebook

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-08 16:46:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_title` varchar(255) DEFAULT NULL COMMENT '任务标题',
  `task_tag` char(1) DEFAULT NULL COMMENT '任务标签',
  `task_priority` int(1) DEFAULT NULL COMMENT '任务优先度',
  `task_start_date` datetime DEFAULT NULL COMMENT '任务开始时间',
  `task_end_date` datetime DEFAULT NULL COMMENT '任务完成时间',
  `task_progress` varchar(255) DEFAULT NULL COMMENT '任务进度',
  `task_creater` varchar(255) DEFAULT NULL COMMENT '任务创建人',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '任务创建时间',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '任务更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasks
-- ----------------------------
