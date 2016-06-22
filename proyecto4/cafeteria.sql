SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `cafeteria`;
USE `cafeteria`;
------------------------
CREATE TABLE IF NOT EXISTS `miembros` (
  `id` varchar(10) NOT NULL DEFAULT '',	
  `nombre` varchar(255) DEFAULT 'nombre',
  `apellido` varchar(255) DEFAULT 'apellido',
   PRIMARY KEY(`id`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;
------------------------
CREATE TABLE IF NOT EXISTS `reservacion` (
  `id` varchar(10) NOT NULL DEFAULT '',	
  `num_reservacion` int() DEFAULT NULL,
   PRIMARY KEY(`id`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;
------------------------
CREATE TABLE IF NOT EXISTS `productos` (	
  `nombre` varchar(255) NOT NULL DEFAULT 'p',
  `precio` int() DEFAULT NULL,
   PRIMARY KEY(`nombre`)
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

----
--volcado de datos para productos
---
INSERT INTO `productos` (`nombre`,`precio`) VALUES
('cafe_americano',16),
('cafe_espresso',14),
('cafe_capuccino',20),
('chocolate',20),
('te_de_limon',10),
('te_de_canela',11),
('te_helado',12),
('licuado_de_fresa',17),
('licuado_de_guayaba',15),
('licuado_de_platano',15),
('pastel_de_limon',33),
('pastel_de_elote',30),
('pastel_imposible',40),
('crepas_de_tortilla_de_harina',11),
('crepas_de_tortilla_de_maiz',15);
