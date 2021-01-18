
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

  INSERT INTO `usuarios` (`id`, `tipo`, `empresa`, `num_identificacion`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`, `contraseña`, `cp`, `telefono`, `fecha_mod`) VALUES
    (1, 'Alumno', 'UNIVERSIDAD AUTONOMA DE COAHUILA', '12345678', 'ADMINISTRADOR', 'ADMINISTRADOR', 'ADMINISTRADOR', 'usuario@infopatente.mx', 'infopatente.mx', 12345, 180012345, '2021-01-08'),
    (2, 'Profesor', 'UNIVERSIDAD AUTONOMA DE COAHUILA', '93530', 'Carlos', 'Gonzalez', 'Flores', 'gonzalezc757@gmail.com', 'mayelita1', 25000, 8444142941, '2021-01-08'),
    (3, 'Alumno', 'UNIVERSIDAD AUTONOMA DE COAHUILA', '123456789', 'Fernando', 'GARCIA', 'Morales', 'fer_nando152012@hotmail.com', 'Lufegamo_15', 25069, 8443326254, '2021-01-08');

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
    
    INSERT INTO `empresas` VALUES (2,'UNIVERSIDAD AUTONOMA DE COAHUILA','RABINDRANATH','BLVD FUNDADORES','LAS GLORIAS','rabin@uadec.edu.mx',8445698978,'FRANCISCO ORTIZ','fortiz@gmail.com',8447654321,'2020-12-29');

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

CREATE TABLE `patentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `pais_presentacion` varchar(45) NOT NULL,
  `entidad_pequeña` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `aplicacion` varchar(45) NOT NULL,
  `email_registro` varchar(45) NOT NULL,
  `autorizacion` varchar(2) NOT NULL,
  `fecha_mod` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;