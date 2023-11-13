-- CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CustomerOrders`()
-- BEGIN
-- 	select OrderID, OrderDate, CustomerName, ContactName, Address, City, Country
-- 	from orders o join customers c on o.CustomerID = c.CustomerID;
-- END;
--  
 Call sp_CustomerOrders();
 
 Call sp_products();
 
 call sp_productWithPrice(10,20);
 
 call sp_InsertRecordCustomer('Usman', 'Usman', 'Ghar', 'karachi', 'Pakistan', 23452);
 
 