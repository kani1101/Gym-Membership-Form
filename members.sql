CREATE DATABASE gymdb; 
USE gymdb; 
CREATE TABLE members (     
  id INT AUTO_INCREMENT PRIMARY KEY,     
  name VARCHAR(100),     
  email VARCHAR(100),     
  plan VARCHAR(50),     
  trainer VARCHAR(50) 
  ); 
