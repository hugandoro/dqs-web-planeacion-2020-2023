-- --------------------------------------------------------
-- Host:                         66.198.240.51
-- Versión del servidor:         10.2.26-MariaDB-cll-lve - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla dosquebr_planeacion_pqr.historia
CREATE TABLE IF NOT EXISTS `historia` (
  `historia_id` int(11) NOT NULL AUTO_INCREMENT,
  `historia_cedula` bigint(20) DEFAULT 0,
  `historia_nombre_1` varchar(50) DEFAULT '',
  `historia_apellido_1` varchar(50) DEFAULT '',
  `historia_direccion` varchar(100) DEFAULT '',
  `historia_telefono` varchar(80) DEFAULT '',
  `historia_nombre_2` varchar(50) DEFAULT '',
  `historia_apellido_2` varchar(50) DEFAULT '',
  `historia_fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `historia_clasificacion_pqr` varchar(100) NOT NULL,
  `historia_dias` int(11) NOT NULL,
  `historia_asunto` longtext NOT NULL,
  `historia_entidad` varchar(100) NOT NULL,
  `historia_cargo` varchar(50) NOT NULL,
  `historia_email` varchar(100) NOT NULL,
  `historia_tipo_usuario` varchar(50) NOT NULL,
  `historia_clase_pqr` varchar(50) NOT NULL,
  `historia_canal` varchar(50) NOT NULL,
  `historia_radicado_gestion` date DEFAULT NULL,
  `historia_num_radicado_gestion` varchar(100) NOT NULL,
  `historia_radicado_planeacion` date DEFAULT NULL,
  `historia_num_radicado_planeacion` varchar(100) NOT NULL,
  `historia_area` varchar(50) NOT NULL,
  `historia_funcionario` varchar(100) NOT NULL,
  `historia_medio_respuesta` varchar(50) NOT NULL,
  `historia_fecha_respuesta` date DEFAULT NULL,
  `historia_num_oficio_respuesta` varchar(100) NOT NULL,
  `historia_respuesta` longtext NOT NULL,
  PRIMARY KEY (`historia_id`),
  KEY `historia_id` (`historia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2301 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla dosquebr_planeacion_pqr.medico
CREATE TABLE IF NOT EXISTS `medico` (
  `medico_id` int(11) NOT NULL AUTO_INCREMENT,
  `medico_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medico_password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medico_token` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medico_token_caducidad` datetime DEFAULT NULL,
  `medico_nivel` int(11) NOT NULL DEFAULT 1,
  `medico_estado` int(11) NOT NULL DEFAULT 1,
  `medico_nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medico_apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medico_dependencia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `medico_dependencia_codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`medico_id`),
  KEY `medico_id` (`medico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla dosquebr_planeacion_pqr.medico_historia
CREATE TABLE IF NOT EXISTS `medico_historia` (
  `medico_id` int(11) NOT NULL,
  `historia_id` int(11) NOT NULL,
  PRIMARY KEY (`medico_id`,`historia_id`),
  KEY `medico_id` (`medico_id`),
  KEY `historia_id` (`historia_id`),
  CONSTRAINT `medico_historia_ibfk_1` FOREIGN KEY (`historia_id`) REFERENCES `historia` (`historia_id`),
  CONSTRAINT `medico_historia_ibfk_2` FOREIGN KEY (`medico_id`) REFERENCES `medico` (`medico_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla dosquebr_planeacion_pqr.sisben_otro_municipio
CREATE TABLE IF NOT EXISTS `sisben_otro_municipio` (
  `cod_eps` varchar(20) NOT NULL,
  `td_afil` varchar(10) NOT NULL,
  `num_afil` bigint(20) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `prim_apellido` varchar(50) NOT NULL,
  `seg_apellido` varchar(50) NOT NULL,
  PRIMARY KEY (`num_afil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla dosquebr_planeacion_pqr.validador_en_campo
CREATE TABLE IF NOT EXISTS `validador_en_campo` (
  `identificacion` bigint(20) NOT NULL,
  `nombre_uno` varchar(50) NOT NULL,
  `nombre_dos` varchar(50) NOT NULL,
  `apellido_uno` varchar(50) NOT NULL,
  `apellido_dos` varchar(50) NOT NULL,
  `rh` varchar(10) NOT NULL,
  `secretaria` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `labor` varchar(300) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `foto` bigint(20) NOT NULL,
  PRIMARY KEY (`identificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
