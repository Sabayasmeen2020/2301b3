create database maru_dry_fruit;
drop database maru_dry_fruit;

use maru_dry_fruit;

create table users(
	id int,
    name varchar(50),
    email varchar(200),
    phone bigint,
    password varchar(200),
    address varchar(200)
);

alter table users add column address varchar(200);

drop table users;



































