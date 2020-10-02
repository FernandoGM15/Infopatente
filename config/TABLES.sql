
CREATE TABLE `infopate_DB`.`USUARIOS` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `TIPO` VARCHAR(25) NOT NULL , 
    `EMPRESA` VARCHAR(50) NULL , 
    `NUMIDENTIFICACION` VARCHAR(15) NULL , 
    `NOMBRE` VARCHAR(30) NOT NULL , 
    `APPAT` VARCHAR(30) NOT NULL , 
    `APMAT` VARCHAR(30) NOT NULL , 
    `EMAIL` VARCHAR(50) NOT NULL , 
    `CONTRASEÑA` VARCHAR(20) NOT NULL , 
    `CP` INT(5) NOT NULL , 
    `TELEFONO` BIGINT(10) NOT NULL , 
    PRIMARY KEY (`ID`)) 
    ENGINE = InnoDB; 

CREATE TABLE `infopate_DB`.`Empresas` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `NOMBRE` VARCHAR(50) NOT NULL , 
    `NOMBRE_RL` TEXT NOT NULL , 
    `DIRECCION1_RL` TEXT NOT NULL , 
    `DIRECCION2_RL` TEXT NOT NULL , 
    `EMAIL_RL` TEXT NOT NULL , 
    `TELEFONO_RL` BIGINT(10) NOT NULL , 
    `NOMBRE_SOL` TEXT NOT NULL , 
    `EMAIL_SOL` TEXT NOT NULL , 
    `TELEFONO_SOL` BIGINT(10) NOT NULL , 
    PRIMARY KEY (`ID`)) 
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; 