SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `globalprize` DEFAULT CHARACTER SET latin1 ;
USE `globalprize` ;

-- -----------------------------------------------------
-- Table `globalprize`.`Schools`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `globalprize`.`Schools` ;

CREATE  TABLE IF NOT EXISTS `globalprize`.`Schools` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `reg_open` DATETIME NOT NULL DEFAULT '2011-01-01 00:00:00' ,
  `reg_close` DATETIME NOT NULL DEFAULT '2011-01-02 00:00:00' ,
  `time_offset` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0' ,
  `contactname` VARCHAR(255) NULL ,
  `contactemail` VARCHAR(255) NULL ,
  `formurl` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `globalprize`.`Registrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `globalprize`.`Registrations` ;

CREATE  TABLE IF NOT EXISTS `globalprize`.`Registrations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `recordtime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `team_name` VARCHAR(255) NOT NULL ,
  `team_1` VARCHAR(255) NOT NULL ,
  `team_1_email` VARCHAR(255) NOT NULL ,
  `team_1_phone` VARCHAR(255) NOT NULL ,
  `team_2` VARCHAR(255) NOT NULL ,
  `team_2_email` VARCHAR(255) NOT NULL ,
  `team_3` VARCHAR(255) NOT NULL ,
  `team_3_email` VARCHAR(255) NOT NULL ,
  `team_4` VARCHAR(255) NOT NULL ,
  `team_4_email` VARCHAR(255) NOT NULL ,
  `school` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fkschool_idx` (`school` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;

USE `globalprize` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
