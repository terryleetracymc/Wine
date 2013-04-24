/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50610
Source Host           : localhost:3306
Source Database       : winesite

Target Server Type    : MYSQL
Target Server Version : 50610
File Encoding         : 65001

Date: 2013-04-24 23:33:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `content` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '2013-04-20 23:06:13', '你好中国', '18610584583', '122020903@qq.com');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `news_title` char(255) DEFAULT NULL,
  `news_type` char(30) DEFAULT NULL,
  `news_content` varchar(5000) DEFAULT NULL,
  `news_time` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='新闻表格';

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('6', '康神威武', '行业新闻', '<div><span style=\"font-size:24px\">汪小康神一般的存在感！</span></div>\r\n', '2013-04-23 16:54:35');

-- ----------------------------
-- Table structure for `photo`
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `photoPath` varchar(255) NOT NULL,
  `photolink` varchar(255) DEFAULT NULL,
  `photoinfo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('4', '2166220130421151133123.png', 'http://www.baidu.com', 'Hello World');

-- ----------------------------
-- Table structure for `region`
-- ----------------------------
DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) NOT NULL,
  `photoPath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of region
-- ----------------------------

-- ----------------------------
-- Table structure for `wine`
-- ----------------------------
DROP TABLE IF EXISTS `wine`;
CREATE TABLE `wine` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `photoPath` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `introduction` varchar(1024) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `taste` varchar(255) DEFAULT NULL,
  `suggest` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wine
-- ----------------------------
INSERT INTO `wine` VALUES ('1', '草泥马', '26051201304230851271.jpg', '8888', '马勒戈壁', '“草泥马”的起源与起因尚不明确，其最初的目的可能是纯粹的恶搞。也有观点认为，2009年中共发起整治互联网低俗之风专项行动，大量网站因为“低俗”而被叫停，脏话被屏蔽，引发一些网民的不满，于是网民发明了用“草泥马”等谐音字的脏话绕过网站的屏蔽，并逐渐创作出了以“草泥马”为代表的“十大神兽”。百度上的该词条内容很快被修正，后YouTube上出现由网友制作的《戈壁上的草泥马》、《草泥马之歌》、《草泥马之歌（动画版）》等视频。早期的“草泥马”图片有使用斑马、羊驼等，后多统一用羊驼作为其形象。', null, null, null, null);
INSERT INTO `wine` VALUES ('2', '法克鱿', '569920130423081228u=1990636834,355916271&fm=3&gp=0.jpg', '99998', '马勒戈壁', '原产欧美的一种极其凶猛的鱿鱼，软体动物，能对人身造成无法恢复的伤害。  \r\n　　锯调查原产于法国和克罗地亚，故名“法克鱿”。  \r\n　　传入韩国后，韩国人很喜欢吃，和玉米一起爆炒可以有特殊的香气，《玉米法克鱿》是世界五大美食之一，连一向对视频挑剔的中国人都经常去吃。点菜的时候，还没等小姐递过来菜单，一些真正的美食家就喊道“玉米法克鱿，韩国法克鱿，要非主流的法克鱿！”这时候小姐总是心领神会的点点头。  \r\n　　这种鱿鱼从来不生活在主要的河流里面 ，所以有关科学家称它们为非主流，关于他们的生活习性目前正在研究之中，有关人士表示天亮的时候它们从来不出来，只有天黑的时候它们才成群结队的出没，进行繁殖和产卵，并且繁殖速度极快。  \r\n　　　　法克鱿同时也具有身后的文化底蕴，元谋人，北京人的壁画上就曾经出现过它们，可以说自人类诞生之人起，法克鱿就在人类文明中扮演着重要的角色，一些远古部落甚至把它们当作图腾。据称那个部落后来一句到韩国，这可能是韩国人喜欢吃法克鱿的一个深层次的原因。这是毅种循环。  \r\n　　欧洲世界更是爱之如命，著名的歌曲... ', null, null, null, null);
INSERT INTO `wine` VALUES ('4', '神兽草泥马', '16354201304230855221.jpg', '999999', '马勒戈壁', '“草泥马”的起源与起因尚不明确，其最初的目的可能是纯粹的恶搞。也有观点认为，2009年中共发起整治互联网低俗之风专项行动，大量网站因为“低俗”而被叫停，脏话被屏蔽，引发一些网民的不满，于是网民发明了用“草泥马”等谐音字的脏话绕过网站的屏蔽，并逐渐创作出了以“草泥马”为代表的“十大神兽”。百度上的该词条内容很快被修正，后YouTube上出现由网友制作的《戈壁上的草泥马》、《草泥马之歌》、《草泥马之歌（动画版）》等视频。早期的“草泥马”图片有使用斑马、羊驼等，后多统一用羊驼作为其形象。', null, null, null, null);
INSERT INTO `wine` VALUES ('5', '康神之酒', '1555920130424172013bg-login.gif', '99990999', '中国大陆', '<div><span style=\"font-size:22px\">攻心为上~~~</span></div>\r\n', 'AAA', 'AAA', '重口味', '加水饮用');
