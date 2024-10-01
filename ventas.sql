-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 17:19:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_productos`
--

CREATE TABLE `t_productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_productos`
--

INSERT INTO `t_productos` (`id_producto`, `descripcion`, `precio`, `imagen`) VALUES
(101, 'Cuaderno anillado', '12000', 'https://img2.freepnges.com/20240310/jqy/transparent-notebook-sheet-colorful-spiral-notebook-with-pencil-and-1710844984202.webp'),
(102, 'Marcador borrable', '2500', 'data:image/jpeg;base64,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');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `clave` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `fecha_hora_creacion` datetime NOT NULL,
  `fecha_hora_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombres`, `correo_electronico`, `clave`, `token`, `fecha_hora_creacion`, `fecha_hora_actualizacion`) VALUES
(1, 'Erica Parra', 'eparras@sena.edu.co', '12345678', '', '2024-07-17 22:45:01', '2024-07-17 22:45:01'),
(2, 'Luisa Cardona', 'luisa_cardo@gmail.com', '987654321', '', '2024-07-17 23:50:14', '2024-07-17 23:50:14'),
(3, 'Santiago', 'santi@gmail.com', '12345', '', '2024-08-30 23:53:50', '2024-08-30 23:53:50'),
(5, 'Luna', 'luna@gmail.com', '12345', '', '2024-08-30 18:23:41', '0000-00-00 00:00:00'),
(6, 'Solecito', 'sol@gmail.com', '54321', '', '2024-08-30 18:24:07', '0000-00-00 00:00:00'),
(7, 'Fulanito', 'fulanito@gmail.com', '987654', '', '2024-08-30 18:38:05', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
