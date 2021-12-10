create database if not exists agendadb;

use agendadb;

create TABLE contacts(
    name varchar(15) not null,
    number int
);