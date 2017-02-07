SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `departamentos`
-- -------------------------------------------------

DROP TABLE IF EXISTS `tratamientos`;
CREATE TABLE IF NOT EXISTS `tratamientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255)  NOT NULL,
  `precio` int(5) NOT NULL ,
  `descripcion` varchar(255)  NOT NULL DEFAULT '--',
  
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `departamentos`
-- ----------------------------

INSERT INTO `tratamientos` VALUES ('1', 'Blanqueamiento', '50', 
'Blanqueamiento dental duradero'), 
('2', 'Prótesis fija', '400', 
'Prótesis dental fija. Este tratamiento necesita un presupuesto específico(el precio es orientativo).'), 
('3', 'Prótesis removible', '300', 
'Prótesis dental removible. Este tratamiento necesita un presupuesto específico(el precio es orientativo).');




