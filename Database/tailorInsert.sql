INSERT INTO USER (FIRST_NAME, LAST_NAME, E_MAIL, PASSWORD, GENDER, IPADDRESS, CREATEDATE, LASTLOGIN, LASTPASSWORD, USER_TYPE) VALUES ();
INSERT INTO Design (Design_code, design_name, design_price) VALUES ();
INSERT INTO Suit (Suit_code, Suit_name, Suit_price) VALUES ();
INSERT INTO Style (Style_code, Style_name, Style_price) VALUES ();
INSERT INTO Cloth (Cloth_code, Cloth_name, Cloth_price) VALUES ();
INSERT INTO ORDERS (ORDERS_STATUS, TOTAL_PRICE, E_MAIL, fk_USER_ID, fk_Style_id, fk_Cloth_id, fk_Design_id, fk_Suit_id) VALUES ();
INSERT INTO SIZES (ORDER_ID, FULL_LENGTH, ARM_LENGTH, WAIST, THIGH, COLLAR_SIZE, SHOULDER, CHEST, STOMACH) VALUES ();