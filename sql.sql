create database websitezoya;
use websitezoya;

create table ContactMe
(
    Nama varchar(100) not null,
	Email varchar(100) not null,
	Project varchar(100) not null,
	Pesan text not null
);

select * from ContactMe;