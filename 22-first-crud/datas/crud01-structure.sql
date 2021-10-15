-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema crud01
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `crud01` ;

-- -----------------------------------------------------
-- Schema crud01
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crud01` DEFAULT CHARACTER SET utf8mb4 ;
USE `crud01` ;

-- -----------------------------------------------------
-- Table `crud01`.`theuser`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crud01`.`theuser` ;

CREATE TABLE IF NOT EXISTS `crud01`.`theuser` (
  `idtheuser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `theuserlogin` VARCHAR(80) NOT NULL,
  `theuserpwd` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL,
  `theusermail` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`idtheuser`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `theuserlogin_UNIQUE` ON `crud01`.`theuser` (`theuserlogin` ASC);

CREATE UNIQUE INDEX `theusermail_UNIQUE` ON `crud01`.`theuser` (`theusermail` ASC);


-- -----------------------------------------------------
-- Table `crud01`.`thearticle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crud01`.`thearticle` ;

CREATE TABLE IF NOT EXISTS `crud01`.`thearticle` (
  `idthearticle` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `thearticletitle` VARCHAR(160) NOT NULL,
  `thearticletext` TEXT NOT NULL,
  `thearticledate` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `theuser_idtheuser` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idthearticle`),
  CONSTRAINT `fk_thearticle_theuser`
    FOREIGN KEY (`theuser_idtheuser`)
    REFERENCES `crud01`.`theuser` (`idtheuser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_thearticle_theuser_idx` ON `crud01`.`thearticle` (`theuser_idtheuser` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
