-- create database structures

-- 1.user表
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  -- id、用户名、密码
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,

  -- 姓名、昵称、性别、生日、
  `realname` varchar(255),
  `nickname` varchar(255),
  `sex` enum('男','女'),
  `birthday` datetime,

  -- 兴趣、简介、运动等级
  `hobby` varchar(255),
  `introduction` varchar(255),
  `sportrank` int(11) NOT NULL DEFAULT '0',

  -- 每日步数、距离、能量的目标
  `steptarget` int(11) NOT NULL DEFAULT '1000',
  `distancetarget` int(11) NOT NULL DEFAULT '1',
  `energytarget` int(11) NOT NULL DEFAULT '500',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



-- —体重表
DROP TABLE IF EXISTS `weight`;
CREATE TABLE `weight` (
  -- 用户ID、日期、
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL,

  -- 体重数km、身高数cm、
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,

  -- 体脂率%最大100、目标体重
  `fatrate` int(11) NOT NULL,
  `weighttarget` int(11),

  PRIMARY KEY (`userid`,`date`),

  -- 引用用户ID
  CONSTRAINT `weight_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- —每天数据汇总表，每天早晨更新昨天的数据
DROP TABLE IF EXISTS `daily_data`;
CREATE TABLE `daily_data` (
  -- 用户ID、日期、
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL,

  -- 消耗卡路里/运动距离/步数/运动时长/平均心率
  `calories` int(11) NOT NULL,
  `meters` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `minutes` int(11) NOT NULL,
  `heartrate` int(11) NOT NULL,

  -- 入睡时间/起床时间/总睡眠时间
  `sleepAt` datetime NOT NULL,
  `wakeAt` datetime NOT NULL,
  `total_minutes` int(11) NOT NULL,

  PRIMARY KEY (`userid`,`date`),

  -- 引用用户ID
  CONSTRAINT `daily_data_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


  -- —实时数据表，每小时更新一次
DROP TABLE IF EXISTS `hour_data`;
CREATE TABLE `hour_data` (
  -- 用户ID、日期、开始小时（0-23）凌晨开始
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `hour` int(11) NOT NULL,

  -- 消耗卡路里/运动距离/步数/运动时长/平均心率
  `calories` int(11) NOT NULL,
  `meters` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `minutes` int(11) NOT NULL,
  `heartrate` int(11) NOT NULL,

  PRIMARY KEY (`userid`,`date`,`hour`),

  -- 引用用户ID
  CONSTRAINT `hour_data_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

  -- 2.group表

DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  -- ID、群组头像、名称、成员数目、介绍
  `id` int(11) NOT NULL AUTO_INCREMENT,

  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `membernum` int(11) NOT NULL DEFAULT '1',
  `introduction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



  -- 3.竞赛表
DROP TABLE IF EXISTS `competition`;
CREATE TABLE `competition` (
  -- ID、名称、目标、人数、
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,

  -- 类型、奖励、分配原则
  `type` int(1) NOT NULL DEFAULT '1',
  `bonus` varchar(255) NOT NULL,
  `rule` varchar(255) NOT NULL,
  `rulemore` varchar(255),

  -- 比赛起止时间、详细规则
  `startAt` datetime NOT NULL,
  `endAt` datetime NOT NULL,

  -- 发起者ID外键（只有一个发起者）
  `startid` int(11) NOT NULL;

  PRIMARY KEY (`id`),

  -- 引用用户ID
  CONSTRAINT `competition_ibfk_1` FOREIGN KEY (`startid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


  -- 1-2多对多 群组-人员表
DROP TABLE IF EXISTS `group_user`;
CREATE TABLE `group_user` (
  -- 用户ID——群组ID
  `userid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,

  PRIMARY KEY (`userid`,`groupid`),

  CONSTRAINT `group_user_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `group_user_ibfk_2` FOREIGN KEY (`groupid`)
  REFERENCES `group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

  -- 1-3多对多 竞赛-参与人员表，包含了参与+历史竞赛功能
DROP TABLE IF EXISTS `compete_user`;
CREATE TABLE `compete_user` (
  -- 用户ID、参与竞赛ID
  `userid` int(11) NOT NULL,
  `competeid` int(11) NOT NULL,

  -- 完成度（目前情况%胜利条件）、收获奖金、是否获胜
   `percent` int(11) NOT NULL DEFAULT '0',
   `getbonus` int(11) NOT NULL DEFAULT '0',
   `win` int(1) NOT NULL DEFAULT '0',

  PRIMARY KEY (`userid`,`competeid`),

  CONSTRAINT `compete_user_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `compete_user_ibfk_2` FOREIGN KEY (`competeid`)
  REFERENCES `competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

  -- 4.post表
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  -- ID、时间、动态内容
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime NOT NULL,
  `content` text NOT NULL,

  -- 发表动态的用户id
  `userid` int(11) NOT NULL,

  PRIMARY KEY (`id`),

  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userid`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

  -- 1-4多对多 用户-发的动态表
DROP TABLE IF EXISTS `post_user`;



  -- 1-1好友关系表
DROP TABLE IF EXISTS `user_user`;
CREATE TABLE `user_user` (
    -- 一个好友关系，两个用户
  `user1id` int(11) NOT NULL,
  `user2id` int(11) NOT NULL,

  PRIMARY KEY (`user1id`,`user2id`),

  CONSTRAINT `user_user_ibfk_1` FOREIGN KEY (`user1id`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_user_ibfk_2` FOREIGN KEY (`user2id`)
  REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;