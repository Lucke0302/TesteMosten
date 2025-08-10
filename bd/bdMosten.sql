create database testeMosten;
use testeMosten;
create table filmes(
	id int auto_increment,
    titulo varchar(50) not null,
    genero varchar(25) not null,
    descricao varchar(200),
    imagem varchar(256) not null,
    gostei int not null default 0,
    naoGostei int not null default 0,
    primary key(id)
);