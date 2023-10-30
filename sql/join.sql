select productName, categoryName, unit, Price, suppliername, contactname from products p 
inner join categories c on p.categoryID = c.categoryID join suppliers s on s.supplierID = p.supplierID
where price > 1 order by productname;


select od.orderId,contactname, orderDate, productName, price,  quantity from order_details od join orders o on od.orderID = o.orderID
join products p on od.productId = p.productId join customers c on c.customerID = o.customerID; 
