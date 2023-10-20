-- DML (Insert, update, delete)
use maru_dry_fruits;
select * from users;
select * from products;
select * from category;
select * from orders;
insert into category (category_name) values ('Seeds'), ('Nuts'), ('Fruits');


insert into products(product_name, product_description, product_price, product_stock, product_availability, product_image,
 category_id, created_at, updated_at)
values ('Peanut', 'abcd', 1500, 500, 1, 'peanut.jpg', 2, '2023-10-18', '2023-10-18'),
		('Pistachio', 'abcd', 3000, 100, 1, 'pista.jpg', 2, '2023-10-18', '2023-10-18'),
		('kishmish', 'abcd', 2000, 200, 1, 'kishmish.jpg', 3, '2023-10-18', '2023-10-18'),
		('Sunflower seed', 'abcd', 1000, 800, 1, 'sunflower.jpg', 1, '2023-10-18', '2023-10-18');
        
update products set product_price = 1800 where id = 2;

update products set 
product_image = 'sun.jpg',
product_price = 800, 
product_description = 'Sunflower seed lelo sasty hogye hen' 
where id = 5;

delete from products where id = 4;








