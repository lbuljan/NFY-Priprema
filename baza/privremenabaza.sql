drop database if exists CF;
create database CF;
use CF;

create table operater (
sifra int not null primary key auto_increment,
email varchar(55) not null,
accName varchar(25) not null,
lozinka char(100) not null,
ziro_racun varchar(55)
);

insert into operater (email, accname, lozinka) values ('lbuljan@ffos.hr', 'lbuljan', md5('123'));