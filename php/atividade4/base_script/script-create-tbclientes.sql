CREATE TABLE tb_clientes(
   id INT NOT NULL AUTO_INCREMENT,
   nm_usuario VARCHAR(40) NOT NULL,
   senha VARCHAR(40),
   nm_loginn VARCHAR(15),
   ds_email VARCHAR(80),
   CONSTRAINT pk_clientes PRIMARY KEY(id)
)