DROP TABLE IF EXISTS `feed_post`;
CREATE TABLE `feed_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_post` varchar(100) DEFAULT NULL,
  `descricao_post` varchar(250) DEFAULT NULL,
  `endereco_post` varchar(70) DEFAULT NULL,
  `data_post` date DEFAULT NULL,
  `link_fb` varchar(250) DEFAULT NULL,
  `link_instagram` varchar(250) DEFAULT NULL,
  `link_twitter` varchar(250) DEFAULT NULL,
  `link_linkedin` varchar(250) DEFAULT NULL,
  `link_wpp` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
);