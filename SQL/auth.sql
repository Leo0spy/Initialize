/*
Navicat MySQL Data Transfer

Source Server         : CMS
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : st_auth

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-07-03 17:48:08
*/

SET FOREIGN_KEY_CHECKS=0;

ALTER TABLE accounts ADD cms_avatar INT(11) NOT NULL DEFAULT '1';
ALTER TABLE accounts ADD cms_votes INT(11) NOT NULL DEFAULT '0';
ALTER TABLE accounts ADD cms_heurevote BIGINT(20) NOT NULL;

-- ----------------------------
-- Table structure for cms_bugtrackers
-- ----------------------------
DROP TABLE IF EXISTS `cms_bugtrackers`;
CREATE TABLE `cms_bugtrackers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `vote` int(11) DEFAULT NULL,
  `vote_account` longtext,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_bugtrackers
-- ----------------------------
INSERT INTO `cms_bugtrackers` VALUES ('1', '2', 'C est parti', '3', '2|8|', 'Voyons les limites de la machine\r\n');
INSERT INTO `cms_bugtrackers` VALUES ('2', '8', 'C\\\'est quoi ci délir', '0', '8|', 'OKLM ça marche.&lt;br /&gt;\r\nNon je déc...&lt;br /&gt;\r\n&lt;br /&gt;\r\nTa gueule.');

-- ----------------------------
-- Table structure for cms_ip_vote
-- ----------------------------
DROP TABLE IF EXISTS `cms_ip_vote`;
CREATE TABLE `cms_ip_vote` (
  `ip` varchar(15) DEFAULT NULL,
  `heurevote` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_ip_vote
-- ----------------------------
INSERT INTO `cms_ip_vote` VALUES ('127.0.0.1', '1435934781');
INSERT INTO `cms_ip_vote` VALUES ('::1', '1427909078');

-- ----------------------------
-- Table structure for cms_news
-- ----------------------------
DROP TABLE IF EXISTS `cms_news`;
CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT '1',
  `author` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` text,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_news
-- ----------------------------
INSERT INTO `cms_news` VALUES ('1', 'other/1.jpg', '1', 'Liox', '2015-06-19', 'Printing and Type Setting Industry', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');
INSERT INTO `cms_news` VALUES ('2', 'other/4.jpg', '2', 'Inconnu', '2015-06-16', 'Standards of Font Sizes', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');
INSERT INTO `cms_news` VALUES ('3', 'other/3.jpg', '3', 'Liox', '2015-06-18', 'Standards of Font Sizes', 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

-- ----------------------------
-- Table structure for cms_news_comments
-- ----------------------------
DROP TABLE IF EXISTS `cms_news_comments`;
CREATE TABLE `cms_news_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL DEFAULT '1',
  `date` date DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_news_comments
-- ----------------------------
INSERT INTO `cms_news_comments` VALUES ('1', '3', '2015-06-20', '2', 'Donec id elit non mi portas sats eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum anibhut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna..');
INSERT INTO `cms_news_comments` VALUES ('2', '3', '2015-06-20', '1', 'Cool, ce sera super !');
INSERT INTO `cms_news_comments` VALUES ('3', '3', '2015-07-03', '8', 'Test, pour voir...\r\nSi les commentaires marchent.');
INSERT INTO `cms_news_comments` VALUES ('4', '3', '2015-07-03', '8', 'Fuck la vie.<br />\r\nNon je déc.');

-- ----------------------------
-- Table structure for cms_screenshots
-- ----------------------------
DROP TABLE IF EXISTS `cms_screenshots`;
CREATE TABLE `cms_screenshots` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_screenshots
-- ----------------------------
INSERT INTO `cms_screenshots` VALUES ('1', 'other/1.jpg', 'Facilisis odio, dapibus ac justo acilisis gestinas.');
INSERT INTO `cms_screenshots` VALUES ('2', 'other/2.jpg', 'Facilisis odio, dapibus ac justo acilisis gestinas.');

-- ----------------------------
-- Table structure for cms_sliders
-- ----------------------------
DROP TABLE IF EXISTS `cms_sliders`;
CREATE TABLE `cms_sliders` (
  `id` int(11) NOT NULL,
  `title` text,
  `content` text,
  `img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_sliders
-- ----------------------------
INSERT INTO `cms_sliders` VALUES ('2', 'Un developpement</i> <br /> <i>constant...', 'Nos developpeurs travaillent <br/> constamment pour vous apporter le meilleur !', 'dev.png');
INSERT INTO `cms_sliders` VALUES ('3', 'Decouvrez nos services</i> <br/> <i>pour tous nos aventuriers</i> <br/> <i>sur Initialize !', 'Nos services sont divers & varies <br/>Personnalisation ou Ameliorations <br/> Trouvez ce qui vous convient le mieux <br/> dans notre boutique en jeu !', 'eniripsa.png');
INSERT INTO `cms_sliders` VALUES ('4', 'Des evenements</i> <br/> <i>reguliers sur Initialize !', 'Nos animateurs et toute l\'equipe <br/> travaillent dure pour vos offrir <br/> des moments inedits et divertissant <br/> sur Initialize!', 'event.png');

-- ----------------------------
-- Table structure for cms_staff
-- ----------------------------
DROP TABLE IF EXISTS `cms_staff`;
CREATE TABLE `cms_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `rank` text NOT NULL,
  `avatar` int(11) NOT NULL DEFAULT '1',
  `skype_name` text NOT NULL,
  `name_ig` text NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_staff
-- ----------------------------
INSERT INTO `cms_staff` VALUES ('1', 'Liox', 'Développeur Web', '58', 'agora.dofus', 'Liox', 'S\'occupe de la partie Web du serveur.');
INSERT INTO `cms_staff` VALUES ('2', 'Staff 2', 'Larbin', '5', '', 'staff2', null);
INSERT INTO `cms_staff` VALUES ('3', 'Staff 3', 'Larbin', '16', '', 'staff3', null);
INSERT INTO `cms_staff` VALUES ('4', 'Lorem', 'Animateur', '59', '', 'Lorem', null);

-- ----------------------------
-- Table structure for cms_tickets
-- ----------------------------
DROP TABLE IF EXISTS `cms_tickets`;
CREATE TABLE `cms_tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date` date DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `label` int(11) DEFAULT NULL,
  `post` text,
  `closed` tinyint(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_tickets
-- ----------------------------
INSERT INTO `cms_tickets` VALUES ('1', 'Impossible de s\\\'inscrire', '2015-05-30', '9', '3', 'Il m\\\'est impossible depuis ce matin, de m\\\'inscrire sur le serveur.&lt;br /&gt;\r\nMerci de régler cela.&lt;br /&gt;\r\n&lt;br /&gt;\r\nCordialement, Agora.', '0');
INSERT INTO `cms_tickets` VALUES ('2', 'C\\\'est quoi ?', '2015-07-03', '8', '1', 'Rien du tout.&lt;br /&gt;\r\n&lt;br /&gt;\r\nUn test.', '0');

-- ----------------------------
-- Table structure for cms_tickets_answers
-- ----------------------------
DROP TABLE IF EXISTS `cms_tickets_answers`;
CREATE TABLE `cms_tickets_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `post` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cms_tickets_answers
-- ----------------------------
