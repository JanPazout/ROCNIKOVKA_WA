Webova aplikace pro zpravu autobazaru

INFORMACE:
Tento web funguje pres jazyky PHP, HTML, JAVASCRIPT  a SQL.
Na webu je navbar s 4strankami: domu, inzeraty, profil, podpora.
Kazda stranka je samostatny php soubor a kazdy pouziva vlastni CSS a bootstrap.
Pro propojeni s databazemi jesou zde 3 skripty(login, register, connection).
Ve slozce images jsou obrazky pro inzeraty aut.

SPUSTENI:
Nainstalujte si kod z github repository, a otevrete ho ve vasem programu na webove stranky, v mem pripade WebStorm.
Zkontrolujte, zda v kodech nejsou chyby a pote si zapnete napriklad MySQL Workbench.
Zde pouzijte tento nasledujici SQL kod:

create table Advert(
 id int primary key auto_increment,
 seller_id int,
 title varchar(20) not null,
 description text not null,
 price int not null,
 foreign key (seller_id) references Users(id)
);

create table Users(
    id          int auto_increment primary key,
    username    varchar(50) not null,
    email       varchar(100) not null,
    password    varchar(100) not null
);


select * from Users

V database connection vyplnte jmeno databaze, username, password a server name.
Pretahnete vse do htdocs folderu pro XAMPP, a spustte XAMPP Apache a MySQL.
Do vyhledavace napise localhost, a vse by melo fungovat.