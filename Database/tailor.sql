DROP database IF exists tailor;
CREATE DATABASE if not exists Tailor;
USE Tailor;

CREATE TABLE IF NOT EXISTS USER (
    USER_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    FIRST_NAME VARCHAR(50) NOT NULL,
    LAST_NAME VARCHAR(50) NOT NULL,
    E_MAIL VARCHAR(50) NOT NULL,
    PASSWORD VARCHAR(50) NOT NULL,
    GENDER VARCHAR(10) NOT NULL,
    IPADDRESS INT,
    CREATEDATE DATETIME,
    LASTLOGIN VARCHAR(50),
    LASTPASSWORD VARCHAR(50),
    USER_TYPE VARCHAR(50)
);
 
CREATE TABLE IF NOT EXISTS Design (
    Design_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Design_code INT NOT NULL,
    design_name VARCHAR(50) NOT NULL,
    design_price INT NOT NULL
);
CREATE TABLE IF NOT EXISTS Suit (
    Suit_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Suit_code VARCHAR(20) NOT NULL,
    Suit_name VARCHAR(50) NOT NULL,
    Suit_price INT NOT NULL
);
CREATE TABLE IF NOT EXISTS Style (
    Style_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Style_code INT NOT NULL,
    Style_name VARCHAR(50) NOT NULL,
    Style_price INT NOT NULL
);
CREATE TABLE IF NOT EXISTS Cloth (
    Cloth_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Cloth_code INT NOT NULL,
    Cloth_name VARCHAR(50) NOT NULL,
    Cloth_price INT NOT NULL
);

CREATE TABLE IF NOT EXISTS ORDERS (
    ORDER_ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ORDERS_STATUS VARCHAR(50) NOT NULL,
    FULL_LENGTH FLOAT,
    ARM_LENGTH FLOAT,
    WAIST FLOAT,
    THIGH FLOAT,
    COLLAR_SIZE FLOAT,
    SHOULDER FLOAT,
    CHEST FLOAT,
    STOMACH FLOAT,
    TOTAL_PRICE FLOAT NOT NULL,
    fk_USER_ID INT,
    fk_Style_id INT,
    fk_Cloth_id INT,
    fk_Design_id INT,
    fk_Suit_id INT,
    FOREIGN KEY (fk_USER_ID)
        REFERENCES USER (USER_ID),
    FOREIGN KEY (fk_Style_id)
        REFERENCES Style (Style_id),
    FOREIGN KEY (fk_Cloth_id)
        REFERENCES Cloth (Cloth_id),
    FOREIGN KEY (fk_Design_id)
        REFERENCES Design (Design_id),
    FOREIGN KEY (fk_Suit_id)
        REFERENCES Suit (Suit_id)
);
 