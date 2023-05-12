-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.24a-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema barangay_system_db
--

CREATE DATABASE IF NOT EXISTS barangay_system_db;
USE barangay_system_db;

--
-- Definition of table `tbl_archives`
--

DROP TABLE IF EXISTS `tbl_archives`;
CREATE TABLE `tbl_archives` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_archives`
--

/*!40000 ALTER TABLE `tbl_archives` DISABLE KEYS */;
INSERT INTO `tbl_archives` (`id`,`position`,`lastname`,`firstname`,`middlename`,`contactNo`,`address`,`start_date`,`end_date`,`status`,`email`,`gender`,`reason`) VALUES 
 (14,'Kagawad(Public Safety)','Vargas','Jake','Mudlong','906333333','Caalibangbangan','2023-05-07','2023-05-29','Active','Jake@gmail.com','MALE',''),
 (15,'Barangay Captain','Bruno','john leo','barameda','9063604260','caalibangbangan','2023-05-07','2023-06-01','Active','J@gmail.com','MALE',''),
 (16,'Barangay Captain','Bruno','john leo','barameda','9063604260','caalibangbangan','2023-05-07','2023-06-01','Active','J@gmail.com','MALE',''),
 (17,'Kagawad(Public Safety)','Vargas','Jake','Mudlong','906333333','Caalibangbangan','2023-05-07','2023-05-29','Active','Jake@gmail.com','MALE',''),
 (18,'Kagawad(Infrastracture)','REYES','ANGELO','PALDO','9063604222','CAALIBANGBANGAN','2023-05-08','2023-05-26','Active','ANGELO@GMAIL.COM','FEMALE',''),
 (19,'Barangay Captain','BRUNO','JOHN LEO','B','9063604260','CAALIBANGBANGAN','2023-05-07','2023-06-01','Active','J@GMAIL.COM','MALE',''),
 (20,'Kagawad(Infrastracture)','REYES','ANGELO','PALDO','9063604222','CAALIBANGBANGAN','2023-05-08','2023-05-26','Active','ANGELO@GMAIL.COM','FEMALE',''),
 (21,'Barangay Captain','BRUNO','JOHN LEO','B','9063604260','CAALIBANGBANGAN','2023-05-07','2023-06-01','Active','J@GMAIL.COM','MALE','GAGO'),
 (22,'Kagawad(Infrastracture)','REYES','ANGELO','PALDO','9063604222','CAALIBANGBANGAN','2023-05-08','2023-05-26','Active','ANGELO@GMAIL.COM','FEMALE','GAGO E');
/*!40000 ALTER TABLE `tbl_archives` ENABLE KEYS */;


--
-- Definition of table `tblofficials`
--

DROP TABLE IF EXISTS `tblofficials`;
CREATE TABLE `tblofficials` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(50) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblofficials`
--

/*!40000 ALTER TABLE `tblofficials` DISABLE KEYS */;
INSERT INTO `tblofficials` (`id`,`position`,`lastname`,`firstname`,`middlename`,`contactNo`,`address`,`start_date`,`end_date`,`status`,`email`,`gender`) VALUES 
 (47,'Barangay Captain','BRUNO','JOHN LEO','B','9063604260','CAALIBANGBANGAN','2023-05-07','2023-06-01','Active','J@GMAIL.COM','MALE'),
 (53,'Kagawad(Public Safety)','Vargas','Jake','Mudlong','906333333','Caalibangbangan','2023-05-07','2023-05-29','Active','Jake@gmail.com','MALE'),
 (58,'Kagawad(Education)','Amen','Bryan','Collado','906363333','Caalibangbangan','2023-05-08','2023-05-31','Active','Amen@gmail.com','MALE');
/*!40000 ALTER TABLE `tblofficials` ENABLE KEYS */;


--
-- Definition of table `tblreports`
--

