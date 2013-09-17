SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sonic_net_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sonic_net_db` ;

-- -----------------------------------------------------
-- Table `sonic_net_db`.`sonic_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sonic_net_db`.`sonic_users` (
  `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_login` VARCHAR(60) NOT NULL DEFAULT '' ,
  `user_pass` VARCHAR(64) NOT NULL DEFAULT '' ,
  `user_nicename` VARCHAR(50) NOT NULL DEFAULT '' ,
  `user_email` VARCHAR(100) NOT NULL DEFAULT '' ,
  `user_url` VARCHAR(100) NOT NULL DEFAULT '' ,
  `user_registered` DATETIME NULL ,
  `user_activation_key` VARCHAR(60) NOT NULL DEFAULT '' ,
  `user_status` INT(11) NOT NULL DEFAULT '0' ,
  `display_name` VARCHAR(250) NOT NULL DEFAULT '' ,
  PRIMARY KEY (`ID`) ,
  INDEX `user_login_key` (`user_login` ASC) ,
  INDEX `user_nicename` (`user_nicename` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `sonic_net_db`.`sonic_recurso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sonic_net_db`.`sonic_recurso` (
  `codi_comp` VARCHAR(12) NOT NULL ,
  `nomb` VARCHAR(45) NULL ,
  `tipo` CHAR(1) NULL COMMENT '0-audio, 1-video, 2-presentacion' ,
  `url-recu` VARCHAR(200) NULL COMMENT 'cloudfiles' ,
  `hash` VARCHAR(41) NULL ,
  `data` TEXT NULL COMMENT 'personalizacion del recurso' ,
  `stado` CHAR(1) NULL COMMENT '0-disponible, 1-en uso, 2-default, 3-oculto' ,
  `fech-crea` DATETIME NULL ,
  PRIMARY KEY (`codi_comp`) ,
  INDEX `codi_comp_index` (`codi_comp` ASC) ,
  INDEX `hash_index` (`hash` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sonic_net_db`.`sonic_auditoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sonic_net_db`.`sonic_auditoria` (
  `ID` BIGINT(20) UNSIGNED NOT NULL ,
  `codi_comp` VARCHAR(12) NOT NULL ,
  `fech-modi` DATETIME NULL ,
  `accion` VARCHAR(30) NULL ,
  PRIMARY KEY (`ID`, `codi_comp`) ,
  INDEX `fk_sonic_users_has_sonic_recurso_sonic_recurso1_idx` (`codi_comp` ASC) ,
  INDEX `fk_sonic_users_has_sonic_recurso_sonic_users_idx` (`ID` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

USE `sonic_net_db` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
