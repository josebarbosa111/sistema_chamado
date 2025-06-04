create database db_sistema_chamado;
use db_sistema_chamado;

create table tb_user(
id_user INT AUTO_INCREMENT PRIMARY KEY,
nm_user VARCHAR(45),
email VARCHAR(50),
setor VARCHAR(45),
senha TEXT
);