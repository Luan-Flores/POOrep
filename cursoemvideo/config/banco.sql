create database caneta;
use caneta;

create table canetas(
	id int auto_increment primary key,
    modelo varchar(50),
    cor varchar(50),
    ponta float,
    carga float,
    tampada bool
);
asaassss