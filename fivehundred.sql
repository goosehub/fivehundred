CREATE TABLE IF NOT EXISTS `code` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` text NOT NULL,
  `title` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;