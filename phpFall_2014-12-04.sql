# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: phpFall
# Generation Time: 2014-12-05 00:14:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment` varchar(600) NOT NULL DEFAULT '',
  `to_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `comment`, `to_user_id`)
VALUES
	(1,2,'Hello Dan, hope your doing well',1),
	(2,3,'I love you Dan',1);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'http://www.moviehdwallpapers.com/wp-content/uploads/2014/10/images-7.jpg',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `image`, `username`, `password`)
VALUES
	(1,'Dan','http://www.moviehdwallpapers.com/wp-content/uploads/2014/10/images-7.jpg','daniel','e99a18c428cb38d5f260853678922e03'),
	(2,'Dude','http://placekitten.com/200/300','duder','e99a18c428cb38d5f260853678922e03'),
	(3,'Sally','http://placekitten.com/200/300','girl','0421008445828ceb46f496700a5fa65e'),
	(4,'Bob','http://www.moviehdwallpapers.com/wp-content/uploads/2014/10/images-7.jpg','boy','a41d4e699dad691cd8a4ec269b131de0'),
	(5,'marina','d41d8cd98f00b204e9800998ecf8427e','mbrod90','5d41402abc4b2a76b9719d911017c592'),
	(6,'marina','a6a5e76984ac38726b09f825c31374c7','mbrod90','5d41402abc4b2a76b9719d911017c592'),
	(7,'Daniel','e971b71c03e5ae684fecb0b4f62ec1bb','hello','a6105c0a611b41b08f1209506350279e');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
