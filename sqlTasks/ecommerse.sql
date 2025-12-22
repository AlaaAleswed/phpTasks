CREATE DATABASE ecommerse;

CREATE TABLE users (
    user_id INT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    password VARCHAR(255),
    phone VARCHAR(20)
);
CREATE TABLE addresses (
    address_id INT PRIMARY KEY,
    user_id INT,
    country VARCHAR(50),
    city VARCHAR(50),
    street VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
CREATE TABLE categories (
    category_id INT PRIMARY KEY,
    category_name VARCHAR(100)
);
CREATE TABLE products (
    product_id INT PRIMARY KEY,
    name VARCHAR(150),
    price DECIMAL(10,2) 
);
CREATE TABLE product_categories (
    product_categories_id INT PRIMARY KEY,
    product_id INT,
    category_id INT,
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
CREATE TABLE carts (
    cart_id INT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
CREATE TABLE cart_items (
    cart_item_id INT PRIMARY KEY,
    cart_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (cart_id) REFERENCES carts(cart_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);
CREATE TABLE orders (
    order_id INT PRIMARY KEY,
    user_id INT,
    address_id INT,
    status VARCHAR(50),
    total_amount DECIMAL(10,2),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (address_id) REFERENCES addresses(address_id)
);
CREATE TABLE order_items (
    order_item_id INT PRIMARY KEY,
    order_id INT ,
    product_id INT ,
    quantity INT,
    price DECIMAL(10,2),
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);
CREATE TABLE payments (
    payment_id INT PRIMARY KEY,
    order_id INT,
    method VARCHAR(50),
    status VARCHAR(50),
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    amount DECIMAL(10,2),
    FOREIGN KEY (order_id) REFERENCES orders(order_id)
);
/*********************************************************************/
INSERT INTO users (user_id, name, email, password, phone) VALUES
(1, 'Alaa Aleswed', 'alaa@example.com', 'alaa123123', '0798536247'),
(2, 'Sara Omar', 'sara@example.com', 'sara123123', '0795362587');

INSERT INTO addresses (address_id, user_id, country, city, street) VALUES
(1, 1, 'Jordan', 'Amman', 'Street 1'),
(2, 2, 'Jordan', 'Zarqa', 'Street 5');

INSERT INTO categories (category_id, category_name) VALUES
(1, 'Drinks'),
(2, 'Snacks'),
(3, 'Desserts');

INSERT INTO products (product_id, name, price) VALUES
(1, 'Matrix cola', 1.50),
(2, 'cheese chips', 0.75),
(3, 'Cheesecake', 3.25);

INSERT INTO product_categories (product_categories_id, product_id, category_id) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

INSERT INTO carts (cart_id, user_id) VALUES
(1, 1),
(2, 2);

INSERT INTO cart_items (cart_item_id, cart_id, product_id, quantity) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 2, 3, 1);

INSERT INTO orders (order_id, user_id, address_id, status, total_amount) VALUES
(1, 1, 1, 'Waiting', 3.75),
(2, 2, 2, 'Completed', 3.25);

INSERT INTO order_items (order_item_id, order_id, product_id, quantity, price) VALUES
(1, 1, 1, 2, 1.50),
(2, 1, 2, 1, 0.75),
(3, 2, 3, 1, 3.25);

INSERT INTO payments (payment_id, order_id, method, status, amount) VALUES
(1, 1, 'Credit Card', 'Waiting', 3.75),
(2, 2, 'Cash', 'Completed', 3.25);
/**************************************************************************************************/
UPDATE products 
set price =0.30 
where name='matrix cola';