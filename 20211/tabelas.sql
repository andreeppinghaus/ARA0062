-- comentario na linguagem de banco de dados - SQL
--tabela usuario

create table usuario (
    id serial primary key,
    email varchar(100) not null,
    password varchar(100)
);

--inserindo linhas
insert into usuario(email, password) values('andre@teste.net', '123');
insert into usuario(email, password) values('adm@linux.net', '123');
insert into usuario(email, password) values('bruno@linux.net', '123');

--consultando linhas
select * from usuario;

--excluindo o Bruno

 delete from usuario where id=3;
 
