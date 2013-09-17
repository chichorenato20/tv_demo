-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2013 a las 22:59:45
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sonic_net_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonic_auditoria`
--

CREATE TABLE IF NOT EXISTS `sonic_auditoria` (
  `ID` bigint(20) unsigned NOT NULL,
  `codi_comp` varchar(12) NOT NULL,
  `fech-modi` datetime DEFAULT NULL,
  `accion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`,`codi_comp`),
  KEY `fk_sonic_users_has_sonic_recurso_sonic_recurso1_idx` (`codi_comp`),
  KEY `fk_sonic_users_has_sonic_recurso_sonic_users_idx` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonic_recurso`
--

CREATE TABLE IF NOT EXISTS `sonic_recurso` (
  `codi_comp` varchar(12) NOT NULL,
  `nomb` varchar(45) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT '0-audio, 1-video, 2-presentacion',
  `url_recu` varchar(200) DEFAULT NULL COMMENT 'cloudfiles',
  `url_hash` varchar(41) DEFAULT NULL,
  `data` text COMMENT 'personalizacion del recurso',
  `stado` char(1) DEFAULT NULL COMMENT '0-disponible, 1-en uso, 2-default, 3-oculto',
  `fech-crea` datetime DEFAULT NULL,
  PRIMARY KEY (`codi_comp`),
  KEY `codi_comp_index` (`codi_comp`),
  KEY `hash_index` (`url_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sonic_recurso`
--

INSERT INTO `sonic_recurso` (`codi_comp`, `nomb`, `tipo`, `url_recu`, `url_hash`, `data`, `stado`, `fech-crea`) VALUES
('12345678', NULL, NULL, NULL, NULL, NULL, '0', '2013-09-05 04:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonic_users`
--

CREATE TABLE IF NOT EXISTS `sonic_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime DEFAULT NULL,
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sonic_users`
--

INSERT INTO `sonic_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'ivan', '$P$BOxSuX5EHfEWJSEkyLKxXDxJwwxcJ50', 'ivan', 'chicho_renato20@hotmail.com', '', '2012-06-18 20:55:47', '', 0, 'ivan'),
(2, 'chicho', '$P$BtUkvLZGiUXMhHgS/RSjzip6wxYXe2/', 'chicho', 'ivan@carrerasconfuturo.com', '', '2012-06-20 15:56:27', '9Uyuevr7PSbytJsQFaBD', 1, 'chicho');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
