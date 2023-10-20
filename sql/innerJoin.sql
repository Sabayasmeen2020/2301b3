use demo_ecomm;
select count(country) as no_of_suppliers, country from suppliers group by country 
order by no_of_suppliers desc limit 1;

select count(country) As no_of_customers, country from customers group by country; 


select orderid, contactname, address, city, orderdate from orders join customers 
on orders.customerid = customers.customerid;


select productname, unit, price, p.CategoryID, categoryname from products p join categories c
on p.CategoryID = c.CategoryID;







