CREATE PROCEDURE `spr_registra_cliente` 
(
idcontato INT,
email VARCHAR(45),
telefone1 VARCHAR(45),
telefone2 VARCHAR(45),
idendereco INT,
logradouro VARCHAR(45),
numero VARCHAR(45),
bairro VARCHAR(45),
cidade VARCHAR(45),
estado VARCHAR(45),
cep VARCHAR(45),
obs VARCHAR(45),
idcliente INT,
nome VARCHAR(45),
pet_idpet INT,
contato_idcontato INT,
endereco_idendereco INT 
)

BEGIN

insert into contato(email,telefone1,telefone2) values(email,telefone1,telefone2);
set @id_contato=last_insert_id();

insert into endereco(logradouro,numero,bairro,cidade,estado,cep,obs) values(logradouro,numero,bairro,cidade,estado,cep,obs);
set @id_endereco=last_insert_id();

insert into cliente(nome,contato_idcontato,endereco_idendereco) values(nome,@id_contato,@id_endereco);
END