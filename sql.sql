
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(75) NOT NULL,
  `ape1` VARCHAR(75) NOT NULL,
  `ape2` VARCHAR(75) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `telefono` VARCHAR(75) NOT NULL,
  `isAdmin` boolean not null,
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `producto` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NOT NULL,
  `datos` VARCHAR(255) NOT NULL,
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `noticias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(50) NOT NULL,
  `informacion` text NOT NULL,
  `fecha_p` date NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY `pk_id`(`id`)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `peticion` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  `id_produc` INT UNSIGNED NOT NULL,
  `fecha` date not null,
  `revisada` boolean DEFAULT '0',
  PRIMARY KEY `pk_id`(`id`),
  FOREIGN KEY (`id_cliente`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  FOREIGN KEY (`id_`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB;
