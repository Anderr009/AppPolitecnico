-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ventas
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carritoprod`
--

DROP TABLE IF EXISTS `carritoprod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carritoprod` (
  `fkcarrito` int(11) NOT NULL,
  `fkprod` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `fkcarrito` (`fkcarrito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritoprod`
--

LOCK TABLES `carritoprod` WRITE;
/*!40000 ALTER TABLE `carritoprod` DISABLE KEYS */;
/*!40000 ALTER TABLE `carritoprod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clienteid`
--

DROP TABLE IF EXISTS `clienteid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clienteid` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `NombreC` varchar(60) NOT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `fkcorreo` int(100) NOT NULL,
  `fkusuario` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fkcorreo` (`fkcorreo`),
  KEY `fkusuario` (`fkusuario`),
  CONSTRAINT `clienteid_ibfk_4` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clienteid`
--

LOCK TABLES `clienteid` WRITE;
/*!40000 ALTER TABLE `clienteid` DISABLE KEYS */;
INSERT INTO `clienteid` VALUES (4,'Junior Mora',NULL,14,18);
/*!40000 ALTER TABLE `clienteid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correo`
--

DROP TABLE IF EXISTS `correo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `correo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correo`
--

LOCK TABLES `correo` WRITE;
/*!40000 ALTER TABLE `correo` DISABLE KEYS */;
INSERT INTO `correo` VALUES (10,'Anderson_ortiz05@hotmail.com','Anderson25'),(11,'Anderson_ortiz03@hotmail.com','Anderson25'),(12,'Anderson_ror o','Anderson'),(14,'Junior_05@hotmail.com','1234');
/*!40000 ALTER TABLE `correo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(99) NOT NULL,
  `Apellido` varchar(99) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `salario` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `HoraEntrada` text NOT NULL,
  `HoraSalida` text NOT NULL,
  `fkCorreo` int(11) DEFAULT NULL,
  `fkUsuario` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fkCorreo` (`fkCorreo`),
  KEY `empleado-ibfk2` (`fkUsuario`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`fkUsuario`) REFERENCES `usuario` (`ID`),
  CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`fkCorreo`) REFERENCES `correo` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES (16,'Ander','Ortiz H','0999',8099,'Baynoa','03:00','20:00',12,15);
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuesta`
--

DROP TABLE IF EXISTS `encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) NOT NULL,
  `respuesta-correcta` varchar(100) NOT NULL,
  `repuesta-i1` varchar(100) NOT NULL,
  `repuesta-i2` varchar(100) NOT NULL,
  `fecha-expiracion` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta`
--

LOCK TABLES `encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `ID` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `FkCarrito` int(11) NOT NULL,
  `Monto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveles-usuario`
--

DROP TABLE IF EXISTS `niveles-usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveles-usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nivel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveles-usuario`
--

LOCK TABLES `niveles-usuario` WRITE;
/*!40000 ALTER TABLE `niveles-usuario` DISABLE KEYS */;
INSERT INTO `niveles-usuario` VALUES (1,'Administrador'),(2,'E-inventario'),(3,'E-encuestas'),(4,'cliente');
/*!40000 ALTER TABLE `niveles-usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `fechaIngreso` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Disponible` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (24,'Pata de cuaba','04/05/2022',3000,10,0,'kata.jpg'),(25,'Yuca hervida','04/05/2022',200,4,0,'kata.jpg'),(26,'Cuaderno practico de ramon','04/05/2022',4000,1,0,'highway-g9ca705d9a_1920.jpg');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `fkCliente` int(100) NOT NULL,
  `fkProducto` int(100) NOT NULL,
  KEY `fkCliente` (`fkCliente`),
  KEY `fkProducto` (`fkProducto`),
  CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `clienteid` (`ID`),
  CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`fkProducto`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjeta`
--

DROP TABLE IF EXISTS `tarjeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjeta` (
  `id` int(11) NOT NULL,
  `Tipotarjeta` int(11) NOT NULL,
  `NumeroTarjeta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjeta`
--

LOCK TABLES `tarjeta` WRITE;
/*!40000 ALTER TABLE `tarjeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarjeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `tipoTelefono` varchar(15) NOT NULL,
  `numero` int(10) NOT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefonoempleado`
--

DROP TABLE IF EXISTS `telefonoempleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefonoempleado` (
  `fkEmpleado` int(11) NOT NULL,
  `fkTelefono` int(11) NOT NULL,
  KEY `fkEmpleado` (`fkEmpleado`),
  KEY `fkTelefono` (`fkTelefono`),
  CONSTRAINT `telefonoempleado_ibfk_2` FOREIGN KEY (`fkTelefono`) REFERENCES `telefono` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefonoempleado`
--

LOCK TABLES `telefonoempleado` WRITE;
/*!40000 ALTER TABLE `telefonoempleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefonoempleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(20) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `Nivel` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Nivel` (`Nivel`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Nivel`) REFERENCES `niveles-usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (15,'Anderr009','Anderson25',1),(16,'Ander009','Anderson25',1),(17,'Anderson009','anderson',1),(18,'JuniorCliente','1234',4);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-03 21:22:51
