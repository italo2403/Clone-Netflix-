CREATE DATABASE usuarios;
use usuarios;

CREATE TABLE login(
Id integer primary key auto_increment,
email varchar(100),
senha varchar(15)
);

insert into login(email, senha) values("Italo@italo.com" ,"123");

select * from login;