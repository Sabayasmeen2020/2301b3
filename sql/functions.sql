select max(price) from products;
select concat("Hello" , " ", "Ali");
select curdate();
select current_date();
select current_time();
select current_timestamp();

select greeting('Ahmed');
select greeting(contactname) from customers;
select discount(100, 0.5);
select *,discount(Price, 0.1) as Price_after_discount from products where ProductName like 'a%';

