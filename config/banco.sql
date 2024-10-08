create database formas;
use formas;
create table quadrado (
    id int primary key auto_increment,
    lado varchar(250),
    cor varchar(250),
    id_un int,
    foreign key (id_un) references unidademedida(id));


create table unidademedida(
    id int primary key auto_increment,
    un varchar(3)
);
   
    alter table quadrado
    add column fundo varchar(250);
   
    commit;
    create table circulo(
    id int primary key auto_increment,
    raio varchar(250),
    cor varchar(250),
    id_un int, foreign key (id_un) references unidademedida(id));
   
CREATE TABLE triangulo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lado1 VARCHAR(250),
    lado2 VARCHAR(250),
    lado3 VARCHAR(250),
    tipo varchar(45) not null,
cor varchar(25) not null,
fundo varchar(225) not null,
    id_un INT,
    FOREIGN KEY (id_un) REFERENCES unidademedida(id)
);


ALTER TABLE `formas`.`triangulo`
ADD CONSTRAINT `id_un`
  FOREIGN KEY (`id_un`)
  REFERENCES `formas`.`unidademedida` (`id`);