-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema classdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema classdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `classdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `classdb` ;

-- -----------------------------------------------------
-- Table `classdb`.`teacher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `classdb`.`teacher` (
  `teacher_id` VARCHAR(20) NOT NULL,
  `teacher_name` VARCHAR(5) NOT NULL,
  `teacher_age` INT NOT NULL,
  `entry_year` INT NOT NULL,
  PRIMARY KEY (`teacher_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `classdb`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `classdb`.`class` (
  `class_name` VARCHAR(30) NOT NULL,
  `class_sub` VARCHAR(6) NOT NULL,
  `class_week` VARCHAR(1) NOT NULL,
  `class_stime` TIME NOT NULL,
  `class_etime` TIME NOT NULL,
  `teacher_id` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`class_name`),
  INDEX `fk_Class_Teacher1_idx` (`teacher_id` ASC) VISIBLE,
  CONSTRAINT `fk_Class_Teacher1`
    FOREIGN KEY (`teacher_id`)
    REFERENCES `classdb`.`teacher` (`teacher_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `classdb`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `classdb`.`customer` (
  `cust_id` VARCHAR(20) NOT NULL,
  `cust_name` VARCHAR(5) NOT NULL,
  `cust_age` INT NOT NULL,
  `join_day` DATE NOT NULL,
  PRIMARY KEY (`cust_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `classdb`.`registration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `classdb`.`registration` (
  `cust_id` VARCHAR(20) NOT NULL,
  `class_name` VARCHAR(30) NOT NULL,
  `registration_day` DATE NOT NULL,
  PRIMARY KEY (`cust_id`, `class_name`),
  INDEX `fk_Registration_Customer1_idx` (`cust_id` ASC) VISIBLE,
  INDEX `fk_registration_class1_idx` (`class_name` ASC) VISIBLE,
  CONSTRAINT `fk_registration_class1`
    FOREIGN KEY (`class_name`)
    REFERENCES `classdb`.`class` (`class_name`),
  CONSTRAINT `fk_Registration_Customer1`
    FOREIGN KEY (`cust_id`)
    REFERENCES `classdb`.`customer` (`cust_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
