select * from vw_customers;

select * from vw_products;

-- indexes

select * from customers where CustomerID = 54;
select * from customers where ContactName like 'e%';



select contactname from customers;
create index idx_contactname on customers(ContactName);  -- non clustured index


select * from employees where EmployeeID = 4;
select * from employees where FirstName = 'Robert';
create index idx_fname on employees(FirstName);
select Firstname from employees;
drop index idx_fname on employees;












