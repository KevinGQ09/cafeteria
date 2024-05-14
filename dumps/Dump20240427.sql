-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: cafeteria
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `Nombre_categoria` varchar(100) NOT NULL,
  `Img_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IdCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Cafés','/Proyecto/imagenes/Categorias/c1.jpg'),(2,'Bebidas Frías','/Proyecto/imagenes/Categorias/c2.jpg'),(3,'Tés','/Proyecto/imagenes/Categorias/c3.jpg'),(4,'Panadería y Repostería','/Proyecto/imagenes/Categorias/c4.jpg'),(5,'Desayunos','/Proyecto/imagenes/Categorias/c5.jpg'),(6,'Antojitos','/Proyecto/imagenes/Categorias/c6.jpg'),(7,'Ensaladas','/Proyecto/imagenes/Categorias/c7.jpg'),(8,'Bocadillos','/Proyecto/imagenes/Categorias/c8.jpg'),(9,'Especiales','/Proyecto/imagenes/Categorias/c9.jpg');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compra` (
  `IdCompra` int NOT NULL AUTO_INCREMENT,
  `IdUsuario` int NOT NULL,
  `IdProducto` int NOT NULL,
  PRIMARY KEY (`IdCompra`),
  KEY `IdUsuario_idx` (`IdUsuario`),
  KEY `IdProducto_idx` (`IdProducto`),
  CONSTRAINT `IdProducto` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`),
  CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacto` (
  `IdContacto` int NOT NULL AUTO_INCREMENT,
  `Correo` varchar(100) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  PRIMARY KEY (`IdContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle_compra` (
  `Id_Detallecompra` int NOT NULL AUTO_INCREMENT,
  `Cantidad` int NOT NULL,
  `Total_pagar` double NOT NULL,
  `Fecha` date NOT NULL,
  `IdCompra` int NOT NULL,
  PRIMARY KEY (`Id_Detallecompra`),
  KEY `IdCompra_idx` (`IdCompra`),
  CONSTRAINT `IdCompra` FOREIGN KEY (`IdCompra`) REFERENCES `compra` (`IdCompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_compra`
--

LOCK TABLES `detalle_compra` WRITE;
/*!40000 ALTER TABLE `detalle_compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_producto`
--

DROP TABLE IF EXISTS `img_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `img_producto` (
  `Id_ImgProducto` int NOT NULL AUTO_INCREMENT,
  `Imagen_Producto` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_ImgProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_producto`
--

LOCK TABLES `img_producto` WRITE;
/*!40000 ALTER TABLE `img_producto` DISABLE KEYS */;
INSERT INTO `img_producto` VALUES (1,'/Proyecto/imagenes/Productos/p1.jpg'),(2,'/Proyecto/imagenes/Productos/p2.jpg'),(3,'/Proyecto/imagenes/Productos/p3.jpg'),(4,'/Proyecto/imagenes/Productos/p4.jpg'),(5,'/Proyecto/imagenes/Productos/p5.jpg'),(6,'/Proyecto/imagenes/Productos/p6.jpg'),(7,'/Proyecto/imagenes/Productos/p7.jpg'),(8,'/Proyecto/imagenes/Productos/p8.jpg'),(9,'/Proyecto/imagenes/Productos/p9.jpg'),(10,'/Proyecto/imagenes/Productos/p10.jpg'),(11,'/Proyecto/imagenes/Productos/p11.jpg'),(12,'/Proyecto/imagenes/Productos/p12.jpg'),(13,'/Proyecto/imagenes/Productos/p13.jpg'),(14,'/Proyecto/imagenes/Productos/p14.jpg'),(15,'/Proyecto/imagenes/Productos/p15.jpg'),(16,'/Proyecto/imagenes/Productos/p16.jpg'),(17,'/Proyecto/imagenes/Productos/p17.jpg'),(18,'/Proyecto/imagenes/Productos/p18.jpg'),(19,'/Proyecto/imagenes/Productos/p19.jpg'),(20,'/Proyecto/imagenes/Productos/p20.jpg'),(21,'/Proyecto/imagenes/Productos/p21.jpg'),(22,'/Proyecto/imagenes/Productos/p22.jpg'),(23,'/Proyecto/imagenes/Productos/p23.jpg'),(24,'/Proyecto/imagenes/Productos/p24.jpg'),(25,'/Proyecto/imagenes/Productos/p25.jpg'),(26,'/Proyecto/imagenes/Productos/p26.jpg'),(27,'/Proyecto/imagenes/Productos/p27.jpg'),(28,'/Proyecto/imagenes/Productos/p28.jpg'),(29,'/Proyecto/imagenes/Productos/p29.jpg'),(30,'/Proyecto/imagenes/Productos/p30.jpg'),(31,'/Proyecto/imagenes/Productos/p31.jpg'),(32,'/Proyecto/imagenes/Productos/p32.jpg'),(33,'/Proyecto/imagenes/Productos/p33.jpg'),(34,'/Proyecto/imagenes/Productos/p34.jpg'),(35,'/Proyecto/imagenes/Productos/p35.jpg'),(36,'/Proyecto/imagenes/Productos/p36.jpg'),(37,'/Proyecto/imagenes/Productos/p37.jpg'),(38,'/Proyecto/imagenes/Productos/p38.jpg'),(39,'/Proyecto/imagenes/Productos/p39.jpg'),(40,'/Proyecto/imagenes/Productos/p40.jpg'),(41,'/Proyecto/imagenes/Productos/p41.jpg'),(42,'/Proyecto/imagenes/Productos/p42.jpg'),(43,'/Proyecto/imagenes/Productos/p43.jpg'),(44,'/Proyecto/imagenes/Productos/p44.jpg'),(45,'/Proyecto/imagenes/Productos/p45.jpg'),(46,'/Proyecto/imagenes/Productos/p46.jpg'),(47,'/Proyecto/imagenes/Productos/p47.jpg'),(48,'/Proyecto/imagenes/Productos/p48.jpg'),(49,'/Proyecto/imagenes/Productos/p49.jpg'),(50,'/Proyecto/imagenes/Productos/p50.jpg'),(51,'/Proyecto/imagenes/Productos/p51.jpg'),(52,'/Proyecto/imagenes/Productos/p52.jpg'),(53,'/Proyecto/imagenes/Productos/p53.jpg'),(54,'/Proyecto/imagenes/Productos/p54.jpg'),(55,'/Proyecto/imagenes/Productos/p55.jpg'),(56,'/Proyecto/imagenes/Productos/p56.jpg'),(57,'/Proyecto/imagenes/Productos/p57.jpg'),(58,'/Proyecto/imagenes/Productos/p58.jpg'),(59,'/Proyecto/imagenes/Productos/p59.jpg'),(60,'/Proyecto/imagenes/Productos/p60.jpg'),(61,'/Proyecto/imagenes/Productos/p61.jpg'),(62,'/Proyecto/imagenes/Productos/p62.jpg'),(63,'/Proyecto/imagenes/Productos/p63.jpg'),(64,'/Proyecto/imagenes/Productos/p64.jpg'),(65,'/Proyecto/imagenes/Productos/p65.jpg'),(66,'/Proyecto/imagenes/Productos/p66.jpg'),(67,'/Proyecto/imagenes/Productos/p67.jpg'),(68,'/Proyecto/imagenes/Productos/p68.jpg'),(69,'/Proyecto/imagenes/Productos/p69.jpg'),(70,'/Proyecto/imagenes/Productos/p70.jpg'),(71,'/Proyecto/imagenes/Productos/p71.jpg'),(72,'/Proyecto/imagenes/Productos/p72.jpg'),(73,'/Proyecto/imagenes/Productos/p73.jpg'),(74,'/Proyecto/imagenes/Productos/p74.jpg'),(75,'/Proyecto/imagenes/Productos/p75.jpg'),(76,'/Proyecto/imagenes/Productos/p76.jpg'),(77,'/Proyecto/imagenes/Productos/p77.jpg'),(78,'/Proyecto/imagenes/Productos/p78.jpg'),(79,'/Proyecto/imagenes/Productos/p79.jpg'),(80,'/Proyecto/imagenes/Productos/p80.jpg'),(81,'/Proyecto/imagenes/Productos/p81.jpg'),(82,'/Proyecto/imagenes/Productos/p82.jpg'),(83,'/Proyecto/imagenes/Productos/p83.jpg'),(84,'/Proyecto/imagenes/Productos/p84.jpg'),(85,'/Proyecto/imagenes/Productos/p85.jpg'),(86,'/Proyecto/imagenes/Productos/p86.jpg'),(87,'/Proyecto/imagenes/Productos/p87.jpg'),(88,'/Proyecto/imagenes/Productos/p88.jpg'),(89,'/Proyecto/imagenes/Productos/p89.jpg'),(90,'/Proyecto/imagenes/Productos/p90.jpg');
/*!40000 ALTER TABLE `img_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_usuario`
--

DROP TABLE IF EXISTS `info_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_usuario` (
  `IdInformacion` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `A_Paterno` varchar(100) NOT NULL,
  `A_Materno` varchar(100) NOT NULL,
  `IdContacto` int NOT NULL,
  PRIMARY KEY (`IdInformacion`),
  KEY `IdContacto_idx` (`IdContacto`),
  CONSTRAINT `IdContacto` FOREIGN KEY (`IdContacto`) REFERENCES `contacto` (`IdContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_usuario`
--

LOCK TABLES `info_usuario` WRITE;
/*!40000 ALTER TABLE `info_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `info_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `IdProducto` int NOT NULL AUTO_INCREMENT,
  `Nombre_producto` varchar(100) NOT NULL,
  `Precio` varchar(45) NOT NULL,
  `Id_ImgProducto` int NOT NULL,
  `Id_Categoria` int NOT NULL,
  PRIMARY KEY (`IdProducto`),
  KEY `Id_ImgProducto_idx` (`Id_ImgProducto`),
  KEY `Id_Categoria_idx` (`Id_Categoria`),
  CONSTRAINT `Id_Categoria` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`IdCategoria`),
  CONSTRAINT `Id_ImgProducto` FOREIGN KEY (`Id_ImgProducto`) REFERENCES `img_producto` (`Id_ImgProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'Espresso','2.50',1,1),(2,'Americano','3.00',2,1),(3,'Latte','4.00',3,1),(4,'Cappuccino','4.50',4,1),(5,'Mocha','4.50',5,1),(6,'Macchiato','3.50',6,1),(7,'Flat White','4.50',7,1),(8,'Café con Leche','3.50',8,1),(9,'Café Au Lait','3.50',9,1),(10,'Cortado','3.00',10,1),(11,'Frappé de Café','4.50',11,2),(12,'Frappé de Chocolate','5.00',12,2),(13,'Té Helado','3.50',13,2),(14,'Limonada','3.00',14,2),(15,'Refresco de Botella','2.50',15,2),(16,'Agua Mineral','1.50',16,2),(17,'Smoothie de Frutas','4.50',17,2),(18,'Batido de Leche','4.00',18,2),(19,'Horchata','3.00',19,2),(20,'Jugo de Naranja Natural','3.50',20,2),(21,'Té Verde','3.00',21,3),(22,'Té Negro','3.00',22,3),(23,'Té de Hierbas','3.50',23,3),(24,'Té Chai','4.00',24,3),(25,'Té de Frutas','3.50',25,3),(26,'Té Matcha','4.50',26,3),(27,'Té Oolong','4.00',27,3),(28,'Té Earl Grey','3.50',28,3),(29,'Té Blanco','4.00',29,3),(30,'Té Rooibos','3.50',30,3),(31,'Croissant','2.50',31,4),(32,'Muffin de Arándanos','2.50',32,4),(33,'Donut','2.00',33,4),(34,'Galleta de Chocolate','1.50',34,4),(35,'Bagel','2.50',35,4),(36,'Pastel de Zanahoria','3.50',36,4),(37,'Brownie','2.50',37,4),(38,'Empanada de Queso','3.00',38,4),(39,'Rol de Canela','3.00',39,4),(40,'Tarta de Manzana','4.00',40,4),(41,'Desayuno Continental','6.00',41,5),(42,'Omelette de Queso','7.50',42,5),(43,'Huevos Benedictinos','8.00',43,5),(44,'Tortitas con Sirop de Arce','5.50',44,5),(45,'Desayuno Inglés','9.00',45,5),(46,'Avena con Frutas','4.50',46,5),(47,'Yogur con Granola','4.00',47,5),(48,'Tostadas Francesas','6.50',48,5),(49,'Pan Tostado con Aguacate','5.00',49,5),(50,'Desayuno Vegetariano','7.00',50,5),(51,'Nachos con Queso','5.00',51,6),(52,'Tacos de Pollo','6.00',52,6),(53,'Quesadillas','4.50',53,6),(54,'Alitas de Pollo','7.00',54,6),(55,'Papas Fritas','3.50',55,6),(56,'Palitos de Mozzarella','4.00',56,6),(57,'Jalapeños Rellenos','5.50',57,6),(58,'Rollitos de Primavera','4.50',58,6),(59,'Patatas Bravas','4.50',59,6),(60,'Tequeños','5.00',60,6),(71,'Ensalada César','7.00',61,7),(72,'Ensalada Griega','8.00',62,7),(73,'Ensalada Caprese','6.50',63,7),(74,'Ensalada de Pollo a la Parrilla','9.00',64,7),(75,'Ensalada de Atún','7.50',65,7),(76,'Ensalada de Frutas','5.00',66,7),(77,'Ensalada de Quinoa','6.50',67,7),(78,'Ensalada de Pasta','6.50',68,7),(79,'Ensalada de Espinacas y Fresas','7.50',69,7),(80,'Ensalada de Mango y Aguacate','8.00',70,7),(81,'Bocadillo de Jamón y Queso','5.00',71,8),(82,'Bocadillo de Pollo Pesto','6.00',72,8),(83,'Bocadillo Vegetariano','4.50',73,8),(84,'Bocadillo de Roast Beef','6.50',74,8),(85,'Bocadillo de Pavo y Aguacate','6.00',75,8),(86,'Bocadillo de Salmón Ahumado','7.00',76,8),(87,'Bocadillo de Albóndigas','5.50',77,8),(88,'Bocadillo Cubano','7.50',78,8),(89,'Bocadillo de Tofu','5.00',79,8),(90,'Bocadillo de Pastrami','7.00',80,8),(91,'Sándwich de Desayuno Especial','8.50',81,9),(92,'Sopa del Día','5.00',82,9),(93,'Hamburguesa Gourmet','9.00',83,9),(94,'Pizza Personalizada','8.00',84,9),(95,'Plato de Sushi','10.00',85,9),(96,'Tacos de Mariscos','9.50',86,9),(97,'Pasta Fresca del Día','10.00',87,9),(98,'Curry de Verduras','8.50',88,9),(99,'Paella Valenciana','12.00',89,9),(100,'Parrillada Mixta','14.00',90,9);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `IdRol` int NOT NULL AUTO_INCREMENT,
  `NombreRol` varchar(45) NOT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `IdInformacion` int NOT NULL,
  `IdRol` int NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `IdInformacion_idx` (`IdInformacion`),
  KEY `IdRol_idx` (`IdRol`),
  CONSTRAINT `IdInformacion` FOREIGN KEY (`IdInformacion`) REFERENCES `info_usuario` (`IdInformacion`),
  CONSTRAINT `IdRol` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
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

-- Dump completed on 2024-04-27 12:03:51
