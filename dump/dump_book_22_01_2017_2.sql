-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para book_db
CREATE DATABASE IF NOT EXISTS `book_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `book_db`;

-- Copiando estrutura para tabela book_db.book
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `page` varchar(4) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela book_db.book: 26 rows
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` (`id`, `title`, `author`, `year`, `page`, `genre_id`) VALUES
	(1, 'A Doll\'s House', 'Henrik Ibsen', '1906', '100', 1),
	(2, 'A Sentimental Education', 'Gustave Flaubert', '1999', '90', 1),
	(3, 'Absalom, Absalom!', 'William Faulkner', '1993', '200', 1),
	(4, 'The Adventures of Huckleberry Finn', 'Mark Twain', '2000', '300', 1),
	(5, 'Lucíola', 'José de Alencar', '2005', '500', 1),
	(6, 'Anna Karenina', 'Leo Tolstoy', '2005', '500', 2),
	(7, 'The Aeneid', 'Virgil', '2006', '90', 2),
	(8, 'Beloved', 'Toni Morrison', '2007', '199', 2),
	(9, 'Berlin Alexanderplatz', 'Alfred Doblin', '2008', '278', 2),
	(10, 'Blindness', 'Jose Saramago', '2009', '100', 2),
	(11, 'The Book of Disquiet', 'Fernando Pessoa', '2010', '90', 3),
	(12, 'The Book of Job', 'Israel', '2011', '100', 3),
	(13, 'The Brothers Karamazov', 'Fyodor M Dostoyevsky', '2012', '200', 3),
	(14, 'Buddenbrooks', 'Thomas Mann', '2013', '300', 3),
	(15, 'Canterbury Tales', 'Geoffrey Chaucer', '2014', '94', 3),
	(16, 'The Castle', 'Franz Kafka', '2015', '94', 4),
	(17, 'Children of Gebelawi', 'Naguib Mahfouz', '2016', '123', 4),
	(18, 'Collected Fictions', 'Jorge Luis Borges', '2017', '245', 4),
	(19, 'Complete Poems', 'Giacomo Leopardi', '1980', '800', 4),
	(20, 'The Complete Stories', 'Franz Kafka', '1981', '120', 4),
	(21, 'Crime and Punishment', 'Fyodor M Dostoyevsky', '1982', '90', 5),
	(22, 'Dead Souls', 'Nikolai Gogol', '1983', '87', 5),
	(23, 'The Death of Ivan Ilyich and Other Stories', 'Leo Tolstoy', '1984', '378', 5),
	(24, 'Decameron', 'Giovanni Boccaccio', '1985', '455', 5),
	(25, 'Grande Sertão: Veredas', 'Guimarães Rosa', '1907', '98', 5),
	(26, 'Don Quixote', 'Miguel de Cervantes Saavedra', '1997', '999', 1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;

-- Copiando estrutura para tabela book_db.genre
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela book_db.genre: 5 rows
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id`, `name`) VALUES
	(1, 'Romance'),
	(2, 'Novela'),
	(3, 'Poesia'),
	(4, 'Drama'),
	(5, 'Conto');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Copiando estrutura para tabela book_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela book_db.migrations: 4 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2017_01_15_233637_create_user_table', 1),
	('2017_01_21_205936_alter_table_user_add_column_remember_token', 2),
	('2017_01_22_004705_create_table_genre', 3),
	('2017_01_22_005156_create_table_book', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela book_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela book_db.user: 3 rows
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `password`, `remember_token`) VALUES
	(1, 'Alberto Kato', 'albertokatojr@gmail.com', '$2y$10$jxQOwzd3oxL5slT9HGqMhuM78h5GqU0HCgLrAo.XxZlFEgXEdU/J6', 'PJhdONh4vv86rk2EvGvrQrFTFDtVKOcsl1dCzXl3QQ3QEIaIPt4hvKsfehcq'),
	(2, 'Lucinea Kato', 'lucineakato@gmail.com', '$2y$10$sAq0qNUjD7WhCv.LA9eGhO1D8SUUcdxMzQozXFqWXdYcS98DyNN3.', 'WiAYpbgX6TXTG6gvBfVFdkexT82aMxtE0ckTfTic1ze6X6VQVR08xTINGogi'),
	(3, 'Sussumu Kato', 'sussumukato@gmail.com', '$2y$10$RwqqLslj5r3kTm27kl4WI./DAdugIfqG2KokoZQHu1zAgXfiAye6G', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
