CREATE SCHEMA IF NOT EXISTS scoutdemo;
CREATE USER IF NOT EXISTS 'scoutdemo'@'%' IDENTIFIED WITH mysql_native_password BY 'scoutdemo';
GRANT ALL ON scoutdemo.* TO 'scoutdemo'@'%';

DROP TABLE IF EXISTS `scoutdemo`.`Person`;
CREATE TABLE `scoutdemo`.`Person` (
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