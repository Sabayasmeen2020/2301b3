select c.CustomerID, ContactName, OrderID, OrderDate from customers c left join orders o 
on c.CustomerID = o.CustomerID;

select c.CustomerID, ContactName, OrderID, OrderDate from orders c right join customers o 
on c.CustomerID = o.CustomerID;