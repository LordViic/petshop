-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Petshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Petshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Petshop` DEFAULT CHARACTER SET utf8 ;
USE `Petshop` ;

-- -----------------------------------------------------
-- Table `Petshop`.`contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`contato` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`contato` (
  `idcontato` INT NOT NULL,
  `email` VARCHAR(45) NULL,
  `telefone1` VARCHAR(45) NULL,
  `telefone2` VARCHAR(45) NULL,
  PRIMARY KEY (`idcontato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`pet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`pet` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`pet` (
  `idpet` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `especie` VARCHAR(45) NULL,
  `raca` VARCHAR(45) NULL,
  `tamanho` VARCHAR(45) NULL,
  `peso` VARCHAR(45) NULL,
  `nascimento` VARCHAR(45) NULL,
  `obs` VARCHAR(45) NULL,
  PRIMARY KEY (`idpet`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`endereco` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`endereco` (
  `idendereco` INT NOT NULL,
  `logradouro` VARCHAR(45) NULL,
  `numero` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `cep` VARCHAR(45) NULL,
  `obs` VARCHAR(45) NULL,
  PRIMARY KEY (`idendereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`cliente` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `pet_idpet` INT NOT NULL,
  `contato_idcontato` INT NOT NULL,
  `pet_idpet1` INT NOT NULL,
  `endereco_idendereco` INT NOT NULL,
  PRIMARY KEY (`idcliente`, `pet_idpet`, `contato_idcontato`, `pet_idpet1`, `endereco_idendereco`),
  INDEX `fk_cliente_contato1_idx` (`contato_idcontato` ASC) VISIBLE,
  INDEX `fk_cliente_pet1_idx` (`pet_idpet1` ASC) VISIBLE,
  INDEX `fk_cliente_endereco1_idx` (`endereco_idendereco` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_contato1`
    FOREIGN KEY (`contato_idcontato`)
    REFERENCES `Petshop`.`contato` (`idcontato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_pet1`
    FOREIGN KEY (`pet_idpet1`)
    REFERENCES `Petshop`.`pet` (`idpet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_endereco1`
    FOREIGN KEY (`endereco_idendereco`)
    REFERENCES `Petshop`.`endereco` (`idendereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`produto` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`produto` (
  `idproduto` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `marca` VARCHAR(45) NULL,
  `categoria` VARCHAR(45) NULL,
  `preco` VARCHAR(45) NULL,
  `obs` VARCHAR(45) NULL,
  PRIMARY KEY (`idproduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`vacinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`vacinas` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`vacinas` (
  `idvacinas` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `obs` VARCHAR(45) NULL,
  PRIMARY KEY (`idvacinas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Petshop`.`pet_has_vacinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Petshop`.`pet_has_vacinas` ;

CREATE TABLE IF NOT EXISTS `Petshop`.`pet_has_vacinas` (
  `pet_idpet` INT NOT NULL,
  `vacinas_idvacinas` INT NOT NULL,
  PRIMARY KEY (`pet_idpet`, `vacinas_idvacinas`),
  INDEX `fk_pet_has_vacinas_vacinas1_idx` (`vacinas_idvacinas` ASC) VISIBLE,
  INDEX `fk_pet_has_vacinas_pet1_idx` (`pet_idpet` ASC) VISIBLE,
  CONSTRAINT `fk_pet_has_vacinas_pet1`
    FOREIGN KEY (`pet_idpet`)
    REFERENCES `Petshop`.`pet` (`idpet`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pet_has_vacinas_vacinas1`
    FOREIGN KEY (`vacinas_idvacinas`)
    REFERENCES `Petshop`.`vacinas` (`idvacinas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
