CREATE TABLE IF NOT EXISTS `moviesentiment` (
  `sentiment` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `sentiment` (`sentiment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;