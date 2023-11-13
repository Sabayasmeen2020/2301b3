-- roles
-- users
-- categories
-- products
-- orders

create database pharmacy;
use pharmacy;

create table roles(
	id int primary key auto_increment,
    role_name varchar(20)
);

create table users(
	id int primary key auto_increment,
    user_name varchar(20),
    user_email varchar(20) unique,
    user_phone bigint unique,
    address varchar(200),
    city varchar(20),
    country varchar(20),
    role_id int,
    foreign key (role_id) references roles(id)
);

create table categories(
	id int primary key auto_increment,
    category_name varchar(20),
    category_description varchar(200)
);

create table products (
	id int primary key auto_increment,
    pro_name varchar(20) not null,
    pro_description varchar(20) not null,
    pro_price int not null,
    pro_image varchar(200),
    pro_availabity bool,
    category_id int,
    foreign key (category_id) references categories(id)
);


create table orders(
	id int primary key auto_increment,
	order_id varchar(20) unique,
    order_date timestamp,
    qty int default(1),
    total_amount int,
    product_id int,
    user_id int,
    foreign key (product_id) references products(id),
    foreign key (user_id) references users(id)
);





