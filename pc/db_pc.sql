create database db_pc
default character set utf8
default collate utf8_general_ci;

use db_pc;

create table tbl_usuario(
	cd_usuario int primary key auto_increment,
    nm_usuario varchar(20) not null,
    ds_senha varchar(8) not null
)default charset utf8;

insert into tbl_usuario
values(default,'adminpc','12345');


create table tbl_Consultor(
	cd_Consultor int primary key auto_increment,
    nm_Consultor varchar(80) not null,
    no_Telefone varchar(14) not null,
    ds_Email varchar(80) not null
)default charset utf8;

select * from tbl_Consultor;


select * from tbl_usuario;

CREATE USER 'programadorpc'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
GRANT ALL PRIVILEGES ON db_pc.* TO 'programadorpc'@'localhost' WITH GRANT OPTION;


