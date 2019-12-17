CREATE SCHEMA IF NOT EXISTS ScoutDemo;
CREATE USER IF NOT EXISTS 'scoutdemo'@'%' IDENTIFIED WITH caching_sha2_password BY 'scoutdemo';
GRANT ALL ON ScoutDemo.* TO 'scoutdemo'@'%';

DROP TABLE IF EXISTS `ScoutDemo`.`Person`;
CREATE TABLE `ScoutDemo`.`Person` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName`varchar(45) DEFAULT NULL,
  `MailingAddress`varchar(45) DEFAULT NULL,
  `MailingAddress2`varchar(45) DEFAULT NULL,
  `MailingCity`varchar(45) DEFAULT NULL,
  `MailingState`varchar(45) DEFAULT NULL,
  `MailingZipCode`varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
