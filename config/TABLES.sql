
CREATE TABLE `infopate_DB`.`usuarios` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `tipo` VARCHAR(25) NOT NULL , 
    `empresa` VARCHAR(50) NULL , 
    `num_identificacion` VARCHAR(15) NULL , 
    `nombre` VARCHAR(30) NOT NULL , 
    `apellido_paterno` VARCHAR(30) NOT NULL , 
    `apellido_materno` VARCHAR(30) NOT NULL , 
    `email` VARCHAR(50) NOT NULL , 
    `contraseña` TEXT NOT NULL , 
    `cp` INT(5) NOT NULL , 
    `telefono` BIGINT(10) NOT NULL , 
    `fecha_mod` DATETIME NOT NULL ,
    PRIMARY KEY (`id`)) 
    ENGINE = InnoDB; 

CREATE TABLE `infopate_DB`.`empresas` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nombre` VARCHAR(50) NOT NULL , 
    `nombre_rl` TEXT NOT NULL , 
    `direccion1_rl` TEXT NOT NULL , 
    `direccion2_rl` TEXT NOT NULL , 
    `email_rl` TEXT NOT NULL , 
    `telefono_rl` BIGINT(10) NOT NULL , 
    `nombre_sol` TEXT NOT NULL , 
    `email_sol` TEXT NOT NULL , 
    `telefono_sol` BIGINT(10) NOT NULL , 
    `fecha_mod` DATETIME NOT NULL , 
    PRIMARY KEY (`id`)) 
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; 

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
  `nombre_patente` varchar(45) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `infopate_DB`.`patentes` (
  `id` INT NOT NULL  AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `pais_presentacion` VARCHAR(45) NOT NULL,
  `entidad_pequeña` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `aplicacion` VARCHAR(45) NOT NULL,
  `autorizacion` VARCHAR(2) NOT NULL,
  `fecha_mod` DATETIME() NOT NULL,
  PRIMARY KEY (`id`));
