CREATE TABLE IF NOT EXISTS comentarios(
cod_comen int auto_increment primary key,
nome varchar (100),
email varchar (200),
mensagem varchar (500),
data datetime
);