-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: infopate_DB
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autores`
--

DROP TABLE IF EXISTS `autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `direccion1` varchar(50) NOT NULL,
  `direccion2` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  `nombre_patente` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autores`
--

LOCK TABLES `autores` WRITE;
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
INSERT INTO `autores` VALUES (28,'FERNAND','GARCIA','MORALES','UAAAN 480','VILLA UNIVERSIDAD','MEXICO','COAHUILA','SALTILLO','25069','2021-01-08 12:23:08','SCRIPTECH'),(29,'FERNANDO','GARCIA','MORALES','U.A.A.A.N. 480','VILLA UNIVERSIDAD','MEXICO','COAHUILA','SALTILLO','25069','2021-01-08 12:49:50','SCRIPTECH');
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cesionarios`
--

DROP TABLE IF EXISTS `cesionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cesionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `direccion1` varchar(50) NOT NULL,
  `direccion2` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `nombre_patente` varchar(45) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cesionarios`
--

LOCK TABLES `cesionarios` WRITE;
/*!40000 ALTER TABLE `cesionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `cesionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `nombre_rl` text NOT NULL,
  `direccion1_rl` text NOT NULL,
  `direccion2_rl` text NOT NULL,
  `email_rl` text NOT NULL,
  `telefono_rl` bigint(10) NOT NULL,
  `nombre_sol` text NOT NULL,
  `email_sol` text NOT NULL,
  `telefono_sol` bigint(10) NOT NULL,
  `fecha_mod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (2,'UNIVERSIDAD AUTONOMA DE COAHUILA','RABINDRANATH','BLVD FUNDADORES','LAS GLORIAS','rabin@uadec.edu.mx',8445698978,'FRANCISCO ORTIZ','fortiz@gmail.com',8447654321,'2020-12-29');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patentes`
--

DROP TABLE IF EXISTS `patentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `pais_presentacion` varchar(45) NOT NULL,
  `entidad_pequeña` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `aplicacion` varchar(45) NOT NULL,
  `autorizacion` varchar(2) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  `email_registro` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patentes`
--

LOCK TABLES `patentes` WRITE;
/*!40000 ALTER TABLE `patentes` DISABLE KEYS */;
INSERT INTO `patentes` VALUES (8,'SCRIPTECH','MEXICO','NO','UTILIDAD','PROVISIONAL','NO','2021-01-08 12:23:18','usuario@infopatente.mx'),(9,'SCRIPTECH','MEXICO','NO','UTILIDAD','PROVISIONAL','NO','2021-01-08 12:50:01','usuario@infopatente.mx');
/*!40000 ALTER TABLE `patentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representantes`
--

DROP TABLE IF EXISTS `representantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `direccion1` varchar(50) NOT NULL,
  `direccion2` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `nombre_patente` varchar(45) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representantes`
--

LOCK TABLES `representantes` WRITE;
/*!40000 ALTER TABLE `representantes` DISABLE KEYS */;
INSERT INTO `representantes` VALUES (17,'FERNAND','GARCIA','MORALES','UAAAN 480','VILLA UNIVERSIDAD','MEXICO','COAHUILA','SALTILLO','25069','SCRIPTECH','2021-01-08 12:23:18'),(18,'FERNANDO','GARCIA','MORALES','U.A.A.A.N. 480','VILLA UNIVERSIDAD','MEXICO','COAHUILA','SALTILLO','25069','SCRIPTECH','2021-01-08 12:50:01');
/*!40000 ALTER TABLE `representantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `num_identificacion` varchar(15) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` text NOT NULL,
  `cp` int(5) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'ALUMNO','UNIVERSIDAD AUTONOMA DE COAHUILA','14008851','FERNANDO','GARCIA','MORALES','fgarcia@scriptech.com','$2y$10$9uddmpv9yd16ADXK9Z0aeeU8U1N9BjP.TC1PKuqtXT251jrn70lUS',25069,8443326254,'2020-12-29 20:52:41'),(4,'ADMINISTRADOR','UNIVERSIDAD AUTONOMA DE COAHUILA','14008851','ADMINISTRADOR','ADMINISTRADOR','ADMINISTRADOR','usuario@infopatente.mx','$2y$10$umdMDF1i/hcRz3N/lq03DOzFs1IKz2Iv/ZjaQSq5eoHPSx9ySmbFu',25897,180012345,'2020-12-30 16:38:53'),(5,'PROFESOR','UNIVERSIDAD AUTONOMA DE COAHUILA','152468','CARLOS','GONZALEZ','DEL SAGRADO CORA','cgonzalez757@gmail.com','$2y$10$eTQ1G3EAShszmh1y3dWiT.fceunppaRApF.eUaR16Qi3V3w9U.2ki',25000,8445678987,'2021-01-08 12:54:58');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-25 15:19:07
