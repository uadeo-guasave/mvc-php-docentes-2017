create database mvc;
use mvc;

create table if not exists users (
	id int auto_increment primary key,
  name varchar(16) not null unique,
  password varchar(300) not null,
  firstname varchar(50) not null,
  lastname varchar(50) not null,
  email varchar(200) not null unique
) engine=InnoDB charset=utf8 collate=utf8_general_ci;

insert into users (name,password,firstname,lastname,email)
values ('bidkar',sha('123'),'Bidkar','Aragon','bidkar.aragon@udo.mx');

select * from users;




