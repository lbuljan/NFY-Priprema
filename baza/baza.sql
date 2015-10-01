drop database if exists CF;
create database CF character set utf8 collate utf8_general_ci;
use CF;

alter database character set utf8 collate utf8_general_ci;

create table operater (
sifra int not null primary key auto_increment,
email varchar(55) not null,
accName varchar(25) not null,
lozinka char(100) not null,
ziro_racun varchar(21),
ime varchar(55),
prezime varchar(55),
wallet varchar(10)
);

create table projekt (
sifra int not null primary key auto_increment,
naziv varchar(70) not null,
kratki_opis varchar(100) not null,
detaljan_opis varchar(8000) not null,
ziro_racun varchar(21) not null,
rok datetime not null,
kategorija int not null,
pokretac int not null,
cilj varchar(10) not null,
cilj2 varchar(10),
cilj3 varchar(10),
cilj4 varchar(10),
cilj5 varchar(10)
);

create table uplata(
sifra int not null primary key auto_increment,
operater int not null,
projekt int not null,
iznos varchar(10) not null
);

create table kategorija (
sifra int not null primary key auto_increment,
naziv varchar(50)
);

create table galerija (
projekt int not null primary key,
naslovna varchar(100) not null,
video varchar(150),
slika1 varchar(100),
slika2 varchar(100),
slika3 varchar(100),
slika4 varchar(100),
slika5 varchar(100)
);

create table tag(
sifra int not null primary key auto_increment,
projekt int not null,
naziv varchar(20) not null
);

create table komentar(
sifra int not null primary key auto_increment,
operater int not null,
projekt int not null,
komentar varchar(500) not null,
datum datetime not null
);

alter table projekt add foreign key (pokretac) references operater(sifra);
alter table uplata add foreign key (operater) references operater(sifra);
alter table uplata add foreign key (projekt) references projekt(sifra);
alter table galerija add foreign key (projekt) references projekt(sifra);
alter table tag add foreign key (projekt) references projekt(sifra);
alter table komentar add foreign key (operater) references operater(sifra);
alter table komentar add foreign key (projekt) references projekt(sifra);
alter table projekt add foreign key (kategorija) references kategorija(sifra);

insert into operater (email, accName, lozinka, ime, prezime, wallet, ziro_racun) values ('test@test.com', 'Tester', md5('123'), "Originalni", "Tester", "5000", "HR7836457781665409901");
insert into kategorija (naziv) values ("Proizvod"), ("Djelatnost"), ("Dobrotvorna svrha"), ("Posao / Poslovna ideja");

