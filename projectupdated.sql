-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: bankingnew
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `acc_interest`
--

DROP TABLE IF EXISTS `acc_interest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acc_interest` (
  `accid` decimal(13,0) NOT NULL,
  `difadded` float NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `accoid_idx` (`accid`),
  CONSTRAINT `accoid` FOREIGN KEY (`accid`) REFERENCES `account` (`accno`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acc_interest`
--

LOCK TABLES `acc_interest` WRITE;
/*!40000 ALTER TABLE `acc_interest` DISABLE KEYS */;
INSERT INTO `acc_interest` VALUES (1409201002567,261.101,3,'2019-11-19'),(1409201005552,197.936,4,'2019-11-19'),(1409208003289,315.848,5,'2019-11-19'),(1409208005021,176.88,6,'2019-11-19'),(1409327432647,1276.04,7,'2019-11-19'),(1792003672458,638.025,9,'2019-11-19'),(1792103004473,286.388,10,'2019-11-19'),(1792108009233,155.824,12,'2019-11-19'),(1792203008810,164.242,13,'2019-11-19'),(1792208001198,252.682,14,'2019-11-19'),(1897001233459,6397.06,15,'2019-11-19'),(1897101001059,159.607,16,'2019-11-19'),(1897108001190,172.661,17,'2019-11-19'),(1897108001234,127.605,18,'2019-11-19'),(1897109002543,255.63,19,'2019-11-19'),(1897109009281,127.605,20,'2019-11-19'),(2941108001987,223.204,22,'2019-11-19'),(2941108004723,303.214,23,'2019-11-19'),(2941109002434,268.695,24,'2019-11-19'),(1409201002567,262.08,28,'2019-11-19'),(1409201005552,198.679,29,'2019-11-19'),(1409208003289,317.033,30,'2019-11-19'),(1409208005021,177.544,31,'2019-11-19'),(1409327432647,1280.83,32,'2019-11-19'),(1792003672458,640.417,34,'2019-11-19'),(1792103004473,287.46,35,'2019-11-19'),(1792108009233,156.409,37,'2019-11-19'),(1792203008810,164.857,38,'2019-11-19'),(1792208001198,253.631,39,'2019-11-19'),(1897001233459,6421.05,40,'2019-11-19'),(1897101001059,160.208,41,'2019-11-19'),(1897108001190,173.31,42,'2019-11-19'),(1897108001234,128.085,43,'2019-11-19'),(1897109002543,256.59,44,'2019-11-19'),(1897109009281,128.085,45,'2019-11-19'),(2941108001987,224.04,47,'2019-11-19'),(2941108004723,304.35,48,'2019-11-19'),(2941109002434,269.704,49,'2019-11-19'),(1409201002567,263.062,53,'2019-11-19'),(1409201005552,199.425,54,'2019-11-19'),(1409208003289,318.221,55,'2019-11-19'),(1409208005021,178.211,56,'2019-11-19'),(1409327432647,1285.63,57,'2019-11-19'),(1792003672458,642.818,59,'2019-11-19'),(1792103004473,288.536,60,'2019-11-19'),(1792108009233,156.994,62,'2019-11-19'),(1792203008810,165.476,63,'2019-11-19'),(1792208001198,254.584,64,'2019-11-19'),(1897001233459,6445.13,65,'2019-11-19'),(1897101001059,160.807,66,'2019-11-19'),(1897108001190,173.959,67,'2019-11-19'),(1897108001234,128.565,68,'2019-11-19'),(1897109002543,257.554,69,'2019-11-19'),(1897109009281,128.565,70,'2019-11-19'),(2941108001987,224.88,72,'2019-11-19'),(2941108004723,305.49,73,'2019-11-19'),(2941109002434,270.716,74,'2019-11-19'),(1409201002567,264.049,78,'2019-11-19'),(1409201005552,200.171,79,'2019-11-19'),(1409208003289,319.414,80,'2019-11-19'),(1409208005021,178.879,81,'2019-11-19'),(1409327432647,1290.45,82,'2019-11-19'),(1792003672458,645.229,84,'2019-11-19'),(1792103004473,289.62,85,'2019-11-19'),(1792108009233,157.583,87,'2019-11-19'),(1792203008810,166.095,88,'2019-11-19'),(1792208001198,255.54,89,'2019-11-19'),(1897001233459,6469.3,90,'2019-11-19'),(1897101001059,161.411,91,'2019-11-19'),(1897108001190,174.611,92,'2019-11-19'),(1897108001234,129.049,93,'2019-11-19'),(1897109002543,258.521,94,'2019-11-19'),(1897109009281,129.049,95,'2019-11-19'),(2941108001987,225.724,97,'2019-11-19'),(2941108004723,306.634,98,'2019-11-19'),(2941109002434,271.733,99,'2019-11-19'),(1792208001198,256.5,101,'2019-11-27'),(1409201002567,265.039,102,'2019-11-27'),(1792208001198,252.75,103,'2019-11-27'),(1792208001198,252.375,104,'2019-11-27'),(1792208001198,252,105,'2019-11-27'),(1792208001198,251.625,106,'2019-11-27'),(1792208001198,251.25,107,'2019-11-27'),(1409208003289,320.61,108,'2019-11-27'),(2941108001987,226.571,109,'2019-11-27'),(1792208001198,250.875,110,'2019-11-27'),(2941108001987,227.321,111,'2019-11-29'),(1792208001198,250.125,112,'2019-11-29'),(1409208003289,320.985,113,'2019-11-29'),(1792208001198,246.375,114,'2019-11-29');
/*!40000 ALTER TABLE `acc_interest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `accno` decimal(13,0) unsigned NOT NULL,
  `balance` decimal(10,0) unsigned NOT NULL,
  `interest` float NOT NULL,
  `custid` decimal(8,0) unsigned NOT NULL,
  `ifsc` varchar(11) NOT NULL,
  `mpin` varchar(100) NOT NULL,
  PRIMARY KEY (`accno`),
  UNIQUE KEY `accno_UNIQUE` (`accno`),
  KEY `cust_id_idx` (`custid`),
  KEY `acc_ifsc` (`ifsc`),
  CONSTRAINT `acc_ifsc` FOREIGN KEY (`ifsc`) REFERENCES `branch` (`ifsc`) ON DELETE CASCADE,
  CONSTRAINT `cust_id` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1409201002567,71677,4.5,45623780,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1409201005552,53579,4.5,24759427,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1409208003289,86596,4.5,32965929,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1409208005021,47880,4.5,87656723,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1409327432647,345411,4.5,34536465,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1792003672458,172706,4.5,95128364,'CNRB0001792','87ec2f451208df97228105657edb717f'),(1792103004473,77522,4.5,98327813,'CNRB0001792','87ec2f451208df97228105657edb717f'),(1792108009233,42180,4.5,82456854,'CNRB0001792','87ec2f451208df97228105657edb717f'),(1792203008810,44458,4.5,99365273,'CNRB0001792','87ec2f451208df97228105657edb717f'),(1792208001198,64700,4.5,83268751,'CNRB0001792','87ec2f451208df97228105657edb717f'),(1897001233459,1731616,4.5,67521345,'CNRB0001409','87ec2f451208df97228105657edb717f'),(1897101001059,43204,4.5,48785475,'CNRB0001897','87ec2f451208df97228105657edb717f'),(1897108001190,46738,4.5,23547730,'CNRB0001897','87ec2f451208df97228105657edb717f'),(1897108001234,34542,4.5,12386794,'CNRB0001897','87ec2f451208df97228105657edb717f'),(1897109002543,69198,4.5,26267729,'CNRB0001897','87ec2f451208df97228105657edb717f'),(1897109009281,34542,4.5,34658896,'CNRB0001897','87ec2f451208df97228105657edb717f'),(2941108001987,61619,4.5,34567632,'CNRB0002941','87ec2f451208df97228105657edb717f'),(2941108004723,82076,4.5,36775647,'CNRB0002941','87ec2f451208df97228105657edb717f'),(2941109002434,72734,4.5,78472699,'CNRB0002941','87ec2f451208df97228105657edb717f');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beneficiary` (
  `taccno` decimal(13,0) NOT NULL,
  `tifsc` varchar(13) NOT NULL,
  `bname` varchar(45) NOT NULL,
  `custid` decimal(8,0) NOT NULL,
  KEY `tacc` (`taccno`),
  KEY `ifsc_idx` (`tifsc`),
  KEY `tcustid` (`custid`),
  CONSTRAINT `tacc` FOREIGN KEY (`taccno`) REFERENCES `account` (`accno`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tcustid` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`),
  CONSTRAINT `tifsc` FOREIGN KEY (`tifsc`) REFERENCES `branch` (`ifsc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficiary`
--

LOCK TABLES `beneficiary` WRITE;
/*!40000 ALTER TABLE `beneficiary` DISABLE KEYS */;
INSERT INTO `beneficiary` VALUES (1409208003289,'CNRB0001409','Raj',83268751),(2941108001987,'CNRB0002941','Parth',83268751),(1792003672458,'CNRB0001792','Akshara',83268751);
/*!40000 ALTER TABLE `beneficiary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `ifsc` varchar(13) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` decimal(10,0) unsigned NOT NULL,
  `mgrid` decimal(10,0) unsigned DEFAULT NULL,
  PRIMARY KEY (`ifsc`),
  UNIQUE KEY `ifsc_UNIQUE` (`ifsc`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `address_UNIQUE` (`address`),
  UNIQUE KEY `phone_UNIQUE` (`phone`),
  KEY `mgr_id_idx` (`mgrid`),
  CONSTRAINT `mgr_id` FOREIGN KEY (`mgrid`) REFERENCES `employee` (`empid`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES ('CNRB0001409','Canara Bank Malleswaram','PB no.307,38&39,5th cross,Malleswaram,Bangalore,560003',8023444636,2746987621),('CNRB0001792','Canara Bank Trinity Circle','Sankarnarayana building,no. 25,M.G.Road,Bangalore,560001',8025591873,1249423980),('CNRB0001897','Canara Bank Heggarne','Heggarne,Siddapur taluk,Uttara Kannada dist,581331',8389249445,4956697192),('CNRB0002941','Canara Bank Hubli Road,Sirsi','Sirsi Hubli Road,Sirsi,Uttara Kannada dist,581401',8384226339,9185247788);
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `custid` decimal(8,0) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` decimal(10,0) unsigned NOT NULL,
  `email` varchar(35) NOT NULL,
  `bdate` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`custid`),
  UNIQUE KEY `custid_UNIQUE` (`custid`),
  UNIQUE KEY `phone_UNIQUE` (`phone`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (12386794,'Ashwini HS','Sirsi',9748329121,'ashwini22@gmail.com','2000-10-22','81dc9bdb52d04dc20036dbd8313ed055','Female'),(18902348,'Bharat DA','Pune',9808332762,'bharatda@yahoo.com','1989-08-19','81dc9bdb52d04dc20036dbd8313ed055','Male'),(23547730,'Keerti Shreedhar','Sirsi',8277741508,'hasyagarkeerti@yahoo.com','1998-01-10','81dc9bdb52d04dc20036dbd8313ed055','Female'),(24759427,'Mayank Agarwal','Bangalore',9729829212,'mayankagarwal@gmail.com','1995-02-11','81dc9bdb52d04dc20036dbd8313ed055','Male'),(26267729,'Ramesh HM','Bangalore',8762835661,'rameshhm15@gmail.com','1981-11-15','81dc9bdb52d04dc20036dbd8313ed055','Male'),(32965929,'Raj Shankar','Bangalore',9981286343,'rajshankar@outlook.com','1990-04-12','81dc9bdb52d04dc20036dbd8313ed055','Male'),(34536465,'Nehal Roy','Patna',9108476870,'roynehal@gmail.com','1996-04-30','81dc9bdb52d04dc20036dbd8313ed055','Female'),(34567632,'Parthiv N','Bangalore',8716983232,'parthiv1998@gmail.com','1998-03-12','81dc9bdb52d04dc20036dbd8313ed055','Male'),(34658896,'Ashwini NH','Mangalore',9987897722,'ashwininh@outlook.com','1999-12-21','81dc9bdb52d04dc20036dbd8313ed055','Female'),(36775647,'Nisha Sharma','Mumbai',9834998432,'nishasharma161@gmail.com','1993-05-23','81dc9bdb52d04dc20036dbd8313ed055','Female'),(45623780,'Suman Kulkarni','Bangalore',8998872325,'kulkarnisuman@yahoo.com','1995-02-14','81dc9bdb52d04dc20036dbd8313ed055','Male'),(48785475,'Varsha Hegde','Sirsi',8283657084,'varshahegde@gmail.com','1998-09-05','81dc9bdb52d04dc20036dbd8313ed055','Female'),(67521345,'Akshay Aryan','Ahmedabad',8367272921,'akshay.aryan@gmail.com','1987-03-29','81dc9bdb52d04dc20036dbd8313ed055','Male'),(78472699,'Apoorva Gowda','Bangalore',9808979342,'apoorva2006@gmail.com','1998-06-20','81dc9bdb52d04dc20036dbd8313ed055','Female'),(82456854,'Shreyas H','Mangalore',9998458243,'shreyash@outlook.com','2000-08-15','81dc9bdb52d04dc20036dbd8313ed055','Male'),(83268751,'Jayalakshmi','Bangalore',9787343312,'jayalakshmi17@yahoo.com','1998-06-02','81dc9bdb52d04dc20036dbd8313ed055','Female'),(87656723,'Ananya JG','Bangalore',8473873958,'ananyajgm@yahoo.com','1998-01-09','81dc9bdb52d04dc20036dbd8313ed055','Female'),(95128364,'Akshara Mehta','Pune',8276154235,'mehtaakshara@gmail.com','1994-05-27','81dc9bdb52d04dc20036dbd8313ed055','Female'),(98327813,'Harshal M','Ranchi',9293753859,'harshal.m@gmail.com','1999-06-05','81dc9bdb52d04dc20036dbd8313ed055','Male'),(99365273,'Bindu F','Bangalore',7675875981,'bindu167@gmail.com','1999-09-02','81dc9bdb52d04dc20036dbd8313ed055','Female');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dep_interest`
--

DROP TABLE IF EXISTS `dep_interest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dep_interest` (
  `depid` int(10) unsigned NOT NULL,
  `difadded` float NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `depoid_idx` (`depid`),
  CONSTRAINT `depoid` FOREIGN KEY (`depid`) REFERENCES `deposits` (`iddeposit`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dep_interest`
--

LOCK TABLES `dep_interest` WRITE;
/*!40000 ALTER TABLE `dep_interest` DISABLE KEYS */;
INSERT INTO `dep_interest` VALUES (100001,8402.78,1,'2019-11-19'),(100002,1511.25,2,'2019-11-19'),(100004,3535,3,'2019-11-19'),(100001,8472.8,4,'2019-11-19'),(100002,1522.58,5,'2019-11-19'),(100004,3570.35,6,'2019-11-19'),(100001,8543.41,7,'2019-11-19'),(100002,1534,8,'2019-11-19'),(100004,3606.05,9,'2019-11-19'),(100001,8614.6,10,'2019-11-19'),(100002,1545.51,11,'2019-11-19'),(100004,3642.11,12,'2019-11-19'),(100001,8686.39,13,'2019-11-19'),(100002,1557.1,14,'2019-11-19'),(100004,3678.54,15,'2019-11-19'),(100005,0,16,'2019-11-19'),(100002,1568.78,17,'2019-11-19'),(100001,8758.78,18,'2019-11-19'),(100002,1568.81,19,'2019-11-19'),(100004,3715.32,20,'2019-11-19'),(100005,487.5,21,'2019-11-19'),(100001,8831.77,22,'2019-11-19'),(100002,1580.58,23,'2019-11-19'),(100004,3752.47,24,'2019-11-19'),(100005,492.781,25,'2019-11-19'),(100001,8905.37,26,'2019-11-19'),(100002,1592.43,27,'2019-11-19'),(100004,3790,28,'2019-11-19'),(100005,498.12,29,'2019-11-19'),(100001,8979.58,30,'2019-11-19'),(100002,1604.38,31,'2019-11-19'),(100004,3827.9,32,'2019-11-19'),(100005,503.516,33,'2019-11-19'),(100001,9054.41,34,'2019-11-19'),(100002,1616.41,35,'2019-11-19'),(100004,3866.18,36,'2019-11-19'),(100005,508.971,37,'2019-11-19');
/*!40000 ALTER TABLE `dep_interest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deposits` (
  `iddeposit` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `period` decimal(2,0) unsigned NOT NULL,
  `roi` float unsigned NOT NULL,
  `bifsc` varchar(11) NOT NULL,
  `custid` decimal(8,0) NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`iddeposit`),
  UNIQUE KEY `iddeposit_UNIQUE` (`iddeposit`),
  KEY `ifsc_idx` (`bifsc`),
  KEY `custo` (`custid`),
  CONSTRAINT `custo` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ifsc` FOREIGN KEY (`bifsc`) REFERENCES `branch` (`ifsc`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=100007 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
INSERT INTO `deposits` VALUES (100001,3,10,'CNRB0001409',83268751,1095580),(100002,2,9,'CNRB0001792',95128364,217138),(100003,3,10,'CNRB0001792',48785475,10000),(100004,5,12,'CNRB0001897',48785475,390484),(100005,4,11,'CNRB0002941',34536465,47490.9),(100006,5,12,'CNRB0001792',95128364,200000);
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `empid` decimal(10,0) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` decimal(10,0) unsigned NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `salary` decimal(8,0) unsigned NOT NULL,
  `ifsc` varchar(11) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`empid`),
  UNIQUE KEY `empid_UNIQUE` (`empid`),
  UNIQUE KEY `phone_UNIQUE` (`phone`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `emp_ifsc` (`ifsc`),
  CONSTRAINT `emp_ifsc` FOREIGN KEY (`ifsc`) REFERENCES `branch` (`ifsc`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1249423980,'Rohit Deshmukh','Mumbai',8867258734,'rohitdeshmukh101@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1987-11-09',60000,'CNRB0001792','Male','Clerk'),(1288263548,'Ram Gupte','Mumbai',7997578474,'jaishreeram@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1990-01-23',50000,'CNRB0001409','Male','Clerk'),(1294897027,'Narayan Rao','Bangalore',8984798710,'narayanrao@yahoo.com','674f3c2c1a8a6f90461e8a66fb5550ba','1992-05-06',40000,'CNRB0001897','Male','Clerk'),(1654512761,'Seema Singh','Pune',9910600313,'singhseema@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1989-09-17',48000,'CNRB0001792','Female','Officer'),(1983578610,'Abhishek Pawar','Belgaum',9788110067,'pawarabhishek@yahoo.com','674f3c2c1a8a6f90461e8a66fb5550ba','1988-02-29',60000,'CNRB0002941','Male','Clerk'),(2746987621,'Rajesh Kumar','Bangalore',7726583242,'rajkumar99@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1980-07-30',70000,'CNRB0001409','Male','Manager'),(2922776451,'Abdul Mohammed','Hyderabad',8993324231,'mohammedabdul@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1991-03-20',40000,'CNRB0001792','Male','Officer'),(2945996238,'Abhijit Verma','Bangalore',8092375941,'abhiverma1001@outlook.com','674f3c2c1a8a6f90461e8a66fb5550ba','1986-01-16',50000,'CNRB0001792','Male','Officer'),(2987682639,'Murali Krishna','Hubli',9876534222,'murali117@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1992-12-25',45000,'CNRB0001409','Male','Clerk'),(4846578734,'Rahul CV','Bangalore',9831792758,'cvrahul@outlook.com','674f3c2c1a8a6f90461e8a66fb5550ba','1991-07-04',40000,'CNRB0001792','Male','Clerk'),(4956697192,'Shyam Sundar','Chennai',8796581897,'shyamsundar@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1985-03-18',65000,'CNRB0001897','Male','Manager'),(4986245781,'Akash Patel','Patna',9771843895,'akashpatelpatna@yahoo.com','674f3c2c1a8a6f90461e8a66fb5550ba','1988-10-02',50000,'CNRB0002941','Male','Officer'),(7984392245,'Bhavana Sriram','Bangalore',8877230906,'bhavanashriram@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1992-05-09',43000,'CNRB0002941','Female','Clerk'),(8875755647,'Padme Shree','Chennai',8332984238,'shreepadme@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1988-01-26',75000,'CNRB0001792','Female','Manager'),(9185247788,'Suresh Hegde','Bangalore',8556713199,'sureshhegde@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1977-09-11',70000,'CNRB0002941','Male','Manager'),(9246523895,'Naveen Babu','Hyderabad',9215130554,'babunaveen@outlook.com','674f3c2c1a8a6f90461e8a66fb5550ba','1990-10-10',46000,'CNRB0001897','Male','Clerk'),(9802308971,'Priyanka Shastri','Mangalore',7932732983,'priyashastri@gmail.com','674f3c2c1a8a6f90461e8a66fb5550ba','1989-04-24',55000,'CNRB0001897','Female','Officer'),(9897465710,'Sahana Bhat','Sirsi',8898933401,'bhat.sahana@outlook.com','674f3c2c1a8a6f90461e8a66fb5550ba','1992-08-17',35000,'CNRB0001409','Female','Clerk');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loan`
--

DROP TABLE IF EXISTS `loan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan` (
  `idloan` int(10) unsigned NOT NULL,
  `type` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `interest` float NOT NULL,
  `balance` float NOT NULL,
  `custid` decimal(8,0) unsigned NOT NULL,
  PRIMARY KEY (`idloan`),
  UNIQUE KEY `idloan_UNIQUE` (`idloan`),
  KEY `fk_custid_idx` (`custid`),
  CONSTRAINT `fk_custid` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loan`
--

LOCK TABLES `loan` WRITE;
/*!40000 ALTER TABLE `loan` DISABLE KEYS */;
INSERT INTO `loan` VALUES (126643677,'Kisan Tractor',327000,7.2,287385,18902348),(836415976,'Housing',2750000,8.9,1348370,45623780),(918263951,'Car',748000,9.35,86474,83268751);
/*!40000 ALTER TABLE `loan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `trans`
--

DROP TABLE IF EXISTS `trans`;
/*!50001 DROP VIEW IF EXISTS `trans`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `trans` (
  `transid` tinyint NOT NULL,
  `transdate` tinyint NOT NULL,
  `amount` tinyint NOT NULL,
  `custid` tinyint NOT NULL,
  `accno` tinyint NOT NULL,
  `to_acc` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction` (
  `transid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transdate` date NOT NULL,
  `amount` decimal(8,0) unsigned NOT NULL,
  `custid` decimal(8,0) unsigned NOT NULL,
  `accno` decimal(13,0) unsigned NOT NULL,
  `to_acc` decimal(13,0) unsigned NOT NULL,
  PRIMARY KEY (`transid`,`to_acc`,`accno`,`custid`),
  UNIQUE KEY `transid_UNIQUE` (`transid`),
  KEY `custom_id_idx` (`custid`),
  KEY `toacc` (`to_acc`),
  KEY `acc_no` (`accno`),
  CONSTRAINT `acc_no` FOREIGN KEY (`accno`) REFERENCES `account` (`accno`) ON DELETE CASCADE,
  CONSTRAINT `custom_id` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`) ON DELETE CASCADE,
  CONSTRAINT `toacc` FOREIGN KEY (`to_acc`) REFERENCES `account` (`accno`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1000000038 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (1000000002,'2018-11-04',5000,24759427,1409201005552,1409208005021),(1000000003,'2018-11-05',2000,24759427,1409201005552,2941108004723),(1000000007,'2018-11-13',4500,23547730,1897108001190,1792208001198),(1000000009,'2018-11-15',2300,98327813,1792103004473,1409201005552),(1000000011,'2018-11-17',800,98327813,1792103004473,1409201002567),(1000000014,'2018-11-22',2500,78472699,2941109002434,1897109002543),(1000000015,'2018-11-25',2000,78472699,2941109002434,1409201005552),(1000000018,'2018-11-27',2000,78472699,2941108001987,1409201005552),(1000000027,'2019-11-18',1000,12386794,1897108001234,1409201005552),(1000000028,'2019-11-27',1000,83268751,1792208001198,1409201002567),(1000000030,'2019-11-27',100,83268751,1792208001198,1409208003289),(1000000031,'2019-11-27',100,83268751,1792208001198,1409208003289),(1000000032,'2019-11-27',100,83268751,1792208001198,1409208003289),(1000000033,'2019-11-27',100,83268751,1792208001198,1409208003289),(1000000034,'2019-11-27',100,83268751,1792208001198,1409208003289),(1000000035,'2019-11-27',200,83268751,1792208001198,2941108001987),(1000000036,'2019-11-29',1000,83268751,1792208001198,2941108001987),(1000000037,'2019-11-29',1000,83268751,1792208001198,1409208003289);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bankingnew'
--

--
-- Dumping routines for database 'bankingnew'
--

--
-- Final view structure for view `trans`
--

/*!50001 DROP TABLE IF EXISTS `trans`*/;
/*!50001 DROP VIEW IF EXISTS `trans`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `trans` AS select distinct `t`.`transid` AS `transid`,`t`.`transdate` AS `transdate`,`t`.`amount` AS `amount`,`t`.`custid` AS `custid`,`t`.`accno` AS `accno`,`t`.`to_acc` AS `to_acc` from ((`account` `a` join `employee` `e`) join `transaction` `t`) where `e`.`ifsc` = `a`.`ifsc` and `a`.`accno` = `t`.`to_acc` and `e`.`ifsc` = 'CNRB0001409' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 20:48:24
