-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema petshop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `petshop` DEFAULT CHARACTER SET latin1 ;
USE `petshop` ;

-- -----------------------------------------------------
-- Table `petshop`.`compras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`compras` ;

CREATE TABLE IF NOT EXISTS `petshop`.`compras` (
  `idcompras` INT(11) NOT NULL,
  `produtos` VARCHAR(45) NOT NULL,
  `data` DATE NOT NULL,
  `hora` DATETIME NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `quantidade` INT(11) NOT NULL,
  `valort` INT(11) NOT NULL,
  `valoru` INT(11) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcompras`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`contato` ;

CREATE TABLE IF NOT EXISTS `petshop`.`contato` (
  `idcontato` INT(11) NOT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idcontato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`endereço`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`endereço` ;

CREATE TABLE IF NOT EXISTS `petshop`.`endereço` (
  `cep` INT(11) NOT NULL,
  `logradouro` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `uf` VARCHAR(45) NOT NULL,
  `numero` INT(11) NULL DEFAULT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cep`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`cliente` ;

CREATE TABLE IF NOT EXISTS `petshop`.`cliente` (
  `cpf` INT(11) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `nascimento` DATE NOT NULL,
  `contato_idcontato` INT(11) NOT NULL,
  `endereço_cep` INT(11) NOT NULL,
  `compras_idcompras` INT(11) NOT NULL,
  `usuario_senha` INT(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE INDEX `CPF_UNIQUE` (`cpf` ASC) VISIBLE,
  INDEX `fk_cliente_contato` (`contato_idcontato` ASC) VISIBLE,
  INDEX `fk_cliente_endereço1` (`endereço_cep` ASC) VISIBLE,
  INDEX `fk_cliente_compras1` (`compras_idcompras` ASC) VISIBLE,
  CONSTRAINT `fk_cliente_compras1`
    FOREIGN KEY (`compras_idcompras`)
    REFERENCES `petshop`.`compras` (`idcompras`),
  CONSTRAINT `fk_cliente_contato`
    FOREIGN KEY (`contato_idcontato`)
    REFERENCES `petshop`.`contato` (`idcontato`),
	CONSTRAINT `fk_usuario_senha`
    FOREIGN KEY (`usuario_senha`)
    REFERENCES `petshop`.`usuario` (`senha`),
  CONSTRAINT `fk_cliente_endereço1`
    FOREIGN KEY (`endereço_cep`)
    REFERENCES `petshop`.`endereço` (`cep`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`produtos` ;

CREATE TABLE IF NOT EXISTS `petshop`.`produtos` (
  `idprodutos` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `custo` INT(11) NOT NULL,
  `estoque` INT(11) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `foto` LONGBLOB NOT NULL,
  `preco` INT(11) NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idprodutos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`compras_has_produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`compras_has_produtos` ;

CREATE TABLE IF NOT EXISTS `petshop`.`compras_has_produtos` (
  `compras_idcompras` INT(11) NOT NULL,
  `produtos_idprodutos` INT(11) NOT NULL,
  PRIMARY KEY (`compras_idcompras`, `produtos_idprodutos`),
  INDEX `fk_compras_has_produtos_produtos1` (`produtos_idprodutos` ASC) VISIBLE,
  CONSTRAINT `fk_compras_has_produtos_compras1`
    FOREIGN KEY (`compras_idcompras`)
    REFERENCES `petshop`.`compras` (`idcompras`),
  CONSTRAINT `fk_compras_has_produtos_produtos1`
    FOREIGN KEY (`produtos_idprodutos`)
    REFERENCES `petshop`.`produtos` (`idprodutos`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `petshop`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `petshop`.`usuario` ;

CREATE TABLE IF NOT EXISTS `petshop`.`usuario` (
  `senha` VARCHAR(40) NOT NULL,
  `nivel` INT(1) UNSIGNED NOT NULL DEFAULT '1',
  `cliente_cpf` INT(11) NOT NULL,
  PRIMARY KEY (`cliente_cpf`),
  CONSTRAINT `fk_usuario_cliente1`
    FOREIGN KEY (`cliente_cpf`)
    REFERENCES `petshop`.`cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;
INSERT INTO `usuario` VALUES ( 1234567890, '2', 12345678910);



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
