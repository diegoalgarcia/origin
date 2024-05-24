-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2024 a las 06:31:17
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtic`
--

DELIMITER $$
--
-- Funciones
--
DROP FUNCTION IF EXISTS `devuelve_usuario`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `devuelve_usuario` (`correo` VARCHAR(50)) RETURNS VARCHAR(50) CHARSET latin1 READS SQL DATA
    COMMENT 'Función que me devuelve el nombre del usuario al ingresar email'
BEGIN
  -- Paso 1. Declaramos una variable local
  DECLARE persona VARCHAR (50);

  -- Paso 2. Contamos los productos
  SET persona = (
    SELECT nombre
    FROM usuarios 
    WHERE email = correo);

  -- Paso 3. Devolvemos el resultado
  RETURN persona;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasenia` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contrasenia`) VALUES
(1, 'Diego Alejandro Garcia', 'dagarciaag@ut.edu.co', '123'),
(2, 'Isabella García', 'isa@gmail.com', '456'),
(3, 'margarita romero', 'marga@gmail.com', '789'),
(4, 'Valeria ', 'vale@gmail.com', '147'),
(5, 'Miguel', 'miguel@gmail.com', '111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
