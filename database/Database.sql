-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mBank
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mBank
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mBank` DEFAULT CHARACTER SET utf8 ;
USE `mBank` ;

-- -----------------------------------------------------
-- Table `mBank`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mBank`.`User` (
  `userID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `role` VARCHAR(45) NOT NULL,
  `name` VARCHAR(60) NOT NULL,
  `nric` VARCHAR(20) NOT NULL,
  `mobileNumber` VARCHAR(30) NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `balance` DECIMAL(17,2) NOT NULL,
  `status` INT NOT NULL,
  `isActive` TINYINT(1) NOT NULL,
  `requestToggleActive` TINYINT(1) NOT NULL,
  `lastActive` VARCHAR(45) NULL,
  `isTerminated` TINYINT(1) NOT NULL,
  PRIMARY KEY (`userID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mBank`.`Transaction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mBank`.`Transaction` (
  `transactionID` INT NOT NULL AUTO_INCREMENT,
  `amount` DECIMAL(17,2) NOT NULL,
  `userID` INT NOT NULL,
  `payeeID` INT NULL,
  `datetime` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`transactionID`),
  INDEX `fk_Transaction_User_idx` (`userID` ASC),
  CONSTRAINT `fk_Transaction_User`
    FOREIGN KEY (`userID`)
    REFERENCES `mBank`.`User` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
