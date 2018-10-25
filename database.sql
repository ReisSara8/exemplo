DROP DATABASE IF EXISTS errand_db;
CREATE DATABASE IF NOT EXISTS errand_db;
USE errand_db;

CREATE TABLE users(
	id INT(11) PRIMARY KEY AUTO_INCREMENTE,
    first_name VARCHAR(255) NULL NOT NULL,
    last_name VARCHAR(255) NULL NOT NULL,
    email VARCHAR(300) NULL NOT NULL,
	name VARCHAR(255) NULL NOT NULL,
    password VARCHAR(255) NULL NOT NULL,
    register_date TIMESTAMP CURRENT_TIMESTAMP
        
);

INSERT INTO users (name, password) VALUES
('rico', 'juarez', 'ricojj@gmail.com', 'rico', '1234');

SELECT * FROM users;