tablas:

CREATE TABLE available (
   available FLOAT
);

CREATE TABLE banks (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50),
   id_country INT,
   KEY (id)
);

CREATE TABLE countries (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50),
   KEY (id)
);

CREATE TABLE IBANs (
   id INT NOT NULL AUTO_INCREMENT,
   id_bank INT,
   IBAN VARCHAR(50),
   KEY (id)
);

CREATE TABLE projects (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50),
   KEY (id)
);

CREATE TABLE work_offers (
   id INT NOT NULL AUTO_INCREMENT,
   id_proponent INT,
   id_project INT,
   offer_money FLOAT,
   description VARCHAR(200),
   KEY (id)
);

CREATE TABLE people (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50),
   email VARCHAR(50),
   phone VARCHAR(50),
   KEY (id)
);

CREATE TABLE phones (
   id INT NOT NULL AUTO_INCREMENT,
   phone_number VARCHAR(50),
   id_people INT,
   KEY (id)
);

CREATE TABLE payment_methods (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50),
   KEY (id)
);

CREATE TABLE payments (
   id INT NOT NULL AUTO_INCREMENT,
   id_from INT,
   id_from_bank INT,
   id_from_IBAN INT,
   if_from_phone INT,
   id_payment_method INT,
   id_to INT,
   id_to_bank INT,
   id_to_IBAN INT,
   id_to_phone INT,
   payment_amount FLOAT,
   payment_datetime DATETIME,
   id_project INT,
   task_description VARCHAR(200),
   KEY (id)
);
