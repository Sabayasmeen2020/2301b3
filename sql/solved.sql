-- 1 
select count(od.ProductID) as no_of_product , p.ProductName from order_details od join products p on 
od.ProductID = p. ProductID group by od.ProductID order by no_of_product desc limit 10;

-- 2
select * from customers where customerID % 2 <> 0; 

-- 3

select count(country) as no_of_customers, country from customers group by country;

-- 4
-- by yourself

-- 5
select p.ProductName, od.Quantity , (p.price * od.Quantity) as total_amount, o.orderdate from order_details od join products p 
on od.ProductID = p.ProductID join orders o on o.orderID = od.orderid 
where orderdate like '%1997-01%' order by total_amount desc limit 1;

-- year(orderdate) = '1997' AND month(orderdate) = '1'

-- 6
select * from customers where CustomerID <= (select count(*) / 2 from customers);

-- 7
select count(od.ProductID) as no_of_product , p.ProductName from order_details od join products p on 
od.ProductID = p. ProductID group by od.ProductID having no_of_product <= 5;

-- 8

-- ask to ubaid

-- 9

select p.ProductName, od.Quantity , (p.price * od.Quantity) as total_amount, o.orderdate from order_details od join products p 
on od.ProductID = p.ProductID join orders o on o.orderID = od.orderid 
 order by total_amount desc limit 3;
 
 -- 10
 -- ask to ahad
 
 -- 11
 
 select productname, unit,price, (price + price * 0.05) as inceremented_price from products;
 
 -- 12
 
 -- ask to shayan
 
 -- 13
 
select count(city) as no_of_city, country from customers group by country;

-- 14

select count(*) as total_count from customers where country = 'spain';
