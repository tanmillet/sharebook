/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : sharebook

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-08 16:46:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `project_name` varchar(255) DEFAULT NULL COMMENT '项目名称',
  `project_tag` char(24) DEFAULT NULL COMMENT '项目标识',
  `project_type` char(1) DEFAULT NULL COMMENT '项目类型',
  `project_status` int(1) DEFAULT '0' COMMENT '项目状态 0未开放 1正在开发 2关闭',
  `project_digest` varchar(255) DEFAULT NULL COMMENT '项目摘要',
  `project_context` text COMMENT '项目内容',
  `project_milestone` varchar(255) DEFAULT NULL COMMENT '项目里程碑',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '项目创建时间',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '项目更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', '共享书籍', 'sharebook', '0', '0', 'Shark book system 共享书籍系统 能帮助用户读书的好习惯，提高用户的阅读能力，扩展用户的知识面。', '<b>Shark book system 共享书籍系统 能帮助用户读书的好习惯，提高用户的阅读能力，扩展用户的知识面。\n                                    </b>', 'M01', '2017-12-07 06:51:59', '2017-12-07 06:51:59');
INSERT INTO `projects` VALUES ('3', '项目进度管理系统', 'projectprogress', '0', '0', '自己的项目自己管理进度自己把控', '自己的项目自己管理进度自己把控自己的项目自己管理进度自己把控自己的项目自己管理进度自己把控自己的项目自己管理进度自己把控自己的项目自己管理进度自己把控自己的项目自己管理进度自己把控', 'M01', '2017-12-07 07:12:05', '2017-12-07 07:12:05');
INSERT INTO `projects` VALUES ('5', '123123', '123123', '0', '0', '1231231', '12312312', '323213', '2017-12-08 03:35:54', '2017-12-08 03:35:54');
INSERT INTO `projects` VALUES ('6', '123123123112', '3123', '0', '0', '3213', '123213', '213213', '2017-12-08 05:45:38', '2017-12-08 05:45:38');
INSERT INTO `projects` VALUES ('7', '12321312', '321321', '1', '1', '13123', '312312', '21312', '2017-12-08 05:45:56', '2017-12-08 05:45:56');
