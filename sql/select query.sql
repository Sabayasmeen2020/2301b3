select * from customers;
select * from products;
select * from orders;

-- DQL (Data query language)
select * from customers where ContactName = 'Maria Anders';
select * from customers where ContactName like 'Ana%';
select * from customers where ContactName like '%ea%';
select * from customers where ContactName like '%e';
select * from customers where ContactName like '%e_____________%';

select * from products;
select * from products where Price > 10 AND Price < 30;
select * from products where Price >= 10 AND Price <= 30;
select * from products where Price between 30 AND 60;

select * from customers where Country in('Germany', 'Mexico', 'Spain');
select * from customers where Country not in('Germany', 'Mexico', 'Spain');
select * from customers where Country = 'Germany' or country = 'mexico' or country = 'spain';

-- shorthand fucntions  
select sum(price) AS sum_of_product_price from products;
select max(price) from products;
select min(price) from products;
select avg(price) from products;
select count(*) from products;
select concat(firstname,' ', lastname) AS Employee_name from employees;

select * from customers order by ContactName;
select * from customers order by ContactName desc;

select * from orders order by orderid desc;

select * from products where price = (select max(price) from products); -- subquery

select ContactName from customers where CustomerID in(select distinct customerid from orders);