DROP TABLE IF EXISTS `tblreports`;
CREATE TABLE `tblreports` (
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `clearance` varchar(255) NOT NULL,
  `date` date default NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreports`
--

/*!40000 ALTER TABLE `tblreports` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblreports` ENABLE KEYS */;


--
-- Definition of table `tblresident`
--

DROP TABLE IF EXISTS `tblresident`;
CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL auto_increment,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `suffixname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `houseNo` int(11) NOT NULL,
  `purok` int(1) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `emailAddress` varchar(100) default NULL,
  `motherName` varchar(255) default NULL,
  `fatherName` varchar(255) default NULL,
  `motherContactNo` varchar(15) default NULL,
  `fatherContactNo` varchar(15) default NULL,
  `height` int(11) default NULL,
  `weight` int(11) default NULL,
  `nationality` varchar(15) default NULL,
  `civilStatus` varchar(15) default NULL,
  `spouseName` varchar(15) default NULL,
  `childrenName` varchar(15) default NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `CSchoolName` varchar(255) NOT NULL,
  `CSchoolAddress` varchar(255) NOT NULL,
  `CYearAttended` varchar(100) NOT NULL,
  `HSchoolName` varchar(255) NOT NULL,
  `HSchoolAddress` varchar(255) NOT NULL,
  `HYearAttended` varchar(100) NOT NULL,
  `ESchoolName` varchar(255) NOT NULL,
  `ESchoolAddress` varchar(255) NOT NULL,
  `EYearAttended` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresident`
--

/*!40000 ALTER TABLE `tblresident` DISABLE KEYS */;
INSERT INTO `tblresident` (`id`,`lastname`,`firstname`,`middlename`,`suffixname`,`birthdate`,`age`,`gender`,`houseNo`,`purok`,`barangay`,`city`,`province`,`contactNo`,`emailAddress`,`motherName`,`fatherName`,`motherContactNo`,`fatherContactNo`,`height`,`weight`,`nationality`,`civilStatus`,`spouseName`,`childrenName`,`username`,`password`,`course`,`CSchoolName`,`CSchoolAddress`,`CYearAttended`,`HSchoolName`,`HSchoolAddress`,`HYearAttended`,`ESchoolName`,`ESchoolAddress`,`EYearAttended`) VALUES 
 (4,'Cruz','Arcee','Bigas','','2009-02-03',14,'MALE',322,45,'Caalibangbangan','Cabanatuan','Nueva Ecija','987654321',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bigas','1','','','','','','','','','','');
/*!40000 ALTER TABLE `tblresident` ENABLE KEYS */;


--
-- Definition of table `tblstaff`
--

DROP TABLE IF EXISTS `tblstaff`;
CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci default NULL,
  `firstname` varchar(255) collate latin1_general_ci default NULL,
  `lastname` varchar(255) collate latin1_general_ci default NULL,
  `address` varchar(255) collate latin1_general_ci default NULL,
  `contactNo` varchar(13) collate latin1_general_ci default NULL,
  `gender` varchar(15) collate latin1_general_ci default NULL,
  `middlename` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tblstaff`
--

/*!40000 ALTER TABLE `tblstaff` DISABLE KEYS */;
INSERT INTO `tblstaff` (`id`,`username`,`password`,`firstname`,`lastname`,`address`,`contactNo`,`gender`,`middlename`) VALUES 
 (45,'Aljur','1','Aljur','Reyes','Caalibangbangan','945544545','MALE','Dela Cruz'),
 (46,'LeoxyRDG','1','john leo','Bruno','caalibangbangan','9063602222','MALE','barameda'),
 (48,'Ding','1','DingDong','Garcia','Caalibangbangan','906333524','MALE','Batongbakal'),
 (51,'Pampu','1','Lutan','Pampu','Caalibangbangan','12356564564','MALE','Calo'),
 (52,'Shakir','12','Almaheb','Shakir','Mumbai','9063602222','MALE','Sik');
/*!40000 ALTER TABLE `tblstaff` ENABLE KEYS */;


--
-- Definition of table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `user_type` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbluser`
--

/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` (`id`,`username`,`password`,`user_type`) VALUES 
 (1,'admin','admin','administrator');
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;


--
-- Definition of table `tblzone`
--

DROP TABLE IF EXISTS `tblzone`;
CREATE TABLE `tblzone` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `user_type` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tblzone`
--

/*!40000 ALTER TABLE `tblzone` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblzone` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
