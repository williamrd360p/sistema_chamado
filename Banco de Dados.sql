Create database bd_chamado_database;
use bd_chamado_database;

create table tb_user( 
id_user int auto_increment primary key,
nm_user varchar(45),
email varchar(50),
setor varchar(45),
senha text
);

select * from tb_user;