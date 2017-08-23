-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mvc_4
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mvc_4
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mvc_4` DEFAULT CHARACTER SET utf8 ;
USE `mvc_4` ;

-- -----------------------------------------------------
-- Table `mvc_4`.`artiste`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_4`.`artiste` (
  `idArtiste` SMALLINT NOT NULL AUTO_INCREMENT,
  `lenom` VARCHAR(100) NOT NULL,
  `leprenom` VARCHAR(100) NOT NULL,
  `naissance` DATE NOT NULL,
  PRIMARY KEY (`idArtiste`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_4`.`tableau`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_4`.`tableau` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(150) NOT NULL,
  `image` VARCHAR(250) NULL,
  `creation` DATE NOT NULL,
  `artiste_idArtiste` SMALLINT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `titre_UNIQUE` (`titre` ASC),
  INDEX `fk_tableau_artiste_idx` (`artiste_idArtiste` ASC),
  CONSTRAINT `fk_tableau_artiste`
    FOREIGN KEY (`artiste_idArtiste`)
    REFERENCES `mvc_4`.`artiste` (`idArtiste`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
