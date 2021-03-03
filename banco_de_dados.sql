use CRUD;
/*
create table if not exists clientes(
id int not null auto_increment,
nome varchar(30) not null,
sobrenome varchar(30), 
email varchar(50) not null, 
idade int,
primary key (id)
);*/
alter table clientes
modify column email varchar(50) not null unique;


select * from clientes;