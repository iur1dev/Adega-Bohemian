-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for adega
DROP DATABASE IF EXISTS `adega`;
CREATE DATABASE IF NOT EXISTS `adega` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `adega`;

-- Dumping structure for table adega.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `CATEGORIA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  PRIMARY KEY (`CATEGORIA_ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table adega.categoria: ~5 rows (approximately)
INSERT INTO `categoria` (`CATEGORIA_ID`, `NOME`) VALUES
	(1, 'Cerveja'),
	(2, 'Copão'),
	(3, 'Refrigerante'),
	(4, 'Combo'),
	(5, 'Outros');

-- Dumping structure for table adega.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `PRODUTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORIA_ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `PRECO` decimal(20,2) NOT NULL,
  `QNT` int(11) NOT NULL,
  PRIMARY KEY (`PRODUTO_ID`) USING BTREE,
  KEY `FK_produtos_categoria` (`CATEGORIA_ID`) USING BTREE,
  CONSTRAINT `FK_produtos_categoria` FOREIGN KEY (`CATEGORIA_ID`) REFERENCES `categoria` (`CATEGORIA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table adega.produto: ~5 rows (approximately)
INSERT INTO `produto` (`PRODUTO_ID`, `CATEGORIA_ID`, `NOME`, `PRECO`, `QNT`) VALUES
	(1, 1, 'bud', 0.00, 44),
	(2, 1, 'skol', 0.00, 5),
	(3, 2, 'cavalo', 0.00, 44),
	(4, 3, 'coca', 0.00, 0),
	(5, 4, 'redlabel', 0.00, 44),
	(6, 5, 'amarelinha', 0.00, 0),
	(50, 5, 'branquinha', 1.00, 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
