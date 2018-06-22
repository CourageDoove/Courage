# Host: localhost  (Version: 5.5.53)
# Date: 2018-06-22 16:51:29
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '用户名',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

#
# Data for table "goods"
#

/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (5,'杨洋','510782100@qq.com'),(6,'张三','zhangsan@qq.com'),(7,'李四','lisi@qq.com'),(8,'王五','wangwu@qq.com'),(9,'孙六','sunliu@qq.com'),(25,'haha','范德萨发'),(26,'范德萨','范德萨发');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
