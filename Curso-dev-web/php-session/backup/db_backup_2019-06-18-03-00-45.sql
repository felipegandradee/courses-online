DROP TABLE IF EXISTS niveis_acesso;

CREATE TABLE `niveis_acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO niveis_acesso VALUES ("1","Administrador","2019-06-07 00:00:00",NULL);
INSERT INTO niveis_acesso VALUES ("2","Financeiro","2019-06-05 00:00:00",NULL);
INSERT INTO niveis_acesso VALUES ("3","Cliente","2019-06-04 00:00:00",NULL);
INSERT INTO niveis_acesso VALUES ("4","Suporte","2019-06-17 00:00:00",NULL);


DROP TABLE IF EXISTS situacoes;

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO situacoes VALUES ("1","Ativo","2019-06-07 00:00:00",NULL);
INSERT INTO situacoes VALUES ("2","inativo","2019-06-06 00:00:00",NULL);


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT '2',
  `niveis_acesso_id` int(11) NOT NULL,
  `qt_acessos` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacoes` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acesso` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES ("1","Cesar","cesar@celki.com.br","1","1","15","2019-06-09 00:00:00",NULL);
INSERT INTO usuarios VALUES ("2","Selia","selia@celki.com.br","1","2","20","2019-06-07 00:00:00","2019-06-17 14:23:15");
INSERT INTO usuarios VALUES ("3","Gessica","Gessica@celki.com.br","2","3","15","2019-06-06 00:00:00","2019-06-17 14:22:41");
INSERT INTO usuarios VALUES ("4","Ana","ana@celke.com.br","1","3","10","2019-06-14 11:11:57","2019-06-14 14:04:06");
INSERT INTO usuarios VALUES ("5","Carlos","carlos@celke.com.br","2","3",NULL,"2019-06-17 12:11:12",NULL);
INSERT INTO usuarios VALUES ("11","Camila","camila@celke.com.br","2","3",NULL,"2019-06-17 12:14:46",NULL);


