CREATE SCHEMA IF NOT EXISTS ScoutDemo;
CREATE USER IF NOT EXISTS 'scoutdemo'@'%' IDENTIFIED WITH mysql_native_password BY 'scoutdemo';
GRANT ALL ON ScoutDemo.* TO 'scoutdemo'@'%';