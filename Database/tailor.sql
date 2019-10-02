DROP DATABASE IF EXISTS tailor;
CREATE DATABASE IF NOT EXISTS tailor;
USE tailor;

CREATE TABLE IF NOT EXISTS user (
	user_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    ip_address VARCHAR(20) NOT NULL,
    create_date DATE NOT NULL,
    last_login DATE,
    last_password VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS style (
	style_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    style_code VARCHAR(10) NOT NULL,
    style_name VARCHAR(50) NOT NULL,
    style_price FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS design (
	design_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    design_code VARCHAR(10) NOT NULL,
    design_name VARCHAR(50) NOT NULL,
    design_price FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS cloth (
	cloth_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    cloth_code VARCHAR(10) NOT NULL,
    cloth_name VARCHAR(50) NOT NULL,
    cloth_price FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS suit (
	suit_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    suit_code VARCHAR(10) NOT NULL,
    suit_name VARCHAR(50) NOT NULL,
    suit_price FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS orders (
	order_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    order_status VARCHAR(20) NOT NULL,
    full_length FLOAT,
    arm_length FLOAT,
    waist FLOAT,
    thigh FLOAT,
    collar_size FLOAT,
    shoulder FLOAT,
    chest FLOAT,
    stomach FLOAT,
    total_price FLOAT,
	user_id INT,
	style_id INT,
	design_id INT,
	cloth_id INT,
	suit_id INT,
	FOREIGN KEY (user_id) REFERENCES user(user_id),
	FOREIGN KEY (style_id) REFERENCES style(style_id),
	FOREIGN KEY (design_id) REFERENCES design(design_id),
	FOREIGN KEY (cloth_id) REFERENCES cloth(cloth_id),
	FOREIGN KEY (suit_id) REFERENCES suit(suit_id)
);