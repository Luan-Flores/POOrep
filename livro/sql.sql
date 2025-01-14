create database livro;
use livro;

create table pessoa(
    id int auto_increment primary key,
    nome varchar(20),
    idade int,
    sexo enum('Masculino','Feminino','Outro')
);

