CREATE TABLE `voiceovers` (
  `voic_id` int(11) NOT NULL auto_increment,
  `voic_fname` varchar(50) NOT NULL,
  `voic_lname` varchar(50) NOT NULL,
  `voic_nick` varchar(50) NOT NULL,
  `voic_education` varchar(250) NOT NULL,
  `voic_principle` varchar(250) NOT NULL,
  `voic_email` varchar(50) NOT NULL,
  `voic_profile` varchar(500) NOT NULL,
  `voic_brith` varchar(500) NOT NULL,
  `voic_photo` varchar(500) NOT NULL,
  PRIMARY KEY  (`voic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;
