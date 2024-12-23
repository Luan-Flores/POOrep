create database braseco;
use braseco;

create table usuario(
	id int auto_increment primary key,
    nome varchar(200) not null,
    numConta varchar(12) not null,
    tipoConta enum ('Corrente','Poupança') not null,
    saldo float not null,
    statusConta enum ('Ativo','Inativo')
);
asss