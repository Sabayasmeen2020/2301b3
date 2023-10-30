select * from vw_customers;

select * from vw_products;

-- indexes

select * from customers where CustomerID = 54;
select * from customers where ContactName like 'e%';



select contactname from customers;
create index idx_contactname on customers(ContactName);  -- non clustured index

