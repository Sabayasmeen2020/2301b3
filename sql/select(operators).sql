-- DQL (Data query language)
select * from users;
select * from users where id = 3;
select * from users where email = 'ahmed@gmail.com';
select name ,email from users where id = 1;

select * from products;
select * from products where product_price > 2000;
select * from products where product_price >= 2000;
select * from products where product_price < 1000;
select * from products where product_price <= 1000;
select * from products where product_price <> 800;
select * from products where product_price != 800;

select * from users;
select * from users where name like 'a%'; 
select * from users where name like '%n'; 
select * from users where name like '%ma%'; 
select * from users where name like '%____d'; 
select * from products where product_name like 'Pis%'; 










