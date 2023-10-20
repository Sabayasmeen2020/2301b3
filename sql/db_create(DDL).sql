create database maru_dry_fruits;
use maru_dry_fruits;

create table users(
	id int,
    name varchar(200),
    email varchar(200),
    phone bigint,
    password varchar(200),
    address varchar(200),
    city varchar(200)
);

alter table users add column city varchar(200) after address;
alter table users modify phone varchar(200);
alter table users drop column city;

select * from users;

insert into users (id, name, email, phone, password, address, city, country) values
(1, 'Ali', 'ali@gmail.com', '0314256763', 'abc123', 'ghar', 'karachi', 'pakistan');

insert into users (id, name, email, phone, password, address, city, country) values
(null,null, 'ahad@gmail.com', '03146756753', 'pakistan123', 'ghar', 'karachi', 'pakistan');


drop table users;

create table users(
	id int primary key auto_increment,
    name varchar(200) not null,
    email varchar(200) unique not null,
    phone bigint unique not null,
    password varchar(200) not null,
    address varchar(200) null,
    city varchar(200) not null,
    country varchar(200) default 'Pakistan',
    role_id int unsigned
);

insert into users (name, email, phone, password, address, city, country) values
('Hammad', 'hammad@gmail.com', '6345657667', 'abc123', 'ghar', 'karachi', 'pakistan');

insert into users (name, email, phone, password, address, country, city) values
('Hammad', 'hammad1@gmail.com', '6375657667', 'abc123', 'ghar','pakistan', 'karachi');


create table products(
	id int primary key auto_increment,
    product_name varchar(200) not null,
    product_description varchar(500),
    product_price int not null,
    product_stock int,
    product_availability boolean,
    product_image varchar(200) not null,
    category_id int,
    created_at timestamp,
    updated_at date
);

select * from products;

create table category(
	id int primary key auto_increment,
    category_name varchar(200)
);


create table roles(
	id int primary key auto_increment,
    role_name varchar(200)
);


insert into roles(role_name) values ('Administrator'), ('user');
select * from roles;
select * from users;

insert into users (name, email, phone, password, address, country, city, role_id) values
('Ahad', 'ahad1@gmail.com', '63676757667', 'ahad123', 'ghar','pakistan', 'karachi', 2);

create table orders(
	id int primary key auto_increment, 
    order_number varchar(200) unique,
    user_id int,
    product_id int,
    order_qty int,
    order_status int,
    order_date datetime
);

-- 0 => pending
-- 1 => confirmed
-- 2 => logistics
-- 3 => shipped
-- 4 => delivered


drop database maru_dry_fruits;







